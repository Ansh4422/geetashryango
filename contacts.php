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
        <h1>Contact Page</h1>
    </header>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <!-- Contact Info -->
                <div class="col-md-4 contact-info">
                    <h2>Contact Us</h2>
                    <p><strong>Email:</strong> <a href="mailto:geetasryasrvasansthaan@gmail.com">geetasryasrvasansthaan@gmail.com</a></p>
                    <p><strong>Phone:</strong> <a href="tel:+917388102141">+91 7388102141</a></p>
                    <p><strong>Website:</strong> <a href="http://www.geetasryasevasansthaan.org/" target="_blank">www.geetasryasevasansthaan.org</a></p>
                    <p><strong>Head Office:</strong> 25, Pausalaha, VILL-Paldev Majhgawa, District-Satna, Madhya Pradesh 485334</p>
                </div>

                <!-- Contact Form -->
                <div class="col-md-8">
                    <div class="contact-form">
                        <h2>Send Us a Message</h2>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Map -->
            <div class="row my-5">
                <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d7238.032695457757!2d80.818295!3d24.897424!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjTCsDUzJzUwLjciTiA4MMKwNDknMTUuMSJF!5e0!3m2!1sen!2sin!4v1722771173550!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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