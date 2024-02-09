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
            <li class="breadcrumb-item active" aria-current="page">Pesanan Manual</li>
        </ol>
    </nav>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-5 header-title mt-0">Buat Pesanan Manual</h4>
                    <form action="{{ url('/pesanan/manual') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">User ID</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="uid">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Server ID</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="zone">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Kategori</label>
                            <div class="col-lg-10">
                                <select class="form-select kategori" name="kategori">
                                    <option value="">-- Pilih Kategori --</option>
                                    @foreach ($kategori as $ktg)
                                        <option value="{{ $ktg->id }}">{{ $ktg->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Layanan</label>
                            <div class="col-lg-10">
                                <select class="form-control layanan" name="layanan">

                                </select>
                            </div>
                        </div>
                        <div class="mt-5 col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Buat Pesanan</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Riwayat Pesanan Manual
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="tableOrderManual">
                        <thead>
                            <tr>
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
                            @foreach ($data as $data_pesanan)
                                @php
                                    $label_pesanan = '';
                                    if ($data_pesanan->status == 'Batal') {
                                        $btn_pesanan = 'warning';
                                    } elseif ($data_pesanan->status == 'Pending' || $data_pesanan->status == 'Menunggu') {
                                        $btn_pesanan = 'info';
                                    } elseif ($data_pesanan->status == 'Success' || $data_pesanan->status == 'Sukses') {
                                        $btn_pesanan = 'success';
                                    } else {
                                        $btn_pesanan = 'danger';
                                    }
                                @endphp
                                <tr class="table-{{ $label_pesanan }}">
                                    <th scope="row">#{{ $data_pesanan->order_id }}</th>
                                    <td>{{ $data_pesanan->user_id }}
                                        {{ $data_pesanan->zone != null ? '(' . $data_pesanan->zone . ')' : '' }}</td>
                                    <td>{{ $data_pesanan->nickname == null ? '-' : $data_pesanan->nickname }}</td>
                                    <td>{{ $data_pesanan->layanan }}</td>
                                    <td>Rp. {{ number_format($data_pesanan->harga, 0, '.', ',') }}</td>
                                    <td>{{ $data_pesanan->provider_order_id == null ? '-' : $data_pesanan->provider_order_id }}
                                    </td>
                                    <td>
                                        {{ $data_pesanan->status }}
                                    </td>
                                    <td>{{ $data_pesanan->log }}</td>
                                    <td>{{ $data_pesanan->status_pembayaran }}</td>
                                    <td>{{ $data_pesanan->metode }}</td>
                                    <td>{{ $data_pesanan->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- <div class="d-flex justify-content-center">
                    {{ $users->links('vendor.pagination.simple-tailwind') }}
                </div> --}}
            </div>
        </div>
    </section>
        <script>
            $(document).ready(function() {
                $('#tableOrderManual').DataTable({

                });
            });

            $('.kategori').change(function() {
                const data = $(this).val();
                $.ajax({
                    url: "{{ url('/pesanan/manual/ajax/layanan') }}",
                    method: "POST",
                    data: {
                        data: data,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(res) {
                        $('.layanan').empty();
                        $('.layanan').append(res);
                    }
                });
            });
        </script>
    @endsection
