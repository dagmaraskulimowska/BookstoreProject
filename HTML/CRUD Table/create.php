<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="author" content="Dagmara Skulimowska, Tomasz Barczycki">
    <meta name="description" content="Strona internetowa księgarni, możliwość zakupu produktów z asortymentu księgarni">
    <meta name="keywords" content="Księgarnia Książek, księgarnia, książki, bookstore, lektury, Wojna Makowa">
    <title>Księgarnia "Książek"</title>
    
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
                    <li><a href="../html/cart.php">Koszyk</a></li>
                    <li>
                    <a href="../HTML/login.php">Logowanie</a>
                </li>
                </ul>
            </nav>
        </div>



    <head>
        <style type="text/css">
  @import url('../CSS/login.css');
    </style>
    </head>
    <div class="center">
      <h1>Dodaj Książkę</h1>
    <form action="addBooks.php" method="post">
  <label for="okladka">Okładka:</label>
  <input type="text" id="okladka" name="Okładka"><br><br>
  
  <label for="tytul">Tytuł:</label>
  <input type="text" id="tytul" name="Tytuł"><br><br>
  
  <label for="autor">Autor:</label>
  <input type="text" id="autor" name="Autor"><br><br>
  
  <label for="wydawnictwo">Wydawnictwo:</label>
  <input type="text" id="wydawnictwo" name="Wydawnictwo"><br><br>
  
  <label for="liczbastron">Liczba Stron:</label>
  <input type="text" id="liczbastron" name="Liczba Stron"><br><br>
  
  <label for="seria">Seria:</label>
  <input type="text" id="seria" name="Seria"><br><br>
  
  <label for="tom">Tom:</label>
  <input type="text" id="tom" name="Tom"><br><br>
  
  <label for="gatunek">Gatunek:</label>
  <input type="text" id="gatunek" name="Gatunek"><br><br>
  
  <label for="cena">Cena:</label>
  <input type="text" id="cena" name="Cena"><br><br>
  
  <input type="submit" value="Dodaj książkę">
</form>
      <?php
    if(isset($_SESSION['error'])){ //jezeli istnieje zmienna error to ją wypisuje
      echo '<span style="color: red; font-weight: bold;">'.$_SESSION['error'].'</span>'; 
      unset($_SESSION['error']);
    }
  ?>
</body>
</html>