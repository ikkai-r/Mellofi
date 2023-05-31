<?php
 session_start();

 $video_id =  $_POST['video_id'];
 $username = $_SESSION['username'];

 $servername = "localhost";
 $db_username = "root";
 $db_password = "";  
 $database = "mellofi";

 $conn = mysqli_connect($servername, $db_username, $db_password, $database);

 $message = mysqli_real_escape_string($conn, $_POST['commentmsg']);

 $sql = "INSERT INTO `comments`(
                `video_id`, 
                `username`, 
                `message`
              ) VALUES (
                '".$video_id."',
                '".$username."',
                '".$message."'
              )";

 mysqli_query($conn, $sql);
 mysqli_close($conn);

?>