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
            <li class="breadcrumb-item"><a href="{{ url('user-deposit') }}">Member</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kelola Member</li>
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
        <div class="col-7">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3 header-title mt-0">Tambah Pengguna</h4>
                    <form action="{{ route('member.post') }}" method="POST">
                        @csrf

                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Nama</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" name="name" placeholder="Nama Lengkap">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="" class="col-lg-2 col-form-label">Username</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    value="{{ old('username') }}" name="username" placeholder="Username ">
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-lg-2 col-form-label">Password</label>
                            <div class="col-lg-10">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    value="{{ old('password') }}" name="password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-lg-2 col-form-label">Role</label>
                            <div class="col-lg-10">
                                <fieldset class="form-group">

                                    <select class="form-select @error('role') is-invalid @enderror" name="role"
                                        id="basicSelect">
                                        <option value="Member">Member</option>
                                        <option value="Gold">Gold</option>
                                        <option value="Platinum">Platinum</option>
                                    </select>
                                </fieldset>

                                @error('role')
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
        <div class="col-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3 header-title mt-0">Kirim saldo</h4>
                    <form action="{{ route('saldo.post') }}" method="POST">
                        @csrf

                        <div class="mb-3 row">
                            <label class="col-lg-4 col-form-label" for="example-fileinput">Username</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    value="{{ old('username') }}" name="username">
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="" class="col-lg-4 col-form-label">Jumlah</label>
                            <div class="col-lg-8">
                                <input type="number" class="form-control @error('balance') is-invalid @enderror"
                                    value="{{ old('balance') }}" name="balance">
                                @error('balance')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Kirim</button>
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
                    Daftar Semua Pengguna
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="tableMember">
                        <thead>
                            <tr>
                                <th class="table-fit">ID</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Saldo</th>
                                <th>Level</th>
                                <th>No WhatsApp</th>
                                <th>Tanggal dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th class="table-fit">{{ $user->id }}</th>
                                    <td class="table-fit">{{ $user->name }}</td>
                                    <td class="table-fit">{{ $user->username }}</td>
                                    <td class="table-fit">Rp. {{ number_format($user->balance, 0, ',', '.') }}</td>
                                    <td class="table-fit">{{ $user->role }}</td>
                                    <td class="table-fit">{{ $user->whatsapp }}</td>
                                    <td class="table-fit">{{ $user->created_at }}</td>
                                    <td class="table-fit">
                                        <a class="btn btn-danger btn-sm"
                                            href="{{ route('member.delete', [$user->id]) }}">Hapus</a>
                                        <a href="javascript:;"
                                            onclick="modal('{{ $user->username }}', '{{ route('member.detail', [$user->id]) }}')"
                                            class="btn btn-warning btn-sm"><i class="fas fa-qrcode"></i>Edit</a>
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
                $('#tableMember').DataTable({

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
