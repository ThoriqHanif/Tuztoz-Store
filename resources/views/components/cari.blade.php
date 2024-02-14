@extends('layouts.master-invoice')

@section('content')

    <body>

        <body>
            <nav class="navbar active">
                <div class="container">
                    <div class="navLeft">
                        <img src="{{ asset('assets/logo/20240123_060438.png') }}"
                            onclick="window.location.href={{ route('home') }}" alt="">
                        <div class="logoName">Tuztoz</div>
                    </div>
                    <div class="navRight">

                        @if (Auth::check())
                            <a href="{{ route('dashboard') }}" class="btnYellowPrimary login">Dashboard</a>
                        @else
                            <a href="{{ url('login') }}" class="btnYellowPrimary login">Masuk</a>
                            <a href="{{ route('register') }}" class="btnYellowSecond login">Daftar</a>
                        @endif
                        <div class="containerMenu">
                            <div class="dropdown">
                                <button class="dropdownMenu shadow">
                                    <i class="bi bi-grid-fill"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="{{ route('home') }}">
                                        <div class="containers">
                                            <i class="bi bi-house-door-fill"></i>
                                            <div class="name">Beranda</div>
                                        </div>
                                        <i class="bi bi-arrow-right-short"></i>
                                    </a>
                                    <a href="{{ url('daftar-harga') }}">
                                        <div class="containers">
                                            <i class="bi bi-tags-fill"></i>
                                            <div class="name">Daftar Harga</div>
                                        </div>
                                        <i class="bi bi-arrow-right-short"></i>
                                    </a>
                                    <a href="{{ route('cari') }}">
                                        <div class="containers">
                                            <i class="bi bi-receipt-cutoff"></i>
                                            <div class="name">Lacak Pesanan</div>
                                        </div>
                                        <i class="bi bi-arrow-right-short"></i>
                                    </a>

                                </div>
                            </div>
                        </div>

                        <label class="theme-switch shadow">
                            <input class='toggle-checkbox' id="checkbox" type='checkbox'></input>
                            <div class="switch-icon">
                                <i class="bi bi-brightness-high yellowprim"></i>
                            </div>
                        </label>

                    </div>
                </div>
            </nav>
            <div class="mobileNav">
                <a href="{{ route('home') }}" class="containers ">
                    <i class="bi bi-house-door-fill"></i>
                    <div class="text">Beranda</div>
                </a>

                <a href="{{ url('daftar-harga') }}" class="containers ">
                    <i class="bi bi-tags-fill"></i>
                    <div class="text">Daftar Harga</div>
                </a>
                <a href="{{ route('cari') }}" class="containers ">
                    <i class="bi bi-receipt-cutoff"></i>
                    <div class="text">Lacak Pesanan</div>
                </a>
                {{-- <a href="{{ route('login') }}" class="containers ">
                    <i class="bi bi-person-fill-lock"></i>
                    <div class="text">Login</div>
                </a> --}}
                @if (Auth::check())
                    <a href="{{ url('account') }}" class="containers ">
                        <i class="bi bi-person-fill"></i>
                        <div class="text">Account</div>
                    </a>

                    <a href="{{ url('dashboard') }}" class="containers ">
                        <i class="bi bi-app-indicator"></i>
                        <div class="text">Dashboard</div>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="containers ">
                        <i class="bi bi-person-fill-lock"></i>
                        <div class="text">Login</div>
                    </a>
                @endif
            </div>
            <section>
                <div class="container container-track overflow-hidden mb-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="containerTracking">
                                <div class="head">
                                    <div class="title">Cek Status Pesanan Kamu</div>
                                </div>
                                <div class="cardTrack">
                                    <form action="{{ url('/cari') }}" method="post">
                                        @csrf
                                        <div class="floating-label-content">
                                            <input type="text" class="form-control floating-input" 
                                                value="" id="id" name="id" placeholder=" ">
                                            <label class="floating-label" for="id">Order ID</label>
                                            <button class="btnYellowPrimary py-3" type="submit">Cari</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    {{-- <div class="h-40"></div> --}}
                </div>

                <div class="container" style="margin-bottom: 40px">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="title-head mb-3">10 Transaksi Terakhir</div>
                            <div class="cards shadow mb-4">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr class="text-dark">
                                                <th>TANGGAL</th>
                                                <th nowrap="">ORDER ID</th>
                                                <th nowrap="">PRODUK</th>
                                                <th nowrap="">HARGA</th>
                                                <th width="10">STATUS</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-dark">
                                            @foreach ($pembelians as $pembelian)
                                            @php
                                                $label_pesanan = '';
                                                if ($pembelian->status == 'Batal') {
                                                    $label_pesanan = 'warning';
                                                } elseif ($pembelian->status == 'Pending') {
                                                    $label_pesanan = 'info';
                                                } elseif ($pembelian->status == 'Success') {
                                                    $label_pesanan = 'success';
                                                } else {
                                                    $label_pesanan = 'danger';
                                                }
                                            @endphp
                                            <tr>
                                                <td>{{ $pembelian->created_at }}</td>
                                                <td>{{ substr($pembelian->order_id, 0, 12) }}****</td>
                                                <td>{{ $pembelian->layanan }}</td>
                                                <td>{{ $pembelian->harga }}</td>
                                                <td><span
                                                        class="text-{{ $label_pesanan }}">{{ $pembelian->status }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <div class="container">
                        <div class="logo">
                            <img src="{{ asset('assets/logo/20240123_060438.png') }}" alt="" />
                            <div class="names">Tuztoz Indonesia</div>
                        </div>
                        <div class="desc mx-auto" style="margin-top: 20px">
                            Professional Digital Top Up and Gaming Services in Indonesia</div>
                        <div class="sosmed">
                            {{-- <div class="flex justify-between"> --}}
                            <img src="/assetss/payment/bca_footer.png" width="50px" loading="lazy"
                                class="h-7 rounded-sm bg-white p-1">
                            <img src="/assetss/payment/linkaja_footer.png" width="50px" loading="lazy"
                                class="h-7 rounded-sm bg-white p-1">
                            <img src="/assetss/payment/shopay_footer.png" width="50px" loading="lazy"
                                class="h-7 rounded-sm bg-white p-1">
                            <img src="/assetss/payment/ovo_footer.png" width="50px" loading="lazy"
                                class="h-7 rounded-sm bg-white p-1">
                            <img src="/assetss/payment/gopay_footer.png" width="50px" loading="lazy"
                                class="h-7 rounded-sm bg-white p-1">
                            <img src="/assetss/payment/dana_footer.png" width="50px" loading="lazy"
                                class="h-7 rounded-sm bg-white p-1">
                            <img src="/assetss/payment/qris_footer.png" width="50px" loading="lazy"
                                class="h-7 rounded-sm bg-white p-1">
                            <img src="/assetss/payment/indomaret_footer.png" width="50px" loading="lazy"
                                class="h-7 rounded-sm bg-white p-1">
                            {{-- </div> --}}
                        </div>
                        <div class="bottomFoot">
                            <div class="copyright">
                                <div class="text">
                                    Copyright ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> {{ ENV('APP_NAME') }} Indonesia. All Rights Reserved
                                </div>
                            </div>
                            <div class="linkFoot">
                                <div class="containers">
                                    <a href="{{ route('home') }}" class="text-footer">Home</a>
                                    <a href="{{ route('aboutus') }}" class="text-footer">About Us</a>
                                    <a href="{{ url('daftar-harga') }}" class="text-footer">Daftar Harga</a>
                                    <a href="{{ route('cari') }}" class="text-footer">Lacak Pesanan</a>
        
                                    <a href="{{ url('page/term') }}">Syarat & Ketentuan</a>
                                    <a href="{{ url('contact-us') }}">Hubungi Kami</a>
                                </div>
                            </div>
                        </div>
                        <div class="h-40"></div>
                    </div>
                </div>
            </section>
        </body>

        <script>
            setInterval(function() {
                $("#toolbarContainer").remove();
            }, 500);
      
            function salin(text, label_text) {
      
                navigator.clipboard.writeText(text);
      
                toastr.success(label_text);
            }
        </script>

        <script>
            $(document).ready(function() {
                $("#paycode").tooltip();
                $("#paycode").click(function() {
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
                window.onafterprint = function() {
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

                    // $("#days").text(days);
                    $("#hours").text(hours);
                    $("#minute").text(minutes);
                    $("#second").text(seconds);
                }
            }
        </script>
    @endsection
