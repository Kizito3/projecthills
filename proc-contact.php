<?php


$name = $_POST['name'];
$email = $_POST['email'];
// $subject2 = $_POST['subject'];
$message = $_POST['message'];

if(!$fname || !$email || !$subject2 || !$message)
{
	$error = "All information is required";
	include('contact.php');
	exit;
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
	$error = "Invalid email address, please check the email you entered.";
	include('contact.php');
	exit;
}


$to = 'chigokizzy@gmail.com';
$subject = 'Message from Contact Form';
$from = "from: noreply@hillsproject.com";

$content = 'Below are the details that were filled:' . "\n"
. 'Firstname: ' . $name . "\n"
. 'Email: ' . $email . "\n"
. 'Message: ' . $message . "\n";

mail($to, $subject, $content, $from);

$correct = 'Your Message has been received. We will get back to you as soon as possible';
include('contact.php');
exit;


?>