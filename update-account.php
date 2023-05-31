<?php
  
  session_start();

         $servername = "localhost";
         $db_username = "root";
         $db_password = "";  
         $database = "mellofi";

         $conn = mysqli_connect($servername, $db_username, $db_password, $database);

         if ($_POST['username'] == '') {
            $username = mysqli_real_escape_string($conn, $_SESSION['username']);
         } else {
            $username = mysqli_real_escape_string($conn, $_POST['username']);
         }

         if ($_FILES['profileImg']['name'] == '') {

            $sql_profile =  "
              SELECT 
               *
              FROM 
               `musician`
              WHERE
               username =  '".$_SESSION["username"]."'
              ";

              $profile_result = mysqli_query($conn, $sql_profile);
              $profile_row = mysqli_fetch_assoc($profile_result);
              $profileImg = $profile_row["profile_pic"];
         } else {

            $profileImg = $_FILES['profileImg']['name'];
            $target = 'upload/images/' . $profileImg;
            move_uploaded_file($_FILES['profileImg']['tmp_name'], $target);
         }

         $bio = mysqli_real_escape_string($conn, $_POST['bio']);
         $type = $_POST['type'];

         $sql_musician_id =  "
          SELECT 
           *
          FROM 
           `musician`
           INNER JOIN 
           `users`
           ON 
           `musician`.username = `users`.username
          WHERE
           `users`.username =  '".$_SESSION["username"]."'
          ";

          $musician_id_result = mysqli_query($conn, $sql_musician_id);
          $musician_id_row = mysqli_fetch_assoc($musician_id_result);
          $musician_id = $musician_id_row["musician_id"];
          $user_id = $musician_id_row["user_id"];

         $sql_u = "
         SELECT 
         * 
         FROM 
         users 
         WHERE 
         username ='".$username."' 
         AND 
         username != '".$_SESSION["username"]."'
         ";
         $res_u = mysqli_query($conn, $sql_u);

         $success = null;
      
        if(mysqli_num_rows($res_u) > 0){
         header("Location: musician-settings.php?musician_id=".$musician_id."&username=taken");
        } else {
        
        $sql_musician = "
        UPDATE 
         `musician`
         SET
         `username` = '".$username."',
         `about` = '".$bio."',
         `profile_pic` = '".$profileImg."',
         `type` = '".$type."'
        WHERE
         musician_id =  '".$musician_id."'
        ";

        if(mysqli_query($conn, $sql_musician)){
          $sql_chat = "
          UPDATE 
          chats
          SET 
          username= '".$username."'
          WHERE 
          username = '".$_SESSION["username"]."'
          ";

          $sql_comment = "
          UPDATE 
          comments
          SET 
          username= '".$username."'
          WHERE 
          username = '".$_SESSION["username"]."'
          ";

          $sql_following = "
          UPDATE 
          following
          SET 
          username= '".$username."'
          WHERE 
          username = '".$_SESSION["username"]."'
          ";

          $sql_sub = "
          UPDATE 
          subscription
          SET 
          username= '".$username."'
          WHERE 
          username = '".$_SESSION["username"]."'
          ";

          mysqli_query($conn, $sql_chat);
          mysqli_query($conn, $sql_comment);
          mysqli_query($conn, $sql_following);
          mysqli_query($conn, $sql_sub);

          //SQL
           $sql = "
            UPDATE 
             users 
            SET 
             username='".$username."'
             WHERE 
             user_id = '".$user_id."'
                ";

                if (mysqli_query($conn, $sql)) {
                   $success = true;
                   $_SESSION["username"] = $username;

                    } 
}
        }
        


       mysqli_close($conn);
?>

<script>
  var success = "<?php echo $success; ?>";

    if (success == true){
     var musician_id = "<?php echo $musician_id ?>";
     window.location.href = "musician-settings.php?musician_id=" + musician_id;
}
</script>