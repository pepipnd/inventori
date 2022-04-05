	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800">Laporan Peminjaman Barang </h1>

		<div class="row">

			<div class="col-lg-5">

				<!-- Circle Buttons -->
				<div class="card shadow mb-12">
					<div class="card-body">
						<form method="post" action="<?=base_url('User/cari_lapbk')?>" autocomplete="off">
							<label for="dari">Dari</label>
							<input type="date" name="dari" id="dari">
							<label for="sampai">Sampai</label>
							<input type="date" name="sampai" id="sampai">
							<input type="submit" value="Cari" class="btn btn-info">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
  <!-- laporan -->
  <br><br>
  
	<div class="container-fluid">
  <div class="card shadow mb-12">
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Nama Barang</th>
						<th>Jumlah </th>
					</tr>
				</thead>

				<tbody>
					<?php $no = 1; if (!empty($caribarang)) : ?>
					<?php foreach ($caribarang as $row) : 
								// $stok = $row->stokbarang;
								// $keluar = $row->keluar;
								// $jumlah = $stok-$keluar;
							?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $row->tanggal ?></td>
						<td><?php echo $row->nama_barang ?></td>
						<td><?php echo $row->jumlah_keluar ?></td>
					</tr>
					<?php endforeach ?>
					<?php else: ?>
					<tr>
						<td colspan="9" align="center">Tidak Ada Data</td>
					</tr>
					<?php endif ?>
				</tbody>
        
			</table>
		</div>
    <br>
	</div>
  </div>
  </div>


  <!-- end laporan -->
