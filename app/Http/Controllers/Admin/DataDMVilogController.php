<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class DataDMVilogController extends Controller
{
    
    public function dataDMVilog()
    {
                
        $data = \App\Models\Pembelian::where('tipe_transaksi','dm_vilog')->get();
                
        return view('components.admin.datadmvilog',compact('data'));
    }
    
    
    public function statusDMVilog(Request $request,$order_id,$status)
    {
        \App\Models\Pembelian::where('order_id',$order_id)->update(['status' => $status]);
        
        return back();
    }
    
     public function hapusDMVilog(Request $request,$id)
    {
        \App\Models\Pembelian::where('id',$id)->delete();
        
        return back();
    }
    
    
}