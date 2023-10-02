<?php
 require "koneksi.php";

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
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="../img/ntt.png" alt="User-Profile-Image">
						<div class="user-details">
							<span>ELISABETH TAEL</span>
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
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">TAMBAH DATA</span></a>
						<ul class="pcoded-submenu">
							<li><a href="t_dokter.php">Data Dokter</a></li>
							<li><a href="t_perawat.php">Data Perawat</a></li>
							<li><a href="t_poli.php">Data Poli</a></li>
							<li><a href="t_rekammedis.php">Data Rekam Medis</a></li>
							<li><a href="t_obat.php">Data Obat</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">LIHAT DATA</span></a>
					    <ul class="pcoded-submenu">
                            <li><a href="bc_alert.html">Pasien</a></li>
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
										<span>Elsa Tael</span>
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

 <!-- [ Main Content ] start -->
 <div class="pcoded-main-container">
	<div class="pcoded-content">
			 <!-- Container Fluid-->
			  <!-- Container Fluid-->

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Dokter</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dokter</li>
            </ol>
          </div>

          <div class="row">
          <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                    id="#myBtn"><i class="fas fa-plus"> Data Dokter</i> </h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-bordered" id="dataTable">
                    <thead class="thead-dark">
                      <tr>
                        <th>No</th>
                        <th>ID Dokter</th>
                        <th>NIP</th>
                        <th>Nama Dokter</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Jabatan</th>
                        <th>Agama</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Id Poli</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                        $i = 0;
                        $ambildatadokter = mysqli_query($conn, "select * from dokter");
                            while($data=mysqli_fetch_array($ambildatadokter)){
                                $i++;
                                $id_dokter = $data['id_dokter'];
                                $nip = $data['nip'];
                                $nama_dokter = $data['nama_dokter'];
                                $tempat_lahir = $data['tempat_lahir'];
                                $tanggal_lahir = $data['tanggal_lahir'];
                                $jenis_kelamin = $data['jenis_kelamin'];
								$jabatan = $data['jabatan'];
								$agama = $data['agama'];
								$alamat = $data['alamat'];
								$no_telepon = $data['no_telepon'];
								$id_poli = $data['id_poli'];
								$file = $data['file'];
                               
                               

                                ?>
                                <tr>

                                    <td><?=$i?></td>
                                    <td><?=$id_dokter?></td>
                                    <td><?=$nip?></td>
                                    <td><?=$nama_dokter?></td>
                                    <td><?=$tempat_lahir?></td>
                                    <td><?=$tanggal_lahir?></td>
                                    <td><?=$jenis_kelamin?></td>
                                    <td><?=$jabatan?></td>
                                    <td><?=$agama?></td>
                                    <td><?=$alamat?></td>
                                    <td><?=$no_telepon?></td>
                                    <td><?=$id_poli?></td>
                                    <td><img src="filedokter/<?=$file?>" width="50"></td>
                                    
                        <td>
                           
                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit<?=$id_dokter?>" 
                            id="#myBtn"><i class="fas fa-pen" title="edit"></i></button>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?=$id_dokter?>" 
                            id="#myBtn"><i class="fas fa-trash" title="Hapus"></i></button>
                        </td>
                      </tr>
                      
                       <!-- modal edit -->
                    <div class="modal fade" id="edit<?=$id_dokter?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" style="max-width: 800px;">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Edit Dokter</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post">
                        <div class="modal-body">
                         <form action="" method="post">
                         <div class="row">
                             <div class="col-md-6">
                                 <label for="">ID Dokter</label>
                             <input type="text"  name="id_dokter" value="<?php echo $id_dokter?>" class="form-control mb-2" readonly />
                             </div>
                             <div class="col-md-6">
                                 <label for="">NIP</label>
                                 <input type="text" name="nip" class="form-control" value="<?=$nip?>">
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-6">
                                 <label for="">Nama Dokter</label>
                             <input type="text"  name="nama_dokter" class="form-control mb-2" value="<?=$nama_dokter?>" />
                             </div>
                             <div class="col-md-6">
                                 <label for="">Tempat Lahir</label>
                                 <input type="text" name="tempat_lahir" class="form-control" value="<?=$tempat_lahir?>">
                             </div>
                             <div class="col-md-6">
                                 <label for="">Tanggal Lahir</label>
                                 <input type="date" name="tanggal_lahir" class="form-control" value="<?=$tanggal_lahir?>">
                             </div>
                             <div class="col-md-6">
                                 <label for="">Jenis Kelamin</label>
                                 <input type="text" name="jenis_kelamin" class="form-control" value="<?=$jenis_kelamin?>">
                             </div>
                             <div class="col-md-6">
                                 <label for="">Jabatan</label>
                                 <input type="text" name="jabatan" class="form-control" value="<?=$jabatan?>">
                             </div>
                             <div class="col-md-6">
                                 <label for="">Agama</label>
                                 <input type="text" name="agama" class="form-control" value="<?=$agama?>">
                             </div>
                             <div class="col-md-6">
                                 <label for="">Alamat</label>
                                 <input type="text" name="alamat" class="form-control" value="<?=$alamat?>">
                             </div>
                             <div class="col-md-6">
                                 <label for="">Nomor Telepon</label>
                                 <input type="text" name="no_telepon" class="form-control" value="<?=$no_telepon?>">
                             </div>
                             <div class="col-md-6">
                                 <label for="">ID Poli</label>
                                 <input type="text" name="id_poli" class="form-control" value="<?=$id_poli?>">
                             </div>
                             <div class="col-md-6">
                                 <label for="">Foto Dokter</label>
                                 <input type="file" name="file" class="form-control" value="<?=$file?>">
                             </div>
                         </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            <button type="submit" name="editdokter" class="btn btn-primary"><i class="fas fa-check"></i> Simpan</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
                    <!-- akhir edit -->
                     <!-- Hapius Dokter-->
                     <div class="modal fade" id="hapus<?=$id_dokter?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                <h6>Apakah Anda Yakin Ingin Menghapus Data <strong class="text-danger"> <?=$nama_dokter?></strong></h6>
                                <input type="hidden" class="form-control mb-3" name="nama_dokter" value="<?=$nama_dokter?>" >
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                            <button type="submit" name="hapusdokter" class="btn btn-danger"><i class="fas fa-trash me-2"> Delete</i></button>
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
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Dokter</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <?php
                                    // mencari kode periode dengan nilai paling besar
                                    $query = "SELECT max(id_dokter) as maxKode FROM dokter";
                                    $hasil = mysqli_query($conn,$query);
                                    $data = mysqli_fetch_array($hasil);
                                    $id_dokter = $data['maxKode'];
                                    // mengambil angka atau bilangan dalam kode anggota terbesar,
                                    // dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
                                    // misal 'PERI001', akan diambil '001'
                                    // setelah substring bilangan diambil lantas dicasting menjadi integer
                                    $noUrut = (int) substr($id_dokter, 3, 3);

                                    // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
                                    $noUrut++;

                                    // membentuk kode anggota baru
                                    // perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
                                    // misal sprintf("%03s", 12); maka akan dihasilkan '012'
                                    // atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
                                    $char = "DOKTER";
                                    $id_dokter = $char . sprintf("%03s", $noUrut);
                                           
                                ?>

                                 <form action="" method="post">
                                 <div class="row">
                                  <div class="col-md-6">
                                    <label for="">ID Dokter</label>
                                    <input type="text"  name="id_dokter" value="<?php echo $id_dokter?>" class="form-control mb-2" readonly />
                                  </div>
                                  <div class="col-md-6">
                                    <label for="">NIP</label>
                                    <input type="text" name="nip" class="form-control">
                                  </div>
                                  <div class="col-md-6">
                                   <label for="">Nama Dokter</label>
                                   <input type="text"  name="nama_dokter" class="form-control mb-2" />
                                </div>
                                  <div class="col-md-6">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control">
                                  </div>
                                  <div class="col-md-6">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control">
                                  </div>
                                  <div class="col-md-6">
                                    <label for="">Jenis Kelamin</label>
                                    <input type="text" name="jenis_kelamin" class="form-control">
                                  </div>
                                 </div>
                                <div class="row">
                                <div class="col-md-6">
                                   <label for="">Jabatan</label>
                                   <input type="text"  name="jabatan" class="form-control mb-2" />
                                </div>
                             <div class="col-md-6">
                                 <label for="">Agama</label>
                                 <input type="text" name="agama" class="form-control">
                             </div>
                             <div class="col-md-6">
                                 <label for="">Alamat</label>
                                 <input type="text" name="alamat" class="form-control">
                             </div>
                             <div class="col-md-6">
                                 <label for="">No Telepon</label>
                                 <input type="text" name="no_telepon" class="form-control">
                             </div>
                             <div class="col-md-6">
                                 <label for="">ID Poli</label>
                                 <input type="text" name="id_poli" class="form-control">
                             </div>
                             <div class="col-md-6">
                                 <label for="">Foto Dokter</label>
                                 <input type="file" name="file" class="form-control">
                             </div>
                         </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="submit" name="tdokter" class="btn btn-primary"><i class="fas fa-folder"></i> Save</button>
             </div>
             </form>
                        </div>
                        </div>
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
<script src="assets/js/pages/dashboard-main.js"></script>
</body>

</html>
