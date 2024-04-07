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

        body {
            background: #16BFFD;
            background: -webkit-linear-gradient(to right, #CB3066, #16BFFD);
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
    </style>
</head>

<body>
    <h2>Welcome To XYZ Foods - <?php echo $_SESSION['Franchiseloginid'] ?></h2>
    <h1>Restaurant Manager</h1>
    <input type="text" id="restaurant-name" placeholder="Enter restaurant name">
    <button onclick="addRestaurant()">Add Restaurant</button>
    <ul id="restaurant-list"></ul>


    <form method="post">
        <button id="logout" type="submit" name="logout" class="btn active" data-bs-toggle="button" aria-pressed="true">Log Out</button>

    </form>
    <script>
        function addRestaurant() {
            var restaurantName = document.getElementById('restaurant-name').value;
            if (restaurantName.trim() === '') {
                alert('Please enter a restaurant name');
                return;
            }
            var li = document.createElement('li');
            li.textContent = restaurantName;
            li.classList.add('restaurant');
            var removeBtn = document.createElement('span');
            removeBtn.textContent = 'Remove';
            removeBtn.classList.add('btn');
            removeBtn.onclick = function() {
                removeRestaurant(li);
            };
            li.appendChild(removeBtn);
            document.getElementById('restaurant-list').appendChild(li);
            document.getElementById('restaurant-name').value = '';
        }

        function removeRestaurant(restaurant) {
            restaurant.remove();
        }
    </script>
    <?php
    if (isset($_POST['logout'])) {
        session_destroy();
        header('location:franchiselogin.php');
    }
    ?>
</body>

</html>