     function showPassCurrent(){
        document.getElementById("hide-current").style.visibility = "hidden";
        document.getElementById("show-current").style.visibility = "visible";
      }

       function hidePassCurrent(){
        document.getElementById("hide-current").style.visibility = "visible";
        document.getElementById("show-current").style.visibility = "hidden";
      }
        function showPassNew(){
        document.getElementById("hide-new").style.visibility = "hidden";
        document.getElementById("show-new").style.visibility = "visible";
      }

       function hidePassNew(){
        document.getElementById("hide-new").style.visibility = "visible";
        document.getElementById("show-new").style.visibility = "hidden";
      }

       function settingsMsg() {
    document.getElementById("settings-msg").innerHTML = "";
  }
     function passwordMsg() {
    document.getElementById("passwordMsg").innerHTML = "";
  }



       $(document).ready(function(){

      $("#hide-current").click(function(){
         var input = $("#currPass");
         if(input.attr("type") === "password"){
          input.attr("type", "text");
         }
        });

       $("#show-current").click(function(){
         var input = $("#currPass");
         if(input.attr("type") === "text"){
          input.attr("type", "password");
         }
        });

        $("#hide-new").click(function(){
         var input = $("#newPass");
         if(input.attr("type") === "password"){
          input.attr("type", "text");
         }
        });

       $("#show-new").click(function(){
         var input = $("#newPass");
         if(input.attr("type") === "text"){
          input.attr("type", "password");
         }
        });

    });
