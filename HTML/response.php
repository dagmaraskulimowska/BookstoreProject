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
                <li>
            <form action="../HTML/SearchBar.php" method="get">
                <input type="text" name="search" placeholder="Wyszukaj...">
               
            </form>
        </li>
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
  body {
  background: url(https://scontent-waw1-1.xx.fbcdn.net/v/t1.15752-9/339476106_1356152564954448_8562563869027805240_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=ae9488&_nc_ohc=y-GSVctHYAkAX98piHa&_nc_ht=scontent-waw1-1.xx&oh=03_AdSD4AhiVU1yJY5c6DQW6hTiZyEGXPqNTC4bfYjYRmaIzw&oe=64671FEE) no-repeat center center fixed;
  background-size: cover;
}
    </style>
    </head>
    <div class="center">
      <p>Mail został wysłany na podany adres email: </p>


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
