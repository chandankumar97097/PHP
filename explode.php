<?php 

//$a = array("Chandan","Sonu","Bajrangi","Kundan");
//echo $str = implode(',', $a);
$str = "Chandan;Kundan;Ram";
$s = explode(';', $str);
echo "<pre>";
print_r($s);

?>