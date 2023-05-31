   $("#music").hover(
      function(){
        $("#icon-hdr").css({color:'white'});
       },
        function(){
             $("#icon-hdr").css({color:'#D6D6D6'}); // mouseout
        });

    document.getElementById("go-now").onclick = function () {
        location.href = "homepage.php";
    };

    