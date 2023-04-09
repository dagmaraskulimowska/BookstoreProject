<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Księgarnia "Książek"</title>
    <style type="text/css">
   @import url('CSS/navigationBar.css');
    @import url('CSS/sideBar.css');
</style>
</head>
<body>

<?php
$database = new mysqli("localhost","BookstoreAdmin","bookstore555","bookstore");

if ($database -> connect_errno) {
  echo "Failed to connect to MySQL: " . $database -> connect_error;
  exit();
}
?>

            <nav class="navbar">
                <ul>
          <li><input type="text" placeholder="Wyszukaj..."></li>
                    <li><a href="homePage.php">Strona główna</a></li>
                    <li><a href="HTML/Cart.php">Koszyk</a></li>
                    <li>
                    <a href="HTML/login.php">Logowanie</a>
                </li>
                </ul>
            </nav>
        </div>
<head>
<div class="sidebar">
   <h1>Kategorie</h1>
   <nav class="menu">
      <div class="menu-column">
         <a href="HTML/ForKids.php" class="menu-item is-active">Dla dzieci</a>
         <a href="HTML/FantasyList.php" class="menu-item">Fantastyka</a>
         <a href="HTML/ThrillerCriminal.php" class="menu-item">Thriller/Kryminał</a>
         <a href="HTML/Horror.php" class="menu-item">Horror</a>
         <a href="HTML/CommonLiterature.php" class="menu-item">Literatura obyczajowa</a>
         <a href="HTML/Business.php" class="menu-item">Biznes</a>
      </div>
      <div class="menu-column">
         <a href="HTML/BellesLettres.php" class="menu-item">Literatura piękna</a>
         <a href="HTML/NonFiction.php" class="menu-item">Literatura faktu</a>
         <a href="HTML/PersonalDevelopment.php" class="menu-item">Rozwój osobisty</a>
         <a href="HTML/Romance.php" class="menu-item">Romans</a>
         <a href="HTML/Historical.php" class="menu-item">Historyczne</a>
         <a href="HTML/Scientific.php" class="menu-item">Naukowe</a>
      </div>
   </nav>
</div>
<<<<<<< Updated upstream
=======

<head>
        <style type="text/css">
  @import url('CSS/homePage.css');
  @import url('CSS/productTable.css');
    </style>
    </head>
    <div class="center">
      <h1>Science week! Tylko do końca tygodnia bestselerowe tytuły naukowe aż 50% taniej!</h1>
</div>


<div class="grid-container" style="margin-top: 260px">
    <?php while($row = mysqli_fetch_array($wynik)) { ?>
        <div class="book">
            <img src="<?php echo $row['Okładka']; ?>" alt="<?php echo $row['Tytuł']; ?>" style="width:30%">
            <p class="cardmysql">
                <?php echo $row['Tytuł'] . "<br> " . round($row['Cena']*0.5, 2) . "zł"; echo "<br>"; ?>
            </p>
            <form method="post" action="../BookstoreProject/HTML/addToCart.php">
                <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
                <input type="hidden" name="tytul" value="<?php echo $row['Tytuł']; ?>">
                <input type="hidden" name="cena" value="<?php echo $row['Cena']; ?>">
                <p><button type="submit" class="btn_addtocart">Dodaj do koszyka</button></p>
            </form>
        </div>
<?php } ?>
      </div>

>>>>>>> Stashed changes
</body>
</html>
</body>
</html>
