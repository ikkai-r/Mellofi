  <?php
  session_start();

     $music_id = $_POST['music_id'];

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
                               `music` 
                               ON 
                               `music`.music_id = '".$music_id."' 
                               WHERE 
                               `music`.musician_id = `subscription`.musician_id 
                               AND 
                               username = '".$_SESSION['username']."'

                            ";

                              $sql_following = "
                              SELECT 
                                *
                              FROM 
                                `following`
                              INNER JOIN
                                `music`
                              ON 
                               `music`.music_id = '".$music_id."' 
                               WHERE 
                               `music`.musician_id = `following`.musician_id 
                               AND 
                               username = '".$_SESSION['username']."'
                            ";

                           $sql_musician = "
                            SELECT 
                            `musician_id`
                            FROM 
                            `music`
                            WHERE 
                             music_id = '". $music_id."' 
                            ";

                            $result_musician = mysqli_query($conn, $sql_musician);
                            $row_musician = mysqli_fetch_assoc($result_musician);
                            $musician_id = $row_musician["musician_id"];

                              $sql_pins = "
                                SELECT 
                                * 
                                FROM 
                                `pins`
                                WHERE 
                                 musician_id = '".$musician_id."'
                            ";

                            $result_pins = mysqli_query($conn, $sql_pins);
                            $count_pins = mysqli_num_rows($result_pins);

                            $result_subscription = mysqli_query($conn, $sql_subscription);
                            $count_subscription = mysqli_num_rows($result_subscription);

                            $result_following = mysqli_query($conn, $sql_following);
                            $count_following = mysqli_num_rows($result_following);

                        if ($count_pins > 0) {
                          //if there is pins

                            if ($count_subscription > 0) {
                                //if there is a subscription
                                  
                                   if ($count_following > 0) {
                                    //if following
                                        echo '  
                                         <h4>Want to listen more from this artist to support them?</h4>  
                                         <button class="btn" data-toggle="modal" id="unfollow" style="--border-color: white; " >Unfollow</button>';
                                   } else {
                                    //if not following
                                      echo' <h4>Want to listen more from this artist to support them?</h4>  
                                      <button class="btn" data-toggle="modal" id="follow" style="--border-color: white; " >Follow</button>';
                                   }
                          } else {
                              //if there is no subscription

                             if ($count_following > 0) {
                                    //if following
                                        echo '
                                         <h4>Want to listen more from this artist to support them?</h4>  
                         <button class="btn" data-toggle="modal" id="unfollow" style="--border-color: white; " >Unfollow</button>
                     <button class="btn" data-toggle="modal" data-target="#memberModal" style="--border-color: white; margin-right: -19px">be a member <span style="visibility: hidden">xxx</span> </button>';
                                   } else {
                                    //if not following
                                      echo'
                                      <h4>Want to listen more from this artist to support them?</h4>  
                             <button class="btn" data-toggle="modal" id="follow" style="--border-color: white;" >Follow</button>
                    <button class="btn" data-toggle="modal" data-target="#memberModal" style="--border-color: white; margin-right: -19px">be a member <span style="visibility: hidden">xxx</span> </button>';
                                   }
                          }

                        } else {

                                if ($count_following > 0) {
                                    //if following
                                        echo '
                                                           <h4>Want to listen more from this artist to support them?</h4>  
                          <button class="btn" data-toggle="modal" id="unfollow" style="--border-color: white; " >Unfollow</button>
                    <button class="btn" data-toggle="modal" data-target="#memberModal" style="--border-color: white; " >Be a member</button>';
                                   } else {
                                    //if not following
                                      echo'
                                                         <h4>Want to listen more from this artist to support them?</h4>  
                             <button class="btn" data-toggle="modal" id="follow" style="--border-color: white; " >Follow</button>
                      <button class="btn" data-toggle="modal" data-target="#memberModal" style="--border-color: white; margin-right: -19px">be a member <span style="visibility: hidden">xxx</span> </button>';
                                   }

                        }
                          
                    }   else {
                  //login false

                         $sql_musician = "
                            SELECT 
                            `musician_id`
                            FROM 
                            `music`
                            WHERE 
                             music_id = '". $music_id."' 
                            ";

                            $result_musician = mysqli_query($conn, $sql_musician);
                            $row_musician = mysqli_fetch_assoc($result_musician);
                            $musician_id = $row_musician["musician_id"];

                              $sql_pins = "
                                SELECT 
                                * 
                                FROM 
                                `pins`
                                WHERE 
                                 musician_id = '".$musician_id."'
                            ";

                            $result_pins = mysqli_query($conn, $sql_pins);
                            $count_pins = mysqli_num_rows($result_pins);

                            if ($count_pins > 0) {
                              //if there are pins

                               echo' 
                                                  <h4>Want to listen more from this artist to support them?</h4>  
                       <button class="btn" data-toggle="modal" data-target="#logInModal" style="--border-color: white; " >Follow</button>
                     <button class="btn" data-toggle="modal" data-target="#memberModal" style="--border-color: white; margin-right: -19px">be a member <span style="visibility: hidden">xxx</span> </button>';

                            } else {
                              //no pins
                                   echo'
                                   <h4>Want to listen more from this artist to support them?</h4>   
                    <button class="btn" data-toggle="modal" data-target="#logInModal" style="--border-color: white; " >Be a member</button>';
                            }                    
                   }
                } 
                  else {
                  //no login

                     $sql_musician = "
                            SELECT 
                            `musician_id`
                            FROM 
                            `music`
                            WHERE 
                             music_id = '". $music_id."' 
                            ";

                            $result_musician = mysqli_query($conn, $sql_musician);
                            $row_musician = mysqli_fetch_assoc($result_musician);
                            $musician_id = $row_musician["musician_id"];

                              $sql_pins = "
                                SELECT 
                                * 
                                FROM 
                                `pins`
                                WHERE 
                                 musician_id = '".$musician_id."'
                            ";

                            $result_pins = mysqli_query($conn, $sql_pins);
                            $count_pins = mysqli_num_rows($result_pins);
                            if ($count_pins > 0) {
                              //if there is pins
                                echo' 
                                <h4>Want to listen more from this artist to support them?</h4>  
                      <button class="btn" data-toggle="modal" data-target="#logInModal" style="--border-color: white; " >Follow</button>
                   <button class="btn" data-toggle="modal" data-target="#memberModal" style="--border-color: white; margin-right: -19px">be a member <span style="visibility: hidden">xxx</span> </button>';
                            } else {
                              //no pins
                                  echo' 
                                    <h4>Want to listen more from this artist to support them?</h4>  
                     <button class="btn" data-toggle="modal" data-target="#logInModal" style="--border-color: white; " >Follow</button>';
                            }
                 }
?>