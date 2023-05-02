<?php
session_start();

require_once '../HTML/logger.php';

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
            <form action="../HTML/SearchBar.php" method="get">
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
      <h1>Zalogowano jako: 
      <?php


if(isset($_SESSION['logon']) && $_SESSION['logon'] == True){
    echo '<br>'.$_SESSION['login'].'<br/><br><a href="logout.php">Wyloguj się</a>';
    if($_SESSION['login'] == "tomek1" || $_SESSION['login'] == "dagmara"){
      echo '<br><a href="../HTML/CRUD Table/show.php">Panel Administracyjny</a>';
    }
  }
  else{
    $_SESSION['error'] = "Proszę się zalogować!";
    header('Location: login.php');
    exit();
  }
  
?>
</h1>

    </div>
</body>
</html>
