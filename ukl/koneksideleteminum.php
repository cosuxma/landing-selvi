<?php
//koneksi database
include_once("koneksi.php");

//get id from URL to delete that user
$id = $_GET['id_minuman'];

//deleted user row from table based on given is
$result = mysqli_query($mysqli, "DELETE FROM minuman WHERE id_minuman = '$id'");

//after delete redirect to home, so that latest user list will be displayed
header("location:dataminuman.php");
?>