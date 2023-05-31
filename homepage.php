<?php
  session_start();
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

    <title>Homepage - Mellofi</title>

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


    <!-- Tab content for following and explore --> 
  
  <!-- content for explore -->   

<!--rising artists-->

<div class="custom-container mt-5" style="margin-top: 70px !important;">
  <div>
  <h3 class="label-txt">Rising Artists</h3>
  </div>
  <div class="artists"style="margin-top: -5px !important">

<?php

      $artists = [];

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_artists = "
          SELECT 
          *
          FROM 
          musician
          ORDER BY 
          RAND()
      ";

      $result_artists = mysqli_query($conn, $sql_artists);
          while ($row = mysqli_fetch_assoc($result_artists)) {
            array_push($artists, $row);
          }

          for ($index = 0; $index < count($artists); $index++) {
            if ($index <=10) {
                if (strlen($artists[$index]["username"]) <= 2) {
              echo'    
             <a href="profile.php?musician_id='.$artists[$index]["musician_id"].'">
              <img id="artist" class="artist-custom" src="upload/images/'.$artists[$index]["profile_pic"].'" alt="..." onmouseover="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `visible`; document.getElementById(this).style = `box-shadow: 8px 8px 1px #A200FF; -webkit-filter: blur(2px); -moz-filter: blur(2px); filter: blur(2px);`" onmouseout="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `hidden`">
            <div style="margin-left: 60px;">
                <p class="text" id="'.$artists[$index]["username"].'" style="text-shadow: 3px 2px #3493D0;" onmouseover="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `visible`" onmouseout="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `hidden`">'.$artists[$index]["username"].'</p>
            </div>
              </a>';
            } else if (strlen($artists[$index]["username"]) <= 3) {
            echo ' 
             <a href="profile.php?musician_id='.$artists[$index]["musician_id"].'">
            <img id="artist" class="artist-custom"  src="upload/images/'.$artists[$index]["profile_pic"].'" alt="..." onmouseover="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `visible`" onmouseout="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `hidden`">
          <div style="margin-left: 49px;">
              <p class="text" id="'.$artists[$index]["username"].'" style="text-shadow: 3px 2px #3493D0;"onmouseover="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `visible`" onmouseout="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `hidden`">'.$artists[$index]["username"].'</p>
          </div>
            </a>';
            } 
            else if (strlen($artists[$index]["username"]) <= 4) {
              echo '
             <a href="profile.php?musician_id='.$artists[$index]["musician_id"].'">
              <img id="artist" class="artist-custom" src="upload/images/'.$artists[$index]["profile_pic"].'" alt="..." onmouseover="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `visible`" onmouseout="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `hidden`">
            <div style="margin-left: 36px;">
                <p class="text" id="'.$artists[$index]["username"].'" style="text-shadow: 3px 2px #3493D0;"  alt="..." onmouseover="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `visible`" onmouseout="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `hidden`">'.$artists[$index]["username"].'</p>
            </div>
              </a>
              ';
            } else if (strlen($artists[$index]["username"]) <= 5) {
              echo '
             <a href="profile.php?musician_id='.$artists[$index]["musician_id"].'">
              <img class="artist-custom" id="artist" src="upload/images/'.$artists[$index]["profile_pic"].'" alt="..." onmouseover="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `visible`" onmouseout="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `hidden`">
            <div style="margin-left: 28px;">
                <p class="text" id="'.$artists[$index]["username"].'" style="text-shadow: 3px 2px #3493D0;" onmouseover="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `visible`" onmouseout="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `hidden`">'.$artists[$index]["username"].'</p>
            </div>
              </a>
              ';
            } else if (strlen($artists[$index]["username"]) <= 6) {
              echo '
             <a href="profile.php?musician_id='.$artists[$index]["musician_id"].'">
              <img class="artist-custom" id="artist" src="upload/images/'.$artists[$index]["profile_pic"].'" alt="..." onmouseover="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `visible`" onmouseout="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `hidden`">
            <div style="margin-left:  20px;">
                <p class="text" id="'.$artists[$index]["username"].'" style="text-shadow: 3px 2px #3493D0;" onmouseover="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `visible`" onmouseout="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `hidden`">'.$artists[$index]["username"].'</p>
            </div>
              </a>';
          } else if (strlen($artists[$index]["username"]) <= 7) {
              echo '
            <a href="profile.php?musician_id='.$artists[$index]["musician_id"].'">
              <img class="artist-custom" id="artist" src="upload/images/'.$artists[$index]["profile_pic"].'" alt="..." onmouseover="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `visible`" onmouseout="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `hidden`">
            <div style="margin-left:  17px;">
                <p class="text" id="'.$artists[$index]["username"].'" style="text-shadow: 3px 2px #3493D0; font-size: 25px;"  onmouseover="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `visible`" onmouseout="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `hidden`">'.$artists[$index]["username"].'</p>
            </div>
              </a>';
          } 
          else if (strlen($artists[$index]["username"]) <= 8) {
              echo '
            <a href="profile.php?musician_id='.$artists[$index]["musician_id"].'">
              <img class="artist-custom" id="artist" src="upload/images/'.$artists[$index]["profile_pic"].'" alt="..." onmouseover="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `visible`" onmouseout="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `hidden`">
            <div style="margin-left:  10px;">
                <p class="text" id="'.$artists[$index]["username"].'" style="text-shadow: 3px 2px #3493D0; font-size: 24px;"  onmouseover="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `visible`" onmouseout="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `hidden`">'.$artists[$index]["username"].'</p>
            </div>
              </a>';
          } else if (strlen($artists[$index]["username"]) >= 9) {
              echo '
            <a href="profile.php?musician_id='.$artists[$index]["musician_id"].'">
              <img class="artist-custom" id="artist" src="upload/images/'.$artists[$index]["profile_pic"].'" alt="..." onmouseover="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `visible`" onmouseout="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `hidden`">
            <div style="margin-left:  8px;">
                <p class="text" id="'.$artists[$index]["username"].'" style="text-shadow: 3px 2px #3493D0; font-size: 20px;"  onmouseover="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `visible`" onmouseout="document.getElementById(`'.$artists[$index]["username"].'`).style.visibility = `hidden`">'.$artists[$index]["username"].'</p>
            </div>
              </a>';
          }
            } else {
            break;
          }
          } 
            ?>
    </div>
</div>
  
  <!-- virtual concerts -->

    <div class="custom-container mt-5" >
      <div>
  <h3 class="label-txt" style="margin-top: 90px !important;">Upcoming Virtual Concerts</h3>
  </div>
     <div class="category"style="margin-top: -5px !important">
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
                  `concerts` 
                 INNER JOIN 
                  `musician` 
                 ON 
                  `musician`.musician_id = `concerts`.musician_id
                WHERE 
                 `concerts`.status = 'upcoming'
                 ORDER BY 
                 RAND ( )
      ";

      $result_concerts = mysqli_query($conn, $sql_concerts);
          while ($row = mysqli_fetch_assoc($result_concerts)) {
            array_push($concerts, $row);
          }

          for ($index = 0; $index < count($concerts); $index++) {
            if ($index <= 12) {
                     echo '
      <div class="wrapper-concert">
        <a href="profile.php?musician_id='.$concerts[$index]["musician_id"].'&schedule=show" style="color: white">
        <div class="slick-slide-custom concerts" id="category" style="padding-top: 180px; padding-left: 12px;">
          <h2 class="title">'.$concerts[$index]["title"].'</h2>
          <p class="price-txt">'.$concerts[$index]["price"].'</p>
          <a href="profile.php?musician_id='.$concerts[$index]["musician_id"].'" style="color: #EFC62E; text-transform: uppercase;">'.$concerts[$index]["username"].' </a>
           <h6>'.$concerts[$index]["date"]. ' ' .$concerts[$index]["time"].'</h6>
        </div>
        <img class="slick-slide-custom"id="category" src="upload/images/'.$concerts[$index]["file_src"].'" alt="'.$concerts[$index]["title"].' concert image">
              </a>
      </div>';
          }
            }

      ?>

    </div>
    </div>


  <!-- popular live streams -->

      <div class="custom-container  mt-5" style="margin-top: 90px !important;">
        <div>
  <h3 class="label-txt" style="margin-left: -13px">Popular Live Streams</h3>
  </div>
      <div class="category"style="margin-top: -5px !important">
        
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
          INNER JOIN 
          musician
          ON 
          `musician`.musician_id = `livestreams`.musician_id
          WHERE
          status = 'live'
          AND 
          category = 'popular'
           ORDER BY 
                 RAND ( )
      ";

      $result_livestreams = mysqli_query($conn, $sql_livestreams);
          while ($row = mysqli_fetch_assoc($result_livestreams)) {
            array_push($livestreams, $row);
          }

          for ($index = 0; $index < count($livestreams); $index++) {
            if ($index < 6) {
              //if title is not long
                if (strlen($livestreams[$index]["title"]) < 27) {
              if ($livestreams[$index]["price"] == "premium") {
                    //if premium
              echo'
              <span>
              <a href="livestream.php?stream_id='.$livestreams[$index]["stream_id"].'">
               <img src="upload/imaupload/images/ges/'.$livestreams[$index]["thumbnail"].'" class="slick-slide-custom" id="category" >
                <h6 style="position: absolute; margin-top: -250px; margin-left: 14px; background-color: red; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white">LIVE</h6>
                     <h6 style="position: absolute; margin-top: -35px; margin-left: 370px; background-color: green; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white; border-radius: 10px">PREMIUM</h6>
               </a>
                  <div class="row" style="margin-top: 10px">
                  <div class="col-2">
                    <a href="profile.php?musician_id='.$livestreams[$index]["musician_id"].'">
                    <img class="profile-img" src="upload/images/'.$livestreams[$index]["profile_pic"].'">
                    </a>
                  </div>
                  <div class="col-9">
                   <a class="stream-title" href="livestream.php?stream_id='.$livestreams[$index]["stream_id"].'" style="color: white">'.$livestreams[$index]["title"].'</a>
                   <br>
                   <a href="profile.php?musician_id='.$livestreams[$index]["musician_id"].'" class="user-live">'.$livestreams[$index]["username"].'</a>
                   <p class="viewer-cnt">'.$livestreams[$index]["viewer_cnt"].' viewers <span style="font-size: 12px;">| Started streaming '.$livestreams[$index]["stream_time"].' ago<span></p>
                  </div>
               </div>
              </span>
              ';

                   } else {
                    //not premium
                       echo'
              <span>
              <a href="livestream.php?stream_id='.$livestreams[$index]["stream_id"].'">
               <img src="upload/images/'.$livestreams[$index]["thumbnail"].'" class="slick-slide-custom" id="category" >
                <h6 style="position: absolute; margin-top: -250px; margin-left: 14px; background-color: red; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white">LIVE</h6>
               </a>
                  <div class="row" style="margin-top: 10px">
                  <div class="col-2">
                    <a href="profile.php?musician_id='.$livestreams[$index]["musician_id"].'">
                    <img class="profile-img" src="upload/images/'.$livestreams[$index]["profile_pic"].'">
                    </a>
                  </div>
                  <div class="col-9">
                   <a class="stream-title" href="livestream.php?stream_id='.$livestreams[$index]["stream_id"].'" style="color: white">'.$livestreams[$index]["title"].'</a>
                   <br>
                   <a href="profile.php?musician_id='.$livestreams[$index]["musician_id"].'" class="user-live">'.$livestreams[$index]["username"].'</a>
                   <p class="viewer-cnt">'.$livestreams[$index]["viewer_cnt"].' viewers <span style="font-size: 12px;">| Started streaming '.$livestreams[$index]["stream_time"].' ago<span></p>
                  </div>
               </div>
              </span>
              ';
                   }
                } else {
                  //if title is long
                if ($livestreams[$index]["price"] == "premium") {
                      //if premium
            echo'
              <span>
              <a href="livestream.php?stream_id='.$livestreams[$index]["stream_id"].'">
               <img src="upload/images/'.$livestreams[$index]["thumbnail"].'"  class="slick-slide-custom" id="category">
                <h6 style="position: absolute; margin-top: -250px; margin-left: 14px; background-color: red; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white">LIVE</h6>
                 <h6 style="position: absolute; margin-top: -35px; margin-left: 370px; background-color: green; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white; border-radius: 10px">PREMIUM</h6>
                 </a>
                  <div class="row" style="margin-top: 10px">
                  <div class="col-2">
                  <a href="profile.php?musician_id='.$livestreams[$index]["musician_id"].'">
                    <img class="profile-img" src="upload/images/'.$livestreams[$index]["profile_pic"].'">
                    </a>
                  </div>
                  <div class="col-9">
                   <a class="stream-title"  title="'.$livestreams[$index]["title"].'" href="livestream.php?stream_id='.$livestreams[$index]["stream_id"].'" style="color: white">' . substr($livestreams[$index]["title"], 0, 25) . '...</a>
                    <br>
                   <a href="profile.php?musician_id='.$livestreams[$index]["musician_id"].'" class="user-live">'.$livestreams[$index]["username"].'</a>
                   <p class="viewer-cnt">'.$livestreams[$index]["viewer_cnt"].' viewers <span style="font-size: 12px;">| Started streaming '.$livestreams[$index]["stream_time"].' ago<span></p>
                  </div>
               </div>
              </span>';
                      }
                      else{
                        //if not premium
              echo'
              <span>
              <a href="livestream.php?stream_id='.$livestreams[$index]["stream_id"].'">
               <img src="upload/images/'.$livestreams[$index]["thumbnail"].'"  class="slick-slide-custom" id="category">
                <h6 style="position: absolute; margin-top: -250px; margin-left: 14px; background-color: red; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white">LIVE</h6>
                 </a>
                  <div class="row" style="margin-top: 10px">
                  <div class="col-2">
                  <a href="profile.php?musician_id='.$livestreams[$index]["musician_id"].'">
                    <img class="profile-img" src="upload/images/'.$livestreams[$index]["profile_pic"].'">
                    </a>
                  </div>
                  <div class="col-9">
                   <a class="stream-title"  title="'.$livestreams[$index]["title"].'" href="livestream.php?stream_id='.$livestreams[$index]["stream_id"].'" style="color: white">' . substr($livestreams[$index]["title"], 0, 25) . '...</a>
                    <br>
                   <a href="profile.php?musician_id='.$livestreams[$index]["musician_id"].'" class="user-live">'.$livestreams[$index]["username"].'</a>
                   <p class="viewer-cnt">'.$livestreams[$index]["viewer_cnt"].' viewers <span style="font-size: 12px;">| Started streaming '.$livestreams[$index]["stream_time"].' ago<span></p>
                  </div>
               </div>
              </span>';
                      }

                }
            }
    } 
      ?>
</div>
  </div>

  <!-- popular live streams -->

      <div class="custom-container  mt-5" style="margin-top: 90px !important;">
        <div>
  <h3 class="label-txt" style="margin-left: -13px">Recently Started Live Streams</h3>
  </div>
      <div class="category" style="margin-top: -5px !important">
        
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
          INNER JOIN 
          musician
          ON 
          `musician`.musician_id = `livestreams`.musician_id
          WHERE
          status = 'live'
          AND 
          category = 'recent'
           ORDER BY 
                 RAND ( )
      ";

      $result_livestreams = mysqli_query($conn, $sql_livestreams);
          while ($row = mysqli_fetch_assoc($result_livestreams)) {
            array_push($livestreams, $row);
          }

          for ($index = 0; $index < count($livestreams); $index++) {
            if ($index < 6) {
              //if title is not long
                if (strlen($livestreams[$index]["title"]) < 27) {

                   if ($livestreams[$index]["price"] == "premium") {
                    //if premium
              echo'
              <span>
              <a href="livestream.php?stream_id='.$livestreams[$index]["stream_id"].'">
               <img src="upload/images/'.$livestreams[$index]["thumbnail"].'" class="slick-slide-custom" id="category" >
                <h6 style="position: absolute; margin-top: -250px; margin-left: 14px; background-color: red; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white">LIVE</h6>
                     <h6 style="position: absolute; margin-top: -35px; margin-left: 370px; background-color: green; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white; border-radius: 10px">PREMIUM</h6>
               </a>
                  <div class="row" style="margin-top: 10px">
                  <div class="col-2">
                    <a href="profile.php?musician_id='.$livestreams[$index]["musician_id"].'">
                    <img class="profile-img" src="upload/images/'.$livestreams[$index]["profile_pic"].'">
                    </a>
                  </div>
                  <div class="col-9">
                   <a class="stream-title" href="livestream.php?stream_id='.$livestreams[$index]["stream_id"].'" style="color: white">'.$livestreams[$index]["title"].'</a>
                   <br>
                   <a href="profile.php?musician_id='.$livestreams[$index]["musician_id"].'" class="user-live">'.$livestreams[$index]["username"].'</a>
                   <p class="viewer-cnt">'.$livestreams[$index]["viewer_cnt"].' viewers <span style="font-size: 12px;">| Started streaming '.$livestreams[$index]["stream_time"].' ago<span></p>
                  </div>
               </div>
              </span>
              ';

                   } else {
                    //not premium
                       echo'
              <span>
              <a href="livestream.php?stream_id='.$livestreams[$index]["stream_id"].'">
               <img src="upload/images/'.$livestreams[$index]["thumbnail"].'" class="slick-slide-custom" id="category" >
                <h6 style="position: absolute; margin-top: -250px; margin-left: 14px; background-color: red; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white">LIVE</h6>
               </a>
                  <div class="row" style="margin-top: 10px">
                  <div class="col-2">
                    <a href="profile.php?musician_id='.$livestreams[$index]["musician_id"].'">
                    <img class="profile-img" src="upload/images/'.$livestreams[$index]["profile_pic"].'">
                    </a>
                  </div>
                  <div class="col-9">
                   <a class="stream-title" href="livestream.php?stream_id='.$livestreams[$index]["stream_id"].'" style="color: white">'.$livestreams[$index]["title"].'</a>
                   <br>
                   <a href="profile.php?musician_id='.$livestreams[$index]["musician_id"].'" class="user-live">'.$livestreams[$index]["username"].'</a>
                   <p class="viewer-cnt">'.$livestreams[$index]["viewer_cnt"].' viewers <span style="font-size: 12px;">| Started streaming '.$livestreams[$index]["stream_time"].' ago<span></p>
                  </div>
               </div>
              </span>
              ';
                   }
                } else {
                  //if title is long

                    if ($livestreams[$index]["price"] == "premium") {
                      //if premium
            echo'
              <span>
              <a href="livestream.php?stream_id='.$livestreams[$index]["stream_id"].'">
               <img src="upload/images/'.$livestreams[$index]["thumbnail"].'"  class="slick-slide-custom" id="category">
                <h6 style="position: absolute; margin-top: -250px; margin-left: 14px; background-color: red; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white">LIVE</h6>
                 <h6 style="position: absolute; margin-top: -35px; margin-left: 370px; background-color: green; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white; border-radius: 10px">PREMIUM</h6>
                 </a>
                  <div class="row" style="margin-top: 10px">
                  <div class="col-2">
                  <a href="profile.php?musician_id='.$livestreams[$index]["musician_id"].'">
                    <img class="profile-img" src="upload/images/'.$livestreams[$index]["profile_pic"].'">
                    </a>
                  </div>
                  <div class="col-9">
                   <a class="stream-title"  title="'.$livestreams[$index]["title"].'" href="livestream.php?stream_id='.$livestreams[$index]["stream_id"].'" style="color: white">' . substr($livestreams[$index]["title"], 0, 25) . '...</a>
                    <br>
                   <a href="profile.php?musician_id='.$livestreams[$index]["musician_id"].'" class="user-live">'.$livestreams[$index]["username"].'</a>
                   <p class="viewer-cnt">'.$livestreams[$index]["viewer_cnt"].' viewers <span style="font-size: 12px;">| Started streaming '.$livestreams[$index]["stream_time"].' ago<span></p>
                  </div>
               </div>
              </span>';
                      }
                      else{
                        //if not premium
              echo'
              <span>
              <a href="livestream.php?stream_id='.$livestreams[$index]["stream_id"].'">
               <img src="upload/images/'.$livestreams[$index]["thumbnail"].'"  class="slick-slide-custom" id="category">
                <h6 style="position: absolute; margin-top: -250px; margin-left: 14px; background-color: red; padding-left: 7px; padding-right: 7px; padding-top: 3px; padding-bottom: 3px; color: white">LIVE</h6>
                 </a>
                  <div class="row" style="margin-top: 10px">
                  <div class="col-2">
                  <a href="profile.php?musician_id='.$livestreams[$index]["musician_id"].'">
                    <img class="profile-img" src="upload/images/'.$livestreams[$index]["profile_pic"].'">
                    </a>
                  </div>
                  <div class="col-9">
                   <a class="stream-title"  title="'.$livestreams[$index]["title"].'" href="livestream.php?stream_id='.$livestreams[$index]["stream_id"].'" style="color: white">' . substr($livestreams[$index]["title"], 0, 25) . '...</a>
                    <br>
                   <a href="profile.php?musician_id='.$livestreams[$index]["musician_id"].'" class="user-live">'.$livestreams[$index]["username"].'</a>
                   <p class="viewer-cnt">'.$livestreams[$index]["viewer_cnt"].' viewers <span style="font-size: 12px;">| Started streaming '.$livestreams[$index]["stream_time"].' ago<span></p>
                  </div>
               </div>
              </span>';
                      }

                }
            }
    } 
      ?>
</div>
  </div>

    <!-- trending pop songs -->

  <div class="custom-container  mt-5" style="margin-top: 90px !important;">
    <div>
  <h3 class="label-txt">trending <a style="color: #A200FF" href="pop.php">pop</a> songs</h3>
  </div>
    <div class="music mt-5" style="margin-top: -5px !important">
      <?php

      $music = [];

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_music = "
           SELECT 
          `music`.music_id, 
          `music`.album_art, 
          `music`.title,
          `musician`.musician_id, 
          `musician`.username,
          `genre`.genre
         FROM 
          `music` 
         INNER JOIN 
          `musician` 
         ON 
          `music`.musician_id = `musician`.musician_id
        INNER JOIN 
          `genre` 
          ON 
          `genre`.music_id = `music`.music_id
         WHERE
          `genre`.genre = 'pop'
          ORDER BY 
                 RAND ( )
      ";

      $result_music = mysqli_query($conn, $sql_music);
          while ($row = mysqli_fetch_assoc($result_music)) {
            array_push($music, $row);
          }

          for ($index = 0; $index < count($music); $index++) {
            echo'
           <div>
               <a href="music.php?music_id='.$music[$index]["music_id"].'">
                  <i class="fas fa-play play-btn" id="'.$music[$index]["music_id"].'-btn-pop" onmouseover="document.getElementById(`'.$music[$index]["music_id"].'-btn-pop`).style.visibility = `visible`; document.getElementById(`'.$music[$index]["music_id"].'-pop`).style = `box-shadow: 8px 8px 1px #A200FF; -webkit-filter: blur(2px); -moz-filter: blur(2px); filter: blur(2px);`" onmouseout="document.getElementById(`'.$music[$index]["music_id"].'-btn-pop`).style.visibility = `hidden`; document.getElementById(`'.$music[$index]["music_id"].'-pop`).style = `box-shadow: none; filter: none;`"></i>
                  
                  <img id="'.$music[$index]["music_id"].'-pop" class="music-custom" src="upload/images/'.$music[$index]["album_art"].'"  onmouseover="document.getElementById(`'.$music[$index]["music_id"].'-btn-pop`).style.visibility = `visible`; document.getElementById(`'.$music[$index]["music_id"].'-pop`).style = `box-shadow: 8px 8px 1px #A200FF; -webkit-filter: blur(2px); -moz-filter: blur(2px); filter: blur(2px);`" onmouseout="document.getElementById(`'.$music[$index]["music_id"].'-btn-pop`).style.visibility = `hidden`; document.getElementById(`'.$music[$index]["music_id"].'-pop`).style = `box-shadow: none; filter: none;`" alt="album art '.$music[$index]["title"].'">
                  </a>

                <div style="margin-top: 15px; text-align: center;">
                <a style="color: white;" href="music.php?music_id='.$music[$index]["music_id"].'">
                <h4 style="margin-bottom: 2px;">'.$music[$index]["title"].'</h4>
                </a>
                  <a style="color: #DEDEDE;" href="profile.php?musician_id='.$music[$index]["musician_id"].'">
                  <h6>'.$music[$index]["username"].'</h6>
                  </a>
                 </div>
              </div>
            ';
          }

      ?>
    </div>
  </div>

    <!-- trending chill songs -->

   <div class="custom-container mt-5" style="margin-top: 90px !important;">
    <div>
  <h3 class="label-txt">trending <a style="color: #A200FF" href="chill.php">chill</a> songs</h3>
  </div>
    <div class="music mt-5" style="margin-top: -5px !important">
      <?php

      $music = [];

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_music = "
           SELECT 
          `music`.music_id, 
          `music`.album_art, 
          `music`.title,
          `musician`.musician_id, 
          `musician`.username,
          `genre`.genre
         FROM 
          `music` 
         INNER JOIN 
          `musician` 
         ON 
          `music`.musician_id = `musician`.musician_id
        INNER JOIN 
          `genre` 
          ON 
          `genre`.music_id = `music`.music_id
         WHERE
          `genre`.genre = 'chill'
          ORDER BY 
                 RAND ( )
      ";

      $result_music = mysqli_query($conn, $sql_music);
          while ($row = mysqli_fetch_assoc($result_music)) {
            array_push($music, $row);
          }

          for ($index = 0; $index < count($music); $index++) {
            if ($index < 10) {
              echo'
           <div>
               <a href="music.php?music_id='.$music[$index]["music_id"].'">
                  <i class="fas fa-play play-btn" id="'.$music[$index]["music_id"].'-btn-chill" onmouseover="document.getElementById(`'.$music[$index]["music_id"].'-btn-chill`).style.visibility = `visible`; document.getElementById(`'.$music[$index]["music_id"].'-chill`).style = `box-shadow: 8px 8px 1px #A200FF; -webkit-filter: blur(2px); -moz-filter: blur(2px); filter: blur(2px);`" onmouseout="document.getElementById(`'.$music[$index]["music_id"].'-btn-chill`).style.visibility = `hidden`; document.getElementById(`'.$music[$index]["music_id"].'-chill`).style = `box-shadow: none; filter: none;`"></i>
                  
                  <img id="'.$music[$index]["music_id"].'-chill" class="music-custom" src="upload/images/'.$music[$index]["album_art"].'"  onmouseover="document.getElementById(`'.$music[$index]["music_id"].'-btn-chill`).style.visibility = `visible`; document.getElementById(`'.$music[$index]["music_id"].'-chill`).style = `box-shadow: 8px 8px 1px #A200FF; -webkit-filter: blur(2px); -moz-filter: blur(2px); filter: blur(2px);`" onmouseout="document.getElementById(`'.$music[$index]["music_id"].'-btn-chill`).style.visibility = `hidden`; document.getElementById(`'.$music[$index]["music_id"].'-chill`).style = `box-shadow: none; filter: none;`" alt="album art '.$music[$index]["title"].'">
                  </a>

                <div style="margin-top: 15px; text-align: center;">
                <a style="color: white;" href="music.php?music_id='.$music[$index]["music_id"].'">
                <h4 style=" margin-bottom: 2px;">'.$music[$index]["title"].'</h4>
                </a>
                  <a style="color: #DEDEDE;" href="profile.php?musician_id='.$music[$index]["musician_id"].'">
                  <h6>'.$music[$index]["username"].'</h6>
                  </a>
                 </div>
              </div>
            ';
            }
          }

      ?>
    </div>





  </div>


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
  </body>
</html>