<?php 


/*

18/03/2019
Return type declation 

declare stript type=1
	function add($a, $b):float{
	 return $a+$b;
	}
	var_dump (add(1, 2));


# Null Coalescing operators --
$sum1 = 10;
print($sum1)?? "NULL";

# Spaceship operator
it is used to compare two expressions and return -1,0,1 when one variable is less than equal to or grater 
than as compare to other variable

# constant array (diff.. b/w php5 & php7 array not accept php5 but php7 accept)
constent array using define 
eg: 
define("name", array("true", "false"));
	echo name[1];

# Closure call

It is a way to temporarily bind an obj to the closer and invoke, it takes Obj is first argument followed by any argument 
to passed to the closer.
eg:

# php7 Remove extensions & SAPIS 
eg: mssql, mysql

# In php7 two methods are introduce to generate cripto graphically secure integers and strings
random_bytes()
random_int()

$a = random_bytes()

$a = random_int(100, 200);
echo $a;

$a = random_bytes(2);
print(bin2hex($a));


----------------------------------------------------
			OOPS
----------------------------------------------------
In object oriented programming, we follow design and philosophy that uses object and methods rather than linear concepts of procedure and task
to a complish a programmatic rules and object is the self sustainable construct that enable reusability of code a methods specify one operation without providing 
any details to describe how the operation should be carried out.

i. Modularity:
It refferce to concept of making multiple modules first and than linking and combining them to form a complete system, it's enable reusibily and minimise duplicacy.

ii. Reusibility:
Code can reuse without modification.

iii. Information Or Data hiding:
internal Implementsaion of module(Class Container) remaines hidden from outside world.

iv. Debugging: 
Debugging is easier because the module(Class) is independent from other pieces of code.

v. Defining: defining abstract in which implementation details are hidden.

----------------------------------------------------	
		Opps Fundamantal:
----------------------------------------------------

Class:
it is a collection of var and functions working with this variables, it's a template from which objects are created.

Properties:
class member variables are called properties(Attributes/fields).

Properties and methods visibility:
1. Private Visibility: this type allows access to member of the same class.
can be access only by the class that defines the member.
2. Protected visibility: allows access to members of the same class and instances from classes that inherit that one class.
3. Public Visibility: refers to property or methods that be accessible to anywhere.


Instance of Class:
It refers to perticular instance of the class where the object can be a combination of variables, function and Data structure.

*/

/************** PHP7 Starts on 18-Mar-2019 ***************/
	/*
	function sumOfInts(int ...$ints){
		return array_sum($ints);
	}
	var_dump(sumOfInts(2, '3', 4.1));
	*/
	
	/*
	declare(strict_types=1);
	function sum(float $a, float $b){
		echo $a+$b;
	}
	sum(4, 6.1);
	*/
	
	/*
	function add($a, $b):float{
	 return $a+$b;
	}
	echo (add(1, 3.4));
	*/
	
	/*
	declare(strict_types=1);
	function add($a, $b):int{
	 return $a+$b;
	}
	var_dump (add(1, 2));
	*/
	
	/*
	$sum = 20; //left to right associative
	print($sum%2==0)? "even no" : "odd no";
	*/
	
	/*
	$sum1 = 10; //right to left associative
	print($sum1)?? "NULL";
	*/
	
	/*
	define("name", array("a", "b"));
	echo name[0];
	*/
	
	/*
	// Integers
	echo 1 <=> 1; // 0
	echo 1 <=> 2; // -1
	echo 2 <=> 1; // 1
	echo "<br />";
	
	// Floats
	echo 1.5 <=> 1.5; // 0
	echo 1.5 <=> 2.5; // -1
	echo 2.5 <=> 1.5; // 1
	echo "<br />";
	
	// Strings
	echo "a" <=> "a"; // 0
	echo "a" <=> "b"; // -1
	echo "z" <=> "c"; // 1
	
	// Objects
	$a = (object) ["a" => "b"]; 
	$b = (object) ["a" => "b"]; 
	echo $a <=> $b; // 0
	 
	$a = (object) ["a" => "b"]; 
	$b = (object) ["a" => "c"]; 
	echo $a <=> $b; // -1
	 
	$a = (object) ["a" => "c"]; 
	$b = (object) ["a" => "b"]; 
	echo $a <=> $b; // 1
	 
	// not only values are compared; keys must match
	$a = (object) ["a" => "b"]; 
	$b = (object) ["b" => "b"]; 
	echo $a <=> $b; // 1
	*/
	
	/*
	$str = bin2hex("Hello World!");
	echo($str);
	*/	
	
	/*
	$a = random_bytes(6);
	print(bin2hex($a));
	*/
	
	/*
	$a = random_int(100, 200);
	echo $a;
	*/
	
	/*
	class A{
		function sum($a, $b){
			return $a+$b;
		}
		function minus($a, $b){
			return $a-$b;
		}
	}
	$obj = new A;
	echo $obj -> sum(2, 3);
	echo "<br />";
	echo $obj -> minus(20, 10);
	*/
	
	/*
	class TV{
		public $volume;
		public $model;
		function volumeUp(){
			return $this->volume+=1;
		}
		function volumeDown(){
			return $this->volume-=1;
		}
	function __construct(){
		$this->volume=3;
		$this->model="ABCDE";
	}
	}
	$obj = new TV;
	echo "Volume: ".$obj->volume;
	echo "<br />";
	echo "Model: ".$obj->model;
	echo "<br />";
	echo "Volume Up: ".$obj->volumeUp();
	echo "<br />";
	echo "Volume Down: ".$obj->volumeDown();
	*/
	
	/*
	class TV{
		public $volume;
		public $model;
		function volumeUp(){
			return $this->volume+=1;
		}
		function volumeDown(){
			return $this->volume-=1;
		}
	function __construct(){
		$this->volume=3;
		$this->model="abcd";
	}
	}
	class electro extends TV{
		
	}
	$obj = new electro(2, "abc");
	echo "Volume: ".$obj->volume;
	echo "<br />";
	echo "Model: ".$obj->model;
	echo "<br />";
	echo "Volume Up: ".$obj->volumeUp();
	echo "<br />";
	echo "Volume Down: ".$obj->volumeDown();
	echo "<br />";
	*/

/*

////19/03/2019////////////==============================


function testStatic(){
	$x=0;
	echo $x;
	$x++;
}
testStatic();
testStatic();
testStatic();
*/ 

/*
function testStatic(){
	static $x=0;
	echo $x;
	$x++;
}
testStatic();
testStatic();
testStatic();
*/

/*
$x =5;
$y=10;
function variables(){
	$GLOBALS["y"]=$GLOBALS["x"]+$GLOBALS["y"];
	echo $GLOBALS[y];
}
variables();
//echo $y;
*/

/*
$x =5;
$y=10;
function variables(){
	global $x,$y;
	$z = $x + $y;
	echo $z;
}
//variables();
echo $y;
*/

/*
abstract class Car{
	protected $tankvolume;
	public function setTankVolume($volume){
		$this->tankvolume=$volume;
	}
	abstract public function calctankVolume();
}
class newcar extends Car{
	public function calctankVolume(){
	$miles = $this->tankvolume*30;
	return $miles;
}
}
class Toyata extends Car{
	public function calctankVolume(){
		return $miles=$this->tankvolume*33;
	}

public function Color(){
	return "Blue";
}
}
$obj = new Toyata;
$obj->setTankVolume(10);
echo $obj->calctankVolume();
*/

/*
abstract class Base{
	abstract function show();
}
class Child extends Base{
	function show(){
		echo "Hello PHP";
	}
}
$obj = new Child;
$obj->show();
*/

/*	
class A{
	public function show($x, $y){
		$z = $x+$y;
		echo $c;
		echo "<br />";
	}
}
class B extends A{
	public function show($x, $y){
		$z = $x*$y;
		echo $z;
		echo "<br />";
	}
}
 $obj = new B;
 $obj ->show(5, 10);
*/
	
/*
class Base{
	 public function add(){
		 $a = 10;
		 $b = 10;
		 $c = $a+$b;
		 echo $c;
		 echo "<br />";
	 }
}
class sub extends Base{
	public function sub(){
		 $a = 10;
		 $b = 10;
		 $c = $a-$b;
		 echo $c;
		 echo "<br />";
	 }
}
class nexted extends sub{
	public function multiple(){
		 $a = 10;
		 $b = 10;
		 $c = $a*$b;
		 echo $c;
		 echo "<br />";
	 }
}
 class show extends nexted{
	 public function __construct(){
		 parent:: add();
		 parent:: sub();
		 parent:: multiple();
		 
	 }
 }
 $obj = new show();
*/

/*
encapsulation is concern it is hiding the data implementation between and only exposing the methods:
Uses :
it reduce software development complexity by hiding the implementation details and exposing the operation
2. protects the internal state of an object- Access to the class var by get set method the makes class flexible and easy to maintaining


#Final keyword:
Final keyword prevents method overriding final class prevents inheritance.


Abstract class are classes in which at least one method is abstract 
(declare abstract using abstract keywords)

use of Abstract class is that:
all the base classes implementing this class should give implementation of the Abstract method declare in the parent class
Abstract class can contain abstract as well as none abstract methods.
eg:
 abstract class Base{
	abstract function show();
}
class Child extends Base{
	function show(){
		echo "Hello PHP";
	}
}
$obj = new Child;
$obj->show();
-------------------------------
		PHP Variables
-------------------------------
Global: 
the global keyword is use to access a global variable from within a function, PHP also stores all global variables in an array called $GLOBAL[''] the index holds the name of the var this array is also accessible from within functions and can also be used to update global var directly.

eg: 
$x =5;
$y=10;
function variables(){
	$GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y']
}
//variables();
echo $y;

*/


/*
sub -
nexted *
show

1. class add
2. sub extends
sub(2)
3. nexted extends sub
multiple(2)


4. class show extends nexted
__construct {
	parent + scope resolution operator
	add()
	sub()
	multiple()
}
5. object will be of show class only
*/


	/*
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

		class C extends Animal{
			public function __construct($family, $food){
				parent::__construct($family, $food);
				
			}
		}
	*/
	/****
	$obj3 = new H("Dog", "Brad");
	echo "<b>Object</b>";
	echo "<br />";
	echo "class H belongs to ".$obj3->getOwner(). " having food " .$obj3->getOwner();
	echo "<br />";
	echo "class C belongs to ".$obj3->getOwner(). " having food " .$obj3->getOwner();
	*/
	
	/*
	$obj1 = new H("Herbivores", "Grass");
	echo "<b>Herbivores Object</b>";
	echo "<br />";
	echo "class H belongs to ".$obj1->getFamily(). " having food " .$obj1->getFood();
	echo "<br />";
	echo "<b>Cat Object</b>";
	echo "<br />";
	$obj2 = new C("Cat", "Milk");
	echo "class C belongs to ".$obj2->getFamily(). " having food " .$obj2->getFood();
	*/
	
	/*
	$obj4 = new C("Horse", "Grass");
	echo "<b>Horse Object</b>";
	echo "<br />";
	echo "class H belongs to ".$obj4->getFamily(). " having food " .$obj4->getFood();
	*/
	
	//Assessment
	/*

	<?php 
		$a = 4;
		$b = "Laptop";
		$c = "6th Gen";
		$p = 42000;
		printf("I have %d %s and it is %s and it's Price is %f.",$a,$b,$c,$p);
	?>

	<?php 
		$str = "Hallw sll!";
		echo strtr($str, "aws", "eoA");
	?>

	<?php 
		$str1 = "WORKING OUT";
		$str2 = "WORKINg OUT";
		echo strcmp($str1, $str2);
	?>

	<?php 
		$str = "Hello All";
		echo substr($str, 3, 5);
	?>

	<?php 
		$str = "Hello All";
		echo strtoupper($str);
	?>


	<?php 
		$str = "Hello World";
		echo strpos($str, "rld");
	?>

	*/


	////20/03/2018/////////==============================

	/*
	echo substr("Hello", 2, 2);
	*/
	
	/*
	echo strtoupper("working out");
	*/
	
	/*
	echo strtolower("WORKING OUT");
	*/
	
	/*
	echo strtr("Warkinz out", "az", "og");
	*/
	
	/*
	$str = "Hello World";
	echo strpos($str, "rld");
	*/
	
	/*
	$str1 = "Hello World";
	echo strlen($str1);
	*/
	
	/*
	$str1 = "Hello World";
	$str2 = "Hello Worlds";
	echo strcmp($str1, $str2);
	/*
	
	/*
		echo strcmp("Hello", "Hello");
	*/
	
	/*
	class B{
		var $item1;
		var $item2;
		var $item3;
		
	function __construct($param1,$param2,$param3){
		$this->item1=$param1;
		$this->item2=$param2;
		$this->item3=$param3;
	}
	}
	$m = new B(5,6,7);
	var_dump($m);
	echo "<br />";
	echo "Alter typecasting";
	echo "<br />";
	$z = (array)$m;
	var_dump($z);
	*/
	
	
	
	/*
	$details = array(
		"Chandan" => array("Name"=> "Chandan", "Inlass"=> 2, "Roll No"=> 20),
		"Rityunjay" => array("Name"=> "Rityunjay", "Inlass"=> 2, "Roll No"=> 20),
		"Gopal" => array("Name"=> "Gopal", "Inlass"=> 2, "Roll No"=> 20)
		
	);
	foreach($details as $d){
		foreach($d as $key=>$val){
			echo $key=$val;
			echo "<br />";
		}
		echo "<br />";
	}
	*/
	
	
	/*
	$arr = array("Name" => "Ram", "Inclass" => "10", "Roll No"=> "20", "Marks" => "86");
	$details = array_keys($arr);
	$c = count($details);
	for($i=0; $i<$c; $i++){
		echo $details[$i].': '.$arr[$details[$i]];
		echo "<br />";
	}
	*/
	
	/*
	$arr = array("Name" => "Ram", "Inclass" => "10", "Roll No"=> "20", "Marks" => "86");
	foreach($arr as $key=>$val){
		echo $key=$val;
	}
	*/
	
	/*
	$num = array('one', 'two', 'three', 'four');
	$newarray = count($num);
	for($i=0; $i<$newarray; $i++){
		echo $num[$i];
		echo "<br />";
	}
	*/
	
	/*
	$v1 = "";
	$v2 = NULL;
	$v3;
	var_dump(empty($v3));
	*/
	
	/*
	$v1 = "";
	$v2 = NULL;
	$v3;
	var_dump($v3);
	*/
	
	/*
	$num1 = 12;
	$num2 = 6.5;
	$num3 = $num1+ (int)$num2;
	
	if($num3 !== $num1+$num2){
		echo "Not Equal value is ".$num3;
	}else{
		echo "Value is Equal ".$num2;
	}
	*/
	
	/*
	$num1 = 12;
	$num2 = 6.5;
	$num3 = $num1+$num2;
	echo $num3;
	*/
	
	/*
	$str = "Hello";
	$str2 = sha1($str);
	echo $str2;
	*/
	
	//printf
	/*
	$no = 100;
	$city = "Durgapur";
	printf("there are %u people in %s city", $no, $city);
	*/
	
	/*
	$str = "Hello How are you";
	$str2 = rtrim($str, "are");
	echo $str2;
	*/
	
	/*
	$str = "Hello How are you";
	$str2 = ltrim($str, "Hello");
	echo $str2;
	*/
	
	/*
	//echo explode(split, string, limit);
	$val = "hi, hello, bye, see";
	print_r (explode(',', $val, 3));
	*/

	/* count_chars
	$str = "PHP is fun!";
	$str2 = count_chars($str, 1);
	foreach($str2 as $key=>$value){
		echo "The character ".chr($key)." was found ".$value. " Times"."<br>";
	}
	*/
	/* mode 1,2,3,4
		An array with as key value and number of occurrences as value;
	*/
	/*
	$str = "Hello world!";
	echo count_chars($str, 4);
	*/
	
	/* chunk_split 7
	$str = "Hello How are you";
	$str2 = chunk_split($str, 2, ".");
	echo $str2;
	*/
 
	/* chunk_split 6
	chunk_split 
	
	*/
	/* chr 5
	$str = chr(052);
	echo $str;
	*/

	/* chop 4
	$str = "Hello How are you";
	$str2 = chop($str, "you");
	echo $str2;
	*/
	
	/* bin2hex 3
	$str = "Hello how are you";
	echo bin2hex($str);
	*/
	
	/* addslashes 2
	$str = addslashes('Hello "how" are you');
	echo $str;
	
	//String  
	/* addcslashes 1
	$str = addcslashes("Hello World", "o");
	echo $str;
	*/
 
 //PHP data types
 
 //String 
 //int
 //float
 //boolean
 //array
 //object
 //null
 //resource
 
 /*
 Addcslashes()
 */
 
 
 /*
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
	*/
	
	/*
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
	*/

/*********
interface DisplayVal{
    public function method();
} 
class Val implements DisplayVal{
    public function method(){ 
        echo "Value Printed"; 
    }
}
$obj = new Val; 
$obj->method();
**********/

/*
function testStatic(){
	$x=0;
	echo $x;
	$x++;
}
testStatic();
testStatic();
testStatic();
*/ 

/*
function testStatic(){
	static $x=0;
	echo $x;
	$x++;
}
testStatic();
testStatic();
testStatic();
*/

/*
$x =5;
$y=10;
function variables(){
	$GLOBALS["y"]=$GLOBALS["x"]+$GLOBALS["y"];
	echo $GLOBALS[y];
}
variables();
//echo $y;
*/

/*
$x =5;
$y=10;
function variables(){
	global $x,$y;
	$z = $x + $y;
	echo $z;
}
//variables();
echo $y;
*/

/*
abstract class Car{
	protected $tankvolume;
	public function setTankVolume($volume){
		$this->tankvolume=$volume;
	}
	abstract public function calctankVolume();
}
class newcar extends Car{
	public function calctankVolume(){
	$miles = $this->tankvolume*30;
	return $miles;
}
}
class Toyata extends Car{
	public function calctankVolume(){
		return $miles=$this->tankvolume*33;
	}

public function Color(){
	return "Blue";
}
}
$obj = new Toyata;
$obj->setTankVolume(10);
echo $obj->calctankVolume();
*/


/*
abstract class Base{
	abstract function show();
}
class Child extends Base{
	function show(){
		echo "Hello PHP";
	}
}
$obj = new Child;
$obj->show();
*/

/*	
class A{
	public function show($x, $y){
		$z = $x+$y;
		echo $c;
		echo "<br />";
	}
}
class B extends A{
	public function show($x, $y){
		$z = $x*$y;
		echo $z;
		echo "<br />";
	}
}
 $obj = new B;
 $obj ->show(5, 10);
*/

	
/*
class Base{
	 public function add(){
		 $a = 10;
		 $b = 10;
		 $c = $a+$b;
		 echo $c;
		 echo "<br />";
	 }
}
class sub extends Base{
	public function sub(){
		 $a = 10;
		 $b = 10;
		 $c = $a-$b;
		 echo $c;
		 echo "<br />";
	 }
}
class nexted extends sub{
	public function multiple(){
		 $a = 10;
		 $b = 10;
		 $c = $a*$b;
		 echo $c;
		 echo "<br />";
	 }
}
 class show extends nexted{
	 public function __construct(){
		 parent:: add();
		 parent:: sub();
		 parent:: multiple();
		 
	 }
 }
 $obj = new show();
*/

/*
encapsulation is concern it is hiding the implementation between and only exposing the methods:
Uses :
it reduce software development complexity by hiding the implementation details and exposing the operation
2. protects the internal state of an object Access to the class var by get set method the makes class flexible and easy to maintaining


#Final keyword:
Final keyword prevents method overriding final class prevents inheritance.


Abstract class are classes in which at least one method is abstract (declare abstract using abstract keywords)
use of Abstract class is that all the base classes implementing this class should give implementation of the Abstract method declare in the parent class abstract class can contain abstract as well as none abstract methods.
eg:
 abstract class Base{
	abstract function show();
}
class Child extends Base{
	function show(){
		echo "Hello PHP";
	}
}
$obj = new Child;
$obj->show();
-------------------------------
		PHP Variables
-------------------------------
Global: 
the global keyword is use to access a global variable from within a function, PHP also stores all global variables in an array called $
GLOBAL[''] the index holds the name of the var this array is also accessible from within functions and can also be used to update global var directly.

eg: 
$x =5;
$y=10;
function variables(){
	$GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y']
}
//variables();
echo $y;
*/

	/*
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

		class C extends Animal{
			public function __construct($family, $food){
				parent::__construct($family, $food);
				
			}
		}
	*/
	/****
	$obj3 = new H("Dog", "Brad");
	echo "<b>Object</b>";
	echo "<br />";
	echo "class H belongs to ".$obj3->getOwner(). " having food " .$obj3->getOwner();
	echo "<br />";
	echo "class C belongs to ".$obj3->getOwner(). " having food " .$obj3->getOwner();
	*/
	
	/*
	$obj1 = new H("Herbivores", "Grass");
	echo "<b>Herbivores Object</b>";
	echo "<br />";
	echo "class H belongs to ".$obj1->getFamily(). " having food " .$obj1->getFood();
	echo "<br />";
	echo "<b>Cat Object</b>";
	echo "<br />";
	$obj2 = new C("Cat", "Milk");
	echo "class C belongs to ".$obj2->getFamily(). " having food " .$obj2->getFood();
	*/
	
	/*
	$obj4 = new C("Horse", "Grass");
	echo "<b>Horse Object</b>";
	echo "<br />";
	echo "class H belongs to ".$obj4->getFamily(). " having food " .$obj4->getFood();
	*/
	
	


	//////////////////////////// Overloading ///////////////////////////

	/*Holi holyday's weekend*/
	//25/03/2019

	/*Assessment/////////////////////////////////////////
	//Date and Time
    date_default_timezone_set('Asia/Kolkata');
    echo "Time: ". date('h:i:s')."<br>";
    echo "Date: ". date('jS-M-Y');
    */


    //Method Overloading

    /*
		<?php 

		    class Player{
		        function __call($name, $runs){
		            if($name =='Virat'){
		                switch (count($runs)) {
		                    case 1 : return 20 * $runs[0];
		                    case 2 : return $runs[0]*$runs[1];
		                    case 3 : return $runs[2]*$runs[3]*$runs[4];
		                }
		            }
		        }
		    }

		$obj = new Player;
		echo $obj->Virat(10);
		echo "<br>";
		echo $obj->Virat(10,20);
		echo "<br>";
		echo $obj->Virat(18,10);

		?>


    */

	/*
	echo date('d/m/y').'<br>';
	echo date("d-m-y").'<br>';
	echo date('d.M.Y/D').'<br>';
	echo date("jS.M.Y").'<br>';
	echo date('h:i:s').'<br>';
	echo date('M,d,y h:i:s').'<br>';
	echo date('h:i A').'<br>';
	echo $t = time().'<br>';
	$t =time();
	echo ($t);
	echo date("F d y,h:i:s A", $t).'<br>';
	//echo mktime(23, 21, 50, 11, 25, 2017).'<br>';
	echo date('l m d',mktime(10,29,40,03,25,2019)).'<br>';
	date_default_timezone_set('Asia/Kolkata');
	echo date('H:i:s').'<br>'; 

	$z =  mktime(10, 31, 30, 05, 24, 2019);
	echo "current time is" . date('y/m/d h:i:s A', $z).'<br>';

	$z = cal_days_in_month(CAL_GREGORIAN, 2, 20).'<br>';
	echo $z;

	$z = unixtojd(mktime(10,40,20,03,25,2019));
	print_r(cal_from_jd($z,CAL_GREGORIAN));*/

	/*Function Overloading*/

	/*class A{
		function __call($name,$args){
			if($name =='bengal'){
				switch (count($args)) {
					case 1 : return 3.14 * $args[0];
					case 2 : return $args[0]*$args[1];
					case 3 : return $args[2]*$args[3]*$args[4];
				}
			}
		}
	}
	$obj = new A;
	echo $obj->bengal(10);
	echo "<br>";
	echo $obj->bengal(10,20);
	echo "<br>";
	echo $obj->bengal(18.10,10);*/

	/*Property Overloading -------- is used to create dynamic properties in object contexion .A property associated with a class instance and if its not declared within the scope of the class it is considered as overloaded properties. __set() called while initializing overloaded properties __get() called while using overloaded properties with print statement. __isset() __unset()*/

	/*
	class H{
		private $data = array();
		public $data2 = 1;
		private $hidden = 2;
		public function __set($name, $value){
			echo "Our SET Method";
			$this->data[$name] = $value;
		}
		public function __get($name){
			echo "Our GET Method";
			if(array_key_exists($name, $this->data)){
				return $this->data[$name];
			}
			$t = debug_backtrace();
			return NULL;
		}
		public function __isset($name)
	    {
	        return isset($this->data[$name]);
	    }
	    public function __unset($name){
	    	unset($this->data[$name]);
	    }
	    public function hide(){
	    	return $this->hidden;
	    }
	}
	$obj = new H;
	echo $obj->a=1;
	echo "<br>";
	var_dump(isset($obj->a));
	echo "<br>";

	echo $obj->data2;
	echo "<br>";

	unset($obj->a);
	var_dump(isset($obj->a));
	echo "<br>";

	echo $obj->hide();
	//echo $obj->hidden;


	//PDO Connection
	$DB_HOST = "localhost";
	$DB_USER = "root";
	$DB_PASS = "";
	$DB_NAME = "";
	try{
		$DB_CON = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_CON->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e -> getMessage();
	}



	//26/03/2019 === Bitwise Operator
	
	// $x = 13;
	// $y = 22; 

	// echo $x & $y;


	// $x = 5;
	// $y = 11; 

	// echo $x | $y;


	// $x = 5;
	// $y = 12; 

	// echo $x | $y;


	// $x = 11;
	// $y = 12; 

	// echo $x ^ $y;

	// $x = 11;
	// $y = 12; 

	// echo $x &~ $y;

	// 1 2 4 8 16 32 64


	$x = 8;
	$y = 3; 

	echo $x << $y;


	///////////////////////28.03.2019===========================
	//filters
	// $q = "<h2>Hel<br>lo</h2>";
	// $newstr = filter_var($q, FILTER_SANITIZE_STRING);
	// echo $newstr;

	// $a = 1;
	// if(filter_var($a, FILTER_VALIDATE_INT)===0 || !filter_var($a, FILTER_VALIDATE_INT)===false){
	// 	echo "Valid";
	// }else{
	// 	echo "Invalid";
	// }

	//email validate remove slashes / 
	// $email = "chan//////////da//n@/g/m/ai/.co/m";
	// $newstr = filter_var($email, FILTER_SANITIZE_EMAIL);
	// echo $newstr;




	//Annonymus function
	// interface I{
	// 	public function r(string $msg, int $roll);
	// }
	// class A{
	// 	private $var;
	// 	public function getVar():I{
	// 		return $this->var;
	// 	}
	// 	public function setVar(I $var){
	// 		$this->var=$var;
	// 	}
	// }
	// $obj = new A;
	// $obj->setVar(new class implements I{
	// 	public function r(string $msg, int $roll){
	// 	echo $msg;
	// 	echo $roll;
	// }});
	// $obj->getVar()->r("Hello", 160762922);


	/*
	//Composition
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
	*/




	//abstract classes are the classes that may contain abstract methods abstract class can not be instantiated.
	//interface : an interface is almost similar to abstract class but it has no property and can not define how methods are to be implemented. it is a concept of abstraction and encapsilation

	//composition and aggrigation

	//aggrigation
	//relation and objects: in composition an object create another object aggrigation occur when an object is composed of multiple object.

	//composition
	//eg:





	 //   	interface A{
	 //        public function x();
	 //    }

	 //    interface B extends A{
		//   	public function z();
		// }
		  
		// class y implements A,B{

		// }


	// interface
	// interface methodname{
	//         public function xyz();
	//     }

	//     class abc implements methodname{

	// 	  public function xyz()
	// 	  {
		  	
	// 	  }

	//     }

	/*
	//Interface
	interface Probablity{
        public function Win1();
        public function Win2();
    }

    class Winner implements Probablity{

	  	public function Win1(){
	  		echo "India is Winner!";
	  	}
	  	public function Win2(){
	  		echo "Australia is Winner!";
	  	}

	}

	$obj = new Winner;
	$obj->Win1();
	*/

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
	echo "<br />";
	$obj->get_Emp_id()->emp("Raja : ", 14562922);

	*/



	////29/03/2019/////////////////////////////==================

	/*
	$students = array("name" => "Chandan", "id" => 1234, "email" => "chandan@gmail.com");
		foreach ($students as $stu_info) {
			echo $stu_info;
	}
	*/

	//what is exception?
	//exception: it is unexpected program that can be handle by the program it self.
	//1. seperation of error handling code from normal code
	//2. grouping of error code.
	//3. throwable is a it self of a class : 1. Error class 2. Exception class.

	//example:
	//$d = fopen('a.txt', 'read');
	/*
	if(!file_exists('a.txt')){
		die("file not found");
	}else{
		echo "Hello";
	}
	*/
	//class error : error is a reserved keyword in php7.
	//class is handle to error exception including fatal error and type error
	//1. arithmatic error
	//2. type error
	//3. parse error
	//4. assertion error
	//set_error_handle(); //error handle function

	//
	// function myfunction($p1, $p2){
	// 	//echo "Helllo";
	// 	echo $p1;
	// 	echo $p2;
	// }
	// set_error_handler("myfunction");
	// echo 500/0;
	// echo 500/2;

	//error_reporting: is a php reporting function 
	//1. E_WARNING: displays warning msg only does't hold the excecution of script.
	//values: 2
	//2. E_NOTICE: displays notice that can occur normaly excecution of the program.
	//values: 8
	//3. E_ALL: displays all error and warning
	//values: 8191
	//4. E_USER_ERROR: 
	//values: 256
	//5. E_ERRO_WARNING: 
	//values: 
	//6. E_ERROR_NOTICE: display 
	//values: 
	//7. E_RECOVERABLE_ERROR: displays error that are not fatal.
	//values: 

	//getMessage: displays exception message.
	//getCode: displays the numeric code that reprecent the error code.
	//getFile: displays the file name and path.
	//get_line: displays the line number of the exception.
	//get_Tress: array of the backtress.
	//get_previous: displays previous exception before the current exception.

	//eg: catch(Exceprion $e){
		
	//E_WARNING


	// function show($p1,$p2){
	// 	echo $p1;
	// 	echo $p2;
	// }
	// set_error_handler("show");
	// echo $m;


	// $x = 10;
	// if($x<=10){
	// 	trigger_error("Value is equal to 10");
	// }

	// $x = 20;
	// if($x>=10){
	// 	trigger_error("Value is equal to 10");
	// }


	// function show($p1,$p2){
	// 	echo $p1;
	// 	echo $p2;
	// }
	// set_error_handler("show", E_USER_WARNING);
	// echo $m;



	/*
	////30/03/2019////////////=====================
	Left outer join : return all the records from the left table and match records from the right table.
	Right outer join : return all the records from the right table and match records from the left table.
	Full outer join : returns all records when there is a match in either left and right table.
	Self Join : //SELECT a.id,a.name AS a1,b.details AS b2 FROM products a, description b where a.id = b.id (SELECT a.id,a.name,b.salary FROM customer a, customer b WHERE a.salary<b.salary)
	Regular Join : 

	eg:
	//Inner Join

		<div>
		<table border="1">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Company</th>
				<th>Amout</th>
				<th>Details</th>
			</tr>
			<?php

				//$select = $con->prepare('SELECT products.id,products.name,products.company,descrption.details FROM products INNER JOIN descrption on product.id = descrption.id');

				$select = $con->prepare('SELECT products.id,products.name,products.company,descrption.details,price.amount FROM((products inner join descrption on products.id = descrption.id) inner join price on products.id = price.p_id)');
				$select->setFetchMode(PDO::FETCH_ASSOC);
				$select->execute();
				if($select->rowCount() > 0){
					while($row = $select->fetch()){
						extract($row);
					
			?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['company']; ?></td>
						<td><?php echo $row['amount']; ?></td>
						<td><?php echo $row['details']; ?></td>
					</tr>

			<?php }} ?>

			</table>
		</div>


	*/
		
	/*

	// 01.04.2019 ///////////////////////////////////////


	/*
	// namespace allows to place a bunch of code under a name so that no naming conflict with classes functions and constants arishes.

	namespace second;
	include("fns.php");
	include("sns.php");

	$obj = new A();
	//$obj2 = new second\A(); //it is called qualified class name
	$obj = new \A(); // fully qualified class name
	*/

	/*
	use second\A as NewA;
	include("fns.php");
	include("sns.php");

	$onj3 = new NewA;
	*/

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

	/*
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
	*/



	/* 08/04/2019 */////////////////////////////////// Aggrigation ////////////////////////////////////////////
	/*
	// Aggrigation class
	class Aggrigation{
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
	} container class
	class Book{
		private $author;
		private $price;
		private $name;
		public function __construct($author,$price,$name){
			$this->author=$author;
			$this->price=$price;
			$this->name=$name;
		}
		public function getAuthor(){
			return $this->author;
		}
		public function getPrice(){
			return $this->price;
		}
		public function getName(){
			return $this->name;
		}
		
	}

	$obj = new Aggrigation('Chandan','chandankumar@gmail.com');
	echo $obj->getName();
	echo "<br>";
	echo $obj->getEmail();
	echo "<br>";
	echo "<hr>";

	$obj2 = new Book($obj,100,"Book Name");
	echo $obj2->getAuthor()->getName();
	echo "<br>";
	echo $obj2->getAuthor()->getEmail();
	echo "<br>";
	echo $obj2->getPrice();
	echo "<br>";
	echo $obj2->getName();
	*/

	/*
	//Composition
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
	*/

	//compostion:
	//compostion is the way in which an object creates another object
	//parse cannot exist outside the things 

	//aggrigation:
	//aggrigation is a way when an obj 
	//things can exist theire own as uniq identity
	//when we do not have the base type but need to override it's behavior while retaining polimorphysm
	//aggrigation is used when a container class has many aggrigate class that are them selfs fully indivisual class. the aggrigate class are not dependent on a container class.
	//eg: class Car{ which has four(4) para } each para beings instanciation on the property class

	//container class contain aggr classes that are fully independent and exist there out side the class
	//composiotion : container class is composed of other class.
	//a component class is not independent intity but exist solely inside the container class

	//eg:
	//login all queries send to the pdo class php.

	/*
	class Login extends PDO{
		public function query($sql){
			$this->logger->log($sql);
			return parent::query($sql);
		}
	}
	$obj = new Login;
	echo $obj->query();

	//set : 
	//__set is used to create a new property from the outside of the class and value can be set on the property created.
	//get : 
	//__get the value of the overloaded pro with __get function can be optain from out side of the class.

	*/
////IMP//////////******************************************************
	//property overloading with using get and set
	/*
	class over{
		private $data = array();
		public function __set($name,$value){
			$this->data[$name] = $value;
			echo "Setting '$name' property to '$value'";
			echo "<br>";
		}
		public function __get($name){
			echo "Getting '$name' property with value";
			if(array_key_exists($name, $this->data)){
				return $this->data[$name];
			}
		}
	}
	$obj = new over();
	$obj->a="Hello";
	echo $obj->a;
	*/

/*
1) Constructor Overloading: Constructor overloading is that in which a Constructor has a same name and has multiple Functions, then it is called as Constructor Overloading. ...
2) Operator Overloading: As we know that Operators are used for Performing Operations on the Operands.
*/


	/*
	abstract class Mobile{
		protected $model_no;
		private $color;
		public function set_model($model){
			$this->model_no=$model;
		}
		public function get_model(){
			return $this->model_no;
		}
		public function set_color($color){
			$this->color=$color;
		}
		public function get_color(){
			return $this->color;
		}
		public abstract function calling();
	}
	class Samsung extends Mobile{
		public function calling(){
			echo "Samsung Mobile";
		}
	}

	$obj = new Samsung();
	echo "<h3>Mobile:</h3>";
	$obj->set_model("Galaxy A6");
	echo "Model:".' '.$obj->get_model();
	echo "<br>";
	$obj->set_color("Silver");
	echo "Color:".' '.$obj->get_color();
	*/








	//////////////////////////////////////////////////////////////////////////////////////////////////
	      /////////////???????????????????? MVC TIER-II ?????????????????????/////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////// 






?>