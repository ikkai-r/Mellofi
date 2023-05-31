<?php
  session_start();

  if ($_GET['musician_id'] == '') {
    header('Location: homepage.php?musician_id=none');
  }
    ?>

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
    <link rel="stylesheet" type="text/css" href="css/app5.css"> 
    <link rel="stylesheet" type="text/css" href="css/style.css">    
    <link rel="stylesheet" type="text/css" href="css/style1.css">
     <link rel="stylesheet" type="text/css" href="css/style2.css">
     <link rel="stylesheet" type="text/css" href="css/footer.css">      

    <title>Mellofi</title>

  </head>
  <body>

   <!-- Start Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-custom-nav" style="z-index: 2">
      <a class="navbar-brand mr-3 ml-3" href="index.php">
        <img class="menu-logo" src="images/logo.png" alt="MELLOFI Logo">
      </a>
   <?php

        if (isset($_SESSION['isLogin'])) {
     if($_SESSION['isLogin'] == "true"){
       echo '  <ul class="navbar-nav mr-auto ml-2">
             <li class="nav-item">
              <a class="nav-link nav-item-custom" href="homepage.php" style="margin-left: 2px;">
                HOME
              </a>
            </li>
        <li class="nav-item">
              <a class="nav-link mr-2 nav-item-custom" href="following.php" style="margin-left: 9px;">
                FOLLOWING
              </a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-item-custom" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              MUSIC
            </a>
                       <div class="dropdown-menu music-nav" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="pop.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Pop
              </a>
              <a class="dropdown-item" href="hiphop.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Hip-hop
              </a>
              <a class="dropdown-item" href="rock.php">
                <i class="fas fa-hand-rock" style="margin-right: 7px"></i> Rock
              </a>
              <a class="dropdown-item" href="chill.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Chill
              </a>
              <a class="dropdown-item" href="electronic.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Electronic
              </a>
              <a class="dropdown-item" href="acoustic.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Acoustic
              </a>
              <a class="dropdown-item" href="folk.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Folk
              </a>
              <a class="dropdown-item" href="soul.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Soul
              </a>
            </div>
          </li>
          </ul>';
        } else if ($_SESSION['isLogin'] =="false") {
          echo '  <ul class="navbar-nav mr-auto ml-2">
        <li class="nav-item">
              <a class="nav-link mr-2 nav-item-custom" href="homepage.php" style="margin-left: 2px;">
                HOME
              </a>
            </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-item-custom" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              MUSIC
            </a>
                           <div class="dropdown-menu music-nav" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="pop.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Pop
              </a>
              <a class="dropdown-item" href="hiphop.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Hip-hop
              </a>
              <a class="dropdown-item" href="rock.php">
                <i class="fas fa-hand-rock" style="margin-right: 7px"></i> Rock
              </a>
              <a class="dropdown-item" href="chill.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Chill
              </a>
              <a class="dropdown-item" href="electronic.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Electronic
              </a>
              <a class="dropdown-item" href="acoustic.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Acoustic
              </a>
              <a class="dropdown-item" href="folk.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Folk
              </a>
              <a class="dropdown-item" href="soul.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Soul
              </a>
            </div>
          </li>
          </ul>';
        }
          } else {
            echo '  <ul class="navbar-nav mr-auto ml-2">
        <li class="nav-item">
              <a class="nav-link mr-2 nav-item-custom" href="homepage.php" style="margin-left: 2px;">
                HOME
              </a>
            </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-item-custom" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              MUSIC
            </a>
                          <div class="dropdown-menu music-nav" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="pop.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Pop
              </a>
              <a class="dropdown-item" href="hiphop.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Hip-hop
              </a>
              <a class="dropdown-item" href="rock.php">
                <i class="fas fa-hand-rock" style="margin-right: 7px"></i> Rock
              </a>
              <a class="dropdown-item" href="chill.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Chill
              </a>
              <a class="dropdown-item" href="electronic.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Electronic
              </a>
              <a class="dropdown-item" href="acoustic.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Acoustic
              </a>
              <a class="dropdown-item" href="folk.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Folk
              </a>
              <a class="dropdown-item" href="soul.php">
                <i class="fas fa-music" style="margin-right: 7px"></i> Soul
              </a>
            </div>
          </li>
          </ul>';
          }
?>
    
               <!-- Button trigger modal -->
            <?php


           if (isset($_SESSION['isLogin'])) {
             if ($_SESSION['isLogin'] == "true") {

                  $servername = "localhost";
                  $db_username = "root";
                  $db_password = "";
                  $database = "mellofi";

                  $conn = mysqli_connect($servername, $db_username, $db_password, $database);

                  $sql_musician = "
                  SELECT 
                   *
                   FROM 
                    `musician` 
                   INNER JOIN 
                    `users` 
                   ON 
                    `musician`.username = '".$_SESSION['username']."'
                  ";
                  $result_musician = mysqli_query($conn, $sql_musician);
                  $count = mysqli_num_rows($result_musician);

              if ($count > 0) {

                  $row = mysqli_fetch_assoc($result_musician);

                //if it is a musician
      echo'
      <!-- Search Bar -->
              <form style="width: 500px; margin-left: 260px"action="search.php" method="get" class="search">
              <input type="text" class="searchTerm" placeholder="Search" aria-label="Search" name="query"required style="background-color: #E3DEED">
                <button type="submit" class="searchButton"><i class="fa fa-search"></i></button>
              </form>   

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i><span class="username">'. $_SESSION["username"] .'
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="profile.php?musician_id='.$row['musician_id'].'">
                <i class="fas fa-user" style="margin-right: 8px;"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="dashboard.php?musician_id='.$row['musician_id'].'">
                <i class="fas fa-headphones" style="margin-right: 8px;"></i> Creator Studio
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="musician-settings.php?musician_id='.$row['musician_id'].'">
                <i class="fas fa-cog" style="margin-right: 8px;"></i></i>Settings
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">
                <i class="fas fa-sign-out-alt" style="margin-right: 8px;"></i> Log out
              </a>
            </div>
          </li>
        </ul>
      </div>';

              } else {
                //if it is not a musician
          $sql_listener = "
                  SELECT 
                   *
                   FROM 
                    `listener` 
                   INNER JOIN 
                    `users` 
                   ON 
                    `listener`.username = '".$_SESSION['username']."'
                  ";
                  $result_listener = mysqli_query($conn, $sql_listener);
                  $row_listener = mysqli_fetch_assoc($result_listener);


        echo'
        <!-- Search Bar -->
              <form style="width: 500px; margin-left: 260px"action="search.php" method="get" class="search">
              <input type="text" class="searchTerm" placeholder="Search" aria-label="Search" name="query"required style="background-color: #E3DEED">
                <button type="submit" class="searchButton"><i class="fa fa-search"></i></button>
              </form>   

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i><span class="username">'. $_SESSION["username"] .'
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="listener-settings.php?listener_id='.$row_listener["listener_id"].'">
                <i class="fas fa-cog" style="margin-right: 5px;"></i></i>Settings
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">
                <i class="fas fa-sign-out-alt"></i> Log out
              </a>
            </div>
          </li>
        </ul>
      </div>';
              }
            } else if ($_SESSION['isLogin'] == "false") {
              echo'
                <!-- Search Bar -->
              <form style="width: 500px; margin-right: 500px"action="search.php" method="get" class="search">
              <input type="text" class="searchTerm" placeholder="Search" aria-label="Search" name="query"required style="background-color: #E3DEED">
                <button type="submit" class="searchButton"><i class="fa fa-search"></i></button>
              </form>     
      
      <button type="button" class="btn btn-primary btn-lg mr-4 mt-3 btn-modal" data-toggle="modal" data-target="#signUpModal" style="--border-color: white;">
                Sign Up
              </button>
              <button type="button" class="btn btn-primary btn-lg mr-4 mt-3 btn-modal" data-toggle="modal" data-target="#logInModal" style="--border-color: white;">Log In</button>';
            }
          } else {
             echo'  
        <!-- Search Bar -->
              <form style="width: 500px; margin-right: 500px"action="search.php" method="get" class="search">
              <input type="text" class="searchTerm" placeholder="Search" aria-label="Search" name="query"required style="background-color: #E3DEED">
                <button type="submit" class="searchButton"><i class="fa fa-search"></i></button>
              </form>     
      
      <button type="button" class="btn btn-primary btn-lg mr-4 mt-3 btn-modal" data-toggle="modal" data-target="#signUpModal" style="--border-color: white;">
                Sign Up
              </button>
              <button type="button" class="btn btn-primary btn-lg mr-4 mt-3 btn-modal" data-toggle="modal" data-target="#logInModal" style="--border-color: white;">Log In</button>';
          }
              ?>
            </p>  
      
    </nav>


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


   <!-- Be A Member Modal -->
  <div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #101010">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
       
          <div class="container container-member">
            <div class="text-box row artist-container">
              <div class="col-3">
                <i class="fas fa-crown" style="margin-left: 42px; font-size: 20px; color: #D9B2FF"></i>
          <?php

            $artist = [];

            $servername = "localhost";
            $db_username = "root";
            $db_password = "";
            $database = "mellofi";

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);

            $sql_artist = "
                 SELECT 
                  `pins`.flair_pin_src, 
                  `musician`.username,
                  `musician`.profile_pic 
                 FROM 
                  `pins` 
                 INNER JOIN 
                  `musician` 
                 ON 
                  `pins`.musician_id = '".$_GET['musician_id']."'
                WHERE 
                 `musician`.musician_id = '".$_GET['musician_id']."'
            ";

            $result_artist = mysqli_query($conn, $sql_artist);
                while ($row = mysqli_fetch_assoc($result_artist)) {
                  array_push($artist, $row);
                }

                $index_one = 0;
        
            echo '
              <a href="profile.php?musician_id='.$_GET['musician_id'].'"><img src="upload/images/'.$artist[$index_one]["profile_pic"].'" class="artist-membership"></a>
              </div>
              <div class="col-9" style=" margin-top: 20px; padding-left: 23px; margin-bottom: -12px">
              <h3 style="margin-bottom: -5px">BE A MEMBER OF</h3>
              <h4><a href="profile.php?musician_id='.$_GET['musician_id'].'" style="color: #E3DCFF; text-transform: uppercase">'.$artist[$index_one]["username"].'</a></h4>
              <br>
               <p style="font-size: 13px; margin-top: -20px">Gain access to premium member perks!</p>
               <img src="https://nevagfx.files.wordpress.com/2017/07/img_08582.gif" style="width: 25px; margin-left: 260px; margin-top: -45px; position: absolute;">
              </div>
            </div>
            <div style="margin-top: 40px; margin-bottom: 10px">
              <h4 style="font-size: 26px">BECOME A <span style="color:  #E3DCFF">MEMBER!</span></h4>
              <button class="btn" style="float:right; font-size: 11px; margin-top: -45px;" data-toggle="modal" data-target="#purchaseModal" data-dismiss="modal"><i class="fas fa-crown" style="margin-right: 5px"></i>subscribe | PHP 199.99</button>
            </div>
            <hr style="background-color: white">
            <div style="margin-top: 30px;">
                <p style="font-size: 13px; text-align: center;">By <span style="color: #E3DCFF">subscribing</span>, you would directly support the artist and you would instantly receive exclusive <span style="color: #E3DCFF; cursor: auto;">benefits!</span></p>
                <div style="width: 498px; height: 70px; background-color: #7128BA; margin-left: -15px; text-align: center; margin-top: 30px;">
                  <h3 style="padding-top: 20px;"><i class="fas fa-star" style="margin-right: 10px;"></i>EXCLUSIVE BENEFITS</h3>
                </div>
                <p style="font-size: 14px; margin-top: 30px;">Gain access to premium content on <a href="profile.php?musician_id='.$_GET['musician_id'].'" style="color: #E3DCFF;">their</a> channel.</p>
                <p style="font-size: 14px; margin-top: -5px;">Unlock <span style="color: #E3DCFF">10 spotlights</span> that refresh monthly to highlight your message during live chat for personal song requests and more!</p>
                <p style="font-size: 14px; margin-top: -5px;">Show off your exclusive <span style="color: #E3DCFF">flair pin</span> next to your name in live chat.</p>
                <p style="font-size: 14px; color: #E3DCFF">Flair pins:</p>';

                for ($i=0; $i < count($artist); $i++) { 
                  echo '<img src="'.$artist[$i]["flair_pin_src"].'" style="width: 35px;">';
                }

          ?>
            </div>
          </div>
        </div>
    </div>
  </div>

  <!-- Subscription Purchase Modal -->

  <div class="modal fade" id="purchaseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: black">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modal-purchase"style="background-color: #101010; height: 600px;">
          <div class="container" style="text-align: center;">
            <div class="text-box">
              <h3 class="custom-hdr">SUBSCRIPTION PURCHASE</h3>
            </div>
          </div>
          <h5>Choose a subscription plan:</h5>
          <div style="padding-top: 10px !important; display: flex;">
             <div class="renewal-div" id="monthly" style="margin-right: 15px;" >
               <p style="margin-top: 5px; margin-left: 10px; margin-bottom: 10px">Renews monthly.</p>
               <p style="font-size:13px; margin-left: 10px; ">PHP 199.99</p>
             </div>
              <div class="renewal-div" id="three-months" style=" margin-right: 15px;">
               <h6 style="margin-top: 8px; margin-left: 10px; margin-bottom: 12px">Renews every 3 months.</h6>
                <p style="font-size:13px; margin-left: 10px; ">PHP 664.99</p>
             </div>
              <div class="renewal-div" id="six-months">
               <h6 style="margin-top: 8px; margin-left: 10px; margin-bottom: 12px;">Renews every 6 months.</h6>
                <p style="font-size:13px; margin-left: 10px; ">PHP 1,274.99</p>
             </div>
          </div>
          <hr style="background-color: #525252; margin-top: 25px">
          <div style="padding-top: 10px !important;">
            <h5>Choose a payment method:</h5>
            <div style="display: flex; padding-top: 10px">
              <div class="payment-methods" id="paypal">
                <img style="width: 85px; margin-left: 14px; margin-top: 27px;"src="images/paypal-method.png">
             </div>
               <div class="payment-methods" style="margin-left: 17px;"  id="gcash">
                <img style="width: 100px; margin-left: 7px; margin-top: 23px;"src="images/gcash-method.png">
             </div>
             <div class="payment-methods" style="margin-left: 17px;" id="paymaya">
                <img style="width: 95px; margin-left: 9px; margin-top: 23px;"src="images/paymaya-method.png">
             </div>
             <div class="payment-methods" style="margin-left: 17px;"  id="7eleven">
                <img style="width: 90px; margin-left: 13px; margin-top: 5px;"src="images/7eleven-method.png">
             </div>
             <div class="payment-methods" style="margin-left: 17px;" id="bpi">
                <img style="width: 85px; margin-left: 17px; margin-top: -4px;" src="images/bpi-method.png">
             </div>
             <div class="payment-methods" style="margin-left: 17px;" id="bdo">
                <img style="width: 80px; margin-left: 20px; margin-top: 28px;" src="images/bdo-method.png">
             </div>
            </div>
          </div>
          <div style="display: flex; padding-top: 10px">
             <div class="payment-methods" id="mastercard">
                <img style="width: 55px; margin-left: 29px; margin-top: 22px;"src="images/mastercard.png">
             </div>
             <div class="payment-methods"  style="margin-left: 14px;" id="visa">
                <img style="width: 55px; margin-left: 28px; margin-top: 23px;"src="images/visa.png">
             </div>
               <div class="payment-methods" style="margin-left: 14px;" id="grabpay"> 
                <img style="width: 90px; margin-left: 13px; margin-top: 27px;"src="images/grabpay-method.png">
             </div>
             <div class="payment-methods" style="margin-left: 14px;" id="dragonpay">
                <img style="width: 95px; margin-left: 9px; margin-top: 20px;"src="images/dragonpay-method.png">
             </div>
           </div>
          <div style="padding-top: 20px !important;">
                <hr style="background-color: #525252;">
            <h5>Purchase Summary</h5>
            <div>
              <?php

            $artist = [];

            $servername = "localhost";
            $db_username = "root";
            $db_password = "";
            $database = "mellofi";

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);

            $sql_artist = "
                 SELECT 
                 username
                 FROM 
                  `musician` 
                 WHERE
                  musician_id = '".$_GET['musician_id']."'
            ";

            $result_artist = mysqli_query($conn, $sql_artist);
                while ($row = mysqli_fetch_assoc($result_artist)) {
                  array_push($artist, $row);
                }

                $index = 0;

                echo'<h6 style="margin-left: 20px; margin-top: 13px; text-transform: uppercase;">PREMIUM MEMBERSHIP FOR '.$artist[$index]["username"].'</h6>';

              ?>
             
              <p id="payment-desc" style="font-size: 12px; margin-top: -7px; color: #EAEAEA; margin-left: 20px;"></p>
              <p id="date" style="font-size: 12px; margin-top: -15px; color: #EAEAEA; margin-left: 20px;"></p>
              <p  style="font-size: 15px; float: right; margin-top: -30px">Total including tax</p>
              <p id="total-payment" style="font-size: 20px; float: right; margin-top: -5px; margin-right: -130px;"></p>
            </div>
            <hr style="background-color: #525252; margin-top: 55px">
            <p style="color: #EAEAEA; font-size: 12px">Before clicking "Complete Purchase", you must be 100% sure that you want to purchase the premium subscription and you have read and understand the Mellofi's Terms and Condition. Furthermore, by confirming the purchase, you agree to Mellofi's Terms of Sale and acknowledge our Privacy Policy. After confirmation, cancellation won't be available and your subscription would be recorded.</p>
            <div>
              <hr style="background-color: #525252; margin-top: 5px">
              <h6>To complete your purchase, we will redirect you to <span id="payment-final"></span></h6>
              <a id="purchase" style="color: white" target="_blank"><button class="btn" id="submit-payment" style="float: right; margin-bottom: 12px" disabled>COMPLETE PURCHASE</button></a>
            </div>
                 <br><br>
          </div>
          </div>
        </div>
    </div>
  </div>


  <div>
    <?php
      
      $user_musician = [];

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_user_musician = "
          SELECT 
          *
          FROM 
          `musician`
          WHERE
          musician_id = '".$_GET['musician_id']."'
      ";

      $result_user_musician = mysqli_query($conn, $sql_user_musician);
          while ($row = mysqli_fetch_assoc($result_user_musician)) {
            array_push($user_musician, $row);
          }


        
          for ($index = 0; $index < count($user_musician); $index++) {
            if ($user_musician[$index]["followers"] == 1) {
              // if follower is 1 
                echo '  
            <div class="custom-container mt-5 header-tab" style="background-image: url(upload/images/'.$user_musician[$index]["profile_pic"].'); opacity: 0.5;">
          </div>
              <div class="custom-container" style="position: absolute; margin-top: -150px;">
        <div style="margin-left: 30px; margin-top: -20px; width: 1420px">
              <img src="upload/images/'.$user_musician[$index]["profile_pic"].'" alt="" style="border-radius: 50%; width: 150px; height: 150px; ">
          <div style="margin-left: 170px; margin-top: -70px">
            <h2 style="margin-bottom: -1px; margin-top: -20px">'.$user_musician[$index]["username"].'</h2>
              <p style="color: #ECECEC;">'.$user_musician[$index]["followers"].' Follower</p>
          </div>
             ';
            } else {

                echo '  
            <div class="custom-container mt-5 header-tab" style="background-image: url(upload/images/'.$user_musician[$index]["profile_pic"].'); opacity: 0.5;">
          </div>
              <div class="custom-container" style="position: absolute; margin-top: -150px;">
        <div style="margin-left: 30px; margin-top: -20px; width: 1420px">
              <img src="upload/images/'.$user_musician[$index]["profile_pic"].'" alt="" style="border-radius: 50%; width: 150px; height: 150px; ">
          <div style="margin-left: 170px; margin-top: -70px">
            <h2 style="margin-bottom: -1px; margin-top: -20px">'.$user_musician[$index]["username"].'</h2>
              <p style="color: #ECECEC;">'.$user_musician[$index]["followers"].' Followers</p>
          </div>
             ';

            }

        if (isset($_SESSION['isLogin'])) {
            //if there is login
          if ($_SESSION['isLogin'] == "true") {
            // if login is true
            
             if($user_musician[$index]["username"] != $_SESSION['username']){

            //if you're not the owner

               $subscription = [];
               $following = [];

                $servername = "localhost";
                $db_username = "root";
                $db_password = "";
                $database = "mellofi";

                $conn = mysqli_connect($servername, $db_username, $db_password, $database);

                $sql_subscription = "
                    SELECT 
                    *
                    FROM 
                    `subscription`
                    WHERE
                    musician_id = '".$_GET['musician_id']."'
                    AND 
                    username = '".$_SESSION['username']."'
                ";

                $sql_following = "
                    SELECT 
                    *
                    FROM 
                    `following`
                    WHERE
                    musician_id = '".$_GET['musician_id']."'
                    AND 
                    username = '".$_SESSION['username']."'
                ";

                $sql_pins = "
                    SELECT 
                    * 
                    FROM 
                    `pins`
                    WHERE 
                     musician_id = '".$_GET['musician_id']."'
                ";

                $result_pins = mysqli_query($conn, $sql_pins);
                $count_pins = mysqli_num_rows($result_pins);

                $result_following = mysqli_query($conn, $sql_following);
                $count_following = mysqli_num_rows($result_following);

                $result_subscription = mysqli_query($conn, $sql_subscription);
                $count_subscription = mysqli_num_rows($result_subscription);

              if ($count_pins > 0) {
                //if there is pins

                  if ($count_subscription > 0) {
                    //if there is a subscription

                        if ($count_following > 0) {
                          //if you follow them
                            echo '
                            <div style="margin-top: -160px">
                              <button type="button" id="unfollow" class="btn" style="float: right; margin-right: 15px">Unfollow</button>
                            </div>';
                        } else {
                          //if you don't follow them
                        echo '
                            <div style="margin-top: -160px">
                              <button type="button" id="follow" class="btn" style="float: right; margin-right: 15px">Follow</button>
                            </div>';
                        } 
          } else {
                  // no subscription 

                       if ($count_following > 0) {
                      //if you follow them
                        echo '
                        <div style="margin-top: -160px">
                        <button class="btn" data-toggle="modal" data-target="#memberModal" style="float: right; margin-right: 15px">Be a member</button>
                          <button type="button" id="unfollow" class="btn" style="float: right; margin-right: 11px">Unfollow</button>
                        </div>';
                    } else {
                      //if you don't follow them
                    echo '
                        <div style="margin-top: -160px">
                        <button class="btn" data-toggle="modal" data-target="#memberModal" style="float: right; margin-right: 15px">Be a member</button>
                          <button type="button" id="follow" class="btn" style="float: right; margin-right: 11px">Follow</button>
                        </div>';
                  }
          } 

              } else {
                //if there is no pins

                     if ($count_following > 0) {
                          //if you follow them
                            echo '
                            <div style="margin-top: -160px">
                              <button type="button" id="unfollow" class="btn" style="float: right; margin-right: 15px">Unfollow</button>
                            </div>';
                        } else {
                          //if you don't follow them
                        echo '
                            <div style="margin-top: -160px">
                              <button type="button" id="follow" class="btn" style="float: right; margin-right: 15px">Follow</button>
                            </div>';
                        } 

              }

        }
        } else {

          // if login is false

            $sql_pins = "
                    SELECT 
                    * 
                    FROM 
                    `pins`
                    WHERE 
                     musician_id = '".$_GET['musician_id']."'
                ";

                $result_pins = mysqli_query($conn, $sql_pins);
                $count_pins = mysqli_num_rows($result_pins);

          if ($count_pins > 0) {
            //yes pins
               
              echo '<div style="margin-top: -160px">
                 <button class="btn" data-toggle="modal" data-target="#logInModal" style="float: right; margin-right: 15px">Be a member</button>
              <button type="button" data-toggle="modal" data-target="#logInModal" class="btn" style="float: right; margin-right: 11px">Follow</button>
              </div>';
          } else {
            //no pins
               echo '<div style="margin-top: -160px">
              <button type="button" data-toggle="modal" data-target="#logInModal" class="btn" style="float: right; margin-right: 11px">Follow</button>
              </div>';
          }

         
          } 
      }
      else {

          $sql_pins = "
                    SELECT 
                    * 
                    FROM 
                    `pins`
                    WHERE 
                     musician_id = '".$_GET['musician_id']."'
                ";

                $result_pins = mysqli_query($conn, $sql_pins);
                $count_pins = mysqli_num_rows($result_pins);

            //if there is no login

              if ($count_pins > 0) {
            //yes pins
               
              echo '<div style="margin-top: -160px">
                 <button class="btn" data-toggle="modal" data-target="#logInModal" style="float: right; margin-right: 15px">Be a member</button>
              <button type="button" data-toggle="modal" data-target="#logInModal" class="btn" style="float: right; margin-right: 11px">Follow</button>
              </div>';
          } else {
            //no pins
               echo '<div style="margin-top: -160px">
              <button type="button" data-toggle="modal" data-target="#logInModal" class="btn" style="float: right; margin-right: 11px">Follow</button>
              </div>';
          }
        }
          }
          ?>    
      </div>
    </div>
  </div>

<!--Start Tabs-->
  <div class="custom-container" style="margin-top: 30px !important">
    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="live-tab" data-toggle="tab" href="#live" role="tab" aria-controls="live" aria-selected="true" style="font-weight: normal;">Live</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="videos-tab" data-toggle="tab" href="#videos" role="tab" aria-controls="videos" aria-selected="false"  style="font-weight: normal;">Videos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="tracks-tab" data-toggle="tab" href="#tracks" role="tab" aria-controls="tracks" aria-selected="false"  style="font-weight: normal;">Tracks</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" id="schedule-tab" data-toggle="tab" href="#schedule" role="tab" aria-controls="schedule" aria-selected="false"  style="font-weight: normal;">Schedule</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false"  style="font-weight: normal;">About</a>
      </li>
    </ul>
  </div>
<!--End Tabs-->


<!--Start Tab Content-->
    <div class="tab-content" id="myTabContent">

  
  <!--Start Live Tab-->
 
    <div class="tab-pane fade show active" id="live" role="tabpanel" aria-labelledby="live-tab">
      <?php

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_user = "
          SELECT 
          *
          FROM 
          `musician`
          WHERE
          musician_id = '".$_GET['musician_id']."'
      ";

      $result_user = mysqli_query($conn, $sql_user);
      $row_user = mysqli_fetch_assoc($result_user);

      if (isset($_SESSION["isLogin"])) {
        if ($_SESSION["isLogin"] == "true") {

            if ($row_user["username"] == $_SESSION["username"]) {
       echo'
        <div class="custom-container mt-5" style="margin-bottom: -25px; text-align:right; padding-left:20px; margin-top: 40px !important;">
        <h1 style="font-weight: bold">MANAGE STREAMS<a href="streamSetup.php?musician_id='.$_GET["musician_id"].'" class="pen"><i class="fas fa-pen-square" style="font-size: 40px; margin-left: 19px"></i></a></h1>
        </div>
        <br>';
          
        }
      }

      }


      ?>
  <div class="row custom-container">
    <?php

      $streams = [];

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_stream = "
        SELECT 
        * 
        FROM 
        livestreams 
        INNER JOIN 
        musician 
        WHERE 
        `livestreams`.musician_id = '".$_GET["musician_id"]."' 
        AND 
        `musician`.musician_id = '".$_GET["musician_id"]."'
        ORDER By 
        `livestreams`.stream_id ASC
      ";

      $result_stream = mysqli_query($conn, $sql_stream);
          while ($row = mysqli_fetch_assoc($result_stream)) {
            array_push($streams, $row);
          }

          $count_stream = mysqli_num_rows($result_stream);

          if ($count_stream > 0) {
            // if there are live
                for ($index = 0; $index < count($streams); $index++) {
                  //if not long title 
                    if (strlen($streams[$index]["title"]) < 27) {
                      //if live
                        if ($streams[$index]["status"] == "live") {

                          if ($streams[$index]["price"] == "premium") {
                            //if premium

             echo '
               <div class="col-4 mt-5">
                 <div style="margin-left: 10px">
                 <a href="livestream.php?stream_id='.$streams[$index]["stream_id"].'">
                  <img src="upload/images/'.$streams[$index]["thumbnail"].'" class="thumbnail">
                   <h6 style="position: absolute; margin-top: -235px; margin-left: 16px; background-color: red; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white">LIVE</h6>
                   <h6 style="position: absolute; margin-top: -35px; margin-left: 370px; background-color: green; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white; border-radius: 10px">PREMIUM</h6>
                  </a>
                          <div class="row" style="margin-top: 10px">
                    <div class="col-2">
                    <a href="profile.php?musician_id='.$streams[$index]["musician_id"].'">
                      <img src="upload/images/'.$streams[$index]["profile_pic"].'" class="profile-pic">
                      </a>
                    </div>
                    <div class="col-10" style="text-align: left !important">
                     <a href="livestream.php?stream_id='.$streams[$index]["stream_id"].'" class="stream-txt" style="color: white">' . $streams[$index]["title"] . '</a>
                     <br>
                   <a href="profile.php?musician_id='.$streams[$index]["musician_id"].'"class="user-live">'.$streams[$index]["username"].'</a>
                   <p class="viewer-cnt">'.$streams[$index]["viewer_cnt"].' viewers <span style="font-size: 12px;">| Started streaming '.$streams[$index]["stream_time"].' ago<span></p>
                    </div>
                  </div>
                </div>
            </div>';
                          } else {
                            //not premium


             echo '
               <div class="col-4 mt-5">
                 <div style="margin-left: 10px">
                 <a href="livestream.php?stream_id='.$streams[$index]["stream_id"].'">
                  <img src="upload/images/'.$streams[$index]["thumbnail"].'" class="thumbnail">
                   <h6 style="position: absolute; margin-top: -235px; margin-left: 16px; background-color: red; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white">LIVE</h6>
                  </a>
                          <div class="row" style="margin-top: 10px">
                    <div class="col-2">
                    <a href="profile.php?musician_id='.$streams[$index]["musician_id"].'">
                      <img src="upload/images/'.$streams[$index]["profile_pic"].'" class="profile-pic">
                      </a>
                    </div>
                    <div class="col-10" style="text-align: left !important">
                     <a href="livestream.php?stream_id='.$streams[$index]["stream_id"].'" class="stream-txt" style="color: white">' . $streams[$index]["title"] . '</a>
                     <br>
                   <a href="profile.php?musician_id='.$streams[$index]["musician_id"].'"class="user-live">'.$streams[$index]["username"].'</a>
                   <p class="viewer-cnt">'.$streams[$index]["viewer_cnt"].' viewers <span style="font-size: 12px;">| Started streaming '.$streams[$index]["stream_time"].' ago<span></p>
                    </div>
                  </div>
                </div>
            </div>';
                          }

                        } else {
                          // if not live

                             if ($streams[$index]["price"] == "premium") {
                            //if premium

                                  echo '
                       <div class="col-4 mt-5">
                         <div style="margin-left: 10px">
                         <a href="livestream.php?stream_id='.$streams[$index]["stream_id"].'">
                          <img src="upload/images/'.$streams[$index]["thumbnail"].'" class="thumbnail">
                            <h6 style="position: absolute; margin-top: -35px; margin-left: 370px; background-color: green; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white; border-radius: 10px">PREMIUM</h6>
                          </a>
                                  <div class="row" style="margin-top: 10px">
                            <div class="col-2">
                            <a href="profile.php?musician_id='.$streams[$index]["musician_id"].'">
                              <img src="upload/images/'.$streams[$index]["profile_pic"].'" class="profile-pic">
                              </a>
                            </div>
                            <div class="col-10" style="text-align: left !important">
                             <a href="livestream.php?stream_id='.$streams[$index]["stream_id"].'" class="stream-txt" style="color: white">' . $streams[$index]["title"] . '</a>
                             <br>
                           <a href="profile.php?musician_id='.$streams[$index]["musician_id"].'"class="user-live">'.$streams[$index]["username"].'</a>
                           <p class="viewer-cnt">'.$streams[$index]["viewer_cnt"].' viewers <span style="font-size: 12px;">| Started streaming '.$streams[$index]["stream_time"].' ago<span></p>
                            </div>
                          </div>
                        </div>
                    </div>';

                             } else {
                              //not premium

                                  echo '
                       <div class="col-4 mt-5">
                         <div style="margin-left: 10px">
                         <a href="livestream.php?stream_id='.$streams[$index]["stream_id"].'">
                          <img src="upload/images/'.$streams[$index]["thumbnail"].'" class="thumbnail">
                          </a>
                                  <div class="row" style="margin-top: 10px">
                            <div class="col-2">
                            <a href="profile.php?musician_id='.$streams[$index]["musician_id"].'">
                              <img src="upload/images/'.$streams[$index]["profile_pic"].'" class="profile-pic">
                              </a>
                            </div>
                            <div class="col-10" style="text-align: left !important">
                             <a href="livestream.php?stream_id='.$streams[$index]["stream_id"].'" class="stream-txt" style="color: white">' . $streams[$index]["title"] . '</a>
                             <br>
                           <a href="profile.php?musician_id='.$streams[$index]["musician_id"].'"class="user-live">'.$streams[$index]["username"].'</a>
                           <p class="viewer-cnt">'.$streams[$index]["viewer_cnt"].' viewers <span style="font-size: 12px;">| Started streaming '.$streams[$index]["stream_time"].' ago<span></p>
                            </div>
                          </div>
                        </div>
                    </div>';
                             }

                        }
                    } else {
                      //if long title

                        if ($streams[$index]["status"] == "live") {
                          //if live

                           if ($streams[$index]["price"] == "premium") {
                            //if premium
              echo '
               <div class="col-4 mt-5">
                 <div style="margin-left: 10px">
                 <a href="livestream.php?stream_id='.$streams[$index]["stream_id"].'">
                  <img src="upload/images/'.$streams[$index]["thumbnail"].'" class="thumbnail">
                 <h6 style="position: absolute; margin-top: -235px; margin-left: 16px; background-color: red; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white">LIVE</h6>
                    <h6 style="position: absolute; margin-top: -35px; margin-left: 370px; background-color: green; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white; border-radius: 10px">PREMIUM</h6>
                  </a>
                          <div class="row" style="margin-top: 10px">
                    <div class="col-2">
                    <a href="profile.php?musician_id='.$streams[$index]["musician_id"].'">
                      <img src="upload/images/'.$streams[$index]["profile_pic"].'" class="profile-pic">
                      </a>
                    </div>
                    <div class="col-10" style="text-align: left !important">
                     <a href="livestream.php?stream_id='.$streams[$index]["stream_id"].'" class="stream-txt" style="color: white" title="'.$streams[$index]["title"].'">' . substr($streams[$index]["title"], 0, 26) . '... </a>
                     <br>
                   <a href="profile.php?musician_id='.$streams[$index]["musician_id"].'"class="user-live">'.$streams[$index]["username"].'</a>
                   <p class="viewer-cnt">'.$streams[$index]["viewer_cnt"].' viewers <span style="font-size: 12px;">| Started streaming '.$streams[$index]["stream_time"].' ago<span></p>
                    </div>
                  </div>
                </div>
            </div>';

                           } else {
                            //if not premium

                                         echo '
               <div class="col-4 mt-5">
                 <div style="margin-left: 10px">
                 <a href="livestream.php?stream_id='.$streams[$index]["stream_id"].'">
                  <img src="upload/images/'.$streams[$index]["thumbnail"].'" class="thumbnail">
                 <h6 style="position: absolute; margin-top: -235px; margin-left: 16px; background-color: red; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white">LIVE</h6>
                  </a>
                          <div class="row" style="margin-top: 10px">
                    <div class="col-2">
                    <a href="profile.php?musician_id='.$streams[$index]["musician_id"].'">
                      <img src="upload/images/'.$streams[$index]["profile_pic"].'" class="profile-pic">
                      </a>
                    </div>
                    <div class="col-10" style="text-align: left !important">
                     <a href="livestream.php?stream_id='.$streams[$index]["stream_id"].'" class="stream-txt" style="color: white" title="'.$streams[$index]["title"].'">' . substr($streams[$index]["title"], 0, 26) . '... </a>
                     <br>
                   <a href="profile.php?musician_id='.$streams[$index]["musician_id"].'"class="user-live">'.$streams[$index]["username"].'</a>
                   <p class="viewer-cnt">'.$streams[$index]["viewer_cnt"].' viewers <span style="font-size: 12px;">| Started streaming '.$streams[$index]["stream_time"].' ago<span></p>
                    </div>
                  </div>
                </div>
            </div>';
                           }
                        } else {

                          //if not live

                           if ($streams[$index]["price"] == "premium") {
                            //premium
                      echo '
               <div class="col-4 mt-5">
                 <div style="margin-left: 10px">
                 <a href="livestream.php?stream_id='.$streams[$index]["stream_id"].'">
                  <img src="upload/images/'.$streams[$index]["thumbnail"].'" class="thumbnail">
                        <h6 style="position: absolute; margin-top: -35px; margin-left: 370px; background-color: green; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white; border-radius: 10px">PREMIUM</h6>
                  </a>
                          <div class="row" style="margin-top: 10px">
                    <div class="col-2">
                    <a href="profile.php?musician_id='.$streams[$index]["musician_id"].'">
                      <img src="upload/images/'.$streams[$index]["profile_pic"].'" class="profile-pic">
                      </a>
                    </div>
                    <div class="col-10" style="text-align: left !important">
                     <a href="livestream.php?stream_id='.$streams[$index]["stream_id"].'" class="stream-txt" style="color: white" title="'.$streams[$index]["title"].'">' . substr($streams[$index]["title"], 0, 26) . '... </a>
                     <br>
                   <a href="profile.php?musician_id='.$streams[$index]["musician_id"].'"class="user-live">'.$streams[$index]["username"].'</a>
                   <p class="viewer-cnt">'.$streams[$index]["viewer_cnt"].' viewers <span style="font-size: 12px;">| Started streaming '.$streams[$index]["stream_time"].' ago<span></p>
                    </div>
                  </div>
                </div>
            </div>';
                           } else{  
                            //not premium

                echo '
               <div class="col-4 mt-5">
                 <div style="margin-left: 10px">
                 <a href="livestream.php?stream_id='.$streams[$index]["stream_id"].'">
                  <img src="upload/images/'.$streams[$index]["thumbnail"].'" class="thumbnail">
                  </a>
                          <div class="row" style="margin-top: 10px">
                    <div class="col-2">
                    <a href="profile.php?musician_id='.$streams[$index]["musician_id"].'">
                      <img src="upload/images/'.$streams[$index]["profile_pic"].'" class="profile-pic">
                      </a>
                    </div>
                    <div class="col-10" style="text-align: left !important">
                     <a href="livestream.php?stream_id='.$streams[$index]["stream_id"].'" class="stream-txt" style="color: white" title="'.$streams[$index]["title"].'">' . substr($streams[$index]["title"], 0, 26) . '... </a>
                     <br>
                   <a href="profile.php?musician_id='.$streams[$index]["musician_id"].'"class="user-live">'.$streams[$index]["username"].'</a>
                   <p class="viewer-cnt">'.$streams[$index]["viewer_cnt"].' viewers <span style="font-size: 12px;">| Started streaming '.$streams[$index]["stream_time"].' ago<span></p>
                    </div>
                  </div>
                </div>
            </div>';
                           }

                        }

                     
                    }
                }
              } else {
                //if no live

                    echo '
              <div class="jumbotron" style="margin-left: 400px; margin-top: 15px">
                <div class="container">
                   <h1 class="display-4"><i class="fas fa-video" style="font-size:130px"></i></h1>
                  <h3 class="display-4">No livestreams found</h3>
                  <p class="lead">While waiting, discover amazing livestreams of other artists <a href ="homepage.php" style="color: #B303FF">here.</a></p>
                </div>
              </div>';

              }
              ?>
     
    
      </div>
  </div>
 <!-- End Live Tab -->    

  <!--Start Videos Tab-->
 
    <div class="tab-pane fade show" id="videos" role="tabpanel" aria-labelledby="videos-tab">
        <?php

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_user = "
          SELECT 
          *
          FROM 
          `musician`
          WHERE
          musician_id = '".$_GET['musician_id']."'
      ";

      $result_user = mysqli_query($conn, $sql_user);
      $row_user = mysqli_fetch_assoc($result_user);

 if (isset($_SESSION["isLogin"])) {
        if ($_SESSION["isLogin"] == "true") {
      if ($row_user["username"] == $_SESSION["username"]) {
       echo'
        <div class="custom-container mt-5" style="margin-bottom: -25px; text-align:right; padding-left:20px; margin-top: 40px !important;">
        <h1 style="font-weight: bold">MANAGE UPLOADS<a href="contentUpload.php?musician_id='.$_GET["musician_id"].'" class="pen"><i class="fas fa-pen-square" style="font-size: 40px; margin-left: 19px"></i></a></h1>
        </div>
        <br>';
      }
}
}

      ?>
        <div class="row custom-container">

    <?php

      $videos = [];

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_videos = "
        SELECT 
        * 
        FROM 
        videos 
        INNER JOIN 
        musician 
        WHERE 
        `videos`.musician_id = '".$_GET["musician_id"]."' 
        AND 
        `musician`.musician_id = '".$_GET["musician_id"]."'
        ORDER By 
        `videos`.video_id ASC
      ";

      $result_videos = mysqli_query($conn, $sql_videos);
          while ($row = mysqli_fetch_assoc($result_videos)) {
            array_push($videos, $row);
          }

          $count_videos = mysqli_num_rows($result_videos);

          if ($count_videos > 0) {
            // if there are videos
                for ($index = 0; $index < count($videos); $index++) {
            if (strlen($videos[$index]["title"]) < 27) {

              if ($videos[$index]["price"] == "premium") {
                //premium
          echo
            '<div class="col-4 mt-5">
         <div style="margin-left: 10px">
         <a href="video.php?video_id='.$videos[$index]["video_id"].'">
          <img src="upload/images/'.$videos[$index]["thumbnail"].'" class="thumbnail">
             <h6 style="position: absolute; margin-top: -35px; margin-left: 370px; background-color: green; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white; border-radius: 10px">PREMIUM</h6>
          </a>
                  <div class="row" style="margin-top: 10px">
            <div class="col-2">
              <img src="upload/images/'.$videos[$index]["profile_pic"].'" class="profile-pic">
            </div>
            <div class="col-10" style="text-align: left !important">
             <a href="video.php?video_id='.$videos[$index]["video_id"].'" class="stream-txt" style="color: white">' . $videos[$index]["title"] . '</a>
             <br>
           <a href="profile.php?musician_id='.$videos[$index]["musician_id"].'"class="user-live">'.$videos[$index]["username"].'</a>
           <p class="viewer-cnt">'.$videos[$index]["viewer_cnt"].' views <span style="font-size: 12px;">| Uploaded '.$videos[$index]["stream_time"].' ago<span></p>
            </div>
          </div>
        </div>
    </div>';
              } else {
                //not premium
          echo
            '<div class="col-4 mt-5">
         <div style="margin-left: 10px">
         <a href="video.php?video_id='.$videos[$index]["video_id"].'">
          <img src="upload/images/'.$videos[$index]["thumbnail"].'" class="thumbnail">
          </a>
                  <div class="row" style="margin-top: 10px">
            <div class="col-2">
              <img src="upload/images/'.$videos[$index]["profile_pic"].'" class="profile-pic">
            </div>
            <div class="col-10" style="text-align: left !important">
             <a href="video.php?video_id='.$videos[$index]["video_id"].'" class="stream-txt" style="color: white">' . $videos[$index]["title"] . '</a>
             <br>
           <a href="profile.php?musician_id='.$videos[$index]["musician_id"].'"class="user-live">'.$videos[$index]["username"].'</a>
           <p class="viewer-cnt">'.$videos[$index]["viewer_cnt"].' views <span style="font-size: 12px;">| Uploaded '.$videos[$index]["stream_time"].' ago<span></p>
            </div>
          </div>
        </div>
    </div>';
              }
            } else {
              //long title

                if ($videos[$index]["price"] == "premium") {
                  //if premium
         echo '<div class="col-4 mt-5">
         <div style="margin-left: 10px">
         <a href="video.php?video_id='.$videos[$index]["video_id"].'">
          <img src="upload/images/'.$videos[$index]["thumbnail"].'" class="thumbnail">
          <h6 style="position: absolute; margin-top: -35px; margin-left: 370px; background-color: green; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white; border-radius: 10px">PREMIUM</h6>
          </a>
                  <div class="row" style="margin-top: 10px">
            <div class="col-2">
            <a href="profile.php?musician_id='.$videos[$index]["musician_id"].'">
              <img src="upload/images/'.$videos[$index]["profile_pic"].'" class="profile-pic">
              </a>
            </div>
            <div class="col-10" style="text-align: left !important">
             <a href="video.php?video_id='.$videos[$index]["video_id"].'" class="stream-txt" style="color: white" title="'.$videos[$index]["title"].'">' . substr($videos[$index]["title"], 0, 29) . '...</a>
             <br>
           <a href="profile.php?musician_id='.$videos[$index]["musician_id"].'"class="user-live">'.$videos[$index]["username"].'</a>
           <p class="viewer-cnt">'.$videos[$index]["viewer_cnt"].' views <span style="font-size: 12px;">| Uploaded '.$videos[$index]["stream_time"].' ago<span></p>
            </div>
          </div>
        </div>
    </div>';
                } else{
                  //not premium

        echo '<div class="col-4 mt-5">
         <div style="margin-left: 10px">
         <a href="video.php?video_id='.$videos[$index]["video_id"].'">
          <img src="upload/images/'.$videos[$index]["thumbnail"].'" class="thumbnail">
          </a>
                  <div class="row" style="margin-top: 10px">
            <div class="col-2">
            <a href="profile.php?musician_id='.$videos[$index]["musician_id"].'">
              <img src="upload/images/'.$videos[$index]["profile_pic"].'" class="profile-pic">
              </a>
            </div>
            <div class="col-10" style="text-align: left !important">
             <a href="video.php?video_id='.$videos[$index]["video_id"].'" class="stream-txt" style="color: white" title="'.$videos[$index]["title"].'">' . substr($videos[$index]["title"], 0, 29) . '...</a>
             <br>
           <a href="profile.php?musician_id='.$videos[$index]["musician_id"].'"class="user-live">'.$videos[$index]["username"].'</a>
           <p class="viewer-cnt">'.$videos[$index]["viewer_cnt"].' views <span style="font-size: 12px;">| Uploaded '.$videos[$index]["stream_time"].' ago<span></p>
            </div>
          </div>
        </div>
    </div>';
                  
                }
            }
          }
          } else {
            //if there is no videos 
               echo '
              <div class="jumbotron" style="margin-left: 400px; margin-top: 15px">
                <div class="container">
                   <h1 class="display-4"><i class="fas fa-video" style="font-size:130px"></i></h1>
                  <h3 class="display-4">No videos found</h3>
                  <p class="lead">While waiting, discover amazing videos of other artists <a href ="homepage.php" style="color: #B303FF">here.</a></p>
                </div>
              </div>';
          }
      

    ?>

      </div>
  </div>
 <!-- End Videos Tab -->    

  <!--Start Tracks Tab-->
       <div class="tab-pane fade show" id="tracks" role="tabpanel" aria-labelledby="tracks-tab">
            <?php

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_user = "
          SELECT 
          *
          FROM 
          `musician`
          WHERE
          musician_id = '".$_GET['musician_id']."'
      ";

      $result_user = mysqli_query($conn, $sql_user);
      $row_user = mysqli_fetch_assoc($result_user);

     if (isset($_SESSION["isLogin"])) {
        if ($_SESSION["isLogin"] == "true") { 
      if ($row_user["username"] == $_SESSION["username"]) {
       echo'
        <div class="custom-container mt-5" style="margin-bottom: -25px; text-align:right; padding-left:20px; margin-top: 40px !important;">
        <h1 style="font-weight: bold">MANAGE UPLOADS<a href="contentUpload.php?musician_id='.$_GET["musician_id"].'" class="pen"><i class="fas fa-pen-square" style="font-size: 40px; margin-left: 19px"></i></a></h1>
        </div>';
      }
}
}

      ?>
              <div class="row custom-container mt-5">
      <?php

      $music = [];

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_music = "
          SELECT 
          *
          FROM 
          music
          WHERE
          `musician_id` = '".$_GET['musician_id']."'
      ";

      $result_music = mysqli_query($conn, $sql_music);
          while ($row = mysqli_fetch_assoc($result_music)) {
            array_push($music, $row);
          }

       $count_music = mysqli_num_rows($result_music);

       if ($count_music > 0) {
         // if there are tracks
        
         for ($index = 0; $index < count($music); $index++) {
            echo'            
            <div class="col-3 mt-5">
              <a href="music.php?music_id='.$music[$index]["music_id"].'">
                  <i class="fas fa-play play-btn" id="'.$music[$index]["music_id"].'-btn" onmouseover="document.getElementById(`'.$music[$index]["music_id"].'-btn`).style.visibility = `visible`; document.getElementById(`'.$music[$index]["music_id"].'`).style = `box-shadow: 8px 8px 1px #A200FF; -webkit-filter: blur(2px); -moz-filter: blur(2px); filter: blur(2px);`" onmouseout="document.getElementById(`'.$music[$index]["music_id"].'-btn`).style.visibility = `hidden`; document.getElementById(`'.$music[$index]["music_id"].'`).style = `box-shadow: none; filter: none;`"></i>
                  
                  <img id="'.$music[$index]["music_id"].'" class="music-custom" src="upload/images/'.$music[$index]["album_art"].'"  onmouseover="document.getElementById(`'.$music[$index]["music_id"].'-btn`).style.visibility = `visible`; document.getElementById(`'.$music[$index]["music_id"].'`).style = `box-shadow: 8px 8px 1px #A200FF; -webkit-filter: blur(2px); -moz-filter: blur(2px); filter: blur(2px);`" onmouseout="document.getElementById(`'.$music[$index]["music_id"].'-btn`).style.visibility = `hidden`; document.getElementById(`'.$music[$index]["music_id"].'`).style = `box-shadow: none; filter: none;`" alt="album art '.$music[$index]["title"].'">
                  </a>

                <div style="margin-top: 20px; text-align: center;">
                <a style="color: white;" href="music.php?music_id='.$music[$index]["music_id"].'">
                <h4 style=" margin-bottom: 2px;">'.$music[$index]["title"].'</h4>
                </a>
                 </div>
                </div>';

       }
          } else {
          //if there are no tracks

           echo '
              <div class="jumbotron" style="margin-left: 400px">
                <div class="container">
                   <h1 class="display-4"><i class="fas fa-compact-disc" style="font-size:130px"></i></h1>
                  <h3 class="display-4">No tracks found</h3>
                  <p class="lead">While waiting, discover amazing tracks of other artists <a href ="homepage.php" style="color: #B303FF">here.</a></p>
                </div>
              </div>';

       }


          ?>
              </div>
          </div>
 
    <!--End Tracks Tab-->


    <!--start of schedule tab-->

          <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">


  <?php

      $concerts = [];

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_concerts = "
          SELECT 
          *
          FROM 
          concerts
          WHERE
          `musician_id` = '".$_GET['musician_id']."' 
          AND 
          `status` = 'upcoming'
      ";

      $result_concerts = mysqli_query($conn, $sql_concerts);
          while ($row = mysqli_fetch_assoc($result_concerts)) {
            array_push($concerts, $row);
          }


      $user_musician = [];


      $sql_user_musician = "
          SELECT 
          *
          FROM 
          `musician`
          WHERE
          musician_id = '".$_GET['musician_id']."'
      ";

      $result_user_musician = mysqli_query($conn, $sql_user_musician);
          while ($row = mysqli_fetch_assoc($result_user_musician)) {
            array_push($user_musician, $row);
          }

       $index = 0;
       $count_concerts = mysqli_num_rows($result_concerts);

       if ($count_concerts > 0) {
         // if there is concerts
        if (isset($_SESSION["username"])) {
            if ($user_musician[$index]["username"] == $_SESSION['username']){
            //if owner
             echo '
         <div class="custom-container mt-5" style="text-align: right">
          <h1 style="font-weight: bold">MANAGE SCHEDULE<a href="schedule.php?musician_id='.$_GET["musician_id"].'" class="pen"><i class="fas fa-pen-square" style="font-size: 40px; margin-left: 19px"></i></a></h1>
              <br><br>';
          }
          else {
            //not owner
             echo '
         <div class="custom-container mt-5" style="text-align: left">
          <h1 style="font-size: 60px; font-weight: bold">UPCOMING CONCERTS</h1>
              <br><br>';
          }

        } else {
              //not owner
             echo '
         <div class="custom-container mt-5" style="text-align: left">
          <h1 style="font-size: 60px; font-weight: bold">UPCOMING CONCERTS</h1>
              <br><br>';
        }
           for ($index = 0; $index < count($concerts); $index++) {  
            echo ' <div class="card" style=" background-image: url(upload/images/'.$concerts[$index]["file_src"].'); height: 250px; text-align: left !important; filter: blur(2px);   background-repeat: no-repeat; background-size: cover;">
            </div>
             <div class="card" style="margin-top: -230px; border: none; margin-bottom: 70px">
                <h1 style="color: #EFC62E; font-size: 70px; text-transform: uppercase; margin-left: 10px; margin-top: 15px; font-weight: bold">'.$concerts[$index]["title"].'</h1>
                <h3 style="font-size: 50px; margin-top: -15px; margin-left: 10px; font-weight: bold">'.$concerts[$index]["date"].' '.$concerts[$index]["time"].' </h3>
               <p style="font-size: 30px; margin-top: -15px; text-shadow: 2px 3px green; margin-left: 10px; text-transform: uppercase; font-weight: bold">'.$concerts[$index]["price"].'</p>
            </div>';
          }
          echo "          </div>";

       } else if ($count_concerts <= 0) {
        // if no concerts

           if (isset($_SESSION["username"])) {

          if ($user_musician[$index]["username"] == $_SESSION['username']){
            //if owner
             echo '
         <div class="custom-container mt-5" style="text-align: left">
          <h1 style="font-size: 60px; font-weight: bold">ADD SCHEDULE <a href="schedule.php?musician_id='.$_GET["musician_id"].'" class="pen"><i class="fas fa-pen-square" style="font-size: 60px; margin-left: 10px"></i></a></h1>
              <br><br>
              </div>';

          } else {
              echo '
         <div class="custom-container mt-5" style="text-align: center">';
            echo '
              <div class="jumbotron">
                <div class="container">
                   <h1 class="display-4"><i class="fas fa-calendar-alt" style="font-size:130px"></i></h1>
                  <h3 class="display-4">No schedule found</h3>
                  <p class="lead">While waiting, discover amazing concerts of other artists <a href ="homepage.php" style="color: #B303FF">here.</a></p>
                </div>
              </div>
                        </div>';
          }

           } else {
             echo '
         <div class="custom-container mt-5" style="text-align: center">';
            echo '
              <div class="jumbotron">
                <div class="container">
                   <h1 class="display-4"><i class="fas fa-calendar-alt" style="font-size:130px"></i></h1>
                  <h3 class="display-4">No schedule found</h3>
                  <p class="lead">While waiting, discover amazing concerts of other artists <a href ="homepage.php" style="color: #B303FF">here.</a></p>
                </div>
              </div>';
           }
       }

          ?>     
        </div>

    <!-- end of schedule tab-->

    <!--start of about tab-->

          <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab" style="text-align: justify;">
                  <?php

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_user = "
          SELECT 
          *
          FROM 
          `musician`
          WHERE
          musician_id = '".$_GET['musician_id']."'
      ";

      $result_user = mysqli_query($conn, $sql_user);
      $row_user = mysqli_fetch_assoc($result_user);

      if (isset($_SESSION["isLogin"])) {
        if ($_SESSION["isLogin"] == "true") {
      if ($row_user["username"] == $_SESSION["username"]) {
       echo'
        <div class="custom-container mt-5" style="margin-bottom: -25px; text-align:right; padding-left:20px; margin-top: 40px !important;">
        <h1 style="font-weight: bold">EDIT ABOUT AND SOCIALS<a href="musician-settings.php?musician_id='.$_GET["musician_id"].'" class="pen"><i class="fas fa-pen-square" style="font-size: 40px; margin-left: 19px"></i></a></h1>
        </div>
        <br>';
      }
    }
  }


      ?>
            <div class="custom-container mt-5">
               <?php

      $about = [];

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_about = "
          SELECT 
          *
          FROM 
          musician
          WHERE
          `musician_id` = '".$_GET['musician_id']."'
      ";

      $result_about = mysqli_query($conn, $sql_about);
          while ($row = mysqli_fetch_assoc($result_about)) {
            array_push($about, $row);
          }

          for ($index = 0; $index < count($about); $index++) {
            echo'<p>'.$about[$index]["about"].'</p>';
            }
            ?>
            <hr style="background-color: #525252; margin-bottom: 30px">
            <h4>SOCIAL LINKS</h4>
            <div style="margin-right: 1070px; margin-top: 17px">

  <?php

      $socials = [];

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_socials = "
         SELECT `social_media`.link, 
          `social_media`.type
         FROM 
          social_media
         INNER JOIN 
          musician
         ON 
          `social_media`.musician_id = '".$_GET['musician_id']."'
          WHERE
           `musician`.musician_id = '".$_GET['musician_id']."'
           ORDER BY RAND()
      ";

      $result_socials = mysqli_query($conn, $sql_socials);
          while ($row = mysqli_fetch_assoc($result_socials)) {
            array_push($socials, $row);
          }

          for ($index = 0; $index < count($socials); $index++) {
            if ($socials[$index]["type"] == "website") {
               echo '<a href="'.$socials[$index]["link"].'" target="_blank" class="socials"><i class="fas fa-link" style="font-size: 17px; margin-right: 10px; left: 0;"></i>'.$socials[$index]["type"].'</a>
              <br>';
            } else if ($socials[$index]["type"] == "email") {
               echo '<a href="'.$socials[$index]["link"].'" target="_blank" class="socials"><i class="fas fa-envelope" style="font-size: 17px; margin-right: 10px; left: 0;"></i>'.$socials[$index]["type"].'</a>
              <br>';
            }else {
              echo '<a href="'.$socials[$index]["link"].'" target="_blank" class="socials"><i class="fab fa-'.$socials[$index]["type"].'" style="font-size: 17px; margin-right: 10px; left: 0;"></i>'.$socials[$index]["type"].'</a>
              <br>';
            }
          }

  ?>
            </div>
              </div>
            </div>

          </div>

    <!--end of about tab-->

        </div>
      </div>
    </div>

    <!--end ng profile-->

    <!-- Start footer -->
    <footer class="site-footer" style="margin-top: 250px">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <a href="homepage.php"><h5>Home</h5></a>
          </div>

          <div class="col-md-3">
            <a href="about.php"><h5>About</h5></a>
          </div>

          <div class="col-md-3">
            <a href="terms.php"><h5>Terms & Conditions</h5></a>
          </div>

          <div class="col-md-3">
            <a href="privacy.php"><h5>Privacy Policy</h5></a>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="#">MELLOFI</a>.
            </p>
            <p class="copyright-text">This site does not own any files on its server. All contents are from non-affiliated third parties.
            </p>            

          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">            
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>                 
            </ul>
          </div>
        </div>
      </div>
    </footer>    
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
     <script src="js/live.js"></script>
    <script>

      $(document).ready(function(){

        var musician_id = "<?php echo $_GET['musician_id']; ?>";
        var username = "<?php  if(isset($_SESSION["username"])){
        echo $_SESSION["username"];
      } else {
        echo null;
      } ?>";
       $("#purchase").click(function(){
        $.post('subscription.php', 
          {
            musician_id: musician_id,
            username: username
          });
        setTimeout(function(){ window.location.href = "profile.php?musician_id=" + musician_id;}, 1000);
        });
      });

       $(document).ready(function(){

        var musician_id = "<?php echo $_GET['musician_id']; ?>";
        var username = "<?php  if(isset($_SESSION["username"])){
        echo $_SESSION["username"];
      } else {
        echo null;
      } ?>";
       $("#follow").click(function(){
        $.post('follow.php', 
          {
            musician_id: musician_id,
            username: username,
            stream_id: "null",
            video_id: "null",
            music_id: "null"
          });
        setTimeout(function(){ window.location.reload();}, 1000);
        });
      });

      $(document).ready(function(){

        var musician_id = "<?php echo $_GET['musician_id']; ?>";
        var username = "<?php  if(isset($_SESSION["username"])){
        echo $_SESSION["username"];
      } else {
        echo null;
      } ?>";
       $("#unfollow").click(function(){
        $.post('unfollow.php', 
          {
            musician_id: musician_id,
            username: username
          });setTimeout(function(){ window.location.reload();}, 1000);
        });
        
      });

   $(document).ready(function(){
      const subscription = "<?php 

      if(isset($_GET["subscription"])){
        echo $_GET["subscription"];
      } else {
        echo null;
      } ?>";

      const username = "<?php 

      if(isset($_SESSION["username"])){
        echo $_SESSION["username"];
      } else {
        echo "null";
      } ?>";

      if (subscription == "none" && username != "null") {
         $('#memberModal').modal('show');
      } else if (subscription == "none" && username == "null"){
         $('#logInModal').modal('show');
      } 
    });

   $(document).ready(function(){
         const schedule = "<?php 

      if(isset($_GET["schedule"])){
        echo $_GET["schedule"];
      } else {
        echo null;
      } ?>";

 if (schedule == "show"){
            $('#live-tab').removeClass('active');
             $('#live').removeClass('active');
             $('#schedule-tab').addClass('active');
             $('#schedule').tab('show');
      }    
    });
    </script>
  </body>
</html>