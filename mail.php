<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address1 = $_POST['add1'];
$address2 = $_POST['add2'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$province = $_POST['province'];
$length = $_POST['length'];
$quantity = $_POST['quantity'];
$formcontent=" From: $name \n Email: $email \n Phone: $phone \n Address: $address1 \n $address2 \n $city \n $province \n $zip";
$recipient = "jordan@salesperson.net";
$subject = "Order Placed: $name";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>
