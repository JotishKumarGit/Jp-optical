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
        <h2 class="text">Products Details</h2>
    </div>


    <!-- Section  -->
    <section style="background-color: grey;">
        <div class="container">
            <div class="row align-items-center justify-content-center shadow-lg px-4 py-5">
                <!-- php  -->
                <?php
                $product_id = $_GET['product_id'];
                $select_query = "select * from `products` where `product_id`='$product_id' ";
                $data = mysqli_query($con, $select_query);
                $result = mysqli_num_rows($data);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($data)) {
                ?>
                        <div class="col-12 col-md-12 col-lg-6 col-sm-12">
                            <img src="<?php echo $row['product_image'] ?>" alt="" height="auto" width="100%">
                        </div>
                        <div class="col-12 col-md-12 col-lg-6 col-sm-12">
                            <h2 class="text-white"><?php echo $row['product_name'] ?></h2>
                            <h3 class="text-white"><?php echo $row['product_title'] ?></h3>
                            <p class="lh-lg text-white"><?php echo $row['product_dec'] ?></p>
                            <a class="text-center "><button class="py-2 px-4 text-white bg-dark" style="border-radius: 100px;"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="text-white text-decoration-none ">Enquiry</a></button></a>
                        </div>
                <?php }
                } ?>

            </div>
        </div>
    </section>


    <?php
    include('footer.php');
    ?>