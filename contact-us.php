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
         $breadcrumhead = "Contact us";
         include 'Components/breadcrum.php' ?>

  <section class="contact-details">

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="detail">
                    <h2>Feel Free to Contact Us!
                        <br>
                        Fashion Matrix Overseas,<br> Bangalore
                    </h2>
                    <h5><span>Head Office / Factory</span></h5>
                    <p class="pt-3">No 284, 2nd Cross, 4th Main, 4th Phase <br>
                    Peenya Industrial Area, Bangalore - 560058. <br>
                    India.</p>
                    <p>Ph : +91-80-41177798 / 41177799 / 41170852 
                        <br>
                        Email : info@fashionmatrixoverseas.com
                    </p>
                    <p></p>
                </div>
            </div>
            <div class="col-lg-6">
            <form>
                        <div class="form-group">
                            <input type="text" class="form-control trans-form contact-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name *">
                        </div>
                        <div class="d-flex">
                                <div class="form-group">
                                    <input type="email" class="form-control contact-input trans-form" style="border-right:none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email *">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control contact-input trans-form"  id="exampleInputPassword1" placeholder="Phone Number *">
                                </div>
                        </div>

                        <div class="form-group">
                            <textarea name="" class="form-control contact-input trans-form" id="" cols="2" rows="4" placeholder="Write a Message"></textarea>

                        </div>
                        <button type="submit" class="btn infr-btn contact-btn  text-uppercase">Submit</button>
                        <!-- <a type="" href="Infrastructure.php" class="btn infr-btn mt-2 text-uppercase">know more</a> -->

                    </form>
            </div>
        </div>
    </div>

  </section> 

  <section class=" contact-detail2">

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="detail-middle detail" >
                <h2>
                ENVS Eco Friendly Digital Fabrics India Pvt Ltd
                </h2>
                <h5><span>Head Office / Factory</span></h5>
                <p class="pt-3">No 284, 2nd Cross, 4th Main, 4th Phase <br>
                Peenya Industrial Area, Bangalore - 560058. <br>
                India.</p>
                <p>Ph : +91-80-41177798 / 41177799 / 41170852 
                    <br>
                    Email : info@fashionmatrixoverseas.com
                </p>
                <p></p>
            </div>
        </div>
        <div class="col-lg-6">
        <div class="detail-last detail" >
                <h2>
                Fashion Matrix Overseas,<br> Ludhiana

                </h2>
                <h5><span> Head Office / Factory </span></h5>
                <p class="pt-3">No 2793/3/1, Industrial Area-A, Block-C <br> Ludhiana 141003, Punjab
                 <br>India.</p>
                <p>Ph :  +91-161-4649778
                    <br>
                    Email : info@fashionmatrixoverseas.com
                </p>
                <p></p>
            </div>
        </div>
    </div>
</div>

</section>       
<section>
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497698.7749179518!2d77.30126246150186!3d12.954459536902316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1711022702670!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

    </main>
</body>
</html>