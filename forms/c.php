<?php
$name = $_POST['name'];
$email = $_POST['email'];
//$phone = $_POST['phone'];
//$call = $_POST['call'];
//$website = $_POST['website'];
//$priority = $_POST['priority'];
//$type = $_POST['type'];
$message = $_POST['message'];
//$formcontent=" From: $name \n Message: $message";
$recipient = "akshitsharma1998@gmail.com";
$subject = $_POST['subject'];;
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $message, $mailheader) or die("Error!");
echo "Thank You!";
?>