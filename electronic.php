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

    <title>Electronic - Mellofi</title>

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



 <div>
    <div class="custom-container mt-5 header-tab" style="background-image: url(images/bg-electronic.jpg);">
    </div>
    <div class="custom-container" style="position: absolute; margin-top: -150px;">
       <h1 class="display-2" style=" margin-left: 490px; ">ELECTRONIC</h1>
    </div>
  </div>

<!--Start Tabs-->
  <div class="custom-container" style="margin-top: 30px !important">
    <ul class="nav nav-tabs nav-justified justify-content-center" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="live-tab" data-toggle="tab" href="#live" role="tab" aria-controls="live" aria-selected="true">Live</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="videos-tab" data-toggle="tab" href="#videos" role="tab" aria-controls="videos" aria-selected="false">Videos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="tracks-tab" data-toggle="tab" href="#tracks" role="tab" aria-controls="tracks" aria-selected="false">Tracks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="artists-tab" data-toggle="tab" href="#artists" role="tab" aria-controls="artists" aria-selected="false">Artists</a>
      </li>
    </ul>
  </div>
<!--End Tabs-->

<!--Start Tab Content-->
    <div class="tab-content" id="myTabContent">

  
 <!--Start Live Tab-->
 
    <div class="tab-pane fade show active" id="live" role="tabpanel" aria-labelledby="live-tab">
  <div class="row custom-container" style="display: flex;">
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
          `livestreams` 
         INNER JOIN 
          `musician` 
         ON 
          `livestreams`.musician_id = `musician`.musician_id
        INNER JOIN 
          `genre` 
          ON 
          `genre`.stream_id = `livestreams`.stream_id
         WHERE
          `genre`.genre = 'electronic'
          ORDER BY 
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
                  <p class="lead">Discover amazing livestreams from other genres <a href ="homepage.php" style="color: #B303FF">here.</a></p>
                </div>
              </div>';

              }
              ?>

      </div>
  </div>
 <!-- End Live Tab -->    

  <!--Start Videos Tab-->
 
    <div class="tab-pane fade show" id="videos" role="tabpanel" aria-labelledby="videos-tab">
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
          `videos` 
         INNER JOIN 
          `musician` 
         ON 
          `videos`.musician_id = `musician`.musician_id
        INNER JOIN 
          `genre` 
          ON 
          `genre`.video_id = `videos`.video_id
         WHERE
          `genre`.genre = 'electronic'
          ORDER BY 
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
          `genre`.genre = 'electronic'
      ";

      $result_music = mysqli_query($conn, $sql_music);
          while ($row = mysqli_fetch_assoc($result_music)) {
            array_push($music, $row);
          }
      $count = mysqli_num_rows($result_music);

              if ($count > 0) {
                //if there are tracks in electronic genre

          for ($index = 0; $index < count($music); $index++) {
            echo'            
            <div class="col-3 mt-3">
              <a href="music.php?music_id='.$music[$index]["music_id"].'">
                  <i class="fas fa-play play-btn" id="'.$music[$index]["music_id"].'-btn" onmouseover="document.getElementById(`'.$music[$index]["music_id"].'-btn`).style.visibility = `visible`; document.getElementById(`'.$music[$index]["music_id"].'`).style = `box-shadow: 8px 8px 1px #A200FF; -webkit-filter: blur(2px); -moz-filter: blur(2px); filter: blur(2px);`" onmouseout="document.getElementById(`'.$music[$index]["music_id"].'-btn`).style.visibility = `hidden`; document.getElementById(`'.$music[$index]["music_id"].'`).style = `box-shadow: none; filter: none;`"></i>
                  
                  <img id="'.$music[$index]["music_id"].'" class="music-custom" src="upload/images/'.$music[$index]["album_art"].'"  onmouseover="document.getElementById(`'.$music[$index]["music_id"].'-btn`).style.visibility = `visible`; document.getElementById(`'.$music[$index]["music_id"].'`).style = `box-shadow: 8px 8px 1px #A200FF; -webkit-filter: blur(2px); -moz-filter: blur(2px); filter: blur(2px);`" onmouseout="document.getElementById(`'.$music[$index]["music_id"].'-btn`).style.visibility = `hidden`; document.getElementById(`'.$music[$index]["music_id"].'`).style = `box-shadow: none; filter: none;`" alt="album art '.$music[$index]["title"].'">
                  </a>

                <div style="margin-top: 15px; text-align: center;">
                <a style="color: white;" href="music.php?music_id='.$music[$index]["music_id"].'">
                <h4 style=" margin-bottom: 2px;">'.$music[$index]["title"].'</h4>
                </a>
                  <a style="color: #DEDEDE;" href="profile.php?musician_id='.$music[$index]["musician_id"].'.php">
                  <h6>'.$music[$index]["username"].'</h6>
                  </a>
                 </div>
                </div>';
          }
 
              } else {
                 //if there are no tracks in electronic genre

                  echo '
              <div class="jumbotron" style="margin-left: 400px">
                <div class="container">
                   <h1 class="display-4"><i class="fas fa-compact-disc" style="font-size:130px"></i></h1>
                  <h3 class="display-4">No tracks found</h3>
                  <p class="lead">Discover amazing tracks of artists in other genres <a href ="homepage.php" style="color: #B303FF">here.</a></p>
                </div>
              </div>';

              }
       ?>
              </div>
          </div>
 
    <!--End Tracks Tab-->


     <!--Start Artists Tab-->

      <div class="tab-pane fade show" id="artists" role="tabpanel" aria-labelledby="artists-tab">
  <div class="row custom-container mt-5">

       <?php

      $artist = [];

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

       $sql_artist = "
          SELECT DISTINCT
          `musician`.musician_id, 
          `musician`.username,
          `musician`.profile_pic 
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
          `genre`.genre = 'electronic'

          UNION
         
          SELECT DISTINCT
          `musician`.musician_id, 
          `musician`.username,
          `musician`.profile_pic 
          FROM 
          `videos` 
          INNER JOIN  
          `musician` 
          ON 
          `videos`.musician_id = `musician`.musician_id
          INNER JOIN 
          `genre`
          ON 
          `genre`.video_id = `videos`.video_id
          WHERE 
          `genre`.genre = 'electronic'

          UNION 

          SELECT DISTINCT
          `musician`.musician_id, 
          `musician`.username,
          `musician`.profile_pic 
          FROM 
          `livestreams` 
          INNER JOIN  
          `musician` 
          ON 
          `livestreams`.musician_id = `musician`.musician_id
         INNER JOIN 
          `genre`
          ON 
          `genre`.stream_id = `livestreams`.stream_id
          WHERE 
          `genre`.genre = 'electronic'
      ";

      $result_artist = mysqli_query($conn, $sql_artist);
          while ($row = mysqli_fetch_assoc($result_artist)) {
            array_push($artist, $row);
          }

        $count = mysqli_num_rows($result_artist);

              if ($count > 0) {
                //if artist has an electronic genre music

                  for ($index = 0; $index < count($artist); $index++) {
                    echo'           
               <div class="col-3">
                         <div class="following-artist" style="background-image: url(upload/images/'.$artist[$index]["profile_pic"].'); filter: blur(2px);">
                      </div>
                      <div class="following">
                          <a href="profile.php?musician_id='.$artist[$index]["musician_id"].'" class="following-div">
                         <img src="upload/images/'.$artist[$index]["profile_pic"].'" class="profile-pic following-pic" >
                        <h5 class="following-div">'.$artist[$index]["username"].'</h5>
                      </a>
                      </div>
                    </div>';
                   }

              } else {
                //if artist does not have an electronic genre music

                      echo '
              <div class="jumbotron" style="margin-left: 445px">
                <div class="container">
                   <h1 class="display-4"><i class="fas fa-user-astronaut" style="font-size:130px"></i></h1>
                  <h3 class="display-4">No artists found</h3>
                  <p class="lead">Discover artists in other genres <a href ="homepage.php" style="color: #B303FF">here.</a></p>
                </div>
              </div>';

              }

            ?>
    
          </div>
  </div>

     <!--End Artists Tab-->


    </div>  
<!-- End Tab Content -->   
  



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