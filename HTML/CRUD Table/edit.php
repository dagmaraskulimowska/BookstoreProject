<?php
$database = new mysqli("localhost", "root", "", "bookstore");

if ($database->connect_errno) {
    echo "Failed to connect to MySQL: " . $database->connect_error;
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $okladka = $_POST["okladka"];
    $tytul = $_POST["tytul"];
    $autor = $_POST["autor"];
    $wydawnictwo = $_POST["wydawnictwo"];
    $liczbastron = $_POST["liczbastron"]; // poprawiono nazwę pola
    $seria = $_POST["seria"];
    $tom = $_POST["tom"];
    $gatunek = $_POST["gatunek"];
    $cena = $_POST["cena"];

    $sql = "UPDATE ksiazki SET
                Okładka = '$okladka',
                Tytuł = '$tytul',
                Autor = '$autor',
                Wydawnictwo = '$wydawnictwo',
                Liczbastron = $liczbastron,
                Seria = '$seria',
                Tom = '$tom',
                Gatunek = '$gatunek',
                Cena = $cena
            WHERE ID = $id";

    if ($database->query($sql) === TRUE) {
        header("Location: show.php");
        exit();
    } else {
        echo "Błąd: " . $sql . "<br>" . $database->error;
    }
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "SELECT * FROM ksiazki WHERE ID = $id";
    $result = $database->query($sql);

    if (!$result) {
        die("Invalid query: " . $database->error);
    }

    $row = $result->fetch_assoc();

    // wyświetlenie wartości pól formularza na podstawie danych z bazy
    $id = $row["ID"];
    $okladka = $row["Okładka"];
    $tytul = $row["Tytuł"];
    $autor = $row["Autor"];
    $wydawnictwo = $row["Wydawnictwo"];
    $liczbastron = $row["Liczbastron"];
    $seria = $row["Seria"];
    $tom = $row["Tom"];
    $gatunek = $row["Gatunek"];
    $cena = $row["Cena"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edycja książki</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/crud.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="center">
        <h1>Edycja książki</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            
                <label for="okladka">Okładka:</label>
                <input type="text" id="okladka" name="okladka" value="<?php echo $okladka; ?>"><br>
           
            
                <label for="tytul">Tytuł:</label>
                <input type="text" id="tytul" name="tytul" value="<?php echo $tytul; ?>"><br>
            
                <label for="autor">Autor:</label>
                <input type="text" id="autor" name="autor" value="<?php echo $autor; ?>"><br>
            
                <label for="wydawnictwo">Wydawnictwo:</label>
                <input type="text" id="wydawnictwo" name="wydawnictwo" value="<?php echo $wydawnictwo; ?>"><br>
            
                <label for="liczbastron">Liczba stron:</label>
                <input type="text" id="liczbastron" name="liczbastron" value="<?php echo $liczbastron; ?>"><br>
            
                <label for="seria">Seria:</label>
                <input type="text" id="seria" name="seria" value="<?php echo $seria; ?>"><br>
            
                <label for="tom">Tom:</label>
                <input type="text" id="tom" name="tom" value="<?php echo $tom; ?>"><br>
            
                <label for="gatunek">Gatunek:</label>
                <input type="text" id="gatunek" name="gatunek" value="<?php echo $gatunek; ?>"><br>
            
                <label for="cena">Cena:</label>
                <input type="text" id="cena" name="cena" value="<?php echo $cena; ?>"><br>
            
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <a class='btn btn-primary btn-sm' href='edit.php?id=$row[ID]'>Zapisz</a>
        </form>
    </div>
</body>
</html>
