<?php
  session_start();
  $username = $_SESSION['username'];
  $music_id = $_POST['music_id'];
  $title = $_POST['title']; 
  



  //1. Setup Database connection
  $servername = "localhost";
  $db_username = "root";
  $db_password = ""; 
  $database = "mellofi";

  $conn = mysqli_connect($servername, $db_username, $db_password, $database);

   //2. Insert SQL
  $sql_musician_id = "SELECT
            musician_id 
            FROM 
            musician
            WHERE username = '".$username."'
";

  $musician_result =  mysqli_query($conn, $sql_musician_id,);
  $musician_row = mysqli_fetch_assoc($musician_result);
  $musician_id = $musician_row['musician_id'];

  
   if($_POST['genre-select'] != ''){

        $sql_delete = "
      DELETE
      FROM
      `genre`
      WHERE 
      `music_id`= '".$music_id."'
      ";

      if (mysqli_query($conn, $sql_delete)) {

         $genre = $_POST['genre-select'];
              
        foreach($genre as $value) {

          $sql_genre = "
           INSERT INTO 
           `genre`
           (
           `music_id`,
           `genre`
           ) 
           VALUES
           (
           '".$music_id."',
           '".$value."'
           )
           ";

      mysqli_query($conn, $sql_genre);

      }

      } else {
echo"Error.";
      } 

  }

  if ($_FILES['album_art']['name'] == '') {
    //if no image

     $sql_img = "
    SELECT
    *
    FROM
    `music`
    WHERE
    `music_id` = '".$music_id."'
    ";

    $result_img = mysqli_query($conn, $sql_img);
    $row_img = mysqli_fetch_assoc($result_img);
    $album_art = $row_img['album_art'];
  } else {

  $album_art = $_FILES['album_art']['name'];
  $target = 'upload/images/' . $album_art;
  move_uploaded_file($_FILES['album_art']['tmp_name'], $target);

  }

    $sql = "UPDATE music
            SET
              title = '".$title."',
              album_art = '".$album_art."'
            WHERE
              music_id = '".$music_id."'

        ";

 

  

  //3. Execute SQL
  if (mysqli_query($conn, $sql)) {
         header('Location: contentUpload.php?musician_id='.$musician_id.'');
  } else {
    echo mysqli_error($conn);
  }
  

  //.4 Closing Database Connection
  mysqli_close($conn);
?>