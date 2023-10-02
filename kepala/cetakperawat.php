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
                    <th>Nama Perawat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>


                </tr>
            </thead>
            <tbody>
                <?php

                $i = 0;
                $ambildataperawat = mysqli_query($conn, "select * from perawat");
                while ($data = mysqli_fetch_array($ambildataperawat)) {
                    $i++;
                    $id_perawat = $data['id_perawat'];
                    $nama_perawat = $data['nama_perawat'];
                    $tempat_lahir = $data['tempat_lahir'];
                    $tanggal_lahir = $data['tanggal_lahir'];
                    $jenis_kelamin = $data['jenis_kelamin'];
                    $agama = $data['agama'];
                    $alamat = $data['alamat'];
                    $no_telepon = $data['no_telepon'];
                    $file = $data['file'];




                ?>
                    <tr>

                        <td><?= $i ?></td>

                        <td><?= $nama_perawat ?></td>
                        <td><?= $tempat_lahir ?></td>
                        <td><?= $tanggal_lahir ?></td>

                        <td><?= $agama ?></td>
                        <td><?= $alamat ?></td>
                        <td><?= $no_telepon ?></td>


                    </tr>

                    <!-- Perawat Edit-->
                    <div class="modal fade" id="edit<?= $id_perawat ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Perawat</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        <input class="form-control mb-3" type="text" name="nama_perawat" value="<?= $nama_perawat ?>">
                                        <input class="form-control mb-3" type="text" name="tempat_lahir" value="<?= $tempat_lahir ?>">
                                        <input class="form-control mb-3" type="text" name="tanggal_lahir" value="<?= $tanggal_lahir ?>">
                                        <input class="form-control mb-3" type="text" name="jenis_kelamin" value="<?= $jenis_kelamin ?>">
                                        <input class="form-control mb-3" type="text" name="agama" value="<?= $agama ?>">
                                        <input class="form-control mb-3" type="text" name="alamat" value="<?= $alamat ?>">
                                        <input class="form-control mb-3" type="text" name="no_telepon" value="<?= $no_telepon ?>">
                                        <input type="hidden" class="form-control mb-3" name="id_perawat" value="<?= $id_perawat ?>">
                                        <input class="form-control mb-3" type="file" name="file" value="">
                                        <input type="text" name="gambarlama" value="<?php echo $file  ?>">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="editperawat" class="btn btn-primary">Save</button>
                                </div>
                                </form>
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