<?php
require_once('db.php');
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Franchise Panel</title>
    <style>
        h2 {
            text-align: center;
            font-family: 'Courier New', "Courier", "monospace";
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        body {
            background: #16BFFD;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #CB3066, #16BFFD);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #CB3066, #16BFFD);
        }

        button {
            background-color: #f0f0f0;
            font-size: 16px;
            font-weight: 550;
            padding: 8px 12px;
            border: 2px solid black;
            border-radius: 5px;
        }

        .button {
            display: flex;
            justify-content: flex-end;
        }

        #showRestaurantsBtn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #showRestaurantsBtn:hover {
            background-color: #0056b3;
        }

        #restaurantsInfo {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h2>Welcome To XYZ Foods - <?php echo $_SESSION['Franchiseloginid'] ?></h2>
    <h1>Restaurant Manager</h1>
    <div class="container">
        <h2>Add New Restaurant</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" placeholder="Enter location" required>
            </div>
            <div class="form-group">
                <label for="restaurant-id">Restaurant ID</label>
                <input type="text" id="restaurant-id" name="restaurant-id" placeholder="Enter restaurant ID" required>
            </div>
            <div class="form-group">
                <label for="employees">Number of Employees</label>
                <input type="text" id="employees" name="employees" placeholder="Enter number of employees" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username" required>
            </div>
            <input type="submit" value="Add Restaurant">
        </form>
    </div>
    <button id="showRestaurantsBtn">Show Restaurants Information</button>
    <div id="restaurantsInfo"></div>
    <form method="post">
        <button id="logout" type="submit" name="logout" class="btn active" data-bs-toggle="button" aria-pressed="true">Log Out</button>

    </form>
    <script>
        document.getElementById('showRestaurantsBtn').addEventListener('click', function() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'db.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Displaying the fetched information
                    document.getElementById('restaurantsInfo').innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        });
    </script>

    <?php
    if (isset($_POST['logout'])) {
        session_destroy();
        header('location:franchiselogin.php');
    }
    ?>
</body>

</html>