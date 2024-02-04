<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Pembelian;
use App\Models\Layanan;
use App\Models\Kategori;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\digiFlazzController;
use App\Http\Controllers\VipResellerController;
use App\Http\Controllers\ApiGamesController;
use App\Http\Controllers\MengtopupController;
use App\Http\Controllers\AlpharamzController;
use App\Http\Controllers\SmileOneController;
use App\Http\Controllers\JulyhyusController;
use Illuminate\Support\Facades\Http;

class TriPayCallbackController extends Controller
{
	protected $api;

    public function __construct()
    {
        $this->api = \DB::table('setting_webs')->where('id',1)->first();
    }
	
    public function handle(Request $request)
    {
        $callbackSignature = $request->server('HTTP_X_CALLBACK_SIGNATURE');
        $json = $request->getContent();
        $signature = hash_hmac('sha256', $json, $this->api->tripay_private_key);

        if ($signature !== (string) $callbackSignature) {
            return 'Invalid signature';
        }

        if ('payment_status' !== (string) $request->server('HTTP_X_CALLBACK_EVENT')) {
            return 'Invalid callback event, no action was taken';
        }

        $data = json_decode($json);
        $ref = $data->reference;

        $invoice = Pembayaran::where('reference', $ref)
            ->where('status', 'Belum Lunas')
            ->first();

        $order_id = $invoice->order_id;
        $dataPembeli = Pembelian::where('order_id', $order_id)->first();
        $dataLayanan = Layanan::where('layanan', $dataPembeli->layanan)->first();
        $dataKategori = Kategori::where('id', $dataLayanan->kategori_id)->first();
        
        $zoneSend = $dataPembeli->zone == null ? "" : "($dataPembeli->zone)";

        $pesan = 
            "*PEMBAYARAN BERHASIL*\n\n" .
            // "No. Invoice: *$order_id*\n" .
            "Invoice : " . env("APP_URL") . "/pembelian/invoice/$order_id\n" .
            "Layanan : *$dataPembeli->layanan*\n" .
            // "Data : *$dataPembeli->user_id $zoneSend*\n" .
            "Jumlah : *Rp. " . number_format($dataPembeli->harga, 0, '.', '.') . ",-*\n" .
            "Status Pembayaran : *Dibayar*\n" .
            "Metode Pembayaran : *$request->payment_method*\n\n" .
            "Mohon ditunggu ya, kami sedang memproses pesanan mu ;)\n\n" .
            "*Estimasi proses :*\n" .
            "• 0-5 Menit, max 24 Jam.\n\n" .
            "© ". env("APP_NAME") ."";

        $pesanAdmin =
            "*PEMBAYARAN BERHASIL*\n\n" .
            "Invoice : " . env("APP_URL") . "/pembelian/invoice/$order_id\n" .
            "Layanan : *$dataPembeli->layanan*\n" .
            // "Data : *$dataPembeli->user_id $zoneSend*\n" .
            "Jumlah : *Rp. " . number_format($invoice->harga, 0, '.', '.') . ",-*\n" .
            "Status Pembayaran : *Dibayar*\n" .
            "Metode Pembayaran : *$invoice->metode*\n\n" .
            "*KONTAK PEMBELI*\n" .
            "No. HP : $invoice->no_pembeli\n\n" .
            "© ". env("APP_NAME") ."";

        $uid = $dataPembeli->user_id;
        $zone = $dataPembeli->zone;
        $provider_id = $dataLayanan->provider_id;

        if (!$invoice) {
            return 'Invoice not found or current status is not UNPAID';
        }

        if (intval($data->total_amount) !== (int) $invoice->harga) {
            return 'Invalid amount';
        }

       if ($data->status == "PAID") {
            
                $requestPesan = $this->msg($this->api->nomor_admin, $pesanAdmin);
		        $pesanPembeli = $this->msg($invoice->no_pembeli, $pesan);
           
                if($dataLayanan->provider == "digiflazz"){
                    $provider_order_id = rand(1, 10000);
                    $digiFlazz = new digiFlazzController;
                    $order = $digiFlazz->order($uid, $zone, $provider_id, $provider_order_id);
    
                    if ($order['data']['status'] == "Pending" || $order['data']['status'] == "Sukses") {
                        $order['data']['status'] = true;
                        $order['transactionId'] = $provider_order_id;
                    } else {
                        $order['data']['status'] = false;
                    }
                }else if($dataLayanan->provider == "vip"){
                    $vip = new VipResellerController;
                    $order = $vip->order($uid, $zone, $provider_id);
                    
                    if($order['result']){
                        $order['data']['status'] = $order['result'];
                        $order['transactionId'] = $order['data']['trxid'];
                    }else{
                        $order['data']['status'] = false;
                    }
                }else if($dataLayanan->provider == "apigames"){
                    $provider_order_id = rand(1, 10000);
                    $apigames = new ApiGamesController;
                    $order = $apigames->order($uid, $zone, $provider_id, $provider_order_id);
    
                    if($order['data']['status'] == "Sukses"){
                        $order['transactionId'] = $provider_order_id;
                        $order['data']['status'] = true;
                    }else{
                        $order['data']['status'] = false;
                    }
                }else if($dataLayanan->provider == "apigamesv2"){
                    $provider_order_id = rand(1, 10000);
                    $apigamesv2 = new ApiGamesV2Controller;
                    $order = $apigamesv2->order($uid, $zone, $provider_id, $provider_order_id);
    
                    if($order['data']['status'] == "Sukses"){
                        $order['transactionId'] = $provider_order_id;
                        $order['data']['status'] = true;
                    }else{
                        $order['data']['status'] = false;
                    }
                }else if($dataLayanan->provider == "meng"){
                    $meng = new MengtopupController();
                    $order = $meng->order($uid, $zone, $provider_id);
                    
                    if($order['status']){
                        $order['transactionId'] = $order['data']['id'];
                        $order['data']['status'] = true;
                    }else{
                        $order['data']['status'] = false;
                    }
                }else if($dataLayanan->provider == "alpha"){
                    $alpha = new AlpharamzController();
                    $order = $alpha->order($uid, $zone, $provider_id);
                    
                    if($order['status']){
                        $order['transactionId'] = $order['data']['id'];
                        $order['data']['status'] = true;
                    }else{
                        $order['data']['status'] = false;
                    }  
                }else if($dataLayanan->provider == "joki"){
                        $order['data']['status'] = true;
                }else if($dataLayanan->provider == "manual"){
                        $order['data']['status'] = true;
                }else if($dataLayanan->provider == "gift_skin"){
                        $order['data']['status'] = true;
                }else if($dataLayanan->provider == "dm_vilog"){
                        $order['data']['status'] = true;
                }
                
            
                if ($order['data']['status']) { // Jika pembelian sukses
                
                $pesanSukses = 
                "*PESANAN SUKSES*\n\n" .
                "Invoice : " . env("APP_URL") . "/pembelian/invoice/$order_id\n" .
                "Layanan : *$dataPembeli->layanan*\n" .
                // "Data : *$dataPembeli->user_id ($dataPembeli->zone)*\n" .
                "Harga : *Rp. " . number_format($invoice->harga, 0, '.', '.') . ",-*\n" .
                "Status Pesanan : *Sukses*\n\n" .
                "Terima kasih, sudah berbelanja. ;)\n\n" .
                "© ". env("APP_NAME") ."";
               
               $pesanSuksesAdmin = 
                "*PESANAN SUKSES*\n\n" .
                "Invoice : " . env("APP_URL") . "/pembelian/invoice/$order_id\n" .
                "Layanan: *$dataPembeli->layanan*\n" .
                // "Data : *$dataPembeli->user_id ($dataPembeli->zone)*\n" .
                "Harga: *Rp. " . number_format($invoice->harga, 0, '.', '.') . ",-*\n" .
                "Status Pesanan : *Sukses*\n\n" .
                "*KONTAK PEMBELI*\n" .
                "No. HP : $invoice->no_pembeli\n\n" .
                "© ". env("APP_NAME") ."";

                $requestSuksesAdmin = $this->msg($this->api->nomor_admin, $pesanSuksesAdmin);
		$requestSukses = $this->msg($invoice->no_pembeli, $pesanSukses);

                    $invoice->update(['status' => 'Sukses']);

                    $dataPembeli->update([
                        'provider_order_id' => isset($order['transactionId']) ? $order['transactionId'] : 0,
                        'status' => 'Sukses',
                        'log' => json_encode($order)
                    ]);

                } else { //jika pembelian gagal

                    $dataPembeli->update([
                        'status' => 'Batal',
                        'log' => json_encode($order)
                    ]);

                }
            
            $invoice->update(['status' => 'Lunas']);

            return response()->json(['success' => true]);

        } else if ($data->status == "EXPIRED" || $data->status == "FAILED") {

            $invoice->update(['status' => 'Batal']);
            return response()->json(['success' => true]);

        } else {

            return response()->json(['error' => 'Unrecognized payment status']);

        }
    }
    
    public function msg($nomor, $msg)
    {
        $api = \DB::table('setting_webs')->where('id',1)->first();
        
        $data = [
            'api_key' => $api->wa_key,
            'number'  => $api->wa_number,
            'receiver'  => "$nomor",
            'data' => array("message" => "$msg")
        ];
        
         $curl = curl_init();
          curl_setopt_array($curl, [
           CURLOPT_URL => "https://araara.my.id/api/send-message",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode($data),
          CURLOPT_HTTPHEADER => [
    "Accept: */*",
    "Content-Type: application/json",
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
        //return $response;
    }
     
}