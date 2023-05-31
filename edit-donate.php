<?php 

	session_start();

		 $musician_id = $_POST["musician_id"];
		 $donate_link = $_POST["donate_link"];
		 $donate_type = $_POST["donate_type"];

         $servername = "localhost";
         $db_username = "root";
         $db_password = "";  
         $database = "mellofi";

         $conn = mysqli_connect($servername, $db_username, $db_password, $database);

         $sql_edit=
         "UPDATE
         `donate_accounts`
         SET
         `source` =  '".$donate_link."'
         WHERE 
          `type` = '".$donate_type."'
          AND
           `musician_id` = '".$musician_id."' 
         ";

         if (mysqli_query($conn, $sql_edit)) {
         	header("Location: musician-connections.php?musician_id=".$musician_id."");
           echo '<div class="alert-success mb-3 pt-2 pb-2 ml-3" style="border-radius: 5px; width: 700px; background-color: #9913F6; color: white; text-align: center">Updated successfully.</div>';
         } else {
         	header("Location: musician-connections.php?musician_id=".$musician_id."&error=true");
           echo '<div class="alert-success mb-3 pt-2 pb-2 ml-3" style="border-radius: 5px; width: 700px; background-color: #9913F6; color: white; text-align: center">Updated failed.</div>';
         }
?>