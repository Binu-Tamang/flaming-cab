<!DOCTYPE html>
<html lang="en">

<head>
	<!-- fontawesome,custom css,bootstrap css -->
	<?php include('inc/css.php') ?>

	<!-- favicon link -->
	<link rel="icon" type="images/png" href="assets/img/service.png">

	<!-- fontawsome link -->
	<title>About Flames Cab</title>
    <link href="./assets/css/style.css" rel="stylesheet">
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
                <h1 class="display-3 text-white mb-3 animated slideInDown">Our Reservation</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item " aria-current="page"><a href="#">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Reservation</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

	<!-- -----------------banner about us page end ----------------------------- -->


 <div class="page_body_wrap page_body_wrap_reserv">
  <div class="page_body page_body_reserv">
        <div class="container">
           <div class="reservbodywrap">
                     <h3>Book A Reservation In Three Easy Steps</h3>
                                <p>If you have any questions, please <a href="tel: 403-809-5353">call  403-809-5353</a></p>
                                <div class="formfield col-md-12 col-sm-12 col-xs-12">
    <div class="top-of-reservation">
        <label>Type Of Service</label>
    </div>
    <div class="custom-select">
        <select class="outtaHere form-control">
            <option value="airportdrop"> Airport Drop - One Way</option>
            <option value="airportdrop-roundtrip">Airport Drop - Round Trip</option>
            <option value="airportpickup-oneway">Airport Pickup - One Way</option>
            <option value="airportpickup-roundtrip">Airport Pickup - Round Trip</option>
            <option value="other">Other</option>
        </select>
    </div>
</div>

                                <span>Fields marked with ( * ) are mandatory information to submit the form.</span>


                                <!-- Airport Drop -->
          <!-- <form class="cssform row reservtype airportdrop" action="" method="post" enctype="multipart/form-data" name="frm" id="frm" onsubmit="return validate(this)"> -->
          <form class="cssform row reservtype airportdrop" action="index.php" name="frm" id="frm" onSubmit="return formValidation();">
                  <h4 class="col-md-12 col-sm-12 col-xs-12">Passenger Information</h4>
                  <div class="formfield col-md-4 col-sm-6 col-xs-12">
    <div class="top-of-reservation">
        <label>First Name:*</label>
    </div>
    <input type="text" name="fname" id="fname" placeholder="First Name" required class="form-control">
    <span id="fnameError" style="color: red;"></span>
</div>
                                        <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                        <div class="top-of-reservation">
                                            <label>Last Name:*</label>
                                        </div>
                                            <input type="text" name="lname" placeholder="Last Name" required="" class="form-control">
                                        </div>

                                        <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                        <div class="top-of-reservation">
                                            <label>Phone:*</label>
                                        </div>
                                        <input type="tel" name="phone" placeholder="Phone" required="" class="form-control" id="phoneField">
                                    </div>

                                    

                                        <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                        <div class="top-of-reservation">
                                            <label>Email:*</label>
                                        </div>
                                            <input type="email" name="email" placeholder="Email Address" required="" class="form-control">
                                        </div>   

                                    <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                    <div class="top-of-reservation">
                                        <label>Passengers:*</label>
                                    </div>
                                        <input type="number" name="nopassengers" placeholder="No. of Passengers" min="1" max="30" required="" class="form-control">
                                    </div>

                                    <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                    <div class="top-of-reservation">
                                         <label>Luggage:*</label>
                                    </div>
                                        <input type="number" name="luggage" placeholder="No. of Luggage" min="1" max="40" required="" class="form-control">
                                    </div>

                                    <h4 class="col-md-12 col-sm-12 col-xs-12">Pick up Location</h4>
                                    <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                        <div class="top-of-reservation">
                                            <label>Pick-up Date:*</label>
                                        </div>
                                        <input type="date" id="pickUpDateField" name="Pick-up Date"  required="required" class="form-control">
                                       
                                        <div class="help-block with-errors"></div>
                                    </div>
                                                    
                <div class="formfield formfieldselectmul col-md-4 col-sm-6 col-xs-12">
                <div class="top-of-reservation">
                    <label>Pickup Time: *</label>
                </div>
                    <select name="pickuptimehh" required="" class="form-control">
                        <option selected="" disabled="">HH</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                    <select name="pickuptimemm" required="" class="form-control">
                        <option selected="" disabled="">MM</option>
                        <option>00</option>
                        <option>10</option>
                        <option>20</option>
                        <option>30</option>
                        <option>40</option>
                        <option>50</option>
                    </select>
                    <select name="pickuptimeam" class="form-control">
                        <option selected="">AM</option>
                        <option>PM</option>
                    </select>
                </div>

                <div class="formfield col-md-4 col-sm-6 col-xs-12">
                <div class="top-of-reservation">
                    <label>Street Address: *</label>
                </div>
                    <input type="text" name="streetaddressa" placeholder="Street Address" required="" class="form-control">
                </div>

                <div class="formfield col-md-4 col-sm-6 col-xs-12">
                <div class="top-of-reservation">
                    <label>City:*</label>
                </div>
                    <input type="text" name="citytowna" placeholder="City/Town" required="" class="form-control">
                </div>

                <div class="formfield col-md-4 col-sm-6 col-xs-12">
                <div class="top-of-reservation">
                    <label>State / ZIP Code:*</label>
                </div>
                    <input type="text" name="statezipa" placeholder="City/Town" required="" class="form-control">
                </div> 

                     <h4 class="col-md-12 col-sm-12 col-xs-12">Drop-off location - Airport</h4>
                                        
                <div class="formfield formfieldselectmul col-md-4 col-sm-6 col-xs-12">
                <div class="top-of-reservation">
                    <label>Flight Time:</label>
                </div>
                    <select name="flighttimehh" required="" class="form-control">
                        <option selected="" disabled="">HH</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                    <select name="flighttimemm" required="" class="form-control">
                        <option selected="" disabled="">MM</option>
                        <option>00</option>
                        <option>10</option>
                        <option>20</option>
                        <option>30</option>
                        <option>40</option>
                        <option>50</option>
                    </select>
                    <select name="flighttimeam" class="form-control">
                        <option selected="">AM</option>
                        <option>PM</option>
                    </select>
                </div>

                <div class="formfield col-md-4 col-sm-6 col-xs-12">
                <div class="top-of-reservation">
                    <label>Airport*</label>
                    </div>
                        <input type="text" name="arrvfrodeparto" placeholder="Airport name" required="" class="form-control">
                    </div> 
                <!-- </div>
                    <select name="airport" required="" class="form-control">
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                </div> -->

                <div class="formfield col-md-4 col-sm-6 col-xs-12">
                <div class="top-of-reservation">
                    <label>Airline*</label>
                    <input type="text" name="flightno" placeholder="Airlines Name" required class="form-control" >
                </div>
            
                    <!-- <select name="airline" class="airportifsel form-control" required="">
                        <option disabled="" selected=""> Airline </option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                       
                    </select> -->
                </div>

                    <div class="formfield airlineother airlineifot col-md-4 col-sm-6 col-xs-12">
                    <div class="top-of-reservation">
                        <label>Airline Name(If Other)</label>
                    </div>
                        <input type="text" name="airlineother" placeholder="Airline Name" class="form-control">
                    </div>

                    <div class="formfield col-md-4 col-sm-6 col-xs-12">
                        <div class="top-of-reservation">
                            <label>Flight No:*</label>
                        </div>
                        <input type="text" name="flightno" placeholder="Flight Number" required class="form-control" id="flightNoField">
                    </div>

                    <div class="formfield col-md-4 col-sm-6 col-xs-12">
                    <div class="top-of-reservation">
                        <label>Departing To</label>
                    </div>
                        <input type="text" name="arrvfrodeparto" placeholder="Departing To" required="" class="form-control">
                    </div>                    
                                        


                    	<div class="formfield col-md-12 col-sm-12 col-xs-12">
                        
                            <label class="my-payment">Method of Payment:</label>
                        
              <div class="payment">
                             <div class="radio-style">
                              <input type="radio" id="html" name="fav_language" value="HTML" required="">
                                  <label for="html">Debit/Credit card</label><br>
                        </div>
                <div class="radio-style">
                     <input type="radio" id="css" name="fav_language" value="CSS">
                    <label for="css">Check</label>
                </div>

                    <div class="radio-style">
                       <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                       <label for="javascript">Cash</label>
                    </div>
                    </div>


                
                    <div class="formfield col-md-12 col-sm-12 col-xs-12">
                    <div class="top-of-reservation">
                    	<label>Remarks</label>	
                    </div>
                    	<textarea name="remarks" class="form-control"></textarea>
                    </div>


                    <div class="col-md-12 col-sm-12 col-xs-12 formfield formfield_submit">
                        
                        <input type="submit" value="Send Message" class="form-control">
                    </div>
                    <div id="successMessage" class="hidden-that">Form submitted successfully!</div>

                </form>
                

                </div>
                </div>
                    </div>
                    </div>

	<?php
	include('inc/footer.php');
	include('inc/js.php')
		?>
	<!-- -----------------why choose us------------- -->
</body>

</html>