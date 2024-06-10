<?php
// deleteuser.php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id_user = $_GET['id'];

    // SQL query to delete the user
    $query = "DELETE FROM makanan2 WHERE id_makanan = $id_user";

    // Execute the query
    if (mysqli_query($mysqli, $query)) {
        echo "User deleted successfully.";
        // Redirect to the user list page after deletion
        header("Location: datamakanan.php");
        exit();
    } else {
        echo "Error deleting user: " . mysqli_error($mysqli);
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
mysqli_close($mysqli);
?>
