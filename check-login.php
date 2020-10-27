<?php
session_start();

$secretPassword = 'admin123';
$_Login = 'admin';

if ( $_POST["login"] == $_Login && $_POST["password"] == $secretPassword ){
	
	header("Location: main_admin.php");
}
else {
	header("Location: login.php");
}