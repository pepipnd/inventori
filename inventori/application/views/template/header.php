<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title> Admin</title>

	<link rel="stylesheet" type="text/css" href="styles.css">

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js">
    </script>
	<!-- Custom fonts for this template-->
	<link href="<?= base_url('template/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('template/')?>css/sb-admin-2.min.css" rel="stylesheet">
	<link href="<?= base_url('template/')?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">




</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin') ?>">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="">
				</div>
				<div class="sidebar-brand-text mx-1">Inventori Smk NU</div></i>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="<?= base_url('admin') ?>">
					<i class="fas fa-fw fa-home"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">


			<!-- Heading -->
			<div class="sidebar-heading">
				Menu Utama
			</div>



			<!-- Nav Item - Charts -->
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('Admin/data_barang');?>">
					<i class="fas fa-database"></i>
					<span>Data Barang</span></a>
			</li>

			<!-- Nav Item - Tables -->
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('Admin/kategori');?>">
					<i class="fas fa-list-alt"></i>
					<span>Data Kategori</span></a>
			</li>
			<!-- Nav Item - Tables -->
			 <li class="nav-item">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-shopping-cart text-white"></i>
                    <span class="text-white">Transaksi</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?=base_url('Admin/barang_masuk') ?>"><i class="fas fa-download fa-sm fa-fw mr-2 text-gray-400"></i>Pengembalian Barang</a>
                        <a class="collapse-item" href="<?=base_url('Admin/barang_keluar') ?>"><i class="fas fa-upload fa-sm fa-fw mr-2 text-gray-400"></i>Peminjaman Barang</a>
                    </div>
                </div>
            </li>
			 <li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
					aria-controls="collapseThree">
					<i class="fas fa-fw fa-book"></i>
					<span>Laporan</span>
				</a>
				<div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="<?= base_url('Admin/lap_stok') ?>"> <i class="fas fa-cubes fa-sm fa-fw mr-2 text-gray-400"></i>Stok Barang</a>
						<a class="collapse-item" href="<?= base_url('Admin/lap_bm') ?>" ><i class="fas fa-download fa-sm fa-fw mr-2 text-gray-400"></i>Pengembalian Barang</a>
						<a class="collapse-item" href="<?= base_url('Admin/lap_bk') ?>"><i class="fas fa-upload fa-sm fa-fw mr-2 text-gray-400"></i>Peminjaman Barang</a>
					</div>
				</div>
			</li>
						<hr class="sidebar-divider">

			<div class="sidebar-heading">
				Lainnya
			</div>

			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true"
					aria-controls="collapseFour">
					<i class="fas fa-fw fa-cog"></i>
					<span>Pengaturan</span>
				</a>
				<div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="<?= base_url('Admin/data_user') ?>"><i class="fas fa-users fa-sm fa-fw mr-2 text-gray-400"></i>Manajemen User</a>
						<a class="collapse-item" href="<?= base_url('Admin/ubah_password') ?>"><i class="fas fa-cut fa-sm fa-fw mr-2 text-gray-400"></i>Ubah Password</a>
					</div>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('Login/logout') ?>" data-toggle="modal" data-target="#logoutModal">
					<i class="fas fa-sign-out-alt"></i>
					<span>Logout</span></a>
			</li>
			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>



		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

			  <?php
                date_default_timezone_set('Asia/Jakarta');
                echo "<font color='gray' face='arial bold'>";
                echo date('d-M-Y H:i:s');
                echo " WIB";
                echo "</font>";
              ?>
          <div class="topbar-divider d-none d-sm-block"></div>
          <marquee><font size="4" face="Copperplate Gothic Bold" class="text-black">Sistem Inventori <i>SMK NAHDLATUL ULAMA KOTA TASIKMALAYA</i></font></marquee>

					<!-- Topbar Search -->


					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
								aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small"
											placeholder="Search for..." aria-label="Search"
											aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button class="btn btn-info" type="button">
												<i class="fas fa-search fa-sm"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</li>




						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['nama']?></span>
								<img class="img-profile rounded-circle"
									src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSo38tCnX_HjKgFyft_g7SeKWrA9IqaS3dgnNJVmwe77ceNSy04aJjtk-ik3xo0VWjXG7Y&usqp=CAU">
							</a>
							
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
								aria-labelledby="userDropdown">
								
								<a class="dropdown-item" href="<?= base_url('Admin/detail_akun') ?>">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>
								<a class="dropdown-item" href="<?= base_url('Admin/ubah_password') ?>">
									<i class="fas fa-cut fa-sm fa-fw mr-2 text-gray-400"></i>
									Ubah Password
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
								
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

