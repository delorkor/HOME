<?php

$n = readline("Введите строку: ");

$k = strrev($n);

if (strcasecmp($n, $k) == 0){
    echo "строка " . $n . " является палиндромом " ;

}
else{
    echo "строка " . $n . " НЕ является палиндромом ";  
}

