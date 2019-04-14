<?php

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$time = $_POST['time'];
$order = $_POST['order'];
$notes = $_POST['notes'];

$email_from = "$email";//<== update the email address
$email_subject = "Online Order from $fullname";
$sucessMessage = "Your Request has been submitted";
$email_body = "Hi Team, \n \nYou have received a new order from the customer $fullname. \n".
	"Here is the order details:\n$order \nPick-up Time: $time \nPhone: $phone \nAdditional Notes: $notes \n \nThanks,\nKhichidi Website.";
//$email_body = "hi";
$to = "khichidihb@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
$headers .= "Bcc: kashivivek@gmail.com \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
$message = "Your order has been placed! Thank you!";
echo "<script type='text/javascript'>alert('$message');window.location = 'http://www.khichidi.com';</script>";

?>