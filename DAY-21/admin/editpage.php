<?php
include '../config.php';

 	   $edit=$_GET['edit']; 
  	   $qry=mysqli_query($conn,"SELECT * FROM teacher WHERE tech_id=$edit");
	   $row=mysqli_fetch_assoc($qry);
      //session_start();	
	  
	 //for updating  teacher data
    date_default_timezone_set('ASIA/KOLKATA');
	if(isset($_POST['update'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		//$password=$_POST['password'];
		$qualification=$_POST['qualification'];
		$subject=$_POST['subjects'];
		$teacherimage=$_FILES['teacherimage'];
		$address=$_POST['address'];
		$fname=$teacherimage['name'];
		$updated_at=date('Y-m-d H:i:s');
		if(empty($fname)){
			$qry="UPDATE teacher SET name='$name',email='$email',qualification='$qualification',subject='$subject',address='$address',updated_at='$updated_at' WHERE tech_id='$edit' ";
		}
		else{
			$tmp_name=$teacherimage['tmp_name'];
			$path="../images/".$fname;
			move_uploaded_file($tmp_name, $path);
			$qry="UPDATE teacher SET name='$name',email='$email',image='$fname',qualification='$qualification',subject='$subject',address='$address',updated_at='$updated_at' WHERE tech_id='$edit' ";
		}
		$result=mysqli_query($conn,$qry);
		if($result){
			echo "<script>alert('one record updated')
				window.location.href='viewlist.php';
			    </script>";
		}
		else{
			echo "<script>alert('record not updated')</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<!-- teacher form -->
				<div class="container">
				<div class="title">Create New

				</div>
				<form action="#" method="POST" enctype="multipart/form-data">
					<div class="user-details">
						<div class="input-box">
							<span class="details">Name</span>
							<input type="text" name="name" placeholder="enter name" value="<?php echo $row['name']?>">
						</div>
						<div class="input-box">
							<span class="details">Email</span>
							<input type="email" name="email" placeholder="enter email"value="<?php echo $row['email']?>">
						</div>
						<!-- <div class="input-box">
							<span class="details">Password</span>
							<input type="password" name="password" placeholder="enter password"value="<?php //echo $row['password']?>">
						</div>
						<div class="input-box">
							<span class="details">confirm password</span>
							<input type="text" name="renter" placeholder="re-enter password">
						</div> -->
						<div class="input-box">
							<span class="details">Qualification</span>
							<input type="text" name="qualification" placeholder="enter qualification"value="<?php echo $row['qualification']?>">
						</div><br><br>
						<div class="input-box">
							<span class="details">subjects</span>
							<select name="subjects" >
								<option value="physics" required 
								<?php 
								if($row['subject'] == 'physics'){
						        echo "selected=selected";
					            }
				                ?>
				                >physics</option>
								<option value="chemistry" required 
								<?php 
								if($row['subject'] == 'chemistry'){
						        echo "selected=selected";
					            }
				                ?>
				                >chemistry</option>

								<option value="math" required 
								<?php 
								if($row['subject'] == 'math'){
						        echo "selected=selected";
						        }
						        ?>
					            >math</option>

								<option value="computerscience" required 
								<?php 
								if($row['subject'] == 'computerscience'){
						        echo "selected=selected";
						        }
						        ?>
					            >computerscience</option>
								<option value="english" required 
								<?php 
								if($row['subject'] == 'english'){
						        echo "selected=selected";
						        }
						        ?>
					            >english</option>
							</select>
						</div>
						<div class="input-box">
						<input type="file" name="teacherimage">
						<img style="width:100px; height: 100px;text-align: center;" src="../images/<?php echo $row['image'] ?>">
						</div>
					<div class="input-box">
						<textarea name="address" rows="0"><?php echo $row['address'] ?></textarea>
					</div>
					


				  </div>
				  <div class="input-box">
						<input type="submit" value="Update" class="btn" name="update">
					</div>
				</form>
			</div>
			</div>
		</div>
	</div>
</body>
</html>