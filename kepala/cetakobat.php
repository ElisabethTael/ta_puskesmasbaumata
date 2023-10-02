~

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
                    <th>ID Obat</th>
                    <th>Nama Obat</th>
                    <th>Dosis Obat</th>
                    <th>Cara Pakai</th>
                    <th>Ketersediaan Obat</th>
                    <th>Expired Date</th>

                </tr>
            </thead>
            <tbody>
                <?php

                $i = 0;
                $ambildataobat = mysqli_query($conn, "select * from obat");
                while ($data = mysqli_fetch_array($ambildataobat)) {
                    $i++;
                    $id_obat = $data['id_obat'];
                    $nama_obat = $data['nama_obat'];
                    $dosis_obat = $data['dosis_obat'];
                    $cara_pakai = $data['cara_pakai'];
                    $ketersediaan_obat = $data['ketersediaan_obat'];
                    $expired_date = $data['expired_date'];




                ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $id_obat ?></td>
                        <td><?= $nama_obat ?></td>
                        <td><?= $dosis_obat ?></td>
                        <td><?= $cara_pakai ?></td>
                        <td><?= $ketersediaan_obat ?></td>
                        <td><?= $expired_date ?></td>



                    </tr>


                    <!-- akhir edit -->

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