removeFromCart:<?php
session_start();

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    foreach ($_SESSION['koszyk'] as $key => $produkt) {
        if ($produkt['id'] == $id) {
            if ($produkt['ilosc'] > 1) {
                $_SESSION['koszyk'][$key]['ilosc']--;
            } else {
                unset($_SESSION['koszyk'][$key]);
            }
            break;
        }
    }
}

header('Location: ../HTML/Cart.php');
exit();
?>