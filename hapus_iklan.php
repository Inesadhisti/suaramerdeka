<?php

include("koneksi.php");

if( isset($_GET['unik']) ){

    // ambil id dari query string
    $unik= $_GET['unik'];
}
?>

<?php
include('koneksi.php');
mysqli_query($db,"DELETE FROM iklan WHERE unik = '$unik';");
header('location:index.php');
?>