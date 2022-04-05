        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data User</h1>
          <p class="mb-4">Berisi data User sebagai Hak Akses dalam penggunaan aplikasi ini.  </p>

          <!-- DataTales Example -->
          <?php echo $this->session->flashdata('message_edit') ?>
          <?php echo $this->session->flashdata('message_success') ?>
          <?php echo $this->session->flashdata('message') ?>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <a href="<?php echo base_url('Admin/tambah_user')?>">
 				<button class="btn btn-sm btn-info" type=""><i class="fas fa-plus fa-sm"></i>Tambah User</button>
            </a>            
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>No Hp</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; if (!empty($user)) : ?>
                    <?php foreach ($user as $us) : ?>
                      <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$us->nama_lengkap ?></td>
                        <td><?=$us->no_hp ?></td>
                        <td><?=$us->alamat_lengkap ?></td>
                        <td><?=$us->email ?></td>
                        <td><?=$us->password ?></td>
  						         <td class="text-center"><img src="<?= base_url('foto/'). $us->foto; ?>" alt="" width="50px" height="50px"></td>
                        <td>
                          <a href="<?=base_url('Admin/edit_user/'.$us->id)?>" class="btn btn-warning btn-circle">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="<?=base_url('Admin/detail_user/'.$us->id)?>" class="btn btn-info btn-circle">
                            <i class="fas fa-info-circle"></i>
                          </a>
                          <!-- <a href="<?=base_url('Admin/hapus_user/'.$us->id)?>" class="btn btn-danger btn-circle item_hapus" data-toggle="modal" 
                          data-target="#hapusModal" id="btn_hapus"> -->
                          <a href="#modalDelete" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action','<?=base_url('Admin/hapus_user/'.$us->id) ?>')" 
                            class="btn btn-danger btn-circle" ><i class="fa fa-trash"></i></a>
                            <!-- <i class="fas fa-trash"></i> -->
                          </a>
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
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
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
                  <button type="submit" class="btn btn-danger" onclick="hapususer()">Hapus</button>
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
							function hapususer(){
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




