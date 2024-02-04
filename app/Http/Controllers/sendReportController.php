<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use Illuminate\Support\Str;
use App\Models\Layanan;
use Illuminate\Support\Facades\Log;

class SendReportController extends Controller
{
    public function sendReport()
    {
        $orders = Pembelian::where('is_digi', 1)->where('success_report_sended', 0)->get();
        info($orders);
        foreach ($orders as $order) {
            $layanan = Layanan::where('layanan', $order->layanan)->first();

            $post_data = array(
                'data' => array(
                    'ref_id' => $order->ref_id,
                    'code' => strval($layanan->id),
                    'hp' => strval($order->user_id) . strval($order->zone),
                    'price' => strval($order->harga),
                    'message' => $order->status,
                    'balance' => '0',
                    'tr_id' => $order->order_id,
                    'sn' => $order->user_id.'|'.Str::random(6),
                )
            );
            
            if ($order->status == 'Pending') {
                $post_data['data']['status'] = '0';
                $post_data['data']['rc'] = '39';
            } else if ($order->status == 'Success') {
                $post_data['data']['status'] = '1';
                $post_data['data']['rc'] = '00';
            } else {
                $post_data['data']['status'] = '2';
                $post_data['data']['rc'] = '06';
            }

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://api.digiflazz.com/v1/seller/callback');
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

            $exec = curl_exec($ch);
            
            if ($order->status != 'Pending') {
                $update = Pembelian::where('order_id', $order->order_id)->update([
                    'success_report_sended' => 1
                ]);
            }
        }

        return response()->json(['message' => 'Report command has been executed.']);
    }
}
