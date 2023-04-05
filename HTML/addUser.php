<?php
$login = $_POST['login'];
$pass = $_POST['pass'];
$hash = password_hash($pass, PASSWORD_DEFAULT);

try {
    $connection = new mysqli("localhost", "root", "", "logowanie");

    if($connection->connect_errno != 0){
      throw new Exception(mysqli_connect_errno());
    }
    else {
            if($reply = mysqli_query($connection, "INSERT INTO users (id, login, pass) VALUES (NULL, '$login', '$hash')"));
            $connection->close();
            header('Location: Registration.php');
            exit();
    }

} catch(Exception $e) {
    echo 'Error occured!';
}

?>
