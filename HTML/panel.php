<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Księgarnia "Książek"</title>
    <link rel="stylesheet" type="text/css" href="../CSS/navigationBar.css">
    <link rel="stylesheet" type="text/css" href="../CSS/loginPage.css">
    <link rel="stylesheet" type="text/css" href="../CSS/sideBar.css">
</head>
<body>
            <nav class="navbar">
                <ul>
          <li><input type="text" placeholder="Wyszukaj..."></li>
                    <li><a href="../homePage.php">Strona główna</a></li>
                    <li><a href="#">Koszyk</a></li>
                    <li>
                    <a href="../HTML/login.php">Logowanie</a>
                </li>
                </ul>
            </nav>
        </div>



    <head>
        <style type="text/css">
  @import url('../CSS/login.css');
    </style>
    </head>
    <div class="center">
      <h1>Zalogowano jako: 
      <?php

if(isset($_SESSION['logon']) && $_SESSION['logon'] == True){
  echo '<br>'.$_SESSION['login'].'<br/><br><a href="logout.php">Wyloguj się</a>';
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
