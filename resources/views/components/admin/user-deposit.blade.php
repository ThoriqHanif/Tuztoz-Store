@extends('layouts.app')

@section('content')
    <!-- start page title -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ url('user-deposit') }}">Member</a></li>
            <li class="breadcrumb-item active" aria-current="page">Member Deposit</li>
        </ol>
    </nav>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Riwayat deposit
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="tableUserDeposit">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Jumlah</th>
                                <th>Metode</th>
                                <th>No Pembayaran</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data_pesanan)
                                @php
                                    $label_pesanan = '';
                                    if ($data_pesanan->status == 'Pending') {
                                        $btn_pesanan = 'warning';
                                    } elseif ($data_pesanan->status == 'Success') {
                                        $btn_pesanan = 'success';
                                    } else {
                                        $btn_pesanan = 'danger';
                                    }
                                @endphp
                                <tr class="table-{{ $label_pesanan }}">
                                    <th class="table-fit">{{ $data_pesanan->id }}</th>
                                    <td class="table-fit">{{ $data_pesanan->username }}</td>
                                    <td class="table-fit">Rp. {{ number_format($data_pesanan->jumlah, 0, '.', ',') }}</td>
                                    <th class="table-fit">{{ $data_pesanan->metode }}</th>
                                    <td class="table-fit">{!! $data_pesanan->metode != 'QRIS'
                                        ? $data_pesanan->no_pembayaran
                                        : '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Lihat QR</button>' !!}</td>
                                    <td class="table-fit">{{ $data_pesanan->status }}</td>
                                    <td class="table-fit">{{ $data_pesanan->created_at }}</td>
                                    <td class="table-fit"><a
                                            href="{{ route('confirm.deposit', [$data_pesanan->id, 'Success']) }}"
                                            class="btn btn-primary">Konfirmasi</a></tdc>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#tableUserDeposit').DataTable({});
            });
        </script>
    @endsection
