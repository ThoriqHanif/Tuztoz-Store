@extends('main-admin')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Konfigurasi</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">/Footer</li>
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
@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Tambah Parent Footer</h4>
        <form action="{{ url('/footer/parent') }}" method="POST">
            @csrf

            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">Judul Parent Footer</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control @error('nama_footer') is-invalid @enderror" value="{{ old('nama_footer') }}" name="nama_footer">
                    @error('nama_footer')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>



            <button type="submit" class="btn btn-danger">Buat Parent Footer</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Tambah Footer</h4>
        <form action="{{ url('/footer') }}" method="POST">
            @csrf

            <div class="mb-3 row">
                <label class="col-lg-2 col-form-label" for="example-fileinput">Nama Footer</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control @error('nama_footer') is-invalid @enderror" value="{{ old('nama_footer') }}" name="nama_footer">
                    @error('nama_footer')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-lg-2 col-form-label">URL Footer</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control @error('url_footer') is-invalid @enderror" value="{{ old('url_footer') }}" name="url_footer">
                    @error('url_footer')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="" class="col-lg-2 col-form-label">Parent</label>
                <div class="col-lg-10">
                    <select class="form-control @error('parent') is-invalid @enderror" name="parent">
                      @foreach($parent as $p)
                      <option value="{{$p->id}}">{{$p->nama_footer}}</option>
                      @endforeach
                    </select>
                    @error('parent')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>


            <button type="submit" class="btn btn-danger">Buat Footer</button>
        </form>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Footer</h4>
                <div class="table-responsive">
                    <table class="table m-0">
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
                            @foreach($data as $d)
                            <tr>
                                <td>{{$d->id}}</td>
                                <td>{{$d->nama_footer}}</td>
                                <td>{{$d->url_footer}}</td>
                                <td>{{$d->parent !== NULL ? 'No' : 'Yes'}}</td>
                                <td><a class="btn btn-danger" href="{{ url('/footer/delete') }}/{{$d->id}}">Hapus</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-center">
               
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.table').DataTable({
            "paging":   false,
            "info":     false
        });
    });
</script>
@endsection