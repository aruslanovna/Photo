
	<?php
$send = $_POST['button'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$text = $_POST['text'];
if ($send != "button"){
 
$to = "a.khrystova@gmail.com";                 // вставте свой емаил
$subject = "Письмо с сайта YourSite.ru";        // вставте Темy сообщения
$mailheaders .="Reply-To: $mail";
 
$msg .= "Имя отправителя:$name";
$msg .= "E-mail отправителя:$mail";
$msg .= "Сообщение: $text";
 
 
?> 