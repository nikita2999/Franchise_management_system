<?php
if (isset($_POST['llocation'], $_POST['rid'], $_POST['noofemployees'], $_POST['username'])) {
    $llocation = $_POST['llocation'];
    $rid = $_POST['rid'];
    $noofemployees = $_POST['noofemployees'];
    $username = $_POST['username'];
    $conn = new mysqli('localhost:3307', 'root', '', 'project');
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO restaurant (llocation, rid, noofemployees, username) VALUES (?, ?, ?, ?)");


        if ($stmt) {

            $stmt->bind_param("siis", $llocation, $rid, $noofemployees, $username);
            $stmt->execute();
            echo "Restaurant Addition Successful...";
            $stmt->close();
        } else {
            echo "Error in preparing SQL statement: " . $conn->error;
        }

        $conn->close();
    }
} else {
    echo "Done";
}
