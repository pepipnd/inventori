
 <!-- Begin Page Content -->
 <div class="container-fluid">
 	<!-- DataTales Example -->
 	<?php echo $this->session->flashdata('message_edit') ?>
 	<?php echo $this->session->flashdata('message_success') ?>
 	<?php echo $this->session->flashdata('message') ?>

 	<h1 class="h3 mb-4 text-gray-800">Data Peminjaman Barang</h1>
 	<div class="card shadow mb-4">
 		<div class="card-header py-3">
 			<?php  if($this->session->userdata('level') =='admin') : ?>
 			<a href="<?php echo base_url('Admin/tambahbk')?>">
 				<button class="btn btn-sm btn-info" type=""><i class="fas fa-plus fa-sm"></i> Tambah Data</button></a>
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
 						<?php $no = 1; if (!empty($br_keluar)) : ?>
                         <?php foreach ($br_keluar as $bk) : 
                            $stt = $bk->status;
							$jk = $bk->jumlah_keluar;    
                        ?>
 						<tr>
 							<td><?php echo $no++; ?></td>
 							<td><?= date('d F Y', strtotime($bk->tanggal)); ?></td>
 							<td><?php echo $bk->nama_barang ?></td>
 							<td><?php echo $bk->jumlah_keluar ?></td>
                             <?php if ($stt <= 0) : ?>
							 <!-- <input type="hidden" name="jk" value="<?= $jk ?>">
                             <a href="<?= base_url('admin/setuju/'. $bk->id_keluar) ?>" class="btn btn-success btn-circle" title="Accept">
 									<i class="fas fa-check" ></i>
 								</a>
                                 <a href="<?= base_url('admin/tolak/'. $bk->id_keluar) ?>" class="btn btn-warning btn-circle" title="Reject">
 									<i class="fas fa-times"></i>
 								</a> -->
 								<!-- <a href="<?=base_url('Admin/hapusbk/'.$bk->id_keluar)?>" class="btn btn-danger btn-circle" title="Delete">
 									<i class="fas fa-trash"></i>
 								</a> -->
                             <?php 
                             else:
                                ?>
                                
 								<a href="<?php echo base_url('Admin/tambahbk')?>" class="btn btn-primary btn-circle" title="Add">
 									<i class="fas fa-plus"></i>
 								</a>
                                <?php
                             endif ?>
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
 <!-- /.container-fluid -->
 </div>
