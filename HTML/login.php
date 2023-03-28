<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Księgarnia "Książek"</title>
    <link rel="stylesheet" type="text/css" href="../CSS/navBar.css">
    <link rel="stylesheet" type="text/css" href="../CSS/loginPage.css">
</head>
<body>
            <nav class="navbar">
                <ul>
          <li><input type="text" placeholder="Wyszukaj..."></li>
                    <li><a href="../homePage.php">Strona główna</a></li>
                    <li><a href="#">Koszyk</a></li>
                    <li>
                    <a href="login.php">Logowanie</a>
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
      <h1>Zaloguj się</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Adres Email</label>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Hasło</label>
        </div>
        <div class="pass">Zapomniałeś hasła?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Nie posiadasz konta? <a href="#">Zarejestruj się</a>
        </div>
      </form>
    </div>
</body>
</html>