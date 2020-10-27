<?php
include 'database.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM teachers  WHERE teachers.id = $id");
header("Location: add-teacher.php");
?>