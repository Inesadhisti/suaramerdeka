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
if( isset($_GET['unik2']) ){

    // ambil id dari query string
    $unik2= $_GET['unik2'];
}
?>


<?php
include('koneksi.php');
mysqli_query($db,"DELETE FROM iklan2 WHERE unik2 = '$unik2';");
header('location:index.php');
?>