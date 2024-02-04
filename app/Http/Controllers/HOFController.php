<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Layanan;
use App\Models\Kategori;

class HOFController extends Controller
{
    public function create()
    {
        $date = now();
        $parsingDate = Carbon::parse($date);
        $month = $parsingDate->month;
        $year = $parsingDate->year;

        $top_service = DB::table('pembelians')
                        ->join('layanans', 'pembelians.layanan', 'layanans.layanan')
                        ->join('kategoris', 'layanans.kategori_id', 'kategoris.id')
                        ->select('kategoris.nama', 'pembelians.layanan', DB::raw('count(pembelians.id) AS jumlah_order'))
                        ->whereMonth('pembelians.created_at', $month)->whereYear('pembelians.created_at', $year)
                        ->groupBy(['pembelians.layanan', 'kategoris.nama'])->orderByDesc('jumlah_order')->limit(10)->get();
                        
        $top_user = DB::table('pembelians')
                        ->whereNotNull('pembelians.username')
                        ->select(DB::raw('sum(pembelians.harga) AS tamount'), DB::raw('count(pembelians.id) AS tcount'), 'pembelians.username')
                        // ->join('users', 'pembelians.username', 'users.username')
                        ->groupBy('pembelians.username')
                        ->whereMonth('pembelians.created_at', $month)->whereYear('pembelians.created_at', $year)
                        ->where('status', 'Success')->orWhere('status', 'Pending')
                        ->orderByDesc('tamount')->limit(10)->get();
        // dd($top_service);
        return view('components.hof', ['top_service' => $top_service, 'top_user'=> $top_user]);

    }    
}