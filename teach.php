
<!DOCTYPE html>
<html>
<head>
             <title>Викладачі</title>
             <link rel="stylesheet" href="admin.css">
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
     <div class='wrapper'>
     <main class='main' id='main'>
          <?echo $echo;?>
    </main>
      </div>
        <div class="" style="color:; margin-bottom: 20px; margin-top: 25px; text-align: center;line-height: 1.5; font-family: 'Merriweather' arial;"><h1>Добавити викладача </h1></div>
  <div style="width: 100%; height:100%;  display: flex; justify-content: center;  ">	
<form action="add-teach.php" method="POST" enctype="multipart/form-data" style="width: 55%; margin-top: 0px; padding-bottom: 40px; border-bottom: solid; border-bottom-color: darkblue; border-top: solid; border-top-color: darkblue; padding-top: 40px ">
      <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">ПІБ викладача</span>
  </div>
  <input name="teacher" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Опис (детал.)</span>
  </div>
  <textarea name="text_teach" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></textarea>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Фото</span>
  </div>
  <input name="img" type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Опис (головна)</span>
  </div>
  <textarea name="text2" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></textarea>
</div>


  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </form>

</body>
</html>