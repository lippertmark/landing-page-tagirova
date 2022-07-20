<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$quest = $_POST['quest'];


$apiToken = "";
$data = [
   'chat_id' => '-1001513821178',
   'text' => "Имя: " . $name . "\nНомер телефона: `" . $phone . "`\nВопрос:" .  $quest];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
header(“Location: http://yurist-tagirova.ru”);
exit( );
?>