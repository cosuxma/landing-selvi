<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Minuman</title>
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
    $nama_minuman = $_POST['nama_minuman'];
    $asal_minuman = $_POST['asal_minuman'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_POST['foto'];
    $harga = $_POST['harga_minuman'];

    $insert = mysqli_query($mysqli, "INSERT INTO minuman (nama_minuman, asal_minuman, deskripsi, foto, harga_minuman) VALUES ('$nama_minuman', '$asal_minuman', '$deskripsi', '$foto', '$harga')") or die(mysqli_error($mysqli));

    if ($insert) {
        header("Location: dataminuman.php");
        exit();
    } else {
        echo "Gagal menambahkan data!";
    }
}
?>

<div class="form-container">
    <form action="tambahdataminuman.php" method="POST">
        <label>Nama Minuman:</label>
        <input type="text" name="nama_minuman" required>
        <label>Asal:</label>
        <input type="text" name="asal_minuman" required>
        <label>Deskripsi:</label>
        <textarea name="deskripsi" required></textarea>
        <label>Foto:</label>
        <input type="text" name="foto" required>
        <label>Harga:</label>
        <input type="text" name="harga_minuman" required>
        <button type="submit" name="submit">Tambah</button>
        <a href="dataminuman.php"></a>
    </form>
    <div class="back-button">
        <a href="dataminuman.php">Kembali ke Tabel Makanan</a>
    </div>
</div>

</body>
</html>