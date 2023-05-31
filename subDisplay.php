  <?php
  session_start();
 $musician_id =  $_POST['musician_id'];

 $servername = "localhost";
 $db_username = "root";
 $db_password = "";  
 $database = "mellofi";

 $conn = mysqli_connect($servername, $db_username, $db_password, $database);

 $sql = "SELECT 
          `subscription`.username,
          `users`.color,
          `pins`.flair_pin_src
         FROM 
          `subscription` 
         INNER JOIN 
          `users` 
         ON 
          `subscription`.username = `users`.username
         INNER JOIN 
         `pins`
         ON 
         `pins`.flair_pin_id = `subscription`.flair_pin_id
         WHERE
          `subscription`.musician_id = '".$musician_id."'
          ORDER BY `subscription`.subscription_id DESC
          LIMIT 8

        ";

          $res = "";
          $result = mysqli_query($conn, $sql);
          $count = mysqli_num_rows($result);

        if ($count > 0) {
          //if there is sub
                while ($row=mysqli_fetch_assoc($result)) {
          $res = $res . ' <p style=" font-size: 16px; margin-left: 10px; background-color: #0E0E0E; margin-right: 10px; padding-left: 10px; padding-top: 9px; padding-bottom: 9px; border-radius: 10px; border-style: solid; border-width: 1px; border-color: #'.$row["color"].'; margin-bottom: 10px"><span style="color: #'.$row["color"].'">'.$row["username"].'</span> just subscribed and got the <img src="upload/images/'.$row["flair_pin_src"].'" style="width: 20px"> badge!</p>';   
          }
        } else {
           $res= $res . '<h3 style="text-align:center"><i class="fas fa-user-astronaut" style="font-size: 70px"></i></h3>';
          $res= $res . '<h4 style="text-align:center; margin-top: 20px">No subscribers yet.</h4>';
          $res= $res . '<h6 style="text-align:center; margin-left: 50px; margin-right: 50px">Upload more content to get their interest to subscribe!</h6>';
        }
    
        

    echo $res;

  mysqli_close($conn);

?>

 

    