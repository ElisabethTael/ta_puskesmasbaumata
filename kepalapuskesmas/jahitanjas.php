<?php
 require "koneksi.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>fashion sela</title>
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
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

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
		<div class="navbar-content scroll-div " >
			
			<div class="">
				<div class="main-menu-header">
					<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
					<div class="user-details">
						<span>SHELIA TUNGGA</span>
						<div id="more-details">ADMIN<i class="fa fa-chevron-down m-l-5"></i></div>
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
					<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">TAMBAH DATA</span></a>
					<ul class="pcoded-submenu">
						<li><a href="jahitanjas.php">Pelanggan</a></li>
						<li><a href="#">Jahitan Jas</a></li>
						<li><a href="bc_badges.html">Jahitan Celana Jas</a></li>
						<li><a href="bc_breadcrumb-pagination.html">Jahitan Lainnya</a></li>
						<li><a href="bc_card.html">Konfirmasi Jahitan</a></li>
						<li><a href="bc_collapse.html">Data Pendapatan</a></li>
					</ul>
				</li>
				<li class="nav-item pcoded-hasmenu">
					<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">LIHAT DATA</span></a>
					<ul class="pcoded-submenu">
					<li><a href="#">Pelanggan</a></li>
						<li><a href="bc_button.html">Jahitan Jas</a></li>
						<li><a href="bc_badges.html">Jahitan Celana Jas</a></li>
						<li><a href="bc_breadcrumb-pagination.html">Jahitan Lainnya</a></li>
						<li><a href="bc_card.html">Konfirmasi Jahitan</a></li>
						<li><a href="bc_collapse.html">Data Pendapatan</a></li>
					</ul>
				</li>
                <li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Shelia Tungga</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="auth-signup.html" target="_blank">LogOut</a></li>
					    
					    </ul>
					</li>
			</ul>
			
		</div>
	</div>
</nav>
<!-- [ navigation menu ] end -->

	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
	<div class="pcoded-content">
			 <!-- Container Fluid-->
			  <!-- Container Fluid-->

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Jahitan Jas</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Jahitan Jas</li>
            </ol>
          </div>

          <div class="row">
          <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                    id="#myBtn"><i class="fas fa-plus"> Data Jahitan Jas</i> </h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-bordered" id="dataTable">
                    <thead class="thead-dark">
                      <tr>
                        <th>No</th>
                        <th>ID JAS</th>
                        <th>ID PELANGGAN</th>
                        <th>LEBAR BAHU</th>
                        <th>PANJANG JAS</th>
                        <th>PANJANG TANGAN</th>
                        <th>LEBAR SIKU</th>
                        <th>LEBAR LENGAN</th>
                        <th>LEBAR DADA</th>
                        <th>LEBAR PERUT</th>
                        <th>LEBAR PINGGUL</th>
                        <th>AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                        $i = 0;
                        $ambildatajahitanjas = mysqli_query($conn, "select * from jahitanjas");
                            while($data=mysqli_fetch_array($ambildatajahitanjas)){
                                $i++;
                                $id_jas = $data['id_jas'];
                                $id_pelanggan = $data['id_pelanggan'];
                                $lebar_bahu = $data['lebar_bahu'];
                                $panjang_jas = $data['panjang_jas'];
                                $panjang_tangan = $data['panjang_tangan'];
								$lebar_siku = $data['lebar_siku'];
								$lebar_lengan = $data['lebar_lengan'];
								$lebar_dada = $data['lebar_dada'];
								$lebar_perut = $data['lebar_perut'];
								$lebar_pinggul = $data['lebar_pinggul'];
                               
                               

                                ?>
                                <tr>

                                    <td><?=$i?></td>
                                    <td><?=$id_jas?></td>
                                    <td><?=$id_pelanggan?></td>
                                    <td><?=$lebar_bahu?></td>
                                    <td><?=$panjang_jas?></td>
                                    <td><?=$panjang_tangan?></td>
                                    <td><?=$lebar_siku?></td>
                                    <td><?=$lebar_lengan?></td>
                                    <td><?=$lebar_dada?></td>
                                    <td><?=$lebar_perut?></td>
                                    <td><?=$lebar_pinggul?></td>
                                    
                        <td>
                           <button class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#detail<?=$id_jas?>"
                            id="#myBtn"><i class="fas fa-eye" title="detail"></i></button>
                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit<?=$id_jas?>" 
                            id="#myBtn"><i class="fas fa-pen" title="edit"></i></button>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?=$id_jas?>" 
                            id="#myBtn"><i class="fas fa-trash" title="Hapus"></i></button>
                        </td>
                      </tr>
                       <!-- book detail -->
                    <div class="modal fade" id="detail<?=$id_ebook?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail E-Book</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            
                            <input class="form-control mb-3" type="text" name="nama_ebook" value="<?=$nama_ebook?>">
                                <input class="form-control mb-3" type="text" name="judul_ebook" value="<?=$judul_ebook?>">
                                <input class="form-control mb-3" type="text" name="pengarang_ebook" value="<?=$pengarang_ebook?>">
                               <object data="fileebook/<?=$file?>" style="width: 100%;" height="500px"></object>
                               <object data="fileebook/<?=$fileebook?>" style="width: 100%;" height="500px"></object>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                        </div>
                      </div>
                       <!-- book edit-->
                       <div class="modal fade" id="edit<?=$id_ebook?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Ebook</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form method="POST" enctype="multipart/form-data">
                                <input class="form-control mb-3" type="text" name="nama_ebook" value="<?=$nama_ebook?>">
                                <input class="form-control mb-3" type="text" name="judul_ebook" value="<?=$judul_ebook?>">
                                <input class="form-control mb-3" type="text" name="pengarang_ebook" value="<?=$pengarang_ebook?>">
                                <input class="form-control mb-3" type="file" name="file" value="<?=$file?>">
                                <input class="form-control mb-3" type="file" name="fileebook" value="<?=$fileebook?>">
                                <input type="hidden" class="form-control mb-3" name="id_ebook" value="<?=$id_ebook?>" >
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                            <button type="submit" name="editebook" class="btn btn-primary">Save</button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
                     <!-- Hapus jahitanjas-->
                     <div class="modal fade" id="hapus<?=$id_jas?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form method="POST">
                                <h6>Apakah Anda Yakin Ingin Menghapus Data <strong class="text-danger"> <?=$id_pelanggan?></strong></h6>
                                <input type="hidden" class="form-control mb-3" name="id_jas" value="<?=$id_jas?>" >
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                            <button type="submit" name="hapusjahitanjas" class="btn btn-danger"><i class="fas fa-trash me-2"> Delete</i></button>
                            </div>
                            </form>
                        </div>
                        </div>
                      </div>
                    </div>
                    <?php
                                }
                  ?>
                    </tbody>
                  </table>

                  
                </div>
              </div>
            </div>
          </div>
          <!--Row-->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jahitan Jas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <?php
                                    // mencari kode periode dengan nilai paling besar
                                    $query = "SELECT max(id_jas) as maxKode FROM jahitanjas";
                                    $hasil = mysqli_query($conn,$query);
                                    $data = mysqli_fetch_array($hasil);
                                    $id_jas = $data['maxKode'];
                                    // mengambil angka atau bilangan dalam kode anggota terbesar,
                                    // dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
                                    // misal 'PERI001', akan diambil '001'
                                    // setelah substring bilangan diambil lantas dicasting menjadi integer
                                    $noUrut = (int) substr($id_jas, 3, 3);

                                    // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
                                    $noUrut++;

                                    // membentuk kode anggota baru
                                    // perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
                                    // misal sprintf("%03s", 12); maka akan dihasilkan '012'
                                    // atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
                                    $char = "J";
                                    $id_jas = $char . sprintf("%03s", $noUrut);
                                           
                                ?>


                                <form method="POST" enctype="multipart/form-data" >
                                <input type="text"  name="id_jas" value="<?php echo $id_jas?>" class="form-control mb-2" readonly />
                                <input type="text" class="form-control mb-3" placeholder="Masukan iD Pelanggan" name="id_pelanggan" required />
                                <input type="text" class="form-control mb-3" placeholder="Masukan Lebar Bahu" name="lebar_bahu" required />
                                <input type="text" class="form-control mb-3" placeholder="Masukan Panjang Jas...." name="panjang_jas" required />
                                <input type="text" class="form-control mb-3" placeholder="Masukan Panjang Tangan...." name="panjang_tangan" required />
                                <input type="text" class="form-control mb-3" placeholder="Masukan Lebar Siku...." name="lebar_siku" required />
                                <input type="text" class="form-control mb-3" placeholder="Masukan Lebar Lengan...." name="lebar_lengan" required />
                                <input type="text" class="form-control mb-3" placeholder="Masukan Lebar Dada...." name="lebar_dada" required />
                                <input type="text" class="form-control mb-3" placeholder="Masukan Lebar Perut...." name="lebar_perut" required />
                                <input type="text" class="form-control mb-3" placeholder="Masukan Lebar Pinggul...." name="lebar_pinggul" required />
                               
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                            <button type="submit" name="tjahitanjas" class="btn btn-primary">Save</button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>


	</div>
</div>

<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
		
			
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="assets/images/logo.png" alt="" class="logo">
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
                                <span>Shelia Tungga</span>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
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



</body>

</html>
