<?php
$b= readline("введите числа через пробел:");
$ar =explode(" " ,$b );
echo 'массив :' . $b . PHP_EOL;

function sorti($arr){
    for($i = 0 ; $i<count($arr)-1;$i++){
        for($j = 0 ; $j<count($arr)-$i-1;$j++){
            $elem1=$arr[$j];
            $elem2=$arr[$j+1];
            if($elem1>$elem2){
                $arr[$j]=$elem2;
                $arr[$j+1]=$elem1;
                
            }
        }
    
    }
    return $arr;
}

echo implode(" ", sorti($ar) ) ;