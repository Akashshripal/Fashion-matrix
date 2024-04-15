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
       $breadcrumhead = "Bavarian";
    //    $classing = "breadcrum-new";
       include 'Components/breadcrum.php' ?>

        <?php
        $sectionstyle = "";
        $parahead = "Bavarian Clothing  Bayerische Trachtenmode";

        $paracontent = "Our journey with Bavarian clothing started in 2001 and now we have twenty years of rich experience in manufacturing the most intricate Dirndls, Meiders, Skirts, Blouses, Shirts, T-shirts, Waist Coats, Sweaters, Heavy Knits, Jackets & Outerwear. We take pride in saying that we produce for Lola Paltinger who is one of the leading designers in Bavarian Fashion. We can very confidently say that we are the largest producer of Bavarian clothing in India. For us its Oktober fest through the year.";
        $paracontent2 = "";

        $contentimg = "oktoberfes.avif";
        include 'Components/Right-img.php' ?>


        <section class="dress-slider">
                <div class="container">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/img/D-0.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-1.jpg" />
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/D-2.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-3.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-4.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-5.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-6.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-7.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-8.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-9.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-10.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-11.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-12.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-13.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-14.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-15.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-16.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-17.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-18.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-19.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-20.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-21.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-22.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-23.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-24.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-25.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-26.jpg" />

                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/D-27.jpg" />

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
        $parahead = "Bavarian Clothing Exporter";

         $paracontent = "Over the last two decades, we have made collaborations with design houses, fabric mills and trimmings suppliers from all over the world and are therefore able to source and offer our clients the latest trends in the Bavarian fashion space. Our in-house state of the art digital printing facility from Kornit Israel, knitting facility from Stoll Germany and our strong relationship with our fabric mills from across the globe makes it possible for us to offer a wide variety of styles, quick turnaround and a lower minimum order quantity.";
         $paracontent2 = "";
         $contentimg = "bavarian-last.avif";
         include 'Components/left-img.php' 
         ?>

<?php
        $sectionstyle = "margin-top:30px";
        $parahead = "The Largest Bavarian Clothing Manufacturers in India";

        $paracontent = "Fashion Matrix Overseas is the leading manufacturer and exporter of Bavarian clothing in India. We have been producing for leading designers in Bavarian Fashion for years. We provide Bavarian fashion garments, leather garments, traditional Bavarian clothing for women and men. Have any specific requirements? Get in touch with us today!";
        $paracontent2 = "";

        $contentimg = "bavarian-last-2.avif";
        include 'Components/Right-img.php' ?>

<?php include './layout/footer.php' ?>


    </main>
</body>

</html>