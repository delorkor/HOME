<?php


$arr =[1 ,-1 ,11 ,15 ,5 ,6];
$arr1 =[1 ,3 ,4 ,5 ,5 ,6];
$arr_result= array_merge($arr ,$arr1);
rsort($arr_result);
foreach ($arr_result as $val) {
    echo $val . ' , ';
}