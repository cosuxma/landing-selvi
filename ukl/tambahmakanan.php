<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Makanan</title>
    <style>
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .form-container form {
            border: 1px solid #8FBC8F;
            padding: 20px;
            border-radius: 10px;
            background-color: #FAEBD7;
        }
        .form-container form input,
        .form-container form textarea {
            margin: 10px 0;
            padding: 10px;
            width: 100%;
            font-size: 18px;
            border-radius: 5px;
            border: 1px solid #8FBC8F;
        }
        .form-container form button {
            padding: 10px;
            width: 100%;
            font-size: 18px;
            border-radius: 5px;
            border: none;
            background-color: #8FBC8F;
            color: white;
            cursor: pointer;
        }
        .form-container form button:hover {
            background-color: #76A085;
        }
        .back-button {
            text-align: center;
            margin-top: 20px;
        }
        .back-button a {
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            background-color: #8FBC8F;
            color: white;
            font-size: 18px;
        }
        .back-button a:hover {
            background-color: #76A085;
        }
    </style>
</head>
<body>

<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama_makanan = $_POST['nama_makanan'];
    $asal = $_POST['asal'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_POST['foto'];
    $harga = $_POST['harga_makanan'];

    $insert = mysqli_query($mysqli, "INSERT INTO makanan2 (nama_makanan, asal, deskripsi, foto, harga_makanan) VALUES ('$nama_makanan', '$asal', '$deskripsi', '$foto', '$harga')") or die(mysqli_error($mysqli));

    if ($insert) {
        header("Location: datamakanan.php");
        exit();
    } else {
        echo "Gagal menambahkan data!";
    }
}
?>

<div class="form-container">
    <form method="POST" action="tambahdatamakanan.php">
        <label>Nama Makanan:</label>
        <input type="text" name="nama_makanan" required>
        <label>Asal:</label>
        <input type="text" name="asal" required>
        <label>Deskripsi:</label>
        <textarea name="deskripsi" required></textarea>
        <label>Foto:</label>
        <input type="text" name="foto" required>
        <label>Harga:</label>
        <input type="text" name="harga_makanan" required>
        <button type="submit" name="submit">Tambah</button>
    </form>
    <div class="back-button">
        <a href="datamakanan.php">Kembali ke Tabel Makanan</a>
    </div>
</div>

</body>
</html>