<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Makanan</title>
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
        .form-container form input {
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

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT * FROM makanan2 WHERE id_makanan=$id") or die(mysqli_error());
    $data = mysqli_fetch_array($result);
}

if (isset($_POST['update'])) {
    $id = $_POST['id_makanan'];
    $nama_makanan = $_POST['nama_makanan'];
    $asal = $_POST['asal'];
    $deskripsi = $_POST['deskripsi'];
    $harga_makanan = $_POST['harga_makanan'];
    
    $update = mysqli_query($mysqli, "UPDATE makanan2 SET nama_makanan='$nama_makanan', asal='$asal', deskripsi='$deskripsi', harga_makanan='$harga_makanan' WHERE id_makanan=$id") or die(mysqli_error());

    if ($update) {
        header("Location: datamakanan.php");
    } else {
        echo "Failed to update data!";
    }
}
?>

<div class="form-container">
    <form method="POST" action="edituser.php">
        <input type="hidden" name="id_minuman" value="<?php echo $data['id_minuman']; ?>">
        <label>Nama Minuman:</label>
        <input type="text" name="nama_minuman" value="<?php echo $data['nama_minuman']; ?>" required>
        <label>Asal:</label>
        <input type="text" name="asal_minuman" value="<?php echo $data['asal_minuman']; ?>" required>
        <label>Deskripsi:</label>
        <input type="text" name="deskripsi" value="<?php echo $data['deskripsi']; ?>" required>
        <label>Harga:</label>
        <input type="text" name="harga_minuman" value="<?php echo $data['harga_minuman']; ?>" required>
        <button type="submit" name="update">Update</button>
    </form>
    <div class="back-button">
        <a href="dataminuman.php">Back to drink table</a>
    </div>
</div>

</body>
</html>
