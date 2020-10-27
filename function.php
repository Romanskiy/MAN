<?php
function get_posts ($limit, $offset) {
	global $conn;
	$sql = "SELECT * FROM news ORDER BY id DESC LIMIT $limit OFFSET $offset";
	$result = mysqli_query($conn, $sql);

	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $posts;
}

 function get_post_by_id ($post_id){
 	global $conn;
 	$sql = "SELECT * FROM news WHERE id = ".$post_id;
 	$result = mysqli_query ($conn, $sql);
 	$post=mysqli_fetch_assoc($result);
 	return $post;
 }
?>
<?php
function get_post () {
	global $conn;
	$sql = "SELECT * FROM teachers";
	$result = mysqli_query($conn, $sql);

	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $posts;
}

 function get_posts_by_id ($post_id){
 	global $conn;
 	$sql = "SELECT * FROM teachers WHERE id = ".$post_id;
 	$result = mysqli_query ($conn, $sql);
 	$post=mysqli_fetch_assoc($result);
 	return $post;
 }
?>