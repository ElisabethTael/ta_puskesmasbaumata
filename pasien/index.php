<?php
// membuat koneksi ke database
include 'koneksi.php';

session_start();


$id_pasien = $_SESSION['pasien'];


$ambilpasienid = mysqli_query($conn, "SELECT * FROM pasien WHERE id_pasien ='$id_pasien'");
$ambilpasiendata = mysqli_query($conn, "SELECT * FROM pasien WHERE id_pasien ='$id_pasien'");

$pasiendata = mysqli_fetch_assoc($ambilpasiendata);

?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PUSKESMAS BAUMATA</title>
    <link rel="icon" href="img/logobaumata.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="../css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="../css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="../css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="../css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<!-- Topbar Start -->
<div class="container-fluid d-lg-block p-3" style="background: rgb(75,75,78);
                background: linear-gradient(to bottom, #66ffff 0%, #ffffff 100%);">
    <div class="row text-center">
        <div class="col">
            <img src="../img/logobaumata.png" width="250" height="250" class="rounded float-start" style="margin-top: -50px;">
        </div>
        <div class="col">
            <p><img src="../img/welcome2.png" width="300" alt=""></p>
            <p>
            <h1 href="#" class="text-warning"> SISTEM INFORMASI PELAYANAN KESEHATAN </h1>
            </p>
            <p>
            <h1 href="#" class="text-dark">PUSKESMAS BAUMATA</h1>
            </p>
        </div>
        <div class="col">
            <img src="../img/ntt.png" width="150" height="150" class="rounded float-end mt-4" alt="...">
        </div>
    </div>
</div>
<!-- Topbar End -->

<body>
    <!--::header part start::-->


    <div class="col-lg-12">
        <nav class="navbar navbar-expand-lg navbar-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse main-menu-item justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="berobat.php">Berobat</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Informasi Pelayanan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php">Data Pasien</a>
                            <a class="dropdown-item" href="datadokter.php">Data Dokter</a>
                            <a class="dropdown-item" href="dataperawat.php">Data Perawat</a>
                            <a class="dropdown-item" href="datapoli.php">Data Poli</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="" data-toggle="modal" data-target="#logoutmodal">Log Out</a>
                    </li>





                </ul>

            </div>
            <div class="modal fade" id="logoutmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Log Out </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h6>klik log out untuk keluar </h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="logoutpasien.php" type="button" class="btn btn-primary">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>

        </nav>
    </div>
    <div class="container-fluid">
        <div class="row">

            <div class="col-12 col-md-4">
                <div class="card">
                    <form action=" method=" post" enctype="multipart/form-data">
                        <div class="card-header">
                            <h4 class="card-title">Halaman Utama</h4>
                        </div>

                        <div class=" card-body text-center">
                            <marquee scrollamount="5" direction="right">
                                <h6>Selamat Datang <?php echo $pasiendata['nama_pasien']; ?></h6>
                            </marquee>

                        </div>
                        <div class="card-footer">
                            <marquee direction="up" height="150">
                                <h3 class="text-center"></h3>
                            </marquee><br>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-8">

                <form action="" method="post">
                    <?php while ($data = mysqli_fetch_assoc($ambilpasienid)) {
                        # code...
                    ?>
                        <div class="card">
                            <div class="card-body border-top py-0 my-3">
                                <h4 class="text-muted my-3">Profil</h4>

                                <div class="row">
                                    <div class="col-xs-6 col-sm-6">
                                        <input type="hidden" name="id_pasien" value="<?= $data['id_pasien']; ?>" id="">
                                        <div class="form-group">
                                            <label for="nip">Nama : </label>
                                            <input type="hidden" name="nip" value="">
                                            <input type="text" name="" id="nip" value="<?= $data['nama_pasien']; ?>" class="form-control" placeholder="Masukan NIP Karyawan" required="reuqired" readonly />
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 ">
                                        <div class="form-group">
                                            <label for="email">Nip : </label>
                                            <input type="email" name="" id="email" value="<?= $data['nik']; ?>" class="form-control" placeholder="Masukan Email" required="reuqired" readonly />
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label for="nama">Nama Lengkap : </label>
                                            <input type="text" name="nama" id="nama" value="<?= $data['nama_pasien']; ?>" class="form-control" placeholder="Masukana Nama Lengkap Karyawan" required="reuqired" />
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 ">
                                        <div class="form-group">
                                            <label for="telp">Nik : </label>
                                            <input type="text" name="nik" id="telp" value="<?= $data['nik']; ?>" class="form-control" placeholder="Masukan No. Telp" required="reuqired" />
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
                                            <label for="telp">Umur : </label>
                                            <input type="text" name="umur" id="telp" value="<?= $data['umur']; ?>" class="form-control" placeholder="Masukan tempat lahir" required="reuqired" />
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 ">
                                        <div class="form-group">
                                            <label for="telp">Nomor Telepon : </label>
                                            <input type="text" name="nomor_telepon" id="telp" value="<?= $data['nomor_telepon']; ?>" class="form-control" placeholder="Masukan tempat lahir" required="reuqired" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="row w-100">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                        <button style="float: right;" type="submit" name="editprofil" class="btn btn-primary btn-block">Simpan <i class="fa fa-save"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php   } ?>
                </form>


            </div>
        </div>

    </div>
    </header>
    <!-- Header part end-->

    <!-- Contact Start -->
    <div class="container-fluid contact position-relative px-5" style="margin-top: 90px;">
        <div class="container">
            <div class="row g-5 mb-5">

            </div>
            <div class="container mt-3">

            </div>
        </div>
    </div>
    <!-- Contact End -->



    <!--   <!-- footer part start-->
    <footer class="footer-area">
        <div class="footer section_padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-md-2 col-sm-6 single-footer-widget">

                        <h4>Puskesmas Baumata </h4>
                        <p>Jl. Taebenu, KM 13 Baumata,Kecamatan Baumata, Kabupaten Kupang, Nusa Tenggara Timur </p>
                        <div class="social_logo">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"> <i class="ti-twitter"></i> </a>
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-skype"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4>Jam Pelayanan Puskesmas </h4> Senin - sabtu 08.00 - 12.00 </h4>
                        </h4>
                        <ul>
                            <li><a href="#">melayani terpadu dan sungguh</a></li>

                        </ul>
                    </div>



                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
                            <button class="click-btn btn btn-default text-uppercase"> <i class="ti-angle-right"></i>
                            </button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="copyright_part">
            <div class="container">
                <div class="row align-items-center">
                    <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">puskesmasbaumata</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                    <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"> <i class="ti-twitter"></i> </a>
                        <a href="#"><i class="ti-instagram"></i></a>
                        <a href="#"><i class="ti-skype"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer part end-->

    <!-- jquery plugins here-->

    <script src="../js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="../js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/jquery.form.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/mail-script.js"></script>
    <script src="../js/contact.js"></script>
    <!-- custom js -->
    <script src="../js/custom.js"></script>
</body>

</html>