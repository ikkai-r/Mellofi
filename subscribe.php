     <?php

      session_start();

              $username = $_SESSION["username"];
              $musician_id = $_POST["musician_id"];

               $subscription = [];

                $servername = "localhost";
                $db_username = "root";
                $db_password = "";
                $database = "mellofi";

                $conn = mysqli_connect($servername, $db_username, $db_password, $database);

                $sql_subscription = "
                   SELECT 
                   `subscription`.username
                   FROM 
                    subscription
                   INNER JOIN 
                    livestreams
                   ON 
                    `livestreams`.musician_id = '". $musician_id."'
                    WHERE
                    `subscription`.username = '". $username."'
                    AND
                    `subscription`.musician_id = '". $musician_id."'
                ";

                $result_subscription = mysqli_query($conn, $sql_subscription);
                $count_subscription = mysqli_num_rows($result_subscription);

                
                      if ($count_subscription > 0) {
                        //premium

                            $sql_value = "
                               SELECT 
                               `subscription`.username,
                               `subscription`.spotlight_cnt
                               FROM 
                                subscription
                               INNER JOIN 
                                livestreams
                               ON 
                                `livestreams`.musician_id = '". $musician_id."'
                                WHERE
                                `subscription`.username = '". $username."'
                                AND
                                `subscription`.musician_id = '". $musician_id."'
                            ";

                              $result_value = mysqli_query($conn, $sql_value);
                              $row = mysqli_fetch_assoc($result_value);
                              $spotlight_cnt = $row['spotlight_cnt'];

                              if ($spotlight_cnt > 0) {
                                   //w spotlight

                        echo '<input class="form-control form-control-sm" id="chatmsg" type="text" placeholder="Say something!" style="margin-left: -10px;">
                    <button type="button" id="chatBtn" style="margin-top: 9px; float: right; margin-right: 10px; ">Chat</button>
                       <button type="button" id="wowBtn" name="wowBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-surprise"></i></button>
                     <button type="button" id="hahaBtn" name="hahaBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-grin-squint-tears"></i></button>
                     <button type="button" id="sadBtn" name="sadBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-sad-cry"></i></button>
                      <button type="button" id="heartBtn" name="heartBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-heart"></i></button>
                    <button type="button" id="highlightBtn" style="margin-top: 9px; float: left; margin-left: -7px; "><i class="fas fa-star" style="margin-right: 3px"></i>'.$spotlight_cnt.' Spotlight</button>';

                              }

                    else if ($spotlight_cnt <= 0){
                         ///no spotlight
                        echo '<input class="form-control form-control-sm" id="chatmsg" name="chatmsg" type="text" placeholder="Say something!" style="margin-left: -10px;">
                    <button type="button" id="chatBtn" style="margin-top: 9px; float: right; margin-right: 10px; ">Chat</button>
                       <button type="button" id="wowBtn" name="wowBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-surprise"></i></button>
                     <button type="button" id="hahaBtn" name="hahaBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-grin-squint-tears"></i></button>
                     <button type="button" id="sadBtn" name="sadBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-sad-cry"></i></button>
                      <button type="button" id="heartBtn" name="heartBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-heart"></i></button>
                    ';
                      }

                      } 
                      else {
                        ///not premium
                        echo '<input class="form-control form-control-sm" id="chatmsg" name="chatmsg" type="text" placeholder="Say something!" style="margin-left: -10px;">
                    <button type="button" id="chatBtn" style="margin-top: 9px; float: right; margin-right: 10px; ">Chat</button>
                       <button type="button" id="wowBtn" name="wowBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-surprise"></i></button>
                     <button type="button" id="hahaBtn" name="hahaBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-grin-squint-tears"></i></button>
                     <button type="button" id="sadBtn" name="sadBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-sad-cry"></i></button>
                      <button type="button" id="heartBtn" name="heartBtn" style="margin-top: 9px; float: right; margin-right: 10px; "><i class="fas fa-heart"></i></button>
                    ';
                      }
                
               ?>