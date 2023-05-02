<?php
if (isset($_POST['id'])) {
    $database = new mysqli("localhost", "root", "", "bookstore");
    if ($database->connect_errno) {
        echo "Failed to connect to MySQL: " . $database->connect_error;
        exit();
    }
    $id = $_POST['id'];
    $sql = "DELETE FROM ksiazki WHERE ID=$id";
    if ($database->query($sql) === TRUE) {
        echo "success";
        exit();
    } else {
        echo "Error deleting record: " . $database->error;
    }
}
?>
