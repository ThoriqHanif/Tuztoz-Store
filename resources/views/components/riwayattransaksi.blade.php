@extends('layouts.master-order')

@section('content')

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
            <a href="{{ route('login') }}" class="containers ">
                <i class="bi bi-person-fill-lock"></i>
                <div class="text">Login</div>
            </a>
            @if (Auth::check())
                <a href="{{ url('account') }}" class="containers ">
                    <i class="bi bi-person-fill-lock"></i>
                    <div class="text">Dashboard</div>
                </a>
            @else
                <a href="{{ route('login') }}" class="containers ">
                    <i class="bi bi-person-fill-lock"></i>
                    <div class="text">Login</div>
                </a>
            @endif
        </div>

        <section class="history">
            <div class="containerHead">
                <img src="{{ asset('assets/logo/logo-user.png') }}" alt="" class="user">
                <div class="identity">
                    <div class="name">Hi, {{ Auth()->user()->name }} <img
                            src="https://vanvanstore.com/assets/images/icon/greet.svg" alt=""></div>
                    <div class="desc">{{ Auth()->user()->role }} - Sejak
                        {{ \Carbon\Carbon::parse(Auth()->user()->created_at)->format('j F Y') }}
                    </div>
                </div>
            </div>
            <div class="cards-saldo mt-4">
                <div class="containerSaldo">
                    <div class="icon">
                        <img src="https://vanvanstore.com/assets/images/icon/dompet.svg" alt="">
                    </div>
                    <div class="desc">Saldo Kamu</div>
                    <div class="price">Rp. {{ number_format(Auth::user()->balance, 0, ',', '.') }}</div>
                </div>
                <ul class="nav hisTabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="btnHisTabs "
                            onclick="window.location.href='{{url('/account/deposit')}}">
                            <i class="bi bi-wallet2 "></i>
                            <div class="text">Isi Saldo</div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation" hidden>
                        <button class="btnHisTabs" onclick="window.location.href='https://vanvanstore.com/#produk'">
                            <i class="bi bi-gem"></i>
                            <div class="text">Top Up</div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btnHisTabs active"
                            onclick="window.location.href='{{route('riwayat')}}'">
                            <i class="bi bi-clock-history"></i>
                            <div class="text">Transaksi</div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btnHisTabs "
                            onclick="window.location.href='{{url('/account/setting')}}'">
                            <i class="bi bi-person-fill-gear"></i>
                            <div class="text">Setting</div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btnHisTabs"
                            onclick="window.location.href='https://vanvanstore.com/account/logout'">
                            <i class="bi bi-box-arrow-left"></i>
                            <div class="text">Keluar</div>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="cards shadow mt-10">
                <div class="contents">
                    <div class="containerHis">
                        <div class="head">
                            <div class="title-head">Riwayat Transaksi</div>
                        </div>
                        <div class="table-responsive">
                            <table class="table" id="riwayatTransaksi">
                                <thead>
                                    <tr class="text-dark">
                                        <th nowrap="">Semua</th>
                                        <th nowrap="">Jumlah</th>
                                        <th nowrap="">Metode</th>
                                        <th nowrap="">No Pembayaran</th>
                                        <th width="10">Status</th>
                                        <th width="10">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($data as $pesanan)
                                        @php
                                            $zone = $pesanan->zone != null ? '-' . $pesanan->zone : '';
                                            $label_pesanan = '';
                                            if ($pesanan->status == 'Pending' || $pesanan->status == 'Menunggu Pembayaran' || $pesanan->status == 'Waiting') {
                                                $label_pesanan = 'warning';
                                            } elseif ($pesanan->status == 'Processing') {
                                                $label_pesanan = 'info';
                                            } elseif ($pesanan->status == 'Success') {
                                                $label_pesanan = 'success';
                                            } else {
                                                $label_pesanan = 'danger';
                                            }
                                        @endphp
                                        <tr class="border-b border-gray-700 hover:cursor-pointer hover:bg-slate-50/5">
                                            <td class="py-4 px-6 font-medium whitespace-nowrap flex flex-col gap-2">
                                                <p class="font-medium">{{ $pesanan->order_id }}</p>
                                                <p class="font-normal text-[12px]">{{ $pesanan->created_at }}</p>
                                            </td>
                                            <td class="py-4 px-6">
                                                {{ $pesanan->layanan }}<br>
                                            </td>
                                            <td>{{ $pesanan->user_id }}{{ $zone }}</td>
                                            <td class="py-4 px-6 font-medium">Rp.
                                                {{ number_format($pesanan->harga, 0, ',', '.') }}</td>
                                            <td class="py-4 px-6"><span
                                                    class="bg-{{ $label_pesanan }} inline-block rounded-full px-2 text-[12px] font-semibold leading-5 text-black text-center">{{ $pesanan->status }}</span>
                                            </td>
                                            <td class="py-4 px-6 font-medium whitespace-nowrap flex flex-col gap-2"><a
                                                    href="javascript:;"
                                                    onclick="modal('Order Details', '{{ route('riwayat.detail', [$pesanan->order_id]) }}')"
                                                    class="btn btn-info"><i class="fa fa-qrcode"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </section>

    @section('js')
        <script type="text/javascript">
            $(document).ready(function() {
                $('#riwayatTransaksi').DataTable();
            });
        </script>
        <script type="text/javascript">
            function modal(name, link) {
                var myModal = new bootstrap.Modal($('#modal-detail'))
                $.ajax({
                    type: "GET",
                    url: link,
                    beforeSend: function() {
                        $('#modal-detail-title').html(name);
                        $('#modal-detail-body').html('Loading...');
                    },
                    success: function(result) {
                        $('#modal-detail-title').html(name);
                        $('#modal-detail-body').html(result);
                    },
                    error: function() {
                        $('#modal-detail-title').html(name);
                        $('#modal-detail-body').html('There is an error...');
                    }
                });
                myModal.show();
            }
        </script>
    @endsection
@endsection
