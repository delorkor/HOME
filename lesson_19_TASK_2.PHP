<!-- Дан массив с числами. Найдите сумму этих чисел и результат запишите в файл sum.txt. -->
<?php

$arr= [1,2,3];

function sum($arr_sum){
    $summ=0;
for($i=0; $i<count($arr_sum); $i++){
    $summ+=$arr_sum[$i];
    
}
return $summ;
}
file_put_contents('3.txt',sum($arr));
