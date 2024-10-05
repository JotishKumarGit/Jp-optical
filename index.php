<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Jp Optical Industries</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


  <style>
    .img-a {
      transition: transform 2s ease, opacity 0.4s ease;
      opacity: 0.9;
      /* Slightly transparent initially */
    }

    .img-a:hover {
      transform: rotate(360deg);
      /* Slight rotation on hover */
      opacity: 1;
      /* Full opacity on hover */
    }

    /* THis is for slider */
    .slider {
      width: 100%;
      overflow: hidden;
      /* white-space: nowrap;
            border: 2px solid #ccc;
            border-radius: 5px;
            background-color: #fff; */
      position: relative;
      /* box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); */
    }

    .text {

      display: inline-block;
      /* padding: 10px; */
      /* font-size: 1.2em; */
      animation: slide 3s linear infinite;
    }

    @keyframes slide {
      from {
        transform: translateX(100%);
      }

      to {
        transform: translateX(-100%);
      }
    }
  </style>

</head>

<body class="index-page">

  <?php
  include('header.php');
  ?>


  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section accent-background">



      <!-- THis is for carousel  -->

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./assets/img/products/baner-2.jpeg" class="d-block w-100" alt="..." height="auto" width="100%"
              style="object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="./assets/img/products/baner-new-2.jpeg" class="d-block w-100" alt="..." height="auto" width="100%"
              style="object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="./assets/img/products/baner-new-3.jpeg" class="d-block w-100" alt="..." height="auto" width="100%"
              style="object-fit: cover;">
          </div>


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <!-- <i class="bi bi-easel"></i> -->
                <div class=""> <img src="./assets/img/products/all-gadject-cleaning-gel-1.jpg" alt="" height="100px" width="100px"
                    style="object-fit: cover;border-radius: 100%;color: aliceblue;border: 1px solid rgb(236, 224, 224);">
                </div>
                <h4 class="title mt-2"><a href="" class="stretched-link">All Gadject Cleaning Gel</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class=""><img src="./assets/img/products/baner-3.jpg" alt="" height="100px" width="100px"
                    style="object-fit: cover;border-radius: 100%;color: aliceblue;border: 1px solid rgb(236, 224, 224);">
                </div>
                <h4 class="title mt-2"><a href="" class="stretched-link">Mobile Cleaning Gel</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class=""><img src="./assets/img/products/baner-4.avif" alt="" height="100px" width="100px"
                    style="object-fit: cover;border-radius: 100%;color: aliceblue;border: 1px solid rgb(236, 224, 224);">
                </div>
                <h4 class="title mt-2"><a href="" class="stretched-link">Optical/lens cleaning liquid</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class=""><img src="./assets/img/products/baner-5.jpg" alt="" class="" height="100px" width="100px"
                    style="object-fit: cover;border-radius: 100%;color: aliceblue;border: 1px solid rgb(236, 224, 224);">
                </div>
                <h4 class="title mt-2"><a href="" class="stretched-link">Glass cleaning liquid</a></h4>
              </div>
            </div><!--End Icon Box -->

          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- This is about section  -->
    <section class="shadow-lg" style="background-color: rgb(165 183 168);">
      <div class="container">
        <div class="py-5 text-center slider">
          <h2 class="text-center text">About Us</h2>
        </div>
        <div class="row shadow-lg align-items-center py-5 px-4 "
          style="border-radius: 20px; border: 2px dashed ghostwhite;" data-aos="fade-up" data-aos-delay="200">
          <div class="col-12 col-md-6 col-lg-6 col-sm-12 mb-5" data-aos="fade-up" data-aos-delay="200">
            <h2 class="" data-aos="fade-up" data-aos-delay="200">Welcome To Jp Optical Industries</h2>
            <p class="lh-lg" data-aos="fade-up" data-aos-delay="200">At JP Optical Industries, we specialize in
              providing high-quality optical products designed to enhance
              vision and improve the quality of life. With a commitment to innovation, precision, and customer
              satisfaction, we have established ourselves as a leader in the optical industry.</p>
            <ul>
              <li class="lh-lg" data-aos="fade-up" data-aos-delay="200">We Manufacture</li>
              <li class="lh-lg" data-aos="fade-up" data-aos-delay="200">We Export</li>
              <li class="lh-lg" data-aos="fade-up" data-aos-delay="200">We Import</li>
              <li class="lh-lg" data-aos="fade-up" data-aos-delay="200">We Supply</li>
              <li class="lh-lg" data-aos="fade-up" data-aos-delay="200">We Services Provider</li>
            </ul>
            <a href="contact.php" class="px-4 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
              data-aos="fade-up" data-aos-delay="200">Contact Us</a>
          </div>
          <div class="col-12 col-md-6 col-lg-6 col-sm-12" data-aos="fade-up" data-aos-delay="200">
            <div class="image-effect">
              <div class="img-a ">
                <img src="./assets/img/products/all-gadject-cleaning-gel-1.jpg" alt="" class="shadow-lg " height="auto" width="100%"
                  style="object-fit: cover; border: 1px dashed greenyellow; border-radius: 20px;" data-aos="fade-up"
                  data-aos-delay="200">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Stats Section -->
    <section id="stats" class="stats section" style="background-color: #c6dfd7;">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center shadow-lg px-5 py-5 " style="border-radius: 40px;">

          <div class="col-lg-5">
            <div class="image-effect">
              <div class="img-a">
                <img src="assets/img/products/baner-7.avif" alt="" class="img-fluid shadow-lg"
                  style="border: 1px dashed grey; border-radius: 20px;">
              </div>
            </div>
          </div>
          <div class="col-lg-7">

            <div class="row gy-4 ">

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-emoji-smile flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                      class="purecounter"></span>
                    <p><strong>Happy Clients</strong> <span></span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-journal-richtext flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                      class="purecounter"></span>
                    <p><strong>Projects</strong> <span></span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-headset flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                      class="purecounter"></span>
                    <p><strong>Hours Of Support</strong> <span></span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-people flex-shrink-0"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                      class="purecounter"></span>
                    <p><strong>Hard Workers</strong> <span></span></p>
                  </div>
                </div>
              </div><!-- End Stats Item -->

            </div>

          </div>

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- This is product section  -->

    <section id="team" class="team section" style="background-color: #d2d9df;">


      <div class="container section-title slider" data-aos="fade-up">
        <h2 class="text">Our Products</h2>
        <p>Transform your look with our vibrant colored contact lenses. Perfect for special occasions or everyday style.
        </p>
      </div>

      <div class="container">

        <div class="row gy-4 justify-content-center">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">

            <div class="member" height="300px" width="100%">
              <img src="assets/img/products/mobile-cleaning-gel-1.jpg" class="img-fluid" alt="">
              <h4 class="pt-4" style="letter-spacing: 2px;">Mobile Cleaning Gel</h4>
              <div class="pt-4">
                <a href="" class="px-3 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
                  data-aos="fade-up" data-aos-delay="200" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry</a>
                <a href="mobile-cleaning-gel.php" class="px-3 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
                  data-aos="fade-up" data-aos-delay="200">Details</a>
              </div>
            </div>
          </div>


          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">

            <div class="member">
              <img src="assets/img/products/optical-lense-cleaning-gel-1.jpg" class="img-fluid" alt="">
              <h4 class="pt-4" style="letter-spacing: 2px;">Optical Lense Cleaning Liquid </h4>
              <div class="pt-4">
                <a href="" class="px-3 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
                  data-aos="fade-up" data-aos-delay="200" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry</a>
                <a href="optical-lens-cleaning-liquid.php" class="px-3 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
                  data-aos="fade-up" data-aos-delay="200">Details</a>
              </div>
            </div>
          </div>


          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">

            <div class="member">
              <img src="assets/img/products/all-gadject-cleaning-gel-1.jpg" class="img-fluid" alt="">
              <h4 class="pt-4" style="letter-spacing: 2px;">All Gadject Cleaning Gel </h4>
              <div class="pt-4">
                <a href="" class="px-3 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
                  data-aos="fade-up" data-aos-delay="200" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry</a>
                <a href="all-gad-c-g.php" class="px-3 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
                  data-aos="fade-up" data-aos-delay="200">Details</a>
              </div>
            </div>
          </div>


          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/products/glass-cleaning-liquid-1.jpg" class="img-fluid" alt="">
              <h4 class="pt-4" style="letter-spacing: 2px;">Glass Cleaning Liquid</h4>
              <div class="pt-4">
                <a href="" class="px-3 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
                  data-aos="fade-up" data-aos-delay="200" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry</a>
                <a href="glass-cleaning-liquid.php" class="px-3 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
                  data-aos="fade-up" data-aos-delay="200">Details</a>
              </div>
            </div>
          </div>


          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/products/optical-frame-case-1.jpg" class="img-fluid" alt="">
              <h4 class="pt-4" style="letter-spacing: 2px;">Optical Frame Case</h4>
              <div class="pt-4">
                <a href="" class="px-3 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
                  data-aos="fade-up" data-aos-delay="200" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry</a>
                <a href="optical-frame-case.php" class="px-3 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
                  data-aos="fade-up" data-aos-delay="200">Details</a>
              </div>
            </div>
          </div>


          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member h-100">
              <img src="assets/img/products/yoga.jpg" class="img-fluid" alt="">
              <h4 class="pt-4" style="letter-spacing: 2px;">Yoga Paduka Slipper</h4>
              <div class="pt-4">
                <a href="" class="px-3 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
                  data-aos="fade-up" data-aos-delay="200" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry</a>
                <a href="yoga-paduka-slipper.php" class="px-3 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
                  data-aos="fade-up" data-aos-delay="200">Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section><!-- /End Product Section -->


    <!-- Call To Action Section -->
    <section style="background-color: #d4d8db;">
      <section id="call-to-action" class="call-to-action section  dark-background">

        <div class="container">
          <img src="assets/img/products/baner-2.jpg" alt="">
          <div class="content row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-10">
              <div class="text-center">
                <a href="" class="glightbox play-btn"></a>
                <h3>Call To Action</h3>
                <p>"Help us improve! Take a quick survey and share your thoughts."</p>
                <a class="cta-btn" href="contact.php">Call To Action</a>
              </div>
            </div>
          </div>
        </div>
      </section><!-- /Call To Action Section -->
    </section>

    <!-- Services Section -->
    <section id="services" class="services section" style="background-color: #41403d;">

      <!-- Section Title -->
      <div class="container section-title slider" data-aos="fade-up">
        <h2 class="text-white text">Our Services</h2>
        <p class="text-white">At <b>Jp Optical Industries </b>, we specialize in providing high-quality optical lenses
          tailored to meet
          your vision needs. Whether you're looking for corrective lenses, specialty lenses, or protective eyewear, we
          have a wide range of services to ensure you see clearly and comfortably.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-12 col-lg-4 col-md-6 col-sm-12">
            <div class="parent">
              <div class="h-100 text-center"
                style="background-color: #0a0b0b; padding: 25px; border: 3px solid grey; border-radius: 20px;">
                <div class="parent">
                  <img src="./assets/img/services/icon-cus-support.png" class="pb-3" data-aos="fade-up"
                    data-aos-delay="200" alt="" height="100px" width="100px">
                  <h3 class="text-center pb-3 text-white" data-aos="fade-up" data-aos-delay="200">Customer Support</h3>
                  <p class="text-center pb-3 text-white lh-lg" data-aos="fade-up" data-aos-delay="200">Our dedicated
                    customer
                    support team
                    is
                    here to assist you with any questions or
                    concerns you may have. have inquiries about our products, or require assistance with returns or
                    exchanges.</p>
                  <a href="contact.php" class="px-4 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
                    data-aos="fade-up" data-aos-delay="200">Read More</a>
                </div>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="col-12 col-lg-4 col-md-6 col-sm-12">
            <div class="parent">
              <div class="h-100 text-center"
                style="background-color: #0a0b0b; padding: 25px; border: 3px solid grey; border-radius: 20px;">
                <div class="parent">
                  <img src="./assets/img/services/icon-order.png" class="pb-3" data-aos="fade-up" data-aos-delay="200"
                    alt="" height="100px" width="100px">
                  <h3 class="text-center pb-3 text-white" data-aos="fade-up" data-aos-delay="200">Customized orders</h3>
                  <p class="text-center pb-3 text-white lh-lg" data-aos="fade-up" data-aos-delay="200">we believe in
                    delivering products that perfectly match your unique vision. Our Customized Orders service allows
                    you to personalize our offerings to meet your specific needs.</p>
                  <a href="contact.php" class="px-4 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
                    data-aos="fade-up" data-aos-delay="200">Read More</a>
                </div>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="col-12 col-lg-4 col-md-6 col-sm-12">
            <div class="parent">
              <div class="h-100 text-center"
                style="background-color: #0a0b0b; padding: 25px; border: 3px solid grey; border-radius: 20px;">
                <div class="parent">
                  <img src="./assets/img/services/icon-delivery.png" class="pb-3" data-aos="fade-up"
                    data-aos-delay="200" alt="" height="100px" width="100px">
                  <h3 class="text-center pb-3 text-white" data-aos="fade-up" data-aos-delay="200">Prompt Delivery
                  </h3>
                  <p class="text-center pb-3 text-white lh-lg" data-aos="fade-up" data-aos-delay="200">we understand
                    that
                    timely delivery is crucial to our customers. That’s why we are committed to ensuring that your
                    orders arrive swiftly and efficiently, right when you need them and helping your for Delivery and
                    Services.</p>
                  <a href="contact.php" class="px-4 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
                    data-aos="fade-up" data-aos-delay="200">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Services Section -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section" style="background-color: #78af96;">

      <!-- Section Title -->
      <div class="container section-title slider" data-aos="fade-up">
        <h2 class="text">Testimonials</h2>
        <p>"I’ve been using these lenses for a few months now, and the difference is night and day. Colors are vibrant,
          and I can see fine details I didn't notice before. Truly a game-changer!"</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 10
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">

              <div class="testimonial-item h-100" style="background-color:#d2d9df; border-radius: 20px;">
                <img src="assets/img/testimonials/person-icon.png" class="testimonial-img" alt="">
                <h3>Anil Singh</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"I love how stylish these lenses are! They not only enhance my vision but also elevate my look
                    also with ny personality. I get compliments everywhere I go!"</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>

              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">

              <div class="testimonial-item h-100" style="background-color:#d2d9df ;  border-radius: 20px;">
                <img src="assets/img/testimonials/person-icon.png" class="testimonial-img" alt="">
                <h3>Sidhu Ali</h3>
                <h4>Business Man</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"I was skeptical about comfort, but these lenses are amazing. I wear them from morning to
                    night
                    without any irritation. I finally found my perfect pair!"</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>

              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">

              <div class="testimonial-item h-100" style="background-color:#d2d9df ;  border-radius: 20px;">
                <img src="assets/img/testimonials/person-icon.png" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"I was looking for quality lenses without breaking the bank, and I found them here. Great
                    performance and affordability—what more could you ask for?"</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>

              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">

              <div class="testimonial-item h-100" style="background-color:#d2d9df ;  border-radius: 20px;">
                <img src="assets/img/testimonials/person-icon.png" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Switching to these lenses was the best decision I made. The transition from indoor to outdoor
                    light is seamless, making my daily routine so much easier."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>

              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">

              <div class="testimonial-item h-100" style="background-color:#d2d9df ;  border-radius: 20px;">
                <img src="assets/img/testimonials/person-icon.png" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"I appreciate how these lenses protect my eyes from UV rays. It gives me peace of mind knowing
                    I’m taking care of my vision while enjoying the sun."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>

              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->



    <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section" style="background-color: #bfbfbf;">

      <!-- Section Title -->
      <div class="container section-title slider" data-aos="fade-up">
        <h2 class="text">Recent Blog Posts</h2>
        <p>When it comes to maintaining clear vision and eye comfort, choosing the right lens products is essential.
          With so many options available, it can be overwhelming to find the perfect fit for your lifestyle. </p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 justify-content-center">

          <div class="col-xl-4 col-md-6 " data-aos="fade-up" data-aos-delay="100">
            <article class=" image-effect">

              <div class="post-img">
                <img src="assets/img/products/baner-4.avif" alt="" class="img-fluid ">
              </div>

              <p class="post-category text-center">Politics</p>

              <h2 class="title">
                <a href="" class="text-center">Perfect for those who want the convenience of disposable lenses. Just
                  wear
                  them during the day and toss them at night.</a>
              </h2>
              <div class="text-center">
                <a href="about.php" class="px-4 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
                  data-aos="fade-up" data-aos-delay="200">Read More</a>
              </div>
            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <article class=" image-effect">

              <div class="post-img">
                <img src="assets/img/products/baner-2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category text-center">Sports</p>

              <h2 class="title">
                <a href="" class="text-center">Add a fun twist to your look! Whether you're looking for a subtle
                  enhancement or a dramatic change.</a>
              </h2>
              <div class="text-center">
                <a href="about.php" class="px-4 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
                  data-aos="fade-up" data-aos-delay="200">Read More</a>
              </div>
            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article class=" image-effect">

              <div class="post-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category text-center">Entertainment</p>

              <h2 class="title">
                <a href="" class="text-center">For those with unique vision needs, options like toric lenses for
                  astigmatism or multifocal lenses can provide.</a>
              </h2>
              <div class="text-center">
                <a href="about.php" class="px-4 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
                  data-aos="fade-up" data-aos-delay="200">Read More</a>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>

    </section><!-- /Recent Posts Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section" style="background-color: azure;">

      <!-- Section Title -->
      <div class="container section-title slider" data-aos="fade-up">
        <h2 class="text">Contact</h2>
        <p>We’re here to help! Whether you have questions about our products, need assistance with an order, or just
          want to share your feedback, don’t hesitate to reach out. Our dedicated team is ready to assist you.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">
            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>Factory- C47/2 ,Rampura industrial area,lawerance road, tri nagar
                    Reg add
                  </p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+91 9910806428</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>jpopticaldvd@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h3>Open Hours:</h3>
                  <p>Mon-Sat: 10AM - 23PM</p>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>
          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade" data-aos-delay="100">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control name" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control email" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control phone" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control message" name="message" rows="8" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit" onclick="contact()">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>


  <?php
  include('footer.php');
  ?>