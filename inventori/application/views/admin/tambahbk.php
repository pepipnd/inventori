<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Peminjaman barang</title>
</head>

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah Data Peminjaman Barang</h1>
 <?php
 foreach($bk as $bk):
 endforeach;
 ?>

	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('Admin/simpan_bk')?>" autocomplete="off">
						<div class="form-group col-lg-12">
							<label>Tanggal : </label>
							<!-- <?php 
                                $date = date("mm/dd/yyyy");
                            
                            ?> -->
							<input type="date" name="tanggal" class="form-control js-single" id="tanggal">
						</div>
						<div class="form-group col-lg-12">
							<label>Nama Barang : </label>
                            <select name="nama_barang" id="nama_barang" class="form-control js-single">
							<?php foreach($barang as $br): ?>
							<option value="<?= $br->id_barang ?>"><?= $br->nama_barang ?></option>
							<?php endforeach; ?>
							</select>		
                        </div>
                        <div class="form-group col-lg-12">
							<label>Jumlah : </label>
							<input type="number" name="jumlah_keluar" class="form-control js-single" id="jumlah_keluar">
						</div>

						<div class="form-group col-lg-6">
							<button type="submit" class="btn btn-info btn-flat" onclick="tambahbk()">
								<i class="fa fa-pencil"></i> Simpan</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
						<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
						/>
						<script>
							function tambahbk(){
							Swal.fire({
							icon: 'success',
							title: 'Data Berhasil Ditambahkan!',
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
	
