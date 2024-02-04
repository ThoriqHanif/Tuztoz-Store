<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class DataGiftSkinController extends Controller
{
    
    public function dataGiftSkin()
    {
                
        $data = \App\Models\Pembelian::where('tipe_transaksi','gift_skin')->get();
                
        return view('components.admin.datagiftskin',compact('data'));
    }
    
    
    public function statusGiftSkin(Request $request,$order_id,$status)
    {
        \App\Models\Pembelian::where('order_id',$order_id)->update(['status' => $status]);
        
        return back();
    }
    
     public function hapusGiftSkin(Request $request,$id)
    {
        \App\Models\Pembelian::where('id',$id)->delete();
        
        return back();
    }
    
    
}