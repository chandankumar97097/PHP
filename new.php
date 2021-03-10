<?php 
//New Features of PHP7:

// Performance: php7 is faster than php5.

// Return type declation 
	declare(strict_types = 1);
	function add($a, $b):float{
	 return $a+$b;
	}
	var_dump (add(1, 2));

// Null coalesing Operator:
	$sum1 = 10;
	print($sum1)?? "NULL";

// Spaceship Operator:
	function sort ($a,$b)
    {
       return $a < = > $b;
    }

// Constant
	define("name", array("true", "false"));
		echo name[1];














/*

String.
Integer.
Float.
Boolean.
Array.
Object.
NULL.
Resource.

*/

?>