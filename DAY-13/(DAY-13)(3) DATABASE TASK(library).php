<?php 
	//establishing connection
	$server="localhost";
	$username="root";
	$password="";
	$database="library";
	$conn=mysqli_connect($server,$username,$password,$database);
	if($conn){
		echo "connection established<br>";
	}
	else{
		echo "connection not established";
	}

	//creating a database[library]
	// $qry="CREATE DATABASE Library";
	// $result=mysqli_query($conn,$qry);
	// if($result){
	// 	echo "database created";
	// }
	// else{
	// 	echo "database not created";
	// }

	//creating a table[admin] in database[library]
	// $qry="CREATE TABLE admin(id int AUTO_INCREMENT PRIMARY KEY,username varchar(30),email varchar(20),password varchar(10),designation varchar(10),created_at DATETIME,update_at DATETIME)";
	$qry="CREATE TABLE books(bookid int AUTO_INCREMENT PRIMARY KEY,bookname varchar(10),bookdescription varchar(20),bookprice varchar(5),bookrating varchar(10), bookauthor varchar(10),is_deleted DATETIME,created_at DATETIME,deleted_at DATETIME,category varchar(10))";
	$result=mysqli_query($conn,$qry);
	if($result){
		echo "table created";
	}
	else{
		echo "table not created";
	}

	
 ?>