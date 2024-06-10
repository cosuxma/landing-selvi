<?php
// deleteuser.php
include 'koneksi.php';

if (isset($_GET['id_minuman'])) {
    $id_minuman = $_GET['id_minuman'];

    // SQL query to delete the user
    $query = "DELETE FROM minuman WHERE id_minuman = $id_minuman";

    // Execute the query
    if (mysqli_query($mysqli, $query)) {
        echo "User deleted successfully.";
        // Redirect to the user list page after deletion
        header("Location: dataminuman.php");
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
