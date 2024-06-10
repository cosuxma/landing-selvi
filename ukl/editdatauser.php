<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User</title>
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
    $result = mysqli_query($mysqli, "SELECT * FROM user WHERE id_user=$id") or die(mysqli_error());
    $data = mysqli_fetch_array($result);
}

if (isset($_POST['update'])) {
    $id = $_POST['id_user'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $update = mysqli_query($mysqli, "UPDATE user SET username='$username', email='$email' WHERE id_user=$id") or die(mysqli_error());

    if ($update) {
        header("Location: tabeluser.php");
    } else {
        echo "Failed to update data!";
    }
}
?>

<div class="form-container">
    <form method="POST" action="edituser.php">
        <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
        <label>Username:</label>
        <input type="text" name="username" value="<?php echo $data['username']; ?>" required>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $data['email']; ?>" required>
        <button type="submit" name="update">Update</button>
    </form>
    <div class="back-button">
        <a href="tabeluser.php">Back to user table</a>
        <a href="tabeluser.php">Next to makanan table</a>
        <a href="tabeluser.php">Next to minuman table</a>
    </div>
</div>

</body>
</html>
