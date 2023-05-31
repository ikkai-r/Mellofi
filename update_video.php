
<?php 

	session_start();

 		 $servername = "localhost";
         $db_username = "root";
         $db_password = "";  
         $database = "mellofi";

         $conn = mysqli_connect($servername, $db_username, $db_password, $database);


				$title = mysqli_real_escape_string($conn, $_POST['title-video']);
				$genre =  $_POST['genre-select'];
				$musician_id = $_GET["musician_id"];
				$price =  $_POST['price'];
				$viewer_cnt = rand(100, 999);

				//album art
				$cover_name = $_FILES['thumbnail']['name'];
				$cover_temp_name = $_FILES['thumbnail']['tmp_name'];
								
				$cover_destination = "upload/images/". $cover_name;



				//video
				$video_name = $_FILES['video']['name'];
				$video_temp_name = $_FILES['video']['tmp_name'];
								
				$video_destination = "upload/videos/". $video_name;

			if (move_uploaded_file($cover_temp_name, $cover_destination)) { 
				
				if (move_uploaded_file($video_temp_name, $video_destination)) { 
				
		$sql = "INSERT INTO `videos`(
			          `video_src`,
			          `title`,
			          `thumbnail`,
			          `musician_id`,
			          `price`,
			          `stream_time`,
			          `viewer_cnt`
			        ) VALUES (
			          '".$video_name."',
			          '".$title."',
			          '".$cover_name."',
			          '".$musician_id."',
			          '".$price."',
			          '1 minute',
			          '".$viewer_cnt."'
			        )";

				if(mysqli_query($conn,$sql)) {

			$sql_select = "
			SELECT 
			* 
			FROM 
			`videos` 
			WHERE 
			musician_id = '".$musician_id."'
			ORDER BY video_id DESC LIMIT 1";

			if ($result = mysqli_query($conn, $sql_select)) {

				$row = mysqli_fetch_assoc($result);
				$video_id = $row["video_id"];
				    foreach($genre as $value) {

          				$sql_genre = "
				           INSERT INTO 
				           `genre`
				           (
				           `video_id`,
				           `genre`
				           ) 
				           VALUES
				           (
				           '".$video_id."',
				           '".$value."'
				           )
				           ";

				      mysqli_query($conn, $sql_genre);

				      }

				      echo"yes";
			}
			else {

					 echo"no";
				}
					
          
				}
				else {

					 echo"no";
				}
			}
			else {

				 echo"no";
			}
			}
			else{
				 echo"no";
			}

?>

