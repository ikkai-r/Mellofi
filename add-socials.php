<?php 

	session_start();

		 $musician_id = $_POST["musician_id"];
		 $social_media_link = $_POST["social_media_link"];
		 $social_media = strtolower($_POST["social_media"]);
         $servername = "localhost";
         $db_username = "root";
         $db_password = "";  
         $database = "mellofi";

         $conn = mysqli_connect($servername, $db_username, $db_password, $database);

         $sql_add=
         "INSERT INTO 
         `social_media`
         (
         `musician_id`,
         `link`,
         `type`
         )
          VALUES 
       	 (
       	 '".$musician_id."',
       	 '".$social_media_link."',
       	 '".$social_media."'
       	 )
         ";

         if (mysqli_query($conn, $sql_add)) {
           header( "refresh:2;url=musician-connections.php?musician_id=".$musician_id."" );
         } else {
         	 header( "refresh:2;url=musician-connections.php?musician_id=".$musician_id."&error=true" );
         }
?>