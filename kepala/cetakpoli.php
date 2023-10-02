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