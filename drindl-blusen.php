<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'layout/head.php' ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .swiper {
            width: 100%;
            padding-top: 20px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: auto;
            height: 400px;

        }

        .swiper-slide img {
            display: block;
            width: 100%;
            object-fit: contain;
        }
    </style>
</head>

<body>
    <?php include 'layout/navbar.php' ?>
    <?php

    $url = "contact-banner.avif";
    $breadcrumhead = "Drindl Blusen";
    include 'Components/breadcrum.php' ?>

    <section class="product-showing shorts">
        <!-- <div class="container-fluid product-heading">
                <h2>Women
                        </h2>
                </div> -->

                <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-1.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-2.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-3.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-4.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-5.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-6.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-7.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-8.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-9.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-10.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-11.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-12.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-13.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-14.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-15.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-16.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-17.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-18.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-19.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-20.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-21.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-22.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-24.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-25.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-26.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-27.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-28.jpg" alt="">
                    </div>
                     <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-29.jpg" alt="">
                    </div>
                  
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-31.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-32.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-33.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-34.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-35.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-36.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-37.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-38.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-39.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-39.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-40.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-41.jpg" alt="">
                    </div>

                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-42.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-43.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-44.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-45.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-46.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-47.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-48.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-49.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-50.jpg" alt="">
                    </div>   <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-51.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-52.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-pic-53.jpg" alt="">
                    </div>
                    <div class="container-fluid product-heading">

        
            </div>
            
    </section>

    <?php include './layout/footer.php' ?>


    </main>
</body>

</html>