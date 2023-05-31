<?php 

	session_start();

		 $musician_id = $_POST["musician_id"];
       $payout = $_POST["payout"];
       $success = null;

         $servername = "localhost";
         $db_username = "root";
         $db_password = "";  
         $database = "mellofi";

         $conn = mysqli_connect($servername, $db_username, $db_password, $database);

         $sql_payout=
         "UPDATE
          `payout_accounts` 
          SET 
         `payout_method` = '".$payout."'
         WHERE 
         `musician_id` =  '".$musician_id."'
         ";

         if (mysqli_query($conn, $sql_payout)) {
         	header("Location: musician-connections.php?musician_id=".$musician_id."&success=true");
            $success = true;

         } else {
         	header("Location: musician-connections.php?musician_id=".$musician_id."&error=true");
         }
?>
