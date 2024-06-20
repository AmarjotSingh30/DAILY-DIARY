<?php  
	include 'config.php';
	date_default_timezone_set('ASIA/KOLKATA');
	session_start();
	if(isset($_POST['addcat'])){
		$catname=$_POST['catname'];
		$created_at=date('Y-m-d H:i:s');
		$qry=mysqli_query($conn,"INSERT INTO category(categoryname,created_at) VALUES('$catname','$created_at')");
		if($qry){
			echo "<script>alert('Category added')</script>";
		}
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
/*			line-height: 10vh;*/
			background-color: lightgrey;
			display: flex;
			justify-content: space-between;
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
		.left{
			width:50%;
			height: 100%;
			background-color: lightblue;
			text-align: center;
		}
		.right{
			width:50%;
			height: 100%;
			background-color: black;
		}
		.right table{
			color: black;
			border: 1px solid white;
			background-color: white;
			padding: 10px;
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
			<div class="left">
				<form method="POST">
					<br><br>
					<h1>Add Catgory</h1>
					<br><br>
					<input type="text" name="catname" placeholder="ENTER CATEGORYNAME..."><br><br>
					<input type="submit" name="addcat">
				</form>
			</div>
			<div class="right">
				
				<table border="1" cellpadding="5" cellspacing="5">
				<tr>
					<th>Category Id</th>
					<th>Category Name</th>
					<th>Action</th>
				</tr>
				<?php 
				$qry1=mysqli_query($conn,"SELECT * FROM category");
				while($row1=mysqli_fetch_assoc($qry1)){ ?>
					<tr>

						<td><?php echo $row1['categoryid'] ?></td>
						<td><?php echo $row1['categoryname'] ?></td>
						<td><a href="#">Edit</a> <a href="#">Delete</a></td>
					</tr>
				<?php } ?>



			</table>
			</div>
		</div>
		<div class="footer"> 
			copyright @2024
		</div>
</body>
</html>