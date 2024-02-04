<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlpharamzController extends Controller
{
    public function order($uid = null, $zone = null, $service = null)
    {
        $target = $uid;
        if($zone){
            $target = $target."|".$zone;
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://alpharamz.id/api/order');
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "api_key=".env("ALPHA_APIKEY")."&action=order&service_id=".$service."&target=".$target."&kontak=".ENV("NOMOR_ADMIN"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        $res = json_decode(curl_exec($ch),true);
        return $res;
    }

    public function status($poid = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://alpharamz.id/api/status');
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "api_key=".env("ALPHA_APIKEY")."&action=status&order_id=$poid");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        $res = json_decode(curl_exec($ch), true);
        return $res;
    }  
    
    public function services()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://alpharamz.id/api/service');
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "api_key=".env("ALPHA_APIKEY"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        $res = json_decode(curl_exec($ch),true);
        return $res;
    }
}
