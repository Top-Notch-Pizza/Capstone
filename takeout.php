<?php
//include auth_session.php file on all user panel pages
require('db.php');
include("auth_session.php");
?>


<html>
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Checkout form</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Top Notch Pizza.jpg" rel="icon">
  <link href="assets/img/Top Notch Pizza.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Yummy - v1.3.0
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<h2>Takeout</h2>


<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/Top Notch Pizza.jpg" alt="">
        <h1>Top Notch Pizza<span></span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="registration.php">Register</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="#book-a-table">Book a Table</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Enjoy Your Best Pizza</h2>
          <p data-aos="fade-up" data-aos-delay="100">Want to satisfy hunger with affordable pizza. Order Now and Get 20% off on Large Pizza</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/pic20.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">
    <body>
        <br>


<form  action="pay.php" method="post">
<div class="container" style="width: 50%;">
<br>
<input type="hidden" name="product_name" value="<?php echo $_GET['name']; ?>" ><br/><br/>
<br>
<input type="hidden" name="amount" value="<?php echo $_GET['price']; ?>" ><br/><br/>
<br>
<br>
<label for="name">Product Name: </label>
<input type="text" name="product_name" placeholder="name" disabled value="<?php echo $_GET['name']; ?>" ><br/><br/>
<br>
<label for="quantity">Quantity: </label>
<input type="text" name="quantity" placeholder="quantity" disabled value="<?php echo $_GET['quantity']; ?>" ><br/><br/>
<br>
<label for="price">Price: </label>
<input type="text" name="price" placeholder="price" disabled value="<?php echo $_GET['price']; ?>" ><br/><br/>
<br>
<div class="row">
<div class="col-xl-6 form-group">
<label for="email">Email: </label>
<input id="email" class="form-control" maxlength="50" name="email" type="email" required />

    </div>
    <div class="form-group mt-3">
<label for="firstname">Firstname: </label>
<input id="firstname" class="form-control" maxlength="50" name="name" type="text" required />

    </div>
    <div class="form-group mt-3">

<label for="lastname">Lastname: </label>
<input id="lastname" class="form-control" maxlength="50" name="lastname" type="text" required/>
    <div class="form-group mt-3">

<label for="phone">Phone:</label>
<input id="phone" class="form-control" name="phone" type="number" required />

<br>
<br>
    </div>
    <br>
     <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_51MvZ4GGUXI7wa9NZ3KaHu0M0hVVfp0aMyGNWw5kmK5p08liuS0ZGQq6YuL241THoUXzeHsobTxZJ7mjSUk63M2kp00UjLQvsGu"
                data-amount="<?php echo str_replace(",","",$_GET["price"]) * 100?>"
                data-name="<?php echo $_GET["product_name"]?>"
                data-description="<?php echo $_GET["product_name"]?>"
                data-image="<?php echo $_GET["image"]?>"
                data-currency="inr"
                data-locale="auto">
                <?php
     if (isset($_SESSION['email'])) {
        $id = $_GET['id'];
        $name = $_GET['name'];
        $quantity = $_GET['quantity'];
        $price = $_GET['price'];
        $email = $_SESSION['email'];
        $query   = "INSERT into Takeout (id,name,quantity,price,email)
                     VALUES ('$id', '$name','$quantity','$price','$email')";
        $result   = mysqli_query($con, $query);
      }

?>
                </script>
    <br>
    </div>
    </div>
    </div>
</form>


<br>
<br>

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              143 Weber St W, Kitchener, ON N2H 4A1
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +1 999-989-1324<br>
              <strong>Email:</strong> topnotchpizza@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 11PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Top Notch Pizza</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Gurdeep , Saranya, Monika</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>