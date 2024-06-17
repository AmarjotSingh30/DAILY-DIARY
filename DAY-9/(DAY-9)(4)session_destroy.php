<?php  
	session_start();
	//session_destroy(); //destroys the file
	//session_unset();  //delete the content of the data
	unset($_SESSION['Name']);
?>