<?php  
	include 'config.php';
	session_start();
	date_default_timezone_set('ASIA/KOLKATA');

	if(isset($_POST['addbook'])){
		$bookname=$_POST['bookname'];
		$bookauthor=$_POST['bookauthor'];
		$bookprice=$_POST['bookprice'];
		$bookrating=$_POST['bookrating'];
		$category=$_POST['category'];
		$bookdescription=$_POST['bookdescription'];
		$bookimage=$_FILES['bookimage'];
		
		//FILE UPLOADTION
		$name=$bookimage['name'];
		$tmp_name=$bookimage['tmp_name'];
		$path="images/".$name;
		move_uploaded_file($tmp_name, $path);
		$created_at=date('Y-m-d H:i:s');
		$qry=mysqli_query($conn,"INSERT INTO books(bookname,bookdescription,bookprice,bookrating,bookimage,bookauthor,created_at,category) VALUES('$bookname','$bookdescription','$bookprice','$bookrating','$name','$bookauthor','$created_at','$category')");
			
			


	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{
			padding: 0px;
			margin: 0px;
			box-sizing: border-box;
			font-family: Arial;
			outline: none;
			border: none;
		}
		.topheader{
			width:100%;
			height: 10vh;
			line-height: 10vh;
			background-color: cyan;
			text-align: center;
		}
		.header{
			width:100%;
			height: 6vh;
			line-height: 6vh;
			background-color: black;
		}
		.mid{
			width:100%;
			height: 79vh;
			background-color: lightgrey;
		}
		.header nav{
			width: 60%;
			height: 100%;
			margin: auto;
			display: flex;
			justify-content: center;
		}
		ul li{
			display: inline-block;
			margin-left:30px ;

		}
		.footer{
			width:100%;
			height: 5vh;
			line-height: 5vh;
			background-color: cyan;
			text-align: center;
			font-size: 13px;
			letter-spacing: 1px;
			font-weight: bold;
		}
		a{
			color:white;
			text-decoration: none;
		}
		a:hover{
			color: orange;
		}
		form{
			width: 30%;
			height: auto;
			padding-top: 5%;
/*			border: 1px solid black;*/
		}
		input,select,textarea{
			width: 100%;
			height: 5vh;
			padding: 5px;
			border-radius: 6px;
		}
		.btn{
			color: white;
			background-color: orange;
		}
	</style>
</head>
<body>
		<div class="topheader">
			<h1>Library Management System</h1>
		</div>
		<div class="header">
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="addbooks.php">Add Books</a></li>
					<li><a href="booklist.php">Book List</a></li>
					<li><a href="category.php">Category</a></li>
					<li><a href="Logout.php">Logout</a></li>
				</ul>
			</nav>
		</div>
		<div class="mid">
		<center>
	<!-- books(bookid,bookname,bookdescription,bookprice,bookrating,bookimage,bookauthor,is_deleted,created_at,deleted_at,category) -->

		<form method="POST" enctype="multipart/form-data">
			<input type="text" name="bookname" placeholder="Enter Bookname..."><br><br>	
			<input type="text" name="bookauthor" placeholder="Enter Author Name..."><br><br>	
			<input type="number" name="bookprice" placeholder="Enter Book Price..."><br><br>
			<input type="number" name="bookrating" placeholder="Enter Book Rating..."><br><br>
			<select name="category">
				<option>Horror</option>
				<option>Comic</option>
				<option>IT</option>
			</select><br><br>
			<input type="File" name="bookimage"><br><br>
			<textarea name="bookdescription"></textarea><br><br>
			<input type="submit" class="btn" name="addbook" value="Add New">
		</form>
		</center>
		</div>
		<div class="footer"> 
			copyright @2024
		</div>
</body>
</html>