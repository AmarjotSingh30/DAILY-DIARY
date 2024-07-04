<?php
	//Enabling connection
  	$conn=mysqli_connect("localhost","root","","sms") or die("Connection not created");
  	
  	//admin(id,name,email,password,designation,image,ip_address,is_deleted,created_at,updated_at)
  	
  	//teacher(tech_id,name,email,password,subject,qualification,image,address,ip_address,is_deleted,created_at,updated_at)
  	
  	//student(stu_id,stu_name,fathername,mothername,class,image,phone,address,is_deleted,ip_address,created_at,updated_at)

  	//result(result_id,stu_id,physics,chemistry,maths,english,computer)
 ?>