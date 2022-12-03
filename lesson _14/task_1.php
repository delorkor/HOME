<?php

$b= readline("введите числа через пробел:");

$arr =explode(" " ,$b );

function summ( $arr1 ){

 return array_sum($arr1);

}
echo summ($arr);