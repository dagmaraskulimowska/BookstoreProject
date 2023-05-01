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
            <form action="SearchBar.php" method="get">
                <input type="text" name="search" placeholder="Wyszukaj...">
               
            </form>
        </li>
            <li><a href="../homePage.php">Strona główna</a></li>
            <li><a href="../Cart.php">Koszyk</a></li>
            <?php
           
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
//searchbar caly kod
$database = new mysqli("localhost", "root", "", "bookstore");

if ($database -> connect_errno) {
  echo "Failed to connect to MySQL: " . $database -> connect_error;
  exit();
}

$search = mysqli_real_escape_string($database, $_GET['search']);
$sql = "SELECT * FROM ksiazki WHERE Tytuł LIKE '%$search%' OR Autor LIKE '%$search%'";
$result = mysqli_query($database,$sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    ?>

<div class="book">
    <img src="<?php echo $row['Okładka']; ?>" alt="<?php echo $row['Tytuł']; ?>" style="width:30%">
    <p class="cardmysql">
        <?php echo $row['Tytuł'] . "<br> " . $row['Cena'] . "zł"; echo "<br>"; ?>
    </p>
    <form method="post" action="../HTML/addToCart.php">
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
