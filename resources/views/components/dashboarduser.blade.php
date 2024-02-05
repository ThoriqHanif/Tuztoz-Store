@extends('layouts.master-order')

{{-- @section('css')
    <style>
        .css-16pvxfk {
            background: linear-gradient(270deg, rgb(211 211 211) -1.95%, var(--warna_5) 50.95%) !important;
        }

        .css-6qw8qz {
            border: 1px solid #ddd;
            background: linear-gradient(163.42deg, rgb(90 90 90) -107%, rgb(99, 104, 177));
        }

        .css-6qw8qzz {
            border: 1px solid #ddd;
            background-color: #282828;
        }

        .css-138rpjn {
            background: linear-gradient(500deg, var(--warna_5) 0%, rgba(99, 104, 177));
            color: white;
        }

        .css-138rpjnn:hover {
            background: linear-gradient(500deg, var(--warna_5) 0%, rgb(99, 104, 177));
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
@endsection --}}

@section('content')
    {{-- @include('../navbar') --}}

    {{-- <style data-emotion="css 1nl4j3i2">
        .css-1nl4j3i2 {
            ;
        }

        @media screen and (min-width: 768px) {
            .css-1nl4j3i2 {
                width: 350px;
            }
        }
    </style> --}}
    {{-- <div class="mx-auto max-w-7xl pb-24 grid grid-cols-12 gap-6 lg:gap-x-16 lg:py-8 lg:px-12 mb-10 md:px-4 px-4 ">
        <div class="hidden md:block lg:block xl:block col-span-1 lg:col-span-3">
            <aside class="py-6 lg:col-span-3 lg:p-0 sticky top-20">
                <nav class="h-full content-start lg:grid lg:content-between">
                    <div class="space-y-4">
                        <style data-emotion="css vii8r9">
                            .css-vii8r9 {
                                background: linear-gradient(90deg, undefined 0%, rgba(112, 127, 235, 0) 100%);
                            }

                            .css-vii8r9:hover {
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
                        <form action="{{ route('logout') }}" method="POST" id='logout'>
            @csrf        
                                                               
            <button type='submit' class="group flex gap-3 items-center rounded-3xl px-3 py-2 text-sm font-medium css-138rpjnn" id="headlessui-menu-item-:r4:" role="menuitem" tabindex="-1" data-headlessui-state="">Keluar
            </button>
          </form>
                </nav>
            </aside>
        </div>
        <div class="col-span-12 md:col-span-11 lg:col-span-9 mt-6 sm:mt-6 lg:mt-0 md:mt-6 ">
            <div class="flex flex-col gap-6">
                <div class="grid grid-cols-12 gap-6">
                    <style data-emotion="css 6qw8qz">
                        .css-6qw8qz {
                            border: 1px solid rgba(203, 203, 203, 0.5);
                            background: linear-gradient(163.42deg, #32323e -107%, #ffffff00 105.46%);
                        }
                    </style>
                    <div class="p-6 col-span-12 md:col-span-6 lg:col-span-8 xl:col-span-8 rounded-2xl css-6qw8qz">
                        <div class="flex justify-between items-center col-span-12 gap-4">
                            <div class="flex items-center gap-4">
                                <div class="relative h-12 w-12">
                                    <img alt="akumauweb" sizes="100vw" srcset="/assets/logo/logo-user.png" src=""
                                        decoding="async" data-nimg="fill" class="rounded-full ring-1 ring-white"
                                        loading="lazy"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h3 class="font-bold text-sm lg:text-lg text-white">{{ Auth()->user()->name }}
                                    </h3>
                                    <p class="text-white/70 text-[12px] lg:text-[14px] flex items-center gap-3">
                                        {{ Str::upper(Auth()->user()->role) }}
                                        <!-- -->
                                        <span>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 24 24" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" d="M0 0h24v24H0z">
                                                </path>
                                                <path
                                                    d="M20 2H4c-1.11 0-2 .89-2 2v11c0 1.11.89 2 2 2h4v5l4-2 4 2v-5h4c1.11 0 2-.89 2-2V4c0-1.11-.89-2-2-2zm0 13H4v-2h16v2zm0-5H4V4h16v6z">
                                                </path>
                                            </svg>
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <style data-emotion="css 1mbz0zq">
                                .css-1mbz0zq {
                                    background: #707feb;
                                }

                                .css-1mbz0zq:hover {
                                    background: rgba(112, 127, 235, 0.85);
                                }
                            </style>
                            <a type="button" href="{{ route('edit') }}"
                                class="flex gap-2 px-5 py-2 rounded-full items-center font-medium css-1mbz0zq">
                                <span class="text-[12px] auto">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                        height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z">
                                        </path>
                                        <circle cx="10" cy="8" r="4">
                                        </circle>
                                        <path
                                            d="M10.67 13.02c-.22-.01-.44-.02-.67-.02-2.42 0-4.68.67-6.61 1.82-.88.52-1.39 1.5-1.39 2.53V20h9.26a6.963 6.963 0 01-.59-6.98zM20.75 16c0-.22-.03-.42-.06-.63l1.14-1.01-1-1.73-1.45.49c-.32-.27-.68-.48-1.08-.63L18 11h-2l-.3 1.49c-.4.15-.76.36-1.08.63l-1.45-.49-1 1.73 1.14 1.01c-.03.21-.06.41-.06.63s.03.42.06.63l-1.14 1.01 1 1.73 1.45-.49c.32.27.68.48 1.08.63L16 21h2l.3-1.49c.4-.15.76-.36 1.08-.63l1.45.49 1-1.73-1.14-1.01c.03-.21.06-.41.06-.63zM17 18c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="hidden md:block lg:block lg:text-[14px] text-[12px]">Edit Profile
                                </span>
                            </a>
                        </div>
                        <hr class="my-6 border-white/30" />
                        <div class="flex justify-between items-center gap-3">
                            <div class="flex items-center gap-3">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0V0z">
                                    </path>
                                    <path
                                        d="M17 1.01L7 1c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z">
                                    </path>
                                </svg>
                                <p class="lg:text-[14px] text-[12px]">{{ Auth()->user()->whatsapp }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <style data-emotion="css 16pvxfk">
                        .css-16pvxfk {
                            background: linear-gradient(270deg, #707feb -1.95%, #14279a 50.95%) !important;
                        }
                    </style>
                    <div class="col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-4 flex justify-center rounded-2xl css-16pvxfk">
                    <div class="membership-banner flex">
                      <div class="p-6 flex flex-col justify-between items-center gap-6">
                        <p class="leading-normal text-sm">Dapatkan harga lebih murah dengan Upgrade Membership!
                        </p>
                        <div class="relative w-full flex items-center justify-center">
                          <style data-emotion="css eqxk5j">
                            .css-eqxk5j {
                              background: #f5791e;
                            }
                            .css-eqxk5j:hover {
                              background: rgba(245,121,30,0.85);
                            }
                          </style>
                          <a type="button"  href="{{ route('membership') }}" class="flex gap-2 px-5 py-2 rounded-full items-center font-medium justify-center items-center z-20 w-full css-eqxk5j">
                            <span class="text-[12px]">
                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0z">
                                </path>
                                <path d="M20 2H4c-1.11 0-2 .89-2 2v11c0 1.11.89 2 2 2h4v5l4-2 4 2v-5h4c1.11 0 2-.89 2-2V4c0-1.11-.89-2-2-2zm0 13H4v-2h16v2zm0-5H4V4h16v6z">
                                </path>
                              </svg>
                            </span>
                            <span class="undefined lg:text-[14px] text-[12px] text-sm">Upgrade Sekarang
                            </span>
                          </a>
                          <div class="absolute top-0 bottom-0 left-0 right-0 z-10 px-20 lg:px-11 md:px-14 py-1">
                            <div class="relative w-full h-full">
                              <style data-emotion="css 1h67hu5">
                                .css-1h67hu5 {
                                  background: #f5791e;
                                }
                              </style>
                              <div class="absolute animate-ping rounded-full w-full h-full css-1h67hu5">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div
                        class="col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-4 flex justify-center rounded-2xl css-16pvxfk">
                        <div class="membership-banner flex">
                            <div class="p-6 flex flex-col justify-between items-center gap-6">
                                <p class="leading-normal">Dapatkan harga lebih murah dengan Upgrade
                                    Membership!</p>
                                <div class="relative w-full flex items-center justify-center">
                                    <style data-emotion="css eqxk5j">
                                        .css-eqxk5j {
                                            background: #f5791e;
                                        }

                                        .css-eqxk5j:hover {
                                            background: rgba(245, 121, 30, 0.85);
                                        }
                                    </style><button type="button"
                                        class="flex gap-2 px-5 py-2 rounded-full items-center font-medium justify-center items-center z-20 w-full css-eqxk5j"><span
                                            class="text-[12px]"><svg stroke="currentColor" fill="currentColor"
                                                stroke-width="0" viewBox="0 0 24 24" height="24" width="24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path
                                                    d="M20 2H4c-1.11 0-2 .89-2 2v11c0 1.11.89 2 2 2h4v5l4-2 4 2v-5h4c1.11 0 2-.89 2-2V4c0-1.11-.89-2-2-2zm0 13H4v-2h16v2zm0-5H4V4h16v6z">
                                                </path>
                                            </svg></span><span class="undefined lg:text-[14px] text-[12px]">Upgrade
                                            Sekarang</span></button>
                                    <div class="absolute top-0 bottom-0 left-0 right-0 z-10 px-20 lg:px-11 md:px-14 py-1">
                                        <div class="relative w-full h-full">
                                            <style data-emotion="css 1h67hu5">
                                                .css-1h67hu5 {
                                                    background: #f5791e;
                                                }
                                            </style>
                                            <div class="absolute animate-ping rounded-full w-full h-full css-1h67hu5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6">
                    <style data-emotion="css 6qw8qz">
                        .css-6qw8qz {
                            border: 1px solid rgba(203, 203, 203, 0.5);
                            background: linear-gradient(163.42deg, #32323e -107%, #ffffff00 105.46%);
                        }
                    </style>
                    <div
                        class="p-6 col-span-12 md:col-span-6 lg:col-span-8 flex flex-col lg:flex-row lg:items-center justify-between gap-5 rounded-2xl css-6qw8qz">
                        <div>
                            <p class="text-md font-medium mb-4">Saldo IDR</p>
                            <style data-emotion="css m6e15a">
                                .css-m6e15a {
                                    background: linear-gradient(270deg, #f92d2d -1.95%, #f5791e 97.95%);
                                    -webkit-background-clip: text;
                                    -webkit-text-fill-color: transparent;
                                    -webkit-background-clip: text;
                                    background-clip: text;
                                }
                            </style>
                            <h3 class="text-[24px] lg:text-[26px] font-bold css-m6e15a">Rp {{ number_format(Auth::user()->balance, 0,',', '.') }}
                            </h3>
                        </div>
                        <div class="flex flex-row-reverse justify-end lg:flex-row md:flex-row gap-3">
                            <style data-emotion="css eqxk5j">
                                .css-eqxk5j {
                                    background: #f5791e;
                                }

                                .css-eqxk5j:hover {
                                    background: rgba(245, 121, 30, 0.85);
                                }
                            </style><button type="button"
                                class="flex gap-2 px-5 py-2 rounded-full items-center font-medium css-eqxk5j"><span
                                    class="undefined lg:text-[14px] text-[12px]">Upgrade
                                    Membership</span></button>
                        </div>
                    </div>
                </div>
                <h3 class="mt-4 text-xl font-medium">Pesanan Saya</h3>
                <style data-emotion="css 6qw8qz">
                    .css-6qw8qz {
                        border: 1px solid rgba(203, 203, 203, 0.5);
                        background: linear-gradient(163.42deg, #32323e -107%, #ffffff00 105.46%);
                    }
                </style>
                <div class="p-3 border-none rounded-2xl css-6qw8qz">
                    <div class="flex flex-col md:flex-row lg:flex-row justify-between gap-2">
                        <div
                            class="flex flex-row-reverse justify-between items-center w-full md:flex-col lg:flex-col text-center gap-3 p-2 rounded-xl group hover:bg-btnPurple/30 transition duration-300 cursor-pointer">
                            <h3 class="text-sm md:text-2xl lg:text-4xl font-semibold group-hover:text-btnPurple">
                                0</h3>
                            <p class="text-white text-sm md:text-md lg:text-md group-hover:text-btnPurple">
                                Belum Bayar</p>
                        </div>
                        <div
                            class="flex flex-row-reverse justify-between items-center w-full md:flex-col lg:flex-col text-center gap-3 p-2 rounded-xl group hover:bg-btnPurple/30 transition duration-300 cursor-pointer">
                            <h3 class="text-sm md:text-2xl lg:text-4xl font-semibold group-hover:text-btnPurple">
                                0</h3>
                            <p class="text-white text-sm md:text-md lg:text-md group-hover:text-btnPurple">
                                Pending</p>
                        </div>
                        <div
                            class="flex flex-row-reverse justify-between items-center w-full md:flex-col lg:flex-col text-center gap-3 p-2 rounded-xl group hover:bg-btnPurple/30 transition duration-300 cursor-pointer">
                            <h3 class="text-sm md:text-2xl lg:text-4xl font-semibold group-hover:text-btnPurple">
                                0</h3>
                            <p class="text-white text-sm md:text-md lg:text-md group-hover:text-btnPurple">
                                Success</p>
                        </div>
                        <div
                            class="flex flex-row-reverse justify-between items-center w-full md:flex-col lg:flex-col text-center gap-3 p-2 rounded-xl group hover:bg-btnPurple/30 transition duration-300 cursor-pointer">
                            <h3 class="text-sm md:text-2xl lg:text-4xl font-semibold group-hover:text-btnPurple">
                                0</h3>
                            <p class="text-white text-sm md:text-md lg:text-md group-hover:text-btnPurple">
                                Expired</p>
                        </div>
                    </div>
                </div>




            </div>
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
    </div>
    </main>
    </div> --}}

    <body>
        <nav class="navbar active">
            <div class="container">
                <div class="navLeft">
                    <img src="{{ asset('assets/logo/20240123_060438.png') }}"
                        onclick="window.location.href={{ route('home') }}" alt="">
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
            <a href="{{ route('login') }}" class="containers ">
                <i class="bi bi-person-fill-lock"></i>
                <div class="text">Login</div>
            </a>
            @if (Auth::check())
                <a href="{{ url('account') }}" class="containers ">
                    <i class="bi bi-person-fill-lock"></i>
                    <div class="text">Dashboard</div>
                </a>
            @else
                <a href="{{ route('login') }}" class="containers ">
                    <i class="bi bi-person-fill-lock"></i>
                    <div class="text">Login</div>
                </a>
            @endif
        </div>

        <section class="history">
            <div class="containerHead">
                <img src="{{asset('assets/logo/logo-user.png')}}" alt="" class="user">
                <div class="identity">
                    <div class="name">Hi, {{ Auth()->user()->name }} <img src="https://vanvanstore.com/assets/images/icon/greet.svg"
                            alt=""></div>
                    <div class="desc">{{Auth()->user()->role}} - Sejak {{ \Carbon\Carbon::parse(Auth()->user()->created_at)->format('j F Y') }}
</div>
                </div>
            </div>
            <div class="cards-saldo mt-4">
                <div class="containerSaldo">
                    <div class="icon">
                        <img src="https://vanvanstore.com/assets/images/icon/dompet.svg" alt="">
                    </div>
                    <div class="desc">Saldo Kamu</div>
                    <div class="price">Rp. {{ number_format(Auth::user()->balance, 0,',', '.') }}</div>
                </div>
                <ul class="nav hisTabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="btnHisTabs "
                            onclick="window.location.href='{{url('account/deposit')}}'">
                            <i class="bi bi-wallet2"></i>
                            <div class="text">Isi Saldo</div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation" hidden>
                        <button class="btnHisTabs" onclick="window.location.href='https://vanvanstore.com/#produk'">
                            <i class="bi bi-gem"></i>
                            <div class="text">Top Up</div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btnHisTabs "
                            onclick="window.location.href='https://vanvanstore.com/account/transaksi'">
                            <i class="bi bi-clock-history"></i>
                            <div class="text">Transaksi</div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btnHisTabs "
                            onclick="window.location.href='https://vanvanstore.com/account/settings'">
                            <i class="bi bi-person-fill-gear"></i>
                            <div class="text">Setting</div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btnHisTabs"
                            onclick="window.location.href='https://vanvanstore.com/account/logout'">
                            <i class="bi bi-box-arrow-left"></i>
                            <div class="text">Keluar</div>
                        </button>
                    </li>
                </ul>
            </div>

            {{-- <section class="mt-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="cards shadow mb-4 mt-4">
                                <div class="title-head text-left mb-3">Pesanan Saya</div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr class="text-dark">
                                            <th nowrap="">Belum Bayar</th>
                                            <th nowrap="">Pending</th>
                                            <th nowrap="">Success</th>
                                            <th nowrap="">Expired</th>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-center text-dark">Kamu belum melakukan
                                                transaksi.</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

        </section>

        {{-- @include('../footer') --}}
    @section('js')
        <script type="text/javascript">
            $(document).ready(function() {
                $('.table').DataTable();
            });

            function modal(name, link) {
                // var myModal = new bootstrap.Modal($('#modal-detail'))
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
                $("#modal-detail").modal("show");
            }
        </script>

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="modal-detail"
            style="border-radius:7%">
            <div class="modal-dialog modal-lg">
                <div class="p-3 border-none rounded-2xl css-6qw8qzz">
                    <div class="modal-content css-6qw8qzz">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modal-detail-title"></h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="modal-detail-body"></div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endsection
