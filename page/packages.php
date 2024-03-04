<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CeylonCrafter Travel Planning Agency</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/icon/favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/icon/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/icon/favicon/favicon-16x16.png">
    <link rel="manifest" href="../assets/icon/favicon/site.webmanifest">
    <link rel="mask-icon" href="../assets/icon/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/modified.css">
    <link rel="stylesheet" href="../assets/css/overlay.css">

    <!-- Include Bootstrap JavaScript (and its dependencies) -->
    <script src="../node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/swiper/swiper-bundle.min.js"></script>
</head>
<body style="background-color: rgb(229,243,255);">
    <header>
        <div class="container-fluid header-main">
            <nav class="navbar navbar-expand-lg navbar-dark p-0 m-0 nav-packg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img class="logo" src="../assets/logo/logo-transparent.png" alt="CeylonCrafter Logo" height="90"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto ">
                        <li class="nav-item">
                            <a class="nav-link mx-2 " aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" href="#">Our Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="#">Travel Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="#">Blog</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Company
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Blog</a></li>
                            <li><a class="dropdown-item" href="#">About Us</a></li>
                            <li><a class="dropdown-item" href="#">Contact us</a></li>
                            </ul>
                        </li> -->
                        <li class="nav-item flare">
                            <a class="nav-link mx-2" href="#">Contact us <span class="ms-2">&#x2192;</span></a>
                        </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <img class="package-bg-overlay" src="../assets/img/Sigiriya-1.jpg" alt="" srcset="">
            <div class="package-gradient-overlay"></div>

            <div class="package-swap-main">
                <div class="swiper package-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" onclick="scrollToContainer('Weekender')">
                            <h2 class="package-heading">Weekender Escape</h2>
                            <img class="package-img" src="../assets/img/package/two-day.png" alt="">
                        </div>
                        <div class="swiper-slide" onclick="scrollToContainer('Trio')">
                            <h2 class="package-heading">Adventure Trio</h2>
                            <img src="../assets/img/package/three-day.png" alt="">
                        </div>
                        <div class="swiper-slide" onclick="scrollToContainer('Quad')">
                            <h2 class="package-heading">Explore-Xperience Quad</h2>
                            <img src="../assets/img/package/four-day.png" alt="">
                        </div>
                        <div class="swiper-slide" onclick="scrollToContainer('Five')">
                            <h2 class="package-heading">Five-Day Wanderlust</h2>
                            <img src="../assets/img/package/five-day.png" alt="">
                        </div>
                        <div class="swiper-slide" onclick="scrollToContainer('Sixer')">
                            <h2 class="package-heading">Sixer Sojourn</h2>
                            <img src="../assets/img/package/six-day.png" alt="">
                        </div>
                        <div class="swiper-slide" onclick="scrollToContainer('Weeklong')">
                            <h2 class="package-heading">Weeklong Odyssey</h2>
                            <img src="../assets/img/package/seven-day.png" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </div>
    </header>

    <main>

        <div class="container-fluid picture-bg-container" id="Weekender">
            <div class="container-fluid content-container">
                <div class="container text-container">
                    <!-- text content -->
                </div>
            </div>

            <div class="container-fluid gradient-overlay-container"></div>
            <img src="../assets/img/adventure.jpg" alt="overlay img" class="overlay-img">
        </div>

        <div class="container-fluid picture-bg-container" id="Trio">
            <div class="container-fluid content-container">
                <div class="container text-container">
                    <!-- text content -->
                </div>
            </div>

            <div class="container-fluid gradient-overlay-container"></div>
            <img src="../assets/img/adventure.jpg" alt="overlay img" class="overlay-img">
        </div>

        <div class="container-fluid picture-bg-container" id="Quad">
            <div class="container-fluid content-container">
                <div class="container text-container">
                    <!-- text content -->
                </div>
            </div>

            <div class="container-fluid gradient-overlay-container"></div>
            <img src="../assets/img/adventure.jpg" alt="overlay img" class="overlay-img">
        </div>

        <div class="container-fluid picture-bg-container" id="Five">
            <div class="container-fluid content-container">
                <div class="container text-container">
                    <!-- text content -->
                </div>
            </div>

            <div class="container-fluid gradient-overlay-container"></div>
            <img src="../assets/img/adventure.jpg" alt="overlay img" class="overlay-img">
        </div>

        <div class="container-fluid picture-bg-container" id="Sixer">
            <div class="container-fluid content-container">
                <div class="container text-container">
                    <!-- text content -->
                </div>
            </div>

            <div class="container-fluid gradient-overlay-container"></div>
            <img src="../assets/img/adventure.jpg" alt="overlay img" class="overlay-img">
        </div>

        <div class="container-fluid picture-bg-container" id="Weeklong">
            <div class="container-fluid content-container">
                <div class="container text-container">
                    <!-- text content -->
                </div>
            </div>

            <div class="container-fluid gradient-overlay-container"></div>
            <img src="../assets/img/adventure.jpg" alt="overlay img" class="overlay-img">
        </div>

    </main>

<script src="../assets/js/package.img.action.js"></script>
</body>
</html>