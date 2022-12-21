
<!-- Пусть в корне вашего сайта лежит файл count.txt. Изначально в нем записано число 0. Сделайте так, чтобы при обновлении страницы наш скрипт каждый раз увеличивал это число на 1. То есть у нас получится счетчик обновления страницы в виде файла. -->

<?php

session_start();
$str_txt = file_get_contents('5.txt');
$_SESSION['num']=$str_txt;

if(isset($_SESSION['num'])){
    $_SESSION['num']++;
}
file_put_contents('5.txt',$_SESSION['num']);
echo file_get_contents('5.txt');