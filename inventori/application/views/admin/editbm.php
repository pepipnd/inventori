<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit barang masuk</title>
</head>

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit Barang Masuk</h1>
                        <?php 
                        foreach($editbm as $ebm): 
                        $nama_barang = $ebm->id_barang;
                        $id = $ebm->id_masuk;
                        endforeach; 
                        ?>
	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('Admin/simpan_bm')?>" autocomplete="off">
                        <input type="hidden" name="id" value="<?= $id ?>">
						<div class="form-group col-lg-12">
							<label>Tanggal : </label>
							<input type="date" name="tanggal" class="form-control js-single" id="tanggal" <?= $ebm->tanggal ?>>
						</div>
						<div class="form-group col-lg-12">
							<label>Nama Barang : </label>
                            <select name="nama_barang" id="nama_barang" class="form-control js-single">
                            <?php foreach($barang as $br): ?>
                            <option value="<?= $br->id_barang?>" <?php  if($nama_barang == $br->id_barang) 
                            { echo "selected";}?>><?= $br->nama_barang?></option>
                            <?php endforeach ;?>
                            </select>		
                        </div>
                        <div class="form-group col-lg-12">
							<label>Jumlah Masuk : </label>
							<input type="number" name="jumlah_masuk" class="form-control js-single" id="jumlah_masuk" <?= $ebm->jumlah_masuk ?>>
						</div>

						<div class="form-group col-lg-6">
							<button type="submit" class="btn btn-info btn-flat">
								<i class="fa fa-pencil"></i> Simpan</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
				</div>
			</div>
		</div>

	</div>

</div>
	</div>
