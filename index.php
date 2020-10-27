<?php
  $page_title = 'Головна';
  require 'header.php';
?>
<section id="slider">
  <div class="swiper-container main-slider loading">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(слайдер/22.webp)">
        <img src="слайдер/22.webp" alt="slider" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title"></p>
        <span class="caption"></span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(слайдер/18.webp)">
        <img src="слайдер/18.webp" alt="slider" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title"></p>
        <span class="caption"></span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(слайдер/14.webp)">
        <img src="слайдер/14.webp" alt="slider" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title"></p>
        <span class="caption"></span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(слайдер/9.webp)">
        <img src="слайдер/9.webp" alt="slider" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title"></p>
        <span class="caption"></span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(слайдер/16.webp)">
        <img src="слайдер/16.webp" alt="slider" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title"></p>
        <span class="caption"></span>
      </div>
    </div>
  </div>
  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev swiper-button-white"></div>
  <div class="swiper-button-next swiper-button-white"></div>
</div>

<!-- Thumbnail navigation -->
<div class="swiper-container nav-slider loading">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(слайдер/22.webp)">
        <img src="слайдер/22.webp" alt="slider_side" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title"></p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(слайдер/18.webp)">
        <img src="слайдер/18.webp" alt="slider_side" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title"></p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(слайдер/14.webp)">
        <img src="слайдер/14.webp" alt="slider_side" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title"></p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(слайдер/9.webp)">
        <img src="слайдер/9.webp" alt="slider_side" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title"></p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(слайдер/16.webp)">
        <img src="слайдер/16.webp" alt="slider_side" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title"></p>
      </div>
    </div>
  </div>
</div>    
</section>
<section  id="news">
	<div class="main"><p>Останні новини</p>
	</div>
  <?php 
    $page = isset($_GET['page']) ? $_GET['page']:1;
    $limit = 3;
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
    <div class="title"><h2> <?=$post['title'] ?></h2></div>
    <div class="date">
      <i class="icon-calendar-empty"></i>
      <h3> <?=$post['date'] ?></h3>
    </div>
    <div class="text">
    <p><?=mb_substr($post['text'], 0, 251, 'UTF-8').'...'?>
    </p>
    </div>
    <div class="next"><a href="post.php?post_id=<?=$post['id']?>" class="button banner-button">Детальніше</a>
            </div>
        </div>
    </div>
 </div>
<?php endforeach; ?>  
  <div class="test">
      <a href="news.php" class="button banner-button more">Переглянути більше...</a>
  </div>
</section>  
<?php
 require 'footer.php';
 ?>