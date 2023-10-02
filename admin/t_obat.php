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
                            <span><?php echo $fetch['nama_perawat']; ?></span>
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
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">MASETER DATA</span></a>
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
                                <img src="../img/avatarlogin.png" class="img-radius" alt="User-Profile-Image">
                                <span><?= $fetch['nama_perawat']; ?></span>
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
                <h1 class="h3 mb-0 text-gray-800">Data Obat</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Obat</li>
                </ol>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="#myBtn"><i class="fas fa-plus"> Data Obat</i> </h6>
                        </div>
                        <div class="table-responsive p-3">
                            <table class="table align-items-center table-bordered" id="dataTable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>ID Obat</th>
                                        <th>Nama Obat</th>
                                        <th>Dosis Obat</th>
                                        <th>Cara Pakai</th>
                                        <th>Ketersediaan Obat</th>
                                        <th>Expired Date</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $i = 0;
                                    $ambildataobat = mysqli_query($conn, "select * from obat");
                                    while ($data = mysqli_fetch_array($ambildataobat)) {
                                        $i++;
                                        $id_obat = $data['id_obat'];
                                        $nama_obat = $data['nama_obat'];
                                        $dosis_obat = $data['dosis_obat'];
                                        $cara_pakai = $data['cara_pakai'];
                                        $ketersediaan_obat = $data['ketersediaan_obat'];
                                        $expired_date = $data['expired_date'];




                                    ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $id_obat ?></td>
                                            <td><?= $nama_obat ?></td>
                                            <td><?= $dosis_obat ?></td>
                                            <td><?= $cara_pakai ?></td>
                                            <td><?= $ketersediaan_obat ?></td>
                                            <td><?= $expired_date ?></td>


                                            <td>

                                                <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit<?= $id_obat ?>" id="#myBtn"><i class="fas fa-pen" title="edit"></i></button>
                                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $id_obat ?>" id="#myBtn"><i class="fas fa-trash" title="Hapus"></i></button>
                                            </td>
                                        </tr>

                                        <!-- modal edit -->
                                        <div class="modal fade" id="edit<?= $id_obat ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog" style="max-width: 800px;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Edit Obat</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="post">
                                                        <div class="modal-body">
                                                            <form action="" method="post">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="">Nama Obat</label>
                                                                        <input type="text" name="nama_obat" class="form-control" value="<?= $nama_obat ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="">Dosis Obat</label>
                                                                        <input type="text" name="dosis_obat" class="form-control mb-2" value="<?= $dosis_obat ?>" />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="">Cara Pakai</label>
                                                                        <input type="text" name="cara_pakai" class="form-control" value="<?= $cara_pakai ?>">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="">Ketersediaan Obat</label>
                                                                        <input type="text" name="ketersediaan_obat" class="form-control" value="<?= $ketersediaan_obat ?>">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="">Expired Date</label>
                                                                        <input type="date" name="expired_date" class="form-control" value="<?= $expired_date ?>">
                                                                    </div>
                                                                    <input type="hidden" name="obat_id" value="<?php echo $id_obat ?>">
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                                            <button type="submit" name="a" class="btn btn-primary"><i class="fas fa-check"></i> Simpan</button>
                                                        </div>
                                                    </form>
                                                    <?php

                                                    if (isset($_POST['a'])) {

                                                        $obat_id = $_POST['obat_id'];
                                                        $nama_obat = $_POST['nama_obat'];
                                                        $dosis_obat = $_POST['dosis_obat'];
                                                        $cara_pakai = $_POST['cara_pakai'];
                                                        $ketersediaan_obat = $_POST['ketersediaan_obat'];
                                                        $expired_date = $_POST['expired_date'];

                                                        $editobat = mysqli_query($conn, "UPDATE obat SET nama_obat ='$nama_obat', dosis_obat='$dosis_obat',  cara_pakai='$cara_pakai',ketersediaan_obat='$ketersediaan_obat',expired_date='$expired_date' WHERE id_obat = '$obat_id'");


                                                        if ($editobat) {
                                                            echo '<script type="text/javascript">alert("Behasil edit  Data");</script>';
                                                            echo "<script>location= 't_obat.php'</script>";
                                                        } else {
                                                            echo '<script type="text/javascript">alert("gagal Tambah Data");</script>';
                                                            echo "<script>location= 't_obat.php'</script>";
                                                        }
                                                    }

                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- akhir edit -->
                                        <!-- Hapius Obat-->
                                        <div class="modal fade" id="hapus<?= $id_obat ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            <h6>Apakah Anda Yakin Ingin Menghapus Data <strong class="text-danger"> <?= $nama_obat ?></strong></h6>
                                                            <input type="hidden" class="form-control mb-3" name="id_obat" value="<?= $id_obat ?>">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="hapusobat" class="btn btn-danger"><i class="fas fa-trash me-2"> Delete</i></button>
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
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Obat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php
                        // mencari kode periode dengan nilai paling besar
                        $query = "SELECT max(id_obat) as maxKode FROM obat";
                        $hasil = mysqli_query($conn, $query);
                        $data = mysqli_fetch_array($hasil);
                        $id_obat = $data['maxKode'];
                        // mengambil angka atau bilangan dalam kode anggota terbesar,
                        // dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
                        // misal 'PERI001', akan diambil '001'
                        // setelah substring bilangan diambil lantas dicasting menjadi integer
                        $noUrut = (int) substr($id_obat, 3, 3);

                        // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
                        $noUrut++;

                        // membentuk kode anggota baru
                        // perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
                        // misal sprintf("%03s", 12); maka akan dihasilkan '012'
                        // atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
                        $char = "OBAT";
                        $id_obat = $char . sprintf("%03s", $noUrut);

                        ?>

                        <form action="" method="post">
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="">Nama Obat</label>
                                    <input type="text" name="nama_obat" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Dosis Obat</label>
                                    <input type="text" name="dosis_obat" class="form-control mb-2" />
                                </div>
                                <div class="col-md-6">
                                    <label for="">Cara Pakai</label>
                                    <input type="text" name="cara_pakai" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Ketersediaan Obat</label>
                                    <input type="text" name="ketersediaan_obat" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Expired Date</label>
                                    <input type="date" name="expired_date" class="form-control">
                                </div>

                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="tobat" class="btn btn-primary"><i class="fas fa-folder"></i> Save</button>
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