<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Geetashry NGO</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="mandala">
    </div>


    <!--Navbar Starts-->
    <?php

    include("navbar.php");

    ?>

    <!--Navbar Ends-->

    <!--Main Content Start-->


    <header class="about-header">
        <h1>Featured Event</h1>
    </header>

    <!-- About Section -->

    <!-- Events Section -->
    <section class="events-section">
        <div class="container">
            <!-- Featured Event -->
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="featured-event d-flex align-items-center">
                        <div class="featured-event-content">
                            <h2>Featured Event: Annual Fundraising Gala</h2>
                            <p class="event-date">October 15, 2024</p>
                            <p>Join us for our Annual Fundraising Gala, an evening of inspiration, entertainment, and community spirit. Your presence will support our ongoing projects and initiatives. Don't miss out on this memorable event!</p>
                            <a href="event-detail.html" class="btn-view-more">Learn More</a>
                        </div>
                        <img src="Assets/cyber.png" alt="Featured Event">
                    </div>
                </div>
            </div>

            <!-- Upcoming Events -->
            <div class="row mb-5">
                <div class="col-md-12">
                    <h2 class="mb-4">Upcoming Events</h2>
                    <div class="row">
                        <!-- Event Card 1 -->
                        <div class="col-md-4 mb-4">
                            <div class="event-card">
                                <img src="Assets/drug.png" class="event-image" alt="Event 1">
                                <div class="event-content">
                                    <h3>Community Outreach Program</h3>
                                    <p class="event-date">August 25, 2024</p>
                                    <p>Our community outreach program focuses on providing essential services and support to underserved communities. Join us in making a difference!</p>
                                    <a href="event-detail.html" class="btn-view-more">Learn More</a>
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 2 -->
                        <div class="col-md-4 mb-4">
                            <div class="event-card">
                                <img src="Assets/drug.png" class="event-image" alt="Event 2">
                                <div class="event-content">
                                    <h3>Skill Development Workshop</h3>
                                    <p class="event-date">September 10, 2024</p>
                                    <p>Empowering individuals through skill development workshops that enhance their career prospects and personal growth. Register now to be a part of this transformative experience!</p>
                                    <a href="event-detail.html" class="btn-view-more">Learn More</a>
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 3 -->
                        <div class="col-md-4 mb-4">
                            <div class="event-card">
                                <img src="Assets/drug.png" class="event-image" alt="Event 3">
                                <div class="event-content">
                                    <h3>Annual Volunteer Appreciation Day</h3>
                                    <p class="event-date">November 5, 2024</p>
                                    <p>Celebrating the incredible contributions of our volunteers with a day of recognition and appreciation. Join us to honor those who make our work possible!</p>
                                    <a href="event-detail.html" class="btn-view-more">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Past Events -->
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-4">Past Events</h2>
                    <div class="row">
                        <!-- Event Card 4 -->
                        <div class="col-md-4 mb-4">
                            <div class="event-card">
                                <img src="Assets/mannagement.jpeg" class="event-image" alt="Past Event 1">
                                <div class="event-content">
                                    <h3>Charity Run 2024</h3>
                                    <p class="event-date">July 20, 2024</p>
                                    <p>Our Charity Run was a huge success, with participants from all over coming together to support our cause. Thank you to everyone who made it a memorable day!</p>
                                    <a href="event-detail.html" class="btn-view-more">View Details</a>
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 5 -->
                        <div class="col-md-4 mb-4">
                            <div class="event-card">
                                <img src="Assets/mannagement.jpeg" class="event-image" alt="Past Event 2">
                                <div class="event-content">
                                    <h3>Summer Festival</h3>
                                    <p class="event-date">June 15, 2024</p>
                                    <p>The Summer Festival brought together families and friends for a day of fun, food, and community spirit. A big thank you to all who participated and supported!</p>
                                    <a href="event-detail.html" class="btn-view-more">View Details</a>
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 6 -->
                        <div class="col-md-4 mb-4">
                            <div class="event-card">
                                <img src="Assets/mannagement.jpeg" class="event-image" alt="Past Event 3">
                                <div class="event-content">
                                    <h3>Winter Gala</h3>
                                    <p class="event-date">December 10, 2023</p>
                                    <p>Our Winter Gala was a beautiful evening filled with joy and generosity. Thank you to all our supporters who made it a special event.</p>
                                    <a href="event-detail.html" class="btn-view-more">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Main Content Ends-->


    <!--Footer Start-->

    <?php
    include("footer.php");
    ?>

    <!--Footer End-->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</body>

</html>