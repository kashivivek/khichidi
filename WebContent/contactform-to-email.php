<?php

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$email_from = "$email";//<== update the email address
$email_subject = "Contact Us request from $fullname";
$sucessMessage = "Your Request has been submitted";
$email_body = "Hi Team, \n \nYou have received a Contact Us request from the customer $fullname. \n".
		"Here are the reservation details:\nName: $fullname \nEmail: $email \nPhone: $phone \nMessage: $message \n\nThanks,\nKhichidi Website.";

$to = "khichidihb@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
$headers .= "Bcc: kashivivek@gmail.com \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
$message = "Your message has been placed! Thank you!";
echo "<script type='text/javascript'>alert('$message');window.location = 'http://www.khichidi.com';</script>";

?>