<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		<p>
			Selamat Datang  di Sistem Aplikasi Inventori
			<strong><i>SMK NAHDLATUL ULAMA KOTA TASIKMALAYA</i></strong>.
		</p>
	</div>

	<!-- Content Row -->
	<div class="row">

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
								Data Barang</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalbarang ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-folder fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
								Pengembalian Barang</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $masuk ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dolly-flatbed fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
								Peminjaman Barang</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $keluar ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dolly-flatbed fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Pending Requests Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-danger shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
								User</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $user ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-user fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Content Row -->

</div>


<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- DataTales Example -->
	<?php echo $this->session->flashdata('message_edit') ?>
	<?php echo $this->session->flashdata('message_success') ?>
	<?php echo $this->session->flashdata('message') ?>
	<div class="card shadow mb-4">
		<div class="card-header py-3 text-info font-weight-bold">
			Data Barang
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Id Barang</th>
							<th>Nama Barang</th>
							<th>Kategori Barang</th>
                            <th>Gambar</th>
							<th>Stok</th>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; if (!empty($barang)) : ?>
						<?php foreach ($barang as $br) :
							
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo "BR000".$br->id_barang ?></td>
							<td><?php echo $br->nama_barang ?></td>
							<td><?php echo $br->nama_kategori ?></td>
  						<td class="text-center"><img src="<?= base_url('barang/'). $br->gambar; ?>" alt="" width="50px" height="50px"></td>
							<td><?php echo $br->stok ?></td>
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
		</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</div>





