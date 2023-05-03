<?php
session_start();
require_once '../logger.php';

require_once '../navbarHTML.php';

class response extends navbarHTML {}
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
    <link rel="stylesheet" type="text/css" href="../../CSS/loginPage.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/sideBar.css">
</head>
<body>
        </div>



    <head>
        <style type="text/css">
  @import url('../../CSS/login.css');
  body {
  background: url(https://scontent-waw1-1.xx.fbcdn.net/v/t1.15752-9/339476106_1356152564954448_8562563869027805240_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=ae9488&_nc_ohc=y-GSVctHYAkAX98piHa&_nc_ht=scontent-waw1-1.xx&oh=03_AdSD4AhiVU1yJY5c6DQW6hTiZyEGXPqNTC4bfYjYRmaIzw&oe=64671FEE) no-repeat center center fixed;
  background-size: cover;
}
    </style>
    </head>
    <div class="center">


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
         
              echo '<label for="Imie">Potwierdzenie płatności zostało wysłane na podany adres email:</label>';
              echo $row['Adresemail']; 
          
            }
            $connection->close();
            exit();
    }

} catch(Exception $e) {
    echo 'Error occured!';
}
?>

        </div>
 
</body>
</html>
