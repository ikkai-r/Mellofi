<?php
 session_start();


 $video_id =  $_POST['video_id'];
 $username = $_SESSION["username"];

 $servername = "localhost";
 $db_username = "root";
 $db_password = "";  
 $database = "mellofi";

 $conn = mysqli_connect($servername, $db_username, $db_password, $database);

 $sql = "SELECT `comments`.message, 
          `comments`.username, 
          `users`.color 
         FROM 
          `comments` 
         INNER JOIN 
          `users` 
         ON 
          `comments`.username = `users`.username
         WHERE
          `comments`.video_id = '".$video_id."'
         ORDER BY 
        comment_id ASC;
        ";

  $sql_musician = "      
              SELECT 
               musician_id
              FROM 
               videos
               WHERE 
               `videos`.video_id = '". $video_id."'";
 

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
                    videos
                   ON 
                    `videos`.video_id = '". $video_id."'
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
             {  
                  //normal chat 
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
         
        } else {

           if (mysqli_num_rows($result) > 0){
               while ($row = mysqli_fetch_assoc($result)) 
               {  
                  
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
             } else {   $sql_pin = "
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
  

    echo $res;

  mysqli_close($conn);

?>