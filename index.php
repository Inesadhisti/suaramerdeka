<?php session_start(); ?>

<?php
include('conn.php');

  if(isset($_SESSION['id'])){
    header('location:home.php');
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
            <a class="nav-link js-scroll-trigger" href="#about">Ketentuan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Pasang Iklan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Masuk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Daftar</a>
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
          <p class="text-white-75 font-weight-light mb-5">Selamat Datang di Website Pemasangan Iklan Baris Koran Suara Merdeka Semarang.</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Ketentuan Pemasangan Iklan</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-100 text-center">
          <h2>Ketentuan Pemasangan Iklan Baris di Korang Suara Merdeka Semarang</h2>
          <hr class="divider-vertical">
          <p align="left">
            1. Jika anda hanya memasang satu iklan, anda dapat memasang iklan tanpa harus daftar.
            <br>2. Jika anda memasang lebih dari satu iklan, kami sarankan anda untuk melakukan DAFTAR terlebih dahulu.
            <br>3. Harga untuk memasang iklan baris di koran Suara Merdeka Semarang adalah Rp10.000,00 /baris.
            <br>4. Untuk pemasangan iklan minimal 2 baris dan maksimal 10 baris. 1 baris = 32 karakter.
            <br>5. Setiap pemasangan pajak dikenakan pajak 10% dari total bayar.
            <br>6. Teks iklan didahului dengan object (apa yang ditawarkan/ dicari/ jenis usaha), diikuti dengan keterangan lainnya, diakhiri dengan alamat/ tlp. Contoh : antenna anti gledek :081XXXXXXXXX ahli antenna TV & parabola 75 ribu dpt:ant,kbl+psg
            <br>7. Batas waktu pasang iklan adalah 1 hari sebelum tanggal tayang.
            <br>8. Batas waktu bayar iklan adalah 1 jam setelah tanggal invoice.
            <br>9. Anda bisa langsung mencetak INVOICE atau menyimpannya dalam bentuk PDF.
            <br>10. Setelah menekan tombol selesai, segera lakukan pembayaran dan kirim buktinya di aksi BUKTI BAYAR.
            <br>11. Jika status iklan anda "iklan dapat ditayangkan", iklan akan ditayangkan sesuai dengan tanggal tayang.
            <br>12. Jika status iklan anda "iklan tidak dapat ditayangkan", ada kesalahan pada iklan anda atau pembayaran yang anda lakukan. Segera hubungi Suara Merdeka melalui email:redaksi@suaramerdeka.info atau telp/whatsapp:0812-1576-3693 untuk informasi lebih lanjut.</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#services">Pasang Iklan Tanpa Daftar</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">Isikan Data Berikut Untuk Memulai Memasang Iklan</h2>
      <hr class="divider my-4">
        <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" method="post" action="prosesiklan.php" onsubmit="return confirm('Apakah data iklan sudah benar?');">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Nama Lengkap</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName" placeholder="Isikan nama lengkap anda" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Alamat Lengkap</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine1" name="addressLine1" placeholder="Isikan alamat lengkap anda" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Isikan email anda" class="form-control" required="true" value="" type="email"></div>
                            </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label">Isi Iklan</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><textarea rows = "10" cols = "32" name = "iklan" minlength="33" maxlength="320" placeholder="Isikan iklan anda" class="form-control" required="true" value="" type="text" style="resize: none;"></textarea></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Tanggal Tayang</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input type="date" name="tanggal" min="now" class="form-control" required="true"></div>
                            </div>
                         </div>
                         <input type="hidden" name="unik">
                         <input type="hidden" name="status_iklan">
                         <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span>Kirim</button>
                         <button type="reset" class="btn btn-danger">Batal</button>
                      </fieldset>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
    </div>
    <div class="row h-100 align-items-center justify-content-center text-center">
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#portfolio">Masuk</a>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section class="page-section" id="portfolio">
    <div class="container">
      <h2 align="center">Masuk ke Suara Merdeka Semarang</h2>
      <hr>
        <div id="login_form" class="well">
    <hr>
    <form method="POST" action="login.php">
    <div>Email</div><input type="text" name="email" class="form-control" required>
    <div style="height: 10px;"></div>   
    <div>Kata Sandi</div><input type="password" name="password" class="form-control" required> 
    <div style="height: 10px;"></div>
    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-log-in"></span>Masuk</button>
    <button value="Batal "type="reset" class="btn btn-danger">Batal</button>
    </form>
    <div style="height: 15px;"></div>
    <?php
      if(isset($_SESSION['log_msg'])){
        ?>
        <div style="height: 30px;"></div>
        <div class="alert alert-danger">
          <span><center>
          <?php echo $_SESSION['log_msg'];
            unset($_SESSION['log_msg']); 
          ?>
          </center></span>
        </div>
        <?php
      }
    ?>
  </div>
    </div>
    <div class="row h-100 align-items-center justify-content-center text-center">
      <a class="btn btn-light btn-xl js-scroll-trigger" href="#contact">Belum Punya Akun?</a>
    </div>
    <br>
    <div class="row h-100 align-items-center justify-content-center text-center">
      <a class="btn btn-light btn-xl js-scroll-trigger" href="#kontak">Lupa Akun?</a>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <h2 class="text-center mt-0">Isikan Data Diri Anda</h2>
      <hr class="divider my-4">
        <div id="signup_form" class="well">
    <hr>
    <form method="POST" action="register.php">
    Email <input type="text" name="email" class="form-control" required>
    <div style="height: 10px;"></div>   
    Kata Sandi <input type="password" name="password" class="form-control" required> 
    <div style="height: 10px;"></div>
    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span>Daftar</button>
    <button value="Batal "type="reset" class="btn btn-danger">Batal</button>
    </form>
    <?php
      if(isset($_SESSION['sign_msg'])){
        ?>
        <div style="height: 40px;"></div>
        <div class="alert alert-danger">
          <span><center>
          <?php echo $_SESSION['sign_msg'];
            unset($_SESSION['sign_msg']); 
          ?>
          </center></span>
        </div>
        <?php
      }
    ?>
    
  </div>
    </div>
    <div class="row h-100 align-items-center justify-content-center text-center">
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#kontak">Kontak Kami</a>
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
