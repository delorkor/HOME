<?php

$b= readline("введите длину:");
$с= readline("введите ширину:");

function summ($a , $s){

 return $a*$s ;

}
echo 'площадь прямоугольника:' . summ($b ,$с);