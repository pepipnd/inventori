
<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- DataTales Example -->
	<?php echo $this->session->flashdata('message_edit') ?>
	<?php echo $this->session->flashdata('message_success') ?>
	<?php echo $this->session->flashdata('message') ?>
	<div class="card shadow mb-4">
		<div class="card-header py-3 m-0 font-weight-bold text-info">
			Stok Barang
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Id Barang</th>
							<th>Nama Barang</th>
							<th>Jenis Barang</th>
							<th>Stok</th>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; if (!empty($barang)) : ?>
						<?php foreach ($barang as $row) :
                        $stok = $row->stok
							?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row->id_barang ?></td>
							<td><?php echo $row->nama_barang ?></td>
							<td><?php echo $row->nama_kategori ?></td>
                            <td 
                                <?php 
                                    if(($stok <= 10) and ($stok > 0)){
                                        echo "class = 'bg-warning' ";
                                    }
                                    else if ($stok <= 0){
                                        echo "class = 'bg-danger' ";
                                    }
                                
                                ?>
                            ><?php echo $stok ?></td>
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
            <button class="btn btn-warning"></button> Stok Minimum <br>
            <button class="btn btn-danger"></button> Stok Kosong
		</div>
	</div>
</div>
</div>

