<?php 


	interface Father{
		const a = 10;
		public function Fname();
	}
	interface Mother{
		public function Mname();
	}
	class Son implements Father, Mother{
		
		public function Fname(){
			echo self::a;
			echo "Hello";
		}
		public function Mname(){
			echo "World";
		}
	}	
	$obj = new Son;
	$obj->Fname();
	echo "<br>";
	$obj->Mname();
	


/*
	interface Father{
		const name1 = "Syam";
		public function show();
		public function getval();
	}
	interface Mother{
		const name2 = "Radha";
	}
	class Son implements Father, Mother{
		
		public function show(){
			echo Father::name1;
		}
		public function getval(){
			echo Mother::name2;
		}
	}	
	$obj = new Son;
	$obj->show();
	echo "<br>";
	$obj->getval();

*/


?>