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
            margin: auto;
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            overflow: auto;
            background: linear-gradient(315deg, rgba(101, 0, 94, 1) 3%, rgba(60, 132, 206, 1) 38%, rgba(48, 238, 226, 1) 68%, rgba(255, 25, 25, 1) 98%);
            animation: gradient 15s ease infinite;
            background-size: 400% 400%;
            background-attachment: fixed;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 0%;
            }

            50% {
                background-position: 100% 100%;
            }

            100% {
                background-position: 0% 0%;
            }
        }

        .wave {
            background: rgb(255 255 255 / 25%);
            border-radius: 1000% 1000% 0 0;
            position: fixed;
            width: 200%;
            height: 12em;
            animation: wave 10s -3s linear infinite;
            transform: translate3d(0, 0, 0);
            opacity: 0.8;
            bottom: 0;
            left: 0;
            z-index: -1;
        }

        .wave:nth-of-type(2) {
            bottom: -1.25em;
            animation: wave 18s linear reverse infinite;
            opacity: 0.8;
        }

        .wave:nth-of-type(3) {
            bottom: -2.5em;
            animation: wave 20s -1s reverse infinite;
            opacity: 0.9;
        }

        @keyframes wave {
            2% {
                transform: translateX(1);
            }

            25% {
                transform: translateX(-25%);
            }

            50% {
                transform: translateX(-50%);
            }

            75% {
                transform: translateX(-25%);
            }

            100% {
                transform: translateX(1);
            }
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

        #showOrdersBtn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #showOrdersBtn:hover {
            background-color: #0056b3;
        }

        #ordersInfo {
            margin-top: 20px;
        }

        #showMenuTypesBtn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #showMenuTypesBtn:hover {
            background-color: #0056b3;
        }

        #menuTypesInfo {
            margin-top: 20px;
        }

        #showItemsBtn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #showItemsBtn:hover {
            background-color: #0056b3;
        }

        #itemsInfo {
            margin-top: 20px;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #dc3545;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #c82333;
        }

        #message {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="wave"></div>
    <div class="wave"></div>
    <div class="wave"></div>
    <h2>Welcome To XYZ Foods - <?php echo $_SESSION['Franchiseloginid'] ?></h2>
    <h1>Restaurant Manager</h1>
    <div class="container">
        <h2>Add New Restaurant</h2>
        <form action="connect2.php" method="post">
            <div class="form-group">
                <label for="llocation">Location</label>
                <input type="text" id="llocation" name="llocation" placeholder="Enter location" required>
            </div>
            <div class="form-group">
                <label for="rid">Restaurant ID</label>
                <input type="number" id="rid" name="rid" placeholder="Enter restaurant ID" required>
            </div>
            <div class="form-group">
                <label for="employees">Number of Employees</label>
                <input type="number" id="employees" name="employees" placeholder="Enter number of employees" required>
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
    <button id="showOrdersBtn">Show Orders Information</button>
    <div id="ordersInfo"></div>
    <button id="showMenuTypesBtn">Show Menu Types Information</button>
    <div id="menuTypesInfo"></div>
    <button id="showItemsBtn">Show Items Information</button>
    <div id="itemsInfo"></div>
    <div class="container">
        <h2>Delete Restaurant</h2>
        <form id="deleteForm" method="post">
            <label for="ridd">Restaurant ID:</label>
            <input type="text" id="ridd" name="ridd" placeholder="Enter Restaurant ID" required>
            <input type="submit" value="Delete">
        </form>
    </div>

    <div id="message"></div>
    <form method="post" action="franchiselogin.php">
        <button id="logout" type="submit" name="logout" class="btn active" data-bs-toggle="button" aria-pressed="true">Log Out</button>
    </form>
    <script>
        document.getElementById('showRestaurantsBtn').addEventListener('click', function() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'db.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('restaurantsInfo').innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        });
    </script>
    <script>
        document.getElementById('showOrdersBtn').addEventListener('click', function() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'db2.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {

                    document.getElementById('ordersInfo').innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        });
    </script>

    <script>
        document.getElementById('showMenuTypesBtn').addEventListener('click', function() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'db3.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('menuTypesInfo').innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        });
    </script>
    <script>
        document.getElementById('showItemsBtn').addEventListener('click', function() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'db4.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('itemsInfo').innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        });
    </script>
    <script>
        document.getElementById('deleteForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var ridd = document.getElementById('ridd').value;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'delete_restaurant.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status == 200) {
                    document.getElementById('message').innerHTML = xhr.responseText;
                }
            };
            xhr.send('ridd=' + ridd);
        });
    </script>
    <?php
    if (isset($_POST['logout'])) {
        session_destroy();
        header('location:franchiselogin.php');
        exit();
    }
    ?>

</body>

</html>