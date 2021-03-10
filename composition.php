<?php

// Composition
	class A{
		private $name;
		private $email;
		public function __construct($name,$email){
			$this->name=$name;
			$this->email=$email;
		}
		public function getName(){
			return $this->name;
		}
		public function getEmail(){
			return $this->email;
		}
	}
	class B{
		private $name;
		private $price;
		private $publisher=array();
		public function __construct($name,$price){
			$this->name=$name;
			$this->price=$price;
		}
		public function setPrice($price){
			$this->price=$price;
		}
		public function getPrice(){
			return $this->price;
		}

		public function getName(){
			return $this->name;
		}

		public function addPublisher($name,$email){
			$this->publisher[] = new A($name,$email);
		}
		public function getPublisher(){
			return $this->publisher;
		}
	}

	$obj = new B('Chandan ',5.5);
	$obj->addPublisher('Chandan','chandan@gmail.com');
	$obj->addPublisher('Rityunjay','rityunjay@gmail.com');

	echo $obj->getName();
	echo $obj->getPrice();

	$p = $obj->getPublisher();
	echo "<pre>";
	print_r($p);

	
?>