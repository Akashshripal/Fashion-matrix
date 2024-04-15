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

    <main>

        <?php
       
        $url = "contact-banner.avif";
        $breadcrumhead = "Our Certifications";
        include 'Components/breadcrum.php' ?>

    <section class=" above-product2" style="width: 100%;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">

                    <img src="assets/img/Certifications-02.avif" alt="">
                </div>
                <div class="col-lg-6">
                
                <img src="assets/img/Certifications-03.avif" alt="">

                </div>

            </div>
        </div>
    </section>

    <section class=" above-product2" style="width: 100%;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">

                    <img src="assets/img/Certifications-04.avif" alt="">
                </div>
                <div class="col-lg-6">
                
                <img src="assets/img/Certifications-05.avif" alt="">

                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid above-product" style="padding:15px 60px; margin:0px; ">
            <p class="text-center" >Our Garment Manufacturing Facility is socially and ethically compliant, and we are SA8000 Certified. Our unit is also GOTS, ISO 13485, ISO 9001 & BIS Certified. Check all of our certifications by downloading the PDFs.</p>
        </div>
    </section>

<?php include './layout/footer.php' ?>


    </main>
</body>

</html>