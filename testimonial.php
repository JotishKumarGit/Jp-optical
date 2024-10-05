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

    /* THis is  all */
    .bg {
      background-image: linear-gradient(rgb(41 20 20 / 55%), rgb(0 0 0 / 85%)), url(./assets/img/products/all-gadject-cleaning-gel-1.jpg);
      height: 50vh;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .bg h2 {
      margin-top: 80px;
      color: white;
    }
  </style>

</head>

<body class="index-page">

  <?php
  include('header.php');
  ?>

  <!--  -->

  <div class="bg slider">
    <h2 class="text">Testimonials</h2>
  </div>


<!-- This is section  -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section" style="background-color: #78af96;">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
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






<?php 
include('footer.php');
?>