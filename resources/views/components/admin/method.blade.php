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
            <li class="breadcrumb-item"><a href="{{ url('berita') }}">Konfigurasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Payment</li>
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
                    <h4 class="mb-5 header-title mt-0">Tambah Payment</h4>
                    <form action="{{ route('method.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Nama</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" name="name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Kode</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control @error('code') is-invalid @enderror"
                                    value="{{ old('code') }}" name="code">
                                @error('code')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Keterangan</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control @error('keterangan') is-invalid @enderror"
                                    value="{{ old('keterangan') }}" name="keterangan">
                                @error('keterangan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Tipe</label>
                            <div class="col-lg-10">
                                <select class="form-select" name="tipe">
                                    <option value="e-walet">E-Wallet</option>
                                    <option value="tfbank">Transfer Bank</option>
                                    <option value="convenience-store">Convenience Store</option>
                                </select>
                                @error('tipe')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Images</label>
                            <div class="col-lg-10">
                                <input type="file" class="form-control" name="images">
                                @error('images')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-12 d-flex justify-content-end">
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
                    Daftar Semua Payment
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="tablePayment">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Kode</th>
                                <th>Keterangan</th>
                                <th>Tipe</th>
                                <th>Images</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $datas)
                                <tr>
                                    <th scope="row">{{ $datas->id }}</th>
                                    <td>{{ $datas->name }}</td>
                                    <td>{{ $datas->code }}</td>
                                    <td>{{ $datas->keterangan }}</td>
                                    <td>{{ $datas->tipe }}</td>
                                    <td><img width="100" src="{{ asset($datas->images) }}"></td>
                                    <td>{{ $datas->created_at }}</td>
                                    <td class="table-fit">
                                        <a href="javascript:;"
                                            onclick="modal('{{ $datas->nama }}', '{{ route('method.detail', [$datas->id]) }}')"
                                            class="btn btn-sm btn-warning mb-3">Edit</a>
                                        <br>
                                        <a class="btn btn-sm btn-danger mt-2"
                                            href="/method/hapus/{{ $datas->id }}">Hapus</a>

                                    </td>
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
                $('#tablePayment').DataTable({

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
