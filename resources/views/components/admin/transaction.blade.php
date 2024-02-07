@extends('layouts.app')

@section('content')
<!-- start page title -->
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-right">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('pesanan') }}">Pesanan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Joki</li>
    </ol>
</nav>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<section class="section">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Daftar Semua Pesanan
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="tablePesanan">
                    <thead>
                            <tr>
                                <th>#</th>
                                <th>OID</th>
                                <th>UID</th>
                                <th>Nickname</th>
                                <th>Layanan</th>
                                <th>Harga</th>
                                <th>PID</th>
                                <th>Status</th>
                                <th>Log</th>
                                <th>Pembayaran</th>
                                <th>Metode</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1;?>
                            @foreach($data as $data_pesanan)
                            @php
                                $label_pesanan = '';
                                if($data_pesanan->status == "Batal"){
                                $btn_pesanan = 'warning';
                                }else if($data_pesanan->status == "Pending"){
                                $btn_pesanan = 'primary';
                                }else if($data_pesanan->status == "Success"){
                                $btn_pesanan = 'success';
                                }else{
                                $btn_pesanan = 'danger';
                                }
                            @endphp
                            <tr class="table-{{ $label_pesanan }}">
                                <td ></td>
                                <td >#{{ $data_pesanan->order_id }}</td>
                                <td >{{ $data_pesanan->user_id }} {{ $data_pesanan->zone != null ? "(".$data_pesanan->zone.")" : '' }}</td>
                                <td >{{ $data_pesanan->nickname }}</td>
                                <td >{{ $data_pesanan->layanan }}</td>
                                <td >Rp. {{ number_format($data_pesanan->harga, 0, '.', ',') }}</td>
                                <td >{{ $data_pesanan->provider_order_id == null ? '-' : $data_pesanan->provider_order_id }}</td>
                                <td >
                                    <div class="btn-group-vertical">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-{{$btn_pesanan}} dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> {{ $data_pesanan->status }} <i class="mdi mdi-chevron-down"></i> </button>
                                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <li><a class="dropdown-item" href="/order-status/{{ $data_pesanan->order_id }}/Success">Success</a></li>
                                            <li><a class="dropdown-item" href="/order-status/{{ $data_pesanan->order_id }}/Batal">Batal</a></li>
                                            <li><a class="dropdown-item" href="/order-status/{{ $data_pesanan->order_id }}/Pending">Pending</a></li>
                                    </div>
                                </td>
                                <td>{{ $data_pesanan->log }}</td>
                                <td>{{ $data_pesanan->status_pembayaran }}</td>
                                <td>{{ $data_pesanan->metode }}</td>
                                <td >{{ $data_pesanan->created_at }}</td>
                            </tr>
                            <?php $no++ ;?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#tablePesanan').DataTable({
            responsive: true,
        });
    });
</script>
@endsection