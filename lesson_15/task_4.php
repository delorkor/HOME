<?php
$s= '/[1-2]\d{3}\/\d{2}\/\d{2}\s\d{2}:\d{2}/';
$b='1997/18/12 17:22 0997/18/12 17:22 197/18/12 17:22 2022/12/08 19:00 ';
$c=[];
preg_match_all($s, $b, $c);
print_r($c);


foreach ($c as $value) {
    foreach ($value as $val) {
    echo $val .PHP_EOL;
    }
}