<?php
	class User
	{
		private $name;
        private $Surname;
		private $age;
		private $login; 
        private $email;
        // , $Surname, $age, $login ,$email
public function __construct($name, $Surname, $age, $login, $email){
$this->name=$name;
$this->Surname=$Surname;
$this->age=$age;
$this->login=$login;
$this->email=$email;

}

        public function __toString(){
    return sprintf('Name: %s | Surname: %s | age: %d | login: %s | email: %s ', $this->name, $this->Surname, $this->age, $this->login, $this->email);
        }




     public function __destruct(){
        $fp = fopen('file.txt', 'a+');
         fwrite($fp, $this);
        fclose($fp);

     }
}
    $user1 = new User('pavel', 'pavel', 30, 'wqrr', 'wqrr@email.com' );
    $user2 = new User('sergey', 'sergey', 14, 'qweedd', 'ddt@email.com' );
 echo $user1 . PHP_EOL;
 echo $user2 . PHP_EOL;
    // echo '<pre>';
    // echo print_r($user);
    // echo '</pre>';