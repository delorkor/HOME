<?php
session_start();
if(session_destroy()){
    header('Location: /lesson_18_TASK_3.php');
}
// session_unset();
// header('Location: /lesson_18_TASK_3.php');