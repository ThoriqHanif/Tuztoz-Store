<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pembelian;

class StatusController extends Controller
{
    public function show(Request $request)
    {
        if(!$request->api_key || !$request->trx_id) return response()->json(['status' => false, 'message' => 'Parameter tidak valid']);
        
        $user = User::where('api_key', $request->api_key)->first();
        
        if(!$user) return response()->json(['status' => false, 'message' => 'Api key tidak valid']);
        
        $pembelian = Pembelian::where('order_id', $request->trx_id)->where('username', $user->username)->first();
        
        if(!$pembelian) return response()->json(['status' => false, 'message' => 'Order id tidak ditemukan']);
        
        return response()->json([
            'status' => true,
            'data' => array(
                'trx_id' => $request->trx_id,
                'target' => $pembelian->user_id.(isset($pembelian->zone) ? "|".$pembelian->zone : ''),
                'status' => $pembelian->status,
                'note' => $pembelian->catatan,
                'price' => $pembelian->harga
            )
        ]);
        
    }
}