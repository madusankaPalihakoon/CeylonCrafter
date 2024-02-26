<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Packages</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/modified.css">

    <!-- Include Bootstrap JavaScript (and its dependencies) -->
    <script src="../node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="../node_modules/swiper/swiper-bundle.min.js"></script>
</head>
<body>
    <div class="nav-background">
        <!-- <img class="nav-bd-img" src="../assets/img/mountain.jpg" alt="bg-image"> -->
        <nav class="navbar navbar-expand-sm navbar-light nav-package"> <!--bg-light-->
            <div class="container">
                <a class="navbar-brand" href="#">CeylonCrafter</a>
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" aria-current="page">Beauty of ceylon</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="dropdownId"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                >Our Packages</a
                            >
                            <div
                                class="dropdown-menu"
                                aria-labelledby="dropdownId"
                            >
                                <a class="dropdown-item" href="#"
                                    >Action 1</a
                                >
                                <a class="dropdown-item" href="#"
                                    >Action 2</a
                                >
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="dropdownId"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                >Travel Category</a
                            >
                            <div
                                class="dropdown-menu"
                                aria-labelledby="dropdownId"
                            >
                                <a class="dropdown-item" href="#"
                                    >Action 1</a
                                >
                                <a class="dropdown-item" href="#"
                                    >Action 2</a
                                >
                            </div>
                        </li>
                        <div class="nav-item">
                            <a class="nav-link" href="#" aria-current="page">Contact Us</a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="packages-details">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">

                        <div class="card package-data swiper-slide">
                            <a href="#">
                            <figure class="figure package-figure">
                                <h2 class="package-caption">Nature</h2>
                                <img src="../assets/img/natural.jpg" class="figure-img img-fluid rounded" alt="nature">
                            </figure>
                            </a>
                        </div>

                        <div class="card package-data swiper-slide">
                            <figure class="figure package-figure">
                                <h2 class="package-caption">Adventure</h2>
                                <img src="../assets/img/adventure.jpg" class="figure-img img-fluid rounded" alt="nature">
                            </figure>
                        </div>

                        <div class="card package-data swiper-slide">
                            <figure class="figure package-figure">
                                <h2 class="package-caption">Cultural</h2>
                                <img src="../assets/img/cultural.jpg" class="figure-img img-fluid rounded" alt="nature">
                            </figure>
                        </div>

                        <div class="card package-data swiper-slide">
                            <figure class="figure package-figure">
                                <h2 class="package-caption">Wild Life</h2>
                                <img src="../assets/img/wildlife.jpg" class="figure-img img-fluid rounded" alt="nature">
                            </figure>
                        </div>

                        <div class="card package-data swiper-slide">
                            <figure class="figure package-figure">
                                <img src="../assets/img/historical.jpg" class="figure-img img-fluid rounded" alt="nature">
                            </figure>
                        </div>

                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <script src="../assets/js/package.img.action.js"></script>
</body>
</html>