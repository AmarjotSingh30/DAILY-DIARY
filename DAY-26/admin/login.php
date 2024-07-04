<?php  
	include '../config.php';
 
    session_start();
    if(isset($_SESSION['login_status'])){//it will directly take user to index 
        header('location:index.php');
    }

	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
        $qry=mysqli_query($conn,"SELECT * FROM admin WHERE email='$email' and password='$password'");
        $row=mysqli_fetch_assoc($qry);//for fetching from database
        if(mysqli_num_rows($qry) > 0){//this is defined function
            $_SESSION['id']=$row['id'];//checking id in database
            $_SESSION['login_status']=true;//it is true
            header('location:index.php');// send location      
        }
        else{
            echo "<script>alert('Not registered')</script>";
        }
    }



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<style type="text/css">
*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family:arial;

}
body{
    display: flex;
    justify-content:center;
    align-items: center;
    min-height: 100vh;
/*    background:linear-gradient(*/
    background-size: cover;
    background-position: center;
}		

.wrapper{
    
    border-radius: 10px;
    padding: 30px 40px;
    width:420px;
    background-color:color-mix(in srgb-linear, skyblue 90%, black 10%);
}

.wrapper h1{
    font-size: 36px;
    text-align: center;
}

.wrapper .input-box{
   
    position: relative;
    width: 100%;
    height: 50px;
    color:white;
    margin: 30px 0;

}

.input-box input{
    width:100%;
    height: 100%;
    background:transparent;
    border: none;
    outline: none;
    border: 2px solid lightgrey;
    border-radius: 40px;
    font-size: 16px;
    color: white;
    padding: 20px 45px 20px 20px;
}

.input-box input::placeholder{
    color:white;

}
.input-box i{
    height: 20px;
    width: 20px;
    position:absolute;
    right:20px;
    top: 25px;
    transform: translateY(-50%);
    font-size: 20px;
}
.wrapper .remember-forget{
    display: flex;
    justify-content: space-between;
    font-size:14.5px;
    margin: -15px 0 15px;
}

.remember-forget label input{
    accent-color: white;
    margin-right: 3px;
}

.remember-forget a{
    color:white;
    text-decoration: none;
}

.remember-forget a:hover{
    text-decoration: underline;
}

.btn{
    width: 100%;
    height:45px;
    border: none;
    outline: none;
     border-radius: 40px;
    box-shadow:0 0 10px black;
    cursor:pointer;
    font-size:16px;
    color:rgb(31, 19, 19) ;
    font-weight: 600;

}
.btn:hover{
    color:blueviolet;
}

.wrapper .register-link{
    font-size: 14.5px;
    text-align: center;
    margin:20px 0 15px
}

.register-link p a{
    color: white;
    text-decoration: none;
}

.register-link p a:hover{
    text-decoration: underline;

}
	</style>
</head>
<body>
	 <div class="wrapper">
        <form action="" method="POST">
            <h1>LOGIN</h1>
        <div class="input-box">

            <input type="text" name="email" placeholder="Enter admin email" required>
            <i class='bx bxs-user-circle'></i>
        </div>

        <div class="input-box">
            <input type="password" name="password" placeholder="password" required>
            <i class='bx bxs-lock' ></i>
        </div>

        <div class="remember-forget">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forget Password </a>
        </div>

        <button type="submit" name="submit"class="btn">login</button>

        <div class="register-link">
            <p>Dont have an account? <a href="#">Register</a></p>
        </div>
        </form>
</body>
</html>