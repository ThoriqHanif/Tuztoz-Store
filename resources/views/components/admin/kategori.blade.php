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
            <li class="breadcrumb-item active" aria-current="page">Kategori</li>
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

    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-5 header-title mt-0">Tambah Kategori</h4>
                    <form action="{{ route('kategori.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Nama</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    value="{{ old('nama') }}" name="nama">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Sub Nama</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control @error('sub_nama') is-invalid @enderror"
                                    value="{{ old('sub_nama') }}" name="sub_nama">
                                @error('sub_nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Brand</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control @error('brand') is-invalid @enderror"
                                    value="{{ old('brand') }}" name="brand">
                                @error('brand')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
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
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Deskripsi Layanan</label>
                            <div class="col-lg-10">
                                <textarea class="form-control @error('ket_layanan') is-invalid @enderror" name="ket_layanan">{{ old('ket_layanan') }}</textarea>
                                @error('ket_layanan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Deskripsi ID</label>
                            <div class="col-lg-10">
                                <textarea class="form-control @error('ket_id') is-invalid @enderror" name="ket_id">{{ old('ket_id') }}</textarea>
                                @error('ket_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Placeholder 1</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control @error('placeholder_1') is-invalid @enderror"
                                    value="{{ old('placeholder_1') }}" name="placeholder_1">
                                @error('placeholder_1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Placeholder 2</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control @error('placeholder_2') is-invalid @enderror"
                                    value="{{ old('placeholder_2') }}" name="placeholder_2">
                                @error('placeholder_2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Membutuhkan Server ID?</label>
                            <div class="col-lg-10 mt-1">
                                <input type="radio" id="customRadio1" name="serverOption" class="form-check-input"
                                    value="ya">
                                <label class="form-check-label" for="customRadio1">Ya</label>
                                <input type="radio" id="customRadio1" name="serverOption" class="form-check-input"
                                    value="tidak">
                                <label class="form-check-label" for="customRadio1">Tidak</label>
                                @error('serverOption')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Thumbnail</label>
                            <div class="col-lg-10">
                                <input type="file" class="form-control" name="thumbnail">
                                @error('thumbnail')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Banner Layanan</label>
                            <div class="col-lg-10">
                                <input type="file" class="form-control" name="bannerlayanan">
                                @error('bannerlayanan')
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
                                    <option value="populer">Game</option>
                                    <option value='akun_premium'>Akun Premium</option>
                                    <!--<option value="gamelainnya">Game Lainnya</option>-->
                                    <option value="dm_vilog">Via Login</option>
                                    <option value="pulsa">Pulsa</option>
                                    <option value="liveapp">Voucher</option>
                                    <option value="sosmed">Sosmed</option>
                                </select>
                                @error('tipe')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Petunjuk</label>
                            <div class="col-lg-10">
                                <input type="file" class="form-control" name="petunjuk">
                                @error('petunjuk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Buat Member</button>
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
                    Daftar Semua Kategori
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="tableKategori">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th class="table-fit">Thumbnail</th>
                                <th class="table-fit">Banner Layanan</th>
                                <th class="table-fit">Nama</th>
                                <th class="table-fit">Kode</th>
                                <th class="table-fit">Brand</th>
                                <th class="table-fit">Keterangan Layanan</th>
                                <th class="table-fit">Sistem Target</th>
                                <th>Tipe</th>
                                <th class="table-fit">Tanggal</th>
                                <th class="table-fit">Status</th>
                                <th class="table-fit">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $datas)
                                @php
                                    $label_pesanan = '';
                                    if ($datas->status == 'active') {
                                        $btn_pesanan = 'info';
                                    } elseif ($datas->status == 'unactive') {
                                        $btn_pesanan = 'warning';
                                    }
                                @endphp
                                <tr>
                                    <th class="table-fit"></th>
                                    <th class="table-fit">{{ $datas->id }}</th>
                                    <td><img width="100" src="{{ asset($datas->thumbnail) }}"
                                            alt="{{ $datas->judul }}">
                                    </td>
                                    <td><img width="100" src="{{ asset($datas->bannerlayanan) }}"
                                            alt="{{ $datas->judul }}">
                                    <td class="table-fit">{{ $datas->nama }}</td>
                                    <td class="table-fit">{{ $datas->kode }}</td>
                                    <td class="table-fit">{{ $datas->brand }}</td>
                                    <td class="table-fit">{!! htmlspecialchars_decode($datas->ket_layanan) !!}</td>
                                    <td>{{ $datas->server_id }}</td>
                                    <td>{{ $datas->tipe }}</td>
                                    <td>{{ $datas->created_at }}</td>
                                    <td class="table-fit">
                                        <div class="btn-group-vertical">
                                            <button id="btnGroupDrop1" type="button"
                                                class="btn btn-{{ $btn_pesanan }} dropdown-toggle text-capitalize"
                                                data-bs-toggle="dropdown" aria-expanded="false"> {{ $datas->status }} <i
                                                    class="mdi mdi-chevron-down"></i> </button>
                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <li><a class="dropdown-item text-capitalize"
                                                        href="/kategori-status/{{ $datas->id }}/unactive">unactive</a>
                                                </li>
                                                <li><a class="dropdown-item text-capitalize"
                                                        href="/kategori-status/{{ $datas->id }}/active">active</a></li>

                                        </div>
                                    </td>
                                    

                                    <td class="table-fit">
                                        <a class="btn btn-danger"
                                            href="/kategori/hapus/{{ $datas->id }}">Hapus</a>
                                        <a href="javascript:;"
                                        onclick="modal('{{ $datas->nama }}', '{{ route('kategori.detail', [$datas->id]) }}')"
                                            class="btn btn-warning">Edit</a>
                                    </td>
                                    {{-- <td>
                                        .
                                        <a href="javascript:;"
                                            onclick="modal('{{ $datas->nama }}', '{{ route('kategori.detail', [$datas->id]) }}')"
                                            class="btn btn-sm btn-primary mb-3">Edit</a>
                                        <br>
                                        <a class="btn btn-sm btn-danger mt-2"
                                            href="/kategori/hapus/{{ $datas->id }}">Hapus</a>
                                    </td> --}}

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
                $('#tableKategori').DataTable({
                    responsive: true,
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
