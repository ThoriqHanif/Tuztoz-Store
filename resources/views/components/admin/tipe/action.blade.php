        <a class="btn btn-sm bg-primary text-white font-weight-bold text-xs edit-tipe" data-placement="top"
            title="Edit Tipe" data-tipes-id="{{ $tipes->id }}">
            Edit 
        </a>

        <form style="display: inline" action="{{ route('tipes.destroy', $tipes->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger delete-button" data-toggle="tooltip" data-placement="top"
                title="Hapus Tipe">
                Hapus 
            </button>
        </form>


        <script>
            $(document).ready(function() {
                // Memberikan event handler untuk tombol hapus
                $('.delete-button').on('click', function(e) {
                    e.preventDefault();
                    var deleteButton = $(this);
                    Swal.fire({
                        title: 'Konfirmasi Hapus',
                        text: 'Anda yakin ingin menghapus tipe ini?',
                        icon: 'error',
                        showCancelButton: true,
                        confirmButtonText: 'Ya, Hapus',
                        cancelButtonText: 'Batal',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                                title: 'Mohon Tunggu!',
                                html: 'Sedang menghapus tipe...',
                                allowOutsideClick: false,
                                showConfirmButton: false,
                                willOpen: () => {
                                    Swal.showLoading();
                                },
                            });
        
                            // Jika pengguna mengkonfirmasi penghapusan, kirimkan permintaan penghapusan
                            $.ajax({
                                type: 'POST',
                                url: deleteButton.closest('form').attr('action'),
                                data: deleteButton.closest('form').serialize(),
                                success: function(response) {
                                    // Tutup pesan "loading"
                                    Swal.close();
        
                                    // Handle pesan hasil penghapusan
                                    if (response.success) {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Berhasil!',
                                            text: 'Data tipe berhasil dihapus.',
                                        }).then(function() {
                                            $('#tableTipes').DataTable().ajax
                                                .reload();
        
                                        });
                                        // Tambahkan kode lain yang sesuai, seperti memperbarui tampilan tabel.
                                    } else {
                                        Swal.fire('Gagal', 'Gagal menghapus tipe',
                                            'error');
                                    }
                                },
                                error: function() {
                                    // Tutup pesan "loading"
                                    Swal.close();
        
                                    Swal.fire('Gagal',
                                        'Terjadi kesalahan saat menghapus tipe',
                                        'error');
                                }
                            });
                        }
                    });
                });
            });
        </script>