<?php
session_start();

if(isset($_SESSION['logon']) && $_SESSION['logon'] == True){
  header('Location: panel.php');
  exit();
}
require_once '../logger.php';
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
            <nav class="navbar">
                <ul>
                <li>
            <form action="../SearchBar.php" method="get">
                <input type="text" name="search" placeholder="Wyszukaj...">
               
            </form>
        </li>
        <li><a href="../../homePage.php">Strona główna</a></li>
        <li><a href="../Cart files/cart.php">Koszyk</a></li>
        <li><a href="../Login files/login.php">Logowanie</a></li>
                </ul>
            </nav>
        </div>



    <head>
        <style type="text/css">
  @import url('../../CSS/login.css');
    </style>
    </head>
    <div class="center">
      <h1>Zaloguj się</h1>
      <form method="post" action="UsersLogin.php">
        <div class="txt_field">
          <input type="text" required name="login">
          <span></span>
          <label>Login</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="pass">
          <span></span>
          <label>Hasło</label>
        </div>
      
        <input type="submit" value="Zaloguj się">
        <div class="signup_link">
          Nie posiadasz konta? <a href="../Login files/Registration.php">Zarejestruj się</a>
        </div>
      </form>
      <?php
    if(isset($_SESSION['error'])){ //jezeli istnieje zmienna error to ją wypisuje // <div class="pass">Zapomniałeś hasła?</div> 
      echo '<span style="color: red; font-weight: bold;">'.$_SESSION['error'].'</span>'; 
      unset($_SESSION['error']);
    }
  ?>
    </div>
</body>
</html>
