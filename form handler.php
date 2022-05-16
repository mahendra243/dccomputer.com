<?php
$name = $_POST['name']
$fathers_name = $_POST['fathers name']
$phone_number = $_POST['phone number']
$address = $_POST['address']
$message = $_POST['message']

$email_from = 'info@yourwebsite.commmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm6'

$email_subject = 'new form submission'

$email_body = "Usser Name: $name.\n".
              "Fathers name: $fathers_name.\n".
              "Usser Phone number: $phone_number.\n".
              "Usser Address: $address.\n".
              "Usser Message: $message.\n";

$to = 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'

$headers = "Fromm: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers)

header("location: blog.html");



?>