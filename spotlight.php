<?php
 session_start();

 $stream_chat_id =  $_POST['stream_chat_id'];
 $username = $_SESSION['username'];
 $status = $_POST['status'];

 $servername = "localhost";
 $db_username = "root";
 $db_password = "";  
 $database = "mellofi";

 $conn = mysqli_connect($servername, $db_username, $db_password, $database);

 $message = mysqli_real_escape_string($conn, $_POST['chatmsg']);

 $sql = "INSERT INTO `chats`(
                `stream_chat_id`, 
                `username`, 
                `message`,
                `status`
              ) VALUES (
                '".$stream_chat_id."',
                '".$username."',
                '".$message."',
                '".$status."'
              )";

 mysqli_query($conn, $sql);
 mysqli_close($conn);

?>