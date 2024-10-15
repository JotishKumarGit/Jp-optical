<?php
include('config.php');
?>

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
        <h2 class="text">Our Products</h2>
    </div>


    <section>
        <div class="container">
            <div class="row justify-content-center">
                <?php

                $user = $_GET['find'];

                $sel = "SELECT * FROM `products` where `find`='$user'";
                $q = mysqli_query($con, $sel);
                while ($row = mysqli_fetch_assoc($q)) {
                ?>
                    <div class="col-12 col-lg-3 my-3 ">
                        <div class="shadow-lg h-100" style="border: 1px solid black; border-radius: 10px;">
                            <img src="<?php echo $row['product_image'] ?>" class=" " height="200px" width="100%" style="object-fit: cover; border: 1px solid black;" alt="Rice">
                            <h4 class="text-primary text-dark px-3  text-center py-3" style="letter-spacing: 2px;"><?php echo $row['product_name'] ?></h4>
                            <div class="text-center pb-2">
                                <a class="text-center "><button class="py-2 px-4 text-white bg-dark" style="border-radius: 100px;"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="text-white text-decoration-none ">Enquiry</a></button></a>
                                <a href="singlepage.php?product_id=<?php echo $row['product_id'] ?>"><button class="text-center py-2 px-4 border-none rounded-pill">Details</button></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php
    include('footer.php');
    ?>