<?php
 session_start();


       $stream_id =  $_POST['stream_id'];
       $username = $_SESSION['username'];

       $servername = "localhost";
       $db_username = "root";
       $db_password = "";  
       $database = "mellofi";

       $conn = mysqli_connect($servername, $db_username, $db_password, $database);
       
       $sql_musician = "
       SELECT 
       * 
       FROM 
       livestreams
       WHERE 
       stream_id = '".$stream_id."'
       ";

       $result_musician = mysqli_query($conn, $sql_musician);
       $row = mysqli_fetch_assoc($result_musician);
       $musician_id = $row['musician_id'];

      $sql = "      
        SELECT 
        *
        FROM 
        following
        WHERE 
        stream_id = '". $stream_id."'
        AND 
        musician_id = '".$musician_id."'
               ";

      $result = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($result);
      echo $count;
        

  mysqli_close($conn);

?>