<?php
// Переделайте код этого класса так, чтобы вместо геттеров и сеттеров использовались магический методы __get и __set.
	class Date
	{
        public $year;
        public $month;
        public $day;

        public function __get($weekDay){

            if($weekDay=='date'){
          $this->year=date('Y');
          $this->month=date('m');
          $this->day=date('d');
          echo $this->year . '-' . $this->month . '-' . $this->day;
        }
        }
	}  

    $date = new Date();

	echo $date->date;


?>