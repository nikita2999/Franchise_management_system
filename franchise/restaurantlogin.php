<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Franchise Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #16BFFD;
            background: -webkit-linear-gradient(to right, #CB3066, #16BFFD);

            background: linear-gradient(to right, #CB3066, #16BFFD);

        }


        .login-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .login-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Restaurant Owner Login</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="Login" value="Login">
        </form>
    </div>
    <?php
    require("connection.php");

    if (isset($_POST['Login'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $query = "SELECT * FROM `restaurant_login` WHERE `restaurant_name`='$username' AND `restaurant_pass`='$password'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['restauranteloginid'] = $_POST['username'];
            header("location: restaurantpanel.php");
        } else {
            echo "<script>alert('Incorrect password');</script>";
        }
    } else {
        echo "";
    }
    ?>
</body>

</html>