
<?php
 function count_function_calls(){
   static $count=0;
    if(function_exists('count_function_calls')){
        $count++;
    }
    return $count;
  echo  $count .PHP_EOL;
}

count_function_calls();
count_function_calls();
count_function_calls();
echo count_function_calls();;