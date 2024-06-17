<?php  
	//modes
	//3 types
	//w -write(overwrite)
	//a - append
	//r-read
	
	$data="Hi Amarjot?";
	$file=fopen("mode.txt","a");
	fwrite($file,$data);
	fclose($file);

	$file=fopen("mode.txt","r");
	echo fread($file,filesize('mode.txt'));
	fclose($file);

?>