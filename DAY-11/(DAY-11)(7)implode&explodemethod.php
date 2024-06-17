<?php  
	//implode and explode
	//explode() is used to convert string to array
	$str="Hello How are you";
	echo "<pre>";
	print_r(explode(' ',$str,2));
	echo "</pre>";

	//implode() is used to convert array to string
	$arr=array('Hello','How','are','you');
	echo implode(' ', $arr);
?>