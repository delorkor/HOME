<form action="/lesson_18_TASK_2.php" method="GET">
  <label for="fname">дата рождения:</label><br>
  <input type="date"  name="data" ><br>
  <input type="submit" value="Submit">
</form> 

<?php

if(!empty($_GET['data'])){
    setcookie('daata',$_GET['data']);
    $date_Y= explode('-', $_GET['data']);
    $date_x=date('Y-m-d');
    
    print_r($date_Y);
    if($_COOKIE['daata'] == $date_x){
       
      
        $_COOKIE['text']='С днем рождения';
        echo $_COOKIE['text'] . '<br>';
    }
    else{
        $data_z=mktime(0, 0, 0, $date_Y[2], $date_Y[1], date('Y'));
        echo $data_z . '<br>' . $date_x;

          if($data_z< $date_x){
            // echo 1;
          $data_z=mktime(0, 0, 0, $date_Y[2], $date_Y[1], (date('Y')+1));
             } 
        
             echo 'до дня рождения' . floor(($data_z-$date_x)/86400);
    }
}
