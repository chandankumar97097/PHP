<?php

/*1
	//default constructor
	class Students{
		public function __construct(){
			echo "Constructor Called!";
		}
	}

	$obj = new Students;
*/


	//parameterized constructor
	class Students{
		public function __construct($name){
			echo "Paramerized Constructor Called!";
			echo "<br>";
			$this->name=$name; 
			echo $name;
		}
	}
	$obj = new Students('Chandan');

	
?>