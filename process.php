<?php
        session_start();

         $username =  $_SESSION['username'];

         $servername = "localhost";
         $db_username = "root";
         $db_password = "";  
         $database = "mellofi";

         $conn = mysqli_connect($servername, $db_username, $db_password, $database);

          //SQL
          $sql = "INSERT INTO `listener`(
                `username`
              ) VALUES (
                '".$username."'
              )";
      if (mysqli_query($conn, $sql)) {
        session_destroy();
        session_start();
        $_SESSION['isLogin'] = "true";
        $_SESSION['username'] = $username;
          } else {
         echo "Error. Please try again.";            
            }
            
       mysqli_close($conn);
          
?>

