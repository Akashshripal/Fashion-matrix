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
            height: 75vh;

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
        $breadcrumhead = "Western-Wear";
        // $classing = "breadcrum-new";
        include 'Components/breadcrum.php' ?>

        <?php
        $sectionstyle = "";
        $parahead = " 
        Ladies Western Wear Manufacturer";

        $paracontent = "Over the last two decades, we have worked with several European and American brands and designers for their women, men and kids collection. This has given us a deep understanding of fits and styling for western wear across all clothing categories and gender. We are quite adept at handling a wide spectrum of fabrics from heavy weight drills to light weight and delicate silks. Our versatility is our biggest strength.";
        $paracontent2 = "";

        $contentimg = "western-1.avif";
        include 'Components/Right-img.php' ?>


        <section class="dress-slider">
                <div class="container-fluid">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                              
                                <div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-03.png" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-04.png" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-05.png" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-06.png" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-07.png" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-08.png" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-09.png" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-10.png" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-11.png" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-12.png" />

                                </div>
                                
                                <div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-13.png" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-14.png" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-15.png" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-16.png" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-17.png" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-18.png" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-19.png" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-20.png" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-21.png" />

                                </div><div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-22.png" />

                                </div><div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-23.png" />

                                </div><div class="swiper-slide">
                                    <img src="assets/img/western-wear/Western-Wear-Photo-Gallery-24.png" />

                                </div>
                         
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>

                        <!-- Swiper JS -->
                        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

                        <!-- Initialize Swiper -->
                        <script>
                            var swiper = new Swiper(".mySwiper", {
                                effect: "coverflow",
                                grabCursor: true,
                                centeredSlides: true,
                                coverflowEffect: {
                                    rotate: 50,
                                    stretch: 0,
                                    depth: 100,
                                    modifier: 1,
                                    slideShadows: true,
                                },
                                autoplay: {
                                    delay: 2000,
                                    disableOnInteraction: false,
                                },
                                pagination: {
                                    el: ".swiper-pagination",
                                },
                                breakpoints: {
                                    640: {
                                        slidesPerView: 1,
                                        spaceBetween: 20,
                                    },
                                    768: {
                                        slidesPerView: 2,
                                        spaceBetween: 40,
                                    },
                                    1024: {
                                        slidesPerView: 3,
                                        spaceBetween: 50,
                                    },
                                },
                                navigation: {
                                    nextEl: ".swiper-button-next",
                                    prevEl: ".swiper-button-prev",
                                },
                            });
                        </script>
                </div>
        </section>

        <?php 
        $parahead = "Western Wear Clothing Manufacturer";

         $paracontent = "Besides the regular sewing machines, we have a large repertoire of specialised machines like picoting, fagoting, blind hem, pin hem, smocking, pintuck, pocket welting etc; required for delivering the right quality product. What adds to our strength is our inhouse hand and machine embroidery facility, washing and dyeing laundry, world’s best digital printing facility from Kornit Israel for both roll to roll printing and panel printing and a completely computerised and automated knitting facility from Stoll Germany.";
         $paracontent2 = "";
         $contentimg = "western-2.avif";
         include 'Components/left-img.php' 
         ?>

<?php
        $sectionstyle = "margin-top:30px";
        $parahead = "Western Wear Manufacturer in India";

        $paracontent = "Fashion Matrix Overseas is a western wear manufacturer in India, exporting high-quality western wear clothing and apparel for women, men & kids in Europe and USA since 2001. Our state of the art machinery helps us keep the costs low and help sustain the environment. Have specific requirements? Get in touch with us today!";
        $paracontent2 = "";

        $contentimg = "western-3.avif";
        include 'Components/Right-img.php' ?>

<?php include './layout/footer.php' ?>


    </main>
</body>

</html>