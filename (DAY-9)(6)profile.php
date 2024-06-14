<?php 
//to check whether our session is created
	
	session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<h3>Welcome, <?php echo $_SESSION['name'] ?></h3>
		<a href="logout.php">Logout</a>
</body>
</html>