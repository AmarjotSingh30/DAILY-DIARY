<?php
	$work="one";
	switch($work){
		case "one":
			echo "1 is working<br>";
			break;
		case "two":
			echo "2 is working";
			break;
		case "three":
			echo "3 is working";
			break;
		default:
			echo "wrong information";
	}

	//task grade marking
	$eng=80;
	$hin=90;
	$pun=50;
	$che=30;
	$ss=40;
	$total=$eng+$hin+$pun+$che+$ss;
	$per=$total/5;
	echo"THE TOTAL MARKS ARE:".$total."<br>";
	echo"THE TOTAL PERCENTAGE ARE:".$per."<br>";
	switch($per){
		case ($per > 90  && $per <=100):
		          echo"A++";
		          break;

		case ($per >80 && $per <=90):
		         echo"A"; 
		         break;

		case ($per >70 && $per <=80):
		         echo"B++";
		         break;


		case ($per >60 && $per <=70):
		        echo"B";
		        break;

		case ($per >50 && $per <=60):
		        echo"C";
		        break;                                   
	 
	    case ($per >40 && $per <=50):
		        echo"D";
		        break; 

        case ($per >30 && $per <=40):
		        echo"low grade";
		        break;

		case ($per >20 && $per <=30):
		        echo"lowest grade";
		        break;

		case ($per >10 && $per <=20):
		        echo"Fail";
		        break;

		case ($per >0 && $per <=10):
		        echo"fail too";
		        break;                            
	}

	//Looping statements
	//3 types
	//do-while loop
	//while loop
	//for loop

	//do-while loop or post test loop
	$i=1;
	do{
		echo $i." Amarjot Singh<br>";
		$i++;
	}while($i<=10);

	//task
	$i=21;
	do{
		echo "number".$i."<br>";
		$i++;
	}
	while($i<=43);

	//task 2
	$a=70;
	do{
		echo "number".$a."<br>";
		$a--;
	}
	while($a >= 31);

	//while loop or pre test loop
	$q=1;
	while($q<=10){
		echo "Amarjot<br>";
		$q++;
	}
   //self task
	$b=70;
	while($b>=30){
	echo"number".$b."<br>";
	$b--;
	}
	//table making task
     $c=1;
     $tab=45;
     while($c<=10){
     	echo $tab." * ".$c." = ".($c*$tab)."<br>";
     	$c++;
     }

     //self task 
     // $t=1;
     // $m=3;
     // while($t<=10){
     // 	echo($t*$m)."<br>"
     // 	// $
     // }

    //printing even numbers
     $k=100;
     while($k<=131){
     	if($k%2 == 0){
     		echo"number".$k."<br>";
     	}
     	$k++;
     }

     //printing odd numbers
     $j=200;
     while($j>=100){
     	if($j%2!=0){
     		echo"THE VALUE OF J IS :".$j."<br>";
     	}
     	$j--;
     }

     //FACTORIAL NUMBERS
     	$h=5;
     	$fac=1;
     	while($h>=1){
     		$fac*=$h;
          	$h--; //0
     	}
     echo "Factorial is ".$fac."<br>";

     //task
     $n=5;
     $fact=1;     
     do{
     	$fact*=$n;
     	$n--;
     	
     }while($n>=1);
     	echo"the value of n".$fact;

?>