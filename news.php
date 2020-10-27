<?php
  $page_title = 'Новини';
  require_once 'header.php';
?>  
    
<section id="news">
  <div class="ymovu"><p>Новини</p>
  </div>
  <?php 
    $page = isset($_GET['page']) ? $_GET['page']:1;

    $limit = 5;
    $offset = $limit * ($page - 1);

    $posts = get_posts($limit, $offset);
  
  ?>
  <?php foreach ($posts as $post):?>
  <div id="container">
  <div class="new">  
  <div class="img">
    <img src="<?=$post['img']?>" alt="" class="photo">
  </div>
  <div class="content">
    <div class="title"><h2><?=$post['title'] ?></h2></div>
    <div class="date">
      <i class="icon-calendar-empty"></i>
      <h3><?=$post['date'] ?></h3>
    </div>
    <div class="text">
    <p><?=mb_substr($post['text'], 0, 290, 'UTF-8').'...'?>
    </p>
    </div>
    <div class="next"><a href="post.php?post_id=<?=$post['id']?>" class="button banner-button">Детальніше</a>
            </div>
        </div>
    </div>
 </div>
<?php endforeach; ?>  

<nav class="pagination_box">
    <ul class="pagination_list">
      <li><a href="news.php?page=1" class="active">1</a></li>
      <li><a href="news.php?page=2">2</a></li>
      <li><a href="news.php?page=3">3</a></li>
    </ul>
</nav>
</section>  

<?php
 require_once 'footer.php';
 ?>