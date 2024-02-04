<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

class ApiDocController extends Controller
{
    public function create()
    {
        return view('components.api-doc');
    }
    
    public function reset()
    {
        $user = User::where('username', Auth::user()->username)->first();
        
        $user->update([
            'api_key'  => Str::random(25)
        ]);
        
        return redirect(route('api'))->with('success', 'Berhasil reset api');
    }
}
