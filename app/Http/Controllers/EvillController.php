<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Kategori;

class EvillController extends Controller
{
    
    public $key;
    
    public function __construct()
    {
        //$setting = \App\Models\ProviderSetting::first();
        $this->key = "APIWYO9YH1702986406999";
    }
     
    public function order($uid = null, $zone = null, $service = null,$order_id = null)
    {
        $target = $uid;
        if($zone){
            $target = $target."|".$zone;
        }
        $trxid = 'TS-' . rand();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://a-api.evilbeestoree.com/api/order');
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "api_key=".$this->key."&service_id=".$service."&target=".$target."&kontak=6281327206716&idtrx=".$trxid);
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
        curl_setopt($ch, CURLOPT_URL, 'https://a-api.evilbeestoree.com/api/status');
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "api_key=".$this->key."&action=status&order_id=$poid");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        $res = json_decode(curl_exec($ch), true);
        return $res;
    }  
    
    public function harga()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://a-api.evilbeestoree.com/api/service');
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "api_key=".$this->key);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        $res = json_decode(curl_exec($ch), true);
        return $res;
    }

}