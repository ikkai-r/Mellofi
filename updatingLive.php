<?php
  session_start();
  $username = $_SESSION['username'];
  $stream_id = $_POST['stream_id'];
  $price = $_POST['price'];
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
      `stream_id`= '".$stream_id."'
      ";

      if (mysqli_query($conn, $sql_delete)) {

         $genre = $_POST['genre-select'];
              
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

  }
 
  if ($_FILES['thumbnail']['name'] == '') {
    //if no image

     $sql_img = "
    SELECT
    *
    FROM
    `livestreams`
    WHERE
    `stream_id` = '".$stream_id."'
    ";

    $result_img = mysqli_query($conn, $sql_img);
    $row_img = mysqli_fetch_assoc($result_img);
    $thumbnail = $row_img['thumbnail'];
 
  } else {

  $thumbnail = $_FILES['thumbnail']['name'];
  $target = 'upload/images/' . $thumbnail;
  move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target);

  }

    $sql = "UPDATE livestreams
            SET
              title = '".$title."',
              price = '".$price."',
              thumbnail = '".$thumbnail."'
            WHERE
              stream_id = '".$stream_id."'

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