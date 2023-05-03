<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/phpmailer/phpmailer/src/Exception.php';
require '../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../../vendor/phpmailer/phpmailer/src/SMTP.php';

session_start();

// Sprawdzenie czy koszyk istnieje w sesji
if (!isset($_SESSION['koszyk'])) {
    $_SESSION['koszyk'] = array();
}

// Pobranie zawartości koszyka i wyliczenie kosztu zamówienia
$koszyk = $_SESSION['koszyk'];
$suma = 0;
$zawartoscKoszyka = '';
foreach ($koszyk as $produkt) {
    $suma += $produkt['cena'] * $produkt['ilosc'];
    $zawartoscKoszyka .= "{$produkt['tytul']} ({$produkt['ilosc']} szt.) - {$produkt['cena']} zł<br>";
}

// Pobranie adresu email zalogowanego użytkownika
$connection = new mysqli("localhost", "root", "", "logowanie");
$login = $_SESSION['login'];
$query = "SELECT Adresemail FROM users WHERE login = '$login'";
$result = $connection->query($query);
$row = $result->fetch_assoc();
$email = $row['Adresemail'];

// Ustawienia mailera
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'ksiegarniaksiazek@gmail.com';
$mail->Password = 'cygikokgsxcgqzzd';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->isHTML(true);
$mail->setFrom('ksiegarniaksiazek@gmail.com', 'Ksiegarnia Ksiazek');
$mail->addAddress($email);
$mail->Subject = "Potwierdzenie zamowienia w Ksiegarni Ksiazek";
$mail->Body = "Dziękujemy za zamówienie w Księgarni Książek!<br><br>Zawartość zamówienia:<br>{$zawartoscKoszyka}<br>Łączna kwota zamówienia: {$suma} zł";
$mail->send();

// Zamknięcie połączenia z bazą danych
$connection->close();

// Usunięcie zawartości koszyka po wysłaniu zamówienia
$_SESSION['koszyk'] = array();

// Przekierowanie do strony potwierdzenia zamówienia
header("Location: ./response.php");
?>
