<?php


$conn = mysqli_connect("localhost", "flyupid_ta_puskesmasbaumata", "pB031023_", "flyupid_ta_puskesmasbaumata");




if (isset($_POST['editprofil'])) {

    $id_pasien = $_POST['id_pasien'];
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];
    $nomor_telepon = $_POST['nomor_telepon'];

    $editprofil = mysqli_query($conn, "UPDATE pasien SET nama_pasien ='$nama',tanggal_lahir = '$tanggal_lahir',tempat_lahir = '$tempat_lahir', jenis_kelamin ='$jenis_kelamin', alamat = '$alamat', umur = '$umur', nik = '$nik', nomor_telepon = '$nomor_telepon'   WHERE id_pasien = '$id_pasien'");

    if ($editprofil) {

        echo '<script type="text/javascript">alert("Berhasil edit profil");</script>';
    } else {
        echo '<script type="text/javascript">alert("gagal edit Data");</script>';
    }
}

if (isset($_POST['batalproses'])) {

    $id_regis = $_POST['id_regis'];

    $hapusperawat = mysqli_query($conn, "DELETE FROM regis WHERE id_regis='$id_regis' ");
    if ($hapusperawat) {
        echo '<script type="text/javascript">alert("Berhasil membatalkan  proses");</script>';
    } else {
        echo '<script type="text/javascript">alert("gagal  membatalkan  proses");</script>';
    }
}
