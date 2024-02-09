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
            <li class="breadcrumb-item active" aria-current="page">Data Gift Skin</li>
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
                    Daftar Pesanan Gift Skin
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="tableGiftSkin">
                        <thead>
                            <tr>
                                <th>OID</th>
                                <th>Layanan</th>
                                <th>UID</th>
                                <th>Zone ID</th>
                                <th>Nickname</th>
                                <th>Status Gift Skin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $datas)
                                @php
                                    $label_pesanan = '';
                                    if ($datas->status == 'Sukses') {
                                        $btn_pesanan = 'success';
                                    } else {
                                        $btn_pesanan = 'danger';
                                    }
                                @endphp


                                <tr>
                                    <th scope="row">#{{ $datas->order_id }}</th>
                                    <td class="table-fit">{{ $datas->layanan }}</td>
                                    <td class="table-fit">{{ $datas->user_id }}</td>
                                    <td class="table-fit">{{ $datas->zone }}</td>
                                    <td class="table-fit">{{ $datas->nickname }}</td>
                                    <td class="table-fit">
                                        <div class="btn-group-vertical">
                                            <button id="btnGroupDrop1" type="button"
                                                class="btn btn-{{ $btn_pesanan }} dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false"> {{ $datas->status }} <i
                                                    class="mdi mdi-chevron-down"></i> </button>
                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <li><a class="dropdown-item"
                                                        href="/giftskin-status/{{ $datas->order_id }}/Sukses">Sukses</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="/giftskin-status/{{ $datas->order_id }}/Proses">Proses</a>
                                                </li>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger" href="/giftskin/hapus/{{ $datas->id }}">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
        <script>
            $(document).ready(function() {
                $('#tableGiftSkin').DataTable({});
            });
        </script>
    @endsection
