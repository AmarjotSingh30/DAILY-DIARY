<?php
	//TASK- MAKING A FORM WHICH PRINT EVEN NUMBERS AFTER TAKING TWO INPUTS FROM USER
	if(isset($_POST['even'])){
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		for($i=$num1;$i<=$num2;$i++){
			if($i%2 == 0){
				echo $i."<br>"; 
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
		<h1>EVEN CALCULATOR</h1>
		<input type="number" name="num1" placeholder= "enter num1 "><br><br>
		<input type="number" name="num2" placeholder= "enter num2 "><br><br>
		<input type="submit" name="even">
	</form>
	</center>
</body>
</html>