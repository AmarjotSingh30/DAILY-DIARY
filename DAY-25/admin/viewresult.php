<?php 	 
	include '../config.php';
	//for admin icon showed in right-> indexheader
	session_start();	 
	$id=$_SESSION['id'];
	$qry_admin=mysqli_query($conn,"SELECT * FROM admin WHERE id='$id'");
	$row_admin=mysqli_fetch_assoc($qry_admin);

	// session_start();
	//to get data from two diffrent table and put it on 1 form
	$qry=mysqli_query($conn,"select student.stu_id,stu_name,fathername,mothername,class,image,phone,physics,chemistry,maths,english,computer FROM student JOIN result ON student.stu_id=result.stu_id");
	// $qry=mysqli_query($conn,"SELECT * FROM result WHERE is_deleted=0");
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
				<table>
  	<!-- student(tech_id,name,email,password,subject,qualification,image,address,ip_address,is_deleted,created_at,updated_at) -->

					<tr>
						<th>RollNo</th>
						<th>#</th>
						<th>Name</th>
						<th>FatherName</th>
						<th>MothernName</th>
						<th>Class</th>
						<th>Physics</th>
						<th>Chemistry</th>
						<th>Mathematics</th>
						<th>English</th>
						<th>Computer</th>
						<th>Total</th>
						<th>Percentage</th>
						<!-- <th>Action<th> -->
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
						<td><?php echo $row['physics'] ?></td>
						<td><?php echo $row['chemistry'] ?></td>
						<td><?php echo $row['maths'] ?></td>
						<td><?php echo $row['english'] ?></td>
						<td><?php echo $row['computer'] ?></td>
						<td><?php echo $total=$row['physics']+$row['chemistry']+$row['maths']+$row['english']+$row['computer'] ?></td>
						<td><?php echo $total/5 ?>%</td>
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