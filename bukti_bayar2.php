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

include("koneksi.php");
        $sql2 = "SELECT * FROM image_tb2 WHERE unik2 = '$unik'";
        $query2 = mysqli_query($db, $sql2);

        if (mysqli_fetch_array($query2) > 0){

    echo '<script language="javascript">';
    echo 'alert("Anda tidak bisa mengupload bukti pembayaran lagi. Kembali ke halaman sebelumnya.")';
    echo '</script>';
}

else {

include("koneksi.php");
        $sql = "SELECT * FROM iklan2 WHERE unik2 = '$unik'";
        $query = mysqli_query($db, $sql);

        while($iklan = mysqli_fetch_array($query)){

            $ik= $iklan['iklan2'];
            $tanggal= $iklan['tanggal2'];
            $tgl= $iklan['tgl_invoice2'];
            $status= $iklan['status_iklan2'];
}

date_default_timezone_set("Asia/Jakarta");
$sekarang= date('Y-m-d H:i:s',  time() - (60 * 60));
if ($tgl <= $sekarang){
    echo '<script language="javascript">';
    echo 'alert("Iklan sudah kadaluarsa.")';
    echo '</script>';
    ?>
<center>
<a href="index.php#services">Pasang iklan kembali</a>
 </center>
<?php
}

else{

if($_SERVER['REQUEST_METHOD'] == "POST"){

	include('koneksi.php');
	$fileinfo=PATHINFO($_FILES["image"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
	$location="upload/" . $newFilename;
 
	mysqli_query($db,"insert into image_tb2 (img_location2, unik2, userid) values ('$location', '$unik', '$id')");
	mysqli_query($db,"UPDATE iklan2 SET status_iklan2='Iklan sedang dalam proses pengecekan' WHERE unik2='$unik'");
	header('location:index.php');
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
            <a class="nav-link js-scroll-trigger" href="#services">Bukti Pembayaran</a>
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
          <p class="text-white-75 font-weight-light mb-5">Kirim bukti pembayaran anda.</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#services">Bukti pembayaran</a>
        </div>
      </div>
    </div>
  </header>
  <section class="page-section" id="services">
  	<div class="row h-100 align-items-center justify-content-center text-center">
    <div class="container">
      <h2 class="text-center mt-0">Kirim Bukti Pembayaran Anda</h2>
      <hr class="divider my-4">
      <br>
      <br>
	<div>
	<form method="POST" action="" enctype="multipart/form-data" onsubmit="return confirm('Apakah bukti pembayaran sudah benar? Anda tidak bisa mengupload bukti pembayaran lagi setelah menekan tombol OK.');">
	<label>Gambar :&nbsp;</label><input type="file" name="image" required="true">
	<button type="submit" class="btn btn-success">Kirim</button>
	<input type="hidden" name="unik" value="<?php echo $unik; ?>">
	</form>
	</div>
    </div>
</div>
<br>
<br>
<br>
    <div class="row h-100 align-items-center justify-content-center text-center">
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#kontak">Mengalami Kendala?</a>
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

<?php } ?>