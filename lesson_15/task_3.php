<?php
$testString= readline("введите числа через пробел:");
$pattern='/[0-9]/';
preg_match_all($pattern, $testString , $arr);
echo var_dump($arr) . PHP_EOL;

$summ=0;
foreach ($arr as $key => $value) {
    for($i=0; $i<count($value); $i++ )
    $summ+=(int)$value[$i];
    
}
echo $summ;