<?php
require_once '../connection.php';

class Registration extends connection
{

  public function __construct()
  {
    parent::__construct();
  }
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
    <h1>Zarejestruj się</h1>
    <form method="post" action="../Login files/addUser.php">
      <div class="txt_field">
        <input type="text" required name="login">
        <span></span>
        <label> Podaj login</label>
      </div>
      <div class="txt_field">
        <input type="password" required name="pass">
        <span></span>
        <label>Podaj hasło</label>
      </div>
      <div class="txt_field">
        <input type="text" required name="imie">
        <span></span>
        <label> Podaj imię</label>
      </div>
      <div class="txt_field">
        <input type="text" required name="nazwisko">
        <span></span>
        <label> Podaj nazwisko</label>
      </div>
      <div class="txt_field">
        <input type="text" required name="adres">
        <span></span>
        <label> Podaj Adres</label>
      </div>
      <div class="txt_field">
        <input type="text" required name="kodpocztowy">
        <span></span>
        <label> Podaj Kod pocztowy</label>
      </div>
      <div class="txt_field">
        <input type="text" required name="miasto">
        <span></span>
        <label> Podaj Miasto</label>
      </div>
      <div class="txt_field">
        <input type="text" required name="nrtel">
        <span></span>
        <label> Podaj Nr tel</label>
      </div>
      <div class="txt_field">
        <input type="text" required name="email">
        <span></span>
        <label> Podaj Adres email</label>
      </div>

      <input type="submit" value="Stwórz nowe konto">
      <div class="signup_link">
        Posiadasz już konto? <a href="../Login files/login.php">Zaloguj się</a>
      </div>
    </form>

  </div>
</body>

</html>