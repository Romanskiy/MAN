<?php
function get_history () {
	global $conn;
	$sql = "SELECT * FROM history";
	$result = mysqli_query($conn, $sql);

	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $posts;
}

 function get_history_by_id ($post_id){
 	global $conn;
 	$sql = "SELECT * FROM history WHERE id = ".$post_id ;
 	$result = mysqli_query ($conn, $sql);
 	$post=mysqli_fetch_assoc($result);
 	return $post;
 }
?>