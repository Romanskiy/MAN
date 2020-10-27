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
    <link rel="stylesheet" type="text/css" href="main2.css">
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
	

<body>
	 <h1 style="font-size: 35px; text-align: center; padding-top: 25px; font-family: 'Merriweather', arial; color: #2F4F4F ;"> Адмін частина Гyсятинської філії МАН! <a href="index.php" style=""><img style=" float: right; padding-right: 20px; " src="photo/login.png" alt=""></a></h1>

	<div style="margin-top: 70px; margin-left: 15%; margin-right: 15%;">
	<div class="bulletsBlock" style="display: flex; align-items: center; flex-wrap: wrap;">
    <div class="bullet-item">
        <span class=""><img src="photo/news.png" alt=""></span>
        <p class="titleBullet">Новини</p>
        <p class="hideText"><a class="hideText" style="text-decoration: none;" href="add-news.php"> Редагувати новини</a></p></p>
    </div>
 
    <div class="bullet-item">
        <span class=""><img src="photo/teacher.png" alt=""></span>
        <p class="titleBullet">Викладачі</p>
        <p class="hideText"><a class="hideText" style="text-decoration: none;" href="add-teacher.php"> Редагувати викладачів</a></p></p>
    </div>
 
    <div class="bullet-item">
        <span class=""><img src="photo/student.png" alt=""></span>
        <p class="titleBullet">Науковці</p>
        <p class="hideText"><a class="hideText" style="text-decoration: none;" href="students.php"> Редагувати науковців</a></p>
    </div>
</div>
</div>
</body>
</html>

