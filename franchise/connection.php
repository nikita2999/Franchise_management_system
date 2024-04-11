 <?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, "project");
    if (!$conn) {
        die("sorry the connection was not successful" . mysqli_connect_error());
    } else {
        echo ".";
    }
    echo "";
    ?>