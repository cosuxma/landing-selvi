<?php
// order.php

// Include koneksi database
include 'koneksi.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize the posted data
    $id_makanan = mysqli_real_escape_string($mysqli, $_POST['id_makanan']);
    $quantity = mysqli_real_escape_string($mysqli, $_POST['quantity']);

    // Query to get the details of the selected food item
    $query = "SELECT * FROM makanan2 WHERE id_makanan = '$id_makanan'";
    $result = mysqli_query($mysqli, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_array($result);
        $nama_makanan = $data['nama_makanan'];
        $harga_makanan = $data['harga_makanan'];
        $total_harga = $harga_makanan * $quantity;

        // Insert order into the database
        $insert_query = "INSERT INTO orders (id_makanan, quantity, total_harga) VALUES ('$id_makanan', '$quantity', '$total_harga')";
        if (mysqli_query($mysqli, $insert_query)) {
            echo "<h1>Order Confirmation</h1>";
            echo "<p>Thank you for your order!</p>";
            echo "<p>Food: $nama_makanan</p>";
            echo "<p>Quantity: $quantity</p>";
            echo "<p>Total Price: Rp$total_harga</p>";
        } else {
            echo "<p>There was an error processing your order: " . mysqli_error($mysqli) . "</p>";
        }
    } else {
        echo "<p>Invalid food item.</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
}
?>
