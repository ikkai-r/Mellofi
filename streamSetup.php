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

      <link rel="stylesheet" href="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.css">       

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
    <div class="flex-column flex-shrink-0 p-3 text-white" style=" min-width: 300px; max-width: 300px; height: 900px; display: block; background-color: #18181b; position: absolute;">
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
       echo'<a href="streamSetup.php?musician_id='.$_GET['musician_id'].'" class="nav-link creator-studio-icons  active">';
       ?> 
 <i class="fas fa-sliders-h" style="margin-right: 15px"></i>       
          Stream Setup
        </a>
      </li>
      <li>
         <?php 
       echo'<a href="memberCustom.php?musician_id='.$_GET['musician_id'].'" class="nav-link creator-studio-icons">';
       ?> 
          <i class="fas fa-gift" style="margin-right: 15px"></i>
          Member Customization
        </a>
      </li>
      <li>
    </ul>
    <hr>
  </div>

<div style="margin-left: 340px; margin-top: 50px">

      <div style="display: flex">

        <div style="width: 200px; height: 120px; margin-left:9px; background-color: #29282A; border-color: black; border-width: 1px; border-style: solid; border-radius: 5px;  margin-bottom: 5px;">
            <h5 style="margin-left: 15px; margin-top: 12px">Viewers</h5>
            <?php
      
      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_viewers = "
      SELECT 
      *
      FROM 
      `livestreams`
      WHERE 
      musician_id = '".$_GET["musician_id"]."'
      AND 
      status = 'live'
      ";

      $result_viewers = mysqli_query($conn, $sql_viewers);
      $row_viewers = mysqli_fetch_assoc($result_viewers);

      echo'<h4 style="color: #A970FF; margin-left: 15px;margin-top: 30px; position: absolute; visibility: hidden" id="viewers-cnt">'.$row_viewers["viewer_cnt"].'</h4>
      <h4 style="color: #A970FF; margin-left: 15px;margin-top: 30px; position: absolute" id="viewers-cnt-zero">0</h4>';

      $sql_stream = "
      SELECT 
      * 
      FROM 
      `following`
      WHERE 
      `stream_id` = '".$row_viewers["stream_id"]."'
      AND 
      `musician_id` = '".$_GET["musician_id"]."'
      ";

      $result_stream = mysqli_query($conn, $sql_stream);
      $count_stream = mysqli_num_rows($result_stream);

      echo ' </div>

          <div style="width: 200px; height: 120px; margin-left:10px; background-color: #29282A; border-color: black; border-width: 1px; border-style: solid; border-radius: 5px;  margin-bottom: 5px;">
            <h5 style="margin-left: 15px; margin-top: 12px">Followers</h5>
        <h4 style="color: #A970FF; margin-left: 15px;margin-top: 30px; position: absolute" id="followers-cnt-zero">0</h4>
        <h4 style="color: #A970FF; margin-left: 15px;margin-top: 30px; position: absolute; visibility: hidden" id="followers-cnt"></h4>
</div>';
            ?>
        

        <div style="width: 210px; height: 120px; margin-left: 10px; background-color: #29282A; border-color: black; border-width: 1px; border-style: solid; border-radius: 5px;  margin-bottom: 5px;">
            <h5 style="margin-left: 15px; margin-top: 12px">Session</h5>
            <h4 style="color: #A970FF; margin-left: 15px; margin-top: 30px"><div id="timer">00:00:00</div></h4>
        </div>

        <div style="width: 200px; height: 120px; margin-left:10px; background-color: #29282A; border-color: black; border-width: 1px; border-style: solid; border-radius: 5px;  margin-bottom: 5px;">
            <h5 style="margin-left: 15px; margin-top: 12px">Bitrate</h5>
        <h4 style="color: #A970FF; margin-left: 15px;margin-top: 30px" id="bitrate">0 kbps</h4>
         </div>
  </div>
   <div style="width: 840px; height: 100px; margin-left:9px; background-color: #29282A; border-color: black; border-width: 1px; border-style: solid; border-radius: 5px;  margin-bottom: 5px; float: left; padding-top: 10px; padding-left: 10px">
    <h4 style="position: absolute; margin-top: 24px">Stream Setup</h4>
   
    <div style="margin-left: 200px; height: 60px;  padding-top: 20px; padding-left: 10px; visibility: hidden" id="stream-setup-webcam">
      <i class="fas fa-video" style="font-size: 32px; margin-right: 15px; position: absolute; margin-top:5px"></i>
       <select style="background-color: black; color: white; margin-right: 100px; margin-top: -30px; margin-left: 60px; padding-left: 10px; padding-right: 10px;" id="video-src">
      <option selected disabled>Select video source</option>
       <option value="OBS Virtual Camera">OBS Virtual Camera</option>
       <option value="Android Camera">Android Camera</option>
       <option value="Iriun Webcam">Iriun Webcam</option>
       <option value="IOS Webcam">IOS Webcam</option>
    </select>
<i class="fas fa-microphone" style="font-size: 32px; position: absolute; margin-left: -45px; margin-top: 2px;"></i>
       <select style="background-color: black; color: white; padding-left: 10px; padding-right: 10px; margin-top: 11px" id="audio-src">
      <option selected disabled>Select audio source</option>
      <option value="USB Condenser Microphone">USB Microphone</option>
      <option value="Headset Microphone">Headset Microphone</option>
      <option value="Microphone (Webcam)">Microphone (Webcam)</option>
      <option value="XLR 3020Microphone">XLR 3020 Microphone</option>
    </select>
    </div>
      
      <div style="margin-left: 180px; height: 60px;  padding-top: 20px; margin-top: -55px; padding-left: 10px; position: absolute; visibility: hidden" id="stream-setup-key">
        <span style="position: absolute; margin-top: 30px; font-size: 14px;" onclick="showKey()" id="show">Show</span>
        <span style="position: absolute; margin-top: 30px; font-size: 14px; visibility: hidden" onclick="hideKey()"  id="hide">Hide</span>
     <input type="password" name="stream key" style="width: 400px; position: absolute; border-radius: 3px; background-color: black; color: white" id="stream-key" value=""><button class="btn" style="margin-left: 420px; padding-left: 25px; padding-right: 25px;" onclick="copyClick()" id="copy">copy</button>
    <button class="btn" style="padding-left: 25px; padding-right: 25px; margin-left: 12px" onclick="randomClick()">reset</button>
    </div>
   
  </div>

     <div style="width: 840px; height: 100px; margin-left:9px; background-color: #29282A; border-color: black; border-width: 1px; border-style: solid; border-radius: 5px;  margin-bottom: 5px; float: left; padding-top: 10px; padding-left: 10px">
      <h4 style="position: absolute; margin-top: 22px">Stream Latency</h4>
      <div class="form-check" style="font-size: 15px; margin-left: 200px; margin-top: 10px">
  <input class="form-check-input" type="radio" name="exampleRadios" id="auto" value="auto" checked>
  <label class="form-check-label" for="auto">
   <span style="color: #A970FF;">Auto</span>: Automatically choose the best latency for your stream.
  </label>
</div>
<div class="form-check" style="font-size: 15px; margin-left: 200px">
  <input class="form-check-input" type="radio" name="exampleRadios" id="low" value="low">
  <label class="form-check-label" for="low">
   <span style="color: #A970FF;">Low</span>: Best for real-time interactive streams.
  </label>
</div>
<div class="form-check" style="font-size: 15px; margin-left: 200px">
  <input class="form-check-input" type="radio" name="exampleRadios" id="normal" value="normal">
  <label class="form-check-label" for="normal">
   <span style="color: #A970FF;">Normal</span>: Has the best visual quality but you will not be able to interact real-time.
  </label>
</div>
   </div> 
    <div style="width: 840px; height: 490px; margin-left:9px; background-color: #29282A; border-color: black; border-width: 1px; border-style: solid; border-radius: 5px;  margin-bottom: 5px; float: left; padding-top: 15px; padding-left: 10px">
      <h4>Stream Preview</h4>
      <div class="stream-div">
        
      </div>
      <?php

      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_stream = "
      SELECT 
      stream_src
      FROM 
      `livestreams`
      WHERE
      status = 'live'
      AND 
      musician_id = '".$_GET["musician_id"]."'
      ";

      $result_stream = mysqli_query($conn, $sql_stream);
      $row_stream = mysqli_fetch_assoc($result_stream);

      echo'<video autoplay controls controlsList="nodownload noremoteplayback nopictureinpicture" muted disablePictureInPicture id="stream" style="visibility: hidden">
        <source src="upload/videos/'.$row_stream["stream_src"].'" type="video/mp4" id="stream-preview"></video>';

      ?>
      
   </div> 
      <div style="width: 700px; height: 330px; margin-right:15px; background-color: #29282A; border-color: black; border-width: 1px; border-style: solid; border-radius: 5px;  margin-bottom: 5px; float: right; margin-top: -335px; padding-top: 10px; padding-left: 10px" id="stream-deets">
     <form action="upload.php" method="post" enctype="multipart/form-data" id="uploadForm" style="width: 650px">
        <div class="row">
    <div class="col-9">
      <span>TITLE</span>

                <input type="text" name="title" class="form-control form-user" id="title" style="background-color: black; color: #D3D3D3; margin-top: 10px;">
    </div>
    <div class="col-3">
      <span>PRICE</span>
           <select id="price" name="price" class="form-price" style="text-transform: capitalize; margin-top: 10px">
                    <option value="Free">Free</option>
                    <option value="Premium">Premium</option>
                </select>
    </div>
     <div class="col-9 mt-3">
      <span>GENRE TAGS</span>
      <br>

    <select multiple="multiple" class="genre-select" name="genre-select[]">
      <option value="Acoustic">Acoustic</option>
      <option value="Chill">Chill</option>
      <option value="Electronic">Electronic</option>
      <option value="Folk">Folk</option>
      <option value="Hiphop">Hiphop</option>
      <option value="Pop">Pop</option>
      <option value="Rock">Rock</option>
      <option value="Soul">Soul</option>
    </select>

    </div>
    <div class="col-3 mt-4">
      <p style="font-size: 13px; line-height: 1.4">Choose up to 5 genre tags that will fit your live.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-4">
     <img class="tm" style="width: 205px; height: 110px; margin-top: 15px;" src="images/uploadimg.png" id="profileDisplay" onclick="triggerClick()">
                 <input type="file" name="profileImg" onchange="displayImage(this)" id="profileImg" style="display: none;">
</div>
  <div class="col-4 mt-3">
    <p>LIVE THUMBNAIL</p>
  <p style="font-size: 13px; line-height: 1.4; margin-top: 20px">Tip: Upload thumbnail with rectangle dimensions for the best result.</p>
  </div>   
    <div class="col-4 mt-5">
  <button type="submit" class="btn" style="width: 100%; margin-top: 5px" id="save-changes">Save Changes</button>
  </div>  
  </div>         
           
          
        </form>
     <h4></h4>
   </div>

     <div style="width: 345px; height: 490px; margin-right:15px; background-color: #29282A; border-color: black; border-width: 1px; border-style: solid; border-radius: 5px;  margin-bottom: 5px; float: right; padding-top: 10px; padding-left: 20px; padding-right: 20px;">
   <h4 style=" margin-right: 10px">Choose your stream method:</h4>
     <div class="stream-method row" id="webcam" onclick="webcamSetup()">
      <div class="col-7">
        <h4 style="color: black; padding-top: 10px; margin-bottom: -1px">WEBCAM</h4> 
       <span style="color: black; font-size: 13px;">Simply set up your camera, instruments and microphone and you're good to go!</span> 
      </div>
      <div class="col-5">
         <img src="images/camera.png" style="width: 130px; margin-left: -30px;">
      </div>
     </div>
     <div class="stream-method row" id="stream-key-div" onclick="keySetup()">
           <div class="col-8">
        <h4 style="color: black; padding-top: 10px; margin-bottom: -1px">STREAM KEY</h4> 
       <span style="color: black; font-size: 13px; padding-right: 10px">Copy your stream key</span> 
       <span style="color: black; font-size: 13px; padding-right: 10px">from the stream setup</span>
       <span style="color: black; font-size: 13px; padding-right: 10px">then paste the code in</span>  
        <span style="color: black; font-size: 13px; padding-right: 10px">your streaming software.</span>  
      </div>
      <div class="col-4">
         <img src="images/key.png" style="width: 130px; margin-left: -50px;">
      </div>
     </div>
      <button class="btn" onclick="clickTimer()" id="go-live" style="margin-top: 20px; width: 310px; position: absolute; --border-color: white" disabled>Go live</button>
   <button class="btn" onclick="stopTimer()" id="stop-live" style="position: absolute; margin-top: 20px; width: 310px; visibility: hidden">Stop streaming</button>
   </div> 
       <div style="width: 345px; height: 490px; margin-right:11px; background-color: #29282A; border-color: black; border-width: 1px; border-style: solid; border-radius: 5px;  margin-bottom: 5px; float: right;padding-top: 15px; padding-left: 10px">
     <h4>Chat</h4>
     <div style="visibility: hidden" id="chat">
     <div style="width: 323px; height: 340px; background-color: #111111; margin-top: 10px; overflow: auto; overflow: hidden;" class="chat-view">
     </div>    
     </div>
   
     
      <form id="chats" style="position: absolute; margin-top: 350px; margin-left:0px; visibility: hidden">
        <div style="width: 323px; height: 72px; background-color: #050505; padding-top: 5px;">
        <input class="form-control form-control-sm" id="chatmsg" name="chatmsg" type="text" placeholder="Say something!" style="margin-left:5px; width: 310px;">
        <button type="submit" id="chatBtn" name="chatBtn" style="margin-top: 5px; float: right; margin-right: 10px">Chat</button> 

     </div>    
      </form>
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
      <script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/script3.js"></script>
    <script src="js/app.js"></script>
    <script src="js/app2.js"></script>
    <script src="js/live.js"></script>
    <script>

     $(function() {
  var $multiSel =  $('.genre-select').multipleSelect({
      minimumCountSelected: 5,
        onClick: function(view) {
    var $checkboxes = $multiSel.next().find("input[type='checkbox']").not(":checked");
    var selectedLen = $multiSel.multipleSelect('getSelects').length;
    if (selectedLen >= 5) {
      $checkboxes.prop("disabled", true);
    } else {
      $checkboxes.prop("disabled", false);
    }
  }
    })
  })

      $('#uploadForm').submit(function (e) {
    e.preventDefault(); 

    // 'this' refers to this current form element 
    
    var musician_id = "<?php  
      $servername = "localhost";
      $db_username = "root";
      $db_password = "";
      $database = "mellofi";

      $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql_stream = "
      SELECT 
      *
      FROM 
      `musician`
      WHERE
      username = '".$_SESSION["username"]."'
      ";

      $result_stream = mysqli_query($conn, $sql_stream);
      $row_stream = mysqli_fetch_assoc($result_stream);

      echo $row_stream["musician_id"];
      ?>";


    $.ajax({
        type: 'post',
        url:'upload.php?musician_id='+ musician_id,
        data: new FormData(this), // important
        contentType: false, // important
        processData: false, // important
        success: function (data) {
            return false;
        }
    })
});
        
        //chat
       $(document).on('click', '#chatBtn', function(){ 

                var chatmsg = $("#chatmsg").val();

                if(chatmsg == ""){
                  return false;
                } 

                else {
                $.post("chat.php", {

                  //post name, actual value from the input
                  chatmsg: chatmsg,
                  stream_id: "<?php  
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
      WHERE
      status = 'live'
      AND 
      musician_id = '".$_GET["musician_id"]."'
      ";

      $result_stream = mysqli_query($conn, $sql_stream);
      $row_stream = mysqli_fetch_assoc($result_stream);

      echo $row_stream["stream_id"];
      ?>",
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
              $.post("fetch-msg-musician.php", { stream_id: '<?php
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
      WHERE
      status = 'live'
      AND 
      musician_id = '".$_GET["musician_id"]."'
      ";

      $result_stream = mysqli_query($conn, $sql_stream);
      $row_stream = mysqli_fetch_assoc($result_stream);

      echo $row_stream["stream_id"];
      ?>' },

              function(data, status) 
              {

                document.getElementsByClassName('chat-view')[0].innerHTML = data;

              }
                )
              $(".chat-view").animate({ scrollTop: $(".chat-view")[0].scrollHeight});
            }
    
    function displayFollowers (){
      $.post("fetch-followers.php", { stream_id: '<?php
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
      WHERE
      status = 'live'
      AND 
      musician_id = '".$_GET["musician_id"]."'
      ";

      $result_stream = mysqli_query($conn, $sql_stream);
      $row_stream = mysqli_fetch_assoc($result_stream);

      echo $row_stream["stream_id"];
      ?>' },

              function(data, status) 
              {

                document.getElementById('followers-cnt').innerHTML = data;

              }
                );
            }

    setInterval(displayFollowers, 100);

    </script>
  </body>
</html>