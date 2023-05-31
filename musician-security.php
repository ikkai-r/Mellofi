<?php
session_start();
ob_start();

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


    <!-- Sidebar -->
    <div class="flex-column flex-shrink-0 p-3 text-white" style=" min-width: 300px; max-width: 300px; height: 1000px; display: block; background-color: #18181b; position: absolute;">
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
       echo'<a href="musician-security.php?musician_id='.$_GET['musician_id'].'" class="nav-link active creator-studio-icons">';
       ?> 
  <i class="fas fa-lock" style="margin-right: 15px"></i>         
         Password and Security
        </a>
      </li>
     <li>
       <?php 
       echo'<a href="musician-connections.php?musician_id='.$_GET['musician_id'].'" class="nav-link creator-studio-icons">';
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

 <!-- settings start-->
      <div class="mt-4">
        <div style="margin-left:540px; margin-right: 290px; background-color: #18181b; margin-top: -20px; padding-top: 30px; padding-bottom: 259px; height: 1000px">
           <form class="settings" id="musician-settings" action="update-security.php" method="post">
            <ul>
              <br>
              <h3>ACCOUNT DETAILS AND SECURITY</h3>
               <hr style="margin-right: -100px">
               <br>
               <?php


                  $servername = "localhost";
                  $db_username = "root";
                  $db_password = "";
                  $database = "mellofi";

                  $conn = mysqli_connect($servername, $db_username, $db_password, $database);

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

                  echo 

              ' 
            <ul>
             <li>EMAIL 
               <br>';
               
               echo '<div class="idit mt-4">
                 <input type="email" name="email" class="form-control form-user" id="email" placeholder="'.$row["email"].'" style="background-color: black; color: #D3D3D3" onchange="settingsMsg()">
                  <span style="font-size: 12px; color: red; margin-left: 52px" id="settings-msg"></span>
                   </div>
              </li>
               <li>CHANGE PASSWORD 
               <br>
                <span style="font-size: 12px;">Tip: Stay away from the obvious and make it easy to remember.</span>';
               
               echo '<div class="idit mt-4">
               <span style="margin-left: 50px;">CURRENT</span>

                <input type="password" name="currPass" class="form-control form-user" id="currPass" placeholder="Type current password" style="background-color: black; color: #D3D3D3; margin-top: 10px" onchange="passwordMsg()">
                <i class="fas fa-eye" id="show-current" style="position: absolute; margin-left:617px; margin-top: -28px; font-size: 17px; visibility: hidden" onclick="hidePassCurrent()"></i>
                <i class="fas fa-eye-slash" id="hide-current" style="position: absolute; margin-left:617px; margin-top: -28px; font-size: 17px" onclick="showPassCurrent()"></i>';

                if (isset($_GET["match"])) {
                   if ($_GET["match"] == "false") {
                        echo'
                <span style="font-size: 12px; color: red; margin-left: 52px" id="passwordMsg">Incorrect current password.</span>';
                   }
                }

                echo'
                   </div>
                   <div class="idit mt-4">
               <span style="margin-left: 50px;">NEW</span>
                <input type="password" name="newPass" class="form-control form-user" id="newPass" placeholder="Type new password" style="background-color: black; color: #D3D3D3; margin-top: 10px">
                 <i class="fas fa-eye" id="show-new" style="position: absolute; margin-left:617px; margin-top: -28px; font-size: 17px; visibility: hidden" onclick="hidePassNew()"></i>
                  <i class="fas fa-eye-slash" id="hide-new" style="position: absolute; margin-left:617px; margin-top: -28px; font-size: 17px" onclick="showPassNew()"></i>
                   </div>
              </li>
              <br>';

              if (isset($_GET["update"])) {
                if ($_GET["update"] == "success") {
                   echo '<div class="alert-success mb-3 pt-2 pb-2 ml-5" style="border-radius: 5px; width: 600px; margin-left: 115px !important; background-color: #9913F6; color: white; text-align: center">Updated successfully.</div>';
                   header( "refresh:3;url=musician-security.php?musician_id=".$_GET["musician_id"]."" );

                }
              }
             
               
                  ?>
            
            </ul>
            <br><br>
          <button class="btn" id="save-changes" style="float: right; margin-top: -5px; margin-right: -25px" type="submit"> Save Changes </button>
                </form>
        </div>
          <button class="btn" id="discardBtn" style="margin-left: 1500px;  margin-top: -392px; position: absolute;"  onclick="window.location.reload();"> Discard </button>
          <span style="position: absolute; margin-top: -250px; margin-left: 700px">DELETE ACCOUNT</span>
          <span style="position: absolute; margin-top: -210px; margin-left: 700px; font-size: 14px">if you wish to delete your account, you may do so by clicking the button to redirect you to the <span style="color: #C551FF">Delete Account</span> page.</span>
          <span class="btn" style="position: absolute; margin-top: -150px; margin-left: 1442px;" id="delete-acc-btn">
            Delete Account
          </span>      </div>



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
    <script src="js/app.js"></script>
    <script src="js/app2.js"></script>
     <script src="js/app5.js"></script>
    <script>


      var email = "<?php if(isset($_GET["email"])) {echo $_GET["email"];} ?>";
      if (email == "taken"){
        document.getElementById("settings-msg").innerHTML = "Email is already taken.";
      }


    $(document).on('click', '#delete-acc-btn', function(){
     var musician_id = "<?php echo $_GET["musician_id"]; ?>";
     window.location.href = "delete-acc-musician.php?musician_id="+musician_id;
   });
 
    </script>
  </body>
</html>