<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$quest = $_POST['quest'];


$apiToken = "5388289094:AAFJFkNbOvR7ZfP5x6_8kh48H9fqqjp3jXQ";
$data = [
   'chat_id' => '-1001513821178',
   'text' => "Имя: " . $name . "\nНомер телефона: " . $phone . "\nВопрос:" .  $quest];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
?>