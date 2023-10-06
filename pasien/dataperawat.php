<?php
// membuat koneksi ke database
$conn = mysqli_connect("localhost", "flyupid_ta_puskesmasbaumata", "pB031023_", "flyupid_ta_puskesmasbaumata");
session_start();
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
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">

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



                </ul>
            </div>

        </nav>
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

                <!-- Button trigger modal -->
                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php

                            // mengambil data barang dengan kode paling besar
                            $bln = date("Y");

                            $query = mysqli_query($conn, "SELECT max(no_regis) as kodeTerbesar FROM regis WHERE year(tanggal_regis)='$bln' ");
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
                            $huruf = "RG-";
                            $kodeBarang = $huruf . sprintf("%03s", $urutan) . "-" . $hari;
                            $id_pass = $_SESSION['pasien'];

                            $amepasien = mysqli_query($conn, "SELECT * FROM pasien WHERE id_pasien ='$id_pass' ");
                            $ftc = mysqli_fetch_assoc($amepasien);

                            ?>
                            <form action="" method="post">
                                <div class="modal-body">
                                    <?php
                                    if (isset($_POST['simpan'])) {
                                        $id_pasi = $_POST['id_pasien'];
                                        $nomor_regis = $_POST['nomor_regis'];
                                        $tanggal_regis = $_POST['tanggal_regis'];
                                        $keterangan = $_POST['keterangan'];

                                        $query = mysqli_query($conn, "INSERT INTO regis VALUES('','$nomor_regis','$keterangan','$tanggal_regis','','','$id_pasi','')");

                                        if ($query) {

                                            echo "<script> alert('data berhasil disimpan'); </script>";
                                        } else {
                                            echo "<script> alert('data gagal disimpan'); </script>";
                                        }
                                    }


                                    ?>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Nomor Regis</label>
                                            <input type="text" name="nomor_regis" value="<?php echo $kodeBarang
                                                                                            ?>" readonly class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Tanggal Daftar </label>
                                            <input type="text" name="tanggal_regis" value="<?php echo date('Y/m/d'); ?>" class="form-control" id="inputPassword4" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="id_pasien" value="<?php echo $ftc['id_pasien']; ?>" id="">
                                        <label for="inputAddress">nama pasien </label>
                                        <input type="text" name="nama_pasien" value="<?php echo $ftc['nama_pasien']; ?>" class="form-control" id="inputAddress" readonly placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Keterangan Pasien</label>
                                        <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal </button>
                                    <button type="submit" name="simpan" class="btn btn-primary">Simpan </button>
                                </div>
                            </form>
                        </div>


                    </div>

                </div>
            </div>

            <table class="table">
                <label for=""> Data Perawat</label>
                <thead>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">nama</th>
                        <th>tempat lahir </th>

                        <th scope="col">tanggal lahir</th>
                        <th scope="col">jenis kelamin</th>
                        <th scope="col">no telepon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $dtpas = $_SESSION['pasien'];
                    $i = 1;
                    $ambilpasien = mysqli_query($conn, "SELECT * FROM perawat ");

                    while ($dt = mysqli_fetch_assoc($ambilpasien)) {
                    ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?php echo $dt['nama_perawat']; ?></td>
                            <td><?php echo $dt['tempat_lahir'] ?></td>
                            <td><?php echo $dt['tanggal_lahir']; ?></td>
                            <td> <?php echo $dt['jenis_kelamin']; ?> </td>
                            <td>
                                <?php echo $dt['no_telepon']; ?>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="editregis<?php echo $dt['id_regis'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php

                                    // mengambil data barang dengan kode paling besar
                                    $bln = date("Y");

                                    $query = mysqli_query($conn, "SELECT max(no_regis) as kodeTerbesar FROM regis WHERE year(tanggal_regis)='$bln' ");
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
                                    $huruf = "RG-";
                                    $kodeBarang = $huruf . sprintf("%03s", $urutan) . "-" . $hari;
                                    $id_pass = $_SESSION['pasien'];

                                    $amepasien = mysqli_query($conn, "SELECT * FROM pasien WHERE id_pasien ='$id_pass' ");
                                    $ftc = mysqli_fetch_assoc($amepasien);

                                    ?>
                                    <form action="" method="post">
                                        <div class="modal-body">
                                            <?php
                                            if (isset($_POST['simpan'])) {
                                                $id_pasi = $_POST['id_pasien'];
                                                $nomor_regis = $_POST['nomor_regis'];
                                                $tanggal_regis = $_POST['tanggal_regis'];
                                                $keterangan = $_POST['keterangan'];

                                                $query = mysqli_query($conn, "INSERT INTO regis VALUES('','$nomor_regis','$keterangan','$tanggal_regis','','','$id_pasi','')");

                                                if ($query) {

                                                    echo "<script> alert('data berhasil disimpan'); </script>";
                                                } else {
                                                    echo "<script> alert('data gagal disimpan'); </script>";
                                                }
                                            }


                                            ?>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Nomor Regis</label>
                                                    <input type="text" name="nomor_regis" value="<?php echo $dt['id_regis'];
                                                                                                    ?>" readonly class="form-control" id="inputEmail4">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Tanggal Daftar </label>
                                                    <input type="text" name="tanggal_regis" value="<?php echo date('Y/m/d'); ?>" class="form-control" id="inputPassword4" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="id_pasien" value="<?php echo $ftc['id_pasien']; ?>" id="">
                                                <label for="inputAddress">nama pasien </label>
                                                <input type="text" name="nama_pasien" value="<?php echo $ftc['nama_pasien']; ?>" class="form-control" id="inputAddress" readonly placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Keterangan Pasien</label>
                                                <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $dt['keterangan_pasien']; ?></textarea>
                                            </div>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal </button>
                                            <button type="submit" name="simpan" class="btn btn-primary">Simpan </button>
                                        </div>
                                    </form>
                                </div>


                            </div>

                        </div>



                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <!-- Contact End -->



    <!-- footer part start-->
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