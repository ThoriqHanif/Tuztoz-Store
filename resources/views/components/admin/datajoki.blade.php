@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('pesanan') }}">Pesanan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Joki</li>
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
                    Daftar Pesanan Joki
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="tableJoki">
                        <thead>
                            <tr>
                                <th>OID</th>
                                <th>Nomor</th>
                                <th>Layanan</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Login Via</th>
                                <th>Nickname</th>
                                <th>Request</th>
                                <th>Catatan</th>
                                <th>Status Joki</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $datas)
                            @php
                            $label_pesanan = '';
                            if($datas->status_joki == "Sukses"){
                            $btn_pesanan = 'success';
                            }else{
                            $btn_pesanan = 'danger';
                            }
                            @endphp
                            
                           
                           <tr>
                               <th scope="row">#{{ $datas->order_id }}</th>
                               <td>{{ $datas->nomor }}</td>
                               <td>{{ $datas->layanan }}</td>
                               <td>{{ $datas->email }}</td>
                               <td>{{ $datas->password }}</td>
                               <td>{{ $datas->loginvia }}</td>
                               <td>{{ $datas->nickname }}</td>
                               <td>{{ $datas->request }}</td>
                               <td>{{ $datas->catatan }}</td>
                               <td>
                                   <div class="btn-group-vertical">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-{{$btn_pesanan}} dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> {{ $datas->status_joki }} <i class="mdi mdi-chevron-down"></i> </button>
                                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <li><a class="dropdown-item" href="/joki-status/{{ $datas->order_id }}/Sukses">Sukses</a></li>
                                            <li><a class="dropdown-item" href="/joki-status/{{ $datas->order_id }}/Proses">Proses</a></li>
                                    </div>
                               </td>
                               <td>
                                    <a class="btn btn-danger" href="/joki/hapus/{{ $datas->id }}">Hapus</a>
                               </td>
                           </tr>
                          
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>  
    <script>
        $(document).ready(function(){
            $('#tableJoki').DataTable({
            });
        });
    </script>
@endsection
