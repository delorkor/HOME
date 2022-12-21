<!-- Пусть у вас есть файлы 1.txt и 2.txt, в тексте которых записаны какие-то числа. Напишите скрипт, который выведет на экран сумму записанных в этих файлах чисел. -->

<?php


$text1= file_get_contents('1.txt');
$text2= file_get_contents('2.txt');
// echo $text1;

function sum($str_arr){
 $sum_str=0;
for($i=0; $i<strlen($str_arr); $i++){

    $sum_str+=$str_arr[$i];

    
}
return $sum_str;

}

$summ1=sum($text1);
$summ2=sum($text2);
echo $summ2+ $summ1;;