<?php
	//TASK-MAKE A FORM WHICH PRINT FROM 2 VALUES AND PRINT ACCORDING TO EVEN AND ODD RADIO BUTTONS
	$num1=$num2=null;
	if(isset($_POST['submit'])){
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		$rd=$_POST['rd'];
		if($rd == 'even'){
			for($i=$num1;$i<=$num2;$i++){
				if($i%2 == 0){
					echo $i."<br>"; 
				}
			}
		}else{
			for($i=$num1;$i<=$num2;$i++){
				if($i%2 != 0){
					echo $i."<br>"; 
				}
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		form{
			width:20%;
			margin: auto;
			border:1px solid black;
		}
	</style>
</head>
<body>
	<center>	
	<form method="POST">
		<h1>EVEN AND ODD CALCULATOR</h1>
		<input type="number" name="num1" placeholder= "enter num1 " value="<?php 	echo $num1 ?>"><br><br>
		<input type="number" name="num2" placeholder= "enter num2 " value="<?php 	echo $num2 ?>"><br><br>
		<input type="radio" name="rd" value="even">Even
		<input type="radio" name="rd" value="odd">Odd<br><br>
		<input type="submit" name="submit">
	</form>
	</center>
</body>
</html>