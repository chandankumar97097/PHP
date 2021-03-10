<?php

//Array merge 
//eg => 1
// $a = [1,2,3,4];
// $b = [5,6,7,8,9,10,11,12,13,14,15,90];
// $c = array_merge($a,$b);
// echo "<pre>";
// print_r($c);

//eg => 2
// $a = [1,2,3,4];
// $b = ["One","Two","Three","Four"];
// $c = array_merge($a,$b);
// echo "<pre>";
// print_r($c);


//Array combine
$a = [1,2,3,4];
$b = ["One","Two","Three","Four"];
$c = array_combine($a,$b);
echo "<pre>";
print_r($c);

?>