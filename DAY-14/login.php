<?php  
	include 'config.php';
	//session created
	session_start();
	if(isset($_SESSION['login_status'])){
		header('location:index.php');
	}
	//POST METHOD
	if(isset($_POST['login'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$qry=mysqli_query($conn,"SELECT * FROM admin WHERE email='$email' and password= '$password'");
		$row=mysqli_fetch_assoc($qry);
		if(mysqli_num_rows($qry) > 0){
			$_SESSION['id']=$row['id'];
			$_SESSION['login_status']=true;
			header('location:index.php');		
		}
		else{
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
		<h1>Admin Login </h1>
		<form method="POST">
			<label>username:</label>
			<input type="email" name="email" placeholder="ENTER EMAIL...."><br><br>
			<label>password:</label>
			<input type="password" name="password" placeholder="ENTER PASSWORD...."><br><br>	
			<input type="submit" name="login" value="Login">
		</form>
	</center>
</body>
</html>