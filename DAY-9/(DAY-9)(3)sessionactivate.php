<?php  
	session_start();
	echo "Welcome, ".$_SESSION['Name']."<br>";
	echo "Your password is: ".$_SESSION['Password']."<br>";
?>