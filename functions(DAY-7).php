<?php
	//tssk-to create a table making function
  function table($a){
  	for($i=1;$i<=10;$i++){
  		echo $a." * ".$i." = ".$a*$i."<br>";
  	}
  }
  table(5);
  table(78);
  table(12);

  //task-create a function which print even and odd
 	function check($a,$b){
  		for($i=$a;$i<=$b;$i++){
  			if($i%2==0){
  				echo $i."<br>";
  			}
  			// else{
  			// 	echo"VALUE IS ODD";
  	
  			// }
  		}
  	}
  	
 	check(20,63);
 	check(23,45);


 	//Return Function

 	function multi($a,$b,$c){ //Function definition
 		$m=$a*$b*$c;
 		return $m;
 	}
 	echo multi(2,6,3)."<br>"; //Calling function


 	//Super Variables
 	//$GLOBALS
 	$c=12;
 	function mul($a,$b){ //Function definition
 		$m=$a*$b*$GLOBALS['c'];
 		echo "Multiplication : ".$m."<br>";
 	}
 	mul(2,6); //Calling function

 	//$_SERVER
 	echo "<pre>";
 	print_r($_SERVER);
 	echo "</pre>";
 	echo $_SERVER['REMOTE_ADDR']."<br>";
 	echo $_SERVER['SERVER_NAME']."<br>";
 	echo $_SERVER['HTTP_HOST']."<br>";
 	echo $_SERVER['PHP_SELF']."<br>";
 	echo $_SERVER['SCRIPT_NAME']."<br>";
 	echo $_SERVER['REQUEST_METHOD']."<br>";  //GET and POST

	//$_GET Method
	if(isset($_GET['login'])){
		$username=$_GET['username'];
		$password=$_GET['password'];
		echo "Welcome ".$username."<br>";
		echo "Password ".$password."<br>";
	}

	//$_POST Method
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		echo "Welcome ".$username."<br>";
		echo "Password ".$password."<br>";
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
		<h1>Login Form</h1>
		<input type="text" name="username" placeholder="Enter username.."><br><br>
		<input type="password" name="password" placeholder="Enter password.."><br><br>
		<input type="submit" name="login">
		<br><br>
		<a href="fetch.php?product=laptop">Click me</a>
	</form>
	</center>
</body>
</html>