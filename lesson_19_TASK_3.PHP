<!-- Пусть у вас есть файл, в котором записано некоторое число. Откройте этот файл, возведите число в квадрат и запишите обратно в файл. -->
<?php

$str_num=file_get_contents('4.txt');
echo $str_num;
$str_num_pow=pow($str_num ,2);
file_put_contents('4.txt',$str_num_pow);
echo file_get_contents('4.txt');