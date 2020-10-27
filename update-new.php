<?php
include 'database.php';
$id = $_POST['id'];
$title = $_POST['title'];
$text = $_POST['text'];
$date = $_POST['date'];
mysqli_query($conn, "UPDATE news SET title = '$title', text='$text', date='$date' WHERE news.id = $id");
header("Location: add-news.php");
?>