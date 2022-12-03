<?php

$str= readline("введите строку:");
$с= readline("введите символт:");

function summ($a , $s){

    $lan= substr_count($a ,$s);
    return $lan;
}
echo 'количество вхождений символа в строку ' . $с . ' = ' . summ($str ,$с);