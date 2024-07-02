<?php 
	include '../config.php';
	session_start();	 
	$id=$_SESSION['id'];
	$qry_admin=mysqli_query($conn,"SELECT * FROM admin WHERE id='$id'");
	$row_admin=mysqli_fetch_assoc($qry_admin);
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
				<div class="indexsecinhead">
					<p>Welcome! Amarjot Singh</p>
				</div>
				<div class="indexsecin">
					<div class="indexsecinner">
						<h2>Teachers</h2>
						<i class="fa fa-user"></i>
						<p>Total: 122</p>
					</div>
					<div class="indexsecinner">
						<h2>Students</h2>
						<i class="fa fa-users"></i>
						<p>Total: 2210</p>
					</div>
					<div class="indexsecinner">
						<h2>Courses</h2>
						<i class="fa fa-list"></i>
						<p>Total: 8</p>
					</div>
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