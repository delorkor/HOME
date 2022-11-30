<?php

$n = readline("Введите текст: ");

$p = explode(" ", $n );

$max = $p[0];

for($i= 0 ; $i <= count($p) ; $i++){
 
    if (strlen($p[$i]) > strlen($max)) $max = $p[$i];
  
  
}
echo $max ;