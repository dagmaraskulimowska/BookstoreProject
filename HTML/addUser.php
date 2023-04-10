<?php
$login = $_POST['login'];
$pass = $_POST['pass'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$adres = $_POST['adres'];
$kodpocztowy = $_POST['kodpocztowy'];
$miasto = $_POST['miasto'];
$nrtel = $_POST['nrtel'];
$email = $_POST['email'];

$hash = password_hash($pass, PASSWORD_DEFAULT);

try {
    $connection = new mysqli("localhost", "root", "", "logowanie");

    if($connection->connect_errno != 0){
      throw new Exception(mysqli_connect_errno());
    }
    else {
            if($reply = mysqli_query($connection, "INSERT INTO users (id, login, pass, Imie, Nazwisko, Adres, Kodpocztowy, Miasto, Nrtel, Adresemail) VALUES (NULL, '$login', '$hash','$nazwisko', '$adres','$kodpocztowy', '$miasto','$nrtel', '$email')"));
            $connection->close();
            header('Location: Registration.php');
            exit();
    }

} catch(Exception $e) {
    echo 'Error occured!';
}

?>
