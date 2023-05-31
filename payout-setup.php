<?php 

	session_start();

		 $musician_id = $_POST["musician_id"];
       $payout = $_POST["payout"];

         $servername = "localhost";
         $db_username = "root";
         $db_password = "";  
         $database = "mellofi";

         $conn = mysqli_connect($servername, $db_username, $db_password, $database);

         $sql_payout=
         "INSERT INTO 
          `payout_accounts` 
         (
         `payout_method`, 
         `musician_id`
         ) 
         VALUES 
         (
         '".$payout."',
         '".$musician_id."'
         )
         ";

         if (mysqli_query($conn, $sql_payout)) {
         	header("Location: musician-connections.php?musician_id=".$musician_id."&success=true");
         } else {
         	header("Location: musician-connections.php?musician_id=".$musician_id."&error=true");
         }
?>