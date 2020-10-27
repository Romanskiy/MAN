<?php
$db = new PDO('mysql:host=localhost;dbname=man;charset=utf8', 'root', '');
session_start();
 if(!isset($_SESSION["login"]) || $_SESSION["login"] != "on") {
      header("Location: index.php");
 }

	if (isset($_FILES["img"]) && $_FILES["img"]["tmp_name"] != "") {
		move_uploaded_file($_FILES["img"]["tmp_name"], "./новини/image/" . $_FILES["img"]["name"]);
	$filename = "./новини/image/" . $_FILES["img"]["name"];

	} else {
		$filename = "nophoto.jpg";
	}


	$sql = "INSERT INTO news (title, text, img, date) 
		VALUES (:title, :text, :img, :date)";

	$stmt = $db->prepare($sql);

	$stmt->bindValue(":title", $_POST["title"]);
	$stmt->bindValue(":text", $_POST["text"]);
	$stmt->bindValue(":img", $filename);
	$stmt->bindValue(":date", $_POST["date"]);
	


	$stmt->execute();
	header("Location: add-news.php");

 ?>