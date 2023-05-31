<?php 

	session_start();

		   $musician_id = $_POST["musician_id"];
		   $username = $_SESSION["username"];
         $servername = "localhost";
         $db_username = "root";
         $db_password = "";  
         $database = "mellofi";
         $success = null;
         $conn = mysqli_connect($servername, $db_username, $db_password, $database);
         
         //chats
         $sql_chats =
         "DELETE 
         chats
         FROM 
         chats
         WHERE 
         `chats`.username = '".$username."'
         ";

           //comments
         $sql_comments =
         "DELETE 
         comments
         FROM 
         comments
         WHERE 
         `comments`.username = '".$username."'
         ";

         //concerts
         $sql_concerts =
         "DELETE 
         FROM 
         concerts
         WHERE 
         `concerts`.musician_id ='".$musician_id."'
         ";

         //pins
         $sql_pins =
         "DELETE 
         FROM 
         pins
         WHERE 
         `pins`.musician_id ='".$musician_id."'
         ";

          //socials
         $sql_socials =
         "DELETE 
         FROM 
         social_media
         WHERE 
         `social_media`.musician_id ='".$musician_id."'
         ";

         //ls, genre

         $sql_livestreams = "
         DELETE livestreams, genre
         FROM 
         livestreams
         INNER JOIN 
         genre
         ON 
         `genre`.stream_id = `livestreams`.stream_id
         WHERE 
          `livestreams`.musician_id ='".$musician_id."'
         ";

         //videos, genre
         $sql_videos =
         "DELETE videos, genre
          FROM 
         videos
         INNER JOIN 
         genre
         ON 
         `genre`.video_id = `videos`.video_id
         WHERE 
          `videos`.musician_id ='".$musician_id."'
         ";

         //music, genre
         $sql_music =
         " DELETE music, genre
          FROM 
         music
         INNER JOIN 
         genre
         ON 
         `genre`.music_id = `music`.music_id
         WHERE 
          `music`.musician_id ='".$musician_id."''
         ";

         //subscription
         $sql_subscription =
         "DELETE 
          FROM 
         subscription
         WHERE 
          username ='".$username."'
         ";

         mysqli_query($conn, $sql_chats);
         mysqli_query($conn, $sql_comments);
         mysqli_query($conn, $sql_pins);
         mysqli_query($conn, $sql_livestreams);
         mysqli_query($conn, $sql_videos);
         mysqli_query($conn, $sql_music);
         mysqli_query($conn, $sql_subscription);

         $sql_value = "
         SELECT 
          *
          FROM 
          `following`
          INNER JOIN 
          `musician`
          ON 
          `following`.musician_id = `musician`.musician_id
          WHERE 
          `following`.username= '". $username ."'
         ";

         $result = mysqli_query($conn, $sql_value);
         $following = [];
         while ($row = mysqli_fetch_assoc($result)) {
            array_push($following, $row);
         }

         for ($i=0; $i < count($following); $i++) { 

             $sql_unfollow = "
              UPDATE 
              `musician`
              SET
              `followers`
              =
              (
              '". $following[$i]["followers"] ."'
              )-1
              WHERE
               `musician_id`= '". $following[$i]["musician_id"] ."'
              "
              ;

            mysqli_query($conn, $sql_unfollow);
         }

            $sql_delete_unfollow = "
              DELETE FROM 
              `following` 
              WHERE 
               `username` = '". $username."'
               ";

               if(mysqli_query($conn, $sql_delete_unfollow)) {
                  
                  //musician
                     $sql_musician = "
                     DELETE 
                     FROM 
                     musician
                     WHERE 
                     username ='".$username."'
                     AND 
                     musician_id ='".$musician_id."'
                     ";

                  //users
                     $sql_user =
                     "DELETE 
                     FROM 
                     users
                     WHERE 
                     username ='".$username."'
                     ";

                     if(mysqli_query($conn, $sql_user) && mysqli_query($conn, $sql_musician)) {
                        $success = true;
                        session_destroy();  
                     } 
               }


         mysqli_close($conn);
      
?>

<script>
  var success = "<?php echo $success; ?>"
  if (success == true){
     setTimeout(function(){ window.location.href= 'index.php';}, 1500);
}
</script>