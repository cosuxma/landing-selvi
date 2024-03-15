<?php
    include "service/databese.php";
    session_start();

    $register_message = "";

    if(isset($_SESSION["is_login"])) {
        header("location: dashboard.php");
    }

    if(isset($_POST["register"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
    }

        try {
            $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
       
            if($db->query($sql)) {
                $register_message = "daftar akun berhasil, silahkan login";
            }else {
                $register_message = "daftar akun gagal, silahkan coba lagi";
            }
        }catch (mysqli_sql_exception) {
                $register_message = "";
    }   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body align="center" style="background-color: #EADFB4;">
    <?php include "layout/header-cl.html" ?>
    <div class="container">
        <h1>Silahkan buat akun</h1>

     <i><?= $register_message ?></i>


    <form action="register.php" method="POST" style="padding: 35px;  solid black ;display: flex; flex-direction: column; align-items:center;">
      <input style="width: 150px; height: 32px; border: 1px black solid;" type="text" placeholder="username" name="username"/>
      <input style="margin-top: 16px; width: 150px; height: 32px; border: 1px black solid;" type="password" placeholder="password" name="password"/>
      <button style="margin-top: 16px; color: white;width: 150px; height: 32px; background-color: black; border: 1px black solid;" type="submit" name="register">sign up</button>  
    </form>
    <p><a href="login.php">sign in</a></p>
    </div>
</body>
</html>
