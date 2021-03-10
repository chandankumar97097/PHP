<?php 

	class Father{
		public function add(){
			echo "Addition Class";
		}
	}
	class Son extends Father{
		public function add(){
			echo "Substract Class";
		}
	}
	$obj = new Son;
	$obj->add();

?>