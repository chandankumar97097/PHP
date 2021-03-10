<?php 


//final method
	class Father{
		function disp(){
			echo "Super Class <br>";
		}
		final function show(){
			echo "Show Class <br>";
		}
	}
	class Son extends Father{
		function disp(){
			echo "Son Disp Class";
		}
		function show(){
			echo "Son show Class";
		}
	}
	$obj = new Son;
	$obj->show();


/*2
	class Father{
		final function disp(){
			echo "Super Class <br>";
		}
		function show(){
			echo "Show Class <br>";
		}
	}
	class Son extends Father{
		function show(){
			echo "Son Class ";
		}
	}
	$obj = new Son;
	$obj->show();
*/

/*3
//final class
	final class Father{
		function disp(){
			echo "Super Class <br>";
		}
		function show(){
			echo "Show Class <br>";
		}
	}
	class Son extends Father{
		function disp(){
			echo "Son Class ";
		}
	}
*/
?>