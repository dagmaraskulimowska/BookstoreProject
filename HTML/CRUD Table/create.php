<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Dagmara Skulimowska, Tomasz Barczycki">
    <meta name="description" content="Strona internetowa księgarni, możliwość zakupu produktów z asortymentu księgarni">
    <meta name="keywords" content="Księgarnia Książek, księgarnia, książki, bookstore, lektury, Wojna Makowa">
    <title>Księgarnia "Książek"</title>
	<link rel="stylesheet" type="text/css" href="../../CSS/crud.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style type="text/css">
   table {
  font-size: 10px; /* lub inny rozmiar czcionki */
}

th, td {
  font-size: 12px; /* lub inny rozmiar czcionki */
}
</style>
</head>
<body>
<div class="center">
	<h1>Dodaj książkę</h1>
	<form method="POST" action="addBook.php">
		<label>ID:</label>
		<input type="text" name="id"><br>

		<label>Okładka:</label>
		<input type="text" name="okladka"><br>
	
		<label>Tytuł:</label>
		<input type="text" name="tytul"><br>

		<label>Autor:</label>
		<input type="text" name="autor"><br>

		<label>Wydawnictwo:</label>
		<input type="text" name="wydawnictwo"><br>

		<label>Liczba stron:</label>
		<input type="text" name="liczba_stron"><br>

		<label>Seria:</label>
		<input type="text" name="seria"><br>

		<label>Tom:</label>
		<input type="text" name="tom"><br>

		<label>Gatunek:</label>
		<input type="text" name="gatunek"><br>

		<label>Cena:</label>
		<input type="text" name="cena"><br>

		<a class='btn btn-primary btn-sm' href='edit.php?id=$row[ID]'>Dodaj książkę</a>
	</form>
</div>
</body>
</html>
