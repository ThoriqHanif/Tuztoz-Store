<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Tipe;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function create()
    {
        $data = Kategori::with('tipe')->get();
        $tipes = Tipe::all();

        return view('components.admin.kategori', compact('data', 'tipes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'thumbnail' => 'required|file|mimes:jpg,png,webp',
            'bannerlayanan' => 'required|file|mimes:jpg,png,webp',
            'nama' => 'required',
            'sub_nama' => 'required',
            'brand' => 'required',
            // 'ket_layanan' => 'required',
            // 'ket_id' => 'required',
            'placeholder_1' => 'required',
            'placeholder_2' => 'required',
            'kode' => 'required|unique:kategoris,kode',
            'serverOption' => 'required',
            'tipe_id' => 'required',
            'populer' => 'required'
        ]);

        $file = $request->file('thumbnail');
        $folder = 'assets/thumbnail';
        $file->move($folder, $file->getClientOriginalName());

        $img2 = $request->file('bannerlayanan');
        $filenamebn = Str::random('15') . '.' . $img2->extension();
        $img2->move('assets/bannerlayanan', $filenamebn);

        if ($request->file('petunjuk')) {
            $img = $request->file('petunjuk');
            $filename = Str::random('15') . '.' . $img->extension();
            $img->move('assets/petunjuk', $filename);
        }

        $kategori = new Kategori();
        $kategori->nama = $request->nama;
        $kategori->sub_nama = $request->sub_nama;
        $kategori->brand = $request->brand;
        $kategori->kode = $request->kode;
        $kategori->ket_layanan = str_replace("\r\n", "<br>", $request->ket_layanan);
        $kategori->ket_id = str_replace("\r\n", "<br>", $request->ket_id);
        $kategori->placeholder_1 = $request->placeholder_1;
        $kategori->placeholder_2 = $request->placeholder_2;
        $kategori->server_id = $request->serverOption == 'ya' ? 1 : 0;
        $kategori->tipe_id = $request->tipe_id;
        $kategori->populer = $request->populer;
        $kategori->thumbnail = "/" . $folder . "/" . $file->getClientOriginalName();
        $kategori->bannerlayanan = '/assets/bannerlayanan/' . $filenamebn;
        $kategori->petunjuk = ($request->file('petunjuk') ? '/assets/petunjuk/' . $filename : '');
        $kategori->save();

        return back()->with('success', 'Berhasil menambahkan kategori');
    }

    public function delete($id)
    {
        try {
            $data = Kategori::where('id', $id)->select('thumbnail')->first();
            unlink(public_path($data->thumbnail));
            unlink(public_path($data->bannerlayanan));
            unlink(public_path($data->petunjuk));
            Kategori::where('id', $id)->delete();
            return back()->with('success', 'Berhasil hapus!');
        } catch (\Exception $e) {
            Kategori::where('id', $id)->delete();
            return back()->with('success', 'Berhasil hapus!');
        }
    }

    public function update($id, $status)
    {
        $data = Kategori::where('id', $id)->update([
            'status' => $status
        ]);

        return back()->with('success', 'Berhasil update!');
    }

    public function detail($id)
    {
        $data = Kategori::where('id', $id)->with('tipe')->first();
        $tipes = Tipe::all();

        $options = '';
        $populerOptions = [
            0 => 'Tidak',
            1 => 'Ya'
        ];

        foreach ($tipes as $tipe) {
            $selected = $data->tipe_id == $tipe->id ? 'selected' : '';
            $options .= "<option value='{$tipe->id}' {$selected}>{$tipe->name}</option>";
        }

        $populerSelect = '';
        foreach ($populerOptions as $value => $label) {
            $selected = $data->populer == $value ? 'selected' : '';
            $populerSelect .= "<option value='{$value}' {$selected}>{$label}</option>";
        }

        $send = "
                <form action='" . route("kategori.detail.update", [$id]) . "' method='POST' enctype='multipart/form-data'>
                    <input type='hidden' name='_token' value='" . csrf_token() . "'>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Nama</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='" . $data->nama . "' name='kategori'>
                        </div>
                    </div>  
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Sub Nama</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='" . $data->sub_nama . "' name='sub_nama'>
                        </div>
                    </div>  
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Brand</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='" . $data->brand . "' name='brand'>
                        </div>
                    </div>    
                         <div class='mb-3 row'>
                <label class='col-lg-2 col-form-label'>Tipe</label>
                <div class='col-lg-10'>
                <select class='form-select' name='tipe_id'>
                    {$options}
                </select>
                </div>
            </div>    
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Kode</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='" . $data->kode . "' name='kode'>
                        </div>
                    </div>  
                    <div class='mb-3 row'>
                        <label class='col-lg-2 cl-form-label' for='example-fileinput'>Deskripsi Game</label>
                        <div class='col-lg-10'>
                            <textarea class='form-control' name='ket_layanan'> $data->ket_layanan </textarea>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Deskripsi ID</label>
                        <div class='col-lg-10'>
                            <textarea class='form-control' name='ket_id'> $data->ket_id </textarea>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Placeholder 1</label>
                        <div class='col-lg-10'>
                            <textarea class='form-control' name='placeholder_1'>" . $data->placeholder_1 . "</textarea>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Placeholder 2</label>
                        <div class='col-lg-10'>
                            <textarea class='form-control' name='placeholder_2'>" . $data->placeholder_2 . "</textarea>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Thumbnail</label>
                        <div class='col-lg-10'>
                            <input type='file' class='form-control' value='" . $data->thumbnail . "' name='thumbnail'>
                        </div>
                    </div>    
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Banner Layanan</label>
                        <div class='col-lg-10'>
                            <input type='file' class='form-control' value='" . $data->bannerlayanan . "' name='bannerlayanan'>
                        </div>
                    </div> 
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Petunjuk</label>
                        <div class='col-lg-10'>
                            <input type='file' class='form-control' value='" . $data->petunjuk . "' name='petunjuk'>
                        </div>
                    </div>                        
                         <div class='mb-3 row'>
                <label class='col-lg-2 col-form-label'>Sistem Target</label>
                <div class='col-lg-10'>
                    <select class='form-select' id='customRadio1' name='serverOption'>
                        <option value='tidak'>1. Target ( User ID )</option>
                        <option value='ya'>2. Target ( User ID / Server ID )</option>
                        <option value='tidak'>3. Target ( Custom via code )</option>
                    </select>
                </div>
                <small style='color:red;'>*Selalu Perhatikan! Jika Produk yang kamu gunakan Menggunakan Server ID maka <strong>Harus</strong> diganti</small>
            </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Status</label>
                        <div class='col-lg-10'>
                            <select class='form-control' name='status'>
                                <option value='active'>Active</option>
                                <option value='unactive'>Unactive</option>
                            </select>
                        </div>
                    </div>      
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Populer</label>
                        <div class='col-lg-10'>
                            <select class='form-control' name='populer'>
                            {$populerSelect}
                            </select>
                        </div>
                    </div>              
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                        <button type='submit' class='btn btn-primary'>Simpan</button>
                    </div>
                </form>
        ";

        return $send;
    }

    public function patch(Request $request, $id)
    {
        if ($request->file('thumbnail')) {
            $file = $request->file('thumbnail');
            $folder = 'assets/thumbnail';
            $file->move($folder, $file->getClientOriginalName());
            Kategori::where('id', $id)->update([
                'thumbnail' => "/" . $folder . "/" . $file->getClientOriginalName()
            ]);
        }

        if ($request->file('bannerlayanan')) {
            $img = $request->file('bannerlayanan');
            $filenamebn = Str::random('15') . '.' . $img->extension();
            $img->move('assets/bannerlayanan', $filenamebn);
        }

        if ($request->file('petunjuk')) {
            $img = $request->file('petunjuk');
            $filename = Str::random('15') . '.' . $img->extension();
            $img->move('assets/petunjuk', $filename);
        }

        $cek = Kategori::where('id', $id)->first();

        $pembayaran = Kategori::where('id', $id)->update([
            'nama' => $request->kategori,
            'brand' => $request->brand,
            'sub_nama' => $request->sub_nama,
            'placeholder_1' => $request->placeholder_1,
            'placeholder_2' => $request->placeholder_2,
            'kode' => $request->kode,
            'ket_layanan' => str_replace("\r\n", "<br>", $request->ket_layanan),
            'ket_id' => str_replace("\r\n", "<br>", $request->ket_id),
            'tipe_id' => $request->tipe_id,
            'populer' => $request->populer,
            'status' => $request->status,
            'server_id' => $request->serverOption == 'ya' ? 1 : 0,
            'bannerlayanan' => (!$request->file('bannerlayanan') ? $cek->bannerlayanan : '/assets/bannerlayanan/' . $filenamebn),
            'petunjuk' => (!$request->file('petunjuk') ? $cek->petunjuk : '/assets/petunjuk/' . $filename)
        ]);

        return back()->with('success', 'Berhasil update kategori');
    }
}
