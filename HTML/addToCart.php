<?php

session_start();

// Sprawdzenie czy produkt został dodany do koszyka
if(isset($_POST['id']) && isset($_POST['tytul']) && isset($_POST['cena'])) {

    // Przypisanie danych produktu do zmiennych
    $id = $_POST['id'];
    $tytul = $_POST['tytul'];
    $cena = $_POST['cena'];

    // Sprawdzenie czy koszyk istnieje w sesji
    if(!isset($_SESSION['koszyk'])) {
        $_SESSION['koszyk'] = array();
    }

    // Dodanie produktu do koszyka
    $produkt = array(
        'id' => $id,
        'tytul' => $tytul,
        'cena' => $cena,
        'ilosc' => 1
    );

    array_push($_SESSION['koszyk'], $produkt);

    // Przekierowanie użytkownika na stronę koszyka
    header('Location: Cart.php');
    exit();

} else {

    // Jeśli produkt nie został dodany do koszyka, przekierowanie użytkownika na stronę główną
    header('Location: homePage.php');
    exit();

}