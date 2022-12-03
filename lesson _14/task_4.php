<?php

$text = readline("Введите строку: ");



function polindrom($n){
    $rev = strrev($n);
if (strcasecmp($n, $rev) == 0){
    echo "строка " . $n . " является палиндромом " ;

}
else{
    echo "строка " . $n . " НЕ является палиндромом ";  

}
}
echo polindrom($text);