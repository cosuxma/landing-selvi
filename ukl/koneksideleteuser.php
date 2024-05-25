<?php
//koneksi database
include_once("koneksi.php");

//get id from URL to delete that user
$id = $_GET['Id'];

//deleted user row from table based on given is
$result = mysqli_query($mysqli, "DELETE FROM user WHERE Id = '$id'");

//after delete redirect to home, so that latest user list will be displayed
header("location:tabeluser.php");
?>