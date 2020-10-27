<?php
  require_once 'database.php';
  require_once 'function.php';
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
    <link rel="stylesheet" type="text/css" href="main4.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>    
<body>
  <a href="" id="Home"></a>
  <a href="#Home" id="return-to-top"><i class="icon-chevron-up"></i></a>
<header>
		<div class="head" >
    <div class="logo">
       <a href="index.php"><img class="logogo" src="photo/Main_logo.png" alt="МАН_Гусятин"></a>
    </div>
    <div class="name" id="demo-1" style="text-transform: uppercase;"><h1>Гусятинська філія <br>Тернопільського обласного відділення МАН України</h1></div>
		</div>	
		<input type="checkbox" id="menu-mobile" />
<nav role="navigation"><!-- навигация -->
<label for="menu-mobile" class="toggle-button" onclick> <img style="margin-left: 15px; float: left;" src="img/menu.png" alt=""></label>
<ul id="menu">
        <li><a href="index.php">Головна</a></li>
        <li><a href="news.php">Новини</a></li>
              <li><a href="#">Про нас</a>
                   <ul class="sub-menu" id="first_sub">
                      <li><a href="timeline.php">Історія</a></li>
                      <li><a href="section.php">Структура</a></li>
                      <li><a href="teachers.php">Педагогічний колектив</a></li>
                      <li><a href="projects.php">Юні науковці</a></li>
                   </ul>
              </li>
        <li><a href="#">Конкурс-захист</a>
            <ul class="sub-menu" id="second_sub">
               <li><a href="ymovu.php">Умови проведення</a></li>
               <li><a href="table.php">Наукові відділення та секції</a></li>
               <li><a href="result.php">Визначення результатів конкурсу</a></li>
            </ul>
        </li>
        <li><a href="kontact.php">Контакти</a></li>
    </ul>
  </nav>
</header>
</style>
  <script type="text/javascript">
 $(document).ready(function(){
    $("#cont").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 2000);
    });
});
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script type="text/javascript">
  $(function() {
  $(window).scroll(function() {
  if($(this).scrollTop() != 0) {
  $('#topNubex').fadeIn();
  } else {
  $('#topNubex').fadeOut();
  }
  });
  $('#topNubex').click(function() {
  $('body,html').animate({scrollTop:0},2000);
  });
  });
  </script>
  <script>
    $(function(){
  $('.minimized').click(function(event) {
    var i_path = $(this).attr('src');
    $('body').append('<div id="overlay"></div><div id="magnify"><img src="'+i_path+'"><div id="close-popup"><i></i></div></div>');
    $('#magnify').css({
      left: ($(document).width() - $('#magnify').outerWidth())/2,
      // top: ($(document).height() - $('#magnify').outerHeight())/2 upd: 24.10.2016
            top: ($(window).height() - $('#magnify').outerHeight())/2
    });
    $('#overlay, #magnify').fadeIn('fast');
  });
  
  $('body').on('click', '#close-popup, #overlay', function(event) {
    event.preventDefault();
 
    $('#overlay, #magnify').fadeOut('fast', function() {
      $('#close-popup, #magnify, #overlay').remove();
    });
  });
});
  </script>
	
	