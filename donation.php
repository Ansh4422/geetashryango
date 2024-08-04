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
        <h1>Donate now for a good cause</h1>
    </header>

    <!-- About Section -->

    <!-- Management Team Section -->
   <!-- Donation Section -->
  <section class="donation-section text-center">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">
          <h2 class="mb-4">Make a Difference Today</h2>
          <p>Your support helps us continue our mission and make a positive impact on the lives of those in need. Choose a donation option below or contribute directly through our secure form.</p>
        </div>
      </div>

      <div class="row">
        <!-- Donation Card 1 -->
        <div class="col-md-4 mb-4">
          <div class="donation-card h-100">
            <h3>One-Time Donation</h3>
            <p>Make a single donation to support our ongoing projects and initiatives.</p>
            <p><strong>₹500</strong></p>
            <a href="#" class="btn btn-donate">Donate Now</a>
          </div>
        </div>

        <!-- Donation Card 2 -->
        <div class="col-md-4 mb-4">
          <div class="donation-card h-100">
            <h3>Monthly Support</h3>
            <p>Provide consistent support by donating every month to help us plan and execute long-term projects.</p>
            <p><strong>₹1000</strong></p>
            <a href="#" class="btn btn-donate">Donate Monthly</a>
          </div>
        </div>

        <!-- Donation Card 3 -->
        <div class="col-md-4 mb-4">
          <div class="donation-card h-100">
            <h3>Corporate Sponsorship</h3>
            <p>Partner with us as a corporate sponsor to support our mission and gain visibility for your organization.</p>
            <p><strong>₹5000+</strong></p>
            <a href="#" class="btn btn-donate">Become a Sponsor</a>
          </div>
        </div>
      </div>

      <!-- Donation Form -->
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="donation-form">
            <h3>Donate Now</h3>
            <form>
              <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
              </div>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
              </div>
              <div class="form-group">
                <label for="amount">Donation Amount</label>
                <input type="number" class="form-control" id="amount" placeholder="Enter amount" required>
              </div>
              <div class="form-group">
                <label for="message">Message (Optional)</label>
                <textarea class="form-control" id="message" rows="3" placeholder="Add a message"></textarea>
              </div>
              <button type="submit" class="my-4 btn btn-donate btn-lg">Submit Donation</button>
            </form>
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