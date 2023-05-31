    

      //post sign-up modal to registrationPost
      //load and display form-messages to modal
      $(document).ready(function(){
        $("#signUpModal").submit(function(event){
          event.preventDefault();
          var username = $("#username").val();
          var email = $("#email").val();
          var regPass = $("#regPass").val();
          var signUpBtn = $("#signUpBtn").val();

          //random color for user
          const colors = ["FF2D2D", "2DFFCF", "FF902D", "FFCC2D", "2EFFFC", "2EADFF", "2E5AFF", "B34CFF", "FF4CD1", "FF4C7A", "FF252E"];

          const random = Math.floor(Math.random() * colors.length);
          var color = (colors[random]);
          $(".register-form-message").load("registrationPost.php", {

            //post name, actual value from the input
            username: username,
            email: email,
            regPass: regPass,
            signUpBtn: signUpBtn,
            color: color

          });

           $("#register-form").trigger("reset");
      });  
    });

      //post login modal to verification
      //load and display form-messages to modal
      $(document).ready(function(){
        $("#logInModal").submit(function(event){
          event.preventDefault();
          var login = $("#loginUser").val();
          var password = $("#loginPass").val();
          var submit = $("#loginBtn").val();
          $(".login-form-message").load("verification.php", {

            //post name, actual value from the input
            login: login,
            password: password,
            submit: submit

          });
          $("#login-form").trigger("reset");
      });  
    });

  $(document).ready(function(){
            $('.artists').slick({
                arrows: true,
                infinite: false,
                slidesToShow: 8,
                slidesToScroll: 8,
                centerMode: false
            }) 
         });

    $(document).ready(function(){
            $('.category').slick({
                arrows: true,
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 3,
                centerMode: false

     }) 
         });

        $(document).ready(function(){
            $('.music').slick({
                arrows: true,
                infinite: false,
                slidesToShow: 5,
                slidesToScroll: 5,
                centerMode: false
            }) 
         });

            $(document).ready(function(){
            $('.donations-carousel').slick({
                arrows: false,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                centerMode: false,
                autoplay: true

     }) 
         });

            //declearing html elements

const imgDiv = document.querySelector('.profile-pic-div');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const uploadBtn = document.querySelector('#uploadBtn');

//if user hover on img div 

imgDiv.addEventListener('mouseenter', function(){
    uploadBtn.style.display = "block";
});

//if we hover out from img div

imgDiv.addEventListener('mouseleave', function(){
    uploadBtn.style.display = "none";
});

//lets work for image showing functionality when we choose an image to upload

//when we choose a foto to upload


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