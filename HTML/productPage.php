<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Księgarnia "Książek"</title>
    <link rel="stylesheet" type="text/css" href="../CSS/navigationBar.css">
    <link rel="stylesheet" type="text/css" href="../CSS/productPage.css">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><input type="text" placeholder="Wyszukaj..."></li>
            <li><a href="../homePage.php">Strona główna</a></li>
            <li><a href="../Cart.php">Koszyk</a></li>
            <?php
            // Wyświetlanie odpowiedniego linku w zależności od stanu sesji (zalogowany/nie zalogowany)
            if(isset($_SESSION['username'])) {
                echo '<li><a href="logout.php">Wyloguj się</a></li>';
            } else {
                echo '<li><a href="login.php">Logowanie</a></li>';
            }
            ?>
        </ul>
    </nav>
    <div class="product-container">
    <?php
    // Połączenie z bazą danych
    $database = new mysqli("localhost", "root", "", "bookstore");

    if ($database->connect_errno) {
        echo "Failed to connect to MySQL: " . $database->connect_error;
        exit();
    }

    // pobranie danych o produkcie na podstawie przekazanego ID
    $id = $_GET['id'];
    $sql = "SELECT * FROM ksiazki WHERE ID=$id";
    $result = $database->query($sql);

    // wyświetlenie danych o produkcie
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='product-image'><img src='" . $row['Okładka'] . "' alt='" . $row['Tytuł'] . "'></div>";
            echo "<div class='product-details'>";
            echo "<h2>" . $row['Tytuł'] . "</h2>";
            echo "<h3>" . $row['Autor'] . "</h3>";
            echo "<p><strong>Wydawnictwo:</strong> " . $row['Wydawnictwo'] . "</p>";
            echo "<p><strong>Liczba stron:</strong> " . $row['Liczba stron'] . "</p>";
            if (!empty($row['Seria'])) {
                echo "<p><strong>Seria:</strong> " . $row['Seria'] . "</p>";
                echo "<p><strong>Tom:</strong> " . $row['Tom'] . "</p>";
            }
            echo "<p><strong>Gatunek:</strong> " . $row['Gatunek'] . "</p>";
            echo "<p><strong>Cena:</strong> " . $row['Cena'] . " zł</p>";
            echo "<form method='post' action='addToCart.php'>";
            echo "<input type='hidden' name='id' value='" . $row['ID'] . "'>";
            echo "<input type='hidden' name='tytul' value='" . $row['Tytuł'] . "'>";
            echo "<input type='hidden' name='cena' value='" . $row['Cena'] . "'>";
            echo "<p><button type='submit' class='btn_addtocart'>Dodaj do koszyka</button></p>";
            echo "</form>";
            echo "</div>";
        }
    } else {
        echo "Nie znaleziono produktu.";
    }
    
    // Zakończ połączenie z bazą danych
    $database->close();
    ?>
    </div>
<footer>
    <p> 2023 Księgarnia "Książek"</p>
</footer>

</body>
</html>