<?php 	 
	include '../config.php';
	//session_start();
	//for data to display from database
	$qry=mysqli_query($conn,"SELECT * FROM teacher");
	//for delete 
	$qry=mysqli_query($conn,"SELECT * FROM teacher WHERE is_deleted=0");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
				<table>
  	<!-- teacher(tech_id,name,email,password,subject,qualification,image,address,ip_address,is_deleted,created_at,updated_at) -->

					<tr>
						<th>Id</th>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Subject</th>
						<th>Qualification</th>
						<th>Action<th>
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
						<td><a href="editpage.php?edit=<?php echo $row['tech_id'] ?>"><i class="bx bx-edit"></i></a> <a href="deletepage.php?delete=<?php echo $row['tech_id']?>"><i class="bx bx-trash"></i></a></td>
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