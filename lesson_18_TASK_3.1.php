<?php
session_start();
if(!$_SESSION['dopusk']==='admin' || $_SESSION['dopusk']==='user' || !isset($_SESSION['dopusk']) ){
    
       header('Location: /lesson_18_TASK_3.php');
       session_destroy();
}
echo 'вы admin <br>';
echo '<a href="lesson_18_TASK_3.del.php">выход</a><br>' ;
echo '<a href="/lesson_18_TASK_3.1.php">admin</a> <br>';
echo '<a href="/lesson_18_TASK_3.2.php">user</a><br>';

