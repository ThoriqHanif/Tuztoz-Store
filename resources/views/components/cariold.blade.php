@extends('main')



@section('css')
<style>
    .form-check-input:focus {
        border-color: #fe6c17;
        box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
        outline: 0;
    }

    .form-check-input:checked {
        background-color: #fe6c17;
        border-color: #fe6c17;
    }

    .btn-primary {
        background-color: #3571e2;
        border-color: #3571e2;
        cursor: pointer;
        color: #fff;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #3571e2;
        border-color: #3571e2;
    }
    
    .table th, .table td {
        text-align: center;
    }

    .btn-primary:focus,
    .btn-primary.focus {
        color: #fff;
        background-color: #3571e2;
        border-color: #3571e2;
        box-shadow: 0 0 0 0.2rem rgba(255, 168, 38, 0.5);
    }

    #searchProds {
        width: 60px;
        transition: width .5s ease
    }

    #searchProds:focus {
        width: 240px
    }
</style>
@endsection

@section('content')
@include('../navbar')

@if(session('error'))
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
toastr.error('{{ session('error') }}');
</script>
@elseif(session('success'))
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
toastr.success('{{ session('success') }}');
</script>
@endif

<!-- resources/views/components/cari.blade.php -->

<div class="container pt-5">
    <h2 class="text-base font-semibold text-uppercase mb-4" style="color: var(warna_5);">LACAK PESANAN DENGAN NOMOR INVOICE</h2>
    <form action="{{ url('/cari') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="id" id="id" class="form-control" placeholder="Contoh: RSASD12ASJDHA" required="">
<button class="btn btn-primary" type="submit" style="background-color: black; border-color: black; color: white;">
    <svg stroke="currentColor" fill="white" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
        <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path>
        <path d="M11.412 8.586c.379.38.588.882.588 1.414h2a3.977 3.977 0 0 0-1.174-2.828c-1.514-1.512-4.139-1.512-5.652 0l1.412 1.416c.76-.758 2.07-.756 2.826-.002z"></path>
    </svg>
</button>

        </div>
    </form>


<style>
    .table-white-text th,
    .table-white-text td {
        color: white !important;
    }
</style>

<div class="container pt-5">
    <table class="table table-bordered table-striped table-white-text">
        <thead>
            <tr>
                <th scope="col">Invoice</th>
                <th scope="col">Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembelians as $pembelian)
                @php
                    $label_pesanan = '';
                    if($pembelian->status == "Batal"){
                        $label_pesanan = 'warning';
                    } else if($pembelian->status == "Pending"){
                        $label_pesanan = 'info';
                    } else if($pembelian->status == "Success"){
                        $label_pesanan = 'success';
                    } else {
                        $label_pesanan = 'danger';
                    }
                @endphp
                <tr>
                    <td>{{ substr($pembelian->order_id, 0, 12) }}****</td>
                    <td>{{ $pembelian->layanan }}</td>
                    <td>{{ $pembelian->harga }}</td>
                    <td>{{ $pembelian->created_at }}</td>
                    <td><span class="btn btn-{{ $label_pesanan }}">{{ $pembelian->status }}</span></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>




@include('../footer')
@endsection