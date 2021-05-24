<?php
$name = $_POST['nume'];
$visitor_email = $_POST['e-mail'];
$subject = $_POST['subiect'];
$message = $_POST['mesaj'];

$email_from='info@illu233.github.io';

$email_subject='Nou email';

$email_body="Nume de utilizator: $name.\n".
"Email: $visitor_email.\n".
"Subiect: $subject.\n".
"Mesaj: $message.\n";

$to = "tufiscosmin233@gmail.com";

$headers= "From: $email_from \r\n";

$headers="Raspuns: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Locatie: contact.html");

?>
