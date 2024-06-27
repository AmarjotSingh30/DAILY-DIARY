<?php 	 
	include '../config.php';
	$qry=mysqli_query($conn,"SELECT * FROM teacher");
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
				<li><a href="#">Add Student</a></li>
				<li><a href="#">View Student</a></li>
				<li><a href="#">Logout</a></li>
			</ul>
		</div>
		<div class="indexright">
			<div class="indexheader">
				<p>Welcome! Amarjot Singh</p>
			</div>
			<div class="indexsection">
				<table>
  	<!-- teacher(tech_id,name,email,password,subject,qualification,image,address,ip_address,is_deleted,created_at,updated_at) -->

					<tr>
						<th>Id</th>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Subject</th>
						<th>Qualification</th>
						<th>Action</th>
					</tr>
					<?php 
						while($row=mysqli_fetch_assoc($qry)){
					?>
					<tr>
						<td><?php echo $row['tech_id'] ?></td>
						<td><img src="../images/<?php echo $row['image'] ?>"></td>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo $row['email'] ?></td>
						<td><?php echo $row['subject'] ?></td>
						<td><?php echo $row['qualification'] ?></td>
						<td><a href="#"><i class="bx bx-edit"></i></a> <a href="#"><i class="bx bx-trash"></i></a></td>
					</tr>
				<?php } ?>
					
				</table>
			</div>
		</div>
	</div>
</body>
</html>