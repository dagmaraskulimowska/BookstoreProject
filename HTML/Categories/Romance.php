<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Księgarnia "Książek"</title>
    <style type="text/css">
        @import url('../../CSS/navigationBar.css');
        @import url('../../CSS/productTable.css');
        @import url('../../CSS/sideBar.css');
    </style>
</head>
<body>

<?php
    // Połączenie z bazą danych
    $database = new mysqli("localhost", "root", "", "bookstore");

    if ($database -> connect_errno) {
        echo "Failed to connect to MySQL: " . $database -> connect_error;
        exit();
    }

    // Zapytanie do bazy danych
    $wynik = mysqli_query($database,"SELECT * FROM ksiazki WHERE Gatunek = 'Romans'");
?>

<nav class="navbar">
    <ul>
        <li><input type="text" placeholder="Wyszukaj..."></li>
        <li><a href="../../homePage.php">Strona główna</a></li>
        <li><a href="../../HTML/Cart.php">Koszyk</a></li>
        <li><a href="../../HTML/login.php">Logowanie</a></li>
    </ul>
</nav>

<div class="grid-container">
    <?php while($row = mysqli_fetch_array($wynik)) { ?>
        <div class="book">
            <img src="<?php echo $row['Okładka']; ?>" alt="<?php echo $row['Tytuł']; ?>" style="width:30%">
            <p class="cardmysql">
                <?php echo $row['Tytuł'] . "<br> " . $row['Cena'] . "zł"; echo "<br>"; ?>
            </p>
            <form method="post" action="../addToCart.php">
                <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
                <input type="hidden" name="tytul" value="<?php echo $row['Tytuł']; ?>">
                <input type="hidden" name="cena" value="<?php echo $row['Cena']; ?>">
                <p><button type="submit" class="btn_addtocart">Dodaj do koszyka</button></p>
            </form>
        </div>
    <?php } ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Księgarnia "Książek"</title>
    <style type="text/css">
   @import url('../CSS/navigationBar.css');
    @import url('../CSS/sideBar.css');
</style>
</head>
<body>

        </div>
<head>
<div class="sidebar">
   <h1>Kategorie</h1>
   <nav class="menu">
      <div class="menu-column">
      <a href="../Categories/ForKids.php" class="menu-item is-active">Dla dzieci</a>
         <a href="../Categories/FantasyList.php" class="menu-item">Fantastyka</a>
         <a href="../Categories/ThrillerCriminal.php" class="menu-item">Thriller/Kryminał</a>
         <a href="../Categories/Horror.php" class="menu-item">Horror</a>
         <a href="../Categories/CommonLiterature.php" class="menu-item">Literatura obyczajowa</a>
         <a href="../Categories/Business.php" class="menu-item">Biznes</a>
      </div>
      <div class="menu-column">
      <a href="../Categories/BellesLettres.php" class="menu-item">Literatura piękna</a>
         <a href="../Categories/NonFiction.php" class="menu-item">Literatura faktu</a>
         <a href="../Categories/PersonalDevelopment.php" class="menu-item">Rozwój osobisty</a>
         <a href="../Categories/Romance.php" class="menu-item">Romans</a>
         <a href="../Categories/Historical.php" class="menu-item">Historyczne</a>
         <a href="../Categories/Scientific.php" class="menu-item">Naukowe</a>
      </div>
   </nav>
</div>
</body>
</html>
</body>
</html>


</body>
</html>
