<?php 

	session_start();

		   $listener_id = $_POST["listener_id"];
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
         mysqli_query($conn, $sql_subscription);

         $sql_value = "
         SELECT 
          *
          FROM 
          `following`
          INNER JOIN 
          `musician`
          ON 
          `following`.listener_id = `musician`.listener_id
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
                  
                  //listener
                     $sql_listener = "
                     DELETE 
                     FROM 
                     listener
                     WHERE 
                     username ='".$username."'
                     AND 
                     listener_id ='".$listener_id."'
                     ";

                  //users
                     $sql_user =
                     "DELETE 
                     FROM 
                     users
                     WHERE 
                     username ='".$username."'
                     ";

                     if(mysqli_query($conn, $sql_user) && mysqli_query($conn, $sql_listener)) {
                        $success = true;
                        session_destroy();  
                     } 
               }


         mysqli_close($conn);
      
?>

<script>
  var success = "<?php echo $success; ?>"
  if (success == true){
     window.location.href= 'index.php?delete=success';
}
</script>