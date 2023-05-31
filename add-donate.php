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

         $sql_add=
         "INSERT INTO 
         `donate_accounts`
         (
         `musician_id`,
         `source`,
         `type`
         )
          VALUES 
       	 (
       	 '".$musician_id."',
       	 '".$donate_link."',
       	 '".$donate_type."'
       	 )
         ";

         if (mysqli_query($conn, $sql_add)) {
          header( "refresh:2;url=musician-connections.php?musician_id=".$musician_id."" );
         } else {
          header( "refresh:2;url=musician-connections.php?musician_id=".$musician_id."&error=true" );
         }
?>