<?php

	$servernam = "localhost";
	$usernam = "root";
	$passwor = "";
	$databas = "eastend";
	
	// Create connection
	$conn = mysqli_connect($servernam, $usernam, $passwor, $databas);
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully";
    session_start();
	if(isset($_POST['Login'])){
		$username = $_POST['Username'];  
   		$password = $_POST['Password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from user where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['username']=$username;
			header("Location: activity.php");  
        }  
        else{  
            echo '<script>alert("Login failed. Invalid username or password.")</script>'; 
        }  
	}
?>