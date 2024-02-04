<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Http;
use Auth;

class ForgotPasswordController extends Controller
{
    
    public function forgotPassword()
    {
        return view('components.forgotpassword');
    }
    
    
    public function sendOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required|numeric'
        ],
        [
            'phone.required' => 'Harap isi no',
            'phone.numeric' => 'No tidak valid!'
        ]);
        
        $no = $request->phone;
        
        if($no[0] == 0){
            
            $no = substr_replace($no, '62', 0, 1);
        }
        
     
        $cek = \App\Models\User::where('whatsapp',$no)->first();
        
        if(!$cek){
            
            return back()->with('error','No tidak ditemukan!');
            
        }
        
        
        
        $otp = rand(100000,999999);
        
        $cek->update(['otp' => $otp]);
        
        Session::put('no',$no);
        
        $api = \DB::table('setting_webs')->where('id',1)->first();
        
         $data = [
            'api_key' => $api->wa_key,
            'number'  => $api->wa_number,
            'receiver'  => "$no",
            'data' => array("message" => 'KODE OTP : '.$otp.'  ,  Hati Hati Jangan Berikan Kode Kepada Orang Lain!.')
        ];
        
        $curl = curl_init();
curl_setopt_array($curl, [
  CURLOPT_URL => "https://araara.my.id/api/send-message",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($data),
  CURLOPT_HTTPHEADER => [
    "Accept: */*",
    "Content-Type: application/json",
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
    
        
        
        return view('components.verifyotp');
        
        
        
        
    }
    
    
    public function verifyOtp(Request $request)
    {
        
        $no = Session::get('no');
        
        if(!$no){
            
            return redirect('/forgot-password');
            
        }
        
        $otp = $request->otp;
        
        
        $cek = \App\Models\User::where('whatsapp',$no)->where('otp',$otp)->first();
        
        if(!$cek){
            
            return back()->with('error','Kode OTP tidak valid!');
            
        }
        
        $cek->update(['otp' => NULL]);
        
        
        Auth::login($cek);
        
        
        return redirect('/account/setting');
        
        
        
        
        
    }
    
}