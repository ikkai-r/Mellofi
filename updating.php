<?php
  session_start();
  $username = $_SESSION['username'];
  $concert_id = $_POST['concert_id'];
  $price = $_POST['price'];


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

  if ($_POST['title'] == '') {
    //if no title
    $sql_title = "
    SELECT
    *
    FROM
    `concerts`
    WHERE
    `concert_id` = '".$concert_id."'
    ";

    $result_title = mysqli_query($conn, $sql_title);
    $row_title = mysqli_fetch_assoc($result_title);
    $title = $row_title['title'];
  } else {
    $title = $_POST['title'];
  }

  if ($_POST['date'] == '') {
    //if no date
    $sql_date = "
    SELECT
    *
    FROM
    `concerts`
    WHERE
    `concert_id` = '".$concert_id."'
    ";

    $result_date = mysqli_query($conn, $sql_date);
    $row_date = mysqli_fetch_assoc($result_date);
    $final_date = $row_date['date'];
  } else {
    $date = $_POST["date"];
    $final_date = str_ireplace("-", ".", $date);
  }

  if ($_FILES['file_src']['name'] == '') {
    //if no image

     $sql_img = "
    SELECT
    *
    FROM
    `concerts`
    WHERE
    `concert_id` = '".$concert_id."'
    ";

    $result_img = mysqli_query($conn, $sql_img);
    $row_img = mysqli_fetch_assoc($result_img);
    $file_src = $row_img['file_src'];
  } else {

    $file = $_FILES['file_src']['name'];
    $file_src = str_ireplace(" ", "_", $file);
    $target = 'upload/images/' . $file_src;
    move_uploaded_file($_FILES['file_src']['tmp_name'], $target);

  }

  if ($_POST["time"] == '') {
    //if no time
    $sql_time = "
    SELECT
    *
    FROM
    `concerts`
    WHERE
    `concert_id` = '".$concert_id."'
    ";

    $result_time = mysqli_query($conn, $sql_time);
    $row_time = mysqli_fetch_assoc($result_time);
    $time = $row_time['time'];


    $sql = "UPDATE concerts
            SET
              title = '".$title."',
              price = '".$price."',
              date = '".$final_date."',
              time = '".$time."',
              file_src = '".$file_src."'
            WHERE
              concert_id = '".$concert_id."'

        ";

  //3. Execute SQL
  if (mysqli_query($conn, $sql)) {
         header('Location: schedule.php?musician_id='.$musician_id.'');
  } else {
    echo mysqli_error($conn);
  }

  } else {

  $time = $_POST['time'];
  $final_time = date('g:i A', strtotime($time));
  $newTime = str_ireplace(":", " ", $final_time);
  $new_time = explode(" ", $newTime);

    $sql = "UPDATE concerts
            SET
              title = '".$title."',
              price = '".$price."',
              date = '".$final_date."',
              time = '".$new_time[0]. $new_time[2]."',
              file_src = '".$file_src."'
            WHERE
              concert_id = '".$concert_id."'

        ";

  //3. Execute SQL
  if (mysqli_query($conn, $sql)) {
         header('Location: schedule.php?musician_id='.$musician_id.'');
  } else {
    echo mysqli_error($conn);
  }
  }

  //.4 Closing Database Connection
  mysqli_close($conn);
?>