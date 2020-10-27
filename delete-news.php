<?php
include 'database.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM news  WHERE news.id = $id");
header("Location: add-news.php");
?>