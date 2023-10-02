<?php
require "koneksi.php";
session_start();

$id_admin = $_SESSION['admin'];


$ambildata = mysqli_query($conn, "SELECT * FROM perawat WHERE id_perawat = '$id_admin'");


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
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">LAPORAN DATA</span></a>
						<ul class="pcoded-submenu">
							<li><a href="datapasien.php">Data Pasien </a></li>
							<li><a href="t_dokter.php">Data Dokter</a></li>
							<li><a href="t_perawat.php">Data Perawat</a></li>
							<li><a href="t_poli.php">Data Poli</a></li>
							<li><a href="t_obat.php">Data Obat</a></li>
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
								<img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
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
		<div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
			<h1 class="display-6 text-uppercase">SISTEM INFORMASI </h1>
			<h1 class="display-6 text-uppercase"> PUSKESMAS BAUMATA </h1>
		</div>
		<div class="container">
			<div class="row">








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