<?php
function get_post2018 () {
	global $conn;
	$sql = "SELECT * FROM project WHERE year = '2018'";
	$result = mysqli_query($conn, $sql);

	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $posts;
}

 function get_post2018_by_id ($post_id){
 	global $conn;
 	$sql = "SELECT * FROM project WHERE year = '2018' and id = ".$post_id ;
 	$result = mysqli_query ($conn, $sql);
 	$post=mysqli_fetch_assoc($result);
 	return $post;
 }
?>