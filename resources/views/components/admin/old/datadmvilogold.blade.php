@extends('main-admin')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Data DM Vilog</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Admin/Data DM Vilog</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title mt-0">Daftar Pesanan DM Vilog</h4>
                <div class="table-responsive">
                    <table class="table m-o">
                        <thead>
                            <tr>
                                <th>OID</th>
                                <th>Layanan</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Login Via</th>
                                <th>Status DM Vilog</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($data as $datas)
                            @php
                            $label_pesanan = '';
                            if($datas->status == "Sukses"){
                            $label_pesanan = 'success';
                            }else{
                            $label_pesanan = 'danger';
                            }
                            @endphp
                            
                           
                           <tr>
                               <th scope="row">#{{ $datas->order_id }}</th>
                               <td>{{ $datas->layanan }}</td>
                               <td>{{ $datas->email_vilog }}</td>
                               <td>{{ $datas->password_vilog }}</td>
                               <td>{{ $datas->loginvia_vilog }}</td>
                               <td>
                                   <div class="btn-group-vertical">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-{{$label_pesanan}} dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> {{ $datas->status }} <i class="mdi mdi-chevron-down"></i> </button>
                                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <li><a class="dropdown-item" href="/dmvilog-status/{{ $datas->order_id }}/Sukses">Sukses</a></li>
                                            <li><a class="dropdown-item" href="/dmvilog-status/{{ $datas->order_id }}/Proses">Proses</a></li>
                                    </div>
                               </td>
                               <td>
                                    <a class="btn btn-danger" href="/dmvilog/hapus/{{ $datas->id }}">Hapus</a>
                               </td>
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
    $(document).ready(function(){
        $('.table').DataTable({
        });
    });
</script>
@endsection