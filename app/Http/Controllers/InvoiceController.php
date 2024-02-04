<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Support\Carbon;
use App\Http\Controllers\TriPayController;
use App\Http\Controllers\TriPayCallbackController;
use App\Http\Controllers\DuitkuController;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function create($order)
    {
        $data = Pembelian::where('pembayarans.order_id', $order)->join('pembayarans', 'pembelians.order_id', 'pembayarans.order_id')
                       
             ->leftJoin('data_joki', 'pembelians.order_id', 'data_joki.order_id')
                ->select('data_joki.*',  'pembayarans.status AS status_pembayaran', 'pembayarans.metode AS metode_pembayaran', 'pembayarans.no_pembayaran', 'pembayarans.reference','pembelians.order_id AS id_pembelian',
                        'user_id', 'zone', 'nickname', 'layanan', 'pembayarans.harga AS harga_pembayaran', 'pembelians.created_at AS created_at', 'pembelians.status AS status_pembelian', 'pembayarans.reference', 'pembelians.tipe_transaksi AS tipe_transaksi', 
                         'pembelians.email_vilog AS email_vilog','pembelians.password_vilog AS password_vilog', 'pembelians.loginvia_vilog AS loginvia_vilog')
                ->leftJoin('layanans','pembelians.layanan','layanans.layanan')->select('layanans.*','data_joki.*','pembayarans.status AS status_pembayaran', 'pembayarans.metode AS metode_pembayaran', 'pembayarans.no_pembayaran', 'pembayarans.reference','pembelians.order_id AS id_pembelian',
                        'user_id', 'zone', 'nickname', 'pembayarans.harga AS harga_pembayaran', 'pembelians.created_at AS created_at', 'pembelians.status AS status_pembelian', 'pembayarans.reference', 'pembelians.tipe_transaksi AS tipe_transaksi', 
                         'pembelians.email_vilog AS email_vilog','pembelians.password_vilog AS password_vilog', 'pembelians.loginvia_vilog AS loginvia_vilog')
            ->leftJoin('kategoris','layanans.kategori_id','kategoris.id')->select('kategoris.*','layanans.*','data_joki.*','pembayarans.status AS status_pembayaran', 'pembayarans.metode AS metode_pembayaran', 'pembayarans.no_pembayaran', 'pembayarans.reference','pembelians.order_id AS id_pembelian',
                        'user_id', 'zone', 'nickname', 'pembayarans.harga AS harga_pembayaran', 'pembelians.created_at AS created_at', 'pembelians.status AS status_pembelian', 'pembayarans.reference', 'pembelians.tipe_transaksi AS tipe_transaksi', 
                         'pembelians.email_vilog AS email_vilog','pembelians.password_vilog AS password_vilog', 'pembelians.loginvia_vilog AS loginvia_vilog')             
                ->first();
     
        
        $expired = Carbon::create($data->created_at)->addDay();
        

    return view('components.invoice', [
        'data' => $data, 'expired' => $expired,
        'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
        'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first()
        ]);
    }



 public function ratingCustomer(Request $request) {
        $input = $request->all();
        $bintang = $input['bintang'];
        $comment = $input['comment'];
        
        // Simpan ke database
        DB::table('ratings')->insert([
            'bintang' => $bintang,
            'comment' => $comment,
        ]);
        
        return redirect()->back()->with('success', 'Terima kasih telah memberikan testimoni!');
    }
}