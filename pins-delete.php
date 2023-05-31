<?php 

	session_start();

		 $musician_id = $_GET["musician_id"];
		 $flair_pin_id = $_GET["pin_id"];
         $servername = "localhost";
         $db_username = "root";
         $db_password = "";  
         $database = "mellofi";

         $conn = mysqli_connect($servername, $db_username, $db_password, $database);
         
         $users = [];

         $sql_users = "
         SELECT
         * 
         FROM 
         `subscription`
         WHERE 
         `flair_pin_id` = '".$flair_pin_id."'
         ";

        

         $result_users = mysqli_query($conn, $sql_users);
         $count_users = mysqli_num_rows($result_users);
         while ($row_users = mysqli_fetch_assoc($result_users)) {
            array_push($users, $row_users);
         }


         for ($i = 0; $i < count($users); $i++) { 
            //while less users, insert pins

              $sql_pins = "
               SELECT 
               `flair_pin_id`
               FROM 
               `pins`
               WHERE 
               `flair_pin_id` != '".$flair_pin_id."'
               AND 
               `musician_id` = '".$musician_id."'
                ORDER BY 
                 RAND ( )
               ";

          $result = mysqli_query($conn, $sql_pins);
          $row = mysqli_fetch_assoc($result);
           
             $sql_insert = "
            UPDATE 
            subscription
            SET 
            flair_pin_id = '".$row["flair_pin_id"]."'
            WHERE 
            username = '".$users[$i]["username"]."'
            ";
            
            $result_insert = mysqli_query($conn, $sql_insert);

         }

         $sql_delete=
         "DELETE 
         FROM 
         pins
         WHERE 
         flair_pin_id ='".$flair_pin_id."'
         AND 
         musician_id = '".$musician_id."'
         ";

         if (mysqli_query($conn, $sql_delete)) {
             header("Location: memberCustom.php?musician_id=".$musician_id."");
         } else {
             header("Location: memberCustom.php?musician_id=".$musician_id."&error=true");
         }

?>