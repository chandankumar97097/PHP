<?php 

//Annonymus function
	interface I{
		public function r(string $msg, int $roll);
	}
	class A{
		private $var;
		public function getVar():I{
			return $this->var;
		}
		public function setVar(I $var){
			$this->var=$var;
		}
	}
	$obj = new A;
	$obj->setVar(new class implements I{
		public function r(string $msg, int $roll){
		echo $msg;
		echo $roll;
	}});
	$obj->getVar()->r("Hello", 160762922);

///////////////////////////////////////////

/*
//Anonymous Class
	interface company{
		public function emp(string $name, int $id);
	}
	class employee{
		private $emp_id;
		public function get_Emp_id():company{
			return $this->emp_id;
		}
		public function set_Emp_id(company $emp_id){
			$this->emp_id=$emp_id;
		}
	}
	$obj = new employee;
	$obj->set_Emp_id(new class implements company{
		public function emp(string $name, int $id){
		echo $name;
		echo $id;
	}});
	
	$obj->get_Emp_id()->emp("Amit : ", 160762922);
	echo "<br />";
	$obj->get_Emp_id()->emp("Mukesh : ", 120762622);

	*/
?>