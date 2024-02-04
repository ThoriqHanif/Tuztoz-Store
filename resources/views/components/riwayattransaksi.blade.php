@extends('main')

@section('css')
    <style>
        .css-16pvxfk {
            background: linear-gradient(270deg, rgb(211 211 211) -1.95%, rgb(110 7 7) 50.95%) !important;
        }

        .css-6qw8qz {
            border: 1px solid rgba(203, 203, 203, 0.5);
            background: linear-gradient(163.42deg, rgb(90 90 90) -107%, rgba(255, 255, 255, 0) 105.46%);
        }

        .css-6qw8qzz {
            border: 1px solid rgba(203, 203, 203, 0.5);
            background-color: #282828;
        }

        .css-138rpjn {
            background: linear-gradient(500deg, var(--warna_5) 0%, rgba(112, 127, 235, 0) 100%);
            color: white;
        }

        .css-138rpjnn:hover {
            background: linear-gradient(500deg, var(--warna_5) 0%, rgba(112, 127, 235, 0) 100%);
            color: white;
        }

        .font-medium {
            font-weight: 500;
        }

        .text-sm {
            font-size: .875rem;
            line-height: 1.25rem;
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }

        .rounded-3xl {
            border-radius: 1.5rem;
        }

        .gap-3 {
            gap: 0.75rem;
        }

        .items-center {
            align-items: center;
        }

        .flex {
            display: flex;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
@endsection

@section('content')
    @include('../navbar')

    <style data-emotion="css 1nl4j3i2">
        .css-1nl4j3i2 {
            ;
        }

        @media screen and (min-width: 768px) {
            .css-1nl4j3i2 {
                width: 350px;
            }
        }
    </style>

    <div class="mx-auto max-w-7xl pb-24 grid grid-cols-12 gap-6 lg:gap-x-16 lg:py-8 lg:px-12 mb-10 md:px-4 px-4">
        <div class="hidden md:block lg:block xl:block col-span-1 lg:col-span-3">
            <aside class="py-6 lg:col-span-3 lg:p-0 sticky top-20">
                <nav class="h-full content-start lg:grid lg:content-between">
                    <div class="space-y-4">
                        <style data-emotion="css 1bz809x">
                            .css-1bz809x:hover {
                                background: linear-gradient(90deg, undefined 0%, rgba(112, 127, 235, 0) 100%);
                            }
                        </style>
                        <a class="group flex gap-3 items-center rounded-3xl px-3 py-2 text-sm font-medium css-138rpjn css-138rpjnn"
                            aria-current="page" href="{{ route('dash') }}">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0z">
                                </path>
                                <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z">
                                </path>
                            </svg>
                            <span class="truncate hidden lg:block xl:block">Akun
                            </span>
                        </a>
                        <style data-emotion="css 1bz809x">
                            .css-1bz809x:hover {
                                background: linear-gradient(90deg, undefined 0%, rgba(112, 127, 235, 0) 100%);
                            }
                        </style>
                        <a class="group flex gap-3 items-center rounded-3xl px-3 py-2 text-sm font-medium css-138rpjnn"
                            aria-current="page" href="{{ route('deposit') }}">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0z">
                                </path>
                                <path
                                    d="M20 2H4c-1.11 0-2 .89-2 2v11c0 1.11.89 2 2 2h4v5l4-2 4 2v-5h4c1.11 0 2-.89 2-2V4c0-1.11-.89-2-2-2zm0 13H4v-2h16v2zm0-5H4V4h16v6z">
                                </path>
                            </svg>
                            <span class="truncate hidden lg:block xl:block">Deposit
                            </span>
                        </a>
                        <style data-emotion="css 1bz809x">
                          .css-1bz809x,
                          .css-138rpjnn:hover {
                              background: linear-gradient(90deg, undefined 0%, rgba(112, 127, 235, 0) 100%);
                          }
                      </style>
                        <a class="group flex gap-3 items-center rounded-3xl px-3 py-2 text-sm font-medium css-138rpjnn"
                            aria-current="page" href="{{ route('riwayat.transaksi') }}">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0z">
                                </path>
                                <path
                                    d="M18 17H6v-2h12v2zm0-4H6v-2h12v2zm0-4H6V7h12v2zM3 22l1.5-1.5L6 22l1.5-1.5L9 22l1.5-1.5L12 22l1.5-1.5L15 22l1.5-1.5L18 22l1.5-1.5L21 22V2l-1.5 1.5L18 2l-1.5 1.5L15 2l-1.5 1.5L12 2l-1.5 1.5L9 2 7.5 3.5 6 2 4.5 3.5 3 2v20z">
                                </path>
                            </svg>
                            <span class="truncate hidden lg:block xl:block">Riwayat Transaksi
                            </span>
                        </a>
                        <div class="cursor-pointer content-end"><button type="button"
                                class="flex gap-3 items-center rounded-3xl px-3 pt-6 pb-2 text-sm font-medium text-red-400 "><svg
                                    stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path
                                        d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z">
                                    </path>
                                </svg><span class="hidden lg:block xl:block">Keluar</span></button></div>
                        {{-- <form action="{{ route('logout') }}" method="POST" id='logout'>
        @csrf        
                                                           
        <button type='submit' class="group flex gap-3 items-center rounded-3xl px-3 py-2 text-sm font-medium css-138rpjnn" id="headlessui-menu-item-:r4:" role="menuitem" tabindex="-1" data-headlessui-state="">Keluar
        </button>
      </form> --}}
                </nav>
            </aside>
        </div>
        {{-- <div class="col-span-12 md:col-span-11 lg:col-span-9 mt-6 sm:mt-6 lg:mt-0 md:mt-6 ">
            <div class="flex justify-start items-center gap-5 undefined">
                <h4 class="text-lg font-medium">Riwayat Transaksi</h4>
            </div>
            <div class="grid grid-cols-12 items-center mb-1.5">
                <div class="flex flex-col md:flex-row lg:flex-row col-span-12 lg:col-span-12 gap-3 mt-2 py-4 mb-2">
                    <select id="status"
                        class="px-3 py-2 text-slate-900 bg-white rounded-full w-full md:w-64 lg:w-64 h-full shadow-sm sm:text-sm focus:outline-none placeholder:text-slate-400 focus:ring-2 focus:ring-[#2D2EAD] ring-1 ring-slate-200 appearance-none transition ease-in-out w-">
                        <option value="" selected="">Semua</option>
                    </select>
                    <div class="!m-0 mb-2 w-full md:w-64 lg:w-72">
                        <div class="relative flex items-center text-gray-400 focus-within:text-slate-900">
                            <input type="text"
                                class="px-3 pr-10  py-2 text-slate-900 bg-white rounded-full w-full h-full shadow-sm sm:text-sm focus:outline-none placeholder:text-slate-400 focus:ring-2 focus:ring-[#2D2EAD] ring-1 ring-slate-200 undefined"
                                placeholder="Cari nomor pesanan" value="" /><svg stroke="currentColor"
                                fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                class="w-5 h-5 absolute right-0 mr-4 cursor-pointer" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                                </path>
                                <path
                                    d="M11.412 8.586c.379.38.588.882.588 1.414h2a3.977 3.977 0 0 0-1.174-2.828c-1.514-1.512-4.139-1.512-5.652 0l1.412 1.416c.76-.758 2.07-.756 2.826-.002z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-12 items-center gap-2">
                <style data-emotion="css 1cn1a6o">
                    .css-1cn1a6o {
                        border: 1px solid rgba(203, 203, 203, 0.5);
                        background: linear-gradient(163.42deg, #32323e -20%, #ffffff00 105.46%);
                    }
                </style>
                <div
                    class="col-span-12 overflow-x-auto relative bg-gradient-black lg:block md:block sm:block hidden css-1cn1a6o">
                    <table class="table-auto w-full text-sm text-left">
                        <style data-emotion="css 80esbn">
                            .css-80esbn {
                                background: #32323e;
                                color: #cbcbcb;
                            }
                        </style>
                        <thead class="text-xs uppercase sticky top-0 css-80esbn">
                            <tr>
                                <th scope="col" class="py-3 px-6">Nomor Pesanan</th>
                                <th scope="col" class="py-3 px-6">Layanan</th>
                                <th scope="col" class="py-3 px-6">Nama</th>
                                <th scope="col" class="py-3 px-6">Pembayaran</th>
                                <th scope="col" class="py-3 px-6">Status</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                    <div
                        class="absolute bg-black bg-opacity-40 h-full w-full top-0 flex items-center justify-center overflow-hidden">
                        <div class="flex items-center"><svg class="animate-spin h-5 w-5 text-white"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg></div>
                    </div>
                    <div class="flex justify-center p-6"><img alt="data-not-found"
                            srcSet="/_next/image?url=%2Fimages%2Fcontent-missing.gif&amp;w=64&amp;q=75 1x, /_next/image?url=%2Fimages%2Fcontent-missing.gif&amp;w=128&amp;q=75 2x"
                            src="/_next/image?url=%2Fimages%2Fcontent-missing.gif&amp;w=128&amp;q=75" width="56"
                            height="56" decoding="async" data-nimg="1" class="w-56 h-56" loading="lazy"
                            style="color:transparent" /></div>
                </div>
                <div class="col-span-12 mt-2">
                    <div class="flex items-center justify-center md:justify-between lg:justify-between py-3">
                        <div class="lg:block md:block hidden">
                            <p class="text-sm text-gray-500"><span class="font-medium">0</span> to
                                <span class="font-medium">0</span> of<!-- --> <span class="font-medium">0</span> results
                            </p>
                        </div>
                        <ul class="inline-flex items-center -space-x-px">
                            <li
                                class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 rounded-l-md">
                                <button>Prev</button>
                            </li>
                            <li
                                class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 rounded-r-md">
                                <button>Next</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-span-12 md:col-span-11 lg:col-span-9 mt-6 sm:mt-6 lg:mt-0 md:mt-6 " bis_skin_checked="1">
            <div class="flex justify-start items-center gap-5 undefined" bis_skin_checked="1">
                <h4 class="text-lg font-medium">Riwayat Transaksi</h4>
            </div>
            <div class="grid grid-cols-12 items-center mb-1.5" bis_skin_checked="1">
                <div class="flex flex-col md:flex-row lg:flex-row col-span-12 lg:col-span-12 gap-3 mt-2 py-4 mb-2"
                    bis_skin_checked="1"><select id="status"
                        class="px-3 py-2 text-slate-900 bg-white rounded-full w-full md:w-64 lg:w-64 h-full shadow-sm sm:text-sm focus:outline-none placeholder:text-slate-400 focus:ring-2 focus:ring-[#2D2EAD] ring-1 ring-slate-200 appearance-none transition ease-in-out w-"
                        fdprocessedid="f289o">
                        <option value="">Semua</option>
                        <option value="Belum Bayar">Pending</option>
                        <option value="Paid">Menunggu Pembayaran</option>
                        <option value="Pending">Waiting</option>
                        <option value="Processing">Processing</option>
                        <option value="Success">Success</option>
                        <option value="Batal">Batal</option>
                    </select>
                    <div class="!m-0 mb-2 w-full md:w-64 lg:w-72" bis_skin_checked="1">
                        <div class="relative flex items-center text-gray-400 focus-within:text-slate-900"
                            bis_skin_checked="1">
                            <input type="text"
                                class="px-3 pr-10  py-2 text-slate-900 bg-white rounded-full w-full h-full shadow-sm sm:text-sm focus:outline-none placeholder:text-slate-400 focus:ring-2 focus:ring-[#2D2EAD] ring-1 ring-slate-200 undefined"
                                placeholder="Cari nomor pesanan" value="" fdprocessedid="sinkj9"><svg
                                stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                class="w-5 h-5 absolute right-0 mr-4 cursor-pointer" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                                </path>
                                <path
                                    d="M11.412 8.586c.379.38.588.882.588 1.414h2a3.977 3.977 0 0 0-1.174-2.828c-1.514-1.512-4.139-1.512-5.652 0l1.412 1.416c.76-.758 2.07-.756 2.826-.002z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-3 border-none rounded-2xl css-6qw8qz" style="border: 1px solid rgba(203,203,203,0.5);">
                <h4 class="mb-4">History
                </h4>
                <div class="table-responsive">
                    <table class="table-auto w-full text-sm text-left">
                        <thead class="text-xs uppercase sticky top-0 css-80esbn">
                            <tr>
                                <th>Invoice</th>
                                <th>Layanan</th>
                                <th>Target</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $pesanan)
                                @php
                                    $zone = $pesanan->zone != null ? '-' . $pesanan->zone : '';
                                    $label_pesanan = '';
                                    if ($pesanan->status == 'Pending' || $pesanan->status == 'Menunggu Pembayaran' || $pesanan->status == 'Waiting') {
                                        $label_pesanan = 'warning';
                                    } elseif ($pesanan->status == 'Processing') {
                                        $label_pesanan = 'info';
                                    } elseif ($pesanan->status == 'Success') {
                                        $label_pesanan = 'success';
                                    } else {
                                        $label_pesanan = 'danger';
                                    }
                                @endphp
                                <tr class="border-b border-gray-700 hover:cursor-pointer hover:bg-slate-50/5">
                                    <td class="py-4 px-6 font-medium whitespace-nowrap flex flex-col gap-2">
                                        <p class="font-medium">{{ $pesanan->order_id }}</p>
                                        <p class="font-normal text-[12px]">{{ $pesanan->created_at }}</p>
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $pesanan->layanan }}<br>
                                    </td>
                                    <td>{{ $pesanan->user_id }}{{ $zone }}</td>
                                    <td class="py-4 px-6 font-medium">Rp.
                                        {{ number_format($pesanan->harga, 0, ',', '.') }}</td>
                                    <td class="py-4 px-6"><span
                                            class="bg-{{ $label_pesanan }} inline-block rounded-full px-2 text-[12px] font-semibold leading-5 text-black text-center">{{ $pesanan->status }}</span>
                                    </td>
                                    <td class="py-4 px-6 font-medium whitespace-nowrap flex flex-col gap-2"><a
                                            href="javascript:;"
                                            onclick="modal('Order Details', '{{ route('riwayat.detail', [$pesanan->order_id]) }}')"
                                            class="btn btn-info"><i class="fa fa-qrcode"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </main>
    </div>

    </div>
    </main>
    @include('../footer')
@section('js')
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
@endsection
@endsection
