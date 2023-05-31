<?php
session_start();
    
     $musician_id = $_POST['musician_id'];
     $username = $_POST['username'];
     $music_id = $_POST['music_id'];
     $video_id = $_POST['video_id'];
     $stream_id = $_POST['stream_id'];

     $servername = "localhost";
     $db_username = "root";
     $db_password = "";  
     $database = "mellofi";

     $conn = mysqli_connect($servername, $db_username, $db_password, $database);


     $sql = "
      INSERT INTO `following`
      (
      `musician_id`, 
      `username`,
      `music_id`,
      `video_id`,
      `stream_id`
      ) 
      VALUES 
      (
      '". $musician_id ."',
      '". $username ."',
      '". $music_id ."',
      '". $video_id ."',
      '". $stream_id ."'
      )
      ";

     if (mysqli_query($conn, $sql)) {
    
        $sql_value = "
          SELECT 
          `followers`
          FROM 
          `musician`
          WHERE 
          `musician_id`= '". $musician_id ."'
          ";

          $result = mysqli_query($conn, $sql_value);
          $row = mysqli_fetch_assoc($result);
          $followers = $row['followers'];

            $sql_follow = "
              UPDATE 
              `musician`
              SET
              `followers`
              =
              (
              '". $followers ."'
              )+1
              WHERE
               `musician_id`= '". $musician_id ."'
              "
              ;

              if (mysqli_query($conn, $sql_follow)) {
                echo "Success";
              } else {
                 echo "Error. Please try again.";   
              }

          } else {
         echo "Error. Please try again.";            
            }
            
       mysqli_close($conn);
?>