<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Firebase\JWT\JWT;

class GamePoint extends Controller
{
    public function login()
    {
        $secret = ENV("GP_SECRET");
        
        $payload = [
            'timestamp' => time()
        ];
        
        $data = json_encode(['payload' => JWT::encode($payload, $secret, 'HS256')]);
        
        return $this->connect("/merchant/token", $data);
    }
    
    public function validateOrder($token, $product, $id, $zone = null)
    {
        $secret = ENV("GP_SECRET");
        
        $payload = [
            'timestamp' => time(),
            'token' => $token,
            'productid' => $product,
            'fields' => [
                'input1' => $id,
                'input2' => $zone
            ]
        ];
        
        $data = json_encode(['payload' => JWT::encode($payload, $secret, 'HS256')]);
        
        return $this->connect("/order/validate", $data);
    }    
    
    public function getProduct()
    {
        $secret = ENV("GP_SECRET");
        
        $login = json_decode($this->login(),true);
        
        $payload = [
            'timestamp' => time(),
            'token' => $login['token'],
        ];
        
        $data = json_encode(['payload' => JWT::encode($payload, $secret, 'HS256')]);
        
        return $this->connect("/product/list", $data);        
    }
    
    public function getItem($product)
    {
        $secret = ENV("GP_SECRET");
        
        $login = json_decode($this->login(),true);
        
        $payload = [
            'timestamp' => time(),
            'token' => $login['token'],
            'productid' => $product
        ];
        
        $data = json_encode(['payload' => JWT::encode($payload, $secret, 'HS256')]);
        
        return $this->connect("/product/detail", $data);  
    }
    
    public function order($trxid, $product, $id, $zone = null)
    {
        $product = explode(',', $product);
        $secret = ENV("GP_SECRET");
        
        $login = json_decode($this->login(),true);
        
        $validate = json_decode($this->validateOrder($login['token'], $product[0], $id, $zone),true);
        
        $payload = [
            'timestamp' => time(),
            'token' => $login['token'],
            'validate_token' => $validate['validation_token'],
            'packageid' => intval($product[1]),
            'merchantcode' => $trxid
        ];
        
        $data = json_encode(['payload' => JWT::encode($payload, $secret, 'HS256')]);
        
        $order = json_decode($this->connect("/order/create", $data),true);

        if($order['code'] == 100 || $order['code'] == 101){
            return array(
                'status' => true,
                'transactionId' => $order['referenceno']
            );
        }else{
            return array(
                'status' => false,
                'message' => $order['message']
            );
        }
    }        
    
    public function status($ref)
    {
        $secret = ENV("GP_SECRET");
        
        $login = json_decode($this->login(),true);
        
        $payload = [
            'timestamp' => time(),
            'token' => $login['token'],
            'referenceno' => $ref
        ];
        
        $data = json_encode(['payload' => JWT::encode($payload, $secret, 'HS256')]);
        $status = json_decode($this->connect("/order/inquiry", $data),true);
        
        return $status;
    }
    
    public function connect($endpoint, $data)
    {
        $headers = [
            'Content-Type: application/json', 
            'partnerid: '.ENV("GP_PARTNER")
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.gamepointclub.net".$endpoint);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);   

        return curl_exec($ch);
    }
}
