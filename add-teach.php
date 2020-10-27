<?php
$db = new PDO('mysql:host=localhost;dbname=man;charset=utf8', 'root', '');
session_start();
 
	if (isset($_FILES["img"]) && $_FILES["img"]["tmp_name"] != "") {
		move_uploaded_file($_FILES["img"]["tmp_name"], "./Викладачі/" . $_FILES["img"]["name"]);
	$filename = "./Викладачі/" . $_FILES["img"]["name"];

	} else {
		$filename = "nophoto.jpg";
	}


	$sql = "INSERT INTO teachers (teacher, text_teach, image, text2) 
		VALUES (:teacher, :text_teach, :image, :text2)";

	$stmt = $db->prepare($sql);

	$stmt->bindValue(":teacher", $_POST["teacher"]);
	$stmt->bindValue(":text_teach", $_POST["text_teach"]);
	$stmt->bindValue(":image", $filename);
	$stmt->bindValue(":text2", $_POST["text2"]);
	


	$stmt->execute();
	header("Location: add-teacher.php");

 ?>