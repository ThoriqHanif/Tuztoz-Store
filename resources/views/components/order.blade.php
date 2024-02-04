@extends('layouts.master-order')

@section('content')

    <body>
        <nav class="navbar active">
            <div class="container">
                <div class="navLeft">
                    <img src="{{ asset('assets/logo/20240123_060438.png') }}"
                        onclick="window.location.href={{ route('home') }}" alt="">
                    <div class="logoName">Tuztoz</div>
                </div>
                <div class="navRight">

                    <a href="{{ route('login') }}" class="btnYellowPrimary login">Masuk</a>
                    <a href="{{ route('register') }}" class="btnYellowSecond login">Daftar</a>
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
            <a href="{{ route('login') }}" class="containers ">
                <i class="bi bi-person-fill-lock"></i>
                <div class="text">Login</div>
            </a>
        </div>

        <section>
            <input type="hidden" id="ktg_tipe" value="{{ $kategori->tipe }}">

            <div class="container">
                <div class="desc mb-3">
                    <span class="txt-primary">
                        <a href="{{ route('home') }}">Home</a>
                    </span>
                    <span class="mx-2">/</span>{{ $kategori->nama }}
                </div>

                <div class="containerAlpha">
                    <img src="{{ $kategori->bannerlayanan }}" alt="" class="banner">
                    {{-- <div class="containerML">
                    <img alt="{{ $kategori->nama }}" srcset="{{ $kategori->thumbnail }}"
                    src="{{ $kategori->thumbnail }}" 
                        class="logo-ml">
                </div> --}}
                </div>

                <form action="" method="POST" id="form-order">

                    {{-- <input type="hidden" name="product">
                    <input type="hidden" name="method">
                    <input type="hidden" name="nickname"> --}}

                    <div class="containerNominal">
                        <div class="row reverse">

                            <div class="col-lg-8">
                                <div class="cards py-3 mb-4">
                                    <div class="title-card text-left mb-3">Pilih Nominal</div>

                                    <div class="row">
                                        @foreach ($sub as $subkat)
                                            <div class="desc mb-3 mt-3">⚡ {{ $subkat['name'] }}</div>
                                        @endforeach
                                        @foreach ($nominal as $nom)
                                            @if ($nom->sub_category_id == $subkat['id'])
                                                <div class="col-md-4 col-6">
                                                    <input type="radio" name="product" id="product-52"
                                                        onchange="select_product('52', 'MOBILE LEGENDS Weekly Diamond Pass', 'Rp 27.599');"
                                                        class="nom-radio" value="{{ $nom->id }}" data-type="diamond"
                                                        {{ Request::get('fs') == $nom->id ? 'checked' : '' }}/>
                                                    <label for="product-52" class="containerChoice">
                                                        <div class="containerIcon" hidden>
                                                            <i class="bi bi-check-lg"></i>
                                                        </div>
                                                        <div class="mx-auto">
                                                            <img src="https://vanvanstore.com/assets/images/product/1700183356_0da8ac3fd4a645d81365.webp"
                                                                width="30" alt=""
                                                                class="justify-center mx-auto mb-2" />
                                                            <div class="text">
                                                                <div class="desc">{{ $nom->layanan }}</div>
                                                                {{-- @if ($nom->is_flash_sale == 1 && $nom->expired_flash_sale >= date('Y-m-d')) --}}

                                                                {{-- <div class="count flash-sale" > Rp  {{ number_format($nom->harga_flash_sale) }} </div> --}}
                                                                {{-- <div class="count reguler"> Rp {{ number_format($nom->harga) }} </div> --}}
                                                                <div class="count sale"> Rp {{ number_format($nom->harga) }} </div>

                                                                {{-- @endif --}}
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="accordion">
                                    @if (
                                        $kategori->server_id &&
                                            $kategori->kode != 'life-after' &&
                                            $kategori->kode != 'joki' &&
                                            $kategori->kode != 'genshin-impact' &&
                                            $kategori->kode != 'ragnarok-m' &&
                                            $kategori->kode != 'tof')
                                        <div class="cards mb-4 d-flex flex-column gap-3" id="section-method">

                                            <div class="title-card text-left">Masukkan Data Akun</div>

                                            <div class="floating-label-content">
                                                <input type="number" class="form-control games-input floating-input"
                                                    name="ID ML" type="text" id="user_id" value=""
                                                    fdprocessedid="81xg1" />
                                                <label class="floating-label" for="ID ML">User ID</label>
                                            </div>


                                            <div class="floating-label-content">
                                                <input type="number" class="form-control games-input floating-input"
                                                    name="zone" placeholder="{{ $kategori->placeholder_2 }}"
                                                    type="text" id="zone" value=""
                                                    fdprocessedid="81xg1" />
                                                <label class="floating-label" for="zone">Server ID</label>
                                            </div>


                                            <div class="note"></div>
                                        </div>
                                    @elseif($kategori->kode == 'life-after')
                                        <div class="cards mb-4 d-flex flex-column gap-3" id="section-method">

                                            <div class="title-card text-left">Masukkan Data Akun</div>

                                            <div class="floating-label-content">
                                                <input type="number" class="form-control games-input floating-input"
                                                    name="ID ML" type="text" id="user_id" value=""
                                                    fdprocessedid="81xg1" />
                                                <label class="floating-label" for="ID ML">User ID</label>
                                            </div>


                                            <div class="floating-label-content">
                                                <select
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                    name="zoneId" id="zone" placeholder="Pilih Server"
                                                    fdprocessedid="n3x76">
                                                    <option value="">Pilih Server</option>
                                                    <option value="miskatown">Miska Town</option>
                                                    <option value="sandcastle">Sand Castle</option>
                                                    <option value="mouthswamp">Mouth Swamp</option>
                                                    <option value="redwoodtown">Red Wood Town</option>
                                                    <option value="obelisk">Oblisk</option>
                                                    <option value="fallforest">Fall Forest</option>
                                                    <option value="mountsnow">Mount Snow</option>
                                                    <option value="nancycity">Nancy City</option>
                                                    <option value="charlestown">Charles Town</option>
                                                    <option value="snowhighlands">Snow High Lands</option>
                                                    <option value="santopany">Santopany</option>
                                                    <option value="levincity">Levin City</option>
                                                    <option value="newland">New Land</option>
                                                    <option value="milestone">Mile Stone</option>
                                                </select>
                                            </div>


                                            <div class="note"></div>
                                        </div>
                                    @elseif($kategori->kode == 'tof')
                                        <div class="cards mb-4 d-flex flex-column gap-3" id="section-method">

                                            <div class="title-card text-left">Masukkan Data Akun</div>

                                            <div class="floating-label-content">
                                                <input type="number" class="form-control games-input floating-input"
                                                    name="ID ML" placeholder="{{ $kategori->placeholder_1 }}"
                                                    type="text" id="user_id" value=""
                                                    fdprocessedid="81xg1" />
                                                <label class="floating-label" for="ID ML">User ID</label>
                                            </div>


                                            <div class="floating-label-content">
                                                <select
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                    name="zoneId" id="zone" placeholder="Pilih Server"
                                                    fdprocessedid="n3x76">
                                                    <option value="">Pilih Server</option>
                                                    <option value="Southeast Asia-Osillron">Southeast
                                                        Asia-Osillron</option>
                                                    <option value="Southeast Asia-Mistilteinn">Southeast
                                                        Asia-Mistilteinn</option>
                                                    <option value="Southeast Asia-Illyrians">Southeast
                                                        Asia-Illyrians</option>
                                                    <option value="Southeast Asia-Florione">Southeast
                                                        Asia-Florione</option>
                                                    <option value="Southeast Asia-Animus">Southeast
                                                        Asia-Animus</option>
                                                    <option value="Southeast Asia-Gumi Gumi">Southeast
                                                        Asia-Gumi Gumi</option>
                                                    <option value="Southeast Asia-Oryza">Southeast
                                                        Asia-Oryza</option>
                                                    <option value="Southeast Asia-Saeri">Southeast
                                                        Asia-Saeri</option>
                                                    <option value="Southeast Asia-Phantasia">Southeast
                                                        Asia-Phantasia</option>
                                                    <option value="Southeast Asia-Mechafield">Southeast
                                                        Asia-Mechafield</option>
                                                    <option value="Southeast Asia-Ethereal Dream">Southeast
                                                        Asia-Ethereal Dream</option>
                                                    <option value="Southeast Asia-Odyssey">Southeast
                                                        Asia-Odyssey</option>
                                                    <option value="Southeast Asia-Aestral-Noa">Southeast
                                                        Asia-Aestral-Noa</option>
                                                    <option value="Southeast Asia-Chandra">Southeast
                                                        Asia-Chandra</option>
                                                    <option value="Southeast Asia-Aeria">Southeast
                                                        Asia-Aeria</option>
                                                    <option value="Southeast Asia-Scarlet">Southeast
                                                        Asia-Scarlet</option>
                                                    <option value="Southeast Asia-Fantasia">Southeast
                                                        Asia-Fantasia</option>
                                                    <option value="Southeast Asia-Stardust">Southeast
                                                        Asia-Stardust</option>
                                                    <option value="Southeast Asia-Arcania">Southeast
                                                        Asia-Arcania</option>
                                                    <option value="Southeast Asia-Valhalla">Southeast
                                                        Asia-Valhalla</option>
                                                    <option value="North America-Lunalite">North
                                                        America-Lunalite</option>
                                                    <option value="North America-Sol-III">North
                                                        America-Sol-III</option>
                                                    <option value="North America-Lighthouse">North
                                                        America-Lighthouse</option>
                                                    <option value="North America-Silver Bridge">North
                                                        America-Silver Bridge</option>
                                                    <option value="North America-The Glades">North
                                                        America-The Glades</option>
                                                    <option value="North America-Nightfall">North
                                                        America-Nightfall</option>
                                                    <option value="North America-Frontier">North
                                                        America-Frontier</option>
                                                    <option value="North America-Libera">North
                                                        America-Libera</option>
                                                    <option value="North America-Solaris">North
                                                        America-Solaris</option>
                                                    <option value="North America-Freedom-Oasis">North
                                                        America-Freedom-Oasis</option>
                                                    <option value="North America-The Worlds Between">North
                                                        America-The Worlds Between</option>
                                                    <option value="North America-Radiant">North
                                                        America-Radiant</option>
                                                    <option value="North America-Tempest">North
                                                        America-Tempest</option>
                                                    <option value="North America-New Era">North America-New
                                                        Era</option>
                                                    <option value="North America-Observer">North
                                                        America-Observer</option>
                                                    <option value="North America-Starlight">North
                                                        America-Starlight</option>
                                                    <option value="North America-Myriad">North
                                                        America-Myriad</option>
                                                    <option value="North America-Oumuamua">North
                                                        America-Oumuamua</option>
                                                    <option value="North America-Eternium Phantasy">North
                                                        America-Eternium Phantasy</option>
                                                    <option value="North America-Azure Plane">North
                                                        America-Azure Plane</option>
                                                    <option value="North America-Nirvana">North
                                                        America-Nirvana</option>
                                                    <option value="Europe-Magia Przygoda Aida">Europe-Magia
                                                        Przygoda Aida</option>
                                                    <option value="Europe-Transport Hub">Europe-Transport
                                                        Hub</option>
                                                    <option value="Europe-The Lumina">Europe-The Lumina
                                                    </option>
                                                    <option value="Europe-Lycoris">Europe-Lycoris</option>
                                                    <option value="Europe-Ether">Europe-Ether</option>
                                                    <option value="Europe-Olivine">Europe-Olivine</option>
                                                    <option value="Europe-Iter">Europe-Iter</option>
                                                    <option value="Europe-Aimanium">Europe-Aimanium
                                                    </option>
                                                    <option value="Europe-Alintheus">Europe-Alintheus
                                                    </option>
                                                    <option value="Europe-Andoes">Europe-Andoes</option>
                                                    <option value="Europe-Anomora">Europe-Anomora</option>
                                                    <option value="Europe-Astora">Europe-Astora</option>
                                                    <option value="Europe-Valstamm">Europe-Valstamm
                                                    </option>
                                                    <option value="Europe-Blumous">Europe-Blumous</option>
                                                    <option value="Europe-Celestialrise">
                                                        Europe-Celestialrise</option>
                                                    <option value="Europe-Cosmos">Europe-Cosmos</option>
                                                    <option value="Europe-Dyrnwyn">Europe-Dyrnwyn</option>
                                                    <option value="Europe-Elypium">Europe-Elypium</option>
                                                    <option value="Europe-Excalibur">Europe-Excalibur
                                                    </option>
                                                    <option value="Europe-Espoir IV">Europe-Espoir IV
                                                    </option>
                                                    <option value="Europe-Estrela">Europe-Estrela</option>
                                                    <option value="Europe-Ex Nihilor">Europe-Ex Nihilor
                                                    </option>
                                                    <option value="Europe-Futuria">Europe-Futuria</option>
                                                    <option value="Europe-Hephaestus">Europe-Hephaestus
                                                    </option>
                                                    <option value="Europe-Midgard">Europe-Midgard</option>
                                                    <option value="Europe-Kuura">Europe-Kuura</option>
                                                    <option value="Europe-Lyramiel">Europe-Lyramiel
                                                    </option>
                                                    <option value="Europe-Magenta">Europe-Magenta</option>
                                                    <option value="Europe-Omnium Prime">Europe-Omnium Prime
                                                    </option>
                                                    <option value="Europe-Turmus">Europe-Turmus</option>
                                                    <option value="South America-Corvus">South
                                                        America-Corvus</option>
                                                    <option value="South America-Calodesma Seven">South
                                                        America-Calodesma Seven</option>
                                                    <option value="South America-Columba">South
                                                        America-Columba</option>
                                                    <option value="South America-Tiamat">South
                                                        America-Tiamat</option>
                                                    <option value="South America-Orion">South America-Orion
                                                    </option>
                                                    <option value="South America-Luna Azul">South
                                                        America-Luna Azul</option>
                                                    <option value="South America-Hope">South America-Hope
                                                    </option>
                                                    <option value="South America-Tanzanite">South
                                                        America-Tanzanite</option>
                                                    <option value="South America-Antlia">South
                                                        America-Antlia</option>
                                                    <option value="South America-Pegasus">South
                                                        America-Pegasus</option>
                                                    <option value="South America-Phoenix">South
                                                        America-Phoenix</option>
                                                    <option value="South America-Centaurus">South
                                                        America-Centaurus</option>
                                                    <option value="South America-Cepheu">South
                                                        America-Cepheu</option>
                                                    <option value="South America-Cygnus">South
                                                        America-Cygnus</option>
                                                    <option value="South America-Grus">South America-Grus
                                                    </option>
                                                    <option value="South America-Hydra">South America-Hydra
                                                    </option>
                                                    <option value="South America-Lyra">South America-Lyra
                                                    </option>
                                                    <option value="South America-Ophiuchus">South
                                                        America-Ophiuchus</option>
                                                    <option value="Asia-Pacific-Cocoaiteruyo">
                                                        Asia-Pacific-Cocoaiteruyo</option>
                                                    <option value="Asia-Pacific-Food Fighter">
                                                        Asia-Pacific-Food Fighter</option>
                                                    <option value="Asia-Pacific-Gomap">Asia-Pacific-Gomap
                                                    </option>
                                                    <option value="Asia-Pacific-Yggdrasil">
                                                        Asia-Pacific-Yggdrasil</option>
                                                    <option value="Asia-Pacific-Daybreak">
                                                        Asia-Pacific-Daybreak</option>
                                                    <option value="Asia-Pacific-Adventure">
                                                        Asia-Pacific-Adventure</option>
                                                    <option value="Asia-Pacific-Eden">Asia-Pacific-Eden
                                                    </option>
                                                    <option value="Asia-Pacific-Fate">Asia-Pacific-Fate
                                                    </option>
                                                    <option value="Asia-Pacific-Nova">Asia-Pacific-Nova
                                                    </option>
                                                    <option value="Asia-Pacific-Ruby">Asia-Pacific-Ruby
                                                    </option>
                                                    <option value="Asia-Pacific-Babel">Asia-Pacific-Babel
                                                    </option>
                                                    <option value="Asia-Pacific-Pluto">Asia-Pacific-Pluto
                                                    </option>
                                                    <option value="Asia-Pacific-Sushi">Asia-Pacific-Sushi
                                                    </option>
                                                    <option value="Asia-Pacific-Venus">Asia-Pacific-Venus
                                                    </option>
                                                    <option value="Asia-Pacific-Galaxy">Asia-Pacific-Galaxy
                                                    </option>
                                                    <option value="Asia-Pacific-Memory">Asia-Pacific-Memory
                                                    </option>
                                                    <option value="Asia-Pacific-Oxygen">Asia-Pacific-Oxygen
                                                    </option>
                                                    <option value="Asia-Pacific-Sakura">Asia-Pacific-Sakura
                                                    </option>
                                                    <option value="Asia-Pacific-Seeker">Asia-Pacific-Seeker
                                                    </option>
                                                    <option value="Asia-Pacific-Shinya">Asia-Pacific-Shinya
                                                    </option>
                                                    <option value="Asia-Pacific-Stella">Asia-Pacific-Stella
                                                    </option>
                                                    <option value="Asia-Pacific-Uranus">Asia-Pacific-Uranus
                                                    </option>
                                                    <option value="Asia-Pacific-Utopia">Asia-Pacific-Utopia
                                                    </option>
                                                    <option value="Asia-Pacific-Jupiter">
                                                        Asia-Pacific-Jupiter</option>
                                                    <option value="Asia-Pacific-Sweetie">
                                                        Asia-Pacific-Sweetie</option>
                                                    <option value="Asia-Pacific-Atlantis">
                                                        Asia-Pacific-Atlantis</option>
                                                    <option value="Asia-Pacific-Takoyaki">
                                                        Asia-Pacific-Takoyaki</option>
                                                    <option value="Asia-Pacific-Mars">Asia-Pacific-Mars
                                                    </option>
                                                </select>
                                            </div>


                                            <div class="note"></div>
                                        </div>
                                    @elseif($kategori->kode == 'heroes-evolved')
                                        <div class="cards mb-4 d-flex flex-column gap-3" id="section-method">

                                            <div class="title-card text-left">Masukkan Data Akun</div>

                                            <div class="floating-label-content">
                                                <input type="number" class="form-control games-input floating-input"
                                                    name="ID ML" placeholder="{{ $kategori->placeholder_1 }}"
                                                    type="text" id="user_id" value=""
                                                    fdprocessedid="81xg1" />
                                                <label class="floating-label" for="ID ML">User ID</label>
                                            </div>


                                            <div class="floating-label-content">
                                                <select
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                    name="zoneId" id="zone" placeholder="Pilih Server"
                                                    fdprocessedid="n3x76">
                                                    <option value="-">List Server</option>
                                                    <option value="North America - LOST TEMPLE [NA]"> North
                                                        America - LOST TEMPLE [NA]</option>
                                                    <option value="North America - NEW ORDER"> North
                                                        America - NEW ORDER</option>
                                                    <option value="Europe - ASGARD [EU]"> Europe - ASGARD
                                                        [EU]</option>
                                                    <option value="Europe - OLYMPUS [EU]"> Europe - OLYMPUS
                                                        [EU]</option>
                                                    <option value="South America - AMAZON [SA]"> South
                                                        America - AMAZON [SA]</option>
                                                    <option value="South America - EL DORADO [SA]"> South
                                                        America - EL DORADO [SA]</option>
                                                    <option value="Asia - SHANGRI-LA [AS]"> Asia -
                                                        SHANGRI-LA [AS]</option>
                                                    <option value="Asia - S1.ANGKOR [AS]"> Asia - S1.ANGKOR
                                                        [AS]</option>
                                                    <option value="Asia - S2.EL NIDO [AS]"> Asia - S2.EL
                                                        NIDO [AS]</option>
                                                    <option value="Asia - ไทย[TH]"> Asia - ไทย[TH]</option>
                                                    <option value="Asia - ไทยแลนด์[TH]"> Asia -
                                                        ไทยแลนด์[TH]</option>
                                                </select>
                                            </div>


                                            <div class="note"></div>
                                        </div>
                                    @elseif($kategori->kode == 'ragnarok-m')
                                        <div class="cards mb-4 d-flex flex-column gap-3" id="section-method">

                                            <div class="title-card text-left">Masukkan Data Akun</div>

                                            <div class="floating-label-content">
                                                <input type="number" class="form-control games-input floating-input"
                                                    name="ID ML" placeholder="{{ $kategori->placeholder_1 }}"
                                                    type="text" id="user_id" value=""
                                                    fdprocessedid="81xg1" />
                                                <label class="floating-label" for="ID ML">User ID</label>
                                            </div>


                                            <div class="floating-label-content">
                                                <select
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                    name="zoneId" id="zone" placeholder="Pilih Server"
                                                    fdprocessedid="n3x76">
                                                    <option value="">Pilih Server</option>
                                                    <option value="90001">Eternal Love</option>
                                                    <option value="90002">Midnight Party</option>
                                                    <option value="90002003">Memory Of Faith</option>
                                                </select>
                                            </div>


                                            <div class="note"></div>
                                        </div>
                                    @elseif($kategori->kode == 'shell-fire')
                                        <div class="cards mb-4 d-flex flex-column gap-3" id="section-method">

                                            <div class="title-card text-left">Masukkan Data Akun</div>

                                            <div class="floating-label-content">
                                                <input type="number" class="form-control games-input floating-input"
                                                    name="ID ML" placeholder="{{ $kategori->placeholder_1 }}"
                                                    type="text" id="user_id" value=""
                                                    fdprocessedid="81xg1" />
                                                <label class="floating-label" for="ID ML">User ID</label>
                                            </div>


                                            <div class="floating-label-content">
                                                <select
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                    name="zoneId" id="zone" placeholder="Pilih Server"
                                                    fdprocessedid="n3x76">
                                                    <option value="">Pilih Tipe</option>
                                                    <option value="android">Android</option>
                                                    <option value="ios">IOS</option>
                                                </select>
                                            </div>


                                            <div class="note"></div>
                                        </div>
                                    @elseif($kategori->kode == 'ragnarok-forever-love')
                                        <div class="cards mb-4 d-flex flex-column gap-3" id="section-method">

                                            <div class="title-card text-left">Masukkan Data Akun</div>

                                            <div class="floating-label-content">
                                                <input type="number" class="form-control games-input floating-input"
                                                    name="ID ML" type="text" id="user_id" value=""
                                                    fdprocessedid="81xg1" />
                                                <label class="floating-label" for="ID ML">User ID</label>
                                            </div>


                                            <div class="floating-label-content">
                                                <select
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                    name="zoneId" id="zone" placeholder="Pilih Server"
                                                    fdprocessedid="n3x76">
                                                    <option value="">Pilih Server
                                                    </option>
                                                    <option value="allserver">ALL SERVER
                                                    </option>
                                                </select>
                                            </div>


                                            <div class="note"></div>
                                        </div>
                                    @elseif($kategori->kode == 'perfect-world')
                                        <div class="cards mb-4 d-flex flex-column gap-3" id="section-method">

                                            <div class="title-card text-left">Masukkan Data Akun</div>

                                            <div class="floating-label-content">
                                                <input type="number" class="form-control games-input floating-input"
                                                    name="ID ML" placeholder="{{ $kategori->placeholder_1 }}"
                                                    type="text" id="user_id" value=""
                                                    fdprocessedid="81xg1" />
                                                <label class="floating-label" for="ID ML">User ID</label>
                                            </div>


                                            <div class="floating-label-content">
                                                <select
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                    name="zoneId" id="zone" placeholder="Pilih Server"
                                                    fdprocessedid="n3x76">
                                                    <option value="">Pilih Server
                                                    </option>
                                                    <option value="moonlight">Moonlight
                                                    </option>
                                                    <option value="lotus">Lotus</option>
                                                    <option value="crimson">Crimson
                                                    </option>
                                                    <option value="kirin">Kirin</option>
                                                    <option value="moral">Moral</option>
                                                </select>
                                            </div>


                                            <div class="note"></div>
                                        </div>
                                    @elseif($kategori->kode == 'asphalt-9-legends')
                                        <div class="cards mb-4 d-flex flex-column gap-3" id="section-method">

                                            <div class="title-card text-left">Masukkan Data Akun</div>

                                            <div class="floating-label-content">
                                                <input type="number" class="form-control games-input floating-input"
                                                    name="ID ML" placeholder="{{ $kategori->placeholder_1 }}"
                                                    type="text" id="user_id" value=""
                                                    fdprocessedid="81xg1" />
                                                <label class="floating-label" for="ID ML">User ID</label>
                                            </div>


                                            <div class="floating-label-content">
                                                <select
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                    name="zoneId" id="zone" placeholder="Pilih Server"
                                                    fdprocessedid="n3x76">
                                                    <option value="">Pilih OS
                                                    </option>
                                                    <option value="ios">IOS</option>
                                                    <option value="android">Android
                                                    </option>
                                                    <option value="Windows">Windows
                                                    </option>
                                                </select>
                                            </div>


                                            <div class="note"></div>
                                        </div>
                                    @elseif(in_array($kategori->tipe, ['populer', 'akun_premium', 'game', 'voucher', 'pulsa', 'e-money', 'pln', 'liveapp']))
                                        <div class="cards mb-4 d-flex flex-column gap-3" id="section-method">

                                            <div class="title-card text-left">Masukkan Data Akun</div>

                                            <div class="floating-label-content">
                                                <input type="number" class="form-control games-input floating-input"
                                                    name="ID ML" type="text" id="user_id" value=""
                                                    fdprocessedid="8qd1hx" placeholder="" />
                                                <label class="floating-label" for="ID ML">User ID</label>
                                            </div>


                                            <div class="note"></div>
                                        </div>
                                    @elseif($kategori->tipe == 'joki')
                                        <div class="cards mb-4 d-flex flex-column gap-3" id="section-method">

                                            <div class="title-card text-left">Masukkan Data Akun</div>

                                            <div class="floating-label-content">
                                                <input class="form-control games-input floating-input" type="email"
                                                    id="email_joki" name="email_joki" />
                                                <label class="floating-label" for="email_joki">Email</label>
                                            </div>
                                            <div class="floating-label-content">
                                                <input class="form-control games-input floating-input"
                                                    type="password"id="password_joki" name="password_joki" />
                                                <label class="floating-label" for="password_joki">Password</label>
                                            </div>
                                            <div class="floating-label-content">
                                                <input class="form-control games-input floating-input" type="text"
                                                    id="request_joki" name="request_joki" />
                                                <label class="floating-label" for="request_joki">Request Hero</label>
                                            </div>
                                            <div class="floating-label-content">
                                                <input class="form-control games-input floating-input" type="text"
                                                    id="catatan_joki" name="catatan_joki" />
                                                <label class="floating-label" for="request_joki">Catatan</label>
                                            </div>
                                            <div class="floating-label-content">
                                                <input class="form-control games-input floating-input" type="text"
                                                    id="nickname_joki" name="nickname_joki" />
                                                <label class="floating-label" for="request_joki">Nickname</label>
                                            </div>
                                            <div class="floating-label-content">
                                                <select
                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                    id="loginvia_joki" name="loginvia_joki" placeholder="Pilih Server">
                                                    <option value="">
                                                        Login Via</option>
                                                    <option value="moonton">
                                                        Moonton (Rekomendasi)
                                                    </option <option value="vk">VK
                                                    </option>
                                                    <option value="tiktok">
                                                        Tiktok</option>
                                                    <option value="facebook">
                                                        Facebook</option>
                                                </select>
                                                <label class="floating-label" for="loginvia_joki">Login Via</label>
                                            </div>

                                            <div class="note"></div>
                                        </div>
                                    @elseif($kategori->tipe == 'dm_vilog')
                                        <div class="cards mb-4 d-flex flex-column gap-3" id="section-method">

                                            <div class="title-card text-left">Masukkan Data Akun</div>

                                            <div class="floating-label-content">
                                                <input class="form-control games-input floating-input" type="email"
                                                    id="email_vilog" name="email_vilog" />
                                                <label class="floating-label" for="email_vilog">Email</label>
                                            </div>
                                            <div class="floating-label-content">
                                                <input class="form-control games-input floating-input" type="password"
                                                    id="password_vilog" name="password_vilog" />
                                                <label class="floating-label" for="password_vilog">Password</label>
                                            </div>
                                            <div class="floating-label-content">
                                                <select id="loginvia_vilog" name="loginvia_vilog" class="form-select">
                                                    <option value="">
                                                        Login Via</option>
                                                    <option value="moonton">
                                                        Moonton (Rekomendasi)
                                                    </option <option value="vk">VK
                                                    </option>
                                                    <option value="tiktok">
                                                        Tiktok</option>
                                                    <option value="facebook">
                                                        Facebook</option>
                                                </select>
                                                <label class="floating-label" for="loginvia_vilog">Login Via</label>
                                            </div>

                                            <div class="note"></div>
                                        </div>
                                    @else
                                        <div class="cards mb-4 d-flex flex-column gap-3" id="section-method">

                                            <div class="title-card text-left">Masukkan Data Akun</div>

                                            <div class="floating-label-content">
                                                <input type="number" class="form-control games-input floating-input"
                                                    name="ID ML" type="text" id="user_id" value=""
                                                    fdprocessedid="8qd1hx" />
                                                <label class="floating-label" for="ID ML">User ID</label>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="cards my-4">
                                        <div class="title-card text-left">Promo Kode</div>
                                        {{-- <div class=" text-sm " id="meltih" 
                                            aria-labelledby="HeadingThreee" data-bs-parent="#Accordione">
                                            <ol>
                                                <li>
                                                    <b class="text-white">Kamu bisa mendapatkan Voucher melalui</b>


                                                    <b>Social Media kami, ikuti sekarang!</b>

                                                <li>1. Instagram <a href="https://instagram.com/jstoregame"
                                                        rel="noopener noreferrer" target="_blank"
                                                        style="color: #e75c5c;"><strong>{{ config('app.name') }}</strong></a><strong>”</strong>.
                                                </li>
                                                <li>2. Youtube <a href="https://www.youtube.com/@jstoregame"
                                                        rel="noopener noreferrer" target="_blank"
                                                        style="color: #e75c5c;"><strong>Channel
                                                            {{ config('app.name') }}</strong></a><strong>”</strong>.</li>
                                                <li>4. Ikuti Social Media kami agar kamu <b>“Mendapatkan Informasi
                                                        Terbaru”</b></li>
                                            </ol>
                                        </div> --}}
                                        <div class="floating-label-content">
                                            <input type="text" class="form-control floating-input" name="voucher"
                                                id="voucher" placeholder=" " />
                                            <label class="floating-label" for="voucher">Pakai Kode</label>
                                            <button class="btnYellowPrimary my-3 w-100" type="button"
                                                onclick="cekVoucher();">Cek Kode Promo</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="cards my-4 ">
                                    <div class="title-card text-left mb-3">Metode Pembayaran</div>

                                    <div class="accordion mb-2">
                                        <div class="accordionHeadPay" style="background: var(--dark-grey);">
                                            <div class="title">E-Money</div>
                                            {{-- @foreach ($pay_method as $p)
                                                @if ($p->tipe == 'e-walet')
                                                    <div class="containers">
                                                        <img src="{{ $p->images }}" alt="" />
                                                    </div>
                                                @endif
                                            @endforeach --}}
                                            <i class="bi bi-caret-right-fill"></i>
                                        </div>
                                        <div class="accordionBodyPay">
                                            <div class="accordionContent">
                                                <div class="row">
                                                    @foreach ($pay_method as $p)
                                                        @if ($p->tipe == 'e-walet')
                                                            <div class="col-sm-12">
                                                                <input type="radio" name="method" class="pay-radio"
                                                                    id="method-12"
                                                                    onchange="select_method('12', 'QRIS');" />
                                                                <label for="method-12" class="choicePay">
                                                                    <div class="containers">
                                                                        <div class="icon">
                                                                            <i class="bi bi-check-lg"></i>
                                                                        </div>
                                                                        <div class="text">
                                                                            <div class="name">{{ $p->name }}</div>
                                                                            <div class="price" id="method-12price">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <img src="{{ $p->images }}" width="60"
                                                                        alt="" />
                                                                </label>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion mb-2">
                                        <div class="accordionHeadPay" style="background: var(--dark-grey);">
                                            <div class="title">Virtual Account</div>
                                            <div class="containers">
                                            </div>
                                            <i class="bi bi-caret-right-fill"></i>
                                        </div>
                                        <div class="accordionBodyPay">
                                            <div class="accordionContent">
                                                <div class="row">
                                                    @foreach ($pay_method as $p)
                                                        @if ($p->tipe == 'virtual-account')
                                                            <div class="col-sm-12">
                                                                <input type="radio" name="method" class="pay-radio"
                                                                    id="method-11"
                                                                    onchange="select_method('11', 'BRI');" />
                                                                <label for="method-11" class="choicePay">
                                                                    <div class="containers">
                                                                        <div class="icon">
                                                                            <i class="bi bi-check-lg"></i>
                                                                        </div>
                                                                        <div class="text">
                                                                            <div class="name">{{ $p->name }}</div>
                                                                            <div class="price" id="method-11price">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <img src="{{ $p->images }}" width="60"
                                                                        alt="" />
                                                                </label>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion mb-2">
                                        <div class="accordionHeadPay" style="background: var(--dark-grey);">
                                            <div class="title">Convenience Store</div>
                                            <div class="containers">

                                            </div>
                                            <i class="bi bi-caret-right-fill"></i>
                                        </div>
                                        <div class="accordionBodyPay">
                                            <div class="accordionContent">
                                                <div class="row">
                                                    @foreach ($pay_method as $p)
                                                        @if ($p->tipe == 'convenience-store')
                                                            <div class="col-sm-12">
                                                                <input type="radio" name="method" class="pay-radio"
                                                                    id="method-4"
                                                                    onchange="select_method('4', 'Alfamart');" />
                                                                <label for="method-4" class="choicePay">
                                                                    <div class="containers">
                                                                        <div class="icon">
                                                                            <i class="bi bi-check-lg"></i>
                                                                        </div>
                                                                        <div class="text">
                                                                            <div class="name">{{ $p->name }}</div>
                                                                            <div class="price" id="method-4price">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <img src="{{ $p->images }}" width="60"
                                                                        alt="" />
                                                                </label>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @guest
                                        <div class="accordion mb-2">
                                            <div class="accordionHeadPay" style="background: var(--dark-grey);">
                                                <div class="title">Saldo (Tanpa Biaya Admin)</div>
                                                <div class="containers">
                                                </div>
                                                <i class="bi bi-caret-right-fill"></i>
                                            </div>
                                            <div class="accordionBodyPay">
                                                <div class="accordionContent">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <input type="radio" name="method" class="pay-radio"
                                                                id="method-1" onchange="select_method('1', 'Saldo Akun');" />
                                                            <label for="method-1" class="choicePay">
                                                                <div class="containers">
                                                                    <div class="icon">
                                                                        <i class="bi bi-check-lg"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        <div class="name">Saldo Akun</div>
                                                                        <div class="price" id="method-1price"></div>
                                                                    </div>
                                                                </div>
                                                                <img width="60"
                                                                    src="{{ !$config ? '' : $config->logo_header }}" />
                                                                {{ ENV('APP_NAME') }} PAY
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="accordion mb-2">
                                            <div class="accordionHeadPay" style="background: var(--dark-grey);">
                                                <div class="title">Saldo (Tanpa Biaya Admin)</div>
                                                <div class="containers">
                                                </div>
                                                <i class="bi bi-caret-right-fill"></i>
                                            </div>
                                            <div class="accordionBodyPay">
                                                <div class="accordionContent">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <input type="radio" name="method" class="pay-radio"
                                                                id="method-1" onchange="select_method('1', 'Saldo Akun');" />
                                                            <label for="method-1" class="choicePay">
                                                                <div class="containers">
                                                                    <div class="icon">
                                                                        <i class="bi bi-check-lg"></i>
                                                                    </div>
                                                                    <div class="text">
                                                                        <div class="name">Saldo Akun</div>
                                                                        <div class="price" id="method-1price"></div>
                                                                    </div>
                                                                </div>
                                                                <img width="60"
                                                                    src="{{ !$config ? '' : $config->logo_header }}" />
                                                                {{ ENV('APP_NAME') }} PAY
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endguest
                                </div>

                                <div class="cards mb-4 d-flex flex-column gap-3" id="section-method">
                                    <div class="title-card text-left">Detail Kontak</div>
                                    <div class="floating-label-content">
                                        <input type="number" class="form-control floating-input" name="wa"
                                            id="nomor" placeholder=" " value="" name="nomor" />
                                        <label class="floating-label" for="nomor">No. Whatsapp</label>
                                        <div class="note" style="margin-top: 10px">*Status transaksi akan dikirim via
                                            whatsapp</div>
                                    </div>
                                    <div>
                                        <input type="hidden" name="tombol" value="submit" />
                                        <button type="button" onclick="order_confirm();" id="btn-confirm"
                                            class="btnYellowPrimary w-100 mt-2">
                                            Konfirmasi
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            </form>

            </div>

        </section>

        <!-- MODAL -->
        <div class="modal fade" id="modal-confirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width:600px">
                <div class="modal-content py-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ticketDetail page">
                                <div class="head text-center">Detail Pembelian</div>
                                <div class="containers">
                                    <div class="title">ID</div>
                                    <div class="desc" id="id_player">-</div>
                                </div>
                                <div class="containers">
                                    <div class="title">Nickname</div>
                                    <div class="desc" id="nickname">-</div>
                                </div>
                                <div class="containers">
                                    <div class="title">Produk</div>
                                    <div class="desc" id="product"></div>
                                </div>
                                <div class="containers">
                                    <div class="title">Harga</div>
                                    <div class="desc" id="price"></div>
                                </div>
                                <div class="containers">
                                    <div class="title">Metode Pembayaran</div>
                                    <div class="desc leading-none" id="metode_bayar"></div>
                                </div>
                                <div class="containers">
                                    <div class="title">Total Harga</div>
                                    <div class="desc txt-primary" id="total_bayar"></div>
                                </div>
                                <button type="button" onclick="order_process()" id="btn-order-process"
                                    class="btnYellowPrimary w-100 mt-3">
                                    Bayar Sekarang
                                </button>
                                <button type="button" onclick="order_cancel()" class="btnGrey w-100 mt-2">
                                    Cancel
                                </button>
                            </div>
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
            setInterval(function() {
                $("#toolbarContainer").remove();
            }, 500);

            function salin(text, label_text) {

                navigator.clipboard.writeText(text);

                toastr.success(label_text);
            }
        </script>

        <script>
            var modal_confirm = new bootstrap.Modal(document.getElementById('modal-confirm'));

            function select_product(id, name, price) {

                $('html, body').animate({
                    scrollTop: $("#section-method").offset().top
                }, 400);

                $(".product").removeClass('active');
                $("#product-" + id).addClass('active');

                $("input[name=product]").val(id);
                $("#product1").text(name);
                $("#product").text(name);
                $("#price1").text(price);
                $("#price").text(price);

                $.ajax({
                    url: 'https://vanvanstore.com/id/price/' + id,
                    dataType: 'JSON',
                    success: function(result) {
                        console.log(result)
                        for (let price in result) {
                            $("#method-" + result[price].id + "price").text(result[price].price);
                        }
                    }
                });
            }

            function select_method(id, name) {

                var product = $("input[name=product]").val();

                if (!product) {
                    toastr.warning('Silahkan pilih produk dahulu');
                } else {

                    $(".method").removeClass('active');
                    $("#method-" + id).addClass('active');

                    $("input[name=method]").val(id);
                    $("#metode_bayar").text(name);
                    $("#total_bayar").text($("#method-" + id + "price").text());
                }
            }


            function cekVoucher() {
                var voucher = $("input[name=voucher]").val();

                if (voucher == '' || voucher == ' ') {
                    toastr.warning('Kode voucher harus diisi');
                } else {
                    $.ajax({
                        url: 'https://vanvanstore.com/sistem/voucher',
                        data: 'voucher=' + voucher,
                        type: 'POST',
                        dataType: 'JSON',
                        success: function(result) {
                            if (result.status == 1) {
                                var found = false;
                                for (var i = 0; i < result.data.length; i++) {
                                    if (result.data[i].voucher === voucher) {
                                        found = true;
                                        break;
                                    }
                                }

                                if (found) {
                                    toastr.success('Kode Promo Tersedia');
                                } else {
                                    toastr.error('Kode Promo Tidak Tersedia');
                                }
                            } else {
                                toastr.error('Terjadi kesalahan pada server');
                            }
                        },
                        error: function() {
                            toastr.error('Terjadi kesalahan pada server');
                        }
                    });
                }
            }

            function order_confirm() {

                $("#nickname").addClass('d-none');

                var product = $("input[name=product]").val();
                var method = $("input[name=method]").val();
                var wa = $("input[name=wa]").val();

                var target = $('.games-input').map(function() {
                    return this.value;
                }).get().join(',');

                if (!product) {
                    toastr.warning('Nominal produk belum di pilih');
                } else if (!target || target == ' ' || target == '' || target == ',') {
                    toastr.warning('Tujuan masih kosong');
                } else if (!method) {
                    toastr.warning('Silahkan pilih metode pembayaran');
                } else if (!wa) {
                    toastr.error('No. Whatsapp belum diisi');
                } else if (wa.length < 10) {
                    toastr.warning('No. Whatsapp tidak sesuai');
                } else if (wa.length > 14) {
                    toastr.warning('No. Whatsapp tidak sesuai');
                } else if (wa.substr(0, 2) != '08') {
                    toastr.warning('No. Whatsapp harus diawali dengan 08');
                } else {
                    $("#btn-confirm").text('Loading...').attr('disabled', 'disabled');
                    $("#tr-product td").text($("#product-" + product + " h6").text());
                    $("#tr-method td").text($("#method-" + method + " span").text());
                    $("#tr-total td").text($("#method-" + method + " h6").text());
                    $("#id_player").text(target.replace(/,/g, ' - '));

                    $("#btn-order").attr('disabled', 'disabled').text('Loading...');
                    $.ajax({
                        url: 'https://vanvanstore.com/id/check/mobile-legends',
                        type: 'POST',
                        data: 'target=' + target,
                        dataType: 'JSON',
                        error: function() {
                            toastr.error('Refresh halaman');
                        },
                        success: function(result) {
                            console.log(result)
                            if (result.result.status == '200') {
                                if (result.error_msg) {
                                    toastr.error(result.error_msg);
                                } else if (result.nickname) {
                                    $("#nickname").removeClass('d-none');
                                    $("#nickname").text(result.nickname);
                                    $("#id_player").text(result.userid);

                                    $("input[name=nickname]").val(result.nickname);

                                    modal_confirm.show();
                                } else {
                                    toastr.error(result.error_msg);
                                }
                            } else {
                                toastr.error(result.error_msg);
                            }
                            $("#btn-confirm").text('Konfirmasi Top Up').removeAttr('disabled');
                            $("#btn-order").removeAttr('disabled').text('Konfirmasi');
                        }
                    });
                }
            }

            function order_close() {
                $("#btn-order").removeAttr('disabled').text('Konfirmasi');
                modal_detail.hide();
            }

            function order_process() {
                var product = $("input[name=product]").val();
                var method = $("input[name=method]").val();
                var wa = $("input[name=wa]").val();

                var target = $('.games-input').map(function() {
                    return this.value;
                }).get().join(',');

                if (product && target || target != ' ' || target != '' || target != ',' && method && wa && wa.length < 10 && wa
                    .length > 14 && wa.substr(0, 2) != '08') {
                    $("#btn-order-process").attr('disabled', 'disabled').text('Loading...');

                    setTimeout(function() {
                        $("#form-order").submit();
                    }, 1200);
                }
            }

            function order_cancel() {
                $('#modal-confirm').modal('hide');
            }

            function changeHarga(harga) {
                $(".SALDO").html(harga);
                $(".OVO").html(harga);
                $(".GOPAY").html(harga);
                $(".SHOPEEPAY").html(harga);
                $(".BCAVA").html(harga);
                $(".QRIS").html(harga);
                $(".QRIS2").html(harga);
                $(".QRISC").html(harga);
                $(".MYBVA").html(harga);
                $(".PERMATAVA").html(harga);
                $(".BNIVA").html(harga);
                $(".BRIVA").html(harga);
                $(".MANDIRIVA").html(harga);
                $(".SMSVA").html(harga);
                $(".MUAMALATVA").html(harga);
                $(".CIMBVA").html(harga);
                $(".SAMPOERNAVA").html(harga);
                $(".BSIVA").html(harga);
                $(".OCBCVA").html(harga);
                $(".DANAMONVA").html(harga);
                $(".BNCVA").html(harga);
                $(".ALFAMART").html(harga);
                $(".ALFAMIDI").html(harga);
                $(".INDOMARET").html(harga);
                $(".SP").html(harga);
                $(".DA").html(harga);
                $(".I1").html(harga);
                $(".BR").html(harga);
                $(".B1").html(harga);
                $(".BT").html(harga);
                $(".FT").html(harga);
                $(".M2").html(harga);
                $(".OV").html(harga);
                $(".VA").html(harga);
                $(".SA").html(harga);

            }
        </script>
    </body>
@endsection