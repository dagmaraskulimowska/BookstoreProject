<?php

session_start();
require_once '../HTML/logger.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Dagmara Skulimowska, Tomasz Barczycki">
    <meta name="description" content="Strona internetowa księgarni, możliwość zakupu produktów z asortymentu księgarni">
    <meta name="keywords" content="Księgarnia Książek, księgarnia, książki, bookstore, lektury, Wojna Makowa">
    <title>Księgarnia "Książek"</title>
    <link rel="stylesheet" type="text/css" href="../CSS/navigationBar.css">
    <link rel="stylesheet" type="text/css" href="../CSS/productPage.css">
</head>

<body>
    <nav class="navbar">
        <ul>
            <li>
                <form action="../HTML/SearchBar.php" method="get">
                    <input type="text" name="search" placeholder="Wyszukaj...">

                </form>
            </li>
            <li><a href="../homePage.php">Strona główna</a></li>
            <li><a href="Cart Files/cart.php">Koszyk</a></li>
            <?php
            if (isset($_SESSION['username'])) {
                echo '<li><a href="Login files/logout.php">Wyloguj się</a></li>';
            } else {
                echo '<li><a href="Login files/login.php">Logowanie</a></li>';
            }
            ?>
        </ul>
    </nav>
    <div class="product-container">
        <?php
        $database = new mysqli("localhost", "root", "", "bookstore");

        if ($database->connect_errno) {
            echo "Failed to connect to MySQL: " . $database->connect_error;
            exit();
        }

        $id = $_GET['id'];
        $sql = "SELECT * FROM ksiazki WHERE ID=$id";
        $result = $database->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product-image'><img src='" . $row['Okładka'] . "' alt='" . $row['Tytuł'] . "'></div>";
                echo "<div class='product-details'>";
                echo "<h2>" . $row['Tytuł'] . "</h2>";
                echo "<h3>" . $row['Autor'] . "</h3>";
                echo "<p><strong>Wydawnictwo:</strong> " . $row['Wydawnictwo'] . "</p>";
                echo "<p><strong>Liczba stron:</strong> " . $row['Liczbastron'] . "</p>";
                if (!empty($row['Seria'])) {
                    echo "<p><strong>Seria:</strong> " . $row['Seria'] . "</p>";
                    echo "<p><strong>Tom:</strong> " . $row['Tom'] . "</p>";
                }
                echo "<p><strong>Gatunek:</strong> " . $row['Gatunek'] . "</p>";
                echo "<p><strong>Cena:</strong> " . $row['Cena'] . " zł</p>";
                echo "<form method='post' action='Cart%20files/addToCart.php'>";
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


        $database->close();
        ?>
    </div>
    <footer>
        <p> 2023 Księgarnia "Książek"</p>
    </footer>
</body>

</html>