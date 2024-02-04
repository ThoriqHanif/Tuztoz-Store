<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\subCategories;
use Illuminate\Support\Str;

class LayananController extends Controller
{
    public function create()
    {
        $datas = Layanan::join('kategoris', 'layanans.kategori_id', 'kategoris.id')->orderBy('created_at', 'desc')
                ->select('layanans.*', 'kategoris.nama AS nama_kategori')->get();

        $kategori = Kategori::get();

        return view('components.admin.layanan', ['datas' => $datas, 'kategoris' => $kategori]);
    }
    
    public function getSubCategories(Request $request)
    {
        $category = $request->category;

        $subCategory = subCategories::where('category_id', $category)->get();

        if(!$subCategory){
            return response()->json(['status' => true, 'sub' => ['Normal']]);
        }

        return response()->json([
            'status' => true,
            'sub' => $subCategory
        ]);
    }    

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'harga_reseller' => 'required|numeric',
            'harga_platinum' => 'required|numeric',
            'harga_gold' => 'required|numeric',
            'profit' => 'required|numeric',
            'profit_reseller' => 'required|numeric',
            'profit_platinum' => 'required|numeric',
            'profit_gold' => 'required|numeric',
            'sub' => 'required',
            'provider_id' => 'required|unique:layanans,provider_id',
            'provider' => 'required',
        ]);
        if($request->file('product_logo')){
            $img = $request->file('product_logo');
            $filename = Str::random('15') . '.' . $img->extension();
            $img->move('assets/product_logo', $filename);
        }
        
        if($request->file('banner_flash_sale')){
            $imgfs = $request->file('banner_flash_sale');
            $filenamefs = Str::random('15') . '.' . $imgfs->extension();
            $imgfs->move('assets/banner_flash_sale', $filenamefs);
        }

        $layanan = new Layanan();
        $layanan->kategori_id = $request->kategori;
        $layanan->layanan = $request->nama;
        $layanan->provider_id = $request->provider_id;
        $layanan->harga = $request->harga + ($request->harga * $request->profit / 100);
        $layanan->harga_reseller = $request->harga_reseller + ($request->harga_reseller * $request->profit_reseller / 100);
        $layanan->harga_platinum = $request->harga_platinum + ($request->harga_platinum * $request->profit_platinum / 100);
        $layanan->harga_gold = $request->harga_gold + ($request->harga_gold * $request->profit_gold / 100);
        $layanan->profit = $request->profit;
        $layanan->profit_reseller = $request->profit_reseller;
        $layanan->profit_platinum = $request->profit_platinum;
        $layanan->profit_gold = $request->profit_gold;
        $layanan->provider = $request->provider;
        $layanan->catatan = '';
        $layanan->sub_category_id = $request->sub;
        $layanan->status = 'available';
        $layanan->product_logo = ($request->file('product_logo') ?  '/assets/product_logo/'.$filename : '');
        $layanan->harga_flash_sale = $request->harga_flash_sale;
        $layanan->is_flash_sale = $request->flash_sale;
        $layanan->judul_flash_sale = $request->judul_flash_sale;
        $layanan->banner_flash_sale = ($request->file('banner_flash_sale') ?  '/assets/banner_flash_sale/'.$filenamefs : '');
        $layanan->expired_flash_sale = date('Y-m-d', strtotime($request->expired_flash_sale));
        $layanan->save();

        return back()->with('success', 'Berhasil menginput layanan');
    }

    public function delete($id)
    {
        Layanan::where('id', $id)->delete();
        return back()->with('success', 'Berhasil menghapus layanan');
    }

    public function update($id, $status)
    {
        Layanan::where('id', $id)->update([
            'status' => $status
        ]);
        return back()->with('success', 'Berhasil mengupdate layanan');
    }
    
    public function detail($id)
    {
        $data = Layanan::where('id', $id)->first();
        
        $send = "
                <form action='".route("layanan.detail.update", [$id])."' method='POST'  enctype='multipart/form-data'>
                    <input type='hidden' name='_token' value='".csrf_token()."'>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Layanan</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->layanan. "' name='layanan'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Provider</label>
                        <div class='col-lg-10'>
                            <select class='form-select' name='provider'>
                                <option value='digiflazz'>Digiflazz</option>
                                <option value='vip'>Vip Reseller</option>
                                <option value='apigames'>API Games V1</option>
                                <option value='gamepoint'>Gamepointclub</option>
                                <option value='meng'>Mengtopup</option>
                                <option value='alpha'>Alpharamz</option>
                                <option value='gift_skin'>Gift Skin</option>
                                <option value='dm_vilog'>DM Vilog</option>
                                <option value='joki'>Joki</option>
                                <option value='manual'>Manual</option>
                            </select>
                        </div>
                        <small style='color:red;'>*Selalu Perhatikan! Jika Provider yang kamu gunakan bukan Digiflazz maka <strong>Harus</strong> diganti</small>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Provider Id</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='" . $data->provider_id . "' name='provider_id'>
                        </div>
                    </div>  
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Harga</label>
                        <div class='col-lg-10'>
                            <input type='number' class='form-control' value='". $data->harga ."' name='harga'>
                        </div>
                    </div>  
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Harga Reseller</label>
                        <div class='col-lg-10'>
                            <input type='number' class='form-control' value='". $data->harga_reseller ."' name='harga_reseller'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Harga Platinum</label>
                        <div class='col-lg-10'>
                            <input type='number' class='form-control' value='". $data->harga_platinum ."' name='harga_platinum'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Harga Gold</label>
                        <div class='col-lg-10'>
                            <input type='number' class='form-control' value='". $data->harga_gold ."' name='harga_gold'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Profit</label>
                        <div class='col-lg-10'>
                            <input type='number' class='form-control' value='". $data->profit ."' name='profit'>
                        </div>
                    </div>  
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Profit Reseller</label>
                        <div class='col-lg-10'>
                            <input type='number' class='form-control' value='". $data->profit_reseller ."' name='profit_reseller'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Profit Platinum</label>
                        <div class='col-lg-10'>
                            <input type='number' class='form-control' value='". $data->profit_platinum ."' name='profit_platinum'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Profit Gold</label>
                        <div class='col-lg-10'>
                            <input type='number' class='form-control' value='". $data->profit_gold ."' name='profit_gold'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Status</label>
                        <div class='col-lg-10'>
                            <select class='form-control' name='status'>
                                <option value='available'>Available</option>
                                <option value='unavailable'>Unavailable</option>
                            </select>
                        </div>
                    </div>
                    <small style='color:red;'>*AKTIFKAN JIKA KAMU SEDANG MENGADAKAN FLASHSALE</small>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label'>Flash Sale?</label>
                        <div class='col-lg-10'>
                            <select class='form-select' name='flash_sale'>
                                <option value='0'>No</option>
                                <option value='1'>Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Judul Flash Sale</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='". $data->judul_flash_sale ."' name='judul_flash_sale'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Harga Flash Sale</label>
                        <div class='col-lg-10'>
                            <input type='number' class='form-control' value='". $data->harga_flash_sale ."' name='harga_flash_sale'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Expired Flash Sale</label>
                        <div class='col-lg-10'>
                            <input type='date' class='form-control' value='". $data->expired_flash_sale ."' name='expired_flash_sale'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Banner Flash Sale</label>
                        <div class='col-lg-10'>
                            <input type='file' class='form-control' name='banner_flash_sale'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Product Logo</label>
                        <div class='col-lg-10'>
                            <input type='file' class='form-control' name='product_logo'>
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
        
        if($request->file('banner_flash_sale')){
            $imgfs = $request->file('banner_flash_sale');
            $filenamefs = Str::random('15') . '.' . $imgfs->extension();
            $imgfs->move('assets/banner_flash_sale', $filenamefs);
        }
        
         if($request->file('product_logo')){
            $img = $request->file('product_logo');
            $filename = Str::random('15') . '.' . $img->extension();
            $img->move('assets/product_logo', $filename);
        }
        
        $cek = Layanan::where('id', $id)->first();
        
        $layanan = Layanan::where('id', $id)->update([
            'layanan' => $request->layanan,
            'provider' => $request->provider,
            'provider_id' => $request->provider_id,
            'harga' => $request->harga + ($request->harga * $request->profit / 100),
            'harga_reseller' => $request->harga_reseller + ($request->harga_reseller * $request->profit_reseller / 100),
            'harga_platinum' => $request->harga_platinum + ($request->harga_platinum * $request->profit_platinum / 100),
            'harga_gold' => $request->harga_gold + ($request->harga_gold * $request->profit_gold / 100),
            'profit' => $request->profit,
            'profit_reseller' => $request->profit_reseller,
            'profit_platinum' => $request->profit_platinum,
            'profit_gold' => $request->profit_gold,
            'status' => $request->status,
            'harga_flash_sale' => $request->harga_flash_sale,
            'is_flash_sale' => $request->flash_sale,
            'judul_flash_sale' => $request->judul_flash_sale,
            'expired_flash_sale' => date('Y-m-d', strtotime($request->expired_flash_sale)),
            'banner_flash_sale' => (!$request->file('banner_flash_sale') ? $cek->banner_flash_sale : '/assets/banner_flash_sale/'.$filenamefs),
            'product_logo' =>  (!$request->file('product_logo') ? $cek->product_logo : '/assets/product_logo/'.$filename)
        ]);
        
           
        return back()->with('success', 'Berhasil update layanan');        
    }
}
