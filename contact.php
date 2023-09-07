<!DOCTYPE html>
<html lang="en">

<head>
  <!-- fontawesome,custom css,bootstrap css -->
  <?php include('inc/css.php') ?>

  <!-- favicon link -->
	<link rel="icon" type="images/png" href="assets/img/favicon.ico">


  <!-- fontawsome link -->
  <title>Contact | Flames Cab</title>
  <!-- <link href="./assets/css/style.css" rel="stylesheet"> -->
</head>

<body style="background: rgba(220, 225, 229, 0.17);">
  <!-- ========new heading part here ======== -->


  <!-- ========new heading part here ====== -->
  <!--------------- banner about us part starts-------- -->
  <section class="banner-about-us" style="background-image:url('assets/img/g3.jpg');">
    <?php include('inc/header.php') ?>


  </section>

  <!-- Page Header Start -->
  <div class="container-fluid page-header mb-5 p-0" style="background-image: url(assets/img/slider/1.jpg);">
    <div class="container-fluid page-header-inner py-5">
      <div class="container text-center">
        <h1 class="display-3 text-white mb-3 fw-bold animated slideInDown">Contact Us</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center text-uppercase">
            <li class="breadcrumb-item " aria-current="page"><a href="#">Home</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Page Header End -->





  <!-- Booking Start -->
  <div class="container-fluid  booking my-5 wow fadeInUp form-wrapper" data-wow-delay="0.1s">
    <div class="container">
      <div class="row   gy-lg-0 gy-5">
        <div class="col-lg-4 px-0 ">

          <div class="contact-info h-100 pt-5">
            <h2>Contact Information</h2>
            <div class=" info-box  mt-3">
              <i class="fa fa-xl fa-phone me-3"></i>
              <div class="call">
                <span>Call us:</span>
                <div class="text-white">
                  <a href="tel:403-809-5353" class="d-block">403-809-5353</a>
                  <a href="tel:403-948-2002" class="d-block">403-948-2002</a>
                </div>
              </div>
            </div>

            <div class="info-box mt-3">
              <i class="fa fa-xl fa-location-dot me-3 "></i>
              <div>
                <span>Location:</span>
                <span class="d-block">Airdrie, AB, Canada</span>
              </div>
            </div>

            <div class="info-box">

              <div class="social-logo-ul mt-3">
                <ul>
                  <li><a href="https://www.facebook.com/flamestaxi/" title="Facebook"><i class="fa-xl fab fa-facebook-f"></i></a></li>
                  <li><a href="https://twitter.com/aflamestaxi" title="Twitter"><i class="fa-xl fab fa-twitter"></i></a></li>
                  <li><a href="https://www.instagram.com/aflamestaxi/" title="Instagram"><i class="fa-xl fab fa-instagram"></i> </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 p-0 ">
          <div class="bg-ternary  contact-box-shadow booking-section h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn " data-wow-delay="0.6s">
            <h1 class="text-black mb-4">Contact Us</h1>


            <form id="contactForm " action="php/contact-form.php" method="post">
              <div class="row g-3">
                <div class="col-12 col-lg-6">
                  <input type="text" id="name" name="name" class="form-control border-2" required placeholder="Your Name" style="height: 55px;">
                  <small id="nameError" class="form-text text-danger"></small>
                </div>

                <div class="col-lg-6">
                  <input type="email" id="email" name="email" class="form-control border-2" required placeholder="Your Email" style="height: 55px;">
                </div>
                <div class="col-12 col-lg-6">
                  <input type="tel" id="phone" name="phone" pattern="^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$"  class="form-control border-2" required placeholder="Your Number" style="height: 55px;">
                </div>
                <div class="col-12 col-lg-6">
                  <input type="text" id="subject" name="subject" class="form-control border-2" required placeholder="Subject" style="height: 55px;">
                </div>
                <div class="col-12">
                  <textarea id="message" class="form-control border-2" name="message" required placeholder="Message" rows="5"></textarea>
                </div>
                <div class="g-recaptcha" data-sitekey="6LeoDP8nAAAAANsoS36iwUXtJCAhXSAkLU1XjciX"></div>
                <div class="welcome-part-button col-12 text-center">
                  <button class=" text-center" type="submit">Submit</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Booking End -->



  <!-- here starts contact us section -->


  <section class="contact-us d-flex flex-wrap">
    <div class="container">


      <div class="map ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d321200.71231712174!2d-114.41748023497581!3d51.02759154583681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537170039f843fd5%3A0x266d3bb1b652b63a!2sCalgary%2C%20AB%2C%20Canada!5e0!3m2!1sen!2snp!4v1692867782222!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </section>





  <?php

  include('inc/footer.php');
  include('inc/js.php')
  ?>
  <!-- -----------------why choose us------------- -->
  <script>
    $('.navul > li').eq(4).addClass("active");
  </script>

</body>

</html>