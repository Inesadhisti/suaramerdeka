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
date_default_timezone_set("Asia/Jakarta");
$date = date("Y-m-d");

if($_REQUEST['tanggal2'] <= $date){
    echo '<script language="javascript">';
    echo 'alert("Masukkan tanggal dengan benar. Kembali ke halaman sebelumnya untuk mengedit.")';
    echo '</script>';
 ?>

  <?php
 }

else {

  include "koneksi.php";
  $iklan  = $_REQUEST['iklan2'];
  $tanggal  = $_REQUEST['tanggal2'];
  $unik  = $_REQUEST['unik2'];

mysqli_query($db,"UPDATE iklan2 SET iklan2='$iklan', tanggal2='$tanggal' WHERE unik2 = '$unik'");

  mysqli_close($db);
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

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Suara Merdeka</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Rincian Iklan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#kontak">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Pemasangan Iklan Baris Koran Suara Merdeka Semarang</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Cek kembali rincian iklan yang ingin anda pasang.</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Lihat rincian iklan</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-100 text-center">
          <h2 class="text-white mt-0">Rincian Iklan Baris Anda</h2>
          <hr class="divider light my-4">
          <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Isi Iklan</th>
      <th scope="col">Tanggal Tayang</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
include("koneksi.php");
        $sql = "SELECT * FROM iklan2 WHERE unik2 = '$unik'";
        $query = mysqli_query($db, $sql);

        while($iklan = mysqli_fetch_array($query)){
        echo "<tr>";

            echo "<td>".$iklan['iklan2']."</td>";
            echo "<td>".$iklan['tanggal2']."</td>";

            echo "<td>";
            echo "<a href='edit_iklan2.php?unik2=".$iklan['unik2']."' class='btn btn-warning' role='button' aria-pressed='true'>Edit</a></br/>";
            echo "</br/><a onClick=\"javascript: return confirm('Apakah anda yakin ingin menghapus iklan ini?');\" href='hapus_iklan2.php?unik2=".$iklan['unik2']."' class='btn btn-danger' role='button' aria-pressed='true'>Hapus</a></br/>";
            echo "</br/><a onClick=\"javascript: return confirm('Apakah data iklan sudah benar? Anda tidak dapat mengubah iklan setelah menekan tombol OK.');\" href='iklan_fix2.php?unik2=".$iklan['unik2']."' class='btn btn-success' role='button' aria-pressed='true'>Selesai</a>";
            echo "</td>";

            echo "</tr>";
        }
    ?>


  </tbody>
</table>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#kontak">Mengalami kendala?</a>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section" id="kontak">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Segera Hubungi Kami!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Hubungi kami jika terjadi kesalahan pada pemasangan iklan baris anda</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>0812-1576-3693</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:contact@yourwebsite.com">redaksi@suaramerdeka.info</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Suara Merdeka Semarang</div>
    </div>
  </footer>

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

<?php } ?>