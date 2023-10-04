<?php
require "koneksi.php";
session_start();

$id_admin = $_SESSION['admin'];

$ambildata = mysqli_query($conn, "SELECT * FROM perawat WHERE id_perawat = '$id_admin'");

$ambil = mysqli_query($conn, "SELECT * FROM perawat WHERE id_perawat = '$id_admin'");

$fetch = mysqli_fetch_assoc($ambildata);
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<title>Puskesmas Baumata</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="../img/logobaumata.png" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">



</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div ">

				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="../img/ntt.png" alt="User-Profile-Image">
						<div class="user-details">
							<span><?= $fetch['nama_perawat']; ?></span>
							<div id="more-details">ADMIN</div>
						</div>
					</div>
				</div>

				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item">
						<a href="index.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>Master</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">MASTER DATA</span></a>
						<ul class="pcoded-submenu">

							<li><a href="t_dokter.php">Data Dokter</a></li>
							<li><a href="t_perawat.php">Data Perawat</a></li>
							<li><a href="t_poli.php">Data Poli</a></li>

							<li><a href="t_obat.php">Data Obat</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">LIHAT DATA</span></a>
						<ul class="pcoded-submenu">
							<li><a href="datapasien.php">Pasien</a></li>
							<li><a href="prosespasien.php">proses pasien</a></li>
							<li><a href="t_rekammedis.php">rekam medis</a></li>
						</ul>
					</li>
				</ul>

			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->


	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">


		<div class="m-header">
			<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
			<a href="#!" class="b-brand">
				<!-- ========   change your logo hear   ============ -->

				<img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
			</a>
			<a href="#!" class="mob-toggler">
				<i class="feather icon-more-vertical"></i>
			</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
					<div class="search-bar">
						<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
						<button type="button" class="close" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li>
					<div class="dropdown drp-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="feather icon-user"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right profile-notification">
							<div class="pro-head">
								<img src="assets/images/avatarlogin.png" class="img-radius" alt="User-Profile-Image">
								<span><?php echo $fetch['nama_perawat']; ?></span>
								<a href="logout.php" class="dud-logout" title="Logout">
									<i class="feather icon-log-out"></i>
								</a>
							</div>

						</div>
					</div>
				</li>
			</ul>
		</div>
	</header>

	<!-- [ Header ] end -->

	<!-- Container Fluid-->
	<div class="container-fluid" id="container-wrapper">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">

			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>

			</ol>
		</div>
		<div class="section-title position-relative mx-auto mb-5 pb-3" style="max-width: 1050px;">
			<div class="row">
				<div class="col-4">
					<div class="card">
						<form action=" method=" post" enctype="multipart/form-data">
							<div class="card-header">
								<h4 class="card-title">Halaman Utama</h4>
							</div>

							<div class=" card-body text-center">
								<marquee scrollamount="5" direction="right">
									<h6>Selamat Datang</h6>
								</marquee>

							</div>
							<div class="card-footer">
								<marquee direction="up" height="150">
									<h3 class="text-center"> <?php echo $fetch['nama_perawat']; ?></h3>
								</marquee><br>
							</div>
						</form>
					</div>
				</div>
				<div class="col-8">
					<form action="" method="post">
						<?php while ($data = mysqli_fetch_assoc($ambil)) {
						?>
							<div class="card">
								<div class="card-body border-top py-0 my-3">
									<h4 class="text-muted my-3">Profil</h4>
									<div class="row">
										<div class="col-xs-6 col-sm-6">
											<input type="hidden" name="id_perawat" value="<?= $data['id_perawat']; ?>" id="">
											<div class="form-group">
												<label for="nip">Nama : </label>
												<input type="hidden" name="nip" value="">
												<input type="text" name="" id="nip" value="<?= $data['nama_perawat']; ?>" class="form-control" placeholder="Masukan NIP Karyawan" required="reuqired" readonly />
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 ">
											<div class="form-group">
												<label for="email">Nip : </label>
												<input type="email" name="" id="email" value="<?= $data['nip']; ?>" class="form-control" placeholder="Masukan Email" required="reuqired" readonly />
											</div>
										</div>
										<div class="col-xs-12 col-sm-6">
											<div class="form-group">
												<label for="nama">Nama Lengkap : </label>
												<input type="text" name="nama_perawat" id="nama" value="<?= $data['nama_perawat']; ?>" class="form-control" placeholder="Masukana Nama Lengkap Karyawan" required="reuqired" />
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 ">
											<div class="form-group">
												<label for="telp">Nip : </label>
												<input type="text" name="nip" id="telp" value="<?= $data['nip']; ?>" class="form-control" placeholder="Masukan No. Telp" required="reuqired" />
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 ">
											<div class="form-group">
												<label for="telp">Tempat Lahir : </label>
												<input type="text" name="tempat_lahir" id="telp" value="<?= $data['tempat_lahir']; ?>" class="form-control" placeholder="Masukan No. Telp" required="reuqired" />
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 ">
											<div class="form-group">
												<label for="telp">Tanggal Lahir : </label>
												<input type="date" name="tanggal_lahir" id="telp" value="<?= $data['tanggal_lahir']; ?>" class="form-control" placeholder="Masukan tempat lahir" required="reuqired" />
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 ">
											<div class="form-group">
												<label for="telp">Jenis Kelamin : </label>
												<input type="text" name="jenis_kelamin" id="telp" value="<?= $data['jenis_kelamin']; ?>" class="form-control" placeholder="Masukan tempat lahir" required="reuqired" />
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 ">
											<div class="form-group">
												<label for="telp">Alamat : </label>
												<input type="text" name="alamat" id="telp" value="<?= $data['alamat']; ?>" class="form-control" placeholder="Masukan tempat lahir" required="reuqired" />
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 ">
											<div class="form-group">
												<label for="telp">agama : </label>
												<input type="text" name="agama" id="telp" value="<?= $data['agama']; ?>" class="form-control" placeholder="Masukan tempat lahir" required="reuqired" />
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 ">
											<div class="form-group">
												<label for="telp">Nomor Telepon : </label>
												<input type="text" name="no_telepon" id="telp" value="<?= $data['no_telepon']; ?>" class="form-control" placeholder="Masukan tempat lahir" required="reuqired" />
											</div>
										</div>

									</div>
								</div>
								<div class="card-footer">
									<div class="row w-100">
										<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
											<button style="float: right;" type="submit" name="profilperawat" class="btn btn-primary btn-block">Simpan <i class="fa fa-save"></i></button>
										</div>
									</div>
								</div>
							</div>
						<?php   } ?>
					</form>


				</div>
			</div>
		</div>




		<!-- [ Main Content ] start -->
		<div class="pcoded-main-container">
			<div class="pcoded-content">
			</div>
		</div>
		<!-- [ Main Content ] end -->
		<!-- Warning Section start -->
		<!-- Older IE warning message -->
		<!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
		<!-- Warning Section Ends -->

		<!-- Required Js -->
		<script src="assets/js/vendor-all.min.js"></script>
		<script src="assets/js/plugins/bootstrap.min.js"></script>
		<script src="assets/js/pcoded.min.js"></script>

		<!-- Apex Chart -->
		<script src="assets/js/plugins/apexcharts.min.js"></script>


		<!-- custom-chart js -->
		<script src="assets/js/pdages/dashboard-main.js"></script>
</body>

</html>