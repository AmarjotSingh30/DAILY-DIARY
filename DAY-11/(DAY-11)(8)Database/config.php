<?php  
	// CRUD(CREATE READ UPDATE DELETE)
	$servername="Localhost";
	$username="root";
	$password="";
	$database="student";
	$conn=mysqli_connect($servername,$username,$password,$database);
	if($conn){
		echo "Connection established";
	}else{
		echo "Connection not established";
	}

	// //how to create database
	// $qry="CREATE DATABASE student";
	// $result=mysqli_query($conn,$qry);
	// if($result){
	// 	echo "Database created";
	// }else{
	// 	echo "Database not created";
	// }

	// //how to create table
	// $qry="CREATE TABLE student_details(id int, name VARCHAR(30),class varchar(30)) ";
	// $result=mysqli_query($conn,$qry);
	// if($result){
	// 	echo "table created";
	// }else{
	// 	echo "table not created";
	// }


	//how to insert data in a table
	$qry="INSERT INTO student_details VALUES(2,'Rahul','Btech')";
	$result=mysqli_query($conn,$qry);
	if($result){
		echo "data inserted";
	}else{
		echo "data not inserted";
	}
?>