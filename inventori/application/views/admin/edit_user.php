<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit User</title>
</head>

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit User</h1>
                        <?php 
                            foreach($editu as $eu): 
                            $id = $eu->id;
                            endforeach; 
                        ?>
	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('Admin/simpan_edit_user')?>" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $id ?>">
						<div class="form-group col-lg-12">
							<label>Nama Lengkap : </label>
							<input type="text" name="nama_lengkap" class="form-control js-single" id="nama_lengkap" value="<?= $eu->nama_lengkap ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>No Hp : </label>
							<input type="text" name="no_hp" class="form-control js-single" id="no_hp" value="<?= $eu->no_hp ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Alamat Lengkap : </label>
                            <input type="text" class="form-control" name="alamat_lengkap" id="alamat_lengkap" value="<?= $eu->alamat_lengkap ?>"> 
						</div>
						<div class="form-group col-lg-12">
							<label>Email: </label>
							<input type="text" name="email" class="form-control js-single" id="email" value="<?= $eu->email ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Password : </label>
							<input type="text" name="password" class="form-control js-single" id="password" value="<?= $eu->password ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Foto : </label>
                            <input type="file" name="foto" id="foto" class="form-control js-single">
						</div>

						<div class="form-group col-lg-6">
							<button type="submit" class="btn btn-info btn-flat" onclick="edituser()">
								<i class="fa fa-pencil"></i> Simpan</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
						<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
						/>
						<script>
							function edituser(){
							Swal.fire({
							icon: 'success',
							title: 'Data Berhasil Diedit!',
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
    <br><br>


	