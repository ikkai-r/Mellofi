            //declearing html elements



//lets work for image showing functionality when we choose an image to upload

//when we choose a foto to upload


function triggerClick() {
  document.querySelector('#pinsImg').click();
  document.getElementById('plus').style.visibility = "hidden";
  document.getElementById('choose-btn').style.visibility = "hidden";
}

function displayImage (e){
  if (e.files[0]){
    var reader = new FileReader();

    reader.onload= function(e){
      document.querySelector('#pinsDisplay').setAttribute('src', e.target.result);
    }

    reader.readAsDataURL(e.files[0]);
  }
}

