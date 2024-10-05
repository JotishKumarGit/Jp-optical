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
    <h2 class="text">Blog</h2>
  </div>


  <!-- Recent Posts Section -->
  <section id="recent-posts" class="recent-posts section" style="background-color: #bfbfbf;">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Recent Blog Posts</h2>
      <p>When it comes to maintaining clear vision and eye comfort, choosing the right lens products is essential.
        With so many options available, it can be overwhelming to find the perfect fit for your lifestyle. </p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

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





  <?php
  include('footer.php');
  ?>