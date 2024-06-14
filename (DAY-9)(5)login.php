<?php 
	session_start();
	if(isset($_SESSION['login_status'])){
		header('location:profile.php');	
	}
	if(isset($_POST['login'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		if($email == 'amar@gmail.com' && $password="123456"){
			$_SESSION['name']="Amarjot Singh";
			$_SESSION['login_status']=true;
			header('location:profile.php');
		}else{
			echo "<script>alert('Not registered')</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
	<h1>Login Form</h1>
	<form method="POST">
		<input type="email" name="email" placeholder="Enter email..."><br><br>
		<input type="password" name="password" placeholder="Enter password..."><br><br>	
		<input type="submit" name="login" value="Login">
	</form>
	</center>
</body>
</html>