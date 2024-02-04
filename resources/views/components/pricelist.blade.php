@extends("main")

@section("content")
@include('../navbar')
<div class="wrapper pt-4">
    <div class="container mb-5">
        <div class="row mt-1">
            <div class="col-12">
                <div class="card bg-dark shadow akumauweb-rounded-sedang">
                    <div class="card-header akumauweb-rounded-sedang bg-akumauweb">
                        <h5 class="card-title text-white mt-2">Daftar Harga</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-dark table-bordered table-hover"  style="font-size: 14px !important; margin-top: 0px; text-align: center">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">&nbsp&nbsp&nbsp&nbsp PID</th>
                                        <th style="text-align: center">&nbsp&nbsp&nbsp&nbsp Produk</th>
                                        <th style="text-align: center">&nbsp&nbsp&nbsp&nbsp Item</th>
                                        <th style="text-align: center">&nbsp&nbsp&nbsp&nbsp Harga</th>
                                        <th style="text-align: center">&nbsp&nbsp&nbsp&nbsp Akun Gold</th>
                                        <th style="text-align: center">&nbsp&nbsp&nbsp&nbsp Akun Platinum</th>
                                        <th style="text-align: center">&nbsp&nbsp&nbsp&nbsp Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datas as $data)
                                        @php
                                            if($data->status == "available"){
                                                $label_pesanan = "success";
                                            }else{
                                                $label_pesanan = "danger";
                                            }
                                        @endphp
                                        <tr>
                                             <th scope="row">{{ $data->id }}</th>
                                            <td>{{ $data->nama_kategori }}</td>
                                            <td>{{ $data->layanan }}</td>
                                            <td>Rp. {{ number_format($data->harga,0,',','.') }}</td>
                                            <td>Rp. {{ number_format($data->harga_gold,0,',','.') }}</td>
                                            <td>Rp. {{ number_format($data->harga_platinum,0,',','.') }}</td>
                                            <td>
                                                <span class="badge bg-{{ $label_pesanan }}">{{ $data->status }}</span>
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
    </div>
</div>
@include('../footer')
<script>
    $(document).ready(function(){
        $('.table').DataTable();
    });
</script>
@endsection