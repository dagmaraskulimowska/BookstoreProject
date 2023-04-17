<?php
session_start();

// Sprawdzenie czy koszyk istnieje w sesji
if(!isset($_SESSION['koszyk'])) {
    $_SESSION['koszyk'] = array();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Twój koszyk</title>
    <link rel="stylesheet" type="text/css" href="../CSS/navigationBar.css">
    <link rel="stylesheet" type="text/css" href="../CSS/cart.css">
</head>
<body>

<nav class="navbar">
    <ul>
        <li><input type="text" placeholder="Wyszukaj..."></li>
        <li><a href="../homePage.php">Strona główna</a></li>
        <li><a href="../HTML/Cart.php">Koszyk</a></li>
        <li><a href="../HTML/login.php">Logowanie</a></li>
    </ul>
</nav>

        <?php if(count($_SESSION['koszyk']) == 0): ?>
        <p id="empty-cart-message">Koszyk jest pusty</p>
    <?php else: ?>
        <div class="container">
  <div class="cart container">
    <div id="cart-header">
      <h1 id="cart-title">Twój koszyk</h1>
    </div>
    <table id="cart-table">
      <thead>
        <tr>
          <th id="cart-table-title">Tytuł</th>
          <th id="cart-table-price">Cena</th>
          <th id="cart-table-quantity">Ilość</th>
          <th id="cart-table-remove">Usuń</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($_SESSION['koszyk'] as $produkt): ?>
        <tr>
          <td><?php echo $produkt['tytul']; ?></td>
          <td><?php echo $produkt['cena']; ?></td>
          <td><?php echo $produkt['ilosc']; ?></td>
          <td>
            <form method="POST" action="removeFromCart.php">
              <input type="hidden" name="id" value="<?php echo $produkt['id']; ?>">
              <button type="submit">Usuń</button>
            </form>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="2"></td>
          <td id="cart-table-total-quantity">
            Łącznie:
            <?php
            $totalQuantity = 0;
            foreach ($_SESSION['koszyk'] as $produkt) {
              $totalQuantity += $produkt['ilosc'];
            }
            echo $totalQuantity;
            ?>
          </td>
          <td id="cart-table-total-price">
            Cena całkowita:
            <?php
            $totalPrice = 0;
            foreach ($_SESSION['koszyk'] as $produkt) {
              $totalPrice += $produkt['cena'] * $produkt['ilosc'];
            }
            echo number_format($totalPrice, 2, ',', '.');
            ?> zł
          </td>
        </tr>
      </tfoot>
    </table>
    <div id="return-link-container">
      <a href="../homePage.php">Powrót do strony głównej</a>
      <a href="../HTML/UsersCartData.php">Zapłać</a>
    </div>
  </div>
</div>
    <?php endif; ?>
</body>
</html>