<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Berita;
use App\Models\Seting;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function create()
    {
        return view('components.register',[
            'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
            'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required|min:3|unique:users,username|max:255',
            'password' => 'required|min:6|max:255',
            'whatsapp' => 'required|numeric|unique:users,whatsapp',
        ], [
            'nama.required' => 'Harap isi kolom nama!',
            'username.required' => 'Harap isi kolom username!',
            'username.min' => 'Panjang username minimal 3 huruf',
            'username.unique' => 'Username telah digunakan',
            'username.max' => 'Panjang username maximal 255 huruf',
            'password' => 'Harap isi kolom password',
            'password.min' => 'Panjang password minimal 6 huruf',
            'password.max' => 'Panjang password maximal 255 huruf',
            'whatsapp.regex' => 'Format nomor WhatsApp tidak valid',
            'whatsapp.unique' => 'Nomor WhatsApp telah digunakan',
        ]);
        
        
         $no = $request->whatsapp;
        
        if($no[0] == 0){
            
             $no = substr_replace($no, '62', 0, 1);
            
        }
        
        $user = new User();
        $user->name = $request->nama;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->balance = 0;
        $user->role = 'Member';
        $user->api_key = Str::random(25);
        $user->whatsapp = $no;
        $user->save();

        return redirect(route('login'))->with('success', 'Berhasil melakukan pendaftaran, silakan masuk menggunakan akun anda');
    }
}
