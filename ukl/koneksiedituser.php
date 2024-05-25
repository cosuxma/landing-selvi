<?php

include ("koneksi.php");

//cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){

    $id=$_POST['id'];
    $username=$_POST['username'];
    $role=$_POST['role'];
    $email=$_POST['email'];

    // buat query update
    $result = mysqli_query($mysqli, "UPDATE user
    SET username='$username',role='$role',email='$email'
    WHERE id=$id");
    header('location:editdatauser.php');
}else{
    die("Akses dilarang....");
}
?>