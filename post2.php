<?php

$post_id = $_GET['post_id'];
if (!is_numeric($post_id)) exit();

include_once 'header.php';



$post = get_posts_by_id($post_id);
?>
<section id="news">
<div class="his">
   <div class="container2">
			<div class="section">
				<div class="postteach">
					<img class="imgteach minimized"src="<?=$post['image']?>" alt="">
				<p><?=$post['text_teach']?></p>
				
				</div>
			</div>
		</div>
</div>
</section>  
<?php
 include 'footer.php';
 ?>