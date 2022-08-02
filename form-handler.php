<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@crimeron.me';

$email_subject = 'Yeni Mesaj'

$email_body = "User Name: $name.\n".
                "User Email: $visitor_mail.\n"
                "Subject: $subject.\n"
                "User Message: $message.\n";
$to = 'emirhangungor2009@hotmail.com';

$headers = "From:$email_from \r \n";
$headers="Reply-To:$visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>
