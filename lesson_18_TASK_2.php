<form action="/lesson_18_TASK_2.php" method="GET">
  <label for="fname">дата рождения:</label><br>
  <input type="date"  name="data" ><br>
  <input type="submit" value="Submit">
</form> 

<?php

if(!empty($_GET['data'])){
    setcookie('daata',$_GET['data']);
    $_COOKIE['daata']= explode('-', $_GET['data']);
    $date_x= explode('-', date('Y-m-d'));
    echo'<pre>';
    echo print_r($_COOKIE['daata']) . '<br>';
    echo print_r($date_x) . '<br>';
    echo'</pre>';
    $data_B=mktime(0, 0, 0,  $date_x[1],  $date_x[2], $date_x[0]);
    if($_COOKIE['daata'][2] == $date_x[2] && $_COOKIE['daata'][1]  == $date_x[1]){
        $_COOKIE['text']='С днем рождения';
        echo $_COOKIE['text'] . '<br>';
    }
    else{
           $data_z=mktime(0, 0, 0,  $_COOKIE['daata'][1],  $_COOKIE['daata'][2], date('Y'));
          if($data_z< $data_B){
              $data_z=mktime(0, 0, 0,  $_COOKIE['daata'][1],  $_COOKIE['daata'][2], (date('Y')+1));
             } 
        
             echo 'до дня рождения ' . floor(($data_z-$data_B)/86400) . ' Дней';
    }
}
