@extends('../main')

@section('title', $title . ' -')

@section('css')

    <style type="text/css">
        .akumauweb-shadow {
            box-shadow: 0 4px 80px hsla(0, 0%, 77%, .13), 0 1.6711px 33.4221px hsla(0, 0%, 77%, .09), 0 .893452px 17.869px hsla(0, 0%, 77%, .08), 0 .500862px 10.0172px hsla(0, 0%, 77%, .07), 0 .266004px 5.32008px hsla(0, 0%, 77%, .05), 0 .11069px 2.21381px hsla(0, 0%, 77%, .04)
        }

        .rounded-lg {
            border-radius: .5rem
        }

        .btn-check:checked+.btn-secondary {
            border: 2px solid #FFBD59;
            background-color: #FFBD59 !important
        }

        a {
            text-decoration: none !important
        }

        .button-secondary:hover {
            background-color: transparent !important
        }

        .card-custom {
            background-color: bg-dark !important
        }

        .btn-secondary {
            background-color: transparent !important
        }

        .rounded {
            border-radius: 0% !important
        }

        .card-header {
            padding: 0.rem 1rem;
            margin-bottom: 0;
            border-bottom: 1px solid rgba(0, 0, 0, .125)
        }

        .card-header2 {
            height: 70px
        }

        .hayutopup-pgimg {
            background-color: #fff;
            border-radius: 3px;
            border: 1px solid #fff
        }

        .hayutopup-dicek {
            font-size: 9px;
            font-style: italic;
            color: #2f2fd5
        }

        .ap-otp-input {
            border: 3px solid #adadad43;
            border-radius: 18px;
            width: 35px;
            height: 53px;
            margin: 4px;
            text-align: center;
            font-size: 35px
        }

        .ap-otp-input:focus {
            outline: none !important;
            border: 3px solid #adadad43;
            transition: 0.12s ease-in
        }

        .list-group-item {
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .125);
            color: #212529;
            display: block;
            padding: .5rem 1rem;
            position: relative;
            text-decoration: none
        }

        .list-group-item:last-child {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px
        }

        .list-group input[type="radio"] {
            display: none
        }

        .list-group1 input[type="radio"] {
            display: none
        }

        .list-group input[type="radio"]+.list-group-item {
            text-align: center;
            cursor: pointer;
            border-color: transparent;
            font-size: 12px;
            box-shadow: 0 6px 10px 0 rgb(0 0 0 / 40%), 0 4px 5px 0 rgb(0 0 0 / 6%), 0 2px 4px 0 rgb(0 0 0 / 7%)
        }

        .nominal-price {
            font-size: 11px;
            text-align: left
        }

        .akumauweb-prod {
            color: #000;
            text-align: left;
            margin-right: 10px
        }

        .list-group input[type="radio"]+label>.row>.col>.row>.nominal-price {
            font-style: normal
        }

        .list-group input[type="radio"]:checked+label>.row>.col>.row>.nominal-price {
            color: #fff !important;
            font-style: normal
        }

        .list-group input[type="radio"]+.list-group-item:before {
            color: transparent;
            font-weight: 700
        }

        .list-group input[type="radio"]:hover+.list-group-item,
        .list-group input[type="radio"]:focus+.list-group-item,
        .list-group input[type="radio"]:active+.list-group-item {
            cursor: pointer;
            background: linear-gradient(to bottom, #585454, #7f7f7f);
            font-size: 12px;
            border-radius: 10px;
            border-color: transparent;
            box-shadow: 0 0 1.1111vw #585454;
            overflow: hidden
        }

        .list-group input[type="radio"]:checked+.list-group-item:before {
            color: inherit
        }

        .list-group input[type="radio"]:checked+.list-group-item:after {
            position: absolute;
            top: 0;
            right: 0;
            width: 28px;
            height: 26px;
            content: "";
            background: url(/assets/image/verified.png) top/cover;
            text-align: center
        }

        .list-group input[type="radio"]:checked+.list-group-item {
            color: #01b5ff;
            font-size: 12px;
            border: 1px solid var(--warna_5);
            overflow: hidden;
            background-color: #5d0d0b
        }

        .list-group1 input[type="radio"]:checked+.list-group-item:after {
            position: absolute;
            top: 0;
            right: 0;
            width: 28px;
            height: 26px;
            content: "";
            text-align: center
        }

        .list-group1 input[type="radio"]:checked+.list-group-item:before {
            color: inherit
        }

        .list-group1 input[type="radio"]:checked+.list-group-item {
            background-color: #adadad43;
            color: #79ca56 !important;
            font-size: 12px;
            display: block;
            -webkit-filter: grayscale(0%);
            filter: grayscale(0%)
        }

        .list-group1 input[type="radio"]+.list-group-item {
            text-align: center;
            padding: 15px;
            cursor: pointer;
            color: #fe6c17;
            border-color: transparent;
            box-shadow: 0 2px 5px 0 #f39200, 0 5px 10px 0 rgba(0, 0, 0, .19);
            font-size: 12px;
            border-radius: 3px;
            background: rgb(208, 208, 208);
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%)
        }

        .list-group1 input[type="radio"]+.list-group-item:hover {
            cursor: pointer;
            background-color: #fff;
            color: #212529;
            border-color: #35322d;
            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, .2), 0 6px 12px 0 rgba(0, 0, 0, .19);
            font-size: 12px;
            border-radius: 3px
        }

        .list-group1 input[type="radio"]:checked+.list-group-item:before {
            color: inherit
        }

        .list-group1 input[type="radio"]:checked+.list-group-item {
            background-color: #fff;
            color: #fe6c17;
            font-size: 12px;
            display: block;
            -webkit-filter: grayscale(0%);
            filter: grayscale(0%)
        }

        .list-group1 input[type="radio"]+.list-group-item {
            text-align: center;
            cursor: pointer;
            border-color: #f39200;
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 20%), 0 5px 10px 0 rgb(0 0 0 / 19%);
            font-size: 12px;
            border-radius: 3px;
            background: rgb(208, 208, 208);
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%)
        }

        .list-group-item:last-child {
            border-radius: 10px
        }

        .button-action-payment .info-top {
            border-bottom: 2px solid #000;
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px
        }

        .button-action-payment .info-bottom {
            font-size: 10px;
            color: #666;
            text-align: left;
            line-height: 12px
        }

        .button-action-payment .info-bottom {
            color: #767676;
            font-size: 11px
        }

        .button-action-payment .info-top img {
            width: 100%;
            max-height: 20px;
            -o-object-fit: contain;
            object-fit: contain;
            vertical-align: middle
        }

        .button-action-payment .info-top img {
            height: 20px;
            -o-object-fit: contain;
            object-fit: contain
        }

        .button-action-payment .info-top b {
            font-size: 12px;
            font-weight: 600
        }

        .akumauwebiconurl {
            width: 32px;
            top: 20%;
            right: 5%;
            position: absolute
        }

        .payment-img {
            background-color: #fff;
            border-radius: 6px
        }

        .child-box .short-payment-support-info {
            align-content: center;
            align-items: center;
            background: #d0d0d0;
            border-bottom-left-radius: 7px;
            border-bottom-right-radius: 7px;
            cursor: pointer;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: flex-end;
            padding: 11px 15px
        }

        .child-box .short-payment-support-info img {
            height: 22px;
            padding: 1px;
            margin-right: 7px
        }

        @media (max-width:767px) {
            .child-box .short-payment-support-info img {
                height: 14px;
                margin-right: 5px
            }
        }

        .akumauweb-dicek {
            color: red
        }

        .child-box .short-payment-support-info .open-button-action-payment {
            color: #000;
            font-size: 13px;
            margin-left: 10px
        }

        .crt {
            margin-top: .5rem !important
        }

        .games-thumbnail {
            background-size: cover !important;
            background-repeat: no-repeat !important;
            background-position: center center !important;
            border-radius: 20px !importantbackground:url('')
        }

        .games-thumbnail .card-body {
            min-height: 150px;
            border-radius: 20px
        }

        .games-thumbnail .card-body h3 {
            margin-top: 52px;
            text-transform: uppercase
        }

        .games-logo {
            margin-bottom: 20px
        }

        .games-logo img {
            margin-left: 20px;
            margin-top: -50px;
            z-index: 1;
            position: absolute;
            ;
            border-radius: 23% !important;
            width: 100px
        }

        @media (max-width:767px) {
            .ptih {
                display: none
            }
        }

        .toast-warning {
            background-color: #e10603 !important;
            color: #fff !important
        }

        .kbr-bg {
            background-color: #272730
        }

        .bj-shadow,
        .btn-order {
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .btn-order {
            --tw-shadow: 0 25px 50px -12px rgba(0, 0, 0, .25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color)
        }

        .btn-order:after {
            --tw-skew-x: -12deg;
            animation: hightlight 5s ease-in infinite forwards;
            background-color: hsla(200, 8%, 78%, .5);
            --tw-content: "";
            content: var(--tw-content)
        }

        .btn-order:after,
        .selected-item:after {
            position: absolute;
            top: 0;
            z-index: 10;
            display: block;
            height: 100%;
            width: 1em;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .btn-voucher {
            --tw-shadow: 0 25px 50px -12px rgba(0, 0, 0, .25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            position: relative;
            overflow: hidden
        }

        .btn-voucher::after {
            --tw-skew-x: -12deg;
            --tw-translate-x: -100%;
            content: var(--tw-content);
            position: absolute;
            top: 0;
            left: 0;
            width: 11%;
            height: 100%;
            background-color: hsla(200, 8%, 78%, .5);
            transform: translateX(var(--tw-translate-x)) skewX(var(--tw-skew-x));
            animation: hightlight 5s ease-in infinite forwards
        }

        .selected-item:after {
            --tw-skew-x: -12deg
        }

        @keyframes hightlight {
            0% {
                left: -400%
            }

            to {
                left: 100%
            }
        }

        .selected-item:after {
            animation: hightlight 5s ease-in infinite forwards;
            background-color: hsla(204, 9%, 89%, .5);
            --tw-content: "";
            content: var(--tw-content)
        }

        .product-thumbnail-container {
            perspective: 15em
        }

        .product-thumbnail-container img {
            position: relative;
            transform: rotateY(20deg) rotateX(-4deg) !important;
            transform-origin: left center
        }

        .area {
            background-image: linear-gradient(to right, var(--tw-gradient-stops));
            --tw-gradient-from: #1e2022;
            --tw-gradient-to: rgba(30, 32, 34, 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
            --tw-gradient-to: rgba(94, 102, 110, 0);
            --tw-gradient-stops: var(--tw-gradient-from), #5e666e, var(--tw-gradient-to);
            --tw-gradient-to: #e1e4e6;
            position: relative
        }

        .area,
        .circles {
            width: 100%;
            height: 100%
        }

        .circles {
            position: absolute;
            top: 0;
            left: 0;
            overflow: hidden
        }

        .circles li {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: hsla(0, 0%, 100%, .2);
            animation: animate 25s linear infinite;
            bottom: -150px
        }

        .circles li:first-child {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s
        }

        .circles li:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s
        }

        .circles li:nth-child(3) {
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s
        }

        .circles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s
        }

        .circles li:nth-child(5) {
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s
        }

        .circles li:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s
        }

        .circles li:nth-child(7) {
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s
        }

        .circles li:nth-child(8) {
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 10s;
            animation-duration: 45s
        }

        .circles li:nth-child(9) {
            left: 20%;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            animation-duration: 35s
        }

        .circles li:nth-child(10) {
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s
        }

        .rectangle {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden
        }

        .rectangle li {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 80px;
            background: hsla(0, 0%, 100%, .2);
            animation: animate-persegi-panjang 25s linear infinite;
            bottom: -250px
        }

        .rectangle li:first-child {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s
        }

        .rectangle li:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 80px;
            animation-delay: 2s;
            animation-duration: 12s
        }

        .rectangle li:nth-child(3) {
            left: 70%;
            width: 20px;
            height: 80px;
            animation-delay: 4s
        }

        .rectangle li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 120px;
            animation-delay: 0s;
            animation-duration: 18s
        }

        .rectangle li:nth-child(5) {
            left: 65%;
            width: 20px;
            height: 80px;
            animation-delay: 0s
        }

        .rectangle li:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 170px;
            animation-delay: 3s
        }

        .rectangle li:nth-child(7) {
            left: 35%;
            width: 150px;
            height: 240px;
            animation-delay: 7s
        }

        .rectangle li:nth-child(8) {
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 10s;
            animation-duration: 45s
        }

        .rectangle li:nth-child(9) {
            left: 20%;
            width: 15px;
            height: 40px;
            animation-delay: 2s;
            animation-duration: 35s
        }

        .rectangle li:nth-child(10) {
            left: 85%;
            width: 150px;
            height: 270px;
            animation-delay: 0s;
            animation-duration: 11s
        }

        @keyframes animate {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0
            }

            to {
                transform: translateY(-1000px) rotate(2turn);
                opacity: 0;
                border-radius: 50%
            }
        }

        @keyframes animate-persegi-panjang {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0
            }

            to {
                transform: translateY(-1000px) rotate(2turn);
                opacity: 0;
                border-radius: 5%
            }
        }

        .text-sm {
            font-size: .875rem;
            line-height: 1.25rem
        }

        .prose-sm :where(ol):not(:where([class~=not-prose] *)) {
            margin-top: 1.1428571em;
            margin-bottom: 1.1428571em;
            padding-left: 1.5714286em
        }

        .prose :where(ol):not(:where([class~=not-prose] *)) {
            list-style-type: decimal;
            margin-top: 1.25em;
            margin-bottom: 1.25em;
            padding-left: 1.625em
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }
    </style>
    <style>
        .bg-cover {
            background-size: cover !important;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.5);
            /* Black see-through */
            color: #f1f1f1;
            width: 100%;
            transition: .5s ease;
            opacity: 0;
            color: 000000;
            font-size: 20px;
            padding: 20px;
            text-align: center;
        }

        .area {
            background-image: linear-gradient(to right, var(--tw-gradient-stops));
            --tw-gradient-from: #00000000;
            --tw-gradient-to: rgb(30 32 34 / 0%);
            --tw-gradient-stops: var(--tw-gradient-from), #00000000;
            --tw-gradient-to: rgba(94, 102, 110, 0);
            --tw-gradient-stops: var(--tw-gradient-from), #00000000, #00000000;
            --tw-gradient-to: #00000000;
            position: relative;
        }

        .area,
        .circles {
            width: 100%;
            height: 100%;
        }

        .circles {
            position: absolute;
            top: 0;
            left: 0;
            overflow: hidden;
        }

        .circles li {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: hsla(0, 0%, 100%, 0.2);
            animation: animate 25s linear infinite;
            bottom: -150px;
        }

        .circles li:first-child {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }

        .circles li:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }

        .circles li:nth-child(3) {
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s;
        }

        .circles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }

        .circles li:nth-child(5) {
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;
        }

        .circles li:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
        }

        .circles li:nth-child(7) {
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s;
        }

        .circles li:nth-child(8) {
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 10s;
            animation-duration: 45s;
        }

        .circles li:nth-child(9) {
            left: 20%;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            animation-duration: 35s;
        }

        .circles li:nth-child(10) {
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s;
        }

        .rectangle {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .rectangle li {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 80px;
            background: hsla(0, 0%, 100%, 0.2);
            animation: animate-persegi-panjang 25s linear infinite;
            bottom: -250px;
        }

        .rectangle li:first-child {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }

        .rectangle li:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 80px;
            animation-delay: 2s;
            animation-duration: 12s;
        }

        .rectangle li:nth-child(3) {
            left: 70%;
            width: 20px;
            height: 80px;
            animation-delay: 4s;
        }

        .rectangle li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 120px;
            animation-delay: 0s;
            animation-duration: 18s;
        }

        .rectangle li:nth-child(5) {
            left: 65%;
            width: 20px;
            height: 80px;
            animation-delay: 0s;
        }

        .rectangle li:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 170px;
            animation-delay: 3s;
        }

        .rectangle li:nth-child(7) {
            left: 35%;
            width: 150px;
            height: 240px;
            animation-delay: 7s;
        }

        .rectangle li:nth-child(8) {
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 10s;
            animation-duration: 45s;
        }

        .rectangle li:nth-child(9) {
            left: 20%;
            width: 15px;
            height: 40px;
            animation-delay: 2s;
            animation-duration: 35s;
        }

        .rectangle li:nth-child(10) {
            left: 85%;
            width: 150px;
            height: 270px;
            animation-delay: 0s;
            animation-duration: 11s;
        }

        @keyframes animate {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }

            to {
                transform: translateY(-1000px) rotate(2turn);
                opacity: 0;
                border-radius: 50%;
            }
        }

        @keyframes animate-persegi-panjang {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }

            to {
                transform: translateY(-1000px) rotate(2turn);
                opacity: 0;
                border-radius: 5%;
            }
        }

        .jstorew {
            flex-shrink: 0;
            margin-top: var(--bs-gutter-y);
            max-width: 100%;
            padding-left: calc(var(--bs-gutter-x)*.5);
            padding-right: calc(var(--bs-gutter-x)*.5);
            width: 100%;
        }
    </style>

@endsection
@section('content')
    @include('../navbar')

    <div class="wrapper">
        <br>
        <div class="container">
            <section class="relative mb-2 bg-transparent px-0 py-4 shadow-2xl lg:min-h-[350px]">
                <div class="modal fade" id="petunjukModal" tabindex="-1" aria-labelledby="petunjukModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content " style="background: none; border: none;">
                            <div class="modal-body" style="background: none; border: none;">
                                <img src="{{ $kategori->petunjuk }}" alt="" class="img-fluid">
                            </div>
                            <div class="modal-footer" style="background: none; border: none;">
                                <button type="button" class="btn mx-auto w-25 text-000000 " data-bs-dismiss="modal"
                                    style="background: none; border: none;">X</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-0 -z-10">
                    <div class="area">
                        <ul class="circles">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </section>

            <div class="relative mx-auto px-0 sm:py-40 sm:px-6 lg:px-8">
                <div class="akumauweb-shadow rounded-lg border-0 games-thumbnail"
                    style="background-image: url({{ $kategori->bannerlayanan }});background-size: cover; background-repeat: no-repeat; background-size: 100%">
                    <div class="card-body border-0 text-center"></div>
                </div>
            </div>


            <input type="hidden" id="ktg_tipe" value="{{ $kategori->tipe }}">
            <div class="row">
                <div class="col-lg-4 mt-2 mb-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="card akumauweb-shadow rounded-lg" style="background: var(--warna_3) !important;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div>
                                                <article>
                                                    <div class="flex gap-3 items-center">
                                                        <img alt="{{ $kategori->nama }}" srcset="{{ $kategori->thumbnail }}"
                                                            src="{{ $kategori->thumbnail }}" width="100" height="100"
                                                            decoding="async" data-nimg="1"
                                                            class="h-full w-20 rounded-lg md:rounded-xl object-cover lg:h-full lg:w-20"
                                                            style="color: transparent;">
                                                        <div class="flex flex-col gap-1">
                                                            <h3 class="text-sm font-bold leading-6 md:text-lg">
                                                                {{ $kategori->nama }}
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="flex flex-wrap gap-x-2 gap-y-1.5 mt-3 pb-4 border-b"
                                                            bis_skin_checked="1">
                                                            <div class="flex items-center gap-1.5 text-xs font-extralight leading-4"
                                                                bis_skin_checked="1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" aria-hidden="true"
                                                                    class="w-5 h-5">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z">
                                                                    </path>
                                                                </svg>
                                                                <p> Jaminan Layanan</p>
                                                            </div>
                                                            <div class="flex items-center gap-1.5 text-xs font-extralight leading-4"
                                                                bis_skin_checked="1">
                                                                <svg stroke="currentColor" fill="currentColor"
                                                                    stroke-width="0" viewBox="0 0 1024 1024"
                                                                    class="w-5 h-5">
                                                                    <path
                                                                        d="M512 128c-212.1 0-384 171.9-384 384v360c0 13.3 10.7 24 24 24h184c35.3 0 64-28.7 64-64V624c0-35.3-28.7-64-64-64H200v-48c0-172.3 139.7-312 312-312s312 139.7 312 312v48H688c-35.3 0-64 28.7-64 64v208c0 35.3 28.7 64 64 64h184c13.3 0 24-10.7 24-24V512c0-212.1-171.9-384-384-384zM328 632v192H200V632h128zm496 192H696V632h128v192z">
                                                                    </path>
                                                                </svg>
                                                                <p> Layanan Pelanggan 24/7</p>
                                                            </div>
                                                            <div class="flex items-center gap-1.5 text-xs font-extralight leading-4"
                                                                bis_skin_checked="1">
                                                                <svg stroke="currentColor" fill="currentColor"
                                                                    stroke-width="0" viewBox="0 0 24 24" class="w-5 h-5">
                                                                    <g>
                                                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                                                        <path fill-rule="nonzero"
                                                                            d="M11 2l7.298 2.28a1 1 0 0 1 .702.955V7h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1l-3.22.001c-.387.51-.857.96-1.4 1.33L11 22l-5.38-3.668A6 6 0 0 1 3 13.374V5.235a1 1 0 0 1 .702-.954L11 2zm0 2.094L5 5.97v7.404a4 4 0 0 0 1.558 3.169l.189.136L11 19.58 14.782 17H10a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h7V5.97l-6-1.876zM11 12v3h9v-3h-9zm0-2h9V9h-9v1z">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                                <p> Pembayaran yang Aman</p>
                                                            </div>
                                                            <div class="flex items-center gap-1.5 text-xs font-extralight leading-4"
                                                                style="color: var(--warna_5);" bis_skin_checked="1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" aria-hidden="true"
                                                                    class="w-5 h-5">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z">
                                                                    </path>
                                                                </svg>
                                                                <p> Pengiriman Instant</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pt-4 md:block text-sm font-light">
                                                        <div class="leading-5 mb-4">
                                                            <small style="color: var(--warna_5); font-size: 14px;">
                                                                {!! $kategori->ket_layanan !!}
                                                            </small>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--          <div class="row mt-3">
             <!--                           <div class="col">-->
                        <!--                               <div class="card rounded-lg  kbr-bg akumauweb-shadow " style="background: var(--warna_3) !important;">-->
                        <!--                                   <div class="card border-0 mb-0 shadow-form">-->
                        <!--                                       <div class="px-4 py-1">-->
                        <!--                                           <div class="card-header  d-flex align-items-center border-bottom pb-2">-->
                        <!--                                               <img alt="step-one"-->
                        <!--                                                   srcset="/cdn/image/jsginfo.gif"-->
                        <!--                                                   src="/cdn/image/jsginfo.gif" width="26" height="26"-->
                        <!--                                                   decoding="async" data-nimg="1" loading="lazy"-->
                        <!--                                                   style="color: transparent; margin-left:-15px;" />-->
                        <!--                                               <h4-->
                        <!--                                                   class="card-title mt-2 ms-2 lex items-center  font-extrabold leading-6 md:text-xl" style="color: var(--warna_5);">-->
                        <!--                                                   Discount Offer Up To 30%</h4>-->
                        <!--                                           </div>-->
                        <!--                                       </div>-->
                        <!--                                   </div>-->
                        <!--                                   <div class="px-2">-->
                        <!--                                       <div class="card-body">-->
                        <!--                                           <div class="form-group mb-2">-->
                        <!--                                               <div class="relative rounded-md shadow-sm">-->
                        <!--                             <img src="/assets/promo/jeemoba.jpg" alt="promo" style="border-radius: 15px; margin-bottom: 0.8em; width: 100%;">-->
                        <!--                             <div class="promo-instruction-text" style="font-size: 13px">Dapatkan Diskon Tambahan Dengan Menggunakan -->
                        <!--( Code: <b>JEEMOBA</b> )</div>-->


                        <!--                                               </div>-->
                        <!--                                           </div>-->
                        <!--                                       </div>-->
                        <!--                                   </div>-->
                        <!--                               </div>-->
                        <!--                           </div>-->
                        <!--                       </div> -->




                        <div class="col mt-3 d-lg-block d-none">
                            <div class="card akumauweb-rounded-sedang bg-dark shadow d-none">
                                <div class="card-header bg-gradient akumauweb-rounded-sedang">
                                    <h5 class="card-title mt-2">Penawaran Terbaik</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <div class="card flex-row flex-wrap bg-dark">
                                                <div>
                                                    <a href="/game/free-fire" class="stretched-link">
                                                        <img src="/assets/thumbnail/ff.jpg"
                                                            class="card-header2 akumauweb-rounded-sedang"
                                                            alt="call-of-duty-mobile-icon" />
                                                    </a>
                                                </div>
                                                <div class="card-body mt-2">
                                                    Free Fire
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <div class="card flex-row flex-wrap bg-dark d-none">
                                        <div>
                                            <a href="" class="stretched-link">
                                                <img src="" class="card-header2 akumauweb-rounded-kecil"
                                                    alt="call-of-duty-mobile-icon" />
                                            </a>
                                        </div>
                                        <div class="card-body mt-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INFORMASI -->
                <!--  <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mx-auto ">
                            <div class="mt-3 overflow-hidden rounded-lg">
                                <div class="null bg-gradient-black">
                                    <button
                                        class="flex w-full justify-between rounded-lg px-4 py-3 text-left text-md font-semibold !border-b border-[#626274] rounded-[1rem]"
                                        data-bs-toggle="collapse" data-bs-target="#meltihh" aria-expanded="false"
                                        aria-controls="CollapseThreee">
                                        <small>Cara Melakukan Topup Di {{ config('app.name') }}?</small>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" aria-hidden="true" class="rotate-180 transform h-5 w-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5">
                                            </path>
                                        </svg>
                                    </button>
                                    <div class="px-3 pt-3 pb-3 text-sm collapse" id="meltihh" class="collapse"
                                        aria-labelledby="HeadingThreee" data-bs-parent="#Accordione">
                                        <ol>
                                            <li>
                                               1. Masukkan User ID dan Zone ID.
                                            </li>
                                            <li>2. Pilih produk yang ingin dibeli.</li>
                                            <li>3. Pilih metode pembayaran yang kamu inginkan,</li>
                                            <li>4. Masukkan nomor Whatsapp, kemudian klik tombol <b>“Beli Sekarang”</b></li>
                                            <li>5. Selesaikan Pembayaran</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-lg-8 mt-2 mb-2 ">
                    <div class="row">
                        <div class="col ">
                            <div class="card rounded-lg  kbr-bg akumauweb-shadow "
                                style="background: var(--warna_3) !important;">
                                <div class="card border-0 mb-0 shadow-form">
                                    <div class="px-4 py-1">
                                        <div class="card-header d-flex align-items-center border-bottom pb-2">
                                            <img alt="step-one"
                                                srcset="/assets/icons/step-one-1.svg 1x, /assets/icons/step-one-1.svg 2x"
                                                src="/assets/icons/step-one-1.svg" width="26" height="26"
                                                decoding="async" data-nimg="1" loading="lazy"
                                                style="color: transparent; margin-left:-15px;" />
                                            <h4 class="card-title mt-2 ms-2 lex items-center  font-extrabold leading-6 md:text-xl"
                                                style="color: var(--warna_5);">Masukan Data</h4>
                                            <div class="cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    data-bs-toggle="modal" data-bs-target="#petunjukModal"
                                                    aria-hidden="true" class="h-5 w-5 text-gray-400 ms-2"
                                                    style="cursor:pointer;">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-2">
                                        <div class="card-body">
                                            <div id="userData">
                                                @if (
                                                    $kategori->server_id &&
                                                        $kategori->kode != 'life-after' &&
                                                        $kategori->kode != 'joki' &&
                                                        $kategori->kode != 'genshin-impact' &&
                                                        $kategori->kode != 'ragnarok-m' &&
                                                        $kategori->kode != 'tof')
                                                    <div class="grid gap-2 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                                                        <div class="w-full">
                                                            <div class="relative rounded-md text-black shadow-sm">
                                                                <input
                                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                                    name="ID ML"
                                                                    placeholder="{{ $kategori->placeholder_1 }}"
                                                                    type="text" id="user_id" value=""
                                                                    fdprocessedid="81xg1" />
                                                            </div>
                                                        </div>
                                                        <div class="w-full">
                                                            <div class="relative rounded-md text-black shadow-sm">
                                                                <input
                                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                                    name="zone"
                                                                    placeholder="{{ $kategori->placeholder_2 }}"
                                                                    type="text" id="zone" value=""
                                                                    fdprocessedid="81xg1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                @elseif($kategori->kode == 'life-after')
                                                    <div class="grid gap-2 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                                                        <div class="w-full">
                                                            <div class="relative rounded-md text-black shadow-sm">
                                                                <input
                                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                                    name="ID ML"
                                                                    placeholder="{{ $kategori->placeholder_1 }}"
                                                                    type="text" id="user_id" value=""
                                                                    fdprocessedid="81xg1" />
                                                            </div>
                                                        </div>
                                                        <div class="w-full">
                                                            <div class="relative rounded-md text-black shadow-sm">
                                                                <select
                                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                                    name="zoneId" id="zone"
                                                                    placeholder="Pilih Server" fdprocessedid="n3x76">
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
                                                        </div>
                                                    </div>
                                                @elseif($kategori->kode == 'tof')
                                                    <div class="grid gap-2 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                                                        <div class="w-full">
                                                            <div class="relative rounded-md text-black shadow-sm">
                                                                <input
                                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                                    name="ID ML"
                                                                    placeholder="{{ $kategori->placeholder_1 }}"
                                                                    type="text" id="user_id" value=""
                                                                    fdprocessedid="81xg1" />
                                                            </div>
                                                        </div>
                                                        <div class="w-full">
                                                            <div class="relative rounded-md text-black shadow-sm">
                                                                <select
                                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                                    name="zoneId" id="zone"
                                                                    placeholder="Pilih Server" fdprocessedid="n3x76">
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
                                                        </div>
                                                    </div>
                                                @elseif($kategori->kode == 'genshin-impact')
                                                    <div class="grid gap-2 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                                                        <div class="w-full">
                                                            <div class="relative rounded-md text-black shadow-sm">
                                                                <input
                                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                                    name="ID ML"
                                                                    placeholder="{{ $kategori->placeholder_1 }}"
                                                                    type="text" id="user_id" value=""
                                                                    fdprocessedid="81xg1" />
                                                            </div>
                                                        </div>
                                                        <div class="w-full">
                                                            <div class="relative rounded-md text-black shadow-sm">
                                                                <select
                                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                                    name="zoneId" id="zone"
                                                                    placeholder="Pilih Server" fdprocessedid="n3x76">
                                                                    <option value="">Pilih Server</option>
                                                                    <option value="os_usa">America</option>
                                                                    <option value="os_euro">Europa</option>
                                                                    <option value="asia">Asia</option>
                                                                    <option value="os_cht">TW_HK_MO</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @elseif($kategori->kode == 'honkai-starrail')
                                                    <div class="grid gap-2 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                                                        <div class="w-full">
                                                            <div class="relative rounded-md text-black shadow-sm">
                                                                <input
                                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                                    name="ID ML"
                                                                    placeholder="{{ $kategori->placeholder_1 }}"
                                                                    type="text" id="user_id" value=""
                                                                    fdprocessedid="81xg1" />
                                                            </div>
                                                        </div>
                                                        <div class="w-full">
                                                            <div class="relative rounded-md text-black shadow-sm">
                                                                <select
                                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                                    name="zoneId" id="zone"
                                                                    placeholder="Pilih Server" fdprocessedid="n3x76">
                                                                    <option value="">Pilih Server</option>
                                                                    <option value="os_usa">America</option>
                                                                    <option value="os_euro">Europa</option>
                                                                    <option value="asia">Asia</option>
                                                                    <option value="os_cht">TW_HK_MO</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @elseif($kategori->kode == 'heroes-evolved')
                                                    <div class="grid gap-2 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                                                        <div class="w-full">
                                                            <div class="relative rounded-md text-black shadow-sm">
                                                                <input
                                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                                    name="ID ML"
                                                                    placeholder="{{ $kategori->placeholder_1 }}"
                                                                    type="text" id="user_id" value=""
                                                                    fdprocessedid="81xg1" />
                                                            </div>
                                                        </div>
                                                        <div class="w-full">
                                                            <div class="relative rounded-md text-black shadow-sm">
                                                                <select
                                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                                    name="zoneId" id="zone"
                                                                    placeholder="Pilih Server" fdprocessedid="n3x76">
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
                                                        </div>
                                                    @elseif($kategori->kode == 'ragnarok-m')
                                                        <div class="grid gap-2 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                                                            <div class="w-full">
                                                                <div class="relative rounded-md text-black shadow-sm">
                                                                    <input
                                                                        class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                                        name="ID ML"
                                                                        placeholder="{{ $kategori->placeholder_1 }}"
                                                                        type="text" id="user_id" value=""
                                                                        fdprocessedid="81xg1" />
                                                                </div>
                                                            </div>
                                                            <div class="w-full">
                                                                <div class="relative rounded-md text-black shadow-sm">
                                                                    <select
                                                                        class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                                        name="zoneId" id="zone"
                                                                        placeholder="Pilih Server" fdprocessedid="n3x76">
                                                                        <option value="">Pilih Server</option>
                                                                        <option value="90001">Eternal Love</option>
                                                                        <option value="90002">Midnight Party</option>
                                                                        <option value="90002003">Memory Of Faith</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        @elseif($kategori->kode == 'shell-fire')
                                                            <div
                                                                class="grid gap-2 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                                                                <div class="w-full">
                                                                    <div class="relative rounded-md text-black shadow-sm">
                                                                        <input
                                                                            class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                                            name="ID ML"
                                                                            placeholder="{{ $kategori->placeholder_1 }}"
                                                                            type="text" id="user_id" value=""
                                                                            fdprocessedid="81xg1" />
                                                                    </div>
                                                                </div>
                                                                <div class="w-full">
                                                                    <div class="relative rounded-md text-black shadow-sm">
                                                                        <select
                                                                            class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                                            name="zoneId" id="zone"
                                                                            placeholder="Pilih Server"
                                                                            fdprocessedid="n3x76">
                                                                            <option value="">Pilih Tipe</option>
                                                                            <option value="android">Android</option>
                                                                            <option value="ios">IOS</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            @elseif($kategori->kode == 'ragnarok-forever-love')
                                                                <div
                                                                    class="grid gap-2 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                                                                    <div class="w-full">
                                                                        <div
                                                                            class="relative rounded-md text-black shadow-sm">
                                                                            <input
                                                                                class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                                                name="ID ML"
                                                                                placeholder="{{ $kategori->placeholder_1 }}"
                                                                                type="text" id="user_id"
                                                                                value="" fdprocessedid="81xg1" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="w-full">
                                                                        <div
                                                                            class="relative rounded-md text-black shadow-sm">
                                                                            <select
                                                                                class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                                                name="zoneId" id="zone"
                                                                                placeholder="Pilih Server"
                                                                                fdprocessedid="n3x76">
                                                                                <option value="">Pilih Server
                                                                                </option>
                                                                                <option value="allserver">ALL SERVER
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                @elseif($kategori->kode == 'perfect-world')
                                                                    <div
                                                                        class="grid gap-2 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                                                                        <div class="w-full">
                                                                            <div
                                                                                class="relative rounded-md text-black shadow-sm">
                                                                                <input
                                                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                                                    name="ID ML"
                                                                                    placeholder="{{ $kategori->placeholder_1 }}"
                                                                                    type="text" id="user_id"
                                                                                    value=""
                                                                                    fdprocessedid="81xg1" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="w-full">
                                                                            <div
                                                                                class="relative rounded-md text-black shadow-sm">
                                                                                <select
                                                                                    class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                                                    name="zoneId" id="zone"
                                                                                    placeholder="Pilih Server"
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
                                                                        </div>
                                                                    @elseif($kategori->kode == 'asphalt-9-legends')
                                                                        <div
                                                                            class="grid gap-2 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                                                                            <div class="w-full">
                                                                                <div
                                                                                    class="relative rounded-md text-black shadow-sm">
                                                                                    <input
                                                                                        class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                                                        name="ID ML"
                                                                                        placeholder="{{ $kategori->placeholder_1 }}"
                                                                                        type="text" id="user_id"
                                                                                        value=""
                                                                                        fdprocessedid="81xg1" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="w-full">
                                                                                <div
                                                                                    class="relative rounded-md text-black shadow-sm">
                                                                                    <select
                                                                                        class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                                                        name="zoneId" id="zone"
                                                                                        placeholder="Pilih Server"
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
                                                                            </div>
                                                                        @elseif(in_array($kategori->tipe, ['populer', 'akun_premium', 'game', 'voucher', 'pulsa', 'e-money', 'pln', 'liveapp']))
                                                                            <div class="grid gap-2 grid-cols-1">
                                                                                <div class="w-full">
                                                                                    <div
                                                                                        class="relative rounded-md text-black shadow-sm">
                                                                                        <input
                                                                                            class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                                                            name="userId" id="user_id"
                                                                                            placeholder="{{ $kategori->placeholder_1 }}"
                                                                                            type="text" value=""
                                                                                            fdprocessedid="8qd1hx" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @elseif($kategori->tipe == 'joki')
                                                                            <div id="userData">
                                                                                <div class="row row-cols row-cols-md">
                                                                                    <div class="w-full">
                                                                                        <div
                                                                                            class="relative rounded-md text-black shadow-sm">
                                                                                            <label for="Email "></label>
                                                                                            <input
                                                                                                class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                                                                placeholder="Masukan Email/No HP"
                                                                                                type="text"
                                                                                                id="email_joki"
                                                                                                name="email_joki"
                                                                                                required="" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="w-full">
                                                                                        <div
                                                                                            class="relative rounded-md text-black shadow-sm">
                                                                                            <label for="Password"></label>
                                                                                            <input
                                                                                                class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                                                                placeholder="Masukan Password"
                                                                                                type="text"
                                                                                                id="password_joki"
                                                                                                name="password_joki"
                                                                                                required="" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="w-full">
                                                                                        <div
                                                                                            class="relative rounded-md text-black shadow-sm">
                                                                                            <label
                                                                                                for="Request Hero"></label>
                                                                                            <input
                                                                                                class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                                                                placeholder="Minimal Request 3 Hero"
                                                                                                type="text"
                                                                                                id="request_joki"
                                                                                                name="request_joki" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="w-full">
                                                                                        <div
                                                                                            class="relative rounded-md text-black shadow-sm">
                                                                                            <label for="Catatan"></label>
                                                                                            <input
                                                                                                class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                                                                placeholder="Catatan Untuk Penjoki"
                                                                                                type="text"
                                                                                                id="catatan_joki"
                                                                                                name="catatan_joki"
                                                                                                required="" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="w-full">
                                                                                        <div
                                                                                            class="relative rounded-md text-black shadow-sm">
                                                                                            <label for="Nick Name"></label>
                                                                                            <input
                                                                                                class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                                                                placeholder="User ID &amp; Nick Name"
                                                                                                type="text"
                                                                                                id="nickname_joki"
                                                                                                name="nickname_joki"
                                                                                                required="" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="w-full">
                                                                                        <div
                                                                                            class="relative rounded-md text-black shadow-sm">
                                                                                            <label for="Login Via"></label>
                                                                                            <select
                                                                                                class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                                                                                id="loginvia_joki"
                                                                                                name="loginvia_joki"
                                                                                                placeholder="Pilih Server">
                                                                                                <option value="">
                                                                                                    Login Via</option>
                                                                                                <option value="moonton">
                                                                                                    Moonton (Rekomendasi)
                                                                                                </option <option
                                                                                                    value="vk">VK
                                                                                                </option>
                                                                                                <option value="tiktok">
                                                                                                    Tiktok</option>
                                                                                                <option value="facebook">
                                                                                                    Facebook</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @elseif($kategori->tipe == 'dm_vilog')
                                                                            <div id="userData">
                                                                                <div class="row row-cols row-cols-md">
                                                                                    <div class="col-lg-12">
                                                                                        <div class="form-group mb-3">
                                                                                            <label for="Email "></label>
                                                                                            <input class="form-control"
                                                                                                placeholder="Masukan Email/No HP"
                                                                                                type="text"
                                                                                                id="email_vilog"
                                                                                                name="email_vilog"
                                                                                                required="" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="form-group mb-3">
                                                                                            <label for="Password"></label>
                                                                                            <input class="form-control"
                                                                                                placeholder="Masukan Password"
                                                                                                type="text"
                                                                                                id="password_vilog"
                                                                                                name="password_vilog"
                                                                                                required="" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="form-group mb-3">
                                                                                            <label for="Login Via"></label>
                                                                                            <select id="loginvia_vilog"
                                                                                                name="loginvia_vilog"
                                                                                                class="form-select">
                                                                                                <option value="">
                                                                                                    Login Via</option>
                                                                                                <option value="moonton">
                                                                                                    Moonton (Rekomendasi)
                                                                                                </option <option
                                                                                                    value="vk">VK
                                                                                                </option>
                                                                                                <option value="tiktok">
                                                                                                    Tiktok</option>
                                                                                                <option value="facebook">
                                                                                                    Facebook</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @else
                                                                            <div class="grid gap-2 grid-cols-1">
                                                                                <div class="w-full">
                                                                                    <div
                                                                                        class="relative rounded-md text-black shadow-sm">
                                                                                        <input
                                                                                            class="block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                                                                            name="userId" id="user_id"
                                                                                            placeholder="{{ $kategori->placeholde_1 }}"
                                                                                            type="text" value=""
                                                                                            fdprocessedid="8qd1hx" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                @endif
                                                <p class="mt-2 text-sm" style="color: var(--warna_5);">
                                                    {!! $kategori->ket_id !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <div class="card rounded-lg  kbr-bg akumauweb-shadow " style="color: var(--warna_5);">
                                <div class="card border-0 mb-0 shadow-form">
                                    <div class="px-4 py-1">
                                        <div class="card-header  d-flex align-items-center border-bottom pb-2">
                                            <img alt="step-two"
                                                srcset="/assets/icons/step-two-2.svg 1x, /assets/icons/step-two-2.svg 2x"
                                                src="/assets/icons/step-two-2.svg" width="26" height="26"
                                                decoding="async" data-nimg="1" loading="lazy"
                                                style="color: transparent; margin-left:-15px;" />
                                            <h4 class="card-title mt-2 ms-2 lex items-center  font-extrabold leading-6 md:text-xl"
                                                style="color: var(--warna_5);">Pilih Nominal Top Up</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-2">
                                    <div class="card-body">
                                        <div id="tempatNominal">
                                            @foreach ($sub as $subkat)
                                                <div
                                                    class="card-title items-center lex text-center mt-2 ms-2 font-extrabold">
                                                    {{ $subkat['name'] }}</div>
                                                <div class="row row-cols-2 mt-1">
                                                    @foreach ($nominal as $nom)
                                                        @if ($nom->sub_category_id == $subkat['id'])
                                                            <div class="col-lg-4 px-2 mt-2"
                                                                onclick="location.href='#pembayaran'">
                                                                <div class="list-group shadow h-100">
                                                                    <input type="radio" name="nominal"
                                                                        id="{{ $nom->id }}"
                                                                        value="{{ $nom->id }}" data-type="diamond"
                                                                        {{ Request::get('fs') == $nom->id ? 'checked' : '' }}>
                                                                    <label for="{{ $nom->id }}"
                                                                        class="list-group-item h-100"
                                                                        style="background: var(--warna_3);">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-9 akumauweb-prod selected-order text-000000">
                                                                                        <strong
                                                                                            style="color: var(--warna_5);">{{ $nom->layanan }}</strong>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col nominal-price text-000000">
                                                                                        @if ($nom->is_flash_sale == 1 && $nom->expired_flash_sale >= date('Y-m-d'))
                                                                                            <span class="sale-price"
                                                                                                style="color: #fd7e14;"><i>Rp
                                                                                                    {{ number_format($nom->harga_flash_sale) }}</i></span>
                                                                                            <br>
                                                                                            <span class="regular-price ">Rp
                                                                                                {{ number_format($nom->harga) }}</span>
                                                                                        @else
                                                                                            <span class="sale-price"
                                                                                                style="color: #fd7e14;">Rp
                                                                                                {{ number_format($nom->harga) }}</span>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-3 col-1 m-auto">
                                                                                <img src="{{ $nom->product_logo }}"
                                                                                    class="akumauwebiconurl">
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment -->
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="section" id="pembayaran">
                                        <div class="card rounded-lg  kbr-bg akumauweb-shadow "
                                            style="background: var(--warna_3) !important;">
                                            <div class="card border-0 mb-0 shadow-form">
                                                <div class="px-4 py-1">
                                                    <div class="card-header  d-flex align-items-center border-bottom pb-2">
                                                        <img alt="step-two"
                                                            srcset="/assets/icons/step-three-3.svg 1x, /assets/icons/step-three-3.svg 2x"
                                                            src="/assets/icons/step-three-3.svg" width="26"
                                                            height="26" decoding="async" data-nimg="1"
                                                            loading="lazy"
                                                            style="color: transparent; margin-left:-15px;" />
                                                        <h4 class="card-title mt-2 ms-2 lex items-center  font-extrabold leading-6 md:text-xl"
                                                            style="color: var(--warna_5);">Pilih Pembayaran</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-2">
                                                <div class="card-body">
                                                    <div class="row ">
                                                        <div class="col">
                                                            <div class="area-list-payment-method">
                                                                <!--  <div class="flex p-4 mt-6 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
                                          <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                              </svg>
                                               <span class="sr-only">Info</span>
                                              <div> Untuk pembayaran E-Wallet sementara yang tersedia adalah<br>- OVO & DANA.
                    </div>
                  </div> -->
                                                                <div class="child-box payment-drawwer shadow">
                                                                    <div class="header short-payment-support-info-head"
                                                                        onclick="openPaymentDrawer(this)"
                                                                        style="background: var(--warna_3);">
                                                                        <div class="left"
                                                                            style="color: var(--warna_5);">
                                                                            <b><i class="fas fa-wallet" aria-hidden="true"
                                                                                    style="color: var(--warna_5);"></i>
                                                                                E-Wallet</b>
                                                                        </div>
                                                                        @foreach ($pay_method->take(1) as $p)
                                                                            <div class="right GOPAY"></div>
                                                                        @endforeach
                                                                    </div>
                                                                    <div class="button-action-payment"
                                                                        style="display: none;">
                                                                        <div class="row row-cols-2 row-cols-md-3 p-1">
                                                                            @foreach ($pay_method as $p)
                                                                                @if ($p->tipe == 'e-walet')
                                                                                    <div class="col-lg-4 p-1">
                                                                                        <div class="list-group1 h-100">
                                                                                            <input type="radio"
                                                                                                name="pembayaran"
                                                                                                id="{{ $p->code }}"
                                                                                                value="{{ $p->code }}">
                                                                                            <label
                                                                                                for="{{ $p->code }}"
                                                                                                class="list-group-item h-100">
                                                                                                <div class="info-top">
                                                                                                    <div>
                                                                                                        <img src="{{ $p->images }}"
                                                                                                            alt=""
                                                                                                            height="10px">
                                                                                                    </div>
                                                                                                    <b class="{{ $p->code }}"
                                                                                                        style="font-size: 12px;"></b>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="info-bottom text-sm-left text-dark">
                                                                                                    <span class="text-dark"
                                                                                                        id="pembay">
                                                                                                        {{ $p->name }}
                                                                                                        <div
                                                                                                            class="akumauweb-dicek">
                                                                                                            <i>{{ $p->keterangan }}</i>
                                                                                                        </div>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                    <div class="short-payment-support-info"
                                                                        onclick="openPaymentDrawer(this)">
                                                                        @foreach ($pay_method as $p)
                                                                            @if ($p->tipe == 'e-walet')
                                                                                <img src="{{ $p->images }}"
                                                                                    class="m-1 bangjeff-pgimg"
                                                                                    style="">
                                                                            @endif
                                                                        @endforeach
                                                                        <a class="open-button-action-payment">
                                                                            <i class="fas fa-chevron-down"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>



                                                                <div class="child-box payment-drawwer shadow">
                                                                    <div class="header short-payment-support-info-head"
                                                                        onclick="openPaymentDrawer(this)"
                                                                        style="background: var(--warna_3)">
                                                                        <div class="left"
                                                                            style="color: var(--warna_5);">
                                                                            <b><i class="fas fa-credit-card"
                                                                                    aria-hidden="true"
                                                                                    style="color: var(--warna_5);"></i>
                                                                                Virtual Account</b>
                                                                        </div>
                                                                        @foreach ($pay_method->take(1) as $p)
                                                                            <div class="right GOPAY"></div>
                                                                        @endforeach
                                                                    </div>
                                                                    <div class="button-action-payment"
                                                                        style="display: none;">
                                                                        <div class="row row-cols-2 row-cols-md-3 p-1">


                                                                            @foreach ($pay_method as $p)
                                                                                @if ($p->tipe == 'virtual-account')
                                                                                    <div class="col-lg-4 p-1">
                                                                                        <div class="list-group1 h-100">
                                                                                            <input type="radio"
                                                                                                name="pembayaran"
                                                                                                id="{{ $p->code }}"
                                                                                                value="{{ $p->code }}">
                                                                                            <label
                                                                                                for="{{ $p->code }}"
                                                                                                class="list-group-item h-100">
                                                                                                <div class="info-top">
                                                                                                    <div>
                                                                                                        <img src="{{ $p->images }}"
                                                                                                            alt=""
                                                                                                            height="10px">
                                                                                                    </div>
                                                                                                    <b class="{{ $p->code }}"
                                                                                                        style="font-size: 11px;"></b>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="info-bottom text-sm-left text-dark">
                                                                                                    {{ $p->name }}
                                                                                                    <div
                                                                                                        class="akumauweb-dicek">
                                                                                                        <i>{{ $p->keterangan }}</i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                    <div class="short-payment-support-info"
                                                                        onclick="openPaymentDrawer(this)">
                                                                        @foreach ($pay_method as $p)
                                                                            @if ($p->tipe == 'virtual-account')
                                                                                <img src="{{ $p->images }}"
                                                                                    class="m-1 bangjeff-pgimg"
                                                                                    style="">
                                                                            @endif
                                                                        @endforeach
                                                                        <a class="open-button-action-payment">
                                                                            <i class="fas fa-chevron-down"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="child-box payment-drawwer shadow">
                                                                    <div class="header short-payment-support-info-head"
                                                                        onclick="openPaymentDrawer(this)"
                                                                        style="background: var(--warna_3)">
                                                                        <div class="left"
                                                                            style="color: var(--warna_5);">
                                                                            <b>
                                                                                <i class="fas fa-store" aria-hidden="true"
                                                                                    style="color: var(--warna_5);"></i>
                                                                                Convenience Store
                                                                            </b>
                                                                        </div>
                                                                        @foreach ($pay_method->take(1) as $p)
                                                                            <div class="right GOPAY"></div>
                                                                        @endforeach
                                                                    </div>
                                                                    <div class="button-action-payment"
                                                                        style="display: none;">
                                                                        <div class="row row-cols-2 row-cols-md-3 p-1">

                                                                            @foreach ($pay_method as $p)
                                                                                @if ($p->tipe == 'convenience-store')
                                                                                    <div class="col-lg-4 p-1">
                                                                                        <div class="list-group1 h-100">
                                                                                            <input type="radio"
                                                                                                name="pembayaran"
                                                                                                id="{{ $p->code }}"
                                                                                                value="{{ $p->code }}">
                                                                                            <label
                                                                                                for="{{ $p->code }}"
                                                                                                class="list-group-item h-100">
                                                                                                <div class="info-top">
                                                                                                    <div>
                                                                                                        <img src="{{ $p->images }}"
                                                                                                            alt=""
                                                                                                            height="10px">
                                                                                                    </div>
                                                                                                    <b class="{{ $p->code }}"
                                                                                                        style="font-size: 11px;"></b>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="info-bottom text-sm-left text-dark">
                                                                                                    <span class="text-dark"
                                                                                                        id="pembay">
                                                                                                        {{ $p->name }}
                                                                                                        <div
                                                                                                            class="akumauweb-dicek">
                                                                                                            <i>{{ $p->keterangan }}</i>
                                                                                                        </div>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                    <div class="short-payment-support-info"
                                                                        onclick="openPaymentDrawer(this)">
                                                                        @foreach ($pay_method as $p)
                                                                            @if ($p->tipe == 'convenience-store')
                                                                                <img src="{{ $p->images }}">
                                                                            @endif
                                                                        @endforeach
                                                                        <a class="open-button-action-payment">
                                                                            <i class="fas fa-chevron-down"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="child-box payment-drawwer shadow">
                                                                    <div class="header short-payment-support-info-head"
                                                                        onclick="openPaymentDrawer(this)"
                                                                        style="background: var(--warna_3)">
                                                                        <div class="left"
                                                                            style="color: var(--warna_5);">
                                                                            <b><i class="fas fa-flash"
                                                                                    style="color: var(--warna_5);"></i>
                                                                                Saldo ( Tanpa Biaya Admin )</b>
                                                                        </div>
                                                                        @foreach ($pay_method->take(1) as $p)
                                                                            <div class="right GOPAY"></div>
                                                                        @endforeach
                                                                    </div>
                                                                    @guest
                                                                        <div class="button-action-payment">
                                                                            <div class="row p-1">
                                                                                <div class="col-lg-4 p-1">
                                                                                    <div class="list-group1 h-100">
                                                                                        <input type="radio"
                                                                                            name="pembayaran" id="SALDO"
                                                                                            value="SALDO" disabled>
                                                                                        <label for="SALDO"
                                                                                            class="list-group-item h-100">
                                                                                            <div class="info-top">
                                                                                                <div>
                                                                                                    <img
                                                                                                        src="{{ !$config ? '' : $config->logo_header }}" />
                                                                                                    {{ ENV('APP_NAME') }} PAY
                                                                                                </div>
                                                                                                <b class="SALDO"
                                                                                                    style="font-size: 11px;"></b>
                                                                                            </div>
                                                                                            <div class="info-bottom text-dark">
                                                                                                <span class="text-dark"
                                                                                                    id="pembay">
                                                                                                    <div class="akumauweb-dicek"
                                                                                                        style="color: var(--warna_5);">
                                                                                                        <i
                                                                                                            style="color: var(--warna_5);">Login
                                                                                                            untuk menggunakan
                                                                                                            {{ ENV('APP_NAME') }}
                                                                                                            E-Wallet</i>
                                                                                                    </div>
                                                                                                </span>
                                                                                            </div>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @else
                                                                        <div class="button-action-payment"
                                                                            style="background: var(--warna_3) display: none;">
                                                                            <div class="row p-1">
                                                                                <div class="col-lg-4 p-1">
                                                                                    <div class="list-group1 h-100">
                                                                                        <input type="radio"
                                                                                            name="pembayaran" id="SALDO"
                                                                                            value="SALDO">
                                                                                        <label for="SALDO"
                                                                                            class="list-group-item h-100">
                                                                                            <div class="info-top">
                                                                                                <div>
                                                                                                    <img
                                                                                                        src="{{ !$config ? '' : $config->logo_header }}" />
                                                                                                    {{ ENV('APP_NAME') }} PAY
                                                                                                </div>
                                                                                                <b class="SALDO"
                                                                                                    style="font-size: 11px;"></b>
                                                                                            </div>
                                                                                            <div class="info-bottom text-dark">
                                                                                                <span class="text-dark"
                                                                                                    id="pembay">
                                                                                                    Saldo
                                                                                                    <div
                                                                                                        class="akumauweb-dicek">
                                                                                                        <i>Dicek Otomatis</i>
                                                                                                    </div>
                                                                                                </span>
                                                                                            </div>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endguest
                                                                    <div class="short-payment-support-info">
                                                                        <img
                                                                            src="{{ !$config ? '' : $config->logo_header }}" />
                                                                        <a class="open-button-action-payment"
                                                                            onclick="openPaymentDrawer(this)">
                                                                            <i class="fas fa-chevron-down"></i>
                                                                        </a>
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
                            </div>



                            <div class="row mt-3">
                                <div class="col">
                                    <div class="card rounded-lg  kbr-bg akumauweb-shadow "
                                        style="background: var(--warna_3) !important;">
                                        <div class="card border-0 mb-0 shadow-form">
                                            <div class="px-4 py-1">
                                                <div class="card-header  d-flex align-items-center border-bottom pb-2">
                                                    <img alt="step-one"
                                                        srcset="/assets/icons/step-four.svg 1x, /assets/icons/step-four.svg 2x"
                                                        src="/assets/icons/step-four.svg" width="26" height="26"
                                                        decoding="async" data-nimg="1" loading="lazy"
                                                        style="color: transparent; margin-left:-15px;" />
                                                    <h4 class="card-title mt-2 ms-2 lex items-center  font-extrabold leading-6 md:text-xl"
                                                        style="color: var(--warna_5);">
                                                        Kode promo</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- INFORMASI -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 mx-auto ">
                                                    <div class="mt-3 overflow-hidden rounded-lg">
                                                        <div class="null bg-gradient-black">
                                                            <!--<button-->
                                                            <!--    class="flex w-full justify-between rounded-lg px-4 py-3 text-left text-md font-semibold !border-b border-[#626274] rounded-[1rem]"-->
                                                            <!--    data-bs-toggle="collapse" data-bs-target="#meltih" aria-expanded="false"-->
                                                            <!--    aria-controls="CollapseThreee">-->
                                                            <!--    <small>Bagaimana Cara Mendapatkan Voucher?</small>-->
                                                            <!--    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"-->
                                                            <!--        stroke="currentColor" aria-hidden="true" class="rotate-180 transform h-5 w-5">-->
                                                            <!--        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5">-->
                                                            <!--        </path>-->
                                                            <!--    </svg>-->
                                                            <!--</button>-->
                                                            <!--<div class="px-3 pt-3 pb-3 text-sm collapse" id="meltih" class="collapse"-->
                                                            <!--    aria-labelledby="HeadingThreee" data-bs-parent="#Accordione">-->
                                                            <!--    <ol>-->
                                                            <!--        <li>-->
                                                            <!--           <b>Kamu bisa mendapatkan Voucher melalui</b>-->
                                                            <!--        </li>-->
                                                            <!--        <li>-->
                                                            <!--           <b>Social Media kami, ikuti sekarang!</b>-->
                                                            <!--        </li>-->
                                                            <!--        <li>1. Instagram <a-->
                                                            <!--                href="https://instagram.com/jstoregame" rel="noopener noreferrer"-->
                                                            <!--                target="_blank" style="color: #e75c5c;"><strong>{{ config('app.name') }}</strong></a><strong>”</strong>.</li>-->
                                                            <!--        <li>2. Youtube <a-->
                                                            <!--                href="https://www.youtube.com/@jstoregame" rel="noopener noreferrer"-->
                                                            <!--                target="_blank" style="color: #e75c5c;"><strong>Channel {{ config('app.name') }}</strong></a><strong>”</strong>.</li>-->
                                                            <!--        <li>4. Ikuti Social Media kami agar kamu <b>“Mendapatkan Informasi Terbaru”</b></li>-->
                                                            <!--    </ol>-->
                                                            <!--</div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-2">
                                            <div class="card-body">
                                                <div class="form-group mb-2">
                                                    <div class="relative rounded-md shadow-sm">
                                                        <div class="relative w-full rounded-full">
                                                            <div
                                                                class=" absolute inset-y-0 left-0 flex items-center pl-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="2"
                                                                    stroke="currentColor" aria-hidden="true"
                                                                    class="h-5 w-5 text-gray-400">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <input type="text"
                                                                class="form-control text-dark z-20 block w-full rounded-full p-2.5 my-2 pl-10 text-sm uppercase text-black focus:outline-none focus:border-[#707feb] focus:ring-2 focus:ring-[#2D2EAD]"
                                                                id="voucher" placeholder="Kode Voucher">
                                                            <button type="button" id="check"
                                                                class="absolute btn-voucher btn-primary relative top-0 -right-[3px] rounded-r-full py-2.5 px-3 text-sm font-medium"
                                                                style="background: rgb(184 15 15); color: rgb(255, 255, 255); margin-top:-0px; height:42px;">
                                                                Pakai Voucher
                                                            </button>
                                                        </div>
                                                        <p class=" text-sm" style="color: var(--warna_5);">Masukan Kode
                                                            Voucher jika ada.</p>
                                                        <div class="mt-0">
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

                    <div class="row mt-3">
                        <div class="col">
                            <div class="card rounded-lg  kbr-bg akumauweb-shadow "
                                style="background: var(--warna_3) !important;">
                                <div class="card border-0 mb-0 shadow-form">
                                    <div class="px-4 py-1">
                                        <div class="card-header  d-flex align-items-center border-bottom pb-2">
                                            <img alt="step-two"
                                                srcset="/assets/icons/step-five.svg 1x, /assets/icons/step-five.svg 2x"
                                                src="/assets/icons/step-five.svg" width="26" height="26"
                                                decoding="async" data-nimg="1" loading="lazy"
                                                style="color: transparent; margin-left:-15px;" />
                                            <h4 class="card-title mt-2 ms-2 lex items-center  font-extrabold leading-6 md:text-xl"
                                                style="color: var(--warna_5);">
                                                Nomor WhatsApp</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-2">
                                    <div class="card-body">
                                        <div class="form-group mb-2">
                                            <input class="form-control input-lg rounded-pill py-2 my-2"
                                                placeholder="628xxxxx" type="number" name="nomor" id="nomor"
                                                required>
                                        </div>
                                        <p class=" text-sm" style="color: var(--warna_5);">Bukti pembelianmu akan kami
                                            kirimkan ke WhatsApp.</p>
                                        <div class="mt-0">
                                        </div>
                                        <div class="row mt-0">
                                            <div class="col-lg-12 clearfix">
                                                <input type="hidden" id="apikey" name="apikey" value="">
                                                <input type="hidden" name="product_name" id="product_name"
                                                    value="Mobile Legends">
                                                <input type="hidden" name="product_id" id="product_id"
                                                    value="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <style>
                                .space-y-8>:not([hidden])~:not([hidden]) {
                                    --tw-space-y-reverse: 0;
                                    margin-top: calc(2rem * calc(1 - var(--tw-space-y-reverse)));
                                    margin-bottom: calc(2rem * var(--tw-space-y-reverse));
                                }

                                .bg-murky-800 {
                                    --tw-bg-opacity: 1;
                                    background-color: rgb(52 55 59/var(--tw-bg-opacity));
                                }

                                .w-screen {
                                    width: 100vw;
                                }

                                .\!mt-0 {
                                    margin-top: 0 !important;
                                }

                                .-mx-4 {
                                    margin-left: -1rem;
                                    margin-right: -1rem;
                                }

                                .z-10 {
                                    z-index: 10;
                                }

                                .bottom-0 {
                                    bottom: 0;
                                }

                                .inset-0,
                                .inset-x-0 {
                                    right: 0;
                                    left: 0;
                                }

                                .sticky {
                                    position: sticky;
                                }

                                .py-4 {
                                    padding-top: 1rem;
                                    padding-bottom: 1rem;
                                }

                                .py-2 {
                                    padding-top: 0.5rem;
                                    padding-bottom: 0.5rem;
                                }

                                .justify-start {
                                    justify-content: flex-start;
                                }

                                .items-start {
                                    align-items: flex-start;
                                }

                                .p-4 {
                                    padding: 1rem;
                                }

                                .bg-yellow-100 {
                                    --tw-bg-opacity: 1;
                                    background-color: rgb(254 249 195/var(--tw-bg-opacity));
                                }

                                .border-yellow-400 {
                                    --tw-border-opacity: 1;
                                    border-color: rgb(250 24 21/var(--tw-border-opacity));
                                }

                                .border-l-4 {
                                    border-left-width: 4px;
                                }

                                .rounded-md {
                                    border-radius: 0.375rem;
                                }

                                @media (min-width: 676px) .container,
                                .container-sm {
                                    max-width: 747px;
                                }

                                .py-2 {
                                    padding-top: 0.5rem;
                                    padding-bottom: 0.5rem;
                                }

                                .justify-start {
                                    justify-content: flex-start;
                                }

                                .items-start {
                                    align-items: flex-start;
                                }


                                #btn-order {
                                    display: inline-flex;
                                    align-items: center;
                                    justify-content: center;
                                    padding: 10px 15px;
                                    font-size: 16px;
                                    font-weight: bold;
                                    background-color: #141414;
                                    /* Ganti dengan warna latar yang diinginkan */
                                    color: #fff;
                                    /* Ganti dengan warna teks yang diinginkan */
                                    border: none;
                                    border-radius: 5px;
                                    cursor: pointer;
                                    transition: background-color 0.3s ease;
                                }

                                #btn-order svg {
                                    margin-right: 8px;
                                }

                                #btn-order:hover {
                                    background-color: #141414;
                                    /* Ganti dengan warna latar hover yang diinginkan */
                                }

                                /* Responsive Styles */
                                @media screen and (max-width: 600px) {
                                    #btn-order {
                                        font-size: 14px;
                                        padding: 8px 12px;
                                    }
                                }
                            </style>
                            <!--pop up order-->
                            <div class="relative mt-3">
                                <button class="akumauweb-shadow rounded-lg border-0 games-thumbnail" id="btn-order"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z">
                                        </path>
                                    </svg>
                                    <span>Beli Sekarang</span>
                                </button>
                            </div>



                            <!--<div class="sticky inset-x-0 bottom-0 z-10 -mx-4 !mt-0 w-screen bg-murky-800 md:static md:w-auto d-md-none" style="background-color:#272730;">
              <div class="relative">
                <button
                        style="box-shadow: 0 .5rem 1rem rgba(255,255,255,.152)!important; background: rgb(184 15 15); color: rgb(255, 255, 255)"
                        class="btn-primary mt-4 inline-flex items-center justify-center rounded-md bg-primary-500 px-4 py-2 text-sm font-medium text-000000 duration-300 hover:bg-primary-400 disabled:cursor-not-allowed disabled:opacity-75 btn-order relative flex w-full gap-2 overflow-hidden"
                        id="btn-order" type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5">
                    <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"
                          >
                    </path>
                  </svg>
                  Konfirmasi TopUp
                </button>
              </div>
            </div>
            <button
                    style="box-shadow: 0 .5rem 1rem rgba(255,255,255,.152)!important; background: rgb(184 15 15); color: rgb(255, 255, 255)"
                    class="btn-primary d-none d-lg-block mt-4 inline-flex items-center justify-center rounded-md bg-primary-500 px-4 py-2 text-sm font-medium text-000000 duration-300 hover:bg-primary-400 disabled:cursor-not-allowed disabled:opacity-75 btn-order relative flex w-full gap-2 overflow-hidden"
                    id="btn-order" type="button">
              Konfirmasi TopUp
            </button>-->


                            <section class="relative mb-2 bg-transparent px-0 py-4 shadow-2xl lg:min-h-[350px]">
                                <div class="absolute inset-0 -z-10">
                                    <div class="area">
                                        <ul class="circles">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    @include('../footer')
@endsection

@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const popUpOrder = document.querySelector('.pop-up-order');
        const scrollThreshold = window.innerHeight * 0.8;

        function showPopUpOrder() {
            if (window.scrollY > scrollThreshold) {
                popUpOrder.classList.add('show');
            } else {
                popUpOrder.classList.remove('show');
            }
        }
        window.addEventListener('scroll', showPopUpOrder);
    </script>

    <script>
        function removeClass() {
            btnorder.className = btnorder.className.replace(new RegExp('(?:^|\\s)loading(?!\\S)'), '');
        }

        var btnorder = document.getElementById('btn-order');


        btnorder.addEventListener("click", function() {
            btnorder.className = btnorder.className + ' loading';
            setTimeout(removeClass, 4000);
        }, false);
    </script>

    <script>
        function openPaymentDrawer(elem) {
            var $this = $(elem);
            if ($('input[type="radio"][name="nominal"]:checked').val() == null) {
                toastr.warning("Silahkan pilih Nominal terlebih dahulu");
                $('html,body').animate({
                    scrollTop: $('#tempatNominal').offset().top - 300
                }, 400);
                return;
            }

            $('.payment-drawwer').not(this).each(function() {
                var $parents = $(this);
                $parents.find('.button-action-payment').slideUp(function() {
                    $parents.removeClass('active');
                });

                $parents.find('.short-payment-support-info').find('img').slideDown();
                $parents.find('.short-payment-support-info').find('i').removeClass('fa-chevron-up').addClass(
                    'fa-chevron-down');
            });

            var $parents = $this.parents('.child-box');

            if (!$parents.find('.button-action-payment').is(":hidden")) {
                $parents.find('.button-action-payment').slideUp(function() {
                    $parents.removeClass('active');
                });

                $parents.find('.short-payment-support-info').find('img').slideDown();
                $parents.find('.short-payment-support-info').find('.fa-chevron-up').removeClass('fa-chevron-up').addClass(
                    'fa-chevron-down');

            } else {
                $parents.find('.button-action-payment').slideDown(function() {
                    $parents.addClass('active');
                });
                $parents.find('.short-payment-support-info').find('img').slideUp();
                $parents.find('.short-payment-support-info').find('.fa-chevron-down').addClass('fa-chevron-up').removeClass(
                    'fa-chevron-down');

                $('html, body').animate({
                    scrollTop: $('#openPaymentDrawer').offset().top - 500
                }, 400);

            }
        }
    </script>
    @if (Request::get('fs'))
        <script>
            $(function() {

                var nominal = $("input[name='nominal']:checked").val();

                if (nominal) {
                    $.ajax({
                        url: "<?php echo route('ajax.price'); ?>",
                        dataType: "json",
                        type: "POST",
                        data: {
                            "_token": "<?php echo csrf_token(); ?>",
                            "nominal": nominal
                        },
                        success: function(res) {
                            changeHarga(res.harga);
                        }
                    })
                }

            })
        </script>
    @endif
    <script type="text/javascript">
        $(document).ready(function() {
            $("input[type=radio][name=nominal]").change(function() {
                var nominal = $("input[name='nominal']:checked").val();

                if (nominal) {
                    $.ajax({
                        url: "<?php echo route('ajax.price'); ?>",
                        dataType: "json",
                        type: "POST",
                        data: {
                            "_token": "<?php echo csrf_token(); ?>",
                            "nominal": nominal
                        },
                        success: function(res) {
                            changeHarga(res.harga);
                        }
                    })
                }
            });
            $("#btn-order").on("click", function() {
                var uid = $("#user_id").val();
                var zone = $("#zone").val();
                var email_joki = $("#email_joki").val();
                var password_joki = $("#password_joki").val();
                var loginvia_joki = $("#loginvia_joki").val();
                var nickname_joki = $("#nickname_joki").val();
                var request_joki = $("#request_joki").val();
                var catatan_joki = $("#catatan_joki").val();
                var email_vilog = $("#email_vilog").val();
                var password_vilog = $("#password_vilog").val();
                var loginvia_vilog = $("#loginvia_vilog").val();
                var ktg_tipe = $("#ktg_tipe").val();
                var service = $("input[name='nominal']:checked").val();
                var pembayaran = $("input[name='pembayaran']:checked").val();
                var nomor = $("input[name='nomor']").val();
                var voucher = $("#voucher").val();
                $.ajax({
                    url: "<?php echo route('ajax.confirm-data'); ?>",
                    dataType: "JSON",
                    type: "POST",
                    data: {
                        '_token': '<?php echo csrf_token(); ?>',
                        'uid': uid,
                        'zone': zone,
                        'email_joki': email_joki,
                        'password_joki': password_joki,
                        'loginvia_joki': loginvia_joki,
                        'nickname_joki': nickname_joki,
                        'request_joki': request_joki,
                        'catatan_joki': catatan_joki,
                        'email_vilog': email_vilog,
                        'password_vilog': password_vilog,
                        'loginvia_vilog': loginvia_vilog,
                        'ktg_tipe': ktg_tipe,
                        'service': service,
                        'payment_method': pembayaran,
                        'nomor': nomor,
                        'voucher': voucher
                    },
                    beforeSend: function() {
                        Swal.fire({
                            icon: "info",
                            title: "Mohon Tunggu",
                            background: 'var(--warna_4)',
                            color: '#fff',
                            showConfirmButton: false,
                            allowOutsideClick: false,
                        });
                    },
                    success: function(res) {
                        if (res.status == true) {
                            Swal.fire({
                                background: 'var(--warna_4)',
                                color: '#fff',
                                title: '<h3 style="color: 000000;">Detail Pesanan</h3>',
                                html: `${res.data}`,
                                showCancelButton: true,
                                confirmButtonText: 'Beli Sekarang',
                                cancelButtonText: 'Batal',
                                customClass: {
                                    title: 'text-lg font-bold leading-6',
                                    htmlContainer: 'swal-text',
                                    confirmButton: 'swal2-cancel btn btn-secondary mt-3 d-inline-flex justify-content-center align-items-center px-4 py-2 sm-mt-0 sm-w-auto sm-text-sm btn-block text-000000 w-100 swal2-styled',
                                    cancelButton: 'btn btn-secondary mt-3 d-inline-flex justify-content-center align-items-center px-4 py-2 sm-mt-0 sm-w-auto sm-text-sm btn-block text-000000 w-100'
                                }


                            }).then(resp => {
                                if (resp.isConfirmed) {
                                    var nickname = $("#nick").text();
                                    var nohp = $("input[name='nomor']").val();
                                    $.ajax({
                                        url: "<?php echo route('order'); ?>",
                                        dataType: "JSON",
                                        type: "POST",
                                        data: {
                                            '_token': '<?php echo csrf_token(); ?>',
                                            'nickname': nickname,
                                            'uid': uid,
                                            'zone': zone,
                                            'email_joki': email_joki,
                                            'password_joki': password_joki,
                                            'loginvia_joki': loginvia_joki,
                                            'nickname_joki': nickname_joki,
                                            'request_joki': request_joki,
                                            'catatan_joki': catatan_joki,
                                            'email_vilog': email_vilog,
                                            'password_vilog': password_vilog,
                                            'loginvia_vilog': loginvia_vilog,
                                            'ktg_tipe': ktg_tipe,
                                            'service': service,
                                            'payment_method': pembayaran,
                                            'nomor': nohp,
                                            'voucher': voucher

                                        },
                                        beforeSend: function() {
                                            let timerInterval
                                            Swal.fire({
                                                title: 'Tunggu Sebentar',
                                                timerProgressBar: false,
                                                background: 'var(--warna_4)',
                                                color: '#fff',
                                                didOpen: () => {
                                                    Swal.showLoading()
                                                    const b =
                                                        Swal
                                                        .getHtmlContainer()
                                                        .querySelector(
                                                            'b')
                                                    timerInterval
                                                        =
                                                        setInterval(
                                                            () => {
                                                                b.textContent =
                                                                    Swal
                                                                    .getTimerLeft()
                                                            },
                                                            100)
                                                },
                                                willClose: () => {
                                                    clearInterval
                                                        (
                                                            timerInterval
                                                        )
                                                }
                                            }).then((result) => {
                                                /* Read more about handling dismissals below */
                                                if (result
                                                    .dismiss ===
                                                    Swal
                                                    .DismissReason
                                                    .timer) {
                                                    console.log(
                                                        'I was closed by the timer'
                                                    )
                                                }
                                            })
                                        },
                                        success: function(resOrder) {
                                            if (resOrder.status) {
                                                Swal.fire({
                                                    title: 'Berhasil memesan',
                                                    text: `Order ID : ${resOrder.order_id}`,
                                                    icon: 'success',
                                                    showConfirmButton: false,
                                                    allowOutsideClick: false,
                                                    background: 'var(--warna_4)',
                                                    color: '#fff'
                                                });
                                                window.location =
                                                    `/pembelian/invoice/${resOrder.order_id}`;
                                            } else {
                                                Swal.fire({
                                                    title: 'Gagal...',
                                                    text: `${resOrder.data}`,
                                                    icon: 'error',
                                                    background: 'var(--warna_4)',
                                                    color: '#fff'
                                                });
                                            }
                                        }
                                    })
                                }
                            })
                        } else if (res.status == false) {
                            Swal.fire({
                                title: 'Oops...',
                                text: res.data,
                                icon: 'error',
                                background: 'var(--warna_4)',
                                color: '#fff'
                            });
                        } else {
                            Swal.fire({
                                title: 'Oops...',
                                text: 'User ID tidak ditemukan.',
                                icon: 'error',
                                background: 'var(--warna_4)',
                                color: '#fff'
                            });
                        }
                    },
                    error: function(e) {
                        if (e.status == 422) {
                            Swal.fire({
                                title: 'Oops...',
                                text: 'Pastikan anda sudah mengisi semua data yang diperlukan.',
                                icon: 'error',
                                background: 'var(--warna_4)',
                                color: '#fff'
                            });
                        }
                    }
                })
            })

            $("#check").on("click", function() {
                var voucher = $("#voucher").val();
                var service = $("input[name='nominal']:checked").val();
                $.ajax({
                    url: "<?php echo route('check.voucher'); ?>",
                    dataType: "JSON",
                    type: "POST",
                    data: {
                        "_token": "<?php echo csrf_token(); ?>",
                        "voucher": voucher,
                        "service": service
                    },
                    beforeSend: function() {
                        Swal.fire({
                            icon: "info",
                            title: "Mohon Tunggu",
                            background: 'var(--warna_4)',
                            color: '#fff',
                            showConfirmButton: false,
                            allowOutsideClick: false,
                        });
                    },
                    success: function(res) {
                        Swal.fire({
                            icon: "info",
                            title: res.message,
                            background: 'var(--warna_4)',
                            color: '#fff',
                            showConfirmButton: true,
                            allowOutsideClick: true,
                        });

                        if (res.harga) {
                            changeHarga(res.harga);
                        }
                    },
                    error: function(e) {
                        Swal.fire({
                            title: 'Oops...',
                            text: "Voucher tidak ditemukan",
                            icon: 'error',
                            background: 'var(--warna_4)',
                            color: '#fff'
                        });
                    }
                })
            });

        });

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
@endsection
