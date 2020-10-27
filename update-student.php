<?php

  $page_title = 'Зміна інформації';
include 'database.php';

?>
<!DOCTYPE html>
<html lang="uk">
<head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155175791-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-155175791-1');
    </script>
    <meta charset="UTF-8">
    <meta name="description" content="Гусятинська філія МАН офіційний сайт">
    <meta name="keywords" lang="uk" content="ман гусятинський коледж, Гусятинська філія МАН, ман Гусятин, МАН, Гусятин ман, Гусятинський коледж, філія, мала академія наук, секція робототехніки, секція інформаційних технології, секція етнології, секція української мови, конкурс-захист, історія, новини, переможець, призер.">
    <meta name="robots" content="index, follow">
    <meta property="og:url" content="http://manguscoll.ddns.net">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Гусятинська філія МАН | Офіційний сайт - <?php echo htmlspecialchars($page_title)?>">
    <meta property="og:description" content="Сайт Гусятинської філії Тернопільського відділення Малої академії наук України">
    <meta property="og:image" content="http://manguscoll.ddns.net/photo/Main_logo.png">
    <meta property="og:site_name" content="Гусятинська філія МАН Тернопільського обласного відділення МАН України">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main1.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>    
 <title>Гусятинська філія МАН |  <?php echo htmlspecialchars($page_title)?></title>   
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<body style="background-color: #eee;">
  <a href="" id="Home"></a>
  <a href="#Home" id="return-to-top"><i class="icon-chevron-up"></i></a>
<header>
    <div class="head" >
    <div class="logo">
       <a href="index.php"><img class="logogo" src="photo/Main_logo.png" alt="МАН_Гусятин"></a>
    </div>
    <div class="name" id="demo-1" style="text-transform: uppercase;"><h1>Гусятинська філія <br>Тернопільського обласного відділення МАН України</h1></div>
    </div> 
      <div class="" style="color:; margin-bottom: 0px; margin-top: 25px; text-align: center;line-height: 1.5; font-family: 'Merriweather' arial;"><h1> Зміна інформації</h1></div>
<div style="display: flex; justify-content: center; padding: 0px; flex-wrap: wrap; ">

<?php
$stud_id = $_GET['id'];
$stud1 = mysqli_query($conn, "SELECT * From project Where id = '$stud_id'");
$stud1 = mysqli_fetch_assoc($stud1); 
?>


<form style="width: 600px; margin-top:20px;" action="update-stud.php" method="POST" enctype="multipart/form-data" >
  <input type="hidden" name="id" value="<?=$stud1['id']?>">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Група</span>
  </div>
  <input name="name_project"  type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$stud1['name_project']?>">
</div>

      <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">ПІБ студента</span>
  </div>
  <input name="student" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$stud1['student']?>">
</div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">ПІБ викладача</span>
  </div>
  <input name="teacher" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$stud1['teacher']?>">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Тема</span>
  </div>
  <textarea name="topic" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$stud1['topic']?>">
    <?php echo $stud1['topic'] ; ?>
  </textarea>
</div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Рік</span>
  </div>
  <input name="year" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$stud1['year']?>">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Опис</span>
  </div>
  <textarea name="text_proj" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?=$stud1['text_proj']?>"><?php echo $stud1['text_proj'] ; ?></textarea>
</div>

 <button type="submit" class="btn btn-primary">Змінити</button>
 <a href="students.php" type="button" style="color: white" class="btn btn-primary">Назад</a>
</form>

</div>