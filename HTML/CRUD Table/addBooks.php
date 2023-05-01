<?php
if (isset($_POST['submit'])) {
    $okladka = $_POST['okladka'];
    $tytul = $_POST['tytul'];
    $autor = $_POST['autor'];
    $wydawnictwo = $_POST['wydawnictwo'];
    $liczba_stron = $_POST['liczba_stron'];
    $seria = $_POST['seria'];
    $tom = $_POST['tom'];
    $gatunek = $_POST['gatunek'];
    $cena = $_POST['cena'];
    
    //łączenie z bazą danych
    $database = new mysqli('localhost', 'root', '', 'bookstore');
    
    //sprawdzanie połączenia
    if ($database->connect_errno) {
        echo "Błąd połączenia z bazą danych: " . $database->connect_error;
        exit();
    }
    
    //tworzenie zapytania SQL
    $query = "INSERT INTO `ksiazki` (`Okładka`, `Tytuł`, `Autor`, `Wydawnictwo`, `Liczba stron`, `Seria`, `Tom`, `Gatunek`, `Cena`) VALUES ('$okladka', '$tytul', '$autor', '$wydawnictwo', '$liczba_stron', '$seria', '$tom', '$gatunek', '$cena')";
    
    //wykonanie zapytania SQL
    if ($database->query($query)) {
        echo "Książka została dodana do bazy danych!";
    } else {
        echo "Wystąpił błąd: " . $query . "<br>" . $database->error;
    }
    
    //zamknięcie połączenia z bazą danych
    $database->close();
}
?>
