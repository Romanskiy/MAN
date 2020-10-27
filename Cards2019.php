<?php
  include 'header.php';
    require_once 'database.php';
  require_once 'function2019.php';
?>  
<section class="teacher" id="news">
        <div class="ymovu"><p>Наші досягнення</p>
    </div>
<body>

	<div class="wrap">
    <div style="width: 85%; display: flex;justify-content: space-around;align-items: center;flex-wrap: wrap;">
<?php $posts = get_post2019();?>
<?php foreach ($posts as $post):?>
  <div class="card">
    <div class="front"><span><img class="cardimg" src="<?=$post['image'] ?>" alt=""> </span>
       <div style="height: 55px;">
      <h1 class="orange">  <?=$post['student'] ?> 
      </h1>
    </div>
      <p> <?=$post['name_project'] ?></p>
      <hr class="orangehr"></div>
    <div class="back orangeback"><span><p class="backp"><?=$post['topic'] ?></p></span>
    <div style="margin-top: 25px;" class="next2">
      <a href="post2019.php?post_id=<?=$post['id']?>" class="button banner-button">Детальніше</a>
    </div>
</div>
  </div>
  <?php endforeach; ?>
  </div>  
</div>
   <?php
    include 'footer.php';
    ?>