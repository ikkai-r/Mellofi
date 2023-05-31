<?php
 session_start();


 $musician_id =  $_POST['musician_id'];
 $clicked_pin = $_POST['clicked_pin'];


 $servername = "localhost";
 $db_username = "root";
 $db_password = "";  
 $database = "mellofi";

 $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql = "
        SELECT 
          *
         FROM 
          `pins` 
         WHERE
          flair_pin_id = '".$clicked_pin."'
        ";

          $res = "";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);

                  $res = $res . '<img src="upload/images/'.$row["flair_pin_src"].'" style="width: 30px;  margin-right: 7px">';

  

  	echo $res;

  mysqli_close($conn);

?>