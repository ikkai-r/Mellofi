<?php
  session_start();

  if ($_GET['musician_id'] == '') {
    header('Location: homepage.php?musician_id=none');
  }

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
      $row = mysqli_fetch_assoc($result_artist);
      $count = mysqli_num_rows($result_artist);

      if ($count <= 0 || $row['username'] != $_SESSION["username"]) {
       header('Location: homepage.php?authorization=none');
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
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
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
         <link rel="stylesheet" type="text/css" href="css/style3.css">
     <link rel="stylesheet" type="text/css" href="css/footer.css">      

    <title>Mellofi</title>

  </head>
  <body>

   <!-- Start Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-custom-nav" style="z-index: 2;">
      <a class="navbar-brand mr-3 ml-3" href="index.php">
        <img class="menu-logo" src="images/logo.png" alt="MELLOFI Logo">
      </a>
  
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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-weight: bold">
        <ul class="navbar-nav ml-auto" style="font-weight: bold">
          <li class="nav-item dropdown" style="font-weight: bold">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i><span class="username">'. $_SESSION["username"] .'
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="font-weight: bold">
              <a class="dropdown-item" href="profile.php?musician_id='.$row['musician_id'].'" style="font-weight: bold">
                <i class="fas fa-user" style="margin-right: 7px; font-weight: bold" ></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="musician-settings.php?musician_id='.$row['musician_id'].'" style="font-weight: bold">
                <i class="fas fa-cog" style="margin-right: 7px; font-weight: bold"></i></i>Settings
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php" style="font-weight: bold">
                <i class="fas fa-sign-out-alt" style="font-weight: bold; margin-right: 7px;"></i> Log out
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


    <!-- Sidebar -->
    <div class="flex-column flex-shrink-0 p-3 text-white" style=" min-width: 300px; max-width: 300px; height: 890px; display: block; background-color: #18181b; position: absolute;">
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
       <h4 class="pt-3 pl-2">CREATOR STUDIO</h4>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <?php 
        echo '<a href="dashboard.php?musician_id='.$_GET['musician_id'].'"" class="nav-link creator-studio-icons" aria-current="page">';
        ?>
<i class="fas fa-home" style="margin-right: 15px"></i>
          Home
        </a>
      </li>
      <li>
       <?php 
       echo'<a href="contentUpload.php?musician_id='.$_GET['musician_id'].'" class="nav-link creator-studio-icons">';
       ?> 
<i class="fas fa-compact-disc" style="margin-right: 15px"></i>         
         Content Manager
        </a>
      </li>
      <li>
      <?php 
       echo'<a href="streamSetup.php?musician_id='.$_GET['musician_id'].'" class="nav-link creator-studio-icons">';
       ?> 
 <i class="fas fa-sliders-h" style="margin-right: 15px"></i>       
          Stream Setup
        </a>
      </li>
      <li>
         <?php 
       echo'<a href="memberCustom.php?musician_id='.$_GET['musician_id'].'" class="nav-link active creator-studio-icons">';
       ?> 
          <i class="fas fa-gift" style="margin-right: 15px"></i>
          Member Customization
        </a>
      </li>
      <li>
    </ul>
    <hr>
  </div>


       <!-- Confirm Modal -->
                        <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header" style="background-color: black">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body" style="color: black; text-align: center">
                                    <h2 class="custom-hdr">ARE YOU SURE YOU WANT TO DELETE THIS?</h2>
                                    <?php echo'<a href="#" style="color: black" id="confirmBtn"><button class="btn" style="padding-left: 65px; padding-right: 65px; margin-right: 20px">YES</button></a>';
                                    ?>
                                    <button class="btn" data-dismiss="modal" style="padding-left: 65px; padding-right: 65px">NO</button>
                              </div>
                            </div>
                          </div>
                        </div>

  <div style="margin-left: 370px; margin-right: 90px" class="mt-5" style="display: flex !important">
    
  <div style="width: 1000px; height: 500px; background-color: #323235; border-radius: 10px; float: left; border-color: black; border-width: 1px; border-style: solid; ">
    <h2 style="margin-top: 20px; margin-left: 25px">FLAIR PINS CUSTOMIZATION</h2>
    
    <div style="float: left; width: 500px; height: 400px; background-color: #29282A; margin-left: 20px; border-radius: 10px;border-color: black; border-width: 1px; border-style: solid; margin-top: 10px">
    <h4  style="margin-top: 30px; margin-left: 20px">Current Pins</h4> 
    <img src="http://pa1.narvii.com/7108/492cd4de4d8677841f0a32682450ab4588805240r1-200-200_00.gif" style="width: 30px; position: absolute; margin-top: -40px; margin-left: 170px">
    <p style="margin-left: 20px; margin-top: -5px; font-size: 13px">You can upload up to 5 pins!</p>
    <?php

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";  
      $database = "mellofi";
      $flairs = [];

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_flair = "
      SELECT
      * 
      FROM 
      `pins`
      WHERE
      `musician_id` ='".$_GET["musician_id"]."'
      ";

      $result_flair = mysqli_query($conn, $sql_flair);
      while ($row_flair = mysqli_fetch_assoc($result_flair)) {
        array_push($flairs, $row_flair);
      }
      $count_flair = mysqli_num_rows($result_flair);

      for ($i=0; $i < count($flairs); $i++) { 
        if ($i == 0) {
          echo' <img src="upload/images/'.$flairs[$i]["flair_pin_src"].'" style="width: 45px; height: 45px; margin-top: 10px; margin-left: 20px; margin-right: 10px">';
        } else {
           echo' <img src="upload/images/'.$flairs[$i]["flair_pin_src"].'" style="width: 45px; height: 45px; margin-top: 10px; margin-right: 10px">';
        }
      }

      if ($count_flair < 5) {
        for ($i=0; $i != (5-$count_flair); $i++) { 
          echo'<img src="upload/images/blank.png" style="width: 60px; margin-top: 10px; margin-left: 10px">';
        }
      }

    ?>
     <h4  style="margin-top: 40px; margin-left: 20px">Upload Pins</h4>
     <img src="http://pa1.narvii.com/7108/492cd4de4d8677841f0a32682450ab4588805240r1-200-200_00.gif" style="width: 30px; position: absolute; margin-top: -40px; margin-left: 166px">
       <p style="margin-left: 20px; margin-top: -5px; font-size: 13px">Click the box to choose an image you want to upload as a flair pin.</p>
     <?php

     echo'
     <form method="post" enctype="multipart/form-data" style="width: 500px; margin-left: -10px" action="flairpins.php?musician_id='.$_GET["musician_id"].'">'; 
     ?>
     <img src="upload/images/blank.png" id="pinsDisplay" style="width: 75px; height: 75px;  margin-left: 50px; cursor: pointer;" onclick ="triggerClick()">
     <i style="font-size: 35px; position: absolute; margin-top: 14px; margin-left: -59px" class="fas fa-plus" onclick ="triggerClick()" id="plus"></i>
     <span style="position: absolute; margin-left: -66px; font-size: 13px; margin-top: 51px" onclick ="triggerClick()" id="choose-btn">Choose</span>
     <input type="file" name="pinsImg" onchange="displayImage(this)" id="pinsImg" style="display: none">
     <button class="btn" type="submit" style="margin-left: 27px; margin-top: 20px">Upload your flair pin</button>

     <p style="font-size: 11px; margin-left: 35px; margin-top: 10px">Be sure that by submitting your flair pin, the image adheres to <a href="terms.php" style="color:#AE00FF">Mellofi's Terms and Conditions</a>. Otherwise, if violated, sanctions may be given to your account.</p>
   </form>
   </div>
      <div style="float: right; width: 440px; height: 400px; background-color: #29282A; margin-left: 10px; margin-right: 20px;border-radius: 10px;border-color: black; border-width: 1px; border-style: solid; margin-top: 10px">
    <h4  style="margin-top: 30px; margin-left: 20px">Delete Pins</h4>
     <img src="http://pa1.narvii.com/7108/492cd4de4d8677841f0a32682450ab4588805240r1-200-200_00.gif" style="width: 30px; position: absolute; margin-top: -40px; margin-left: 155px">
             <p style="margin-left: 20px; margin-top: -5px; font-size: 13px">Click or select the pin you wish to delete.</p>
        <?php

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";  
      $database = "mellofi";
      $flairs = [];

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_flair = "
      SELECT
      * 
      FROM 
      `pins`
      WHERE
      `musician_id` ='".$_GET["musician_id"]."'
      ";

      $result_flair = mysqli_query($conn, $sql_flair);
      while ($row_flair = mysqli_fetch_assoc($result_flair)) {
        array_push($flairs, $row_flair);
      }
      $count_flair = mysqli_num_rows($result_flair);

      for ($i=0; $i < count($flairs); $i++) { 
        if ($i == 0) {
          echo' <img src="upload/images/'.$flairs[$i]["flair_pin_src"].'" style="width: 45px; height: 45px; margin-top: 10px; margin-left: 20px; margin-right: 5px; cursor: pointer" onclick="deleteClick(this.id)" id="delete-'.$flairs[$i]["flair_pin_id"].'"  data-toggle="modal" data-target="#confirmModal">';
        } else {
           echo' <img src="upload/images/'.$flairs[$i]["flair_pin_src"].'" style="width: 45px; height: 45px; margin-top: 10px; margin-left: 5px; margin-right: 10px;cursor: pointer" onclick="deleteClick(this.id)" id="delete-'.$flairs[$i]["flair_pin_id"].'" data-toggle="modal" data-target="#confirmModal">';
        }
      }

      if ($count_flair < 5) {
        for ($i=0; $i != (5-$count_flair); $i++) { 
          echo'<img src="upload/images/blank.png" style="width: 50px; height: 50px; margin-top: 10px; margin-left: 10px">';
        }
      }

    ?>
     <h4  style="margin-top: 35px; margin-left: 20px">Pin Preview</h4>
      <img src="http://pa1.narvii.com/7108/492cd4de4d8677841f0a32682450ab4588805240r1-200-200_00.gif" style="width: 30px; position: absolute; margin-top: -40px; margin-left: 160px">

    <p style="margin-left: 20px; margin-top: -5px; font-size: 13px">Click or select the pin you wish to preview.</p>
            <?php

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";  
      $database = "mellofi";
      $flairs = [];

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_flair = "
      SELECT
      * 
      FROM 
      `pins`
      WHERE
      `musician_id` ='".$_GET["musician_id"]."'
      ";

      $result_flair = mysqli_query($conn, $sql_flair);
      while ($row_flair = mysqli_fetch_assoc($result_flair)) {
        array_push($flairs, $row_flair);
      }
      $count_flair = mysqli_num_rows($result_flair);

      for ($i=0; $i < count($flairs); $i++) { 
        if ($i == 0) {
          echo' <img src="upload/images/'.$flairs[$i]["flair_pin_src"].'" style="width: 45px; height: 45px; margin-left: 20px; margin-right: 5px; cursor: pointer" onclick="previewClick(this.id)" id="preview-'.$flairs[$i]["flair_pin_id"].'">';
        } else {
           echo' <img src="upload/images/'.$flairs[$i]["flair_pin_src"].'" style="width: 45px; height: 45px; margin-left: 5px; margin-right: 10px;cursor: pointer" onclick="previewClick(this.id)" id="preview-'.$flairs[$i]["flair_pin_id"].'">';
        }
      }

      if ($count_flair < 5) {
        for ($i=0; $i != (5-$count_flair); $i++) { 
          echo'<img src="upload/images/blank.png" style="width: 50px; height: 50px; margin-top: 10px; margin-left: 10px">';
        }
      }

    ?>
      <div style="width: 380px; height: 60px; background-color: #101011; margin-left: 20px; margin-top: 10px; border-radius: 10px">
     <div>
      <h6 style=" margin-left: 17px; padding-top: 17px"><span id="clicked_pin"></span>Mellofi: Hello! Thank you for the live!</h6>
    </div>
   </div>

   </div>
  </div>

    <div style="width: 430px; height: 500px; background-color: #323235; border-radius: 10px; float: right; border-color: black; border-width: 1px; border-style: solid; ">
     <h3 style="margin-top: 25px; margin-left: 20px">SUBSCRIPTION DETAILS</h3>
     <div style="width: 380px; height: 190px; background-color: #29282A; border-radius: 10px; margin-top: 20px; border-color: black; border-width: 1px; border-style: solid; margin-left: 20px;">
     <h4 style="margin-left: 20px; margin-top: 23px;">Total Revenue</h4>
     <?php 

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);
      
      $sql_sub = "
                  SELECT 
                  * 
                  FROM 
                  `subscription`
                  WHERE 
                  musician_id = '".$_GET["musician_id"]."'
            ";

      $result_sub = mysqli_query($conn, $sql_sub);
      $sub_count = mysqli_num_rows($result_sub);

      $subscription = ($sub_count*140);

        echo' <h2 style="color: #A970FF; margin-left: 15px; margin-top: 30px; font-size: 35px; ">₱ '.$subscription.'</h2>';
     ?>
     
      <p style="font-size: 12px; line-height: 1.2 !important; margin-left: 20px; margin-right: 20px; margin-top: 20px">Transfer fees from the payment processors might affect the actual amount you will receive in your payout account.</p>
     </div>
          <div style="width: 380px; height: 190px; background-color: #29282A; border-radius: 10px; margin-top: 20px; border-color: black; border-width: 1px; border-style: solid; margin-left: 20px;">
     <h4 style="margin-left: 20px; margin-top: 15px;">Payout Account</h4>
     <?php

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql = "
      SELECT 
      *
      FROM 
      `payout_accounts`
      INNER JOIN 
      `users`
      ON 
      `users`.username = '".$_SESSION["username"]."'
      WHERE 
      `payout_accounts`.musician_id = '".$_GET["musician_id"]."'
      ";

      $result = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($result);
      $row = mysqli_fetch_assoc($result);

if ($count > 0) {
  //may payout
    if ($row["payout_method"] == "Paypal") {
     echo'<span style="margin-top: 21px; position: absolute; margin-left: 20px">'.$row["payout_method"].'</span>
      <h2 style="color: #A970FF; margin-left: 15px; margin-top: 52px; font-size: 28px; ">'.$row["email"].'</h2>
        <p style="font-size: 12px; line-height: 1.2 !important; margin-left: 20px; margin-right: 20px; margin-top: 11px">To update your payout account, <a style="color:#A970FF" href="musician-connections.php?musician_id='.$_GET["musician_id"].'">click here to be redirected to the Settings page.</a></p>';

    } else if ($row["payout_method"] == "7 Eleven" || $row["payout_method"] == "GCash" || $row["payout_method"] == "Paymaya" || $row["payout_method"] == "GrabPay" || $row["payout_method"] == "DragonPay") {

          echo'<span style="margin-top: 21px; position: absolute; margin-left: 20px">'.$row["payout_method"].'</span>
      <h2 style="color: #A970FF; margin-left: 15px; margin-top: 51px; font-size: 35px; ">09******588</h2>
      <p style="font-size: 12px; line-height: 1.2 !important; margin-left: 20px; margin-right: 20px; margin-top: 11px">To update your payout account, <a style="color:#A970FF" href="musician-connections.php?musician_id='.$_GET["musician_id"].'">click here to be redirected to the Settings page.</a></p>';
    } else if ($row["payout_method"] == "BPI" || $row["payout_method"] == "BDO" || $row["payout_method"] == "Visa" || $row["payout_method"] == "MasterCard") {
       echo'<span style="margin-top: 17px; position: absolute; margin-left: 20px">'.$row["payout_method"].'</span>
      <h2 style="color: #A970FF; margin-left: 15px; margin-top: 49px; font-size: 35px; ">*******719</h2>
      <p style="font-size: 12px; line-height: 1.2 !important; margin-left: 20px; margin-right: 20px; margin-top: 11px">To update your payout account, <a style="color:#A970FF" href="musician-connections.php?musician_id='.$_GET["musician_id"].'">click here to be redirected to the Settings page.</a></p>';
    }
    
} else {

  echo '<h3 style="text-align:center"><i class="fas fa-file-invoice-dollar" style="font-size: 50px; margin-top: 5px"></i></h3>
  <h6 style="text-align:center; margin-left: 50px; margin-right: 50px">Setup your payout account to get your earnings from revenue by <a href="musician-connections.php?musician_id='.$_GET["musician_id"].'" style="color:#A970FF">clicking here!</a></h6>';

}
  
   
      ?>
     </div>


  </div>

   <div class="sub-activity">
        <h3 style="margin-top: 20px; margin-left: 20px">Recent Subscribers</h3>
          <img src="http://pa1.narvii.com/7108/492cd4de4d8677841f0a32682450ab4588805240r1-200-200_00.gif" style="width: 30px; position: absolute; margin-top: -40px; margin-left: 290px">
   <div style="width: 600px; height: 200px; background-color: #101011; margin-left: 19px; border-radius: 10px; margin-top: 20px; padding-top: 20px; overflow: auto" id="subs">
   </div> 
  </div>

  <a href="https://www.youtube.com/watch?v=-f3Eovxl6iI" style="color: white" target="_blank">
    <div class="extra-rev">
      <i class="fas fa-play-circle play-btn-steps"></i>
    <h3 class="steps-txt">Earn extra revenue from subscriptions!</h3>
  </div>  
  </a>
  
  
  <a href="https://www.youtube.com/watch?v=MrR-dUhUhl0" style="color: white" target="_blank">
    <div class="customize-badges" style="margin-left: 20px">
      <i class="fas fa-play-circle play-btn-steps"></i>
    <h3 class="steps-txt" style="margin-top: 30px">Customize and setup badges!</h3>
  </div>  
  </a>
  
  <a href="https://www.youtube.com/watch?v=W7Q9TY26PV8" style="color: white" target="_blank">
   <div class="subscription">
    <i class="fas fa-play-circle play-btn-steps"></i>
    <h3 class="steps-txt">Mellofi's Subscription Guidelines</h3>
  </div>
  </a>



  

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
     <script src="js/script2.js"></script>
     <script>

          function deleteClick(clicked_id){
               var clicked_pin = clicked_id.replace("delete-", "");
    var musician_id = "<?php echo $_GET["musician_id"]?>";
    document.getElementById("confirmBtn").href="pins-delete.php?musician_id=" + musician_id + "&pin_id=" + clicked_pin; 
    return false;
}

          function previewClick(clicked_id){
    var clicked_pin = clicked_id.replace("preview-", "");
    var musician_id = "<?php echo $_GET["musician_id"]?>";
     $.post("fetchpins.php", 
      { musician_id: musician_id,
       clicked_pin: clicked_pin },
        function(data, response) 
        {
          $('#clicked_pin').html(data);
          console.log(data);
        }
          );
    return false;
}

 setInterval(displayNotif, 100);


 function displayNotif(){
    
    var musician_id = "<?php echo $_GET["musician_id"]?>";
    
    $.post("subDisplay.php", { musician_id: musician_id},
        function(data, response) 
        {
          $('#subs').html(data);
          console.log(data);
        }
          );
   
}

     </script>

  </body>
</html>