<?php 

	session_start();

		 $musician_id = $_GET["musician_id"];
		 $social_media_id = $_GET["social_id"];
         $servername = "localhost";
         $db_username = "root";
         $db_password = "";  
         $database = "mellofi";

         $conn = mysqli_connect($servername, $db_username, $db_password, $database);

         $sql_delete=
         "DELETE 
         FROM 
         `social_media`
         WHERE 
         `social_media_id` ='".$social_media_id."'
         AND 
         `musician_id` = '".$musician_id."'
         ";

         if (mysqli_query($conn, $sql_delete)) {
         	header("Location: musician-connections.php?musician_id=".$musician_id."");
         } else {
         	header("Location: musician-connections.php?musician_id=".$musician_id."&error=true");
         }
?>