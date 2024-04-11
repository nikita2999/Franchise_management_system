<?php
require("connection.php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM orders";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Orders Information</h2>";
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>Quantity: " . $row['quantity'] . ", Date: " . $row['date'] . ", SSN: " . $row['ssn'] . ", RID: " . $row['rid'] . ",Order ID:" . $row['oid'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No orders found.";
}

mysqli_close($conn);
