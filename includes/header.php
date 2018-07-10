<?php require_once('Connection/connection.php');?> <!--Connecting database-->
<?php session_start();?>  <!--Starting session-->
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
    <title>Pizza hut</title>
</head>

<body>
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
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex flex-row ml-auto" id="signUpDivision">
                     <?php
                        if(isset($_SESSION['user_name'])){
                            ?>
                            <div class="p-2" id="dropdownDivision">
                                <div class="dropdown">
                                    <a href="javascript:void();" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo $_SESSION['user_name']?></a>
                                    
                                    <div class="dropdown-menu">
                                        <a href="#changePasswordModal" class="dropdown-item" data-toggle="modal">CHANGE PASSWORD</a>
                                        <a href="checkout.php" class="dropdown-item">CHECK OUT</a>
                                        <a href="logout.php" class="dropdown-item">SIGN OUT</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        else {
                            ?>
                             <div class="p-2">
                            <a href="#signUpModal" data-toggle="modal"><i class="fa fa-user" aria-hidden="true"></i> Sign Up</a>
                        </div>
                        <div class="p-2">
                            <a href="#signInModal" data-toggle="modal"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign in</a>
                        </div>
                            <?php
                        }
                        ?>
                     
                      
                        <div class="p-2">
                            <a href="#shoppingCartModal" data-toggle="modal"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-info shopping-cart"></span></a>
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
                <button class="close" data-dismiss='modal'>&times;</button>
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
                  <div class="modal-title text text-center text-danger modal-title">SIGN IN</div>
                           <button class="close" data-dismiss='modal'>&times;</button>
             </div>
             <div class="modal-body">
                 <div class="signin-area">
                     <form method="POST" id="signInForm">
                         <div class="form-group">
                            <input type="email" id="siginEmail" class="form-control" placeholder="Enter your email" required>
                         </div>
                         <div class="form-group">
                             <input type="password" id="signinPassword" class="form-control" placeholder="Enter your password" required>
                         </div>
                         <div class="form-group">
                             <input type="submit" value="SIGN IN" class="form-control btn btn-outline-info">
                         </div>
                     </form>
                 </div>
             </div>
             <div class="modal-footer">
                 <div class="signInMessage text text-danger"></div>
             </div>
         </div>
     </div>
 </div>
 


<!--Message modal-->
<div class="modal fade" id="messageModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss='modal'>&times;</button>
            </div>
            <div class="modal-body message-body">
                <h3 class="text text-success">Successfully registered</h3>
                <p>Please <a  data-dismiss="modal" href="#signInModal" data-toggle='modal' class="text text-primary">SIGN IN</a> now</p>
            </div>
            <div class="modal-footer messageModalFooter">
                <button class="btn btn-primary" data-dismiss='modal'>OK</button>
            </div>
        </div>
    </div>
</div>


<!--Shopping cart modal-->
<div class="modal fade" id="shoppingCartModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title text text-white font-weight-bold">Shopping cart details</h3>
               <button class="close font-weight-bold" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="show-data"></div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!--Change password-->

<div class="modal fade" id="changePasswordModal">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <h3 class="modal-title text text-muted">Change password</h3>
              <button class="close font-weight-bold" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
               <form method="POST" id="changePasswordForm">
                   <div class="form-group">
                       <input type="password" name="oldPassword" id="oldPassword" class="form-control old-password" placeholder="Old password" required>
                   </div>
                   <div class="form-group">
                       <input type="password" name="newPassword" id="newPassword" class="form-control new-password" placeholder="New password" required>
                   </div>
                   <div class="form-group">
                       <input type="password" name="confirmPassword" id="confirmPassword" class="form-control confirm-password" placeholder="Confirm Password" required>
                   </div>
                   <div class="form-group">
                       <input type="submit" value="Change password" class="form-control btn btn-outline-success">
                   </div>
               </form>
          </div>
          <div class="modal-footer">
              <div class="changePasswordMessage text text-danger"></div>
          </div>
        </div>
    </div>
</div>




