<?php
if (isset($_POST['username'], $_POST['numinvestors'], $_POST['totalrev'], $_POST['passwordd'])) {
    $username = $_POST['username'];
    $numinvestors = $_POST['numinvestors'];
    $totalrev = $_POST['totalrev'];
    $passwordd = $_POST['passwordd'];
    $conn = new mysqli('localhost:3307', 'root', '', 'project');
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO registration (username, numinvestors, totalrev, passwordd) VALUES (?, ?, ?, ?)");


        if ($stmt) {

            $stmt->bind_param("siis", $username, $numinvestors, $totalrev, $passwordd);
            $stmt->execute();
            echo "<script>alert('REGISTRATION SUCCESSFUL')</script>";
            $stmt->close();
        } else {
            echo "Error in preparing SQL statement: " . $conn->error;
        }

        $conn->close();
    }
} else {
    echo "One or more required fields are missing.";
}
