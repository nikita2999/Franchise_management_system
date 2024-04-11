<?php
require("connection.php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM menu";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Menu Information</h2>";
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>Menu type: " . $row['menu_type'] . ", Cuisines " . $row['cusines'] . ", Total Items " . $row['totalitems'] .  "</li>";
    }
    echo "</ul>";
} else {
    echo "No orders found.";
}

mysqli_close($conn);
