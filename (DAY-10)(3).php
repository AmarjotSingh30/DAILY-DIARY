<?php 
	$fnamERR	='*';
  $lnamERR='+';
  $pswrd='#';
  $cnt='-';
  $agt='^';
	if(isset($_POST['submit'])){
		$firstname=$_POST['firstname'];//first name
    if(empty($firstname)){
      $fnamERR ='REQUIRED';
    }
    
      
      else if(strlen ($firstname)<3){
         $fnamERR='INVALID';
      }
      else{
        echo "firstname is ".$firstname."<br>";
      }

       //lname
       $lastname=$_POST['lastname'];//first name
    if(empty($lastname)){
      $lnamERR ='REQUIRED';
    }
    
      
      else if(strlen ($lastname)<3){
         $lnamERR='INVALID';
      }
      else{
        echo "lastname is ".$lastname."<br>";
      }

      //password
      $password=$_POST['password'];//first name
    if(empty($password)){
      $pswrd ='REQUIRED';
    } 
    
      
      else if(strlen ($password)<8){
         $pswrd='INVALID';
      }
      else{
        echo "PASSWORD  is ".$password  ."<br>";
      } 

      //contact
      $var1=$_POST['contact'];//first name
    if(empty($var1)){
      $cnt ='REQUIRED';
    }
    
      
      else if(strlen ($firstname)<10){
         $cnt='INVALID';
      }
      else{
        echo "CONTACT is ".$var1."<br>";
      }

      //AGE

        $var2=$_POST['age'];//first name
    if(empty($var2)){
      $agt ='REQUIRED';
    }
    
      
      else if(strlen ($var2)<18){
         $agt='INVALID';
      }
      else{
        echo "AGE is ".$var2."<br>";
      }


    


      
     
    }//submit bracket






    
      
    

      

    



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	<style type="text/css">
		span{
			color: red;
    }
	</style>
 </head>
 <body>
 	<center>
 		<h1>FILE VALIDATION PAGE</h1>
 		<form method="POST">
 			<input type="text" name="firstname" placeholder="ENTER FIRST NAME"><span><?php echo $fnamERR; ?></span><br><br>

 			<input type="text" name="lastname" placeholder="ENTER LAST NAME"><span><?php echo $lnamERR;?></span><br><br>

 			<input type="password" name="password" placeholder="ENTER PASSWORD"><span><?php echo  $pswrd; ?></span><br><br>

 			<input type="number" name="contact" placeholder="ENTER CONTACT"><span><?php echo $cnt; ?></span><br><br>

 		    <input type="text" name="age" placeholder="ENTER AGE"><span><?php echo $agt ; ?></span><br><br>

 		    <input type="submit" name="submit">

      </form>
</center>
 
 </body>
 </html>