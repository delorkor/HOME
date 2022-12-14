<form action="/lesson_17_task_3.php" method="GET">
  <label for="fname">1 число:</label><br>
  <input type="number"  name="number1" ><br>
  <label for="number">2 число:</label><br>
  <input type="number"  name="number2" ><br>
  <label for="number">3 число:</label><br>
  <input type="number"  name="number3" ><br>
  <input type="submit" value="Submit">
</form> 


<?php
if (!empty($_GET['number1']) && !empty($_GET['number2']) && !empty($_GET['number3'] )) {

    echo 'Сумма' . ((int)$_GET['number1'] + (int)$_GET['number2'] + (int)$_GET['number3'] ). PHP_EOL;
    
}
?>