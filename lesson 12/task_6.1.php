<?php

$n = readline("Введите строку: ");
$sun = "";
$k = strrev($n);
function ddd($a , $b) {
   
  for ($i=0; $i <= strlen($a); $i++){
 if ($a[$i] === $b[$i] ){
  return 1;
 }
 else{
  return 0;
  
 }

}
 
}

$ww=ddd($n, $k);
echo var_dump($ww);

if($ww==1)
{
echo "строка " . $n . " является палиндромом " ;

}
else{
   echo "строка " . $n . " НЕ является палиндромом ";  
}

