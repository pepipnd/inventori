<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Password</h1>
    </div>
    <div class="card shadow mb-12" style="width: 40%">
    <div class="card-body">
        <form action="<?= base_url('Admin/gantipassword_aksi') ?>" method="post">
        <div class="form-group">
            <label>Password Baru</label>
            <input type="password" name="passbaru" id="" class="form-control">
        </div>
        <div class="form-group">
            <label>Konfirmasi Password</label>
            <input type="password" name="konpass" id="" class="form-control">
        </div>
        <button type="submit" class="btn btn-info" onclick="ubahpass()">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
						/>
						<script>
							function ubahpass(){
							Swal.fire({
							icon: 'success',
							title: 'Password Berhasil Diubah!',
							text: 'Silahkan Login Kembali.',
							 showClass: {
								popup: 'animate__animated animate__fadeInDown'
							},
							hideClass: {
								popup: 'animate__animated animate__fadeInDown'
							}
							})
							}
						</script>
</div>
</div>
</div>