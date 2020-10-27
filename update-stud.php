<?php
include 'database.php';
$id = $_POST['id'];
$name_project = $_POST['name_project'];
$student = $_POST['student'];
$teacher = $_POST['teacher'];
$topic = $_POST['topic'];
$year = $_POST['year'];
$text_proj = $_POST['text_proj'];
mysqli_query($conn, "UPDATE project SET name_project='$name_project', student='$student', teacher='$teacher', topic='$topic', year='$year', text_proj='$text_proj'  WHERE project.id = $id");
header("Location: students.php");
?>