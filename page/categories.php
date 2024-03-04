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
                            <a class="nav-link mx-2" href="#">Our Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 active" href="#">Travel Category</a>
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
                        <div class="swiper-slide" onclick="scrollToContainer('nature')">
                            <h2 class="package-heading">Nature's Embrace</h2>
                            <img class="package-img" src="../assets/img/category/Nature's_Embrace.png" alt="">
                        </div>
                        <div class="swiper-slide" onclick="scrollToContainer('serenity')">
                            <h2 class="package-heading">Sun-kissed Serenity</h2>
                            <img src="../assets/img/category/Sun-kissed-Serenity.png" alt="">
                        </div>
                        <div class="swiper-slide" onclick="scrollToContainer('adventure')">
                            <h2 class="package-heading">Adventure Haven</h2>
                            <img src="../assets/img/category/Adventure-Haven.png" alt="">
                        </div>
                        <div class="swiper-slide" onclick="scrollToContainer('Ayurvedic')">
                            <h2 class="package-heading">Ayurvedic Bliss</h2>
                            <img src="../assets/img/category/Ayurvedic-Bliss.png" alt="">
                        </div>
                        <div class="swiper-slide" onclick="scrollToContainer('gastronomic')">
                            <h2 class="package-heading">Gastronomic Delight</h2>
                            <img src="../assets/img/category/Gastronomic-Deligh.png" alt="">
                        </div>
                        <div class="swiper-slide" onclick="scrollToContainer('sacred')">
                            <h2 class="package-heading">Sacred Pilgrimage</h2>
                            <img src="../assets/img/category/Sacred-Pilgrimage.png" alt="">
                        </div>
                        <div class="swiper-slide" onclick="scrollToContainer('Ecological')">
                            <h2 class="package-heading">Ecological Explorations</h2>
                            <img src="../assets/img/category/Ecological-Explorations.png" alt="">
                        </div>
                        <div class="swiper-slide" onclick="scrollToContainer('Shutterbug')">
                            <h2 class="package-heading">Shutterbug's Paradise</h2>
                            <img src="../assets/img/category/Shutterbug's-Paradise.jpg" alt="">
                        </div>
                        <div class="swiper-slide" onclick="scrollToContainer('Romantic')">
                            <h2 class="package-heading">Romantic Retreat</h2>
                            <img src="../assets/img/category/Romantic-Retreat.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </div>
    </header>

    <hr class="welcome-hr">

    <main>
        <!-- Nature's Embrace -->
        <div class="container-fluid picture-bg-container" id="nature">
            <div class="container-fluid content-container">
                <div class="container text-container">
                    <!-- text content -->
                    <h2>Nature's Embrace</h2>
                    <p>Sri Lanka, with its lush landscapes and diverse wildlife, beckons nature enthusiasts seeking to immerse themselves in the embrace of its natural beauty.</p>
                    <p>Nature's Embrace in Sri Lanka is a captivating experience that unfolds in the heart of this tropical paradise. Blessed with lush landscapes, Sri Lanka invites travelers to immerse themselves in the harmonious embrace of nature. The island boasts a diverse range of ecosystems, from pristine beaches to verdant tea plantations, ancient rainforests to mist-covered mountains. Visitors can witness the breathtaking sunrise atop the iconic Sigiriya Rock, stroll through the aromatic spice gardens, or embark on a safari in one of the country's national parks to encounter majestic elephants and elusive leopards. Sri Lanka's biodiversity is a testament to its commitment to conservation, with protected areas preserving the unique flora and fauna. The warmth of the people, coupled with the vibrant colors of festivals and ceremonies, further enhances the experience, creating an indelible connection between travelers and the enchanting embrace of Sri Lanka's natural wonders.</p>
                    <a class="btn btn-primary package_details" href="#" role="button">More Details <i id="pkge-details-caret" class="bi bi-caret-right"></i></a>
                </div>
            </div>

            <div class="container-fluid gradient-overlay-container"></div>
            <img src="../assets/img/Nature's Embrace01.jpg" alt="overlay img" class="overlay-img">
        </div>

        <!-- Sun-kissed Serenity -->
        <div class="container-fluid picture-bg-container" id="serenity">
            <div class="container-fluid content-container">
                <div class="container text-container">
                    <!-- text content -->
                    <h2>Sun-kissed Serenity</h2>
                    <p>The pristine beaches along Sri Lanka's coasts attract sun-seekers in search of serenity and relaxation, where golden sands meet the gentle waves of the Indian Ocean.</p>
                    <p>Sun-kissed serenity defines the magical allure of destinations like Sri Lanka, where the golden rays of the sun seamlessly blend with the tranquility of nature. Sri Lanka's sun-kissed landscapes range from pristine beaches with powdery sands to ancient temples bathed in a warm, ethereal glow. As the sun sets over the Indian Ocean, it paints the skies in hues of pink and orange, creating a breathtaking canvas. The serenity of Sri Lanka extends to its lush greenery, where tea plantations carpet the hills, and dense forests teem with wildlife. Whether exploring historic sites like the ancient city of Polonnaruwa or simply unwinding on the shores of Mirissa Beach, the sun-kissed serenity of Sri Lanka leaves an indelible impression, inviting travelers to bask in the beauty of a land touched by the gentle warmth of the tropical sun.</p>
                    <a class="btn btn-primary package_details" href="#" role="button">More Details <i id="pkge-details-caret" class="bi bi-caret-right"></i></a>
                </div>
            </div>

            <div class="container-fluid gradient-overlay-container"></div>
            <img src="../assets/img/Sun-kissed-Serenity.jpg" alt="overlay img" class="overlay-img">
        </div>

        <!-- Adventure Haven -->
        <div class="container-fluid picture-bg-container" id="adventure">
            <div class="container-fluid content-container">
                <div class="container text-container">
                    <!-- text content -->
                    <h2>Adventure Haven</h2>
                    <p>Thrill-seekers are drawn to Sri Lanka as an adventure haven, with opportunities for trekking, hiking, water sports, and adrenaline-pumping activities in its diverse terrains.</p>
                    <p>Nestled within the heart of Sri Lanka is an adventure haven, a paradise for thrill-seekers and nature enthusiasts alike. From the mist-covered peaks of the central highlands to the untamed wilderness of national parks, Sri Lanka offers a diverse playground for those seeking adrenaline-fueled experiences. The island's topography beckons intrepid souls with opportunities for trekking, rock climbing, and white-water rafting. The lush rainforests conceal hidden trails, inviting exploration, while the coastline provides the perfect setting for surfing and snorkeling adventures. Cultural escapades also abound, with ancient ruins and historical sites adding a unique dimension to the thrill of discovery. Sri Lanka's warm hospitality and vibrant culture create an inviting atmosphere for those seeking the perfect blend of excitement and exploration, making it an adventure haven like no other.</p>
                    <a class="btn btn-primary package_details" href="#" role="button">More Details <i id="pkge-details-caret" class="bi bi-caret-right"></i></a>
                </div>
            </div>

            <div class="container-fluid gradient-overlay-container"></div>
            <img src="../assets/img/Adventure-Haven.jpg" alt="overlay img" class="overlay-img">
        </div>

        <!-- Ayurvedic Bliss -->
        <div class="container-fluid picture-bg-container" id="Ayurvedic">
            <div class="container-fluid content-container">
                <div class="container text-container">
                    <!-- text content -->
                    <h2>Ayurvedic Bliss</h2>
                    <p>Travelers seeking holistic wellness and rejuvenation come for Ayurvedic bliss, indulging in traditional treatments and embracing a wellness-focused journey.</p>
                    <p>Embark on a journey of Ayurvedic bliss in the serene landscapes of Sri Lanka, where the ancient healing traditions of Ayurveda harmonize with the natural beauty of the island. Nestled amidst lush greenery and beside tranquil waters, Ayurvedic retreats offer a haven for rejuvenation and holistic well-being. Visitors can indulge in traditional Ayurvedic treatments, tailored to restore balance and vitality to mind, body, and spirit. From soothing herbal massages to cleansing therapies, each experience is crafted to promote inner harmony. The aromatic gardens and herbal plantations surrounding these retreats contribute to the therapeutic ambiance, creating a sanctuary for relaxation. Sri Lanka's rich Ayurvedic heritage, coupled with skilled practitioners, ensures an immersive journey into wellness. As the senses are gently awakened and nourished, guests find themselves enveloped in a state of Ayurvedic bliss, leaving behind the stresses of modern life and embracing a profound sense of rejuvenation in this tropical sanctuary.</p>
                    <a class="btn btn-primary package_details" href="#" role="button">More Details <i id="pkge-details-caret" class="bi bi-caret-right"></i></a>
                </div>
            </div>

            <div class="container-fluid gradient-overlay-container"></div>
            <img src="../assets/img/Ayurvedic-Bliss.jpg" alt="overlay img" class="overlay-img">
        </div>

        <!-- Gastronomic Delight -->
        <div class="container-fluid picture-bg-container" id="gastronomic">
            <div class="container-fluid content-container">
                <div class="container text-container">
                    <!-- text content -->
                    <h2>Gastronomic Delight</h2>
                    <p>Sri Lanka's vibrant and flavorful cuisine becomes a magnet for those on a gastronomic delight, eager to savor the unique tastes and spices of the island.</p>
                    <p>Sri Lanka unfolds as a gastronomic delight, captivating the senses with its diverse and flavorful culinary offerings. From bustling street markets to elegant dining establishments, the island's food scene mirrors its rich cultural tapestry. The aromatic spices that define Sri Lankan cuisine, such as cinnamon, cardamom, and curry leaves, infuse each dish with a distinctive and tantalizing taste. Indulge in traditional rice and curry feasts, where an array of curries, sambols, and chutneys create a symphony of flavors. Seafood enthusiasts can savor the freshest catches along the coastal regions, while the central highlands boast delectable tea-infused treats and sweet delights. Street food vendors beckon with savory snacks like kottu roti and hoppers, providing a delightful culinary adventure for those with an adventurous palate. The warmth of Sri Lankan hospitality extends to the dining experience, making every meal a celebration of taste, tradition, and the sheer joy of indulging in a gastronomic journey that reflects the heart and soul of this enchanting island.</p>
                    <a class="btn btn-primary package_details" href="#" role="button">More Details <i id="pkge-details-caret" class="bi bi-caret-right"></i></a>
                </div>
            </div>

            <div class="container-fluid gradient-overlay-container"></div>
            <img src="../assets/img/Gastronomic-Deligh.png" alt="overlay img" class="overlay-img">
        </div>

        <!-- Sacred Pilgrimage -->
        <div class="container-fluid picture-bg-container" id="sacred">
            <div class="container-fluid content-container">
                <div class="container text-container">
                    <!-- text content -->
                    <h2>Sacred Pilgrimage</h2>
                    <p>Pilgrims and spiritual seekers undertake a sacred pilgrimage to Sri Lanka, visiting revered sites and participating in religious ceremonies that hold deep cultural significance.</p>
                    <p>Embarking on a sacred pilgrimage in Sri Lanka is an ethereal journey that transcends time and connects travelers with the island's spiritual tapestry. The revered sites and ancient temples scattered across the landscape bear witness to centuries of devotion and cultural heritage. Pilgrims often find solace in the sacred city of Kandy, home to the Temple of the Tooth Relic, a place of worship housing a relic believed to be a tooth of the Buddha. The rock fortress of Sigiriya, with its ancient frescoes and commanding views, adds a mystical touch to the pilgrimage. Anuradhapura and Polonnaruwa, both UNESCO World Heritage Sites, host ancient stupas and dagobas that echo with the echoes of prayers from generations past. The serene atmospheres of these sacred spaces, coupled with the rhythmic chants and rituals, create a profound and spiritual experience, offering pilgrims a chance to reflect, meditate, and find a deep connection with the spiritual essence of Sri Lanka.</p>
                    <a class="btn btn-primary package_details" href="#" role="button">More Details <i id="pkge-details-caret" class="bi bi-caret-right"></i></a>
                </div>
            </div>

            <div class="container-fluid gradient-overlay-container"></div>
            <img src="../assets/img/Sacred-Pilgrimage.jpg" alt="overlay img" class="overlay-img">
        </div>

        <!-- Ecological Explorations -->
        <div class="container-fluid picture-bg-container" id="Ecological">
            <div class="container-fluid content-container">
                <div class="container text-container">
                    <!-- text content -->
                    <h2>Ecological Explorations</h2>
                    <p>Eco-conscious travelers engage in ecological explorations, discovering the biodiversity of Sri Lanka and supporting sustainable tourism initiatives.</p>
                    <p>Embark on ecological explorations in the breathtaking landscapes of Sri Lanka, where nature's wonders unfold in a symphony of biodiversity and pristine beauty. The island's ecological diversity ranges from lush rainforests to arid savannas, making it a haven for those seeking immersive experiences in nature. Explore Sinharaja Forest Reserve, a UNESCO World Heritage Site, where endemic species thrive amidst ancient trees and vibrant flora. Yala National Park, renowned for its leopard population, invites wildlife enthusiasts on thrilling safaris amidst diverse ecosystems. Sri Lanka's coastal areas, like Mirissa, host marine sanctuaries where one can witness majestic whales and playful dolphins in their natural habitat. Eco-friendly initiatives and conservation projects further emphasize Sri Lanka's commitment to preserving its natural treasures. As you traverse through tea plantations, misty mountains, and serene lakes, the ecological explorations in Sri Lanka unveil a profound connection with the environment, leaving indelible memories of a journey where conservation and adventure seamlessly intertwine.</p>
                    <a class="btn btn-primary package_details" href="#" role="button">More Details <i id="pkge-details-caret" class="bi bi-caret-right"></i></a>
                </div>
            </div>

            <div class="container-fluid gradient-overlay-container"></div>
            <img src="../assets/img/Ecological-Explorations.jpg" alt="overlay img" class="overlay-img">
        </div>

        <!-- Shutterbug's Paradise -->
        <div class="container-fluid picture-bg-container" id="Shutterbug">
            <div class="container-fluid content-container">
                <div class="container text-container">
                    <!-- text content -->
                    <h2>Shutterbug's Paradise</h2>
                    <p>Sri Lanka becomes a paradise for photographers, offering picturesque landscapes and vibrant cultural scenes to capture through the lens.</p>
                    <p>Sri Lanka stands as a shutterbug's paradise, a captivating realm where every corner reveals a picturesque tableau waiting to be immortalized through the lens. From the golden beaches with fishermen casting their nets against a backdrop of vibrant sunsets to the emerald tea plantations that carpet the rolling hills, the island offers a kaleidoscope of visual delights. Ancient temples adorned with intricate carvings, bustling markets brimming with colorful spices, and the serene landscapes of Sigiriya and Horton Plains National Park provide endless opportunities for stunning photographs. Wildlife enthusiasts can capture the majestic elephants and elusive leopards in their natural habitats, while the colonial architecture of Galle Fort transports photographers to a bygone era. Sri Lanka's rich cultural tapestry, combined with its diverse ecosystems, ensures that every click of the camera lens captures a unique facet of this paradisiacal island, making it a haven for photography enthusiasts seeking to freeze moments in time.</p>
                    <a class="btn btn-primary package_details" href="#" role="button">More Details <i id="pkge-details-caret" class="bi bi-caret-right"></i></a>
                </div>
            </div>

            <div class="container-fluid gradient-overlay-container"></div>
            <img src="../assets/img/Shutterbug's-Paradise.jpg" alt="overlay img" class="overlay-img">
        </div>

        <!-- Romantic Retreat -->
        <div class="container-fluid picture-bg-container" id="Romantic">
            <div class="container-fluid content-container">
                <div class="container text-container">
                    <!-- text content -->
                    <h2>Romantic Retreat</h2>
                    <p>Couples seeking a romantic getaway find their retreat in Sri Lanka, with intimate accommodations and idyllic settings perfect for creating lasting memories.</p>
                    <p>Sri Lanka unfolds as a romantic retreat, weaving together the splendors of nature, rich cultural heritage, and warm hospitality to create an idyllic setting for couples seeking intimate moments. The island's golden beaches, like Unawatuna and Mirissa, offer secluded stretches of sand kissed by the gentle waves of the Indian Ocean, providing the perfect backdrop for sunset strolls and candlelit dinners. The misty highlands of Ella and Nuwara Eliya, with their emerald tea plantations and panoramic views, create a cozy atmosphere for cuddling up amidst the cool mountain air. Historical gems like the Galle Fort, with its cobblestone streets and colonial charm, offer a romantic journey through time. Couples can also embark on a scenic train ride, sharing breathtaking vistas as they traverse the lush landscapes. Sri Lanka's boutique resorts and eco-friendly hideaways, often nestled amidst nature reserves, provide a serene escape for couples, promising a romantic retreat where love blossoms amid the enchanting allure of this tropical paradise.</p>
                    <a class="btn btn-primary package_details" href="#" role="button">More Details <i id="pkge-details-caret" class="bi bi-caret-right"></i></a>
                </div>
            </div>

            <div class="container-fluid gradient-overlay-container"></div>
            <img src="../assets/img/Romantic-Retreat.jpg" alt="overlay img" class="overlay-img">
        </div>

    </main>

    <script src="../assets/js/package.img.action.js"></script>
    <script src="../assets/js/package.btn.animation.js"></script>
    <script>
        function scrollToContainer(containerId) {
            var element = document.getElementById(containerId);
            element.scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</body>
</html>