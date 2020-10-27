<?php
function get_postproj ($limit, $offset) {
  global $conn;
  $sql = "SELECT * FROM project ORDER BY id DESC LIMIT $limit OFFSET $offset";
  $result = mysqli_query($conn, $sql);

  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $posts;
}

 function get_postproj_by_id ($post_id){
  global $conn;
  $sql = "SELECT * FROM project WHERE id = ".$post_id;
  $result = mysqli_query ($conn, $sql);
  $post=mysqli_fetch_assoc($result);
  return $post;
 }
?>