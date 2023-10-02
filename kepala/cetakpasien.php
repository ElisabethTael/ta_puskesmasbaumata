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
                    <th>Nama Pasien</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $i = 0;
                $ambildataperawat = mysqli_query($conn, "SELECT * FROM  pasien  ");
                while ($data = mysqli_fetch_array($ambildataperawat)) {
                    $i++;
                    $id_pasien = $data['id_pasien'];

                    $nama_pasien = $data['nama_pasien'];
                    $tempat_lahir = $data['tempat_lahir'];
                    $tanggal_lahir = $data['tanggal_lahir'];
                    $jenis_kelamin = $data['jenis_kelamin'];

                    $alamat = $data['alamat'];

                    $no_telepon = $data['nomor_telepon'];
                ?>
                    <tr>

                        <td><?= $i ?></td>
                        <td><?= $nama_pasien ?></td>
                        <td><?= $tempat_lahir ?></td>
                        <td><?= $tanggal_lahir ?></td>
                        <td><?= $jenis_kelamin ?></td>
                        <td><?= $alamat ?></td>
                        <td><?= $no_telepon ?></td>
                    </tr>

                    <!-- Pasien Edit-->
                    <div class="modal fade" id="edit<?= $id_regis ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Proses Pasien </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="pasien_id" value="<?php echo $id_pasien ?>">
                                        <input type="hidden" name="perawat_id" value="<?php echo $fetch['id_perawat']; ?>">
                                        <input class="form-control mb-3" type="text" name="nama_perawat" value="<?= $nama_pasien ?>">
                                        <input class="form-control mb-3" type="text" name="tempat_lahir" value="<?= $keterangan ?>">
                                        <input class="form-control mb-3" type="text" name="tanggal_lahir" value="<?= $tanggal_lahir ?>">
                                        <input class="form-control mb-3" type="text" name="jenis_kelamin" value="<?= $jenis_kelamin ?>">
                                        <input class="form-control mb-3" type="text" name="alamat" value="<?= $alamat ?>">
                                        <input class="form-control mb-3" type="text" name="no_telepon" value="<?= $no_telepon ?>">
                                        <input type="hidden" class="form-control mb-3" name="id_regis" value="<?= $id_regis ?>">

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">data dokter </label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="id_poli">

                                                <?php $datapoli = mysqli_query($conn, "SELECT  * FROM poli JOIN dokter ON dokter.id_poli = poli.id_poli");
                                                while ($polidata = mysqli_fetch_assoc($datapoli)) {
                                                    # code...
                                                ?>
                                                    <option value="<?php echo $polidata['id_poli']; ?>"><?php echo $polidata['nama_poli'] ?> && <?php echo $polidata['jenis_dokter'] ?> && <?php echo $polidata['nama_dokter'] ?></option>
                                                <?php }  ?>
                                            </select>
                                        </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="editpasien" class="btn btn-primary">Save</button>
                                </div>
                                </form>

                                <?php if (isset($_POST['editpasien'])) {

                                    $id_poli = $_POST['id_poli'];
                                    $id_pass = $_POST['id_regis'];
                                    $id_perawatt = $_POST['perawat_id'];

                                    $prosespasien = mysqli_query($conn, "UPDATE regis  SET id_poli = '$id_poli', id_perawat = '$id_perawatt'  WHERE id_regis ='$id_pass' ");
                                    if ($prosespasien) {
                                        echo '<script type="text/javascript">alert("Pasien Berhasil  Diproses");</script>';
                                        echo "<script>location= 'prosespasien.php'</script>";
                                    }
                                }  ?>
                            </div>
                        </div>
                    </div>
                    <!-- Perawat Hapus-->
                    <div class="modal fade" id="hapus<?= $id_perawat ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <h6>Apakah Anda Yakin Ingin Menghapus Data <strong class="text-danger"> <?= $nama_perawat ?></strong></h6>
                                        <input type="hidden" class="form-control mb-3" name="nama_perawat" value="<?= $nama_perawat ?>">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="hapusperawat" class="btn btn-danger"><i class="fas fa-trash me-2"> Delete</i></button>
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