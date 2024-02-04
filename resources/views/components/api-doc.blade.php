@extends('main')

@section('css')
<style>
  .css-16pvxfk {
    background: linear-gradient(270deg, rgb(211 211 211) -1.95%, rgb(110 7 7) 50.95%) !important;
  }
  .css-6qw8qz {
    border: 1px solid rgba(203, 203, 203, 0.5);
    background: linear-gradient(163.42deg, rgb(90 90 90) -107%, rgba(255, 255, 255, 0) 105.46%);
  }
  .css-6qw8qzz {
    border: 1px solid rgba(203, 203, 203, 0.5);
    background-color:#282828;
  }
  .css-138rpjn {
background: linear-gradient(500deg, var(--warna_5) 0%, rgba(112, 127, 235, 0) 100%);
color:white;
}
.css-138rpjnn:hover {
background: linear-gradient(500deg, var(--warna_5) 0%, rgba(112, 127, 235, 0) 100%);
color:white;
}
  .font-medium {
    font-weight: 500;
  }
  .text-sm {
    font-size: .875rem;
    line-height: 1.25rem;
  }
  .py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }
  .px-3 {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
  .rounded-3xl {
    border-radius: 1.5rem;
  }
  .gap-3 {
    gap: 0.75rem;
  }
  .items-center {
    align-items: center;
  }
  .flex {
    display: flex;
  }
  a {
    color: inherit;
    text-decoration: inherit;
  }
</style>
@endsection

@section('content')
@include('../navbar')
<main class="min-h-[50vh]">
    <div class="mx-auto max-w-7xl pb-24 grid grid-cols-12 gap-6 lg:gap-x-16 lg:py-8 lg:px-12 mb-10 md:px-4 px-4">
        <div class="hidden md:block lg:block xl:block col-span-1 lg:col-span-3">
            <aside class="py-6 lg:col-span-3 lg:p-0 sticky top-20">
                <nav class="h-full content-start lg:grid lg:content-between">
                    <div class="space-y-4">
                        <style data-emotion="css 1bz809x">
                            .css-1bz809x:hover {
                                background: linear-gradient(90deg, undefined 0%, rgba(112, 127, 235, 0) 100%);
                            }
                        </style>
                        <a class="group flex gap-3 items-center rounded-3xl px-3 py-2 text-sm font-medium css-138rpjnn" aria-current="page" href="{{ route('dash') }}">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"></path>
                            </svg>
                            <span class="truncate hidden lg:block xl:block">Akun</span>
                        </a>
                        <style data-emotion="css vii8r9">
                            .css-vii8r9 {
                                background: linear-gradient(90deg, undefined 0%, rgba(112, 127, 235, 0) 100%);
                            }
    
                            .css-vii8r9:hover {
                                background: linear-gradient(90deg, undefined 0%, rgba(112, 127, 235, 0) 100%);
                            }
                        </style>
                        <a class="group flex gap-3 items-center rounded-3xl px-3 py-2 text-sm font-medium css-138rpjnn css-138rpjn" aria-current="page" href="{{ route('deposit') }}">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M20 2H4c-1.11 0-2 .89-2 2v11c0 1.11.89 2 2 2h4v5l4-2 4 2v-5h4c1.11 0 2-.89 2-2V4c0-1.11-.89-2-2-2zm0 13H4v-2h16v2zm0-5H4V4h16v6z"></path>
                            </svg>
                            <span class="truncate hidden lg:block xl:block">Deposit</span>
                        </a>
                        <form action="{{ route('logout') }}" method="POST" id='logout'>
                        @csrf                                                           
                        <button type='submit' class="group flex gap-3 items-center rounded-3xl px-3 py-2 text-sm font-medium css-138rpjnn" id="headlessui-menu-item-:r4:" role="menuitem" tabindex="-1" data-headlessui-state="">Keluar</button>
                        </form>
                    </div>
                </nav>
            </aside>
        </div>
        <div class="col-span-12 md:col-span-11 lg:col-span-9 mt-6 sm:mt-6 lg:mt-0 md:mt-6">
            <div class="row">
               <div class="col-12 col-sm-12 col-lg-12">
                  @if(session('error'))
                     <div class="alert alert-danger">
                        {{ session('error') }}
                     </div>
                  @elseif(session('success'))
                     <div class="alert alert-success">
                     {{ session('success') }}
                     </div>
                  @endif
                  <div class="card">
                      <div class="flex p-4 mt-6 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd">
          </path>
        </svg>
        <span class="sr-only">Info
        </span>
        <div>
          <b>DOKUMENTASI API / H2H</b><br>Gratis upgrade Platinum untuk yang menggunakan <b>API / H2H</b> di Jstoregame.
        </div>
      </div>
                     <div class="card-body ">
                        <div class="card-title items-center lex text-center mt-2 ms-2 font-extrabold">API KEY KAMU</div>
                        <div class="input-group mb-3">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" value="{{ Auth::user()->api_key }}" aria-label="Username" aria-describedby="basic-addon2" readonly>
                              <div class="input-group-append">
                                 <a href="{{ route('reset-key') }}" class="btn btn-primary"><i class="ri-refresh-line"></i>Ubah Api Key</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="table-responsive">
                     <table class="table table-bordered table-md text-white">
                        <tr>
                           <th colspan="2"><h3><center><code>{{ env("APP_URL") }}/api/service</code></center></h3></th>
                        </tr>
                        <tr>
                           <th width="50%">Parameter</th>
                           <th>Keterangan</th>
                        </tr>
                        <tr>
                           <td>api_key</td>
                           <td>API Key Anda.</td>
                        </tr>
                     </table>
                  </div>
                  <h4>Contoh Respon Yang Ditampilkan</h4>
                  <div class="table-responsive">
                     <table class="table table-bordered table-md text-white">
                        <tr>
                           <th width="50%">Resppon Sukses</th>
                           <th>Respon Gagal</th>
                        </tr>
                        <tr>
                           <td>
                              <font color="white">
                                 <pre>
{
  "status":true,
  "data":[
     {
        "id":"1",
        "name":"86 Diamond",
        "category":"Mobile Legend",
        "type": "topup",
        "status": "available",
        "price":{
           "member": 15000,
           "gold": 14500,
           "platinum": 14000
        }
     }
  ]
}
                                 </pre>
                              </font>
                           </td>
                           <td> 
                              <font color="white">
                                 <pre>
{
    "status":false,
    "message":"api_key tidak ditemukan",
}
                                 </pre>
                              </font>
                              <b>Kemungkinan pesan yang ditampilkan:</b>
                              <ul>
                                 <li>Permintaan tidak sesuai</li>
                                 <li>API Key salah</li>
                              </ul>
                           </td>
                        </tr>
                     </table>
                  </div>
                  <div class="table-responsive">
                     <table class="table table-bordered table-md text-white">
                        <tr>
                           <th colspan="2"><h3><center><code>{{ ENV("APP_URL") }}/api/order</code></center></h3></th>
                        </tr>
                        <tr>
                           <th width="50%">Parameter</th>
                           <th>Keterangan</th>
                        </tr>
                        <tr>
                           <td>api_key</td>
                           <td>API Key Anda.</td>
                        </tr>
                        <tr>
                           <td>service</td>
                           <td>Id service Layanan. <a href='{{ route('price') }}'>Klik Disini</a> Untuk melihat ID layanan</td>
                        </tr>
                        <tr>
                           <td>target</td>
                           <td>Silahkan isi Dataid|zoneid (jika tidak ada zoneid silahkan isi Dataid saja) contoh 205378240|9086.</td>
                        </tr>
                     </table>
                  </div>
                  <h4>Contoh Respon Yang Ditampilkan</h4>
                  <div class="table-responsive">
                     <table class="table table-bordered table-md text-white">
                        <tr>
                           <th width="50%">Resppon Sukses</th>
                           <th>Respon Gagal</th>
                        </tr>
                        <tr>
                           <td>
                              <font color="white">
                                 <pre>
{
   "status":true,
   "data":{
       "trx_id": "JS1987XXXXXX",
       "status":"Pending"
   }
}</pre>
                              </font>
                           </td>
                           <td> 
                              <font color="white">
                                 <pre>
{
      "status":false,
      "message":"api key tidak valid",
}
                                </pre>
                              </font>
                              <br>
                              <b>Kemungkinan pesan yang ditampilkan:</b>
                              <ul>
                                 <li>Permintaan tidak sesuai</li>
                                 <li>API Key salah</li>
                              </ul>
                           </td>
                        </tr>
                     </table>
                  </div>
                  <div class="table-responsive">
                     <table class="table table-bordered table-md text-white">
                        <tr>
                           <th colspan="2"><h3><center><code>{{ ENV("APP_URL") }}/api/status</code></center></h3></th>
                        </tr>
                        <tr>
                           <th width="50%">Parameter</th>
                           <th>Keterangan</th>
                        </tr>
                        <tr>
                           <td>api_key</td>
                           <td>API Key Anda.</td>
                        </tr>
                        <tr>
                           <td>trx_id</td>
                           <td>Id Order Pesanan</td>
                        </tr>
                     </table>
                  </div>
                  <h4>Contoh Respon Yang Ditampilkan</h4> 
                  <div class="table-responsive">
                     <table class="table table-bordered table-md text-white">
                        <tr>
                           <th width="50%">Resppon Sukses</th>
                           <th>Respon Gagal</th>
                        </tr>
                        <tr>
                           <td>
                              <font color="white">
                                 <pre> 
{
  "status":true,
  "data":{
     "trx_id":"JSXXXXXXX",
     "target":"20393383990",
     "status":"Success",
     "note":"",
     "price":18000
  }
}
                                </pre>
                              </font>
                              <b>List Status</b>
                              <ul>
                                 <li>Pending</li>
                                 <li>Processing</li>
                                 <li>Success</li>
                                 <li>Error</li>
                              </ul>
                           </td>
                           <td> 
                              <font color="white">
                                 <pre> 
{
    "status":false,
    "message":"trx id tidak ditemukan",
}
                                 </pre>
                              </font>
                              <br>
                              <b>Kemungkinan pesan yang ditampilkan:</b>
                              <ul>
                                 <li>Permintaan tidak sesuai</li>
                                 <li>API Key salah</li>
                              </ul>
                           </td>
                        </tr>
                     </table>
                  </div>
               </div>
            </div>            
        </div>
    </div>
</main>
@endsection