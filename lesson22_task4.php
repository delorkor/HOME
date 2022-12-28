<?php
	class User
	{
		private $name;
		private $age;
		
    public function __call($name, $void){
 if($name =='setName' || $name=='setAge'){
    if($name =='setName'){
        $this->name = $void[0];
        }
    elseif($name=='setAge'){
         $this->age = $void[0];
        }
    }
elseif($name =='getName' || $name=='getAge'){
        if($name =='getName'){
            return $this->name;
            }
    elseif($name=='getAge'){
          return $this->age;
            }
        }
 else {
            echo 'невозможно получить/установить значение';
	}

    }
}
    $user = new User;
    $user->setName('sasha');
    $user->setAge('30');
    echo $user->getAge();

    echo '<pre>';
    echo print_r($user);
    echo '</pre>';