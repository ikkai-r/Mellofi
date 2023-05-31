<?php
 session_start();

       $musician_id = $_GET["musician_id"];
       $title =  $_POST['title'];
       $genre =  $_POST['genre-select'];
       $price =  strtolower($_POST['price']);
       $profileImg =  $_FILES["profileImg"]["name"];

       $servername = "localhost";
       $db_username = "root";
       $db_password = "";
       $database = "mellofi";

       $conn = mysqli_connect($servername, $db_username, $db_password, $database);


      $target = 'upload/images/' . $profileImg;
      move_uploaded_file($_FILES['profileImg']['tmp_name'], $target);


     $sql_stream = "
     SELECT 
     * 
     FROM 
     `livestreams`
     WHERE
     `musician_id` = '".$musician_id."'
     ";

     $result_musician = mysqli_query($conn, $sql_stream);
     $row_musician = mysqli_fetch_assoc($result_musician);
     $stream_id = $row_musician["stream_id"];
     $select = [];

      $sql = "
      UPDATE 
      `livestreams`
      SET
      `title` = '".$title."',
      `price`= '".$price."',
      `thumbnail`= '".$profileImg."'
      WHERE 
      `stream_id` = '".$stream_id."'
      ";

      if (mysqli_query($conn, $sql)){

      $sql_delete = "
      DELETE
      FROM
      `genre`
      WHERE 
      `stream_id`= '".$stream_id."'
      ";

      if (mysqli_query($conn, $sql_delete)) {
              
              foreach($genre as $value) {

          $sql_genre = "
           INSERT INTO 
           `genre`
           (
           `stream_id`,
           `genre`
           ) 
           VALUES
           (
           '".$stream_id."',
           '".$value."'
           )
           ";

      mysqli_query($conn, $sql_genre);

      }

      } else {
echo"Error.";
      } 

      } else {
echo"Error.";
      } 


mysqli_close($conn);


?>

