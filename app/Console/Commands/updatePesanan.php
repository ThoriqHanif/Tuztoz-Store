<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Pembelian;
use App\Models\Layanan;
use App\Models\Kategori;
use App\Http\Controllers\digiFlazzController;
use App\Http\Controllers\ApiGamesController;
use App\Models\Pembayaran;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderSuccess;

class updatePesanan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'updatePesanan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $pesanan = Pembelian::whereIn('status', ['Pending', 'Processing'])
                             ->get();
        
        $digiFlazz = new digiFlazzController;
        $apigames = new ApiGamesController;
        foreach($pesanan as $data)
        {
            $pesan = "Pembelian *$data->layanan* Telah Berhasil Dikirim, Silahkan Cek Akun Anda, Terima kasih Sudah Order Di GEMPAY STORE\n\n".
                     "Jika Pesanan Anda Belum Masuk Harap Hubungi Admin\n".
                     "Whatsapp : ".env('NOMOR_ADMIN');

            $pembayaran = Pembayaran::where('order_id', $data->order_id)->first();
            $layanan = Layanan::where('layanan', $data->layanan)->first();
            if(!$layanan) continue;
            $user = User::where('username', $data->username)->first();
            $kategori = Kategori::where('id', $layanan->kategori_id)->first();
            
            
            try{
                $providerId = $layanan->provider_id;
                $provider_order_id = $data->provider_order_id;
                $uid = $data->user_id;
                $zone = $data->zone;
            
                $provider_order_id = $data->provider_order_id;
                
                if($kategori->tipe == "game" ||$kategori->tipe == "pulsa" || $kategori->tipe == "populer" || $kategori->tipe == "topup"||$kategori->tipe == "voucher" ||$kategori->tipe == "pulsadata" || $kategori->tipe == "tagihan"){
                    if($layanan->provider == "digiflazz"){
                        $checking = $digiFlazz->status($provider_order_id, $providerId, $uid, $zone);
                        
                    }else if($layanan->provider == "apigames"){
                        $checking = json_decode($apigames->status($provider_order_id),true);
                    }else{
                            $checking['data']['status'] = "success";
                            $checking['data']['sn'] = $data->nickname.'/'.$data->order_id.'/-';
                        }                        
                    }else{
                        continue;
                    }
                    
                    $status_pembelian = '';
                    $status_check = false;
                        // dd($checking);
                    if (strtolower($checking['data']['status']) == "sukses" || strtolower($checking['data']['status']) == "success") {
                        $status_check = true;
                        $status_pembelian = "Success";
                        // dd("HIT");
                        dump($data->order_id);
                    }else if($checking['data']['status'] == "Gagal" || $checking['data']['status'] == "Error" || 
                             $checking['data']['status'] == "error" || $checking['data']['status'] == "Partial"){
                        if($checking['data']['status'] == "Partial" || strtolower($checking['data']['status']) == "error"){
                            $remains = isset($checking['data']['remains']) ? $checking['data']['remains'] : 0;
                        }
                        
                        $status_check = true;
                        $status_pembelian = "Batal";
                    }
                    
                    $dataPembelian['orderid'] = $data->order_id;
                    $dataPembelian['layanan'] = $data->layanan;
                    $dataPembelian['createdat'] = $data->created_at;
                    $dataPembelian['kategori'] = $kategori->nama;
                    $dataPembelian['metode'] = $pembayaran->metode;
                    $dataPembelian['tipe'] = $kategori->tipe;
                    if($kategori->tipe == "game" ||$kategori->tipe == "pulsa" || $kategori->tipe == "populer"){
                        $dataPembelian['user_id'] = $data->user_id;
                        $dataPembelian['zone'] = $data->zone;
                        $dataPembelian['nickname'] = $data->nickname;
                    }else if($kategori->tipe == "smm"){
                        $dataPembelian['user_id'] = $data->user_id;
                        $dataPembelian['zone'] = $data->zone;
                    }
                    $dataPembelian['harga'] = $data->harga;
    
                    if($status_check){
                        if($status_pembelian == "Success"){
                            
                            $requestPesan = $this->msg($pembayaran->no_pembeli,$pesan); 
                            Pembelian::where('provider_order_id', $provider_order_id)
                                ->update(['status' => $status_pembelian, 'log' => json_encode($checking)]);
                        }else{
                            if($status_pembelian == "Batal"){
                                if(isset($remains)){
                                    $data->harga *= $remains / $data->zone;
                                }
                                
                                if($user){
                                    $user->update([
                                        'balance'  => $user->balance + $data->harga
                                    ]);
                                }
                            }
                            
                            Pembelian::where('provider_order_id', $provider_order_id)
                                ->update(['status' => $status_pembelian, 'log' => json_encode($checking)]);
                        }
                    }else{
                                        
                    }
                
            }catch (\Exception $e){
                // continue;
                // dump($dataPembelian);
                throw $e;
            }
        }

    }
    
    public function msg($nomor, $msg)
    {
        $data = [
            'api_key' => ENV('WAYSEND_KEY'),
            'sender'  => ENV("WAYSEND_NUMBER"),
            'number'  => "$nomor",
            'message' => "$msg"
        ];
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://waysender-v2.ridped.com/apiv2/send-message.php",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode($data))
        );
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        return $response;
    }    
}
