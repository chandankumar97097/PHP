<?php 

//Generator allows to write code that uses for each to etarate over a set of data without needing to build a array in the memory which may couse to exceed a memory limit
//instant we can write a generator function which is same as a normal function except that instant of returning once .....
//as at need in order to provide to we iterated over.

	//eg: 1
/*
	function values(){
		yield "Hello";
		yield 100;
		yield 101.15;
		yield true;
	}
	$control = values();
	//echo $control->current();

	$control->next();
	//echo $control->current();

	$control->next();
	echo $control->current();
*/

	//eg: 2
/*
	function values(){
		yield "Hello";
		yield 100;
		yield 101.15;
		yield true;
	}
	$control = values();
	foreach($control as $values){
		echo $values;
	}
*/	

/*	
	//eg: 3
	function values(){
		yield from ["A", "B", "C", "D"];
		yield from array("string" => "Hello", "Address" => "DGP");
		yield function(){
			echo "Hello PHP";
		};
	}
		$control = values();
		foreach($control as $values){
			echo '<br>'.json_encode($values);
		}
	
*/

	function values(){
		yield from ["A", "B", "C", "D"];
		yield from array("string" => "Hello", "Address" => "DGP");
		yield function(){
			echo "Hello PHP";
		};
	}
		$control = values();
		foreach($control as $values){
			echo '<br>'.json_encode($values, JSON_PRETTY_PRINT);
		}

?>