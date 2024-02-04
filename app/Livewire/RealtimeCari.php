<?php

use App\Http\Livewire\RealtimeCari;

class CariController extends Controller
{
    public function create()
    {
        return view('components.cari')
            ->with('livewireRealtimeCari', app(RealtimeCari::class)->render());
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        $pembelian = Pembelian::where('order_id', $request->id)->first();
        if ($pembelian) {
            return redirect(route('pembelian', ['order' => $request->id]));
        }

        return back()->with('error', 'Pesanan tidak ditemukan');
    }
}
