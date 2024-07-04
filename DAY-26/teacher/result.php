<?php
	include '../config.php';
	//session_start();	
	$id=$_GET['result'];
	date_default_timezone_set('ASIA/KOLKATA');
	if(isset($_POST['submit'])){
			$physics=$_POST['physics'];
			$chemistry=$_POST['chemistry'];
			$mathematics=$_POST['mathematics'];
			$english=$_POST['english'];
			$computer=$_POST['computer'];
			// physics	chemistry	maths	english	computer
			$qry=mysqli_query($conn,"INSERT into result(stu_id,physics,chemistry,maths,english,computer) VALUES('$id','$physics','$chemistry','$mathematics','$english','$computer')");
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
			<img src="../images/img1.jpg">
			<h3>Admin</h3>
			<h5>Web Developer</h5>
			<ul>
				<li><a href="index.php">Dashboard</a></li>
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
					<img src="../images/img1.jpg" style="width:50px;height: 50px;border-radius: 50%;">
					<h3>Amarjot</h3>
					<h3>Amarjot123@gmail.com</h3>
					<a href="logout.php">Logout</a>				
				</div>
			</div>
			<div class="indexsection">
				<!-- Student form -->
				<div class="container">
				<div class="title">Add Result

				</div>
				<!-- physics	chemistry	maths	english	computer	 -->

				<form action="#" method="POST">
					<div class="user-details">
						<!--NAME-->
						<div class="input-box">
							<span class="details">Physics</span>
							<input type="number" name="physics" placeholder="Enter Marks For Physics">
						</div>
						<!--fathername-->
						<div class="input-box">
							<span class="details">Chemistry</span>
							<input type="number" name="chemistry" placeholder="Enter Marks for Chemistry">
						</div>
						<!--mothername-->
						<div class="input-box">
							<span class="details">Mathematics</span>
							<input type="number" name="mathematics" placeholder="Enter Marks for Mathematics">
						</div>
						<!--class-->
						<div class="input-box">
							<span class="details">English</span>
							<input type="number" name="english" placeholder="Enter Marks for English">
						</div>
						<!--phone no-->
						<div class="input-box">
							<span class="details">Computer</span>
							<input type="number" name="computer" placeholder="Enter Marks for Computer">
						</div><br><br>
				  </div>
				  <div class="input-box">
						<input type="submit" value="add result" class="btn" name="submit">
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