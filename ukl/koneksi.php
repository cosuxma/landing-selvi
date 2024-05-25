<?php
// isi nama host, username mysql, dan password mysql anda
$databaseHost = "localhost";
$databaseName = "pengolahan makanan";
$databaseUsername = "root";
$databasepassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasepassword, $databaseName);

//$host = mysqli_connect("localhost", "root", "");

if($mysqli){
    ("koneksi berhasil" . mysqli_connect_error());
}else{
    "koneksi gagal";
}
?>