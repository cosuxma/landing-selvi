<?php
// deleteuser.php
include 'koneksi.php';

if (isset($_GET['Id'])) {
    $id_user = $_GET['Id'];

    // SQL query to delete the user
    $query = "DELETE FROM user WHERE id_user = $id_user";

    // Execute the query
    if (mysqli_query($mysqli, $query)) {
        echo "User deleted successfully.";
        // Redirect to the user list page after deletion
        header("Location: tabeluser.php");
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
