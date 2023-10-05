<?php
// membuat koneksi ke database
$conn = mysqli_connect("localhost", "flyupid_ta_puskesmasbaumata", "pB031023_", "flyupid_ta_puskesmasbaumata");


// eksekusi login

if (isset($_POST['login'])) {
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    $cekpengguna = mysqli_query($conn, "SELECT * from user where username='$username' and password='$password'");
    $hitungpengguna = mysqli_num_rows($cekpengguna);

    if ($hitungpengguna > 0) {
        // kalau data ditemukan
        $ambildatalevel = mysqli_fetch_array($cekpengguna);
        $level = $ambildatalevel['level'];

        if ($level == 'admin') {
            // kalau dia admin
            $_SESSION['Admin'] = $level;
            echo '<script type="text/javascript">alert("Login Berhasil");</script>';
            echo "<script>location= 'index.php'</script>";
        } else {
            // kalau dia pengguna
            $_SESSION['Kepala'] = $level;
            echo '<script type="text/javascript">alert("Login Berhasil");</script>';
            echo "<script>location= '../pimpinan/index.php'</script>";
        }
    } else {
        echo '<script type="text/javascript">alert("Data tidak ditemukan");</script>';
    }
}
