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
                            <span>Semry Kanaraja</span>
                            <div id="more-details">KAPUS</div>
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
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">LIHAT DATA</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="datapasien.php">Data Pasien</a></li>
                            <li><a href="t_dokter.php">Data Dokter</a></li>
                            <li><a href="t_perawat.php">Data Perawat</a></li>
                            <li><a href="t_poli.php">Data Poli</a></li>
                            <li><a href="t_obat.php">Data Obat</a></li>
                        </ul>
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
                                <img src="assets/images/user/avatarlogin.png" class="img-radius" alt="User-Profile-Image">
                                <span>Semry Kanaraja</span>
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
                <h1 class="h3 mb-0 text-gray-800">Data Poli</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Poli</li>
                </ol>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                        </div>
                        <div class="table-responsive p-3">
                            <table class="table align-items-center table-bordered" id="dataTable">
                                <a class="btn btn-primary mb-2" href="cetakpoli.php">Cetak Poli</a>
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>ID Poli</th>
                                        <th>Nama Poli</th>
                                        <th>Jenis Dokter</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $i = 0;
                                    $ambildatapoli = mysqli_query($conn, "select * from poli");
                                    while ($data = mysqli_fetch_array($ambildatapoli)) {
                                        $i++;
                                        $id_poli = $data['id_poli'];
                                        $nama_poli = $data['nama_poli'];
                                        $jenis_dokter = $data['jenis_dokter'];




                                    ?>
                                        <tr>

                                            <td><?= $i ?></td>
                                            <td><?= $id_poli ?></td>
                                            <td><?= $nama_poli ?></td>
                                            <td><?= $jenis_dokter ?></td>


                                        </tr>

                                        <!-- Poli Edit-->
                                        <div class="modal fade" id="edit<?= $id_poli ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Poli</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" enctype="multipart/form-data">
                                                            <input class="form-control mb-3" type="text" name="nama_poli" value="<?= $nama_poli ?>">
                                                            <input class="form-control mb-3" type="text" name="jenis_dokter" value="<?= $jenis_dokter ?>">
                                                            <input type="hidden" class="form-control mb-3" name="id_poli" value="<?= $id_poli ?>">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="editpoli" class="btn btn-primary">Save</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Hapius Poli-->
                                        <div class="modal fade" id="hapus<?= $id_poli ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            <h6>Apakah Anda Yakin Ingin Menghapus Data <strong class="text-danger"> <?= $nama_poli ?></strong></h6>
                                                            <input type="hidden" class="form-control mb-3" name="nama_poli" value="<?= $nama_poli ?>">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="hapuspoli" class="btn btn-danger"><i class="fas fa-trash me-2"> Delete</i></button>
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
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Poli</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php
                        // mencari kode periode dengan nilai paling besar
                        $query = "SELECT max(id_poli) as maxKode FROM poli";
                        $hasil = mysqli_query($conn, $query);
                        $data = mysqli_fetch_array($hasil);
                        $id_poli = $data['maxKode'];
                        // mengambil angka atau bilangan dalam kode anggota terbesar,
                        // dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
                        // misal 'PERI001', akan diambil '001'
                        // setelah substring bilangan diambil lantas dicasting menjadi integer
                        $noUrut = (int) substr($id_poli, 3, 3);

                        // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
                        $noUrut++;

                        // membentuk kode anggota baru
                        // perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
                        // misal sprintf("%03s", 12); maka akan dihasilkan '012'
                        // atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
                        $char = "PERAWAT";
                        $id_poli = $char . sprintf("%03s", $noUrut);

                        ?>


                        <form method="POST" enctype="multipart/form-data">
                            <input type="text" name="id_poli" value="<?php echo $id_poli ?>" class="form-control mb-2" readonly />
                            <input type="text" class="form-control mb-3" placeholder="Masukan Nama Poli..." name="nama_poli" required />
                            <input type="text" class="form-control mb-3" placeholder="Masukan Jenis Dokter..." name="jenis_dokter" required />

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                        <button type="submit" name="tpoli" class="btn btn-primary">Save</button>
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