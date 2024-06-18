<?php 
	//ESTABLISHING CONNECTION
	$servername="localhost";
	$username="root";
	$password="";
	$database="TASK";
	$conn=mysqli_connect($servername,$username,$password,$database);
	if(!$conn){
		echo"connection not established";
	}

	//creating a database
	// $qry=" CREATE DATABASE TASK";
	// $result=mysqli_query($conn,$qry);
	// if($result){
	// 	echo"database created";
	// }else{
	// 	echo"database not created";
	// }


	//creating a table
	// $qry="CREATE TABLE product(id int AUTO_INCREMENT PRIMARY KEY,name VARCHAR(30),description varchar(100),price decimal(10,2),category varchar(20),created_at DATETIME)";
	// $result=mysqli_query($conn,$qry);
	// if($result){
	// 	echo"table created";
	// }else{
	// 	echo"table is not created";
	// }


	date_default_timezone_set('ASIA/KOLKATA');
 	if(isset($_POST['submit'])){
 		$name=$_POST['name'];
 		$category=$_POST['category'];
 		$price=$_POST['price'];
 		$description=$_POST['description'];
 		$created_at=date('Y-m-d H:i:s');
 		//adding data to database
        $qry="INSERT INTO product(name,description,price,category,created_at) VALUES('$name','$description','$price','$category','$created_at')";
 		$result=mysqli_query($conn,$qry);
		if($result){
			echo"data  inserted";
		}else{
			echo"data not inserted";
		}
 	}
 ?>

 <!--html-->
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>
 	<center>
 		<h1> TABLE PRODUCT</h1>
 	<form method="POST">
 		<label>NAME</label>
 		<input type="text" name="name" placeholder="ENTER NAME..."><br><br>
 		<label>CATEGORY</label>
 		<select name="category">
 			<option>women</option>
 			<option>men</option>
 			<option>kid</option>
 		</select><br><br>
 		
 		<label>PRICE</label>
 		<input type="number" name="price" placeholder="ENTER PRICE..."><br><br>
 		<textarea name="description" rows="10" cols="50"></textarea><br><br>
 		<input type="submit" name="submit">


 	</form>
 </center>	
 
 </body>
 </html>