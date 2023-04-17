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

    // Szukamy produktu o takim samym id w koszyku
    $produkt_juz_w_koszyku = false;
    foreach($_SESSION['koszyk'] as &$produkt) {
        if($produkt['id'] == $id) {
            $produkt['ilosc']++;
            $produkt_juz_w_koszyku = true;
            break;
        }
    }

    // Jeśli produktu nie ma w koszyku, dodajemy go
    if(!$produkt_juz_w_koszyku) {
        $produkt = array(
            'id' => $id,
            'tytul' => $tytul,
            'cena' => $cena,
            'ilosc' => 1
        );
        array_push($_SESSION['koszyk'], $produkt);
    }

    // Przekierowanie użytkownika na stronę koszyka
    header('Location: Cart.php');
    exit();

} else {

    // Jeśli produkt nie został dodany do koszyka, przekierowanie użytkownika na stronę główną
    header('Location: homePage.php');
    exit();

}