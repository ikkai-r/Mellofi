<?php
  session_start();
  $username = $_SESSION['username'];
  $title = $_POST['title'];
  $price = $_POST['price'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $file = $_FILES['file_src']['name'];
  $file_src = str_ireplace(" ", "_", $file);
  $final_date = str_ireplace("-", ".", $date);
  $final_time = date('g:i A', strtotime($time));
  $newTime = str_ireplace(":", " ", $final_time);
  $new_time = explode(" ", $newTime);



  //1. Setup Database connection
  $servername = "localhost";
  $db_username = "root";
  $db_password = ""; 
  $database = "mellofi";

  $conn = mysqli_connect($servername, $db_username, $db_password, $database);

  $target = 'upload/images/' . $file_src;
  move_uploaded_file($_FILES['file_src']['tmp_name'], $target);

  //2. Insert SQL
  $sql_id = "SELECT
            musician_id 
            FROM 
            musician
            WHERE username = '".$username."'
";

  $result =  mysqli_query($conn, $sql_id);
  $row = mysqli_fetch_assoc($result);
  $musician_id = $row['musician_id'];

    $sql = "INSERT INTO concerts(
          title, 
          price, 
          date,
          time,
          file_src,
          status,
          musician_id
        ) VALUES (
          '".$title."',
          '".$price."',
          '".$final_date."',
          '".$new_time[0]. $new_time[2]."',
          '".$file_src."',
          'upcoming',
          '".$musician_id."' 
        )";

  //3. Execute SQL
  if (mysqli_query($conn, $sql)) {
        header('Location: profile.php?musician_id='.$musician_id.'&schedule=show');
  } else {
    echo mysqli_error($conn);
  }
  //.4 Closing Database Connection
  mysqli_close($conn);
?>