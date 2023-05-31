<?php
 session_start();

 $stream_id =  $_POST['stream_id'];
 $username = $_SESSION['username'];
 $status = $_POST['status'];
 $musician_id = $_POST['musician_id'];

 $servername = "localhost";
 $db_username = "root";
 $db_password = "";  
 $database = "mellofi";

 $conn = mysqli_connect($servername, $db_username, $db_password, $database);

 $message = mysqli_real_escape_string($conn, $_POST['chatmsg']);

 $sql = "INSERT INTO `chats`(
                `stream_id`, 
                `username`, 
                `message`,
                `status`
              ) VALUES (
                '".$stream_id."',
                '".$username."',
                '".$message."',
                '".$status."'
              )";


 if(mysqli_query($conn, $sql)){
    if ($status == "spotlight"){

        $sql_select = 
        "SELECT 
         spotlight_cnt 
         FROM 
         `subscription` 
         WHERE 
         `username` = '".$username."'
         AND 
         `musician_id` = '".$musician_id."'
         ";

          $result = mysqli_query($conn, $sql_select);
          $row = mysqli_fetch_assoc($result);
          $spotlight_cnt = $row['spotlight_cnt'];

         $sql_spotlight = "UPDATE 
                `subscription`
                    SET 
                `spotlight_cnt` =
              (
              '". $spotlight_cnt ."'
              )-1
              WHERE
               `username`= '".$username."'
                 AND 
         `musician_id` = '".$musician_id."'
              ";

        mysqli_query($conn, $sql_spotlight);
    }
 }
 mysqli_close($conn);

?>