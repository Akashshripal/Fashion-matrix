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
    $breadcrumhead = "Trachten Blusen";
    include 'Components/breadcrum.php' ?>

    <section class="product-showing shorts">
        <!-- <div class="container-fluid product-heading">
                <h2>Women
                        </h2>
                </div> -->

                <div class="container-fluid">
                <div class="row">
              
                <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-clarissa-1.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="assets/img/Drindl Blusen/bluse-clarissa-2.jpg" alt="">
                    </div>
                
            </div>
            
    </section>

    <?php include './layout/footer.php' ?>


    </main>
</body>

</html>