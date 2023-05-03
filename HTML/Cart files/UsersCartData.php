<?php
session_start();

require_once '../navbarHTML.php';

class UsersCartData extends navbarHTML {}

try {
    $connection = new mysqli("localhost", "root", "", "logowanie");

    if($connection->connect_errno != 0){
        throw new Exception(mysqli_connect_errno());
    }
    
    if(isset($_SESSION['logon']) && $_SESSION['logon'] == true) {
        $login = $_SESSION['login'];
        $reply = mysqli_query($connection, "SELECT * FROM users WHERE login = '$login'");

        if(mysqli_num_rows($reply) > 0) {
            $row = mysqli_fetch_assoc($reply);
            $oldImie = $row['Imie'];
            $oldNazwisko = $row['Nazwisko'];
            $oldAdres = $row['Adres'];
            $oldKodpocztowy = $row['Kodpocztowy'];
            $oldMiasto = $row['Miasto'];
            $oldNrtel = $row['Nrtel'];
            $oldAdresemail = $row['Adresemail'];
        } else {
            $_SESSION['error'] = "Błąd pobierania danych użytkownika";
            header('Location: login.php');
            exit();
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $imie = $_POST['Imie'];
            $nazwisko = $_POST['Nazwisko'];
            $adres = $_POST['Adres'];
            $kodpocztowy = $_POST['Kodpocztowy'];
            $miasto = $_POST['Miasto'];
            $nrtel = $_POST['Nrtel'];
            $adresemail = $_POST['Adresemail'];

            $updateQuery = "UPDATE users SET Imie='$imie', Nazwisko='$nazwisko', Adres='$adres', Kodpocztowy='$kodpocztowy', Miasto='$miasto', Nrtel='$nrtel', Adresemail='$adresemail' WHERE login='$login'";
            if(mysqli_query($connection, $updateQuery)) {
                $_SESSION['success'] = "Dane użytkownika zostały zaktualizowane.";
                header('Location: usersCartData.php');
                exit();
            } else {
                $_SESSION['error'] = "Błąd aktualizacji danych użytkownika";
                header('Location: usersCartData.php');
                exit();
            }
        }
    } else {
        $_SESSION['error'] = "Proszę się zalogować!";
        header('Location: ../Login files/login.php');
        exit();
    }

    $connection->close();
} catch(Exception $e) {
    $_SESSION['error'] = 'Wystąpił błąd podczas połączenia z bazą danych.';
    header('Location: usersCartData.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Dagmara Skulimowska, Tomasz Barczycki">
    <meta name="description" content="Strona internetowa księgarni, możliwość zakupu produktów z asortymentu księgarni">
    <meta name="keywords" content="Księgarnia Książek, księgarnia, książki, bookstore, lektury, Wojna Makowa">
    <title>Księgarnia "Książek"</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/navigationBar.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/sideBar.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/usersCartData.css">
</head>
<body>

            <div id="link-container">
            <a href="../Cart files/cart.php">Powrót do koszyka</a>
        <a href="../Mail files/sendEmail.php">Przejdź do płatności</a>
                </div>
</body> 

        <?php
try {
    $connection = new mysqli("localhost", "root", "", "logowanie");

    if($connection->connect_errno != 0){
      throw new Exception(mysqli_connect_errno());
    }
    else {
             if(isset($_SESSION['logon']) && $_SESSION['logon'] == True) {
              $login = $_SESSION['login'];
              $reply = mysqli_query($connection, "SELECT * FROM users WHERE login = '$login'");
            } 
            else{
              $_SESSION['error'] = "Proszę się zalogować!";
              header('Location: login.php');
              exit();
            }

             
             if (mysqli_num_rows($reply) > 0) {
                $row = mysqli_fetch_assoc($reply);
                echo '<div class="center">';
                echo '<form method="POST">';
                echo '<label for="Imie">Imię:</label>';
                echo '<div class="txt_field">';
                echo '<input type="text" id="Imie" name="Imie" value="' . $row['Imie'] . '"><br></div>';
                echo '<label for="Nazwisko">Nazwisko:</label>';
                echo '<div class="txt_field">';
                echo '<input type="text" id="Nazwisko" name="Nazwisko" value="' . $row['Nazwisko'] . '"><br></div>';
                echo '<label for="Adres">Adres:</label>';
                echo '<div class="txt_field">';
                echo '<input type="text" id="Adres" name="Adres" value="' . $row['Adres'] . '"><br></div>';
                echo '<label for="Kodpocztowy">Kod pocztowy:</label>';
                echo '<div class="txt_field">';
                echo '<input type="text" id="Kodpocztowy" name="Kodpocztowy" value="' . $row['Kodpocztowy'] . '"><br></div>';
                echo '<label for="Miasto">Miasto:</label>';
                echo '<div class="txt_field">';
                echo '<input type="text" id="Miasto" name="Miasto" value="' . $row['Miasto'] . '"><br></div>';
                echo '<label for="Nrtel">Numer telefonu:</label>';
                echo '<div class="txt_field">';
                echo '<input type="text" id="Nrtel" name="Nrtel" value="' . $row['Nrtel'] . '"><br></div>';
                echo '<label for="Adresemail">Adres email:</label>';
                echo '<div class="txt_field">';
                echo '<input type="text" id="Adresemail" name="Adresemail" value="' . $row['Adresemail'] . '"><br></div>';
                echo '<input type="submit" name="submit" value="Zapisz zmiany">';
                echo '</form>';
                }
                $connection->close();
            exit();
    }

} catch(Exception $e) {
    echo 'Error occured!';
}

?>

    </div>
</html>