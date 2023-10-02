<?php
 require "koneksi.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logontt.png" rel="icon">
  <title>Admin Biro Umum Setda NTT</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="img/logontt.png">
        </div>
        <div class="sidebar-brand-text mx-3">Biro Umum Setda NTT</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>+ Data</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="pegawai.php">Pegawai</a>
            <a class="collapse-item" href="buttons.html">Pemohon Ambil Beras</a>
            <a class="collapse-item" href="dropdowns.html">Pengambilanberas</a>
            <a class="collapse-item" href="stokberas.php">Stok Beras</a>
            <a class="collapse-item" href="jadwalambil.php">Jadwal Pengambilan</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Lihat Data</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="permohonanberas.php">Pemohon ambil Beras</a>
        
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <hr class="sidebar-divider">
      
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Maman Ketoprak</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Jadwal Ambil</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Jadwal</li>
            </ol>
          </div>
            
        <div class="row">
            <div class="card col-12 mt-2">
                <div class="card-body">
               <div class="text-right">
               <button type="button" class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#staticBackdrop"><i class="fas fa-plus"></i> Insert</button>
               </div>
                <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Jadwal</th>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 0;
                $ambildatajadwal = mysqli_query($conn, "select * from jadwalberas");
                    while($data=mysqli_fetch_array($ambildatajadwal)){
                        $i++;
                        $id_jadwal            = $data['id_jadwal'];
                        $hari                 = $data['hari'];
                        $tanggal              = $data['tanggal'];
                        $jam                  = $data['jam'];
                        
                ?>
                <tr>
                        <td><?=$i?></td>
                        <td><?=$id_jadwal?></td>
                        <td><?=$hari?></td>
                        <td><?=$tanggal?></td>
                        <td><?=$jam?></td>
                        <td>
                            <button class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#edit<?=$id_jadwal?>">
                                <i class="fas fa-pen"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-sm mb-2" data-toggle="modal" data-target="#hapus<?=$id_jadwal?>">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- modal edit -->
                    <div class="modal fade" id="edit<?=$id_jadwal?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" style="max-width: 800px;">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post">
                        <div class="modal-body">
                         <form action="" method="post">
                         <div class="row">
                             <div class="col-md-6">
                                 <label for="">ID Jadwal</label>
                             <input type="text"  name="id_jadwal" value="<?php echo $id_jadwal?>" class="form-control mb-2" readonly />
                             </div>
                             <div class="col-md-6">
                                 <label for="">Hari</label>
                                 <input type="text" name="hari" class="form-control" value="<?=$hari?>">
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-6">
                                 <label for="">Tanggal</label>
                             <input type="text"  name="tanggal" class="form-control mb-2" value="<?=$tanggal?>" />
                             </div>
                             <div class="col-md-6">
                                 <label for="">Jam</label>
                                 <input type="text" name="jam" class="form-control" value="<?=$jam?>">
                             </div>
                         </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            <button type="submit" name="editjadwal" class="btn btn-primary"><i class="fas fa-check"></i> Simpan</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
                    <!-- akhir edit -->
               
                    <!-- Modal hapus-->
                    <div class="modal fade" id="hapus<?=$id_jadwal?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="" method="post">
                        <div class="modal-body">
                            <h6>Apaakah Anda Ingin Menghapus Tanggal Pengambilan <span class="text-warning"> <?=$tanggal?> </span> ?</h6>
                            <input type="hidden" name="id_jadwal" value="<?=$id_jadwal?>">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            <button type="submit" name="deljadwal" class="btn btn-primary"><i class="fas fa-check"></i> Ya</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
                   <!-- akhir hapus -->
                 </tbody>
                    <?php } ?>
            </table>
                </div>
                </div>
            </div>
    </div>
    
          <!--Row-->
          <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog" style="max-width: 800px;">
             <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="staticBackdropLabel">Modal Tambah Data</h5>
             </div>
             <div class="modal-body">
             <?php
                 // mencari kode Pegawai dengan nilai paling besar
                 $query = "SELECT max(id_jadwal) as maxKode FROM jadwalberas";
                 $hasil = mysqli_query($conn,$query);
                 $data = mysqli_fetch_array($hasil);
                 $id_jadwal = $data['maxKode'];
                 // mengambil angka atau bilangan dalam kode anggota terbesar,
                 // dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
                 // misal 'PERI001', akan diambil '001'
                 // setelah substring bilangan diambil lantas dicasting menjadi integer
                 $noUrut = (int) substr($id_jadwal, 3, 3);
  
                 // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
                 $noUrut++;
  
                 // membentuk kode anggota baru
                 // perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
                 // misal sprintf("%03s", 12); maka akan dihasilkan '012'
                 // atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
                 $char = "J";
                 $id_jadwal = $char . sprintf("%03s", $noUrut);
                         
             ?>
                         <form action="" method="post">
                         <div class="row">
                             <div class="col-md-6">
                                 <label for="">ID Jadwal</label>
                             <input type="text"  name="id_jadwal" value="<?php echo $id_jadwal?>" class="form-control mb-2" readonly />
                             </div>
                             <div class="col-md-6">
                                 <label for="">Hari</label>
                                 <input type="text" name="hari" class="form-control">
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-6">
                                 <label for="">Tanggal</label>
                             <input type="text"  name="tanggal" class="form-control mb-2" />
                             </div>
                             <div class="col-md-6">
                                 <label for="">Jam</label>
                                 <input type="text" name="jam" class="form-control">
                             </div>
                         </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="submit" name="addjadwal" class="btn btn-primary"><i class="fas fa-folder"></i> Save</button>
             </div>
             </form>
             </div>
         </div>
         </div>
          

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto py-2">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> -by
              <b><a href="https://themewagon.com/" target="_blank">Biro Umum Setda NTT</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  
</body>

</html>