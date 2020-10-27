<?php
  $page_title = 'Юні науковці';
   require 'header.php';
   require_once 'function2020.php';
   require_once 'function2019.php';
   require_once 'function2018.php';
   require_once 'function3.php';

?>


  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat'>
<section class="teacher" id="projects" style="background-color: #eee">
	<div class="ymovu"><p>Юні науковці</p>
	</div>
	<script>

function Selected(a) {

        var label = a.value;

        if (label==1) {

            document.getElementById("Block1").style.display='block';

            document.getElementById("Block2").style.display='none';

            document.getElementById("Block3").style.display='none';

            document.getElementById("Block4").style.display='none';

            document.getElementById("Block5").style.display='none';

        } else if (label==2) {

            document.getElementById("Block1").style.display='none';

            document.getElementById("Block2").style.display='block';

            document.getElementById("Block3").style.display='none';

            document.getElementById("Block4").style.display='none';

            document.getElementById("Block5").style.display='none';

        } else if (label==3) {

            document.getElementById("Block1").style.display='none';

            document.getElementById("Block2").style.display='none';

            document.getElementById("Block3").style.display='block';

            document.getElementById("Block4").style.display='none';
       document.getElementById("Block5").style.display='none';

        } else if (label==4) {

            document.getElementById("Block1").style.display='none';

            document.getElementById("Block2").style.display='none';

            document.getElementById("Block3").style.display='none';

            document.getElementById("Block4").style.display='block';

            document.getElementById("Block5").style.display='none';

        } else if (label==5) {

            document.getElementById("Block1").style.display='none';

            document.getElementById("Block2").style.display='none';

            document.getElementById("Block3").style.display='none';

            document.getElementById("Block4").style.display='block';

            document.getElementById("Block5").style.display='none';

        } else {

            document.getElementById("Block1").style.display='none';

            document.getElementById("Block2").style.display='none';

            document.getElementById("Block3").style.display='none';

            document.getElementById("Block4").style.display='none';

            document.getElementById("Block5").style.display='none';

        }

          

}
	</script>


<select id="actSelect" class="Validate_Required accordion-menu dropdownlink " name="actSelect" aria-required="true" onChange="Selected(this)">

       <option value="1"  selected="selected"> <img src="img/year.png" alt="">2020</option>
       <option value="2">2019</option>

       <option value="3">2018</option>

       <option value="4">2017</option>

</select>

      

     



     <div  id='Block1' style=""  class="wrap">
    <div style="width: 85%; display: flex;justify-content: space-around;align-items: center;flex-wrap: wrap; margin: 0 auto;">
    	<?php $posts = get_post2020();?>
  <?php foreach ($posts as $post):?>
<div class="card">
    <div class="front"><span><img class="cardim" src="<?=$post['image'] ?>" alt=""> </span>
    <div style="height: 55px;">
    	<h1 class="orange">  <?=$post['student'] ?>	
    	</h1>
    </div>
    	<p><?=$post['name_project'] ?></p>
      </div>
    <div class="back orangeback"><span><p class="backp"><?=$post['topic'] ?></p></span>
    <div style="margin-top: 25px;" class="next2">
      <a href="post2020.php?post_id=<?=$post['id']?>" class="button banner-button">Детальніше</a>
    </div>
</div>
  </div>  
<?php endforeach; ?>
  </div>  
</div>

     

  <div id='Block2' style="display: none;" class="wrap">
    <div style="width: 85%; display: flex;justify-content: space-around;align-items: center;flex-wrap: wrap; margin: 0 auto;">
<?php $posts = get_post2019();?>
<?php foreach ($posts as $post):?>
  <div class="card">
    <div class="front"><span><img class="cardim" src="<?=$post['image'] ?>" alt=""> </span>
       <div style="height: 55px;">
      <h1 class="orange">  <?=$post['student'] ?> 
      </h1>
    </div>
      <p> <?=$post['name_project'] ?></p>
      </div>
    <div class="back orangeback"><span><p class="backp"><?=$post['topic'] ?></p></span>
    <div style="margin-top: 25px;" class="next2">
      <a href="post2019.php?post_id=<?=$post['id']?>" class="button banner-button">Детальніше</a>
    </div>
</div>
  </div>
  <?php endforeach; ?>
  </div>  
</div>

     

     <div id='Block3' style='display: none;' class="wrap">
    <div style="width: 85%; display: flex;justify-content: space-around;align-items: center;flex-wrap: wrap; margin:0 auto;">
<?php $posts = get_post2018();?>
<?php foreach ($posts as $post):?>
  <div class="card">
    <div class="front"><span><img class="cardimg" src="<?=$post['image'] ?>" alt=""> </span>
      <div style="height: 55px;">
        <h1 class="orange">  <?=$post['student'] ?>
        </h1>
      </div>
        <p> <?=$post['name_project'] ?></p>
      </div>
    <div class="back orangeback"><span><p class="backp"><?=$post['topic'] ?></p></span>
    <div style="margin-top: 25px;" class="next2">
      <a href="post2018.php?post_id=<?=$post['id']?>" class="button banner-button">Детальніше</a>
    </div>
</div>
  </div>
  <?php endforeach; ?>
  </div>  
</div>

     


<div id='Block4' style='display: none;' class="wrap">
    <div style="width: 85%; display: flex;justify-content: space-around;align-items: center;flex-wrap: wrap; margin:0 auto;">
<?php $posts = get_possts();?>
<?php foreach ($posts as $post):?>
  <div class="card">
    <div class="front"><span><img class="cardimg" src="<?=$post['image'] ?>" alt=""> </span>
      <div style="height: 55px;">
      <h1 class="orange">  <?=$post['student'] ?></h1></div>
      <p> <?=$post['name_project'] ?></p>
    	<div></div></div>
    <div class="back orangeback"><span><p class="backp"><?=$post['topic'] ?></p></span>
    <div style="margin-top: 25px;" class="next2">
    	<a href="post3.php?post_id=<?=$post['id']?>" class="button banner-button">Детальніше</a>
    </div>
</div>
  </div>
  <?php endforeach; ?>
  </div>  
</div>

  
</section>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

    <script src="js/list.js"></script>
<?php
	include 'footer.php'
?>
