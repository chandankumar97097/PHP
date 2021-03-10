<?php 

	class Apple{
		public function __call($method,$para){
			if($method == "test"){
				$count = count($para);
				if($count == 2){
					echo "Two Para";
				}
				if($count == 3){
					echo "Three Para";
				}
				if($count == 4){
					echo "Four Para";
				}
			}
		}
	}
	$obj = new Apple;
	$obj->test("Apple","Banana","Pineapple");



?>