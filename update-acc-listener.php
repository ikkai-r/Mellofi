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

         $sql_listener_id =  "
          SELECT 
           *
          FROM 
           `listener`
           INNER JOIN 
           `users`
           ON 
           `listener`.username = `users`.username
          WHERE
           `users`.username =  '".$_SESSION["username"]."'
          ";

          $listener_id_result = mysqli_query($conn, $sql_listener_id);
          $listener_id_row = mysqli_fetch_assoc($listener_id_result);
          $listener_id = $listener_id_row["listener_id"];
          $user_id = $listener_id_row["user_id"];
          $user_email = $listener_id_row["email"];
          $user_password = $listener_id_row["password"];

          //if current password is none
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
  
         //if new password is none
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

        //if email none
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

  
         $res_e = mysqli_query($conn, $sql_e);
         $res_u = mysqli_query($conn, $sql_u);

      
        if(mysqli_num_rows($res_u) > 0){
         header("Location: listener-settings.php?listener_id=".$listener_id."&username=taken");
        }else if(mysqli_num_rows($res_e) > 0){
          header("Location: listener-settings.php?listener_id=".$listener_id."&email=taken");
        } else if ($currPass != $user_password){
           header("Location: listener-settings.php?listener_id=".$listener_id."&match=false");
        } else if ($currPass == $user_password && mysqli_num_rows($res_e) <= 0 && mysqli_num_rows($res_u) <= 0){
               
        $sql_listener = "
        UPDATE 
         `listener`
         SET
         `username` = '".$username."'
        WHERE
         listener_id =  '".$listener_id."'
        ";

        if(mysqli_query($conn, $sql_listener)){
          
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
             username='".$username."',
             email = '".$email."',
             password = '".$newPass."'
             WHERE 
             user_id = '".$user_id."'
                ";

                if (mysqli_query($conn, $sql)) {
                   $_SESSION["username"] = $username;
                   header("Location: listener-settings.php?listener_id=".$listener_id."&update=success");
                    }  else {
                      header("Location: listener-settings.php?listener_id=".$listener_id."&update=failed");
                    }

        }
      }
        


       mysqli_close($conn);
?>
