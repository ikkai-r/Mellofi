<?php
session_start();

     $stream_id = $_POST['stream_id'];

     $servername = "localhost";
     $db_username = "root";
     $db_password = "";  
     $database = "mellofi";

     $conn = mysqli_connect($servername, $db_username, $db_password, $database);


      if (isset($_SESSION['isLogin'])) {
                  //if there is login
                   if ($_SESSION['isLogin'] == "true") {
                    //if login true


                      //if there is subscription

                           $subscription = [];
                           $following = [];


                             $sql_subscription = "
                               SELECT 
                               * 
                               FROM 
                               `subscription` 
                               INNER JOIN 
                               `livestreams` 
                               ON 
                               `livestreams`.stream_id = '". $stream_id."' 
                               WHERE 
                               `livestreams`.musician_id = `subscription`.musician_id 
                               AND 
                               username = '".$_SESSION['username']."'

                            ";

                              $sql_following = "
                              SELECT 
                                *
                              FROM 
                                `following`
                              INNER JOIN
                                `livestreams`
                              ON 
                               `livestreams`.stream_id = '". $stream_id."' 
                               WHERE 
                               `livestreams`.musician_id = `following`.musician_id 
                               AND 
                               username = '".$_SESSION['username']."'
                            ";

                         
                            $result_subscription = mysqli_query($conn, $sql_subscription);
                            $count_subscription = mysqli_num_rows($result_subscription);

                            $result_following = mysqli_query($conn, $sql_following);
                            $count_following = mysqli_num_rows($result_following);
                            if ($count_subscription > 0) {
                                //if there is a subscription
                                  
                                   if ($count_following > 0) {
                                    //if following
                                        echo '<button class="list-inline-item btn" id="unfollow" style="--border-color: white" data-action="unfollow">Unfollow</button>';
                                   } else {
                                    //if not following
                                      echo'<button class="list-inline-item btn" id="follow" style="--border-color: white" >Follow</button>';
                                   }
                          } else {
                              //if there is no subscription

                             if ($count_following > 0) {
                                    //if following
                                        echo '
                          <button class="list-inline-item btn" style="--border-color: white" id="unfollow" data-action="unfollow">Unfollow</button>
                            <button class="list-inline-item btn" data-toggle="modal" data-target="#memberModal" style="--border-color: white">Be a member</button>';
                                   } else {
                                    //if not following
                                      echo'
                          <button class="list-inline-item btn" style="--border-color: white" id="follow">Follow</button>
                            <button class="list-inline-item btn" data-toggle="modal" data-target="#memberModal" style="--border-color: white">Be a member</button>';
                                   }
                          }
                    }   else {
                  //login false
                     echo' 
                     <button class="list-inline-item btn" data-toggle="modal" data-target="#logInModal" style="--border-color: white">Follow</button>
                    <button class="list-inline-item btn" data-toggle="modal" data-target="#logInModal" style="--border-color: white">Be a member</button>';
                   }
                } 
                  else {
                  //no login
                   echo' 
                     <button class="list-inline-item btn" data-toggle="modal" data-target="#logInModal" style="--border-color: white">Follow</button>
                    <button class="list-inline-item btn" data-toggle="modal" data-target="#logInModal" style="--border-color: white">Be a member</button>';
                 }

?>