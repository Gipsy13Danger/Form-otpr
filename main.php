<?php
$to = $_POST["Mail"];
$subject = "Новое сообщение от посетителя сайта";
$message = $_POST["Text"];



$bool = mail($to, $subject, $message);

if ($bool) {
    echo "OK";
}
else {
    echo "ERROR";
}?>