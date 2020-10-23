<?php
   require_once("koneksi.php");
   $nama = $_POST['fullName2'];
   $alamat = $_POST['addressLine12'];
   $email = $_POST['email2'];
   $username = $_POST['namaPengguna2'];
   $pass = $_POST['kataSandi2'];
   $sql = "SELECT * FROM pemasang WHERE namapengguna2 = '$username'";
   $query = $db->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='index.html'>coba lagi</a></div>";
   } else {
     if(!$nama || !$alamat || !$email || !$username || !$pass) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='index.html'>coba lagi</a>";
     } else {
       $data = "INSERT INTO pemasang VALUES (NULL, '$nama', '$alamat', '$email', '$username', '$pass')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='index.html'>Masuk</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>