<?php
require("connection.php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM item";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Items Information</h2>";
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>Item Quantity " . $row['iquantity'] . ", Item Id :" . $row['itemid'] . ",  Items Name:" . $row['iname'] . ", Price:" . $row['price'] . ",  Order Id:" . $row['oid'] . ", Menu Type:" . $row['menu_type'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No orders found.";
}

mysqli_close($conn);
