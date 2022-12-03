<?php




$b =readline("введите текст:");

$arr = explode(' ' , $b);
// echo $c;

// echo var_dump($arr);



for($i =0 ; $i< count($arr); $i++ ){

    echo $arr[$i] . PHP_EOL;
}