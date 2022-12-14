<?php 
if (!($_GET["delete"] == "default")) {
    $conn = new mysqli($serwer, $username, $password, $database);
    $query = 'DELETE FROM books WHERE title="'.$_GET["delete"].'";';
    $conn->query($query);
    $conn->close();
}

header("Location: ./index.php");
?>
