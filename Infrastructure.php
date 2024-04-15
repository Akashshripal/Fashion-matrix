<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'layout/head.php' ?>
</head>
<body>
    <?php include 'layout/navbar.php' ?>

    <main>
     
    <?php
       
       $url = "contact-banner.avif";
       $breadcrumhead = "Infrastructure";
    //    $classing = " margin-up";
       include 'Components/breadcrum.php' ?>

         <?php 
         $parahead = "";
         $sectionstyle = "";
         $paracontent = "Fashion Matrix is backed up with sophisticated equipment and state of the art infrastructure that enables it to fulfil client-specific and complex requirements.  The manufacturing facilities boast of highly technical manchinery from across the globe to ensure that its products are at par with the best names in the industry in terms of quality and delivery. ";
         $paracontent2 = "";
        
         $contentimg = "INFRA-img-1.avif";
         include 'Components/Right-img.php' ?>

         <?php 
         $paracontent = "Our main factory and our head office is based in Bangalore, India. All woven and lighter knits are produced at Bangalore.  We have a 500 machine sewing facility here which is socially and ethically compliant and is SA8000 certified. ";
         $paracontent2 = "Besides the regular sewing machines, we have a large repertoire of specialised machines like picoting, fagoting, blind hem, pin hem, smocking, pintuck, pocket welting etc; required for delivering the right quality product. What adds to our strength is our inhouse hand and machine embroidery facility, state of the art digital printing facilty and our washing /dyeing laundry.";
         $contentimg = "INFRA-img-2.avif";
         include 'Components/left-img.php' 
         ?>

          <?php 
          $parahead = "";
         $sectionstyle = "margin-top:20px";
         $paracontent = "Our state of the art digital printing facility (ENVS Eco Friendly Digital Fabrics India Pvt Ltd) is also located in the same premises. This facility is equipped with the most advanced digital printing machines from Kornit, Israel. We are the only facility in India to have two Kornit Allegros for roll to roll printing and one Kornit Avalance for direct to garment printing.";
         $paracontent2 = "The Kornit patented technology eliminates the need for any external pre or post processing of the fabric like padding, steaming and washing enabling us to achieve the best results from PFP (Prepared for Print) to finished digitally printed fabric which is ready to cut faster than ever. We not only offer eco-friendly digitally printed fabrics but also offer turnkey solutions to fashion designers and interior decorators. This facility is also GOTS certified.";        
         $contentimg = "INFRA-img-3.avif";
         include 'Components/Right-img.php' ?>

        <?php 
         $paracontent = "The biggest strength of our company is our ability to adapt to different size-scales of production orders. We firmly believe that to handle styles which have a lot of detailing, personal involvement in every aspect of the product is of utmost importance and have therefore invested and built a very strong merchandising and sampling team to give exclusive attention to our customers         ";
         $paracontent2 = "";
         $contentimg = "INFRA-img-4.avif";
         include 'Components/left-img.php' 
         ?>

         <?php 
         $parahead = "";
         $sectionstyle = "margin-top:20px";
         $paracontent = "Our second factory is based in Ludhiana, India and this unit specialises in sweaters, cardigans, & knitted throws. We have the most advanced computerised knitting machines from Stoll, Germany and can therefore produce any kind of knit structure and weight ranging from 5 Gauge to 14 Gauge. Besides the knitting facility, this factory is fully equipped with the latest machinery required for sewing & finishing knitwear garments and also has a washing facility.";
         $paracontent2 = "";        
         $contentimg = "INFRA-img-5.avif";
         include 'Components/Right-img.php' ?>

        <?php 
         $paracontent = "Our latest addition has been medical textiles.  We are ISO 9001 and ISO 13485 certified.  We produce personal protection suits and supply them to the front line Covid warriors. We are well equipped to manufacture level-III / Category 3 coveralls as per AAMI PB70 recognized by FDA and as per EU regulation 2016/425.   We also have the CE certification for the same.  Our facility has the required seam welding machines and an ETO sterilisation facility.";
         $paracontent2 = "";
         $contentimg = "INFRA-img-6.avif";
         include 'Components/left-img.php' 
         ?>

<?php include './layout/footer.php' ?>

    </main>
</body>
</html>