<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $id = $_POST['id'];
    $okladka = $_POST['okladka'];
    $tytul = $_POST['tytul'];
    $autor = $_POST['autor'];
    $wydawnictwo = $_POST['wydawnictwo'];
    $liczba_stron = $_POST['liczba_stron'];
    $seria = $_POST['seria'];
    $tom = $_POST['tom'];
    $gatunek = $_POST['gatunek'];
    $cena = $_POST['cena'];

   
    if (!$id || !$okladka || !$tytul || !$autor || !$wydawnictwo || !$liczba_stron || !$gatunek || !$cena) {
        echo "Wszystkie pola są wymagane!";
        exit();
    }

    
    $database = new mysqli("localhost", "root", "", "bookstore");

    if ($database->connect_errno) {
        echo "Failed to connect to MySQL: " . $database->connect_error;
        exit();
    }

    $sql = "INSERT INTO ksiazki (ID, Okładka, Tytuł, Autor, Wydawnictwo, Liczbastron, Seria, Tom, Gatunek, Cena) 
            VALUES ('$id', '$okladka', '$tytul', '$autor', '$wydawnictwo', '$liczba_stron', '$seria', '$tom', '$gatunek', '$cena')";

    if (!$result = $database->query($sql)) {
        echo "Invalid query: " . $database->error;
        exit();
    }

    
    header("Location: show.php");
    exit();
}
