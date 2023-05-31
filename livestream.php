 <?php
  session_start();


  if ($_GET['stream_id'] == '') {
    header('Location: homepage.php?stream_id=none');
  }

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_check = "
                  SELECT 
                    *
                  FROM 
                    `livestreams` 
                  WHERE
                    `stream_id`='".$_GET['stream_id']."'
                  ";

      $result_check = mysqli_query($conn, $sql_check);
      $row_check = mysqli_fetch_assoc($result_check);
      $musician_id = $row_check["musician_id"];

      if ($row_check["price"] == "premium") {
       
      $sql_musician = "
                  SELECT 
                   *
                   FROM 
                    `musician` 
                   INNER JOIN 
                    `livestreams` 
                   ON 
                    `musician`.username = '".$_SESSION['username']."'
                   WHERE
                    `livestreams`.stream_id = '".$_GET['stream_id']."'
                   AND 
                    `livestreams`.musician_id = `musician`.musician_id;
                  ";
      $result_musician = mysqli_query($conn, $sql_musician);
      $count = mysqli_num_rows($result_musician);

      if ($count <= 0) {
        //if not the musician

         $sql_subscription = "
                  SELECT 
                   *
                   FROM 
                    `subscription` 
                   INNER JOIN 
                    `livestreams` 
                   ON 
                    `livestreams`.stream_id = '".$_GET['stream_id']."'
                   WHERE
                    `subscription`.musician_id = `livestreams`.musician_id
                   AND 
                    `subscription`.username = '".$_SESSION['username']."'
                  ";
        $result_subscription = mysqli_query($conn, $sql_subscription);
        $count_subscription = mysqli_num_rows($result_subscription);

        if ($count_subscription <=0) {
         header('Location: profile.php?musician_id='.$musician_id.'&subscription=none');
        }

                } 
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
                 SELECT DISTINCT
                  `pins`.flair_pin_src, 
                  `musician`.username,
                  `musician`.profile_pic,
                  `livestreams`.musician_id
                 FROM 
                  `livestreams` 
                  INNER JOIN
                  `pins`
                  ON 
                   `pins`.musician_id = `livestreams`.musician_id
                 INNER JOIN 
                  `musician` 
                 ON 
                  `pins`.musician_id = `livestreams`.musician_id
                WHERE 
                 `musician`.musician_id = `livestreams`.musician_id
                 AND 
                 `livestreams`.stream_id = '".$_GET['stream_id']."'
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
                 `musician`.username
                 FROM 
                  `musician` 
                  INNER JOIN 
                  `livestreams`
                 WHERE
                  `livestreams`.musician_id = `musician`.musician_id
                  AND 
                  `livestreams`.stream_id = '".$_GET['stream_id']."'
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


        <!--livestream video -->
        <div class="mt-1">
          <div id="livestream-container" onmouseover="document.getElementById(`control-bar`).style.visibility = `visible`; document.getElementById(`live-tags`).style.visibility = `visible`" onmouseleave="document.getElementById(`control-bar`).style.visibility = `hidden`; document.getElementById(`live-tags`).style.visibility = `hidden`">
          <video id="livestream" style="z-index: -1"  onmouseover="document.getElementById(`control-bar`).style.visibility = `visible`;  document.getElementById(`live-tags`).style.visibility = `visible`" onmouseleave="document.getElementById(`control-bar`).style.visibility = `hidden`; document.getElementById(`live-tags`).style.visibility = `hidden`" autoplay loop controls>
               <?php

                $livestreams = [];

                $servername = "localhost";
                $db_username = "root";
                $db_password = "";
                $database = "mellofi";

                $conn = mysqli_connect($servername, $db_username, $db_password, $database);

                $sql_livestreams = "
                  SELECT 
                  * 
                  FROM 
                  livestreams 
                  WHERE 
                  stream_id = '".$_GET["stream_id"]."' 
                ";

                $result_livestreams = mysqli_query($conn, $sql_livestreams);
                    while ($row = mysqli_fetch_assoc($result_livestreams)) {
                      array_push($livestreams, $row);
                    }

                    for ($index = 0; $index < count($livestreams); $index++) {
                      echo '<source src="upload/videos/'.$livestreams[$index]["stream_src"].'" type="video/mp4">';
                    }

                    $index = 0;

                    echo'
        Your browser does not support the video tag.
          </video>
          <div id="live-tags" style="visibility: hidden !important;">
           <div class="live-tag"style="float:left; margin-top: 14px !important; margin-left: 14px !important; background-color: rgba(255, 0, 0, 0.8) !important; ">
            <p>LIVE</p>
          </div>
          <div class="live-viewers">
            <i class="fas fa-user-circle" style="margin-right: 2px"></i> '.$livestreams[$index]["viewer_cnt"].'
          </div>
            </div>
          <div id="control-bar">
            </div> 
          </div>
        </div>';

            ?>
          

        <!--livestream chat -->
        <div class="chatbox">
          <div class="stream-chat-hdr"> 
            <h4 class="header">STREAM CHAT</h4>
          </div>
          <div class="donations" style="margin-bottom: -20px;">
              <p style="margin-left: 10px; margin-top: 20px; text-align: center">Support the artist by <span style="color: #E3DCFF; text-decoration: underline;">donating </span>using the options below!</p>
          <div style="margin-left: 60px;">
                <div style="width: 400px;" class="donations-carousel">
                 <a href="https://www.gcash.com/" style="margin-left: -3px" target="_blank"><img class="social-donations" src="images/gcash.png" style="margin-right: -26px"></a>
                <a href="https://www.paypal.com/us/home" style="margin-left: -3px" target="_blank"><img class="social-donations" src="images/paypal.png"></a>
                 <a href="https://www.paymaya.com/" target="_blank"><img class="social-donations" src="images/paymaya.png"></a>
                 <a href="https://www.7-eleven.com.ph/" target="_blank"><img class="social-donations" src="images/7eleven.jpg"></a>
                 <a href="https://www.grab.com/ph/" target="_blank"><img class="social-donations" src="images/grabpay.jpg"></a>
                 <a href="https://www.bpi.com.ph/" target="_blank"><img class="social-donations" src="images/bpi.jpg"></a>
                 <a href="https://www.bdo.com.ph/personal" target="_blank"><img class="social-donations" src="images/bdo.png"></a>
                 <a href="https://www.mastercard.com/global/en.html" target="_blank"><img class="social-donations" src="images/mastercard.png"></a>
                 <a href="https://www.visa.com.ph/" target="_blank"><img class="social-donations" src="images/visa.png"></a>
                 <a href="https://www.dragonpay.ph/" target="_blank"><img class="social-donations" src="images/dragonpay.jpg"></a>
              </div>
          </div>
          </div>
           <hr style="background-color: white">
    
            <div class="chat-view scroll">
               <?php
              if (isset($_SESSION["isLogin"])) {
                if ($_SESSION["isLogin"] != "true") {
                   echo'<br><br><br><br>
              <h3 style="text-align: center"><i class="fas fa-comments" style="font-size: 180px"></i></h3>
              <br><br>
             <h5 style="text-align: center; margin-right: 20px; margin-left: 20px"> <span style="color: #E3DCFF" data-toggle="modal" data-target="#logInModal">Login</span> or <span style="color: #E3DCFF" data-toggle="modal" data-target="#signUpModal">Sign Up</span> to view and participate with the conversation!</h5>';
                }
              } else {
                 echo'<br><br><br><br>
              <h3 style="text-align: center"><i class="fas fa-comments" style="font-size: 180px"></i></h3>
              <br><br>
             <h5 style="text-align: center; margin-right: 20px; margin-left: 20px"> <span style="color: #E3DCFF" data-toggle="modal" data-target="#logInModal">Login</span> or <span style="color: #E3DCFF" data-toggle="modal" data-target="#signUpModal">Sign Up</span> to view and participate with the conversation!</h5>';
              }
              ?>
          </div>
              <form id="chats">
                <div class="chat-area">

                  <?php

      if (isset($_SESSION['isLogin'])) {
          if ($_SESSION['isLogin'] != "true") { 
                      //not login
                      echo'<input class="form-control form-control-sm" id="chatmsg" name="chatmsg" type="text" placeholder="Say something!" data-toggle="modal" data-target="#logInModal" style="margin-left: -10px;">
                    <button type="button" data-toggle="modal" data-target="#logInModal" id="chatBtn" name="chatBtn" style="margin-top: 9px; float: right; margin-right: 10px">Chat</button>
                     <button type="button" id="wowBtn" name="wowBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-surprise"></i></button>
                     <button type="button" id="hahaBtn" name="hahaBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-grin-squint-tears"></i></button>
                     <button type="button" id="sadBtn" name="sadBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-sad-cry"></i></button>
                      <button type="button" id="heartBtn" name="heartBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-heart"></i></button>';
                    }
                  } else {
                //notlogin
                      echo'<input class="form-control form-control-sm" id="chatmsg" name="chatmsg" type="text" placeholder="Say something!" data-toggle="modal" data-target="#logInModal" style="margin-left: -10px;">
                    <button type="button" data-toggle="modal" data-target="#logInModal" id="chatBtn" name="chatBtn" style="margin-top: 9px; float: right; margin-right: 10px">Chat</button>
                     <button type="button" id="wowBtn" name="wowBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-surprise"></i></button>
                     <button type="button" id="hahaBtn" name="hahaBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-grin-squint-tears"></i></button>
                     <button type="button" id="sadBtn" name="sadBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-sad-cry"></i></button>
                      <button type="button" id="heartBtn" name="heartBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-heart"></i></button>';
                  }
                  ?>
            </div>
              </form>
          </div>

        <!--livestream details -->

        <div class="stream-details-container row">
          <?php

               $stream_user = [];

                $servername = "localhost";
                $db_username = "root";
                $db_password = "";
                $database = "mellofi";

                $conn = mysqli_connect($servername, $db_username, $db_password, $database);

                $sql_stream_user = "
                  SELECT 
                  * 
                  FROM 
                  livestreams 
                  INNER JOIN
                  musician
                  WHERE 
                  `livestreams`.stream_id = '".$_GET["stream_id"]."' 
                  AND
                  `livestreams`.musician_id = `musician`.musician_id
                ";

                $result_stream_user = mysqli_query($conn, $sql_stream_user);
                    while ($row = mysqli_fetch_assoc($result_stream_user)) {
                      array_push($stream_user, $row);
                    }

                    for ($index = 0; $index < count($stream_user); $index++) {
                      echo '
            <div class="col-1">
             <div class="live-tag"><p>LIVE</p></div>
            <a href="profile.php?musician_id='.$stream_user[$index]["musician_id"].'"><img class="profile-img-live"src="upload/images/'.$stream_user[$index]["profile_pic"].'" style="z-index: -1; border-color: red; border-style: solid;">
              </a>
          </div>
          <div class="col-11" style="margin-bottom: 20px">

              <p class="livestream-title">'.$stream_user[$index]["title"].'</p>
              <a class="streamer" href="profile.php?musician_id='.$stream_user[$index]["musician_id"].'" style="color: #EFC62E">'.$stream_user[$index]["username"].'</a>
              <p class="type" style="text-transform: capitalize">'.$stream_user[$index]["type"].'</p> ';                  
                    }

                    echo '<ul class="list-inline">';

              $genre = [];

              $sql_genre = "
               SELECT 
                *
               FROM 
                `livestreams` 
              INNER JOIN 
                `genre` 
                ON 
                `genre`.stream_id = `livestreams`.stream_id
               WHERE
                 `livestreams`.stream_id = '".$_GET["stream_id"]."'
                ";

                $result_genre = mysqli_query($conn, $sql_genre);
                while ($row = mysqli_fetch_assoc($result_genre)) {
                  array_push($genre, $row);
                }

                for ($index = 0; $index < count($genre); $index++) {
                  echo'<a href="'.$genre[$index]['genre'].'.php"><li class="list-inline-item genre-tag" style="text-transform: uppercase">'.$genre[$index]['genre'].'</li></a>';
                }

          if (isset($_SESSION['isLogin'])) {
             if ($_SESSION['isLogin'] == "true") { 

                $sql_musician = "
                  SELECT 
                   *
                   FROM 
                    `musician` 
                   INNER JOIN 
                    `livestreams` 
                   ON 
                    `musician`.username = '".$_SESSION['username']."'
                   WHERE
                    `livestreams`.stream_id = '".$_GET['stream_id']."'
                   AND 
                    `livestreams`.musician_id = `musician`.musician_id;
                  ";

                $result_musician = mysqli_query($conn, $sql_musician);
                $count = mysqli_num_rows($result_musician);

                if ($count <= 0) {
                  //if not the musician owner

                     echo' </ul>
              <ul class="list-inline" id="follow-unfollow"style="float: right; margin-left: 1030px; margin-top: -135px">';

                }

             } else if ($_SESSION['isLogin'] != "true") {
                //not login
                echo' </ul>
              <ul class="list-inline" id="follow-unfollow"style="float: right; margin-left: 1030px; margin-top: -135px">';

                 
                         $sql_musician = "
                            SELECT 
                            `musician_id`
                            FROM 
                            `livestreams`
                            WHERE 
                             stream_id = '". $_GET["stream_id"]."' 
                            ";

                            $result_musician = mysqli_query($conn, $sql_musician);
                            $row_musician = mysqli_fetch_assoc($result_musician);
                            $musician_id = $row_musician["musician_id"];

                              $sql_pins = "
                                SELECT 
                                * 
                                FROM 
                                `pins`
                                WHERE 
                                 musician_id = '".$musician_id."'
                            ";

                            $result_pins = mysqli_query($conn, $sql_pins);
                            $count_pins = mysqli_num_rows($result_pins);

                  if ($count_pins > 0) {
                    //if there are pins

                       echo' 
                     <button class="list-inline-item btn" data-toggle="modal" data-target="#logInModal" style="--border-color: white">Follow</button>
                    <button class="list-inline-item btn" data-toggle="modal" data-target="#logInModal" style="--border-color: white">Be a member</button>';

                  } else {
                    //no pins
                       echo' 
                     <button class="list-inline-item btn" data-toggle="modal" data-target="#logInModal" style="--border-color: white">Follow</button>';
                  }
             }
          } else {
                //notlogin
              echo' </ul>
              <ul class="list-inline" id="follow-unfollow"style="float: right; margin-left: 1030px; margin-top: -135px">';
                 
                         $sql_musician = "
                            SELECT 
                            `musician_id`
                            FROM 
                            `livestreams`
                            WHERE 
                             stream_id = '". $_GET["stream_id"]."' 
                            ";

                            $result_musician = mysqli_query($conn, $sql_musician);
                            $row_musician = mysqli_fetch_assoc($result_musician);
                            $musician_id = $row_musician["musician_id"];

                              $sql_pins = "
                                SELECT 
                                * 
                                FROM 
                                `pins`
                                WHERE 
                                 musician_id = '".$musician_id."'
                            ";

                            $result_pins = mysqli_query($conn, $sql_pins);
                            $count_pins = mysqli_num_rows($result_pins);

                  if ($count_pins > 0) {
                    //if there are pins

                       echo' 
                     <button class="list-inline-item btn" data-toggle="modal" data-target="#logInModal" style="--border-color: white">Follow</button>
                    <button class="list-inline-item btn" data-toggle="modal" data-target="#logInModal" style="--border-color: white">Be a member</button>';

                  } else {
                    //no pins
                       echo' 
                     <button class="list-inline-item btn" data-toggle="modal" data-target="#logInModal" style="--border-color: white">Follow</button>';
                  }
                  } 

                  ?>
                 
              </ul>
          </div>
        </div>


        <!--livestream social media -->
        <div class="social-media row">
          <div class="col-1">
          <h5 style="font-size: 27px; padding-top: 26px; margin-right: 10px;">FOLLOW THEIR SOCIALS!</h5>
        </div>
          <div class="col-11" style="padding-top: 25px; padding-left: 140px">
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
                  livestreams 
                 ON 
                  `social_media`.musician_id = `livestreams`.musician_id
                  WHERE
                   `livestreams`.stream_id = '".$_GET['stream_id']."'
              ";

              $result_socials = mysqli_query($conn, $sql_socials);
                  while ($row = mysqli_fetch_assoc($result_socials)) {
                    array_push($socials, $row);
                  }

                  for ($index = 0; $index < count($socials); $index++) {
                    if ($index <= 4) {
                        if ($socials[$index]["type"] == "website") {
                           echo '<a href="'.$socials[$index]["link"].'" target="_blank" class="socials"><i class="fas fa-link" style="font-size: 17px; margin-right: 10px; left: 0;"></i>'.$socials[$index]["type"].'</a>
                          <br>';
                        } else if($socials[$index]["type"] == "email"){
                          echo '<a href="'.$socials[$index]["link"].'" target="_blank" class="socials"><i class="fas fa-envelope" style="font-size: 17px; margin-right: 10px; left: 0;"></i>'.$socials[$index]["type"].'</a>
                          <br>';
                        } else {
                          echo '<a href="'.$socials[$index]["link"].'" target="_blank" class="socials"><i class="fab fa-'.$socials[$index]["type"].'" style="font-size: 17px; margin-right: 10px; left: 0;"></i>'.$socials[$index]["type"].'</a>
                          <br>';
                        }
                    } else if ($index <=6) {
                      if ($socials[$index]["type"] == "website") {
                           echo '<a href="'.$socials[$index]["link"].'" target="_blank" class="socials"><i class="fas fa-link" style="font-size: 17px; margin-right: 10px; left: 0;"></i>'.$socials[$index]["type"].'</a>
                          <br>';
                        } else if($socials[$index]["type"] == "email"){
                          echo '<a href="'.$socials[$index]["link"].'" target="_blank" class="socials"><i class="fas fa-envelope" style="font-size: 17px; margin-right: 10px; left: 0;"></i>'.$socials[$index]["type"].'</a>
                          <br>';
                        }else {
                            echo '<div style="float: right; margin-right: 25px; margin-top: -69px">
                      <br>';
                      echo' <a class="socials" href="'.$socials[$index]["link"].'" target="_blank"><i class="fab fa-'.$socials[$index]["type"].'" style="font-size: 17px; margin-right: 10px; left: 0;"></i>'.$socials[$index]["type"].'</a>
               <br>';
                        }
                    
                    }
                  }



            ?>
              </div>
        </div>
          </div>  
        </div>



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

        runDisplay();

      function runDisplay(){
        
        var stream_id = "<?php echo $_GET['stream_id']?>"
        $.post("displayFollow.php", { stream_id: stream_id},
        function(data, response) 
        {
          $('#follow-unfollow').html(data);
          console.log(data);
        }
          );
      }
    });


//on click follow
  $(document).on('click', '#follow', function(){

        function runDisplay(){
        
        var stream_id = "<?php echo $_GET['stream_id']?>"
        $.post("displayFollow.php", { stream_id: stream_id},
        function(data, response) 
        {
          $('#follow-unfollow').html(data);
          console.log(data);
        }
          );
      }

         var stream_id = "<?php echo $_GET['stream_id'] ?>"
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
                  `livestreams`
                 ON 
                 `livestreams`.stream_id = '".$_GET['stream_id']."'
                 AND 
                 `livestreams`.musician_id = `musician`.musician_id
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
            stream_id: stream_id,
            music_id: "null",
            video_id: "null"
          },
          function(data, response) 
        {
          runDisplay();
        });
    });

//on click unfollow
    $(document).on('click', '#unfollow', function(){


      function runDisplay(){
        
        var stream_id = "<?php echo $_GET['stream_id']?>"
        $.post("displayFollow.php", { stream_id: stream_id},
        function(data, response) 
        {
          $('#follow-unfollow').html(data);
          console.log(data);
        }
          );
      }

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
                  `livestreams`
                 ON 
                 `livestreams`.stream_id = '".$_GET['stream_id']."'
                 AND 
                 `livestreams`.musician_id = `musician`.musician_id
            ";

            $result_artist = mysqli_query($conn, $sql_artist);
                while ($row = mysqli_fetch_assoc($result_artist)) {
                  array_push($artist, $row);
                }

                $index = 0;

                echo $artist[$index]['musician_id']; 
                ?>";
        var username = "<?php echo $_SESSION['username']; ?>";
        var stream_id = "<?php echo $_GET["stream_id"] ?>";
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


  $(document).ready(function(){
        //subscription-show chat
          
        function runSubscribe(){
        
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
                  `livestreams`
                 ON 
                 `livestreams`.stream_id = '".$_GET['stream_id']."'
                 AND 
                 `livestreams`.musician_id = `musician`.musician_id
            ";

            $result_artist = mysqli_query($conn, $sql_artist);
                while ($row = mysqli_fetch_assoc($result_artist)) {
                  array_push($artist, $row);
                }

                $index = 0;

                echo $artist[$index]['musician_id']; 
                ?>";
        $.post("subscribe.php", { musician_id: musician_id},
        function(data, response) 
        {
          $('.chat-area').html(data);
          console.log(data);
        }
          );
      }
        runSubscribe();

});


        //chat
              $(document).on('click', '#chatBtn', function(){ 


         function runSubscribe(){
        
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
                  `livestreams`
                 ON 
                 `livestreams`.stream_id = '".$_GET['stream_id']."'
                 AND 
                 `livestreams`.musician_id = `musician`.musician_id
            ";

            $result_artist = mysqli_query($conn, $sql_artist);
                while ($row = mysqli_fetch_assoc($result_artist)) {
                  array_push($artist, $row);
                }

                $index = 0;

                echo $artist[$index]['musician_id']; 
                ?>";
        $.post("subscribe.php", { musician_id: musician_id},
        function(data, response) 
        {
          $('.chat-area').html(data);
          console.log(data);
        }
          );
      }

                    console.log("hello");

                var chatmsg = $("#chatmsg").val();

                if(chatmsg == ""){
                  return false;
                } 

                else {
                $.post("chat.php", {

                  //post name, actual value from the input
                  chatmsg: chatmsg,
                  stream_id: "<?php echo $_GET['stream_id']; ?>",
                  status: "normal"
                },

                function(data, status){
                  document.getElementsByClassName('chat-view')[0].innerHTML = data;
                }
                );
              }
              $("#chats").trigger("reset");
              return false;
            }); 

            setInterval(runFunction, 100);

            function runFunction(){
              $.post("fetchmsg.php", { stream_id: "<?php echo $_GET['stream_id']; ?>" },

              function(data, status) 
              {

                document.getElementsByClassName('chat-view')[0].innerHTML = data;
  
              }
                )
              $(".chat-view").animate({ scrollTop: $(".chat-view")[0].scrollHeight});
            }


        //highlight

         $(document).on('keypress',function(e) {
              if(e.which == 13) {
                e.preventDefault();
                var chatmsg = $("#chatmsg").val();

                if(chatmsg == ""){
                  return false;
                } 

                else {
                $.post("chat.php", {

                  //post name, actual value from the input
                  chatmsg: chatmsg,
                  stream_id: "<?php echo $_GET['stream_id']; ?>",
                  status: "normal"
                },

                function(data, status){
                  document.getElementsByClassName('chat-view')[0].innerHTML = data;
                           runSubscribe();
                }
                );
                 $("#chats").trigger("reset");
              return false;
              }
              }
          });

          $(document).on('click', '#highlightBtn', function(){ 


         function runSubscribe(){
        
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
                  `livestreams`
                 ON 
                 `livestreams`.stream_id = '".$_GET['stream_id']."'
                 AND 
                 `livestreams`.musician_id = `musician`.musician_id
            ";

            $result_artist = mysqli_query($conn, $sql_artist);
                while ($row = mysqli_fetch_assoc($result_artist)) {
                  array_push($artist, $row);
                }

                $index = 0;

                echo $artist[$index]['musician_id']; 
                ?>";
        $.post("subscribe.php", { musician_id: musician_id},
        function(data, response) 
        {
          $('.chat-area').html(data);
          console.log(data);
        }
          );
      }

                console.log("hello");

                var chatmsg = $("#chatmsg").val();
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
                  `livestreams`
                 ON 
                 `livestreams`.stream_id = '".$_GET['stream_id']."'
                 AND 
                 `livestreams`.musician_id = `musician`.musician_id
            ";

            $result_artist = mysqli_query($conn, $sql_artist);
                while ($row = mysqli_fetch_assoc($result_artist)) {
                  array_push($artist, $row);
                }

                $index = 0;

                echo $artist[$index]['musician_id']; 
                ?>";

                if(chatmsg == ""){
                  return false;
                } 

                else {
                $.post("chat.php", {

                  //post name, actual value from the input
                  chatmsg: chatmsg,
                  stream_id: "<?php echo $_GET['stream_id']; ?>",
                  status: "spotlight",
                  musician_id: musician_id
                },

                function(data, status){
                  document.getElementsByClassName('chat-view')[0].innerHTML = data;
                           runSubscribe();
                }
                );
              }
              $("#chats").trigger("reset");
              return false;
            }); 


  $(document).ready(function(){ 

        function runDisplay(){
        
        var stream_id = "<?php echo $_GET['stream_id']?>"
        $.post("displayFollow.php", { stream_id: stream_id},
        function(data, response) 
        {
          $('#follow-unfollow').html(data);
          console.log(data);
        }

          );
      }

         function runSubscribe(){
        
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
                  `livestreams`
                 ON 
                 `livestreams`.stream_id = '".$_GET['stream_id']."'
                 AND 
                 `livestreams`.musician_id = `musician`.musician_id
            ";

            $result_artist = mysqli_query($conn, $sql_artist);
                while ($row = mysqli_fetch_assoc($result_artist)) {
                  array_push($artist, $row);
                }

                $index = 0;

                echo $artist[$index]['musician_id']; 
                ?>";
        $.post("subscribe.php", { musician_id: musician_id},
        function(data, response) 
        {
          $('.chat-area').html(data);
          console.log(data);
        }
          );
      }
      
//modal
        var stream_id = "<?php echo $_GET["stream_id"] ?>"
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
                  `livestreams`
                 ON 
                 `livestreams`.stream_id = '".$_GET['stream_id']."'
                 AND 
                 `livestreams`.musician_id = `musician`.musician_id
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
            video_id: "null",
            stream_id: stream_id,
            music_id: "null"
          },
        function(data, response) 
        {
         runSubscribe();
         runDisplay();
        $('#purchaseModal').modal('hide');
        });
        });
});
    </script>
  </body>
</html>