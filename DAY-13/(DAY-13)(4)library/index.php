<?php  
	include 'config.php';
	session_start();
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
			line-height: 10vh;
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
					<li><a href="addproduct.php">Add Books</a></li>
					<li><a href="booklist.php">Book List</a></li>
					<li><a href="category.php">Category</a></li>
					<li><a href="Logout.php">Logout</a></li>
				</ul>
			</nav>
		</div>
		<div class="mid">
			<img src="../images/CAR.png" width="100%" height="100%">
		</div>
		<div class="footer"> 
			copyright @2024
		</div>
</body>
</html>