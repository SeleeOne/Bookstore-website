<?php 
if (isset($_GET['title']) and isset($_GET['author']) and isset($_GET['author']) and isset($_GET['price'])) {
    $conn = new mysqli($serwer, $username, $password, $database);
    $query = 'INSERT INTO books (title, author, pdate, price)';
    $query .= 'VALUES ("' .$_GET["title"]. '", "' .$_GET["author"]. '", ' .$_GET["year"]. ', ' .$_GET["price"]. ');';
    $conn->query($query);
    $conn->close();
}

header("Location: ./index.php");
?>
