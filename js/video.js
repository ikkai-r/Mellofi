
$(document).ready(function(){
        $("#commentBtn").click(function(){

          var commentmsg = $("#commentmsg").val();

          if(commentmsg == ""){
            return false;
          } 

          else {
          $.post("comments.php", {

            //post name, actual value from the input
            commentmsg: commentmsg,
            video_id: "<?php echo $_GET['video_id']; ?>"
          },

          function(data, status){
            document.getElementsByClassName('comment-view')[0].innerHTML = data;
          }
          );
        }
        $("#comments").trigger("reset");
        return false;
      }); 

      setInterval(runFunction, 100);

      function runFunction(){
        $.post("fetchcomment.php", { video_id: "1" },

        function(data, status) 
        {

          document.getElementsByClassName('comment-view')[0].innerHTML = data;
          console.log(data);
        }
          )
      }
    });

