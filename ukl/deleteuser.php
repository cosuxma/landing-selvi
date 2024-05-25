<?php
$mysqli = new mysqli('localhost', 'root', '', 'pengolahan makanan');
    $Id=$_GET["Id"];

    $result= mysqli_query($mysqli, "DELETE FROM user WHERE Id='$Id'");
    header("location:tabeluser.php");
?>