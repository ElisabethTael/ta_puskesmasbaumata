<?php

$conn = mysqli_connect("localhost", "root", "", "ta_puskesmasbaumata");


require_once __DIR__ . '/mpdf/autoload.php';

$id_regis = $_GET['id_regis'];




$peg = mysqli_query($conn, "SELECT * FROM  regis JOIN pasien ON pasien.id_pasien = regis.id_pasien  JOIN  em_obat ON em_obat.nomor_rekammedis = regis.nomor_rekammedis JOIN obat on obat.id_obat = em_obat.id_obat  WHERE id_regis ='$id_regis' ");

$ambilobat = mysqli_query($conn, "SELECT * FROM  regis JOIN pasien ON pasien.id_pasien = regis.id_pasien  JOIN  em_obat ON em_obat.nomor_rekammedis = regis.nomor_rekammedis JOIN obat on obat.id_obat = em_obat.id_obat  WHERE id_regis ='$id_regis' ");

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
 <h1 class="text-center ">Puskesmas Baumata </h1>
 <p class="text-primary text-center"> Jln Taebenu KM 13, Baumata, Kecamatan Taebenu,Kabupaten Kupang,NTT </p>

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
<td width="40" style="color: black;"> alamat   </td>   <td width="50" style="color: black;"> :   </td>  <td width="100" style="color: black;"> ' . $d['alamat'] .  '</td> 
</tr>
<tr>
<td width="40" style="color: black;"> no regis   </td>   <td width="50" style="color: black;"> :   </td>  <td width="100" style="color: black;"> ' . $d['no_regis'] .  '</td> 
</tr>
<tr>
<td width="40" style="color: black;">  Tanggal Regis   </td>   <td width="50" style="color: black;"> :   </td>  <td width="100" style="color: black;"> ' . date("d-m-Y", strtotime($d['tanggal_regis']))  .  '</td> 
</tr>
<tr>
<td width="40" style="color: black;">  keluhan   </td>   <td width="50" style="color: black;"> :   </td>  <td width="100" style="color: black;"> ' . $d['keterangan_pasien'] .  '</td> 
</tr>
</table>

<br>
<table width="400" style="margin-left: 100px;"> 

<tr>
<td width="20"  style="color: black;" > nomor rekammedis </td>   <td width="70"style="color: black;" > :   </td>  <td width="100" style="color: black;"> ' . $d['nomor_rekammedis'] .  '</td> 
</tr>
<tr>
<td width="20"  style="color: black;" > KETERANGAN DOKTER </td>   <td width="70"style="color: black;" > :   </td>  <td width="100" style="color: black;"> ' . $d['keterangan_dokter'] .  '</td> 
</tr>

<tr>
<td width="20"  style="color: black;" > Obat </td>   <td width="70"style="color: black;" > :   </td>  <td width="100" style="color: black;"></td> 
</tr>';

$i = 1;

while ($dataobat = mysqli_fetch_assoc($ambilobat)) {
    # code...

    $html .= ' <tr>
  <td width="70"style="color: black;" >    </td>  <td width="100" style="color: black;">' . $dataobat['nama_obat'] .  ' </td> 
</tr>';
}

$html .= '</table>




</div>


<br><br>

<p style="margin-left: 505px; "> kepala puskesmas </p>
<br>
<p style="margin-left: 505px; "> Semry H.Kanajara A.md.Keb  </p>
<br>
<p style="margin-left: 460px; ">  </p>

';


$html .= '<script src="../bootstrap5/dist/js/bootstrap.bundle.js"></script>

</body>

</html>';
$mpdf->WriteHTML($html);



$mpdf->Output();
