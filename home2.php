<!DOCTYPE html>
<html>

<head>
	<!-- fontawesome,custom css,bootstrap css -->
	<?php include('inc/css.php') ?>


	<!-- favicon link -->
	<link rel="icon" type="images/png" href="assets/img/service.png">

	<!-- fontawsome link -->
	<title>Flames Cab</title>
</head>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<body style="background: rgba(220, 225, 229, 0.17);">

	<?php include('inc/header.php') ?>

	<!-- --------------------------------banner slider start --------------------------->
	<section class="banner-slider">

		<div id="main-slider" class="carousel slide" data-bs-ride="carousel">

			<!-- Indicators -->
			<ul class="carousel-indicators">
				<button type="button" data-bs-target="#main-slider" data-bs-slide-to="0" class="active"></button>
				<button type="button" data-bs-target="#main-slider" data-bs-slide-to="1"></button>
				<button type="button" data-bs-target="#main-slider" data-bs-slide-to="2"></button>
				<button type="button" data-bs-target="#main-slider" data-bs-slide-to="3"></button>
			</ul>

			<!-- The slideshow -->
			<div class="carousel-inner" data-bs-interval="3000">
				<div class="carousel-item active">
					<!-- ACTIVE SHOULD BE AT 1ST ONLY -->
					<img src="assets/img/slider/3.jpg">
				</div>
				<div class="carousel-item">
					<img src="assets/img/slider/2.jpg">
				</div>
				<div class="carousel-item">
					<img src="assets/img/slider/1.png">
				</div>
				<div class="carousel-item">
					<img src="assets/img/slider/3.jpg">
				</div>


				<button class="carousel-control-prev" type="button" data-bs-target="#main-slider" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#main-slider" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>

			</div>
		</div>
		<div class="banner-bg-color"></div>
	</section>
	<!-- -------------------------------------banner slider end------------------------------------ -->

	<!-- -------------------------------welcome part starts------------------------------------------- -->
	<section class="welcome-part">
		<div class="container">
			<div class="welcome-part-heading">
				<p>welcome to</p>
				<h1>flames cab</h1>
			</div>
			<div class="underline-flames">
				<span class="outer-line"></span>
				<i class="fa-solid fa-user"></i>
				<span class="outer-line"></span>
			</div>
			<div class="welcome-part-box">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="welcome-part-box-left">
							<div class="welcome-part-box-left-img">
								<img src="assets/img/cab1.jpg" class="img-fluid welcome-img">
								<div class="welcome-part-box-left-img2">

								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="welcome-part-box-right">
							<h2>we are <span>flames cab</span></h2>
							<p>We are a leading company sit amet, consectetur adipisicing elit. Minus obcaecati pariatur
								officiis molestias eveniet harum laudantium obcaecati pariatur officiis molestias
								eveniet harum laudantium sed optio iste.</p>
							<div class="flames-content-nav-tab">
								<ul class="nav nav-pills mb-3 flex-column flex-sm-row" id="pills-tab" role="tablist">
									<li class="nav-item flex-sm-fill" role="presentation">
										<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
											data-bs-target="#pills-home" type="button" role="tab"
											aria-controls="pills-home" aria-selected="true"><i class="fa-solid fa-circle-check"></i> Our Mission</button>
									</li>
									<li class="nav-item flex-sm-fill" role="presentation">
										<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
											data-bs-target="#pills-profile" type="button" role="tab"
											aria-controls="pills-profile" aria-selected="false">Our Advantange<i class="fa-solid fa-circle-user"></i></button>
									</li>
									<li class="nav-item flex-sm-fill" role="presentation">
										<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
											data-bs-target="#pills-contact" type="button" role="tab"
											aria-controls="pills-contact" aria-selected="false">Our Guarantee<i class="fa-solid fa-face-smile"></i></button>
									</li>
								</ul>
								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade show active" id="pills-home" role="tabpanel"
										aria-labelledby="pills-home-tab">consectetur adipiscing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in</div>
									<div class="tab-pane fade" id="pills-profile" role="tabpanel"
										aria-labelledby="pills-profile-tab">Ut enim ad minim veniam, quis nostrud
										exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
										irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
										nulla pariatur.</div>
									<div class="tab-pane fade" id="pills-contact" role="tabpanel"
										aria-labelledby="pills-contact-tab">Laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
										dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
										sunt in culpa qui officia</div>
								</div>
							</div>
							<div class="welcome-part-button">
								<button>Read More <i class="fa fa-arrow-right"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- -------------------------------welcome part starts------------------------------------------- -->

	<!-- ------------------------------------our services parts starts--------------------------------------- -->
	<section class="main-our-services">
		<div class="container">
			<div class="our-services-heading">
				<h1>Our <span>services</span></h1>
				<p>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's
					standard dummy text ever since the been when an unknown printer.</p>
			</div>
			<div class="underline-flames">
				<span class="outer-line"></span>
				<i class="fa-solid fa-user"></i>
				<span class="outer-line"></span>
			</div>
			<div class="service-intro">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="service-img-intro-container">
							<img class="img-fluid service-img" src="assets/img/g1.jpg">
							<div class="service-img-intro">
								<h4>Engineering Chemistry</h4>
								<p>Lorem ipsum dolor sit adipiscing elit sed diam nonummy nibh euismod</p>
								<a href="#">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="service-img-intro-container">
							<img class="img-fluid service-img" src="assets/img/cab1.jpg">
							<div class="service-img-intro">
								<h4>Engineering Chemistry</h4>
								<p>Lorem ipsum dolor sit adipiscing elit sed diam nonummy nibh euismod</p>
								<a href="#">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="service-img-intro-container">
							<img class="img-fluid service-img" src="assets/img/g3.jpg">
							<div class="service-img-intro">
								<h4>Engineering Chemistry</h4>
								<p>Lorem ipsum dolor sit adipiscing elit sed diam nonummy nibh euismod</p>
								<a href="#">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="service-img-intro-container">
							<img class="img-fluid service-img" src="assets/img/about.jpg">
							<div class="service-img-intro">
								<h4>Engineering Chemistry</h4>
								<p>Lorem ipsum dolor sit adipiscing elit sed diam nonummy nibh euismod</p>
								<a href="#">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="service-img-intro-container">
							<img class="img-fluid service-img" src="assets/img/g2.jpg">
							<div class="service-img-intro">
								<h4>Engineering Chemistry</h4>
								<p>Lorem ipsum dolor sit adipiscing elit sed diam nonummy nibh euismod</p>
								<a href="#">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="service-img-intro-container">
							<img class="img-fluid service-img" src="assets/img/hand-shake.jpg">
							<div class="service-img-intro">
								<h4>Engineering Chemistry</h4>
								<p>Lorem ipsum dolor sit adipiscing elit sed diam nonummy nibh euismod</p>
								<a href="#">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ------------------------------------our services parts starts--------------------------------------- -->
	
	<!------------------------------------------------booking html starts---------------------------------- -->
	<section class="booked">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="booked-content">
					<h3>Call Us Now <span>Book Your Cab </span>For Your Next Ride!</h3>
					<p>We successfully cope with tasks of varying complexity, guarantees and regularly master new technologies.</p>
					<div class="cta-call">
					<i class="fa-solid fa-phone-volume"></i>
						<p><span>Call Us Now</span><a href="tel:403-948-2002/403-809-5353">403-948-2002<br>403-809-5353</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="booked-img">
					<!-- <img src="assets/img/cta-men.png"> -->
				</div>
			</div>
		</div>
	</div>
</section>
	<!------------------------------------------------booking html ends---------------------------------- -->
<!-- ------------------------------Our Gallery start ----------------------------->
	<section class="our-gallery">
		<div class="container">
			<div class="gallery-wrap">
				<div class="our-gallery-heading">
					<h3>Our <span>Gallery</span></h3>
					<p>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's
					standard dummy text ever since the been when an unknown printer.</p>
				</div>
				<div class="underline-flames">
					<span class="outer-line"></span>
					<i class="fa-solid fa-user"></i>
					<span class="outer-line"></span>
				</div>
				<div class="our-gallery-img">
					<div class="row">
						<div class="col-lg-4 col-sm-12 col-md-6 p-3">
							<a href="assets/img/g1.jpg" class="image-link-js">
								<img src="assets/img/g1.jpg">
							</a>
						</div>
						<div class="col-lg-4 col-sm-12 col-md-6 p-3">
							<a href="assets/img/cab1.jpg" class="image-link-js">
								<img src="assets/img/cab1.jpg">
							</a>
						</div>
						<div class="col-lg-4 col-sm-12 col-md-6 p-3">
							<a href="assets/img/g3.jpg" class="image-link-js">
								<img src="assets/img/g3.jpg">
							</a>
						</div>
						<div class="col-lg-4 col-sm-12 col-md-6 p-3">
							<a href="assets/img/about.jpg" class="image-link-js">
								<img src="assets/img/about.jpg">
							</a>
						</div>
						<div class="col-lg-4 col-sm-12 col-md-6 p-3">
							<a href="assets/img/g2.jpg" class="image-link-js">
								<img src="assets/img/g2.jpg">
							</a>
						</div>
						<div class="col-lg-4 col-sm-12 col-md-6 p-3">
							<a href="assets/img/hand-shake.jpg" class="image-link-js">
								<img src="assets/img/hand-shake.jpg">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ------------------------------Our Gallery start ----------------------------->
	
	<?php
	include('inc/footer.php');
	include('inc/js.php')
		?>

</body>

</html>