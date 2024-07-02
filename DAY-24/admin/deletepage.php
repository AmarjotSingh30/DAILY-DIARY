<?php  
	include '../config.php';
	$id=$_GET['delete'];
	//Soft Delete
	$qry=mysqli_query($conn,"UPDATE teacher SET is_deleted=1 WHERE tech_id='$id'");
	header('location:viewlist.php');
?>

 