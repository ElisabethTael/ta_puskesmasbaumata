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
            <div class="navbar-content scroll-div ">

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
                <h1 class="h3 mb-0 text-gray-800">Data Rekam Medis</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Rekam Medis</li>
                </ol>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                        </div>
                        <div class="table-responsive p-3">
                            <table class="table align-items-center table-bordered" id="dataTable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>ID Rekam Medis</th>
                                        <th>No Rekam Medis</th>
                                        <th>Nama Pasien</th>
                                        <th>Keterangan</th>

                                        <th>Nama Obat</th>
                                        <th>Tanggal Rekam Medis</th>

                                        <th>rekam medis</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $i = 0;
                                    $ambildatarekammedis = mysqli_query($conn, "select * from pasien join regis on regis.id_pasien = pasien.id_pasien join rekammedis on rekammedis.id_regis = rekammedis.id_regis join obat on obat.id_obat = rekammedis.id_obat ");
                                    while ($data = mysqli_fetch_array($ambildatarekammedis)) {
                                        $i++;
                                        $id_regis = $data['id_regis'];
                                        $id_rekammedis = $data['id_rekammedis'];
                                        $no_rekammedis = $data['no_rekammedis'];
                                        $nama_pasien = $data['nama_pasien'];
                                        $keterangan = $data['keterangan'];

                                        $nama_obat = $data['nama_obat'];
                                        $tanggal_rekammedis = $data['tanggal_rekammedis'];




                                    ?>
                                        <tr>

                                            <td><?= $i ?></td>
                                            <td><?= $id_rekammedis ?></td>
                                            <td><?= $no_rekammedis ?></td>
                                            <td><?= $nama_pasien ?></td>
                                            <td><?= $keterangan ?></td>
                                            <td><?= $nama_obat ?></td>
                                            <td><?= $tanggal_rekammedis ?></td>


                                            <td>

                                                <a href="pdfrekam.php?id_rekammedis=<?php echo $id_rekammedis ?>" class="btn btn-success btn-sm"><i class="fas fa-pen" title="lihat rekam medis"></i></a>

                                            </td>
                                        </tr>

                                        <!-- modal edit -->
                                        <div class="modal fade" id="edit<?= $id_rekammedis ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog" style="max-width: 800px;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Edit Rekam Medis</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="post">
                                                        <div class="modal-body">
                                                            <form action="" method="post">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="">ID Rekam Medis</label>
                                                                        <input type="text" name="id_rekammedis" value="<?php echo $id_rekammedis ?>" class="form-control mb-2" readonly />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="">no_rekammedis</label>
                                                                        <input type="text" name="no_rekammedis" class="form-control" value="<?= $no_rekammedis ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="">Nama Pasien</label>
                                                                        <input type="text" name="nama_pasien" class="form-control mb-2" value="<?= $nama_pasien ?>" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="">Keterangan</label>
                                                                        <input type="text" name="keterangan" class="form-control" value="<?= $Keteranganr ?>">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="">status_pasien</label>
                                                                        <input type="date" name="status_pasien" class="form-control" value="<?= $status_pasien ?>">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="">Jenis Kelamin</label>
                                                                        <input type="text" name="jenis_kelamin" class="form-control" value="<?= $jenis_kelamin ?>">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="">$id_obat</label>
                                                                        <input type="text" name="id_obat" class="form-control" value="<?= $id_obat ?>">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="">tanggal_rekammedis</label>
                                                                        <input type="text" name="tanggal_rekammedis" class="form-control" value="<?= $tanggal_rekammedis ?>">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="">Keluhan</label>
                                                                        <input type="text" name="keluhan" class="form-control" value="<?= $keluhan ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                                                    <button type="submit" name="editrekammedis" class="btn btn-primary"><i class="fas fa-check"></i> Simpan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                </div>
                                            </div>
                                            <!-- akhir edit -->
                                            <!-- Hapius Dokter-->
                                            <div class="modal fade" id="hapus<?= $id_rekammedis ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                <h6>Apakah Anda Yakin Ingin Menghapus Data <strong class="text-danger"> <?= $no_rekammedis ?></strong></h6>
                                                                <input type="hidden" class="form-control mb-3" name="nama_dokter" value="<?= $no_rekammedis ?>">
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
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Rekam Medis</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php
                            // mencari kode periode dengan nilai paling besar
                            $query = "SELECT max(id_rekammedis) as maxKode FROM rekammedis";
                            $hasil = mysqli_query($conn, $query);
                            $data = mysqli_fetch_array($hasil);
                            $id_rekammedis = $data['maxKode'];
                            // mengambil angka atau bilangan dalam kode anggota terbesar,
                            // dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
                            // misal 'PERI001', akan diambil '001'
                            // setelah substring bilangan diambil lantas dicasting menjadi integer
                            $noUrut = (int) substr($id_rekammedis, 3, 3);

                            // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
                            $noUrut++;

                            // membentuk kode anggota baru
                            // perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
                            // misal sprintf("%03s", 12); maka akan dihasilkan '012'
                            // atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
                            $char = "REKAMMEDIS";
                            $id_rekammedis = $char . sprintf("%03s", $noUrut);

                            ?>

                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">id_rekammedis</label>
                                        <input type="text" name="id_rekammedis" value="<?php echo $id_rekammedis ?>" class="form-control mb-2" readonly />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">No Rekam Medis</label>
                                        <input type="text" name="no_rekammedis" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Nama Pasien</label>
                                        <input type="text" name="nama_pasien" class="form-control mb-2" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Status Pasien</label>
                                        <input type="text" name="status_pasien" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Id Obat</label>
                                        <input type="text" name="id_obat" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Tanggal Rekam Medis</label>
                                        <input type="date" name="tanggal_rekammedis" class="form-control mb-2" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Keluhan</label>
                                        <input type="text" name="keluhan" class="form-control mb-2" />
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="trekammedis" class="btn btn-primary"><i class="fas fa-folder"></i> Save</button>
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