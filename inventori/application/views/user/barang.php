  <div class="container-fluid">

  	<!-- Page Heading -->
  	<!-- DataTales Example -->
  	<div class="card shadow mb-4">
  		<div class="card-header py-3">
  			<h6 class="m-0 font-weight-bold text-info">Data Barang
                        </h6>
  		</div>
  		<div class="card-body">
  			<div class="table-responsive">
  				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  					<thead>
  						<th>No</th>
  						<th>Id Barang</th>
  						<th>Gambar</th>
  						<th>Nama Barang</th>
  						<th>Kategori Barang</th>
  						<th>Stok</th>
  					</thead>
                                        <?php 
                                        $no = 1;
                                        foreach($data_barang as $db):
										?>               
  					<tbody>
  						<td><?= $no; ?></td>
						<td><?php echo "BR000".$db->id_barang ?></td>
  						<td class="text-center"><img src="<?= base_url('barang/'). $db->gambar; ?>" alt="" width="50px" height="50px"></td>
  						<td><?= $db->nama_barang; ?></td>
  						<td><?= $db->nama_kategori; ?></td>
  						<td><?= $db->stok; ?></td>
  					</tbody>
                                        <?php 
                                        $no++;
                                        endforeach; ?>
  				</table>
  			</div>
  		</div>

  </div>
  </div>
  
