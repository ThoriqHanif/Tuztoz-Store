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
            <li class="breadcrumb-item"><a href="">Produk</a></li>
            <li class="breadcrumb-item active" aria-current="page">Voucher</li>
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

    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-5 header-title mt-0">Tambah Voucher</h4>
                    <form action="{{ route('voucher.post') }}" method="POST">
                        @csrf

                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Kode</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control @error('kode') is-invalid @enderror"
                                    value="{{ old('kode') }}" name="kode">
                                @error('kode')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Persenan Promo</label>
                            <div class="col-lg-10">
                                <input type="number" class="form-control @error('promo') is-invalid @enderror"
                                    value="{{ old('promo') }}" name="promo" placeholder="10">
                                @error('promo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Stock</label>
                            <div class="col-lg-10">
                                <input type="number" class="form-control @error('stock') is-invalid @enderror"
                                    value="{{ old('stock') }}" name="stock" placeholder="10">
                                @error('stock')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Max Potongan</label>
                            <div class="col-lg-10">
                                <input type="number" class="form-control @error('max_potongan') is-invalid @enderror"
                                    value="{{ old('max_potongan') }}" name="max_potongan" placeholder="100000">
                                @error('max_potongan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-5 col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Kirim Voucher</button>
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
                    Daftar Semua Voucher
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="tableVoucher">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode</th>
                                <th>Potongan</th>
                                <th>Kuota</th>
                                <th>Max Potongan</th>
                                <th>Aksi</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vouchers as $data)
                                <tr>
                                    <th scope="row">{{ $data->id }}</th>
                                    <td>{{ $data->kode }}</td>
                                    <td>{{ $data->promo }} %</td>
                                    <td>{{ $data->stock }}</td>
                                    <td>{{ $data->max_potongan }}</td>
                                    <td><a class="btn btn-danger"
                                            href="{{ route('voucher.delete', [$data->id]) }}">Hapus</a></td>
                                    <td>{{ $data->created_at }}</td>
                                    <td><a href="javascript:;"
                                            onclick="modal('{{ $data->kode }}', '{{ route('voucher.detail', [$data->id]) }}')"
                                            class="btn btn-info"><i class="fa fa-qrcode"></i>Edit</a></td>
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
        </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#tableVoucher').DataTable({

                });
            });

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

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="modal-detail"
            style="border-radius:7%">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-detail-title"></h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modal-detail-body"></div>
                </div>
            </div>
        </div>
    @endsection
