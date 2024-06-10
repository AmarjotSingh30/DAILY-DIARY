<?php  
	//for loop 
	for($i=1;$i<=10;$i++){
		echo $i." PHP IS INTERSTING<br>";
	}

	//TASK FACTORIAL NUMBERS
	$fact=1;
	for($a=1;$a<=9;$a++){
		$fact*=$a;
	}
	echo "Factorial ".$fact."<br>";

	//Nested loops
	// * * * * *
	// * * * * *
	// * * * * *
	// * * * * *
	// * * * * *

	 for($m=1;$m<=5;$m++){  //for rows(Outer loop)
	 	for($n=1;$n<=5;$n++){  //for columns(Inner loop)
	 		echo " * ";
	 	}
	 	echo "<br>";
	 }


	 //task -triangle rows=7;columns=10
	 for($r=1;$r<=7;$r++){
	 	for($c=1;$c<=10;$c++){
	 		
	 		echo " * ";
	 	}
	 	echo"<br>";
	 }
    
    //task 
	 for($m=1;$m<=5;$m++){//for rows
	 	for($n=1;$n<=$m;$n++){
	 		echo " * ";
	 	}      
	 	echo "<br>";
	 }

	 //task 2
	 for($q=1;$q<=5;$q++){
	 	for($v=$q;$v<=5;$v++){
	 		echo " * ";
	 	}
	 	echo"<br>";
	 }

	 //task 3
	 for($z=1;$z<=5;$z++){
	 	for($x=1;$x<=$z;$x++){
	 		echo $x;//print rows value
	 	}
	 	echo"<br>";
	 }
     
     //task 4
     for($z=1;$z<=5;$z++){
	 	for($x=1;$x<=$z;$x++){
	 		echo $z;//print columns value
	 	}
	 	echo"<br>";
	 }

	 //task 5
	 $z=1;
	 for($d=1;$d<=5;$d++){
	 	for($f=1;$f<=$d;$f++){
	 		echo " ".$z." ";
	 		$z++;
	 	}
           echo "<br>";	 
	 }

	 //task 6
	
	 for($e=1;$e<=10;$e++){
	 	for($h=1;$h<=10;$h++){
	 		echo $e*$h." ";
	 		
	 	}
	 	echo"<br>";
	 }
	 echo "<pre>;
	 	jkj 

	 		nnkjnkjn
	 		 jk
	 	kjjk
	 </pre>";

	 //Array
	 //3 types
	 //Index Array, Associative Array, Multidimensional array
	 //Index Array
	$arr=array(12,63,78.36,"Amarjot",14,'PHP');
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	echo $arr[3];//print data from particular index 


	//self array representation
	$arr=array("jerry",9.9,3,'HELLO');
	echo"<pre>";
	print_r($arr);
	echo"</pre>";
	echo $arr[3];

	//Associative Array
	$assoc=array('name' => 'Amarjot','city' => 'khanna', 'class' => 'Btech');
	echo"<pre>";
	print_r($assoc);
	echo"</pre>";
	echo $assoc['city'];


?>