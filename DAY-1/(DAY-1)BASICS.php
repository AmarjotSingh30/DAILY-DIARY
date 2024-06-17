<?php
    //how to print in php (echo) use for printing
   echo"PHP IS INTERSTING<br>";

   //VARIABLES
   $a=10;
   echo"the value of a:".$a."<br>";

   //. is used to print both string and values on same line 
   $c=100;
   echo"the value of c is ".$c."<br>";
   

   //operators
  //1) Arithemetic operators(+,-,*,/,%)
   $p=100;
   $q=200;
   echo" Addition:".$p+$q."<br>";
   echo"subtraction:".$p-$q."<br>";
   echo"Multiplication:".$p*$q."<br>";
   echo"division:".$p/$q."<br>";
   echo"modulus:".$p%$q."<br>";

	//comparison (relational)operators(<,>,<=,>=,/=)
    $r=1000;
    $y=10;
     echo $r<$y;//print nothing(0) becuase statement is false
     echo ($r>$y)."<br>"; //print 1 because statement is true withut brackets it did not work  
     echo($r<=$y)."<br>";//print nothing cause statement is false
     echo($r>=$y)."<br>";// print 1 
     echo ($r!=$y)."<br>";// print 1 cause its true

     //logical operators (&&,||) && will print if both statements is true and || will print if one them is true and other is false
     $j=2000;
     $o=900;
     echo ($j>$o)&&($j==2000)."<br>";//printing 1 cause its true

	//INCREMENT AND DECREMENT OPERATORS(++,--)
     $w=10000;
     $l=980;
     $w++;
     echo "the value of w is ".$w."<br>";//prints correctly
     $l--;
     echo"the value of l is ".$l."<br>";//yups properly working

     //assignment operator(=,+=,-=,*=,/=,%=)
     $z=200;
     $k=2000;
     //$z%=$k; z= 200
     //$z/=$k;z=0.1
     //$z*=$k; z=400000 k = 2000
     //$z-=$k;printing value z is 1800 and k is 2000
     //$z+=$k;printing value z is 2200 and k is 2000
     echo"the value of z ".$z."<br>the value of k  ".$k."<br>";

     //ternary operator basically horizontal if else
     $i=210;
     $n=650;
     //echo($i==210)?"true":"false";printing true
     //echo($i==100)?"true":"false";printing false
		
    //var_dump() used to check what type of value a variable holds
     $h=30.9;
     //var_dump($h); printing float(30.0)


?>