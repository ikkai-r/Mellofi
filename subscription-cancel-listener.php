<?php 

	session_start();

		 $subscription_id = $_GET["subscription_id"];
       $username = $_SESSION["username"];
       $listener_id = $_GET["listener_id"];

         $servername = "localhost";
         $db_username = "root";
         $db_password = "";  
         $database = "mellofi";

         $conn = mysqli_connect($servername, $db_username, $db_password, $database);

         $sql_delete=
         "
         DELETE 
         FROM 
         `subscription`
         WHERE 
         `subscription_id` ='".$subscription_id."'
         AND 
         `username` = '".$username."'
         ";

         if (mysqli_query($conn, $sql_delete)) {
         	header("Location: listener-subscription.php?listener_id=".$listener_id."&success=true");
         } else {
         	header("Location: listener-subscription.php?listener_id=".$listener_id."&error=true");
         }
?>