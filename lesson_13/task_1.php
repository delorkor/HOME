<?php


$arr =[1 ,5 ,1 ,1 ,5 ,6];
$arr1 =null;

foreach($arr as $key => $drop){
    if($key**2 == $drop){
        $arr1 +=$arr[$key];
//    echo $key . PHP_EOL; 

    }
    // else{
    //     echo 'not found' . PHP_EOL; 
    //    continue;
    // }

}
if($arr1==null){
    echo 'not found' . PHP_EOL; 

}
else{
    echo $arr1; 
}