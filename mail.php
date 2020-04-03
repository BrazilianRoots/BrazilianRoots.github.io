<?php
if(isset($_POST['email'])){
	$email_to = "jordan@salesperson.net";
	$email_subject = "New Order Placed.";

	function died($error){
		echo "There appears to be an error in your form.";
		die();
	}

	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address1 = $_POST['add1'];
	$address2 = $_POST['add2'];
	$city = $_POST['city'];
	$province = $_POST['province'];
	$zip = $_POST['zip'];

	$length = $_POST['length'];
	$bundle = $_POST['bundle'];
	$quantity = $_POST['quantity'];
	$total = $_POST['totalPrice'];

	$error_message = "";
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\[A-Za-z]{2,4}$/';

	if(!preg_match($email_exp,$email)){
		$error_message.='The email address you've entered is not valid.<br/>';
	}

	$email_message = "Form Details Below.\n\n";

	$email_message .= "Name: $name\n Email: $email\n Phone: $phone\n Address: $address1, $address2, $city, $province, $zip\n Length: $length\n Bundle: $bundle\n QTY: $quantity\n\n Total: $total";

	$header = 'From: '.$email."\r\n".
	'Reply-To: '.&email."\r\n" .
	'X-Mailer: PHP/' .phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);
}?>