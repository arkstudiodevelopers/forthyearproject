<?php 
session_start();
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
if(isset($_POST['Help']))
	{
		  $Email = $_POST['Email'];
          $Comment= $_POST['Comment'];
          echo "$Comment";
		  if($Email==''){
			  echo "<script>alert('Please enter your email')</script>";
			  exit();
		  }	if($Comment== ''){
              echo "<script>alert('Please enter your comment')</script>";
          }
		else{
		  //insert the data to table 
		  $sql = "insert into user_request (Email,Comment) values ('$Email','$Comment')";
		  $query=mysqli_query($conn,$sql);
		  if($query){
			  echo "<sript>'User comment uploaded'<script>";
		  }
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help center</title>
    <link rel="shortcut icon" href="img/logo.png"  type = "image/x-icon">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel="stylesheet" href="css/Help.css">
</head>
<body>
     <!-- Navbar start -->
  <nav class="navbar navbar-expand-md bg-info navbar-dark">
    <a class="navbar-brand" href="index.php"><i class="fa fa-archive"></i>&nbsp;&nbsp;Cloth Store</a>
    <a href="" class="linkOne">Hello,
         <?php echo ($_SESSION['username']);?>
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="activity.php"><i class="fa fa-archive mr-2"></i>Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="activity.php"><i class="fa fa-archive mr-2"></i>Help</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar end -->

  <Div class="helpBox">
     <h2>
         Welcome to the Help page.
     </h2> <br><br>
    <h4>
        Frequently asked Questions
    </h4>
    <p>
       Is this the official web application? <br>
       yes it is the official web application. <br> <br>
       Does this web aplicaion collect my user data?<br>
       No, it does not collect user data. <br><br>
       How does one cancel an order? <br>
       As of now you cannot cancel an order. <br><br>
       Do you accept returned goods? <br>
       Yes we do, if the goods you recieve are not upto your standards or the standards specified then you can return. <br><br>
       Do you charge for shipping or transport fee? <br>
       If you are in Nairobi, we do not charge any transport fee, but for areas or locations outside Nairobi we charge a fee. <br> <br>
    </p>
    <h4>
        Give us Feedback
    </h4>
    <form action="Help.php" method="post">
        <input type="email" name="Email" id="" placeholder="Enter your Email"><br>
        <input type="text" name="Comment" id="" placeholder="Enter your query or comment"><br>
        <input type="submit" class="btn" value="Help" name="Help">
    </form>

  </Div>

</body>
</html>