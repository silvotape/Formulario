<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
//$call = $_POST['call'];
$website = $_POST['website'];
$priority = $_POST['priority'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Website: $website \n Priority: $priority \n Type: $type \n Message: $message";
$recipient = "sperelli@outlook.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You. Your information has been sent!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>