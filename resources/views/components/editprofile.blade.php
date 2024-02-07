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
                            src="{{ asset('assets/icons/greet.svg') }}" alt=""></div>
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
                        <a class="btnHisTabs " href="{{url('/account/deposit')}}" >
                            <i class="bi bi-wallet2 "></i>
                            <div class="text">Isi Saldo</div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation" hidden>
                        <a class="btnHisTabs" href="" >
                            <i class="bi bi-gem"></i>
                            <div class="text">Top Up</div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="btnHisTabs " href="{{route('riwayat')}}" >
                            <i class="bi bi-clock-history"></i>
                            <div class="text">Transaksi</div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="btnHisTabs active" href="{{ url('/account/setting') }}" >
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
            <div class="mt-10">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{{ session('success') }}</li>
                    </ul>
                </div>
            @endif
            </div>
            
            <div class="cards shadow mt-3">
                <form id="editProfile" action="{{ url('/user/edit/profile') }}" method="POST">
                    @csrf
                    <div class="tab-content">
                        <div class="title-head text-left mb-lg-3 mb-md-2">Pengaturan</div>
                        <div class="floating-label-content mb-3">
                            <input type="text" class="form-control floating-input" name="name"
                                value="{{ Auth()->user()->name }}" placeholder=" ">
                            <label class="floating-label" for="username">User Name</label>
                        </div>
                        <div class="floating-label-content mb-3">
                            <input type="text" class="form-control floating-input" name="username"
                                value="{{ Auth()->user()->username }}" placeholder=" ">
                            <label class="floating-label" for="fullname">Nama Lengkap</label>
                        </div>
                        <div class="floating-label-content mb-3">
                            <input class="form-control floating-input" type="number" name="whatsapp"
                                value="{{ Auth()->user()->whatsapp }}" placeholder=" ">
                            <label class="floating-label" for="whatsapp">Whatsapp</label>
                        </div>
                        <div class="floating-label-content position-relative">
                            <input type="password  name="password" id="password"" class="form-control floating-input"
                                placeholder=" ">
                            <label class="floating-label" for="password">Password</label>
                            <button type="button" class="icon-paddword close" onclick="showHide(this)"><i
                                    class="bi bi-eye-slash"></i></button>
                        </div>
                        <button type="submit" value="submit" name="tombol"
                            class="btnYellowPrimary w-100 my-3 md">Simpan</button>
                    </div>
                </form>
            </div>
            {{-- <div class="wrapper pt-4">
                <div class="container mb-5">
                    <div class="row mt-1 justify-content-center">
                        <div class="col-md-6">
                            <div class="card mt-1 bg-dark shadow-lg mt-1 text-white">
                                <div class="card-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            <ul>
                                                <li>{{ session('success') }}</li>
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="cards shadow mt-10">
                                        <form action="" method="POST">
                                            <div class="tab-content">
                                                <div class="title-head text-left mb-lg-3 mb-md-2">Pengaturan</div>
                                                <div class="floating-label-content mb-3">
                                                    <input type="text" class="form-control floating-input"
                                                        value="kaivan" readonly placeholder=" ">
                                                    <label class="floating-label" for="username">User Name</label>
                                                </div>
                                                <div class="floating-label-content mb-3">
                                                    <input type="text" class="form-control floating-input"
                                                        value="kaivan affandra" readonly placeholder=" ">
                                                    <label class="floating-label" for="fullname">Nama Lengkap</label>
                                                </div>
                                                <div class="floating-label-content mb-3">
                                                    <input type="text" class="form-control floating-input"
                                                        value="089669572100" readonly placeholder=" ">
                                                    <label class="floating-label" for="whatsapp">Whatsapp</label>
                                                </div>
                                                <div class="floating-label-content position-relative">
                                                    <input type="text" class="form-control floating-input"
                                                        name="password" id="password" placeholder=" ">
                                                    <label class="floating-label" for="password">Password</label>
                                                    <button type="button" class="icon-paddword close"
                                                        onclick="showHide(this)"><i class="bi bi-eye-slash"></i></button>
                                                </div>
                                                <button type="submit" value="submit" name="tombol"
                                                    class="btnYellowPrimary w-100 my-3 md">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <script>
                document.getElementById("nomor").addEventListener("input", function() {
                    let nomor = this.value;
                    if (nomor.startsWith("08")) {
                        nomor = "62" + nomor.slice(1);
                        this.value = nomor;
                    }
                });
            </script>
        

            
        @endsection
