<?php

include ("koneksi.php");

//cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){

    $id=$_POST['id_minuman'];
    $nama_minuman=$_POST['nama_minuman'];
    $asal_minuman=$_POST['asal_minuman'];
    $deskripsi=$_POST['deskripsi'];

    // buat query update
    $result = mysqli_query($mysqli, "UPDATE minuman
    SET nama_minuman='$nama_minuman',asal_minuman='$asal_minuman',deskripsi='$deskripsi'
    WHERE id_minuman=$id");
    header('location:editminum.php');
}else{
    die("Akses dilarang....");
}
?>