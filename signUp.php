<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "eastend";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully";

	if(isset($_POST['signUp']))
	{
		  $Email = $_POST['Email'];
		  $Username = $_POST['Username'];
		  $Password = $_POST['Password'];
		  if($Email==''){
			  echo "<script>alert('Please enter your email')</script>";
			  exit();
		  }	
		  if ($Username==''){
			  echo "<script>alert('Please enter the username')</script>";
			  exit();
		  }
		  if ($Password==''){
			echo "<script>alert('Please enter the password')</script>";
			exit();
		}
		else{
		  //insert the data to table 
		  $sql = "insert into user (Email,Username,Password) values ('$Email','$Username','$Password')";
		  $query=mysqli_query($conn,$sql);
		  if($query){
			  echo "<p> Registration successfull</p>";
		  }
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EastEnd signUp Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="img/logo.png"  type = "image/x-icon">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div data-aos="fade-up"
    data-aos-anchor-placement="center-center" class="container">
		<div class="login-content">
			<form action="signUp.php" method="post">
				<img src="">
				<h2 class="title">Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="div">
                            <h5>Email</h5>
                            <input type="text" class="input" name="Email">
                    </div>
                 </div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="Username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="Password">
            	   </div>
            	</div>
            	
				<a href= "login.php"> log in </a>
            	<input type="submit" class="btn" value="signUp" name="signUp">
				
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>