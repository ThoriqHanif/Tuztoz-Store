<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Layanan;
use App\Models\Kategori;
use App\Models\Pembelian;
use App\Models\Pembayaran;
use App\Http\Controllers\VipResellerController;
use App\Http\Controllers\IrvanKedeController;
use App\Http\Controllers\SmileOneController;
use App\Http\Controllers\ApiGamesController;
use App\Http\Controllers\digiFlazzController;
use App\Http\Controllers\AlpharamzController;
use App\Http\Controllers\bangjeffController;
use App\Http\Controllers\MengtopupController;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        if(!$request->api_key || !$request->service || !$request->target){
            return response()->json(['status' => false, 'message' => 'Parameter tidak valids']);
        }
        
        $user = User::where('api_key', $request->api_key)->first();
        $service = Layanan::where('id', $request->service)->where('status', 'available')->first();
        
        if(!$user) return response()->json(['status' => false, 'message' => 'Api key tidak valid']);
        if(!$service) return response()->json(['status' => false, 'message' => 'Service tidak valid']);
        
        $kategori = Kategori::where('id', $service->kategori_id)->first();
        
        if(!$kategori) return response()->json(['status' => false, 'message' => 'INTERNAL ERROR, CODE 1']);
        
        if($kategori->tipe == "joki" || $kategori->tipe == "gift") {
            return response()->json(['status' => false, 'message' => 'Service ini tidak dapat dibeli melalui API']);
        }
        
        $data = explode("|", $request->target);
        
        if($kategori->tipe == "smm" && !isset($data[1])) return response()->json(['status' => false, 'message' => 'Format target tidak valid']);
        if($kategori->server_id && !isset($data[1])) return response()->json(['status' => false, 'message' => 'Format target tidak sesuai']);
        if($kategori->tipe == "smm" && $data[1] < $service->min) return response()->json(['status' => false, 'message' => 'Jumlah pembelian kurang dari minimum']);
        if($kategori->tipe == "smm" && $data[1] > $service->max) return response()->json(['status' => false, 'message' => 'Jumlah pembelian lebih dari maksimum']);
        
        $latestOrder = Pembelian::where('user_id', $data[0])->where('created_at', '<', now())->whereIn('status', ['Pending', "Success"])->latest()->first();
        if($latestOrder){
            $latestPayment = Pembayaran::where('order_id', $latestOrder->order_id)->where('metode', 'Saldo')->latest()->first();
            if($latestPayment){
                $latestPaymentDate = new \DateTime($latestPayment->created_at);
                $diffrentTime = $latestPaymentDate->diff(new \DateTime(now()));
                $totalminutes = $diffrentTime->days * 24 * 60;
                $totalminutes += $diffrentTime->h * 60;
                $totalminutes += $diffrentTime->i;
                if($totalminutes <= 2) return response()->json(['status' => false, 'message' => 'Anda memiliki orderan yang sama. Harap mencoba kembali 2 menit kedepan']);
            }
        }
        
        if($user->role == "Admin" || $user->role == "Platinum"){
            $harga = $service->harga_platinum;
        }else if($user->role == "Gold"){
            $harga = $service->harga_gold;
        }else{
            $harga = $service->harga_reseller;
        }
        
        if($kategori->tipe == "smm"){
            $harga *= $data[1] / 1000;
        }
        
        if($user->balance < $harga) return response()->json(['status' => false, 'message' => 'Saldo anda tidak mencukupi']);
        
        $userBalance = $user->balance;
        
        $user->update([
            'balance'  => $userBalance - $harga
        ]);
        
        $order_id = "JSG".Str::random('6');        
        
        if($service->provider == "digiflazz"){
            $digi = new digiFlazzController;
            $provider_order_id = $order_id;
            $order = $digi->order($data[0], isset($data[1]) ? $data[1] : '', $service->provider_id, $provider_order_id);

            if ($order['data']['status'] == "Pending" || $order['data']['status'] == "Sukses") {
                $order['status'] = true;
            } else {
                $order['status'] = false;
            }   
        }else if($service->provider == "vip"){
            $vip = new VipResellerController;
            $order = $vip->order($data[0], isset($data[1]) ? $data[1] : '', $service->provider_id);
            
            if($order['result']){
                $order['status'] = true;
                $provider_order_id = $order['data']['trxid'];
            }else{
                $order['status'] = false;
            }
        }else if($service->provider == "apigames"){
            $provider_order_id = $order_id;
            $apigames = new ApiGamesController;
            $order = $apigames->order($data[0], isset($data[1]) ? $data[1] : '', $service->provider_id, $provider_order_id);
            if ($order['data']['status'] == "Sukses") {
                $order['transactionId'] = $provider_order_id;
                $order['status'] = true;
            } else {
                $order['status'] = false;
            }         
        }else if($service->provider == "meng"){
            $meng = new MengtopupController();
            $order = $meng->order($request->uid, $request->zone, $dataLayanan->provider_id);

            if($order['status']){
                $order['status'] = true;
                $provider_order_id = $order['data']['id'];
            }else{
                $order['status'] = false;
            }
        }else if($service->provider == "alpha"){
            $alpha = new AlpharamzController();
            $order = $alpha->order($request->uid, $request->zone, $dataLayanan->provider_id);
    
            if($order['status']){
                $order['status'] = true;
                $provider_order_id = $order['data']['id'];
            }else{
                $order['status'] = false;
            }
        }else if($service->provider == "bangjeff"){
            $bj = new bangjeffController;
            $order = $bj->buyv2($order_id, $request->uid, $request->zone, $dataLayanan->provider_id, $kategori->tipe);
            if(!$order['error']){
                $provider_order_id  = $order['data']['invoiceNumber'];
                $order['status'] = true;
            }else{
                $order['status'] = false;
            }
        }else{
            $order['status'] =true;
            $provider_order_id = "MANUAL";
        }        
        
        if($order['status']){
            $pesan = "Pembayaran dengan order id : $order_id *TELAH LUNAS*\n\n" .
                "LAYANAN : $service->layanan\n" .
                "ID : ".$data[0].(isset($data[1]) ? "(".$data[1].")" : '') ."\n" .
                "NICKNAME : $request->nickname\n" .
                "METODE PEMBAYARAN : Saldo\n" .
                "HARGA : Rp. " . number_format($service->harga, 0, '.', ',') . "\n\n" .
                "*Kontak Pembeli*\n" .
                "No HP : $user->whatsapp\n" .
                "Invoice : " . env("APP_URL") . "/pembelian/invoice/$order_id";


            $requestPesan = $this->msg($user->whatsapp, $pesan);
            $requestPesanAdmin = $this->msg(ENV("NOMOR_ADMIN"), $pesan);
            
            $pembelian = new Pembelian();
            $pembelian->username = $user->username;
            $pembelian->order_id = $order_id;
            $pembelian->user_id = $data[0];
            $pembelian->zone = isset($data[1]) ? $data[1] : '';
            $pembelian->nickname = $data[0]."|".(isset($data[1]) ? $data[1] : '');
            $pembelian->layanan = $service->layanan;
            $pembelian->harga = $harga;
            $pembelian->profit = $service->harga * $service->profit / 100;
            $pembelian->status = 'Success';
            $pembelian->provider_order_id = $provider_order_id ? $provider_order_id : "";
            $pembelian->log = json_encode($order);
            $pembelian->tipe_transaksi = "game";                
            $pembelian->save();

            $pembayaran = new Pembayaran();
            $pembayaran->order_id = $order_id;
            $pembayaran->harga = $harga;
            $pembayaran->no_pembayaran = "Saldo";
            // $pembayaran->email_pembeli = $request->email;
            $pembayaran->no_pembeli = $user->whatsapp;
            $pembayaran->status = 'Lunas';
            $pembayaran->metode = "Saldo";
            $pembayaran->save();     
        }else{
            $user->update([
                'balance' => $userBalance
            ]);
            return response()->json([
                'status' => false,
                'message' => 'Server Error'
            ]);
        }
        
        return response()->json(['status' => true, 'data' => array('trx_id' => $order_id, 'status' => 'Pending')]);
    }
    
    public function msg($nomor, $pesan)
    {
$url = 'http://192.18.132.182:80/sendMessage';

$data = [
    'to' => '62895346404969@s.whatsapp.net',
    'text' => $pesan,
    'options' => null
];

try {
    $response = Http::post($url, $data);

    $contents = $response->body();

    return $contents;
} catch (Exception $e) {
    return 'Error: ' . $e->getMessage();
}
    }    
}