<?php
 
 $arr_del = readline("введите индекс массива:");

$arr =[112 ,21 ,23 ,41 ,523 ,642];


foreach($arr as $key => &$drop){
   if($key== $arr_del){

    unset($arr[$key]);
   }
    



 }

 echo var_dump (array_values($arr) )  ;  

