@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ url('berita') }}">Konfigurasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Setting Web</li>
        </ol>
    </nav>
    {{-- <style>
.nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    background-color: #4759d3;
    border: none;
}
.nav-pills .nav-link {
    background-color: transparent;
    padding: 0.5rem 1rem;
    margin-right: 1px;
}
    
</style> --}}

    <!-- start page title -->
    <div class="row">
        <div class="col-12 mb-5">
            <div class="page-title-box">
                {{-- <h4 class="page-title">Setting Web</h4> --}}
                <div class="page-title-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="col-sm mt-3">
                            <ul class="nav nav-pills justify-content-left kbrstore-scroll" id="myTab" role="tablist">
                                <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                                    <button class="btn-sm btn-category nav-link active" id="setting-tab"
                                        data-bs-toggle="tab" data-bs-target="#setting" type="button" role="tab"
                                        aria-controls="setting" aria-selected="true">
                                        <small>Konfigurasi Website</small>
                                    </button>
                                </li>
                                <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                                    <button class="btn-sm btn-category nav-link"aboutus id="aboutus-tab"
                                        data-bs-toggle="tab" data-bs-target="#aboutus" type="button" role="tab"
                                        aria-controls="aboutus" aria-selected="true">
                                        <small>Konfigurasi Tentang Kami</small>
                                    </button>
                                </li>
                                <li class="nav-item me-1 mt-1 nav-tab" role="presentation">
                                    <button class="btn-sm btn-category nav-link"aboutus id="api-tab" data-bs-toggle="tab"
                                        data-bs-target="#api" type="button" role="tab" aria-controls="api"
                                        aria-selected="true">
                                        <small>Konfigurasi APi</small>
                                    </button>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
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
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane active" id="setting" role="tabpanel" aria-labelledby="setting-tab">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-5 header-title mt-0">Konfigurasi Website</h4>
                        <form action="{{ url('/setting/web') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">Judul Website</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $web->judul_web }}"
                                            name="judul_web">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">Deskripsi Website</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="deskripsi_web" style="height: 100px;">{{ $web->deskripsi_web }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">Keyword</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="keyword" style="height: 200px;">{{ $web->keyword }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">Header Image
                                        Website</label>
                                    <div class="col-lg-10">
                                        <img width="100" class="mb-2" src="{{ asset($web->og_image) }}" alt="kbrstore">
                                        <input type="file" class="form-control" name="og_image">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">Logo Header</label>
                                    <div class="col-lg-10">
                                        <img width="100" src="{{ asset($web->logo_header) }}" alt="kbrstore">
                                        <input type="file" class="form-control" name="logo_header">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">Logo Footer</label>
                                    <div class="col-lg-10">
                                        <img width="100" src="{{ asset($web->logo_footer) }}" alt="kbrstore">
                                        <input type="file" class="form-control" name="logo_footer">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">Logo Favicon</label>
                                    <div class="col-lg-10">
                                        <img width="100" class="mb-2" src="{{ asset($web->logo_favicon) }}"
                                            alt="kbrstore">
                                        <input type="file" class="form-control" name="logo_favicon">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">URL WA</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $web->url_wa }}"
                                            name="url_wa">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">URL IG</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $web->url_ig }}"
                                            name="url_ig">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">URL TikTok</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $web->url_tiktok }}"
                                            name="url_tiktok">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">URL Youtube</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $web->url_youtube }}"
                                            name="url_youtube">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">URL FB</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $web->url_fb }}"
                                            name="url_fb">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-primary  me-1 mb-1">Submit</button>
                                <a class="btn btn-primary  me-1 mb-1" href="/web/jsg">Maintenance</a>
                                <a class="btn btn-primary  me-1 mb-1" href="/web/up">Up</a>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3 header-title mt-0">Slogan Web</h4>
                        <form action="{{ url('/setting/sloganweb') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">Slogan Website</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="slogan_web">{{ $web->slogan_web }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-primary  me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="card">
                        <div class="card-body">
                            <h4 class="mb-3 header-title mt-0">Konfigurasi Page Terms</h4>
                            <form action="{{ url('/setting/snk') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="mb-3 row">
                                        <label class="col-lg-2 col-form-label" for="example-fileinput">Syarat & Ketentuan</label>
                                        <small class="text-primary">*Generator Syarat & Ketentuan <a class="text-danger" href="https://www.termsandconditionsgenerator.com/">Klick Disini</a></small>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" name="snk">{{ $web->snk }}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-lg-2 col-form-label" for="example-fileinput">Privacy Policy</label>
                                        <small class="text-primary">*Generator Privacy Policy <a class="text-danger" href="https://www.privacypolicyonline.com/privacy-policy-generator/">Klick Disini</a></small>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" name="privacy">{{ $web->privacy }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div> -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-5 header-title mt-0">Konfigurasi Warna Website</h4>
                                <form action="{{ url('/setting/warnaweb') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="example-fileinput">WARNA 1</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" value="{{ $web->warna1 }}"
                                                    name="warna1">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="example-fileinput">WARNA 2</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" value="{{ $web->warna2 }}"
                                                    name="warna2">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="example-fileinput">WARNA 3</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" value="{{ $web->warna3 }}"
                                                    name="warna3">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="example-fileinput">WARNA 4</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" value="{{ $web->warna4 }}"
                                                    name="warna4">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="example-fileinput">WARNA 5</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" value="{{ $web->warna5 }}"
                                                    name="warna5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end mt-4">
                                        <button type="submit" class="btn btn-primary  me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-5 header-title mt-0">Konfigurasi Harga Membership</h4>
                                <form action="{{ url('/setting/hargamembership') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="example-fileinput">HARGA
                                                GOLD</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control"
                                                    value="{{ $web->harga_gold }}" name="harga_gold">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="example-fileinput">HARGA
                                                PLATINUM</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control"
                                                    value="{{ $web->harga_platinum }}" name="harga_platinum">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end mt-4">
                                        <button type="submit" class="btn btn-primary  me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-5 header-title mt-0">Konfigurasi mutasi E-wallet / bank</h4>
                        <form action="{{ url('/setting/mutasi') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="example-fileinput">OVO
                                                ADMIN</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" value="{{ $web->ovo_admin }}"
                                                    name="ovo_admin">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="example-fileinput">OVO1
                                                ADMIN</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control"
                                                    value="{{ $web->ovo1_admin }}" name="ovo1_admin">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="example-fileinput">GOPAY
                                                ADMIN</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control"
                                                    value="{{ $web->gopay_admin }}" name="gopay_admin">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="example-fileinput">GOPAY1
                                                ADMIN</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control"
                                                    value="{{ $web->gopay1_admin }}" name="gopay1_admin">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="example-fileinput">DANA
                                                ADMIN</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control"
                                                    value="{{ $web->dana_admin }}" name="dana_admin">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="example-fileinput">SHOPEEPAY
                                                ADMIN</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control"
                                                    value="{{ $web->shopeepay_admin }}" name="shopeepay_admin">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="example-fileinput">BCA
                                                ADMIN</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" value="{{ $web->bca_admin }}"
                                                    name="bca_admin">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-12 d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-primary  me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <!-- konfigurasi about us -->
            <div class="tab-pane" id="aboutus" role="tabpanel" aria-labelledby="aboutus-tab">
                <div class="card">
                    <div class="card-body">
                        <h1 class="mb-4 header-title mt-0">Konfigurasi Tentang Kami</h1>
                        <h6 class="mb-4">HALAMAN TENTANG KAMI YANG MANA? <a class="text-warning"
                                href="{{ url('/about-us') }}"><strong>KLIK DISINI.</strong></a><br><br></h6>
                        <form action="{{ url('/setting/tentang-kami') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">SEJARAH STORE 1</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="sejarah">{{ $web->sejarah }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">SEJARAH STORE 2</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="sejarah_1" style="height: 100px;">{{ $web->sejarah_1 }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">VISI STORE</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="visi">{{ $web->visi }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">MISI STORE</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="misi" style="height: 80px;">{{ $web->misi }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">NAMA CEO</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $web->nama_ceo }}"
                                            name="nama_ceo">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">LOGO CEO</label>
                                    <div class="col-lg-10">
                                        <img class="mb-2" width="100" src="{{ asset($web->logo_ceo) }}"
                                            alt="kbrstore">
                                        <input type="file" class="form-control" name="logo_ceo">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">DESKRIPSI CEO</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="deskripsi_ceo">{{ $web->deskripsi_ceo }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">NAMA BAGAN /
                                        STORE</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $web->nama_bagan }}"
                                            name="nama_bagan">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">ALAMAT BISNIS</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="alamat">{{ $web->alamat }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">EMAIL BISNIS</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="email">{{ $web->email }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">NOMOR BISNIS</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $web->telp }}"
                                            name="telp">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-primary  me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- konfigurasi api -->
            <div class="tab-pane" id="api" role="tabpanel" aria-labelledby="api-tab">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3 header-title mt-0">Konfigurasi Tripay</h4>
                        <p class="mb-3" style="color:red;">URL CALLBACK : {{ ENV('APP_URL') }}/callback</p>
                        <form action="{{ url('/setting/tripay') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">TRIPAY API</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $web->tripay_api }}"
                                            name="tripay_api">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">TRIPAY MERCHANT
                                        CODE</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control"
                                            value="{{ $web->tripay_merchant_code }}" name="tripay_merchant_code">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">TRIPAY PRIVATE
                                        KEY</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control"
                                            value="{{ $web->tripay_private_key }}" name="tripay_private_key">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-primary  me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-5 header-title mt-0">Konfigurasi Digiflazz</h4>
                        <form action="{{ url('/setting/digiflazz') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">USERNAME DIGI</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $web->username_digi }}"
                                            name="username_digi">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">API KEY DIGI</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $web->api_key_digi }}"
                                            name="api_key_digi">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <a class="btn btn-primary btn-sm me-1 mb-1" href="/getservice">Get Layanan</a>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-5 header-title mt-0">Konfigurasi ApiGames</h4>
                        <form action="{{ url('/setting/apigames') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">APIGAMES SECRET</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $web->apigames_secret }}"
                                            name="apigames_secret">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">APIGAMES
                                        MERCHANT</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $web->apigames_merchant }}"
                                            name="apigames_merchant">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-primary  me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-5 header-title mt-0">Konfigurasi vip reseller</h4>
                        <form action="{{ url('/setting/vip') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">VIP APIID</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $web->vip_apiid }}"
                                            name="vip_apiid">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">VIP APIKEY</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $web->vip_apikey }}"
                                            name="vip_apikey">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-primary  me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-5 header-title mt-0">Konfigurasi WA GATEWAY</h4>
                        <a style="color:#ff6262;" href="https://wa.me/62895346404969">Klik Disini Untuk Hubungi
                            Developer</a>
                        <form action="{{ url('/setting/wagateway') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">NOMOR ADMIN</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $web->nomor_admin }}"
                                            name="nomor_admin">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">WA KEY</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $web->wa_key }}"
                                            name="wa_key">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-2 col-form-label" for="example-fileinput">WA NUMBER</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $web->wa_number }}"
                                            name="wa_number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-primary  me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const categoryButtons = document.querySelectorAll('.btn-category');
            const categoryTitle = document.querySelector('.category-title');
            const categorySubtitle = document.querySelector('.category-subtitle');

            categoryButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const category = button.textContent.trim();
                    categoryTitle.textContent = category;
                    categorySubtitle.textContent = '';
                });
            });
        </script>
    @endsection
