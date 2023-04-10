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
                    <li><a href="../html/cart.php">Koszyk</a></li>
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
      <h1>Wprowadź dane</h1>
      <form method="post" action="../HTML/addUsersData.php">
        <div class="txt_field">
          <input type="text" required name="login">
          <span></span>
          <label>Imię</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="pass">
          <span></span>
          <label>Nazwisko</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="pass">
          <span></span>
          <label>Adres</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="pass">
          <span></span>
          <label>Miasto</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="pass">
          <span></span>
          <label>Kod pocztowy</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="pass">
          <span></span>
          <label>Nr tel</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="pass">
          <span></span>
          <label>Adres email</label>
        </div>
        
      
        <input type="submit" value="Zapłać">
        <div class="signup_link">
          Nie posiadasz konta? <a href="../HTML/Registration.php">Zarejestruj się</a>
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
