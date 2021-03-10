<?php

	class Animal{
		private $food;
		private $family;
		public function __construct($family, $food){
			$this->family=$family;
			$this->food=$food;
		}
		public function getAnimal(){
			return $this->family;
		}
		public function setAnimal(){
			return $this->family=$family;
		}
		public function getFood(){
			return $this->food;
		}
		public function setFood(){
			return $this->food=$food;
		}
	}
	class petAnimal extends Animal{
		public function __construct($family, $food){
			parent::__construct($family, $food);
				
		}
	}	
	$obj = new petAnimal("Horse", "Grass");
	echo "Pet Animal belongs to ".$obj->getAnimal(). " having food " .$obj->getFood();

?>