<?php
       include '../config.php';
 	   $edit=$_GET['edit']; 
  	   $qry=mysqli_query($conn,"SELECT * FROM student WHERE stu_id=$edit");
	   $row=mysqli_fetch_assoc($qry);
      //session_start();

date_default_timezone_set('ASIA/KOLKATA');
	if(isset($_POST['update'])){
	echo	$name=$_POST['name'];
	echo	$fathername=$_POST['ftname'];
	echo	$mothername=$_POST['mtname'];
	echo	$class=$_POST['class'];
	echo	$phno=$_POST['phone'];
	$studentimage=$_FILES['studentimage'];
	echo	$address=$_POST['address'];
	echo	$fname=$studentimage['name'];//change here
	echo	$updated_at=date('Y-m-d H:i:s');

		// 	stu_id	stu_name	fathername	mothername	class	image	phone	address	is_deleted	ip_address	created_at	updated_at	
       if(empty($fname)){
			$qry1="UPDATE student SET name='$name',fathername='$fathername',mothername='$mothername',class='$class',phone='$phno',updated_at='$updated_at' WHERE stu_id='$edit' ";
		}
		else{
			$tmp_name=$studentimage['tmp_name'];
			$path="../images/".$fname;
			move_uploaded_file($tmp_name, $path);
			$qry1="UPDATE student SET name='$name',fathername='$fathername',mothername='$mothername',class='$class',image='$fname',phone='$phno',address='$address',updated_at='$updated_at' WHERE stu_id='$edit' ";
		}

		$result=mysqli_query($conn,$qry1);
		// if($result){
		// 	echo "<script>alert('one record updated')
		// 		window.location.href='viewstudents.php';
		// 	    </script>";
		// }
		// else{
		// 	echo "<script>alert('record not updated')</script>";
		// }
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<title>SMS</title>
</head>
<body>
	<div class="indexmain">
		<div class="indexleft">
			<img src="../images/img1.jpg">
			<h3>Admin</h3>
			<h5>Web Developer</h5>
			<ul>
				<li><a href="index.php">Dashboard</a></li>
				<li><a href="addteacher.php">Add Teacher</a></li>
				<li><a href="viewlist.php">View Teacher</a></li>
				<li><a href="addstudents.php">Add Student</a></li>
				<li><a href="viewstudents.php">View Student</a></li>
				<li><a href="#">Logout</a></li>
			</ul>
		</div>
		<div class="indexright">
			<div class="indexheader">
				<p>Welcome! Amarjot Singh</p>
			</div>
			<div class="indexsection">
				<!-- Student form -->
				<div class="container">
				<div class="title">Create New

				</div>
				<form action="#" method="POST" enctype="multipart/form-data">
					<div class="user-details">
						<!--NAME-->
						<div class="input-box">
							<span class="details">Name</span>
							<input type="text" name="name" placeholder="enter name" value="<?php echo $row['stu_name'] ?>">
						</div>
						<!--fathername-->
						<div class="input-box">
							<span class="details">Fathername</span>
							<input type="text" name="ftname" placeholder="enter fathername" value="<?php echo $row['fathername'] ?>">
						</div>
						<!--mothername-->
						<div class="input-box">
							<span class="details">Mothername</span>
							<input type="text" name="mtname" placeholder="enter mothername" value="<?php echo $row['mothername'] ?>">
						</div>
						<!--class-->
						<div class="input-box">
							<span class="details">Class</span>
							<input type="text" name="class" placeholder="enter class" value="<?php echo $row['class'] ?>">
						</div>
						<!--phone no-->
						<div class="input-box">
							<span class="details">Phone no</span>
							<input type="number" name="phone" placeholder="enter phone no" value="<?php echo $row['phone'] ?>">
						</div><br><br>
						<!-- <div class="input-box">
							<span class="details">subjects</span>
							<select name="subjects" >
								<option>physics</option>
								<option>chemistry</option>
								<option>math</option>
								<option>computerscience</option>
								<option>english</option>
							</select>
						</div> -->
						<!--student image-->
						<div class="input-box">
							<span class="details">Select Image</span>
						<input type="file" name="studentimage">
						<img style="width:100px; height: 100px;text-align: center;" src="../images/<?php echo $row['image'] ?>">
						</div>
						<!--address-->
					<div class="input-box" style="width: 100%;">
						<span class="details">Enter Address</span>
						<textarea name="address" placeholder="Enter locality, city, state"style="width: 100%;height: 15vh;padding: 10px;"><?php echo $row['address'] ?></textarea>
					</div>
					


				  </div>
				  <div class="input-box">
						<input type="submit" value="update" class="btn" name="update">
					</div>
				</form>
			</div>
			</div>
		</div>
	</div>
</body>
</html>