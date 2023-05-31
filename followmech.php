       
        <?php

        include_once("livestream.php");


        ?>
        <script>
        var stream_id = "<?php echo $_GET['stream_id']; ?>";
        var username = "<?php echo $_SESSION['username']; ?>";
       $("#follow").click(function(){
        $.post('follow.php', 
          {
            stream_id: stream_id,
            username: username
          });
       
        });

       $("#unfollow").click(function(){
        $.post('unfollow.php', 
          {
            stream_id: stream_id,
            username: username
          });
        });
        </script>