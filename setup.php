<?php
 session_start();


 $profileImg = $_FILES['profileImg']['name'];
 $username = $_SESSION['username'];

 $servername = "localhost";
 $db_username = "root";
 $db_password = "";  
 $database = "mellofi";

 $conn = mysqli_connect($servername, $db_username, $db_password, $database);

 $target = 'upload/images/' . $profileImg;
  move_uploaded_file($_FILES['profileImg']['tmp_name'], $target);

  $sql = "INSERT INTO `musician`(
          `username`, 
          `profile_pic`
        ) VALUES (
          '".$username."',
          '".$profileImg."'
        )";

 if (mysqli_query($conn, $sql)) {
  header("Location: choose.php");
  } else {
    header("Location: index.php?error=true");
  }

  mysqli_close($conn);

?>