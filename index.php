<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EastEnd landing page</title>
    <link rel="shortcut icon" href="img/logo.png"  type = "image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3cbf14a987.js" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar">
    <div class="content">
      <div class="logo">
        <a href="#">East<strong>End</strong></a>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="#about">About</a></li>
        <li><a href="#partners">Partners</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="signUp.php">Signup</a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <div class="icon-bar">
    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
    <a href="#" class="google"><i class="fa fa-google"></i></a> 
    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> 
  </div>
  <div class="banner"></div>
 <div id="about">

     <div id="vect" data-aos="fade-left"
     data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="500">
      <img src="img/vec1.jpg" alt="vector image appears here" height="300px" width="600px" id="pic">
       </div>

     <div id="right" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
      <h1>About</h1>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus tempora atque, sit iusto earum eum nisi,
         a illum ut saepe est. Laudantium doloribus quam nostrum nesciunt maxime, nobis perferendis pariatur? 
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore cupiditate ratione impedit aspernatur 
         numquam deserunt, tempora dolorem deleniti quos hic facilis nulla molestias corrupti ab sequi accusantium 
         odit sapiente laudantium?
         Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus tempora atque, sit iusto earum eum nisi,
         a illum ut saepe est. Laudantium doloribus quam nostrum nesciunt maxime, nobis perferendis pariatur? 
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore cupiditate ratione impedit aspernatur 
         numquam deserunt, tempora dolorem deleniti quos hic facilis nulla molestias corrupti ab sequi accusantium 
         odit sapiente laudantium?
      </p>
   </div>
 </div>

 <div id="second">
      <div id="vec2"> <img src="img/vect2.png" alt="Vector image of our partners apperas here" height="300px" width="600px" id="pic2"> </div>
      <div id="cont2" data-aos="fade-up"
      data-aos-anchor-placement="top-bottom">
        <h1 id="partners">Partners</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam est possimus,
          consequatur accusantium non, mollitia eum exercitationem rerum magnam recusandae
          ut voluptas quia eos iste accusamus unde in sapiente? Odit.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam est possimus,
          consequatur accusantium non, mollitia eum exercitationem rerum magnam recusandae
          ut voluptas quia eos iste accusamus unde in sapiente? Odit.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam est possimus,
          consequatur accusantium non, mollitia eum exercitationem rerum magnam recusandae
          ut voluptas quia eos iste accusamus unde in sapiente? Odit.
        </p>
      </div>
    </div>

    <footer class="footer">
      <div class="container">
        <div class="row" data-aos="fade-up"
        data-aos-anchor-placement="bottom-bottom">
          <div class="footer-col">
            <h4>get help</h4>
            <ul>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">shipping</a></li>
              <li><a href="#">returns</a></li>
              <li><a href="#">order status</a></li>
              <li><a href="#">payment options</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>online shop</h4>
            <ul>
              <li><a href="#">watch</a></li>
              <li><a href="#">bag</a></li>
              <li><a href="#">shoes</a></li>
              <li><a href="#">dress</a></li>
            </ul>
          </div>
        </div>
      </div>
   </footer>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script>
  AOS.init();
</script>
  <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      navbar.classList.add("show");
      menuBtn.classList.add("hide");
      body.classList.add("disabled");
    }
    cancelBtn.onclick = ()=>{
      body.classList.remove("disabled");
      navbar.classList.remove("show");
      menuBtn.classList.remove("hide");
    }
    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>

</body>
</html>
