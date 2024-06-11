<?php
//task 3 creating table 
    $gd=array(90,80,30,40);
    for($i=0;$i<=3;$i++){
    	for($j=1;$j<=10;$j++){
    		echo $gd[$i]*$j."\t";
    	}
    	echo "<br>";
    }
    display();
    display();
    display();


    //task printing even and odd 
    $ab=array(10,21,39,40);
    for($i=0;$i<=3;$i++){
    	if($ab[$i]%2 == 0){
    		echo "even<br>";
    	}else{
    		echo "odd<br>";
    	}
    }

    //task count how many even and odd elements in array
    $bd=array(20,47,23,10);
    $e=$o=0;
    for($i=0;$i<=3;$i++){
    	if($bd[$i]%2==0){
    		$e++;
    	}else{
    		$o++;
    	}
    }
    echo "Even ".$e."<br>";
    echo "Odd ".$o."<br>";
    
  //self task table making
    $hc=array(20,30,40,50);
    for($i=0;$i<=3;$i++){
          for($j=0;$j<=10;$j++){
          	echo$hc[$i]*$j."<br>";
          }
          echo"<br>";
    }
    display();

   //self task printing even and odd numbers
    $th=array(30,31,20,22);
    for($i=0;$i<=3;$i++){
    	if($th[$i]%2==0){
    		echo"even<br>";
    	}
    	else{
    		echo"odd<br>";
    	}
    }

    //string functions
    $str="tom And Jerry";//string also be consider as array index  
    echo strtoupper($str)."<br>";//print string in capital letters	
    echo strtolower($str)."<br>";//print string in small letters	
    echo strrev($str)."<br>";//print string in mirror image or reverse orderprint  	
    echo substr($str,3,3)."<br>";//print string index 3 to 3 chracters
    echo str_replace("j", "o", $str)."<br>";//replace j with o chracter
    echo str_repeat($str,10)."<br>";//repeat the string 10 times	
    echo str_shuffle($str)."<br>";//shuffle string randomly
 	echo strlen($str)."<br>";
 	echo ucwords($str)."<br>";
 	echo lcfirst($str)."<br>";
 	echo ucfirst($str)."<br>";
 	echo str_word_count($str)."<br>";


 	echo "Math Functions<br>";
    echo min(12,-96,65,78,25)."<br>";
    echo max(12,-96,65,78,25)."<br>";
    echo ceil(12.36)."<br>";
    echo floor(12.36)."<br>";
    echo round(12.86)."<br>";
    echo pow(3,3)."<br>";
    echo sqrt(64)."<br>";
    echo rand()."<br>";
    echo random_int(1000,9999)."<br>";
    echo abs(-56)."<br>";



    //Print array through foreach loop
    $arr=[52,63,252,52,'value' => [55,66,22,6],366,34,22,44];
	echo "<pre>";
    print_r($arr);
    // foreach($arr as $r){
    // 	echo $r."<br>";
    // }



    //User-defined functions
    //simple function
    //Parameterized function
    //Return function

    //Simple function
    function display(){
    		echo "PHP<br>";
    }
    display();
    display();
    display();
    display();
    display();
    display();

    //parameterized function

    function add($a,$b){  //formal arguments

    	echo "Addition ".$a+$b."<br>";
    }
    add(45,26);  //actual arguments
    add(455,266);
    add(475,26);
    add(475,296);
    add(456,276);

?>