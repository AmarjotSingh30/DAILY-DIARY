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

	// //how to create table(DAY-12)(1)
	// $qry="CREATE TABLE employee(id int AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30),class varchar(30)) ";
	// $result=mysqli_query($conn,$qry);
	// if($result){
	// 	echo "table created";
	// }else{
	// 	echo "table not created";
	// }


	// //how to insert data in a table(DAY-12)(3)
	// $qry="INSERT INTO employee VALUES(1,'Bhuvnesh','Btech')";

	$qry="INSERT INTO employee(name,class) VALUES('Karman','Btech')";
	$result=mysqli_query($conn,$qry);
	if($result){
		echo "data inserted";
	}else{
		echo "data not inserted";
	}

	// //how to update data in a table(DAY-12)(2)

	// $qry="UPDATE  employee SET name='Raman',class='BCA' WHERE id=1";
	// $result=mysqli_query($conn,$qry);
	// if($result){
	// 	echo "data updated";
	// }else{
	// 	echo "data not updated";
	// }


	// how to delete row in a table(DAY-12)(4)

	// $qry="DELETE FROM employee WHERE id=1";
	// $result=mysqli_query($conn,$qry);
	// if($result){
	// 	echo "data deleted";
	// }else{
	// 	echo "data not deleted";
	// }

	// how to raed/fetch data in a table(DAY-12)(4)

	$qry="SELECT * FROM employee";
	$result=mysqli_query($conn,$qry);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="10">
		<tr>
			<th>Roll No</th>
			<th>Name</th>
			<th>Class</th>
		</tr>
		<?php  
			while($row=mysqli_fetch_assoc($result)){
		?>
		<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['class'] ?></td>
		</tr>
		<?php } ?>	
	</table>
</body>
</html>