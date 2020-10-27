<?php
$db = new PDO('mysql:host=localhost;dbname=man;charset=utf8', 'root', '');
session_start();

	if (isset($_FILES["image"]) && $_FILES["image"]["tmp_name"] != "") {
		move_uploaded_file($_FILES["image"]["tmp_name"], "./photo/" . $_FILES["image"]["name"]);
	$filename = "./photo/" . $_FILES["image"]["name"];
	} else{
	$filename = "nophoto.jpg";
}
if (isset($_FILES["photo2"]) && $_FILES["photo2"]["tmp_name"] != "") {
		move_uploaded_file($_FILES["photo2"]["tmp_name"], "./photo/" . $_FILES["photo2"]["name"]);
	$fileName = "./photo/" . $_FILES["photo2"]["name"];
	} else{
	$fileName = "nophoto.jpg";
}



	$sql = "INSERT INTO project (name_project, student, teacher, topic, photo2, year, text_proj, image) 
		VALUES (:name_project, :student, :teacher, :topic, :photo2, :year, :text_proj, :image)";

	$stmt = $db->prepare($sql);

	$stmt->bindValue(":name_project", $_POST["name_project"]);
	$stmt->bindValue(":student", $_POST["student"]);
	$stmt->bindValue(":teacher", $_POST["teacher"]);
	$stmt->bindValue(":topic", $_POST["topic"]);
	$stmt->bindValue(":photo2", $filename);
	$stmt->bindValue(":year", $_POST["year"]);
	$stmt->bindValue(":text_proj", $_POST["text_proj"]);
	$stmt->bindValue(":image", $fileName);



	


	$stmt->execute();
	header("Location: students.php");
 ?>