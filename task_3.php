<form action="/task_3.php" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <div>
      <input type="checkbox" id="test" name="testCheckbox" checked>
      <label for="test">Test checkbox</label>
  </div>
  <select name="selectExample">
      <option>JS</option>
      <option>PHP</option>
      <option>JAVA</option>
  </select>

  <input type="submit" value="Submit">
</form> 

<?php
    if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['testCheckbox']) && !empty($_POST['selectExample'])) {
        echo 'Имя: ' . $_POST['fname'] . '<br/>';
        echo 'Фамилия:' . $_POST['lname'] . '<br/>';
        echo 'Чекбокс:' . $_POST['testCheckbox'] . '<br/>';
        echo 'Select:' . $_POST['selectExample'] . '<br/>';
    }
?>