<?php  
	include 'config.php';
	session_start();
	$qry="SELECT * FROM books";
	$result=mysqli_query($conn,$qry);

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
		table{
			text-align:center;

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
					<li><a href="add.php">Add Books</a></li>
					<li><a href="booklist.php">Book List</a></li>
					<li><a href="category.php">Category</a></li>
					<li><a href="Logout.php">Logout</a></li>
				</ul>
			</nav>
		</div>
		<div class="mid">
			<center>
			<table border="1" cellpadding="5" cellspacing="5">
				<tr>
					<th>Book Id</th>
					<th>Book Image</th>
					<th>Book Name</th>
					<th>Book Description</th>
					<th>Book Price</th>
					<th>Book Rating</th>
					<th>Book Author</th>
				</tr>
				<?php while($row=mysqli_fetch_assoc($result)){ ?>
					<tr>

						<td><?php echo $row ['bookid'] ?></td>
						<td><img src="../images/<?php echo $row['bookimage'] ?>"></td>
						<td><?php echo $row ['bookname'] ?></td>
						<td><?php echo $row ['bookdescription'] ?></td>
						<td><?php echo $row ['bookprice'] ?></td>
						<td><?php echo $row ['bookrating'] ?></td>
						<td><?php echo $row ['bookauthor'] ?></td>
					</tr>
				<?php } ?>



			</table>
		</center>
			
		</div>
		<div class="footer"> 
			copyright @2024
		</div>
</body>
</html>