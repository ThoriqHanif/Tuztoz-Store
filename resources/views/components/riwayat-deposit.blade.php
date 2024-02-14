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

        <section class="history">
            <div class="containerHead">
                <img src="{{ asset('assets/logo/logo-user.png') }}" alt="" class="user">
                <div class="identity">
                    <div class="name">Hi, {{ Auth()->user()->name }} <img src="{{ asset('assets/icons/greet.svg') }}"
                            alt=""></div>
                    <div class="desc">{{ Auth()->user()->role }} - Sejak
                        {{ \Carbon\Carbon::parse(Auth()->user()->created_at)->format('j F Y') }}
                    </div>
                </div>
            </div>
            <div class="cards-saldo mt-4">
                <div class="containerSaldo">
                    <div class="icon">
                        <img src="{{ asset('assets/icons/dompet.svg') }}" alt="">
                    </div>
                    <div class="desc">Saldo Kamu</div>
                    <div class="price">Rp. {{ number_format(Auth::user()->balance, 0, ',', '.') }}</div>
                </div>
                <ul class="nav hisTabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="btnHisTabs active" href="{{ url('/account/deposit') }}">
                            <i class="bi bi-wallet2 "></i>
                            <div class="text">Isi Saldo</div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation" hidden>
                        <a class="btnHisTabs" href="">
                            <i class="bi bi-gem"></i>
                            <div class="text">Top Up</div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="btnHisTabs " href="{{ route('membership') }}">
                            <i class="bi bi-award-fill"></i>
                            <div class="text">Membership</div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="btnHisTabs" href="{{ url('/account/setting') }}">
                            <i class="bi bi-person-fill-gear"></i>
                            <div class="text">Setting</div>
                        </a>
                    </li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="nav-item" role="presentation">
                            <button class="btnHisTabs" type="submit">
                                <i class="bi bi-box-arrow-left"></i>
                                <div class="text">Keluar</div>
                            </button>
                        </li>
                    </form>
                </ul>
            </div>
            <div class="cards shadow mt-10">
                <div class="contents">
                    <div class="containerHis">
                        <div class="head">
                            <div class="title-head">Riwayat Isi Saldo</div>
                        </div>
                        <div class="card-body">
                            {{-- <div class="table-responsive"> --}}
                                <table class="table" id="riwayatDeposit">
                                    <thead>
                                        <tr class="text-dark">
                                            <th nowrap="">ID</th>
                                            <th nowrap="">Jumlah</th>
                                            <th nowrap="">Metode</th>
                                            <th nowrap="">No Pembayaran</th>
                                            <th width="10">Status</th>
                                            <th width="">Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $pesanan)
                                            @php
                                                $zone = $pesanan->zone != null ? '-' . $pesanan->zone : '';
                                                $label_pesanan = '';
                                                if ($pesanan->status == 'Pending' || $pesanan->status == 'Batal') {
                                                    $label_pesanan = 'warning';
                                                } elseif ($pesanan->status == 'Processing') {
                                                    $label_pesanan = 'info';
                                                } elseif ($pesanan->status == 'Success') {
                                                    $label_pesanan = 'success';
                                                } else {
                                                    $label_pesanan = 'danger';
                                                }
                                            @endphp
                                            <tr class="text-dark">
                                                <td>{{ $pesanan->id }}
                                                </td>
                                                <td>Rp {{ number_format($pesanan->jumlah, 0, ',', '.') }}
                                                </td>
                                                <td>{{ $pesanan->metode }}
                                                </td>
                                                <td>{{ $pesanan->no_pembayaran }}
                                                </td>
                                                <td>
                                                    <span class="badge bg-{{ $label_pesanan }}">{{ $pesanan->status }}
                                                    </span>
                                                </td>
                                                <td class="table-fit">{{ $pesanan->created_at }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            {{-- </div> --}}
                        </div>

                    </div>
                </div>
            </div>


        </section>

        <script>
            $(document).ready(function() {
                $('#riwayatDeposit').DataTable({
                    responsive:true,
                    "dom": '<"row"<"col text-dark mb-2"l><"col text-dark mb-2"f>><"row"<"col text-dark"rt>><"row justify-content-between"<"col text-dark mt-2"i><"col-auto text-dark mt-2"p>>',
                    "language": {
                        "emptyTable": "<span class='text-dark'>No data available in table</span>"
                    }
                });
            });

            function modal(name, link) {
                // var myModal = new bootstrap.Modal($('#modal-detail'))
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
                $("#modal-detail").modal("show");
            }
        </script>

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="modal-detail"
            style="border-radius:7%">
            <div class="modal-dialog modal-lg">
                <div class="p-3 border-none rounded-2xl css-6qw8qzz">
                    <div class="modal-content css-6qw8qzz">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modal-detail-title"></h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="modal-detail-body"></div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
