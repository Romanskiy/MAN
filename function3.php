<?php
function get_possts () {
	global $conn;
	$sql = "SELECT * FROM project WHERE year = '2017'";
	$result = mysqli_query($conn, $sql);

	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $posts;
}

 function get_postssts_by_id ($post_id){
 	global $conn;
 	$sql = "SELECT * FROM project WHERE year = '2017' and id = ".$post_id ;
 	$result = mysqli_query ($conn, $sql);
 	$post=mysqli_fetch_assoc($result);
 	return $post;
 }
?>