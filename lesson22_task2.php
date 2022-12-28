<?php
// Переделайте код этого класса так, чтобы вместо геттеров и сеттеров использовались магический методы __get и __set.
	class User
	{
        private $sum= [];
		public function cons($sum_arr){
       
		$this->sum[] = $sum_arr;
		return $this;
	}
		
      public function __toString(){
       return (string)array_sum($this->sum);
      }
	}  

    $user = new User();
	echo $user->cons(1)->cons(4)->cons(4)->cons(6);

?>