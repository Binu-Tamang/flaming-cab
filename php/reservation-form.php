<?php
error_reporting(0);
?>

<?php
$service = isset($_POST['service']) ?  $_POST['service'] : "";
$fname = isset($_POST['fname']) ?  $_POST['fname'] : "";
$lname = isset($_POST['lname']) ?  $_POST['lname'] : "";
$email = isset($_POST['email']) ?  $_POST['email'] : "";
$phone = isset($_POST['phone']) ?  $_POST['phone'] : "";
$nopassengers = isset($_POST['nopassengers']) ?  $_POST['nopassengers'] : "";
$luggage = isset($_POST['luggage']) ?  $_POST['luggage'] : "";
$pick_up_date = isset($_POST['pick_up_date']) ?  $_POST['pick_up_date'] : "";
$pickuptimehh = isset($_POST['pickuptimehh']) ?  $_POST['pickuptimehh'] : "";
$pickuptimemm = isset($_POST['pickuptimemm']) ?  $_POST['pickuptimemm'] : "";
$pickuptimeam = isset($_POST['pickuptimeam']) ?  $_POST['pickuptimeam'] : "";
$streetaddress = isset($_POST['streetaddress']) ?  $_POST['streetaddress'] : "";
$citytown = isset($_POST['citytown']) ?  $_POST['citytown'] : "";
$flighttimehh = isset($_POST['flighttimehh']) ?  $_POST['flighttimehh'] : "";
$flighttimemm = isset($_POST['flighttimemm']) ?  $_POST['flighttimemm'] : "";
$flighttimeam = isset($_POST['flighttimeam']) ?  $_POST['flighttimeam'] : "";
$airport_name = isset($_POST['airport_name']) ?  $_POST['airport_name'] : "";
$airline = isset($_POST['airline']) ?  $_POST['airline'] : "";
$flightno = isset($_POST['flightno']) ?  $_POST['flightno'] : "";
$departing_to = $_POST['departing_to'];
$payment_method = isset($_POST['payment_method']) ?  $_POST['payment_method'] : "";
$remarks = isset($_POST['remarks']) ?  $_POST['remarks'] : "";


if (($fname == "") || ($lname == "") || ($email == "") || ($phone == "")) {
	echo "<script>alert('Message Sent Failed')</script>";
	echo "<script>location.href='../quote.php'</script>";
} else {


	$secret = '6LeoDP8nAAAAAB-bFKbKGgvmsRkQJfW1hGpNB-jx';
	$response = $_POST['g-recaptcha-response'];
	$remoteip = $_SERVER['REMOTE_ADDR'];

	$url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
	$result = json_decode($url, TRUE);
	$site_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];

	if ($result['success'] == 1) {

		$headers = "From: FlamesCab<noreply@airdrieflamescab.com>";
		$subject = 'Reservation form submission for Flames Cab';
		$form_message = '<html><head>';
		$form_message .= '<style>';
		$form_message .= '.email-table {';
		$form_message .= '  border-collapse: collapse;';
		$form_message .= '  width: 100%;';
		$form_message .= '  max-width: 600px;';
		$form_message .= '  margin: 0 auto;';
		$form_message .= '  font-family: Arial, sans-serif;';
		$form_message .= '}';
		$form_message .= '.email-table th, .email-table td {';
		$form_message .= '  padding: 10px;';
		$form_message .= '  border: 1px solid #dddddd;';
		$form_message .= '}';
		$form_message .= '.header-row {';
		$form_message .= '  background-color: #f2f2f2;';
		$form_message .= '  text-align: left;';
		$form_message .= '}';
		$form_message .= '</style>';
		$form_message .= '</head><body>';
		$form_message .= '<table class="email-table">';
		$form_message .= "<tr><td>Name:</td><td>$fname $lanme.'</td></tr>";
		$form_message .= "<tr><td>Email:</td><td>$email</td></tr>";
		$form_message .= "<tr><td>Phone:</td><td>$phone</td></tr>";
		$form_message .= "<tr><td>Service:</td><td>$service</td></tr>";
		$form_message .= "<tr><td>No Of Passenger:</td><td>$nopassengers</td></tr>";
		$form_message .= "<tr><td>No Of Lugguge:</td><td>$luggage</td></tr>";
		$form_message .= "<tr><td>Pick Up Date:</td><td>$pick_up_date</td></tr>";
		$form_message .= "<tr><td>Pick Up Time:</td><td>$pickuptimehh:$pickuptimemm $pickuptimeam</td></tr>";
		$form_message .= "<tr><td>Street Address:</td><td>$streetaddress</td></tr>";
		$form_message .= "<tr><td>City:</td><td>$citytown</td></tr>";
		$form_message .= "<tr><td>Flight Time:</td><td>$flighttimehh:$flighttimemm $flighttimeam</td></tr>";
		$form_message .= "<tr><td>Airport Name:</td><td>$airport_name</td></tr>";
		$form_message .= "<tr><td>Airline:</td><td>$airline</td></tr>";
		$form_message .= "<tr><td>Flight To:</td><td>$flightno</td></tr>";
		$form_message .= "<tr><td>Departing To:</td><td>$departing_to</td></tr>";
		$form_message .= "<tr><td>Payment Method:</td><td>$payment_method</td></tr>";
		$form_message .= "<tr><td colspan='2' >Remarks:<br>$remarks</td></tr>";
		$form_message .= '</table>';
		$form_message .= 'This mail is sent by reservation form of <a href="' . $site_url . '">' . $site_url . '</a>';
		$form_message .= '</body></html>';
		$headers .= "\r\nContent-type: text/html; charset=iso-8859-1";
		mail("info@mapleleapgroups.com", $subject, $form_message, $headers);
		
		echo "<script>location.href='msgsuccess.php'</script>";
	} else {
		echo "<script>alert('Please use the google recaptha')</script>";
		echo "<script>location.href='../reservation.php'</script>";
	}
}
?>