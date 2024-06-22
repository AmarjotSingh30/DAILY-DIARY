<?php  
	include 'config.php';
	session_start();
	//for delete from deletebooks php 
	$qry="SELECT * FROM books WHERE is_deleted=0";
	$result=mysqli_query($conn,$qry);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>LMS</title>
</head>
<body>
		<?php include 'header.php'; ?>
		<div class="mid">
			<center>
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
					while($row=mysqli_fetch_assoc($result)){ 
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