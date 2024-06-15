<?php 
	if(isset($_POST['submit'])){
		$name=$_POST['user'];
		setcookie('product',$name,time()+60);

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
 	<form method="POST">
 		<label>USER PAGE</label><br>
 		<input type="text" name="user" placeholder="ENTER ..."><br><br>
 		<input type="submit" name="submit">


 	</form>
 </center>

 
 </body>
 </html>