<?php  
	include 'config.php';
  	  $edit=$_GET['edit'];
  	  $qry=mysqli_query($conn,"SELECT * FROM books WHERE bookid=$edit");
	  $row=mysqli_fetch_assoc($qry);

	  //for updating the bookdata
		if(isset($_POST['update'])){
		$bookname=$_POST['bookname'];
		$bookauthor=$_POST['bookauthor'];
		$bookprice=$_POST['bookprice'];
		$bookrating=$_POST['bookrating'];
		$category=$_POST['category'];
		$bookdescription=$_POST['bookdescription'];
		$created_at=date('Y-m-d H:i:s');
		$bookimage=$_FILES['bookimage'];
		$name=$bookimage['name'];
		if(empty($name)){
			$qry="UPDATE books SET bookname='$bookname',bookdescription='$bookdescription',bookprice='$bookprice',bookrating='$bookrating',bookauthor='$bookauthor',created_at='$created_at',category='$category' WHERE bookid='$edit'"; 		

		}else{
			$tmp_name=$bookimage['tmp_name'];
			$path="images/".$name;
			move_uploaded_file($tmp_name, $path);
			$qry="UPDATE books SET bookname='$bookname',bookdescription='$bookdescription',bookprice='$bookprice',bookimage='$name',bookrating='$bookrating',bookauthor='$bookauthor',created_at='$created_at',category='$category' WHERE bookid='$edit'"; 		
		}
		$result=mysqli_query($conn,$qry);
		if($result){
			echo "<script>alert('one record updated')
				window.location.href='booklist.php';
			</script>";
		}
		else{
			echo "<script>alert('record not updated')</script>";
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
		<div class="mid">
		<center>
	<!-- books(bookid,bookname,bookdescription,bookprice,bookrating,bookimage,bookauthor,is_deleted,created_at,deleted_at,category) -->

		<form method="POST" enctype="multipart/form-data">
			<input type="text" name="bookname" value="<?php echo $row['bookname'] ?>"><br><br>	
			<input type="text" name="bookauthor" value="<?php echo $row['bookauthor'] ?>"><br><br>	
			<input type="number" name="bookprice" value="<?php echo $row['bookprice'] ?>"><br><br>
			<input type="number" name="bookrating" value="<?php echo $row['bookrating'] ?>"><br><br>
			<select name="category">
				<option value="Horror" required
				<?php  
					if($row['category'] == 'Horror'){
						echo "selected=selected";
					}
				?>
				>Horror</option>
				<option value="Comic" required
				<?php  
					if($row['category'] == 'Comic'){
						echo "selected=selected";
					}
				?>>Comic</option>
				<option value="IT" required
				<?php  
					if($row['category'] == 'IT'){
						echo "selected=selected";
					}
				?>>IT</option>
			</select><br><br>
			 <input type="File" name="bookimage"><br><br>
			<img  style="width: 70px;height: 100px;" src="images/<?php echo $row['bookimage'] ?>">
			<textarea name="bookdescription"><?php echo $row['bookdescription']?> </textarea><br><br>
			<input type="submit" class="btn" name="update" value="update">
		</form>
		</center>
		</div>
		<div class="footer"> 
			copyright @2024
		</div>
</body>
</html>