<?php require_once('Connection/connection.php')?> <!--Connecting database-->
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
<link rel="stylesheet" href="css/drawer.css">
    <title>Pizza hut</title>
</head>

<body class="drawer drawer--right">
    <header>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a href="index.php" class="navbar-brand"><img src="images/logo.png" alt="Logo" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="pizza.php">PIZZA</a>
                                <a class="dropdown-item" href="wings.php">WINGS</a>
                                <a class="dropdown-item" href="sides.php">SIDES</a>
                                <a class="dropdown-item" href="deserts.php">DESERTS</a>
                                <a class="dropdown-item" href="drinks.php">DRINKS</a>
                                <a class="dropdown-item" href="pasta.php">PASTA</a>

                      </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex flex-row ml-auto">
                        <div class="p-2">
                            <a href="#signUpModal" data-toggle="modal"><i class="fa fa-user" aria-hidden="true"></i> Sign Up</a>
                        </div>
                        <div class="p-2">
                            <a href="#signInModal" data-toggle="modal"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign in</a>
                        </div>
                        <div class="p-2">
                            <a href="javascript:void(0);" class="drawer-toggle"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-info shopping-cart"></span></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    
    <!--        Drawer section-->
        <div class="drawer-section" id="searchArea">
            <nav class="drawer-nav">
                <div class="js-drower-close">
                    <a href="javascript:void(0);" class="icon-fallback-text" id="closeDrawer">
            <i class="fa fa-times fa-lg" aria-hidden="true"></i>
           </a>

                </div>
                <div class="text-center drawer-heading">
                    <h4 class="search-header">
                      Product Details 
                    </h4>
                </div>
                <hr>
                <div class="show-data">
<!--                  Contents will be rendered dynamically via jquery-->
                  
                </div>
            </nav>
        </div>
    
    

    <!--    Sub-header-->
    <div class="sub-header">
        <div class="d-flex flex-row">
            <div class="p-2">
                <img src="Images/pizza_hut.PNG" alt="Pizza hut icon">
            </div>
            <div class="p-2">
                <span>Welcome to Pizza-hut </span>
            </div>
        </div>
    </div>
    
   
  
<!-- Sign up  Modals-->


<div class="modal fade" id="signUpModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title text text-info">SIGNUP</div>
            </div>
            <div class="modal-body">
                <div class="form-area">
                    <form method="POST" id="signUpForm">
                        <div class="form-group">
                           <input type="text" class="form-control" id="signUpName" placeholder="Your full name" required>
                        </div>
                        <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter your email" id="signUpEmail" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="signUpPassword" placeholder="Enter your password" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="SIGN UP" class="form-control btn btn-outline-primary">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="signup-mesage text text-center text-danger ml-auto"></div>
            </div>
        </div>
    </div>
</div>


<!--Login modal-->
 <div class="modal fade" id="signInModal">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <div class="modal-title text text-center text-danger">SIGN IN</div>
             </div>
             <div class="modal-body">
                 <div class="signin-area">
                     <form method="POST" id="signInForm">
                         <div class="form-group">
                            <input type="email" id="siginEmail" class="form-control" placeholder="Enter your email">
                         </div>
                         <div class="form-group">
                             <input type="password" id="signinPassword" class="form-control" placeholder="Enter your password">
                         </div>
                         <div class="form-group">
                             <input type="submit" value="SIGN IN" class="fomr-control btn btn-outline-info">
                         </div>
                     </form>
                 </div>
             </div>
             <div class="modal-footer"></div>
         </div>
     </div>
 </div>
 


<!--Message modal-->
<div class="modal fade" id="messageModal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <h3>Successfully registered</h3>
                <p>Please <a href="#signInModal" data-toggle='modal' class="text text-primary">SIGN IN</a> now</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss='modal'>OK</button>
            </div>
        </div>
    </div>
</div>