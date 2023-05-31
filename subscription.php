<?php
session_start();
    
     $musician_id = $_POST['musician_id'];
     $username = $_POST['username'];
     $music_id = $_POST['music_id'];
     $stream_id = $_POST['stream_id'];
     $video_id = $_POST['video_id'];

     $servername = "localhost";
     $db_username = "root";
     $db_password = "";  
     $database = "mellofi";

     $conn = mysqli_connect($servername, $db_username, $db_password, $database);

       $sql_flair = "
          SELECT 
          flair_pin_id
          FROM 
          pins 
          WHERE 
          musician_id = '".$musician_id."'
          ORDER BY RAND ()
          LIMIT 1
              ";

          $result_flair = mysqli_query($conn, $sql_flair);
          $row_flair = mysqli_fetch_assoc($result_flair);
          $flair = $row_flair['flair_pin_id'];

         $sql = "
          INSERT INTO `subscription`
          (
          `musician_id`, 
          `username`,
          `spotlight_cnt`,
          `flair_pin_id`,
          `stream_id`,
          `video_id`,
          `music_id`
          ) 
          VALUES 
          (
          '". $musician_id ."',
          '". $username ."',
          '10',
          '". $flair ."',
          '". $stream_id ."',
          '". $video_id ."',
          '". $music_id ."'
          )
          ";

     if (mysqli_query($conn, $sql)) {
          echo "Success";
          } else {
         echo "Error. Please try again.";            
            }
            
       mysqli_close($conn);
?>