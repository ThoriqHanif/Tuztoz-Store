@extends('layouts.master-order')



@section('content')

    <body>
        <nav class="navbar active">
            <div class="container">
                <div class="navLeft">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/logo/20240123_060438.png') }}" alt="">
                    </a>
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
                        <a class="btnHisTabs " href="{{ url('/account/deposit') }}">
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
                        <a class="btnHisTabs active" href="{{ route('membership') }}">
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
            <div class="containerSaldo mt-10 align-center">
                {{-- <div class="desc">
                    Deposit bertanda manual konfirmasi ke WhatsApp Admin setelah melakukan transfer
                    <a href="{{ !$config ? '' : $config->url_wa }}?text=%20Halo%20Admin%20Deposit%20saya%20belum%20di%20konfirmasi%20ID%20Deposit:%20(...)"
                        target="_blank">
                        <b>WHATSAPP ADMIN
                        </b> (KLIK)
                    </a>
                </div>
                <marquee style="color:#435EBE !important;" class="fw-bold">
                    <i class="fas fa-angle-double-right"></i> Jam Operasional Deposit: Pukul 09:00 - 22:00 WIB ( Lewat
                    Jam Operasional Akan Diproses Keesokan Hari. )
                </marquee> --}}
            </div>
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @elseif(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="cards shadow mt-4">
                <div class="contents">
                    <div class="containerHis">
                        <div class="head">
                            <div class="title-head">Upgrade Membership</div>
                            {{-- <a href="{{ url('account/deposit/history') }}" tabindex="0" data-bs-toggle="popover"
                                data-bs-trigger="hover focus" data-bs-content="Riwayat Deposit" class="filter">
                                <i class="bi bi-clock-history"></i>
                            </a> --}}
                        </div>
                        <form class="form-horizontal mt-3" action="{{ route('deposit') }}" method="POST">
                            @csrf




                            <div class="accordion mb-2">
                                <div class="accordionHeadPay">
                                    <div class="title">Daftar Membership</div>
                                    <div class="containers">
                                        {{-- <img src="{{ asset('assets/icons/platinum.webp') }}" alt="" style="padding: 10px">
                                        <img src="{{ asset('assets/icons/gold.webp') }}" alt="" style="padding: 10px"> --}}
                                    </div>
                                    <i class="bi bi-caret-right-fill"></i>
                                </div>
                                <div class="accordionBodyPay shadow">
                                    <div class="accordionContent">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                {{-- <input type="radio" name="metode" value="BRI" class="pay-radio"
                                                    id="method-11" onclick="select_method('BRI');"> --}}
                                                <label for="method-11" class="choicePay">
                                                    <div class="containers">

                                                        <div class="text">
                                                            <div class="name">Platinum</div>
                                                        </div>
                                                    </div>
                                                    <span class="text-dark">Rp
                                                        {{ number_format(!$config ? '' : $config->harga_platinum, 0, ',', '.') }}</span>

                                                </label>
                                            </div>
                                            <div class="col-sm-6">
                                                {{-- <input type="radio" name="metode" value="BCA" class="pay-radio"
                                                    id="method-9" onclick="select_method('BCA');"> --}}
                                                <label for="method-9" class="choicePay">
                                                    <div class="containers">

                                                        <div class="text">
                                                            <div class="name">Gold</div>
                                                        </div>
                                                    </div>
                                                    <span class="text-dark">Rp
                                                        {{ number_format(!$config ? '' : $config->harga_gold, 0, ',', '.') }}</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <a href="{{ !$config ? '' : $config->url_wa }}" type="button"
                                class="btnYellowPrimary w-100 my-3"><i class="bi bi-whatsapp"
                                    style="margin-right: 10px"></i> Beli Membership</a>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    @endsection
