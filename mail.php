<?php

/* https://api.telegram.org/bot658350439:AAGq1YceoD_WZYOcOVIdh1zLGJN0WBsdz1o/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
$_GET['d'];
$text = $_POST['name'];
$phone = $_POST['number'];
$coment = $_POST['text'];
$ip = $_SERVER['REMOTE_ADDR'];


$hour = date("H:i:s");
$today = date("d.m.Y");
$token = "658350439:AAGq1YceoD_WZYOcOVIdh1zLGJN0WBsdz1o";
$chat_id = "-305830337";
$arr = array(
  'Имя:'=> $text,
  'Телефон:' => $phone,
  'Коментарий:' => $coment,
  'Сағат:' => $hour,
  'Берілген күн:' => $today
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  
} else {
  echo "Error";
}
?>
