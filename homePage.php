<?php
  require_once 'HTML/logger.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Dagmara Skulimowska, Tomasz Barczycki">
    <meta name="description" content="Strona internetowa księgarni, możliwość zakupu produktów z asortymentu księgarni">
    <meta name="keywords" content="Księgarnia Książek, księgarnia, książki, bookstore, lektury, Wojna Makowa">
    <title>Księgarnia "Książek"</title>
    <style type="text/css">
   @import url('CSS/navigationBar.css');
    @import url('CSS/sideBar.css');
    a {
        color: black;
        text-decoration: none;
    }
    center{
      text-align: center;
    }
</style>
</head>
<body>

<?php
 $database = new mysqli("localhost", "root", "", "bookstore");

if ($database -> connect_errno) {
  echo "Failed to connect to MySQL: " . $database -> connect_error;
  exit();
}
$wynik = mysqli_query($database,"SELECT * FROM ksiazki WHERE Gatunek = 'Naukowe'");
?>

            <nav class="navbar">
                <ul>
                <li>
            <form action="HTML/SearchBar.php" method="get">
                <input type="text" name="search" placeholder="Wyszukaj...">
               
            </form>
        </li>
        <li><a href="homePage.php">Strona główna</a></li>
                    <li><a href="HTML/Cart files/cart.php">Koszyk</a></li>
                   <li> <a href="HTML/Login files/login.php">Logowanie</a> </li>
                </li>
                </ul>
            </nav>
        </div>
<head>
<div class="sidebar">
   <h1>Kategorie</h1>
   <nav class="menu">
      <div class="menu-column">
         <a href="HTML/Categories/ForKids.php" class="menu-item is-active">Dla dzieci</a>
         <a href="HTML/Categories/FantasyList.php" class="menu-item">Fantastyka</a>
         <a href="HTML/Categories/ThrillerCriminal.php" class="menu-item">Thriller/Kryminał</a>
         <a href="HTML/Categories/Horror.php" class="menu-item">Horror</a>
         <a href="HTML/Categories/CommonLiterature.php" class="menu-item">Literatura obyczajowa</a>
         <a href="HTML/Categories/Business.php" class="menu-item">Biznes</a>
      </div>
      <div class="menu-column">
         <a href="HTML/Categories/BellesLettres.php" class="menu-item">Literatura piękna</a>
         <a href="HTML/Categories/NonFiction.php" class="menu-item">Literatura faktu</a>
         <a href="HTML/Categories/PersonalDevelopment.php" class="menu-item">Rozwój osobisty</a>
         <a href="HTML/Categories/Romance.php" class="menu-item">Romans</a>
         <a href="HTML/Categories/Historical.php" class="menu-item">Historyczne</a>
         <a href="HTML/Categories/Scientific.php" class="menu-item">Naukowe</a>
      </div>
   </nav>
</div>

<head>
        <style type="text/css">
  @import url('CSS/homePage.css');
  @import url('CSS/productTable.css');
    </style>
    </head>
    <div class="center">
      <h1>Science week!<h1>
        <h1>Tylko do końca tygodnia bestselerowe tytuły naukowe aż 50% taniej!</h1>
</div>


<div class="grid-container" style = "margin-top: 20%">
    <?php while($row = mysqli_fetch_array($wynik)) { ?>
        <div class="book">

  <a href="../BookstoreProject/HTML/productPage.php?id=<?php echo $row['ID']; ?>">
    <img src="<?php echo $row['Okładka']; ?>" alt="<?php echo $row['Tytuł']; ?>" style="width:30%">
    <p class="cardmysql">
      <?php echo $row['Tytuł'] . "<br> " . $row['Cena'] . "zł"; echo "<br>"; ?>
    </p>
  </a>
  <form method="post" action="../BookstoreProject/HTML/Cart files/addToCart.php">
    <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
    <input type="hidden" name="tytul" value="<?php echo $row['Tytuł']; ?>">
    <input type="hidden" name="cena" value="<?php echo $row['Cena']; ?>">
    <p><button type="submit" class="btn_addtocart">Dodaj do koszyka</button></p>
  </form>
</div>

<?php } ?>
      </div>

</body>
</html>
</body>
</html>
