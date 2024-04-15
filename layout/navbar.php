<nav class="main-navbar">


  <div class="upper-nav">

    <a href="mailto:info@fashionmatrixoverseas.com ">info@fashionmatrixoverseas.com </a>
    <a href="index.php"><img src="assets/img/White 1.png" style="color: black;" alt=""></a>
    <!-- <h3>FashionMatrixOverseas</h3> -->
    <a href="tel:+91-80-48511122">Call Us: +91-80-48511122</a>
  </div>

  <div class="main-nav container " id="main-nav">

    <ul>
      <a href="bavarian.php" class="nav-links">
        <li>Bavarian</li>
      </a>
      <a href="western-wear.php" class="nav-links">
        <li>Western Wear</li>
      </a>
      <a href="digital-printing.php" class="nav-links">
        <li>Digital Printing</li>
      </a>
      <a href="Infrastructure.php" class="nav-links">
        <li>Infratructure</li>
      </a>
      <a href="certificate.php" class="nav-links">
        <li>Certificate</li>
      </a>

      <a href="contact-us.php" class="nav-links">
        <li>Contact Us</li>
      </a>
    </ul>

    <!-- <div>
      <h5>info</h5>
    </div> -->
  </div>



</nav>

<!-- <div id="services">Services Section</div>
<div id="service1">Service 1 Section</div>
<div id="service2">Service 2 Section</div>
<div id="service3">Service 3 Section</div> -->

<!-- mobile navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light mobile-nav">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#"><h3>FashionMatrixOverseas</h3> -->
    <img src="assets/img/Black 1.png" style="width: 280px;" alt="">

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <!-- <span class="navbar-toggler-icon"></span> -->
      <img src="assets/img/mobile-menu.png" style="height: 45px;" alt="">

    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="bavarian.php">Bavarian</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="western-wear.php">Western Wear</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="digital-printing.php">Digital Printing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Infrastructure.php">Infratructure</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="certificate.php">Certificate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact-us.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- nav-links -->
<script>
  window.addEventListener('scroll', function() {
    var topBar = document.getElementById('main-nav');
    if (window.scrollY > 0) {
      topBar.style.top = '0px'; // Adjust this value to hide the top bar
      topBar.style.background = "black";
      topBar.style.transition = "all .3s ease-in-out"; 
      

    } else {
      topBar.style.top = '89px';
      topBar.style.background = "transparent";
      topBar.style.transition = "all .3s ease-in-out"; 

    }
  });


  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });

 

</script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->