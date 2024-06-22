<?php  
	include 'config.php';
	$id=$_GET['delete'];
	//Soft Delete
	$qry=mysqli_query($conn,"UPDATE books SET is_deleted=1 WHERE bookid='$id'");
	header('location:booklist.php');
?>