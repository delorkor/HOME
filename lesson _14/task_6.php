<?php

$st= readline("введите строку:");


function biggestSymbol($str){

    $max=$str[0];
for($i=0; $i< strlen($str); $i++ )
if(ord($max)<$str[$i]){
    $max=$str[$i];

}

return $max;
}

function summOfSymbols($str){
$summ=0;
    for($i=0; $i< strlen($str); $i++ )
    
    $summ+=ord($str[$i]);

    return $summ;
}

echo biggestSymbol($st) . ' ' . ord(biggestSymbol($st)) . PHP_EOL;
echo "Сумма ASCII = " . summOfSymbols($st) . PHP_EOL;
