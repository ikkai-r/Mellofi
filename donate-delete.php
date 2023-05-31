<?php 

	session_start();

		 $musician_id = $_GET["musician_id"];
		 $type = $_GET["donate_type"];
         $servername = "localhost";
         $db_username = "root";
         $db_password = "";  
         $database = "mellofi";

         $conn = mysqli_connect($servername, $db_username, $db_password, $database);

         $sql_delete=
         "DELETE 
         FROM 
         `donate_accounts`
         WHERE 
         `type` ='".$type."'
         AND 
         `musician_id` = '".$musician_id."'
         ";

         if (mysqli_query($conn, $sql_delete)) {
         	header("Location: musician-connections.php?musician_id=".$musician_id."");
         } else {
         	header("Location: musician-connections.php?musician_id=".$musician_id."&error=true");
         }
?>