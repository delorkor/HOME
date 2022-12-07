<?php
$testString= readline("введите числа через пробел:");
$pattern="/\+\d{3}\s\(|29|25|33|\)\s\d{3}\s\d{2}\s\d{2}/";

if(preg_match($pattern, $testString)) {
    echo 'номер задан верно' . PHP_EOL;
 } else {
    echo 'Ошибка: не соответствует формату!' . PHP_EOL;
 }