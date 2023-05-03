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
    <link rel="stylesheet" type="text/css" href="../CSS/searchbar.css">
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
            <li><a href="../HTML/Cart files/cart.php">Koszyk</a></li>


            <?php

            if (isset($_SESSION['username'])) {
                echo '<li><a href="logout.php">Wyloguj się</a></li>';
            } else {
                echo '<li><a href="Login files/login.php">Logowanie</a></li>';
            }
            ?>
        </ul>
    </nav>
    <div class="product-container">


        <?php

        require_once "connection.php";

        class SearchBar extends connection
        {


            public function __construct()
            {
                parent::__construct();
            }
        }
        $searchbar = new SearchBar();

        $search = mysqli_real_escape_string($searchbar->getDatabase(), $_GET['search']);
        $sql = "SELECT * FROM ksiazki WHERE Tytuł LIKE '%$search%' OR Autor LIKE '%$search%'";
        $result = mysqli_query($searchbar->getDatabase(), $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>

                <div class="book">
                    <img src="<?php echo $row['Okładka']; ?>" alt="<?php echo $row['Tytuł']; ?>" style="width:30%">
                    <p class="cardmysql">
                        <?php echo $row['Tytuł'] . "<br> " . $row['Cena'] . "zł";
                        echo "<br>"; ?>
                    </p>
                    <form method="post" action="../HTML/Cart files/addToCart.php">
                        <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
                        <input type="hidden" name="tytul" value="<?php echo $row['Tytuł']; ?>">
                        <input type="hidden" name="cena" value="<?php echo $row['Cena']; ?>">
                        <p><button type="submit" class="btn_addtocart">Dodaj do koszyka</button></p>
                    </form>
                </div>

        <?php
            }
        } else {
            echo "Brak wyników";
        }
        ?>
    </div>
    <footer>
        <p> 2023 Księgarnia "Książek"</p>
    </footer>
</body>

</html>