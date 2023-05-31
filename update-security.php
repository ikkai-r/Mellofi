<?php
  
  session_start();

         $servername = "localhost";
         $db_username = "root";
         $db_password = "";  
         $database = "mellofi";

         $conn = mysqli_connect($servername, $db_username, $db_password, $database);

         $sql_users =  "
          SELECT 
           *
          FROM 
           `users`
          WHERE
           username =  '".$_SESSION["username"]."'
          ";

          $users_result = mysqli_query($conn, $sql_users);
          $users_row = mysqli_fetch_assoc($users_result);
          $user_id = $users_row["user_id"];
          $user_email = $users_row["email"];
          $user_password = $users_row["password"];

               if ($_POST["currPass"] == '') {
                  $sql_users =  "
                      SELECT 
                       *
                      FROM 
                       `users`
                      WHERE
                       username =  '".$_SESSION["username"]."'
                      ";

                      $users_result = mysqli_query($conn, $sql_users);
                      $users_row = mysqli_fetch_assoc($users_result);
                      $user_password = $users_row["password"];
                      $currPass = $user_password;
                } else {
                      $currPass = md5($_POST["currPass"]); 
                    }
  
        
              if ($_POST["newPass"] == '') {
                     $sql_users =  "
                      SELECT 
                       *
                      FROM 
                       `users`
                      WHERE
                       username =  '".$_SESSION["username"]."'
                      ";

                      $users_result = mysqli_query($conn, $sql_users);
                      $users_row = mysqli_fetch_assoc($users_result);
                      $user_password = $users_row["password"];

                      $newPass = $user_password;
                  } else {
                      $newPass = md5($_POST["newPass"]); 
                  }


          $sql_musician = "
          SELECT
          musician_id
          FROM 
          `musician`
          WHERE 
          username = '".$_SESSION["username"]."'
          ";

          $result_musician = mysqli_query($conn, $sql_musician);
          $row_musician = mysqli_fetch_assoc($result_musician);
          $musician_id = $row_musician["musician_id"];
           

          if ($_POST["email"] == '') {
            $email = $user_email;
          } else {
            $email = $_POST["email"]; 
          }
          

         $sql_e = "
         SELECT 
         * 
         FROM 
         users 
         WHERE 
         email ='".$email."' 
         AND 
         email != '".$user_email."'
         ";

         $res_e = mysqli_query($conn, $sql_e);

         $success = null;
      
        if(mysqli_num_rows($res_e) > 0){
          header("Location: musician-security.php?musician_id=".$musician_id."&email=taken");
        } else if ($currPass != $user_password){
           header("Location: musician-security.php?musician_id=".$musician_id."&match=false");
        } else if ($currPass == $user_password && mysqli_num_rows($res_e) <= 0){   
          
          $sql_user = "
          UPDATE 
           `users`
           SET
           `email` = '".$email."',
           `password` = '".$newPass."'
          WHERE
           user_id =  '".$user_id."'
          ";

          if(mysqli_query($conn, $sql_user)){
            $success = true;
          }
}

       mysqli_close($conn);
?>

<script>
  var success = "<?php echo $success; ?>";

    if (success == true){
     var musician_id = "<?php echo $musician_id ?>";
     window.location.href = "musician-security.php?musician_id=" + musician_id + "&update=success"; 
    
}
</script>