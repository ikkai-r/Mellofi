<?php

session_start();

 $musician_id = $_POST["musician_id"];
 $social_media_link = $_POST["social_media_link"];
 $social_media_id = $_POST["social_media_id"];

 $servername = "localhost";
 $db_username = "root";
 $db_password = "";  
 $database = "mellofi";

 $success = null;

 $conn = mysqli_connect($servername, $db_username, $db_password, $database);

 $sql_social = "
        UPDATE 
         `social_media`
         SET
         `link` = '".$social_media_link."'
        WHERE
         musician_id =  '".$musician_id."'
         AND 
         social_media_id = '".$social_media_id."'
        ";

 if (mysqli_query($conn, $sql_social)) {
 	 echo '<div class="alert-success mb-3 pt-2 pb-2 ml-3" style="border-radius: 5px; width: 700px; background-color: #9913F6; color: white; text-align: center">Updated successfully.</div>';
 	 $success = true;

 } else {
 	  echo '<div class="alert-success mb-3 pt-2 pb-2 ml-3" style="border-radius: 5px; width: 700px; background-color: #9913F6; color: white; text-align: center">Update failed.</div>';
 	 $success = false;
 }


?>
<script>
  var success = "<?php echo $success; ?>";

    if (success == true){
     var musician_id = "<?php echo $musician_id ?>";
      setTimeout(function(){ window.location.href = "musician-connections.php?musician_id=" + musician_id;}, 2000);
    
}
</script>