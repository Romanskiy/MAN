<?php
	global $post;	
	$page_title =$post["title"];
	require_once 'header.php';
	$post_id = $_GET['post_id'];
	if (!is_numeric($post_id)) exit();
	$post = get_post_by_id($post_id);
	

?>

<section id="news">
	<div class="his">
		<div class="container2" id="math">
			<div class="facebook_share">
			<!-- <a style="display: flex;justify-content: flex-end;align-items: flex-end;"  onclick="Share.facebook('URL','<?=$post['title']?>','<?=$post['img']?>','')">  <img style="margin-top: 20px;" src="новини/facebook (1).png" alt=""></a> -->
 			<button type="submite" class="share" onclick="Share.facebook('URL','<?=$post['title']?>','<?=$post['img']?>','')">
				<i class="icon-facebook-sign"></i>
				Share
			</button>
			</div>
			<div class="title"><h1> <?=$post['title']?></h1> </div>
			<div class="date"><i class="icon-calendar-empty"></i><h3> <?=$post['date']?></h3></div>
			<div class="text"><p><?=$post['text']?></p></div>
			<img src="<?=$post['img']?>" alt="" class="photopost minimized"> 
			
	<script src="js/share.js"> </script>
		</div>
	</div>
</section>  

<?php
 	require_once 'footer.php';
 ?>