<?php 


	// class Father{
	// 	public function __construct(){
	// 		echo "Parent";
	// 	}
	// }
	// class Son extends Father{
		
	// }
	// $obj = new Son;



	// class Father{
	// 	public function __construct(){
	// 		echo "Parent";
	// 	}
	// }
	// class Son extends Father{
	// 	public function __construct(){
	// 		echo "Child"."<br>";
	// 		Father::__construct();
	// 	}
	// }
	// $obj = new Son;



	// class Father{
	// 	public function __construct(){
	// 		echo "Parent";
	// 	}
	// }
	// class Son extends Father{
	// 	public function __construct(){
	// 		parent::__construct();
	// 		echo "Child";
	// 	}
	// }
	// $obj = new Son;



//multiple Inheritance
	class Animal{
		private $food;
		private $family;
		public function __construct($family, $food){
			$this->family=$family;
			$this->food=$food;
		}
		public function getFamily(){
			return $this->family;
		}
		public function setFamily(){
			return $this->family=$family;
		}
		public function getFood(){
			return $this->food;
		}
		public function setFood(){
			return $this->food=$food;
		}
	}
	class H extends Animal{
		private $owner;
		public function __construct($family, $food){
			parent::__construct($family, $food);
		}
			public function getOwner(){
				return $this->owner;
			}
			public function setOwner(){
				return $this->owner=$owner;
			}
	}	

	class C extends H{
		public function __construct($family, $food){
			parent::__construct($family, $food);
				
		}
	}
	
	$obj3 = new H("Dog", "Brad");
	echo "<b>Object</b>";
	echo "<br />";
	echo "class H belongs to ".$obj3->getOwner(). " having food " .$obj3->getOwner();
	echo "<br />";
	echo "class C belongs to ".$obj3->getOwner(). " having food " .$obj3->getOwner();



?>