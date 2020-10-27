
<!DOCTYPE html>
<html>
<head>
             <title></title>
             <link rel="stylesheet" href="admin.css">
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body style="background-color:;">
     <div class='wrapper'>
     <main class='main' id='main'>
          <?echo $echo;?>
    </main>
      </div>
  <div style="width: 100%; height:100%;  display: flex; justify-content: center;  ">	
<form action="add-new.php" method="POST" enctype="multipart/form-data" style="background-color:white;  width: 55%; margin-top: 60px; padding-bottom: 25px; border-bottom: 10px solid; border-bottom-color:#00CED1  ; border-top:10px solid ; border-top-color:#00CED1  ; padding-top: 20px; border-radius: 0% ">
    <p align="center" style="font-size: 35px; font-weight: weight"> Запис успішно доданий!</p>
    <div style="margin-top: 40px;">
    <a class="btn btn-secondary success" href="admin.php">Добавити ще один запис</a>
    <a class="btn btn-secondary" style="margin-left: 20px;" href="">Повернутись на головну</a>
    </div>
  </form>

</body>
</html>