@extends('layouts.app')

@section('content')
    <!-- start page title -->

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ url('berita') }}">Konfigurasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Slider</li>
        </ol>
    </nav>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-5 header-title mt-0">Tambah Slider</h4>
                    <form action="{{ route('berita.post') }}" method="POST" enctype="multipart/form-data" id="berita">
                        @csrf
                        <div class="form-group">
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-form-label" for="example-fileinput">Pilih Gambar <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="banner">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-form-label">Deskripsi <span class="text-danger">*</span></label>
                                <div class="col-lg-10">
                                    <section class="section">
                                        <div id="full">

                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-form-label">Tipe <span class="text-danger">*</span></label>
                                <div class="col-lg-10">
                                    <select class="form-select"name="tipe">
                                        <option value="banner">Banner</option>
                                        <option value="popup">Popup</option>
                                        <option value="logoheader">Logo Header</option>
                                        <option value="logofooter">Logo Footer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Semua Gambar
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="tableSlider">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Tipe</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($berita as $data)
                                    <tr>
                                        <th scope="row">{{ $no }}</th>
                                        <td><img width="150"src="{{ asset($data->path) }}" alt="{{ $data->name }}">
                                        </td>
                                        <td>{{ $data->tipe }}</td>
                                        <td>{{ $data->created_at }}</td>
                                        <td><a class="btn btn-danger" href="/berita/hapus/{{ $data->id }}">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    </div>
    </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#tableSlider').DataTable({});
        });
    </script>

    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote();
            // var quill = new Quill('#snow-editor', {
            //     theme: 'snow',
            //     modules: {
            //         'toolbar': [[{ 'font': [] }, { 'size': [] }], ['bold', 'italic', 'underline', 'strike'], [{ 'color': [] }, { 'background': [] }], [{ 'script': 'super' }, { 'script': 'sub' }], [{ 'header': [false, 1, 2, 3, 4, 5, 6] }, 'blockquote', 'code-block'], [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }], ['direction', { 'align': [] }], ['link', 'image', 'video', 'formula'], ['clean']]
            //     },
            // })
            // $("#berita").on("submit",function() {
            //     $("#deskripsi").val(myEditor.children[0].innerHTML);
            // })
        });
    </script> --}}
@endsection
