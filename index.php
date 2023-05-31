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


<!--Swiper Slides -->

    <div class="swiper-container">
    <div class="swiper-wrapper">

     <?php

      $featured_imgs = [];

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_featured_imgs = "
          SELECT 
          *
          FROM 
          featured_imgs
      ";

      $result_featured = mysqli_query($conn, $sql_featured_imgs);
          while ($row = mysqli_fetch_assoc($result_featured)) {
            array_push($featured_imgs, $row);
          }

          for ($index = 0; $index < count($featured_imgs); $index++) {
          echo ' <a class="swiper-slide" style="background-image: url(images/'.$featured_imgs[$index]["img_src"] .'); " href="#">
             <div class="carousel-caption d-none d-md-block" style="margin-bottom: 190px">
                <h1 style="font-size: 120px; color: #F5EEF8; border-color:white; border-style: solid; border-width: 2px; text-shadow: 5px 5px #1B1A1C;">'.$featured_imgs[$index]["img_title"].'</h1>
              </div>
            </a>';
          }
?>  
  <!--Navigation buttons-->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>
    </div>
    <!-- End Slider -->

    <div class="img-container pt-5" style="background-image: url('images/background.png');">
      <div class="caption">
            <div>
            </div>
                <h5 class="home-txt" style=" font-size: 150px; padding-top: 120px;">MELLOFI</h5>
                <p class="home-txt" style="font-size: 19px; padding-bottom: 130px;">A platform to promote, support, and connect with people through music.</p>
                <a href="about.php" style="color: white"><button class="btn btn-home" style="--border-color: white;">Learn More</button></a>
              </div>
    </div>

   <div class="img-container pt-5" style="background-image: url('https://media2.giphy.com/media/3oEduXeT0j1Bl5uWHK/source.gif');">
      <div class="caption" style="align-items: center;" >
            <h5 class="home-txt" style="color: white; text-shadow: 5px 5px #54096D;  font-size: 70px; padding-top: 140px;">STREAM LIVE AND WATCH LIVE.</h5>

                <?php
                 if (isset($_SESSION['isLogin'])) {
                   if ($_SESSION['isLogin'] == "true") {
                echo '<a href="homepage.php" style="color: white; text-shadow 1px 1px "><button id="go-now" class="btn btn-home" style="margin-top: 190px; --border-color: white; color: #F7F7F7; text-shadow: 2px 2px #54096D;">Go Now</button></a>';
                } else if ($_SESSION['isLogin'] == "false") {
                echo '<button class="btn btn-home" data-toggle="modal" data-target="#signUpModal" style="margin-top: 190px; --border-color: white; color: #F7F7F7; text-shadow: 2px 2px #54096D;">Join Now</button>';
                }
              } else {
                echo '<button class="btn btn-home" data-toggle="modal" data-target="#signUpModal" style="margin-top: 190px; --border-color: white; color: #F7F7F7; text-shadow: 2px 2px #54096D;">Join Now</button>';
              }
                ?>
                <br>
              </div>
    </div>

 <!-- Start footer -->
    <footer class="site-footer">
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

   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script> 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="js/app.js"></script>
    <script src="js/app2.js"></script>
  </body>
</html>