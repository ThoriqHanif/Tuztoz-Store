@extends('main-admin')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Setelan Sub Kategori</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">/layanan</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Tambah Sub Kategori</h4>
        <form action="{{ route('subkategori.post') }}" method="POST">
            @csrf

            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label">Kategori</label>
                <div class="col-lg-10">
                    <select class="form-select" name="kategori">
                        @foreach($categories as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="" class="col-lg-1 col-form-label">Kode</label>
                <div class="col-lg-5">
                    <input type="text" class="form-control @error('code') is-invalid @enderror" value="{{ old('code') }}" name="code">
                    @error('code')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>    
            
            <div class="mb-3 row">
                <label for="" class="col-lg-1 col-form-label">Nama</label>
                <div class="col-lg-5">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" name="nama">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>                
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Semua Sub Kategori</h4>
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kategori</th>
                                <th>Nama</th>
                                <th>Kode</th>
                                <th>Status</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $sub as $data )
                            <tr>
                                <th scope="row">{{ $data->id }}</th>
                                <td>{{ $data->kategori }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->code }}</td>
                                <td>{{ $data->active }}</td>
                                <td>
                                    <a class="btn btn-danger" href="/subkategori/hapus/{{ $data->id }}">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>

    </div>
</div>

<script type="text/javascript">

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

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="modal-detail" style="border-radius:7%">
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