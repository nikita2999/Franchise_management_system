<?php
require("connection.php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM restaurant";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Restaurants Information</h2>";
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>Location: " . $row['llocation'] . ", Restaurant ID: " . $row['rid'] . ", Number of Employees: " . $row['noofemployees'] . ", Username: " . $row['username'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No restaurants found.";
}

mysqli_close($conn);
