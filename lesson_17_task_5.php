
<form action="/lesson_17_task_2.php" method="POST">

<?php
$arr = ['Австралия','Австрия','Барбадос','Бахрейн','Белорусь','Бельгия','Бенин','Болгария','Россия'];
echo '<select  name="sel">';
if(empty($_POST['sel'])){

echo print_r($arr);

foreach($arr as $value){
   
    echo '<option>' . $value . '</option>';
    // '<option>'$value'</option>'
}

}
echo '</select>';

?>


</form> 
