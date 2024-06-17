<?php
	// conditional statements
	//if statement
	// if(2 < 12){
	// 	echo "8 is smaller";
	// }

	//if else statement
	// $x=12;
	// $y=89;
	// if( $x < $y){
	// 	echo "x is smaller<br>";
		
	// }
	// else{
	// 	echo "y is smaller";
	// }
	
	//else if (Ladder if else) statement
	$day ="sugfgfnday";
	if($day == 'monday' || $day == 'tuesday' || $day == 'wednesday' || $day == 'thrusday' || $day == 'friday')
	{
		echo "Weekday<br>";
	}
	else if($day == 'saturday')
	{
		echo "movie day<br>";
	}
	else if($day == 'sunday')
	{
		echo "rest day<br>";
	}
	else{
		echo "invalid information<br>";
	}

	//task 1
	// $a=10;
	// $b=70;
	// if($a==$b){
	// 	echo" variable a and b are equal";
	// }
	// else{
	// 	echo"variable a and b are not equal";
	// }

	//task 2
	//$a=88;
	//if($a%2 == 0){
		//echo"variable a is even";
	//}
	//else{
	//	echo"variable a is odd";
	//}

	//task 3 to check varable is vowel or not
	//$str="i";
	
	//if($str == 'a' || $str == 'e' || $str == 'i' || $str == 'o' || $str == 'u'){
	//	echo"variable 1 is vowel";
    //  }
     // else{
      //	echo"variable 1 is not vowel";
     
    // }

     //task take 5 variable for 5 subjects
     $eng=89;
     $hin=98;
     $pun=91;
     $mat=95;
     $soc=98;
     $total=$eng+$hin+$pun+$mat+$soc;
     $per=$total/5;
     echo "Total marks: ".$total."<br>";
     echo "Percentage : ".$per."<br>";

     if($per > 90  && $per <= 100){
     	echo "Grade A++ ";
     }
     else if($per > 80 && $per<=90){
     	echo"A";
     }
     else if($per > 70 && $per<=80){
     	echo"B+";
     }
     else if ($per > 60 && $per<=70){
     	echo"B";
     }
      else if ($per > 50 && $per<=60){
     	echo"C";
     } 
     else{
     	echo"D";
	 }

     //90 100 A+
     //80 90 A
     //70 80 B+
     //60 70 B
     //50 60 C

	 //task 
	// units
	 // 1 600 amount nil
	 // 601 700 units*3
	 // 701 800 units*4
	 // 801 900 units*5
	 // 901 
	 $units=999;
	 if($units >= 1 && $units <= 600){
	 	echo "Amount is Nil";
	 }
	 else if($units >= 601 && $units <= 700){
	 	echo "Amount ".($units*3)." units";
	 }
	 else if($units >= 701 && $units <= 800){
	 	echo "Amount ".($units*4)." units";
	 }
	 else if($units >= 801 && $units <= 900){
	 	echo "Amount ".($units*5)." units";
	 }else{
	 	echo "Control your consumption";
	 }

	 //Nested if else

	 $a=12;
	 $b=55;
	 $c=89;
	 if($a > $b){
	 	if($a > $c){
	 		echo "A is greatest";
	 	}else{
	 		echo "C is greatest";
	 	}
	 }else{
	 	if($b > $c){
	 		echo "B is greatest";
	 	}else{
	 		echo "C is greatest";
	 	}
	 }

	 //task 
	 $p=10;
	 $q=20;
	 $r=30;
	 if($p<$q){
	 	if($p<$r){
	 		echo"P is smallest";
	 	}
	 	else{
	 		echo"R is smallest";
	 	}
	 }
	 else{
	 	if($q<$r){
	 		echo"Q is smallest";
	 	}
	 	else{
	 		echo"R is smallest";
	 	}
	}
?>