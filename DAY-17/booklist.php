<?php  
	include 'config.php';
	session_start();
	//for delete from deletebooks php 
	if(isset($_POST['search'])){
			$s=$_POST['searchbox'];
			$qry=mysqli_query($conn,"SELECT * FROM books WHERE bookname LIKE '%".$s."%'");
	}else{
			$qry=mysqli_query($conn,"SELECT * FROM books WHERE is_deleted=0");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>LMS</title>
	<style>
		.formsearch{
			width: 30%;
			height: 20vh;
/*			border:1px solid black;*/
			margin: auto;
			display: flex;
			justify-content: center;
		}
		.formsearch input{
			width: 30%;
		}
	</style>	
</head>
<body>
		<?php include 'header.php'; ?>
		<div class="mid">
			
			<center>
			<form method="POST" class="formsearch">
				<input type="text" name="searchbox" placeholder="search...">
				<input type="submit" class="btn" name="search" value="Search">
			</form>
			<table border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th>Book Id</th>
					<th>Book Image</th>
					<th>Book Name</th>
					<th>Book Description</th>
					<th>Book Price</th>
					<th>Book Rating</th>
					<th>Book Author</th>
					<th>Category</th>
					<th>Action</th>
				</tr>
				<?php 
				$sr=1;
					while($row=mysqli_fetch_assoc($qry)){//changed here for search box 
				?>
					<tr>
						<td><?php echo $sr++ ?></td>
						<td style="width:90px;height: 70px;"><img style="width:100%;height: 100%;border-radius: 50%;" src="images/<?php echo $row['bookimage'] ?>"></td>
						<td><?php echo $row ['bookname'] ?></td>
						<td><?php echo $row ['bookdescription'] ?></td>
						<td>$<?php echo $row ['bookprice'] ?></td>
						<td><?php echo $row ['bookrating'] ?></td>
						<td><?php echo $row ['bookauthor'] ?></td>
						<td><?php echo $row ['category'] ?></td>
						<td><a href="editbook.php?edit=<?php echo $row['bookid'] ?>">Edit</a>  <a href="deletebook.php?delete=<?php echo $row['bookid'] ?>">Delete</a></td>
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