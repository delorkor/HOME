<?php

$b= readline("введите первый катет:");
$с= readline("введите второй катет:");

function summ($a , $s){

 return $gep=sqrt( $a**2+$s**2);

}
echo 'гипотенуза прямоугольного треугольника:' . summ($b ,$с);