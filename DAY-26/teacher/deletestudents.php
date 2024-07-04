<?php 
include '../config.php';
	$id=$_GET['delete'];
	//Soft Delete
	$qry=mysqli_query($conn,"UPDATE student SET is_deleted=1 WHERE stu_id='$id'");
	header('location:viewstudents.php');
 ?>