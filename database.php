<?php 
  
    $conn = mysqli_connect('localhost', 'root', '', 'man');
    if (mysqli_connect_errno()) {
        echo 'Помилка при підключенні до БД ('.mysqli_connect_errno().'):'.mysqli_connect_error();
        exit();
    }