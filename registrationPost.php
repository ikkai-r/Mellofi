<?php
  
  session_start();
  
  if (isset($_POST['signUpBtn'])) {
      
         $color = $_POST['color'];

         $servername = "localhost";
         $db_username = "root";
         $db_password = "";  
         $database = "mellofi";

         $conn = mysqli_connect($servername, $db_username, $db_password, $database);

         $email = mysqli_real_escape_string($conn, $_POST['email']);
         $regPass = mysqli_real_escape_string($conn,  md5($_POST['regPass']));
         $username = mysqli_real_escape_string($conn, $_POST['username']);

         $sql_u = "SELECT * FROM users WHERE username='$username'";
         $sql_e = "SELECT * FROM users WHERE email='$email'";
         $res_e = mysqli_query($conn, $sql_e);
         $res_u = mysqli_query($conn, $sql_u);

         $success = null;
      
        if(mysqli_num_rows($res_e) > 0){
          echo "<div class='alert-danger mb-3 pt-2 pb-2'>Sorry, email is already taken.</div>";
           $_SESSION['isLogin'] = "false";
        } 
        else if(mysqli_num_rows($res_u) > 0){
          echo "<div class='alert-danger mb-3 pt-2 pb-2'>Sorry, username is already taken.</div>";
           $_SESSION['isLogin'] = "false";
        } else{

        //SQL
        $sql = "INSERT INTO `users`(
                `email`, 
                `password`, 
                `username`,
                `color`
              ) VALUES (
                '".$email."',
                '".$regPass."',
                '".$username."',
                 '".$color."'
              )";

      if (mysqli_query($conn, $sql)) {
         echo "<div class='alert-success mb-3 pt-2 pb-2'>Registration Successful</div>";
         $success = true;
         $_SESSION['signingUp'] = true;
         $_SESSION['isLogin'] = "true";
         $_SESSION["username"] = $username;
         
          } else 
         echo "<div class='alert-danger mb-3 pt-2 pb-2'>Error. Please try again.</div>";
         $_SESSION['isLogin'] = "false";

            }
       mysqli_close($conn);
    } else {
      echo "<div class='alert-danger mb-3 pt-2 pb-2'>Error. Please try again.</div>";
       $_SESSION['isLogin'] = "false";
    }
?>

<script>
  var success = "<?php echo $success; ?>"
  if (success == true){
     setTimeout(function(){ window.location.href= 'userChoice.php';}, 1500);
}
</script>