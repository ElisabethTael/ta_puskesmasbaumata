<?php
// membuat koneksi ke database
$conn = mysqli_connect("localhost", "flyupid_ta_puskesmasbaumata", "pB031023", "flyupid_ta_puskesmasbaumata");


// eksekusi login

if (isset($_POST['login'])) {
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    $cekpengguna = mysqli_query($conn, "SELECT * from  perawat where nip='$username' and nip='$password'");
    $hitungpengguna = mysqli_num_rows($cekpengguna);

    if ($hitungpengguna > 0) {
        // kalau data ditemukan
        $ambildatalevel = mysqli_fetch_array($cekpengguna);

        $_SESSION['admin'] = $ambildatalevel['id_perawat'];
        echo '<script type="text/javascript">alert("Login Berhasil");</script>';
        echo "<script>location= 'index.php'</script>";
    } else {
        echo '<script type="text/javascript">alert("Data tidak ditemukan");</script>';
    }
}



if (isset($_POST['logindokter'])) {
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    $cekpengguna = mysqli_query($conn, "SELECT * from  dokter where nip='$username' and nip='$password'");
    $hitungpengguna = mysqli_num_rows($cekpengguna);

    if ($hitungpengguna > 0) {
        // kalau data ditemukan
        $ambildatalevel = mysqli_fetch_array($cekpengguna);

        $_SESSION['admin'] = $ambildatalevel['id_dokter'];
        echo '<script type="text/javascript">alert("Login Berhasil");</script>';
        echo "<script>location= 'dokter/index.php'</script>";
    } else {
        echo '<script type="text/javascript">alert("Data tidak ditemukan");</script>';
    }
}


// Tambah Data Dokter
if (isset($_POST['tdokter'])) {

    $id_dokter = $_POST['id_dokter'];
    $nip = $_POST['nip'];
    $nama_dokter = $_POST['nama_dokter'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jabatan = $_POST['jabatan'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $id_poli = $_POST['id_poli'];

    $cekdokter = mysqli_query($conn, "SELECT * FROM dokter WHERE nip = '$nip'");
    $hitungdokter = mysqli_num_rows($cekdokter);


    if ($hitungdokter > 0) {

        echo "<script> alert('nip sudah ada'); </script>";
    } else {
        // eksekusi ebook kepemiluan
        $allowed_extension = ['jpg', 'jpeg', 'png', 'img'];
        $nama = $_FILES['file']['name']; //ambil nama gambar
        $dot = explode('.', $nama);
        $ekstensi = strtolower(end($dot)); //ambil ekstensi
        $ukuran = $_FILES['file']['size']; //ambil ukuran gambarnya
        $file_tmp = $_FILES['file']['tmp_name']; //ambil lokasi gambar


        // kasi nama gambar -> enkripsi
        $file = uniqid($nama, true)  . time() . '.' . $ekstensi; //gabung nama gambar yang di enkripsi

        // proses upload gambar profile
        if (in_array($ekstensi, $allowed_extension) === true);
        // validasi ukuran gambar
        if ($ukuran < 15000000) {
            move_uploaded_file($file_tmp, 'filedokter/' . $file);



            $adddokter = mysqli_query($conn, "insert into dokter (id_dokter, nip, nama_dokter, tempat_lahir, tanggal_lahir, jenis_kelamin, jabatan, agama, alamat, no_telepon, id_poli, file) values('$id_dokter', '$nip', '$nama_dokter', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$jabatan', '$agama', '$alamat', '$no_telepon', '$id_poli', '$file')");
            if ($adddokter) {
                echo '<script type="text/javascript">alert("Berhasil Tambah Data");</script>';
            } else {
                echo '<script type="text/javascript">alert("gagal Tambah Data");</script>';
                echo "<script>location= 't_dokter.php'</script>";
            }
        } else {
            echo '<script type="text/javascript">alert("ukuran file terlalu besar");</script>';
            echo "<script>location= 't_dokter.php'</script>";
        }
    }
}


// edit Dokter

if (isset($_POST['editdokter'])) {

    $id_dokter = $_POST['id_dokter'];
    $nip = $_POST['nip'];
    $nama_dokter = $_POST['nama_dokter'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jabatan = $_POST['jabatan'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $gambarlama = $_POST['gambarlama'];

    if ($_FILES['file']['error'] == 4) {

        $allowed_extension = array('application/pdf');
        $nama = $_FILES['file']['name']; //ambil nama gambar
        $dot = explode('.', $nama);
        $ekstensi = strtolower(end($dot)); //ambil ekstensi
        $ukuran = $_FILES['file']['size']; //ambil ukuran gambarnya
        $file_tmp = $_FILES['file']['tmp_name']; //ambil lokasi gambar
        // kasi nama gambar -> enkripsi
        $file = uniqid($nama, true)  . time() . '.' . $ekstensi; //gabung nama gambar yang di enkripsi
        // proses upload gambar profile
        if (in_array($ekstensi, $allowed_extension) === true);
        // validasi ukuran gambar
        if ($ukuran < 15000000) {
            move_uploaded_file($file_tmp, 'filedokter/' . $file);

            $editdokter = mysqli_query($conn, "update dokter set nip='$nip',nama_dokter='$nama_dokter',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',jabatan='$jabatan',agama='$agama',alamat='$alamat',no_telepon='$no_telepon',file='$gambarlama' where id_dokter='$id_dokter'");
            if ($editdokter) {
                echo '<script type="text/javascript">alert("Berhasil Edit Data");</script>';
                echo "<script>location= 't_dokter.php'</script>";
            } else {
                echo '<script type="text/javascript">alert("gagal Edit Data");</script>';
                echo "<script>location= 't_dokter.php'</script>";
            }
        }
    } else {
        $allowed_extension = array('application/pdf');
        $nama = $_FILES['file']['name']; //ambil nama gambar
        $dot = explode('.', $nama);
        $ekstensi = strtolower(end($dot)); //ambil ekstensi
        $ukuran = $_FILES['file']['size']; //ambil ukuran gambarnya
        $file_tmp = $_FILES['file']['tmp_name']; //ambil lokasi gambar


        // kasi nama gambar -> enkripsi
        $file = uniqid($nama, true)  . time() . '.' . $ekstensi; //gabung nama gambar yang di enkripsi
        // proses upload gambar profile
        if (in_array($ekstensi, $allowed_extension) === true);
        // validasi ukuran gambar
        if ($ukuran < 15000000) {
            move_uploaded_file($file_tmp, 'filedokter/' . $file);
            $editdokter = mysqli_query($conn, "update dokter set nip='$nip',nama_dokter='$nama_dokter',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',jabatan='$jabatan',agama='$agama',alamat='$alamat',no_telepon='$no_telepon',file='$file' where id_dokter='$id_dokter'");
            if ($editdokter) {
                echo '<script type="text/javascript">alert("Berhasil Edit Data");</script>';
                echo "<script>location= 't_dokter.php'</script>";
            } else {
                echo '<script type="text/javascript">alert("gagal Edit Data");</script>';
                echo "<script>location= 't_dokter.php'</script>";
            }
        }
    }
}


// Hapus dokter
if (isset($_POST['hapusdokter'])) {

    $nama_dokter = $_POST['nama_dokter'];

    $hapusdokter = mysqli_query($conn, "DELETE FROM dokter WHERE nama_dokter='$nama_dokter' ");
    if ($hapusdokter) {
        echo '<script type="text/javascript">alert("Berhasil Hapus Data");</script>';
        echo "<script>location= 't_dokter.php'</script>";
    } else {
        echo '<script type="text/javascript">alert("gagal Hapus Data");</script>';
        echo "<script>location= 't_dokter.php'</script>";
    }
}

// Hapus obat 
if (isset($_POST['hapusobat'])) {

    $id_obat  = $_POST['id_obat'];

    $hapusdokter = mysqli_query($conn, "DELETE FROM obat WHERE id_obat ='$id_obat' ");
    if ($hapusdokter) {
        echo '<script type="text/javascript">alert("Berhasil Hapus Data");</script>';
        echo "<script>location= 't_obat.php'</script>";
    } else {
        echo '<script type="text/javascript">alert("gagal Hapus Data");</script>';
        echo "<script>location= 't_obat.php'</script>";
    }
}



// Tambah Data Perawat
if (isset($_POST['tperawat'])) {

    $id_perawat = $_POST['id_perawat'];
    $nama_perawat = $_POST['nama_perawat'];
    $nip = $_POST['nip'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];



    $cekperawat = mysqli_query($conn, "SELECT * FROM perawat WHERE nip = '$nip'");

    $hitungperawat = mysqli_num_rows($cekperawat);



    if ($hitungperawat > 0) {
        echo "<script>alert('nip sudah ada'); </script>";
    } else {
        $addperawat = mysqli_query($conn, "insert into perawat (id_perawat, nama_perawat,nip, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, alamat, no_telepon) values('$id_perawat', '$nama_perawat','$nip', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$alamat', '$no_telepon')");
        if ($addperawat) {
            echo '<script type="text/javascript">alert("Berhasil Tambah Data");</script>';
            echo "<script>location= 't_perawat.php'</script>";
        } else {
            echo '<script type="text/javascript">alert("gagal Tambah Data");</script>';
            echo "<script>location= 't_perawat.php'</script>";
        }
    }
}

// edit Perawat

if (isset($_POST['editperawat'])) {

    $id_perawat = $_POST['id_perawat'];
    $nama_perawat = $_POST['nama_perawat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];


    $editperawat = mysqli_query($conn, "update perawat set nama_perawat='$nama_perawat',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama',alamat='$alamat',no_telepon='$no_telepon'  where id_perawat='$id_perawat'");
    if ($editperawat) {
        echo '<script type="text/javascript">alert("Berhasil Edit Data");</script>';
        echo "<script>location= 't_perawat.php'</script>";
    } else {
        echo '<script type="text/javascript">alert("gagal Edit Data");</script>';
        echo "<script>location= 't_perawat.php'</script>";
    }
}





if (isset($_POST['profilperawat'])) {

    $id_perawat = $_POST['id_perawat'];
    $nip = $_POST['nip'];
    $nama_perawat = $_POST['nama_perawat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $profilperawat = mysqli_query($conn, "UPDATE perawat SET nama_perawat ='$nama_perawat',nip = '$nip',tempat_lahir='$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', agama = '$agama',alamat= '$alamat', no_telepon = '$no_telepon' WHERE id_perawat= '$id_perawat'");
    if ($profilperawat) {
        echo '<script type="text/javascript">alert("Berhasil Edit Data");</script>';
    } else {
        echo '<script type="text/javascript">alert("gagal Edit Data");</script>';
    }
}











// Hapus Perawat
if (isset($_POST['hapusperawat'])) {

    $nama_perawat = $_POST['nama_perawat'];

    $hapusperawat = mysqli_query($conn, "DELETE FROM perawat WHERE nama_perawat='$nama_perawat' ");
    if ($hapusperawat) {
        echo '<script type="text/javascript">alert("Berhasil Hapus Data");</script>';
        echo "<script>location= 't_perawat.php'</script>";
    } else {
        echo '<script type="text/javascript">alert("gagal Hapus Data");</script>';
        echo "<script>location= 't_perawat.php'</script>";
    }
}

// tambah data poli

if (isset($_POST['tpoli'])) {

    $id_poli = $_POST['id_poli'];
    $nama_poli = $_POST['nama_poli'];
    $jenis_dokter = $_POST['jenis_dokter'];



    $addpoli = mysqli_query($conn, "insert into poli (id_poli, nama_poli, jenis_dokter) values('$id_poli', '$nama_poli', '$jenis_dokter')");
    if ($addpoli) {
        echo '<script type="text/javascript">alert("Berhasil Tambah Data");</script>';
        echo "<script>location= 't_poli.php'</script>";
    } else {
        echo '<script type="text/javascript">alert("gagal Tambah Data");</script>';
        echo "<script>location= 't_poli.php'</script>";
    }
}
// edit poli

if (isset($_POST['editpoli'])) {

    $id_poli = $_POST['id_poli'];
    $nama_poli = $_POST['nama_poli'];
    $jenis_dokter = $_POST['jenis_dokter'];

    $editpoli = mysqli_query($conn, "update poli set nama_poli='$nama_poli',jenis_dokter='$jenis_dokter' where id_poli='$id_poli'");
    if ($editpoli) {
        echo '<script type="text/javascript">alert("Berhasil Edit Data");</script>';
        echo "<script>location= 't_poli.php'</script>";
    } else {
        echo '<script type="text/javascript">alert("gagal Edit Data");</script>';
        echo "<script>location= 't_poli.php'</script>";
    }
}

// hapus poli

if (isset($_POST['hapuspoli'])) {

    $id_poli = $_POST['id_poli'];

    $hapus = mysqli_query($conn, "delete from poli  where id_poli ='$id_poli'");
    if ($hapus) {
        echo '<script type="text/javascript">alert("Berhasil Delete Data");</script>';
        echo "<script>location= 't_poli.php'</script>";
    }
};
// Tambah Data Rekam Medis
if (isset($_POST['trekammedis'])) {

    $id_rekammedis = $_POST['id_rekammedis'];
    $no_rekammedis = $_POST['no_rekammedis'];
    $nama_pasien = $_POST['nama_pasien'];
    $keterangan = $_POST['keterangan'];
    $status_pasien = $_POST['status_pasien'];
    $id_obat = $_POST['id_obat'];
    $tanggal_rekammedis = $_POST['tanggal_rekammedis'];
    $keluhan = $_POST['keluhan'];

    $addmedis = mysqli_query($conn, "insert into rekammedis (id_rekammedis, no_rekammedis, nama_pasien, keterangan, status_pasien, id_obat, tanggal_rekammedis, keluhan) values('$id_rekammedis', '$no_rekammedis', '$nama_pasien', '$keterangan', '$status_pasien', '$id_obat', '$tanggal_rekammedis', '$keluhan')");
    if ($addmedis) {
        echo '<script type="text/javascript">alert("Berhasil Tambah Data");</script>';
        echo "<script>location= 't_rekammedis.php'</script>";
    } else {
        echo '<script type="text/javascript">alert("gagal Tambah Data");</script>';
        echo "<script>location= 't_rekammedis.php'</script>";
    }
}
// Tambah Data Obat
if (isset($_POST['tobat'])) {


    $nama_obat = $_POST['nama_obat'];
    $dosis_obat = $_POST['dosis_obat'];
    $cara_pakai = $_POST['cara_pakai'];
    $ketersediaan_obat = $_POST['ketersediaan_obat'];
    $expired_date = $_POST['expired_date'];
    $addobat = mysqli_query($conn, "insert into obat (id_obat, nama_obat, dosis_obat, cara_pakai, ketersediaan_obat,  expired_date) values('', '$nama_obat', '$dosis_obat', '$cara_pakai', '$ketersediaan_obat', '$expired_date')");
    if ($addobat) {
        echo '<script type="text/javascript">alert("Berhasil Tambah Data");</script>';
        echo "<script>location= 't_obat.php'</script>";
    } else {
        echo '<script type="text/javascript">alert("gagal Tambah Data");</script>';
        echo "<script>location= 't_obat.php'</script>";
    }
}




// Notice: Undefined index: file in C:\xampp\htdocs\ta_puskesmasbaumata\admin\koneksi.php on line 117

// Notice: Trying to access array offset on value of type null in C:\xampp\htdocs\ta_puskesmasbaumata\admin\koneksi.php on line 117

// Notice: Undefined index: file in C:\xampp\htdocs\ta_puskesmasbaumata\admin\koneksi.php on line 120

// Notice: Trying to access array offset on value of type null in C:\xampp\htdocs\ta_puskesmasbaumata\admin\koneksi.php on line 120

// Notice: Undefined index: file in C:\xampp\htdocs\ta_puskesmasbaumata\admin\koneksi.php on line 121

// Notice: Trying to access array offset on value of type null in C:\xampp\htdocs\ta_puskesmasbaumata\admin\koneksi.php on line 121