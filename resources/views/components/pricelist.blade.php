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
                        <a href="{{ url('account') }}" class="btnYellowPrimary login">Dashboard</a>
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

        <div class="container container-track">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="title-head text-left mb-3 mt-3">Daftar Harga</div>
                    <div class="cards shadow mb-4">
                        <div class="nowrap-left">
                        </div>
                        <div class="tab-content mt-0">
                            {{-- <div class="tab-pane fade show active" id="games-50" role="tabpanel"> --}}
                                <div class="table-responsive">
                                    <table class="table text-dark" 
                                        style="font-size: 14px !important; margin-top: 0px; text-align: center" id="tablePrice">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center">&nbsp&nbsp&nbsp&nbsp PID</th>
                                                <th style="text-align: center">&nbsp&nbsp&nbsp&nbsp Produk</th>
                                                <th style="text-align: center">&nbsp&nbsp&nbsp&nbsp Item</th>
                                                <th style="text-align: center">&nbsp&nbsp&nbsp&nbsp Harga</th>
                                                <th style="text-align: center">&nbsp&nbsp&nbsp&nbsp Akun Gold</th>
                                                <th style="text-align: center">&nbsp&nbsp&nbsp&nbsp Akun Platinum</th>
                                                <th style="text-align: center">&nbsp&nbsp&nbsp&nbsp Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($datas as $data)
                                                @php
                                                    if ($data->status == 'available') {
                                                        $label_pesanan = 'success';
                                                    } else {
                                                        $label_pesanan = 'danger';
                                                    }
                                                @endphp
                                                <tr>
                                                    <th scope="row">{{ $data->id }}</th>
                                                    <td>{{ $data->nama_kategori }}</td>
                                                    <td>{{ $data->layanan }}</td>
                                                    <td>Rp. {{ number_format($data->harga, 0, ',', '.') }}</td>
                                                    <td>Rp. {{ number_format($data->harga_gold, 0, ',', '.') }}</td>
                                                    <td>Rp. {{ number_format($data->harga_platinum, 0, ',', '.') }}</td>
                                                    <td>
                                                        <span
                                                            class="badge bg-{{ $label_pesanan }} text-capitalize">{{ $data->status }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- @include('../footer') --}}
        <script>
            $(document).ready(function() {
                $('#tablePrice').DataTable();
            });
        </script>
    @endsection
