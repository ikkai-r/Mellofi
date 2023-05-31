<?php
 session_start();


 $stream_id =  $_POST['stream_id'];
 $username = $_SESSION['username'];


 $servername = "localhost";
 $db_username = "root";
 $db_password = "";  
 $database = "mellofi";

 $conn = mysqli_connect($servername, $db_username, $db_password, $database);

      $sql = "SELECT `chats`.message, 
          `chats`.username, 
          `chats`.status,
          `users`.color 
         FROM 
          `chats` 
         INNER JOIN 
          `users` 
         ON 
          `chats`.username = `users`.username
         WHERE
          `chats`.stream_id = '".$stream_id."'
           ORDER BY 
            message_id ASC;
        ";

      $sql_musician = "      
              SELECT 
               musician_id
              FROM 
               livestreams
               WHERE 
               `livestreams`.stream_id = '". $stream_id."'";
 

        $result_musician = mysqli_query($conn, $sql_musician);
        $row = mysqli_fetch_assoc($result_musician);
        $musician_id = $row['musician_id'];

      $sql_artist = "
        SELECT 
        *
        FROM 
        musician
        WHERE
        musician_id = '".$musician_id."'
        ";

        $result_artist = mysqli_query($conn, $sql_artist);
        $row_artist = mysqli_fetch_assoc($result_artist);
        $username_artist = $row_artist["username"];


        $sql_subscription = "
               SELECT 
                   `subscription`.username
                   FROM 
                    subscription
                   INNER JOIN 
                    livestreams
                   ON 
                    `livestreams`.stream_id = '". $stream_id."'
                    WHERE
                    `subscription`.username = '". $username."'
                    AND
                    `subscription`.musician_id = '". $musician_id."'
                            ";

         $result_subscription = mysqli_query($conn, $sql_subscription);
         $count_subscription = mysqli_num_rows($result_subscription);

          $res = "";
          $result = mysqli_query($conn, $sql);

        if ($count_subscription > 0) {
          //premium

            if (mysqli_num_rows($result) > 0){
             while ($row = mysqli_fetch_assoc($result)) 
             {  if($row['status'] == 'normal'){
                  //normal chat 

                if ($row["username"] == $username_artist){
                            
                 $res = $res . '<p class="chats">';
                 $res = $res . '<span style="color:#'.$row['color'].'">';
                 $res = $res . '<img src="https://www.nicepng.com/png/full/46-464368_owner-discord-emoji-discord.png" style="width: 20px; margin-right: 5px">';
                 $res = $res . '<img src="https://i.pinimg.com/originals/0d/ed/94/0ded940b05f6c94bdd0566670bf14488.gif" style="width: 20px; margin-right: 5px">';
                 $res = $res . $row['username'];
                 $res = $res . '</span>: ';
                 $res = $res . $row["message"];
                 $res = $res . '</p>';
             } else {
                            $sql_pin = "
                              SELECT 
                              `pins`.flair_pin_src
                              FROM 
                              pins 
                              INNER JOIN 
                              `chats`
                              ON 
                              `chats`.username = '". $row['username']."'
                              INNER JOIN 
                              subscription
                              ON
                              `pins`.flair_pin_id = `subscription`.flair_pin_id
                              WHERE
                              `subscription`.username = '". $row['username']."'
                              AND 
                              `subscription`.musician_id = '". $musician_id. "'
                            ";

                            
                            $result_pin = mysqli_query($conn, $sql_pin);

                              if (mysqli_num_rows($result_pin) > 0)
                            {
                               //if assigned pin
                              $row_pin = mysqli_fetch_assoc($result_pin);
                              $pin = $row_pin['flair_pin_src'];
                            
                              $res = $res . '<p class="chats">';
                              $res = $res . '<span style="color:#'.$row['color'].'">';
                              $res = $res . '<img src="upload/images/'.$pin.'" style="width: 20px; margin-right: 5px">';
                              $res = $res . $row['username'];
                              $res = $res . '</span>: ';
                              $res = $res . $row["message"];
                              $res = $res . '</p>';
                            } else {
                              //if no assigned pin
                              $res = $res . '<p class="chats">';
                              $res = $res . '<span style="color:#'.$row['color'].'">';
                              $res = $res . $row['username'];
                              $res = $res . '</span>: ';
                              $res = $res . $row["message"];
                              $res = $res . '</p>';
                            }
                        }
                      }
                       
              else if ($row['status'] == 'spotlight') {
                  $res = $res . '<div style="width:  400px;  height: 30px; background-color: #61129A; margin-top: 20px; text-align: center; text-transform: uppercase; margin-left: 10px;">';
                  $res = $res . $row['username'];
                  $res = $res . '</div>';
                  $res = $res . '<div style="width:  400px;  height: 80px; background-color: #7F10D0; margin-left: 10px; margin-bottom: 15px">';
                  $res = $res . '<h4 style="margin-left: 10px; padding-top: 10px !important; text-align: center; margin-right: 10px;">';
                  $res = $res . $row["message"];
                  $res = $res . '</h4>';
                  $res = $res . '</div>';
             }

                }
          }
         
        } else {

           if (mysqli_num_rows($result) > 0){
               while ($row = mysqli_fetch_assoc($result)) 
               {  
                           if($row['status'] == 'normal'){
                  //normal chat 

                      if ($row["username"] == $username_artist){
                            
                 $res = $res . '<p class="chats">';
                 $res = $res . '<span style="color:#'.$row['color'].'">';
                 $res = $res . '<img src="https://www.nicepng.com/png/full/46-464368_owner-discord-emoji-discord.png" style="width: 20px; margin-right: 5px">';
                 $res = $res . '<img src="https://i.pinimg.com/originals/0d/ed/94/0ded940b05f6c94bdd0566670bf14488.gif" style="width: 20px; margin-right: 5px">';
                 $res = $res . $row['username'];
                 $res = $res . '</span>: ';
                 $res = $res . $row["message"];
                 $res = $res . '</p>';
             } else {
                        $sql_pin = "
                              SELECT 
                              `pins`.flair_pin_src
                              FROM 
                              pins 
                              INNER JOIN 
                              `chats`
                              ON 
                              `chats`.username = '". $row['username']."'
                              INNER JOIN 
                              subscription
                              ON
                              `pins`.flair_pin_id = `subscription`.flair_pin_id
                              WHERE
                              `subscription`.username = '". $row['username']."'
                              AND 
                              `subscription`.musician_id = '". $musician_id. "'
                            ";

                            
                            $result_pin = mysqli_query($conn, $sql_pin);

                              if (mysqli_num_rows($result_pin) > 0)
                            {
                               //if assigned pin
                              $row_pin = mysqli_fetch_assoc($result_pin);
                              $pin = $row_pin['flair_pin_src'];
                            
                              $res = $res . '<p class="chats">';
                              $res = $res . '<span style="color:#'.$row['color'].'">';
                              $res = $res . '<img src="upload/images/'.$pin.'" style="width: 20px; margin-right: 5px">';
                              $res = $res . $row['username'];
                              $res = $res . '</span>: ';
                              $res = $res . $row["message"];
                              $res = $res . '</p>';
                            } else {
                              //if no assigned pin
                              $res = $res . '<p class="chats">';
                              $res = $res . '<span style="color:#'.$row['color'].'">';
                              $res = $res . $row['username'];
                              $res = $res . '</span>: ';
                              $res = $res . $row["message"];
                              $res = $res . '</p>';
                            }
             }

                  
                        }

                  }
            }

        }
  

  	echo $res;

  mysqli_close($conn);

?>