<?php 	 

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
				<li><a href="#">View Teacher</a></li>
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
				<div class="title">Registration</div>
				<form action="#">
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
						</div>
						<div class="input-box">
							<span class="details">subjects</span>
							<select  name="subjects">
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
						<textarea name="techerdescription" rows="10"></textarea>
					</div>
					<div class="input-box">
						<input type="submit" value="add new">
					</div>


				  </div>
				</form>
			</div>
			</div>
		</div>
	</div>
</body>
</html>