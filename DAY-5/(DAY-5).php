<?php
	//Multidimensional Array
	$md=array(11,22,13.23,'names' => array('amar','rahul' => array('khanna','ludhiana'),'vansh'),78,23.23,"harshal");
	echo "<pre>";
	print_r($md);
	echo "</pre>";
	echo $md['names'][1]."<br>";
	echo $md['names']['rahul'][1];


	// TASK name 
	// city
	// marks
	$md=array('names'=> array('jerry','cherry','nelo'),'city'=>array('chandigarh','patiala','bija'),'marks'=>array(20,50,60));
		echo"<pre>";
		print_r($md);
		// echo"</pre>";
		


	//Array functions
	$af=array(45,23,52,62,52,9,14,99,43,5,66,33);
	$af1=array(32,45,50,8,44,67);
	//printing array with for loop
	for($i=0;$i<count($af);$i++){
		echo $af[$i]."<br>";
	}
	//Array functions start here.
	echo "Count ".count($af)."<br>";
	echo "Sum ".array_sum($af)."<br>";
	array_push($af,66,78,102); //insert at end
	print_r($af);	
	array_pop($af); //remove from end
	print_r($af);	
	array_unshift($af,78); //insert at beggining
	print_r($af);
	array_shift($af); //remove from beggining
	print_r($af);	
	print_r(array_unique($af));
	print_r(array_merge($af,$md));
	print_r(array_diff($af1,$af));

	//Array sorting
	//Ascending or descending order
	$arr=[99,33,66,44,22,77,10,28];
	print_r($arr);
	//Index Array

	sort($arr); // asc to index array
	print_r($arr);
	rsort($arr); //desc to index array
	print_r($arr);

	//assoc Array
	$assoc=array('Name' => 'Amar','city' => 'khanna','Marks' => 89,'hometown' => 'Ludhianna');
	print_r($assoc);

	//acc to values
	asort($assoc);  //asc NCS 	 	
	print_r($assoc);
	arsort($assoc); //desc SCN
	print_r($assoc);

	//acc to keys
	ksort($assoc); //asc NCS
	print_r($assoc);
	krsort($assoc); //desc SCN
	print_r($assoc);


	//self practice on simple array
	$arr1=[50,20,10,30,20];
	print_r($arr1);
	sort($arr1);
	print_r($arr1);

	rsort($arr1);
	print_r($arr1);
    
    //on associative array
    $assoc1=array("Names"=>"pizza","jerry","chesse","colours"=>"RED","BLUE","GREEN","grades"=>"100","90","80");
    print_r($assoc1);
    //sort acc to values
    asort($assoc1);
    print_r($assoc1);
    arsort($assoc1);
    print_r($assoc1);

    //ACCORDING TO KEYS
    Ksort($assoc1);
    print_r($assoc1);
     Krsort($assoc1);
    print_r($assoc1);


    //task add elements of array without using (array)sum function
    $jd=array(20,30,40,50,80,);
    print_r($jd);
    //now add
    $sum=0;
    for($i=0;$i<=4;$i++){
    	$sum+=$jd[$i];
    }
    echo "Total is: ".$sum."<br>";

    //task 2 creating counting array elements without using (array) counting functions
    $count=0;
    $ab=array(90,60,50,20,10);
    print_r($ab);
    //counting program 
    for($i=0;$i<=4;$i++){
     	$count++;
     }
    echo"total number in ab is ".$count."<br>";

    //task 3 creating table 
    $mul=1;
    $gd=array(90,80,30,40);
    for($i=0;$i<=3;$i++){
    	for($j=1;$j<=10;$j++){
    		echo $gd[$i]*$j."\t";
    	}
    	echo "<br>";
    }
    
?>
