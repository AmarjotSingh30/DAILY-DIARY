<?php
		if(isset($_POST['submit'])){
			$name=$_POST['rd'];
			$city=$_POST['rd1'];
			echo $name." belongs to ".$city."<br>";
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
			width:30%;
			margin: auto;
			border:1px solid black;
		}
	</style>
</head>
<body>
	<center>	
	<form method="POST">
		<h1>NAME AND CITY FORM</h1>
		
		NAMES
		<input type="radio" name="rd" value="rahul">rahul
		<input type="radio" name="rd" value="junior">junior
		<input type="radio" name="rd" value="senior">senior
		<input type="radio" name="rd" value="jerry">jerry
		<input type="radio" name="rd" value="cherry">cherry<br><br>
		CITIES
		<input type="radio" name="rd1" value="chandigarh">chandigarh
		<input type="radio" name="rd1" value="bija">bija
		<input type="radio" name="rd1" value="patiala">patiala
		<input type="radio" name="rd1" value="khanna">khanna
		<input type="radio" name="rd1" value="ludhiana">ludhiana<br><br>
		<input type="submit" name="submit">
	</form>
	</center>
</body>
</html>