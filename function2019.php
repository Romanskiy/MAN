<?php
function get_post2019 () {
	global $conn;
	$sql = "SELECT * FROM project WHERE year = '2019'";
	$result = mysqli_query($conn, $sql);

	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $posts;
}

 function get_post2019_by_id ($post_id){
 	global $conn;
 	$sql = "SELECT * FROM project WHERE year = '2019' and id = ".$post_id ;
 	$result = mysqli_query ($conn, $sql);
 	$post=mysqli_fetch_assoc($result);
 	return $post;
 }
?>