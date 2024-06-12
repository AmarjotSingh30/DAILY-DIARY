<?php
	  if(isset($_POST['submit'])){
	 	$num=$_POST['table'];
	 	for($i=1;$i<=10;$i++){
	 		echo  $num." * ".$i." = ".$i*$num."<br>";
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
		<h1>TABLE MAKER</h1>
		<input type="number" name="table" placeholder="enter number for table.."><br><br>
		<input type="submit" name="submit">
	</form>
	</center>
</body>
</html>