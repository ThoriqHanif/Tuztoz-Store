@extends('../main')
@section('content')
@include('../navbar')
<div class="h-full w-full">
    <div class="flex flex-col pb-24">
        <main class="mx-auto flex w-full max-w-7xl grow flex-col justify-center px-4 sm:px-6 lg:px-8">
            <div class="flex justify-center">
                <div class="h-64 w-80 relative"><img alt="404-not-found" sizes="100vw" srcset="/cdn/image/404-not-found-page.gif 640w, /cdn/image/404-not-found-page.gif 750w, /cdn/image/404-not-found-page.gif 828w, /cdn/image/404-not-found-page.gif 1080w, /cdn/image/404-not-found-page.gif 1200w, /cdn/image/404-not-found-page.gif 1920w, /cdn/image/404-not-found-page.gif 2048w, /cdn/image/404-not-found-page.gif 3840w"
                        src="/cdn/image/404-not-found-page.gif" decoding="async" data-nimg="fill" class="object-cover" loading="lazy" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"></div>
            </div>
            <div class="py-0">
                <div class="text-center">
                    <h1 class="mt-2 text-4xl font-extrabold tracking-tight sm:text-2xl">Apakah kamu tersesat ?</h1>
                    <p class="mt-2 text-base" style="color: rgb(203, 203, 203);">Apa yang kamu cari tidak dapat kami temukan :(</p>
                    <div class="mt-6"><a class="inline-flex items-center kbrstore-rounded btn-primary border border-transparent px-2.5 py-1.5 text-base font-medium shadow-sm css-1j8kz45" style="border-radius: 5px;" href="/"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="mr-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M946.5 505L534.6 93.4a31.93 31.93 0 0 0-45.2 0L77.5 505c-12 12-18.8 28.3-18.8 45.3 0 35.3 28.7 64 64 64h43.4V908c0 17.7 14.3 32 32 32H448V716h112v224h265.9c17.7 0 32-14.3 32-32V614.3h43.4c17 0 33.3-6.7 45.3-18.8 24.9-25 24.9-65.5-.1-90.5z"></path></svg>Kembali ke Beranda</a></div>
                </div>
            </div>
        </main>
    </div>
</div>
@include('../footer')@endsection