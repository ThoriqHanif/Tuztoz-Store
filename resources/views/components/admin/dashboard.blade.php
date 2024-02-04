@extends('layouts.app')

@section('content')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-right">
            <li class="breadcrumb-item"><a href="">Menu</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <div class="page-content">
        <div class="card mt-2">
            <div class="card-body py-4 px-5">
                <div class="d-flex align-items-center">
                    <div class="avatar avatar-xl">
                        <img src="{{ asset('admin/assets/compiled/jpg/2.jpg') }}" alt="Face 1">
                    </div>
                    <div class="ms-3 name">
                        <h4 class="font-bold">Halo, Selamat Datang Kembali</h4>
                        <h5 class="text-primary mb-0">Admin</h5>
                    </div>
                </div>
            </div>
        </div>
        <section class="row">

            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="page-heading">
                        <h4>Laporan Harian</h4>
                    </div>
                    <div class="col-12 col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body px-4 py-4">
                                <div class="row">
                                    <div
                                        class="col-xs-1 col-sm-3 col-md-2 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldBuy"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-9 col-md-10 col-lg-9 col-xl-9 col-xxl-9">
                                        <h6 class="text-muted font-semibold">Order Today</h5>
                                            <h6 class="font-extrabold mb-0">Rp. {{ number_format($total_pembelian, '0', '.', ',') }}</h6>
                                            <p class="mt-2 text-sm ">Dengan total {{ $banyak_pembelian }}x pemesanan</p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body px-4 py-4">
                                <div class="row">
                                    <div
                                        class="col-xs-1 col-sm-3 col-md-2 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-start ">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldTime-Circle"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-9 col-md-10 col-lg-9 col-xl-9 col-xxl-9">
                                        <h6 class="text-muted font-semibold">Order Pending Today</h6>
                                        <h6 class="font-extrabold mb-0">Rp. {{ number_format($total_pembelian_pending, '0', '.', ',') }}</h6>
                                        <p class="mt-2 text-sm ">Dengan total {{ $banyak_pembelian_pending }}x pemesanan</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body px-4 py-4">
                                <div class="row">
                                    <div
                                        class="col-xs-1 col-sm-3 col-md-2 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldSend"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-9 col-md-10 col-lg-9 col-xl-9 col-xxl-9">
                                        <h6 class="text-muted font-semibold">Order Success Today</h6>
                                        <h6 class="font-extrabold mb-0">Rp. {{ number_format($total_pembelian_success, '0', '.', ',') }}</h6>
                                        <p class="mt-2 text-sm ">Dengan total {{ $banyak_pembelian_success }}x pemesanan</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body px-4 py-4">
                                <div class="row">
                                    <div
                                        class="col-xs-1 col-sm-3 col-md-2 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-start ">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldDanger"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-9 col-md-10 col-lg-9 col-xl-9 col-xxl-9">
                                        <h6 class="text-muted font-semibold">Order Cancel Today</h6>
                                        <h6 class="font-extrabold mb-0">Rp. {{ number_format($total_pembelian_batal, '0', '.', ',') }}</h6>
                                        <p class="mt-2 text-sm ">Dengan total {{ $banyak_pembelian_batal }}x pemesanan</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body px-4 py-4">
                                <div class="row">
                                    <div
                                        class="col-xs-1 col-sm-3 col-md-2 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldTicket"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-9 col-md-10 col-lg-9 col-xl-9 col-xxl-9">
                                        <h6 class="text-muted font-semibold">Order Deposit Today</h6>
                                        <h6 class="font-extrabold mb-0">Rp. {{ number_format($total_deposit, '0', '.', ',') }}</h6>
                                        <p class="mt-2 text-sm ">Dengan total {{ $banyak_deposit }}x pemesanan</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="page-heading">
                        <h4>Laporan Keseluruhan</h4>
                    </div>
                    <div class="col-12 col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body px-4 py-4">
                                <div class="row">
                                    <div
                                        class="col-xs-1 col-sm-3 col-md-2 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldBuy"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-9 col-md-10 col-lg-9 col-xl-9 col-xxl-9">
                                        <h6 class="text-muted font-semibold">Total All Order</h6>
                                        <h6 class="font-extrabold mb-0">Rp. {{ number_format($total_keseluruhan_pembelian, '0', '.', ',') }}</h6>
                                        <p class="mt-2 text-sm ">Dengan total {{ $banyak_keseluruhan_pembelian }}x pemesanan</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body px-4 py-4">
                                <div class="row">
                                    <div
                                        class="col-xs-1 col-sm-3 col-md-2 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-start ">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldTime-Circle"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-9 col-md-10 col-lg-9 col-xl-9 col-xxl-9">
                                        <h6 class="text-muted font-semibold">Total Order Pending</h6>
                                        <h6 class="font-extrabold mb-0">Rp. {{ number_format($total_keseluruhan_pembelian_pending, '0', '.', ',') }}</h6>
                                        <p class="mt-2 text-sm ">Dengan total {{ $banyak_keseluruhan_pembelian_pending }}x pemesanan</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body px-4 py-4">
                                <div class="row">
                                    <div
                                        class="col-xs-1 col-sm-3 col-md-2 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldSend"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-9 col-md-10 col-lg-9 col-xl-9 col-xxl-9">
                                        <h6 class="text-muted font-semibold">Total Order Success</h6>
                                        <h6 class="font-extrabold mb-0">Rp. {{ number_format($total_keseluruhan_pembelian_berhasil, '0', '.', ',') }}</h6>
                                        <p class="mt-2 text-sm ">Dengan total {{ $banyak_keseluruhan_pembelian_berhasil }}x pemesanan</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body px-4 py-4">
                                <div class="row">
                                    <div
                                        class="col-xs-1 col-sm-3 col-md-2 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-start ">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldDanger"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-9 col-md-10 col-lg-9 col-xl-9 col-xxl-9">
                                        <h6 class="text-muted font-semibold">Total Order Cancel</h6>
                                        <h6 class="font-extrabold mb-0">Rp. {{ number_format($total_keseluruhan_pembelian_batal, '0', '.', ',') }}</h6>
                                        <p class="mt-2 text-sm ">Dengan total {{ $banyak_keseluruhan_pembelian_batal }}x pemesanan</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body px-4 py-4">
                                <div class="row">
                                    <div
                                        class="col-xs-1 col-sm-3 col-md-2 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldTicket"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-9 col-md-10 col-lg-9 col-xl-9 col-xxl-9">
                                        <h6 class="text-muted font-semibold">Total Order Deposit</h6>
                                        <h6 class="font-extrabold mb-0">Rp. {{ number_format($total_keseluruhan_deposit, '0','.',',') }}</h6>
                                        <p class="mt-2 text-sm ">Dengan total {{ $banyak_keseluruhan_deposit }}x pemesanan</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="page-heading">
                        <h4>Keuntungan Keseluruhan</h4>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body px-4 py-4">
                                <div class="row">
                                    <div
                                        class="col-xs-1 col-sm-3 col-md-2 col-lg-2 col-xl-2 col-xxl-1 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldGraph"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-9 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                                        <h6 class="text-muted font-semibold">Keuntungan Bersih Keseluruhan</h6>
                                        <h6 class="font-extrabold mb-0">Rp. {{ number_format($keuntungan_bersih, '0','.',',') }}</h6>
                                        {{-- <p class="mt-2 text-sm ">Dengan total 0x pemesanan</p> --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Grafik Pesanan 7 Hari Terakhir </h4>
                            </div>
                            <div class="card-body">
                                <div id="order-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>

    <script type="text/javascript">
        $(function() {
            new Morris.Area({
                element: 'order-chart',
                data: <?php echo $morris_data; ?>,
                xkey: 'y',
                ykeys: ['a'],
                labels: ['Pesanan'],
                lineColors: ['#188ae2'],
                gridLineColor: '#eef0f2',
                pointSize: 0,
                lineWidth: 0,
                resize: true,
                parseTime: false,
            });
        });
    </script>
@endsection
