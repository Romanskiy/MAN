<?php
  $page_title ='Історія';
  require_once 'header.php';
  require_once 'function_history.php';
?>

 <div style="width: 100%; background-color: #eee;">
		<div class="ymovu"><p>Історія</p>
		</div>
	</div>
  <section class="timeline">

    <div class="container1">
      <?php $posts = get_history();?>
    <?php foreach ($posts as $post):?>
      <div class="timeline-item">
        <div class="timeline-img">
        </div>       
        <div class=" <?=$post['class'] ?>">
          <div style="  background-size: contain;   background: linear-gradient(transparent, rgba(0, 0, 0, 0.4)), url('<?=$post['img'] ?>') center center no-repeat;" class="timeline-img-header">
          
          </div>
       		<div class="date2"><?=$post['date'] ?></div>
          <p><?=$post['text'] ?></p>
         
        </div>
      </div>  
      <?php endforeach; ?>        
    </div>
  </section>

  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js'></script>

    <script src="js/main.js"></script>
    <?php 
    include 'footer.php';
    ?>