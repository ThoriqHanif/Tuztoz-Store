<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Berita;
use App\Models\Seting;

class LoginController extends Controller
{
    public function create()
    {
        return view('components.admin.login', [
        'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
        'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first()
        ]);
    }
    

   public function store(Request $request)
{
    $credential = $request->validate([
        'username' => 'required',
        'password' => 'required'
    ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->with('error', 'Mohon periksa kembali Username dan Password Anda. Kami tidak dapat menemukan akun Anda.');
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }    
}
