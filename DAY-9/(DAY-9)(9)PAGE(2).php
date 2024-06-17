<?php

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
	<h1>WELCOME,<?php echo $_SESSION['name']?></h1><br>
	<a href="PAGE(3).php">LOGOUT</a>

</body>
</html>