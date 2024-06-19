<?php 
	//task 
	if(isset($_POST['upload'])){
		$file=$_FILES['image'];
		// echo"<pre>";
        // print_r($file);
		// echo"</pre>";
		$name=$file['name'];
		$tmp_name=$file['tmp_name'];
		$path="pictures/".$name;
		if(move_uploaded_file($tmp_name,$path)){
			echo "file successfully uploaded";
		}
		else{
			echo "file not uploaded";
		}

	}




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>
 	<form method="POST" enctype="multipart/form-data">
 		<input type="file" name="image"><br><br>
 		<input type="submit" name="upload" value="upload">



 	</form>
 
 </body>
 </html>