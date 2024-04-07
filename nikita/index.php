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
    <h1 style="text-align: center;">Welcome to XYZ FOODS</h1>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color: aliceblue;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="franchiselogin.php">Franchise Login</a></li>
                            <li><a class="dropdown-item" href="restaurantlogin.php">Restaurant Login</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
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

            <label for="passwwordd">Password:</label>
            <input type="password" id="passwordd" name="passwordd" placeholder="Enter Password" required>

            <input type="submit" value="Register">
        </form>
    </div>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">CSE </h2>
                        <p>The Department of CSE will create high quality professionals in Computer Science & Engineering and to foster leading edge research and to equip students to succeed and contribute to industry and society.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="https://www.youtube.com/channel/UC1Vhv8EuXUw0ZOVm3OIIfMw"><span class="icon-youtube"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/Rajarajeswari.College.of.Engineering"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/rajarajeswariengcollege/"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Events</h2>
                        <ul class="list-unstyled">
                            <li><a href="#technical" class="py-2 d-block">Technical</a></li>
                            <li><a href="#gaming" class="py-2 d-block">Gaming</a></li>
                            <li><a href="#onstage" class="py-2 d-block">On Stage</a></li>
                            <li><a href="#offstage" class="py-2 d-block">Off Stage</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Customer Support</h2>
                        <ul class="list-unstyled">
                            <li><a href="registration.php" class="py-2 d-block">Restaurants</a></li>
                            <li><a href="#events" class="py-2 d-block">Franchises</a></li>

                            <li><a href="about.php" class="py-2 d-block">Avout Us</a></li>
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
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 123456</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">abc@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This website is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://rrce.org" target="_blank">Nikita And Nameesh</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>