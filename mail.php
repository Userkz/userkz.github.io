<?php
    $u = $_POST['name'];
    $n = $_POST['number'];
    $m = $_POST['text'];

    $mail_to = "my@mail.ru"; 
    $subject = "Письмо с обратной связи";

    $message = "Имя: $u\n Номер: $n\n Сообщение: $m";

    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: Тестовое письмо <no-reply@test.com>\r\n";
    mail($mail_to, $subject, $message, $headers);
    