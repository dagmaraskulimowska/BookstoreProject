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
                    <li><a href="#">Koszyk</a></li>
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
         <a href="#" class="menu-item is-active">Dla dzieci</a>
         <a href="HTML/FantasyList.php" class="menu-item">Fantastyka</a>
         <a href="#" class="menu-item">Thriller/Kryminał</a>
         <a href="#" class="menu-item">Horror</a>
      </div>
      <div class="menu-column">
         <a href="#" class="menu-item">Literatura piękna</a>
         <a href="#" class="menu-item">Literatura obyczajowa</a>
         <a href="#" class="menu-item">Literatura faktu</a>
         <a href="#" class="menu-item">Rozwój osobisty</a>
      </div>
   </nav>
</div>
</body>
</html>
</body>
</html>
