<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Seting;
use App\Models\Rating;
class ratingCustomerController extends Controller
{
    public function create()
    {
        
        $ratings = Rating::select('bintang', 'comment', 'id', 'created_at')
        ->orderByDesc('id')
        ->limit(3)
        ->get();
        
        return view('components.ratingcust', [
            'banner' => Berita::where('tipe', 'banner')->get(),
            'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
            'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first(),
            'popup' => Berita::where('tipe', 'popup')->latest()->first(),
            'web_seting' => \App\Models\Seting::all(),
            'ratings' => $ratings,
        ]);
    }
    
    
}

