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
		
		//FILE UPLOADTION[for image]
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
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>LMS</title>
</head>
<body>
		<?php include 'header.php'; ?>
		<div class="mid">
		<center>
	<!-- books(bookid,bookname,bookdescription,bookprice,bookrating,bookimage,bookauthor,is_deleted,created_at,deleted_at,category) -->

		<form method="POST" enctype="multipart/form-data">
			<input type="text" name="bookname" placeholder="Enter Bookname..."><br><br>	
			<input type="text" name="bookauthor" placeholder="Enter Author Name..."><br><br>	
			<input type="number" name="bookprice" placeholder="Enter Book Price..."><br><br>
			<input type="number" name="bookrating" placeholder="Enter Book Rating..."><br><br>
			<select name="category">
				// code for category added from category php page 
				<?php  
					$qry_cat=mysqli_query($conn,"SELECT DISTINCT(categoryname) FROM  category");	
					while($row_cat=mysqli_fetch_assoc($qry_cat)){		
				?>
				<option value="<?php echo $row_cat['categoryname'] ?>"><?php echo $row_cat['categoryname'] ?></option>
				<?php } ?>
			</select><br><br>
			<input type="File" name="bookimage"><br><br>
			<textarea name="bookdescription" rows="20"></textarea><br><br>
			<input type="submit" class="btn" name="addbook" value="Add New">
		</form>
		</center>
		</div>
		<div class="footer"> 
			copyright @2024
		</div>
</body>
</html>