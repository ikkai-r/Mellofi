<?php
session_start();

  if (isset($_POST['submit'])) {

     $servername = "localhost";
     $db_username = "root";
     $db_password = "";  
     $database = "mellofi";

     $success = null;

     $conn = mysqli_connect($servername, $db_username, $db_password, $database);

     $login = mysqli_real_escape_string($conn, $_POST['login']);
     $password = mysqli_real_escape_string($conn, md5($_POST['password']));

     $sql = "
        SELECT 
          * 
        FROM 
          `users` 
        WHERE 
          (`username`='".$login."' 
          OR
          `email`='".$login."')
          AND
          `password`='".$password."'
      ";

      $result = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($result);
      if ($count > 0) {

          $row = mysqli_fetch_assoc($result);
          $username = $row['username'];
          $_SESSION['username'] = $username;
          $_SESSION['isLogin'] = "true";
          $success = true;

         echo "<div class='alert-success mb-3 pt-2 pb-2'>Login Successful</div>";
      } else {
         $_SESSION['isLogin'] = "false";
         echo "<div class='alert-danger mb-3 pt-2 pb-2'>Invalid Username or Password</div>";
      }
      mysqli_close($conn);
  } else {
    echo "Error. Please try again.";
  }
?>
<script>
    var success = "<?php echo $success; ?>"
  if (success == true){
     var location = "<?php $_SERVER['PHP_SELF'] ?>"
     setTimeout(function(){ window.location.href= location;}, 1200);
}
</script>