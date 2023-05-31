<?php
  session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" href="images/logo.png">
    <link rel="apple-touch-icon" href="images/logo.png">

     <!--Custom Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/app1.css">
    <link rel="stylesheet" type="text/css" href="css/app2.css">
    <link rel="stylesheet" type="text/css" href="css/app3.css">
    <link rel="stylesheet" type="text/css" href="css/app4.css"> 
    <link rel="stylesheet" type="text/css" href="css/style.css">     

    <title>Homepage - Mellofi</title>

  </head>
  <body>
   <!-- Start Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-custom-nav">
      <a class="navbar-brand mr-3 ml-3" href="index.php">
        <img class="menu-logo" src="images/logo.png" alt="MELLOFI Logo">
      </a>
  <?php

        if (isset($_SESSION['isLogin'])) {
     if($_SESSION['isLogin'] =="true"){
       echo '  <ul class="navbar-nav mr-auto ml-2">
             <li class="nav-item">
              <a class="nav-link nav-item-custom" href="homepage.php" style="margin-left: 2px;">
                HOME
              </a>
            </li>
        <li class="nav-item">
              <a class="nav-link mr-2 nav-item-custom" href="#" style="margin-left: 9px;">
                FOLLOWING
              </a>
            </li>
          <li class="nav-item"> 
              <a class="nav-link nav-item-custom mr-2" href="explore.php" style="margin-left: 2px;">
                EXPLORE
              </a>
            </li>
          <li class="nav-item"> 
              <a class="nav-link nav-item-custom mr-2" href="#" style="margin-left: 5px" id="music">
                MUSIC
                <i class="fas fa-caret-down" id="icon-hdr"></i>
              </a>
            </li>
          </ul>';
        } else if ($_SESSION['isLogin'] =="false") {
          echo '  <ul class="navbar-nav mr-auto ml-2">
        <li class="nav-item">
              <a class="nav-link mr-2 nav-item-custom" href="homepage.php" style="margin-left: 20px;">
                HOME
              </a>
            </li>
          <li class="nav-item"> 
              <a class="nav-link nav-item-custom mr-2" href="#" style="margin-left: 2px">
                EXPLORE
              </a>
            </li>
          <li class="nav-item"> 
              <a class="nav-link nav-item-custom mr-2" href="#" style="margin-left: 5px" id="music">
                MUSIC
                <i class="fas fa-caret-down" id="icon-hdr"></i>
              </a>
            </li>
          </ul>';
        }
          } else {
            echo '  <ul class="navbar-nav mr-auto ml-2">
        <li class="nav-item">
              <a class="nav-link mr-2 nav-item-custom" href="homepage.php" style="margin-left: 20px;">
                HOME
              </a>
            </li>
          <li class="nav-item"> 
              <a class="nav-link nav-item-custom mr-2" href="#" style="margin-left: 2px">
                EXPLORE
              </a>
            </li>
          <li class="nav-item"> 
              <a class="nav-link nav-item-custom mr-2" href="#" style="margin-left: 5px" id="music">
                MUSIC
                <i class="fas fa-caret-down" id="icon-hdr"></i>
              </a>
            </li>
          </ul>';
          }
?>
    <!-- Search Bar -->
           <ul class="navbar-nav wrap">
            <div class="search">
              <input type="text" class="searchTerm" placeholder="Search" style="background-color: #E3DEED" >
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                 </button>
               </div>
            </ul>
             

               <!-- Button trigger modal -->
          <?php
           if (isset($_SESSION['isLogin'])) {
             if ($_SESSION['isLogin'] == "true") {
              echo'    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> Guest
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="fas fa-setting"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">
                <i class="fas fa-sign-out-alt"></i> Log out
              </a>
            </div>
          </li>
        </ul>
      </div>';
            } else if ($_SESSION['isLogin'] == "false") {
              echo'<button type="button" class="btn btn-primary btn-lg mr-4 mt-3 btn-modal" data-toggle="modal" data-target="#signUpModal" style="--border-color: white;">
                Sign Up
              </button>
              <button type="button" class="btn btn-primary btn-lg mr-4 mt-3 btn-modal" data-toggle="modal" data-target="#logInModal" style="--border-color: white;">Log In</button>';
            }
          } else {
             echo'<button type="button" class="btn btn-primary btn-lg mr-4 mt-3 btn-modal" data-toggle="modal" data-target="#signUpModal" style="--border-color: white;">
                Sign Up
              </button>
              <button type="button" class="btn btn-primary btn-lg mr-4 mt-3 btn-modal" data-toggle="modal" data-target="#logInModal" style="--border-color: white;">Log In</button>';
          }
              ?>
            </p>  
      
    </nav>


    <!-- End Header -->

  <!-- Sign Up Modal -->
  <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: black">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="color: black;">
          <div class="signup-box">
          <div class="container">
            <div class="text-box">
              <h1 class="custom-hdr">SIGN UP</h1>
              <h1 class="custom-hdr">SIGN UP</h1>
            </div>
          </div>
            <form method="post" action="registrationPost.php" id="register-form">
              <span class="register-form-message"></span>
              <div class="mb-3">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" style="background-color: #D6D3DB" required>
              </div>

               <div class="mb-3">
                <input type="text" name="username" class="form-control" id="username" placeholder="Username" style="background-color: #D6D3DB" required>
              </div>

              <div class="mb-3">
                <input type="password" name="password" class="form-control" id="regPass" placeholder="Password" style="background-color: #D6D3DB" required>
              </div>

              <p style=" font-size: 12px; text-align: center;">By clicking Sign Up, you are indicating that you have read and acknowledge the <a style="color:#5D228D"> Terms of Service</a> and <a style="color:#5D228D">Privacy Notice.</a></p>
              <button type="submit" id="signUpBtn"name="register" class="btn btn-primary btn-lg btn-block btn-submit">SIGN UP</button>

              <p class="mt-3">Have an account? <a class="form-btn" data-dismiss="modal" data-toggle="modal" data-target="#logInModal" style="color: #5D228D;">Log In</a>.</p>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Log In Modal -->
  <div class="modal fade" id="logInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: black">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="color: black;">
          <div class="signup-box">
          <div class="container">
            <div class="text-box">
              <h1 class="custom-hdr">LOG IN</h1>
              <h1 class="custom-hdr">LOG IN</h1>
            </div>
          </div>
           <form action="verification.php" method="post" id="login-form">
             <span class="login-form-message"></span>
            <div class="mb-3">
              <input type="text" name="login" class="form-control" id="loginUser" aria-describedby="emailHelp" placeholder="Email or Username" required>
            </div>
            <div class="mb-2">
              <input type="password" name="password" class="form-control" id="loginPass" placeholder="Password" required>
            </div>
            <a style=" color: #5D228D; font-size: 12px;" class="mb-2 ml-1 form-btn">Forgot Password?</a>
            <button type="submit" class="btn btn-primary btn-lg btn-block mt-2 btn-submit" id="loginBtn">LOG IN</button>
            <p class="mt-2">Don't have an account? <a class="form-btn" data-toggle="modal" data-target="#signUpModal" data-dismiss="modal" style="color: #5D228D;">Sign Up</a>.</p>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>


    <!-- Tab content for following and explore --> 
    <!-- content for explore -->   

<div class="container mt-5" style="margin-top: 70px !important;">
  <div>
  <h3 class="label-txt">Rising Artists</h3>
  </div>
   <div class="artists" id="wrapper">
    <div>
      <img id="artist" src="images/1.png" alt="..." onmouseover="document.getElementById('lia').style.visibility = 'visible'" onmouseout="document.getElementById('lia').style.visibility = 'hidden'">
    <div style="margin-top: -75px; margin-left: 48px;">
        <p class="text" id="lia" style="text-shadow: 3px 2px #3493D0;">lia</p>
    </div>
      </div>

     <div>
      <img id="artist" src="images/1.png" alt="..." onmouseover="document.getElementById('rica').style.visibility = 'visible'" onmouseout="document.getElementById('rica').style.visibility = 'hidden'">
    <div style="margin-top: -75px; margin-left: 37px;">
        <p class="text" id="rica" style="text-shadow: 3px 2px #3493D0;">lola</p>
    </div>
      </div>

      <div>
      <img id="artist" src="images/1.png" alt="..." onmouseover="document.getElementById('bi').style.visibility = 'visible'" onmouseout="document.getElementById('bi').style.visibility = 'hidden'">
    <div style="margin-top: -75px; margin-left: 52px;">
        <p class="text" id="bi" style="text-shadow: 3px 2px #3493D0;">BI</p>
    </div>
      </div>

      <div>
      <img id="artist" src="images/1.png" alt="..." onmouseover="document.getElementById('nikki').style.visibility = 'visible'" onmouseout="document.getElementById('nikki').style.visibility = 'hidden'">
    <div style="margin-top: -75px; margin-left: 34px;">
        <p class="text" id="nikki" style="text-shadow: 3px 2px #3493D0;">nikki</p>
    </div>
      </div>

      <img id="artist" src="images/1.png" alt="...">
      <img id="artist" src="images/2.png" alt="...">
      <img id="artist" src="images/3.png" alt="...">
      <img id="artist" src="images/4.png" alt="...">
      <img id="artist" src="images/1.png" alt="...">
    </div>
</div>
    <div class="container mt-5">
      <div>
  <h3 class="label-txt" style="margin-top: 90px !important;">Upcoming Virtual Concerts</h3>
  </div>
     <div class="category" id="wrapper" style="margin-top: -5px !important">
      <img id="category" src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
      <img id="category" src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
      <img id="category" src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
      <img id="category" src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
      <img id="category" src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
    </div>
    </div>

      <div class="container mt-5" style="margin-top: 90px !important;">
        <div>
  <h3 class="label-txt">Popular Live Streams</h3>
  </div>
       <div class="category mt-5" id="wrapper"  style="margin-top: -5px !important">
      <img id="category" src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
      <img id="category" src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
      <img id="category" src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
      <img id="category" src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
      <img id="category" src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
    </div>
  </div>

  <div class="container mt-5" style="margin-top: 90px !important;" >
    <div>
  <h3 class="label-txt">Live Streams We think you'll like</h3>
  </div>
      <div class="category mt-5" id="wrapper"  style="margin-top: -5px !important">
      <img id="category" src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
      <img id="category" src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
      <img id="category" src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
      <img id="category" src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
      <img id="category" src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
    </div>
  </div>

  <div class="container mt-5" style="margin-top: 90px !important;">
    <div>
  <h3 class="label-txt">trending pop songs</h3>
  </div>
    <div class="music mt-5" id="wrapper"  style="margin-top: -5px !important">
      <img id="music-home" src="images/album_art.jpg" alt="...">
      <img id="music-home" src="images/album_art.jpg" alt="...">
      <img id="music-home" src="images/album_art.jpg" alt="...">
      <img id="music-home" src="images/album_art.jpg" alt="...">
      <img id="music-home" src="images/album_art.jpg" alt="...">
      <img id="music-home" src="images/album_art.jpg" alt="...">
      <img id="music-home" src="images/album_art.jpg" alt="...">
      <img id="music-home" src="images/album_art.jpg" alt="...">
      <img id="music-home" src="images/album_art.jpg" alt="...">
    </div>
  </div>


  <div class="container mt-5" style="margin-top: 90px !important;">
    <div>
  <h3 class="label-txt">trending lofi songs</h3>
  </div>
    <div class="music mt-5" id="wrapper"  style="margin-top: -5px !important;">
      <img id="music-home" src="images/album_art.jpg" alt="...">
      <img id="music-home" src="images/album_art.jpg" alt="...">
      <img id="music-home" src="images/album_art.jpg" alt="...">
      <img id="music-home" src="images/album_art.jpg" alt="...">
      <img id="music-home" src="images/album_art.jpg" alt="...">
      <img id="music-home" src="images/album_art.jpg" alt="...">
      <img id="music-home" src="images/album_art.jpg" alt="...">
      <img id="music-home" src="images/album_art.jpg" alt="...">
      <img id="music-home" src="images/album_art.jpg" alt="...">
    </div>
  </div>

     <!--Start Footer -->

     <div class="container-fluid pb-0 mb-0 justify-content-center text-light">
        <footer style="height: 240px;">
            <div class="row my-5 justify-content-center py-5">
                 <div class="col-11">
                     <div class="row">
                        <div class="col-5 mr-5">
                            <img src="images/logo.png" class="menu-logo"> 
                               <div class="mr-3 mt-3">
                                 <small> <span>&#174;</span> Mellofi All Rights Reserved.</small>
                                 </div>
                                 <div>
                                  <small> 
                                  Disclaimer: This site does not own any files on its server. 
                                    All contents are from non-affiliated third parties. 
                                  </small>
                                      </div>
                                          </div>
                                   <div class="col-xl-2 col-md-4 col-sm-4 col-10 ml-5 pl-5">
                                       <h6 class="mb-3 mb-lg-4 bold-text "><b>Links</b></h6>
                                       <ul class="list-unstyled">
                                           <li>Home</li>
                                           <li>About</li>
                                           <li>Explore</li>
                                       </ul>
                                   </div>
                                   <div class="col-xl-2 col-md-4 col-sm-4 col-12 ml-5  pl-5">
                                       <h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5"><b>Help</b></h6>
                                       <ul class="list-unstyled">
                                           <li>Contact</li>
                                           <li>FAQ</li>
                                           <li>Request</li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </footer>
               </div>
               
    <!-- End Footer -->


    <!--Swiper Library-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js">
    </script> 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
     <script src="js/script.js"></script>
    <script src="js/app.js"></script>
    <script src="js/app2.js"></script>
  </body>
</html>