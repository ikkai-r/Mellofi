<?php 

	session_start();

 		 $servername = "localhost";
         $db_username = "root";
         $db_password = "";  
         $database = "mellofi";

         $conn = mysqli_connect($servername, $db_username, $db_password, $database);


				$title = mysqli_real_escape_string($conn, $_POST['title']);
				$genre =  $_POST['genre-select'];
				 $musician_id = $_GET["musician_id"];
			

				//album art
				$cover_name = $_FILES['profileImg']['name'];
				$cover_temp_name = $_FILES['profileImg']['tmp_name'];
								
				$cover_destination = "upload/images/". $cover_name;



				//audio
				$audio_name = $_FILES['audio']['name'];
				$audio_temp_name = $_FILES['audio']['tmp_name'];
								
				$audio_destination = "upload/music/". $audio_name;

			if (move_uploaded_file($cover_temp_name, $cover_destination)) { 
				
				if (move_uploaded_file($audio_temp_name, $audio_destination)) { 
				
		$sql = "INSERT INTO `music`(
			          `music_src`,
			          `title`,
			          `album_art`,
			          `musician_id`
			        ) VALUES (
			          '".$audio_name."',
			          '".$title."',
			          '".$cover_name."',
			          '".$musician_id."'
			        )";

				if(mysqli_query($conn,$sql)) {

			$sql_select = "
			SELECT 
			* 
			FROM 
			`music` 
			WHERE 
			musician_id = '".$musician_id."'
			ORDER BY music_id DESC LIMIT 1";

			if ($result = mysqli_query($conn, $sql_select)) {

				$row = mysqli_fetch_assoc($result);
				$music_id = $row["music_id"];
				    foreach($genre as $value) {

          				$sql_genre = "
				           INSERT INTO 
				           `genre`
				           (
				           `music_id`,
				           `genre`
				           ) 
				           VALUES
				           (
				           '".$music_id."',
				           '".$value."'
				           )
				           ";

				      mysqli_query($conn, $sql_genre);

				      }

				      header("Location: contentUpload.php?musician_id=".$musician_id."");
			}
			else {

					 header("Location: contentUpload.php?musician_id=".$musician_id."&error=true");
				}
					
          
				}
				else {

					 header("Location: contentUpload.php?musician_id=".$musician_id."&error=true");
				}
			}
			else {

				 header("Location: contentUpload.php?musician_id=".$musician_id."&error=true");
			}
			}
			else{
				 header("Location: contentUpload.php?musician_id=".$musician_id."&error=true");
			}

?>

