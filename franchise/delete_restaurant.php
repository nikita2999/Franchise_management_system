<?php
require("connection.php");

if (isset($_POST['ridd'])) {
    $ridd = mysqli_real_escape_string($conn, $_POST['ridd']);

    $query = "DELETE FROM restaurant WHERE `rid` = '$ridd'";
    if (mysqli_query($conn, $query)) {
        echo "Restaurant with RID: $ridd deleted successfully.";
    } else {
        echo "Error deleting restaurant: " . mysqli_error($conn);
    }
} else {
    echo "Restaurant ID not provided.";
}

mysqli_close($conn);
