<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XYZ FOODS</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>

        <h1 style="font-family: Times New Roman, Times, serif">Welcome to XYZ FOODS</h1>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php" style="color:black">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/" target="_blank">Instagram</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                                Login
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="franchiselogin.php">Franchise Login</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#"></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="registration-container">
            <h2>New Franchise Registration</h2>
            <form action="connect.php" method="post">
                <label for="username">User Name:</label>
                <input type="text" id="username" name="username" placeholder="Enter User Name" required>

                <label for="numinvestors">Number of Investors:</label>
                <input type="number" id="numinvestors" name="numinvestors" placeholder="Enter Number of Investors" required>

                <label for="totalrev">Total Revenue:</label>
                <input type="number" id="totalrev" name="totalrev" placeholder="Enter Total Revenue" required>

                <label for="passwordd">Password:</label>
                <input type="password" id="passwordd" name="passwordd" placeholder="Enter Password" required>

                <input type="submit" value="Register">
            </form>
        </div>
        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Franchise Management System </h2>
                            <p>The franchise management system crafted with PHP, MySQL, HTML, CSS, and JavaScript seamlessly integrates robust functionalities for streamlined franchise operations. Leveraging PHP's server-side scripting, MySQL's database management, and HTML/CSS for intuitive interfaces, it offers comprehensive features like centralized inventory management, real-time sales tracking, and employee scheduling. JavaScript enhances user experience with dynamic elements, facilitating quick data retrieval and interactive dashboards. </p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4 ml-md-5">
                            <h2 class="ftco-heading-2">Franchise Management System</h2>
                            <ul class="list-unstyled">
                                <li><a href="https://www.tripadvisor.in/Restaurants" target="_blank" class="py-2 d-block">Restaurants</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Customer Support</h2>
                            <ul class="list-unstyled">
                                <li><a href="https://www.tripadvisor.in/Restaurants" target="_blank" class="py-2 d-block">Restaurants</a></li>
                                <li><a href="https://www.tripadvisor.in/Restaurants" target="_blank" class="py-2 d-block">Franchises</a></li>

                                <li><a href="about.php" target="_blank" class="py-2 d-block">Avout Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Have a Questions?</h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li><span class="icon icon-map-marker"></span><span class="text">
                                            Manipal University Jaipur, India. </span></li>
                                    <li><a href="tel:12345678"><span class="icon icon-phone"></span><span class="text">+91 123456</span></a></li>
                                    <li><a href="mailto:abc@gmail.com"><span class="icon icon-envelope"></span><span class="text">abc@gmail.com</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">

                        <p>
                            Copyright All rights reserved | This website is made by Nikita And Nameesh
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>