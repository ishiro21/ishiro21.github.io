<!--membuat file koneksi ke database-->
<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "penjadwalan";

  $conn = mysql_connect($server, $username, $password) 
  or die('Konesksi Gagal...!!!');

  $data = mysql_select_db($database, $conn) 
  or die('Database Tidak Ditemukan...!!!');
?>