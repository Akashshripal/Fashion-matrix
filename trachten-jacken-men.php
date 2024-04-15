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
       $breadcrumhead = "Trachten Jacken";
       include 'Components/breadcrum.php' ?>

    <section class="product-showing jacket">
 
       
       <div class="row">
           <div class="col-md-3">
               <img src="assets/img/Trachten Jacken/jacke-anton-1.jpg" alt="">
           </div>
           <div class="col-md-3">
               <img src="assets/img/Trachten Jacken/jacke-anton-2.jpg" alt="">
           </div>
           <div class="col-md-3">
               <img src="assets/img/Trachten Jacken/jacke-anton-3.jpg" alt="">
           </div>
           <div class="col-md-3">
               <img src="assets/img/Trachten Jacken/jacke-anton-4.jpg" alt="">
           </div>
           <div class="col-md-3">
               <img src="assets/img/Trachten Jacken/jacke-anton-5.jpg" alt="">
           </div>
           <div class="col-md-3">
               <img src="assets/img/Trachten Jacken/jacke-anton-6.jpg" alt="">
           </div>
           <div class="col-md-3">
               <img src="assets/img/Trachten Jacken/jacke-anton-7.jpg" alt="">
           </div>
           <div class="col-md-3">
               <img src="assets/img/Trachten Jacken/jacke-anton-8.jpg" alt="">
           </div>
           <div class="col-md-3">
               <img src="assets/img/Trachten Jacken/jacke-anton-10.jpg" alt="">
           </div>
           <div class="col-md-3">
               <img src="assets/img/Trachten Jacken/jacke-anton-11.jpg" alt="">
           </div>
           <div class="col-md-3">
               <img src="assets/img/Trachten Jacken/jacke-anton-12.jpg" alt="">
           </div>
           <div class="col-md-3">
               <img src="assets/img/Trachten Jacken/jacke-anton-13.jpg" alt="">
           </div>
           <div class="col-md-3">
               <img src="assets/img/Trachten Jacken/jacke-anton-14.jpg" alt="">
           </div>
           <div class="col-md-3">
               <img src="assets/img/Trachten Jacken/jacke-anton-15.jpg" alt="">
           </div>
   

       </div>
      
       
   </div>    
    </section>

   <?php include './layout/footer.php' ?>


    </main>
</body>

</html>