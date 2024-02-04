<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <title>{{ !$config ? '' : $config->judul_web }}</title>

    <!-- General Meta -->
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow" />

    <!-- Primary Meta Tags -->
    <meta name="title" content="{{ !$config ? '' : $config->judul_web }}">
    <meta name="description" content="{{ !$config ? '' : $config->deskripsi_web }}">
    <meta name="keywords" content="{{ !$config ? '' : $config->keyword }}">
    <meta name="author" content="{{ url('') }}{{ !$config ? '' : $config->logo_header }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ ENV('APP_URL') }}">
    <meta property="og:title" content="{{ !$config ? '' : $config->judul_web }}">
    <meta property="og:description" content="{{ !$config ? '' : $config->deskripsi_web }}">
    <meta property="og:image" content="{{ url('') }}{{ !$config ? '' : $config->logo_header }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ ENV('APP_URL') }}">
    <meta property="twitter:title" content="{{ !$config ? '' : $config->judul_web }}">
    <meta property="twitter:description" content="{{ !$config ? '' : $config->deskripsi_web }}">
    <meta property="twitter:image" content="{{ url('') }}{{ !$config ? '' : $config->logo_header }}">

    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#11143A" />
    <meta name="title" content="{{ !$config ? '' : $config->judul_web }}">
    <meta name="description" content="{{ !$config ? '' : $config->deskripsi_web }}">
    <meta name="keyword" content="{{ !$config ? '' : $config->keyword }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ ENV('APP_URL') }}">
    <meta property="og:title" content="{{ !$config ? '' : $config->judul_web }}">
    <meta property="og:description" content="{{ !$config ? '' : $config->deskripsi_web }}">
    <meta property="og:keyword" content="{{ !$config ? '' : $config->keyword }}">
    <meta name="robots" content="index, follow">
    <meta content="desktop" name="device">
    <meta name="author" content="{{ ENV('APP_NAME') }}">
    <meta name="coverage" content="Worldwide">
    <meta name="apple-mobile-web-app-title" content="{{ ENV('APP_NAME') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:image" content="{{ url('') }}{{ !$config ? '' : $config->logo_header }}">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="auto">
    <link rel="icon" href="{{ url('') }}{{ !$config ? '' : $config->logo_favicon }}">
    <title>{{ !$config ? '' : $config->judul_web }}</title>

    {{-- Asset --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
   
    <link rel="stylesheet" href="{{ asset('assetss/css/toast-order.min.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assetss/css/style-order.css') }}">
    <link rel="stylesheet" href="{{ asset('assetss/css/swiper-order.css') }}">
    <script src="https://code.iconify.design/1/1.0.4/iconify.min.js"></script>
</head>

    @yield('content')
   

    {{-- <script src="https://vanvanstore.com/assets/js/jquery.min.js"></script> --}}
    <script src="{{ asset('assetss/js/jquery-order.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {{-- <script src="https://vanvanstore.com/assets/js/script.js"></script> --}}
    <script src="{{ asset('assetss/js/script-order.js') }}"></script>


</html>
