	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800">Laporan Peminjaman Barang </h1>

		<div class="row">

			<div class="col-lg-12">

				<!-- Circle Buttons -->
				<div class="card shadow mb-12">
					<div class="card-body">
						<h5>Laporan Peminjaman Barang Berdasarkan Tanggal</h5>
						<hr>
						<form method="POST" action="<?=base_url('Admin/print_bk')?>" target='_blank'>
						<input type="hidden" name="nilaifilter" value="1">
							<label>Dari tanggal : </label>
							<input type="date" name="tanggalawal" id="tanggalawal" class="form-control">
							<label>Sampai tanggal : </label>
							<input type="date" name="tanggalakhir" id="tanggalakhir" class="form-control">
							<br>
							<input type="submit" value="Lihat & Cetak" class="btn btn-danger">
						</form>
						<br>
					</div>
				</div>
				<br>
				<div class="card shadow mb-12">
					<div class="card-body">
						<h5>Laporan Peminjaman Barang Berdasarkan Bulan</h5>
						<hr>
						<form method="POST" action="<?=base_url('Admin/print_bk')?>" target='_blank'>
							<input type="hidden" name="nilaifilter" value="2">
							<label>Pilih tahun : </label>
							<select name="tahun1" id="tahun1" class="form-control">
								<?php foreach($tahun as $row): ?>
								<option value="<?= $row->tahun ?>"><?= $row->tahun ?></option>
								<?php endforeach; ?>
							</select>				
							<label>Dari bulan : </label>
							<select name="bulanawal" id="bulanawal" class="form-control">
								<option value="1">Januari</option>
								<option value="2">Februari</option>
								<option value="3">Maret</option>
								<option value="4">April</option>
								<option value="5">Mei</option>
								<option value="6">Juni</option>
								<option value="7">Juli</option>
								<option value="8">Agustus</option>
								<option value="9">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>
								<option value="12">Desember</option>
							</select>
							<label>Sampai bulan : </label>
							<select name="bulanakhir" id="bulanakhir" class="form-control">
								<option value="1">Januari</option>
								<option value="2">Februari</option>
								<option value="3">Maret</option>
								<option value="4">April</option>
								<option value="5">Mei</option>
								<option value="6">Juni</option>
								<option value="7">Juli</option>
								<option value="8">Agustus</option>
								<option value="9">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>
								<option value="12">Desember</option>
							</select>							
							<br>
							<input type="submit" value="Lihat & Cetak" class="btn btn-danger">
						</form>
					</div>
				</div>
				<br>
				<div class="card shadow mb-12">
					<div class="card-body">
						<h5>Laporan Peminjaman Barang Berdasarkan Tahun</h5>
						<hr>
						<form method="POST" action="<?=base_url('Admin/print_bk')?>" target='_blank'>
						<input type="hidden" name="nilaifilter" value="3">
							<label>Pilih tahun : </label>
							<select name="tahun2" id="tahun2" class="form-control">
								<?php foreach($tahun as $row): ?>
								<option value="<?= $row->tahun ?>"><?= $row->tahun ?></option>
								<?php endforeach; ?>
							</select>	
							<br>
							<input type="submit" value="Lihat & Cetak" class="btn btn-danger">
						</form>
					</div>
				</div>
				<br>
	      </div>
	   </div>
    </div>
</div>
				