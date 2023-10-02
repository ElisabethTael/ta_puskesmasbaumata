<?php
require "../koneksi.php";
session_start();

$id_admin = $_SESSION['admin'];


$ambildata = mysqli_query($conn, "SELECT * FROM dokter WHERE id_dokter = '$id_admin'");


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
    <link rel="stylesheet" href="../assets/css/style.css">



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
                        <img class="img-radius" src="img/ntt.png" alt="User-Profile-Image">
                        <div class="user-details">
                            <span><?php echo $fetch['nama_kepala']; ?></span>
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
                            <li><a href="dtpasien.php">Data Pasien</a></li>
                            <li><a href="rmedis.php">Data Rekam Medis </a></li>


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
                                <img src="../assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span><?php echo $fetch['nama_dokter']; ?></span>
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
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Proses pasien </li>
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
                                        <th>No Regis</th>
                                        <th>Nama Pasien</th>
                                        <th>Keterangan pasien </th>
                                        <th>Tanggal Daftar</th>
                                        <th>Nama Perawat </th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                        <th>Proses Pasien </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $i = 0;
                                    $ambildataperawat = mysqli_query($conn, "SELECT  * FROM  pasien JOIN regis ON regis.id_pasien   = pasien.id_pasien  ");
                                    while ($data = mysqli_fetch_array($ambildataperawat)) {
                                        $i++;
                                        $id_regis = $data['id_regis'];
                                        $id_pasien = $data['id_pasien'];
                                        $nomor_regis = $data['no_regis'];
                                        $nama_pasien = $data['nama_pasien'];
                                        $keluhan = $data['keterangan_pasien'];
                                        $tanggal_lahir = $data['tanggal_regis'];
                                        $alamat = $data['alamat'];
                                        $no_telepon = $data['nomor_telepon'];




                                    ?>
                                        <?php

                                        // mengambil data barang dengan kode paling besar
                                        $bln = date("Y");
                                        $bln;
                                        $query = mysqli_query($conn, "SELECT max(no_rekammedis) as kodeTerbesar FROM rekammedis WHERE year(tanggal_rekammedis)='$bln' ");
                                        $data = mysqli_fetch_array($query);
                                        $kodeBarang = $data['kodeTerbesar'];

                                        // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
                                        // dan diubah ke integer dengan (int)
                                        $urutan = (int) substr($kodeBarang, 3, 3);

                                        // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
                                        $urutan++;

                                        // membentuk kode barang baru
                                        // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
                                        // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
                                        // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
                                        $hari = date('d/m/y');
                                        $huruf = "RM-";
                                        $kd = $huruf . sprintf("%03s", $urutan) . "-" . $hari;


                                        ?>


                                        <tr>

                                            <td><?= $i ?></td>
                                            <td><?= $nomor_regis ?></td>
                                            <td><?= $nama_pasien ?></td>
                                            <td><?= $keluhan ?></td>
                                            <td><?= $tanggal_lahir ?></td>
                                            <td><?= $alamat ?></td>
                                            <td><?= $no_telepon ?></td>
                                            <td><?= $no_telepon ?></td>
                                            <td>
                                                <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit<?= $id_regis ?>" id="#myBtn"><i class="fas fa-pen" title="edit"></i></button>

                                            </td>
                                        </tr>







                                        <!-- Perawat Edit-->
                                        <div class="modal fade" id="edit<?= $id_regis ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Proses Rekam Medis Pasien </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" enctype="multipart/form-data">
                                                            <input type="hidden" name="reg" value="<?php echo $id_regis ?>">
                                                            <label for="">nomor rekam medis </label>
                                                            <input class="form-control mb-3" type="text" name="nomor_rekam" value="<?php echo $kd ?>">
                                                            <label for="">nama pasien </label>
                                                            <input class="form-control mb-3" type="text" name="nama_perawat" value="<?= $nama_pasien ?>">
                                                            <label for="">keluhan</label>
                                                            <input class="form-control mb-3" type="text" name="tempat_lahir" value="<?= $keluhan ?>">
                                                            <label for=""> tanggal rekam medis </label>
                                                            <input class="form-control mb-3" type="date" name="tanggal_rekam" value="">
                                                            <label for="">keterangan dokter </label>
                                                            <input type="text" class="form-control mb-3" name="keterangan_dokter" value="">

                                                            <div class="form-group">
                                                                <label for="exampleFormControlSelect1">data obat </label>
                                                                <select class="form-control" id="exampleFormControlSelect1" name="id_obat">
                                                                    <?php $obat = mysqli_query($conn, "SELECT * FROM obat ");


                                                                    while ($d = mysqli_fetch_assoc($obat)) {
                                                                        # code...

                                                                    ?>
                                                                        <option value="<?php echo $d['id_obat']; ?>"><?php echo $d['nama_obat']; ?> </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="medis" class="btn btn-primary">Save</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Perawat Hapus-->

                        </div>
                    <?php } ?>
                    </tbody>
                    </table>
                    <?php if (isset($_POST['medis'])) {
                        $pas = $_POST['reg'];
                        $nomor_medis = $_POST['nomor_rekam'];
                        $tanggal_rekam = $_POST['tanggal_rekam'];
                        $id_obat = $_POST['id_obat'];
                        $keterangan_dokter = $_POST['keterangan_dokter'];
                        $querytambah = mysqli_query($conn, "INSERT INTO rekammedis VALUES('','$nomor_medis','$keterangan_dokter','$id_obat','$tanggal_rekam','$pas')");


                        if ($querytambah) {
                            echo "<script>  alert('data berhasil di proses'); </script>";
                        } else {
                            echo "<script>  alert('data gagal  di proses'); </script>";
                        }
                    } ?>

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
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Perawat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php
                        // mencari kode periode dengan nilai paling besar
                        $query = "SELECT max(id_perawat) as maxKode FROM perawat";
                        $hasil = mysqli_query($conn, $query);
                        $data = mysqli_fetch_array($hasil);
                        $id_perawat = $data['maxKode'];
                        // mengambil angka atau bilangan dalam kode anggota terbesar,
                        // dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
                        // misal 'PERI001', akan diambil '001'
                        // setelah substring bilangan diambil lantas dicasting menjadi integer
                        $noUrut = (int) substr($id_perawat, 3, 3);

                        // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
                        $noUrut++;

                        // membentuk kode anggota baru
                        // perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
                        // misal sprintf("%03s", 12); maka akan dihasilkan '012'
                        // atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
                        $char = "PERAWAT";
                        $id_perawat = $char . sprintf("%03s", $noUrut);

                        ?>


                        <form method="POST" enctype="multipart/form-data">
                            <input type="text" name="id_perawat" value="<?php echo $id_perawat ?>" class="form-control mb-2" readonly />
                            <input type="text" class="form-control mb-3" placeholder="Masukan Nama Perawat..." name="nama_perawat" required />
                            <input type="text" class="form-control mb-3" placeholder="Masukan Tempat Lahir..." name="tempat_lahir" required />
                            <input type="date" class="form-control mb-3" placeholder="Masukan Tanggal Lahir..." name="tanggal_lahir" required />
                            <input type="text" class="form-control mb-3" placeholder="Masukan Jenis Kelamin..." name="jenis_kelamin" required />
                            <input type="text" class="form-control mb-3" placeholder="Masukan Agama..." name="agama" required />
                            <input type="text" class="form-control mb-3" placeholder="Masukan Alamat..." name="alamat" required />
                            <input type="text" class="form-control mb-3" placeholder="Masukan Nomor Telepon..." name="no_telepon" required />
                            <input type="file" class="form-control mb-3" name="file" required />

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                        <button type="submit" name="tperawat" class="btn btn-primary">Save</button>
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
    <script src="../assets/js/vendor-all.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../src/assets/js/pcoded.min.js"></script>

    <!-- Apex Chart -->
    <script src="../assets/js/plugins/apexcharts.min.js"></script>


    <!-- custom-chart js -->
    <script src="../assets/js/pages/dashboard-main.js"></script>
</body>

</html>