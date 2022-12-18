<?php
session_start();


if(isset($_SESSION['num'])){
      $_SESSION['num']++;

}
else{
      $_SESSION['num']=0;
}

  echo 'Вы посетили наш сайт '. $_SESSION['num'] . ' раз!' . '<br>';


  $numm=0;
  if (!isset($_COOKIE['counter'])) { 
        setcookie('counter', $numm);


} else {
        setcookie('counter', $_COOKIE['counter']+1);

}


echo 'Вы посетили наш сайт '. $_COOKIE['counter'] . ' раз!' . PHP_EOL;

