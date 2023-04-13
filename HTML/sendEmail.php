<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';


    $name = "Ksiegarnia Ksiazek";
    $email = "ksiegarniaksiazek@gmail.com";
    $subject = "Dagmara i Tomek";
    $message = file_get_contents("mailTemplate.php");

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ksiegarniaksiazek@gmail.com';
    $mail->Password = 'cygikokgsxcgqzzd';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress('dagaskul@wp.pl');
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $message;
    $mail->send();

    header("Location: ./response.php");
?>
