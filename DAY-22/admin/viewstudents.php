<?php 	 
	include '../config.php';
	//session_start();
	//for data to display from database
	$qry=mysqli_query($conn,"SELECT * FROM student");
	//for delete 
	// $qry=mysqli_query($conn,"SELECT * FROM teacher WHERE is_deleted=0");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
				<li><a href="viewstudent.php">View Student</a></li>
				<li><a href="#">Logout</a></li>
			</ul>
		</div>
		<div class="indexright">
			<div class="indexheader">
				<p>Welcome! Amarjot Singh</p>
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
						<td><a href="editstudent.php?edit=<?php echo $row['stu_id'] ?>"><i class="bx bx-edit"></i></a> <a href="deletepage.php?delete=<?php echo $row['stu_id']?>"><i class="bx bx-trash"></i></a></td>
					</tr>
				<?php } ?>
					
				</table>
			</div>
		</div>
	</div>
</body>
</html>