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

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="table-responsive p-3">
        <table class="table align-items-center table-bordered" id="dataTable">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>

                    <th>NIP</th>
                    <th>Nama Dokter</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>

                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Foto</th>

                </tr>
            </thead>
            <tbody>
                <?php

                $i = 0;
                $ambildatadokter = mysqli_query($conn, "select * from dokter");
                while ($data = mysqli_fetch_array($ambildatadokter)) {
                    $i++;
                    $id_dokter = $data['id_dokter'];
                    $nip = $data['nip'];
                    $nama_dokter = $data['nama_dokter'];
                    $tempat_lahir = $data['tempat_lahir'];
                    $tanggal_lahir = $data['tanggal_lahir'];
                    $jenis_kelamin = $data['jenis_kelamin'];
                    $jabatan = $data['jabatan'];
                    $agama = $data['agama'];
                    $alamat = $data['alamat'];
                    $no_telepon = $data['no_telepon'];
                    $id_poli = $data['id_poli'];
                    $file = $data['file'];




                ?>
                    <tr>

                        <td><?= $i ?></td>
                        <td><?= $nip ?></td>
                        <td><?= $nama_dokter ?></td>
                        <td><?= $tempat_lahir ?></td>
                        <td><?= $tanggal_lahir ?></td>
                        <td><?= $alamat ?></td>
                        <td><?= $no_telepon ?></td>

                        <td><img src="../admin/filedokter/<?= $data['file']; ?>" width="50"></td>


                    </tr>

                    <!-- modal edit -->
                    <div class="modal fade" id="edit<?= $id_dokter ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog" style="max-width: 800px;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Edit Dokter</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="">ID Dokter</label>
                                                    <input type="text" name="id_dokter" value="<?php echo $id_dokter ?>" class="form-control mb-2" readonly />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">NIP</label>
                                                    <input type="text" name="nip" class="form-control" value="<?= $nip ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="">Nama Dokter</label>
                                                    <input type="text" name="nama_dokter" class="form-control mb-2" value="<?= $nama_dokter ?>" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Tempat Lahir</label>
                                                    <input type="text" name="tempat_lahir" class="form-control" value="<?= $tempat_lahir ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Tanggal Lahir</label>
                                                    <input type="date" name="tanggal_lahir" class="form-control" value="<?= $tanggal_lahir ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Jenis Kelamin</label>
                                                    <input type="text" name="jenis_kelamin" class="form-control" value="<?= $jenis_kelamin ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Jabatan</label>
                                                    <input type="text" name="jabatan" class="form-control" value="<?= $jabatan ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Agama</label>
                                                    <input type="text" name="agama" class="form-control" value="<?= $agama ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Alamat</label>
                                                    <input type="text" name="alamat" class="form-control" value="<?= $alamat ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Nomor Telepon</label>
                                                    <input type="text" name="no_telepon" class="form-control" value="<?= $no_telepon ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">ID Poli</label>
                                                    <input type="text" name="id_poli" class="form-control" value="<?= $id_poli ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Foto Dokter</label>
                                                    <input type="file" name="file" class="form-control">
                                                    <input type="text" name="gambarlama" value="<?= $file ?>">
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                        <button type="submit" name="editdokter" class="btn btn-primary"><i class="fas fa-check"></i> Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- akhir edit -->
                    <!-- Hapius Dokter-->
                    <div class="modal fade" id="hapus<?= $id_dokter ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <h6>Apakah Anda Yakin Ingin Menghapus Data <strong class="text-danger"> <?= $nama_dokter ?></strong></h6>
                                        <input type="hidden" class="form-control mb-3" name="nama_dokter" value="<?= $nama_dokter ?>">
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


</body>
<script>
    window.print()
</script>
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="assets/js/pages/dashboard-main.js"></script>

</html>