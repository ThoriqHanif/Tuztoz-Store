<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Kategori;
use App\Models\Layanan;
use App\Http\Controllers\digiFlazzController;
use Str;

class getService extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Service';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        $digiFlazz = new digiFlazzController;
        $res = $digiFlazz->harga();
        // info($res);
        
    
        foreach(Kategori::get() as $kategori){
            foreach($res['data'] as $data){
                if($data['brand'] == ($kategori->brand)){
                    if($data['category'] == "Games"){
                        
                        $cekgame = Layanan::where('provider_id',$data['buyer_sku_code'])->first();
                        
                        if(!$cekgame){
                            
                            $layanan = new Layanan();
                            $layanan->layanan = $data['product_name'];
                            $layanan->kategori_id = $kategori->id;
                            $layanan->provider_id = $data['buyer_sku_code'];
                            $layanan->harga = $data['price'];
                            $layanan->harga_reseller = $data['price'];
                            $layanan->harga_platinum = $data['price'];
                            $layanan->harga_gold = $data['price'];
                            $layanan->profit = 4;
                            $layanan->profit_reseller = 3;
                            $layanan->profit_platinum = 2;
                            $layanan->profit_gold = 1;
                            $layanan->catatan = $data['desc'];
                            $layanan->status = ($data['seller_product_status'] === true ? "available" : "unavailable");
                            $layanan->provider = "digiflazz";
                            $layanan->product_logo = null;
                            $layanan->save();
                            
                            
                        }else{
                            
                          $cekgame->update([
                             
                             'harga' => $data['price'] + ($data['price'] * 4 / 100),
                             'harga_reseller' => $data['price'] + ($data['price'] * 3 / 100),
                             'harga_platinum' => $data['price'] + ($data['price'] * 2 / 100),
                             'harga_gold' => $data['price'] + ($data['price'] * 1 / 100),
                             'status' => ($data['seller_product_status'] === true ? "available" : "unavailable")
                              
                          ]);
                            
                        }
                        
                       
                    }else if($data['category'] == "Pulsa"){
                        
                        $cekpulsa = Layanan::where('provider_id',$data['buyer_sku_code'])->first();
                        
                        
                        if(!$cekpulsa){
                            
                            $layanan = new Layanan();
                            $layanan->layanan = $data['product_name'];
                            $layanan->kategori_id = $kategori->id;
                            $layanan->provider_id = $data['buyer_sku_code'];
                            $layanan->harga = $data['price'];
                            $layanan->harga_reseller = $data['price'];
                            $layanan->harga_platinum = $data['price'];
                            $layanan->harga_gold = $data['price'];
                            $layanan->profit = 4;
                            $layanan->profit_reseller = 3;
                            $layanan->profit_platinum = 2;
                            $layanan->profit_gold = 1;
                            $layanan->catatan = $data['desc'];
                            $layanan->status = ($data['seller_product_status'] === true ? "available" : "unavailable");
                            $layanan->provider = "digiflazz";
                            $layanan->product_logo = null;
                            $layanan->save();
                            
                            
                        }else{
                            
                            $cekpulsa->update([
                             
                             'harga' => $data['price'] + ($data['price'] * 4 / 100),
                             'harga_reseller' => $data['price'] + ($data['price'] * 3 / 100),
                             'harga_platinum' => $data['price'] + ($data['price'] * 2 / 100),
                             'harga_gold' => $data['price'] + ($data['price'] * 1 / 100),
                             'status' => ($data['seller_product_status'] === true ? "available" : "unavailable")
                              
                          ]);
                            
                        }
                        
                        
                    }else if($data['category'] == "E-Money"){
                        
                        $cekemoney = Layanan::where('provider_id',$data['buyer_sku_code'])->first();
                        
                        
                        if(!$cekemoney){
                            
                            $layanan = new Layanan();
                            $layanan->layanan = $data['product_name'];
                            $layanan->kategori_id = $kategori->id;
                            $layanan->provider_id = $data['buyer_sku_code'];
                            $layanan->harga = $data['price'];
                            $layanan->harga_reseller = $data['price'];
                            $layanan->harga_platinum = $data['price'];
                            $layanan->harga_gold = $data['price'];
                            $layanan->profit = 4;
                            $layanan->profit_reseller = 3;
                            $layanan->profit_platinum = 2;
                            $layanan->profit_gold = 1;
                            $layanan->catatan = $data['desc'];
                            $layanan->status = ($data['seller_product_status'] === true ? "available" : "unavailable");
                            $layanan->provider = "digiflazz";
                            $layanan->product_logo = null;
                            $layanan->save();
                            
                            
                        }else{
                            
                            $cekemoney->update([
                             
                             'harga' => $data['price'] + ($data['price'] * 4 / 100),
                             'harga_reseller' => $data['price'] + ($data['price'] * 3 / 100),
                             'harga_platinum' => $data['price'] + ($data['price'] * 2 / 100),
                             'harga_gold' => $data['price'] + ($data['price'] * 1 / 100),
                             'status' => ($data['seller_product_status'] === true ? "available" : "unavailable")
                              
                          ]);
                            
                        }
                        
                        
                    }
                }
            }
        }
        
    }
}
