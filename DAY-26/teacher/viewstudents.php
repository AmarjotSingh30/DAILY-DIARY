<?php
 	 // teacher folder
	include '../config.php';
	session_start();	 
	$id=$_SESSION['tid'];
	$qry_teacher=mysqli_query($conn,"SELECT * FROM teacher WHERE tech_id='$id'");
	$row_teacher=mysqli_fetch_assoc($qry_teacher);
	// //for data to display from database
	$qry=mysqli_query($conn,"SELECT * FROM student");
	$qry=mysqli_query($conn,"SELECT * FROM student WHERE is_deleted=0");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
				<!-- <li><a href="addteacher.php">Add Teacher</a></li>
				<li><a href="viewlist.php">View Teacher</a></li> -->
				<li><a href="addstudents.php">Add Student</a></li>
				<li><a href="viewstudent.php">View Student</a></li>
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
				<table>
  	<!-- student(tech_id,name,email,password,subject,qualification,image,address,ip_address,is_deleted,created_at,updated_at) -->

					<tr>
						<th>Id</th>
						<th>#</th>
						<th>Name</th>
						<th>fathername</th>
						<th>mothername</th>
						<th>class</th>
						<th>phone no</th>
						<th>Action<th>
					</tr>
					<?php 
						while($row=mysqli_fetch_assoc($qry)){
					?>
					<tr>
						<td><?php echo $row['stu_id'] ?></td>
						<td><img src="../images/<?php echo $row['image'] ?>"></td>
						<td><?php echo $row['stu_name'] ?></td>
						<td><?php echo $row['fathername'] ?></td>
						<td><?php echo $row['mothername'] ?></td>
						<td><?php echo $row['class'] ?></td>
						<td><?php echo $row['phone'] ?></td>
						<td><a href="editstudent.php?edit=<?php echo $row['stu_id'] ?>"><i class="bx bx-edit">E</i></a> 
							<a href="result.php?result=<?php echo $row['stu_id']?>"><i class="bx bx-plus">R</i></a>
							<a href="deletestudents.php?delete=<?php echo $row['stu_id']?>">D<i class="bx bx-trash"></i></a></td>
					</tr>
				<?php } ?>
					
				</table>
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