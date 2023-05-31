
var totalSeconds = 0;
var varTimer;

function countTimer() {
           ++totalSeconds;
           var hour = Math.floor(totalSeconds /3600);
           var minute = Math.floor((totalSeconds - hour*3600)/60);
           var seconds = totalSeconds - (hour*3600 + minute*60);
           if(hour < 10)
             hour = "0"+hour;
           if(minute < 10)
             minute = "0"+minute;
           if(seconds < 10)
             seconds = "0"+seconds;
           document.getElementById("timer").innerHTML = hour + ":" + minute + ":" + seconds;
        }

function bitrate () {
          
           var x = document.getElementById("bitrate")
           x.innerHTML = Math.floor((Math.random() * (1000 + 1)) + 2500) + "kbps";
        }

function clickTimer (){
  varTimer = setInterval(countTimer, 1000);
  document.getElementById("go-live").style.visibility = "hidden";
  document.getElementById("stop-live").style.visibility = "visible";
  document.getElementById("stream").style.visibility = "visible";
  document.getElementById("chats").style.visibility = "visible";
  document.getElementById("chat").style.visibility = "visible";
  document.getElementById("viewers-cnt").style.visibility = "visible";
  document.getElementById("viewers-cnt-zero").style.visibility = "hidden";
   document.getElementById("followers-cnt").style.visibility = "visible";
  document.getElementById("followers-cnt-zero").style.visibility = "hidden";


 function viewerCnt(){
var viewers = document.getElementById("viewers-cnt").innerHTML;
  var x = document.getElementById("viewers-cnt");
  x.innerHTML = Math.floor((Math.random() * viewers) + 10);
 }
  

setInterval(viewerCnt, 3000);

   setInterval(bitrate, 1000);
}

function stopTimer() {
  clearInterval(varTimer);
  document.getElementById("go-live").style.visibility = "visible";
  document.getElementById("stop-live").style.visibility = "hidden";
  window.location.reload();
}


var clickedKey = false;
var clickedWebcam = false;

$(document).ready(function(){
    $(".stream-method").click(function() { 
      $('.stream-method').removeClass('method-active');
      $(this).addClass('method-active');
    }); 
});

var elementClicked = false;

$("#save-changes").click(function(){
       elementClicked = true;
});

function checkValue (){
  var video_src = $("#video-src").val();
  var audio_src = $("#audio-src").val();
  var title = $("#title").val();
  var price = $("#price").val();
  var genre_select = $(".genre-select").val();
  var thumbnail = $("#profileImg").val();

  if (video_src != null && audio_src != null && title != null && price != null && genre_select != '' && thumbnail != '' && clickedWebcam == true && elementClicked == true) {
     $('#go-live').prop("disabled", false);
  } else if (clickedKey == true && title != null && price != null && genre_select != '' && thumbnail != '' && elementClicked == true){
      $('#go-live').prop("disabled", false);
  }
}

setInterval(checkValue, 500);

function webcamSetup (){
  document.getElementById("stream-setup-webcam").style.visibility="visible";
  document.getElementById("stream-setup-key").style.visibility="hidden";
  clickedWebcam = true;
}

function keySetup (){
  document.getElementById("stream-setup-webcam").style.visibility="hidden";
  document.getElementById("stream-setup-key").style.visibility="visible";
  clickedKey = true;
}

function randomKey (){
 var x = Math.random().toString(36).slice(2);
  var y = Math.random().toString(36).slice(2);
  $('#stream-key').prop("value", "live_" + x + y);
}

function randomClick (){
  randomKey();
}
randomKey();

function copyClick () {
  document.querySelector("#stream-key").select();
  document.execCommand("copy");
}

function showKey (){
  document.getElementById("show").style.visibility = "hidden";
  document.getElementById("hide").style.visibility = "visible";
  document.getElementById("stream-key").type = "text";
}

function hideKey (){
  document.getElementById("show").style.visibility = "visible";
  document.getElementById("hide").style.visibility = "hidden";
  document.getElementById("stream-key").type = "password";
}

function triggerClick() {
  document.querySelector('#profileImg').click();
}

function displayImage (e){
  if (e.files[0]){
    var reader = new FileReader();

    reader.onload= function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }

    reader.readAsDataURL(e.files[0]);
  }
}

