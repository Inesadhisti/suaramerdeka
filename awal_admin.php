<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username = $_SESSION['username']; 
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
            <a class="nav-link js-scroll-trigger" href="#about">Iklan Tanpa Daftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#dd">Iklan Dengan Daftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?')">Keluar</a>
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
          <h1 class="text-uppercase text-white font-weight-bold">HALO ADMIN</h1>
        </div>
        <div class="col-lg-8 align-self-baseline">
        </div>
      </div>
    </div>
  </header>

<!-- About Section -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-100 text-center">
          <h2>Iklan Tanpa Daftar</h2>
          <hr class="divider-vertical">
          <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Isi Iklan</th>
      <th scope="col">Bayar</th>
      <th scope="col">Status Iklan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $kirim = "Kirim bukti pembayaran terlebih dahulu";
include("koneksi.php");
        $sql = "SELECT * FROM iklan WHERE NOT status_iklan = '$kirim'";
        $query = mysqli_query($db, $sql);
        while($iklan = mysqli_fetch_array($query)){
        echo "<tr>";

            echo "<td>".$iklan['iklan']."</td>";
            echo "<td>".$iklan['bayar']."</td>";
            echo "<td>".$iklan['status_iklan']."</td>";

            echo "<td>";
            echo "<a href='cek_bukti.php?unik=".$iklan['unik']."' class='btn btn-warning' role='button' aria-pressed='true'>Lihat Bukti</a></br/>";
            echo "</br/><a onClick=\"javascript: return confirm('Apakah anda yakin dengan keputusan ini?');\" href='tidak_lolos.php?unik=".$iklan['unik']."' class='btn btn-danger' role='button' aria-pressed='true'>Tidak Lolos</a></br/>";
            echo "</br/><a onClick=\"javascript: return confirm('Apakah anda yakin dengan keputusan ini?');\" href='iklan_lolos.php?unik=".$iklan['unik']."' class='btn btn-success' role='button' aria-pressed='true'>Lolos</a>";
            echo "</td>";

            echo "</tr>";
        }
    ?>


  </tbody>
</table>
        </div>
      </div>
    </div>
  </section>

<!-- About Section -->
  <section class="page-section" id="dd">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-100 text-center">
          <h2>Iklan Dengan Daftar</h2>
          <hr class="divider-vertical">
          <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Email</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $kirim = "Kirim bukti pembayaran terlebih dahulu";
include("koneksi.php");
        $sql = "SELECT * FROM user";
        $query = mysqli_query($db, $sql);
        while($user = mysqli_fetch_array($query)){
        echo "<tr>";

            echo "<td>".$user['email']."</td>";

            echo "<td>";
            echo "<a href='lihat_iklan.php?userid=".$user['userid']."' class='btn btn-warning' role='button' aria-pressed='true'>Lihat Iklan</a></br/>";

            echo "</tr>";
        }
    ?>


  </tbody>
</table>
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