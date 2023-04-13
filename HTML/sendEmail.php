<?php
require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$subject = "Potwierdzenie płatności";
$to = "dagaskul@wp.pl";
$email = "dagmaraskul@wp.pl";
$message = "121342453453";
$name = "Dagmara";

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.example.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "you@example.com";
$mail->Password = "password";

$mail->setFrom($email, $name);
$mail->addAddress("dagaskul@wp.pl", "Dagmara12345");
$mail->Subject = $subject;
$mail->Body = $message;
$mail->send();

echo "email sent";

?>
