@extends('../main')
@section('css')
<style>
.p-6 {
    padding: 1.5rem;
}
.border-\[\#626274\] {
    --tw-border-opacity: 1;
    border-color: rgb(98 98 116/var(--tw-border-opacity));
}
.border-b {
    border-bottom-width: 1px;
}
.grid {
    display: grid;
}
.css-scrciq {
    border: 1px solid rgba(203, 203, 203, 0.5);
    background: linear-gradient(163.42deg, rgb(50, 50, 62) -50%, rgba(255, 255, 255, 0) 105.46%);
}
.rounded-2xl {
    border-radius: 1rem;
}
.duration-1000 {
    transition-duration: 1s;
}
.transition-colors {
    transition-property: color,background-color,border-color,outline-color,text-decoration-color,fill,stroke;
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    transition-duration: .15s;
}
.backdrop-blur-xl {
    --tw-backdrop-blur: blur(24px);
}
.py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
}
.px-\[18px\] {
    padding-left: 18px;
    padding-right: 18px;
}
.bg-opacity-0 {
    --tw-bg-opacity: 0;
}
.bg-transparent {
    background-color: transparent;
}
.rounded-br-\[15px\] {
    border-bottom-right-radius: 15px;
}
.rounded-bl-\[15px\] {
    border-bottom-left-radius: 15px;
}
.rounded-t-\[20px\] {
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
}
.gap-4 {
    gap: 1rem;
}
.w-full {
    width: 100%;
}
.grid {
    display: grid;
}
.bottom-0 {
    bottom: 0;
}
.absolute {
    position: absolute;
}

.css-6qw8qz {
    border: 1px solid rgba(203, 203, 203, 0.5);
    background: linear-gradient(163.42deg, rgb(50, 50, 62) -107%, rgba(255, 255, 255, 0) 105.46%);
}

.pt-3 {
    padding-top: 0.75rem;
}
.pb-4 {
    padding-bottom: 1rem;
}
.px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
}
.rounded-2xl {
    border-radius: 1rem;
}
</style>
@endsection
@section('content')
@include('../navbar')
<main class="relative min-h-[50vh] ">
    <div class="relative">
        <div class="absolute inset-0 max-h-[9rem] sm:max-h-[11.5rem] md:max-h-[11.5rem] lg:max-h-[14rem]">
            <div class="relative h-full w-full"><img alt="" sizes="100vw" srcset="/cdn/image/pattern-polygon.webp 640w, /cdn/image/pattern-polygon.webp 750w, /cdn/image/pattern-polygon.webp 828w, /cdn/image/pattern-polygon.webp 1080w, /cdn/image/pattern-polygon.webp 1200w, /cdn/image/pattern-polygon.webp 1920w, /cdn/image/pattern-polygon.webp 2048w, /cdn/image/pattern-polygon.webp 3840w"
                    src="/cdn/image/pattern-polygon.webp" decoding="async" data-nimg="fill" class="object-cover" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                <div class="absolute inset-0 bg-gray-300 mix-blend-multiply"
                    aria-hidden="true"></div>
                <div class="absolute left-0 top-0 w-full h-full flex items-center justify-center">
                    <h1 class="text-[24px] lg:text-[30px] font-semibold leading-[26px] tracking-[0.2em] text-center">SYARAT &amp; KETENTUAN PENGGUNA</h1>
                </div>
            </div>
        </div>
        <div class="relative mx-auto max-w-7xl py-[5.5rem] lg:py-24 px-4 sm:py-24 sm:px-6 lg:px-8 "></div>
    </div>
    <div class="mx-auto max-w-7xl px-4 md:px-8 lg:px-10 pt-2 md:pt-8 lg:pt-10 pb-16 grid grid-cols-12 gap-3 lg:gap-x-[58px]">
        <div class="hidden lg:block lg:col-span-4 mr-5">
            <aside class="sticky top-20">
                <div class="px-4 pt-3 pb-4 rounded-2xl css-6qw8qz">
                    <ul class="flex flex-col gap-1">
                        <li class="font-semibold] cursor-pointer" style="">
                            <p class="mt-1">1. Ketentuan Umum</p>
                        </li>
                        <li class="font-regular cursor-pointer" style="">
                            <p class="ml-3">1.1. Pendahuluan</p>
                        </li>
                        <li class="font-regular cursor-pointer" style="">
                            <p class="ml-3">1.2. Layanan</p>
                        </li>
                        <li class="font-regular cursor-pointer" style="">
                            <p class="ml-3">1.3. Pembayaran</p>
                        </li>
                        <li class="font-regular cursor-pointer" style="">
                            <p class="ml-3">1.4. Pembatalan</p>
                        </li>
                        <li class="font-regular cursor-pointer" style="">
                            <p class="ml-3">1.5. Kembalian</p>
                        </li>
                        <li class="font-regular cursor-pointer" style="">
                            <p class="ml-3">1.6. Batasan Tanggung Jawab</p>
                        </li>
                        <li class="font-regular cursor-pointer" style="">
                            <p class="ml-3">1.7. Hukum Yang Berlaku</p>
                        </li>
                        <li class="font-medium cursor-pointer" style="">
                            <p class="mt-1">2. Akun Pengguna {{ ENV('APP_NAME') }}</p>
                        </li>
                        <li class="font-regular cursor-pointer" style="">
                            <p class="ml-3">2.1. Pendahuluan</p>
                        </li>
                        <li class="font-regular cursor-pointer" style="">
                            <p class="ml-3">2.2. Pendaftaran Akun</p>
                        </li>
                        <li class="font-regular cursor-pointer" style="">
                            <p class="ml-3">2.3. Keamanan Akun</p>
                        </li>
                        <li class="font-regular cursor-pointer" style="">
                            <p class="ml-3">2.4. Penggunaan Akun</p>
                        </li>
                        <li class="font-regular cursor-pointer" style="">
                            <p class="ml-3">2.5. Pembatalan Akun</p>
                        </li>
                        <li class="font-regular cursor-pointer" style="">
                            <p class="ml-3">2.6. Batasan Tanggung Jawab</p>
                        </li>
                        <li class="font-regular cursor-pointer" style="">
                            <p class="ml-3">2.7. Hukum Yang Berlaku</p>
                        </li>
                        <li class="font-medium cursor-pointer" style="">
                            <p class="mt-1">3. Penggunaan dan Kepemilikan Kekayaan Intelektual</p>
                        </li>
                        <li class="font-regular cursor-pointer" style="">
                            <p class="ml-3">3.1. Pendahuluan</p>
                        </li>
                        <li class="font-regular cursor-pointer" style="">
                            <p class="ml-3">3.2. Kepemilikan Kekayaan Intelektual</p>
                        </li>
                        <li class="font-regular cursor-pointer" style="">
                            <p class="ml-3">3.3. Penggunaan Aset Intelektual</p>
                        </li>
                        <li class="font-regular cursor-pointer" style="">
                            <p class="ml-3">3.4. Batasan Tanggung Jawab</p>
                        </li>
                        <li class="font-regular cursor-pointer" style="">
                            <p class="ml-3">3.5. Hukum Yang Berlaku</p>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
        <div id="contents" class="col-span-12 lg:col-span-8 break-words text-justify">
            <div class="flex flex-col gap-8">
                <div class="flex flex-col gap-6">
                    <h2 class="text-xl font-bold">1. Ketentuan Umum</h2>
                    <div class="flex flex-col gap-6">
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">1.1. Pendahuluan</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">{{ ENV('APP_NAME') }} menyediakan layanan pembayaran online bagi pelanggannya. Dengan menggunakan layanan kami, pelanggan setuju untuk terikat oleh syarat dan ketentuan ini.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">1.2. Layanan</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">{{ ENV('APP_NAME') }} menyediakan layanan pembayaran untuk memfasilitasi transaksi ke pelanggan. Kami berhak untuk menolak atau membatalkan transaksi apa pun tanpa pemberitahuan sebelumnya dan tanpa memberikan alasan apa pun.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">1.3. Pembayaran</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">Pelanggan setuju untuk membayar jumlah yang ditentukan untuk produk atau layanan yang dibeli melalui {{ ENV('APP_NAME') }}. Kami berhak untuk mengubah harga kami kapan saja tanpa pemberitahuan sebelumnya.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">1.4. Pembatalan</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">Pelanggan dapat membatalkan transaksi mereka kapan saja sebelum produk atau layanan diterima. Setelah produk atau layanan diterima, pembatalan tidak lagi dapat dilakukan.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">1.5. Kembalian</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">Kembalian tidak diperbolehkan kecuali jika produk atau layanan yang diterima tidak sesuai dengan deskripsi yang diberikan. Dalam hal ini, pelanggan harus menghubungi {{ ENV('APP_NAME') }} segera setelah menerima produk atau layanan
                                    untuk meminta pengembalian.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">1.6. Batasan Tanggung Jawab</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">{{ ENV('APP_NAME') }} tidak bertanggung jawab atas kerugian atau kerusakan yang disebabkan oleh penggunaan layanannya.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">1.7. Hukum Yang Berlaku</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">Syarat dan ketentuan ini akan diatur dan diterapkan sesuai dengan hukum yang berlaku di Republik Indonesia. Dengan menggunakan layanan {{ ENV('APP_NAME') }}, pelanggan setuju untuk terikat oleh syarat dan ketentuan ini.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-6">
                    <h2 class="text-xl font-bold">2. Akun Pengguna {{ ENV('APP_NAME') }}</h2>
                    <div class="flex flex-col gap-6">
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">2.1. Pendahuluan</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">{{ ENV('APP_NAME') }} menyediakan layanan pembayaran online bagi pelanggannya. Dengan membuka dan menggunakan akun {{ ENV('APP_NAME') }}, pengguna setuju untuk terikat oleh syarat dan ketentuan ini.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">2.2. Pendaftaran Akun</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">Untuk menggunakan layanan {{ ENV('APP_NAME') }}, pengguna harus membuka akun dengan memberikan informasi pribadi yang benar dan akurat. {{ ENV('APP_NAME') }} berhak untuk menolak atau membatalkan akun apa pun tanpa pemberitahuan sebelumnya dan
                                    tanpa memberikan alasan apa pun.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">2.3. Keamanan Akun</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">Pengguna bertanggung jawab untuk menjaga kerahasiaan informasi akun mereka, termasuk kata sandi. {{ ENV('APP_NAME') }} tidak bertanggung jawab atas kerugian atau kerusakan yang disebabkan oleh penggunaan informasi akun oleh pihak yang
                                    tidak berwenang.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">2.4. Penggunaan Akun</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">Pengguna setuju untuk hanya menggunakan akun mereka untuk tujuan yang legal dan tidak melakukan kegiatan yang merugikan {{ ENV('APP_NAME') }} atau pihak lain.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">2.5. Pembatalan Akun</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">{{ ENV('APP_NAME') }} berhak untuk membatalkan akun apa pun tanpa pemberitahuan sebelumnya dan tanpa memberikan alasan apa pun.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">2.6. Batasan Tanggung Jawab</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">{{ ENV('APP_NAME') }} tidak bertanggung jawab atas kerugian atau kerusakan yang disebabkan oleh penggunaan akun oleh pengguna.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">2.7. Hukum Yang Berlaku</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">Syarat dan ketentuan ini akan diatur dan diterapkan sesuai dengan hukum yang berlaku di Republik Indonesia. Dengan membuka dan menggunakan akun {{ ENV('APP_NAME') }}, pengguna setuju untuk terikat oleh syarat dan ketentuan ini.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-6">
                    <h2 class="text-xl font-bold">3. Penggunaan dan Kepemilikan Kekayaan Intelektual</h2>
                    <div class="flex flex-col gap-6">
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">3.1. Pendahuluan</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">{{ ENV('APP_NAME') }} memiliki hak atas semua aset intelektual, termasuk namun tidak terbatas pada merek dagang, nama dagang, logo, dan konten. Pengguna setuju untuk tidak menggunakan aset intelektual {{ ENV('APP_NAME') }} tanpa izin tertulis
                                    dari {{ ENV('APP_NAME') }}.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">3.2. Kepemilikan Kekayaan Intelektual</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">Semua aset intelektual {{ ENV('APP_NAME') }} adalah kekayaan intelektual {{ ENV('APP_NAME') }} dan dilindungi oleh hukum kekayaan intelektual yang berlaku.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">3.3. Penggunaan Aset Intelektual</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">Pengguna setuju untuk tidak menggunakan aset intelektual {{ ENV('APP_NAME') }} tanpa izin tertulis dari {{ ENV('APP_NAME') }}. Pengguna juga setuju untuk tidak mengubah, memodifikasi, atau membuat turunan dari aset intelektual {{ ENV('APP_NAME') }}.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">3.4. Batasan Tanggung Jawab</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">{{ ENV('APP_NAME') }} tidak bertanggung jawab atas kerugian atau kerusakan yang disebabkan oleh penggunaan yang tidak sah dari aset intelektual {{ ENV('APP_NAME') }}.</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-lg font-semibold italic">3.5. Hukum Yang Berlaku</h3>
                            <div class="flex flex-col gap-3">
                                <p class="leading-7">Syarat dan ketentuan ini akan diatur dan diterapkan sesuai dengan hukum yang berlaku di Republik Indonesia. Dengan menggunakan layanan {{ ENV('APP_NAME') }}, pengguna setuju untuk terikat oleh syarat dan ketentuan ini.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('../footer')
    @endsection