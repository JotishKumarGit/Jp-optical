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
        <h2 class="text">Yoga Paduka Slipper</h2>
    </div>


    <!-- THis is section  -->


    <section class="shadow-lg" style="background-color: rgb(165 183 168);">
        <div class="container">
            <div class="py-5">
                <h2 class="text-center">Yoga Paduka Slipper</h2>
            </div>
            <div class="row shadow-lg align-items-center py-5 px-4 "
                style="border-radius: 20px; border: 2px dashed ghostwhite;" data-aos="fade-up" data-aos-delay="200">
                <div class="col-12 col-md-6 col-lg-6 col-sm-12 mb-5" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="" data-aos="fade-up" data-aos-delay="200">Welcome To Jp Optical Industries</h2>
                    <p class="lh-lg" data-aos="fade-up" data-aos-delay="200">Step into comfort and style with our Yoga Paduka Slippers, thoughtfully designed for those who seek balance both on and off the mat. Combining traditional craftsmanship with modern aesthetics, these slippers provide the perfect blend of support, flexibility, and relaxation.</p>
                    <ul>
                        <li class="lh-lg" data-aos="fade-up" data-aos-delay="200"><b> Ergonomic Design :</b> Crafted to contour to the shape of your foot, offering optimal support and comfort during your yoga practice and beyond./li>
                        <li class="lh-lg" data-aos="fade-up" data-aos-delay="200"><b> Natural Materials :</b> Made from eco-friendly, breathable materials that promote airflow and keep your feet cool and comfortable.</li>
                    </ul>
                    <a href="contact.php" class="px-4 py-2 btn" style="border: 1px solid green; border-radius: 100px;"
                        data-aos="fade-up" data-aos-delay="200">Contact Us</a>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-sm-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="image-effect">
                        <div class="img-a ">
                            <img src="./assets/img/products/yoga-2.webp" alt="" class="shadow-lg " height="auto" width="100%"
                                style="object-fit: cover; border: 1px dashed greenyellow; border-radius: 20px;" data-aos="fade-up"
                                data-aos-delay="200">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <?php
    include('footer.php');
    ?>