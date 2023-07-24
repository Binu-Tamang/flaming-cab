<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- fontawesome,custom css,bootstrap css -->
	<?php include('inc/css.php') ?>


	<!-- favicon link -->
	<link rel="icon" type="images/png" href="assets/img/logo.png">

	<!-- fontawsome link -->
	<title>Flames Cab</title>
</head>

<body style="background: rgba(220, 225, 229, 0.17);">

	<?php include('inc/header.php') ?>

	<!-- --------------------------------banner slider start --------------------------->
	<section class="banner-slider"  id="top">

		<div id="main-slider" class="carousel slide" data-bs-ride="carousel">

			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li><button title="click button" type="button" data-bs-target="#main-slider" data-bs-slide-to="0"
						class="active"></button></li>
				<li><button title="click button" type="button" data-bs-target="#main-slider"
						data-bs-slide-to="1"></button></li>
				<li><button title="click button" type="button" data-bs-target="#main-slider"
						data-bs-slide-to="2"></button></li>
				<li><button title="click button" type="button" data-bs-target="#main-slider"
						data-bs-slide-to="3"></button></li>
			</ul>

			<!-- The slideshow -->
			<div class="carousel-inner" data-bs-interval="9000">
				<div class="carousel-item bg-element active">
					<!-- ACTIVE SHOULD BE AT 1ST ONLY -->
					<img alt="flames-car" src="assets/img/slider/3.jpg">
					<div class="container">
						<div class="banner-slider-text">
							<!-- <h2 class="banner-text" data-aos="fade-up">HELLO</h2> -->
							<h3 data-aos="fade-up" data-aos-delay="500">We Are <span>Flames Cab</span></h3>
							<p class="all-p" data-aos="fade-up" data-aos-delay="1000">Flames Cab in Airdrie offers
								professional<br>
								and reliable taxi service that get you
								where you have to go, on time.</p>
							<div class="banner-slider-button" data-aos="fade-up" data-aos-delay="1500">
								<button title="learn more"><i class="fa-solid fa-gears"></i> Learn More</button>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item bg-element">
					<img alt="flames-cab" src="assets/img/slider/2.jpg">
					<div class="container">
						<div class="banner-slider-text">
							<h3>Do You Want To<span> Book A Cab</span></h3>
							<p class="all-p">Flames Cab in Airdrie offers professional<br> and reliable taxi service
								that get you
								where you have to go, on time.</p>
							<div class="banner-slider-button">
								<button title="learn more"><i class="fa-solid fa-gears"></i> Learn More</button>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item bg-element">
					<img alt="flames-taxi" src="assets/img/slider/1.jpg">
					<div class="container">
						<div class="banner-slider-text">
							<h3>We Are Here To<span> Help You</span></h3>
							<p class="all-p">Flames Cab in Airdrie offers professional<br> and reliable taxi service
								that get you
								where you have to go, on time.</p>
							<div class="banner-slider-button">
								<button title="learn more"><i class="fa-solid fa-gears"></i> Learn More</button>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item bg-element">
					<img alt="flames-car" src="assets/img/slider/3.jpg">
					<div class="container">
						<div class="banner-slider-text">
							<h3>Do You Want To<span> Book A Cab</span></h3>
							<p class="all-p">Flames Cab in Airdrie offers professional<br> and reliable taxi service
								that get you
								where you have to go, on time.</p>
							<div class="banner-slider-button">
								<button title="learn more"><i class="fa-solid fa-gears"></i> Learn More</button>
							</div>
						</div>
					</div>
				</div>


				<button title="click icon" class="carousel-control-prev" type="button" data-bs-target="#main-slider"
					data-bs-slide="prev">
					<span class="carousel-control-prev-icon slider-icons" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button title="click icon" class="carousel-control-next" type="button" data-bs-target="#main-slider"
					data-bs-slide="next">
					<span class="carousel-control-next-icon slider-icons" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>

			</div>
		</div>
		<div class="banner-bg-color"></div>
	</section>
	<!-- -----------------banner slider end------------------- -->

	<!-- ------------------welcome part starts--------------------- -->
	<section class="welcome-section my-5">
		<div class="welcome-wrap">
			<div class="container">
				<div class="welcome-header">
					<div class="text-center capitalize-text" data-aos="fade-down">
						<p class="all-p">welcome to</p>
						<h1 class="welcome-heading">flames cab</h1>
					</div>
					<div class="underline-flames">
						<span class="outer-line"></span>
						<i class="fa-solid fa-user"></i>
						<span class="outer-line"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 welcome-right">
						<div class="welcome-image-container">
							<img alt="yellow car" src="assets/img/about.jpg" class="img-fluid h-100"
								data-aos="fade-right">

						</div>
					</div>
					<div class="col-lg-6  mt-lg-0 mt-5">
						<div class="welcome-part-box-right">
							<h2 data-aos="fade-left">we are <span>flames cab</span></h2>
							<p class="all-p" data-aos="fade-left">Flames Cab Taxi in Flames Cab, Airdrie offers
								professional and
								reliable taxi services that get you where you have to go, on time. Our professional team
								of drivers is trustworthy and knowledgeable about our roads and streets.</p>
							<div class="flames-content-nav-tab" data-aos="fade-up">
								<ul class="nav nav-pills mb-3  flex-sm-row  justify-content-around" id="pills-tab"
									role="tablist">
									<li class="nav-item " role="presentation">
										<button title="click next" class="nav-link active" id="pills-home-tab"
											data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
											aria-controls="pills-home" aria-selected="true"><i
												class="fa-solid fa-arrow-trend-up"></i> Our Mission</button>
									</li>
									<li class="nav-item " role="presentation">
										<button title="click next" class="nav-link" id="pills-profile-tab"
											data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
											role="tab" aria-controls="pills-profile" aria-selected="false"><i
												class="fa-solid fa-hand-point-up"></i> Our Advantange</button>
									</li>
									<li class="nav-item " role="presentation">
										<button title="click next" class="nav-link" id="pills-contact-tab"
											data-bs-toggle="pill" data-bs-target="#pills-contact" type="button"
											role="tab" aria-controls="pills-contact" aria-selected="false"><i
												class="fa-solid fa-seedling"></i> Our Guarantee</button>
									</li>
								</ul>
								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade show active" id="pills-home" role="tabpanel"
										aria-labelledby="pills-home-tab">Flames cabs are a form of public transportation
										that operates on-demand and usually charge fares based on distance traveled or
										time spent in the vehicle. Their mission is to provide convenient, accessible,
										and relatively fast transportation services to individuals within cities and
										towns.</div>
									<div class="tab-pane fade" id="pills-profile" role="tabpanel"
										aria-labelledby="pills-profile-tab">Flames cab offer direct transportation to a
										passenger's desired destination, providing convenience and comfort, especially
										when traveling with luggage or in adverse weather conditions. We are available
										to people without access to private vehicles, making them an inclusive form of
										transportation.</div>
									<div class="tab-pane fade" id="pills-contact" role="tabpanel"
										aria-labelledby="pills-contact-tab">Flames cab is one of the local cab service
										providers in Airdrie and its periphery, providing you with some tips to get the
										taxi in Airdrie. You can book the taxi or the cab before the journey in Airdrie,
										a city neighboring to Calgary.</div>
								</div>
								<div class="welcome-part-button">
									<button title="read more"><a href="about.php">Read More <i
												class="fa fa-arrow-right"></a></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- ----------welcome part starts-------- -->

	<!---------our services parts starts----------------- -->
	<section class="main-our-services">
		<div class="container">
			<div class="our-services-heading">
				<h2 class="welcome-heading" data-aos="fade-right">Our services</h2>
				<p class="all-p" data-aos="fade-left">There are some several benefits you’ll get if you prefer selecting
					the best taxi
					services. Our business strives to provide customers with exceptional quality driver services, timely
					transportation, superior service, and guaranteed satisfaction</p>
			</div>
			<div class="underline-flames">
				<span class="outer-line"></span>
				<i class="fa-solid fa-user"></i>
				<span class="outer-line"></span>
			</div>
			<div class="service-intro">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-lg-4	">
						 <div class="service-img-intro-container services1" data-aos="fade-right">
							<div class="figure">
								<img alt="airplane" class="img-fluid service-img" src="assets/img/g1.jpg">
							</div>
							<div class="service-img-intro">
								<h4>Airdrie Flames Cabs</h4>
								<p class="all-p">Airdrie Flames taxi is wonderful in comparison to other air
									terminal
									taxi suppliers
									in Alberta who as of now works certainly one of the biggest taxis among
									those
									regions. We are the town’s high-quality selection for any transportation
									preparations. </p>
								<a href="#">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-lg-4	">
						 <div class="service-img-intro-container services1" data-aos="fade-down"
							data-aos-offset="0">
							<div class="figure">
								<img alt="yellow car" class="img-fluid service-img" src="assets/img/cab1.jpg">
							</div>
							<div class="service-img-intro">
								<h4>Airdrie Transportation</h4>
								<p class="all-p">Airdire Flames Cabs is one of the best airport taxi providers in
									Alberta who
									currently operates one of the largest taxi cabs among those areas. We are the city’s
									top choice for any transportation solutions. Airdrie flames Taxi Ltd. offers
									efficient and reliable taxi service in Airdrie and Cochrane to meet the
									transportation needs of residents, visitors and our corporate clients. </p>
								<a href="#">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-lg-4	">
						 <div class="service-img-intro-container services2" data-aos="fade-left">
							<div class="figure">
								<img alt="raxi sign" class="img-fluid service-img" src="assets/img/slider/taxi4.jpg">
							</div>
							<div class="service-img-intro">
								<h4>Choose The Best Cabs</h4>
								<p class="all-p">There are some several benefits you’ll get if you prefer selecting the
									best taxi
									services. However, choosing the best taxi services can be a daunting task since
									several companies claim to offer the best services. Therefore, take your time,
									analysis and know the best tips which will assist you to find the best taxi services
									however still many people find it annoying to book a cab online. it’s essential to
									know that you will find the best taxi services regardless of wherever you live. the
									following are some of the best components you’re needed to consider before you make
									your final choice.</p>
								<a href="#">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-lg-4	">
						 <div class="service-img-intro-container services2" data-aos="fade-right">
							<div class="figure">
								<img alt="girl with car" class="img-fluid service-img" src="assets/img/about.jpg">
							</div>
							<div class="service-img-intro">
								<h4>Deal With Your Cabs</h4>
								<p class="all-p">Get to understand your taxi driver before getting into the cab:
									Usually, your driver
									can assist you with your luggage, thus this can be the opportune time to say hi.
									remember that the two (or more) of you may be sharing the car for a few distances.
								</p>
								<a href="#">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-lg-4	">
						<div class="service-img-intro-container services2" data-aos="fade-up" data-aos-offset="200">
							<div class="figure">
								<img alt="city" class="img-fluid service-img" src="assets/img/g2.jpg">
							</div>
							<div class="service-img-intro">
								<h4>Quick Response Time</h4>
								<p class="all-p">Taxis aim to reach passengers promptly, reducing wait times and
									providing efficient
									transportation. We often provide airport transportation services. </p>
								<a href="#">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-lg-4	">
						<div class="service-img-intro-container services2" data-aos="fade-left">
							<div class="figure">
								<img alt="handshake" class="img-fluid service-img" src="assets/img/hand-shake.jpg">
							</div>
							<div class="service-img-intro">
								<h4>24/7 Availability</h4>
								<p class="all-p">Many taxi and cab services operate 24/7, offering round-the-clock
									transportation
									options for passengers, including late-night or early-morning rides.</p>
								<a href="#">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="services-respo text-center">
					<button title="view more" class="serives-respo-btn">
						<a href="#">View More <i class="fa fa-arrow-right"></i></a>
					</button>
				</div>
			</div>
		</div>

	</section>
	<!-- -----our services parts starts------- -->

	<!--------------booking html starts-------- -->
	<section class="booked">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="booked-content">
						<h3 class="welcome-heading" data-aos="fade-down">Call Us Now <span>Book Your Cab </span>For Your
							Next Ride!</h3>
						<p class="all-p" data-aos="fade-right">We successfully cope with tasks of varying complexity,
							guarantees and
							regularly master new
							technologies.</p>
						<div class="cta-call" data-aos="fade-up">
							<i class="fa-solid fa-phone-volume"></i>
							<p class="all-p"><span>Call Us Now</span><a href="tel:403-948-2002">403-948-2002<br></a><a
									href="tel:403-809-5353">403-809-5353</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="booked-img">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!---------booking html ends-------- -->

	<!-- -------------Our fleets start ------------>
	<section class="our-fleets">
		<div class="container">
			<div class="fleets-wrap">
				<div class="our-fleets-heading">
					<h3 class="welcome-heading" data-aos="fade-right">Our <span>Fleets</span></h3>
					<p class="all-p" data-aos="fade-left">These fleets are common in urban areas and city areas which
						provide
						organized and systematic taxi services to the public. This are essential for providing
						convenient and accessible transportation services in the environments, offering people a
						reliable and efficient means of getting around the city.</p>
				</div>
				<div class="underline-flames">
					<span class="outer-line"></span>
					<i class="fa-solid fa-user"></i>
					<span class="outer-line"></span>
				</div>
				<div class="our-fleets-img">
					<div class="row hide-child">
						<div class="col-lg-4 col-sm-12 col-md-6 p-3">
							<a href="assets/img/g1.jpg" class="image-link-js">
								<img alt="airplane" class="fleets" src="assets/img/g1.jpg" data-aos="zoom-in-up">
							</a>
						</div>
						<div class="col-lg-4 col-sm-12 col-md-6 p-3">
							<a href="assets/img/cab1.jpg" class="image-link-js">
								<img alt="yellow taxi" class="fleets" src="assets/img/cab1.jpg" data-aos="zoom-in-up">
							</a>
						</div>
						<div class="col-lg-4 col-sm-12 col-md-6 p-3">
							<a href="assets/img/g3.jpg" class="image-link-js">
								<img alt="taxi sign" class="fleets" src="assets/img/g3.jpg" data-aos="zoom-in-up">
							</a>
						</div>
						<div class="col-lg-4 col-sm-12 col-md-6 p-3">
							<a href="assets/img/about.jpg" class="image-link-js">
								<img alt="girl with car" class="fleets" src="assets/img/about.jpg"
									data-aos="zoom-in-up">
							</a>
						</div>
						<div class="col-lg-4 col-sm-12 col-md-6 p-3">
							<a href="assets/img/g2.jpg" class="image-link-js">
								<img alt="city" class="fleets" src="assets/img/g2.jpg" data-aos="zoom-in-up">
							</a>
						</div>
						<div class="col-lg-4 col-sm-12 col-md-6 p-3">
							<a href="assets/img/hand-shake.jpg" class="image-link-js">
								<img alt="hanf hand-shake" class="fleets" src="assets/img/hand-shake.jpg"
									data-aos="zoom-in-up">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="fleets-respo" data-aos="fade-up">
				<button title="view more" class="fleets-respo-btn">
					<a href="#">View More <i class="fa fa-arrow-right"></i></a>
				</button>
			</div>
		</div>
	</section>
	<!-- ----------------Our fleets ends --------------------->

	<!-- --------------------testimonials starts--------------------- -->
	<section class="testimonial-sec testimonial-center sec-bg sec-main bg-sec"
		style="background-image:url('assets/img/testimonials.jpg');" data-aos="fade-up">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-title center text-center">
						<h5 class="title-small">Our customer says</h5>
						<h3 class="title-big">Testimonials</h3>
						<span class="title-seperator"></span>

					</div>
				</div>
				<div class="col-lg-8 col-md-12 mx-lg-auto">
					<div class="testimonial-center">
						<div id="google-reviews">
							<div class="review-item">
								<div class="review-meta"><span class="review-author">Alex Pellegrino</span><span
										class="review-sep">, </span><span class="review-date">Aug 6, 2022</span></div>
								<div class="review-stars">
									<ul>
										<li><i class="star"></i></li>
										<li><i class="star"></i></li>
										<li><i class="star"></i></li>
										<li><i class="star"></i></li>
										<li><i class="star"></i></li>
									</ul>
								</div>
								<p class="review-text all-p">Marco and his team repaired some loose granite steps at the
									front
									our house. He explained the process and took excellent care of a delicate project.
									All the stones are now tightly secure and looks brand new. Highly recommend Marco!
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- --------------------testimols ends--------------------- -->


	<!-- ---------------------------footer starts--------------------- -->
	<?php
	include('inc/footer.php');
	include('inc/js.php')
		?>
	<!-- ---------------------------footer ends--------------------- -->

</body>

</html>