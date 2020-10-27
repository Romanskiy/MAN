<?php
include 'database.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM project  WHERE project.id = $id");
header("Location: students.php");
?>