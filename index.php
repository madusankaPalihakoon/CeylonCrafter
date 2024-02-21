<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CeylonCrafter Travel Planning Agency</title>
    <link rel="stylesheet" href="assets/css/modified.css">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Include Bootstrap JavaScript (and its dependencies) -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body>

    <header>
        <h1>CeylonCrafter</h1>
        <p>where every journey is a masterpiece meticulously crafted to unveil the beauty of Sri Lanka</p>
    </header>

    <div id="imgThumbnail" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#imgThumbnail" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#imgThumbnail" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="card" id="packages">
        <div class="row w-100">
            <div class="col w-50" id="package-img">
                <img class="card-img" src="assets/img/animal.jpg" alt="">
            </div>
            <div class="col w-50" id="package-txt">
                <h2>Our Packages</h2>
                <hr class="heading-hr">
                <p>Welcome to our diverse range of packages, thoughtfully designed to cater to various categories and preferences. Explore the possibilities as you create your personalized package to suit your unique needs. Click the button below to discover our selection and embark on a tailored experience just for you. Your perfect package awaits!</p>
                <a href="pages/packages" role="btn" class="btn btn-outline-primary" id="card-btn">View Packages</a>
            </div>
        </div>
    </div>

    <div class="card" id="catagories">
        <div class="row w-100">
            <div class="col w-50" id="catagories-txt">
                <h2>Travel Categories</h2>
                <hr class="heading-hr">
                <p>Embark on your dream journey with ease by selecting from our array of travel categories tailored to match your unique interests. Whether you're an adventure seeker, a culture enthusiast, or simply looking for a relaxing getaway, we've got the perfect category for you. Dive into the excitement and choose the travel experience that resonates with your passions. Your next unforgettable adventure begins here!</p>
                <ul>
                    <li>Cultural Tours</li>
                    <li>Beach Escapes</li>
                    <li>Adventure Expeditions</li>
                </ul>
                <a href="pages/categories" role="btn" class="btn btn-outline-primary" id="card-btn">View Categories</a>
            </div>
            <div class="col w-50" id="catagories-img">
                <img class="card-img" src="assets/img/mountain.jpg" alt="" srcset="">
            </div>
        </div>
    </div>

    <div class="card" id="create-package">
        <div class="row w-100">
            <div class="col w-50" id="create-package-img">
                <img class="card-img" src="assets/img/train.jpg" alt="" srcset="">
            </div>
            <div class="col w-50" id="create-package-txt">
                <h2>Create Own Package</h2>
                <hr class="heading-hr">
                <p>Craft your personalized adventure through the enchanting landscapes of Sri Lanka by creating your very own travel package. Tailor the experience to meet your specific preferences and requirements. From choosing the must-visit destinations to handpicking unique activities, this is your opportunity to design a journey that reflects your individual style of exploration. Start building your dream itinerary today and let us bring your customized Sri Lankan adventure to life!</p>
                <a href="pages/create" role="btn" class="btn btn-outline-primary" id="card-btn">Create</a>
            </div>
        </div>
    </div>

    <div class="card" id="contact">
        <div class="row w-100">
            <div class="col w-50" id="contact-txt">
                <h2>Contact Us</h2>
                <hr class="heading-hr">
                <p>Got questions or eager to book your next exciting adventure? We're here for you! Our friendly team is ready to assist and ensure you have all the information you need to make your travel plans. Whether you're seeking recommendations, clarifications, or ready to secure your booking, feel free to reach out. Your unforgettable journey is just a message or call away. Let's make your travel dreams a reality together!</p>
                <p><i class="bi bi-envelope-fill"></i>ceyloncrafter@gmail.com</p>
                <p><i class="bi bi-whatsapp"></i>+1 (555) 123-4567</p>
                <p><i class="bi bi-telephone-fill"></i>+1 (555) 123-4567
            </div>
            <div class="col w-50" id="contact-img">
                <img class="card-img" src="assets/img/orchid-213171_1920.jpg" alt="" srcset="">
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Sri Lanka Travel Planning Agency. All rights reserved.</p>
    </footer>

    <script src="assets/js/img.action.js"></script>

</body>

</html>
