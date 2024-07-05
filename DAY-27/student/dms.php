<?php  
	include '../config.php';
	session_start();
	$sid=$_SESSION['sid'];
	// $qry_student=mysqli_query($conn,"SELECT * FROM student where stu_id='$sid'");
	// $row_student=mysqli_fetch_assoc($qry_student);
	//data from result table 
	$qry=mysqli_query($conn,"select student.stu_id,stu_name,fathername,mothername,class,image,phone,physics,chemistry,maths,english,computer FROM student JOIN result ON student.stu_id=result.stu_id WHERE student.stu_id='$sid'");
	$row_student=mysqli_fetch_assoc($qry);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			box-sizing: border-box;	
			background-color:ghostwhite ;
		}
		.result{
			height: 40vh;
			width: 100%;
/*			border: 3px solid yellow;*/
		}
		table{
			width: 50%;
			height: auto;
/*			border: 1px solid black;*/
			margin: auto;
			text-align: center;
		}
		tr >td,th{
			height: 7vh;
			border: 1px solid black;
		}
		.box{
			height: 100vh;
			width: 100%;
/*			border: 4px solid grey;*/
/*			position: relative;*/
		}
		.box table{
			width: 90%;
		}
		.image{
			position:relative;
			top: -30vh;
			bottom: 35vh;
			left: 19vh;
			height: 27vh;
			width: 12%;
			right: 0;
/*			border: 2px solid grey;*/
/*			border-radius: 20px;*/
		}

		.image a{
			text-decoration: none;
			color: black;
		}
		

	</style> 
</head>
<body>
	<div class="result">
		<h1 style="text-align: center; text-decoration: underline;">Result</h1>
		<table cellspacing="0" >
			<tr>
				<th>Name</th><td><?php  echo $row_student['stu_name'] ?></td>
			</tr>
			<tr>
				<th>Father's Name</th><td><?php  echo $row_student['fathername'] ?></td>
			</tr>
			<tr>
				<th>Mother's Name</th><td><?php  echo $row_student['mothername'] ?></td>
			</tr>
			<tr>
				<th>Roll No.</th><td><?php  echo $row_student['stu_id'] ?></td>
			</tr>
		</table><br>
		<div class="image">
				<img src="../images/<?php echo $row_student['image'] ?>" style="height: 23vh;">
				<center><a href="studentlogout.php">logout</a></center>

	</div>
	</div>
	<div class="box">
		<table cellspacing="0" width="30%">
			<!-- <tr>
				<th>roll no</th>
				<td><?php echo $row_student['stu_id'] ?></td>
			</tr>
			<tr>
				<th>class</th>
				<td><?php  echo $row_student['class'] ?></td>
			</tr> -->
			<tr>
				<th>Sujects</th>
				<td>Obtained Marks</td>
			</tr>
			<tr>
				<th>physics</th>
				<td><?php  echo $row_student['physics'] ?></td>
			</tr>
			<tr>
				<th>chemistry</th>
				<td><?php  echo $row_student['chemistry'] ?></td>
			</tr>
			<tr>
				<th>math</th>
				<td><?php  echo $row_student['maths'] ?></td>
			</tr>
			<tr>
				<th>english</th>
				<td><?php  echo $row_student['english'] ?></td>
			</tr>
			<tr>
				<th>computer science</th>
				<td><?php  echo $row_student['computer'] ?></td>
			</tr>
			<tr>
				<th>total number</th>
				<td><?php  echo $total=$row_student['physics']+$row_student['chemistry']+ $row_student['maths']+$row_student['english']+$row_student['computer'] ?></td>
			</tr>
			<tr>
				<th>percentage</th>
				<td><?php  echo $total/5 ?>%</td>
			</tr>
		</table>
	</div>
</body>
</html>