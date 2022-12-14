<!-- <form action="/lesson_17_task_1-1.php" method="GET">
  <label for="fname">Ваше имя:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <input type="submit" value="Submit">
</form>  -->
<?php

if (empty($_GET['fname'] )) {
  echo '<form action="/lesson_17_task_1.php" method="GET">';
  echo '<label for="fname">Ваше имя:</label><br>';
  echo '<input type="text" id="fname" name="fname" value="John"><br>';
  echo '<input type="submit" value="Submit">';
'</form>' ;

  }


  
  if (!empty($_GET['fname'] )) {
    echo 'Привет' . $_GET['fname'];
    
    }
  