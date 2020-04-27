<?php
$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['phone']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);
if ($name == '' || $phone == '' || $email == '' || $message == '') {
	echo "Заполните все поля";
	exit;
} 

$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
if(mail("zuborev@gmail.com",$message, $headers)) 
	echo "Сообщение отправлено";
else
	echo "Сообщение не отправлено";
?>