<?php
require_once (__DIR__ . DIRECTORY_SEPARATOR . 'vendor' .  DIRECTORY_SEPARATOR . 'autoload.php');


 $dsn = 'mysql:host=localhost;port=3306;dbname=users_database';
 $pdo = new PDO($dsn,'lesson_user','pass');
 $stmt= $pdo->query('SELECT * FROM users');
 $stmt->setFetchMode(PDO::FETCH_CLASS, \Entity\User::class);
 $users = $stmt->FetchAll();
 echo '<pre>';
 echo print_r($users);
 echo '</pre>';

 foreach ($users as  $value) {
    echo $value;
 }