<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS / CDN of Font awesome / Main style -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/css/style.css">
    <link rel="stylesheet" href="css/caraousalStyle.css">
    
    <title>Hello, world!</title>
</head>

<body>
    <header>
   <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar sticky-top">
  <a class="navbar-brand" href="#">Pizza hut</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
           
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  <div class="d-flex flex-row ml-auto">
      <div class="p-2">
          <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Sign Up</a>
      </div>
      <div class="p-2">
          <a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign in</a>
      </div>
  </div>
  </div>
</nav>
   </div>
    </header>
    
<!--    Sub-header-->
    <div class="sub-header">
        <div class="d-flex flex-row">
            <div class="p-2">
                <img src="Images/pizza_hut.PNG" alt="Pizza hut icon">
            </div>
            <div class="p-2">
                <span>Welcome to Pizza <hut></hut></span>
            </div>
        </div>
    </div>
  <main>
<!--     Caraousal-->
      <section class="caraousal-division">
       <div class="container-fluid">
           <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="Images/slider-images/img3.jpg" alt="">
    </div>
    <div class="carousel-item">
      <img src="Images/slider-images/img1.JPG" alt="">
    </div>
    <div class="carousel-item">
      <img src="Images/slider-images/img4.jpg" alt="">
    </div>
    <div class="carousel-item">
          <img src="Images/slider-images/img2.jpg" alt="">
    </div>
    
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
       </div>
      </section>
      
<!--      Ads section-->
       <section class="ads">
           <div class="container">
               <div class="row">
                   <div class="col-md-6">
                       <img src="Images/mydeal1.PNG" alt="Deal one" class="img-fluid">
                   </div>
                   <div class="col-md-6">
                       <img src="Images/mydeal2.PNG" alt="Deal two" class="img-fluid">
                   </div>
               </div>
           </div>
       </section>
       
<!--   Parallax-section -->
     <section>
         <div class="container">
            
    <div class="parallax-window" data-parallax="scroll" data-z-index="1" data-image-src="Images/half-pizza.jpg"></div>
         </div>
     </section>                   
                   
      <div style="height:400px"></div>
  </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script  src="parallax/parallax.min.js"></script>
</body>

</html>