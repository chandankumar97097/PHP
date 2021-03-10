<?php

/*
namespace abc{
	class Father{
		public function __construct(){
			echo "My Father Name is Ravi prasad Saha";
		}
	}

	$obj = new Father();
}
*/

namespace MyNamespaceName; 
function hello()  
    { 
        echo 'Hello I am Running from a namespace!'; 
    } 
    
// Resolves to MyNamespaceName\hello 
//hello(); 
  
// Explicitly resolves to MyNamespaceName\hello 
namespace\hello(); 

?>