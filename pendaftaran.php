<?php
// membuat koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "ta_puskesmasbaumata");


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
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- animate CSS -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <!-- themify CSS -->
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- flaticon CSS -->
  <link rel="stylesheet" href="css/flaticon.css">
  <!-- magnific popup CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- nice select CSS -->
  <link rel="stylesheet" href="css/nice-select.css">
  <!-- swiper CSS -->
  <link rel="stylesheet" href="css/slick.css">
  <!-- style CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<!-- Topbar Start -->
<div class="container-fluid d-lg-block p-3" style="background: rgb(75,75,78);
                background: linear-gradient(to bottom, #66ffff 0%, #ffffff 100%);">
  <div class="row text-center">
    <div class="col">
      <img src="img/logobaumata.png" width="250" height="250" class="rounded float-start" style="margin-top: -50px;">
    </div>
    <div class="col">
      <p><img src="img/welcome2.png" width="300" alt=""></p>
      <p>
      <h1 href="#" class="text-warning"> SISTEM INFORMASI PELAYANAN KESEHATAN </h1>
      </p>
      <p>
      <h1 href="#" class="text-dark">PUSKESMAS BAUMATA</h1>
      </p>
    </div>
    <div class="col">
      <img src="img/ntt.png" width="150" height="150" class="rounded float-end mt-4" alt="...">
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
          <li class="nav-item">
            <a class="nav-link" href="pendaftaran.php">Daftar Akun</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="pelayanan.php">informasi Pelayanan</a>
          </li>

          <li class="nav-item dropdown">
            <h4><a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Login
              </a></h4>
            <h4>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a href="admin/login.php" class="dropdown-item">Login Perawat</a>
                <a class="dropdown-item" href="admin/logindokter.php">Login Dokter</a>
                <a class="dropdown-item" href="admin/loginpasien.php">Login Pasien</a>
                <a class="dropdown-item" href="kepala/loginkepala.php">Login kapus</a>
              </div>
            </h4>
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
        <div class="card bg-info animate__animated animate__fadeInUpBig">
          <div class="card-header" style="color: black; text-align: center;"> FORM PENDAFTARAN PASIEN</div>
          <div class="card-body">


            <?php if (isset($_POST['daftar'])) {


              $nama_pasien = $_POST['nama_pasien'];
              $tanggal_lahir = $_POST['tanggal_lahir'];
              $tempat_lahir = $_POST['tempat_lahir'];
              $jenis_kelamin = $_POST['jenis_kelamin'];
              $alamat = $_POST['alamat'];
              $umur = $_POST['umur'];
              $nik  = $_POST['nik'];
              $nomor_telepon = $_POST['nomor_telepon'];

              if (strlen($nik) < 16) {
                echo "<script> alert('nik terlalu pendek'); </script>";
              } elseif (strlen($nik) > 16) {
                echo "<script> alert('nik terlalu panjang'); </script>";
              } else {
                $querydata = mysqli_query($conn, "INSERT INTO pasien VALUES('','$nama_pasien','$tanggal_lahir','$tempat_lahir','$jenis_kelamin','$alamat','$umur','$nik','$nomor_telepon')");
                echo "<script>  alert('data berhasil disimpan'); </script>";
              }
            } ?>

            <form method="post" enctype="multipart/form-data">
              <input type="hidden" class="form-control form-control-lg mb-2" placeholder="masukan nomor regis Anda" name="no_regis" value="<?php echo $kd_kat ?>" readonly>

              <input type="text" class="form-control form-control-lg mb-2" placeholder="masukan nomor Nik Anda" name="nik">

              <input type="text" class="form-control form-control-lg mb-2" placeholder="Masukan Nama pasien Anda" name="nama_pasien">
              <label for="">tanggal lahir</label>
              <input type="date" class="form-control form-control-lg mb-2" placeholder="masukan tanggal lahir Anda" name="tanggal_lahir">
              <input type="text" class="form-control form-control-lg mb-2" placeholder="masukan tempat lahir Anda " name="tempat_lahir">
              <div class="form-check mt-3 mb-3">
                <input class="form-check-input" type="radio" value="Laki-Laki" name="jenis_kelamin" id="jenis_kelamin1">
                <label class="form-check-label" for="jenis_kelamin1">
                  Laki Laki
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Perempuan
                </label>
              </div>
              <input type="text" class="form-control form-control-lg mb-2" placeholder="masukan alamat Anda " name="alamat">
              <input type="text" class="form-control form-control-lg mb-2" placeholder="masukan umur Anda" name="umur">
              <input type="text" class="form-control form-control-lg mb-2" placeholder="Masukan nomor telepon Anda" name="nomor_telepon">

              <input type="hidden" class="form-control form-control-lg mb-2" placeholder="Masukan keterangan pasien" name="keterangan_pasien">
              <input type="hidden" class="form-control form-control-lg mb-2" placeholder="" value="<?php echo date("Y-m-d"); ?>" name="tanggal_daftar" readonly>

              <div class="text-center">
                <button type="submit" class="btn btn-warning" name="daftar">Daftar</button>
              </div>
            </form>
          </div>
        </div>
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

  <script src="js/jquery-1.12.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- owl carousel js -->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <!-- contact js -->
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/contact.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>

</html>