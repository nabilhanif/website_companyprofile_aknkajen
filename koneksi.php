<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_aknkajen";

$koneksi = mysqli_connect($host, $username, $password, $database);

if(!$koneksi){
die("<b>masih ada yang error gan degan</b> ". mysqli_connect_error());

mysqli_close($koneksi);
}



// if ($pilihdatabase) echo"Berhasil";
// else echo "Gagal Koneksi";
?>