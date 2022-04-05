<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit barang keluar</title>
</head>

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit Barang Keluar</h1>
                        <?php 
                        foreach($editbk as $ebk): 
                        $tanggal = $ebk->tanggal;
                        $jumlah_keluar = $ebk->jumlah_keluar;
                        $nama_barang = $ebk->id_barang;
                        $id = $ebk->id;
                        endforeach; 
                        ?>
	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('Admin/simpan_edit_bk')?>" autocomplete="off">
                        <input type="hidden" name="id" value="<?= $id ?>">
						<div class="form-group col-lg-12">
							<label>Tanggal : </label>
							<input type="date" name="tanggal" class="form-control js-single" id="tanggal" <?= $tanggal ?>>
						</div>
						<div class="form-group col-lg-12">
							<label>Nama Barang : </label>
                            <select name="nama_barang" id="nama_barang" class="form-control js-single">
                            <?php foreach($barang as $br): ?>
                            <option value="<?= $br->id?>" <?php  if($nama_barang == $br->id) 
                            { echo "selected";}?>><?= $br->nama_barang?></option>
                            <?php endforeach ;?>
                            </select>		
                        </div>
                        <div class="form-group col-lg-12">
							<label>Jumlah Keluar : </label>
							<input type="number" name="jumlah_masuk" class="form-control js-single" id="jumlah_masuk" <?= $jumlah_keluar ?>>
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
	</div>

</body>

</html>