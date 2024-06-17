<?php 
	session_start();
	if(isset($_POST['login'])){
		$email=$_POST['email'];
	    $password=$_POST['password'];

	    if($email	==	"jerry@123" && $password	==	"2052"){
	    	$_SESSION['name']="jerry";
	    	$_SESSION['login_status']=true;
	    	header('location:PAGE(2).php');

	    }
	     else{
	    	echo "<script>alert('NOT FOUND')</script>";
	    
	   
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
 	<h1>LOGIN HERE</h1>
 	<form method="POST">
 		
 		<label>USERNAME</label>
 		<input type="email" name= "email" placeholder="enter email..."><br><br>
 		<label>PASSWORD</label>
 		<input type="password" name= "password" placeholder="enter password..."><br><br>
 		<input type="submit" name="login">


      </form>
  </center>
 
 </body>
 </html>