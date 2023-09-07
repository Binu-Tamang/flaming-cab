<!DOCTYPE html>
<html lang="en">

<head>
	<!-- fontawesome,custom css,bootstrap css -->
	<?php include('inc/css.php') ?>

	<!-- favicon link -->
	<link rel="icon" type="images/png" href="assets/img/favicon.ico">


	<!-- fontawsome link -->
	<title>Fleets | Flames Cab</title>
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
                <h1 class="display-3 fw-bold text-white mb-3 animated slideInDown">Our Fleets</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item " aria-current="page"><a href="#">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Fleet</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

	<!-- -----------------banner about us page end ----------------------------- -->

	
	<!-- -------------Our fleets start ------------>
	<section class="our-fleets">
		<div class="container">
			<div class="fleets-wrap">
				<div class="our-fleets-heading">
					<h3 class="welcome-heading" data-aos="fade-right">Our <span class="h-span">Fleets</span></h3>
					<!-- <p class="all-p" data-aos="fade-left">These fleets are common in urban areas and city areas which
						provide
						organized and systematic taxi services to the public. This are essential for providing
						convenient and accessible transportation services in the environments, offering people a
						reliable and efficient means of getting around the city.</p> -->
				</div>
				<div class="underline-flames">
					<span class="outer-line"></span>
					<i class="fa-solid fa-user"></i>
					<span class="outer-line"></span>
				</div>
				<div class="our-fleets-img">
					<div class="row hide-child">
						<div class="col-lg-4 col-sm-12 col-md-6 p-3">
							<a href="assets/img/service.jpg" class="image-link-js">
								<img alt="airplane" class="fleets" src="assets/img/service.jpg" data-aos="zoom-in-up">
							</a>
						</div>
						<div class="col-lg-4 col-sm-12 col-md-6 p-3">
							<a href="assets/img/slider/1.jpg" class="image-link-js">
								<img alt="yellow taxi" class="fleets" src="assets/img/slider/1.jpg"
									data-aos="zoom-in-up">
							</a>
						</div>
						<div class="col-lg-4 col-sm-12 col-md-6 p-3">
							<a href="assets/img/slider/2.jpg" class="image-link-js">
								<img alt="taxi sign" class="fleets" src="assets/img/slider/2.jpg" data-aos="zoom-in-up">
							</a>
						</div>
						<div class="col-lg-4 col-sm-12 col-md-6 p-3">
							<a href="assets/img/slider/taxi2.jpg" class="image-link-js">
								<img alt="girl with car" class="fleets" src="assets/img/slider/taxi2.jpg"
									data-aos="zoom-in-up">
							</a>
						</div>
						<div class="col-lg-4 col-sm-12 col-md-6 p-3">
							<a href="assets/img/slider/taxi3.jpg" class="image-link-js">
								<img alt="city" class="fleets" src="assets/img/slider/taxi3.jpg" data-aos="zoom-in-up">
							</a>
						</div>
						<div class="col-lg-4 col-sm-12 col-md-6 p-3">
							<a href="assets/img/about.jpg" class="image-link-js">
								<img alt="hanf hand-shake" class="fleets" src="assets/img/about.jpg"
									data-aos="zoom-in-up">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="fleets-respo" data-aos="fade-up">
			<button title="view more" class="fleets-respo-btn">
				<a href="fleet.php">View More <i class="fa fa-arrow-right"></i></a>
			</button>
		</div> -->
		</div>
	</section>
	<!-- ----------------Our fleets ends --------------------->

	<?php
	include('inc/footer.php');
	include('inc/js.php')
		?>
	<!-- -----------------why choose us------------- -->
	<script>$('.navul > li').eq(3).addClass("active");</script>

</body>

</html>