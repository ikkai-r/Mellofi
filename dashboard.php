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
        echo '<a href="dashboard.php?musician_id='.$_GET['musician_id'].'"" class="nav-link active creator-studio-icons" aria-current="page">';
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

  <div style="margin-left: 370px; margin-right: 90px" class="mt-5">
    
    <!--Live-->
    <div class="live-div" style="border-radius: 2%;">
        <h2 style="margin-left: 20px; margin-top: 15px; margin-bottom: -1px">STREAMS OVERVIEW</h2>
        <h7 style="margin-left: 20px;">Past month</h7>
                <br>        <br>
           
            <?php

            $servername = "localhost";
            $db_username = "root";
            $db_password = "";
            $database = "mellofi";

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);

             $sql_id = "
                 SELECT 
                  musician_id
                 FROM 
                  `musician`
                 WHERE
                   username = '".$_SESSION['username']."'
            ";

            $result_id = mysqli_query($conn, $sql_id);
            $row_id = mysqli_fetch_assoc($result_id);

            $musician_id = $row_id["musician_id"];

            $sql_following = "
                 SELECT 
                 *
                 FROM 
                  `following`
                 WHERE
                  musician_id = '".$musician_id."'
                  AND 
                  stream_id != 0
            ";

            $result_following = mysqli_query($conn, $sql_following);
            $followers = mysqli_num_rows($result_following);

            $sql_subscription = "
                 SELECT 
                 *
                 FROM 
                  `subscription`
                 WHERE
                  musician_id = '".$musician_id."'
                  AND 
                  stream_id != 0
            ";

            $result_subscription = mysqli_query($conn, $sql_subscription);
            $subs = mysqli_num_rows($result_subscription);

            $sql_sub = "
                  SELECT 
                  * 
                  FROM 
                  `subscription`
                  WHERE 
                  musician_id = '".$musician_id."'
            ";

            $result_sub = mysqli_query($conn, $sql_sub);
            $sub_count = mysqli_num_rows($result_sub);

            $subscription = ($sub_count*140);

            $sql_views = "
                  SELECT 
                  * 
                  FROM 
                  `livestreams`
                  WHERE 
                  musician_id = '".$musician_id."'
            ";

            $result_views = mysqli_query($conn, $sql_views);

            $views = [];
            $total_views = 0;

            while ($views_count = mysqli_fetch_assoc($result_views)) {
              array_push($views, $views_count);
            }


            for ($index=0; $index < count($views); $index++) { 
              $total_views = $total_views + $views[$index]["viewer_cnt"];
            }

            $streams = mysqli_num_rows($result_views);
            if ($streams > 0 && count($views) > 0) {
            $average_views = ($total_views/$streams);
            $average_views = (int)$average_views;
            } else if ($streams <= 0 || count($views) <= 0) {
              $average_views = 0;
            }

            $sql_chats = "
            SELECT 
            * 
            FROM 
            `chats`
            INNER JOIN 
            `livestreams`
            ON
            `livestreams`.stream_id = `chats`.stream_id
            WHERE 
            `livestreams`.musician_id = '".$musician_id."'
            ";

            $result_chats = mysqli_query($conn, $sql_chats);
            $chat_count = mysqli_num_rows($result_chats);

            $sql_stream = "
            SELECT DISTINCT
            `chats`.stream_id
            FROM 
            `chats`
            INNER JOIN 
            `livestreams`
            ON
            `livestreams`.stream_id = `chats`.stream_id
            WHERE 
            `livestreams`.musician_id = '".$musician_id."'
            ";

            $sql_popular = "
            SELECT 
            MAX(viewer_cnt) 
            FROM 
            `livestreams` 
            WHERE 
            musician_id = '".$musician_id."'
            ";

            $result_popular = mysqli_query($conn, $sql_popular);
            $row_popular = mysqli_fetch_assoc($result_popular);
            if ($row_popular["MAX(viewer_cnt)"] <= 0){
              $most_views = 0;
            } else {
              $most_views = $row_popular["MAX(viewer_cnt)"];
            }

            $result_stream = mysqli_query($conn, $sql_stream);
            $stream_count = mysqli_num_rows($result_stream);

            if ($stream_count > 0 && $chat_count > 0) {
                $average_chats = ($chat_count/$stream_count);
                $average_chats = (int)$average_chats;
            } else if ($stream_count <= 0 || $chat_count <= 0){
                $average_chats = 0;
            }
          

            echo '
              <div style="display: flex">
        <div style="width: 200px; height: 120px; margin-left:9px; background-color: #29282A; border-color: black; border-width: 1px; border-style: solid; border-radius: 5px;  margin-bottom: 5px;">
            <h5 style="margin-left: 15px; margin-top: 12px">Followers gained from streams</h5>
        <h4 style="color: #A970FF; margin-left: 15px; margin-top: 19px">'.$followers.'</h4>
         </div>
        <div style="width: 210px; height: 120px; margin-left: 10px; background-color: #29282A; border-color: black; border-width: 1px; border-style: solid; border-radius: 5px;  margin-bottom: 5px;">
            <h5 style="margin-left: 15px; margin-top: 12px">Estimated sub revenue</h5>
            <h4 style="color: #A970FF; margin-left: 15px; margin-top: 19px">₱ '.$subscription.'</h4>
        </div>
      </div>
        <div style="display: flex">
         <div style="width: 200px; height: 120px; margin-left: 9px; background-color: #29282A; border-color: black; border-width: 1px; border-style: solid; border-radius: 5px;  margin-bottom: 5px; margin-top: 5px; ">
            <h5 style="margin-left: 15px; margin-top: 12px">Average views</h5>
            <h4 style="color: #A970FF; margin-left: 15px; margin-top: 40px">'.$average_views.'</h4>
        </div>
             <div style="width: 210px; height: 120px; margin-left: 10px; background-color: #29282A; border-color: black; border-width: 1px; border-style: solid; border-radius: 5px;  margin-bottom: 5px; margin-top: 5px">
            <h5 style="margin-left: 15px; margin-top: 12px">Average chats</h5>
            <h4 style="color: #A970FF; margin-left: 15px; margin-top: 40px">'.$average_chats.'</h4>
        </div>
              </div>
        <div style="display: flex">
         <div style="width: 200px; height: 120px; margin-left: 9px; background-color: #29282A; border-color: black; border-width: 1px; border-style: solid; border-radius: 5px;  margin-bottom: 5px; margin-top: 5px">
            <h5 style="margin-left: 15px; margin-top: 12px">Most number of views garnered</h5>
            <h4 style="color: #A970FF; margin-left: 15px; margin-top: 19px">'.$most_views.'</h4>
        </div>
        <div style="width: 210px; height: 120px; margin-left: 10px; background-color: #29282A; border-color: black; border-width: 1px; border-style: solid; border-radius: 5px;  margin-bottom: 5px; margin-top: 5px">
            <h5 style="margin-left: 15px; margin-top: 12px;">Subscribers gained from streams</h5>
            <h4 style="color: #A970FF; margin-left: 15px; margin-top: 19px">'.$subs.'</h4>
        </div>
              </div>';



            ?>
          </div>

     <!--Content Upload-->

    <div class="row content-upload">
        <div class="col-8 latest-vid-div">
            <h2 style="text-align: left; margin-top: 15px; ">LATEST VIDEO UPLOAD</h2>

              <?php

            $servername = "localhost";
            $db_username = "root";
            $db_password = "";
            $database = "mellofi";

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);

             $sql_count = "
                 SELECT 
                 *
                 FROM 
                  `musician` 
                 INNER JOIN
                  `videos`
                 ON 
                 `videos`.musician_id = `musician`.musician_id
                 WHERE 
                 `musician`.username = '".$_SESSION['username']."'
            ";

            $result_count = mysqli_query($conn, $sql_count);
            $row_count = mysqli_num_rows($result_count);

            if ($row_count > 0) {

                       $sql_video = "
                 SELECT 
                 MAX(video_id)
                 FROM 
                  `musician` 
                 INNER JOIN
                  `videos`
                 ON 
                 `videos`.musician_id = `musician`.musician_id
                 WHERE 
                 `musician`.username = '".$_SESSION['username']."'
            ";

            $result_video = mysqli_query($conn, $sql_video);
            $row_video = mysqli_fetch_assoc($result_video);

              $sql_artist = "
                 SELECT 
                 *
                 FROM 
                  `musician` 
                 INNER JOIN
                  `videos`
                 ON 
                 `videos`.musician_id = `musician`.musician_id
                 WHERE 
                 `musician`.username = '".$_SESSION['username']."'
                 AND 
                 `videos`.video_id = '".$row_video['MAX(video_id)']."'
            ";

            $result_artist = mysqli_query($conn, $sql_artist);
            $row = mysqli_fetch_assoc($result_artist);

            $sql_comments = "
                 SELECT 
                  *
                 FROM 
                  `comments` 
                INNER JOIN 
                  `videos`
                 ON 
                 `comments`.video_id = '".$row["video_id"]."'
                 INNER JOIN
                  `musician`
                 ON 
                 `videos`.musician_id = `musician`.musician_id
                 WHERE 
                 `musician`.username = '".$_SESSION['username']."'
                 AND 
                 `videos`.video_id = '".$row["video_id"]."'
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
                  `following`.video_id = '".$row["video_id"]."'
                  AND 
                  `musician`.username = '".$_SESSION['username']."'
            ";

            $result_followers = mysqli_query($conn, $sql_followers);
            $followers = mysqli_num_rows($result_followers);

                echo '
          <video class="latest-upload" autoplay controls muted>
               <source src="upload/videos/'.$row["video_src"].'" type="video/mp4">
          </video>
          <br>
          <a href="video.php?video_id='.$row["video_id"].'" style="color: white"><h7>'.$row["title"].'</h7></a>
          <br>
            <h7 style="margin-right: 30px; margin-left: 20px;"> 
              <i class="fas fa-eye" style="margin-right: 10px"></i>
            <span style="color: #FFE985">'.$row["viewer_cnt"].'</span> Viewers
            </h7>
            <h7 style="margin-right: 30px">
              <i class="fas fa-comment" style="margin-right: 10px"></i><span style="color: #85F6FF">'.$comments.'</span> 
              Comments
              </h7>
               <h7 style="margin-right: 30px">
                <i class="fas fa-user-plus" style="margin-right: 10px"></i>
                 <span style="color: #85FFD1">'.$followers.'</span> 
                   Followers Gained</h7>';

              
            } else {
              echo '<div style="width: 600px; height: 400px; margin-left: 23px; margin-top: 10px; justify-content: center; text-align: center">
              <i class="fas fa-play-circle" style="font-size: 120px; position: absolute; color: #B678F1; margin-top: 70px"></i>
              <i class="fas fa-music" style="font-size: 100px; margin-left: 90px; margin-top: 100px;"></i>
              <h3 style="margin-top: 20px">Upload a video to get started!</h3>
              <p>Showcase your amazing music through the lens of your camera. So that even when you are not live, your audience can still be engaged!</p>
              </div>';
            }

   
              ?>
      </div>

                <!--other content-->

      <div class="col-4" style="border-radius: 2%">
        <h5 style="margin-top: 20px; text-align: center">CONTENT OVERVIEW</h5>

        <!--videos-->


      
          <?php 

           echo'<h6 style="margin-top: 30px">VIDEOS</h6>';
     

            $servername = "localhost";
            $db_username = "root";
            $db_password = "";
            $database = "mellofi";
            $videos = [];

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);

             $sql_count = "
                 SELECT 
                 *
                 FROM 
                  `musician` 
                 INNER JOIN
                  `videos`
                 ON 
                 `videos`.musician_id = `musician`.musician_id
                 WHERE 
                 `musician`.username = '".$_SESSION['username']."'
            ";

            $result_count = mysqli_query($conn, $sql_count);
            $row_count = mysqli_num_rows($result_count);


        if ($row_count > 1 && $row_count > 0) {
          //there is videos

          echo'<a href="contentUpload.php?musician_id='.$_GET['musician_id'].'"><span class="see-all">See All <i class="fas fa-chevron-right"></i></span> </a>';
           echo '<div class="row mt-3">';

            $sql_video = "
                 SELECT 
                 MAX(video_id)
                 FROM 
                  `musician` 
                 INNER JOIN
                  `videos`
                 ON 
                 `videos`.musician_id = `musician`.musician_id
                 WHERE 
                 `musician`.username = '".$_SESSION['username']."'
            ";

            $result_video = mysqli_query($conn, $sql_video);
            $row_video = mysqli_fetch_assoc($result_video);
           
            
            $sql_content = "
                SELECT 
                * 
                FROM 
                `musician` 
                INNER JOIN 
                `videos` 
                ON 
                `videos`.musician_id = `musician`.musician_id 
                WHERE 
                `musician`.username = '".$_SESSION["username"]."'
                AND 
                `videos`.video_id != '".$row_video["MAX(video_id)"]."'
                ORDER BY VIDEO_ID ASC
            ";

            $result_content = mysqli_query($conn, $sql_content);

            while ($row_content = mysqli_fetch_assoc($result_content)) {
              array_push($videos, $row_content);
            }


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

            $result_followers = mysqli_query($conn, $sql_followers);
            $followers = mysqli_num_rows($result_followers);

          if ($index <= 1) {
            if (strlen($videos[$index]["title"]) <= 21) {
              //smol title 
                    echo '        
        <div class="col-4 mb-3">
            <a href="video.php?video_id='.$videos[$index]["video_id"].'">
              <img src="upload/images/'.$videos[$index]["thumbnail"].'" style="width: 98px; height: 60px; padding-left: -13px">
            </a>
        </div>
        <div class="col-8">
         <a href="video.php?video_id='.$videos[$index]["video_id"].'" style="color: white"><p style=" font-size: 14px; margin-bottom: 2px">'.$videos[$index]["title"].'</p></a>
                    <p style=" font-size:11px; margin-bottom: -1px">Uploaded '.$videos[$index]["stream_time"].' ago</p>
         <span style=" font-size: 11px; margin-bottom: -2px; margin-right: 10px"><i class="fas fa-eye"></i> <span style="color: #FFE985">'.$videos[$index]["viewer_cnt"].'</span></span>
          <span style="  font-size: 11px; margin-bottom: -2px; margin-right: 10px"><i class="fas fa-comment"></i> <span style="color: #85F6FF"> '.$comments.'</span></span>
          <span style=" font-size: 11px; margin-right: 10px"><i class="fas fa-user-plus"></i><span style="color: #85FFD1"> '.$followers.'</span></span>
        </div>';
            }
            else {
              //big title

                 echo '        
        <div class="col-4 mb-3">
            <a href="video.php?video_id='.$videos[$index]["video_id"].'">
              <img src="upload/images/'.$videos[$index]["thumbnail"].'" style="width: 98px; height: 60px; padding-left: -13px">
            </a>
        </div>
        <div class="col-8">
         <a href="video.php?video_id='.$videos[$index]["video_id"].'" style="color: white"><p style=" font-size: 14px; margin-bottom: 2px" title="'.$videos[$index]["title"].'">' . substr($videos[$index]["title"], 0, 23) . '...</p></a>
                    <p style=" font-size: 11px; margin-bottom: -1px">Uploaded '.$videos[$index]["stream_time"].' ago</p>
         <span style=" font-size: 11px; margin-bottom: -2px; margin-right: 10px"><i class="fas fa-eye"></i> <span style="color: #FFE985">'.$videos[$index]["viewer_cnt"].'</span></span>
          <span style="  font-size: 11px; margin-bottom: -2px; margin-right: 10px"><i class="fas fa-comment"></i> <span style="color: #85F6FF"> '.$comments.'</span></span>
          <span style=" font-size: 11px; margin-right: 10px"><i class="fas fa-user-plus"></i><span style="color: #85FFD1"> '.$followers.'</span></span>
        </div>';
            }
          }
            
            } 
            echo'        </div>';

          } else {
            //no video
                  echo'<a href="contentUpload.php?musician_id='.$_GET['musician_id'].'"><span class="see-all">Upload Videos <i class="fas fa-chevron-right"></i></span> </a>';
              echo'
              <h3 style="text-align: center; margin-top: 40px; margin-bottom: 1px;"><i class="fas fa-video" style="font-size: 50px; border-color:  #C76BFF;"></i></h3>
              <h3 style="text-align: center; margin-bottom: 2px;">No Videos</h3>
              <p style="margin-bottom: 45px; text-align: center; font-size: 13px">Videos that you upload will be seen here.</p>
              ';
          }
        
          ?>


        <!--music-->

          <?php 

            $servername = "localhost";
            $db_username = "root";
            $db_password = "";
            $database = "mellofi";
            $music = [];

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);

            $sql_content = "
                SELECT 
                * 
                FROM 
                `musician` 
                INNER JOIN 
                `music` 
                ON 
                `music`.musician_id = `musician`.musician_id 
                WHERE 
                `musician`.username = '".$_SESSION["username"]."'
                ORDER BY MUSIC_ID ASC
            ";

            $result_content = mysqli_query($conn, $sql_content);
            $count_content = mysqli_num_rows($result_content);

            while ($row_content = mysqli_fetch_assoc($result_content)) {
              array_push($music, $row_content);
            }

                  echo' <h6 style="margin-top: 30px">MUSIC</h6>';

            if ($count_content > 0) {
              //there is music
                  echo'<a href="contentUpload.php?musician_id='.$_GET['musician_id'].'"><span class="see-all">See All <i class="fas fa-chevron-right"></i></span> </a>';
               echo '<div class="row mt-3">';

                          for ($index = 0; $index < count($music); $index++) {

          if ($index <= 1) {
            if (strlen($music[$index]["title"]) <= 21) {
              //smol title 
                    echo '        
        <div class="col-4 mb-3">
            <a href="video.php?music_id='.$music[$index]["music_id"].'">
              <img src="upload/images/'.$music[$index]["album_art"].'" style="width: 98px; height: 60px; padding-left: -13px">
            </a>
        </div>
        <div class="col-8">
         <a href="video.php?music_id='.$music[$index]["music_id"].'" style="color: white"><p style=" font-size: 14px; margin-bottom: 2px">'.$music[$index]["title"].'</p></a>
                    <p style=" font-size: 11px; margin-bottom: -1px">Uploaded '.$music[$index]["upload_time"].' ago</p>
         <span style=" font-size: 11px; margin-bottom: -2px; margin-right: 10px"><i class="fas fa-eye"></i> <span style="color: #FFE985">0</span></span>
          <span style="  font-size: 11px; margin-bottom: -2px; margin-right: 10px"><i class="fas fa-comment"></i> <span style="color: #85F6FF"> 0</span></span>
          <span style=" font-size: 11px; margin-right: 10px"><i class="fas fa-user-plus"></i><span style="color: #85FFD1"> 0</span></span>
        </div>';
            }
            else {
              //big title

                 echo '        
        <div class="col-4 mb-3">
            <a href="video.php?music_id='.$music[$index]["music_id"].'">
              <img src="upload/images/'.$music[$index]["album_art"].'" style="width: 98px; height: 60px; padding-left: -13px">
            </a>
        </div>
        <div class="col-8">
         <a href="video.php?music_id='.$music[$index]["music_id"].'" style="color: white"><p style=" font-size: 14px; margin-bottom: 2px" title="'.$music[$index]["title"].'">' . substr($music[$index]["title"], 0, 23) . '...</p></a>
                    <p style=" font-size: 11px; margin-bottom: -1px">Uploaded '.$music[$index]["upload_time"].' ago</p>
         <span style=" font-size: 11px; margin-bottom: -2px; margin-right: 10px"><i class="fas fa-eye"></i> <span style="color: #FFE985">0</span></span>
          <span style="  font-size: 11px; margin-bottom: -2px; margin-right: 10px"><i class="fas fa-comment"></i> <span style="color: #85F6FF"> 0</span></span>
          <span style=" font-size: 11px; margin-right: 10px"><i class="fas fa-user-plus"></i><span style="color: #85FFD1"> 0</span></span>
        </div>';
            }

          }           
            }

            echo'  </div>';
            } else {
            //no music
                  echo'<a href="contentUpload.php?musician_id='.$_GET['musician_id'].'"><span class="see-all">Upload Music <i class="fas fa-chevron-right"></i></span> </a>';
            echo'
              <h3 style="text-align: center; margin-top: 40px; margin-bottom: 5px;"><i class="fas fa-headphones" style="font-size: 50px; border-color:  #C76BFF;"></i></h3>
              <h3 style="text-align: center; margin-bottom: 2px;">No Music</h3>
              <p style="margin-bottom: 45px; text-align: center; font-size: 13px">Music that you upload will be seen here.</p>
              ';
          }


          ?>
      </div>
    </div>
       

    <!--Followers-->
  <div style="width: 435px; height: 145px; background-color: #323235; margin-top: 525px; position: absolute; border-color: black; border-style: solid; border-width: 1px; text-align: center; border-radius: 10px;">
    <h2 style=" margin-top: 15px; margin-bottom: -1px; text-align: left; margin-left: 20px">FOLLOWERS</h2>
    <?php

            $servername = "localhost";
            $db_username = "root";
            $db_password = "";
            $database = "mellofi";
            $music = [];

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);

       $sql_followers = "
                 SELECT 
                  `followers`
                  FROM 
                  `musician`
                  WHERE 
                  `musician`.username = '".$_SESSION['username']."'
            ";

            $result_followers = mysqli_query($conn, $sql_followers);
            $row = mysqli_fetch_assoc($result_followers);

            echo'<h1 style="font-size: 50px;  margin-bottom: -5px; font-weight: bold; color: #EFC62E">'.$row["followers"].'</h1>
             <img src="https://nevagfx.files.wordpress.com/2017/07/img_08582.gif" style="width: 40px; margin-left: 200px; margin-top: -50px; position: absolute;">
              <span><span style="color: #D2A3FF">+'.$row["followers"].'</span> in the last month.</span>';
          
    ?>
  </div>

     <!--Subscribers-->

    <div style="width: 435px; height: 145px; background-color: #323235; margin-top: 680px; position: absolute; border-color: black; border-style: solid; border-width: 1px; text-align: center; border-radius: 10px;">
   <h2 style=" margin-top: 15px; margin-bottom: -1px; text-align: left; margin-left: 20px">SUBSCRIBERS</h2>

    <?php

            $servername = "localhost";
            $db_username = "root";
            $db_password = "";
            $database = "mellofi";
            $music = [];

            $conn = mysqli_connect($servername, $db_username, $db_password, $database);

       $sql_subscription = "
                 SELECT 
                  *
                  FROM 
                  `subscription` 
                  INNER JOIN 
                  `musician`
                  ON 
                  `musician`.musician_id = `subscription`.musician_id
                  WHERE 
                  `musician`.username = '".$_SESSION['username']."'
            ";

            $result_subscription = mysqli_query($conn, $sql_subscription);
            $subscription = mysqli_num_rows($result_subscription);

            echo'  
            <h1 style="font-size: 50px;  margin-bottom: -5px; font-weight: bold; color: #EFC62E">'.$subscription.'</h1>
            <img src="https://nevagfx.files.wordpress.com/2017/07/img_08582.gif" style="width: 40px; margin-left: 200px; margin-top: -50px; position: absolute;">
            <span><span style="color: #D2A3FF">+'.$subscription.'</span> in the last month.</span>';
          
    ?>

  

  </div>
   

  <!--Mellofi Steps-->

  <a href="https://www.youtube.com/watch?v=2b6_iDBU2wg" target="_blank" class="live-step">
  <div class="livestream-setup">
    <i class="fas fa-play-circle play-btn-steps"></i>
     <h3 style="text-align: left; margin-left: 20px; margin-top: 40px">Set up your livestream!</h3>
  </div>
  </a>

   <a href="https://www.youtube.com/watch?v=16EIoH6Q0gU" target="_blank" class="upload-step">
   <div class="upload-setup">
     <i class="fas fa-play-circle play-btn-steps"></i>
     <h3 style="text-align: left; margin-left: 20px; margin-top: 40px">Upload music and videos!</h3>
  </div>
 </a>

 <a href="https://www.youtube.com/watch?v=BL9galjJqHk" target="_blank" class="community-step">
   <div class="community-guide">
   <i class="fas fa-play-circle play-btn-steps"></i>
     <h3 style="text-align: left; margin-left: 20px; margin-top: 30px; font-size: 26px">Mellofi's Community Guidelines</h3>
  </div>
</a>

<a href="https://www.youtube.com/watch?v=nS-13-oxemk" target="_blank" class="terms-step">
  <div class="terms-cond">
     <i class="fas fa-play-circle play-btn-steps"></i>
     <h3 style="text-align: left; margin-left: 20px; margin-top: 40px;">Mellofi's Terms and Conditions</h3>
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


  
  </body>
</html>