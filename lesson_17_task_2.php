<form action="/lesson_17_task_2.php" method="GET">
  <label for="fname">Ваше имя:</label><br>
  <input type="text"  name="fname" ><br>
  <label for="FData">Возраст:</label><br>
  <input type="number"  name="FData" ><br>
  <label for="number">Зарплата:</label><br>
  <input type="number"  name="num" ><br>
  <input type="submit" value="Submit">
</form> 


<?php
if (!empty($_GET['fname']) && !empty($_GET['num']) && !empty($_GET['FData'] )) {

    echo 'Имя:' . $_GET['fname'] . PHP_EOL;
    echo ' Зарплата:' . $_GET['num'] . PHP_EOL;
    echo 'Возраст:' . $_GET['FData'] . PHP_EOL;
}
?>
