<?php  
	if(isset($_POST['upload'])){
		$file=$_FILES['image'];
		echo "<pre>";
		print_r($file);
		echo "</pre>";
		$name=$file['name'];
		$tmp_name=$file['tmp_name'];
		$path="images/".$name;
		if(move_uploaded_file($tmp_name, $path)){
			echo "File uploaded";
		}
		else{
			echo "Unable to uplaod";
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
		<input type="submit" name="upload" value="Upload">
	</form>
</body>
</html>

<!-- Array
(
    [name] => CAR.png
    [type] => image/png
    [tmp_name] => C:\xampp\tmp\php43D2.tmp
    [error] => 0
    [size] => 34757
) -->
