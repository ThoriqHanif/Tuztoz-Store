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
            <li class="breadcrumb-item active" aria-current="page">Layanan</li>
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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-5 header-title mt-0">Tambah Layanan</h4>
                    <form action="{{ route('layanan.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Layanan</label>
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
                            <label class="col-lg-2 col-form-label">Kategori</label>
                            <div class="col-lg-10">
                                <select class="form-select" name="kategori" id="kategori">
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label">Sub Kategori</label>
                            <div class="col-lg-10">
                                <select class="form-select" name="sub" id="sub">
                                    <option value="">Pilih Sub Kategori</option>
                                    <option value="0">Normal</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label">Provider</label>
                            <div class="col-lg-10">
                                <select class="form-select" name="provider">
                                    <option value="digiflazz">Digiflazz</option>
                                    <option value="vip">Vip Reseller</option>
                                    <option value="apigames">API Games</option>
                                    <option value="gamepoint">Gamepointclub</option>
                                    <option value="bxystore">Bxystore</option>
                                    <option value="evilbee">EvilBee</option>
                                    <option value="meng">Mengtopup</option>
                                    <option value="alpha">Alpharamz</option>
                                    <option value="joki">Joki</option>
                                    <option value="evilbee">EvilBee</option>
                                    <option value="gift_skin">Gift Skin</option>
                                    <option value="dm_vilog">DM Vilog</option>
                                    <option value="manual">Manual</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-lg-1 col-form-label">Harga</label>
                            <div class="col-lg-5">
                                <input type="number" class="form-control @error('harga') is-invalid @enderror"
                                    value="{{ old('harga') }}" name="harga">
                                @error('harga')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label for="" class="col-lg-1 col-form-label">Harga Member</label>
                            <div class="col-lg-5">
                                <input type="number" class="form-control @error('harga_reseller') is-invalid @enderror"
                                    value="{{ old('harga_reseller') }}" name="harga_reseller">
                                @error('harga_reseller')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label for="" class="col-lg-1 col-form-label">Harga Platinum</label>
                            <div class="col-lg-5">
                                <input type="number" class="form-control @error('harga_platinum') is-invalid @enderror"
                                    value="{{ old('harga_platinum') }}" name="harga_platinum">
                                @error('harga_platinum')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label for="" class="col-lg-1 col-form-label">Harga Gold</label>
                            <div class="col-lg-5">
                                <input type="number" class="form-control @error('harga_gold') is-invalid @enderror"
                                    value="{{ old('harga_gold') }}" name="harga_gold">
                                @error('harga_gold')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="" class="col-lg-1 col-form-label">Profit</label>
                            <div class="col-lg-5">
                                <input type="number" class="form-control @error('profit') is-invalid @enderror"
                                    value="{{ old('profit') }}" name="profit">
                                @error('profit')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label for="" class="col-lg-1 col-form-label">Profit Reseller</label>
                            <div class="col-lg-5">
                                <input type="number" class="form-control @error('profit_reseller') is-invalid @enderror"
                                    value="{{ old('profit_reseller') }}" name="profit_reseller">
                                @error('profit_reseller')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label for="" class="col-lg-1 col-form-label">Profit Platinum</label>
                            <div class="col-lg-5">
                                <input type="number" class="form-control @error('profit_platinum') is-invalid @enderror"
                                    value="{{ old('profit_platinum') }}" name="profit_platinum">
                                @error('profit_platinum')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label for="" class="col-lg-1 col-form-label">Profit Gold</label>
                            <div class="col-lg-5">
                                <input type="number" class="form-control @error('profit_gold') is-invalid @enderror"
                                    value="{{ old('profit_gold') }}" name="profit_gold">
                                @error('profitgold')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="" class="col-lg-1 col-form-label">Provider ID</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control @error('provider_id') is-invalid @enderror"
                                    value="{{ old('provider_id') }}" name="provider_id">
                                @error('provider_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Product Logo</label>
                            <div class="col-lg-10">
                                <input type="file" class="form-control" name="product_logo">
                                @error('product_logo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <small style="color:red; ">*AKTIFKAN JIKA KAMU SEDANG MENGADAKAN FLASHSALE</small>
                        <div class="mb-3 mt-3 row">
                            <label class="col-lg-2 col-form-label">Flash Sale?</label>
                            <div class="col-lg-10">
                                <select class="form-select" name="flash_sale">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Judul Flash Sale</label>
                            <div class="col-lg-10">
                                <input type="text"
                                    class="form-control @error('judul_flash_sale') is-invalid @enderror"
                                    value="{{ old('judul_flash_sale') }}" name="judul_flash_sale">
                                @error('judul_flash_sale')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Harga Flash Sale</label>
                            <div class="col-lg-10">
                                <input type="number"
                                    class="form-control @error('harga_flash_sale') is-invalid @enderror"
                                    value="{{ old('harga_flash_sale') }}" name="harga_flash_sale">
                                @error('harga_flash_sale')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Expired Flash Sale</label>
                            <div class="col-lg-10">
                                <input type="date"
                                    class="form-control @error('expired_flash_sale') is-invalid @enderror"
                                    value="{{ old('expired_flash_sale') }}" name="expired_flash_sale">
                                @error('expired_flash_sale')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label class="col-lg-2 col-form-label" for="example-fileinput">Banner Flash Sale</label>
                            <div class="col-lg-10">
                                <input type="file" class="form-control" name="banner_flash_sale">
                                @error('banner_flash_sale')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>



                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Kirim Layanan</button>
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
                    Daftar Semua Layanan
                </h5>
            </div>
            <div class="card-body">
                {{-- <div class="table-responsive"> --}}
                    <table class="table table-striped" id="tableLayanan">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Logo</th>
                                <th class="table-fit">Banner Flash Sale</th>
                                <th>Kategori</th>
                                <th class="table-fit">Layanan</th>
                                <th>Provider</th>
                                <th>PID</th>
                                <th class="table-fit">Harga</th>
                                <th class="table-fit">Harga Member</th>
                                <th class="table-fit">Harga Platinum</th>
                                <th class="table-fit">Harga Gold</th>
                                <th class="table-fit">Harga Flash Sale</th>
                                <th class="table-fit">Flash Sale?</th>
                                <th class="table-fit">Judul Flash Sale</th>
                                <th class="table-fit">Expired Flash Sale</th>
                                <th class="table-fit">Profit</th>
                                <th class="table-fit">Profit Reseller</th>
                                <th class="table-fit">Profit Platinum</th>
                                <th class="table-fit">Profit Gold</th>
                                <th>Status</th>
                                <th>Aksi</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                @php
                                    $label_pesanan = '';
                                    if ($data->status == 'available') {
                                        $btn_pesanan = 'info';
                                    } elseif ($data->status == 'unavailable') {
                                        $btn_pesanan = 'warning';
                                    }
                                @endphp
                                <tr>
                                    <th scope="row">{{ $data->id }}</th>
                                    <td><img width="55" src="{{ asset($data->product_logo) }}"
                                            alt="{{ $data->judul }}">
                                    <td><img width="55" src="{{ asset($data->banner_flash_sale) }}"
                                            alt="{{ $data->judul_flash_sale }}">
                                    <td>{{ $data->nama_kategori }}</td>
                                    <td class="table-fit">{{ $data->layanan }}</td>
                                    <td>{{ $data->provider }}</td>
                                    <td>{{ $data->provider_id }}</td>
                                    <td class="table-fit">Rp. {{ number_format($data->harga, 0, '.', ',') }}</td>
                                    <td class="table-fit">Rp. {{ number_format($data->harga_reseller, 0, '.', ',') }}</td>
                                    <td class="table-fit">Rp. {{ number_format($data->harga_platinum, 0, '.', ',') }}</td>
                                    <td class="table-fit">Rp. {{ number_format($data->harga_gold, 0, '.', ',') }}</td>
                                    <td class="table-fit">Rp. {{ number_format($data->harga_flash_sale, 0, '.', ',') }}</td>
                                    <td class="table-fit">{{ $data->is_flash_sale == 0 ? 'No' : 'Yes' }}</td>
                                    <td class="table-fit">{{ $data->judul_flash_sale }}</td>
                                    <td class="table-fit">{{ $data->expired_flash_sale }}</td>
                                    <td class="table-fit">{{ number_format($data->profit, 0, '.', ',') }}% (Rp.
                                         {{ $data->harga * ($data->profit / 100) }})</td>
                                    <td class="table-fit">{{ number_format($data->profit_reseller, 0, '.', ',') }}% (Rp.
                                        {{ $data->harga_reseller * ($data->profit_reseller / 100) }})</td>
                                    <td class="table-fit">{{ number_format($data->profit_platinum, 0, '.', ',') }}% (Rp.
                                        {{ $data->harga_platinum * ($data->profit_platinum / 100) }})</td>
                                    <td class="table-fit">{{ number_format($data->profit_gold, 0, '.', ',') }}% (Rp.
                                        {{ $data->harga_gold * ($data->profit_gold / 100) }})</td>
                                    <td>
                                        <div class="btn-group-vertical">
                                            <button id="btnGroupDrop1" type="button"
                                                class="btn btn-{{ $btn_pesanan }} dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false"> {{ $data->status }} <i
                                                    class="mdi mdi-chevron-down"></i> </button>
                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <li><a class="dropdown-item"
                                                        href="/layanan-status/{{ $data->id }}/available">available</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="/layanan-status/{{ $data->id }}/unavailable">unavailable</a>
                                                </li>

                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:;"
                                            onclick="modal('{{ $data->layanan }}', '{{ route('layanan.detail', [$data->id]) }}')"
                                            class="btn btn btn-primary mb-1">Edit</a>
                                        <a class="btn btn-danger" href="/layanan/hapus/{{ $data->id }}">Hapus</a>
                                    </td>
                                    <td>{{ $data->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                {{-- </div> --}}
                {{-- <div class="d-flex justify-content-center">
                    {{ $users->links('vendor.pagination.simple-tailwind') }}
                </div> --}}
            </div>
        </div>
    </section>
        <script>
            $(document).ready(function() {
                $('#tableLayanan').DataTable({
                    responsive: true,
                });
            });

            $("#kategori").change(function() {
                var kategori = $("#kategori option:selected").val();

                $.ajax({
                    type: "GET",
                    url: "{{ route('ajax.getsub') }}" + "?category=" + kategori,
                    beforeSend: function() {
                        // Swal.fire({
                        //     title: "Mohon tunggu",
                        //     icon: "info",
                        //     // showConfirmButton: false,
                        //     // allowOutsideClick: false
                        // })
                    },
                    success: function(result) {
                        $("#sub").empty();
                        $("#sub").append("<option value=''>Pilih Sub Kategori</option>");
                        $("#sub").append("<option value='0'>Normal</option>");
                        $.each(result.sub, function(key, obj) {
                            $("#sub").append("<option value=" + obj.id + ">" + obj.name +
                                "</option>");
                        })
                    },
                })
            })

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
