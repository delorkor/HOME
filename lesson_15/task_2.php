<?php
$testString= readline("введите числа через пробел:");
$pattern="/\d{4}\s[A-Z]{2}\-\d/";

if(preg_match($pattern, $testString)) {
    echo 'номер задан верно' . PHP_EOL;
 } else {
    echo 'Ошибка: не соответствует формату!' . PHP_EOL;
 }