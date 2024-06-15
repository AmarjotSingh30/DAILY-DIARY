<?php 
	$nameERR='*'; 
	if(isset($_POST['register'])){
		$username=$_POST['username'];
		if(empty($username)){
			$nameERR="Required";
		}
		else if(strlen($firstname)<3){
			$nameERR=' Invalid name';
		}
		
		// else if(preg_match('[0-9]', $username)){
		// 	$nameERR=' Digits are not allowed';
		// }
		else{
			echo "Name: ".$username."<br>";
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
		span{
			color: red;
		}
	</style>
</head>
<body>
	<form  method="POST">
		<input type="text" name="username" placeholder="Enter username..."><span><?php echo $nameERR;  ?></span><br><br>
		<input type="submit" name="register">
	</form>
</body>
</html>