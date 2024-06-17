<?php 
	//FILE HANDLING 
 	$data="Rahul Kumar";
 	file_put_contents('file.txt', $data)."<br>";
 	echo file_get_contents('file.txt');
 	echo "<br>Data inserted in a file<br>";


 	//TASK TO STORE THE TABLE IN A FILE
 	$a=2;
 	$b=1;
 
 	for($b=1;$b<=10;$b++){
 		$data.=$a." * ".$b." = ".$a*$b."\n";
 		file_put_contents('table.txt',$data);
 	}

 	//task to store factorial in a file
 	$c=5;
 	$fact=1;
 	for($c=1;$c<=5;$c++){
 		$fact*=$c;


 	}
 		file_put_contents('factorial.txt',$fact);
 	
 	// echo"the factorial of".$fact;
 	
 	 ?>