<?php
    session_start();
    if(isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">
    <?php include "layout/header cl.html" ?>

    <h3>Selamat datang <?= $_SESSION["username"] ?></h3>
    <form action="dashboard.php" method="POST">
        <button type="submit" name="logout">logout</button>
    </form>

    <?php include "layout/footer cl.html" ?>
</body>
</html>