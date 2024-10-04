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

    <div class="bg">
        <h2>Contact Us</h2>
    </div>


    <!-- THis is section  -->


    <!-- Contact Section -->
    <section id="contact" class="contact section" style="background-color: azure;">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
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





    <?php
    include('footer.php');
    ?>