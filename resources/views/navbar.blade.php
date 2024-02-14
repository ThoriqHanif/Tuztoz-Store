<!--Navbar -->
<header class="mb-5">
    <nav class="fixed top-0 z-40 w-full shadow-navbar" data-headlessui-state="open" style="background: var(--warna_2);">
        <div class="mx-auto max-w-7xl px-3 sm:px-6 lg:px-[3.2rem]">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center">
                    <button class="navbar-toggler border-0 " type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" class="block h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                        </svg>
                    </button>

                </div>

                <!-- Show Daftar / Masuk -->
                <div class="flex flex-1 items-center sm:items-center sm:justify-start ml-12 gap-4">
                    <div class="flex flex-shrink-0 items-center">
                        <a class="relative w-auto" href="{{ url('') }}">
                            <img alt="logo" srcset="{{ url('') }}{{ !$config ? '' : $config->logo_header }}"
                                src="{{ url('') }}{{ !$config ? '' : $config->logo_header }}" width="50"
                                height="50" decoding="async" data-nimg="1" class="block h-11 w-auto" loading="lazy"
                                style="color: transparent; width: 70px; height: 70px;" />
                        </a>
                    </div>
                    <p class="hidden md:block text-sm text-ellipsis truncate md:w-[75%] lg:w-[100%] leading-normal italic "
                        style="margin-top:5px;">{{ !$config ? '' : $config->slogan_web }}</p>
                </div>
                <div class="relative" data-headlessui-state="open">
                    <div>


                    </div>

                    <div class="flex items-center space-x-5 ">
                        <div class="h-7" style="margin-right:1rem;">


                        </div>
                        @guest<button
                                class="inline-flex d-block d-lg-block justify-center rounded-md py-2 text-sm font-medium hover:bg-opacity-30 focus:outline-none focus-visible:ring-2 focus-visible:ring-blcak focus-visible:ring-opacity-75"
                                id="headlessui-menu-button-:R1qd6:" type="button" aria-haspopup="menu"
                                aria-expanded="false" data-headlessui-state="closed"
                                aria-controls="headlessui-menu-items-:r0:">
                                <div class="flex gap-2 pr-0 lg:pr-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true" width="24"
                                        height="24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9">
                                        </path>
                                    </svg>
                                    <div class="mt-1">Masuk / Daftar</div>
                                </div>
                                <div class="flex gap-2 pr-0 lg:pr-2 ">

                                </div>
                        </button>
                        @endguest
                        @auth
                            <div class="relative" data-headlessui-state="open">
                                <div>
                                </div>
                                <div class="flex items-center space-x-5 ">
                                    <div class="h-7" style="margin-right:1rem;">
                                    </div>
                                    <div
                                        class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                                        <div class="relative">
                                            <div>
                                                <button id="headlessui-menu-button-:R1qd6:" type="button"
                                                    aria-haspopup="menu" aria-expanded="false"
                                                    data-headlessui-state="closed"
                                                    aria-controls="headlessui-menu-items-:r0:"
                                                    class="inline-flex w-full justify-center rounded-md py-2 text-sm font-medium hover:bg-opacity-30 focus:outline-none focus-visible:ring-2 focus-visible:ring-blcak focus-visible:ring-opacity-75"
                                                    id="headlessui-menu-button-:R1qd6:">
                                                    <div class="relative h-8 w-8">
                                                        <img alt="" sizes="100vw"
                                                            srcset="/assets/logo/logo-user.png" src=""
                                                            decoding="async" data-nimg="fill"
                                                            class="rounded-full ring-1 ring-blcak" loading="lazy"
                                                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;" />
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="absolute right-0 mt-2 w-72 origin-top-right divide-y divide-gray-100 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-non css-18exuzb transform opacity-0 scale-95 hidden"
                                                aria-labelledby="headlessui-menu-button-:R1qd6:"
                                                id="headlessui-menu-items-:r0:" role="menu" tabindex="0"
                                                data-headlessui-state="closed">
                                                <div class="" role="none">
                                                    <div class="px-1 py-1" role="none" id="headlessui-menu-item-:r1:"
                                                        role="menuitem" tabindex="-1" data-headlessui-state="1">
                                                        @if (Auth::user()->role !== 'Admin')
                                                            <a class="group flex w-full items-center rounded-md px-2 py-2 text-sm transition duration btn-akumauweb"
                                                                id="headlessui-menu-item-:rf:" role="menuitem"
                                                                tabindex="-1" data-headlessui-state=""
                                                                href="{{ route('dash') }}">
                                                                <i class="fas fa-home">
                                                                </i>&nbsp;Dashboard
                                                            </a>
                                                        @endif
                                                        @if (Auth::user()->role == 'Admin')
                                                            <a class="group flex w-full items-center rounded-md px-2 py-2 text-sm transition duration btn-akumauweb"
                                                                id="headlessui-menu-item-:rf:" role="menuitem"
                                                                tabindex="-1" data-headlessui-state=""
                                                                href="{{ url('/dashboard') }}">
                                                                <i class="fas fa-home">
                                                                </i>&nbsp;MyAdmin
                                                            </a>
                                                        @endif
                                                        <a class="group flex w-full items-center rounded-md px-2 py-2 text-sm transition duration btn-akumauweb"
                                                            id="headlessui-menu-item-:rg:" role="menuitem" tabindex="-1"
                                                            data-headlessui-state="" href="{{ route('deposit') }}">
                                                            <i class="fas fa-wallet">
                                                            </i>&nbsp;IDR
                                                            {{ number_format(Auth::user()->balance, 0, ',', '.') }}
                                                        </a>
                                                        <form action="{{ route('logout') }}" method="POST">
                                                            @csrf
                                                            <button
                                                                class="group flex w-full items-center rounded-md px-2 py-2 text-sm transition duration btn-akumauweb"
                                                                href="/logout" id="headlessui-menu-item-:ri:"
                                                                role="menuitem" tabindex="-1" data-headlessui-state="">
                                                                <i class="fa-sharp fa-solid fa-right-from-bracket">
                                                                </i>&nbsp;Keluar
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>@endauth

                                @guest
                                    <div class="absolute right-0 mtman w-72 origin-top-right divide-y divide-gray-100 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-non css-18exuzb transform opacity-0 scale-95 hidden"
                                        aria-labelledby="headlessui-menu-button-:R1qd6:" id="headlessui-menu-items-:r0:"
                                        role="menu" tabindex="0" data-headlessui-state="closed">
                                        <div class="px-1 py-1" role="none">
                                            <style>
                                                .mtman {
                                                    margin-top: 10rem;
                                                }
                                            </style>
                                            <div id="headlessui-menu-item-:r1:" role="menuitem" tabindex="-1"
                                                data-headlessui-state="1">
                                                <div class="text-center mt-4">
                                                    <img alt="mbgs-logo-"
                                                        srcset="{{ URL('') }}{{ !$config ? '' : $config->logo_header }}"
                                                        src="{{ URL('') }}{{ !$config ? '' : $config->logo_header }}"
                                                        width="150" height="150" decoding="async" data-nimg="1"
                                                        class="mx-auto" loading="lazy" style="color: transparent;" />
                                                    <p class="text-md font-normal mt-2">Masuk atau Daftar?</p>
                                                </div>
                                                <div class="flex w-full p-3">

                                                    <a class="btn-voucher w-full flex justify-center rounded-l-full py-2 text-sm font-medium md:inline-flex  css-1wpp9sf"
                                                        href="{{ url('/login') }}">Masuk</a>
                                                    <a class="btn-voucher w-full flex justify-center rounded-r-full py-2 text-sm font-medium md:inline-flex transition duration-300 css-mxl5am"
                                                        href="{{ url('/register') }}">Daftar</a>
                                                </div>
                                            </div>
                                        </div>
                                </div>@endguest
                            </div>

                        </div>
                    </div>
                </div>

    </nav>
</header>
<!-- End Show Daftar / Masuk -->

<div class="flex w-full justify-center pt-4 pb-2.5 lg:pt-2.5 lg:pb-2.5 gap-3 items-center px-3.5"
    style="background:#707feb"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
        stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5 hidden lg:block">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3">
        </path>
    </svg>
    <p class="text-xs lg:text-sm font-normal">Akses Lebih Cepat Dengan Download <strong>Aplikasi TUZTOZ</strong> Di
        Playstore</p><a target="_blank" href="https://play.google.com/store/apps/details?id=com.xcashshop.app"><img
            alt="google-playstore" srcset="/cdn/image/google-play.png 1x, /cdn/image/google-play.png 2x"
            src="/cdn/image/google-play.png" width="100" height="100" decoding="async" data-nimg="1"
            class="w-auto h-8" loading="lazy" style="color:transparent"></a>
</div>





















<!--Show Navbar menu-->
<div class="flex shrink-0 items-center px-4 ">
    <div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasDarkNavbar"
        aria-labelledby="offcanvasDarkNavbarLabel" style="background: var(--warna_2);  visibility: visible;"
        aria-modal="true" role="dialog">
        <div class="offcanvas-header ">
            <h5 class="offcanvas-title " id="offcanvasDarkNavbarLabel">
                <img src="" alt="" width="100">
            </h5>
            <button type="button"
                class="rounded-full text-gray-300 hover:text-blcak focus:outline-none focus:ring-2 focus:ring-blcak"
                data-bs-dismiss="offcanvas" aria-label="Close">
                <span class="sr-only">Close panel</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg></button>
        </div>
        <div class="flex shrink-0 items-center px-4" style="margin-top:-1rem;">
            <a class="relative h-[5.7rem] w-56" href="{{ url('') }}">
                <img alt="logo" srcset="{{ url('') }}{{ !$config ? '' : $config->og_image }}"
                    src="{{ url('') }}{{ !$config ? '' : $config->logo_header }}" decoding="async"
                    data-nimg="fill" loading="lazy"
                    style="position: absolute; width:50%; inset: 0px; color: transparent;" />
            </a>
        </div>
        <nav class="space-y-1 px-3 mt-4">
            <!--   <a class=" btn-akumauweb group flex items-center rounded-md p-2 text-base font-medium css-1tq05rq"
                    href="{{ url('') }}">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                        stroke-linejoin="round" class="mr-2" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <desc></desc>
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                    </svg>
                    Beranda
                </a> -->
            <a class="btn-akumauweb group flex items-center rounded-md p-2 text-base font-medium css-1tq05rq"
                href="{{ url('/all') }}">
                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                    stroke-linecap="round" stroke-linejoin="round" class="mr-2" height="1em" width="1em"
                    xmlns="http://www.w3.org/2000/svg">
                    <desc></desc>
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                        d="M12 5h3.5a5 5 0 0 1 0 10h-5.5l-4.015 4.227a2.3 2.3 0 0 1 -3.923 -2.035l1.634 -8.173a5 5 0 0 1 4.904 -4.019h3.4z">
                    </path>
                    <path d="M14 15l4.07 4.284a2.3 2.3 0 0 0 3.925 -2.023l-1.6 -8.232"></path>
                    <path d="M8 9v2"></path>
                    <path d="M7 10h2"></path>
                    <path d="M14 10h2"></path>
                </svg>
                Semua Game
            </a>
            <a class="btn-akumauweb group flex items-center rounded-md p-2 text-base font-medium css-1tq05rq"
                href="{{ url('/daftar-harga') }}">
                <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" fill="none" viewBox="0 0 16 16"
                    class="mr-2" height="1em" width="1em">
                    <path
                        d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882l7.5-4z" />
                    <path
                        d="m2.125 8.567-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0l-5.17-2.756z" />
                </svg>
                Daftar Harga
            </a>
            <a class="btn-akumauweb group flex items-center rounded-md p-2 text-base font-medium css-1tq05rq"
                href="{{ url('/cari') }}">
                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                    stroke-linecap="round" stroke-linejoin="round" class="mr-2" height="1em" width="1em"
                    xmlns="http://www.w3.org/2000/svg">
                    <desc></desc>
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="10" cy="10" r="7"></circle>
                    <line x1="21" y1="21" x2="15" y2="15"></line>
                </svg>
                Lacak Pesanan
            </a>
            <!--<a class="btn-akumauweb group flex items-center rounded-md p-2 text-base font-medium css-1tq05rq"-->
            <!--    href="{{ url('/winrate') }}">-->
            <!--    <i class="fa fa-address-card"></i>&nbsp;&nbsp;-->
            <!--    Winrate-->
            <!--</a>-->
            <!--<a class="btn-akumauweb group flex items-center rounded-md p-2 text-base font-medium css-1tq05rq"-->
            <!--    href="{{ url('/magicwheel') }}">-->
            <!--    <i class="fa fa-address-card"></i>&nbsp;&nbsp;-->
            <!--    Magic Wheel-->
            <!--</a>-->
            <!--<a class="btn-akumauweb group flex items-center rounded-md p-2 text-base font-medium css-1tq05rq"-->
            <!--    href="{{ url('/zodiac') }}">-->
            <!--        <i class="fa fa-address-card"></i>&nbsp;&nbsp;-->
            <!--        Zodiac-->
            <!--</a>-->
            <!--   <a class="btn-akumauweb group flex items-center rounded-md p-2 text-base font-medium css-1tq05rq"
                    href="{{ url('/about-us') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" fill="none" viewBox="0 0 16 16" class="mr-2" height="1em" width="1em"> <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                    </svg>
                    Tentang Kami
                </a> -->

            <!--<div class="dropdown">-->
            <!--        <a class="btn-akumauweb group flex items-center rounded-md p-2 w-90 text-base font-medium css-1tq05rq dropdown-toggle"-->
            <!--            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"-->
            <!--            style="cursor:pointer;">-->
            <!--            <svg stroke="currentColor" fill="none" viewBox="0 0 16 16" class="mr-2" height="1em" width="1em"-->
            <!--            xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z"/>-->
            <!--            <desc></desc>-->
            <!--            </svg>-->
            <!--            Join Us-->
            <!--        </a>-->
            <!--        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">-->
            <!--<a class="dropdown-item" href="{{ !$config ? '' : $config->url_wa }}">Join Reseller</a>-->
            <!--            <a class="dropdown-item" href="{{ !$config ? '' : $config->url_fb }}">Join Komunitas</a>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--<div class="dropdown">-->
            <!--    <a class="btn-akumauweb group flex items-center rounded-md p-2 w-90 text-base font-medium css-1tq05rq dropdown-toggle"-->
            <!--        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"-->
            <!--        style="cursor:pointer;">-->
            <!--        <i class="fa fa-calculator"></i>&nbsp;-->
            <!--        Calculator MLBB-->
            <!--    </a>-->
            <!--    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">-->
            <!--        <a href="{{ url('/winrate') }}" class="dropdown-item"><i class="fa fa-address-card"></i> Winrate</a>-->
            <!--        <a href="{{ url('/magicwheel') }}" class="dropdown-item"><i class="fa fa-address-card"></i> Magic Wheel</a>-->
            <!--        <a href="{{ url('/zodiac') }}" class="dropdown-item"><i class="fa fa-address-card"></i> Zodiac</a>-->
            <!--    </div>-->
            <!--</div>-->

            <!--                <div class="card-title items-center lex text-center mt-2 ms-2 font-extrabold">------------------</div>-->

            @auth <a class="btn-akumauweb group flex items-center rounded-md p-2 text-base font-medium css-1tq05rq"
                    href="{{ url('/api-documentation') }}">
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                        stroke-linecap="round" stroke-linejoin="round" class="mr-2" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <desc></desc>
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path
                            d="M12 5h3.5a5 5 0 0 1 0 10h-5.5l-4.015 4.227a2.3 2.3 0 0 1 -3.923 -2.035l1.634 -8.173a5 5 0 0 1 4.904 -4.019h3.4z">
                        </path>
                        <path d="M14 15l4.07 4.284a2.3 2.3 0 0 0 3.925 -2.023l-1.6 -8.232"></path>
                        <path d="M8 9v2"></path>
                        <path d="M7 10h2"></path>
                        <path d="M14 10h2"></path>
                    </svg>
                    Dokumentasi API
            </a> @endauth
            <!--    <div class="dropdown">
                    <a class="btn-akumauweb group flex items-center rounded-md p-2 w-90 text-base font-medium css-1tq05rq dropdown-toggle"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        style="cursor:pointer;">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                            stroke-linecap="round" stroke-linejoin="round" class="mr-2" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <desc></desc>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                        </svg>
                        Lainnya
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ url('/rating') }}">Testimoni</a>
                        <a class="dropdown-item" href="{{ url('/topten') }}">Top Ranking</a>
                    </div>
                </div> -->
    </div>

    </nav>
</div>
</div>



<!-- End Show Navbar-->
