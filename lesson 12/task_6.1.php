<?php

$n = readline("Введите строку: ");
$sun = "";
$k = strrev($n);
function ddd($a , $b) {
   
  for ($i=0; $i <= strlen($n); $i++){
 if ($n[$i] === $k[$i] ){
   $sun .= $k[$i];
 }
 else{
   
  break;
 }

}
 return $sun ;
}

$ww=ddd($n, $k);
echo var_dump($ww);

// if($n==$sun)
// {
// echo "строка " . $n . " является палиндромом " ;

// }
// else{
//    echo "строка " . $n . " НЕ является палиндромом ";  
// }

