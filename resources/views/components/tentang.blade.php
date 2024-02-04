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
</style>
@endsection
@section('content')
@include('../navbar')
<div class="md">
    <main class="min-h-[50vh] ">
        <div class="relative">
            <div class="absolute inset-0 max-h-[9rem] sm:max-h-[11.5rem] md:max-h-[11.5rem] lg:max-h-[14rem]">
                <div class="relative h-full w-full"><img alt="" sizes="100vw" srcset="/cdn/image/pattern-polygon.webp 640w, /cdn/image/pattern-polygon.webp 750w, /cdn/image/pattern-polygon.webp 828w, /cdn/image/pattern-polygon.webp 1080w, /cdn/image/pattern-polygon.webp 1200w, /cdn/image/pattern-polygon.webp 1920w, /cdn/image/pattern-polygon.webp 2048w, /cdn/image/pattern-polygon.webp 3840w"
                        src="/cdn/image/pattern-polygon.webp" decoding="async" data-nimg="fill" class="object-cover" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    <div class="absolute inset-0 bg-gray-300 mix-blend-multiply"
                        aria-hidden="true"></div>
                    <div class="absolute left-0 top-0 w-full h-full flex items-center justify-center">
                        <h1 class="text-[24px] lg:text-[30px] font-semibold leading-[26px] tracking-[0.2em] text-center" style="color: var(warna_5);">TENTANG KAMI</h1>
                    </div>
                </div>
            </div>
            <div class="relative mx-auto max-w-7xl py-[5.5rem] lg:py-24 px-4 sm:py-24 sm:px-6 lg:px-8 "></div>
        </div>
        <div class="mx-auto max-w-7xl px-4 md:px-8 lg:px-10 pt-2 md:pt-8 lg:pt-10 pb-16 flex flex-col gap-12 md:gap-16 lg:gap-20">
            <div class="flex flex-col">
                <!--<h2 class="text-lg md:text-xl lg:text-2xl font-semibold leading-[26px] tracking-[0.2em] mb-8">SEJARAH {{ ENV('APP_NAME') }}</h2>-->
                <div class="rounded-2xl css-scrciq">
                    <div class="flex flex-col" style="color: var(warna_5);">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-3 md:gap-8 lg:gap-10 p-6 border-b border-[#626274]">
                            <p class="text-justify leading-7">{{ !$config ? '' : $config->sejarah }}</p>
                            <p class="text-justify leading-7">{{ !$config ? '' : $config->sejarah_1 }}</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                            <div class="p-6 flex lg:flex-row md:flex-row flex-col border-b lg:border-b-0 md:border-b-0 md:border-r lg:border-r border-[#626274] gap-3 items-start"><img src="/cdn/icons/visi.svg" alt="icon-visi" width="60" height="60">
                                <div class="flex flex-col gap-3">
                                    <h3 class="text-[20px] font-semibold">Visi</h3>
                                    <p class="leading-7">{{ !$config ? '' : $config->visi }}</p>
                                </div>
                            </div>
                            <div class="p-6 flex lg:flex-row md:flex-row flex-col gap-3 items-start" style="color: var(warna_5);"><img src="/cdn/icons/misi.svg" alt="icon-misi" width="60" height="60">
                                <div class="flex flex-col gap-3">
                                    <h3 class="text-[20px] font-semibold ">Misi</h3>
                                    <p class="leading-7">{{ !$config ? '' : $config->misi }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <h2 class="text-lg md:text-xl lg:text-2xl font-semibold leading-[26px] tracking-[0.2em] mb-8" style="color: var(warna_5);">OWNER</h2>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:grid-cols-3 lg:gap-20">
                    <div class="relative h-[460px] md:h-[480px] lg:h-[500px] w-full bg-gray-700 rounded-xl"><img alt="ceo-image" sizes="100vw" srcset="{{ !$config ? '' : $config->logo_ceo }} 640w, {{ !$config ? '' : $config->logo_ceo }} 750w, {{ !$config ? '' : $config->logo_ceo }} 828w, {{ !$config ? '' : $config->logo_ceo }} 1080w, {{ !$config ? '' : $config->logo_ceo }} 1200w, {{ !$config ? '' : $config->logo_ceo }} 1920w, {{ !$config ? '' : $config->logo_ceo }} 2048w, {{ !$config ? '' : $config->logo_ceo }} 3840w"
                            src="{{ !$config ? '' : $config->logo_ceo }}" decoding="async" data-nimg="fill" class="object-cover object-center rounded-[15px]" loading="lazy" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                        <div
                            class="absolute bottom-0 w-full bg-opacity-0 backdrop-blur-xl backdrop-filter transition-colors duration-1000 bg-transparent border-l-1 min-h-1/3 rounded-bl-[15px] rounded-t-[20px] rounded-br-[15px] grid px-[18px] py-4 gap-4">
                            <div>
                                <p class="text-[20px] md:text-[20px] lg:text-[20px] font-bold"><a href="{{ !$config ? '' : $config->url_ig }}">{{ !$config ? '' : $config->nama_ceo }}</a></p>
                                <p class="text-[15px] md:text-[15px] lg:text-[15px] font-medium">OWNER {{ ENV('APP_NAME') }}</p>
                            </div>
                            <p class="text-[14px] md:text-[14px] lg:text-[14px] text-justify">{{ !$config ? '' : $config->deskripsi_ceo }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <h2 class="text-lg md:text-xl lg:text-2xl font-semibold leading-[26px] tracking-[0.2em] mb-8" style="color: var(warna_5);">ALAMAT</h2>
            <div class="flex lg:flex-row md:flex-row flex-col gap-4 md:items-start lg:items-start" style="color: var(warna_5);"><img alt="icon-misi" srcset="/cdn/icons/alamat.svg 1x, /cdn/icons/alamat.svg 2x" src="/cdn/icons/alamat.svg" width="60" height="60" decoding="async" data-nimg="1" loading="lazy" style="color: transparent;">
                <p class="leading-7"><strong>{{ !$config ? '' : $config->nama_bagan }}</strong> <br> {{ !$config ? '' : $config->alamat }} <br>Telepon: <a href="{{ !$config ? '' : $config->url_wa }}">{{ !$config ? '' : $config->telp }}</a></p>
            </div>
        </div>
</div>
</main>
</div>
@include('../footer')@endsection