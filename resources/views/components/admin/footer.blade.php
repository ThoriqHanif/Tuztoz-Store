@extends('layouts.app')

@section('content')
    <!-- start page title -->

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ url('berita') }}">Konfigurasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Footer</li>
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

    <div class="row mt-5">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-5 header-title mt-0">Tambah Parent Footer</h4>
                    <form action="{{ url('/footer/parent') }}" method="POST">
                        @csrf

                        <div class="mb-3 row">
                            <label class="col-lg-4 col-form-label" for="example-fileinput">Judul Parent Footer</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control @error('nama_footer') is-invalid @enderror"
                                    value="{{ old('nama_footer') }}" name="nama_footer">
                                @error('nama_footer')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Buat Parent Footer</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-5 header-title mt-0">Tambah Footer</h4>
                    <form action="{{ url('/footer') }}" method="POST">
                        @csrf

                        <div class="mb-3 row">
                            <label class="col-lg-3 col-form-label" for="example-fileinput">Nama Footer</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control @error('nama_footer') is-invalid @enderror"
                                    value="{{ old('nama_footer') }}" name="nama_footer">
                                @error('nama_footer')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="" class="col-lg-3 col-form-label">URL Footer</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control @error('url_footer') is-invalid @enderror"
                                    value="{{ old('url_footer') }}" name="url_footer">
                                @error('url_footer')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="" class="col-lg-3 col-form-label">Parent</label>
                            <div class="col-lg-9">
                                <select class="form-control @error('parent') is-invalid @enderror" name="parent">
                                    @foreach ($parent as $p)
                                        <option value="{{ $p->id }}">{{ $p->nama_footer }}</option>
                                    @endforeach
                                </select>
                                @error('parent')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-12 d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Tambah Footer</button>
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
                    Daftar Semua Footer
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="tableFooter">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Footer</th>
                                <th>URL Footer</th>
                                <th>Parent</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td>{{ $d->id }}</td>
                                    <td>{{ $d->nama_footer }}</td>
                                    <td>{{ $d->url_footer }}</td>
                                    <td>{{ $d->parent !== null ? 'No' : 'Yes' }}</td>
                                    <td><a class="btn btn-danger"
                                            href="{{ url('/footer/delete') }}/{{ $d->id }}">Hapus</a></td>
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
            $('#tableFooter').DataTable({

            });
        });
    </script>
@endsection
