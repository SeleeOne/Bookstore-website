<?php
$conn = new mysqli($serwer, $username, $password, $database);
$query = "SELECT * FROM books";
$result = $conn->query($query);
$conn->close();
$num = $result->num_rows;
 ?>
