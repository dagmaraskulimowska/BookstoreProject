<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Księgarnia "Książek"</title>
    <style type="text/css">
 	@import url('../CSS/navigationBar.css');
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
          <li><a href="../homePage.php">Strona główna</a></li>
                    <li><a href="#">Koszyk</a></li>
                    <li>
                    <a href="HTML/login.php">Logowanie</a>
                </li>
                </ul>
            </nav>
        </div>
<head> 

</head>
<div class="babel">
  <img src="https://ecsmedia.pl/c/babel-czyli-o-koniecznosci-przemocy-b-iext126543318.jpg" alt="Babel" style="width:8%">
    <p class="cardmysql">
    <?php
$wynik = mysqli_query($database,"SELECT * FROM ksiazki WHERE ID =1");

while($row = mysqli_fetch_array($wynik))

if (mysqli_query($database,"SELECT id FROM ksiazki")) {

{echo $row['Tytuł'] . " " . $row['Cena'] . "zł"; echo "<br>"; }
}
?>

    </p>
  <p><button>Dodaj do koszyka</button></p>
</div>

<div class="kosiarze">
  <img src="https://ecsmedia.pl/c/kosiarze-zniwa-smierci-tom-1-b-iext126684420.jpg" alt="kosiarze" style="width:8%">
    <p class="cardmysql">
    <?php
$wynik = mysqli_query($database,"SELECT * FROM ksiazki WHERE ID =2");

while($row = mysqli_fetch_array($wynik))

if (mysqli_query($database,"SELECT id FROM ksiazki")) {

{echo $row['Tytuł'] . " " . $row['Cena'] . "zł"; echo "<br>"; }
}
?>
    </p>
  <p><button>Dodaj do koszyka</button></p>
</div>

<div class="Wszyscyjestesmylotrami">
  <img src="https://ecsmedia.pl/c/wszyscy-jestesmy-lotrami-villains-tom-1-b-iext126805233.jpg" alt="Wszyscyjestesmylotrami" style="width:8%">
    <p class="cardmysql">
    <?php
$wynik = mysqli_query($database,"SELECT * FROM ksiazki WHERE ID =3");

while($row = mysqli_fetch_array($wynik))

if (mysqli_query($database,"SELECT id FROM ksiazki")) {

{echo $row['Tytuł'] . " " . $row['Cena'] . "zł"; echo "<br>"; }
}
?>

    </p>
  <p><button>Dodaj do koszyka</button></p>
</div>

<div class="piataporaroku">
  <img src="https://ecsmedia.pl/c/piata-pora-roku-peknieta-ziemia-tom-1-b-iext48002542.jpg" alt="piataporaroku" style="width:8%">
    <p class="cardmysql">
    <?php
$wynik = mysqli_query($database,"SELECT * FROM ksiazki WHERE ID =4");

while($row = mysqli_fetch_array($wynik))

if (mysqli_query($database,"SELECT id FROM ksiazki")) {

{echo $row['Tytuł'] . " " . $row['Cena'] . "zł"; echo "<br>"; }
}
mysqli_close($database);
?>
    </p>
  <p><button>Dodaj do koszyka</button></p>
</div>

</html>
       <main>

</main> 
</body>
</html>
