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
    <link rel="stylesheet" type="text/css" href="css/style5.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">   

    <link rel="stylesheet" href="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.css">     

    <title>Mellofi</title>

  </head>
  <style>


  </style>
  <body style="overflow-x: hidden">

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
              <a class="dropdown-item" href="#" style="font-weight: bold">
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

                         <!-- Upload Music Modal -->
  <div class="modal fade" id="musicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: black;  width: 700px">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="color: white; background-color: #0D0D0D; height: 750px; width: 700px">
          <div class="container">
            <div class="text-box">
              <h1 class="custom-hdr">UPLOAD MUSIC</h1>
            </div>
          </div>

             <form method="post" action="uploadaudio.php" id="uploadMusic" enctype="multipart/form-data" style="width: 600px; margin-left: 36px">
              <span class="register-form-message"></span>
             <div class="form-group">
            <strong>MUSIC FILE</strong>
            <label onclick="audioClick()" style="background-color: black; width: 100%; height: 40px; border-radius: 5px; border-color: white; border-style: solid; border-width: 1px; padding-top: 7px; padding-left: 10px;">
                Click here to upload your music file!
            </label>
             <input type="file" name="audio" class="form-control" id="audio" style="background-color: black; width: 100%; display: none">             
          </div>
          <div>
            <label><strong>TITLE</strong></label>
            <input type="text" class="form-control" name="title" aria-label="Title" id="title" style="width: 100%; background-color: black; color: white">
          </div>

          <div>
            <label><strong>GENRE</strong></label>
              <select multiple="multiple" class="genre-select" name="genre-select[]" style="width: 100%" placeholder="Choose up to 5 genres fit to your music.">
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

<label><strong>ALBUM ART</strong></label>
   <img src="https://app.hhhtm.com/resources/assets/img/upload_img.jpg" id="profileDisplay" onclick="triggerClick()" style="width: 200px; height: 200px; margin-left: 200px">
              <input type="file" name="profileImg" onchange="displayImage(this)" id="profileImg" style="display: none;">
<button type="submit" class="btn mt-4" style="width: 100%;">Upload</button>
            
            </form>
       
           
        </div>
      </div>
    </div>
  </div>

    <!-- Upload Video Modal -->
  <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: black;  width: 700px">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="color: white; background-color: #0D0D0D; height: 870px; width: 700px">
          <div class="container">
            <div class="text-box">
              <h1 class="custom-hdr">UPLOAD VIDEO</h1>
            </div>
          </div>

             <form method="post" action="uploadvideo.php" id="uploadVideo" enctype="multipart/form-data" style="width: 600px; margin-left: 36px">
              <span class="register-form-message"></span>
             <div class="form-group">
            <strong>VIDEO FILE</strong>
            <label onclick="videoClick()" style="background-color: black; width: 100%; height: 40px; border-radius: 5px; border-color: white; border-style: solid; border-width: 1px; padding-top: 7px; padding-left: 10px;">
                Click here to upload your video!
            </label>
             <input type="file" name="video" class="form-control" id="video" style="background-color: black; width: 100%; display: none">             
          </div>
          <div>
            <label><strong>TITLE</strong></label>
            <input type="text" class="form-control" name="title-video" aria-label="Title" id="title-video" style="width: 100%; background-color: black; color: white">
          </div>

          <div>
            <label><strong>GENRE</strong></label>
              <select multiple="multiple" class="genre-select" name="genre-select[]" style="width: 100%" placeholder="Choose up to 5 genres fit to your music.">
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

 <div>
   <label><strong>PRICE</strong></label>
        <select id="price" name="price" class="form-price" style="text-transform: capitalize; margin-top: 10px; width: 100%;">
                    <option value="Free">Free</option>
                    <option value="Premium">Premium</option>
                </select>
              </div>
<label style="margin-top: 20px"><strong>THUMBNAIL</strong></label>
   <img src="images/uploadimg.png" id="thumbnailDisplay" onclick="triggerThumbClick()" style="width: 400px; height: 200px; margin-left: 100px">
              <input type="file" name="thumbnail" onchange="displayThumbImage(this)" id="thumbnail" style="display: none;">
<button type="submit" class="btn mt-4" style="width: 100%;">Upload</button>
            
            </form>
       
           
        </div>
      </div>
    </div>
  </div>

  <!-- Update Video Modal -->
  <div class="modal fade" id="updateVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: black;  width: 700px">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="color: white; background-color: #0D0D0D; height: 870px; width: 700px">
          <div class="container">
            <div class="text-box">
              <h1 class="custom-hdr">UPDATE VIDEO</h1>
            </div>
          </div>

             <form method="post" action="uploadvideo.php" id="uploadVideo" enctype="multipart/form-data" style="width: 600px; margin-left: 36px">
              <span class="register-form-message"></span>
              <p name= "vid_id" id="vid_id"></p>
             <div class="form-group">
            <strong>VIDEO FILE</strong>
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
               videos
               WHERE 
               `video_id` = ''
               ";


            ?>
            <label onclick="videoClick()" style="background-color: black; width: 100%; height: 40px; border-radius: 5px; border-color: white; border-style: solid; border-width: 1px; padding-top: 7px; padding-left: 10px;">
                Click here to upload your video!
            </label>
             <input type="file" name="video" class="form-control" id="video" style="background-color: black; width: 100%; display: none">             
          </div>
          <div>
            <label><strong>TITLE</strong></label>
            <input type="text" class="form-control" name="title-video" aria-label="Title" id="title-video" style="width: 100%; background-color: black; color: white">
          </div>

          <div>
            <label><strong>GENRE</strong></label>
              <select multiple="multiple" class="genre-select" name="genre-select[]" style="width: 100%" placeholder="Choose up to 5 genres fit to your music.">
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

 <div>
   <label><strong>PRICE</strong></label>
        <select id="price" name="price" class="form-price" style="text-transform: capitalize; margin-top: 10px; width: 100%;">
                    <option value="Free">Free</option>
                    <option value="Premium">Premium</option>
                </select>
              </div>
<label style="margin-top: 20px"><strong>THUMBNAIL</strong></label>
   <img src="images/uploadimg.png" id="thumbnailDisplay" onclick="triggerThumbClick()" style="width: 400px; height: 200px; margin-left: 100px">
              <input type="file" name="thumbnail" onchange="displayThumbImage(this)" id="thumbnail" style="display: none;">
<button type="submit" class="btn mt-4" style="width: 100%;">Upload</button>
            
            </form>
       
           
        </div>
      </div>
    </div>
  </div>


    <!-- Sidebar -->
    <div class="flex-column flex-shrink-0 p-3 text-white" style=" min-width: 300px; max-width: 300px; height: 150vh; display: block; background-color: #18181b; position: absolute;" id="fullheight">
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
       echo'<a href="contentUpload.php?musician_id='.$_GET['musician_id'].'" class="nav-link creator-studio-icons active">';
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
  
  <div>
    <div class="custom-container mt-5 header-tab" style="background-image: url(images/bg-content.jpg); margin-left: 300px; width: 1620px">
    </div>
    <div class="custom-container" style="position: absolute; margin-top: -150px; text-align: center">
       <h1 class="display-2" style=" margin-left: 470px; text-align: center; font-weight: bold">CHANNEL CONTENT</h1>
    </div>
  </div>
  <br>
  <br>
  <div style="margin-left: 300px;">

  <!-- Content Tabs -->    
    <ul class="nav nav-tabs  nav-justified">

  <li class="nav-item" id="Video Content">
    <a class="nav-link active" data-toggle="pill" aria-current="page" href="#VideoContent">Videos</a>
  </li>
  <li class="nav-item" id="Live Content">
    <a class="nav-link" data-toggle="pill" href="#LiveContent">Live</a>
  </li>
  <li class="nav-item" id="Music Content">
    <a class="nav-link" data-toggle="pill" href="#MusicContent">Music</a>
  </li>

</ul>

<div class="tab-content">
    <div id="VideoContent" class="tab-pane fade in active show"  style="margin-top: 30px;">
      <?php
echo '  <p>Add more video content now by clicking the button below!</p>
  <img src="https://nevagfx.files.wordpress.com/2017/07/img_08582.gif" style="width: 20px; margin-left: 375px; margin-top: -39px; position: absolute;"><button type="button" class="btn" data-toggle="modal" data-target="#videoModal" style="width: 300px; margin-bottom: 30px">Upload A Video</button>';
      ?>
    
    <!-- Video Content -->
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
          WHERE
          `musician_id` = '".$_GET['musician_id']."' 
         
      ";
       


      $result_videos = mysqli_query($conn, $sql_videos);
          while ($row = mysqli_fetch_assoc($result_videos)) {
            array_push($videos, $row);
          }

           

          
       $count_videos = mysqli_num_rows($result_videos);

    echo '
    <table class="table" style="color: white;">
  <thead>
    <tr>
      <th scope="col">Thumbnail</th>
      <th scope="col">Title</th>
      <th scope="col">Viewer Count</th>
      <th scope="col">Price</th>
      <th scope="col">Followers Gained</th>
      <th scope="col">Subscribers Gained</th>
      <th scope="col">Comments</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  ';
   for ($index = 0; $index < count($videos); $index++) {
    $sql_comments = "
                 SELECT 
                  *
                 FROM 
                  `comments` 
                INNER JOIN 
                  `videos`
                 ON 
                 `videos`.video_id = `comments`.video_id
                 INNER JOIN
                  `musician`
                 ON 
                 `videos`.musician_id = `musician`.musician_id
                 WHERE 
                 `musician`.username = '".$_SESSION['username']."'
                 AND 
                  `videos`.video_id = '".$videos[$index]["video_id"]."'
            ";

             $result_comments = mysqli_query($conn, $sql_comments);
            $comments = mysqli_num_rows($result_comments);

  $sql_followers = "
                 SELECT 
                  *
                  FROM 
                  `following` 
                  INNER JOIN 
                  `musician`
                  ON 
                  `musician`.musician_id = `following`.musician_id
                  WHERE 
                  `following`.video_id = '".$videos[$index]["video_id"]."'
                  AND 
                  `musician`.username = '".$_SESSION['username']."'
            ";
            $musician_id = $_GET['musician_id'];
            $result_followers = mysqli_query($conn, $sql_followers);
            $followers = mysqli_num_rows($result_followers);

            
$sql_subs = "
                 SELECT 
                  *
                  FROM 
                  `subscription` 
                  INNER JOIN 
                  `musician`
                  ON 
                  `musician`.musician_id = `subscription`.musician_id
                  WHERE 
                  `subscription`.video_id = '".$videos[$index]["video_id"]."'
                  AND 
                  `musician`.username = '".$_SESSION['username']."'
            ";
 
            $result_subs = mysqli_query($conn, $sql_subs);
            $subs = mysqli_num_rows($result_subs);


         echo '
  <tbody>
    <tr>
      <th scope="row"><img style = "height:50px; ;width:100px"src="upload/images/'.$videos[$index]["thumbnail"].'"</th>
      <td><a href="video.php?video_id='.$videos[$index]["video_id"].'" style="color: white">'.$videos[$index]["title"].'</td></a>
      <td>'.$videos[$index]["viewer_cnt"].'</td>
      <td style="text-transform: capitalize">'.$videos[$index]["price"].'</td>
      <td>'.$followers.'</td>
      <td>'.$subs.'</td>
      <td>'.$comments.'</td>
      <td>
          
          <a style="color:white" href=update_vid.php?musician_id='.$_GET["musician_id"].'&video_id='.$videos[$index]["video_id"].'><button type="button" class="btn">Edit</button></a>
                         
             <button type="button" class="btn" id="'.$videos[$index]["video_id"].'" onclick="deleteVidClick(this.id)" data-toggle="modal" data-target="#confirmModal">Delete</button>

      </td>
    </tr> 
  </tbody>
  ';}
  echo '
</table>  
    </div> ';


    ?>
<!-- Live Content -->
    <div id="LiveContent" class="tab-pane fade" style="margin-top: 30px;">
      
      
       <?php
echo' <p>Add more live content now by clicking the button below!</p>
  <img src="https://nevagfx.files.wordpress.com/2017/07/img_08582.gif" style="width: 20px; margin-left: 375px; margin-top: -39px; position: absolute;"><a href="streamSetup.php?musician_id='.$_GET["musician_id"].'"style="color: white;"><button type="button" class="btn" style="width: 300px; margin-bottom: 30px">Set up Your Live stream</button></a>';
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
          musician_id = '".$_GET['musician_id']."' 

      ";

      $result_livestreams = mysqli_query($conn, $sql_livestreams);
          while ($row = mysqli_fetch_assoc($result_livestreams)) {
            array_push($livestreams, $row);
          }

       $count_livestreams = mysqli_num_rows($result_livestreams);

    echo '
    <table class="table" style="color: white;">
  <thead>
    <tr>
      <th scope="col">Thumbnail</th>
      <th scope="col">Title</th>
      <th scope="col">Viewer Count</th>
      <th scope="col">Price</th>
      <th scope="col">Followers Gained</th>
      <th scope="col">Subscribers Gained</th>
      <th scope="col">Chats</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  ';
  
   for ($index = 0; $index < count($livestreams); $index++) {
        
        $sql_chats = "
                 SELECT 
                  *
                 FROM 
                  `chats` 
                INNER JOIN 
                  `livestreams`
                 ON 
                 `livestreams`.stream_id = `chats`.stream_id
                 INNER JOIN
                  `musician`
                 ON 
                 `livestreams`.musician_id = `musician`.musician_id
                 WHERE 
                 `musician`.username = '".$_SESSION['username']."'
                 AND 
                  `livestreams`.stream_id = '".$livestreams[$index]["stream_id"]."'
            ";

             $result_chats = mysqli_query($conn, $sql_chats);
             $chats = mysqli_num_rows($result_chats);

        

  $sql_followers = "
                 SELECT 
                  *
                  FROM 
                  `following` 
                  INNER JOIN 
                  `musician`
                  ON 
                  `musician`.musician_id = `following`.musician_id
                  WHERE 
                  `following`.stream_id = '".$livestreams[$index]["stream_id"]."'
                  AND 
                  `musician`.username = '".$_SESSION['username']."'
            ";
            $musician_id = $_GET['musician_id'];
            $result_followers = mysqli_query($conn, $sql_followers);
            $followers = mysqli_num_rows($result_followers);

            
$sql_subs = "
                 SELECT 
                  *
                  FROM 
                  `subscription` 
                  INNER JOIN 
                  `musician`
                  ON 
                  `musician`.musician_id = `subscription`.musician_id
                  WHERE 
                  `subscription`.stream_id = '".$livestreams[$index]["stream_id"]."'
                  AND 
                  `musician`.username = '".$_SESSION['username']."'
            ";
 
            $result_subs = mysqli_query($conn, $sql_subs);
            $subs = mysqli_num_rows($result_subs);

         echo '
  <tbody>
    <tr>
      <th scope="row"><img style = "height:50px; width:100px"src="upload/images/'.$livestreams[$index]["thumbnail"].'"</th>
      <td><a href="livestream.php?stream_id='.$livestreams[$index]["stream_id"].'" style="color: white">'.$livestreams[$index]["title"].'</a></td>
      <td>'.$livestreams[$index]["viewer_cnt"].'</td>
      <td style="text-transform: capitalize">'.$livestreams[$index]["price"].'</td>
      <td>'.$followers.'</td>
      <td>'.$subs.'</td>
      <td>'.$chats.'</td>
      <td>
 
  <a style="color:white" href=update_live.php?musician_id='.$_GET["musician_id"].'&stream_id='.$livestreams[$index]["stream_id"].'><button type="button" class="btn">Edit</button>
                         
              <button type="button" class="btn" id="'.$livestreams[$index]["stream_id"].'" onclick="deleteLiveClick(this.id)" data-toggle="modal" data-target="#confirmModal">Delete</button>
      </td>
    </tr> 
  </tbody>
  ';}
  echo '
</table>
    </div> ';


    ?>
<!-- Music Content -->
    <div id="MusicContent" class="tab-pane fade" style="margin-top: 30px;">
       
 <?php

       echo'
        <p>Add more music content now by clicking the button below!</p>
  <img src="https://nevagfx.files.wordpress.com/2017/07/img_08582.gif" style="width: 20px; margin-left: 375px; margin-top: -39px; position: absolute;"><button type="button" class="btn" data-toggle="modal" data-target="#musicModal" style="width: 300px; margin-bottom: 30px">Upload Music</button>';

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
          musician_id = '".$_GET['musician_id']."' 

      ";

      $result_music = mysqli_query($conn, $sql_music);
          while ($row = mysqli_fetch_assoc($result_music)) {
            array_push($music, $row);
          }


          

       $count_music = mysqli_num_rows($result_music);

    echo '
       <table class="table" style="color: white;">
  <thead>
    <tr>
      <th scope="col">Cover Art</th>
      <th scope="col">Title</th>
      <th scope="col">Subscribers Gained</th>
      <th scope="col">Followers Gained</th>
      <th scope="col">Action</th>
      
      
    </tr>

  </thead>
   ';
    for ($index = 0; $index < count($music); $index++) {
      $sql_followers = "
                 SELECT 
                  *
                  FROM 
                  `following` 
                  INNER JOIN 
                  `musician`
                  ON 
                  `musician`.musician_id = `following`.musician_id
                  WHERE 
                  `following`.music_id = '".$music[$index]["music_id"]."'
                  AND 
                  `musician`.username = '".$_SESSION['username']."'
            ";
            $musician_id = $_GET['musician_id'];
            $result_followers = mysqli_query($conn, $sql_followers);
            $followers = mysqli_num_rows($result_followers);

            
$sql_subs = "
                 SELECT 
                  *
                  FROM 
                  `subscription` 
                  INNER JOIN 
                  `musician`
                  ON 
                  `musician`.musician_id = `subscription`.musician_id
                  WHERE 
                  `subscription`.music_id = '".$music[$index]["music_id"]."'
                  AND 
                  `musician`.username = '".$_SESSION['username']."'
            ";
 
            $result_subs = mysqli_query($conn, $sql_subs);
            $subs = mysqli_num_rows($result_subs);


         echo '
  <tbody>
    <tr>
      <th scope="row"><img style="height:70px; ;width:70px" src="upload/images/'.$music[$index]["album_art"].'"></th>
      <td><a href="music.php?music_id='.$music[$index]["music_id"].'" style="color: white">'.$music[$index]["title"].'</a></td>
      <td>'.$subs.'</td>
       <td>'.$followers.'</td>
      <td>
        <a style="color:white" href=update_Music.php?musician_id='.$_GET["musician_id"].'&music_id='.$music[$index]["music_id"].'><button type="button" class="btn">Edit</button>
         
                         
             <button type="button" class="btn" id="'.$music[$index]["music_id"].'" onclick="deleteMusicClick(this.id)" data-toggle="modal" data-target="#confirmModal">Delete</button>
      </td>   
    </tr>
   
  </tbody>';}

echo'
</table>

    </div>';
    ?>
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
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
     <script src="js/script.js"></script>
    <script src="js/app.js"></script>
     <script src="js/app2.js"></script>
     <script src="js/live.js"></script>
     <script>

      function audioClick() {
  document.querySelector('#audio').click();
}

$('#audio').change(function() {
  var i = $(this).prev('label').clone();
  var file = $('#audio')[0].files[0].name;
  $(this).prev('label').text(file);
});

      function videoClick() {
  document.querySelector('#video').click();
}

$('#video').change(function() {
  var i = $(this).prev('label').clone();
  var file = $('#video')[0].files[0].name;
  $(this).prev('label').text(file);
});


       function deleteVidClick(clicked_id){
    var musician_id = "<?php echo $_GET["musician_id"]?>";
    document.getElementById("confirmBtn").href="video-delete.php?musician_id=" + musician_id + "&video_id=" + clicked_id; 
    return false;
}

      function editVidClick(vid_id){
    var video_id = vid_id.replace("edit-", "");
    var musician_id = "<?php echo $_GET["musician_id"]?>";
    var vid =  document.getElementById("vid_id").value = video_id; 
    console.log(vid);
    return false;
}


       function deleteLiveClick(clicked_id){
    var musician_id = "<?php echo $_GET["musician_id"]?>";
    document.getElementById("confirmBtn").href="live-delete.php?musician_id=" + musician_id + "&stream_id=" + clicked_id; 
    return false;
}

       function deleteMusicClick(clicked_id){
    var musician_id = "<?php echo $_GET["musician_id"]?>";
    document.getElementById("confirmBtn").href="music-delete.php?musician_id=" + musician_id + "&music_id=" + clicked_id; 
    return false;
}

    $('#uploadMusic').submit(function (e) {
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
        url:'uploadaudio.php?musician_id='+ musician_id,
        data: new FormData(this), // important
        contentType: false, // important
        processData: false, // important
        success: function (data) {
          window.location.reload();
            return false;
        }
    })
});

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


function triggerThumbClick() {
  document.querySelector('#thumbnail').click();
}

function displayThumbImage (e){
  if (e.files[0]){
    var reader = new FileReader();

    reader.onload= function(e){
      document.querySelector('#thumbnailDisplay').setAttribute('src', e.target.result);
    }

    reader.readAsDataURL(e.files[0]);
  }
}

 $('#uploadVideo').submit(function (e) {
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
        url:'uploadvideo.php?musician_id='+ musician_id,
        data: new FormData(this), // important
        contentType: false, // important
        processData: false, // important
        success: function (data) {
          window.location.reload();
            return false;
        }
    })
});
     </script>


  
  </body>
</html>