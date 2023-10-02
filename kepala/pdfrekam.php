<?php

include 'koneksi.php';

require_once __DIR__ . '/mpdf/autoload.php';

$id_rekammedis = $_GET['id_rekammedis'];




$peg = mysqli_query($conn, "SELECT * FROM  rekammedis JOIN regis ON regis.id_regis = rekammedis.id_regis  JOIN pasien ON pasien.id_pasien = regis.id_pasien  WHERE id_rekammedis ='$id_rekammedis' ");

$d = mysqli_fetch_assoc($peg);






$mpdf = new \Mpdf\Mpdf();
$mpdf->SetWatermarkImage('../img/logobaumata.png');
$mpdf->showWatermarkImage = true;

$html = '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap5/dist/css/bootstrap.min.css" rel="stylesheet"">
    <link rel="stylesheet" href="style.css" rel="stylesheet"">
    <style> 
    .garis {
        border-bottom: 10px double black;
        margin-top: 5px;
    
    } </style>

</head>

<body>


<div class="satu" style="margin-left:10px;">
 <h1 class="text-center ">Puskesmas Baumata Kupang  </h1>
 <p class="text-primary text-center"> Jalan S.K Lerik Kelapa Lima Kota Kupang  Nusa Tenggara Timur </p>

 </div>
 <div class= "garis">

</div>';


$html .= '<div class= "container">
<h4 class="text-center mt-4">
Rekam Medis Pasien 
</h4>
';



$html .= '<table style="margin-left: 100px;"> 

<tr>
<td width="40"  style="color: black;" > nama  pasien </td>   <td width="50"style="color: black;" > :   </td>  <td width="100" style="color: black;"> ' . $d['nama_pasien'] .  '</td> 
</tr>
<tr>
<td width="40" style="color: black;"> jenis kelamin   </td>   <td width="50" style="color: black;"> :   </td>  <td width="100" style="color: black;"> ' . $d['jenis_kelamin'] .  '</td> 
</tr>
<tr>
<td width="40" style="color: black;"> no regis   </td>   <td width="50" style="color: black;"> :   </td>  <td width="100" style="color: black;"> ' . $d['no_regis'] .  '</td> 
</tr>
<tr>
<td width="40" style="color: black;">  Tanggal Regis   </td>   <td width="50" style="color: black;"> :   </td>  <td width="100" style="color: black;"> ' . $d['tanggal_regis'] .  '</td> 
</tr>
</table>


</div>




<p style="margin-left: 505px; "> kepala puskesmas </p>
<br>
<p style="margin-left: 460px; ">  </p>

';


$html .= '<script src="../bootstrap5/dist/js/bootstrap.bundle.js"></script>

</body>

</html>';
$mpdf->WriteHTML($html);



$mpdf->Output();
