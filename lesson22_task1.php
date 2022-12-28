<?php
// Переделайте код этого класса так, чтобы вместо геттеров и сеттеров использовались магический методы __get и __set.
	class User
	{
		private $name;
		private $age;
		
		public function getName()
		{
			return $this->name;
		}
		
		public function __set($name,$value)
		{
			if ($name != '' && $value != '') { // проверяем имя на непустоту
				$this->$name = $value;
			}
		}
		
		public function __get($value)
		{
			return $this->$value;
		}
		
		public function setAge($age)
		{
			if ($age >= 0 and $age <= 70) { // проверяем возраст
				$this->age = $age;
			}
		}

    

	}

    $user = new User ();
    $user->age=18;

    echo $user->aaa=18;


    echo '<pre>';
    echo print_r($user);
    echo '</pre>';
?>