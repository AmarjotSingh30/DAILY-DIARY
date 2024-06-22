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
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>LMS</title>
</head>
<body>
		<?php include 'header.php'; ?>
		<div class="mid1">
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