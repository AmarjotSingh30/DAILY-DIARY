<?php
	//POST METHOD
	if(isset($_POST['login'])){
		$name=$_POST['NAME'];
		$email=$_POST['EMAIL'];
		$city=$_POST['CITY'];
		$password=$_POST['PASSWORD'];
		$gender=$_POST['gender'];
		$age=$_POST['AGE'];
		$contact=$_POST['contact'];
		echo "Welcome user: ".$name."<br>";
		echo "Email: ".$email."<br>";
		echo "City: ".$city."<br>";
		echo "Password: ".$password."<br>";
		echo "Gender: ".$gender."<br>";
		echo "Age: ".$age."<br>";
		echo "Contact: ".$contact."<br>";

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
		<h1>LOGIN FORM</h1>
		<input type="text" name="NAME" placeholder="Enter name.."><br><br>
		<input type="email" name="EMAIL" placeholder="Enter email.."><br><br>
		<label>City</label>
		<select name="CITY">
			<option>Khanna</option>
			<option>Patiala</option>
			<option>Ludhiana</option>
		</select><br><br>
		<input type="password" name="PASSWORD" placeholder="Enter password.."><br><br>
		<b>Gender</b><input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female<br><br>
		<input type="number" name="AGE" placeholder="Enter age.."><br><br>
		<input type="number" name="contact" placeholder="Enter contact.."><br><br>
		<input type="submit" name="login" value="Login">
		<br><br>
		<a href="extra page.php?product=empty">login</a>
	</form>
	</center>
</body>
</html>