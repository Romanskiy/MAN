<?php
include 'database.php';
$id = $_POST['id'];
$teacher = $_POST['teacher'];
$text_teach = $_POST['text_teach'];
$text2 = $_POST['text2'];
mysqli_query($conn, "UPDATE teachers SET teacher = '$teacher', text_teach='$text_teach', text2='$text2' WHERE teachers.id = $id");
header("Location: add-teacher.php");
?>