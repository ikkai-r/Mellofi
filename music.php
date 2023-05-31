<?php session_start();
 $_GET['music_id'];

 ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Mellofi</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">

 	<!-- Favicon -->
    <link rel="icon" href="images/logo.png">
    <link rel="apple-touch-icon" href="images/logo.png">

     <!--Custom Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

     <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/app1.css">
    <link rel="stylesheet" type="text/css" href="css/app2.css">
    <link rel="stylesheet" type="text/css" href="css/app3.css">
    <link rel="stylesheet" type="text/css" href="css/app4.css"> 
    <link rel="stylesheet" type="text/css" href="css/app5.css"> 
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
      <link rel="stylesheet" type="text/css" href="css/style4.css">     
    <link rel="stylesheet" type="text/css" href="css/footer.css">   
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-light bg-custom-nav" style="z-index: 2;">
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
                SELECT `pins`.flair_pin_src, 
                `musician`.username, 
                `musician`.profile_pic,
                `musician`.musician_id 
                FROM 
                `pins` 
                INNER JOIN 
                `music` 
                ON 
                `pins`.musician_id = `music`.musician_id 
                INNER JOIN 
                `musician` 
                ON 
                `music`.musician_id = `musician`.musician_id 
                WHERE 
                `music`.music_id = '".$_GET['music_id']."'
            ";

            $result_artist = mysqli_query($conn, $sql_artist);
                while ($row = mysqli_fetch_assoc($result_artist)) {
                  array_push($artist, $row);
                }

                $index_one = 0;
        
            echo '
              <a href="profile.php?musician_id='.$artist[$index_one]["musician_id"].'"><img src="upload/images/'.$artist[$index_one]["profile_pic"].'" class="artist-membership"></a>
              </div>
              <div class="col-9" style=" margin-top: 20px; padding-left: 23px; margin-bottom: -12px">
              <h3 style="margin-bottom: -5px">BE A MEMBER OF</h3>
              <h4><a href="profile.php?musician_id='.$artist[$index_one]["musician_id"].'" style="color: #E3DCFF; text-transform: uppercase">'.$artist[$index_one]["username"].'</a></h4>
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
                <p style="font-size: 14px; margin-top: 30px;">Gain access to premium content on <a href="profile.php?musician_id='.$artist[$index_one]["musician_id"].'" style="color: #E3DCFF;">their</a> channel.</p>
                <p style="font-size: 14px; margin-top: -5px;">Unlock <span style="color: #E3DCFF">10 spotlights</span>that refresh monthly to highlight your message during live chat for personal song requests and more!</p>
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
                 `musician`.username
                 FROM 
                  `musician` 
                 INNER JOIN
                  `music`
                 ON 
                 `music`.music_id = '".$_GET['music_id']."'
                 AND 
                 `music`.musician_id = `musician`.musician_id
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



<div class="main">
     <div class="left">

      <!--- song img --->
      <img id="track_image">
         <div class="volume"   style="margin-left: -17px">
            <p id="volume_show">90</p>
            <i class="fa fa-volume-up" aria-hidden="true" onclick="mute_sound()" id="volume_icon"></i>
            <input type="range" min="0" max="100" value="90" onchange="volume_change()" id="volume">  
         </div>

     </div>
 


  	 <div class="right">
 

       <!--- song title & artist name --->
      <p id="title"></p>
      <?php

                $artist = [];

            $servername = "localhost";
            $db_username = "root";
            $db_password = "";
            $database = "mellofi";

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);

            $sql_artist = "
                 SELECT 
                 `musician`.musician_id
                 FROM 
                  `musician` 
                 INNER JOIN
                  `music`
                 ON 
                 `music`.music_id = '".$_GET['music_id']."'
                 AND 
                 `music`.musician_id = `musician`.musician_id
            ";

            $result_artist = mysqli_query($conn, $sql_artist);
            $row = mysqli_fetch_assoc($result_artist);
            echo' <a href="profile.php?musician_id='.$row["musician_id"].'" style="color: white"><p id="artist-music"></p></a>';
      ?>
     





  <!--- song duration --->
        <div class="duration" style="margin-right: -5px">
           <input type="range" min="0" max="100" value="0" id="duration_slider" onchange="change_duration()">
  </div>

     
  	 	<div class="gitna">
      	   <button onclick="justplay()" id="play"><i class="fa fa-play" aria-hidden="true"></i></button>   
  	   </div>
		


                
     <div style="margin-left: 10px; width: 800px; height: 90px; border-radius: 10px; border-style: solid; border-width: 1px; border-color: white; margin-top: 50px; padding-left: 20px; padding-top: 20px;">
       <h2 style="position: absolute;">GENRES:</h2>
       <ul class="list-inline">
        <?php

            $servername = "localhost";
            $db_username = "root";
            $db_password = "";
            $database = "mellofi";
            $genre = [];

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);

            $sql_genre = "
            SELECT
            *
            FROM 
            `genre`
            WHERE 
            `music_id` = '".$_GET["music_id"]."'
            ";

            $result = mysqli_query($conn, $sql_genre);
           while($row = mysqli_fetch_assoc($result)){
            array_push($genre, $row);
           }

           for ($i=0; $i < count($genre); $i++) { 
            if ($i == 0) {
               echo'<a href="'.$genre[$i]["genre"].'.php"><li class="list-inline-item genre-tags" style="text-transform: uppercase; margin-left: 170px; margin-top: 8px">'.$genre[$i]["genre"].'</li></a>';
            }
            else {
               echo'<a href="'.$genre[$i]["genre"].'.php"><li class="list-inline-item genre-tags" style="text-transform: uppercase; margin-left: 5px; margin-top: 8px">'.$genre[$i]["genre"].'</li></a>';
            }
           }

        ?>
     
     </ul>
     </div>
   

        <?php

        if (isset($_SESSION["isLogin"])) {

            $servername = "localhost";
            $db_username = "root";
            $db_password = "";
            $database = "mellofi";

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);

            $sql_musician="
            SELECT 
            *
            FROM 
            `musician`
            INNER JOIN 
            `music`
            ON 
            `musician`.musician_id = `music`.musician_id
            WHERE 
            `music`.music_id = '".$_GET["music_id"]."'
            AND 
            `musician`.username = '".$_SESSION["username"]."'
            ";

            $result_mus = mysqli_query($conn, $sql_musician);
            $count_mus = mysqli_num_rows($result_mus);

            if ($count_mus > 0) {
              //if not musician
             echo'<div style="display: flex;">';
            } else if ($_SESSION["isLogin"] == "true"){
                echo'  
                 <div class="sundan" style="display: flex; margin-bottom: 20px; margin-top: 40px;">
                    ';
               }
                else if ($_SESSION["isLogin"] != "true") {
            echo'
          
            <div class="sundan" style="display: flex; margin-top: 40px;">
            <h4>Want to listen more from this artist to support them?</h4>  
            <button class="btn" data-toggle="modal" data-target="#logInModal" style="--border-color: white; float: left !important;" >Follow</button>
                    <button class="btn" data-toggle="modal" data-target="#logInModal" style="--border-color: white; margin-right: -19px">be a member <span style="visibility: hidden">xxx</span> </button>';
          }
        
            }  else {
          echo' 
           <div class="sundan" style="display: flex; margin-top: 40px;"><h4>Want to listen more from this artist to support them?</h4>  <button class="btn" data-toggle="modal" data-target="#logInModal" style="--border-color: white; float: left !important;" >Follow</button>
                   <button class="btn" data-toggle="modal" data-target="#logInModal" style="--border-color: white; margin-right: -19px">be a member <span style="visibility: hidden">xxx</span> </button>';
        }
   

      
        ?>
    

  

                </div>
  
        <?php
            
            $servername = "localhost";
            $db_username = "root";
            $db_password = "";
            $database = "mellofi";
            $music = [];

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);

            $sql_artist = "
            SELECT 
            `musician`.username,
            `musician`.musician_id
            FROM 
            `musician`
            INNER JOIN 
            `music`
            ON 
            `music`.musician_id = `musician`.musician_id
            WHERE 
             `music`.music_id = '".$_GET["music_id"]."'
            ";

            $result_artist = mysqli_query($conn, $sql_artist);
            $row_artist = mysqli_fetch_assoc($result_artist);
            $musician_id = $row_artist["musician_id"];
            $username = $row_artist["username"];

            $sql_music = "
            SELECT DISTINCT
            `music`.album_art,
            `music`.title,
            `music`.music_id
            FROM 
            `music`
            INNER JOIN 
            `musician`
            ON 
            `music`.musician_id = '".$musician_id."'
            WHERE 
            `music`.music_id != '".$_GET["music_id"]."'
                        ORDER BY RAND( )
            ";

            $result_music = mysqli_query($conn, $sql_music);
            $count_music = mysqli_num_rows($result_music);

            echo'<h2 style="margin-bottom: -200px; margin-top: 90px; text-transform: uppercase">OTHER MUSIC FROM '.$username.'</h2>
      <div style="margin-left: 10px; margin-top: 250px; padding-top: 20px; padding-left: 25px;padding-right: 50px;width: 800px;height:300px;border-radius: 10px;border-width: 1px;border-style: solid; border-color: white; display: flex">';
            if ($count_music > 0) {
              //if meron

                        while($row_music = mysqli_fetch_assoc($result_music))
            {
              array_push($music, $row_music);
            }

            for ($i=0; $i < count($music); $i++) { 

              if ($i < 3) {
                      echo'  
        <div style="text-align: center">
         <a href="music.php?music_id='.$music[$i]["music_id"].'"> <img src="upload/images/'.$music[$i]["album_art"].'" class="music-other"></a>
          <br>
        <a href="music.php?music_id='.$music[$i]["music_id"].'" style="color: white;"><h6 style="margin-right: 12px">'.$music[$i]["title"].'</h6></a>
        </div>';
              }
        
            }
            } else {
              echo'<div style="text-align: center; margin-top: -60px">
               <div class="jumbotron">
                <div class="container">
                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/a32f693c-bcf5-4c71-8858-7be1aaf0867e/d6189x3-fb8eb1fd-d417-4ab1-bd30-5baff35ae933.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2EzMmY2OTNjLWJjZjUtNGM3MS04ODU4LTdiZTFhYWYwODY3ZVwvZDYxODl4My1mYjhlYjFmZC1kNDE3LTRhYjEtYmQzMC01YmFmZjM1YWU5MzMucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.haoAG3o8GQ9uu7p341POHCQZ9AEZLhN_G1tF9TkuAtE" style="width: 150px;">
                  <h4 class="display-4">No tracks found</h4>
                  <p class="lead">While waiting, discover amazing tracks of other artists <a href ="homepage.php" style="color: #F1C71C">here.</a></p>
                </div>
              </div>
              </div>';
            }
  
        ?>
  


      </div>
                    </div>

  




     
   
  <!--- Add javascript file --->
  <script>
    let previous = document.querySelector('#pre');
let play = document.querySelector('#play');
let next = document.querySelector('#next');
let title = document.querySelector('#title');
let recent_volume= document.querySelector('#volume');
let volume_show = document.querySelector('#volume_show');
let slider = document.querySelector('#duration_slider');
let show_duration = document.querySelector('#show_duration');
let track_image = document.querySelector('#track_image');
let auto_play = document.querySelector('#auto');
let present = document.querySelector('#present');
let total = document.querySelector('#total');
let artist = document.querySelector('#artist-music');



let timer;
let autoplay = 0;

let index_no = 0;
let Playing_song = false;

//create a audio Element
let track = document.createElement('audio');


//All songs list
let All_song = [
   {
     name: "<?php   //1. Setup Database connection
      $servername = "localhost";
      $db_username = "root"; //xampp default
      $db_password = "";  //xampp default
      $database = "mellofi";
      $music_id = $_GET['music_id'];
      $artist = [];

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      //2. SELECT TITLE
      $sql_artist = "
                 SELECT 
                 title
                 FROM 
                  music 
               WHERE 
               music_id = '".$music_id."'
            ";

            $result_artist = mysqli_query($conn, $sql_artist);
                while ($row = mysqli_fetch_assoc($result_artist)) {
                  array_push($artist, $row);
                }

                $index = 0;

                echo $artist[$index]['title'];



      ?>",
     path: "<?php  
      $servername = "localhost";
      $db_username = "root"; //xampp default
      $db_password = "";  //xampp default
      $database = "mellofi";
      $music_id = $_GET['music_id'];
      $artist = [];
      

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      //2. SELECT MUSIC
      $sql_artist = "
                 SELECT 
                 music_src
                 FROM 
                  music 
               WHERE 
               music_id = '".$music_id."'
            ";

            $result_artist = mysqli_query($conn, $sql_artist);
                while ($row = mysqli_fetch_assoc($result_artist)) {
                  array_push($artist, $row);
                }

                $index = 0;
          echo "upload/music/".$artist[$index]['music_src'];


      ?>", //source ng music

     img: "<?php  
      $servername = "localhost";
      $db_username = "root"; //xampp default
      $db_password = "";  //xampp default
      $database = "mellofi";
      $music_id = $_GET['music_id'];
      $artist = [];
      

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      //2. SELECT SQL
      $sql_artist = "
                 SELECT 
                 album_art
                 FROM 
                  music 
               WHERE 
               music_id = '".$music_id."'
            ";

            $result_artist = mysqli_query($conn, $sql_artist);
                while ($row = mysqli_fetch_assoc($result_artist)) {
                  array_push($artist, $row);
                }

                $index = 0;
         echo "upload/images/".$artist[$index]['album_art'];


      ?>", //source ng cover art
     singer: "<?php   //1. Setup Database connection
      $servername = "localhost";
      $db_username = "root"; //xampp default
      $db_password = "";  //xampp default
      $database = "mellofi";
      $music_id = $_GET['music_id'];
      $artist = [];

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      //2. SELECT SQL
      $sql_artist = "
                SELECT 
                 `musician`.username
                FROM 
                  musician
                INNER JOIN
                  music ON `musician`.musician_id = `music`.musician_id

               WHERE 
               music_id = '".$music_id."'
            ";

            $result_artist = mysqli_query($conn, $sql_artist);
                while ($row = mysqli_fetch_assoc($result_artist)) {
                  array_push($artist, $row);
                }

                $index = 0;

                echo $artist[$index]['username'];



      ?>" 
   }
];


// All functions


// function load the track
function load_track(index_no){
  clearInterval(timer);
  reset_slider();

  track.src = All_song[index_no].path;
  title.innerHTML = All_song[index_no].name;  
  track_image.src = All_song[index_no].img;
    artist.innerHTML = All_song[index_no].singer;
    track.load();

  timer = setInterval(range_slider ,1000);
  total.innerHTML = All_song.length;
  present.innerHTML = index_no + 1;
}

load_track(index_no);


//mute sound function
function mute_sound(){
  track.volume = 0;
  volume.value = 0;
  volume_show.innerHTML = 0;
}


// checking.. the song is playing or not
 function justplay(){
  if(Playing_song==false){
    playsong();

  }else{
    pausesong();
  }
 }


// reset song slider
 function reset_slider(){
  slider.value = 0;
 }

// play song
function playsong(){
  track.play();
  Playing_song = true;
  play.innerHTML = '<i class="fa fa-pause" aria-hidden="true"></i>';
}

//pause song
function pausesong(){
  track.pause();
  Playing_song = false;
  play.innerHTML = '<i class="fa fa-play" aria-hidden="true"></i>';
}


// next song
//function next_song(){
//  if(index_no < All_song.length - 1){
//    index_no += 1;
//    load_track(index_no);
//    playsong();
//  }else{
//    index_no = 0;
//    load_track(index_no);
//    playsong();

//  }
//}


// previous song
//function previous_song(){
//  if(index_no > 0){
//    index_no -= 1;
//    load_track(index_no);
//    playsong();

//  }else{
//    index_no = All_song.length;
//    load_track(index_no);
//    playsong();
//  }
//}


// change volume
function volume_change(){
  volume_show.innerHTML = recent_volume.value;
  track.volume = recent_volume.value / 100;
}

// change slider position 
function change_duration(){
  slider_position = track.duration * (slider.value / 100);
  track.currentTime = slider_position;
}

// autoplay function
//function autoplay_switch(){
//  if (autoplay==1){
  //     autoplay = 0;
       //auto_play.style.background = "rgba(255,255,255,0.2)";
  //}else{
      // autoplay = 1;
       //auto_play.style.background = "#FF8A65";
  //}
//}


function range_slider(){
  let position = 0;
        
        // update slider position
    if(!isNaN(track.duration)){
       position = track.currentTime * (100 / track.duration);
       slider.value =  position;
        }

       
       // function will run when the song is over
       if(track.ended){
         play.innerHTML = '<i class="fa fa-play" aria-hidden="true"></i>';
           if(autoplay==1){
           index_no += 1;
           load_track(index_no);
           playsong();
           }
      }
     }


  </script>
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

        runDisplay();

      function runDisplay(){
        
        var music_id = "<?php echo $_GET['music_id']?>"
        $.post("displayMusic.php", { music_id: music_id},
        function(data, response) 
        {
          $('.sundan').html(data);
          
        }
          );
      };

  $(document).on('click', '#follow', function(){

        var music_id = "<?php echo $_GET['music_id']; ?>";
         var musician_id = "<?php 
          $artist = [];

            $servername = "localhost";
            $db_username = "root";
            $db_password = "";
            $database = "mellofi";

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);

            $sql_artist = "
                 SELECT 
                 `musician`.musician_id
                 FROM 
                  `musician` 
                 INNER JOIN
                  `music`
                 ON 
                 `music`.music_id = '".$_GET['music_id']."'
                 AND 
                 `music`.musician_id = `musician`.musician_id
            ";

            $result_artist = mysqli_query($conn, $sql_artist);
                while ($row = mysqli_fetch_assoc($result_artist)) {
                  array_push($artist, $row);
                }

                $index = 0;

                echo $artist[$index]['musician_id']; 
                ?>";
        var username = "<?php echo $_SESSION['username']; ?>";
      $.post('follow.php', 
          {
            musician_id: musician_id,
            username: username,
            music_id: music_id,
            stream_id: "null"
          },
          function(data, response) 
        {
          runDisplay();
        });
    })

    $(document).on('click', '#unfollow', function(){
         var musician_id = "<?php 
          $artist = [];

            $servername = "localhost";
            $db_username = "root";
            $db_password = "";
            $database = "mellofi";

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);

            $sql_artist = "
                 SELECT 
                 `musician`.musician_id
                 FROM 
                  `musician` 
                 INNER JOIN
                  `music`
                 ON 
                 `music`.music_id = '".$_GET['music_id']."'
                 AND 
                 `music`.musician_id = `musician`.musician_id
            ";

            $result_artist = mysqli_query($conn, $sql_artist);
                while ($row = mysqli_fetch_assoc($result_artist)) {
                  array_push($artist, $row);
                }

                $index = 0;

                echo $artist[$index]['musician_id']; 
                ?>";
        var username = "<?php echo $_SESSION['username']; ?>";
      $.post('unfollow.php', 
          {
            musician_id: musician_id,
            username: username
          },
          function(data, response) 
        {
          runDisplay();
        });
    });

        var music_id = "<?php echo $_GET["music_id"]; ?>";
        var username = "<?php echo $_SESSION['username']; ?>";
           var musician_id = "<?php 
          $artist = [];

            $servername = "localhost";
            $db_username = "root";
            $db_password = "";
            $database = "mellofi";

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);

            $sql_artist = "
                 SELECT 
                 `musician`.musician_id
                 FROM 
                  `musician` 
                 INNER JOIN
                  `music`
                 ON 
                 `music`.music_id = '".$_GET['music_id']."'
                 AND 
                 `music`.musician_id = `musician`.musician_id
            ";

            $result_artist = mysqli_query($conn, $sql_artist);
                while ($row = mysqli_fetch_assoc($result_artist)) {
                  array_push($artist, $row);
                }

                $index = 0;

                echo $artist[$index]['musician_id']; 
                ?>";
       $("#purchase").click(function(){
        $.post('subscription.php', 
          {
            musician_id: musician_id,
            username: username,
            music_id: music_id,
            stream_id: "null"
          },
        function(data, response) 
        {
         runDisplay();
            $('#purchaseModal').modal('hide');
        });
        });
      });


    </script>
</div>
</body>
</html>