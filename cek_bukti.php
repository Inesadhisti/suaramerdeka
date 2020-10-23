<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<?php
if( isset($_GET['unik']) ){

    // ambil id dari query string
    $unik= $_GET['unik'];
}
?>

<?php
include('koneksi.php');
$aksi  = mysqli_query($db, "select * from image_tb where unik='$unik'");
$data = mysqli_fetch_array($aksi);
?>
<img src="<?php echo $data['img_location']; ?>" border="0"/>