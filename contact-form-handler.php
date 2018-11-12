<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'info@mugshotcoffee.ca';

	$email_subject = 'New Message';

	$email_body = "Client name: $name.\n".
									"Client email: $visitor_email.\n".
											"User Message: $message.\n";

	$t0 = "rachelturk96@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers = "Reply-To: $visitor_email \r\n";

	mail($to, $email_subject, $email_body, $headers);

	header("Location: contact.html");

?>