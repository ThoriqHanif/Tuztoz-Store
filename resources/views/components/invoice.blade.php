@extends('../main')

@section('css')
<style>
 .css-scrciq {
   border: 1px solid rgba(203, 203, 203, 0.5);
    background: linear-gradient(163.42deg, rgb(90 90 90) -107%, rgba(255, 255, 255, 0) 105.46%);
 }
 
@media (min-width: 1024px)
.lg\:gap-0 {
     gp: 0;
}
@media only screen and (min-width: 1001px)
div {
    display: block;
}
@media (min-width: 1024px)
.lg\ :lex-row {
    flex-direction: row;
}
@med  i (min-width: 768px)
.md\:gap-0 {
    gap: 0;
} 
@media (min-width: 768px)
.md\:flex-row {
     fex-direction: ow;
}

@med  i only screen ad (min-width: 1001px)
div {
    display: block;
}      

.shadow-sm, .shadow-xl {
     b
  x-shadow: var(
    --tw-ring-offset-shadow,
     0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow);
}
    
  
.shadow-sm {
    --tw-shadow: 0 1px 2px 0 rgba(0,0,0,.05);
     -
  tw-shadow-colo
    red: 0 1px 2px 0 var(--t
    -shadow-color);
}
    
  


.font-bold {

    font-weight: 700;
}
.text-4xl {

    font-size: 2.25rem;
    line-height: 2.5rem;
} 
  

.order-1 {
    order: 1;
} 
  


#hours, #minutes, #seconds, .total {
   background: linear-gradient(to right,rgb(249, 45, 45), rgb(245, 121, 30));-webkit-background-clip: text;-webkit-text-fill-color: transparent;
} 
  

</style>
@endsection

@section('content')
@include('../navbar')
  <main class="my-4 min-h-[60vh]">
    <div class="mx-auto max-w-7xl px-4 pb-14 sm:px-6 lg:px-14">
      <div class="grow gap-8 pt-4 lg:flex">
        <div>
          <div class="h-full pt-6 lg:w-80">
            @if($data->status_pembayaran == "Belum Lunas")
            <div class="text-center pb-2 flex flex-col gap-2">
              <h3 class="text-lg font-bold">Belum Bayar
              </h3>
              <p class="text-[0.92rem]">Selesaikan Pembayaran Sebelum Waktu Habis
              </p>
            </div>
            <div class="mt-4">
              <div class="relative mx-auto w-72">
                <div class="px-4">
                  <dl class="grid grid-cols-3 rounded-lg gap-3">
                    <div class="flex flex-col p-6 text-center items-center rounded-2xl css-scrciq">
                      <dt class="order-2 mt-2 text-sm font-medium">Jam
                      </dt>
                      <dd class="order-1 text-4xl font-bold css-m6e15a hours">
                        <span id="hours">
                        </span>
                      </dd>
                    </div>
                    <div class="flex flex-col p-6 text-center items-center rounded-2xl css-scrciq">
                      <dt class="order-2 mt-2 text-sm font-medium">Menit
                      </dt>
                      <dd class="order-1 text-4xl font-bold css-m6e15a minutes">
                        <span id="minutes">
                        </span>
                      </dd>
                    </div>
                    <div class="flex flex-col p-6 text-center items-center rounded-2xl css-scrciq">
                      <dt class="order-2 mt-2 text-sm font-medium" >Detik
                      </dt>
                      <dd class="order-1 text-4xl font-bold css-m6e15a seconds">
                        <span id="seconds">
                        </span>
                      </dd>
                    </div>
                  </dl>
                </div>
              </div>
            </div>
            
            
                    
            
            @elseif($data->status_pembelian == "Batal")
            <img src="/assets/images/transaction-fail.gif" alt="">
            <div class="text-center">
                <h5 class="text-xl font-bold">Lakukan transaksi kembali dengan promo menarik!</h5>
            </div>
            @elseif($data->status_pembayaran == "EXPIRED")
            <img src="/assets/images/transaction-fail.gif" alt="">
            <div class="text-center">
                <h5 class="text-xl font-bold">Lakukan transaksi kembali dengan promo menarik!</h5>
            </div>
            @elseif($data->status_pembelian == "Success")
            <img src="/assets/images/transaction-success.gif" alt="">
            <div class="text-center">
                <h5 class="text-xl font-bold">Success!</h5>
            </div>
             @elseif($data->status_pembayaran == "Lunas")
            <img src="/assets/images/transaction-success.gif" alt="">
            <div class="text-center">
                <h5 class="text-xl font-bold">Success!</h5>
            </div>
             @elseif($data->status_pembayaran == "PAID")
            <img src="/assets/images/transaction-success.gif" alt="">
            <div class="text-center">
                <h5 class="text-xl font-bold">Success!</h5>
            </div>
            @endif
            @if($data->status_pembayaran == "Belum Lunas")
            <p class="mt-4 text-center text-sm">Agar Pesanan Kamu Tidak Expired
            </p>@endif
            <div class="py-4">
                @if($data->status_pembayaran == "Belum Lunas")
              <div class="mt-4 mb-4 flex justify-center rounded-lg  py-4 qrCode">
                <h6>Kode Bayar / Nomor VA / QRIS:
                  <br>
                  <br>
                  @endif
                  @if($data->status_pembayaran == "Belum Lunas")
                  @if(Str::upper($data->metode_pembayaran) == "QRIS" || Str::upper($data->metode_pembayaran) == "QRISC" 
                || Str::upper($data->metode_pembayaran) == "QRIS2" || Str::upper($data->metode_pembayaran) == "QRISOP" 
                || Str::upper($data->metode_pembayaran) == "SP" || Str::upper($data->metode_pembayaran) == "QRISCOP" )
                <div class="col-lg-7 d-print-none">
                    <a href="{{$data->no_pembayaran}}" download="">
                      <img src="{{$data->no_pembayaran}}" alt="qrcode" class="img-fluid" width="150px" style="margin-left: 50px;">
                    </a>
                    </h6>
                  <br>
                  </div>                
                @elseif(Str::upper($data->metode_pembayaran) == "SHOPEEPAY")
                <div class="col-lg-7 d-print-none">
                    <a href="{{$data->no_pembayaran}}" download="">
                    </a>
                    </h6>
                  <br>
                  </div>
                @elseif(Str::upper($data->metode_pembayaran) == "LA")
                <a class="btn btn-primary btn-sm" href="{{$data->no_pembayaran}}">KLIK DISINI BAYAR VIA LINKAJA</a>
                @elseif(Str::upper($data->metode_pembayaran) == "SA")
                <a class="btn btn-primary btn-sm" href="{{$data->no_pembayaran}}">KLIK DISINI BAYAR VIA SHOPEE</a>
                @elseif(Str::upper($data->metode_pembayaran) == "DA")
                <a class="btn btn-primary btn-sm" href="{{$data->no_pembayaran}}">KLIK DISINI BAYAR VIA DANA</a>
                 @elseif(Str::upper($data->metode_pembayaran) == "OV")
                <a class="btn btn-primary btn-sm" href="{{$data->no_pembayaran}}">KLIK DISINI BAYAR VIA OVO</a>
                  <br>
                  </div> 
                @elseif(Str::upper($data->metode_pembayaran) == "OVOADMIN" || Str::upper($data->metode_pembayaran) == "GOPAY" 
                   || Str::upper($data->metode_pembayaran) == "SHOPEE" || Str::upper($data->metode_pembayaran) == "DANA" 
                   || Str::upper($data->metode_pembayaran) == "LINKAJA" || Str::upper($data->metode_pembayaran) == "ISAKU"
                   || Str::upper($data->metode_pembayaran) == "BCA" || Str::upper($data->metode_pembayaran) == "BRI"
                   || Str::upper($data->metode_pembayaran) == "BNI" || Str::upper($data->metode_pembayaran) == "MANDIRI"
                   || Str::upper($data->metode_pembayaran) == "CIMB")
                  <kbd class="bg-dark" data-toggle="tooltip" data-placement="bottom" id="paycode" title="Click to copy" style="margin-left: 50px;">{{$data->no_pembayaran}}
                  </kbd>
                </h6>
                <br>
              </div>
              @else
              <kbd class="bg-dark" data-toggle="tooltip" data-placement="bottom" id="paycode" title="Click to copy" style="margin-left: 50px;">{{$data->no_pembayaran}}
                  </kbd>
                </h6>
                <br>
              </div>
              @endif
              @endif
              @if($data->status_pembayaran == "Belum Lunas")
               @if(Str::upper($data->metode_pembayaran) == "QRIS" || Str::upper($data->metode_pembayaran) == "QRISC" 
                || Str::upper($data->metode_pembayaran) == "QRIS2" || Str::upper($data->metode_pembayaran) == "QRISOP" 
                || Str::upper($data->metode_pembayaran) == "SP"|| Str::upper($data->metode_pembayaran) == "QRISCOP" )
                <div class="mb-4 flex justify-center">
                  <button type="button" class="inline-flex items-center rounded-full border border-transparent px-6 py-3 text-sm font-semibold leading-4 shadow-sm focus:outline-none" onclick="window.location.href='{{$data->no_pembayaran}}'">Unduh kode QR
                  </button>
                </div>
               @elseif(Str::upper($data->metode_pembayaran) == "SHOPEEPAY")
               <div class="mb-4 flex justify-center">
                  <button type="button" class="inline-flex items-center rounded-full border border-transparent px-6 py-3 text-sm font-semibold leading-4 shadow-sm focus:outline-none" onclick="window.location.href='{{$data->no_pembayaran}}'">Bayar Sekarang
                  </button>
                </div>
                @elseif(Str::upper($data->metode_pembayaran) == "OVO")
                <div class="mb-4 flex justify-center">
                  <button type="button" class="inline-flex items-center rounded-full border border-transparent px-6 py-3 text-sm font-semibold leading-4 shadow-sm focus:outline-none" onclick="window.location.href='{{$data->no_pembayaran}}'">Bayar Sekarang
                  </button>
                </div>
                @elseif(Str::upper($data->metode_pembayaran) == "OVOADMIN" || Str::upper($data->metode_pembayaran) == "GOPAY" 
                   || Str::upper($data->metode_pembayaran) == "SHOPEE" || Str::upper($data->metode_pembayaran) == "DANA" 
                   || Str::upper($data->metode_pembayaran) == "LINKAJA" || Str::upper($data->metode_pembayaran) == "ISAKU"
                   || Str::upper($data->metode_pembayaran) == "BCA" || Str::upper($data->metode_pembayaran) == "BRI"
                   || Str::upper($data->metode_pembayaran) == "BNI" || Str::upper($data->metode_pembayaran) == "MANDIRI"
                   || Str::upper($data->metode_pembayaran) == "CIMB")
                   <div class="mb-4 flex justify-center">
                <button type="button" class="inline-flex items-center rounded-full border border-transparent px-6 py-3 text-sm font-semibold leading-4 shadow-sm focus:outline-none" title="Click to copy" id="paycode" onclick="copyToClipboard()">Click To Copy
                </button>
              </div>
              @else
              <div class="mb-4 flex justify-center">
                <button type="button" class="inline-flex items-center rounded-full border border-transparent px-6 py-3 text-sm font-semibold leading-4 shadow-sm focus:outline-none" title="Click to copy" id="paycode" onclick="copyToClipboard()">Click To Copy
                </button>
              </div>
              @endif
              @endif
            </div>
          </div>
        </div>
        <div class="min-w-0 flex-1 xl:flex">
          <div class="lg:min-w-0 lg:flex-1">
            <div class="h-full py-6">
              <div class="flex flex-col lg:flex-row md:flex-row gap-3 lg:gap-0 md:gap-0 justify-between rounded-2xl p-6 shadow-sm css-scrciq">
                <div>
                  <h5 class="font-medium" style="color: rgb(203, 203, 203);">Tanggal Pembelian
                  </h5>
                  <h5 class="font-bold text-sm">{{ $data->created_at }}
                  </h5>
                </div>
                <div>
                  <h5 class="font-medium" style="color: rgb(203, 203, 203);">Nomor Invoice
                  </h5>
                  <h5 class="font-bold text-sm">{{ $data->id_pembelian }}
                  </h5>
                </div>
                <div>
                  <h5 class="font-medium" style="color: rgb(203, 203, 203);">Metode Pembayaran
                  </h5>
                  <h5 class="font-bold text-sm">{{ $data->metode_pembayaran }}
                  </h5>
                </div>
                <div>
                  <h5 class="font-medium" style="color: rgb(203, 203, 203);">Status Pesanan
                  </h5>
                  <h5 class="font-bold text-sm">
                    <b>
                    @if($data->tipe_transaksi == 'joki')
                        @if($data->status_joki == 'Proses')
                      <span class="text-info">PROSES</span>
                      @else
                      <span class="text-success">SUCCESS</span>
                      @endif
                      
                     @elseif($data->tipe_transaksi == 'dm_vilog')
                        @if($data->status_pembelian == "Pending") 
                        <span class="text-warning">PENDING</span>
                        @elseif($data->status_pembelian == "Processing")
                        <span class="text-primary">PROSES</span>
                        @elseif($data->status_pembelian == "Batal")
                        <span class="text-danger">CANCELED</span>
                        @elseif($data->status_pembelian == "Success")
                        <span class="text-success">SUCCESS</span>
                        @elseif($data->status_pembelian == "Sukses")
                        <span class="text-success">SUCCESS</span>
                        @elseif($data->status_pembelian == "Proses")
                        <span class="text-primary">PROSES</span>
                        @endif
                        
                    @elseif($data->tipe_transaksi == 'gift_skin')
                        @if($data->status_pembelian == "Pending")
                        <span class="text-warning">PENDING</span>
                        @elseif($data->status_pembelian == "Processing")
                        <span class="text-primary">PROSES</span>
                        @elseif($data->status_pembelian == "Batal")
                        <span class="text-danger">CANCELED</span>
                        @elseif($data->status_pembelian == "Success")
                        <span class="text-success">SUCCESS</span>
                        @elseif($data->status_pembelian == "Sukses")
                        <span class="text-success">SUCCESS</span>
                        @elseif($data->status_pembelian == "Proses")
                        <span class="text-primary">PROSES</span>
                        @endif 
                        
                    
                    @else
                        @if($data->status_pembelian == "Pending")
                        <span class="text-warning">PENDING</span>
                        @elseif($data->status_pembelian == "Processing")
                        <<span class="text-primary">PROSES</span>
                        @elseif($data->status_pembelian == "Batal")
                        <span class="text-danger">CANCELED</span>
                        @elseif($data->status_pembelian == "Success")
                        <span class="text-success">SUCCESS</span>
                        @elseif($data->status_pembelian == "Sukses")
                        <span class="text-success">SUCCESS</span>
                        @elseif($data->status_pembelian == "Proses")
                        <span class="text-primary">PROSES</span>
                        @endif
                     
                    
                                                    
                    @endif
                        
                    </b>
                  </h5>
                </div>
              </div>
              <div class="mt-4 overflow-hidden rounded-2xl shadow-sm css-scrciq">
                  
                <div class="flex items-center gap-4 px-4 py-5 sm:px-6">
                    <img alt="{{ $data->nama }}" srcset="{{ $data->thumbnail }} 1x, {{ $data->thumbnail }} 2x" src="{{ $data->thumbnail }}" width="500" height="500" decoding="async" data-nimg="1" class="h-10 w-10 rounded-lg md:h-16 md:w-16 object-cover" loading="lazy" style="color: transparent;">
                    <h3 class="text-lg font-bold leading-6">{{ $data->nama }}</h3>
                </div>
                  
                
              <div class="border-t border-[#626274]">
                <dl class="border-b border-[#626274] p-4 pb-8">
                  <div class="pb-0 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-4">
                    <h5 class="font-bold">Detail
                    </h5>
                  </div>
                  <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                    <dt class="text-sm font-medium">Item
                    </dt>
                    <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-0">{{ $data->layanan }}
                    </dd>
                  </div>
                  @if($data->tipe_transaksi == 'joki')
                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                    <dt class="text-sm font-medium">Email
                    </dt>
                    <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data->email_joki }}
                    </dd>
                  </div> 
                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                    <dt class="text-sm font-medium">Password
                    </dt>
                    <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data->password_joki }}
                    </dd>
                  </div> 
                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                    <dt class="text-sm font-medium">Login Via
                    </dt>
                    <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data->loginvia_joki }}
                    </dd>
                  </div>                              
                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                    <dt class="text-sm font-medium">Nickname
                    </dt>
                    <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data->nickname_joki }}
                    </dd>
                  </div>  
                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                    <dt class="text-sm font-medium">Request
                    </dt>
                    <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data->request_joki }}
                    </dd>
                  </div>     
                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                    <dt class="text-sm font-medium">Catatan
                    </dt>
                    <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data->catatan_joki }}
                    </dd>
                  </div>                         
                    @elseif($data->tipe_transaksi == 'dm_vilog')
                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                    <dt class="text-sm font-medium">Email
                    </dt>
                    <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data->email_vilog }}
                    </dd>
                  </div>                         
                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                    <dt class="text-sm font-medium">Password
                    </dt>
                    <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data->password_vilog }}
                    </dd>
                  </div>                          
                    <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                    <dt class="text-sm font-medium">Login Via
                    </dt>
                    <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data->loginvia_vilog }}
                    </dd>
                  </div>                          
                    @else                        
                  <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                    <dt class="text-sm font-medium">ID User
                    </dt>
                    <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data->user_id }}  {{ $data->zone != null ? "(".$data->zone.")" : ''  }}
                    </dd>
                  </div>
                  <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                    <dt class="text-sm font-medium">Nickname
                    </dt>
                    <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-">{{ $data->nickname }}
                    </dd>
                  </div>
                  @endif
                  <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:py-2">
                    <dt class="text-sm font-medium">Harga
                    </dt>
                    <dd class="mt-1 text-sm font-bold sm:col-span-2 sm:mt-0">Rp.
                      <span type="button" title="Click to copy"
                            id="totPriceBayar" onclick="copyToClipboard2(this)">
                        {{ number_format($data->harga_pembayaran, 0, ',','.') }}
                      </span>
                    </dd>
                  </div>
                </dl>
                <div class="flex justify-between p-4">
                  <h5 class="font-bold">Total Pembayaran
                  </h5>
                  <div class="flex items-center space-x-2">
                    <h5 class="font-extrabold ">
                      <td class="right text-right">
                        <strong class="total">
                          Rp.
                          <span type="button" title="Click to copy" id="paycode"
                                onclick="copyToClipboard()">
                            {{ number_format($data->harga_pembayaran, 0, ',','.') }}
                          </span>
                          <i class="fas fa-copy" type="button" title="Click to copy" id="paycode"
                             onclick="copyToClipboard()">
                          </i>
                        </strong>
                      </td>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-8 text-center">
              <p class="mx-auto max-w-xl text-sm">
                Jika Kamu Mengalami Kendala Pembayaran Atau Adanya Keluhan Terkait Pembayaran Anda Dapat Menghubungi Kami Melalui&nbsp;
                <a href="{{ !$config ? '' : $config->url_wa }}" class="capitalize text-success" target="_blank" rel="noreferrer">WhatsApp
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>
@include('../footer')
@section('js')
<!--SC click to copy-->

<!--SC Toogle-->
<script>
function toggleList() {
  var list = document.getElementById("headlessui-menu-items-:r0:");
  var button = document.getElementById("headlessui-menu-button-:R1qd6:");
  var expanded = button.getAttribute("aria-expanded") === "true";

  if (expanded) {
    list.style.display = "none";
    button.setAttribute("aria-expanded", "false");
    button.setAttribute("aria-controls", "");
  } else {
    list.style.display = "block";
    button.setAttribute("aria-expanded", "true");
    button.setAttribute("aria-controls", "headlessui-disclosure-panel-:r15:");
  }
}

</script>

<!-- End SC Toogle-->
<script>
    function copyToClipboard() {
        var paycodeElement = document.getElementById("paycode");
        var textToCopy = paycodeElement.innerText;

        navigator.clipboard.writeText(textToCopy).then(function() {
            alert("Text has been copied: " + textToCopy);
        }, function(error) {
            console.error("Failed to copy text: ", error);
        });
    }
</script>

<script>
    function copyToClipboard2() {
        var paycodeElement = document.getElementById("totpricee");
        var textToCopy = paycodeElement.innerText;

        navigator.clipboard.writeText(textToCopy).then(function() {
            alert("Text has been copied: " + textToCopy);
        }, function(error) {
            console.error("Failed to copy text: ", error);
        });
    }
</script>
<!--end SC click to copy-->
<script>
    $(document).ready(function () {
            $("#paycode").tooltip();
            $("#paycode").click(function () {
                copyToClipboard($(this).text().trim().replace(".", ""), $(this));
            })
            $("#paycode").css('cursor', 'pointer');
        })

        function print_invoice() {
            var printContents = document.getElementById('invoice').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            window.onafterprint = function () {
                location.reload()
            }
        }

        function copyToClipboard2(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text().trim().replace(".", "")).select();
            document.execCommand("copy");
            $temp.remove();

        }
        
var timer;
var compareDate;

// Cek apakah waktu awal sudah disimpan di localStorage
if (localStorage.getItem("startTime")) {
  // Jika sudah ada, ambil waktu awal dari localStorage
  compareDate = new Date(localStorage.getItem("startTime"));
} else {
  // Jika belum ada, atur waktu awal baru
  compareDate = new Date();
  compareDate.setTime(compareDate.getTime() + (3 * 60 * 60 * 1000)); // 3 jam dari sekarang
  localStorage.setItem("startTime", compareDate); // Simpan waktu awal di localStorage
}

timer = setInterval(function() {
  timeBetweenDates(compareDate);
}, 1000);

function timeBetweenDates(toDate) {
  var dateEntered = toDate;
  var now = new Date();
  var difference = dateEntered.getTime() - now.getTime();

  if (difference <= 0) {
    // Timer selesai
    clearInterval(timer);
    localStorage.removeItem("startTime"); // Hapus waktu awal dari localStorage
  } else {
    var seconds = Math.floor(difference / 1000);
    var minutes = Math.floor(seconds / 60);
    var hours = Math.floor(minutes / 60);
    var days = Math.floor(hours / 24);

    hours %= 4;
    minutes = minutes % 60; // Menghitung sisa menit setelah dikurangi jam
    seconds = seconds % 60; // Menghitung sisa detik setelah dikurangi menit

    $("#days").text(days);
    $("#hours").text(hours);
    $("#minutes").text(minutes);
    $("#seconds").text(seconds);
  }
}



</script>
@endsection

@endsection