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
                                            <input type="text" class="form-control floating-input" value=""
                                                id="id" name="id" placeholder=" ">
                                            <label class="floating-label" for="id">Order ID</label>
                                            <button class="btnYellowPrimary py-3" type="submit">Cari</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center  position-relative">
                            <div class="circle position-absolute top-50 start-0 translate-middle d-block d-lg-none"></div>
                            <div class="circle position-absolute top-0 start-50 translate-middle d-none d-lg-block"></div>

                            <div class="circle position-absolute top-50 start-100 translate-middle d-block d-lg-none"></div>
                            <div class="circle position-absolute top-100 start-50 translate-middle d-none d-lg-block"></div>

                            <!-- Deyail Pembelian -->
                            <div class="col-lg-4 col-12 receipt-left">
                                <div class="ticketDetail">
                                    <div class="head mb-5">Detail Pembelian</div>
                                    <div class="containers">
                                        <div class="title">Order ID</div>
                                        <div class="desc">{{ $data->id_pembelian }} <i class="bi bi-clipboard2"
                                                onclick="salin('{{ $data->id_pembelian }}', 'Order ID berhasil disalin');"></i>
                                        </div>
                                    </div>

                                    @if ($data->tipe_transaksi == 'joki')
                                        <div class="containers">
                                            <div class="title">Email</div>
                                            <div class="desc">{{ $data->email_joki }}</div>
                                        </div>
                                        <div class="containers">
                                            <div class="title">Password</div>
                                            <div class="desc">{{ $data->password_joki }}</div>
                                        </div>
                                        <div class="containers">
                                            <div class="title">Login Via</div>
                                            <div class="desc">{{ $data->loginvia_joki }}</div>
                                        </div>
                                        <div class="containers">
                                            <div class="title">Nickname</div>
                                            <div class="desc">{{ $data->nickname_joki }}</div>
                                        </div>
                                        <div class="containers">
                                            <div class="title">Request</div>
                                            <div class="desc">{{ $data->request_joki }}</div>
                                        </div>
                                        <div class="containers">
                                            <div class="title">Catatan</div>
                                            <div class="desc">{{ $data->catatan_joki }}</div>
                                        </div>
                                    @elseif ($data->tipe_transaksi == 'dm_vilog')
                                        <div class="containers">
                                            <div class="title">Email</div>
                                            <div class="desc">{{ $data->email_vilog }}</div>
                                        </div>
                                        <div class="containers">
                                            <div class="title">Password</div>
                                            <div class="desc">{{ $data->password_vilog }}</div>
                                        </div>
                                        <div class="containers">
                                            <div class="title">Login Via</div>
                                            <div class="desc">{{ $data->loginvia_vilog }}</div>
                                        </div>
                                    @endif
                                    <div class="containers">
                                        <div class="title">Produk</div>
                                        <div class="desc text-end">{{ $data->layanan }}</div>
                                    </div>
                                    <div class="containers">
                                        <div class="title">ID Player</div>
                                        <div class="desc">{{ $data->user_id }}
                                            {{ $data->zone != null ? '(' . $data->zone . ')' : '' }}</div>
                                    </div>
                                    <div class="containers">
                                        <div class="title">Nickname</div>
                                        <div class="desc">{{ $data->nickname }}</div>
                                    </div>

                                    <div class="containers">
                                        <div class="title">Harga</div>
                                        <div class="desc">Rp {{ number_format($data->harga_pembayaran, 0, ',', '.') }}-
                                        </div>
                                    </div>
                                    {{-- <div class="containers">
                                        <div class="title">Fee Transaksi</div>
                                        <div class="desc">Rp 760,-</div>
                                    </div>
                                    <div class="containers">
                                        <div class="title">Kode Unik</div>
                                        <div class="desc">Rp 0,-</div>
                                    </div> --}}
                                    <div class="containers">
                                        <div class="title">Metode Pembayaran</div>
                                        <div class="desc">{{ $data->metode_pembayaran }}</div>
                                    </div>
                                    <div class="containers">
                                        <div class="title">Status</div>
                                        <div class="desc txt-primary">
                                            {{-- <span class="text-success">Success</span> --}}
                                            @if ($data->tipe_transaksi == 'joki')
                                                @if ($data->status_joki == 'Proses')
                                                    <span class="text-info">Proses</span>
                                                @else
                                                    <span class="text-success">Success</span>
                                                @endif
                                            @elseif($data->tipe_transaksi == 'dm_vilog')
                                                @if ($data->status_pembelian == 'Pending')
                                                    <span class="text-warning">Pending</span>
                                                @elseif($data->status_pembelian == 'Processing')
                                                    <span class="text-primary">Proses</span>
                                                @elseif($data->status_pembelian == 'Batal')
                                                    <span class="text-danger">Canceled</span>
                                                @elseif($data->status_pembelian == 'Success')
                                                    <span class="text-success">Success</span>
                                                @elseif($data->status_pembelian == 'Sukses')
                                                    <span class="text-success">Success</span>
                                                @elseif($data->status_pembelian == 'Proses')
                                                    <span class="text-primary">Proses</span>
                                                @endif
                                            @elseif($data->tipe_transaksi == 'gift_skin')
                                                @if ($data->status_pembelian == 'Pending')
                                                    <span class="text-warning">Pending</span>
                                                @elseif($data->status_pembelian == 'Processing')
                                                    <span class="text-primary">Proses</span>
                                                @elseif($data->status_pembelian == 'Batal')
                                                    <span class="text-danger">Canceled</span>
                                                @elseif($data->status_pembelian == 'Success')
                                                    <span class="text-success">Success</span>
                                                @elseif($data->status_pembelian == 'Sukses')
                                                    <span class="text-success">Success</span>
                                                @elseif($data->status_pembelian == 'Proses')
                                                    <span class="text-primary">Proses</span>
                                                @endif
                                            @else
                                                @if ($data->status_pembelian == 'Pending')
                                                    <span class="text-warning">Pending</span>
                                                @elseif($data->status_pembelian == 'Processing')
                                                    <<span class="text-primary">Proses</span>
                                                    @elseif($data->status_pembelian == 'Batal')
                                                        <span class="text-danger">Canceled</span>
                                                    @elseif($data->status_pembelian == 'Success')
                                                        <span class="text-success">Success</span>
                                                    @elseif($data->status_pembelian == 'Sukses')
                                                        <span class="text-success">Success</span>
                                                    @elseif($data->status_pembelian == 'Proses')
                                                        <span class="text-primary">Proses</span>
                                                @endif
                                            @endif
                                        </div>
                                    </div>

                                    <div class="containers">
                                        <div class="title">Tanggal</div>
                                        <div class="desc">{{ $data->created_at->format('d F Y') }}
                                        </div>
                                    </div>
                                    <div class="containers">
                                        <div class="title">Total Harga</div>
                                        <div class="desc txt-primary">Rp
                                            {{ number_format($data->harga_pembayaran, 0, ',', '.') }},-
                                            {{-- <i class="bi bi-clipboard2"
                                                onclick="salin('2211', 'Total Harga berhasil disalin');"></i> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Detail Pembayaran -->
                            <div class="col-lg-4 col-12 receipt-right">

                                <div class="ticketBarcode page">
                                    @if ($data->status_pembayaran == 'Belum Lunas')
                                        <div class="gameNm">{{ $data->status_pembayaran }}</div>
                                        <div class="diamond mt-2">Selesaikan Pembayaran Sebelum Waktu Habis</div>
                                        <div class="mt-4">
                                            <div class="containerFlashSale">
                                                <div class="headerFS">
                                                    <div class="containers">

                                                        <div class="time">
                                                            <div class="hours" id="hours"></div>
                                                            <div class="dots">:</div>
                                                            <div class="minute" id="minute"></div>
                                                            <div class="dots">:</div>
                                                            <div class="second" id="second"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="diamond mt-0">Agar Pesanan Kamu Tidak Expired</div>
                                        <div class="mt-3">


                                        </div>

                                        {{-- @endif --}}
                                        {{-- </div> --}}
                                    @elseif ($data->status_pembelian == 'Success')
                                        <div class="gameNm">Tuztoz Indonesia</div>
                                        @if ($data->tipe_transaksi == 'joki')
                                            <div class="diamond mt-2">JOKI</div>
                                        @elseif ($data->tipe_transaksi == 'dm_vilog')
                                            <div class="diamond mt-2">DM VILOG</div>
                                        @else
                                            <div class="diamod mt-2">{{ $data->layanan }}</div>
                                        @endif
                                        <div class="price mt-2">
                                            <span class="text-success">Rp
                                                {{ number_format($data->harga_pembayaran, 0, ',', '.') }},-</span>
                                        </div>
                                        <dotlottie-player
                                            src="https://lottie.host/bfb4ac79-a8ff-488b-974c-d18f74395fe2/QOQVX42oYK.json"
                                            background="transparent" speed="1" class="mt-4" loop
                                            autoplay></dotlottie-player>
                                        <div class="desc mb-5">
                                            <div class="gameNm text-center">Transaksi Berhasil</div>
                                        </div>
                                    @elseif ($data->status_pembelian == 'Pending')
                                        <div class="gameNm">Tuztoz Indonesia</div>
                                        @if ($data->tipe_transaksi == 'joki')
                                            <div class="diamond mt-2">JOKI</div>
                                        @elseif ($data->tipe_transaksi == 'dm_vilog')
                                            <div class="diamond mt-2">DM VILOG</div>
                                        @else
                                            <div class="diamod mt-2">{{ $data->layanan }}</div>
                                        @endif
                                        <div class="price mt-2">
                                            <span class="text-success">Rp
                                                {{ number_format($data->harga_pembayaran, 0, ',', '.') }},-</span>
                                        </div>
                                        <dotlottie-player
                                            src="https://lottie.host/2cd386f9-d630-4a78-97a7-1d952bd40e99/RKdx0v68xh.json"
                                            background="transparent" speed="1" class="mt-4 mb-4"
                                            style="width: 200px; height: 200px;" loop autoplay></dotlottie-player>
                                        <div class="desc mb-5">
                                            <div class="gameNm text-center">Transaksi Pending</div>
                                        </div>
                                    @elseif ($data->status_pembelian == 'Batal')
                                        <div class="gameNm">Tuztoz Indonesia</div>
                                        @if ($data->tipe_transaksi == 'joki')
                                            <div class="diamond mt-2">JOKI</div>
                                        @elseif ($data->tipe_transaksi == 'dm_vilog')
                                            <div class="diamond mt-2">DM VILOG</div>
                                        @else
                                            <div class="diamod mt-2">{{ $data->layanan }}</div>
                                        @endif
                                        <div class="price mt-2">
                                            <span class="text-success">Rp
                                                {{ number_format($data->harga_pembayaran, 0, ',', '.') }},-</span>
                                        </div>
                                        <dotlottie-player
                                            src="https://lottie.host/d3ebc894-c923-42ae-94df-d03e8e63ef5b/5e7j87zYKF.json"
                                            background="transparent" speed="1" class="mt-4 mb-4"
                                            style="width: 200px; height: 200px;" loop autoplay></dotlottie-player>
                                        <div class="desc mb-5">
                                            <div class="gameNm text-center">Transaksi Cancel</div>
                                        </div>
                                    @elseif ($data->status_pembelian == 'EXPIRED')
                                        <div class="gameNm">Tuztoz Indonesia</div>
                                        @if ($data->tipe_transaksi == 'joki')
                                            <div class="diamond mt-2">JOKI</div>
                                        @elseif ($data->tipe_transaksi == 'dm_vilog')
                                            <div class="diamond mt-2">DM VILOG</div>
                                        @else
                                            <div class="diamod mt-2">{{ $data->layanan }}</div>
                                        @endif
                                        <div class="price mt-2">
                                            <span class="text-success">Rp
                                                {{ number_format($data->harga_pembayaran, 0, ',', '.') }},-</span>
                                        </div>
                                        <dotlottie-player
                                            src="https://lottie.host/7a968642-0485-4897-a043-3157c81ac39d/TKaiYfuNIT.json"
                                            background="transparent" speed="1" class="mt-4 mb-4"
                                            style="width: 200px; height: 200px;" loop autoplay></dotlottie-player>
                                        <div class="desc mb-5">
                                            <div class="gameNm text-center">Transaksi Expired</div>
                                        </div>
                                    @elseif ($data->status_pembelian == 'Lunas')
                                        <div class="gameNm">Tuztoz Indonesia</div>
                                        @if ($data->tipe_transaksi == 'joki')
                                            <div class="diamond mt-2">JOKI</div>
                                        @elseif ($data->tipe_transaksi == 'dm_vilog')
                                            <div class="diamond mt-2">DM VILOG</div>
                                        @else
                                            <div class="diamod mt-2">{{ $data->layanan }}</div>
                                        @endif
                                        <div class="price mt-2">
                                            <span class="text-success">Rp
                                                {{ number_format($data->harga_pembayaran, 0, ',', '.') }},-</span>
                                        </div>
                                        <dotlottie-player
                                            src="https://lottie.host/bfb4ac79-a8ff-488b-974c-d18f74395fe2/QOQVX42oYK.json"
                                            background="transparent" speed="1" class="mt-4" loop
                                            autoplay></dotlottie-player>
                                        <div class="desc mb-5">
                                            <div class="gameNm text-center">Transaksi Berhasil</div>
                                        </div>
                                    @elseif ($data->status_pembelian == 'PAID')
                                        <div class="gameNm">Tuztoz Indonesia</div>
                                        @if ($data->tipe_transaksi == 'joki')
                                            <div class="diamond mt-2">JOKI</div>
                                        @elseif ($data->tipe_transaksi == 'dm_vilog')
                                            <div class="diamond mt-2">DM VILOG</div>
                                        @else
                                            <div class="diamod mt-2">{{ $data->layanan }}</div>
                                        @endif
                                        <div class="price mt-2">
                                            <span class="text-success">Rp
                                                {{ number_format($data->harga_pembayaran, 0, ',', '.') }},-</span>
                                        </div>
                                        <dotlottie-player
                                            src="https://lottie.host/bfb4ac79-a8ff-488b-974c-d18f74395fe2/QOQVX42oYK.json"
                                            background="transparent" speed="1" class="mt-4" loop
                                            autoplay></dotlottie-player>
                                        <div class="desc mb-5">
                                            <div class="gameNm text-center">Transaksi Berhasil</div>
                                        </div>
                                    @endif

                                    @if ($data->status_pembayaran == 'Belum Lunas')
                                        @if (Str::upper($data->metode_pembayaran) == 'QRIS' ||
                                                Str::upper($data->metode_pembayaran) == 'QRISC' ||
                                                Str::upper($data->metode_pembayaran) == 'QRIS2' ||
                                                Str::upper($data->metode_pembayaran) == 'QRISOP' ||
                                                Str::upper($data->metode_pembayaran) == 'SP' ||
                                                Str::upper($data->metode_pembayaran) == 'QRISCOP')
                                            <a href="{{ $data->no_pembayaran }}" download="">
                                                <img src="{{ $data->no_pembayaran }}" alt="qrcode" width="200"
                                                    height="200">
                                            </a>
                                        @elseif (Str::upper($data->metode_pembayaran) == 'SHOPEEPAY')
                                            <a class="btnYellowPrimary" href="{{ $data->no_pembayaran }}"
                                                download=""></a>
                                        @elseif(Str::upper($data->metode_pembayaran) == 'LA')
                                            <a class="btnYellowPrimary" href="{{ $data->no_pembayaran }}">KLIK DISINI
                                                BAYAR
                                                VIA LINKAJA</a>
                                        @elseif(Str::upper($data->metode_pembayaran) == 'SA')
                                            <a class="btnYellowPrimary" href="{{ $data->no_pembayaran }}">KLIK
                                                DISINI
                                                BAYAR
                                                VIA SHOPEE</a>
                                        @elseif(Str::upper($data->metode_pembayaran) == 'DA')
                                            <a class="btnYellowPrimary" href="{{ $data->no_pembayaran }}">KLIK
                                                DISINI
                                                BAYAR
                                                VIA DANA</a>
                                        @elseif(Str::upper($data->metode_pembayaran) == 'OV')
                                            <a class="btnYellowPrimary" href="{{ $data->no_pembayaran }}">KLIK DISINI
                                                BAYAR
                                                VIA OVO</a>
                                        @elseif(Str::upper($data->metode_pembayaran) == 'OVOADMIN' ||
                                                Str::upper($data->metode_pembayaran) == 'GOPAY' ||
                                                Str::upper($data->metode_pembayaran) == 'SHOPEE' ||
                                                Str::upper($data->metode_pembayaran) == 'DANA' ||
                                                Str::upper($data->metode_pembayaran) == 'LINKAJA' ||
                                                Str::upper($data->metode_pembayaran) == 'ISAKU' ||
                                                Str::upper($data->metode_pembayaran) == 'BCA' ||
                                                Str::upper($data->metode_pembayaran) == 'BRI' ||
                                                Str::upper($data->metode_pembayaran) == 'BNI' ||
                                                Str::upper($data->metode_pembayaran) == 'MANDIRI' ||
                                                Str::upper($data->metode_pembayaran) == 'CIMB')
                                            <kbd class="btnYellowPrimary" data-toggle="tooltip" data-placement="bottom"
                                                id="paycode" title="Click to copy">{{ $data->no_pembayaran }}
                                            </kbd>
                                        @else
                                            <kbd class="btnYellowPrimary" data-toggle="tooltip" data-placement="bottom"
                                                id="paycode" title="Click to copy">{{ $data->no_pembayaran }}
                                            </kbd>
                                        @endif
                                    @endif
                                    @if ($data->status_pembayaran == 'Belum Lunas')
                                        @if (Str::upper($data->metode_pembayaran) == 'QRIS' ||
                                                Str::upper($data->metode_pembayaran) == 'QRISC' ||
                                                Str::upper($data->metode_pembayaran) == 'QRIS2' ||
                                                Str::upper($data->metode_pembayaran) == 'QRISOP' ||
                                                Str::upper($data->metode_pembayaran) == 'SP' ||
                                                Str::upper($data->metode_pembayaran) == 'QRISCOP')
                                            <button type="button" class="btnYellowSecond mt-3"
                                                onclick="window.location.href='{{ $data->no_pembayaran }}'">Unduh kode QR
                                            </button>
                                        @elseif (Str::upper($data->metode_pembayaran) == 'SHOPEEPAY')
                                            <button type="button" class="btnYellowSecond mt-3"
                                                onclick="window.location.href='{{ $data->no_pembayaran }}'">Bayar Sekarang
                                            </button>
                                        @elseif (Str::upper($data->metode_pembayaran) == 'OVO')
                                            <button type="button" class="btnYellowSecond mt-3"
                                                onclick="window.location.href='{{ $data->no_pembayaran }}'">Bayar Sekarang
                                            </button>
                                        @elseif(Str::upper($data->metode_pembayaran) == 'OVOADMIN' ||
                                                Str::upper($data->metode_pembayaran) == 'GOPAY' ||
                                                Str::upper($data->metode_pembayaran) == 'SHOPEE' ||
                                                Str::upper($data->metode_pembayaran) == 'DANA' ||
                                                Str::upper($data->metode_pembayaran) == 'LINKAJA' ||
                                                Str::upper($data->metode_pembayaran) == 'ISAKU' ||
                                                Str::upper($data->metode_pembayaran) == 'BCA' ||
                                                Str::upper($data->metode_pembayaran) == 'BRI' ||
                                                Str::upper($data->metode_pembayaran) == 'BNI' ||
                                                Str::upper($data->metode_pembayaran) == 'MANDIRI' ||
                                                Str::upper($data->metode_pembayaran) == 'CIMB')
                                            <button type="button" class="btnYellowSecond mt-3"
                                                onclick="window.location.href='{{ $data->no_pembayaran }}'"
                                                title="Click to copy" id="paycode" onclick="copyToClipboard()">Click To
                                                Copy
                                            </button>
                                        @else
                                            <button type="button" class="btnYellowSecond mt-3"
                                                onclick="window.location.href='{{ $data->no_pembayaran }}'"
                                                title="Click to copy" id="paycode" onclick="copyToClipboard()">Click To
                                                Copy
                                            </button>
                                        @endif
                                    @endif


                                </div>

                            </div>
                        </div>

                        <!-- Tombol Rating -->
                        {{-- <div class="row justify-content-center mt-5">
                            <div class="col-lg-8">
                                <button type="button" class="btnYellowPrimary w-100" onclick="showRate()">Kirim
                                    Rating</button>
                            </div>
                        </div> --}}
                        <div class="row justify-content-center mt-5">
                            <div class="col-lg-8">
                                <button type="button" class="btnYellowPrimary w-100">Terimakasih telah melakukan
                                    transaksi di Tuztoz Indonesia</button>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-3">
                            <div class="col-lg-8">
                                <div class="notes">
                                    <div class="text">Note :</div>
                                    <div class="text2 text-sm">Jika Kamu Mengalami Kendala Pembayaran Atau Adanya Keluhan Terkait Pembayaran Anda Dapat
                                        Menghubungi Kami Melalui&nbsp;
                                        <a href="{{ !$config ? '' : $config->url_wa }}" target="_blank" rel="noreferrer" class="text-success">WhatsApp</a>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Rate -->
                        <div class="modal fade" id="rate">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content pt-5 pb-4" style="border-radius:20px">
                                    <form action="" method="POST">
                                        <div class="containerRate">
                                            <img src="{{ asset('assets/logo/20230610_035655.png') }}" alt=""
                                                class="logo">
                                            <div class="title">Kirim Ulasan Anda</div>
                                            <div class="emoji">
                                                <input type="hidden" name="star" class="emoji-radio">
                                                <div class="containers" style="font-size: 3rem !important;">
                                                    <i onclick="hover_star('1');" id="star-1"
                                                        class="bi bi-star text-gray cursor-pointer"></i>
                                                </div>
                                                <div class="containers" style="font-size: 3rem !important;">
                                                    <i onclick="hover_star('2');" id="star-2"
                                                        class="bi bi-star text-gray cursor-pointer"></i>
                                                </div>
                                                <div class="containers" style="font-size: 3rem !important;">
                                                    <i onclick="hover_star('3');" id="star-3"
                                                        class="bi bi-star text-gray cursor-pointer"></i>
                                                </div>
                                                <div class="containers" style="font-size: 3rem !important;">
                                                    <i onclick="hover_star('4');" id="star-4"
                                                        class="bi bi-star text-gray cursor-pointer"></i>
                                                </div>
                                                <div class="containers" style="font-size: 3rem !important;">
                                                    <i onclick="hover_star('5');" id="star-5"
                                                        class="bi bi-star text-gray cursor-pointer"></i>
                                                </div>
                                            </div>
                                            <div class="floating-label-content mb-lg-3 mb-md-2">
                                                <textarea class="form-control floating-input" name="content" id="content" placeholder=" "
                                                    style="min-height:140px"></textarea>
                                                <label class="floating-label" for="content">Tulis Ulasan Kamu</label>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <button type="submit" name="tombol" value="submit"
                                                    class="btnYellowPrimary w-100 py-4">Kirim</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="h-40"></div>
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
