<?php
// Database connection details
$databaseHost = "localhost";
$databaseName = "pengolahanmakanan";
$databaseUsername = "root";
$databasePassword = "";

// Establish connection
$mysqli = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Check connection
if ($mysqli->connect_error) {
    die("Koneksi database gagal: " . $mysqli->connect_error);
} 
?>