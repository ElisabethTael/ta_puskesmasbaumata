<?php

$conn = mysqli_connect("localhost", "flyupid_ta_puskesmasbaumata", "pB031023_", "flyupid_ta_puskesmasbaumata");

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUSKESMAS BAUMATA</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" />
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link href="../img/images_(6).png" rel="icon">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box
    }

    body {
        background-color: #eee;
        height: 100vh;
        font-family: 'Poppins', sans-serif;
        background: rgb(245, 245, 245);
        background: linear-gradient(to bottom, #00cc66 0%, #99ffcc 100%);
    }

    .wrapper {
        max-width: 500px;
        border-radius: 10px;
        margin: 50px auto;
        padding: 30px 40px;
        box-shadow: 20px 20px 80px rgb(206, 206, 206)
    }

    .h2 {
        font-family: 'Kaushan Script', cursive;
        font-size: 3.5rem;
        font-weight: bold;
        color: #400485;
        font-style: italic
    }

    .h4 {
        font-family: 'Poppins', sans-serif
    }

    .input-field {
        border-radius: 5px;
        padding: 5px;
        display: flex;
        align-items: center;
        cursor: pointer;
        border: 1px solid #400485;
        color: #400485
    }

    .input-field:hover {
        color: #7b4ca0;
        border: 1px solid #7b4ca0
    }

    input {
        border: none;
        outline: none;
        box-shadow: none;
        width: 100%;
        padding: 0px 2px;
        font-family: 'Poppins', sans-serif
    }

    .fa-eye-slash.btn {
        border: none;
        outline: none;
        box-shadow: none
    }

    a {
        text-decoration: none;
        color: #400485;
        font-weight: 700
    }

    a:hover {
        text-decoration: none;
        color: #7b4ca0
    }

    .option {
        position: relative;
        padding-left: 30px;
        cursor: pointer
    }

    .option label.text-muted {
        display: block;
        cursor: pointer
    }

    .option input {
        display: none
    }

    .checkmark {
        position: absolute;
        top: 3px;
        left: 0;
        height: 20px;
        width: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 50%;
        cursor: pointer
    }

    .option input:checked~.checkmark:after {
        display: block
    }

    .option .checkmark:after {
        content: "";
        width: 13px;
        height: 13px;
        display: block;
        background: #400485;
        position: absolute;
        top: 48%;
        left: 53%;
        border-radius: 50%;
        transform: translate(-50%, -50%) scale(0);
        transition: 300ms ease-in-out 0s
    }

    .option input[type="radio"]:checked~.checkmark {
        background: #fff;
        transition: 300ms ease-in-out 0s;
        border: 1px solid #400485
    }

    .option input[type="radio"]:checked~.checkmark:after {
        transform: translate(-50%, -50%) scale(1)
    }

    .btn.btn-block {
        border-radius: 20px;
        background-color: #400485;
        color: #fff
    }

    .btn.btn-block:hover {
        background-color: #55268be0
    }

    @media(max-width: 575px) {
        .wrapper {
            margin: 10px
        }
    }

    @media(max-width:424px) {
        .wrapper {
            padding: 30px 10px;
            margin: 5px
        }

        .option {
            position: relative;
            padding-left: 22px
        }

        .option label.text-muted {
            font-size: 0.95rem
        }

        .checkmark {
            position: absolute;
            top: 2px
        }

        .option .checkmark:after {
            top: 50%
        }

        #forgot {
            font-size: 0.95rem
        }
    }
</style>

<body>
    <br>
    <br>
    <?php
    if (isset($_POST['login'])) {

        $username = $_POST['uname'];
        $password = $_POST['psw'];

        $cekpengguna = mysqli_query($conn, "SELECT * from  pasien where nik='$username' and nik='$password'");
        $hitungpengguna = mysqli_num_rows($cekpengguna);

        if ($hitungpengguna > 0) {
            // kalau data ditemukan
            $ambildatalevel = mysqli_fetch_array($cekpengguna);

            $_SESSION['pasien'] = $ambildatalevel['id_pasien'];
            echo '<script type="text/javascript">alert("Login Berhasil");</script>';
            echo "<script>location= '../pasien/index.php'</script>";
        } else {
            echo '<script type="text/javascript">alert("Data tidak ditemukan");</script>';
        }
    }
    ?>
    <div class="wrapper bg-white animate__animated animate__backInDown">
        <center>
            <p><img src="../img/p.png" width="150" alt=""></p>
        </center>
        <div class="h2 text-center"></div>
        <div class="h4 text-muted text-center pt-2">SISTEM INFORMASI PUSKESMAS BAUMATA</div>
        <form class="pt-3" method="post">
            <div class="form-group py-2">
                <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" placeholder="Username....." name="uname" required class=""> </div>
            </div>
            <div class="form-group py-1 pb-2">
                <div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="password" placeholder="Password......" name="psw" required class=""> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
            </div>
            <div class="d-flex align-items-start">
            </div>
            <center><button class="btn btn-success text-center my-3" name="login">Log in</button></center>
        </form>

        <center><button class="btn btn-success text-center my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Kembali</button></center>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn btn-close bg-warning" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <strong style="color: red;">Apakah Anda Ingin Kembali Ke halaman Utama ?</strong>
                </div>
                <div class="modal-footer">
                    <a href="../index.php"><button type="button" class="btn btn-warning">YES</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>