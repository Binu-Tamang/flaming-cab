<?php
error_reporting(0);
?>

<?php
// $name = $_REQUEST['name'];
$name = isset($_POST['name']) ? preg_replace("/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name']) : "";
$email = isset($_POST['email']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email']) : "";
$phone = $_REQUEST['phone'];
$subject = $_REQUEST['subject'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$headers = "From: " . $name . " <" . $email . ">";

$site_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];

if (($name == "") || ($email == "")) {
	echo "<script>alert('Message Sent Failed')</script>";
	echo "<script>location.href='../contact.php'</script>";
} else {


	$secret = '6LeoDP8nAAAAAB-bFKbKGgvmsRkQJfW1hGpNB-jx';
	$response = $_POST['g-recaptcha-response'];
	$remoteip = $_SERVER['REMOTE_ADDR'];

	$url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
	$result = json_decode($url, TRUE);
	if ($result['success'] == 1) {
		$headers = "From: FlamesCab<noreply@myclient.site>";
		$subject = 'Contact form submission for "' . $subject . '"';
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
		$form_message .= "<tr><td>Name:</td><td>$name</td></tr>";
		$form_message .= "<tr><td>Email:</td><td>$email</td></tr>";
		$form_message .= "<tr><td>Subject:</td><td>$subject</td></tr>";
		$form_message .= "<tr><td>Phone:</td><td>$phone</td></tr>";
		$form_message .= "<tr><td>Message:</td><td>$message</td></tr>";
		$form_message .= '</table>';
		$form_message .= 'This mail is sent by contact form of <a href="' . $site_url . '">' . $site_url . '</a>';
		$form_message .= '</body></html>';
		$headers .= "\r\nContent-type: text/html; charset=iso-8859-1";
		mail("rafik@mapleleapgroups.com", $subject, $form_message, $headers);

		echo "<script>location.href='msgsuccess.php'</script>";
	} else {
		echo "<script>alert('Please use the google recaptha')</script>";
		echo "<script>location.href='../contact.php'</script>";
	}
}
?>