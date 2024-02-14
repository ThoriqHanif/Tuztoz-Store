@extends('layouts.app')

@section('content')
    <!-- start page title -->
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Produk</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tipe</li>
        </ol>
    </nav>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <section class="section mt-5">
        <div class="card">
            <div class="card-header mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                <h5 class="card-title" style="margin: 0;">Daftar Tipe</h5>
                <button type="button" class="btn btn-sm btn-primary tombol-create" data-placement="top" id="btn-create"
                    data-tooltip-toggle="tooltip" title="Tambah Data Tipe" data-bs-toggle="modal"
                    data-bs-target="#modalCreateTipe">
                    + Tambah Tipe
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="tableTipes">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        @include('components.admin.tipe.create')
        @include('components.admin.tipe.edit')
    </section>
    {{-- DATATATABLES --}}
    <script>
        $(document).ready(function() {
            // $('#tableTipes').DataTable({
            //     ajax: {
            //         url: "{{ route('tipes.index') }}"
            //     },
            //     columns: [{
            //             data: 'DT_RowIndex',
            //             name: 'DT_RowIndex',
            //             orderable: false,
            //             searchable: false,
            //             class: 'table-fit'

            //         },
            //         {
            //             data: 'name',
            //             name: 'name'
            //         },
            //         {
            //             data: 'action',
            //             name: 'action',
            //             class: 'table-fit'
            //         },
            //     ]
            // });

                var tableTipes = $('#tableTipes').DataTable({
                    processing: true,
                    serverSide: true,
                    // responsive: true,
                    ajax: {
                        url: "{{ route('tipes.index') }}"
                    },
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false,
                            class: 'table-fit',
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            class: 'table-fit'
                        },
                    ]
                });

        });
    </script>

    {{-- CREATE --}}
    <script>
        $(document).ready(function() {
            $("#formTipes").on("submit", function(e) {
                e.preventDefault();
                $('#modalCreateTipe').modal('hide');


                Swal.fire({
                    title: 'Mohon Tunggu!',
                    html: 'Sedang memproses data...',
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    willOpen: () => {
                        Swal.showLoading();
                    },
                });

                $.ajax({
                    type: 'POST',
                    url: '{{ route('tipes.store') }}',
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log(response);
                        Swal.close();

                        if (response.success) {
                            $('#formTipes')[0].reset();

                            // Redirect ke halaman index dengan pesan "success"
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil!',
                                text: 'Data berhasil disimpan.',
                            }).then(function() {

                                $('#tableTipes').DataTable().ajax.reload();
                            });
                        } else {
                            // Jika validasi gagal, tampilkan pesan-pesan kesalahan
                            if (response.errors) {
                                var errorMessages = '';
                                console.log(errorMessages);
                                for (var key in response.errors) {
                                    if (response.errors.hasOwnProperty(key)) {
                                        errorMessages += response.errors[key][0] + '<br>';
                                    }
                                }
                                Swal.fire('Gagal', errorMessages, 'error');
                            } else {
                                Swal.fire('Gagal', 'Terjadi kesalahan saat menyimpan data',
                                    'error');
                            }
                        }
                    },
                    error: function(xhr) {
                        Swal.close();
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            var errorMessages = '';
                            var errors = xhr.responseJSON.errors;
                            for (var key in errors) {
                                if (errors.hasOwnProperty(key)) {
                                    errorMessages += errors[key][0] + '<br>';
                                }
                            }
                            Swal.fire('Gagal', errorMessages, 'error');
                        } else {
                            Swal.fire('Gagal', 'Terjadi kesalahan saat simpan data.', 'error');
                        }
                    },


                });
            });
        });
    </script>

    {{-- EDIT --}}
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            $('#tableTipes').on('click', 'a.edit-tipe', function() {
                var id = $(this).data('tipes-id');
                console.log(id);

                $.ajax({
                    url: '{{ route('tipes.edit', ':id') }}'.replace(':id', id),
                    type: 'GET',
                    success: function(response) {
                        $('#modalEditTipe').modal('show');
                        $('#tipe_id').val(response.result.id);
                        $('#name_edit').val(response.result.name);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });

        $(document).on('click', '.btn-update', function(e) {
            e.preventDefault(); // Menghentikan tindakan default tombol

            let tipeId = $('#tipe_id').val();
            var var_url = '{{ route('tipes.update', ':tipeId') }}'.replace(':tipeId', tipeId);
            var var_type = 'PUT';

            Swal.fire({
                title: 'Mohon Tunggu!',
                html: 'Sedang memproses data...',
                allowOutsideClick: false,
                showConfirmButton: false,
                willOpen: () => {
                    Swal.showLoading();
                },
            });

            $.ajax({
                url: var_url,
                type: var_type,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Menambahkan token CSRF
                },
                data: {
                    name: $('#name_edit').val(),

                },


                success: function(response) {
                    if (response.errors) {
                        console.log(response);
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal!',
                        });


                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: 'Data berhasil diupdate.',
                        });

                        $('#tableTipes').DataTable().ajax.reload(null, false);

                        $('#modalEditTipe').modal('hide');

                    }
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        // Menampilkan pesan validasi error SweetAlert
                        var errorMessages = '';
                        var errors = xhr.responseJSON.errors;
                        for (var key in errors) {
                            if (errors.hasOwnProperty(key)) {
                                errorMessages += errors[key][0] + '<br>';
                            }
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal!',
                            html: errorMessages,
                        });

                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal!',
                            text: 'Terjadi kesalahan saat update data.',
                        });
                    }
                },
            });
            // }
        });
    </script>
@endsection
