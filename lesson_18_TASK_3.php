<form action="lesson_18_TASK_3.php" method="GET">
  <label for="fname">дата рождения:</label><br>
  <input type="text"  name="fname" ><br>
  <label for="pasword">дата рождения:</label><br>
  <input type="pasword"  name="pasword" ><br>
  <input type="submit" value="Submit">
</form> 

<?php
session_start();
$arr=[
    ['login'=>'PAV', 'pasword'=>123, 'dopusk'=>'user'],
    ['login'=>'SERG', 'pasword'=>456, 'dopusk'=>'admin']
];


if(!empty($_GET['fname']) && !empty($_GET['pasword']))
foreach ($arr as  $value) {
  
    if($value['pasword']==$_GET['pasword'] && $value['fname']==$_GET['login']){
$_SESSION['dopusk']= $value['dopusk'];
    }
    else{
        echo 'автарезуйтесь';
      
    }

}

if($_SESSION['dopusk']=='admin'){
    include '/lesson_18_TASK_3.1.php';
    header('Location: /lesson_18_TASK_3.1.php');
    
    }
    elseif($_SESSION['dopusk']=='user'){
        include '/lesson_18_TASK_3.2.php';
        header('Location: /lesson_18_TASK_3.2.php');
   
    }
    else
    {
        echo 'Введите логин или пороль <br>';
       
    }
    echo '<a href="/lesson_18_TASK_3.1.php">admin</a> <br>';
    echo '<a href="/lesson_18_TASK_3.2.php">user</a><br>';