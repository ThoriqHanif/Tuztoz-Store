<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;


class SettingWebController extends Controller
{
    public function settingWeb()
    {
        return view('components.admin.settingweb',['web' => DB::table('setting_webs')->where('id',1)->first()]);
    }
    
    public function saveSettingWeb(Request $request)
    {
        $request->validate([
            'judul_web' => 'required',
            'deskripsi_web' => 'required',
            'keyword' => 'required',
            'og_image' => 'image|mimes:jpeg,png,webp|max:2048',
            'logo_header' => 'image:mimes:jpg,jpeg,png,webp',
            'logo_footer' => 'image:mimes:jpg,jpeg,png,webp',
            'logo_favicon' => 'image:mimes:jpg,jpeg,png,webp',
            'url_wa' => 'required',
            'url_ig' => 'required',
            'url_tiktok' => 'required',
            'url_youtube' => 'required',
            'url_fb' => 'required',
        ]);
        
        if($request->file('og_image')){
            $file = $request->file('og_image');
            $folder = 'assets/logo';
            $file->move($folder, $file->getClientOriginalName());      
            DB::table('setting_webs')->where('id', 1)->update([
                'og_image' => "/".$folder."/".$file->getClientOriginalName()
            ]);
        }
        
        if($request->file('logo_header')){
            $file = $request->file('logo_header');
            $folder = 'assets/logo';
            $file->move($folder, $file->getClientOriginalName());      
            DB::table('setting_webs')->where('id', 1)->update([
                'logo_header' => "/".$folder."/".$file->getClientOriginalName()
            ]);
        }
        
        if($request->file('logo_footer')){
            $file2 = $request->file('logo_footer');
            $folder2 = 'assets/logo';
            $file2->move($folder2, $file2->getClientOriginalName());      
            DB::table('setting_webs')->where('id', 1)->update([
                'logo_footer' => "/".$folder2."/".$file2->getClientOriginalName()
            ]);
        }
        
        if($request->file('logo_favicon')){
            $file3 = $request->file('logo_favicon');
            $folder3 = 'assets/logo';
            $file3->move($folder3, $file3->getClientOriginalName());      
            DB::table('setting_webs')->where('id', 1)->update([
                'logo_favicon' => "/".$folder3."/".$file3->getClientOriginalName()
            ]);
        }
        
        DB::table('setting_webs')->where('id',1)->update([
           
           'judul_web' => $request->judul_web,
           'deskripsi_web' => $request->deskripsi_web,
           'keyword' => $request->keyword,
           'url_wa' => $request->url_wa,
           'url_ig' => $request->url_ig,
           'url_tiktok' => $request->url_tiktok,
           'url_youtube' => $request->url_youtube,
           'url_fb' => $request->url_fb,
           'created_at' => now(),
           'updated_at' => now()
            
        ]);
        
        
        return back()->with('success','Berhasil konfigurasi website!');
        
        
    }
    
    public function saveSlogan(Request $request)
    {
        
        DB::table('setting_webs')->where('id',1)->update([
           
          'slogan_web' => $request->slogan_web
            
        ]);
        
        
        return back()->with('success','Berhasil konfigurasi Slogan Web!');
        
    }
    
    public function saveSyaratKetentuan(Request $request)
    {
        
        DB::table('setting_webs')->where('id',1)->update([
           
          'snk' => $request->snk,
          'privacy' => $request->privacy,
            
        ]);
        
        
        return back()->with('success','Berhasil konfigurasi Page Terms!');
        
    }
    
    public function saveSettingWarna(Request $request)
    {
        
        DB::table('setting_webs')->where('id',1)->update([
           
          'warna1' => $request->warna1,
          'warna2' => $request->warna2,
          'warna3' => $request->warna3,
          'warna4' => $request->warna4,
          'warna5' => $request->warna5,
            
        ]);
        
        
        return back()->with('success','Berhasil konfigurasi Warna!');
        
    }
    
    public function saveHargaMembership(Request $request)
    {
        
        DB::table('setting_webs')->where('id',1)->update([
           
          'harga_gold' => $request->harga_gold,
          'harga_platinum' => $request->harga_platinum,
            
        ]);
        
        
        return back()->with('success','Berhasil konfigurasi Harga Membership!');
        
    }
    
    
    public function saveSettingTripay(Request $request)
    {
        
        DB::table('setting_webs')->where('id',1)->update([
           
          'tripay_api' => $request->tripay_api,
          'tripay_merchant_code' => $request->tripay_merchant_code,
          'tripay_private_key' => $request->tripay_private_key
            
        ]);
        
        
        return back()->with('success','Berhasil konfigurasi Tripay!');
        
    }
    
    public function saveSettingDigiflazz(Request $request)
    {
        
        DB::table('setting_webs')->where('id',1)->update([
           
          'username_digi' => $request->username_digi,
          'api_key_digi' => $request->api_key_digi,
            
        ]);
        
        
        return back()->with('success','Berhasil konfigurasi Digiflazz!');
        
    }
    
    public function saveSettingApigames(Request $request)
    {
        
        DB::table('setting_webs')->where('id',1)->update([
           
          'apigames_secret' => $request->apigames_secret,
          'apigames_merchant' => $request->apigames_merchant,
            
        ]);
        
        
        return back()->with('success','Berhasil konfigurasi Apigames!');
        
    }
    
    public function saveSettingVip(Request $request)
    {
        
        DB::table('setting_webs')->where('id',1)->update([
           
          'vip_apiid' => $request->vip_apiid,
          'vip_apikey' => $request->vip_apikey,
            
        ]);
        
        
        return back()->with('success','Berhasil konfigurasi VIP Reseller!!');
        
    }
    
    public function saveSettingWagateway(Request $request)
    {
        
        DB::table('setting_webs')->where('id',1)->update([
           
          'nomor_admin' => $request->nomor_admin,
          'wa_key' => $request->wa_key,
          'wa_number' => $request->wa_number
            
        ]);
        
        
        return back()->with('success','Berhasil konfigurasi WA gateway!');
        
    }
    
     public function saveSettingMutasi(Request $request)
    {
        
        DB::table('setting_webs')->where('id',1)->update([
           
          'ovo_admin' => $request->ovo_admin,
          'ovo1_admin' => $request->ovo1_admin,
          'gopay_admin' => $request->gopay_admin,
          'gopay1_admin' => $request->gopay1_admin,
          'dana_admin' => $request->dana_admin,
          'shopeepay_admin' => $request->shopeepay_admin,
          'bca_admin' => $request->bca_admin
            
        ]);
        
        
        return back()->with('success','Berhasil konfigurasi mutasi e-wallet / bank!');
        
    }
    
     public function saveAbout(Request $request)
    {
        
        if($request->file('logo_ceo')){
            $file = $request->file('logo_ceo');
            $folder = 'assets/logo';
            $file->move($folder, $file->getClientOriginalName());      
            DB::table('setting_webs')->where('id', 1)->update([
                'logo_ceo' => "/".$folder."/".$file->getClientOriginalName()
            ]);
        }
        
        DB::table('setting_webs')->where('id',1)->update([
           
          'sejarah' => $request->sejarah,
          'sejarah_1' => $request->sejarah_1,
          'visi' => $request->visi,
          'misi' => $request->misi,
          'nama_ceo' => $request->nama_ceo,
          'deskripsi_ceo' => $request->deskripsi_ceo,
          'nama_bagan' => $request->nama_bagan,
          'alamat' => str_replace("\r\n","<br>",$request->alamat),
          'email' => $request->email,
          'telp' => $request->telp
            
        ]);
        
        
        return back()->with('success','Berhasil konfigurasi Tentang Kami!');
        
    }
    
}