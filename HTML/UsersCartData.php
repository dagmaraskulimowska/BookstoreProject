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
                    <li><a href="../html/cart.php">Koszyk</a></li>
                    <li>
                    <a href="../HTML/login.php">Logowanie</a>
                </li>
                </ul>
            </nav>
        </div>  

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
            $connection->close();
            exit();
    }

} catch(Exception $e) {
    echo 'Error occured!';
}
?>

    <head>
        <style type="text/css">
  @import url('../CSS/login.css');
    </style>
    </head>
        <input type="submit" value="Zapłać">

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