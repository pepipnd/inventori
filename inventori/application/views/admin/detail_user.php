
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
        </div>
        <div class="box-body">
          <?php 
                            foreach($detailu as $ed): 
                            endforeach; 
                        ?>
        <div class="card mb-8" style="max-width: 700px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="<?= base_url('foto/'). $ed->foto; ?>" class="card-img" width="200" height="220">

            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"> Profile <?= $ed->nama_lengkap ?></h5>
                <p class="card-text">Nama Lengkap : <?= $ed->nama_lengkap ?></p>
                <p class="card-text">No Hp : <?= $ed->no_hp ?></p>
                <p class="card-text">Alamat Lengkap : <?= $ed->alamat_lengkap ?></p>
                <p class="card-text">Email : <?= $ed->email ?></p>
              </div>
            </div>
          </div>
        </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <small>Catatan: <font color="red"><i>Jangan memberikan hak akses kepada orang lain!</i></font></small>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

      </section>
        <!-- right col -->

    </section>
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->
