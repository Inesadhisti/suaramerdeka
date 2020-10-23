<?php session_start(); ?>

<?php
include('conn.php');

  if(!isset($_SESSION['id'])){
    header('location:index.php');
  }
  else {
    $id = $_SESSION['id'];
  }
?>

<?php

include("koneksi.php");

if( isset($_GET['unik2']) ){

    // ambil id dari query string
    $unik= $_GET['unik2'];
}

include("conn.php");
$sql = "SELECT * FROM user WHERE userid = '$id'";
        $query = mysqli_query($db, $sql);

        while($user = mysqli_fetch_array($query)){

            $email= $user['email'];
}

include("koneksi.php");
$sql = "SELECT * FROM iklan2 WHERE unik2 = '$unik'";
        $query = mysqli_query($db, $sql);

        while($iklan = mysqli_fetch_array($query)){

            $ik= $iklan['iklan2'];
            $tanggal= $iklan['tanggal2'];
            $tgl= $iklan['tgl_invoice2'];
}

$jml_karakter = strlen($ik);

$a = 32;
$hasil = floor ($jml_karakter / $a);

if ($hasil == 1) {
$baris="2";
$bayar="Rp20.000,00";
$pajak="Rp2.000,00";
$total="Rp22.000,00";
} else if ($hasil == 2){
$baris="3";
$bayar="Rp30.000,00";
$pajak="Rp3.000,00";
$total="Rp33.000,00";
} else if ($hasil == 3){
$baris="4";
$bayar="Rp40.000,00";
$pajak="Rp4.000,00";
$total="Rp44.000,00";
} else if ($hasil == 4){
$baris="5";
$bayar="Rp50.000,00";
$pajak="Rp5.000,00";
$total="Rp55.000,00";
} else if ($hasil == 5){
$baris="6";
$bayar="Rp60.000,00";
$pajak="Rp6.000,00";
$total="Rp66.000,00";
} else if ($hasil == 6){
$baris="7";
$bayar="Rp70.000,00";
$pajak="Rp7.000,00";
$total="Rp77.000,00";
} else if ($hasil == 7){
$baris="8";
$bayar="Rp80.000,00";
$pajak="Rp8.000,00";
$total="Rp88.000,00";
} else if ($hasil == 8){
$baris="9";
$bayar="Rp90.000,00";
$pajak="Rp9.000,00";
$total="Rp99.000,00";
} else if ($hasil == 9 or $hasil == 10){
$baris="10";
$bayar="Rp100.000,00";
$pajak="Rp10.000,00";
$total="Rp110.000,00";
} else {

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Iklan Baris - Suara Merdeka Semarang</title>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">

</head>

  <!-- Services Section -->
  <br>
  <section id="services">
    <div class="container">
      <h2 class="text-center mt-0">INVOICE</h2>
      <hr class="divider my-4">
      	<table border="1" align="right">
    <tr>
      <th class="table-dark">Nomor Invoice</th>
      <th class="table-dark">Tanggal Invoice</th>
    </tr>
  <tbody>
    <tr>
      <td><?php echo $unik;?></td>
      <td><?php echo $tgl;?></td>
    </tr>
  </tbody>
</table>
      		<font size = "4" color="black">PT. Suara Merdeka Press</font><br>
      		<font size = "3" color="black">Jl. Pandanaran No.30, pekunden,</font><br>
      		<font size = "3" color="black">Kota Semarang, Jawa Tengah Kode Pos 50134</font><br>
      		<font size = "2" color="black">Phone : (024) 8412600</font><br>
<br>
<table>
	<tbody>
		<tr>
  			<td class="table-dark">Pembayaran Iklan Baris Atas Akun :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		</tr>
	</tbody>
</table>

<font size = "3" color="black"><?php echo $email;?></font><br>
<br>
<table class="table table-sm">
  <thead class="thead-dark">
    <tr>
      <th>Isi Iklan</th>
      <th>Tanggal Tayang</th>
      <th>Jumlah Karakter</th>
      <th>Jumlah Baris</th>
      <th>Harga Iklan</th>
      <th>Pajak (10%)</th>
      <th>Total Bayar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $ik;?></td>
      <td><?php echo $tanggal;?></td>
      <td><?php echo $jml_karakter;?></td>
      <td><?php echo $baris;?></td>
      <td><?php echo $bayar;?></td>
      <td><?php echo $pajak;?></td>
      <td><?php echo $total;?></td>
    </tr>
  </tbody>
</table>
<font size = "3" color="black">Lakukan pembayaran dengan cara transfer melalui nomor rekening BCA : 8030445351 atas nama SUARA MERDEKA SEMARANG.</font><br>
<font size = "3" color="black">Batas untuk melakukan pembayaran adalah 1 jam setelah tanggal invoice. Jika lebih dari itu, maka iklan akan otomatis kadaluarsa.</font><br>
<br>
<p align="center">
<font size = "3" color="black">Jika ada pertanyaan tentang invoice ini, silahkan hubungi</font><br>
<font size = "3" color="black">[Suara Merdeka Semarang, 0812-1576-3693, redaksi@suaramerdeka.info]</font><br>
</p>
<p align="right">
	<font size = "1" color="black">Copyright © 2019 - Suara Merdeka Semarang</font><br>
</p>
    </div>
  </section>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

</body>

</html>

<script>
    window.print();
  </script>