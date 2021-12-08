<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];

$email_from = 'pilotkalfa44@gmail.com';

$email_subject = 'New For Submission'

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                 "subject: $subject.\n".
                 "message: $message .\n";
$to = 'pilot44xd@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contacto.html");
?>