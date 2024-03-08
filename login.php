<?php
    include "service/databese.php";
    session_start();
       
    $login_message = "";

    if(isset($_SESSION["is_login"])) {
        header("location: dashboard.php");
    }

    if(isset($_POST['login'])) {
       $username = $_POST['username'];
       $password = $_POST['password'];

       $sql ="SELECT * FROM users  WHERE username='$username' AND 
       password='$password' 
       ";
       
       $result = $db->query($sql);

       if($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $_SESSION["username"] = $data["username"];
            $_SESSION["is_login"] = true;

            header("location: dashboard.php");
            
       }else {
            $login_message = "akun tidak ditemukan";
       }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center" style="background-color: #EADFB4;">
    <?php include "layout/header cl.html" ?>
    <h3>MASUK AKUN</h3>
     <i><?= $login_message ?></i>


    <form action="login.php" method="POST" style="padding: 32px; border: 2px solid black ;display: flex; flex-direction: column; align-items:center;">
      <input style="width: 150px; height: 32px; border: 1px black solid;" type="text" placeholder="username" name="username"/>
      <input style="margin-top: 16px; width: 150px; height: 32px; border: 1px black solid;" type="password" placeholder="password" name="password"/>
      <button style="margin-top: 16px; color: white;width: 150px; height: 32px; background-color: black; border: 1px black solid;" type="submit" name="login">masuk sekarang</button>  
    </form>

    <?php include "layout/footer cl.html" ?>
</body>
</html>