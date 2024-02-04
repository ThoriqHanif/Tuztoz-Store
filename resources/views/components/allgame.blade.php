<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>{{ !$config ? '' : $config->judul_web }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#313335">
    <meta name="title" content="{{ !$config ? '' : $config->judul_web }}">
    <meta name="description" content="{{ !$config ? '' : $config->deskripsi_web }}">
    <meta name="keyword" content="{{ !$config ? '' : $config->keyword }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ ENV('APP_URL')}}">
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
    <meta property="og:image" content="{{ url('') }}{{ !$config ? '' : $config->og_image }}">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="auto">
    <link rel="icon" href="{{ url('') }}{{ !$config ? '' : $config->logo_favicon }}">
    <title>{{ !$config ? '' : $config->judul_web }}</title>
    <link href="{{ url('') }}/assetss/scss/app.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('') }}/assetss/scss/app.css">
    <link rel="stylesheet" href="{{ url('') }}/assetss/css/app.css">
    <link rel="stylesheet" href="{{ url('') }}/assetss/scss/chatbox.css">
    <link rel="shortcut icon" href="{{ url('') }}{{ !$config ? '' : $config->logo_favicon }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://use.fontawesome.com/6da2e1892f.js"></script>
    <script src="https://kit.fontawesome.com/99f8e55a96.js" crossorigin="anonymous"></script>
    <script src="{{ url('') }}/assetss/js/app.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.2.4/themes/green/pace-theme-flash.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    
       <!-- <script src="/assetss/js/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous" referrerpolicy="no-referrer" type="text/javascript"></script> -->
</head>

<style>@import    url('https://fonts.googleapis.com/css2?family=Oxanium&display=swap');

:root {
    --warna_1: <?= $config->warna1; ?>;
    --warna_2: <?= $config->warna2; ?>;
    --warna_3: <?= $config->warna3; ?>;
    --warna_4: <?= $config->warna4; ?>;
    --warna_5: <?= $config->warna5; ?>;
}

  body {
  font-family: 'Oxanium', 'Arial Narrow', Arial, sans-serif;
  }

a{
    color:white;
}

.akumauweb {
display: grid;
gap: 20px;
}

.border-bottom-kbr {
    border-bottom: 1px solid #ffffff4d;
}

.nav-link {
--tw-text-opacity: 1;
color: rgb(156 163 175 / var(--tw-text-opacity));
display: block;
padding: 0.5rem 1rem;
text-decoration: none;
transition: color 0.15s ease-in-out 0s, background-color 0.15s ease-in-out 0s, border-color 0.15s ease-in-out 0s;
}

.resultsearch .dropdown-item:hover {
background-color: hsla(0, 0%, 100%, .15);
color: #fff;
}

.bg-light {
--bs-bg-opacity: 1;
}



.grecaptcha-badge {
visibility: hidden;
}

a.text-base:hover {
    color: #cdcdcd;
}


.btn-orange {
color: #f39200;
background-color: #f39200 !important;
border-color: #f39200 !important;
}

.btn-akumauweb{
    color: #fff;
background-color: var(--warna_2) !important;
}

.btn-akumauweb:hover{
    color: #fff;
background-color: var(--warna_5) !important;
border-color: var(--warna_5) !important;
}

.btn-primary {
color: #fff;
background-color: var(--warna_5) !important;
border-color: var(--warna_5) !important;
}
.btn-primary:hover {
color: #fff;
background-color: var(--warna_5) !important;
border-color: var(--warna_5) !important;
}

.child-box:hover {
border: 1px solid var(--warna_5);
}

.button-action-payment li.active {
border: 1px solid transparent;
background: rgb(255, 255, 255);
filter: grayscale(0%);
}

.xxs {
font-size: 0.4rem;
}

.button-action-payment li {
border: 1px solid rgba(202, 202, 202, 0.398);
padding: 10px;
border-radius: 0.3em;
margin-bottom: 10px;
position: relative;
display: list-item;
text-align: -webkit-match-parent;
background: rgb(208, 208, 208);
-webkit-filter: grayscale(100%);
/* Safari 6.0 - 9.0 */
filter: grayscale(100%);
}

.button-action-payment input[type="radio"]:checked+.payment-item {
color: var(--warna_5);
}


.strip-primary {
background-color: var(--warna_5);
position: absolute;
width: 60px;
height: 5px;
border-radius: 10px;
}

.wave {
min-height: 100%;
background-attachment: scroll;
/* background-image: url("https://bosstore.my.id/assets/img/wave.svg"); */
background-repeat: no-repeat;
background-position: bottom left, bottom right;
}

.wave2 {
min-height: 100%;
background-attachment: fixed;
/* background-image: url("https://bosstore.my.id/assets/img/wave2.svg"); */
background-repeat: no-repeat;
background-position: top left, top right;
}

.fab-container {
position: fixed;
bottom: 70px;
right: 10px;
z-index: 999;
cursor: pointer;
}

.akumauweb-scroll {
display: flex;display: flex;
flex-wrap: nowrap;
padding-bottom: -0.01rem;
padding-left: 0;
margin-block: 0;
/* overflow-x: auto; */
list-style: none;
text-align: center;
white-space: nowrap;
overflow: auto;
}

.fab-icon-holder {
width: 45px;
height: 45px;
bottom: 140px;
left: 10px;
color: #FFF;
background: #FFF;
/* padding: 1px; */
border-radius: 10px;
text-align: center;
font-size: 30px;
z-index: 99999;
}

.fab-icon-holder:hover {
opacity: 0.8;
}

.fab-icon-holder i {
display: flex;
align-items: center;
justify-content: center;
height: 100%;
font-size: 25px;
color: #ffffff;
}

.fab-options {
list-style-type: none;
margin: 0;
position: absolute;
bottom: 48px;
left: -37px;
opacity: 0;
transition: all 0.3s ease;
transform: scale(0);
transform-origin: 85% bottom;
}

.fab:hover+.fab-options,
.fab-options:hover {
opacity: 1;
transform: scale(1);
}

.fab-options li {
display: flex;
justify-content: flex-start;
padding: 5px;
}

.fab-label {
padding: 2px 5px;
align-self: center;
user-select: none;
white-space: nowrap;
border-radius: 3px;
font-size: 16px;
background: #666666;
color: #ffffff;
box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
margin-left: 10px;
}


.d-flex {
display: -ms-flexbox !important;
display: flex !important;
}

.d-flex2 {
background-color: #212529;
}

.img-chat {
max-width: 100%;
height: auto;
/* background-color: #f89728; */
border-radius: 10px;
}

.btn-topup {
color: #fff3e2 !important;
background-color: #fe6c17 !important;
width: 90%;
max-width: 100px;
}

.btn-topup:hover {
color: #fff3e2 !important;
background-color: #c44d09 !important;
border-color: #c44d09;
width: 90%;
}

.rounded-img-buy {
border-radius: 10% !important;
}

.size-img-buy {
width: 90%;
/* border-radius: 12px; */
height: auto;

}

.size-img-buy-v {
width: 90%;
height: auto;
text-align: center;
}




.akumauweb-hp1 {
flex: 0 0 auto;
width: 100%;
font-size: 15px;
padding: 0%;
font-style: italic;
margin-top: 5px;
line-height: 50%;
}

.akumauweb-hp2 {
flex: 0 0 auto;
width: 100%;
font-size: 14px;
padding: 0%;
font-style: italic;
margin-top: 5px;
line-height: 50%;
}

.akumauweb-hp3 {
flex: 0 0 auto;
width: 100%;
font-size: 14px;
padding: 0%;
font-style: italic;
margin-top: 5px;
margin-left: 0px;
line-height: 20%;
}

.col-bjconfirm {
flex: 0 0 auto;
width: 50%;
font-size: 14px;
text-align: right;
}

.col-bjconfirm2 {
flex: 0 0 auto;
width: 50%;
font-size: 14px;
text-align: left;
}

.col-bjconfirm3 {
flex: 0 0 auto;
width: 100%;
font-size: 11px;
text-align: center;
}

.col-bjinv {
flex: 0 0 auto;
width: 50%;
font-size: 14px;
text-align: right;
}

.col-bjinv2 {
flex: 0 0 auto;
width: 50%;
font-size: 14px;
}

.col-bjinv3 {
flex: 0 0 auto;
width: 50%;
font-size: 20px;
font-weight: bold;
}

.nav-pills .nav-link {
--tw-text-opacity: 1;
color: rgb(156 163 175 / var(--tw-text-opacity));
}

.nav-pills .nav-link:hover {
    color: #fff;
    background-color: transparent;
}

.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: #fff;
    background-color: transparent;
}

/* width */
::-webkit-scrollbar {
    width: 3px;
    height: 5px;
}

/* Track */
::-webkit-scrollbar-track {
    background: transparent;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #4545458a;
    height: 5px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #454545c7;
}

.border-bottom-cat {
    border-bottom: 1px solid #ffffff4d;
}

.nav-pills .nav-link {
    border-radius: 0rem;
    margin: 0px;
}



.scroll-up-btn {
display: none;
position: fixed;
width: 45px;
height: 45px;
bottom: 19px;
right: 10px;
color: #FFF;
border: 1px solid #e10603;
background: #e10603;
border-radius: 10px;
text-align: center;
font-size: 16px;
z-index: 99999;
}
}

.fa-chevron-up {
margin-top: -2px;
}




.carousel-indicators {
position: absolute;
bottom: 0;
margin-bottom: -7px;
}

.carousel-indicators li {
border-radius: 50%;
width: 10px !important;
height: 10px !important;

}

.carousel-indicators .active {
background-color: #f39200;
}



.akumauweb-rounded-sedang {
border-radius: 20px !important;
}

.akumauweb-rounded-kecil {
border-radius: 7px !important;
}

.akumauwebbgblack {
background-color: #2d3238;
}

.bg-akumauweb {
background: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0))
}



.regular-price {
text-decoration: line-through;
color: red;
}

.sale-price {
margin-left: 0px;
}


.text-end {
text-align: right !important;
}

.bg-abu {
background-color: #1e2022; 
}

.border-merah {
border: 1px solid white;
}


.akumauweb-pgimg {
background-color: white;
border-radius: 3px;
border: 5px solid white;
height: 35px;
}

.bg-dark {
--bs-bg-opacity: 1;
background-color: var(--warna_1)!important;
}

.size-img-buy {
width: 60%;
/* border-radius: 12px; */
height: auto;
}
.rounded-img-buy {
border-radius: 10% !important;
}


img, svg {
vertical-align: middle;
}
* {
box-sizing: border-box;
}
*, :after, :before {
box-sizing: border-box;
}
user agent stylesheet
img {
overflow-clip-margin: content-box;
overflow: clip;
}



.bg-transparent {
--bs-bg-opacity: 1;
background-color: transparent!important;
}

.rounded {
border-radius: 0.25rem!important;
}
.bg-transparent {
--bs-bg-opacity: 1;
background-color: transparent!important;
}
.text-center {
text-align: center!important;
}
.p-2 {
padding: 0.5rem!important;
}
.h-100 {
height: 100%!important;
}
.border-0 {
border: 0!important;
}

* {
box-sizing: border-box;
}
*, :after, :before {
box-sizing: border-box;
}
user agent stylesheet
div {
display: block;
}
.g-2, .gy-2 {
--bs-gutter-y: 0.5rem;
}
.g-2, .gx-2 {
--bs-gutter-x: 0.5rem;
}
.row {
--bs-gutter-x: 1.5rem;
--bs-gutter-y: 0;
display: flex;
flex-wrap: wrap;
margin-left: calc(var(--bs-gutter-x)*-.5);
margin-right: calc(var(--bs-gutter-x)*-.5);
margin-top: calc(var(--bs-gutter-y)*-1);
}
.text-white {
--bs-text-opacity: 1;
color: rgba(var(--bs-white-rgb),var(--bs-text-opacity))!important;
}


.pt-12 {
padding-top: 3rem;
}
.px-4 {
padding-left: 1rem;
padding-right: 1rem;
}
.max-w-7xl {
max-width: 80rem;
}
.mx-auto {
margin-left: auto;
margin-right: auto;
}




.btn-topup {
color: #fff3e2 !important;
background-color: #e10603 !important;
width: 90%;
max-width: 100px;
}

.btn-topup:hover {
color: #fff3e2 !important;
background-color: #7e0d0b !important;
width: 90%;
max-width: 100px;
}

.label {
font-weight: bold;
}



        .bg-card {
            color: #fff;
            background: var(--warna_4) !important
        }

        .navbar {
            color: #fff;
            background: var(--warna_2)
        }

        .navbar-toggler {
            font-size: 32px
        }

        .offcanvas.offcanvas-end {
            background: var(--warna_2)
        }

        .navbar-nav .nav-link {
            color: #fff
        }

        .btn-login {
            color: #fff;
            background: #0d6efd !important
        }

      

@media (min-width: 576px)
.content-body {
    margin: 0 auto;
    max-width: 1200px;
    padding-top: 80px;
}
.content-body {
    padding: 0 15px;
    padding-top: 9px;
}


    

        .resultsearch {
            width: 100%;
            inset: 0 auto auto 0;
            margin: 0;
            transform: translate(0, 50px);
            background-color: #000;
            border-color: rgba(0, 0, 0, .15);
            color: #fff;
            overflow-y: auto;
            max-height: 500px
        }

        @media (min-width:768px) {
            .resultsearch {
                width: 50%;
                max-height: 500px;
                transform: translate(220px, 50px)
            }
        }

        .resultsearch .dropdown-item:hover {
            background-color: #000;
            color: #fff
        }

        .search-bar input {
            border: none;
            color: rgb(156 163 175);
            background: #fff;
            border-radius: 9999px
        }

        .search-bar span {
            border: none;
            border-radius: 9999px;
            color: rgb(156 163 175);
            background: #fff
        }

        .search-bar ::placeholder {
            color: #878aad;
            opacity: 1
        }

        .input-box:focus {
            color: #000;
            background: #fff
        }

        .img-search {
            padding-left: 15px
        }

       

        .fab-container {
            position: fixed;
            bottom: 70px;
            right: 10px;
            z-index: 999;
            cursor: pointer
        }

        .fab-icon-holder {
            width: 45px;
            height: 45px;
            bottom: 140px;
            left: 10px;
            color: #fff;
            background: #fff;
            border-radius: 10px;
            text-align: center;
            font-size: 30px;
            z-index: 99999
        }

        .fab-icon-holder:hover {
            opacity: .8
        }

        .fab-icon-holder i {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            font-size: 25px;
            color: #fff
        }

        .fab-options {
            list-style-type: none;
            margin: 0;
            position: absolute;
            bottom: 48px;
            left: -37px;
            opacity: 0;
            transition: all .3s ease;
            transform: scale(0);
            transform-origin: 85% bottom
        }

        .fab:hover+.fab-options,
        .fab-options:hover {
            opacity: 1;
            transform: scale(1)
        }

        .fab-options li {
            display: flex;
            justify-content: flex-start;
            padding: 5px
        }

        .fab-label {
            padding: 2px 5px;
            align-self: center;
            user-select: none;
            white-space: nowrap;
            border-radius: 3px;
            font-size: 16px;
            background: #666;
            color: #fff;
            box-shadow: 0 6px 20px rgba(0, 0, 0, .2);
            margin-left: 10px
        }

        .swiper-container {
            width: 100%;
            overflow: hidden
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 80%;
            height: 100%
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            border-radius: 12px
        }

        @media (max-width:576px) {
            .swiper-slide img {
                display: block;
                width: 100%;
                height: 100% !important;
                border-radius: 12px
            }
        }

        .swiper-pagination {
            margin-top: 30px !important
        }

        .content-body form input {
            outline: none;
            margin-top: -30px;
            border: none !important;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -2px rgba(0, 0, 0, .05) !important
        }

        .row {
            --bs-gutter-x: .5rem
        }

        .product .box {
            margin-bottom: 40px
        }

        @media (max-width:576px) {
            .product .box {
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, .1), 0 2px 4px -1px rgba(0, 0, 0, .06);
                border-radius: .75rem;
                text-align: center;
                background: #646464;
                display: block;
                text-decoration: none;
                color: #fff;
                height: 11rem
            }
        }

        @media (min-width:576px) {
            .product .box {
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, .1), 0 2px 4px -1px rgba(0, 0, 0, .06);
                border-radius: .75rem;
                text-align: center;
                background: #646464;
                display: block;
                text-decoration: none;
                color: #fff;
                height: 15rem
            }
        }

        .card-product {
            margin-bottom: -30px;
            gap: .5rem
        }

        @media (max-width:576px) {
            .product p {
                font-size: 12px !important
            }
        }

        .product .box img {
            width: 100%;
            height: 100%;
            display: block;
            margin: auto;
            object-fit: cover;
            border-radius: .75rem
        }

    

        .footer img {
            padding-top: 2.5rem 0
        }

        .text-copyright {
            color: #718096;
            font-size: .875rem
        }

        .sosmed {
            margin-bottom: 20px
        }

        .sosmed a {
            margin: 0 10px;
            text-decoration: none;
            color: #fff
        }

        .sosmed i {
            font-size: 24px
        }

        .item .metode {
            margin: 5px 0;
            background: #fff;
            border-radius: 8px;
            padding: .75rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, .1), 0 2px 4px -1px rgba(0, 0, 0, .06) !important
        }

        .my-form label {
            font-size: 1rem
        }

        .my-form .form-control {
            background: #fefefe;
            margin-top: 6px;
            border: 2px solid #fefefe !important
        }

        .my-form .form-control:active,
        .my-form .form-control:focus {
            border-color: #fefefe !important;
            box-shadow: none !important;
            outline: none !important
        }

        .method-list {
            overflow: hidden;
            cursor: pointer
        }

        .method-list.active {
            border-color: var(--warna_2) !important
        }

        .method-list.active:before {
            display: inline-block;
            content: 'L';
            position: relative;
            background: var(--warna_2);
            margin-left: -12px;
            height: 53px;
            line-height: 40px;
            width: 20px;
            text-align: center;
            color: #fff;
            top: -23px;
            transform: rotate(45deg) scaleX(-1)
        }

        .method-list.active table {
            margin-top: -53px
        }

        .search-item {
            width: 50%
        }

        @media (min-width:768px) {
            .search-item {
                width: 50%;
                margin-left: 100px
            }
        }

       
       
        .flex-1 {
            flex: 1 1 0%
        }

        .card {
            border: none !important;
            background-color: transparent !important
        }

        .bottom-6 {
            bottom: 3rem !important
        }

        .absolute {
            position: absolute !important
        }

        .mobile {
            backdrop-filter: blur(1px);
            border-radius: 20px 20px 20px 20px;
            height: 60px;
            font-weigth: bold;
            padding: 10px;
            background-color: #000;
            background-color: rgba(0, 0, 0, .2)
        }
        
        
        
        
           
        //*tailwinds*//
   
/*a
! tailwindcss v3.2.6 | MIT License | https://tailwindcss.com
*/

html {
    line-height: 1.5;
    -webkit-text-size-adjust: 100%;
    font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
    font-feature-settings: normal;
}
hr {
    height: 0;
    color: inherit;
    border-top-width: 1px;
}
abbr:where([title]) {
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
}
h1,
h2,
h3,
h4,
h5,
h6 {
    font-size: inherit;
    font-weight: inherit;
}

b,
strong {
    font-weight: bolder;
}
code,
kbd,
pre,
samp {
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
    font-size: 1em;
}
small {
    font-size: 80%;
}
sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}
sub {
    bottom: -0.25em;
}
sup {
    top: -0.5em;
}
table {
    text-indent: 0;
    border-color: inherit;
    border-collapse: collapse;
}
button,
input,
optgroup,
select,
textarea {
    font-family: inherit;
    font-size: 100%;
    font-weight: inherit;
    line-height: inherit;
    color: inherit;
    margin: 0;
    padding: 0;
}
button,
select {
    text-transform: none;
}
[type="button"],
[type="reset"],
[type="submit"],
button {
    -webkit-appearance: button;
    background-color: transparent;
    background-image: none;
}
:-moz-focusring {
    outline: auto;
}
:-moz-ui-invalid {
    box-shadow: none;
}
progress {
    vertical-align: baseline;
}
::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
    height: auto;
}
[type="search"] {
    -webkit-appearance: textfield;
    outline-offset: -2px;
}
::-webkit-search-decoration {
    -webkit-appearance: none;
}
::-webkit-file-upload-button {
    -webkit-appearance: button;
    font: inherit;
}
summary {
    display: list-item;
}
blockquote,
dd,
dl,
figure,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
p,
pre {
    margin: 0;
}
fieldset {
    margin: 0;
}
fieldset,
legend {
    padding: 0;
}
menu,
ol,
ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
textarea {
    resize: vertical;
}
input::-moz-placeholder,
textarea::-moz-placeholder {
    opacity: 1;
    color: #9ca3af;
}
input::placeholder,
textarea::placeholder {
    opacity: 1;
    color: #9ca3af;
}
[role="button"],
button {
    cursor: pointer;
}
:disabled {
    cursor: default;
}
audio,
canvas,
embed,
iframe,
img,
object,
svg,
video {
    display: block;
    vertical-align: middle;
}
img,
video {
    max-width: 100%;
    height: auto;
}
[hidden] {
    display: none;
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
}
.pointer-events-none {
    pointer-events: none;
}
.pointer-events-auto {
    pointer-events: auto;
}
.fixed {
    position: fixed;
}
.\!absolute {
    position: absolute !important;
}
.absolute {
    position: absolute;
}
.relative {
    position: relative;
}
.sticky {
    position: sticky;
}
.inset-0 {
    top: 0;
    bottom: 0;
}
.inset-0,
.inset-x-0 {
    right: 0;
    left: 0;
}
.inset-y-0 {
    top: 0;
    bottom: 0;
}
.-right-\[3px\] {
    right: -3px;
}
.bottom-0 {
    bottom: 0;
}
.left-0 {
    left: 0;
}
.left-5 {
    left: 1.25rem;
}
.left-6 {
    left: 1.5rem;
}
.right-0 {
    right: 0;
}
.right-6 {
    right: 1.5rem;
}
.right-8 {
    right: 2rem;
}
.top-0 {
    top: 0;
}
.top-20 {
    top: 5rem;
}
.top-4 {
    top: 1rem;
}
.top-\[18px\] {
    top: 18px;
}
.-z-10 {
    z-index: -10;
}
.z-0 {
    z-index: 0;
}
.z-10 {
    z-index: 10;
}
.z-20 {
    z-index: 20;
}
.z-30 {
    z-index: 30;
}
.z-40 {
    z-index: 40;
}
.z-50 {
    z-index: 50;
}
.z-\[60\] {
    z-index: 60;
}
.z-\[9\] {
    z-index: 9;
}
.order-1 {
    order: 1;
}
.order-2 {
    order: 2;
}
.col-span-1 {
    grid-column: span 1 / span 1;
}
.col-span-12 {
    grid-column: span 12 / span 12;
}
.col-span-2 {
    grid-column: span 2 / span 2;
}
.col-span-5 {
    grid-column: span 5 / span 5;
}
.\!m-0 {
    margin: 0 !important;
}
.m-0 {
    margin: 0;
}
.m-4 {
    margin: 1rem;
}
.m-auto {
    margin: auto;
}
.mx-2 {
    margin-left: 0.5rem;
    margin-right: 0.5rem;
}
.mx-6 {
    margin-left: 1.5rem;
    margin-right: 1.5rem;
}
.mx-auto {
    margin-left: auto;
    margin-right: auto;
}
.my-2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}
.my-20 {
    margin-top: 5rem;
    margin-bottom: 5rem;
}
.my-3 {
    margin-top: 0.75rem;
    margin-bottom: 0.75rem;
}
.my-4 {
    margin-top: 1rem;
    margin-bottom: 1rem;
}
.my-6 {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
}
.my-7 {
    margin-top: 1.75rem;
    margin-bottom: 1.75rem;
}
.my-8 {
    margin-top: 2rem;
    margin-bottom: 2rem;
}
.my-auto {
    margin-top: auto;
    margin-bottom: auto;
}
.-mb-px {
    margin-bottom: -1px;
}
.-ml-1 {
    margin-left: -0.25rem;
}
.-ml-px {
    margin-left: -1px;
}
.-mr-10 {
    margin-right: -2.5rem;
}
.-mr-12 {
    margin-right: -3rem;
}
.-mt-16 {
    margin-top: -4rem;
}
.mb-1 {
    margin-bottom: 0.25rem;
}
.mb-1\.5 {
    margin-bottom: 0.375rem;
}
.mb-10 {
    margin-bottom: 2.5rem;
}
.mb-2 {
    margin-bottom: 0.5rem;
}
.mb-3 {
    margin-bottom: 0.75rem;
}
.mb-4 {
    margin-bottom: 1rem;
}
.mb-5 {
    margin-bottom: 1.25rem;
}
.mb-6 {
    margin-bottom: 1.5rem;
}
.mb-8 {
    margin-bottom: 2rem;
}
.mb-\[20px\] {
    margin-bottom: 20px;
}
.ml-12 {
    margin-left: 3rem;
}
.ml-2 {
    margin-left: 0.5rem;
}
.ml-3 {
    margin-left: 0.75rem;
}
.ml-4 {
    margin-left: 1rem;
}
.ml-5 {
    margin-left: 1.25rem;
}
.mr-2 {
    margin-right: 0.5rem;
}
.mr-3 {
    margin-right: 0.75rem;
}
.mr-4 {
    margin-right: 1rem;
}
.mr-5 {
    margin-right: 1.25rem;
}
.mt-1 {
    margin-top: 0.25rem;
}
.mt-10 {
    margin-top: 2.5rem;
}
.mt-12 {
    margin-top: 3rem;
}
.mt-2 {
    margin-top: 0.5rem;
}
.mt-3 {
    margin-top: 0.75rem;
}
.mt-4 {
    margin-top: 1rem;
}
.mt-5 {
    margin-top: 1.25rem;
}
.mt-6 {
    margin-top: 1.5rem;
}
.mt-7 {
    margin-top: 1.75rem;
}
.mt-8 {
    margin-top: 2rem;
}
.mt-\[20px\] {
    margin-top: 20px;
}
.mt-\[30px\] {
    margin-top: 30px;
}
.block {
    display: block;
}
.inline-block {
    display: inline-block;
}
.inline {
    display: inline;
}
.flex {
    display: flex;
}
.inline-flex {
    display: inline-flex;
}
.table {
    display: table;
}
.flow-root {
    display: flow-root;
}
.grid {
    display: grid;
}
.contents {
    display: contents;
}
.hidden {
    display: none;
}
.h-0 {
    height: 0;
}
.h-10 {
    height: 2.5rem;
}
.h-11 {
    height: 5rem;
}
.h-12 {
    height: 3rem;
}
.h-14 {
    height: 3.5rem;
}
.h-16 {
    height: 4rem;
}
.h-24 {
    height: 6rem;
}
.h-3 {
    height: 0.75rem;
}
.h-32 {
    height: 8rem;
}
.h-4 {
    height: 1rem;
}
.h-40 {
    height: 10rem;
}
.h-5 {
    height: 1.25rem;
}
.h-56 {
    height: 14rem;
}
.h-6 {
    height: 1.5rem;
}
.h-64 {
    height: 16rem;
}
.h-8 {
    height: 2rem;
}
.h-\[100vh\] {
    height: 100vh;
}
.h-\[16px\] {
    height: 16px;
}
.h-\[24px\] {
    height: 24px;
}
.h-\[280px\] {
    height: 280px;
}
.h-\[460px\] {
    height: 460px;
}
.h-\[5\.7rem\] {
    height: 5.7rem;
}
.h-\[9\.4rem\] {
    height: 9.4rem;
}
.h-auto {
    height: auto;
}
.h-full {
    height: 100%;
}
.h-px {
    height: 1px;
}
.max-h-0 {
    max-height: 0;
}
.max-h-\[1000px\] {
    max-height: 1000px;
}
.max-h-\[9rem\] {
    max-height: 9rem;
}
.max-h-screen {
    max-height: 100vh;
}
.min-h-\[50vh\] {
    min-height: 50vh;
}
.min-h-\[60vh\] {
    min-height: 60vh;
}
.min-h-\[65vh\] {
    min-height: 65vh;
}
.min-h-\[70vh\] {
    min-height: 70vh;
}
.min-h-full {
    min-height: 100%;
}
.min-h-screen {
    min-height: 100vh;
}
.\!w-full {
    width: 100% !important;
}
.w-1\/2 {
    width: 50%;
}
.w-10 {
    width: 2.5rem;
}
.w-11 {
    width: 2.75rem;
}
.w-12 {
    width: 3rem;
}
.w-14 {
    width: 3.5rem;
}
.w-24 {
    width: 6rem;
}
.w-28 {
    width: 7rem;
}
.w-3 {
    width: 0.75rem;
}
.w-4 {
    width: 1rem;
}
.w-5 {
    width: 1.25rem;
}
.w-56 {
    width: 14rem;
}
.w-6 {
    width: 1.5rem;
}
.w-72 {
    width: 18rem;
}
.w-8 {
    width: 2rem;
}
.w-80 {
    width: 20rem;
}
.w-\[16px\] {
    width: 16px;
}
.w-\[24px\] {
    width: 24px;
}
.w-\[280px\] {
    width: 280px;
}
.w-\[80px\] {
    width: 80px;
}
.w-auto {
    width: auto;
}
.w-full {
    width: 100%;
}
.w-screen {
    width: 100vw;
}
.min-w-0 {
    min-width: 0;
}
.max-w-7xl {
    max-width: 80rem;
}
.max-w-\[15rem\] {
    max-width: 15rem;
}
.max-w-\[2\.5rem\] {
    max-width: 2.5rem;
}
.max-w-\[3\.5rem\] {
    max-width: 3.5rem;
}
.max-w-full {
    max-width: 100%;
}
.max-w-md {
    max-width: 28rem;
}
.max-w-xl {
    max-width: 36rem;
}
.max-w-xs {
    max-width: 20rem;
}
.flex-1 {
    flex: 1 1 0%;
}
.flex-shrink {
    flex-shrink: 1;
}
.flex-shrink-0,
.shrink-0 {
    flex-shrink: 0;
}
.flex-grow,
.grow {
    flex-grow: 1;
}
.table-auto {
    table-layout: auto;
}
.origin-\[0\] {
    transform-origin: 0;
}
.origin-top-right {
    transform-origin: top right;
}
.-translate-x-full {
    --tw-translate-x: -100%;
}
.-translate-x-full,
.-translate-y-1\/2 {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.-translate-y-1\/2 {
    --tw-translate-y: -50%;
}
.-translate-y-3 {
    --tw-translate-y: -0.75rem;
}
.-translate-y-3,
.translate-x-0 {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.translate-x-0 {
    --tw-translate-x: 0px;
}
.translate-y-0 {
    --tw-translate-y: 0px;
}
.rotate-0,
.translate-y-0 {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.rotate-0 {
    --tw-rotate: 0deg;
}
.rotate-180 {
    --tw-rotate: 180deg;
}
.rotate-180,
.scale-100 {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.scale-100 {
    --tw-scale-x: 1;
    --tw-scale-y: 1;
}
.scale-75 {
    --tw-scale-x: 0.75;
    --tw-scale-y: 0.75;
}
.scale-75,
.scale-95 {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.scale-95 {
    --tw-scale-x: 0.95;
    --tw-scale-y: 0.95;
}
.transform {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
@keyframes  ping {
    75%,
    to {
        transform: scale(2);
        opacity: 0;
    }
}
.animate-ping {
    animation: ping 1s cubic-bezier(0, 0, 0.2, 1) infinite;
}
@keyframes  pulse {
    50% {
        opacity: 0.5;
    }
}
.animate-pulse {
    animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}
@keyframes  spin {
    to {
        transform: rotate(1turn);
    }
}
.animate-spin {
    animation: spin 1s linear infinite;
}
.cursor-not-allowed {
    cursor: not-allowed;
}
.cursor-pointer {
    cursor: pointer;
}
.appearance-none {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.grid-flow-col {
    grid-auto-flow: column;
}
.grid-cols-1 {
    grid-template-columns: repeat(1, minmax(0, 1fr));
}
.grid-cols-12 {
    grid-template-columns: repeat(12, minmax(0, 1fr));
}
.grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
}
.grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
}
.grid-cols-6 {
    grid-template-columns: repeat(6, minmax(0, 1fr));
}
.flex-row {
    flex-direction: row;
}
.flex-row-reverse {
    flex-direction: row-reverse;
}
.flex-col {
    flex-direction: column;
}
.flex-col-reverse {
    flex-direction: column-reverse;
}
.content-center {
    align-content: center;
}
.content-start {
    align-content: flex-start;
}
.content-end {
    align-content: flex-end;
}
.items-start {
    align-items: flex-start;
}
.items-end {
    align-items: flex-end;
}
.items-center {
    align-items: center;
}
.items-stretch {
    align-items: stretch;
}
.justify-start {
    justify-content: flex-start;
}
.justify-end {
    justify-content: flex-end;
}
.justify-center {
    justify-content: center;
}
.justify-between {
    justify-content: space-between;
}
.justify-around {
    justify-content: space-around;
}
.\!gap-0 {
    gap: 0 !important;
}
.gap-1 {
    gap: 0.25rem;
}
.gap-1\.5 {
    gap: 0.375rem;
}
.gap-12 {
    gap: 3rem;
}
.gap-2 {
    gap: 0.5rem;
}
.gap-3 {
    gap: 0.75rem;
}
.gap-4 {
    gap: 1rem;
}
.gap-5 {
    gap: 1.25rem;
}
.gap-6 {
    gap: 1.5rem;
}
.gap-8 {
    gap: 2rem;
}
.gap-x-4 {
    -moz-column-gap: 1rem;
    column-gap: 1rem;
}
.gap-y-10 {
    row-gap: 2.5rem;
}
.gap-y-4 {
    row-gap: 1rem;
}
.gap-y-8 {
    row-gap: 2rem;
}
.-space-x-px > :not([hidden]) ~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(-1px * var(--tw-space-x-reverse));
    margin-left: calc(-1px * calc(1 - var(--tw-space-x-reverse)));
}
.space-x-2 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(0.5rem * var(--tw-space-x-reverse));
    margin-left: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)));
}
.space-x-6 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(1.5rem * var(--tw-space-x-reverse));
    margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)));
}
.space-y-1 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(0.25rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(0.25rem * var(--tw-space-y-reverse));
}
.space-y-2 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
}
.space-y-3 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(0.75rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(0.75rem * var(--tw-space-y-reverse));
}
.space-y-4 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1rem * var(--tw-space-y-reverse));
}
.space-y-5 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1.25rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1.25rem * var(--tw-space-y-reverse));
}
.divide-y > :not([hidden]) ~ :not([hidden]) {
    --tw-divide-y-reverse: 0;
    border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
    border-bottom-width: calc(1px * var(--tw-divide-y-reverse));
}
.divide-gray-100 > :not([hidden]) ~ :not([hidden]) {
    --tw-divide-opacity: 1;
    border-color: rgb(243 244 246 / var(--tw-divide-opacity));
}
.overflow-hidden {
    overflow: hidden;
}
.overflow-x-auto {
    overflow-x: auto;
}
.overflow-y-auto {
    overflow-y: auto;
}
.overflow-x-hidden {
    overflow-x: hidden;
}
.overflow-x-scroll {
    overflow-x: scroll;
}
.overflow-y-scroll {
    overflow-y: scroll;
}
.truncate {
    overflow: hidden;
    white-space: nowrap;
}
.text-ellipsis,
.truncate {
    text-overflow: ellipsis;
}
.whitespace-nowrap {
    white-space: nowrap;
}
.whitespace-pre-line {
    white-space: pre-line;
}
.break-words {
    overflow-wrap: break-word;
}
.\!rounded-\[50px\] {
    border-radius: 50px !important;
}
.\!rounded-full {
    border-radius: 9999px !important;
}
.\!rounded-lg {
    border-radius: 0.5rem !important;
}
.rounded {
    border-radius: 0.25rem;
}
.rounded-2xl {
    border-radius: 1rem;
}
.rounded-3xl {
    border-radius: 1.5rem;
}
.rounded-\[15px\] {
    border-radius: 15px;
}
.rounded-\[1rem\] {
    border-radius: 1rem;
}
.rounded-\[8px\] {
    border-radius: 8px;
}
.rounded-full {
    border-radius: 9999px;
}
.rounded-lg {
    border-radius: 0.5rem;
}
.rounded-md {
    border-radius: 0.375rem;
}
.rounded-none {
    border-radius: 0;
}
.rounded-xl {
    border-radius: 0.75rem;
}
.rounded-b-lg {
    border-bottom-right-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
}
.rounded-l-full {
    border-top-left-radius: 9999px;
    border-bottom-left-radius: 9999px;
}
.rounded-l-md {
    border-top-left-radius: 0.375rem;
    border-bottom-left-radius: 0.375rem;
}
.rounded-r-full {
    border-top-right-radius: 9999px;
    border-bottom-right-radius: 9999px;
}
.rounded-r-md {
    border-top-right-radius: 0.375rem;
    border-bottom-right-radius: 0.375rem;
}
.rounded-t-\[20px\] {
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
}
.rounded-t-lg {
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
}
.rounded-bl-\[15px\] {
    border-bottom-left-radius: 15px;
}
.rounded-bl-full {
    border-bottom-left-radius: 9999px;
}
.rounded-br-\[15px\] {
    border-bottom-right-radius: 15px;
}
.rounded-tr-\[3000px\] {
    border-top-right-radius: 3000px;
}
.border {
    border-width: 1px;
}
.border-0 {
    border-width: 0;
}
.border-2 {
    border-width: 2px;
}
.\!border-b {
    border-bottom-width: 1px !important;
}
.border-b {
    border-bottom-width: 1px;
}
.border-b-2 {
    border-bottom-width: 2px;
}
.border-r {
    border-right-width: 1px;
}
.border-t {
    border-top-width: 1px;
}
.border-t-2 {
    border-top-width: 2px;
}
.\!border-none {
    border-style: none !important;
}
.border-none {
    border-style: none;
}
.border-\[\#626274\] {
    --tw-border-opacity: 1;
    border-color: rgb(98 98 116 / var(--tw-border-opacity));
}
.border-gray-300 {
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219 / var(--tw-border-opacity));
}
.border-gray-500 {
    --tw-border-opacity: 1;
    border-color: rgb(107 114 128 / var(--tw-border-opacity));
}
.border-gray-600 {
    --tw-border-opacity: 1;
    border-color: rgb(75 85 99 / var(--tw-border-opacity));
}
.border-gray-700 {
    --tw-border-opacity: 1;
    border-color: rgb(55 65 81 / var(--tw-border-opacity));
}
.border-indigo-500 {
    --tw-border-opacity: 1;
    border-color: rgb(99 102 241 / var(--tw-border-opacity));
}
.border-transparent {
    border-color: transparent;
}
.border-white\/30 {
    border-color: hsla(0, 0%, 100%, 0.3);
}
.\!bg-gray-300 {
    --tw-bg-opacity: 1 !important;
    background-color: rgb(209 213 219 / var(--tw-bg-opacity)) !important;
}
.bg-\[\#22a328\] {
    --tw-bg-opacity: 1;
    background-color: rgb(34 163 40 / var(--tw-bg-opacity));
}
.bg-\[\#2abe31\] {
    --tw-bg-opacity: 1;
    background-color: rgb(42 190 49 / var(--tw-bg-opacity));
}
.bg-\[\#5067e4\] {
    --tw-bg-opacity: 1;
    background-color: rgb(80 103 228 / var(--tw-bg-opacity));
}
.bg-\[\#e44a4a\] {
    --tw-bg-opacity: 1;
    background-color: rgb(228 74 74 / var(--tw-bg-opacity));
}
.bg-\[\#e7fea2\] {
    --tw-bg-opacity: 1;
    background-color: rgb(231 254 162 / var(--tw-bg-opacity));
}
.bg-\[\#ffc5c5\] {
    --tw-bg-opacity: 1;
    background-color: rgb(255 197 197 / var(--tw-bg-opacity));
}
.bg-\[\#fff2c5\] {
    --tw-bg-opacity: 1;
    background-color: rgb(255 242 197 / var(--tw-bg-opacity));
}
.bg-backgroundSecondary {
    --tw-bg-opacity: 1;
    background-color: rgb(50 50 62 / var(--tw-bg-opacity));
}
.bg-black {
    --tw-bg-opacity: 1;
    background-color: rgb(0 0 0 / var(--tw-bg-opacity));
}
.bg-blue-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(219 234 254 / var(--tw-bg-opacity));
}
.bg-btnPurple {
    --tw-bg-opacity: 1;
    background-color: rgb(112 127 235 / var(--tw-bg-opacity));
}
.bg-btnPurple\/70 {
    background-color: rgba(112, 127, 235, 0.7);
}
.bg-gray-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}
.bg-gray-300 {
    --tw-bg-opacity: 1;
    background-color: rgb(209 213 219 / var(--tw-bg-opacity));
}
.bg-gray-600\/75 {
    background-color: rgba(75, 85, 99, 0.75);
}
.bg-gray-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(55 65 81 / var(--tw-bg-opacity));
}
.bg-indigo-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(238 242 255 / var(--tw-bg-opacity));
}
.bg-orange-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(255 237 213 / var(--tw-bg-opacity));
}
.bg-orange-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(234 88 12 / var(--tw-bg-opacity));
}
.bg-transparent {
    background-color: transparent;
}
.bg-white {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}
.bg-white\/80 {
    background-color: hsla(0, 0%, 100%, 0.8);
}
.bg-opacity-0 {
    --tw-bg-opacity: 0;
}
.bg-opacity-100 {
    --tw-bg-opacity: 1;
}
.bg-opacity-40 {
    --tw-bg-opacity: 0.4;
}
.bg-gradient-to-r {
    background-image: linear-gradient(to right, var(--tw-gradient-stops));
}
.bg-none {
    background-image: none;
}
.from-gray-400 {
    --tw-gradient-from: #9ca3af;
    --tw-gradient-to: rgba(156, 163, 175, 0);
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}
.fill-white {
    fill: #fff;
}
.object-contain {
    -o-object-fit: contain;
    object-fit: contain;
}
.\!object-cover {
    -o-object-fit: cover !important;
    object-fit: cover !important;
}
.object-cover {
    -o-object-fit: cover;
    object-fit: cover;
}
.object-center {
    -o-object-position: center;
    object-position: center;
}
.object-left {
    -o-object-position: left;
    object-position: left;
}
.object-right {
    -o-object-position: right;
    object-position: right;
}
.\!p-0 {
    padding: 0 !important;
}
.\!p-4 {
    padding: 1rem !important;
}
.p-0 {
    padding: 0;
}
.p-1 {
    padding: 0.25rem;
}
.p-2 {
    padding: 0.5rem;
}
.p-2\.5 {
    padding: 0.625rem;
}
.p-3 {
    padding: 0.75rem;
}
.p-4 {
    padding: 1rem;
}
.p-5 {
    padding: 1.25rem;
}
.p-6 {
    padding: 1.5rem;
}
.p-8 {
    padding: 2rem;
}
.\!px-0 {
    padding-left: 0 !important;
    padding-right: 0 !important;
}
.\!px-3 {
    padding-left: 0.75rem !important;
    padding-right: 0.75rem !important;
}
.\!px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
}
.\!py-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
}
.\!py-1\.5 {
    padding-top: 0.375rem !important;
    padding-bottom: 0.375rem !important;
}
.px-0 {
    padding-left: 0;
    padding-right: 0;
}
.px-1 {
    padding-left: 0.25rem;
    padding-right: 0.25rem;
}
.px-14 {
    padding-left: 3.5rem;
    padding-right: 3.5rem;
}
.px-2 {
    padding-left: 0.5rem;
    padding-right: 0.5rem;
}
.px-2\.5 {
    padding-left: 0.625rem;
    padding-right: 0.625rem;
}
.px-20 {
    padding-left: 5rem;
    padding-right: 5rem;
}
.px-3 {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
}
.px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
}
.px-5 {
    padding-left: 1.25rem;
    padding-right: 1.25rem;
}
.px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
}
.px-\[0\.75rem\] {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
}
.px-\[18px\] {
    padding-left: 18px;
    padding-right: 18px;
}
.py-0 {
    padding-top: 0;
    padding-bottom: 0;
}
.py-1 {
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
}
.py-1\.5 {
    padding-top: 0.375rem;
    padding-bottom: 0.375rem;
}
.py-10 {
    padding-top: 2.5rem;
    padding-bottom: 2.5rem;
}
.py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}
.py-2\.5 {
    padding-top: 0.625rem;
    padding-bottom: 0.625rem;
}
.py-24 {
    padding-top: 6rem;
    padding-bottom: 6rem;
}
.py-3 {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
}
.py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
}
.py-5 {
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
}
.py-6 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}
.py-8 {
    padding-top: 2rem;
    padding-bottom: 2rem;
}
.py-\[0\.5rem\] {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}
.py-\[5\.5rem\] {
    padding-top: 5.5rem;
    padding-bottom: 5.5rem;
}
.pb-0 {
    padding-bottom: 0;
}
.pb-1 {
    padding-bottom: 0.25rem;
}
.pb-14 {
    padding-bottom: 3.5rem;
}
.pb-16 {
    padding-bottom: 4rem;
}
.pb-2 {
    padding-bottom: 0.5rem;
}
.pb-2\.5 {
    padding-bottom: 0.625rem;
}
.pb-20 {
    padding-bottom: 5rem;
}
.pb-24 {
    padding-bottom: 6rem;
}
.pb-3 {
    padding-bottom: 0.75rem;
}
.pb-32 {
    padding-bottom: 8rem;
}
.pb-4 {
    padding-bottom: 1rem;
}
.pb-5 {
    padding-bottom: 1.25rem;
}
.pb-8,
.pb-\[2rem\] {
    padding-bottom: 2rem;
}
.pb-\[3px\] {
    padding-bottom: 3px;
}
.pl-10 {
    padding-left: 2.5rem;
}
.pl-2 {
    padding-left: 0.5rem;
}
.pl-3 {
    padding-left: 0.75rem;
}
.pl-4 {
    padding-left: 1rem;
}
.pl-5 {
    padding-left: 1.25rem;
}
.pl-\[3\.2rem\] {
    padding-left: 3.2rem;
}
.pr-0 {
    padding-right: 0;
}
.pr-10 {
    padding-right: 2.5rem;
}
.pr-2 {
    padding-right: 0.5rem;
}
.pr-20 {
    padding-right: 5rem;
}
.pr-3 {
    padding-right: 0.75rem;
}
.pr-4 {
    padding-right: 1rem;
}
.pr-5 {
    padding-right: 1.25rem;
}
.pr-\[3\.2rem\] {
    padding-right: 3.2rem;
}
.pt-0 {
    padding-top: 0;
}
.pt-1 {
    padding-top: 0.25rem;
}
.pt-10 {
    padding-top: 2.5rem;
}
.pt-12 {
    padding-top: 3rem;
}
.pt-14 {
    padding-top: 3.5rem;
}
.pt-16 {
    padding-top: 4rem;
}
.pt-2 {
    padding-top: 0.5rem;
}
.pt-3 {
    padding-top: 0.75rem;
}
.pt-4 {
    padding-top: 1rem;
}
.pt-5 {
    padding-top: 1.25rem;
}
.pt-6 {
    padding-top: 1.5rem;
}
.pt-8 {
    padding-top: 2rem;
}
.text-left {
    text-align: left;
}
.text-center {
    text-align: center;
}
.text-right {
    text-align: right;
}
.text-justify {
    text-align: justify;
}
.text-start {
    text-align: start;
}
.text-2xl {
    font-size: 1.5rem;
    line-height: 2rem;
}
.text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem;
}
.text-\[0\.92rem\] {
    font-size: 0.92rem;
}
.text-\[10px\] {
    font-size: 10px;
}
.text-\[12px\] {
    font-size: 12px;
}
.text-\[13px\] {
    font-size: 13px;
}
.text-\[14px\] {
    font-size: 14px;
}
.text-\[15px\] {
    font-size: 15px;
}
.text-\[18px\] {
    font-size: 18px;
}
.text-\[20px\] {
    font-size: 20px;
}
.text-\[24px\] {
    font-size: 24px;
}
.text-\[40px\] {
    font-size: 40px;
}
.text-base {
    font-size: 1rem;
    line-height: 1.5rem;
}
.text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem;
}
.text-sm {
    font-size: 0.875rem;
    line-height: 1.25rem;
}
.text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
}
.text-xs {
    font-size: 0.75rem;
    line-height: 1rem;
}
.font-bold {
    font-weight: 700;
}
.font-extrabold {
    font-weight: 800;
}
.font-light {
    font-weight: 300;
}
.font-medium {
    font-weight: 500;
}
.font-normal {
    font-weight: 400;
}
.font-semibold {
    font-weight: 600;
}
.uppercase {
    text-transform: uppercase;
}
.capitalize {
    text-transform: capitalize;
}
.italic {
    font-style: italic;
}
.leading-4 {
    line-height: 1rem;
}
.leading-5 {
    line-height: 1.25rem;
}
.leading-6 {
    line-height: 1.5rem;
}
.leading-7 {
    line-height: 1.75rem;
}
.leading-\[150\%\] {
    line-height: 150%;
}
.leading-\[20px\] {
    line-height: 20px;
}
.leading-\[26px\] {
    line-height: 26px;
}
.leading-\[30\.8px\] {
    line-height: 30.8px;
}
.leading-\[66\.8px\] {
    line-height: 66.8px;
}
.leading-normal {
    line-height: 1.5;
}
.tracking-\[0\.1em\] {
    letter-spacing: 0.1em;
}
.tracking-\[0\.2em\] {
    letter-spacing: 0.2em;
}
.tracking-\[0\.3px\] {
    letter-spacing: 0.3px;
}
.tracking-tight {
    letter-spacing: -0.025em;
}
.text-\[\#E3FDE4\] {
    --tw-text-opacity: 1;
    color: rgb(227 253 228 / var(--tw-text-opacity));
}
.text-black {
    --tw-text-opacity: 1;
    color: rgb(0 0 0 / var(--tw-text-opacity));
}
.text-blue-700 {
    --tw-text-opacity: 1;
    color: rgb(29 78 216 / var(--tw-text-opacity));
}
.text-btnPurple {
    --tw-text-opacity: 1;
    color: rgb(112 127 235 / var(--tw-text-opacity));
}
.text-gray-200 {
    --tw-text-opacity: 1;
    color: rgb(229 231 235 / var(--tw-text-opacity));
}
.text-gray-300 {
    --tw-text-opacity: 1;
    color: rgb(209 213 219 / var(--tw-text-opacity));
}
.text-gray-400 {
    --tw-text-opacity: 1;
    color: rgb(156 163 175 / var(--tw-text-opacity));
}
.text-gray-500 {
    --tw-text-opacity: 1;
    color: rgb(107 114 128 / var(--tw-text-opacity));
}
.text-gray-600 {
    --tw-text-opacity: 1;
    color: rgb(75 85 99 / var(--tw-text-opacity));
}
.text-gray-900 {
    --tw-text-opacity: 1;
    color: rgb(17 24 39 / var(--tw-text-opacity));
}
.text-green-500 {
    --tw-text-opacity: 1;
    color: rgb(34 197 94 / var(--tw-text-opacity));
}
.text-green-600 {
    --tw-text-opacity: 1;
    color: rgb(22 163 74 / var(--tw-text-opacity));
}
.text-indigo-600 {
    --tw-text-opacity: 1;
    color: rgb(79 70 229 / var(--tw-text-opacity));
}
.text-info {
    --tw-text-opacity: 1;
    color: rgb(34 211 238 / var(--tw-text-opacity));
}
.text-orange-700 {
    --tw-text-opacity: 1;
    color: rgb(194 65 12 / var(--tw-text-opacity));
}
.text-red-400 {
    --tw-text-opacity: 1;
    color: rgb(248 113 113 / var(--tw-text-opacity));
}
.text-red-600 {
    --tw-text-opacity: 1;
    color: rgb(220 38 38 / var(--tw-text-opacity));
}
.text-red-700 {
    --tw-text-opacity: 1;
    color: rgb(185 28 28 / var(--tw-text-opacity));
}
.text-slate-900 {
    --tw-text-opacity: 1;
    color: rgb(15 23 42 / var(--tw-text-opacity));
}
.text-white {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
}
.text-white\/70 {
    color: hsla(0, 0%, 100%, 0.7);
}
.text-white\/75 {
    color: hsla(0, 0%, 100%, 0.75);
}
.underline {
    text-decoration-line: underline;
}
.no-underline {
    text-decoration-line: none;
}
.opacity-0 {
    opacity: 0;
}
.opacity-100 {
    opacity: 1;
}
.opacity-25 {
    opacity: 0.25;
}
.opacity-75 {
    opacity: 0.75;
}
.mix-blend-multiply {
    mix-blend-mode: multiply;
}
.shadow-2xl {
    --tw-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
}
.shadow-2xl,
.shadow-lg {
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-lg {
    --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
    --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
}
.shadow-sm {
    --tw-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
}
.shadow-sm,
.shadow-xl {
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-xl {
    --tw-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
    --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
}
.shadow-white\/20 {
    --tw-shadow-color: hsla(0, 0%, 100%, 0.2);
    --tw-shadow: var(--tw-shadow-colored);
}
.ring-1 {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}
.ring-black {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(0,0,118 / var(--tw-ring-opacity));
}
.ring-gray-500 {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(107 114 128 / var(--tw-ring-opacity));
}
.ring-slate-200 {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(226 232 240 / var(--tw-ring-opacity));
}
.ring-white {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity));
}
.ring-opacity-5 {
    --tw-ring-opacity: 0.05;
}
.blur {
    --tw-blur: blur(8px);
}
.blur,
.grayscale {
    filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}
.grayscale {
    --tw-grayscale: grayscale(100%);
}
.invert {
    --tw-invert: invert(100%);
}
.filter,
.invert {
    filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}
.backdrop-blur-sm {
    --tw-backdrop-blur: blur(4px);
}
.backdrop-blur-sm,
.backdrop-blur-xl {
    -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity)
        var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity)
        var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
}
.backdrop-blur-xl {
    --tw-backdrop-blur: blur(24px);
}
.backdrop-filter {
    -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity)
        var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity)
        var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
}
.transition {
    transition-property: color, background-color, border-color, outline-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
    transition-property: color, background-color, border-color, outline-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
    transition-property: color, background-color, border-color, outline-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 0.15s;
}
.transition-all {
    transition-property: all;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 0.15s;
}
.transition-colors {
    transition-property: color, background-color, border-color, outline-color, text-decoration-color, fill, stroke;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 0.15s;
}
.transition-opacity {
    transition-property: opacity;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 0.15s;
}
.duration-100 {
    transition-duration: 0.1s;
}
.duration-1000 {
    transition-duration: 1s;
}
.duration-150 {
    transition-duration: 0.15s;
}
.duration-200 {
    transition-duration: 0.2s;
}
.duration-300 {
    transition-duration: 0.3s;
}
.duration-500 {
    transition-duration: 0.5s;
}
.duration-75 {
    transition-duration: 75ms;
}
.duration-\[600ms\] {
    transition-duration: 0.6s;
}
.ease-in {
    transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
}
.ease-in-out {
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
.ease-out {
    transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
}
.line-clamp-1 {
    -webkit-line-clamp: 1;
}
.line-clamp-1,
.line-clamp-2 {
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
}
.line-clamp-2 {
    -webkit-line-clamp: 2;
}
.scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
.scrollbar-hide::-webkit-scrollbar {
    display: none;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    appearance: none;
}
.bg-gradient-black {
    background: linear-gradient(163.42deg, #374353c3 -107%, #ffffff00 105.46%);
    border: 1px solid #626274;
    border-radius: 16px;
}


html {
    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;
}
body {
    margin: 0;
    line-height: inherit;
}
.membership-banner {
    content: "";
    position: relative;
    background: url(/images/logo-transparent.png) 100% 60% no-repeat;
    background-size: 60%, 70%;
    overflow: hidden;
}
.text-gradient-orange {
    background: linear-gradient(270deg, #e7273d -1.95%, #df5f3b 97.95%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.featured-game-card:hover {
    transition: all 1s;
}
.featured-game-card:hover img {
    filter: blur(40px);
    
}
.featured-game-card .blur-sharp {
    overflow: hidden;
    border-radius: 1rem;
}



.cover {
    transition: all 1s;
    opacity: 0;
    left: 0;
    right: 0;
    border-radius: 1rem;
}
.featured-game-card:hover .cover {
    transition: all 1s;
    opacity: 1;
    border-radius: 1rem;
}
.icon-button {
    position: relative;
    display: inline-flex;
    border: 0;
    padding: 0;
    margin: 0;
    outline: none;
    background: #fff;
    border-radius: 50%;
    cursor: pointer;
    overflow: hidden;
    text-decoration: none;
    box-sizing: border-box;
    flex-shrink: 0;
}
.flex-center,
.icon-button {
    align-items: center;
    justify-content: center;
}
.flex-center {
    display: flex;
}
.grecaptcha-badge {
    visibility: hidden;
}
::-webkit-scrollbar {
    width: 8px;
    height: 2px;
    background-color: transparent;
}
::-webkit-scrollbar-track {
    display: none;
}
::-webkit-scrollbar-thumb {
    background-color: #c4c4c4;
    border-radius: 0.75rem;
}
@keyframes  fadeInTop {
    0% {
        opacity: 0;
        transform: translateY(-50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.shadow-navbar {
    box-shadow: 0 100px 80px hsla(0, 0%, 89%, 0.07), 0 41.7776px 33.4221px hsla(0, 0%, 89%, 0.05), 0 22.3363px 17.869px hsla(0, 0%, 89%, 0.04), 0 12.5216px 10.0172px hsla(0, 0%, 89%, 0.04), 0 6.6501px 5.32008px hsla(0, 0%, 89%, 0.03),
        0 2.76726px 2.21381px hsla(0, 0%, 89%, 0.02);
}
.fade-in-top {
    animation: fadeInTop 0.4s ease-in-out both;
}
#home-cover {
    position: relative;
    overflow: hidden;
}
#home-cover > .banner-hero {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2em 1em;
    flex: auto;
    box-sizing: border-box;
}

.shadow-social-media {
    box-shadow: 0 0 20px hsla(0, 0%, 45%, 0.22);
}
select {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
    background-position: right 0.5rem center;
    background-repeat: no-repeat;
    background-size: 1.5em 1.5em;
    padding-right: 2.5rem;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact;
}
.placeholder\:text-slate-400::-moz-placeholder {
    --tw-text-opacity: 1;
    color: rgb(148 163 184 / var(--tw-text-opacity));
}
.placeholder\:text-slate-400::placeholder {
    --tw-text-opacity: 1;
    color: rgb(148 163 184 / var(--tw-text-opacity));
}
.focus-within\:z-10:focus-within {
    z-index: 10;
}
.focus-within\:text-slate-900:focus-within {
    --tw-text-opacity: 1;
    color: rgb(15 23 42 / var(--tw-text-opacity));
}
.focus-within\:text-white:focus-within {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
}
.hover\:scale-105:hover {
    --tw-scale-x: 1.05;
    --tw-scale-y: 1.05;
}
.hover\:scale-105:hover,
.hover\:scale-110:hover {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.hover\:scale-110:hover {
    --tw-scale-x: 1.1;
    --tw-scale-y: 1.1;
}
.hover\:cursor-not-allowed:hover {
    cursor: not-allowed;
}
.hover\:cursor-pointer:hover {
    cursor: pointer;
}
.hover\:border-white:hover {
    --tw-border-opacity: 1;
    border-color: rgb(255 255 255 / var(--tw-border-opacity));
}
.hover\:bg-btnPurple:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(112 127 235 / var(--tw-bg-opacity));
}
.hover\:bg-btnPurple\/30:hover {
    background-color: rgba(112, 127, 235, 0.3);
}
.hover\:bg-gray-50:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}
.hover\:bg-orange-500:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(249 115 22 / var(--tw-bg-opacity));
}
.hover\:bg-slate-50\/5:hover {
    background-color: rgba(248, 250, 252, 0.05);
}
.hover\:bg-opacity-30:hover {
    --tw-bg-opacity: 0.3;
}
.hover\:text-white:hover {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
}
.hover\:underline:hover {
    text-decoration-line: underline;
}
.hover\:opacity-80:hover {
    opacity: 0.8;
}
.hover\:shadow-lg:hover {
    --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
    --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
}
.hover\:shadow-lg:hover,
.hover\:shadow-sm:hover {
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.hover\:shadow-sm:hover {
    --tw-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
}
.focus\:z-20:focus {
    z-index: 20;
}
.focus\:border-none:focus {
    border-style: none;
}
.focus\:border-\[\#2D2EAD\]:focus {
    --tw-border-opacity: 1;
    border-color: rgb(45 46 173 / var(--tw-border-opacity));
}
.focus\:border-\[\#707feb\]:focus {
    --tw-border-opacity: 1;
    border-color: rgb(112 127 235 / var(--tw-border-opacity));
}
.focus\:border-indigo-700:focus {
    --tw-border-opacity: 1;
    border-color: rgb(67 56 202 / var(--tw-border-opacity));
}
.focus\:outline-none:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
}
.focus\:ring:focus {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
}
.focus\:ring-2:focus,
.focus\:ring:focus {
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}
.focus\:ring-2:focus {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
}
.focus\:ring-\[\#2D2EAD\]:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(45 46 173 / var(--tw-ring-opacity));
}
.focus\:ring-indigo-500:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(99 102 241 / var(--tw-ring-opacity));
}
.focus\:ring-white:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity));
}
.focus\:ring-offset-2:focus {
    --tw-ring-offset-width: 2px;
}
.focus\:duration-300:focus {
    transition-duration: 0.3s;
}
.focus-visible\:ring-2:focus-visible {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}
.focus-visible\:ring-white:focus-visible {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity));
}
.focus-visible\:ring-opacity-75:focus-visible {
    --tw-ring-opacity: 0.75;
}
.disabled\:cursor-not-allowed:disabled {
    cursor: not-allowed;
}
.group:hover .group-hover\:text-btnPurple {
    --tw-text-opacity: 1;
    color: rgb(112 127 235 / var(--tw-text-opacity));
}
.group:hover .group-hover\:text-btnPurple\/50 {
    color: rgba(112, 127, 235, 0.5);
}
.group:hover .group-hover\:text-gray-500 {
    --tw-text-opacity: 1;
    color: rgb(107 114 128 / var(--tw-text-opacity));
}
.peer:-moz-placeholder-shown ~ .peer-placeholder-shown\:translate-y-0 {
    --tw-translate-y: 0px;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.peer:placeholder-shown ~ .peer-placeholder-shown\:translate-y-0 {
    --tw-translate-y: 0px;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.peer:-moz-placeholder-shown ~ .peer-placeholder-shown\:scale-100 {
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.peer:placeholder-shown ~ .peer-placeholder-shown\:scale-100 {
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.peer:focus ~ .peer-focus\:-translate-y-3 {
    --tw-translate-y: -0.75rem;
}
.peer:focus ~ .peer-focus\:-translate-y-3,
.peer:focus ~ .peer-focus\:scale-75 {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.peer:focus ~ .peer-focus\:scale-75 {
    --tw-scale-x: 0.75;
    --tw-scale-y: 0.75;
}
@media (prefers-color-scheme: dark) {
    .dark\:border-gray-700 {
        --tw-border-opacity: 1;
        border-color: rgb(55 65 81 / var(--tw-border-opacity));
    }
    .dark\:bg-blue-200 {
        --tw-bg-opacity: 1;
        background-color: rgb(191 219 254 / var(--tw-bg-opacity));
    }
    .dark\:bg-orange-200 {
        --tw-bg-opacity: 1;
        background-color: rgb(254 215 170 / var(--tw-bg-opacity));
    }
    .dark\:text-blue-800 {
        --tw-text-opacity: 1;
        color: rgb(30 64 175 / var(--tw-text-opacity));
    }
    .dark\:text-gray-600 {
        --tw-text-opacity: 1;
        color: rgb(75 85 99 / var(--tw-text-opacity));
    }
    .dark\:text-orange-800 {
        --tw-text-opacity: 1;
        color: rgb(154 52 18 / var(--tw-text-opacity));
    }
}
@media (min-width: 640px) {
    .sm\:static {
        position: static;
    }
    .sm\:inset-auto {
        top: auto;
        right: auto;
        bottom: auto;
        left: auto;
    }
    .sm\:col-span-2 {
        grid-column: span 2 / span 2;
    }
    .sm\:mx-16 {
        margin-left: 4rem;
        margin-right: 4rem;
    }
    .sm\:my-16 {
        margin-top: 4rem;
        margin-bottom: 4rem;
    }
    .sm\:my-8 {
        margin-top: 2rem;
        margin-bottom: 2rem;
    }
    .sm\:-mr-10 {
        margin-right: -2.5rem;
    }
    .sm\:ml-3 {
        margin-left: 0.75rem;
    }
    .sm\:ml-4 {
        margin-left: 1rem;
    }
    .sm\:ml-6 {
        margin-left: 1.5rem;
    }
    .sm\:mt-0 {
        margin-top: 0;
    }
    .sm\:mt-2 {
        margin-top: 0.5rem;
    }
    .sm\:mt-4 {
        margin-top: 1rem;
    }
    .sm\:mt-6 {
        margin-top: 1.5rem;
    }
    .sm\:block {
        display: block;
    }
    .sm\:flex {
        display: flex;
    }
    .sm\:grid {
        display: grid;
    }
    .sm\:hidden {
        display: none;
    }
    .sm\:h-\[14\.4rem\] {
        height: 14.4rem;
    }
    .sm\:max-h-\[11\.5rem\] {
        max-height: 11.5rem;
    }
    .sm\:w-auto {
        width: auto;
    }
    .sm\:w-full {
        width: 100%;
    }
    .sm\:max-w-lg {
        max-width: 32rem;
    }
    .sm\:scale-100 {
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }
    .sm\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
    .sm\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }
    .sm\:grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr));
    }
    .sm\:flex-row-reverse {
        flex-direction: row-reverse;
    }
    .sm\:items-start {
        align-items: flex-start;
    }
    .sm\:items-end {
        align-items: flex-end;
    }
    .sm\:items-center {
        align-items: center;
    }
    .sm\:justify-start {
        justify-content: flex-start;
    }
    .sm\:justify-between {
        justify-content: space-between;
    }
    .sm\:gap-3 {
        gap: 0.75rem;
    }
    .sm\:gap-4 {
        gap: 1rem;
    }
    .sm\:gap-x-0 {
        -moz-column-gap: 0;
        column-gap: 0;
    }
    .sm\:rounded-lg {
        border-radius: 0.5rem;
    }
    .sm\:rounded-md {
        border-radius: 0.375rem;
    }
    .sm\:p-0 {
        padding: 0;
    }
    .sm\:p-6 {
        padding: 1.5rem;
    }
    .sm\:px-16 {
        padding-left: 4rem;
        padding-right: 4rem;
    }
    .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }
    .sm\:py-12 {
        padding-top: 3rem;
        padding-bottom: 3rem;
    }
    .sm\:py-16 {
        padding-top: 4rem;
        padding-bottom: 4rem;
    }
    .sm\:py-2 {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }
    .sm\:py-24 {
        padding-top: 6rem;
        padding-bottom: 6rem;
    }
    .sm\:py-32 {
        padding-top: 8rem;
        padding-bottom: 8rem;
    }
    .sm\:py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem;
    }
    .sm\:pb-\[0\.5rem\] {
        padding-bottom: 0.5rem;
    }
    .sm\:pl-4 {
        padding-left: 1rem;
    }
    .sm\:pr-0 {
        padding-right: 0;
    }
    .sm\:text-left {
        text-align: left;
    }
    .sm\:text-2xl {
        font-size: 1.5rem;
        line-height: 2rem;
    }
    .sm\:text-sm {
        font-size: 0.875rem;
        line-height: 1.25rem;
    }
    .sm\:text-xl {
        font-size: 1.25rem;
        line-height: 1.75rem;
    }
}
@media (min-width: 768px) {
    .md\:static {
        position: static;
    }
    .md\:inset-y-0 {
        top: 0;
        bottom: 0;
    }
    .md\:left-0 {
        left: 0;
    }
    .md\:col-span-11 {
        grid-column: span 11 / span 11;
    }
    .md\:col-span-6 {
        grid-column: span 6 / span 6;
    }
    .md\:col-span-7 {
        grid-column: span 7 / span 7;
    }
    .md\:my-12 {
        margin-top: 3rem;
        margin-bottom: 3rem;
    }
    .md\:-mt-2 {
        margin-top: -0.5rem;
    }
    .md\:mb-12 {
        margin-bottom: 3rem;
    }
    .md\:mb-2 {
        margin-bottom: 0.5rem;
    }
    .md\:mt-1 {
        margin-top: 0.25rem;
    }
    .md\:mt-10 {
        margin-top: 2.5rem;
    }
    .md\:mt-16 {
        margin-top: 4rem;
    }
    .md\:mt-3 {
        margin-top: 0.75rem;
    }
    .md\:mt-6 {
        margin-top: 1.5rem;
    }
    .md\:block {
        display: block;
    }
    .md\:flex {
        display: flex;
    }
    .md\:inline-flex {
        display: inline-flex;
    }
    .md\:hidden {
        display: none;
    }
    .md\:h-16 {
        height: 4rem;
    }
    .md\:h-32 {
        height: 8rem;
    }
    .md\:h-\[110px\] {
        height: 110px;
    }
    .md\:h-\[480px\] {
        height: 480px;
    }
    .md\:max-h-\[11\.5rem\] {
        max-height: 11.5rem;
    }
    .md\:w-1\/2 {
        width: 50%;
    }
    .md\:w-16 {
        width: 4rem;
    }
    .md\:w-28 {
        width: 7rem;
    }
    .md\:w-32 {
        width: 8rem;
    }
    .md\:w-56 {
        width: 14rem;
    }
    .md\:w-64 {
        width: 16rem;
    }
    .md\:w-72 {
        width: 18rem;
    }
    .md\:w-\[270px\] {
        width: 270px;
    }
    .md\:w-\[75\%\] {
        width: 75%;
    }
    .md\:max-w-\[18rem\] {
        max-width: 18rem;
    }
    .md\:max-w-\[3\.3rem\] {
        max-width: 3.3rem;
    }
    .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
    .md\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }
    .md\:grid-cols-5 {
        grid-template-columns: repeat(5, minmax(0, 1fr));
    }
    .md\:flex-row {
        flex-direction: row;
    }
    .md\:flex-col {
        flex-direction: column;
    }
    .md\:items-start {
        align-items: flex-start;
    }
    .md\:items-center {
        align-items: center;
    }
    .md\:justify-center {
        justify-content: center;
    }
    .md\:justify-between {
        justify-content: space-between;
    }
    .md\:gap-0 {
        gap: 0;
    }
    .md\:gap-16 {
        gap: 4rem;
    }
    .md\:gap-2 {
        gap: 0.5rem;
    }
    .md\:gap-3 {
        gap: 0.75rem;
    }
    .md\:gap-8 {
        gap: 2rem;
    }
    .md\:space-x-10 > :not([hidden]) ~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(2.5rem * var(--tw-space-x-reverse));
        margin-left: calc(2.5rem * calc(1 - var(--tw-space-x-reverse)));
    }
    .md\:space-x-2 > :not([hidden]) ~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(0.5rem * var(--tw-space-x-reverse));
        margin-left: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)));
    }
    .md\:rounded-none {
        border-radius: 0;
    }
    .md\:rounded-l-full {
        border-top-left-radius: 9999px;
        border-bottom-left-radius: 9999px;
    }
    .md\:border-b-0 {
        border-bottom-width: 0;
    }
    .md\:border-r {
        border-right-width: 1px;
    }
    .md\:px-12 {
        padding-left: 3rem;
        padding-right: 3rem;
    }
    .md\:px-14 {
        padding-left: 3.5rem;
        padding-right: 3.5rem;
    }
    .md\:px-4 {
        padding-left: 1rem;
        padding-right: 1rem;
    }
    .md\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }
    .md\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem;
    }
    .md\:py-5 {
        padding-top: 1.25rem;
        padding-bottom: 1.25rem;
    }
    .md\:py-8 {
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    .md\:pb-\[1rem\] {
        padding-bottom: 1rem;
    }
    .md\:pl-12 {
        padding-left: 3rem;
    }
    .md\:pt-16 {
        padding-top: 4rem;
    }
    .md\:pt-8 {
        padding-top: 2rem;
    }
    .md\:text-start {
        text-align: start;
    }
    .md\:text-2xl {
        font-size: 1.5rem;
        line-height: 2rem;
    }
    .md\:text-\[14px\] {
        font-size: 14px;
    }
    .md\:text-\[15px\] {
        font-size: 15px;
    }
    .md\:text-\[20px\] {
        font-size: 20px;
    }
    .md\:text-\[28px\] {
        font-size: 28px;
    }
    .md\:text-base {
        font-size: 1rem;
        line-height: 1.5rem;
    }
    .md\:text-xl {
        font-size: 1.25rem;
        line-height: 1.75rem;
    }
}
@media (min-width: 1024px) {
    .lg\:static {
        position: static;
    }
    .lg\:col-span-12 {
        grid-column: span 12 / span 12;
    }
    .lg\:col-span-3 {
        grid-column: span 3 / span 3;
    }
    .lg\:col-span-4 {
        grid-column: span 4 / span 4;
    }
    .lg\:col-span-6 {
        grid-column: span 6 / span 6;
    }
    .lg\:col-span-7 {
        grid-column: span 7 / span 7;
    }
    .lg\:col-span-8 {
        grid-column: span 8 / span 8;
    }
    .lg\:col-span-9 {
        grid-column: span 9 / span 9;
    }
    .lg\:mb-12 {
        margin-bottom: 3rem;
    }
    .lg\:mt-0 {
        margin-top: 0;
    }
    .lg\:mt-16 {
        margin-top: 4rem;
    }
    .lg\:mt-4 {
        margin-top: 1rem;
    }
    .lg\:block {
        display: block;
    }
    .lg\:flex {
        display: flex;
    }
    .lg\:grid {
        display: grid;
    }
    .lg\:hidden {
        display: none;
    }
    .lg\:h-10 {
        height: 2.5rem;
    }
    .lg\:h-14 {
        height: 3.5rem;
    }
    .lg\:h-15 {
        height: 5rem;
    }
    .lg\:h-60 {
        height: 15rem;
    }
    .lg\:h-\[14\.4rem\] {
        height: 14.4rem;
    }
    .lg\:h-\[170px\] {
        height: 170px;
    }
    .lg\:h-\[22\.5rem\] {
        height: 22.5rem;
    }
    .lg\:h-\[500px\] {
        height: 500px;
    }
    .lg\:max-h-\[14rem\] {
        max-height: 14rem;
    }
    .lg\:w-14 {
        width: 3.5rem;
    }
    .lg\:w-64 {
        width: 16rem;
    }
    .lg\:w-72 {
        width: 18rem;
    }
    .lg\:w-80 {
        width: 20rem;
    }
    .lg\:w-\[100\%\] {
        width: 100%;
    }
    .lg\:w-\[170px\] {
        width: 170px;
    }
    .lg\:w-\[300px\] {
        width: 300px;
    }
    .lg\:w-\[35\%\] {
        width: 35%;
    }
    .lg\:min-w-0 {
        min-width: 0;
    }
    .lg\:max-w-6xl {
        max-width: 72rem;
    }
    .lg\:max-w-\[20rem\] {
        max-width: 20rem;
    }
    .lg\:max-w-\[3\.5rem\] {
        max-width: 3.5rem;
    }
    .lg\:flex-1 {
        flex: 1 1 0%;
    }
    .lg\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
    .lg\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }
    .lg\:grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr));
    }
    .lg\:grid-cols-6 {
        grid-template-columns: repeat(6, minmax(0, 1fr));
    }
    .lg\:flex-row {
        flex-direction: row;
    }
    .lg\:flex-col {
        flex-direction: column;
    }
    .lg\:content-between {
        align-content: space-between;
    }
    .lg\:items-start {
        align-items: flex-start;
    }
    .lg\:items-center {
        align-items: center;
    }
    .lg\:justify-between {
        justify-content: space-between;
    }
    .lg\:gap-0 {
        gap: 0;
    }
    .lg\:gap-10 {
        gap: 2.5rem;
    }
    .lg\:gap-2 {
        gap: 0.5rem;
    }
    .lg\:gap-20 {
        gap: 5rem;
    }
    .lg\:gap-4 {
        gap: 1rem;
    }
    .lg\:gap-6 {
        gap: 1.5rem;
    }
    .lg\:gap-x-16 {
        -moz-column-gap: 4rem;
        column-gap: 4rem;
    }
    .lg\:gap-x-4 {
        -moz-column-gap: 1rem;
        column-gap: 1rem;
    }
    .lg\:gap-x-\[58px\] {
        -moz-column-gap: 58px;
        column-gap: 58px;
    }
    .lg\:overflow-y-visible {
        overflow-y: visible;
    }
    .lg\:rounded-2xl {
        border-radius: 1rem;
    }
    .lg\:border-b-0 {
        border-bottom-width: 0;
    }
    .lg\:border-r {
        border-right-width: 1px;
    }
    .lg\:p-0 {
        padding: 0;
    }
    .lg\:px-0 {
        padding-left: 0;
        padding-right: 0;
    }
    .lg\:px-10 {
        padding-left: 2.5rem;
        padding-right: 2.5rem;
    }
    .lg\:px-11 {
        padding-left: 2.75rem;
        padding-right: 2.75rem;
    }
    .lg\:px-12 {
        padding-left: 3rem;
        padding-right: 3rem;
    }
    .lg\:px-14 {
        padding-left: 3.5rem;
        padding-right: 3.5rem;
    }
    .lg\:px-16 {
        padding-left: 4rem;
        padding-right: 4rem;
    }
    .lg\:px-20 {
        padding-left: 5rem;
        padding-right: 5rem;
    }
    .lg\:px-7 {
        padding-left: 1.75rem;
        padding-right: 1.75rem;
    }
    .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem;
    }
    .lg\:px-\[3\.2rem\] {
        padding-left: 3.2rem;
        padding-right: 3.2rem;
    }
    .lg\:py-24 {
        padding-top: 6rem;
        padding-bottom: 6rem;
    }
    .lg\:py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem;
    }
    .lg\:py-8 {
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    .lg\:pb-\[3\.5rem\] {
        padding-bottom: 3.5rem;
    }
    .lg\:pr-2 {
        padding-right: 0.5rem;
    }
    .lg\:pt-10 {
        padding-top: 2.5rem;
    }
    .lg\:pt-14 {
        padding-top: 3.5rem;
    }
    .lg\:pt-24 {
        padding-top: 6rem;
    }
    .lg\:text-start {
        text-align: start;
    }
    .lg\:text-2xl {
        font-size: 1.5rem;
        line-height: 2rem;
    }
    .lg\:text-4xl {
        font-size: 2.25rem;
        line-height: 2.5rem;
    }
    .lg\:text-\[14px\] {
        font-size: 14px;
    }
    .lg\:text-\[15px\] {
        font-size: 15px;
    }
    .lg\:text-\[16px\] {
        font-size: 16px;
    }
    .lg\:text-\[20px\] {
        font-size: 20px;
    }
    .lg\:text-\[26px\] {
        font-size: 26px;
    }
    .lg\:text-\[30px\] {
        font-size: 30px;
    }
    .lg\:text-\[32px\] {
        font-size: 32px;
    }
    .lg\:text-lg {
        font-size: 1.125rem;
        line-height: 1.75rem;
    }
}
@media (min-width: 1280px) {
    .xl\:col-span-1 {
        grid-column: span 1 / span 1;
    }
    .xl\:col-span-2 {
        grid-column: span 2 / span 2;
    }
    .xl\:col-span-4 {
        grid-column: span 4 / span 4;
    }
    .xl\:col-span-6 {
        grid-column: span 6 / span 6;
    }
    .xl\:col-span-8 {
        grid-column: span 8 / span 8;
    }
    .xl\:mt-0 {
        margin-top: 0;
    }
    .xl\:block {
        display: block;
    }
    .xl\:flex {
        display: flex;
    }
    .xl\:w-auto {
        width: auto;
    }
    .xl\:w-full {
        width: 100%;
    }
    .xl\:max-w-\[1280px\] {
        max-width: 1280px;
    }
    .xl\:grid-cols-6 {
        grid-template-columns: repeat(6, minmax(0, 1fr));
    }
    .xl\:gap-4 {
        gap: 1rem;
    }
    .xl\:px-7 {
        padding-left: 1.75rem;
        padding-right: 1.75rem;
    }
    .xl\:text-center {
        text-align: center;
    }
    .xl\:text-2xl {
        font-size: 1.5rem;
        line-height: 2rem;
    }
    .xl\:text-base {
        font-size: 1rem;
        line-height: 1.5rem;
    }
}




@import  url("https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"); /*
! tailwindcss v3.2.6 | MIT License | https://tailwindcss.com
*/
*,:after,:before {
    box-sizing: border-box;
    border: 0 solid #e5e7eb
}

:after,:before {
    --tw-content: ""
}

html {
    line-height: 1.5;
    -webkit-text-size-adjust: 100%;
    font-family: ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;
    font-feature-settings: normal
}

hr {
    height: 0;
    color: inherit;
    border-top-width: 1px
}

abbr:where([title]) {
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted
}

h1,h2,h3,h4,h5,h6 {
    font-size: inherit;
    font-weight: inherit
}

a {
    color: inherit;
    text-decoration: inherit
}

b,strong {
    font-weight: bolder
}

code,kbd,pre,samp {
    font-family: ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;
    font-size: 1em
}

small {
    font-size: 80%
}

sub,sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline
}

sub {
    bottom: -.25em
}

sup {
    top: -.5em
}

table {
    text-indent: 0;
    border-color: inherit;
    border-collapse: collapse
}

button,input,optgroup,select,textarea {
    font-family: inherit;
    font-size: 100%;
    font-weight: inherit;
    line-height: inherit;
    color: inherit;
    margin: 0;
    padding: 0
}

button,select {
    text-transform: none
}

[type=button],[type=reset],[type=submit],button {
    -webkit-appearance: button;
    background-color: transparent;
    background-image: none
}

:-moz-focusring {
    outline: auto
}

:-moz-ui-invalid {
    box-shadow: none
}

progress {
    vertical-align: baseline
}

::-webkit-inner-spin-button,::-webkit-outer-spin-button {
    height: auto
}

[type=search] {
    -webkit-appearance: textfield;
    outline-offset: -2px
}

::-webkit-search-decoration {
    -webkit-appearance: none
}

::-webkit-file-upload-button {
    -webkit-appearance: button;
    font: inherit
}

summary {
    display: list-item
}

blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre {
    margin: 0
}

fieldset {
    margin: 0
}

fieldset,legend {
    padding: 0
}

menu,ol,ul {
    list-style: none;
    margin: 0;
    padding: 0
}

textarea {
    resize: vertical
}

input::-moz-placeholder,textarea::-moz-placeholder {
    opacity: 1;
    color: #9ca3af
}

input::placeholder,textarea::placeholder {
    opacity: 1;
    color: #9ca3af
}

[role=button],button {
    cursor: pointer
}

:disabled {
    cursor: default
}

audio,canvas,embed,iframe,img,object,svg,video {
    display: block;
    vertical-align: middle
}

img,video {
    max-width: 100%;
    height: auto
}

[hidden] {
    display: none
}

*,:after,:before {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgba(59,130,246,.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia:
}

::backdrop {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgba(59,130,246,.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia:
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0,0,0,0);
    white-space: nowrap;
    border-width: 0
}

.pointer-events-none {
    pointer-events: none
}

.pointer-events-auto {
    pointer-events: auto
}

.fixed {
    position: fixed
}

.\!absolute {
    position: absolute!important
}

.absolute {
    position: absolute
}

.relative {
    position: relative
}

.sticky {
    position: sticky
}

.inset-0 {
    top: 0;
    bottom: 0
}

.inset-0,.inset-x-0 {
    right: 0;
    left: 0
}

.inset-y-0 {
    top: 0;
    bottom: 0
}

.-right-\[3px\] {
    right: -3px
}

.bottom-0 {
    bottom: 0
}

.left-0 {
    left: 0
}

.left-5 {
    left: 1.25rem
}

.left-6 {
    left: 1.5rem
}

.right-0 {
    right: 0
}

.right-6 {
    right: 1.5rem
}

.right-8 {
    right: 2rem
}

.top-0 {
    top: 0
}

.top-20 {
    top: 5rem
}

.top-4 {
    top: 1rem
}

.top-\[18px\] {
    top: 18px
}

.-z-10 {
    z-index: -10
}

.z-0 {
    z-index: 0
}

.z-10 {
    z-index: 10
}

.z-20 {
    z-index: 20
}

.z-30 {
    z-index: 30
}

.z-40 {
    z-index: 40
}

.z-50 {
    z-index: 50
}

.z-\[60\] {
    z-index: 60
}

.z-\[9\] {
    z-index: 9
}

.order-1 {
    order: 1
}

.order-2 {
    order: 2
}

.col-span-1 {
    grid-column: span 1/span 1
}

.col-span-12 {
    grid-column: span 12/span 12
}

.col-span-2 {
    grid-column: span 2/span 2
}

.col-span-5 {
    grid-column: span 5/span 5
}

.\!m-0 {
    margin: 0!important
}

.m-0 {
    margin: 0
}

.m-4 {
    margin: 1rem
}

.m-auto {
    margin: auto
}

.mx-2 {
    margin-left: .5rem;
    margin-right: .5rem
}

.mx-6 {
    margin-left: 1.5rem;
    margin-right: 1.5rem
}

.mx-auto {
    margin-left: auto;
    margin-right: auto
}

.my-2 {
    margin-top: .5rem;
    margin-bottom: .5rem
}

.my-20 {
    margin-top: 5rem;
    margin-bottom: 5rem
}

.my-3 {
    margin-top: .75rem;
    margin-bottom: .75rem
}

.my-4 {
    margin-top: 1rem;
    margin-bottom: 1rem
}

.my-6 {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem
}

.my-7 {
    margin-top: 1.75rem;
    margin-bottom: 1.75rem
}

.my-8 {
    margin-top: 2rem;
    margin-bottom: 2rem
}

.my-auto {
    margin-top: auto;
    margin-bottom: auto
}

.-mb-px {
    margin-bottom: -1px
}

.-ml-1 {
    margin-left: -.25rem
}

.-ml-px {
    margin-left: -1px
}

.-mr-10 {
    margin-right: -2.5rem
}

.-mr-12 {
    margin-right: -3rem
}

.-mt-16 {
    margin-top: -4rem
}

.mb-1 {
    margin-bottom: .25rem
}

.mb-1\.5 {
    margin-bottom: .375rem
}

.mb-10 {
    margin-bottom: 2.5rem
}

.mb-2 {
    margin-bottom: .5rem
}

.mb-3 {
    margin-bottom: .75rem
}

.mb-4 {
    margin-bottom: 1rem
}

.mb-5 {
    margin-bottom: 1.25rem
}

.mb-6 {
    margin-bottom: 1.5rem
}

.mb-8 {
    margin-bottom: 2rem
}

.mb-\[20px\] {
    margin-bottom: 20px
}

.ml-12 {
    margin-left: 3rem
}

.ml-2 {
    margin-left: .5rem
}

.ml-3 {
    margin-left: .75rem
}

.ml-4 {
    margin-left: 1rem
}

.ml-5 {
    margin-left: 1.25rem
}

.mr-2 {
    margin-right: .5rem
}

.mr-3 {
    margin-right: .75rem
}

.mr-4 {
    margin-right: 1rem
}

.mr-5 {
    margin-right: 1.25rem
}

.mt-1 {
    margin-top: .25rem
}

.mt-10 {
    margin-top: 2.5rem
}

.mt-12 {
    margin-top: 3rem
}

.mt-2 {
    margin-top: .5rem
}

.mt-3 {
    margin-top: .75rem
}

.mt-4 {
    margin-top: 1rem
}

.mt-5 {
    margin-top: 1.25rem
}

.mt-6 {
    margin-top: 1.5rem
}

.mt-7 {
    margin-top: 1.75rem
}

.mt-8 {
    margin-top: 2rem
}

.mt-\[20px\] {
    margin-top: 20px
}

.mt-\[30px\] {
    margin-top: 30px
}

.block {
    display: block
}

.inline-block {
    display: inline-block
}

.inline {
    display: inline
}

.flex {
    display: flex
}

.inline-flex {
    display: inline-flex
}

.table {
    display: table
}

.flow-root {
    display: flow-root
}

.grid {
    display: grid
}

.contents {
    display: contents
}

.hidden {
    display: none
}

.h-0 {
    height: 0
}

.h-10 {
    height: 2.5rem
}

.h-12 {
    height: 3rem
}

.h-14 {
    height: 3.5rem
}

.h-16 {
    height: 4rem
}

.h-24 {
    height: 6rem
}

.h-3 {
    height: .75rem
}

.h-32 {
    height: 8rem
}

.h-4 {
    height: 1rem
}

.h-40 {
    height: 10rem
}

.h-5 {
    height: 1.25rem
}

.h-56 {
    height: 14rem
}

.h-6 {
    height: 1.5rem
}

.h-64 {
    height: 16rem
}

.h-8 {
    height: 2rem
}

.h-\[100vh\] {
    height: 100vh
}

.h-\[16px\] {
    height: 16px
}

.h-\[24px\] {
    height: 24px
}

.h-\[280px\] {
    height: 280px
}

.h-\[460px\] {
    height: 460px
}

.h-\[5\.7rem\] {
    height: 5.7rem
}

.h-\[9\.4rem\] {
    height: 9.4rem
}

.h-auto {
    height: auto
}

.h-full {
    height: 100%
}

.h-px {
    height: 1px
}

.max-h-0 {
    max-height: 0
}

.max-h-\[1000px\] {
    max-height: 1000px
}

.max-h-\[9rem\] {
    max-height: 9rem
}

.max-h-screen {
    max-height: 100vh
}

.min-h-\[50vh\] {
    min-height: 50vh
}

.min-h-\[60vh\] {
    min-height: 60vh
}

.min-h-\[65vh\] {
    min-height: 65vh
}

.min-h-\[70vh\] {
    min-height: 70vh
}

.min-h-full {
    min-height: 100%
}

.min-h-screen {
    min-height: 100vh
}

.\!w-full {
    width: 100%!important
}

.w-1\/2 {
    width: 50%
}

.w-10 {
    width: 2.5rem
}

.w-11 {
    width: 2.75rem
}

.w-12 {
    width: 3rem
}

.w-14 {
    width: 3.5rem
}

.w-24 {
    width: 6rem
}

.w-28 {
    width: 7rem
}

.w-3 {
    width: .75rem
}

.w-4 {
    width: 1rem
}

.w-5 {
    width: 1.25rem
}

.w-56 {
    width: 14rem
}

.w-6 {
    width: 1.5rem
}

.w-72 {
    width: 18rem
}

.w-8 {
    width: 2rem
}

.w-80 {
    width: 20rem
}

.w-\[16px\] {
    width: 16px
}

.w-\[24px\] {
    width: 24px
}

.w-\[280px\] {
    width: 280px
}

.w-\[80px\] {
    width: 80px
}

.w-auto {
    width: auto
}

.w-full {
    width: 100%
}

.w-screen {
    width: 100vw
}

.min-w-0 {
    min-width: 0
}

.max-w-7xl {
    max-width: 80rem
}

.max-w-\[15rem\] {
    max-width: 15rem
}

.max-w-\[2\.5rem\] {
    max-width: 2.5rem
}

.max-w-\[3\.5rem\] {
    max-width: 3.5rem
}

.max-w-full {
    max-width: 100%
}

.max-w-md {
    max-width: 28rem
}

.max-w-xl {
    max-width: 36rem
}

.max-w-xs {
    max-width: 20rem
}

.flex-1 {
    flex: 1 1 0%
}

.flex-shrink {
    flex-shrink: 1
}

.flex-shrink-0,.shrink-0 {
    flex-shrink: 0
}

.flex-grow,.grow {
    flex-grow: 1
}

.table-auto {
    table-layout: auto
}

.origin-\[0\] {
    transform-origin: 0
}

.origin-top-right {
    transform-origin: top right
}

.-translate-x-full {
    --tw-translate-x: -100%
}

.-translate-x-full,.-translate-y-1\/2 {
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.-translate-y-1\/2 {
    --tw-translate-y: -50%
}

.-translate-y-3 {
    --tw-translate-y: -0.75rem
}

.-translate-y-3,.translate-x-0 {
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.translate-x-0 {
    --tw-translate-x: 0px
}

.translate-y-0 {
    --tw-translate-y: 0px
}

.rotate-0,.translate-y-0 {
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.rotate-0 {
    --tw-rotate: 0deg
}

.rotate-180 {
    --tw-rotate: 180deg
}

.rotate-180,.scale-100 {
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.scale-100 {
    --tw-scale-x: 1;
    --tw-scale-y: 1
}

.scale-75 {
    --tw-scale-x: .75;
    --tw-scale-y: .75
}

.scale-75,.scale-95 {
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.scale-95 {
    --tw-scale-x: .95;
    --tw-scale-y: .95
}

.transform {
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

@keyframes  ping {
    75%,to {
        transform: scale(2);
        opacity: 0
    }
}

.animate-ping {
    animation: ping 1s cubic-bezier(0,0,.2,1) infinite
}

@keyframes  pulse {
    50% {
        opacity: .5
    }
}

.animate-pulse {
    animation: pulse 2s cubic-bezier(.4,0,.6,1) infinite
}

@keyframes  spin {
    to {
        transform: rotate(1turn)
    }
}

.animate-spin {
    animation: spin 1s linear infinite
}

.cursor-not-allowed {
    cursor: not-allowed
}

.cursor-pointer {
    cursor: pointer
}

.appearance-none {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

.grid-flow-col {
    grid-auto-flow: column
}

.grid-cols-1 {
    grid-template-columns: repeat(1,minmax(0,1fr))
}

.grid-cols-12 {
    grid-template-columns: repeat(12,minmax(0,1fr))
}

.grid-cols-2 {
    grid-template-columns: repeat(2,minmax(0,1fr))
}

.grid-cols-3 {
    grid-template-columns: repeat(3,minmax(0,1fr))
}

.grid-cols-6 {
    grid-template-columns: repeat(6,minmax(0,1fr))
}

.flex-row {
    flex-direction: row
}

.flex-row-reverse {
    flex-direction: row-reverse
}

.flex-col {
    flex-direction: column
}

.flex-col-reverse {
    flex-direction: column-reverse
}

.content-center {
    align-content: center
}

.content-start {
    align-content: flex-start
}

.content-end {
    align-content: flex-end
}

.items-start {
    align-items: flex-start
}

.items-end {
    align-items: flex-end
}

.items-center {
    align-items: center
}

.items-stretch {
    align-items: stretch
}

.justify-start {
    justify-content: flex-start
}

.justify-end {
    justify-content: flex-end
}

.justify-center {
    justify-content: center
}

.justify-between {
    justify-content: space-between
}

.justify-around {
    justify-content: space-around
}

.\!gap-0 {
    gap: 0!important
}

.gap-1 {
    gap: .25rem
}

.gap-1\.5 {
    gap: .375rem
}

.gap-12 {
    gap: 3rem
}

.gap-2 {
    gap: .5rem
}

.gap-3 {
    gap: .75rem
}

.gap-4 {
    gap: 1rem
}

.gap-5 {
    gap: 1.25rem
}

.gap-6 {
    gap: 1.5rem
}

.gap-8 {
    gap: 2rem
}

.gap-x-4 {
    -moz-column-gap: 1rem;
    column-gap: 1rem
}

.gap-y-10 {
    row-gap: 2.5rem
}

.gap-y-4 {
    row-gap: 1rem
}

.gap-y-8 {
    row-gap: 2rem
}

.-space-x-px>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(-1px * var(--tw-space-x-reverse));
    margin-left: calc(-1px * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-2>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(.5rem * var(--tw-space-x-reverse));
    margin-left: calc(.5rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-x-6>:not([hidden])~:not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(1.5rem * var(--tw-space-x-reverse));
    margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)))
}

.space-y-1>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(.25rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(.25rem * var(--tw-space-y-reverse))
}

.space-y-2>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(.5rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(.5rem * var(--tw-space-y-reverse))
}

.space-y-3>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(.75rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(.75rem * var(--tw-space-y-reverse))
}

.space-y-4>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1rem * var(--tw-space-y-reverse))
}

.space-y-5>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1.25rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1.25rem * var(--tw-space-y-reverse))
}

.divide-y>:not([hidden])~:not([hidden]) {
    --tw-divide-y-reverse: 0;
    border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
    border-bottom-width: calc(1px * var(--tw-divide-y-reverse))
}

.divide-gray-100>:not([hidden])~:not([hidden]) {
    --tw-divide-opacity: 1;
    border-color: rgb(243 244 246/var(--tw-divide-opacity))
}

.overflow-hidden {
    overflow: hidden
}

.overflow-x-auto {
    overflow-x: auto
}

.overflow-y-auto {
    overflow-y: auto
}

.overflow-x-hidden {
    overflow-x: hidden
}

.overflow-x-scroll {
    overflow-x: scroll
}

.overflow-y-scroll {
    overflow-y: scroll
}

.truncate {
    overflow: hidden;
    white-space: nowrap
}

.text-ellipsis,.truncate {
    text-overflow: ellipsis
}

.whitespace-nowrap {
    white-space: nowrap
}

.whitespace-pre-line {
    white-space: pre-line
}

.break-words {
    overflow-wrap: break-word
}

.\!rounded-\[50px\] {
    border-radius: 50px!important
}

.\!rounded-full {
    border-radius: 9999px!important
}

.\!rounded-lg {
    border-radius: .5rem!important
}

.rounded {
    border-radius: .25rem
}

.rounded-2xl {
    border-radius: 1rem
}

.rounded-3xl {
    border-radius: 1.5rem
}

.rounded-\[15px\] {
    border-radius: 15px
}

.rounded-\[1rem\] {
    border-radius: 1rem
}

.rounded-\[8px\] {
    border-radius: 8px
}

.rounded-full {
    border-radius: 9999px
}

.rounded-lg {
    border-radius: .5rem
}

.rounded-md {
    border-radius: .375rem
}

.rounded-none {
    border-radius: 0
}

.rounded-xl {
    border-radius: .75rem
}

.rounded-b-lg {
    border-bottom-right-radius: .5rem;
    border-bottom-left-radius: .5rem
}

.rounded-l-full {
    border-top-left-radius: 9999px;
    border-bottom-left-radius: 9999px
}

.rounded-l-md {
    border-top-left-radius: .375rem;
    border-bottom-left-radius: .375rem
}

.rounded-r-full {
    border-top-right-radius: 9999px;
    border-bottom-right-radius: 9999px
}

.rounded-r-md {
    border-top-right-radius: .375rem;
    border-bottom-right-radius: .375rem
}

.rounded-t-\[20px\] {
    border-top-left-radius: 20px;
    border-top-right-radius: 20px
}

.rounded-t-lg {
    border-top-left-radius: .5rem;
    border-top-right-radius: .5rem
}

.rounded-bl-\[15px\] {
    border-bottom-left-radius: 15px
}

.rounded-bl-full {
    border-bottom-left-radius: 9999px
}

.rounded-br-\[15px\] {
    border-bottom-right-radius: 15px
}

.rounded-tr-\[3000px\] {
    border-top-right-radius: 3000px
}

.border {
    border-width: 1px
}

.border-0 {
    border-width: 0
}

.border-2 {
    border-width: 2px
}

.\!border-b {
    border-bottom-width: 1px!important
}

.border-b {
    border-bottom-width: 1px
}

.border-b-2 {
    border-bottom-width: 2px
}

.border-r {
    border-right-width: 1px
}

.border-t {
    border-top-width: 1px
}

.border-t-2 {
    border-top-width: 2px
}

.\!border-none {
    border-style: none!important
}

.border-none {
    border-style: none
}

.border-\[\#626274\] {
    --tw-border-opacity: 1;
    border-color: rgb(98 98 116/var(--tw-border-opacity))
}

.border-gray-300 {
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219/var(--tw-border-opacity))
}

.border-gray-500 {
    --tw-border-opacity: 1;
    border-color: rgb(107 114 128/var(--tw-border-opacity))
}

.border-gray-600 {
    --tw-border-opacity: 1;
    border-color: rgb(75 85 99/var(--tw-border-opacity))
}

.border-gray-700 {
    --tw-border-opacity: 1;
    border-color: rgb(55 65 81/var(--tw-border-opacity))
}

.border-indigo-500 {
    --tw-border-opacity: 1;
    border-color: rgb(99 102 241/var(--tw-border-opacity))
}

.border-transparent {
    border-color: transparent
}

.border-white\/30 {
    border-color: hsla(0,0%,100%,.3)
}

.\!bg-gray-300 {
    --tw-bg-opacity: 1!important;
    background-color: rgb(209 213 219/var(--tw-bg-opacity))!important
}

.bg-\[\#22a328\] {
    --tw-bg-opacity: 1;
    background-color: rgb(34 163 40/var(--tw-bg-opacity))
}

.bg-\[\#2abe31\] {
    --tw-bg-opacity: 1;
    background-color: rgb(42 190 49/var(--tw-bg-opacity))
}

.bg-\[\#5067e4\] {
    --tw-bg-opacity: 1;
    background-color: rgb(80 103 228/var(--tw-bg-opacity))
}

.bg-\[\#e44a4a\] {
    --tw-bg-opacity: 1;
    background-color: rgb(228 74 74/var(--tw-bg-opacity))
}

.bg-\[\#e7fea2\] {
    --tw-bg-opacity: 1;
    background-color: rgb(231 254 162/var(--tw-bg-opacity))
}

.bg-\[\#ffc5c5\] {
    --tw-bg-opacity: 1;
    background-color: rgb(255 197 197/var(--tw-bg-opacity))
}

.bg-\[\#fff2c5\] {
    --tw-bg-opacity: 1;
    background-color: rgb(255 242 197/var(--tw-bg-opacity))
}

.bg-backgroundSecondary {
    --tw-bg-opacity: 1;
    background-color: rgb(50 50 62/var(--tw-bg-opacity))
}

.bg-black {
    --tw-bg-opacity: 1;
    background-color: rgb(0 0 0/var(--tw-bg-opacity))
}

.bg-blue-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(219 234 254/var(--tw-bg-opacity))
}

.bg-btnPurple {
    --tw-bg-opacity: 1;
    background-color: rgb(112 127 235/var(--tw-bg-opacity))
}

.bg-btnPurple\/70 {
    background-color: rgba(112,127,235,.7)
}

.bg-gray-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(229 231 235/var(--tw-bg-opacity))
}

.bg-gray-300 {
    --tw-bg-opacity: 1;
    background-color: rgb(209 213 219/var(--tw-bg-opacity))
}

.bg-gray-600\/75 {
    background-color: rgba(75,85,99,.75)
}

.bg-gray-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(55 65 81/var(--tw-bg-opacity))
}

.bg-indigo-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(238 242 255/var(--tw-bg-opacity))
}

.bg-orange-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(255 237 213/var(--tw-bg-opacity))
}

.bg-orange-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(234 88 12/var(--tw-bg-opacity))
}

.bg-transparent {
    background-color: transparent
}

.bg-white {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255/var(--tw-bg-opacity))
}

.bg-white\/80 {
    background-color: hsla(0,0%,100%,.8)
}

.bg-opacity-0 {
    --tw-bg-opacity: 0
}

.bg-opacity-100 {
    --tw-bg-opacity: 1
}

.bg-opacity-40 {
    --tw-bg-opacity: 0.4
}

.bg-gradient-to-r {
    background-image: linear-gradient(to right,var(--tw-gradient-stops))
}

.bg-none {
    background-image: none
}

.from-gray-400 {
    --tw-gradient-from: #9ca3af;
    --tw-gradient-to: rgba(156,163,175,0);
    --tw-gradient-stops: var(--tw-gradient-from),var(--tw-gradient-to)
}

.fill-white {
    fill: #fff
}

.object-contain {
    -o-object-fit: contain;
    object-fit: contain
}

.\!object-cover {
    -o-object-fit: cover!important;
    object-fit: cover!important
}

.object-cover {
    -o-object-fit: cover;
    object-fit: cover
}

.object-center {
    -o-object-position: center;
    object-position: center
}

.object-left {
    -o-object-position: left;
    object-position: left
}

.object-right {
    -o-object-position: right;
    object-position: right
}

.\!p-0 {
    padding: 0!important
}

.\!p-4 {
    padding: 1rem!important
}

.p-0 {
    padding: 0
}

.p-1 {
    padding: .25rem
}

.p-2 {
    padding: .5rem
}

.p-2\.5 {
    padding: .625rem
}

.p-3 {
    padding: .75rem
}

.p-4 {
    padding: 1rem
}

.p-5 {
    padding: 1.25rem
}

.p-6 {
    padding: 1.5rem
}

.p-8 {
    padding: 2rem
}

.\!px-0 {
    padding-left: 0!important;
    padding-right: 0!important
}

.\!px-3 {
    padding-left: .75rem!important;
    padding-right: .75rem!important
}

.\!px-4 {
    padding-left: 1rem!important;
    padding-right: 1rem!important
}

.\!py-1 {
    padding-top: .25rem!important;
    padding-bottom: .25rem!important
}

.\!py-1\.5 {
    padding-top: .375rem!important;
    padding-bottom: .375rem!important
}

.px-0 {
    padding-left: 0;
    padding-right: 0
}

.px-1 {
    padding-left: .25rem;
    padding-right: .25rem
}

.px-14 {
    padding-left: 3.5rem;
    padding-right: 3.5rem
}

.px-2 {
    padding-left: .5rem;
    padding-right: .5rem
}

.px-2\.5 {
    padding-left: .625rem;
    padding-right: .625rem
}

.px-20 {
    padding-left: 5rem;
    padding-right: 5rem
}

.px-3 {
    padding-left: .75rem;
    padding-right: .75rem
}

.px-4 {
    padding-left: 1rem;
    padding-right: 1rem
}

.px-5 {
    padding-left: 1.25rem;
    padding-right: 1.25rem
}

.px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem
}

.px-\[0\.75rem\] {
    padding-left: .75rem;
    padding-right: .75rem
}

.px-\[18px\] {
    padding-left: 18px;
    padding-right: 18px
}

.py-0 {
    padding-top: 0;
    padding-bottom: 0
}

.py-1 {
    padding-top: .25rem;
    padding-bottom: .25rem
}

.py-1\.5 {
    padding-top: .375rem;
    padding-bottom: .375rem
}

.py-10 {
    padding-top: 2.5rem;
    padding-bottom: 2.5rem
}

.py-2 {
    padding-top: .5rem;
    padding-bottom: .5rem
}

.py-2\.5 {
    padding-top: .625rem;
    padding-bottom: .625rem
}

.py-24 {
    padding-top: 6rem;
    padding-bottom: 6rem
}

.py-3 {
    padding-top: .75rem;
    padding-bottom: .75rem
}

.py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem
}

.py-5 {
    padding-top: 1.25rem;
    padding-bottom: 1.25rem
}

.py-6 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem
}

.py-8 {
    padding-top: 2rem;
    padding-bottom: 2rem
}

.py-\[0\.5rem\] {
    padding-top: .5rem;
    padding-bottom: .5rem
}

.py-\[5\.5rem\] {
    padding-top: 5.5rem;
    padding-bottom: 5.5rem
}

.pb-0 {
    padding-bottom: 0
}

.pb-1 {
    padding-bottom: .25rem
}

.pb-14 {
    padding-bottom: 3.5rem
}

.pb-16 {
    padding-bottom: 4rem
}

.pb-2 {
    padding-bottom: .5rem
}

.pb-2\.5 {
    padding-bottom: .625rem
}

.pb-20 {
    padding-bottom: 5rem
}

.pb-24 {
    padding-bottom: 6rem
}

.pb-3 {
    padding-bottom: .75rem
}

.pb-32 {
    padding-bottom: 8rem
}

.pb-4 {
    padding-bottom: 1rem
}

.pb-5 {
    padding-bottom: 1.25rem
}

.pb-8,.pb-\[2rem\] {
    padding-bottom: 2rem
}

.pb-\[3px\] {
    padding-bottom: 3px
}

.pl-10 {
    padding-left: 2.5rem
}

.pl-2 {
    padding-left: .5rem
}

.pl-3 {
    padding-left: .75rem
}

.pl-4 {
    padding-left: 1rem
}

.pl-5 {
    padding-left: 1.25rem
}

.pl-\[3\.2rem\] {
    padding-left: 3.2rem
}

.pr-0 {
    padding-right: 0
}

.pr-10 {
    padding-right: 2.5rem
}

.pr-2 {
    padding-right: .5rem
}

.pr-20 {
    padding-right: 5rem
}

.pr-3 {
    padding-right: .75rem
}

.pr-4 {
    padding-right: 1rem
}

.pr-5 {
    padding-right: 1.25rem
}

.pr-\[3\.2rem\] {
    padding-right: 3.2rem
}

.pt-0 {
    padding-top: 0
}

.pt-1 {
    padding-top: .25rem
}

.pt-10 {
    padding-top: 2.5rem
}

.pt-12 {
    padding-top: 3rem
}

.pt-14 {
    padding-top: 3.5rem
}

.pt-16 {
    padding-top: 4rem
}

.pt-2 {
    padding-top: .5rem
}

.pt-3 {
    padding-top: .75rem
}

.pt-4 {
    padding-top: 1rem
}

.pt-5 {
    padding-top: 1.25rem
}

.pt-6 {
    padding-top: 1.5rem
}

.pt-8 {
    padding-top: 2rem
}

.text-left {
    text-align: left
}

.text-center {
    text-align: center
}

.text-right {
    text-align: right
}

.text-justify {
    text-align: justify
}

.text-start {
    text-align: start
}

.text-2xl {
    font-size: 1.5rem;
    line-height: 2rem
}

.text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem
}

.text-\[0\.92rem\] {
    font-size: .92rem
}

.text-\[10px\] {
    font-size: 10px
}

.text-\[12px\] {
    font-size: 12px
}

.text-\[13px\] {
    font-size: 13px
}

.text-\[14px\] {
    font-size: 14px
}

.text-\[15px\] {
    font-size: 15px
}

.text-\[18px\] {
    font-size: 18px
}

.text-\[20px\] {
    font-size: 20px
}

.text-\[24px\] {
    font-size: 24px
}

.text-\[40px\] {
    font-size: 40px
}

.text-base {
    font-size: 1rem;
    line-height: 1.5rem
}

.text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem
}

.text-sm {
    font-size: .875rem;
    line-height: 1.25rem
}

.text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem
}

.text-xs {
    font-size: .75rem;
    line-height: 1rem
}

.font-bold {
    font-weight: 700
}

.font-extrabold {
    font-weight: 800
}

.font-light {
    font-weight: 300
}

.font-medium {
    font-weight: 500
}

.font-normal {
    font-weight: 400
}

.font-semibold {
    font-weight: 600
}

.uppercase {
    text-transform: uppercase
}

.capitalize {
    text-transform: capitalize
}

.italic {
    font-style: italic
}

.leading-4 {
    line-height: 1rem
}

.leading-5 {
    line-height: 1.25rem
}

.leading-6 {
    line-height: 1.5rem
}

.leading-7 {
    line-height: 1.75rem
}

.leading-\[150\%\] {
    line-height: 150%
}

.leading-\[20px\] {
    line-height: 20px
}

.leading-\[26px\] {
    line-height: 26px
}

.leading-\[30\.8px\] {
    line-height: 30.8px
}

.leading-\[66\.8px\] {
    line-height: 66.8px
}

.leading-normal {
    line-height: 1.5
}

.tracking-\[0\.1em\] {
    letter-spacing: .1em
}

.tracking-\[0\.2em\] {
    letter-spacing: .2em
}

.tracking-\[0\.3px\] {
    letter-spacing: .3px
}

.tracking-tight {
    letter-spacing: -.025em
}


.text-black {
    --tw-text-opacity: 1;
    color: rgb(0 0 0/var(--tw-text-opacity))
}

.text-blue-700 {
    --tw-text-opacity: 1;
    color: rgb(29 78 216/var(--tw-text-opacity))
}

.text-btnPurple {
    --tw-text-opacity: 1;
    color: rgb(112 127 235/var(--tw-text-opacity))
}

.text-gray-200 {
    --tw-text-opacity: 1;
    color: rgb(229 231 235/var(--tw-text-opacity))
}

.text-gray-300 {
    --tw-text-opacity: 1;
    color: rgb(209 213 219/var(--tw-text-opacity))
}

.text-gray-400 {
    --tw-text-opacity: 1;
    color: rgb(156 163 175/var(--tw-text-opacity))
}

.text-gray-500 {
    --tw-text-opacity: 1;
    color: rgb(107 114 128/var(--tw-text-opacity))
}

.text-gray-600 {
    --tw-text-opacity: 1;
    color: rgb(75 85 99/var(--tw-text-opacity))
}

.text-gray-900 {
    --tw-text-opacity: 1;
    color: rgb(17 24 39/var(--tw-text-opacity))
}

.text-green-500 {
    --tw-text-opacity: 1;
    color: rgb(34 197 94/var(--tw-text-opacity))
}

.text-green-600 {
    --tw-text-opacity: 1;
    color: rgb(22 163 74/var(--tw-text-opacity))
}

.text-indigo-600 {
    --tw-text-opacity: 1;
    color: rgb(79 70 229/var(--tw-text-opacity))
}

.text-info {
    --tw-text-opacity: 1;
    color: rgb(34 211 238/var(--tw-text-opacity))
}

.text-orange-700 {
    --tw-text-opacity: 1;
    color: rgb(194 65 12/var(--tw-text-opacity))
}

.text-red-400 {
    --tw-text-opacity: 1;
    color: rgb(248 113 113/var(--tw-text-opacity))
}

.text-red-600 {
    --tw-text-opacity: 1;
    color: rgb(220 38 38/var(--tw-text-opacity))
}

.text-red-700 {
    --tw-text-opacity: 1;
    color: rgb(185 28 28/var(--tw-text-opacity))
}

.text-slate-900 {
    --tw-text-opacity: 1;
    color: rgb(15 23 42/var(--tw-text-opacity))
}

.text-white {
    --tw-text-opacity: 1;
    color: rgb(255 255 255/var(--tw-text-opacity))
}

.text-white\/70 {
    color: hsla(0,0%,100%,.7)
}

.text-white\/75 {
    color: hsla(0,0%,100%,.75)
}

.underline {
    text-decoration-line: underline
}

.no-underline {
    text-decoration-line: none
}

.opacity-0 {
    opacity: 0
}

.opacity-100 {
    opacity: 1
}

.opacity-25 {
    opacity: .25
}

.opacity-75 {
    opacity: .75
}

.mix-blend-multiply {
    mix-blend-mode: multiply
}

.shadow-2xl {
    --tw-shadow: 0 25px 50px -12px rgba(0,0,0,.25);
    --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color)
}

.shadow-2xl,.shadow-lg {
    box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)
}

.shadow-lg {
    --tw-shadow: 0 10px 15px -3px rgba(0,0,0,.1),0 4px 6px -4px rgba(0,0,0,.1);
    --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color),0 4px 6px -4px var(--tw-shadow-color)
}

.shadow-sm {
    --tw-shadow: 0 1px 2px 0 rgba(0,0,0,.05);
    --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color)
}

.shadow-sm,.shadow-xl {
    box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)
}

.shadow-xl {
    --tw-shadow: 0 20px 25px -5px rgba(0,0,0,.1),0 8px 10px -6px rgba(0,0,0,.1);
    --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color),0 8px 10px -6px var(--tw-shadow-color)
}

.shadow-white\/20 {
    --tw-shadow-color: hsla(0,0%,100%,.2);
    --tw-shadow: var(--tw-shadow-colored)
}

.ring-1 {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)
}

.ring-black {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(0 0 0/var(--tw-ring-opacity))
}

.ring-gray-500 {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(107 114 128/var(--tw-ring-opacity))
}

.ring-slate-200 {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(226 232 240/var(--tw-ring-opacity))
}

.ring-white {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(255 255 255/var(--tw-ring-opacity))
}

.ring-opacity-5 {
    --tw-ring-opacity: 0.05
}

.blur {
    --tw-blur: blur(8px)
}

.blur,.grayscale {
    filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
}

.grayscale {
    --tw-grayscale: grayscale(100%)
}

.invert {
    --tw-invert: invert(100%)
}

.filter,.invert {
    filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
}

.backdrop-blur-sm {
    --tw-backdrop-blur: blur(4px)
}

.backdrop-blur-sm,.backdrop-blur-xl {
    -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia)
}

.backdrop-blur-xl {
    --tw-backdrop-blur: blur(24px)
}

.backdrop-filter {
    -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia)
}

.transition {
    transition-property: color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;
    transition-property: color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;
    transition-property: color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    transition-duration: .15s
}

.transition-all {
    transition-property: all;
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    transition-duration: .15s
}

.transition-colors {
    transition-property: color,background-color,border-color,outline-color,text-decoration-color,fill,stroke;
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    transition-duration: .15s
}

.transition-opacity {
    transition-property: opacity;
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    transition-duration: .15s
}

.duration-100 {
    transition-duration: .1s
}

.duration-1000 {
    transition-duration: 1s
}

.duration-150 {
    transition-duration: .15s
}

.duration-200 {
    transition-duration: .2s
}

.duration-300 {
    transition-duration: .3s
}

.duration-500 {
    transition-duration: .5s
}

.duration-75 {
    transition-duration: 75ms
}

.duration-\[600ms\] {
    transition-duration: .6s
}

.ease-in {
    transition-timing-function: cubic-bezier(.4,0,1,1)
}

.ease-in-out {
    transition-timing-function: cubic-bezier(.4,0,.2,1)
}

.ease-out {
    transition-timing-function: cubic-bezier(0,0,.2,1)
}

.line-clamp-1 {
    -webkit-line-clamp: 1
}

.line-clamp-1,.line-clamp-2 {
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical
}

.line-clamp-2 {
    -webkit-line-clamp: 2
}

.scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none
}

.scrollbar-hide::-webkit-scrollbar {
    display: none
}

input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    appearance: none
}

.bg-gradient-black {
    background: linear-gradient(163.42deg,#374353c3 -107%,#ffffff00 105.46%);
    border: 1px solid #626274;
    border-radius: 16px
}



html {
    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4
}

body {
    margin: 0;
    line-height: inherit
}

.membership-banner {
    content: "";
    position: relative;
    background: url(/images/logo-transparent.png) 100% 60% no-repeat;
    background-size: 60%,70%;
    overflow: hidden
}

.text-gradient-orange {
    background: linear-gradient(270deg,#e7273d -1.95%,#df5f3b 97.95%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text
}

.featured-game-card:hover {
    transition: all 1s
}

.featured-game-card:hover img {
    filter: blur(40px)
}

.featured-game-card .blur-sharp {
    overflow: hidden;
    border-radius: 1rem
}

.cover {
    transition: all 1s;
    opacity: 0;
    left: 0;
    right: 0;
    border-radius: 1rem
}

.featured-game-card:hover .cover {
    transition: all 1s;
    opacity: 1;
    border-radius: 1rem
}

.icon-button {
    position: relative;
    display: inline-flex;
    border: 0;
    padding: 0;
    margin: 0;
    outline: none;
    background: #fff;
    border-radius: 50%;
    cursor: pointer;
    overflow: hidden;
    text-decoration: none;
    box-sizing: border-box;
    flex-shrink: 0
}

.flex-center,.icon-button {
    align-items: center;
    justify-content: center
}

.flex-center {
    display: flex
}

.grecaptcha-badge {
    visibility: hidden
}

::-webkit-scrollbar {
    width: 8px;
    height: 2px;
    background-color: transparent
}

::-webkit-scrollbar-track {
    display: none
}

::-webkit-scrollbar-thumb {
    background-color: #c4c4c4;
    border-radius: .75rem
}

@keyframes  fadeInTop {
    0% {
        opacity: 0;
        transform: translateY(-50px)
    }

    to {
        opacity: 1;
        transform: translateY(0)
    }
}

.shadow-navbar {
    box-shadow: 0 100px 80px hsla(0,0%,89%,.07),0 41.7776px 33.4221px hsla(0,0%,89%,.05),0 22.3363px 17.869px hsla(0,0%,89%,.04),0 12.5216px 10.0172px hsla(0,0%,89%,.04),0 6.6501px 5.32008px hsla(0,0%,89%,.03),0 2.76726px 2.21381px hsla(0,0%,89%,.02)
}

.fade-in-top {
    animation: fadeInTop .4s ease-in-out both
}



.shadow-social-media {
    box-shadow: 0 0 20px hsla(0,0%,45%,.22)
}

select {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
    background-position: right .5rem center;
    background-repeat: no-repeat;
    background-size: 1.5em 1.5em;
    padding-right: 2.5rem;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact
}

.placeholder\:text-slate-400::-moz-placeholder {
    --tw-text-opacity: 1;
    color: rgb(148 163 184/var(--tw-text-opacity))
}

.placeholder\:text-slate-400::placeholder {
    --tw-text-opacity: 1;
    color: rgb(148 163 184/var(--tw-text-opacity))
}

.focus-within\:z-10:focus-within {
    z-index: 10
}

.focus-within\:text-slate-900:focus-within {
    --tw-text-opacity: 1;
    color: rgb(15 23 42/var(--tw-text-opacity))
}

.focus-within\:text-white:focus-within {
    --tw-text-opacity: 1;
    color: rgb(255 255 255/var(--tw-text-opacity))
}

.hover\:scale-105:hover {
    --tw-scale-x: 1.05;
    --tw-scale-y: 1.05
}

.hover\:scale-105:hover,.hover\:scale-110:hover {
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.hover\:scale-110:hover {
    --tw-scale-x: 1.1;
    --tw-scale-y: 1.1
}

.hover\:cursor-not-allowed:hover {
    cursor: not-allowed
}

.hover\:cursor-pointer:hover {
    cursor: pointer
}

.hover\:border-white:hover {
    --tw-border-opacity: 1;
    border-color: rgb(255 255 255/var(--tw-border-opacity))
}

.hover\:bg-btnPurple:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(112 127 235/var(--tw-bg-opacity))
}

.hover\:bg-btnPurple\/30:hover {
    background-color: rgba(112,127,235,.3)
}

.hover\:bg-gray-50:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251/var(--tw-bg-opacity))
}

.hover\:bg-orange-500:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(249 115 22/var(--tw-bg-opacity))
}

.hover\:bg-slate-50\/5:hover {
    background-color: rgba(248,250,252,.05)
}

.hover\:bg-opacity-30:hover {
    --tw-bg-opacity: 0.3
}

.hover\:text-white:hover {
    --tw-text-opacity: 1;
    color: rgb(255 255 255/var(--tw-text-opacity))
}

.hover\:underline:hover {
    text-decoration-line: underline
}

.hover\:opacity-80:hover {
    opacity: .8
}

.hover\:shadow-lg:hover {
    --tw-shadow: 0 10px 15px -3px rgba(0,0,0,.1),0 4px 6px -4px rgba(0,0,0,.1);
    --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color),0 4px 6px -4px var(--tw-shadow-color)
}

.hover\:shadow-lg:hover,.hover\:shadow-sm:hover {
    box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)
}

.hover\:shadow-sm:hover {
    --tw-shadow: 0 1px 2px 0 rgba(0,0,0,.05);
    --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color)
}

.focus\:z-20:focus {
    z-index: 20
}

.focus\:border-none:focus {
    border-style: none
}

.focus\:border-\[\#2D2EAD\]:focus {
    --tw-border-opacity: 1;
    border-color: rgb(45 46 173/var(--tw-border-opacity))
}

.focus\:border-\[\#707feb\]:focus {
    --tw-border-opacity: 1;
    border-color: rgb(112 127 235/var(--tw-border-opacity))
}

.focus\:border-indigo-700:focus {
    --tw-border-opacity: 1;
    border-color: rgb(67 56 202/var(--tw-border-opacity))
}

.focus\:outline-none:focus {
    outline: 2px solid transparent;
    outline-offset: 2px
}

.focus\:ring:focus {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color)
}

.focus\:ring-2:focus,.focus\:ring:focus {
    box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)
}

.focus\:ring-2:focus {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color)
}

.focus\:ring-\[\#2D2EAD\]:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(45 46 173/var(--tw-ring-opacity))
}

.focus\:ring-indigo-500:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(99 102 241/var(--tw-ring-opacity))
}

.focus\:ring-white:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(255 255 255/var(--tw-ring-opacity))
}

.focus\:ring-offset-2:focus {
    --tw-ring-offset-width: 2px
}

.focus\:duration-300:focus {
    transition-duration: .3s
}

.focus-visible\:ring-2:focus-visible {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)
}

.focus-visible\:ring-white:focus-visible {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(255 255 255/var(--tw-ring-opacity))
}

.focus-visible\:ring-opacity-75:focus-visible {
    --tw-ring-opacity: 0.75
}

.disabled\:cursor-not-allowed:disabled {
    cursor: not-allowed
}

.group:hover .group-hover\:text-btnPurple {
    --tw-text-opacity: 1;
    color: rgb(112 127 235/var(--tw-text-opacity))
}

.group:hover .group-hover\:text-btnPurple\/50 {
    color: rgba(112,127,235,.5)
}

.group:hover .group-hover\:text-gray-500 {
    --tw-text-opacity: 1;
    color: rgb(107 114 128/var(--tw-text-opacity))
}

.peer:-moz-placeholder-shown~.peer-placeholder-shown\:translate-y-0 {
    --tw-translate-y: 0px;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.peer:placeholder-shown~.peer-placeholder-shown\:translate-y-0 {
    --tw-translate-y: 0px;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.peer:-moz-placeholder-shown~.peer-placeholder-shown\:scale-100 {
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.peer:placeholder-shown~.peer-placeholder-shown\:scale-100 {
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.peer:focus~.peer-focus\:-translate-y-3 {
    --tw-translate-y: -0.75rem
}

.peer:focus~.peer-focus\:-translate-y-3,.peer:focus~.peer-focus\:scale-75 {
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
}

.peer:focus~.peer-focus\:scale-75 {
    --tw-scale-x: .75;
    --tw-scale-y: .75
}

@media (prefers-color-scheme: dark) {
    .dark\:border-gray-700 {
        --tw-border-opacity:1;
        border-color: rgb(55 65 81/var(--tw-border-opacity))
    }

    .dark\:bg-blue-200 {
        --tw-bg-opacity: 1;
        background-color: rgb(191 219 254/var(--tw-bg-opacity))
    }

    .dark\:bg-orange-200 {
        --tw-bg-opacity: 1;
        background-color: rgb(254 215 170/var(--tw-bg-opacity))
    }

    .dark\:text-blue-800 {
        --tw-text-opacity: 1;
        color: rgb(30 64 175/var(--tw-text-opacity))
    }

    .dark\:text-gray-600 {
        --tw-text-opacity: 1;
        color: rgb(75 85 99/var(--tw-text-opacity))
    }

    .dark\:text-orange-800 {
        --tw-text-opacity: 1;
        color: rgb(154 52 18/var(--tw-text-opacity))
    }
}

@media (min-width: 640px) {
    .sm\:static {
        position:static
    }

    .sm\:inset-auto {
        top: auto;
        right: auto;
        bottom: auto;
        left: auto
    }

    .sm\:col-span-2 {
        grid-column: span 2/span 2
    }

    .sm\:mx-16 {
        margin-left: 4rem;
        margin-right: 4rem
    }

    .sm\:my-16 {
        margin-top: 4rem;
        margin-bottom: 4rem
    }

    .sm\:my-8 {
        margin-top: 2rem;
        margin-bottom: 2rem
    }

    .sm\:-mr-10 {
        margin-right: -2.5rem
    }

    .sm\:ml-3 {
        margin-left: .75rem
    }

    .sm\:ml-4 {
        margin-left: 1rem
    }

    .sm\:ml-6 {
        margin-left: 1.5rem
    }

    .sm\:mt-0 {
        margin-top: 0
    }

    .sm\:mt-2 {
        margin-top: .5rem
    }

    .sm\:mt-4 {
        margin-top: 1rem
    }

    .sm\:mt-6 {
        margin-top: 1.5rem
    }

    .sm\:block {
        display: block
    }

    .sm\:flex {
        display: flex
    }

    .sm\:grid {
        display: grid
    }

    .sm\:hidden {
        display: none
    }

    .sm\:h-\[14\.4rem\] {
        height: 14.4rem
    }

    .sm\:max-h-\[11\.5rem\] {
        max-height: 11.5rem
    }

    .sm\:w-auto {
        width: auto
    }

    .sm\:w-full {
        width: 100%
    }

    .sm\:max-w-lg {
        max-width: 32rem
    }

    .sm\:scale-100 {
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .sm\:grid-cols-2 {
        grid-template-columns: repeat(2,minmax(0,1fr))
    }

    .sm\:grid-cols-3 {
        grid-template-columns: repeat(3,minmax(0,1fr))
    }

    .sm\:grid-cols-4 {
        grid-template-columns: repeat(4,minmax(0,1fr))
    }

    .sm\:flex-row-reverse {
        flex-direction: row-reverse
    }

    .sm\:items-start {
        align-items: flex-start
    }

    .sm\:items-end {
        align-items: flex-end
    }

    .sm\:items-center {
        align-items: center
    }

    .sm\:justify-start {
        justify-content: flex-start
    }

    .sm\:justify-between {
        justify-content: space-between
    }

    .sm\:gap-3 {
        gap: .75rem
    }

    .sm\:gap-4 {
        gap: 1rem
    }

    .sm\:gap-x-0 {
        -moz-column-gap: 0;
        column-gap: 0
    }

    .sm\:rounded-lg {
        border-radius: .5rem
    }

    .sm\:rounded-md {
        border-radius: .375rem
    }

    .sm\:p-0 {
        padding: 0
    }

    .sm\:p-6 {
        padding: 1.5rem
    }

    .sm\:px-16 {
        padding-left: 4rem;
        padding-right: 4rem
    }

    .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .sm\:py-12 {
        padding-top: 3rem;
        padding-bottom: 3rem
    }

    .sm\:py-16 {
        padding-top: 4rem;
        padding-bottom: 4rem
    }

    .sm\:py-2 {
        padding-top: .5rem;
        padding-bottom: .5rem
    }

    .sm\:py-24 {
        padding-top: 6rem;
        padding-bottom: 6rem
    }

    .sm\:py-32 {
        padding-top: 8rem;
        padding-bottom: 8rem
    }

    .sm\:py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem
    }

    .sm\:pb-\[0\.5rem\] {
        padding-bottom: .5rem
    }

    .sm\:pl-4 {
        padding-left: 1rem
    }

    .sm\:pr-0 {
        padding-right: 0
    }

    .sm\:text-left {
        text-align: left
    }

    .sm\:text-2xl {
        font-size: 1.5rem;
        line-height: 2rem
    }

    .sm\:text-sm {
        font-size: .875rem;
        line-height: 1.25rem
    }

    .sm\:text-xl {
        font-size: 1.25rem;
        line-height: 1.75rem
    }
}

@media (min-width: 768px) {
    .md\:static {
        position:static
    }

    .md\:inset-y-0 {
        top: 0;
        bottom: 0
    }

    .md\:left-0 {
        left: 0
    }

    .md\:col-span-11 {
        grid-column: span 11/span 11
    }

    .md\:col-span-6 {
        grid-column: span 6/span 6
    }

    .md\:col-span-7 {
        grid-column: span 7/span 7
    }

    .md\:my-12 {
        margin-top: 3rem;
        margin-bottom: 3rem
    }

    .md\:-mt-2 {
        margin-top: -.5rem
    }

    .md\:mb-12 {
        margin-bottom: 3rem
    }

    .md\:mb-2 {
        margin-bottom: .5rem
    }

    .md\:mt-1 {
        margin-top: .25rem
    }

    .md\:mt-10 {
        margin-top: 2.5rem
    }

    .md\:mt-16 {
        margin-top: 4rem
    }

    .md\:mt-3 {
        margin-top: .75rem
    }

    .md\:mt-6 {
        margin-top: 1.5rem
    }

    .md\:block {
        display: block
    }

    .md\:flex {
        display: flex
    }

    .md\:inline-flex {
        display: inline-flex
    }

    .md\:hidden {
        display: none
    }

    .md\:h-16 {
        height: 4rem
    }

    .md\:h-32 {
        height: 8rem
    }

    .md\:h-\[110px\] {
        height: 110px
    }

    .md\:h-\[480px\] {
        height: 480px
    }

    .md\:max-h-\[11\.5rem\] {
        max-height: 11.5rem
    }

    .md\:w-1\/2 {
        width: 50%
    }

    .md\:w-16 {
        width: 4rem
    }

    .md\:w-28 {
        width: 7rem
    }

    .md\:w-32 {
        width: 8rem
    }

    .md\:w-56 {
        width: 14rem
    }

    .md\:w-64 {
        width: 16rem
    }

    .md\:w-72 {
        width: 18rem
    }

    .md\:w-\[270px\] {
        width: 270px
    }

    .md\:w-\[75\%\] {
        width: 75%
    }

    .md\:max-w-\[18rem\] {
        max-width: 18rem
    }

    .md\:max-w-\[3\.3rem\] {
        max-width: 3.3rem
    }

    .md\:grid-cols-2 {
        grid-template-columns: repeat(2,minmax(0,1fr))
    }

    .md\:grid-cols-3 {
        grid-template-columns: repeat(3,minmax(0,1fr))
    }

    .md\:grid-cols-5 {
        grid-template-columns: repeat(5,minmax(0,1fr))
    }

    .md\:flex-row {
        flex-direction: row
    }

    .md\:flex-col {
        flex-direction: column
    }

    .md\:items-start {
        align-items: flex-start
    }

    .md\:items-center {
        align-items: center
    }

    .md\:justify-center {
        justify-content: center
    }

    .md\:justify-between {
        justify-content: space-between
    }

    .md\:gap-0 {
        gap: 0
    }

    .md\:gap-16 {
        gap: 4rem
    }

    .md\:gap-2 {
        gap: .5rem
    }

    .md\:gap-3 {
        gap: .75rem
    }

    .md\:gap-8 {
        gap: 2rem
    }

    .md\:space-x-10>:not([hidden])~:not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(2.5rem * var(--tw-space-x-reverse));
        margin-left: calc(2.5rem * calc(1 - var(--tw-space-x-reverse)))
    }

    .md\:space-x-2>:not([hidden])~:not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(.5rem * var(--tw-space-x-reverse));
        margin-left: calc(.5rem * calc(1 - var(--tw-space-x-reverse)))
    }

    .md\:rounded-none {
        border-radius: 0
    }

    .md\:rounded-l-full {
        border-top-left-radius: 9999px;
        border-bottom-left-radius: 9999px
    }

    .md\:border-b-0 {
        border-bottom-width: 0
    }

    .md\:border-r {
        border-right-width: 1px
    }

    .md\:px-12 {
        padding-left: 3rem;
        padding-right: 3rem
    }

    .md\:px-14 {
        padding-left: 3.5rem;
        padding-right: 3.5rem
    }

    .md\:px-4 {
        padding-left: 1rem;
        padding-right: 1rem
    }

    .md\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .md\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem
    }

    .md\:py-5 {
        padding-top: 1.25rem;
        padding-bottom: 1.25rem
    }

    .md\:py-8 {
        padding-top: 2rem;
        padding-bottom: 2rem
    }

    .md\:pb-\[1rem\] {
        padding-bottom: 1rem
    }

    .md\:pl-12 {
        padding-left: 3rem
    }

    .md\:pt-16 {
        padding-top: 4rem
    }

    .md\:pt-8 {
        padding-top: 2rem
    }

    .md\:text-start {
        text-align: start
    }

    .md\:text-2xl {
        font-size: 1.5rem;
        line-height: 2rem
    }

    .md\:text-\[14px\] {
        font-size: 14px
    }

    .md\:text-\[15px\] {
        font-size: 15px
    }

    .md\:text-\[20px\] {
        font-size: 20px
    }

    .md\:text-\[28px\] {
        font-size: 28px
    }

    .md\:text-base {
        font-size: 1rem;
        line-height: 1.5rem
    }

    .md\:text-xl {
        font-size: 1.25rem;
        line-height: 1.75rem
    }
}

@media (min-width: 1024px) {
    .lg\:static {
        position:static
    }

    .lg\:col-span-12 {
        grid-column: span 12/span 12
    }

    .lg\:col-span-3 {
        grid-column: span 3/span 3
    }

    .lg\:col-span-4 {
        grid-column: span 4/span 4
    }

    .lg\:col-span-6 {
        grid-column: span 6/span 6
    }

    .lg\:col-span-7 {
        grid-column: span 7/span 7
    }

    .lg\:col-span-8 {
        grid-column: span 8/span 8
    }

    .lg\:col-span-9 {
        grid-column: span 9/span 9
    }

    .lg\:mb-12 {
        margin-bottom: 3rem
    }

    .lg\:mt-0 {
        margin-top: 0
    }

    .lg\:mt-16 {
        margin-top: 4rem
    }

    .lg\:mt-4 {
        margin-top: 1rem
    }

    .lg\:block {
        display: block
    }

    .lg\:flex {
        display: flex
    }

    .lg\:grid {
        display: grid
    }

    .lg\:hidden {
        display: none
    }

    .lg\:h-10 {
        height: 2.5rem
    }

    .lg\:h-14 {
        height: 3.5rem
    }

    .lg\:h-60 {
        height: 15rem
    }

    .lg\:h-\[14\.4rem\] {
        height: 14.4rem
    }

    .lg\:h-\[170px\] {
        height: 170px
    }

    .lg\:h-\[22\.5rem\] {
        height: 22.5rem
    }

    .lg\:h-\[500px\] {
        height: 500px
    }

    .lg\:max-h-\[14rem\] {
        max-height: 14rem
    }

    .lg\:w-14 {
        width: 3.5rem
    }

    .lg\:w-64 {
        width: 16rem
    }

    .lg\:w-72 {
        width: 18rem
    }

    .lg\:w-80 {
        width: 20rem
    }

    .lg\:w-\[100\%\] {
        width: 100%
    }

    .lg\:w-\[170px\] {
        width: 170px
    }

    .lg\:w-\[300px\] {
        width: 300px
    }

    .lg\:w-\[35\%\] {
        width: 35%
    }

    .lg\:min-w-0 {
        min-width: 0
    }

    .lg\:max-w-6xl {
        max-width: 72rem
    }

    .lg\:max-w-\[20rem\] {
        max-width: 20rem
    }

    .lg\:max-w-\[3\.5rem\] {
        max-width: 3.5rem
    }

    .lg\:flex-1 {
        flex: 1 1 0%
    }

    .lg\:grid-cols-2 {
        grid-template-columns: repeat(2,minmax(0,1fr))
    }

    .lg\:grid-cols-3 {
        grid-template-columns: repeat(3,minmax(0,1fr))
    }

    .lg\:grid-cols-4 {
        grid-template-columns: repeat(4,minmax(0,1fr))
    }

    .lg\:grid-cols-6 {
        grid-template-columns: repeat(6,minmax(0,1fr))
    }

    .lg\:flex-row {
        flex-direction: row
    }

    .lg\:flex-col {
        flex-direction: column
    }

    .lg\:content-between {
        align-content: space-between
    }

    .lg\:items-start {
        align-items: flex-start
    }

    .lg\:items-center {
        align-items: center
    }

    .lg\:justify-between {
        justify-content: space-between
    }

    .lg\:gap-0 {
        gap: 0
    }

    .lg\:gap-10 {
        gap: 2.5rem
    }

    .lg\:gap-2 {
        gap: .5rem
    }

    .lg\:gap-20 {
        gap: 5rem
    }

    .lg\:gap-4 {
        gap: 1rem
    }

    .lg\:gap-6 {
        gap: 1.5rem
    }

    .lg\:gap-x-16 {
        -moz-column-gap: 4rem;
        column-gap: 4rem
    }

    .lg\:gap-x-4 {
        -moz-column-gap: 1rem;
        column-gap: 1rem
    }

    .lg\:gap-x-\[58px\] {
        -moz-column-gap: 58px;
        column-gap: 58px
    }

    .lg\:overflow-y-visible {
        overflow-y: visible
    }

    .lg\:rounded-2xl {
        border-radius: 1rem
    }

    .lg\:border-b-0 {
        border-bottom-width: 0
    }

    .lg\:border-r {
        border-right-width: 1px
    }

    .lg\:p-0 {
        padding: 0
    }

    .lg\:px-0 {
        padding-left: 0;
        padding-right: 0
    }

    .lg\:px-10 {
        padding-left: 2.5rem;
        padding-right: 2.5rem
    }

    .lg\:px-11 {
        padding-left: 2.75rem;
        padding-right: 2.75rem
    }

    .lg\:px-12 {
        padding-left: 3rem;
        padding-right: 3rem
    }

    .lg\:px-14 {
        padding-left: 3.5rem;
        padding-right: 3.5rem
    }

    .lg\:px-16 {
        padding-left: 4rem;
        padding-right: 4rem
    }

    .lg\:px-20 {
        padding-left: 5rem;
        padding-right: 5rem
    }

    .lg\:px-7 {
        padding-left: 1.75rem;
        padding-right: 1.75rem
    }

    .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem
    }

    .lg\:px-\[3\.2rem\] {
        padding-left: 3.2rem;
        padding-right: 3.2rem
    }

    .lg\:py-24 {
        padding-top: 6rem;
        padding-bottom: 6rem
    }

    .lg\:py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem
    }

    .lg\:py-8 {
        padding-top: 2rem;
        padding-bottom: 2rem
    }

    .lg\:pb-\[3\.5rem\] {
        padding-bottom: 3.5rem
    }

    .lg\:pr-2 {
        padding-right: .5rem
    }

    .lg\:pt-10 {
        padding-top: 2.5rem
    }

    .lg\:pt-14 {
        padding-top: 3.5rem
    }

    .lg\:pt-24 {
        padding-top: 6rem
    }

    .lg\:text-start {
        text-align: start
    }

    .lg\:text-2xl {
        font-size: 1.5rem;
        line-height: 2rem
    }

    .lg\:text-4xl {
        font-size: 2.25rem;
        line-height: 2.5rem
    }

    .lg\:text-\[14px\] {
        font-size: 14px
    }

    .lg\:text-\[15px\] {
        font-size: 15px
    }

    .lg\:text-\[16px\] {
        font-size: 16px
    }

    .lg\:text-\[20px\] {
        font-size: 20px
    }

    .lg\:text-\[26px\] {
        font-size: 26px
    }

    .lg\:text-\[30px\] {
        font-size: 30px
    }

    .lg\:text-\[32px\] {
        font-size: 32px
    }

    .lg\:text-lg {
        font-size: 1.125rem;
        line-height: 1.75rem
    }
}

@media (min-width: 1280px) {
    .xl\:col-span-1 {
        grid-column:span 1/span 1
    }

    .xl\:col-span-2 {
        grid-column: span 2/span 2
    }

    .xl\:col-span-4 {
        grid-column: span 4/span 4
    }

    .xl\:col-span-6 {
        grid-column: span 6/span 6
    }

    .xl\:col-span-8 {
        grid-column: span 8/span 8
    }

    .xl\:mt-0 {
        margin-top: 0
    }

    .xl\:block {
        display: block
    }

    .xl\:flex {
        display: flex
    }

    .xl\:w-auto {
        width: auto
    }

    .xl\:w-full {
        width: 100%
    }

    .xl\:max-w-\[1280px\] {
        max-width: 1280px
    }

    .xl\:grid-cols-6 {
        grid-template-columns: repeat(6,minmax(0,1fr))
    }

    .xl\:gap-4 {
        gap: 1rem
    }

    .xl\:px-7 {
        padding-left: 1.75rem;
        padding-right: 1.75rem
    }

    .xl\:text-center {
        text-align: center
    }

    .xl\:text-2xl {
        font-size: 1.5rem;
        line-height: 2rem
    }

    .xl\:text-base {
        font-size: 1rem;
        line-height: 1.5rem
    }
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
.rounded-md {
    border-radius: 0.375rem;
}
.justify-center {
    justify-content: center;
}
.w-full {
    width: 100%;
}
.inline-flex {
    display: inline-flex;
}
[type=button], [type=reset], [type=submit], button {
    -webkit-appearance: button;
    background-color: transparent;
    background-image: none;
}
[role=button], button {
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select, textarea {
    font-family: inherit;
    font-size: 100%;
    font-weight: inherit;
    line-height: inherit;
    color: inherit;
    margin: 0;
    padding: 0;
}

.gap-4 {
    gap: 1rem;
}
.items-center {
    align-items: center;
}
.flex-1 {
    flex: 1 1 0%;
}
.flex {
    display: flex;
}
.ml-12 {
    margin-left: 3rem;
}


.pr-2 {
    padding-right: 0.5rem;
}

.items-center {
    align-items: center;
}
.flex {
    display: flex;
}
.right-0 {
    right: 0;
}
.inset-y-0 {
    top: 0;
    bottom: 0;
}
.absolute {
    position: absolute;
}

.css-18exuzb {
    color: rgb(255, 255, 255);
    background: var(--warna_2);
}
.ring-opacity-5 {
    --tw-ring-opacity: 0.05;
}
.ring-black {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(0 0 0/var(--tw-ring-opacity));
}
.ring-1 {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000);
}
.shadow-lg {
    --tw-shadow: 0 10px 15px -3px rgba(0,0,0,.1),0 4px 6px -4px rgba(0,0,0,.1);
    --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color),0 4px 6px -4px var(--tw-shadow-color);
}
.shadow-2xl, .shadow-lg {
    box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow);
}
.opacity-100 {
    opacity: 1;
}
.rounded-md {
    border-radius: 0.375rem;
}
.transform {
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.scale-100 {
    --tw-scale-x: 1;
    --tw-scale-y: 1;
}
.rotate-180, .scale-100 {
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.origin-top-right {
    transform-origin: top right;
}
.w-72 {
    width: 18rem;
}
.mt-2 {
    margin-top: 0.5rem;
}
.right-0 {
    right: 0;
}
.absolute {
    position: absolute;
}

.css-1wpp9sf {
    color: rgb(255, 255, 255);
    background: rgb(245, 121, 30);
}

.css-mxl5am {
    color: rgb(255, 255, 255);
    background: rgb(112, 127, 235);
}
.duration-300 {
    transition-duration: .3s;
}
.transition {
    transition-property: color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;
    transition-property: color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;
    transition-property: color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    transition-duration: .15s;
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
.rounded-l-full {
    border-top-left-radius: 9999px;
    border-bottom-left-radius: 9999px;
}
.justify-center {
    justify-content: center;
}
.w-full {
    width: 100%;
}
.flex {
    display: flex;
}

.w-auto {
    width: auto;
}
.h-10 {
    height: 3rem;
}
.block {
    display: block;
}
img, video {
    max-width: 100%;
    height: auto;
}
audio, canvas, embed, iframe, img, object, svg, video {
    display: block;
    vertical-align: middle;
}

 .offcanvas {
        width: 100%;
        max-width: 250px;
    }

    /* Desktop */
    @media  screen and (min-width: 768px) {
        .offcanvas {
            width: 350px;
        
        }
    }
    
    .css-1tq05rq {
    color: rgb(255, 255, 255);
}
.font-medium {
    font-weight: 500;
}
.text-base {
    font-size: 1rem;
    line-height: 1.5rem;
}
.p-2 {
    padding: 0.5rem;
}
.rounded-md {
    border-radius: 0.375rem;
}
.items-center {
    align-items: center;
}
.flex {
    display: flex;
}</style>
<style>.py-6{padding-top:1.5rem;padding-bottom:1.5rem}.px-4{padding-left:1rem;padding-right:1rem}.items-end{align-items:flex-end}.flex{display:flex}.z-50{z-index:50}.inset-0,.inset-x-0{right:0;left:0}.inset-0{top:0;bottom:0}.fixed{position:fixed}.pointer-events-none{pointer-events:none}.flip-card{position:relative;display:inline-flexbox;flex-direction:column;box-shadow:0 2px 3px 0 rgba(0,0,0,.2);border-radius:.1em;color:#fff}.top,.bottom,.flip-card .top-flip,.flip-card .bottom-flip{height:.75em;line-height:1;padding:.25em;overflow:hidden}.top,.flip-card .top-flip{background-image:linear-gradient(to top,#cd1f1f,#c31d1c,#b81a1a,#ae1817,#a41515);border-top-right-radius:.1em;border-top-left-radius:.1em;border-bottom:1px solid rgba(0,0,0,.1)}.bottom,.flip-card .bottom-flip{background-image:linear-gradient(to top,#cd1f1f,#c31d1c,#b81a1a,#ae1817,#a41515);display:flex;align-items:flex-end;border-bottom-right-radius:.1em;border-bottom-left-radius:.1em}.flip-card .top-flip{position:absolute;width:100%;animation:flip-top 250ms ease-in;transform-origin:bottom}@keyframes flip-top{100%{transform:rotateX(90deg)}}.flip-card .bottom-flip{position:absolute;bottom:0;width:100%;animation:flip-bottom 250ms ease-out 250ms;transform-origin:top;transform:rotateX(90deg)}@keyframes flip-bottom{100%{transform:rotateX(0deg)}}.container-countdown{display:flex;gap:.5em;justify-content:center}@media (max-width:568px){.container-countdown{justify-content:flex-end}}.container-segment{display:flex;gap:.1em;align-items:center}.segment{display:flex;gap:.1em}.segment-title{font-size:1rem}.font-bold{font-weight:700}.outline-none{outline:2px solid transparent;outline-offset:2px}.text-primary-500{--tw-text-opacity:1;color:rgb(249 115 22/var(--tw-text-opacity))}.font-medium{font-weight:500}.text-sm{font-size:.875rem;line-height:1.25rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-3{padding-left:.75rem;padding-right:.75rem}.to-murky-800{--tw-gradient-to:var(--warna_1)}.from-murky-700{--tw-gradient-from:var(--warna_1);--tw-gradient-to:rgba(61,67,72,0);--tw-gradient-stops:var(--tw-gradient-from),var(--tw-gradient-to)}.bg-gradient-to-t{background-image:linear-gradient(to top,var(--tw-gradient-stops))}.border-primary-500{--tw-border-opacity:1;border-color:#e10603}.border-b-2{border-bottom-width:2px}.truncate,.whitespace-nowrap{white-space:nowrap}.flex{display:flex}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}[role=button],button{cursor:pointer}button,select{text-transform:none}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}.overflow-auto{overflow:auto}.flex{display:flex}.-mb-px{margin-bottom:-1px}.hide-scrollbar{-ms-overflow-style:none;scrollbar-width:none}.bg-gradient-to-t{background-image:linear-gradient(to top,var(--tw-gradient-stops))}.bg-gradient-to-t:hover{background-image:linear-gradient(to top,var(--tw-gradient-stops))}.from-murky-700:hover{--tw-gradient-from:var(--warna_1);--tw-gradient-to:rgb(0 70 128 / 0%);--tw-gradient-stops:var(--warna_3),rgb(205 205 205 / 0%)}.text-yellow-400{--tw-text-opacity:1;color:rgb(250 204 21/var(--tw-text-opacity))}.animate-flicker{-webkit-animation:flicker 5s linear infinite;animation:flicker 5s linear infinite}.w-8{width:2rem}.h-8{height:2rem}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}@-webkit-keyframes flicker{0%,19.999%,22%,62.999%,64%,64.999%,70%,to{opacity:.99;filter:drop-shadow(0 0 1px rgba(252,211,77)) drop-shadow(0 0 15px rgba(245,158,11)) drop-shadow(0 0 1px rgba(252,211,77))}20%,21.999%,63%,63.999%,65%,69.999%{opacity:.4;filter:none}}@keyframes flicker{0%,19.999%,22%,62.999%,64%,64.999%,70%,to{opacity:.99;filter:drop-shadow(0 0 1px rgba(252,211,77)) drop-shadow(0 0 15px rgba(245,158,11)) drop-shadow(0 0 1px rgba(252,211,77))}20%,21.999%,63%,63.999%,65%,69.999%{opacity:.4;filter:none}}.border-primary-500.active,.border-primary-500.show>.border-primary-500 .bg-gradient-to-t{border-color:#fff}.border-primary-500{--tw-border-opacity:1;border-color:var(--warna_1)}.border-primary-500:hover{--tw-border-opacity:1;border-color:#fff}.border-gray-500{--tw-border-opacity:1;border-color:rgb(107 104 128/var(--tw-border-opacity))}.-mb-px{margin-bottom:-9px}.flash-sale-carousel .swiper-wrapper .swiper-slide .bg{background-size:cover;background-repeat:no-repeat;background-position:top;position:relative;top:-1px;height:150px}.swiper-pointer-events{touch-action:pan-y}.swiper{margin-left:auto;margin-right:auto;position:relative;overflow:hidden;list-style:none;padding:0;z-index:1}.flash-sale-carousel .swiper-wrapper .swiper-slide .contents{position:relative;z-index:91;top:10px}.flash-sale-carousel .swiper-wrapper .swiper-slide .contents .logo{margin:10px 15px 0;height:40px;width:40px;overflow:hidden;border-radius:100%;border:1px solid #fff}.flash-sale-carousel .swiper-wrapper .swiper-slide .contents .logo img{height:100%;width:100%}.flash-sale-carousel .swiper-wrapper .swiper-slide .contents .text-area{padding:8px 15px 13px}.flash-sale-carousel .swiper-wrapper .swiper-slide .contents .text-area__denom span{font-size:14px;font-family:Montserrat,sans-serif;color:#fff;font-weight:lighter;overflow:hidden;-webkit-box-orient:vertical;display:-webkit-box;-webkit-line-clamp:1;text-overflow:ellipsis}.flash-sale-carousel .swiper-wrapper .swiper-slide .contents .text-area__prize{display:flex;margin:5px 0 7px}.flash-sale-carousel .swiper-wrapper .swiper-slide .contents .text-area__prize h4:first-child{font-size:16px;color:#fff;font-family:Montserrat-Semibold,sans-serif;font-weight:600}.flash-sale-carousel .swiper-wrapper .swiper-slide .contents .text-area__prize h4:last-child{margin-left:10px;font-size:12px;color:#fff;font-family:Montserrat,sans-serif;text-decoration:line-through}.flash-sale-carousel .swiper-wrapper .swiper-slide .contents .text-area progress-bar .progress-outer{padding:0;margin:5px 0!important;border-radius:8px 0 0 8px;height:4px;overflow:hidden;border:none;background:rgba(180,180,192,.5);width:98%;color:#d0021b}.flash-sale-carousel .swiper-wrapper .swiper-slide .contents .text-area progress-bar .progress-outer .progress-inner{border-radius:0;min-width:0}[_nghost-vyn-c95] .progress-outer .progress-inner{border-radius:0;min-width:0}.progress-inner[_ngcontent-vyn-c94]{min-width:15%;min-height:18px;white-space:nowrap;overflow:hidden;padding:0;border-radius:20px}.flash-sale-carousel .swiper-wrapper .swiper-slide .contents .text-area__sold h4{margin-top:5px;margin-bottom:14px;font-size:14px;color:#fff;font-family:Montserrat,sans-serif}[_nghost-vyn-c95] .url{z-index:101}.url{position:absolute;inset:0;z-index:91}.flash-sale-carousel .swiper-wrapper .swiper-slide{position:relative;min-width:290px;width:287px;border-radius:8px;overflow:hidden;margin-right:10px!important}.swiper-virtual .swiper-slide{-webkit-backface-visibility:hidden;transform:translateZ(0)}.flash-sale-carousel .swiper-wrapper .swiper-slide:before{position:absolute;content:"";inset:0;background:linear-gradient(to bottom,rgba(0,0,0,0) 0%,#4c4c52);z-index:0}*:before,*:after{box-sizing:border-box}.flash-sale-far-right{position:absolute;left:9000px}.product-wrap .product-content-lists__item .mat-tab-body-content{overflow-y:hidden}.mat-tab-body-content{height:100%;overflow:auto}.mat-tab-body-wrapper{position:relative;overflow:hidden;display:flex;transition:height 500ms cubic-bezier(.35,0,.25,1)}.mat-tab-body.mat-tab-body-active{position:relative;overflow-x:hidden;overflow-y:auto;z-index:0;flex-grow:1}.mat-tab-body{top:0;left:0;right:0;bottom:0;position:absolute;display:block;overflow:hidden;outline:0;flex-basis:100%}.product-wrap .product-content-lists__item .mat-tab-body-content{overflow-y:hidden}.mat-tab-body-content{height:100%;overflow:auto}.flash-sale-countdown[_ngcontent-vyn-c93]{display:flex;padding-top:20px}.flash-sale-countdown__item[_ngcontent-vyn-c93] .flash-sale-count[_ngcontent-vyn-c93] .count-text[_ngcontent-vyn-c93]{margin-right:10px;min-width:140px;min-height:23px}.flash-sale-countdown__item[_ngcontent-vyn-c93] .flash-sale-count__item[_ngcontent-vyn-c93]{display:inline-block;vertical-align:middle}.flash-sale-countdown__item[_ngcontent-vyn-c93] .flash-sale-count[_ngcontent-vyn-c93] .count-text[_ngcontent-vyn-c93] span[_ngcontent-vyn-c93],.flash-sale-countdown__item[_ngcontent-vyn-c93] .flash-sale-count[_ngcontent-vyn-c93] .count-number[_ngcontent-vyn-c93] span[_ngcontent-vyn-c93]{text-align:center}.flash-sale-countdown__item[_ngcontent-vyn-c93] .flash-sale-count[_ngcontent-vyn-c93] span[_ngcontent-vyn-c93]{font-family:Montserrat,sans-serif;font-size:16px;color:#fff}.flash-sale-countdown__item[_ngcontent-vyn-c93] .flash-sale-count[_ngcontent-vyn-c93] .count-number[_ngcontent-vyn-c93]{border-radius:4px;min-width:85px;text-align:center;min-height:20px}.flash-sale-countdown__item[_ngcontent-vyn-c93] .flash-sale-count__item[_ngcontent-vyn-c93]{display:inline-block;vertical-align:middle}.flash-sale-countdown__item[_ngcontent-vyn-c93] .flash-sale-count[_ngcontent-vyn-c93] .count-number[_ngcontent-vyn-c93] span[_ngcontent-vyn-c93]{position:relative;font-size:12px;top:-1px;width:85px;display:inline-block}.flash-sale-countdown__item[_ngcontent-vyn-c93] .flash-sale-count[_ngcontent-vyn-c93] .count-text[_ngcontent-vyn-c93] span[_ngcontent-vyn-c93],.flash-sale-countdown__item[_ngcontent-vyn-c93] .flash-sale-count[_ngcontent-vyn-c93] .count-number[_ngcontent-vyn-c93] span[_ngcontent-vyn-c93]{text-align:center}.flash-sale-countdown__item[_ngcontent-vyn-c93] .flash-sale-count[_ngcontent-vyn-c93] span[_ngcontent-vyn-c93]{font-family:Montserrat,sans-serif;font-size:16px;color:#fff}.flash-sale-carousel .swiper-button-prev.swiper-button-disabled{display:none}.product-wrap .product-content-lists__item .swiper-button-prev{top:40%}.swiper-button-next.swiper-button-disabled,.swiper-button-prev.swiper-button-disabled{opacity:.5;cursor:auto;pointer-events:none}.flash-sale-carousel .swiper-button-prev{left:0;top:50px;z-index:91;width:24px;height:96px;border-radius:4px;border:solid 1.2px rgba(255,255,255,.3);background-color:#161619cc}.product-wrap .product-content-lists__item .swiper-button-next{top:40%;margin-right:8px}.flash-sale-carousel .swiper-button-next{right:0;top:50px;z-index:91;width:24px;height:96px;border-radius:4px;border:solid 1.2px rgba(255,255,255,.3);background-color:#161619cc;margin-right:0!important}.swiper-button-next,.swiper-rtl .swiper-button-prev{right:10px;left:auto}.swiper-button-next,.swiper-button-prev{position:absolute;top:50%;width:27px;width:calc(var(--swiper-navigation-size) / 44 * 27);height:44px;height:var(--swiper-navigation-size);margin-top:-22px;margin-top:calc(0px - var(--swiper-navigation-size) / 2);z-index:10;cursor:pointer;display:flex;align-items:center;justify-content:center;color:#007aff;color:var(--swiper-navigation-color,var(--swiper-theme-color))}.product-wrap .product-content-lists__item .swiper-button-next{top:40%;margin-right:8px}.flash-sale-carousel .swiper-button-next{right:0;top:50px;z-index:91;width:24px;height:96px;border-radius:4px;border:solid 1.2px rgba(255,255,255,.3);background-color:#161619cc;margin-right:0!important}.swiper-button-next,.swiper-rtl .swiper-button-prev{right:10px;left:auto}.swiper-android .swiper-slide,.swiper-wrapper{transform:translate(0)}.swiper-wrapper{position:relative;width:100%;height:100%;z-index:1;display:flex;transition-property:transform;box-sizing:content-box}.flash-sale-carousel .swiper-wrapper .swiper-slide{position:relative;min-width:290px;width:287px;border-radius:8px;overflow:hidden;margin-right:10px!important}.swiper-virtual .swiper-slide{-webkit-backface-visibility:hidden;transform:translateZ(0)}.line-through{text-decoration-line:line-through}.text-\[\#FF2A2A\]{--tw-text-opacity:50;color:rgb(255 42 42/var(--tw-text-opacity))}.text-xs{font-size:.75rem;line-height:1rem}.ml-2{margin-left:.5rem}@media (max-width:750px){.flash-sale-carousel .swiper-wrapper .swiper-slide .bg{height:100%}.flash-sale-carousel .swiper-wrapper .swiper-slide .contents .logo{margin:10px 15px 0;height:35px;width:35px}.flash-sale-carousel .swiper-wrapper .swiper-slide .contents .text-area{padding:5px 15px 0}flash-sale-carousel .swiper-wrapper .swiper-slide .contents .text-area__prize{display:block;margin:10px 0 7px}.flash-sale-carousel .swiper-wrapper .swiper-slide .contents .text-area__sold h4{margin-top:6px;margin-bottom:8px;font-size:12px}.flash-sale-carousel .swiper-wrapper .swiper-slide{min-width:unset;width:42.5vw}}@media (min-width:280px){.content-body{margin:0 auto;max-width:1140px}}.content-body{padding:0 20px}.hover\:border-primary-500:hover{--tw-border-opacity:1;border-color:white:}.hover\:\!bg-murky-600:hover{--tw-bg-opacity:1!important;background-color:rgb(74 81 87/var(--tw-bg-opacity))!important}.hover\:\!bg-murky-800:hover{--tw-bg-opacity:1!important;background-color:rgb(52 55 59/var(--tw-bg-opacity))!important}.hover\:bg-murky-50:hover{--tw-bg-opacity:1;background-color:rgb(246 246 247/var(--tw-bg-opacity))}.hover\:bg-murky-500:hover{--tw-bg-opacity:1;background-color:rgb(94 102 110/var(--tw-bg-opacity))}.hover\:bg-murky-600:hover{--tw-bg-opacity:1;background-color:rgb(74 81 87/var(--tw-bg-opacity))}.hover\:bg-murky-700:hover{--tw-bg-opacity:1;background-color:#8a1111!important}.hover\:bg-murky-800:hover{--tw-bg-opacity:1;background-color:rgb(52 55 59/var(--tw-bg-opacity))}.hover\:bg-orange-400:hover,.hover\:bg-primary-400:hover{--tw-bg-opacity:1;background-color:rgb(251 146 60/var(--tw-bg-opacity))}.hover\:bg-primary-600:hover{--tw-bg-opacity:1;background-color:rgb(234 88 12/var(--tw-bg-opacity))}.hover\:from-murky-700:hover{--tw-gradient-from:#3d4348;--tw-gradient-to:rgba(61,67,72,0);--tw-gradient-stops:var(--tw-gradient-from),var(--tw-gradient-to)}.hover\:text-murky-500:hover{--tw-text-opacity:1;color:rgb(94 102 110/var(--tw-text-opacity))}.hover\:text-murky-800:hover{--tw-text-opacity:1;color:rgb(52 55 59/var(--tw-text-opacity))}.hover\:text-primary-200:hover{--tw-text-opacity:1;color:rgb(254 215 170/var(--tw-text-opacity))}.hover\:text-primary-300:hover{--tw-text-opacity:1;color:rgb(253 186 116/var(--tw-text-opacity))}.hover\:text-primary-400:hover{--tw-text-opacity:1;color:rgb(251 146 60/var(--tw-text-opacity))}.hover\:shadow-2xl:hover{--tw-shadow:0 25px 50px -12px rgba(0,0,0,.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.hover\:ring-2:hover{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)}.hover\:ring-primary-500:hover{--tw-ring-opacity:1;--tw-ring-color:#fff}.hover\:ring-offset-2:hover{--tw-ring-offset-width:2px}.hover\:ring-offset-murky-800:hover{--tw-ring-offset-color:#fff}.filter{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.backdrop-blur{--tw-backdrop-blur:blur(8px)}.backdrop-blur,.backdrop-blur-sm{-webkit-backdrop-filter:var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);backdrop-filter:var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia)}.backdrop-blur-sm{--tw-backdrop-blur:blur(4px)}.backdrop-filter{-webkit-backdrop-filter:var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);backdrop-filter:var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia)}.transition{transition-property:color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.transition-\[max-height\]{transition-property:max-height;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.transition-colors{transition-property:color,background-color,border-color,outline-color,text-decoration-color,fill,stroke;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.transition-opacity{transition-property:opacity;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.delay-150{transition-delay:.15s}.duration-100{transition-duration:.1s}.duration-150{transition-duration:.15s}.duration-200{transition-duration:.2s}.duration-300{transition-duration:.3s}.duration-700{transition-duration:.7s}.duration-75{transition-duration:75ms}.ease-in{transition-timing-function:cubic-bezier(.4,0,1,1)}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}.ease-linear{transition-timing-function:linear}.ease-out{transition-timing-function:cubic-bezier(0,0,.2,1)}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}.duration-300{transition-duration:.3s}.bg-murky-700{--tw-bg-opacity:1;background-color:rgb(61 67 72/var(--tw-bg-opacity))}.rounded-2xl{border-radius:1rem}.overflow-hidden{overflow:hidden}.scale-95,.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.relative{position:relative}</style>
@include('../navbar')
<body class=" text-white flex-column min-vh-100 "
    style="color:#ffffff;scroll-behavior:auto !important;background:var(--warna_1);">
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KX5ZSG5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
<main class="my-20 lg:mb-12 md:mb-12 min-h-[50vh]">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8 lg:px-14">
            <div class="pb-5 sm:flex sm:items-center sm:justify-between">
                <div>
                    <h2 class="text-base font-semibold uppercase leading-[26px] tracking-[0.2em]">TEMUKAN GAME</h2>
                    </div>
                    <div class="flex gap-4 md:gap-2 lg:gap-2" role="tablist" aria-label="Tabs" aria-orientation="horizontal">
                    <ul class="nav nav-pills justify-content-left akumauweb-scroll flex space-x-3 overflow-auto"
                            id="myTab" role="tablist">
                            <li class="nav-item me-1 nav-tab" role="presentation">
                                <button
                                    class="btn-category nav-link text-xl flex whitespace-nowrap border-b-2 py-2 px-3 outline-none border-primary-500 bg-gradient-to-t from-murky-700 to-murky-800 active"
                                    id="populer-tab" data-bs-toggle="tab" data-bs-target="#populer" type="button"
                                    role="tab" aria-controls="populer" aria-selected="true">
                                    <small>Best Seller</small>
                                </button>
                            </li>
                            <li class="nav-item me-1 nav-tab" role="presentation">
                                <button
                                    class="btn-category nav-link text-xl flex whitespace-nowrap border-b-2 py-2 px-3 outline-none border-primary-500 bg-gradient-to-t from-murky-700 to-murky-800"
                                    id="gamelainnya-tab" data-bs-toggle="tab" data-bs-target="#gamelainnya" type="button"
                                    role="tab" aria-controls="gamelainnya" aria-selected="true">
                                    <small>Game Lainnya</small>
                                </button>
                            </li>
                            <!--<li class="nav-item me-1 nav-tab" role="presentation">-->
                            <!--    <button-->
                            <!--        class="btn-category nav-link text-xl flex whitespace-nowrap border-b-2 py-2 px-3 outline-none border-primary-500 bg-gradient-to-t from-murky-700 to-murky-800 "-->
                            <!--        id="Top_Up-tab" data-bs-toggle="tab" data-bs-target="#Top_Up" type="button"-->
                            <!--        role="tab" aria-controls="game" aria-selected="true">-->
                            <!--        <small>Top up</small>-->
                            <!--    </button>-->
                            <!--</li>-->
                            <!--<li class="nav-item me-1 nav-tab" role="presentation">-->
                            <!--    <button-->
                            <!--        class="btn-category nav-link text-xl flex whitespace-nowrap border-b-2 py-2 px-3 outline-none border-primary-500 bg-gradient-to-t from-murky-700 to-murky-800 "-->
                            <!--        id="Voucher-tab" data-bs-toggle="tab" data-bs-target="#Voucher" type="button"-->
                            <!--        role="tab" aria-controls="game" aria-selected="true">-->
                            <!--        <small>Voucher</small>-->
                            <!--    </button>-->
                            <!--</li>-->
                            <!--<li class="nav-item me-1 nav-tab" role="presentation">-->
                            <!--    <button-->
                            <!--        class="btn-category nav-link text-xl flex whitespace-nowrap border-b-2 py-2 px-3 outline-none border-primary-500 bg-gradient-to-t from-murky-700 to-murky-800"-->
                            <!--        id="joki-tab" data-bs-toggle="tab" data-bs-target="#joki" type="button" role="tab"-->
                            <!--        aria-controls="joki" aria-selected="true">-->
                            <!--        <small>Special MLBB</small>-->
                            <!--    </button>-->
                            <!--</li>-->
                        </ul>
</div>
</div>
        <div class="tab-content" id="myTabContent">        
            <div class="tab-pane active" id="populer" role="tabpanel" aria-labelledby="populer-tab">
                        <div class="grid grid-cols-3 gap-2 sm:grid-cols-3 sm:gap-4 md:grid-cols-3 md:gap-2 lg:grid-cols-4 lg:gap-4 xl:grid-cols-6 xl:gap-4">@foreach($kategori as $kbrgori)@if($kbrgori->tipe == "populer" || $kbrgori->tipe == "game") 
                   <a href="{{ env('APP_URL').'/order/'.$kbrgori->kode }}"
                                class="featured-game-card relative hover:shadow-sm hover:cursor-pointer !rounded-[50px]">
                                <div class="blur-sharp">
                                    <div
                                        class="relative h-[9.4rem] sm:h-[14.4rem] md:h-[14.4rem] lg:h-[14.4rem] xl:w-auto">
                                        <img alt="{{ $kbrgori->nama }}" sizes="100vw" srcset="{{ $kbrgori->thumbnail }}"
                                            src="{{ $kbrgori->thumbnail }}" decoding="async" data-nimg="fill"
                                            class="object-cover object-center !hover:rounded-3xl" loading="lazy"
                                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    </div>
                                </div>
                                <div class="cover !absolute bottom-0 m-3 h-full">
                                    <div class="flex flex-col h-full justify-between no-underline">
                                        <div class="relative p-3 mx-auto my-auto h-15 w-10 lg:h-14 lg:w-14">
                                            <img alt="icon-mbgs" sizes="100vw"
                                                 srcset="{{ url('') }}{{ !$config ? '' : $config->logo_favicon }}"
                                                src="{{ url('') }}{{ !$config ? '' : $config->logo_favicon }}" decoding="async" data-nimg="fill"
                                                class="object-center object-cover" loading="lazy"
                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent; filter: brightness(0) invert(1);">
                                        </div>
                                        <div>
                                            <p
                                                class="font-semibold text-white text-[12px] lg:text-[16px] mb-1 line-clamp-2">
                                                {{ $kbrgori->nama }}</p>
                                            <p class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                {{ $kbrgori->sub_nama }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>@endif @endforeach
                </div>               
        </div>        
        <div class="tab-pane" id="gamelainnya" role="tabpanel" aria-labelledby="gamelainnya-tab">
                        <div class="grid grid-cols-3 gap-2 sm:grid-cols-3 sm:gap-4 md:grid-cols-3 md:gap-2 lg:grid-cols-4 lg:gap-4 xl:grid-cols-6 xl:gap-4">
                            @foreach($kategori as $kbrgori)@if($kbrgori->tipe == "gamelainnya") <a href="{{ env('APP_URL').'/order/'.$kbrgori->kode }}"
                                class="featured-game-card relative hover:shadow-sm hover:cursor-pointer !rounded-[50px]">
                                <div class="blur-sharp">
                                    <div
                                        class="relative h-[9.4rem] sm:h-[14.4rem] md:h-[14.4rem] lg:h-[14.4rem] xl:w-auto">
                                        <img alt="{{ $kbrgori->nama }}" sizes="100vw" srcset="{{ $kbrgori->thumbnail }}"
                                            src="{{ $kbrgori->thumbnail }}" decoding="async" data-nimg="fill"
                                            class="object-cover object-center !hover:rounded-3xl" loading="lazy"
                                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    </div>
                                </div>
                                <div class="cover !absolute bottom-0 m-3 h-full">
                                    <div class="flex flex-col h-full justify-between no-underline">
                                        <div class="relative p-3 mx-auto my-auto h-15 w-10 lg:h-14 lg:w-14">
                                            <img alt="icon-mbgs" sizes="100vw"
                                                 srcset="{{ url('') }}{{ !$config ? '' : $config->logo_favicon }}"
                                                src="{{ url('') }}{{ !$config ? '' : $config->logo_favicon }}" decoding="async" data-nimg="fill"
                                                class="object-center object-cover" loading="lazy"
                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent; filter: brightness(0) invert(1);">
                                        </div>
                                        <div>
                                            <p
                                                class="font-semibold text-white text-[12px] lg:text-[16px] mb-1 line-clamp-2">
                                                {{ $kbrgori->nama }}</p>
                                            <p class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                {{ $kbrgori->sub_nama }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>@endif @endforeach
                        </div>
                    </div>
                    <div class="tab-pane" id="joki" role="tabpanel" aria-labelledby="joki-tab">
                        <div class="grid grid-cols-3 gap-2 sm:grid-cols-3 sm:gap-4 md:grid-cols-3 md:gap-2 lg:grid-cols-4 lg:gap-4 xl:grid-cols-6 xl:gap-4">
                             @foreach($kategori as $kbrgori)@if($kbrgori->tipe == "joki") <a href="{{ env('APP_URL').'/order/'.$kbrgori->kode }}"
                                class="featured-game-card relative hover:shadow-sm hover:cursor-pointer !rounded-[50px]">
                                <div class="blur-sharp">
                                    <div
                                        class="relative h-[9.4rem] sm:h-[14.4rem] md:h-[14.4rem] lg:h-[14.4rem] xl:w-auto">
                                        <img alt="{{ $kbrgori->nama }}" sizes="100vw" srcset="{{ $kbrgori->thumbnail }}"
                                            src="{{ $kbrgori->thumbnail }}" decoding="async" data-nimg="fill"
                                            class="object-cover object-center !hover:rounded-3xl" loading="lazy"
                                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    </div>
                                </div>
                                <div class="cover !absolute bottom-0 m-3 h-full">
                                    <div class="flex flex-col h-full justify-between no-underline">
                                        <div class="relative p-3 mx-auto my-auto h-15 w-10 lg:h-14 lg:w-14">
                                            <img alt="icon-mbgs" sizes="100vw"
                                                 srcset="{{ url('') }}{{ !$config ? '' : $config->logo_favicon }}"
                                                src="{{ url('') }}{{ !$config ? '' : $config->logo_favicon }}" decoding="async" data-nimg="fill"
                                                class="object-center object-cover" loading="lazy"
                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent; filter: brightness(0) invert(1);">
                                        </div>
                                        <div>
                                            <p
                                                class="font-semibold text-white text-[12px] lg:text-[16px] mb-1 line-clamp-2">
                                                {{ $kbrgori->nama }}</p>
                                            <p class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                {{ $kbrgori->sub_nama }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>@endif @endforeach
                        </div>
                    </div>



                    <div class="tab-pane" id="Voucher" role="tabpanel" aria-labelledby="Voucher-tab">
                        <div class="grid grid-cols-3 gap-2 sm:grid-cols-3 sm:gap-4 md:grid-cols-3 md:gap-2 lg:grid-cols-4 lg:gap-4 xl:grid-cols-6 xl:gap-4">
                            @foreach($kategori as $kbrgori)@if($kbrgori->tipe == "voucher") <a href="{{ env('APP_URL').'/order/'.$kbrgori->kode }}"
                                class="featured-game-card relative hover:shadow-sm hover:cursor-pointer !rounded-[50px]">
                                <div class="blur-sharp">
                                    <div
                                        class="relative h-[9.4rem] sm:h-[14.4rem] md:h-[14.4rem] lg:h-[14.4rem] xl:w-auto">
                                        <img alt="{{ $kbrgori->nama }}" sizes="100vw" srcset="{{ $kbrgori->thumbnail }}"
                                            src="{{ $kbrgori->thumbnail }}" decoding="async" data-nimg="fill"
                                            class="object-cover object-center !hover:rounded-3xl" loading="lazy"
                                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    </div>
                                </div>
                                <div class="cover !absolute bottom-0 m-3 h-full">
                                    <div class="flex flex-col h-full justify-between no-underline">
                                        <div class="relative p-3 mx-auto my-auto h-15 w-10 lg:h-14 lg:w-14">
                                            <img alt="icon-mbgs" sizes="100vw"
                                                 srcset="{{ url('') }}{{ !$config ? '' : $config->logo_favicon }}"
                                                src="{{ url('') }}{{ !$config ? '' : $config->logo_favicon }}" decoding="async" data-nimg="fill"
                                                class="object-center object-cover" loading="lazy"
                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent; filter: brightness(0) invert(1);">
                                        </div>
                                        <div>
                                            <p
                                                class="font-semibold text-white text-[12px] lg:text-[16px] mb-1 line-clamp-2">
                                                {{ $kbrgori->nama }}</p>
                                            <p class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                {{ $kbrgori->sub_nama }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>@endif @endforeach
                        </div>
                    </div>

                    <div class="tab-pane" id="Pulsa" role="tabpanel" aria-labelledby="Pulsa-tab">
                        <div class="grid grid-cols-3 gap-2 sm:grid-cols-3 sm:gap-4 md:grid-cols-3 md:gap-2 lg:grid-cols-4 lg:gap-4 xl:grid-cols-6 xl:gap-4">
                            @foreach($kategori as $kbrgori)@if($kbrgori->tipe == "pulsa") <a href="{{ env('APP_URL').'/order/'.$kbrgori->kode }}"
                                class="featured-game-card relative hover:shadow-sm hover:cursor-pointer !rounded-[50px]">
                                <div class="blur-sharp">
                                    <div
                                        class="relative h-[9.4rem] sm:h-[14.4rem] md:h-[14.4rem] lg:h-[14.4rem] xl:w-auto">
                                        <img alt="{{ $kbrgori->nama }}" sizes="100vw" srcset="{{ $kbrgori->thumbnail }}"
                                            src="{{ $kbrgori->thumbnail }}" decoding="async" data-nimg="fill"
                                            class="object-cover object-center !hover:rounded-3xl" loading="lazy"
                                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    </div>
                                </div>
                                <div class="cover !absolute bottom-0 m-3 h-full">
                                    <div class="flex flex-col h-full justify-between no-underline">
                                        <div class="relative p-3 mx-auto my-auto h-15 w-10 lg:h-14 lg:w-14">
                                            <img alt="icon-mbgs" sizes="100vw"
                                                 srcset="{{ url('') }}{{ !$config ? '' : $config->logo_favicon }}"
                                                src="{{ url('') }}{{ !$config ? '' : $config->logo_favicon }}" decoding="async" data-nimg="fill"
                                                class="object-center object-cover" loading="lazy"
                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent; filter: brightness(0) invert(1);">
                                        </div>
                                        <div>
                                            <p
                                                class="font-semibold text-white text-[12px] lg:text-[16px] mb-1 line-clamp-2">
                                                {{ $kbrgori->nama }}</p>
                                            <p class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                {{ $kbrgori->sub_nama }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>@endif @endforeach
                        </div>
                    </div>



                    <div class="tab-pane" id="joki" role="tabpanel" aria-labelledby="joki">
                        <div class="grid grid-cols-3 gap-2 sm:grid-cols-3 sm:gap-4 md:grid-cols-3 md:gap-2 lg:grid-cols-4 lg:gap-4 xl:grid-cols-6 xl:gap-4">
                            @foreach($kategori as $kbrgori)@if($kbrgori->tipe == "joki") <a href="{{ env('APP_URL').'/order/'.$kbrgori->kode }}"
                                class="featured-game-card relative hover:shadow-sm hover:cursor-pointer !rounded-[50px]">
                                <div class="blur-sharp">
                                    <div
                                        class="relative h-[9.4rem] sm:h-[14.4rem] md:h-[14.4rem] lg:h-[14.4rem] xl:w-auto">
                                        <img alt="{{ $kbrgori->nama }}" sizes="100vw" srcset="{{ $kbrgori->thumbnail }}"
                                            src="{{ $kbrgori->thumbnail }}" decoding="async" data-nimg="fill"
                                            class="object-cover object-center !hover:rounded-3xl" loading="lazy"
                                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    </div>
                                </div>
                                <div class="cover !absolute bottom-0 m-3 h-full">
                                    <div class="flex flex-col h-full justify-between no-underline">
                                        <div class="relative p-3 mx-auto my-auto h-15 w-10 lg:h-14 lg:w-14">
                                            <img alt="icon-mbgs" sizes="100vw"
                                                 srcset="{{ url('') }}{{ !$config ? '' : $config->logo_favicon }}"
                                                src="{{ url('') }}{{ !$config ? '' : $config->logo_favicon }}" decoding="async" data-nimg="fill"
                                                class="object-center object-cover" loading="lazy"
                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent; filter: brightness(0) invert(1);">
                                        </div>
                                        <div>
                                            <p
                                                class="font-semibold text-white text-[12px] lg:text-[16px] mb-1 line-clamp-2">
                                                {{ $kbrgori->nama }}</p>
                                            <p class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                {{ $kbrgori->sub_nama }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>@endif @endforeach
                        </div>
                    </div>


                    <div class="tab-pane" id="Lainnya-tab" role="tabpanel" aria-labelledby="Lainnya-app-tab">
                        <div class="grid grid-cols-3 gap-2 sm:grid-cols-3 sm:gap-4 md:grid-cols-3 md:gap-2 lg:grid-cols-4 lg:gap-4 xl:grid-cols-6 xl:gap-4">
                            @foreach($kategori as $kbrgori)@if($kbrgori->tipe == "e-wallet") <a href="{{ env('APP_URL').'/order/'.$kbrgori->kode }}"
                                class="featured-game-card relative hover:shadow-sm hover:cursor-pointer !rounded-[50px]">
                                <div class="blur-sharp">
                                    <div
                                        class="relative h-[9.4rem] sm:h-[14.4rem] md:h-[14.4rem] lg:h-[14.4rem] xl:w-auto">
                                        <img alt="{{ $kbrgori->nama }}" sizes="100vw" srcset="{{ $kbrgori->thumbnail }}"
                                            src="{{ $kbrgori->thumbnail }}" decoding="async" data-nimg="fill"
                                            class="object-cover object-center !hover:rounded-3xl" loading="lazy"
                                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    </div>
                                </div>
                                <div class="cover !absolute bottom-0 m-3 h-full">
                                    <div class="flex flex-col h-full justify-between no-underline">
                                        <div class="relative p-3 mx-auto my-auto h-15 w-10 lg:h-14 lg:w-14">
                                            <img alt="icon-mbgs" sizes="100vw"
                                                 srcset="{{ url('') }}{{ !$config ? '' : $config->logo_favicon }}"
                                                src="{{ url('') }}{{ !$config ? '' : $config->logo_favicon }}" decoding="async" data-nimg="fill"
                                                class="object-center object-cover" loading="lazy"
                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent; filter: brightness(0) invert(1);">
                                        </div>
                                        <div>
                                            <p
                                                class="font-semibold text-white text-[12px] lg:text-[16px] mb-1 line-clamp-2">
                                                {{ $kbrgori->nama }}</p>
                                            <p class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                {{ $kbrgori->sub_nama }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>@endif @endforeach
                        </div>
                    </div>
    </div>
</main>

@include('../footer')
  <script>
        const zoomakumauweb = document.querySelector('.zoom-akumauweb');
        const img = zoomakumauweb.querySelector('img');

        zoomContainer.addEventListener('mousemove', function (e) {
            const zoomFactor = 2;
            const x = e.offsetX / img.offsetWidth * (zoomFactor - 1);
            const y = e.offsetY / img.offsetHeight * (zoomFactor - 1);

            img.style.transform = `scale(${zoomFactor}) translate(${-x}px, ${-y}px)`;
        });

        zoomakumauweb.addEventListener('mouseleave', function () {
            img.style.transform = `scale(1) translate(0, 0)`;
        });

    </script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <script src="/assetss/plugins/bootstrap-table/bootstrap-table.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="/assetss/admin//assetss/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 2000,
                speed: 500,
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,

                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    }
                ]
            });
        });
    </script>
    <script>
        const categoryButtons = document.querySelectorAll('.btn-category');
        const categoryTitle = document.querySelector('.category-title');
        const categorySubtitle = document.querySelector('.category-subtitle');

        categoryButtons.forEach(button => {
            button.addEventListener('click', function () {
                const category = button.textContent.trim();
                categoryTitle.textContent = category;
                categorySubtitle.textContent = '';
            });
        });
    </script>

    <script>
        const button = document.getElementById('headlessui-menu-button-:R1qd6:');
        const menu = document.getElementById('headlessui-menu-items-:r0:');

        button.addEventListener('click', () => {
            const isOpen = button.getAttribute('aria-expanded') === 'true';
            button.setAttribute('aria-expanded', !isOpen);
            menu.classList.toggle('opacity-100');
            menu.classList.toggle('scale-100');
            menu.classList.toggle('hidden');
        });

    </script>


    <script>
        document.getElementById("nomor").addEventListener("input", function () {
            let nomor = this.value;
            if (nomor.startsWith("08")) {
                nomor = "62" + nomor.slice(1);
                this.value = nomor;
            }
        });
    </script>

    

   
</body>
</html>
