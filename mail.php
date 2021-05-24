<?php
$name = $_POST['Nume'];
$visitor_email = $_POST['Email'];
$subject = $_POST['Subiect'];
$message = $_POST['Mesaj'];

$email_from='info@https://illu233.github.io/index/index.html';

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
