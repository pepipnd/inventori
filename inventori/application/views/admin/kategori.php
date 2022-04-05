

    <div class="container-fluid">

  	<!-- Page Heading -->
  	<!-- DataTales Example -->
  	<div class="card shadow mb-4">
  		<div class="card-header py-3">
  			<h6 class="m-0 font-weight-bold text-info">Data Kategori
                          <a href="<?= base_url('Admin/tambah_kategori');?>">
                                <button class="btn sm-btn btn-info"><i class="fa fa-plus"></i> Tambah Data</button>
                          </a>
                        </h6>
  		</div>
  		<div class="card-body">
  			<div class="table-responsive">
  				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  					<thead>
  						<th>No</th>
  						<th>Id Kategori</th>
  						<th>Nama_kategori</th>
  						<th>Aksi</th>
  					</thead>             
  					<tbody>
  						<?php $no = 1; if (!empty($kategori)) : ?>
						<?php foreach ($kategori as $ktr) :
							
						?>
						<tr>
						<td><?= $no++; ?></td>
						<td><?= "KTR00".$ktr->id_kategori; ?></td>						  
  						<td><?= $ktr->nama_kategori; ?></td>						  
                         <td>
                            <a href="<?=base_url('Admin/editktr/'.$ktr->id_kategori)?>" class="btn btn-warning btn-circle"> <i class="fa fa-edit"></i></a>
							<a href="#modalDelete" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action','<?=base_url('Admin/hapusktr/'.$ktr->id_kategori) ?>')" 
                            class="btn btn-danger btn-circle" ><i class="fa fa-trash"></i></a> 
                        </td>
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

   <div class="modal fade" id="modalDelete">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">Hapus Data</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
                <div class="modal-body">
                  <div class="alert alert-danger"><p>Apakah anda yakin akan menghapus data ini?</p></div>   
                </div>
              <div class="modal-footer">
              <form id="formDelete" action="" method="post">
                  <button type="submit" class="btn btn-danger" onclick="hapusktr()">Hapus</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
              </form>
            </div>
          </div>
      </div>
  </div>


  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
						/>
						<script>
							function hapusktr(){
							Swal.fire({
							icon: 'success',
							title: 'Data Berhasil Dihapus!',
							 showClass: {
								popup: 'animate__animated animate__fadeInDown'
							},
							hideClass: {
								popup: 'animate__animated animate__fadeInDown'
							}
							})
							}
						</script>



  						