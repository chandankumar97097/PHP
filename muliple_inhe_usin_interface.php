<?php

//multiple inheritance using interface
	class Students{
		public $math = 90;
	}
	interface Boys{
		const sci = 98;
		public function disp();
	}
	class All extends Students implements Boys{
		public function disp(){
			echo $this->math;
			echo "<br>";
			echo Boys::sci;
		}
	}
	$obj = new All;
	$obj->disp();

?>