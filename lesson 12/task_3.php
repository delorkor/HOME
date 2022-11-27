<?php

$n = (int)readline("Введите чисдл: ");

$sum=0;
for ($i=0; $i < $n; $i++){
 
  $k = $i**2;

  $sum = $sum + $k;
 

}

echo "число " .  $sum   . PHP_EOL  ;
