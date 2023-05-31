<?php 

	session_start();

		 $musician_id = $_GET["musician_id"];
		 $video_id = $_GET["video_id"];
         $servername = "localhost";
         $db_username = "root";
         $db_password = "";  
         $database = "mellofi";

         $conn = mysqli_connect($servername, $db_username, $db_password, $database);

         $sql_delete=
         "DELETE 
         FROM 
         `videos`
         WHERE 
         `video_id` ='".$video_id."'
         AND 
         `musician_id` = '".$musician_id."'
         ";

      if (mysqli_query($conn, $sql_delete)) {

            $sql_del =  
         "DELETE 
         FROM 
         `genre`
         WHERE 
         `video_id` ='".$video_id."'
         ";

         if (mysqli_query($conn, $sql_del)) {
            header("Location: contentUpload.php?musician_id=".$musician_id."");
         }else {
            header("Location: contentUpload.php?musician_id=".$musician_id."&error=true");
         }
            
         } else {
            header("Location: contentUpload.php?musician_id=".$musician_id."&error=true");
         }
?>