<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Layanan;
use App\Models\Kategori;

class ServiceController extends Controller
{
    public function show(Request $request){
        if(!$request->api_key) return response()->json(['status' => false, 'message' => 'Parameter tidak valid']);
    
        $user = User::where('api_key', $request->api_key)->first();
        
        if(!$user) return response()->json(['status' => false, 'message' => 'Api key tidak valid']);
        
        $service = Layanan::join('kategoris', 'layanans.kategori_id', 'kategoris.id')
                    ->where('kategoris.tipe', '!=', 'joki')
                    ->where('kategoris.tipe', '!=', 'gift')
                    ->select('layanans.*', 'kategoris.tipe AS tipe', 'kategoris.nama')
                    ->get();
        
        $arrService = [];
        
        foreach($service as $data){
            if($data->tipe == "smm"){
                $tipe = "social media";
            }else if($data->tipe == "voucher"){
                $tipe = "voucher";
            }else if($data->tipe == "game"){
                $tipe = "topup";
            }else if($data->tipe == "pulsa"){
                $tipe = "pulsa";
            }
            
            if($data->tipe != "smm"){
                $arrService[] = [
                    'id' => $data->id,
                    'category' => $data->nama,
                    'name' => $data->layanan,
                    'type' => $tipe,
                    'status' => $data->status,
                    'price' => array(
                        'member' => $data->harga,
                        'reseller' => $data->harga_reseller,
                        'vip' => $data->harga_vip
                    )
                ];
            }else{
                $arrService[] = [
                    'id' => $data->id,
                    'category' => $data->nama,
                    'name' => $data->layanan,
                    'type' => $tipe,
                    'status' => $data->status,
                    'min' => $data->min,
                    'max' => $data->max,
                    'note' => $data->note,
                    'price' => array(
                        'member' => $data->harga,
                        'reseller' => $data->harga_reseller,
                        'vip' => $data->harga_vip
                    )
                ];             
            }
        }
        
        return response()->json(['status' => true, 'data' => $arrService]);
    }
}