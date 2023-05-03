<?php

session_start();

$log_file = 'C:/xampp/htdocs/Workspace/BookstoreProject/log.txt';
$ip_address = $_SERVER['REMOTE_ADDR'];
$page_name = $_SERVER['REQUEST_URI'];
$time_stamp = date('Y-m-d H:i:s');


$log_data = "$ip_address - $time_stamp - 'Produkt dodany do koszyka'" . PHP_EOL;


file_put_contents($log_file, $log_data, FILE_APPEND);


if (isset($_POST['id']) && isset($_POST['tytul']) && isset($_POST['cena'])) {


    $id = $_POST['id'];
    $tytul = $_POST['tytul'];
    $cena = $_POST['cena'];


    if (!isset($_SESSION['koszyk'])) {
        $_SESSION['koszyk'] = array();
    }


    $produkt_juz_w_koszyku = false;
    foreach ($_SESSION['koszyk'] as $key => $produkt) {
        if ($produkt['id'] == $id) {
            $_SESSION['koszyk'][$key]['ilosc']++;
            $produkt_juz_w_koszyku = true;
            break;
        }
    }


    if (!$produkt_juz_w_koszyku) {
        $produkt = array(
            'id' => $id,
            'tytul' => $tytul,
            'cena' => $cena,
            'ilosc' => 1
        );
        array_push($_SESSION['koszyk'], $produkt);
    }


    header('Location: Cart.php');
    exit();
} else {

    header('Location: homePage.php');
    exit();
}
