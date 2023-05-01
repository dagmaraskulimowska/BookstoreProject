<?php

session_start();

$log_file = 'C:/xampp/htdocs/Workspace/BookstoreProject/log.txt'; // nazwa pliku dziennika
$ip_address = $_SERVER['REMOTE_ADDR']; // adres IP użytkownika
$page_name = $_SERVER['REQUEST_URI']; // nazwa aktualnie przeglądanej strony
$time_stamp = date('Y-m-d H:i:s'); // czas zdarzenia nawigacyjnego

// dane zdarzenia nawigacyjnego
$log_data = "$ip_address - $time_stamp - 'Produkt dodany do koszyka'" . PHP_EOL;

// zapisywanie informacji do pliku dziennika
file_put_contents($log_file, $log_data, FILE_APPEND);

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
    foreach($_SESSION['koszyk'] as $key => $produkt) {
        if($produkt['id'] == $id) {
            $_SESSION['koszyk'][$key]['ilosc']++;
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