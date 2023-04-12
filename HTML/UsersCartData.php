<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Księgarnia "Książek"</title>
    <link rel="stylesheet" type="text/css" href="../CSS/navigationBar.css">
    <link rel="stylesheet" type="text/css" href="../CSS/sideBar.css">
    <link rel="stylesheet" type="text/css" href="../CSS/usersCartData.css">
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
        <div class="center">
  <a href="../html/cart.php" class="back-link">Powrót do koszyka</a>
</div>
<div id="return-link-container">
        <a href="../HTML/cart.php">Powrót do koszyka</a>
                </div>
<div id="payment-link-container">
        <a href="#">Przejdź do płatności</a>
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

             // WYŚWIETLANIE DANYCH W TEXT BOXACH
             if (mysqli_num_rows($reply) > 0) {
              $row = mysqli_fetch_assoc($reply);
              echo '<div class="center">';
              echo '<form>';
              echo '<label for="Imie">Imię:</label>';
              echo '<div class="txt_field">';
              echo '<input type="text" id="Imie" name="Imie" value="' . $row['Imie'] . '"><br></div>'; // tu dodajemy zamknięcie div
              echo '<label for="Nazwisko">Nazwisko:</label>';
              echo '<div class="txt_field">';
              echo '<input type="text" id="Nazwisko" name="Nazwisko" value="' . $row['Nazwisko'] . '"><br></div>'; // tu dodajemy zamknięcie div
              echo '<label for="Adres">Adres:</label>';
              echo '<div class="txt_field">';
              echo '<input type="text" id="Adres" name="Adres" value="' . $row['Adres'] . '"><br></div>'; // tu dodajemy zamknięcie div
              echo '<label for="Kodpocztowy">Kod pocztowy:</label>';
              echo '<div class="txt_field">';
              echo '<input type="text" id="Kodpocztowy" name="Kodpocztowy" value="' . $row['Kodpocztowy'] . '"><br></div>'; // tu dodajemy zamknięcie div
              echo '<label for="Miasto">Miasto:</label>';
              echo '<div class="txt_field">';
              echo '<input type="text" id="Miasto" name="Miasto" value="' . $row['Miasto'] . '"><br></div>'; // tu dodajemy zamknięcie div
              echo '<label for="Nrtel">Numer telefonu:</label>';
              echo '<div class="txt_field">';
              echo '<input type="text" id="Nrtel" name="Nrtel" value="' . $row['Nrtel'] . '"><br></div>'; // tu dodajemy zamknięcie div
              echo '<label for="Adresemail">Adres email:</label>';
              echo '<div class="txt_field">';
              echo '<input type="text" id="Adresemail" name="Adresemail" value="' . $row['Adresemail'] . '"><br></div>'; // tu dodajemy zamknięcie div
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