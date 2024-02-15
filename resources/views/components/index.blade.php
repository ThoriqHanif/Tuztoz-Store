@extends('layouts.master-order')


@section('content')

    <body>
        <nav class="navbar active">
            <div class="container">
                <div class="navLeft">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/logo/20240123_060438.png') }}" alt="">
                    </a>
                    <div class="logoName">Tuztoz</div>
                </div>
                <div class="navRight">

                    @if (Auth::check())
                        <a href="{{ route('dashboard') }}" class="btnYellowPrimary login">Dashboard</a>
                    @else
                        <a href="{{ url('login') }}" class="btnYellowPrimary login">Masuk</a>
                        <a href="{{ route('register') }}" class="btnYellowSecond login">Daftar</a>
                    @endif
                    <div class="containerMenu">
                        <div class="dropdown">
                            <button class="dropdownMenu shadow">
                                <i class="bi bi-grid-fill"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="{{ route('home') }}">
                                    <div class="containers">
                                        <i class="bi bi-house-door-fill"></i>
                                        <div class="name">Beranda</div>
                                    </div>
                                    <i class="bi bi-arrow-right-short"></i>
                                </a>
                                <a href="{{ url('daftar-harga') }}">
                                    <div class="containers">
                                        <i class="bi bi-tags-fill"></i>
                                        <div class="name">Daftar Harga</div>
                                    </div>
                                    <i class="bi bi-arrow-right-short"></i>
                                </a>
                                <a href="{{ route('cari') }}">
                                    <div class="containers">
                                        <i class="bi bi-receipt-cutoff"></i>
                                        <div class="name">Lacak Pesanan</div>
                                    </div>
                                    <i class="bi bi-arrow-right-short"></i>
                                </a>

                            </div>
                        </div>
                    </div>

                    <label class="theme-switch shadow">
                        <input class='toggle-checkbox' id="checkbox" type='checkbox'></input>
                        <div class="switch-icon">
                            <i class="bi bi-brightness-high yellowprim"></i>
                        </div>
                    </label>

                </div>
            </div>
        </nav>
        <div class="mobileNav">
            <a href="{{ route('home') }}" class="containers ">
                <i class="bi bi-house-door-fill"></i>
                <div class="text">Beranda</div>
            </a>

            <a href="{{ url('daftar-harga') }}" class="containers ">
                <i class="bi bi-tags-fill"></i>
                <div class="text">Daftar Harga</div>
            </a>
            <a href="{{ route('cari') }}" class="containers ">
                <i class="bi bi-receipt-cutoff"></i>
                <div class="text">Lacak Pesanan</div>
            </a>
            {{-- <a href="{{ route('login') }}" class="containers ">
                <i class="bi bi-person-fill-lock"></i>
                <div class="text">Login</div>
            </a> --}}
            @if (Auth::check())
                <a href="{{ url('account') }}" class="containers ">
                    <i class="bi bi-person-fill"></i>
                    <div class="text">Account</div>
                </a>

                <a href="{{ url('dashboard') }}" class="containers ">
                    <i class="bi bi-app-indicator"></i>
                    <div class="text">Dashboard</div>
                </a>
            @else
                <a href="{{ route('login') }}" class="containers ">
                    <i class="bi bi-person-fill-lock"></i>
                    <div class="text">Login</div>
                </a>
            @endif
        </div>

        <section>

            <div id="pwa" class="pwa mx-auto p-3 mb-3">
                <div class="flex justify-center items-center">
                    <div class="desc flex items-center">
                        <i class="bi bi-phone mr-3" style="font-size: 1.5rem;"></i>
                        <span class="text-xs ml-2 mr-3 w-full">Akses lebih cepat dengan aplikasi Tuztoz di Playstore.
                        </span>
                    </div>
                    <a href="" class="btn btn-primary rounded-md text-sm px-6 py-2 mr-3">
                        Install
                    </a>
                    <i onclick="closeInstall()" class="bi bi-x-lg desc"></i>
                </div>
            </div>
            <div class="container">

                <!-- Banner -->
                <div class="containerBanner">
                    <div class="swiper swiperBanner">
                        <div class="swiper-wrapper">
                            @php
                                $totalBanners = count($banner);
                                // Convert the collection to an array
                                $bannerArray = $banner->toArray();
                                // Jika hanya satu banner tersedia, duplikasi array banner untuk menciptakan efek kiri-tengah-kanan.
                                if ($totalBanners === 1) {
                                    $bannerArray = array_merge($bannerArray, $bannerArray, $bannerArray);
                                    $totalBanners = count($bannerArray);
                                }
                                $i = 1;
                            @endphp

                            @foreach ($bannerArray as $data)
                                @php $active = ($i == 1) ? 'active' : ''; @endphp
                                <div class="swiper-slide banner" style="width: 366px; padding:20px;"
                                    data-swiper-slide-index="{{ $i - 1 }}" role="group"
                                    aria-label="{{ $i }} / {{ $totalBanners }}">
                                    <div class="banner-img">
                                        <img src="{{ $data['path'] }}" alt="">
                                    </div>
                                </div>
                                @php $i++; @endphp
                            @endforeach

                            {{-- Untuk efek kiri-tengah-kanan, tambahkan slide pertama lagi di sebelah kanan setelah slide terakhir --}}
                            @if ($totalBanners > 1)
                                <div class="swiper-slide banner" style="width: 366px; padding:20px;"
                                    data-swiper-slide-index="{{ $totalBanners }}" role="group"
                                    aria-label="1 / {{ $totalBanners }}">
                                    <div class="banner-img">
                                        <img src="{{ $bannerArray[0]['path'] }}" alt="">
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                @if ($flashsale->count() > 0)
                    <div class="containerFlashSale">
                        <div class="headerFS">
                            <div class="containers">
                                <div class="title-head">Flash Sale</div>
                                <img src="{{ asset('assets/icons/flash.svg') }}" alt="" />
                                <div class="time">
                                    <div class="day">00</div>
                                    <div class="dots">:</div>
                                    <div class="hours">00</div>
                                    <div class="dots">:</div>
                                    <div class="minute">00</div>
                                    <div class="dots">:</div>
                                    <div class="second">00</div>
                                </div>
                            </div>
                            <div class="FSnav">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>

                        <div class="swiper swiperFlashSale">
                            <div class="swiper-wrapper">
                                @foreach ($flashsale as $fs)
                                    <div class="swiper-slide flashSale">
                                        <a class="cursor-pointer" href="{{ '/order' }}/{{ $fs->kode_game }}">
                                            <img alt="{{ $fs->judul_flash_sale }}" src="{{ $fs->banner_flash_sale }}" />
                                            <div class="mask"></div>
                                            <div class="desc">
                                                <div class="price">
                                                    <div class="titleFs">{{ $fs->judul_flash_sale }}</div>
                                                    <div class="realPrice">
                                                        <span class="rp">Rp
                                                            {{ number_format($fs->harga_flash_sale, 0, '.', ',') }},-</span>
                                                    </div>
                                                    <div class="disc">Rp {{ number_format($fs->harga, 0, '.', ',') }},-
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <div class="containerBestSeller">
                    <div class="headerFS">
                        <div class="containers">
                            <div class="title-head">Best Seller</div>
                            <i class="fa-solid fa-star"></i>
                        </div>

                    </div>

                    <div class="swiper swiperFlashSale">
                        <div class="swiper-wrapper">
                            <style>
                                .blur-sm {
                                    position: relative;
                                    overflow: hidden;
                                }

                                @foreach ($kategori as $jsgori)
                                    @if ($jsgori->populer == '1')
                                        .blur-sm-{{ $jsgori->id }}::before {
                                            content: '';
                                            position: absolute;
                                            top: 0;
                                            left: 0;
                                            width: 100%;
                                            height: 100%;
                                            background-image: url('{{ $jsgori->thumbnail }}');
                                            background-size: cover;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            filter: blur(4px) brightness(0.5);
                                            z-index: -1;
                                        }
                                    @endif
                                @endforeach
                            </style>
                            @php $count = 0 @endphp
                            @foreach ($kategori as $jsgori)
                                @if ($jsgori->populer == '1' && $count < 6)
                                    <div class="swiper-slide flashSale">
                                        <a tabindex="0" href="{{ url('/order/' . $jsgori->kode) }}"
                                            class="blur-sm blur-sm-{{ $jsgori->id }} relative flex items-center gap-2 rounded-xl p-2">
                                            <img src="{{ url('') . $jsgori->thumbnail }}" loading="lazy"
                                                class="z-10 h-14 w-14 rounded-xl object-cover"
                                                style="object-fit: cover; width:auto; height:80px;">
                                            <div class="z-10 flex flex-col justify-center text-white text-container">
                                                <h6 class="font-bold leading-tight">{{ $jsgori->nama }}</h6>
                                            </div>


                                        </a>
                                    </div>
                                    @php $count++ @endphp
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="containerProduct" id="produk">
                    <ul class="nav navTabs sticky-tabs" id="myTab" role="tablist">
                        @foreach ($tipes as $tipe)
                            <li class="nav-item" role="presentation">
                                <button class=" btn-tipe px-5 text-capitalize py-2 text-sm btnNavTabs"
                                    id="{{ $tipe->name }}-tab" data-bs-toggle="pill"
                                    data-bs-target="#{{ $tipe->name }}" type="button" role="tab"
                                    aria-controls="{{ $tipe->name }}" aria-selected="true">

                                    <div class="text">{{ $tipe->name }}</div>
                                </button>
                            </li>
                        @endforeach
                    </ul>



                    <div class="tab-content" id="myTabContent">
                        @foreach ($kategoriByTipe as $tipe => $kategori)
                            <div class="tab-pane fade show active" id="{{ $tipe }}" role="tabpanel"
                                aria-labelledby="{{ $tipe }}-tab">
                                <div class="row g-2 g-lg-3">
                                    @foreach ($kategori as $jsgori)
                                        <div class="col-lg-2 col-md-3 col-4 mb-lg-3 mb-md-2 col-sm-4">
                                            <div class="containers shadow">
                                                <a href="{{ url('') . '/order/' . $jsgori->kode }}">
                                                    <img alt="{{ $jsgori->nama }}" sizes="100vw"
                                                        srcset="{{ url('') }}{{ $jsgori->thumbnail }}"
                                                        src="{{ url('') }}{{ $jsgori->thumbnail }}"
                                                        class="product-img" alt="" />
                                                    <div class="mask"></div>
                                                    <div class="desc px-3">
                                                        <div class="game">{{ $jsgori->nama }}</div>
                                                        <div class="vendor">{{ $jsgori->sub_nama }}</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="subContent">
                <!-- CTA -->

                <div class="containerNews" id="faqs">
                    <div class="container">
                        <div class="head mb-3">

                            <div class="title2">Tuztoz Indonesia <img src="{{ asset('assets/icons/clink.png') }}"
                                    alt=""></div>
                            <div class="title4 text-dark mt-4" style="text-align: center;">
                                "{{ !$config ? '' : $config->deskripsi_web }}"</div>
                        </div>
                        <div class="row justify-content-center mt-5">
                            <div class="col-lg-8">
                                <div class="accordion mb-2">
                                    <div class="accordionHeadPay" style="background: var(--dark-grey);">
                                        <div class="title">Authorized Partner</div>
                                    </div>
                                    <div class="accordionBodyPay shadow">
                                        <div class="accordionContent">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="title3">
                                                        <p>TuzToz's collaboration with authorized publishers
                                                            guarantees the success of each transaction, establishing trust
                                                            among millions of Gamers in
                                                            Indonesia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion mb-2">
                                    <div class="accordionHeadPay" style="background: var(--dark-grey);">
                                        <div class="title">Customer Service</div>
                                    </div>
                                    <div class="accordionBodyPay shadow">
                                        <div class="accordionContent">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="title3">
                                                        <p>If you face any issues, feel free to reach out to our
                                                            online support. The TuzToz team will assess the problem and
                                                            respond to you at the earliest
                                                            opportunity.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion mb-2">
                                    <div class="accordionHeadPay" style="background: var(--dark-grey);">
                                        <div class="title">Safe & Secure</div>
                                    </div>
                                    <div class="accordionBodyPay shadow">
                                        <div class="accordionContent">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="title3">
                                                        <p>TuzToz is dedicated to safeguarding all customer
                                                            transaction, personal information, including payment and bank
                                                            account data.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion mb-2">
                                    <div class="accordionHeadPay" style="background: var(--dark-grey);">
                                        <div class="title">Instant Delivery</div>
                                    </div>
                                    <div class="accordionBodyPay shadow">
                                        <div class="accordionContent">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="title3">
                                                        <p>Once the payment is successfully completed, your
                                                            purchases
                                                            will be directly delivered to your account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> */

            <!-- MODAL -->
            <div class="modal fade" id="modal-home" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" style="max-width:600px">
                    <div class="modal-home-content py-5">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="" alt="" width="100%" style="border-radius: 10px;">
                                <button type="button" class="btnYellowPrimary mt-2 w-100" onclick="modal_hide()"
                                    data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="container">
                    <div class="logo">
                        <img src="{{ asset('assets/logo/20240123_060438.png') }}" alt="" />
                        <div class="names">Tuztoz Indonesia</div>
                    </div>
                    <div class="desc mx-auto" style="margin-top: 20px">
                        Professional Digital Top Up and Gaming Services in Indonesia</div>
                    <div class="sosmed">
                        {{-- <div class="flex justify-between"> --}}
                        <img src="/assetss/payment/bca_footer.png" width="50px" loading="lazy"
                            class="h-7 rounded-sm bg-white p-1">
                        <img src="/assetss/payment/linkaja_footer.png" width="50px" loading="lazy"
                            class="h-7 rounded-sm bg-white p-1">
                        <img src="/assetss/payment/shopay_footer.png" width="50px" loading="lazy"
                            class="h-7 rounded-sm bg-white p-1">
                        <img src="/assetss/payment/ovo_footer.png" width="50px" loading="lazy"
                            class="h-7 rounded-sm bg-white p-1">
                        <img src="/assetss/payment/gopay_footer.png" width="50px" loading="lazy"
                            class="h-7 rounded-sm bg-white p-1">
                        <img src="/assetss/payment/dana_footer.png" width="50px" loading="lazy"
                            class="h-7 rounded-sm bg-white p-1">
                        <img src="/assetss/payment/qris_footer.png" width="50px" loading="lazy"
                            class="h-7 rounded-sm bg-white p-1">
                        <img src="/assetss/payment/indomaret_footer.png" width="50px" loading="lazy"
                            class="h-7 rounded-sm bg-white p-1">
                        {{-- </div> --}}
                    </div>
                    <div class="bottomFoot">
                        <div class="copyright">
                            <div class="text">
                                Copyright ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> {{ ENV('APP_NAME') }} Indonesia. All Rights Reserved
                            </div>
                        </div>
                        <div class="linkFoot">
                            <div class="containers">
                                <a href="{{ route('home') }}" class="text-footer">Home</a>
                                <a href="{{ route('aboutus') }}" class="text-footer">About Us</a>
                                <a href="{{ url('daftar-harga') }}" class="text-footer">Daftar Harga</a>
                                <a href="{{ route('cari') }}" class="text-footer">Lacak Pesanan</a>

                                <a href="{{ url('page/term') }}">Syarat & Ketentuan</a>
                                <a href="{{ url('contact-us') }}">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                    <div class="h-40"></div>
                </div>
            </div>
        </section>

        <a href="https://wa.me/62895367029265"
            class="floating-contact d-flex justify-content-center gap-1 flex-column contact" tabindex="0"
            data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Contact CS Kami Via Whatsapp">
            <!-- <img src="assets/img/logo.svg" alt=""> -->
            <span class="text-white">CHAT CS</span>
        </a>

        <a id="backToTopBtn" onclick="scrollToTop()"
            class="floating-btu d-flex justify-content-center gap-1 flex-column contact" tabindex="0">
            <i class="bi bi-arrow-up"></i>
        </a>

        <script>
            var countDownDate = new Date("2024-10-31").getTime();
            const flasSale = document.querySelector(".containerFlashSale");
            if (flasSale) {
                var x = setInterval(function() {
                    var now = new Date().getTime();
                    var distance = countDownDate - now;
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor(
                        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
                    );
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    document.querySelector(".day").innerHTML = days;
                    document.querySelector(".hours").innerHTML = hours;
                    document.querySelector(".minute").innerHTML = minutes;
                    document.querySelector(".second").innerHTML = seconds;

                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("demo").innerHTML = "EXPIRED";
                    }
                }, 1000);
            }

            function closeInstall() {
                const el = document.getElementById("pwa")
                el.classList.add('hidden')
            }
        </script>
    @endsection
