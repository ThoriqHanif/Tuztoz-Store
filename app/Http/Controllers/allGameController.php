<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Berita;
class allGameController extends Controller
{
    public function create()
    {
        return view('components.allgame', [
            'kategori' => Kategori::where('status', 'active')->get(),
            'banner' => Berita::where('tipe', 'banner')->get(),
            'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
            'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first()
        ]);
    }
}
