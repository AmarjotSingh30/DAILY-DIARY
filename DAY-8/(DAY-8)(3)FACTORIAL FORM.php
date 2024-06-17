<?php
	if(isset($_POST['submit'])){
		$num1=$_POST['num1'];
		$fact=1;
		for($i=1;$i<=$num1;$i++){
				$fact*=$i;
		}
		echo "THE FACTORIAL OF ".$fact."<br>";
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
		<h1>FACTORIAL FORM</h1>
		<input type="number" name="num1" placeholder= "enter num1 " value="<?php 	echo $num1 ?>"><br><br>
	      <input type="submit" name="submit">
	</form>
	</center>
</body>
</html>