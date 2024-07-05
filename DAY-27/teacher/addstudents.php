<?php
	   include '../config.php';
	   session_start();	
	   // session_destroy(); 
	   $id=$_SESSION['tid'];
	   $qry_teacher=mysqli_query($conn,"SELECT * FROM teacher WHERE tech_id='$id'");
	   $row_teacher=mysqli_fetch_assoc($qry_teacher);
	   date_default_timezone_set('ASIA/KOLKATA');
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$fathername=$_POST['ftname'];
		$mothername=$_POST['mtname'];
		$class=$_POST['class'];
		$phno=$_POST['phone'];
		$studentimage=$_FILES['studentimage'];
		$address=$_POST['address'];
		
		//FILE UPLOADTION[for image]
		$fname=$studentimage['name'];
		$tmp_name=$studentimage['tmp_name'];
		$path="../images/".$fname; //change here
		move_uploaded_file($tmp_name,$path);//change here
		$created_at=date('Y-m-d H:i:s');
		$ip_address=$_SERVER['REMOTE_ADDR'];

		// 	stu_id	stu_name	fathername	mothername	class	image	phone	address	is_deleted	ip_address	created_at	updated_at	
	

		$qry=mysqli_query($conn,"INSERT INTO student(stu_name,fathername,mothername,class,phone,image,ip_address,address,created_at) VALUES('$name','$fathername','$mothername','$class','$phno','$fname','$ip_address','$address','$created_at')");
			if($qry){
				echo" Data Inserted";
			}
			else{
				echo "Data not Inserted";
			}
		}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>SMS</title>
</head>
<body>
	<div class="indexmain">
		<div class="indexleft">
			<img src="../images/<?php echo $row_teacher['image'] ?>">
			<h3><?php echo $row_teacher['name'] ?></h3>
			<h5><?php echo $row_teacher['qualification'] ?></h5>
			<ul>
				<li><a href="teacherindex.php">Dashboard</a></li>
				<!-- <li><a href="addteacher.php">Add Teacher</a></li> -->
				<!-- <li><a href="viewlist.php">View Teacher</a></li> -->
				<li><a href="addstudents.php">Add Student</a></li>
				<li><a href="viewstudents.php">View Student</a></li>
				<li><a href="viewresult.php">Result</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		<div class="indexright">
			<div class="indexheader">
				<!-- <p>Welcome! Amarjot Singh</p> -->
				<button class="user"><i class="fa fa-user"></i></button>
				<div class="divp">
					<img style="width:50px;height: 50px;border-radius: 50%;"src="../images/<?php echo $row_teacher['image'] ?>">
					<h3><?php echo $row_teacher['name'] ?></h3>
					<h3><?php echo $row_teacher['qualification'] ?></h3>
					<a href="logout.php">Logout</a>				
				</div>
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
							<input type="text" name="name" placeholder="enter name">
						</div>
						<!--fathername-->
						<div class="input-box">
							<span class="details">Fathername</span>
							<input type="text" name="ftname" placeholder="enter fathername">
						</div>
						<!--mothername-->
						<div class="input-box">
							<span class="details">Mothername</span>
							<input type="text" name="mtname" placeholder="enter mothername">
						</div>
						<!--class-->
						<div class="input-box">
							<span class="details">Class</span>
							<input type="text" name="class" placeholder="enter class">
						</div>
						<!--phone no-->
						<div class="input-box">
							<span class="details">Phone no</span>
							<input type="number" name="phone" placeholder="enter phone no">
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
						</div>
						<!--address-->
					<div class="input-box" style="width: 100%;">
						<span class="details">Enter Address</span>
						<textarea name="address" placeholder="Enter locality, city, state"style="width: 100%;height: 15vh;padding: 10px;"></textarea>
					</div>
					


				  </div>
				  <div class="input-box">
						<input type="submit" value="add new" class="btn" name="submit">
					</div>
				</form>
			</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.user').click(function(){
				$('.divp').css("visibility","visible");
				$('.divp').toggle();
			});
		});
	</script>
</body>
</html>