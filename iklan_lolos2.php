<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<?php
if( isset($_GET['unik2']) ){

    // ambil id dari query string
    $unik= $_GET['unik2'];
}
?>

<?php
include('koneksi.php');
mysqli_query($db,"UPDATE iklan2 SET status_iklan2='Iklan dapat ditayangkan' WHERE unik2='$unik'");
header('location:awal_admin.php');
?>