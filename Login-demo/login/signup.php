<?php

include("connect.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD']== "POST")
{
  //something was posted
$username = $_POST['username'];
 $fullname = $_POST['fullname'];
 $password = $_POST['password'];
}

if(!empty($username) && !empty($password) && !empty($fullname)){

  //save to database
  //$user_id = random_num(20);
  $query = "insert into users (username, fullname,password) values ('$username', '$fullname', '$password')";
  mysqli_query($con, $query);
  
  header("Location: register.php");
  die;
}
else{
   //echo"invalid  credentials re-enter";
}



?>

<!DOCTYPE html>
<html lang="en">  
<!-- Mirrored from themeknit.com/demo/html/authfy/demo/login-04.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2024 08:08:06 GMT -->
<head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- For Search Engine Meta Data  -->
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="yoursite.com" />
	
  <title>Fablab Winam</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/icon" href="images/fablab-logo.png"/>
   
  <!-- Main structure css file -->
  <link  rel="stylesheet" href="css/login4-style.css">
 
  </head>
  <body>
    <!-- Start Preloader -->
    <div id="preload-block">
      <div class="square-block"></div>
    </div>
    <!-- Preloader End -->
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-5 col-lg-4 authfy-panel-left">
          <!-- brand-logo start -->
          <div class="brand-logo text-center">
            <img src="images/fablab-logo.png" width="150" alt="brand-logo">
          </div><!-- ./brand-logo -->
          <!-- Fablab-login start -->
          <div class="authfy-login">
            <!-- panel-login start -->
            
            <div class="authfy-panel panel-login text-center active">
              <div class="authfy-heading">
                <h3 class="auth-title">Register your account</h3>
              </div>

              <div class="row loginOr">
                <div class="col-xs-12 col-sm-12">
                                    <!--SIGNUP FORM-->
                                    <form name="signupForm" class="signupForm" action="#" method="POST">
                    <div class="form-group">
                      <input type="email" class="form-control" name="username" placeholder="Email address">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="fullname" placeholder="Full name">
                    </div>
                    <div class="form-group">
                      <div class="pwdMask">
                        <input  type="password" class="form-control" name="password" placeholder="Password">
                        <span class="fa fa-eye-slash pwd-toggle"></span>
                      </div>
                    </div>
                    <div class="form-group">
                    </div>
                    <div class="form-group">
                      <button class="btn btn-lg btn-primary btn-block" type="submit">register</button>
                    </div>
                  </form>
                  <a href="register.php">Already have an account?</a>
                </div>
              </div>
            </div> 
            <!-- ./panel-signup -->
          </div> <!-- ./authfy-login -->
        </div> <!-- ./authfy-panel-left -->
        <div class="col-md-7 col-lg-8 authfy-panel-right hidden-xs hidden-sm">
          <div class="hero-heading row">
            <div id="authfySlider" class="headline carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#authfySlider" data-slide-to="0" class="active"></li>
                <li data-target="#authfySlider" data-slide-to="1"></li>
              </ol>

                 <!-- Wrapper for slides -->
                <div class="carousel-inner">
                <div class="item active">
                  <h3>Welcome to Fablab Winam </h3>
                  <p>Think, Design Build</p>
                </div>
                <div class="item">
                  <h3>Welcome to Fablab Winam</h3>
                  <p>Think, Design Build </p>
                </div>
              </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12">



                </div>
              </div>
            </div>
             <!-- ./panel-login -->
            
            <!-- panel-signup start -->
            <div class="authfy-panel panel-signup text-center">
              <div class="row">
                <div class="col-xs-12 col-sm-12">
                  <div class="authfy-heading">
                    <h3 class="auth-title">Sign up</h3>
                  </div>


              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <h3>Welcome to Fablab Winam </h3>
                  <p>Think, Design Build</p>
                </div>
                <div class="item">
                  <h3>Welcome to Fablab Winam</h3>
                  <p>Think, Design Build </p>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div> <!-- ./row -->
    </div> <!-- ./container -->

            <!-- Javascript Files -->

    <!-- initialize jQuery Library -->
    <script src="js/jquery-2.2.4.min.js"></script>
  
  <!-- for Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Custom js-->
  <script src="js/custom.js"></script>
    
  </body>
  </html>