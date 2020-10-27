<?php
	$page_title ='Педагогічний колектив';
	include 'header.php';
?>  
<section class="teacher" id="news">
		<div class="ymovu"><p>Наші викладачі</p>
	</div>	
	<div class="his">
		<div class="teachcont">
			<div class="section">
				 <?php $posts = get_post();?>
  			<?php foreach ($posts as $post):?>
			<div class="teach">
				<img class="minimized" src="<?=$post['image']?>" alt="">
				<a href="post2.php?post_id=<?=$post['id']?>"><h1><?=$post['teacher'] ?></h1></a>
				<div style="height: auto;">
					<p>	<?=$post['text2']?></p>
				</div>
				<div style="margin-top: 25px;" class="next1"><a href="post2.php?post_id=<?=$post['id']?>" class="button banner-button">Детальніше</a>
  					</div>
			</div>
				
				<?php endforeach; ?>  
			</div>
		</div>
	</div>
</section>

<?php include 'footer.php'?>