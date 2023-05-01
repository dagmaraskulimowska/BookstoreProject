<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Dagmara Skulimowska, Tomasz Barczycki">
    <meta name="description" content="Strona internetowa księgarni, możliwość zakupu produktów z asortymentu księgarni">
    <meta name="keywords" content="Księgarnia Książek, księgarnia, książki, bookstore, lektury, Wojna Makowa">
    <title>Księgarnia "Książek"</title>
    <style type="text/css">
   table {
  font-size: 10px; /* lub inny rozmiar czcionki */
}

th, td {
  font-size: 12px; /* lub inny rozmiar czcionki */
}
</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class = "container">
        <h2>Lista Książek</h2>
        <a class="btn btn-primary" href="create.php" role="button">Dodaj książkę</a>
        <br>
        <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Okładka</th>
                <th>Tytuł</th>
                <th>Autor</th>
                <th>Wydawnictwo</th>
                <th>Liczba stron</th>
                <th>Seria</th>
                <th>Tom</th>
                <th>Gatunek</th>
                <th>Cena</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $database = new mysqli("localhost", "root", "", "bookstore");

            if ($database -> connect_errno) {
                echo "Failed to connect to MySQL: " . $database -> connect_error;
                exit();
            }

            $sql = "SELECT * from ksiazki";
            $result = $database->query($sql);

            if(!$result){
                die("Invalid query: " . $database->error);
            }

            while($row = $result->fetch_assoc()){
                echo "
                <tr>
                <td>$row[ID]</td>
                <td>$row[Okładka]</td>
                <td>$row[Tytuł]</td>
                <td>$row[Autor]</td>
                <td>$row[Wydawnictwo]</td>
                <td>$row[Liczbastron] . </td>
                <td>$row[Seria]</td>
                <td>$row[Tom]</td>
                <td>$row[Gatunek]</td>
                <td>$row[Cena]</td>
                <td>
                    <a class='tbn tbn-primary btn-sm' href='edit.php?id=$row[ID]'>Edytuj</a>
                    <a class='tbn tbn-danger btn-sm' href='delete.php?id=$row[ID]'>Usuń</a>
                </td>
            </tr>";
    }
    ?>

</tbody>
</table>
</div>
</body>
</html>
