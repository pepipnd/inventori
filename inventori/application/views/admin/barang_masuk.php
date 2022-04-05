 <!-- Begin Page Content -->
 <div class="container-fluid">
 	<!-- DataTales Example -->
 	<?php echo $this->session->flashdata('message_edit') ?>
 	<?php echo $this->session->flashdata('message_success') ?>
 	<?php echo $this->session->flashdata('message') ?>

 	<h1 class="h3 mb-4 text-gray-800">Data Pengembalian Barang</h1>
 	<div class="card shadow mb-4">
 		<div class="card-header py-3">
 			<?php  if($this->session->userdata('level') =='admin') : ?>
 			<a href="<?php echo base_url('Admin/tambahbm')?>">
 				<button class="btn btn-sm btn-info" type=""><i class="fas fa-plus fa-sm"></i>Tambah Data</button></a>
 			<?php
              endif;
              ?>
 		</div>
 		<div class="card-body">
 			<div class="table-responsive">
 				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
 					<thead>
 						<tr>
 							<th>No</th>
 							<th>Tanggal</th>
 							<th>Nama Barang</th>
 							<th>Jumlah</th>
 						</tr>
 					</thead>

 					<tbody>
 						<?php $no = 1; if (!empty($br_masuk)) : ?>
 						<?php foreach ($br_masuk as $bm) : ?>
							<!-- <?php echo format_indo(date('Y-m-d'));?> -->
 						<tr>
 							<td><?php echo $no++; ?></td>
 							<td><?= date('d F Y', strtotime($bm->tanggal)); ?></td>
 							<td><?php echo $bm->nama_barang ?></td>
 							<td><?php echo $bm->jumlah_masuk ?></td>
 							
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

 </div>
 </div>
 <!-- /.container-fluid -->
 
