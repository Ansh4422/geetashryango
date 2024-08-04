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

  <!--Header Start-->
  <header class="container my-3">
    <div class="row no-gutters">
      <div class="col-md-6">
        <!-- Swiper -->
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="Assets/header.jpg" class="rounded shadow" alt=""></div>
            <div class="swiper-slide"><img src="Assets/header.jpg" class="rounded shadow" alt=""></div>
            <div class="swiper-slide"><img src="Assets/header.jpg" class="rounded shadow" alt=""></div>
            <!-- Add more slides as needed -->
          </div>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-center justify-content-center">
        <div class="text-content">
          <h1>Welcome to <span class="text-primary">Geetashrya Seva Sansthan</span></h1>
          <h5><i>"Empowering communities through compassion and action"</i></h5>
          <br>
          <h3 class="text-success">"Together, our efforts can bring about positive change in someone's life."</h3>
          <button class="btn btn-warning my-3 btn-lg text-white shadow">Donate Now</button>
        </div>
      </div>
    </div>
  </header>
  <!--Header Ends-->

  <!--Donation Cards Start-->
  <div class="container mt-5 donation">
    <div class="row">
      <!-- Make Donation Card -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <i class="fas fa-hand-holding-heart icon"></i>
            <h5 class="card-title">Make Donation</h5>
            <p class="card-text">In a crowded world, our collective efforts to help others can create miraculous changes.</p>
          </div>
        </div>
      </div>
      <!-- Fundraising Card -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <i class="fas fa-donate icon"></i>
            <h5 class="card-title">Fundraising</h5>
            <p class="card-text">Together, we can turn compassion into action and dreams into reality.</p>
          </div>
        </div>
      </div>
      <!-- Become A Volunteer Card -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <i class="fas fa-hands-helping icon"></i>
            <h5 class="card-title">Become A Volunteer</h5>
            <p class="card-text">Join our team of volunteers and make an impact in your community.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Donation Cards Ends-->


  <!-- About Us Section -->
  <section class="about-us py-5 my-4">

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="Assets/header.jpg" alt="" width="550px">
        </div>
        <div class="col-md-6">
          <h2 class="mb-3 text-primary">--About Us--</h2>
          <p>Geetashrya Seva Sansthan is registered under the Madhya Pradesh Society Act. Our primary goal is to assist orphaned children with their education, health, and overall development and to support poor girls with financial aid for their marriages. We also provide training and support to empower women through employment, health camps for the elderly, organic farming training for farmers, skill development for students, cybersecurity awareness, and scholarships for talented students. Our mission is to bring societal change by working on various fronts.</p>

          <div class="row president">
            <div class="col-md-4">
              <img src="Assets/president.jpg" class="rounded-circle shadow" alt="" width="100%">
            </div>
            <div class="col-md-8">
              <h5 class="text-primary">Our Leadership</h5>
              <h6>Sateesh Kumar - President</h6>
              <small>The secret to happiness lies in helping others. Never underestimate the difference you can make in the lives of the poor, the abused, and the helpless.</small>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container my-4">
      <h4 class="text-primary text-center">--Our Initiatives--</h4>
      <div class="container">
        <div class="row">
          <!-- Save the Girl Child, Educate the Girl Child Card -->
          <div class="col-md-3 mb-4">
            <div class="card h-100 text-center shadow">
              <div class="card-body">
                <i class="fas fa-female fa-2x text-warning mb-3"></i>
                <br>
                <small class="card-title">Save the Girl Child, Educate the Girl Child</small>
              </div>
            </div>
          </div>
          <!-- Every Farmer, Digital Head Card -->
          <div class="col-md-3 mb-4">
            <div class="card h-100 text-center shadow">
              <div class="card-body">
                <i class="fas fa-tractor fa-2x text-primary mb-3"></i>
                <br>
                <small class="card-title">Every Farmer, Digital Head</small>
              </div>
            </div>
          </div>
          <!-- Skill Development Card -->
          <div class="col-md-3 mb-4">
            <div class="card h-100 text-center shadow">
              <div class="card-body">
                <i class="fas fa-tools fa-2x text-success mb-3"></i>
                <br>
                <small class="card-title">Skill Development</small>
              </div>
            </div>
          </div>
          <!-- Investment Awareness Programs Card -->
          <div class="col-md-3 mb-4">
            <div class="card h-100 text-center shadow">
              <div class="card-body">
                <i class="fas fa-chart-line fa-2x text-info mb-3"></i>
                <br>
                <small class="card-title">Investment Awareness Programs</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100 text-center shadow">
            <div class="card-body">
              <i class="fas fa-users fa-3x text-primary mb-3"></i>
              <h5 class="card-title">Empowering Women</h5>
              <p class="card-text">Geetashrya Seva Sansthan is dedicated to empowering women through training programs and providing education and healthcare support to orphaned children.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100 text-center shadow">
            <div class="card-body">
              <i class="fas fa-child fa-3x text-warning mb-3"></i>
              <h5 class="card-title">Save the Girl Child</h5>
              <p class="card-text">Our mission is to save and educate the girl child, ensuring a brighter future for the next generation.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100 text-center shadow">
            <div class="card-body">
              <i class="fas fa-school fa-3x text-success mb-3"></i>
              <h5 class="card-title">Smart Village</h5>
              <p class="card-text">My Village, Smart Village initiative focuses on transforming villages into self-sustained and smart communities.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100 text-center shadow">
            <div class="card-body">
              <i class="fas fa-book-reader fa-3x text-info mb-3"></i>
              <h5 class="card-title">Educated India</h5>
              <p class="card-text">Educated India, Prosperous India - We believe that education is the key to a prosperous nation.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!--Achievements Start-->

  <div class="container my-5 p-3 bg-primary">
    <h1 class="text-center text-white my-4">--Achievements--</h1>
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-3 mb-4">
        <div class="achievement-card">
          <i class="fas fa-donate"></i>
          <h5 class="card-title">₹<span class="counter" data-target="85389">0</span><br> Donated</h5>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-3 mb-4">
        <div class="achievement-card">
          <i class="fas fa-users"></i>
          <h5 class="card-title"><span class="counter" data-target="100">0</span><br> Volunteers Across India</h5>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-3 mb-4">
        <div class="achievement-card">
          <i class="fas fa-heart"></i>
          <h5 class="card-title"><span class="counter" data-target="50177">0</span><br> Lives Impacted</h5>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="col-md-3 mb-4">
        <div class="achievement-card">
          <i class="fas fa-thumbs-up"></i>
          <h5 class="card-title"><span class="counter" data-target="669">0</span><br> Positive Feedbacks</h5>
        </div>
      </div>
    </div>
  </div>

  <!--Achievement ENds-->


  <!--Our Programs Start-->

  <div class="container my-5">
    <h1 class="text-center text-primary my-5">--Our Projects--</h1>
    <div class="row">
      <!-- Project 1 -->
      <div class="col-md-4 mb-4">
        <div class="project-card">
          <img src="Assets/posh awaerness.jpeg" alt="POCSO Awareness Program">
          <h5 class="text-warning">POCSO Awareness Program</h5>
          <p>Committed to ensuring every child's rights under the POCSO Act are upheld and perpetrators are brought to justice.</p>
        </div>
      </div>
      <!-- Project 2 -->
      <div class="col-md-4 mb-4">
        <div class="project-card">
          <img src="Assets/carrer guidenec.jpg" alt="Career Guidance">
          <h5 class="text-warning">Career Guidance</h5>
          <p>Through personalized counseling and workshops, we help participants explore their interests, strengths, and career options.</p>
        </div>
      </div>
      <!-- Project 3 -->
      <div class="col-md-4 mb-4">
        <div class="project-card">
          <img src="Assets/martial_arts_training_program_for_girls.jpg" alt="Women Empowerment">
          <h5 class="text-warning">Women Empowerment</h5>
          <p>Empowering women through martial arts to instill confidence and a sense of empowerment.</p>
        </div>
      </div>
      <!-- Project 4 -->
      <div class="col-md-4 mb-4">
        <div class="project-card">
          <img src="Assets/skill development.jpeg" alt="Skill Development">
          <h5 class="text-warning">Skill Development</h5>
          <p>Equipping marginalized communities with practical skills and knowledge to foster employability.</p>
        </div>
      </div>
      <!-- Project 5 -->
      <div class="col-md-4 mb-4">
        <div class="project-card">
          <img src="Assets/cyber.png" alt="Cyber Security Training">
          <h5 class="text-warning">Cyber Security Training</h5>
          <p>Protecting our communities by educating them about safeguarding against online threats.</p>
        </div>
      </div>
      <!-- Project 6 -->
      <div class="col-md-4 mb-4">
        <div class="project-card">
          <img src="Assets/helporphan.png" alt="Help Orphan Children">
          <h5 class="text-warning">Help Orphan Children</h5>
          <p>Empowering orphaned children with hope and opportunities. Join us to change their lives.</p>
        </div>
      </div>
      <!-- Project 7 -->
      <div class="col-md-4 mb-4">
        <div class="project-card">
          <img src="Assets/sewing.jpeg" alt="Sewing Training Program">
          <h5 class="text-warning">Sewing Training Program</h5>
          <p>Learn essential sewing skills, create beautiful garments, and ignite a passion for craftsmanship.</p>
        </div>
      </div>
      <!-- Project 8 -->
      <div class="col-md-4 mb-4">
        <div class="project-card">
          <img src="Assets/drug.png" alt="Drug De-addiction Campaign">
          <h5 class="text-warning">Drug De-addiction Campaign</h5>
          <p>Empowering individuals to break free from addiction through dedicated support and rehabilitation services.</p>
        </div>
      </div>
      <!-- Project 9 -->
      <div class="col-md-4 mb-4">
        <div class="project-card">
          <img src="Assets/pocso img.jpg" alt="POSH Act Awareness">
          <h5 class="text-warning">POSH Act Awareness</h5>
          <p>Promoting safe workplaces and creating safe spaces through our POSH Act Awareness Campaign.</p>
        </div>
      </div>
    </div>
  </div>

  <!--Our Porgram Ends-->


  <!--Gallery start-->

  <section class="gallery my-5 p-5 text-center">

    <h1 class="text-primary">--Our Gallery--</h1>
    <p><i>"Help today because tomorrow you may be the one who needs more help!"</i></p>

  </section>

  <!--Gallery end-->


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
  <script>
    var swiper = new Swiper('.swiper-container', {
      // Optional parameters
      loop: true, // Loop slides
      autoplay: {
        delay: 1000, // Delay between slides
        disableOnInteraction: false, // Continue autoplay after interaction
      },
      slidesPerView: 1, // Show one slide per view
      spaceBetween: 10, // Space between slides
    });
  </script>

  <script>
    $(document).ready(function() {
      // Counter Animation
      const counters = document.querySelectorAll('.counter');
      const speed = 200; // The lower the slower

      counters.forEach(counter => {
        const animate = () => {
          const value = +counter.getAttribute('data-target');
          const data = +counter.innerText;
          const time = value / speed;
          if (data < value) {
            counter.innerText = Math.ceil(data + time);
            setTimeout(animate, 1);
          } else {
            counter.innerText = value;
          }
        }
        const observer = new IntersectionObserver(entries => {
          if (entries[0].isIntersecting) {
            animate();
            observer.unobserve(counter);
          }
        });
        observer.observe(counter);
      });
    });
  </script>
</body>

</html>