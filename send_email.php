<?php
// get the form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email1 = $_POST['email1'];

$email2 = $_POST['email2'];
$message = $_POST['message'];

// set the recipient email address
$to = 'hrithikhadawale75@gmail.com.com';

// set the email subject
$subject = 'New message from ' . $name;

// set the email message
$body = "Name: $name\nPhone: $phone\nEmail1: $email1\nEmail2: $email2\nMessage: $message";

// send the email
mail($to, $subject, $body);

// return a JSON response to the client
echo json_encode(array('success' => true));
?>
