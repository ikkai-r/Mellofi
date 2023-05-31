<?php 

	session_start();

		    $musician_id = $_GET["musician_id"];
		    $flair_pin_src = $_FILES['pinsImg']['name'];
         $servername = "localhost";
         $db_username = "root";
         $db_password = "";  
         $database = "mellofi";

         $conn = mysqli_connect($servername, $db_username, $db_password, $database);

         $target = 'upload/images/' . $flair_pin_src;
         move_uploaded_file($_FILES['pinsImg']['tmp_name'], $target);

         $sql_add=
         "INSERT INTO 
         `pins`
         (
         `musician_id`,
         `flair_pin_src`
         )
          VALUES 
       	 (
       	 '".$musician_id."',
       	 '".$flair_pin_src."'
       	 )
         ";

         if (mysqli_query($conn, $sql_add)) {
         	header("Location: memberCustom.php?musician_id=".$musician_id."");
         } else {
         	header("Location: memberCustom.php?musician_id=".$musician_id."&error=true");
         }
?>