<?php


$arr =[1 ,1 ,1 ,1 ,5 ,6];


foreach($arr as $key => &$drop){
   for($i=$key; $i<=count($arr); $i++ ){
if($drop==$arr[$i]){
    unset($arr[$i]);
}
   }
echo var_dump ($drop) ;
 }
    

