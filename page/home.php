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
    <link rel="stylesheet" href="../assets/css/footer.style.css">

    <!-- Include Bootstrap JavaScript (and its dependencies) -->
    <script src="../node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/swiper/swiper-bundle.min.js"></script>
</head>

<body class="home-body" style="background-color: rgb(229,243,255);">
    <div class="container-fluid bg-container">
        <div class="container-fluid nav-header">

            <nav class="navbar navbar-expand-lg navbar-dark p-0 m-0">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img class="logo" src="../assets/logo/logo-transparent.png" alt="CeylonCrafter Logo" height="90"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
      
                    <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto ">
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="#">Our Packages</a>
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

            <div class="container hero-container">
                <div class="text-logo">
                    <img src="../assets/logo/logo-transparent-text.png" alt="CeylonCrafter Logo" height="100%">
                </div>
                <div class="text-hero">
                    <p class="hero-text">where every journey is a masterpiece meticulously crafted to unveil the beauty of Sri Lanka</p>
                </div>
                <div class="hero-button">
                    <button class="btn hero-btn" type="button">See Our Destinations <i id="arrow" class="bi bi-arrow-right-circle"></i></button>
                </div>
            </div>
        </div>

        <div class="swiper bg-swiper">
            <div class="swiper-wrapper bg-wrapper">
                <div class="gradient-overlay"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="container-fluid welcome-sri-lanka-container">

        <div class="container-fluid welcome-sri-lanka-content">
            <div class="container welcome-sri-lanka-text">
                <h2 class="welcome-lanka-heading">Step into the Serenity of Sri Lanka - Your Gateway to Tranquil Beauty!</h2>
                <hr class="welcome-lanka-hr">
                <br>
                <p class="welcome-lanka-paragraph">
                    <i class="bi bi-star-fill"></i> At [Your Travel Agency Name], we extend a warm and heartfelt welcome as you embark on an enchanting journey through the breathtaking landscapes, rich heritage, and warm hospitality of Sri Lanka. Nestled in the Indian Ocean, this island paradise invites you to explore its wonders, from pristine beaches and lush mountains to ancient temples and vibrant cities.
                </p>
                <br>
                <p class="welcome-lanka-paragraph">
                    <i class="bi bi-star-fill"></i> Allow us to be your trusted companion in unlocking the secrets of this tropical haven. Our team is dedicated to curating unforgettable experiences that showcase the best of Sri Lanka's diverse culture, natural beauty, and captivating history. Whether you seek adventure, romance, nature, culinary delights, or a blend of everything, our travel packages and categories are designed to cater to your every desire.
                </p>
                <br>
                <p class="welcome-lanka-paragraph">
                    <i class="bi bi-star-fill"></i> Sri Lanka's charm lies in its ability to captivate the soul, and we are here to ensure that your journey is not just a visit but an immersive and transformative experience. Let the island's warmth embrace you as you embark on a voyage filled with discovery, relaxation, and unparalleled moments. Welcome to Sri Lanka – where every step is a dance, every sight is a spectacle, and every moment is an invitation to create memories that will last a lifetime.
                </p>
                <br>
                <button class="btn see-more-btn" type="button" style="max-width: 200px;">View Gallery <i class="bi bi-caret-right" id="info-caret"></i></button>
            </div>
            
        </div>

        <div class="container-fluid welcome-overlay-gradient"></div>
        <div class="container-fluid welcome-overlay text-center">
            <img src="../assets/img/Sigiriya-1.jpg" alt="welcome-sri lanka" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </div>

    <hr class="welcome-hr">

    <main>
        <div class="container-fluid welcome-content">
            <div class="container-fluid welcome-text-container">
                <h2 class="welcome-text">Welcome to CeylonCrafter Travel Agency</h2>
                <h6 class="welcome-subtext">Unveiling the beauty of Sri Lanka</h6>
                <p class="welcome-paragraph"> <center>CeylonCrafter takes pride in turning every journey into a masterpiece,</center>
                and our dedication to exceptional customer service is the brushstroke that paints the canvas of your experience. Immerse yourself in the charm of Sri Lanka, where our unique and special services redefine the art of hospitality.</p>
                
                <div class="welcome-btn-container">
                    <button class="btn welcome-btn" type="button">Learn More About us <i id="caret" class="bi bi-caret-right"></i></i></button>
                </div>
            </div>
        </div>

        <div class="container-fluid qualities-heading text-center" style="margin-top: 7px;">
            <h2>Why choose CeylonCrafter Travels?</h2>
        </div>

        <div class="container-fluid qualities-container">

            <div class="card quality-card">
                <div class="quality-img">
                    <img src="../assets/icon/qualities/team.png" alt="team image">
                </div>
                <div class="quality-txt">
                    <p>Passionate Team</p>
                </div>
            </div>

            <div class="card quality-card">
                <div class="quality-img">
                    <img src="../assets/icon/qualities/fresh.png" alt="fresh image">
                </div>
                <div class="quality-txt">
                    <p>Fresh Perspectives</p>
                </div>
            </div>

            <div class="card quality-card">
                <div class="quality-img">
                    <img src="../assets/icon/qualities/money.png" alt="money image">
                </div>
                <div class="quality-txt">
                    <p>Competitive Pricing</p>
                </div>
            </div>

            <div class="card quality-card">
                <div class="quality-img">
                    <img src="../assets/icon/qualities/24n7.png" alt="fresh image">
                </div>
                <div class="quality-txt">
                    <p>24/7 Support</p>
                </div>
            </div>

        </div>

        <div class="container-fluid marketing-container">

            <div class="container-fluid marketing-heading">
                <h2 class="text-center">What kind of journey, do you looking for?</h2>
                <div class="marketing-content">
                    <div class="card marketing-package">
                        <h2 class="marketing-package-heading">Travel Packages</h2>
                        <p class="marketing-package-text">Embark on a journey of discovery with our meticulously crafted travel packages ranging from 2 to 7 days. Whether you're a thrill-seeker, a nature enthusiast, a culture connoisseur, or someone seeking a romantic escape, we have a package tailored just for you. Each package is a carefully designed tapestry of experiences, blending the essence of adventure, romance, nature, delectable cuisine, and cultural richness. Let us guide you through the best of Sri Lanka, creating memories that unfold like chapters of a captivating story.</p>
                        <a class="link-btn" href="../page/packages"><button class="btn see-more-btn" type="button">See More Information <i class="bi bi-caret-right" id="info-caret"></i></button></a>
                    </div>

                    <div class="card marketing-package">
                        <h2 class="marketing-package-heading">Travel Categories</h2>
                        <p class="marketing-package-text">Dive into the heart of Sri Lanka's diverse landscapes and experiences with our unique travel categories. Discover the adventurer in you with our thrilling adventure category, ignite the flames of romance in our romantic escapes, connect with nature in serene surroundings, tantalize your taste buds with our culinary explorations, and immerse yourself in the vibrant tapestry of Sri Lanka's rich culture. For the ultimate personalized journey, create your own package by handpicking your preferred locations. Your travel experience is not just a trip; it's a narrative waiting to be written, and we're here to help you craft the perfect story.</p>
                        <a class="link-btn" href="../page/categories"><button class="btn see-more-btn" type="button">See More Information <i class="bi bi-caret-right" id="info-caret"></i></button></a>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <footer>
        <div class="container-fluid picture-bg-container">
            <div class="container-fluid content-container">
                <div class="container text-container">
                    <!-- text content -->

                    <div class="container-fluid footer-container">
                        <h3 class="text-center">Subscribe to Get touch with us</h3>
                        <p class="text-center">For the latest updates and special offers.</p>
                        <form action="" method="post">
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control " placeholder="your email">
                                </div>
                                <button type="submit"class="btn btn-primary col-sm-2 col-form-label foot-btn">Submit</button>
                            </div>
                        </form>
                    </div>

                    <div class="row" style="gap: 2px; margin-top: 10px">
                        <div class="col text-left">
                            <h4>CeylonCrafter</h4>
                            <p><a href="">Privacy Policy</a></p>
                        </div>
                        <div class="col text-left">
                            <h5>Connect With us:</h5>
                            <p>CeylonCrafter Travels (Pvt) Ltd
                            <br>Address
                            <br>city, country
                            <br>Phone No
                            <br>info@CeylonCrafter.com</p>
                        </div>
                        <div class="col text-left">
                            <h5>Stay Connected:</h5>
                            <p> <a href=""><i class="bi bi-facebook"></i></a> Facebook</p>
                            <p> <a href=""><i class="bi bi-whatsapp"></i></a> Whatsapp</p>
                            <p> <a href=""><i class="bi bi-tiktok"></i></a> Tiktok</p>
                            <p> <a href=""><i class="bi bi-linkedin"></i></a> linkedin</p>
                            <p> <a href=""><i class="bi bi-instagram"></i></a> Instagram</p>
                            <p> <a href=""><i class="bi bi-youtube"></i></a> Youtube</p>
                        </div>
                    </div>

                    <div class="container-fluid footer-copyright">
                        <img src="../assets/logo/logo-transparent-text.png" alt="" srcset="">
                        <p>&copy; 2024 CeylonCrafter. All rights reserved.</p>
                    </div>
                
                </div>
            </div>

            <div class="container-fluid gradient-overlay-container"></div>
            <img src="../assets/img/train.jpg" alt="overlay img" class="overlay-img">
        </div>
    </footer>

    <!-- custom js -->
    <script src="../assets/js/img.action.js"></script>
    <script src="../assets/js/home.button.action.js"></script>
    <script src="../assets/js/home.img.action.js"></script>

</body>
</html>
