@extends('main')

@section('css')
<style>
    body {
    background-color: #1c1d31;
}

.zo {
    padding-left:5px!important;
    padding-right:5px!important;
}


.text-z{
    text-decoration:none!important;
}

.text-bramz {
    color :#c0d3df;
}
.card-topup{
    margin-bottom: 1rem;
    margin-top: 2rem;
    text-align: center;
    margin-left: 1rem;
    margin-right: 1rem;
}
.col-saldo {
    text-align:center;
}

.pro-user{
    /*color: #c0d3df;*/
    font-weight: 700;
    font-size: 16px;
}
.pro-saldo {
    color: #008f19;
    font-size: 18px;
    font-weight: 700;
}
.br-8px{
    border-radius:8px;
}

.col-gen {
    flex: 0 0 auto;
    width: 50%;
    font-size: 14px;
    text-align: left;
    height: 0px!important;
    padding: 0.5rem 0.75rem!important;
}

/*.bg-tab{*/
/*    background: #eff2f7;*/
/*}*/

.table-dark{
    background:#212529;
    color:#f2f2f2;
}

.col-gen2 {
    flex: 0 0 auto;
    width: 50%;
    font-size: 14px;
    max-width: 100px;
    height: 0px!important;
    padding: 0.5rem 0.75rem!important;
}

.col-gen3 {
    flex: 0 0 auto;
    width: 50%;
    font-size: 14px;
    max-width: 100px;
    height: 0px!important;
    padding: 0.5rem 1rem !important;
}

.sh {
    box-shadow:0 1px 10px 0 rgb(0 0 0 / 10%), 0 4px 5px 0 rgb(0 0 0 / 6%), 0 2px 4px 0 rgb(0 0 0 / 7%);
    border-radius:8px;
}

.bg-mzpoint {
    color: #f2f2f2;
    background:#132239;
}

.img-scale:hover {
    transform: scale(1.1);
    transition: .5s ease;
}
.zoom:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
     transition: .5s ease;
}
*::-webkit-scrollbar {
    width: 16px;
}

*::-webkit-scrollbar-track {
    border-radius: 8px;
}

*::-webkit-scrollbar-thumb {
    height: 56px;
    border-radius: 8px;
    border: 4px solid transparent;
    background-clip: content-box;
    background-color: #888;
}

*::-webkit-scrollbar-thumb:hover {
    background-color: #555;
}

    .fa-angle-right:before {
    color: #fe6c17;
    }

    .strip-primary{
    background-color: #fe6c17;
    position:absolute;
    width: 60px;
    height: 5px;
    border-radius: 10px;
}
   .fab-container {
        position: fixed;
        bottom: 70px;
        right: 10px;
        z-index: 999;
        cursor: pointer;
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
    
    .fab-options > li > a {
        text-decoration: none;
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
        left: -45px;
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

    .act-btn {
        display: block;
        position: fixed;
        width: 45px;
        height: 45px;
        bottom: 140px;
        left: 10px;
        color: #FFF;
        background: #5c8a8a;
        border-radius: 10px;
        text-align: center;
        font-size: 30px;
        z-index: 99999;
    }

    .act-btn:hover {
        background: #212529;
    }

    .act-btn-top {
        display: none;
        position: fixed;
        width: 45px;
        height: 45px;
        bottom: 140px;
        right: 10px;
        color: #FFF;
        background: #5c8a8a;
        border-radius: 10px;
        text-align: center;
        font-size: 30px;
        z-index: 99999;
    }

    .act-btn-top:hover {
        background: #212529;
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
        border-radius: 0.5rem !important;
    }

    .size-img-buy {
        width: 65%;
    }
    .size-img-buy-v {
        width: 100px;
        height: auto;
    }

    .col-hp {
    flex: 0 0 auto;
    width: 100%;
    font-size: 12px;
    }
    .col-hp2 {
    flex: 0 0 auto;
    width: 100%;
    font-size: 11px;
    }





a:hover {
    color: #fff;
    /*text-decoration:none;*/
}

.list-product {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    color:#6c757d;
}

.product {
    width: 33.33333%;
    padding: 7px;
    margin-bottom: 15px;
}

.link-product {
    text-decoration: none;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.link-product:hover {
    text-decoration: none;
}



.img-product {
    display: block;
    border-radius: 16px;
    max-width: 100%;
    /*max-height: 172px;*/
    border: 1px solid var(--border-color);
    margin-bottom: 15px;
}

.shadow {
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
}

.bs-stepper .line, .bs-stepper-line {
    background-color: rgb(255 255 255);
}


.card {
   background-color: var(--warna_5);
   color :#ffffff;
}
.card {
    box-shadow: 0 1px 10px 0 rgb(0 0 0 / 10%), 0 4px 5px 0 rgb(0 0 0 / 6%), 0 2px 4px 0 rgb(0 0 0 / 7%);
    background-color: #fff;
    border-radius: 8px;
    border: none;
    position: relative;
    margin-bottom: 30px;
}
.strip-back {
    background-color: #132239;
    position: absolute;
    width: 200px;
    height: 2px;
    color: #132239;
    border-radius: 10px;
}

.swal-modal {
    background-color: #1b2c46;
}

.swal-title {
    color: #fff;
}

.swal-text {
    color: #fff;
}

.form-group>label {
    color: #fff;
}

.navbar-bg {
     height: 70px;
    background-color: #1c1d31;
}

.main-sidebar {
    background-color: #1c1d31;
}

.bg-dark {
    background-color: #132239 !important;
}

.bg-dark-2 {
    background-color: #1b2c46 !important;
}

.bg-dark-3 {
    background-color: #1a232a !important;
}

.bg-bramz-primary {
    background-color: #D99F00 !important;
}

.stretched-link::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    pointer-events: auto;
    content: "";
    background-color: rgba(0, 0, 0, 0)
}
.card-mod {
    margin-bottom: 0px;
}
.card-menu .card-body {
    padding: 15px;
}

.card .card-header {
    border-bottom-color: rgba(0,0,0,.1);
    line-height: 30px;
    -ms-grid-row-align: center;
    align-self: center;
    width: 100%;
    min-height: 70px;
    padding: 15px 25px;
    display: flex;
    align-items: center;
}

.card .card-header2 {
    background-color: rgba(0, 0, 0, 0);
    border-bottom: 1px solid rgba(0,0,0,.125);
    margin-bottom: 1rem;
    padding: .5rem 1rem;
}

.card-body {
    flex: 1 1 auto;
    padding-bottom: 10px;

}
.card-menu-animate {
    background: linear-gradient(to left, white 50%, #2A528A 50%) right;
    background-size: 210%;
    transition: .3s ease-out;
}

.card-menu-animate:hover {
    background-position: left;
    color: #fff;
}

.card-menu:hover {
    background-color: #2A528A;
    color: #fff;
}

.radio-nominal {
    color: white;
    display: none;
    margin: 10px;
    cursor: pointer;
}

.radio-nominal:checked+label {
    text-align: center;
    background-image: none;
    background-color: #132239;
    color: #ffd045;
    cursor: pointer;
    border-radius: 5px;
    width: 49%;
    font-weight:bold;
    font-size: 14px;
    border-color: #2A528A;
}

.radio-nominal+label {
    text-align: center;
    color: #132239;
    display: inline-block;
    padding: 5px;
    background-color: #ffff;
    border: 1px solid #132239;
    cursor: pointer;
    border-radius: 5px;
    width: 49%;
    font-size: 14px;
}

.radio-pembayaran {
    color: white;
    display: none;
    margin: 10px;
    cursor: pointer;
}

 .radio-pembayaran:checked+.radio-pembayaran:before {
        color: inherit;
    }
    .radio-pembayaran:checked+.radio-pembayaran:after {
        position: absolute;
        top: 0;
        right: 0;
        width: 28px;
        height: 26px;
        content: "";
        background: url('../../assets/img/verified.png') top/cover;
        text-align: center;
    }

.radio-pembayaran:checked+label {
    background-image: none;
    background-color: #132239;
    color: #ffd045;
    cursor: pointer;
    border-radius: 8px;
    border-color: #132239;
    width: 100%;
    font-size: 14px;
    box-shadow: 0 0 2.22222vw #132239, inset 0 2.40741vw 8.05556vw #132239, inset 0 -8.24074vw 11.48148vw #132239;
}

.radio-pembayaran+label{
    color: #ffffff;
    display: inline-block;
    padding: 5px;
    background-color: #fff;
    border: 1px solid #132239;
    cursor: pointer;
    border-radius: 5px;
    width: 100%;
    font-size: 14px;
}

@media (min-width: 576px) {
    .radio-nominal:checked+label {
        width: 32%;
        font-size: 14px;
        padding: 5px;
    }

    .radio-nominal+label {
        width: 32%;
        font-size: 14px;
        padding: 5px;
    }

}

@media (min-width: 768px) {
    .radio-nominal:checked+label {
        width: 32%;
        font-size: 14px;
        padding: 5px;
    }

    .radio-nominal+label {
        width: 32%;
        font-size: 14px;
        padding: 5px;
    }
}

@media (min-width: 992px) {

    .radio-nominal:checked+label {
        width: 32%;
        font-size: 14px;
        padding: 5px;
    }

    .radio-nominal+label {
        width: 32%;
        font-size: 14px;
        padding: 5px;
    }

}

@media (min-width: 1200px) {
    .radio-nominal:checked+label {
        width: 24%;
        font-size: 14px;
        padding: 5px;
    }

    .radio-nominal+label {
        width: 24%;
        font-size: 14px;
        padding: 5px;
    }
}

@media (max-width: 1024px) {
    .main-content {
        padding-left: 20px;
        padding-right: 20px;
        width: 100% !important;
    }
}

@media (max-width: 750px){
    .banner {
        margin-right: -20px;
        margin-left: -20px;
        margin-top: -15px;
    }
}

.badge-square {
    border-radius: 0px;
}

.swal-text:first-child {
    margin-top: 0px;
}

.swal-text {
    text-align: left;
    width: 100%;
}

.swal-title {
    font-weight: 600;
    font-size: 20px;
}

.badge {
    border-radius: 5px;
}

tr.group,
tr.group:hover {
    background-color: #2d3238 !important;
}
.dataTables_info,
.dataTables_length {
color: #fff;
}
.dataTables_filter label {
    color: white;
  }
.preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-color: #0a1931;
  }
  .preloader .loading {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    font: 14px arial;
  }

  
.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-left: calc(var(--bs-gutter-x)*-.5);
    margin-right: calc(var(--bs-gutter-x)*-.5);
    margin-top: calc(var(--bs-gutter-y)*-1)
}

.row>* {
    flex-shrink: 0;
    margin-top: var(--bs-gutter-y);
    max-width: 100%;
    padding-left: calc(var(--bs-gutter-x)*.5);
    padding-right: calc(var(--bs-gutter-x)*.5);
    width: 100%
}

.col {
    flex: 1 0 0%
}

.row-cols-auto>* {
    flex: 0 0 auto;
    width: auto
}

.row-cols-1>* {
    flex: 0 0 auto;
    width: 100%
}

.row-cols-2>* {
    flex: 0 0 auto;
    width: 50%
}

.row-cols-3>* {
    flex: 0 0 auto;
    width: 33.3333333333%
}

.row-cols-4>* {
    flex: 0 0 auto;
    width: 25%
}

.row-cols-5>* {
    flex: 0 0 auto;
    width: 20%
}

.row-cols-6>* {
    flex: 0 0 auto;
    width: 16.6666666667%
}

.col-auto {
    flex: 0 0 auto;
    width: auto
}

.col-1 {
    flex: 0 0 auto;
    width: 8.33333333%
}

.col-2 {
    flex: 0 0 auto;
    width: 16.66666667%
}

.col-3 {
    flex: 0 0 auto;
    width: 25%
}

.col-4 {
    flex: 0 0 auto;
    width: 33.33333333%
}

.col-5 {
    flex: 0 0 auto;
    width: 41.66666667%
}

.col-6 {
    flex: 0 0 auto;
    width: 50%
}

.col-7 {
    flex: 0 0 auto;
    width: 58.33333333%
}

.col-8 {
    flex: 0 0 auto;
    width: 66.66666667%
}

.col-9 {
    flex: 0 0 auto;
    width: 75%
}

.col-10 {
    flex: 0 0 auto;
    width: 83.33333333%
}

.col-11 {
    flex: 0 0 auto;
    width: 91.66666667%
}

.col-12 {
    flex: 0 0 auto;
    width: 100%;
}

.offset-1 {
    margin-left: 8.33333333%
}

.offset-2 {
    margin-left: 16.66666667%
}

.offset-3 {
    margin-left: 25%
}

.offset-4 {
    margin-left: 33.33333333%
}

.offset-5 {
    margin-left: 41.66666667%
}

.offset-6 {
    margin-left: 50%
}

.offset-7 {
    margin-left: 58.33333333%
}

.offset-8 {
    margin-left: 66.66666667%
}

.offset-9 {
    margin-left: 75%
}

.offset-10 {
    margin-left: 83.33333333%
}

.offset-11 {
    margin-left: 91.66666667%
}

.g-0,
.gx-0 {
    --bs-gutter-x: 0
}

.g-0,
.gy-0 {
    --bs-gutter-y: 0
}

.g-1,
.gx-1 {
    --bs-gutter-x: 0.25rem
}

.g-1,
.gy-1 {
    --bs-gutter-y: 0.25rem
}

.g-2,
.gx-2 {
    --bs-gutter-x: 0.5rem
}

.g-2,
.gy-2 {
    --bs-gutter-y: 0.5rem
}

.g-3,
.gx-3 {
    --bs-gutter-x: 1rem
}

.g-3,
.gy-3 {
    --bs-gutter-y: 1rem
}

.g-4,
.gx-4 {
    --bs-gutter-x: 1.5rem
}

.g-4,
.gy-4 {
    --bs-gutter-y: 1.5rem
}

.g-5,
.gx-5 {
    --bs-gutter-x: 3rem
}

.g-5,
.gy-5 {
    --bs-gutter-y: 3rem
}

@media(min-width:576px) {
    .col-sm {
        flex: 1 0 0%
    }

    .row-cols-sm-auto>* {
        flex: 0 0 auto;
        width: auto
    }

    .row-cols-sm-1>* {
        flex: 0 0 auto;
        width: 100%
    }

    .row-cols-sm-2>* {
        flex: 0 0 auto;
        width: 50%
    }

    .row-cols-sm-3>* {
        flex: 0 0 auto;
        width: 33.3333333333%
    }

    .row-cols-sm-4>* {
        flex: 0 0 auto;
        width: 25%
    }

    .row-cols-sm-5>* {
        flex: 0 0 auto;
        width: 20%
    }

    .row-cols-sm-6>* {
        flex: 0 0 auto;
        width: 16.6666666667%
    }

    .col-sm-auto {
        flex: 0 0 auto;
        width: auto
    }

    .col-sm-1 {
        flex: 0 0 auto;
        width: 8.33333333%
    }

    .col-sm-2 {
        flex: 0 0 auto;
        width: 16.66666667%
    }

    .col-sm-3 {
        flex: 0 0 auto;
        width: 25%
    }

    .col-sm-4 {
        flex: 0 0 auto;
        width: 33.33333333%
    }

    .col-sm-5 {
        flex: 0 0 auto;
        width: 41.66666667%
    }

    .col-sm-6 {
        flex: 0 0 auto;
        width: 50%
    }

    .col-sm-7 {
        flex: 0 0 auto;
        width: 58.33333333%
    }

    .col-sm-8 {
        flex: 0 0 auto;
        width: 66.66666667%
    }

    .col-sm-9 {
        flex: 0 0 auto;
        width: 75%
    }

    .col-sm-10 {
        flex: 0 0 auto;
        width: 83.33333333%
    }

    .col-sm-11 {
        flex: 0 0 auto;
        width: 91.66666667%
    }

    .col-sm-12 {
        flex: 0 0 auto;
        width: 100%
    }

    .offset-sm-0 {
        margin-left: 0
    }

    .offset-sm-1 {
        margin-left: 8.33333333%
    }

    .offset-sm-2 {
        margin-left: 16.66666667%
    }

    .offset-sm-3 {
        margin-left: 25%
    }

    .offset-sm-4 {
        margin-left: 33.33333333%
    }

    .offset-sm-5 {
        margin-left: 41.66666667%
    }

    .offset-sm-6 {
        margin-left: 50%
    }

    .offset-sm-7 {
        margin-left: 58.33333333%
    }

    .offset-sm-8 {
        margin-left: 66.66666667%
    }

    .offset-sm-9 {
        margin-left: 75%
    }

    .offset-sm-10 {
        margin-left: 83.33333333%
    }

    .offset-sm-11 {
        margin-left: 91.66666667%
    }

    .g-sm-0,
    .gx-sm-0 {
        --bs-gutter-x: 0
    }

    .g-sm-0,
    .gy-sm-0 {
        --bs-gutter-y: 0
    }

    .g-sm-1,
    .gx-sm-1 {
        --bs-gutter-x: 0.25rem
    }

    .g-sm-1,
    .gy-sm-1 {
        --bs-gutter-y: 0.25rem
    }

    .g-sm-2,
    .gx-sm-2 {
        --bs-gutter-x: 0.5rem
    }

    .g-sm-2,
    .gy-sm-2 {
        --bs-gutter-y: 0.5rem
    }

    .g-sm-3,
    .gx-sm-3 {
        --bs-gutter-x: 1rem
    }

    .g-sm-3,
    .gy-sm-3 {
        --bs-gutter-y: 1rem
    }

    .g-sm-4,
    .gx-sm-4 {
        --bs-gutter-x: 1.5rem
    }

    .g-sm-4,
    .gy-sm-4 {
        --bs-gutter-y: 1.5rem
    }

    .g-sm-5,
    .gx-sm-5 {
        --bs-gutter-x: 3rem
    }

    .g-sm-5,
    .gy-sm-5 {
        --bs-gutter-y: 3rem
    }
}

@media(min-width:768px) {

    .col-md {
        flex: 1 0 0%
    }

    .row-cols-md-auto>* {
        flex: 0 0 auto;
        width: auto
    }

    .row-cols-md-1>* {
        flex: 0 0 auto;
        width: 100%
    }

    .row-cols-md-2>* {
        flex: 0 0 auto;
        width: 50%
    }

    .row-cols-md-3>* {
        flex: 0 0 auto;
        width: 33.3333333333%
    }

    .row-cols-md-4>* {
        flex: 0 0 auto;
        width: 25%
    }

    .row-cols-md-5>* {
        flex: 0 0 auto;
        width: 20%
    }

    .row-cols-md-6>* {
        flex: 0 0 auto;
        width: 16.6666666667%
    }

    .col-md-auto {
        flex: 0 0 auto;
        width: auto
    }

    .col-md-1 {
        flex: 0 0 auto;
        width: 8.33333333%
    }

    .col-md-2 {
        flex: 0 0 auto;
        width: 16.66666667%
    }

    .col-md-3 {
        flex: 0 0 auto;
        width: 25%
    }

    .col-md-4 {
        flex: 0 0 auto;
        width: 33.33333333%
    }

    .col-md-5 {
        flex: 0 0 auto;
        width: 41.66666667%
    }

    .col-md-6 {
        flex: 0 0 auto;
        width: 50%
    }

    .col-md-7 {
        flex: 0 0 auto;
        width: 58.33333333%
    }

    .col-md-8 {
        flex: 0 0 auto;
        width: 66.66666667%
    }

    .col-md-9 {
        flex: 0 0 auto;
        width: 75%
    }

    .col-md-10 {
        flex: 0 0 auto;
        width: 83.33333333%
    }

    .col-md-11 {
        flex: 0 0 auto;
        width: 91.66666667%
    }

    .col-md-12 {
        flex: 0 0 auto;
        width: 100%
    }

    .offset-md-0 {
        margin-left: 0
    }

    .offset-md-1 {
        margin-left: 8.33333333%
    }

    .offset-md-2 {
        margin-left: 16.66666667%
    }

    .offset-md-3 {
        margin-left: 25%
    }

    .offset-md-4 {
        margin-left: 33.33333333%
    }

    .offset-md-5 {
        margin-left: 41.66666667%
    }

    .offset-md-6 {
        margin-left: 50%
    }

    .offset-md-7 {
        margin-left: 58.33333333%
    }

    .offset-md-8 {
        margin-left: 66.66666667%
    }

    .offset-md-9 {
        margin-left: 75%
    }

    .offset-md-10 {
        margin-left: 83.33333333%
    }

    .offset-md-11 {
        margin-left: 91.66666667%
    }

    .g-md-0,
    .gx-md-0 {
        --bs-gutter-x: 0
    }

    .g-md-0,
    .gy-md-0 {
        --bs-gutter-y: 0
    }

    .g-md-1,
    .gx-md-1 {
        --bs-gutter-x: 0.25rem
    }

    .g-md-1,
    .gy-md-1 {
        --bs-gutter-y: 0.25rem
    }

    .g-md-2,
    .gx-md-2 {
        --bs-gutter-x: 0.5rem
    }

    .g-md-2,
    .gy-md-2 {
        --bs-gutter-y: 0.5rem
    }

    .g-md-3,
    .gx-md-3 {
        --bs-gutter-x: 1rem
    }

    .g-md-3,
    .gy-md-3 {
        --bs-gutter-y: 1rem
    }

    .g-md-4,
    .gx-md-4 {
        --bs-gutter-x: 1.5rem
    }

    .g-md-4,
    .gy-md-4 {
        --bs-gutter-y: 1.5rem
    }

    .g-md-5,
    .gx-md-5 {
        --bs-gutter-x: 3rem
    }

    .g-md-5,
    .gy-md-5 {
        --bs-gutter-y: 3rem
    }
}

@media(min-width:992px) {
    .product {
        width: 25%;
    }

    .col-lg {
        flex: 1 0 0%
    }

    .row-cols-lg-auto>* {
        flex: 0 0 auto;
        width: auto
    }

    .row-cols-lg-1>* {
        flex: 0 0 auto;
        width: 100%
    }

    .row-cols-lg-2>* {
        flex: 0 0 auto;
        width: 50%
    }

    .row-cols-lg-3>* {
        flex: 0 0 auto;
        width: 33.3333333333%
    }

    .row-cols-lg-4>* {
        flex: 0 0 auto;
        width: 25%
    }

    .row-cols-lg-5>* {
        flex: 0 0 auto;
        width: 20%
    }

    .row-cols-lg-6>* {
        flex: 0 0 auto;
        width: 16.6666666667%
    }

    .col-lg-auto {
        flex: 0 0 auto;
        width: auto
    }

    .col-lg-1 {
        flex: 0 0 auto;
        width: 8.33333333%
    }

    .col-lg-2 {
        flex: 0 0 auto;
        width: 16.66666667%
    }

    .col-lg-3 {
        flex: 0 0 auto;
        width: 25%
    }

    .col-lg-4 {
        flex: 0 0 auto;
        width: 33.33333333%
    }

    .col-lg-5 {
        flex: 0 0 auto;
        width: 41.66666667%
    }

    .col-lg-6 {
        flex: 0 0 auto;
        width: 50%
    }

    .col-lg-7 {
        flex: 0 0 auto;
        width: 58.33333333%
    }

    .col-lg-8 {
        flex: 0 0 auto;
        width: 66.66666667%
    }

    .col-lg-9 {
        flex: 0 0 auto;
        width: 75%
    }

    .col-lg-10 {
        flex: 0 0 auto;
        width: 83.33333333%
    }

    .col-lg-11 {
        flex: 0 0 auto;
        width: 91.66666667%
    }

    .col-lg-12 {
        flex: 0 0 auto;
        width: 100%
    }

    .offset-lg-0 {
        margin-left: 0
    }

    .offset-lg-1 {
        margin-left: 8.33333333%
    }

    .offset-lg-2 {
        margin-left: 16.66666667%
    }

    .offset-lg-3 {
        margin-left: 25%
    }

    .offset-lg-4 {
        margin-left: 33.33333333%
    }

    .offset-lg-5 {
        margin-left: 41.66666667%
    }

    .offset-lg-6 {
        margin-left: 50%
    }

    .offset-lg-7 {
        margin-left: 58.33333333%
    }

    .offset-lg-8 {
        margin-left: 66.66666667%
    }

    .offset-lg-9 {
        margin-left: 75%
    }

    .offset-lg-10 {
        margin-left: 83.33333333%
    }

    .offset-lg-11 {
        margin-left: 91.66666667%
    }

    .g-lg-0,
    .gx-lg-0 {
        --bs-gutter-x: 0
    }

    .g-lg-0,
    .gy-lg-0 {
        --bs-gutter-y: 0
    }

    .g-lg-1,
    .gx-lg-1 {
        --bs-gutter-x: 0.25rem
    }

    .g-lg-1,
    .gy-lg-1 {
        --bs-gutter-y: 0.25rem
    }

    .g-lg-2,
    .gx-lg-2 {
        --bs-gutter-x: 0.5rem
    }

    .g-lg-2,
    .gy-lg-2 {
        --bs-gutter-y: 0.5rem
    }

    .g-lg-3,
    .gx-lg-3 {
        --bs-gutter-x: 1rem
    }

    .g-lg-3,
    .gy-lg-3 {
        --bs-gutter-y: 1rem
    }

    .g-lg-4,
    .gx-lg-4 {
        --bs-gutter-x: 1.5rem
    }

    .g-lg-4,
    .gy-lg-4 {
        --bs-gutter-y: 1.5rem
    }

    .g-lg-5,
    .gx-lg-5 {
        --bs-gutter-x: 3rem
    }

    .g-lg-5,
    .gy-lg-5 {
        --bs-gutter-y: 3rem
    }
}

@media(min-width:1200px) {
    .product {
        width: 25%;
    }

    .col-xl {
        flex: 1 0 0%
    }

    .row-cols-xl-auto>* {
        flex: 0 0 auto;
        width: auto
    }

    .row-cols-xl-1>* {
        flex: 0 0 auto;
        width: 100%
    }

    .row-cols-xl-2>* {
        flex: 0 0 auto;
        width: 50%
    }

    .row-cols-xl-3>* {
        flex: 0 0 auto;
        width: 33.3333333333%
    }

    .row-cols-xl-4>* {
        flex: 0 0 auto;
        width: 25%
    }

    .row-cols-xl-5>* {
        flex: 0 0 auto;
        width: 20%
    }

    .row-cols-xl-6>* {
        flex: 0 0 auto;
        width: 16.6666666667%
    }

    .col-xl-auto {
        flex: 0 0 auto;
        width: auto
    }

    .col-xl-1 {
        flex: 0 0 auto;
        width: 8.33333333%
    }

    .col-xl-2 {
        flex: 0 0 auto;
        width: 16.66666667%
    }

    .col-xl-3 {
        flex: 0 0 auto;
        width: 25%
    }

    .col-xl-4 {
        flex: 0 0 auto;
        width: 33.33333333%
    }

    .col-xl-5 {
        flex: 0 0 auto;
        width: 41.66666667%
    }

    .col-xl-6 {
        flex: 0 0 auto;
        width: 50%
    }

    .col-xl-7 {
        flex: 0 0 auto;
        width: 58.33333333%
    }

    .col-xl-8 {
        flex: 0 0 auto;
        width: 66.66666667%
    }

    .col-xl-9 {
        flex: 0 0 auto;
        width: 75%
    }

    .col-xl-10 {
        flex: 0 0 auto;
        width: 83.33333333%
    }

    .col-xl-11 {
        flex: 0 0 auto;
        width: 91.66666667%
    }

    .col-xl-12 {
        flex: 0 0 auto;
        width: 100%
    }

    .offset-xl-0 {
        margin-left: 0
    }

    .offset-xl-1 {
        margin-left: 8.33333333%
    }

    .offset-xl-2 {
        margin-left: 16.66666667%
    }

    .offset-xl-3 {
        margin-left: 25%
    }

    .offset-xl-4 {
        margin-left: 33.33333333%
    }

    .offset-xl-5 {
        margin-left: 41.66666667%
    }

    .offset-xl-6 {
        margin-left: 50%
    }

    .offset-xl-7 {
        margin-left: 58.33333333%
    }

    .offset-xl-8 {
        margin-left: 66.66666667%
    }

    .offset-xl-9 {
        margin-left: 75%
    }

    .offset-xl-10 {
        margin-left: 83.33333333%
    }

    .offset-xl-11 {
        margin-left: 91.66666667%
    }

    .g-xl-0,
    .gx-xl-0 {
        --bs-gutter-x: 0
    }

    .g-xl-0,
    .gy-xl-0 {
        --bs-gutter-y: 0
    }

    .g-xl-1,
    .gx-xl-1 {
        --bs-gutter-x: 0.25rem
    }

    .g-xl-1,
    .gy-xl-1 {
        --bs-gutter-y: 0.25rem
    }

    .g-xl-2,
    .gx-xl-2 {
        --bs-gutter-x: 0.5rem
    }

    .g-xl-2,
    .gy-xl-2 {
        --bs-gutter-y: 0.5rem
    }

    .g-xl-3,
    .gx-xl-3 {
        --bs-gutter-x: 1rem
    }

    .g-xl-3,
    .gy-xl-3 {
        --bs-gutter-y: 1rem
    }

    .g-xl-4,
    .gx-xl-4 {
        --bs-gutter-x: 1.5rem
    }

    .g-xl-4,
    .gy-xl-4 {
        --bs-gutter-y: 1.5rem
    }

    .g-xl-5,
    .gx-xl-5 {
        --bs-gutter-x: 3rem
    }

    .g-xl-5,
    .gy-xl-5 {
        --bs-gutter-y: 3rem
    }
}

@media(min-width:1400px) {
    .product {
        width: 20%;
    }
    
    .col-xxl {
        flex: 1 0 0%
    }

    .row-cols-xxl-auto>* {
        flex: 0 0 auto;
        width: auto
    }

    .row-cols-xxl-1>* {
        flex: 0 0 auto;
        width: 100%
    }

    .row-cols-xxl-2>* {
        flex: 0 0 auto;
        width: 50%
    }

    .row-cols-xxl-3>* {
        flex: 0 0 auto;
        width: 33.3333333333%
    }

    .row-cols-xxl-4>* {
        flex: 0 0 auto;
        width: 25%
    }

    .row-cols-xxl-5>* {
        flex: 0 0 auto;
        width: 20%
    }

    .row-cols-xxl-6>* {
        flex: 0 0 auto;
        width: 16.6666666667%
    }

    .col-xxl-auto {
        flex: 0 0 auto;
        width: auto
    }

    .col-xxl-1 {
        flex: 0 0 auto;
        width: 8.33333333%
    }

    .col-xxl-2 {
        flex: 0 0 auto;
        width: 16.66666667%
    }

    .col-xxl-3 {
        flex: 0 0 auto;
        width: 25%
    }

    .col-xxl-4 {
        flex: 0 0 auto;
        width: 33.33333333%
    }

    .col-xxl-5 {
        flex: 0 0 auto;
        width: 41.66666667%
    }

    .col-xxl-6 {
        flex: 0 0 auto;
        width: 50%
    }

    .col-xxl-7 {
        flex: 0 0 auto;
        width: 58.33333333%
    }

    .col-xxl-8 {
        flex: 0 0 auto;
        width: 66.66666667%
    }

    .col-xxl-9 {
        flex: 0 0 auto;
        width: 75%
    }

    .col-xxl-10 {
        flex: 0 0 auto;
        width: 83.33333333%
    }

    .col-xxl-11 {
        flex: 0 0 auto;
        width: 91.66666667%
    }

    .col-xxl-12 {
        flex: 0 0 auto;
        width: 100%
    }

    .offset-xxl-0 {
        margin-left: 0
    }

    .offset-xxl-1 {
        margin-left: 8.33333333%
    }

    .offset-xxl-2 {
        margin-left: 16.66666667%
    }

    .offset-xxl-3 {
        margin-left: 25%
    }

    .offset-xxl-4 {
        margin-left: 33.33333333%
    }

    .offset-xxl-5 {
        margin-left: 41.66666667%
    }

    .offset-xxl-6 {
        margin-left: 50%
    }

    .offset-xxl-7 {
        margin-left: 58.33333333%
    }

    .offset-xxl-8 {
        margin-left: 66.66666667%
    }

    .offset-xxl-9 {
        margin-left: 75%
    }

    .offset-xxl-10 {
        margin-left: 83.33333333%
    }

    .offset-xxl-11 {
        margin-left: 91.66666667%
    }

    .g-xxl-0,
    .gx-xxl-0 {
        --bs-gutter-x: 0
    }

    .g-xxl-0,
    .gy-xxl-0 {
        --bs-gutter-y: 0
    }

    .g-xxl-1,
    .gx-xxl-1 {
        --bs-gutter-x: 0.25rem
    }

    .g-xxl-1,
    .gy-xxl-1 {
        --bs-gutter-y: 0.25rem
    }

    .g-xxl-2,
    .gx-xxl-2 {
        --bs-gutter-x: 0.5rem
    }

    .g-xxl-2,
    .gy-xxl-2 {
        --bs-gutter-y: 0.5rem
    }

    .g-xxl-3,
    .gx-xxl-3 {
        --bs-gutter-x: 1rem
    }

    .g-xxl-3,
    .gy-xxl-3 {
        --bs-gutter-y: 1rem
    }

    .g-xxl-4,
    .gx-xxl-4 {
        --bs-gutter-x: 1.5rem
    }

    .g-xxl-4,
    .gy-xxl-4 {
        --bs-gutter-y: 1.5rem
    }

    .g-xxl-5,
    .gx-xxl-5 {
        --bs-gutter-x: 3rem
    }

    .g-xxl-5,
    .gy-xxl-5 {
        --bs-gutter-y: 3rem
    }
}

h5 {
    color: white;
}

hr {
    background : #6c757d;
}
</style>
@include('../navbar')
@section('content')



<div class="main-content">
  <section class="section">
  <h2 class="section-title text-white">Hall Of Fame</h2>

    <div class="section-body">
      <div class="row">
                <div class="col-12">
          <div class="card">
            <div class="card-body text-white">
       
       		<div class="row">
       		    <div class="col-lg-6">
								       <div class="card card-primary">
                  <div class="card-header">
                    <h4 style="color: black;"><i class="fas fa-trophy" style="color: black;">  </i> Top 10 Pesanan Bulan Ini</h4>
                  </div>
                  <div class="card-body text-white"> 
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
											<tr>
												<th>Peringkat</th>
												<th>Nama</th>
												<th>Total</th>
											</tr>
											@php
											    $i = 1;
											@endphp
                                            @foreach($top_user as $user)
                                            @if($user->username)
											<tr>
												<td align="center">{{ $i++ }}</td>
												<td>{{ $user->username }}</td>
												<td>Rp. {{ number_format($user->tamount, 0, ',', '.') }} dari {{ $user->tcount }} pesanan.</td>
											</tr>
											@endif
                                            @endforeach
										</tr>
										</table>
											</div>
									</div>
								</div>
							</div>
								
							<div class="col-lg-6">
								       <div class="card card-primary">
                  <div class="card-header">
                    <h4 style="color: black;"><i class="fas fa-trophy">  </i> Top 10 Layanan Bulan Ini</h4>
                  </div>
                  <div class="card-body text-white"> 
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
											<tr>
												<th>Peringkat</th>
												<th>Nama</th>
												<th>Total</th>
											</tr>
											@php
											    $i = 1;
											@endphp
                                            @foreach($top_service as $service)
											<tr>
												<td align="center">{{ $i++ }}</td>
												<td>{{ $service->nama }} ( {{ $service->layanan }} )</td>
												<td>{{ $service->jumlah_order }} Pesanan.</td>
											</tr>
                                            @endforeach
										</table>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						
						</div
       
       
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@include('../footer')
@endsection