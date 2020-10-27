<?php
  $page_title = 'Новини';
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
    <title>Гусятинська філія МАН | Офіційний сайт - <?php echo htmlspecialchars($page_title)?></title>
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main1.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>    
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
   
    <style>
  td, th {
    padding:10px;
  }
  th{
    background: #606060;
    color: white;
  }
  td{
    background: #eee;
  }
</style>
    <div>
  <div class="title" style="color:; margin-bottom: 20px; margin-top: 25px; text-align: center;line-height: 1.5; font-family: 'Merriweather' arial;"><h1> Новини </h1></div>
  <table style="width: 100%;">
    <tr>
      <th>ID</th>
      <th>Title</th>
       
       <th><a href="admin.php" style="float: right; " type="button" style="color: white" class="btn btn-primary">Добавити</a></th>
        <th><a href="main_admin.php" style="float: right; " type="button" style="color: white" class="btn btn-primary">Назад</a></th>
    </tr>
    <?php
    $news = mysqli_query($conn, "Select id, title FROM news");
    $news = mysqli_fetch_all($news);
    foreach ($news as $new) {
      ?>
       <tr>
         <td><?=$new[0]?></td>
         <td><?=$new[1]?></td>
         <td><a href="update-news.php?id=<?=$new[0]?>">Редагувати</a></td>
         <td><a style="color: red" href="delete-news.php?id=<?=$new[0]?>">Видалити</a></td>
      </tr>
    <?php
  }
    ?>
  </table>
</div>