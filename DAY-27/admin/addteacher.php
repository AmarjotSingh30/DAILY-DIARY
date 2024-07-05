<?php
include '../config.php';
session_start();	 
	$id=$_SESSION['id'];
	$qry_admin=mysqli_query($conn,"SELECT * FROM admin WHERE id='$id'");
	$row_admin=mysqli_fetch_assoc($qry_admin);
//session_start();	
date_default_timezone_set('ASIA/KOLKATA');
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$qualification=$_POST['qualification'];
		$subject=$_POST['subjects'];
		$teacherimage=$_FILES['teacherimage'];
		$address=$_POST['address'];
		
		//FILE UPLOADTION[for image]
		$fname=$teacherimage['name'];
		$tmp_name=$teacherimage['tmp_name'];
		$path="../images/".$fname; //change here
		move_uploaded_file($tmp_name,$path);//change here
		$created_at=date('Y-m-d H:i:s');
		$ip_address=$_SERVER['REMOTE_ADDR'];

		// tech_id	name	email	password	subject	qualification	image	address	ip_address	is_deleted	created_at	updated_at	

		$qry=mysqli_query($conn,"INSERT INTO teacher(name,email,password,qualification,subject,image,ip_address,address,created_at) VALUES('$name','$email','$password','$qualification','$subject','$fname','$ip_address','$address','$created_at')");
			if($qry){
				echo" hello";
			}
			else{
				echo "Bye";
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
			<img src="../images/<?php echo $row_admin['image'] ?>">
			<h3><?php echo $row_admin['name'] ?></h3>
			<h5><?php echo $row_admin['designation'] ?></h5>
			<ul>
				<li><a href="index.php">Dashboard</a></li>
				<li><a href="addteacher.php">Add Teacher</a></li>
				<li><a href="viewlist.php">View Teacher</a></li>
				<li><a href="addstudents.php">Add Student</a></li>
				<li><a href="viewstudents.php">View Student</a></li>
				<li><a href="viewresult.php">Result</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		<div class="indexright">
			<div class="indexheader">
				<button class="user"><i class="fa fa-user"></i></button>
				<div class="divp">
					<img style="width:50px;height: 50px;border-radius: 50%;"src="../images/<?php echo $row_admin['image'] ?>">	
					<h3><?php echo $row_admin['name'] ?></h3>
					<h3><?php echo $row_admin['designation'] ?></h3>
					<a href="logout.php">Logout</a>				
				</div>
			</div>
			<div class="indexsection">
				<!-- teacher form -->
				<div class="container">
				<div class="title">Create New

				</div>
				<form action="#" method="POST" enctype="multipart/form-data">
					<div class="user-details">
						<div class="input-box">
							<span class="details">Name</span>
							<input type="text" name="name" placeholder="enter name">
						</div>
						<div class="input-box">
							<span class="details">Email</span>
							<input type="email" name="email" placeholder="enter email">
						</div>
						<div class="input-box">
							<span class="details">Password</span>
							<input type="password" name="password" placeholder="enter password">
						</div>
						<div class="input-box">
							<span class="details">confirm password</span>
							<input type="text" name="renter" placeholder="re-enter password">
						</div>
						<div class="input-box">
							<span class="details">Qualification</span>
							<input type="text" name="qualification" placeholder="enter qualification">
						</div><br><br>
						<div class="input-box">
							<span class="details">subjects</span>
							<select name="subjects" >
								<option>physics</option>
								<option>chemistry</option>
								<option>math</option>
								<option>computerscience</option>
								<option>english</option>
							</select>
						</div>
						<div class="input-box">
						<input type="file" name="teacherimage">
						</div>
					<div class="input-box">
						<textarea name="address" rows="0"></textarea>
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