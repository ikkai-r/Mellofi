<?php
session_start();

          $servername = "localhost";
         $db_username = "root";
         $db_password = "";  
         $database = "mellofi";

         $conn = mysqli_connect($servername, $db_username, $db_password, $database);

 if ($_GET['musician_id'] == '') {
    header('Location: homepage.php?access=none');
  }

  $sql_check = "
  SELECT 
  * 
  FROM 
  `musician`
  WHERE 
  `username` = '".$_SESSION["username"]."'
  AND 
  `musician_id` = '".$_GET["musician_id"]."'
  ";

  $result = mysqli_query($conn, $sql_check);
  $count = mysqli_num_rows($result);

  if ($count <= 0) {
     header('Location: index.php?access=none');
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
     <link rel="stylesheet" type="text/css" href="css/app7.css"> 
    <link rel="stylesheet" type="text/css" href="css/style.css">    
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/style3.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">  
    <link rel="stylesheet" type="text/css" href="css/settings.css">      

    <title>Mellofi -  Settings</title>

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
              <input type="text" class="searchTerm"  aria-label="Search" name="query"required style="background-color: #E3DEED; color: black !important">
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
              <a class="dropdown-item" href="logout.php">
                <i class="fas fa-sign-out-alt" style="margin-right: 8px;"></i> Log out
              </a>
            </div>
          </li>
        </ul>
      </div>';

              } else {
                //if it is not a musician
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
              <a class="dropdown-item" href="#">
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

     <!-- Payout Modal -->

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
              <h3 class="custom-hdr">PAYOUT ACCOUNT SETUP</h3>
            </div>
          </div>
          <div style="padding-top: 6px !important;">
            <h5>Choose a payout method:</h5>
            <div style="display: flex; padding-top: 6px">
              <div class="payment-methods" class="paypal">
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

            <hr style="background-color: #525252; margin-top: 30px">
            <p style="color: #EAEAEA; font-size: 12px">Before clicking "Complete Setup",  you must be 100% sure that the account you will be linking is directly owned by you. Furthermore, by confirming the account setup, you agree to Mellofi's Terms of Sale and acknowledge our Privacy Policy and Terms and Conditions. Conversion fees may apply to the payout. Check with the provider for details.</p>
            <div>
              <hr style="background-color: #525252; margin-top: 5px;">
              <h6 style="margin-top: 15px">To complete setting up your payout account, we will redirect you to <span id="payment-final"></span></h6>
              <a id="purchase" style="color: white" target="_blank"><button class="btn" id="submit-payment" style="float: right; margin-bottom: -10px; margin-top: 30px" disabled>COMPLETE SETUP</button></a>
            </div>
                 <br><br>
          </div>
          </div>
        </div>
    </div>
  </div>

       <!-- Payout Update Modal -->

  <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
              <h3 class="custom-hdr">PAYOUT ACCOUNT UPDATE</h3>
            </div>
          </div>
          <div style="padding-top: 6px !important;">
            <h5>Choose a payout method:</h5>
            <div style="display: flex; padding-top: 6px">
              <div class="payment-methods" id="paypal-ud">
                <img style="width: 85px; margin-left: 14px; margin-top: 27px;"src="images/paypal-method.png">
             </div>
               <div class="payment-methods" style="margin-left: 17px;"  id="gcash-ud">
                <img style="width: 100px; margin-left: 7px; margin-top: 23px;"src="images/gcash-method.png">
             </div>
             <div class="payment-methods" style="margin-left: 17px;" id="paymaya-ud">
                <img style="width: 95px; margin-left: 9px; margin-top: 23px;"src="images/paymaya-method.png">
             </div>
             <div class="payment-methods" style="margin-left: 17px;"  id="7eleven-ud">
                <img style="width: 90px; margin-left: 13px; margin-top: 5px;"src="images/7eleven-method.png">
             </div>
             <div class="payment-methods" style="margin-left: 17px;" id="bpi-ud">
                <img style="width: 85px; margin-left: 17px; margin-top: -4px;" src="images/bpi-method.png">
             </div>
             <div class="payment-methods" style="margin-left: 17px;" id="bdo-ud">
                <img style="width: 80px; margin-left: 20px; margin-top: 28px;" src="images/bdo-method.png">
             </div>
            </div>
          </div>
          <div style="display: flex; padding-top: 10px">
             <div class="payment-methods" id="mastercard-ud">
                <img style="width: 55px; margin-left: 29px; margin-top: 22px;"src="images/mastercard.png">
             </div>
             <div class="payment-methods"  style="margin-left: 14px;" id="visa-ud">
                <img style="width: 55px; margin-left: 28px; margin-top: 23px;"src="images/visa.png">
             </div>
               <div class="payment-methods" style="margin-left: 14px;" id="grabpay-ud"> 
                <img style="width: 90px; margin-left: 13px; margin-top: 27px;"src="images/grabpay-method.png">
             </div>
             <div class="payment-methods" style="margin-left: 14px;" id="dragonpay-ud">
                <img style="width: 95px; margin-left: 9px; margin-top: 20px;"src="images/dragonpay-method.png">
             </div>
           </div>

            <hr style="background-color: #525252; margin-top: 30px">
            <p style="color: #EAEAEA; font-size: 12px">Before clicking "Complete Update",  you must be 100% sure that the account you will be linking is directly owned by you. Furthermore, by confirming the account setup, you agree to Mellofi's Terms of Sale and acknowledge our Privacy Policy and Terms and Conditions. Conversion fees may apply to the payout. Check with the provider for details.</p>
            <div>
              <hr style="background-color: #525252; margin-top: 5px;">
              <h6 style="margin-top: 15px">To complete setting up your payout account, we will redirect you to <span id="payment-update"></span></h6>
              <a id="payout-update" style="color: white" target="_blank"><button class="btn" id="update-payment" style="float: right; margin-bottom: -10px; margin-top: 30px" disabled>COMPLETE UPDATE</button></a>
            </div>
                 <br><br>
          </div>
          </div>
        </div>
    </div>
  </div>



    <!-- Sidebar -->
    <div class="flex-column flex-shrink-0 p-3 text-white" style=" min-width: 300px; max-width: 300px; height: 1300px; display: block; background-color: #18181b; position: absolute;">
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
       <h4 class="pt-3 pl-2">SETTINGS</h4>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <?php 
        echo '<a href="musician-settings.php?musician_id='.$_GET['musician_id'].'"" class="nav-link creator-studio-icons" aria-current="page">';
        ?>
  <i class="fas fa-cog" style="margin-right: 14px"></i>
          General
        </a>
      </li>
      <li>
       <?php 
       echo'<a href="musician-security.php?musician_id='.$_GET['musician_id'].'" class="nav-link creator-studio-icons">';
       ?> 
  <i class="fas fa-lock" style="margin-right: 15px"></i>         
         Password and Security
        </a>
      </li>
     <li>
       <?php 
       echo'<a href="musician-connections.php?musician_id='.$_GET['musician_id'].'" class="nav-link active creator-studio-icons">';
       ?> 
  <i class="fas fa-link" style="margin-right: 15px"></i>         
         Connections
        </a>
      </li>
    <li>
       <?php 
       echo'<a href="musician-subscription.php?musician_id='.$_GET['musician_id'].'" class="nav-link creator-studio-icons">';
       ?> 
  <i class="fas fa-bookmark" style="margin-right: 16px"></i>         
         Subscriptions
        </a>
      </li>
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

 
 <!-- settings start-->
      <div class="mt-4">
        <div style="margin-left:540px; margin-right: 300px; background-color: #18181b; margin-top: -20px; padding-top: 30px; padding-bottom: 259px; height: 1300px">
           <form class="settings" id="musician-settings" method="post">
            <ul>
              <br>
              <h3>PAYOUT METHODS AND CONNECTIONS</h3>
               <hr style="margin-right: -100px">
               <br>

              <div class="idit mt-2">
                <span style="font-size: 17px">PAYOUT ACCOUNT</span>
                <p style="font-size: 12px; margin-bottom: 20px; margin-top: 5px">You will receive payouts in this account from your subscription revenue.</p>

                <?php

               $servername = "localhost";
               $db_username = "root";
               $db_password = "";  
               $database = "mellofi";

               $conn = mysqli_connect($servername, $db_username, $db_password, $database);

               $sql_payout = "
               SELECT 
               *
               FROM 
               `payout_accounts`
               WHERE 
               `musician_id` ='".$_GET["musician_id"]."'
               ";

               $result_payout = mysqli_query($conn, $sql_payout);
               $count_payout = mysqli_num_rows($result_payout);
               $row_payout = mysqli_fetch_assoc($result_payout);
               if ($count_payout > 0) {
                 //merong payout account

                if ($row_payout["payout_method"] == "Paypal") {

                  $sql_user="
                  SELECT
                  email
                  FROM 
                  users
                  WHERE
                  username='".$_SESSION["username"]."'
                  ";

                  $result_user = mysqli_query($conn, $sql_user);
                  $row_user = mysqli_fetch_assoc($result_user);

                     echo' <div class="social-settings mt-2 ml-3">
                       <a href="" target="_blank"> <i class="fas fa-credit-card" style="font-size: 25px; margin-top: 12px; margin-left: 13px; color: #890ED0;"></i></a>
                        <span style=" margin-left: 16px; position: absolute; margin-top: 12px; text-transform: capitalize">'.$row_payout["payout_method"].'</span>
                        </div>
                        <div style="position: absolute; margin-top: -48px; margin-left: 40px">
                        <h7 style="background-color: black; color: #D3D3D3; width: 480px; margin-left: 130px; margin-top: 12px; position: absolute;">'.$row_user["email"].'</h7>
  
                        <i class="fas fa-pen addBtnSettings" id="updatePayout" type="button" data-toggle="modal" data-target="#updateModal"></i>
                        </div>';
                } else if ($row_payout["payout_method"] == "7 Eleven" || $row_payout["payout_method"] == "GCash" || $row_payout["payout_method"] == "Paymaya" || $row_payout["payout_method"] == "GrabPay" || $row_payout["payout_method"] == "DragonPay") {
                  echo' <div class="social-settings mt-2 ml-3">
                       <a href="" target="_blank"> <i class="fas fa-credit-card" style="font-size: 25px; margin-top: 12px; margin-left: 13px; color: #890ED0;"></i></a>
                        <span style=" margin-left: 16px; position: absolute; margin-top: 12px; text-transform: capitalize">'.$row_payout["payout_method"].'</span>
                        </div>
                        <div style="position: absolute; margin-top: -48px; margin-left: 40px">
                        <h7 style="background-color: black; color: #D3D3D3; width: 480px; margin-left: 130px; margin-top: 12px; position: absolute;">09******588</h7>
  
                        <i class="fas fa-pen addBtnSettings" id="updatePayout" type="button" data-toggle="modal" data-target="#updateModal"></i>
                        </div>';
                } else if ($row_payout["payout_method"] == "BPI" || $row_payout["payout_method"] == "BDO" || $row_payout["payout_method"] == "Visa" || $row_payout["payout_method"] == "MasterCard") {
                  echo' <div class="social-settings mt-2 ml-3">
                       <a href="" target="_blank"> <i class="fas fa-credit-card" style="font-size: 25px; margin-top: 12px; margin-left: 13px; color: #890ED0;"></i></a>
                        <span style=" margin-left: 16px; position: absolute; margin-top: 12px; text-transform: capitalize">'.$row_payout["payout_method"].'</span>
                        </div>
                        <div style="position: absolute; margin-top: -48px; margin-left: 40px">
                        <h7 style="background-color: black; color: #D3D3D3; width: 480px; margin-left: 130px; margin-top: 12px; position: absolute;">*******719</h7>
  
                        <i class="fas fa-pen addBtnSettings" id="updatePayout" type="button" data-toggle="modal" data-target="#updateModal"></i>
                        </div>';
}
             

               } else {
                //no payout account

                echo '  <div class="social-settings mt-2 ml-3">
                       <a href="" target="_blank"> <i class="fas fa-credit-card" style="font-size: 25px; margin-top: 12px; margin-left: 13px; color: #890ED0;"></i></a>
                        <span style=" margin-left: 16px; position: absolute; margin-top: 12px; text-transform: capitalize">Account</span>
                        </div>
                        <div style="position: absolute; margin-top: -48px; margin-left: 40px">
                        <h7 style="background-color: black; color: #D3D3D3; width: 480px; margin-left: 130px; margin-top: 12px; position: absolute;" data-toggle="modal" data-target="#purchaseModal">Set up your payout account</h7>
  
                        <i class="fas fa-plus addBtnSettings" id="addPayout" type="button" data-toggle="modal" data-target="#purchaseModal"></i>
                        </div>';

               }

                ?>                   
                

                      </div>
                      <br><br>

                       <div class="idit mt-2">
                <span style="font-size: 17px">LINK GCASH OR PAYPAL</span>
                <p style="font-size: 12px; margin-bottom: 20px; margin-top: 5px">Feature your Gcash, Paypal, or both of your accounts to receive the donations from your fans.</p>

                <?php

                  $servername = "localhost";
                  $db_username = "root";
                  $db_password = "";
                  $database = "mellofi";

                  $conn = mysqli_connect($servername, $db_username, $db_password, $database);
                  $donate = [];

                  $sql_donate = "
                  SELECT 
                  * 
                  FROM 
                  donate_accounts
                  WHERE 
                  `musician_id` = '".$_GET["musician_id"]."'
                  ";

                  $result_donate = mysqli_query($conn, $sql_donate);
                  $count_donate = mysqli_num_rows($result_donate);
                  while($row = mysqli_fetch_assoc($result_donate)){
                    array_push($donate, $row);
                  }

                  if ($count_donate > 0) {
                    //if there is donate

                    for ($i=0; $i < count($donate); $i++) { 
                        echo'   <div class="social-settings mt-2 ml-3">';
                             echo'
                       <i class="fas fa-wallet" style="font-size: 25px; margin-top: 12px; margin-left: 13px; color: #890ED0;"></i>
                        <span style=" margin-left: 16px; position: absolute; margin-top: 12px; text-transform: capitalize">'.$donate[$i]["type"].'</span>
                        </div>
                        <div style="position: absolute; margin-top: -48px; margin-left: 40px">
                        <input type="text" name="'.$donate[$i]["type"].'" id="link-'.$donate[$i]["type"].'" value="'.$donate[$i]["source"].'" style="background-color: black; color: #D3D3D3; width: 480px; margin-left: 130px; margin-top: 12px; position: absolute; cursor: pointer" onchange="visibleEdit(this.id)">
                        <span id="edit-'.$donate[$i]["type"].'" class="btn" style="position: absolute; margin-left: 690px; padding-left: 16px; padding-right: 16px; margin-top: 3px; visibility: hidden" onclick="editAccClick(this.id)">Save</span>
                        <span id="discard-'.$donate[$i]["type"].'" class="btn" style="position: absolute; margin-left: 770px; padding-left: 16px; padding-right: 16px; margin-top: 3px; visibility: hidden" onclick="window.location.reload();">Discard</span>
                       
                        <i class="fas fa-trash-alt deleteBtnSettings" id="'.$donate[$i]["type"].'" onclick="deleteAccClick(this.id)" data-toggle="modal" data-target="#confirmModal"></i>
                        </div>';
                    }
                  

                    if ($count_donate <= 1) {
                      //donate only 1

                $sql = "
                  SELECT 
                  * 
                  FROM 
                  donate_accounts
                  WHERE 
                  `musician_id` = '".$_GET["musician_id"]."'
                  ";

                  $result_donate = mysqli_query($conn, $sql_donate);
                  $row_donate = mysqli_fetch_assoc($result_donate);

                          if ($row_donate["type"] == "GCash") {
                            # no paypal
                               echo'   
                  <div class="social-settings mt-2 ml-3">
                    <i class="fas fa-coins" style="font-size: 25px; margin-top: 12px; margin-left: 13px; color: #890ED0;"></i>
                    <select id="add-donate" name="add-donate" class="form-social" style="text-transform: capitalize">

                    <option value="Paypal" style="text-transform: capitalize">Paypal</option>
                   
                </select>

              </div>
                        <div style="position: absolute; margin-top: -48px; margin-left: 40px">
                        <input type="text" name="donate-add" id="donate-link-add" placeholder="Add link or number" style="background-color: black; color: #D3D3D3; width: 460px; margin-left: 150px; margin-top: 12px; position: absolute; cursor: pointer">
                        <i class="fas fa-plus addBtnSettings" id="donateAddBtn" type="button"></i>
                        </div>';
                          } else if ($row_donate["type"] == "Paypal") {
                            //no gcash

                                echo'   
                  <div class="social-settings mt-2 ml-3">
                    <i class="fas fa-coins" style="font-size: 25px; margin-top: 12px; margin-left: 13px; color: #890ED0;"></i>
                    <select id="add-donate" name="add-donate" class="form-social" style="text-transform: capitalize">

                    <option value="GCash" style="text-transform: capitalize">GCash</option>
                   
                </select>

              </div>
                        <div style="position: absolute; margin-top: -48px; margin-left: 40px">
                        <input type="text" name="donate-add" id="donate-link-add" placeholder="Add link or number" style="background-color: black; color: #D3D3D3; width: 460px; margin-left: 150px; margin-top: 12px; position: absolute; cursor: pointer">
                        <i class="fas fa-plus addBtnSettings" id="donateAddBtn" type="button"></i>
                        </div>';
                          }

                    }

                  } else {

                      echo'   
                  <div class="social-settings mt-2 ml-3">
                    <i class="fas fa-coins" style="font-size: 25px; margin-top: 12px; margin-left: 13px; color: #890ED0;"></i>
                    <select id="add-donate" name="add-donate" class="form-social" style="text-transform: capitalize">

                    <option value="GCash" style="text-transform: capitalize">GCash</option>
                    <option value="Paypal" style="text-transform: capitalize">Paypal</option>

                </select>

              </div>
                        <div style="position: absolute; margin-top: -48px; margin-left: 40px">
                        <input type="text" name="donate-add" id="donate-link-add" placeholder="Add link or number" style="background-color: black; color: #D3D3D3; width: 460px; margin-left: 150px; margin-top: 12px; position: absolute; cursor: pointer">
                        <i class="fas fa-plus addBtnSettings" id="donateAddBtn" type="button"></i>
                        </div>';
                  
               }
               echo'<span id="successAccAlert" style="margin-left: -15px"></span>';
                ?>
                         
               
                      </div>
                <br><br>

               <?php


                  $servername = "localhost";
                  $db_username = "root";
                  $db_password = "";
                  $database = "mellofi";

                  $conn = mysqli_connect($servername, $db_username, $db_password, $database);
                  $socials = [];

                  $sql_artist = "
                       SELECT 
                       *
                       FROM 
                        `musician`
                        INNER JOIN 
                        `users`
                        ON 
                        `musician`.username = `users`.username 
                      WHERE 
                       `musician`.musician_id = '".$_GET['musician_id']."'
                       AND 
                       `musician`.username = '".$_SESSION['username']."'
                  ";

                  $result_artist = mysqli_query($conn, $sql_artist);
                  $row = mysqli_fetch_assoc($result_artist);

                  $sql_socials = "
                   SELECT 
                   *
                   FROM 
                   `social_media`
                   WHERE 
                   musician_id = '".$_GET['musician_id']."'
                  ";

                  $result_socials = mysqli_query($conn, $sql_socials);
                  $count_socials = mysqli_num_rows($result_socials);
                  while($row_socials = mysqli_fetch_assoc($result_socials)){
                    array_push($socials, $row_socials);
                  }

              ' 

            <ul>
             <li>
               <br>';
               
               echo '<div class="idit mt-2">
                <span style="font-size: 17px">SOCIALS</span>
                <p style="font-size: 12px; margin-bottom: 20px; margin-top: 5px">Add up to 10 external social media accounts. </p>
                ';

                   
                   for ($i=0; $i < count($socials); $i++) { 

                    if ($socials[$i]["type"] == "website") {
                      echo'
                  <div class="social-settings mt-2 ml-3">';
                    echo'
                       <a href="'.$socials[$i]["link"].'" target="_blank"> <i class="fas fa-link" style="font-size: 25px; margin-top: 12px; margin-left: 13px; color: #890ED0;"></i></a>
                        <span style=" margin-left: 16px; position: absolute; margin-top: 12px; text-transform: capitalize">'.$socials[$i]["type"].'</span>
                        </div>
                        <div style="position: absolute; margin-top: -48px; margin-left: 40px">
                        <input type="text" name="'.$socials[$i]["social_media_id"].'" id="link-'.$socials[$i]["social_media_id"].'" value="'.$socials[$i]["link"].'" style="background-color: black; color: #D3D3D3; width: 480px; margin-left: 130px; margin-top: 12px; position: absolute; cursor: pointer" onchange="visibleEdit(this.id)">
                        <span id="edit-'.$socials[$i]["social_media_id"].'" class="btn" style="position: absolute; margin-left: 690px; padding-left: 16px; padding-right: 16px; margin-top: 3px; visibility: hidden" onclick="editClick(this.id)">Save</span>
                            <span id="discard-'.$socials[$i]["social_media_id"].'" class="btn" style="position: absolute; margin-left: 770px; padding-left: 16px; padding-right: 16px; margin-top: 3px; visibility: hidden" onclick="window.location.reload();">Discard</span>
                       
                        <i class="fas fa-trash-alt deleteBtnSettings" id="'.$socials[$i]["social_media_id"].'" onclick="deleteClick(this.id)" data-toggle="modal" data-target="#confirmModal"></i>
                        </div>


                      ';
                    } else if ($socials[$i]["type"] == "email"){

                          echo'
                  <div class="social-settings mt-2 ml-3">';

                   echo'
                       <a href="'.$socials[$i]["link"].'" target="_blank"> <i class="fas fa-envelope" style="font-size: 25px; margin-top: 12px; margin-left: 13px; color: #890ED0;"></i></a>
                        <span style=" margin-left: 16px; position: absolute; margin-top: 12px; text-transform: capitalize">'.$socials[$i]["type"].'</span>
                        </div>
                        <div style="position: absolute; margin-top: -48px; margin-left: 40px">
                        <input type="text" name="'.$socials[$i]["social_media_id"].'" id="link-'.$socials[$i]["social_media_id"].'" value="'.$socials[$i]["link"].'" style="background-color: black; color: #D3D3D3; width: 480px; margin-left: 130px; margin-top: 12px; position: absolute; cursor: pointer" onchange="visibleEdit(this.id)">
                        <span id="edit-'.$socials[$i]["social_media_id"].'" class="btn" style="position: absolute; margin-left: 690px; padding-left: 16px; padding-right: 16px; margin-top: 3px; visibility: hidden" onclick="editClick(this.id)">Save</span>
                        <span id="discard-'.$socials[$i]["social_media_id"].'" class="btn" style="position: absolute; margin-left: 770px; padding-left: 16px; padding-right: 16px; margin-top: 3px; visibility: hidden" onclick="window.location.reload();">Discard</span>
                       
                        <i class="fas fa-trash-alt deleteBtnSettings" id="'.$socials[$i]["social_media_id"].'" onclick="deleteClick(this.id)" data-toggle="modal" data-target="#confirmModal"></i>
                        </div>


                      ';




                    }else {

                      echo'

                  <div class="social-settings mt-2 ml-3">';
                             echo'
                       <a href="'.$socials[$i]["link"].'" target="_blank"> <i class="fab fa-'.$socials[$i]["type"].'" style="font-size: 25px; margin-top: 12px; margin-left: 13px; color: #890ED0;"></i></a>
                        <span style=" margin-left: 16px; position: absolute; margin-top: 12px; text-transform: capitalize">'.$socials[$i]["type"].'</span>
                        </div>
                        <div style="position: absolute; margin-top: -48px; margin-left: 40px">
                        <input type="text" name="'.$socials[$i]["social_media_id"].'" id="link-'.$socials[$i]["social_media_id"].'" value="'.$socials[$i]["link"].'" style="background-color: black; color: #D3D3D3; width: 480px; margin-left: 130px; margin-top: 12px; position: absolute; cursor: pointer" onchange="visibleEdit(this.id)">
                        <span id="edit-'.$socials[$i]["social_media_id"].'" class="btn" style="position: absolute; margin-left: 690px; padding-left: 16px; padding-right: 16px; margin-top: 3px; visibility: hidden" onclick="editClick(this.id)">Save</span>
                        <span id="discard-'.$socials[$i]["social_media_id"].'" class="btn" style="position: absolute; margin-left: 770px; padding-left: 16px; padding-right: 16px; margin-top: 3px; visibility: hidden" onclick="window.location.reload();">Discard</span>
                       
                        <i class="fas fa-trash-alt deleteBtnSettings" id="'.$socials[$i]["social_media_id"].'" onclick="deleteClick(this.id)" data-toggle="modal" data-target="#confirmModal"></i>
                        </div>


                      ';
                   }
                   }


                if ($count_socials < 10) {

                     echo'
                    
                  <div class="social-settings mt-2 ml-3">';
                       echo'
                    <i class="fas fa-hashtag" style="font-size: 25px; margin-top: 12px; margin-left: 13px; color: #890ED0;"></i>
                    <select id="add-socials" name="add-socials" class="form-social" style="text-transform: capitalize">';
                  
                  echo'
                    <option value="Youtube" style="text-transform: capitalize">youtube</option>
                    <option value="Instagram" style="text-transform: capitalize">instagram</option>
                    <option value="Spotify" style="text-transform: capitalize">spotify</option>
                    <option value="Website",  style="text-transform: capitalize">website</option>
                    <option value="Twitter" style="text-transform: capitalize">twitter</option>
                    <option value="Facebook" style="text-transform: capitalize">facebook</option>
                    <option value="Email" style="text-transform: capitalize">email</option>';
                   
                    
            echo'
                </select>

                        </div>
                        <div style="position: absolute; margin-top: -48px; margin-left: 40px">
                        <input type="text" name="social-add" id="social-link-add" placeholder="Add a social link" style="background-color: black; color: #D3D3D3; width: 460px; margin-left: 150px; margin-top: 12px; position: absolute; cursor: pointer">
                        <i class="fas fa-plus addBtnSettings" id="addBtn" type="button"></i>
                        </div>
                           <span style="font-size: 13px; color: red; margin-left: 180px; position: absolute; margin-top: 10px" id="invalidSocial"></span>
                            <span id="successAlert" style="margin-left: -15px"></span>
                      ';
                }


                

              echo'
                   </div>
              </li>';
             
               
                  ?>
            
            </ul>
            <br><br>
                </form>
        </div>
      </div>





    <!--Swiper Library-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script> 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="js/payout.js"></script>
    <script src="js/app.js"></script>
    <script src="js/app2.js"></script>
    <script>

   function deleteClick(clicked_id){
    var musician_id = "<?php echo $_GET["musician_id"]?>";
    document.getElementById("confirmBtn").href="socials-delete.php?musician_id=" + musician_id + "&social_id=" + clicked_id; 
    return false;
}

function visibleEdit(social_input){
  var social_button = social_input.replace("link-", "edit-");
  var social_discard = social_input.replace("link-", "discard-");
 document.getElementById(social_button).style.visibility = "visible";
  document.getElementById(social_discard).style.visibility = "visible";
}

function editClick(social_id){
  var social_media_id = social_id.replace("edit-", "");
  var musician_id = "<?php echo $_GET["musician_id"]; ?>";
  var social_media_link = $("#link-"+social_media_id).val();

     if (social_media_link.indexOf('.com') <= 0) {
      document.getElementById("invalidSocial").innerHTML = "Invalid social media link. Must be with '.com'";
       setTimeout(function(){ window.location.href = "musician-connections.php?musician_id=" + musician_id;}, 1500);
     } else {
          $("#successAlert").load("edit-socials.php", {

            //post name, actual value from the input
            social_media_id: social_media_id,
            musician_id: musician_id,
            social_media_link: social_media_link

          });
          
     }

 }

 function editAccClick(type){
  var donate_type = type.replace("edit-", "");
  var musician_id = "<?php echo $_GET["musician_id"]; ?>";
  var donate_link = $("#link-"+donate_type).val();

     if (donate_link == '') {
     return false;
     } else {
          $.post("edit-donate.php", {

            //post name, actual value from the input
            donate_type: donate_type,
            musician_id: musician_id,
            donate_link: donate_link

          });
         window.location.reload();
     }

 }

    function deleteAccClick(type){
    var musician_id = "<?php echo $_GET["musician_id"]?>";
    document.getElementById("confirmBtn").href="donate-delete.php?musician_id=" + musician_id + "&donate_type=" + type; 
    return false;
}

  
  $(document).on('click', '#addBtn', function(){

     var musician_id = "<?php echo $_GET["musician_id"]; ?>";
     var social_media_link = $("#social-link-add").val();
     var social_media = $("#add-socials").val();

     if (social_media_link.indexOf('.com') <= 0) {
      document.getElementById("invalidSocial").innerHTML = "Invalid social media link. Must be with '.com'";
      return false;
         window.location.reload();
     } else {
           $.post('add-socials.php', 
          {
            musician_id: musician_id,
            social_media_link: social_media_link,
            social_media: social_media
          });
       window.location.reload();
     }
   });

    $(document).on('click', '#donateAddBtn', function(){

     var musician_id = "<?php echo $_GET["musician_id"]; ?>";
     var donate_link = $("#donate-link-add").val();
     var donate_type = $("#add-donate").val();

     if (donate_link == '') {
      document.getElementById("invalidSocial").innerHTML = "Invalid social media link.";
      return false;
     }  else {
           $.post('add-donate.php', 
          {
            musician_id: musician_id,
            donate_link: donate_link,
            donate_type: donate_type
          });
         window.location.reload();
     }
   });

 $(document).on('click', '#submit-payment', function(){
        var payout = $("#payment-final").val();
        var musician_id = "<?php echo $_GET["musician_id"]; ?>"
      $.post('payout-setup.php', 
          {
            musician_id: musician_id,
            payout: payout
          });
        $('#purchaseModal').modal('hide');
    
    }); 

 $(document).on('click', '#update-payment', function(){
        var payout = $("#payment-update").val();
        var musician_id = "<?php echo $_GET["musician_id"]; ?>"

        $.post('payout-update.php', 
          {
            musician_id: musician_id,
            payout: payout
          });
        $('#updateModal').modal('hide');
         setTimeout(function(){ window.location.href='musician-connections.php?musician_id='+musician_id;}, 1000);
    }); 


    </script>
  </body>
</html>