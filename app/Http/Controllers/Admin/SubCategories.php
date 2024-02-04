<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\subCategories AS subModel;
use App\Models\Kategori;
use App\Models\Layanan;
use Illuminate\Http\Request;

class SubCategories extends Controller
{
    public function create()
    {
        $data = subModel::join('kategoris', 'sub_categories.category_id', 'kategoris.id')
                ->select('kategoris.nama AS kategori', 'sub_categories.*')->get();
        return view('components.admin.subcategories', ['categories' => Kategori::where('status', 'active')->get(), 'sub' => $data]);
    }

    public function store(Request $request)
    {
        $request->validate([
            '*' => 'required',
            'code' => 'unique:sub_categories,code'
        ], [
            'nama.required' => 'Nama Wajib diisi',
            'code.required' => 'kode Wajib diisi',
            'kategori.required' => 'kategori Wajib diisi',
            'code.unique' => 'Kode Sudah dipakai' 
        ]);

        $submodel = new subModel();
        $submodel->name = $request->nama;
        $submodel->code = $request->code;
        $submodel->category_id = $request->kategori;
        $submodel->active = 1;
        $submodel->save();

        return back()->with('success', 'Berhasil menambahkan sub kategori');
    }

    public function destroy($id)
    {
        $sub = subModel::where('id', $id)->first();

        $sub->delete();

        $service = Layanan::where('sub_category_id', $id)->update([
            'sub_category_id' => 0
        ]);

        return back()->with('success', 'Berhasil menambahkan sub kategori');
    }
}
