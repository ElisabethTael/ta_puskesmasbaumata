
<?php  

require "./admin/koneksi.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Puskesmas</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/logo puskesmas.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->


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
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">
  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />

</head>
<body>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> 
                      <p class="info-text">
                        JL.SURATIM OESAPA,KEC.KLP.LIMA,KOTA KUPANG, NUSA TENGGARA TIMUR 
                      </p>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->

          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
<!-- Header start -->
<header id="header" class="header-two">
  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                
                <div class="logo">
                    <a class="d-block" href="index.php">
                      <img loading="lazy" src="images/logopus.png" alt="Puskesmas">
                    </a>
                </div><!-- logo end -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav ml-auto align-items-center">
                      <li class="nav-item dropdown active">
                          <a href="index.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="profile.php">Profile</a></li>
                            <li class=""><a href="pendaftaran.php">Pendaftaran</a></li>
                          </ul>
                      </li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Poli <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="">Poli Anak</a></li>
                            <li><a href="">Poli Gigi</a></li>
                            <li><a href="">Unit Bersalin</a></li>
                          </ul>
                      </li>
              
                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tim Medis <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="dokter.php">Dokter</a></li>
                            <li><a href="jadwal_dok.php">Jadwal Dokter</a></li>
                            <li><a href="perawat.php">Perawat</a></li>
                            <li><a href="pegawai.php">Pegawai</a></li>
                          </ul>
                      </li>
              
                      
                      <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pasien <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="data_pasien.php">Data Pasien</a></li>
                          
                          </ul>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Fasilitas Puskesmas<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="data_obat.php">Obat</a></li>
                              <li><a href="">Kendaraan</a></li>
                            </ul>
                        </li>
                        <a href="login.php" class="slider btn btn-primary border text-dark" style="margin-top: -3px;">Login</a>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->

        <!-- isi konten -->
        <div class="container mt-3">
            <i class="fas fa-user mb-5" style="color: dark; margin-right: 3px;">
                    Data Antrian Pasien Puskesmas
                </i>
            <p>
            <h6 style="font-size: 13px; color:crimson;">Cari Nama Anda Untuk Melakukan Cetak Nomer Regis</h6>
            </p>
            </div>
                <div class="container">
                <table id="example" class="display" border="1px solid black">
                    <thead>
                        <tr class="bg-secondary text-white" style="font-size: 10px;">
                            <th>NO</th>
                            <th>NOMER REGIS</th>
                            <th>NAMA PASIEN</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 0;
                    $lihatjadwal = mysqli_query($conn, "SELECT * from pasien order by no_regis DESC");
                        while($data=mysqli_fetch_assoc($lihatjadwal)){
                            $no++;
                          
                            $nama_pasien=$data['nama_pasien'];
                            ?>
                            <tr style="font-size: 11px;">
                            <td><?=$no?></td>
                                <td><?= $data['no_regis'];?></td>
                                <td><?=$data['no_regis']; ?></td>
                                <td>
                                   <button class="btn btn-success btn-sm mb-3" data-target="#detail<??>" data-toggle="modal" title="Detail"><i class="fas fa-print"></i></button> 
                                </td>
                            </tr>
                             <!-- Modal -->
                             <div class="modal fade" id="detail<?=$data['no_regis']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title" style="font-size: 20px;" id="staticBackdropLabel">Cetak Nomer Regis</h1>
                                  </div>
                                  <div class="modal-body">
                                    <div class="container">
                                      <h6>Apa Anda Ingin Mencetak No Antrian <strong class="text-danger"><?=$nama_pasien;?></strong></h6>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="cetak_regis.php?no_regis= <?php echo $data['no_regis']; ?>" target="_blank" name="no_regis"><button class="btn btn-primary"><i class="mr-2 fa fa-print"></i>Cetak</button></a> 
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                    <a href="index.php">
                      <button class="btn btn-warning btn-sm" style="align-self: right;"><i class="fas fa-reply"> Back Home</i>
                    </button></a>
                </div>
        <!-- akhir konten -->
                      
<br>
<br>
<br>
<br>
  <footer id="footer" class="footer bg-overlay">
    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="copyright-info text-center">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>,  <a href="#">Puskesmas Oespa Kupang</a></span>
            </div>
          </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->



  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
    $('#example').DataTable({

    });
});
</script>
  </div><!-- Body inner end -->
  </body>

  </html>