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
        $breadcrumhead = "Digital-printing";
        include 'Components/breadcrum.php' ?>

        <?php
        $sectionstyle = "";
        $parahead = "Eco Friendly Digital Printing Services";

        $paracontent = "We offer our digital printing services to customer in India, Europe, USA and Australia. What Rolls Royce did to automobiles, Kornit did to digital printing. We are the only facility in India to have two Kornit Allegro roll to roll printing machines (DTF-Direct to Fabric) supported with the Kornit Avalanche for panel printing (DTG-Direct to Garment). The Kornit patented technology eliminates the need for any external pre or post processing of the fabric like padding, steaming and washing enabling us to achieve the best results from PFP (Prepared for Print) to finished digitally printed fabric which is ready to cut faster than ever.";
        $paracontent2 = "";

        $contentimg = "Digital-Printing-top-right1.jpg";
        include 'Components/Right-img.php' ?>


       <section class="container">
       <iframe width="100%" height="415" src="https://www.youtube.com/embed/O1WLNRkMrRo?si=TOZslrfQmCn_n1dx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
       </section>

        <?php 
        $parahead = "Digital Fabric & Garment Printing in India";

         $paracontent = "Using organic inks which are GOTS/OEKOTEX certified, with no water waste and in the most smart and sustainable way, we offer high quality prints with vivid colors for fashion, home décor and organic baby clothing. We can print on any fabric substrate with the same inks thereby giving us flexibility and versatility. Our prints pass all the required testing requirements laid down by ISO / AATCC for color fastness to dye transfer, rubbing, water, perspiration, hot pressing and saliva. It also passes the tests for Alkylphenol ethoxylates (APEO), Alkylphenol (AP), Azo dyed and related salts, formaldehyde and PH value.";
         $paracontent2 = "";
         $contentimg = "Digital-Printing-top-right2.jpg";
         include 'Components/left-img.php' 
         ?>

<?php
        $sectionstyle = "margin-top:30px";
        $parahead = "Digital Textile Printing Services in India";

        $paracontent = "Fashion Matrix Overseas is among the best digital textile printing companies in India providing services to customers in India, Europe, USA and Australia. Our facilities have advanced Kornit Allegro roll to roll printing machines for digital garment and fabric printing. Interested in our digitally printed fabrics and garments? Get in touch with us today!";
        $paracontent2 = "";

        $contentimg = "printing-cloths-3.avif";
        include 'Components/Right-img.php' ?>

<?php include './layout/footer.php' ?>


    </main>
</body>

</html>