

<?php
 $serv = $_SERVER['REQUEST_URI'];
 $link= explode('/', $serv);

echo '<a href="/">Главная</a>' .PHP_EOL;
if($link[3]==""){
   
    echo '<a href="/lesson_16/task_1.php/User">User</a>'.PHP_EOL;
}
print_r($link);
$arr_us=[
    'mih' => [
        'num'=> '1',
        'Name'=>'Александр', 
        'patronymic'=>'Адреевич',
        'surname'=>'Орлёнок',
        'Data'=>'21-12-1991', 
        'DataReg'=>'13-07-2005',
        'Dataop'=>'30-11-2022', 
        'NamImg'=>'avatar1.jpg'
    ],
    'mrob'=>[
        'num'=>'2',
        'Name'=>'Адрей',
        'patronymic'=>'Сергеевич',
        'surname'=>'Демиденко',
        'Data'=>'11-11-1989',
        'DataReg'=>'30-08-2003',
        'Dataop'=>'30-11-2022',
        'NamImg'=>'avatar2.jpg'
    ],
    'forr'=>[
        'num'=>'3',
        'Name'=>'Адрей',
        'patronymic'=>'Андреевич',
        'surname'=>'Фролов',
        'Data'=>'21-12-1995',
        'DataReg'=>'13-07-2010',
        'Dataop'=>'30-11-2022',
        'NamImg'=>'avatar3.jpg'          
        ]
        
];




function users($arr) {
    echo'<table>';
    echo   '<tr>';
    echo  '<th>Login</th>';
    echo  '<th>№</th>';
    echo  '<th>name</th>';
    echo  '<th>patronymic</th>';
    echo  '<th>surname</th>';
    echo  '<th>date of birth</th>';
    echo  '<th>Date of Registration</th>';
    echo  '<th>Last login date</th>';
    echo  '<th>img</th>';
    echo   '</tr>';
    foreach($arr as $pro => $value){
        echo '<tr>';
        //Переход на страницу пользователя
        echo"<td><a href='/lesson_16/task_1.php/User/".$pro."'>".$pro."</a></td>";
        echo"<td>".$value['num']."</td>";
        echo"<td>".$value['Name']."</td>";
        echo"<td>".$value['patronymic']."</td>";
        echo"<td>".$value['surname']."</td>";
        echo"<td>".$value['Data']."</td>";
        echo"<td>".$value['DataReg']."</td>";
        echo"<td>".$value['Dataop']."</td>";
        echo'<td><img src="public/'.$value["NamImg"].'"></td>';
        echo '</tr>';

    }
    echo'</table>';
}

if($link[3]=='User'){
    users($arr_us);
    
    };


foreach($arr_us as $kay => $val){
    if($link[4]===$kay){
        echo '<div class="user">';
        echo '<div class="text">';
        echo '<h2>Login: '.$kay.'</h2>';
        echo '<h3>№: '.$val['num'].'</h3>';
        echo '<h3>Name: '.$val['Name'].'</h3>';
        echo'<h3>Patronymic: '.$val['patronymic'].'</h3>';
        echo '<h3>Surname: '.$val['surname'].'</h3>';
        echo '<h3>Date of birth: '.$val['Data'].'</h3>';
        echo '<h3>Date of Registration: '.$val['DataReg'].'</h3>';
        echo  '<h3>Last login date:  '.$val['Dataop'].'</h3>';
        echo  '</div>';
        echo'<div class="img">';
        echo '<img src="public/'.$val["NamImg"].'">';
        echo'</div>';
        echo '</div>';
    

        
    }
}
?>






<style>
     .user{
width: 800px;
min-height: 400px;
display: flex;
    }
     .user img{

        width: 400px;
     }
table{
border: 1px solid red;
min-width: 1500px;
text-align:center;
}
img{
    width:100px;
    
}
</style>