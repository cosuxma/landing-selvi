<?php

include ("koneksi.php");

//cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){

    $id=$_POST['id_makanan'];
    $nama_makanan=$_POST['nama_makanan'];
    $asal=$_POST['asal'];
    $deskripsi=$_POST['deskripsi'];

    // buat query update
    $result = mysqli_query($mysqli, "UPDATE makanan2
    SET nama_makanan='$nama_makanan',asal='$asal',deskripsi='$deskripsi'
    WHERE id_makanan=$id");
    header('location:editmakan.php');
}else{
    die("Akses dilarang....");
}
?>