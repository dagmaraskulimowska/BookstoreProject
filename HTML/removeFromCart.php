<?php
session_start();

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    foreach ($_SESSION['koszyk'] as $key => $produkt) {
        if ($produkt['id'] == $id) {
            unset($_SESSION['koszyk'][$key]);
            break;
        }
    }
}

header('Location: ../HTML/Cart.php');
exit();
?>