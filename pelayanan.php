<?php
require "./admin/koneksi.php";

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
      <h1 href="#" class="text-danger"> SISTEM INFORMASI PELAYANAN KESEHATAN </h1>
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


  <div class="row align-items-center">
    <div class="col-lg-12">
      <nav class="navbar navbar-expand-lg navbar-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse main-menu-item justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item active">
              <h4><a class="nav-link" href="index.php">Home</a></h4>
            </li>
            <li class="nav-item">
              <h4> <a class="nav-link" href="pendaftaran.php">Daftar Akun</a></h4>
            </li>
            <li class="nav-item dropdown">
              <h4><a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Informasi Pelayanan
                </a></h4>
              <h4>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="pelayanan.php">Jenis dan Jadwal Pelayanan</a>
                </div>
              </h4>
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
            <li class="nav-item">

            </li>
          </ul>
        </div>

      </nav>
    </div>
  </div>
  </div>
  </header>
  <!-- Header part end-->
  <!--::doctor_part start::-->
  <section class="doctor_part single_page_doctor_part">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <div class="section_tittle text-center">
            <h2> Jenis dan Jadwal Pelayanan</h2>
          </div>
        </div>
      </div>



      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Jenis Pelayanan</th>
            <th scope="col">Penanggungjawab</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Pelayanan Promkes</td>
            <td>Bruno Meo A.Md Kep</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Pelayanan Kesling</td>
            <td>Servasius Budiman, SKM</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Pelayanan KIA/KB</td>
            <td>Beatrix Bunga A.Md Keb</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Pelayanan Pelayanan Gizi</td>
            <td>Bruno Meo A.Md Kep</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Pelayanan P2P</td>
            <td>Agustina Dea Lae, SKM</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Pelayanan Perkesmas</td>
            <td>Olivia R.Y Senge A.Md.Kep</td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Pelayanan Gizi Masyarakat</td>
            <td>Elisabeth Hae Tada</td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Pelayanan Kesehatan Uslia</td>
            <td>Omega D. Simanjuntak</td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td>Pelayanan Kesehatan Jiwa</td>
            <td>Omega D. Simanjuntak</td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>Pelayanan Kesehatan Tradisional</td>
            <td>Omega D. Simanjuntak</td>
          </tr>
          <tr>
            <th scope="row">11</th>
            <td>Pelayanan Kesehatan Olahraga</td>
            <td>Olivia R.Y Senge A.Md. Kep</td>
          </tr>
          <tr>
            <th scope="row">12</th>
            <td>Pelayanan Kesehatan Terpadu / Posbindu</td>
            <td>Olivia R.Y Senge A.Md. Kep</td>
          </tr>
          <tr>
            <th scope="row">13</th>
            <td>Pelayanan Pemeriksaan Umum</td>
            <td>Dr. Maria F.I Mathaus</td>
          </tr>
          <tr>
            <th scope="row">13</th>
            <td>Pelayanan Kesehatan Gigi dan Mulut</td>
            <td>Merry Loeloe A.Md.Kg</td>
          </tr>
          <tr>
            <th scope="row">14</th>
            <td>Pelayanan KIA/KB</td>
            <td>Yustina Biri Ola A.Md. Keb</td>
          </tr>
          <tr>
            <th scope="row">15</th>
            <td>Pelayanan Gawat Darurat</td>
            <td>Dr. Maria F.I Mathaus</td>
          </tr>
          <tr>
            <th scope="row">16</th>
            <td>Pelayanan Gizi</td>
            <td>Bruno Meo A.Md Kep</td>
          </tr>
          <tr>
            <th scope="row">17</th>
            <td>Pelayanan Gizi</td>
            <td>Bruno Meo A.Md Kep</td>
          </tr>
          <tr>
            <th scope="row">18</th>
            <td>Pelayanan Persalinan</td>
            <td>Lusia Kidi Masam A.Md Keb</td>
          </tr>
          <tr>
            <th scope="row">19</th>
            <td>Pelayanan Kefarmasian</td>
            <td>Maria E.B.B Horang, S.Farm. Apt</td>
          </tr>
          <tr>
            <th scope="row">20</th>
            <td>Pelayanan Laboratorium</td>
            <td>Maria R.Kollo A.Md. AK</td>
          </tr>
          <tr>





        </tbody>
      </table>

      <table class="table table-sm table-primary">
        <thead>
          <tr>
            <th scope="col">Jadwal Pelayanan</th>
            <th scope="col">Senin - Sabtu</th>
            <th scope="col">jam pelayanan 08.00 - 12.00</th>
            <th scope="col">pelayanan selalu siap untuk semua kalangan masyarakat </th>
          </tr>
      </table>

    </div>
    </div>
  </section>
  <!--::doctor_part end::-->










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