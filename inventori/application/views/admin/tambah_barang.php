<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Barang</title>
</head>

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah Barang</h1>

	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('Admin/simpan_barang')?>" enctype="multipart/form-data">
						<div class="form-group col-lg-12">
							<label>Nama Barang : </label>
							<input type="text" name="nama_barang" class="form-control js-single" id="nama_barang">
						</div>
						<div class="form-group col-lg-12">
							<label>Kategori Barang : </label>
							<select name="nama_kategori" id="nama_kategori" class="form-control js-single">
							<?php foreach($kategori as $ktr): ?>
							<option value="<?= $ktr->id_kategori ?>"><?= $ktr->nama_kategori ?></option>
							<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group col-lg-12">
							<label>Stok :</label>
							<input type="number" name="stok" id="stok" class="form-control js-single">
						</div>
						<div class="form-group col-lg-12">
							<label>Gambar :</label>
							<input type="file" name="gambar" id="gambar" class="form-control js-single" accept="image/jpeg, image/jpg, image/png">
						</div>

						<div class="form-group col-lg-6">
							<button type="submit" class="btn btn-info btn-flat" onclick="tambahbarang()">
								<i class="fa fa-pencil"></i> Simpan</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>

						<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
						/>
						<script>
							function tambahbarang(){
							Swal.fire({
							icon: 'success',
							title: 'Barang Berhasil Ditambahkan!',
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

	</div>

</div>
	</div>
