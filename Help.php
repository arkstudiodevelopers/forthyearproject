<?php 
session_start();
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
      
  </Div>

</body>
</html>