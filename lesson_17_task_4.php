<form action="/lesson_17_task_4.php" method="GET">
  <label for="fname">Имя пользователя:</label><br>
  <input type="text"  name="fname" ><br>
  <label for="pasword">пароль:</label><br>
  <input type="pasword"  name="pasword" ><br>
  <input type="submit" value="Submit">
</form> 

<?php
 $pasw = 123;
if(!empty($_GET['fname']) && !empty($_GET['pasword'])){
   
if($_GET['pasword'] == $pasw){
echo 'пароль верен';

}
else {
    echo 'пароль НЕ верен';
}
   


}