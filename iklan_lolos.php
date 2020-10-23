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
mysqli_query($db,"UPDATE iklan SET status_iklan='Iklan dapat ditayangkan' WHERE unik='$unik'");
header('location:awal_admin.php');
?>