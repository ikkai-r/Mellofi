 <?php
  session_start();

  $_SESSION ['adminLogin'] = true;

  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" href="images/logo.png">
    <link rel="apple-touch-icon" href="images/logo.png">

     <!--Custom Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/app1.css">
    <link rel="stylesheet" type="text/css" href="css/app2.css">
    <link rel="stylesheet" type="text/css" href="css/app3.css">
    <link rel="stylesheet" type="text/css" href="css/app4.css">

    <title>MELLOFI</title>

  </head>
  <body>

    <!-- Start Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-custom-nav">
      <a class="navbar-brand mr-3 ml-3" href="index.php">
        <img class="menu-logo" src="images/logo.png" alt="MELLOFI Logo">
      </a>
      <div id="vertical"></div>
        <ul class="navbar-nav mr-auto ml-2">
        <li class="nav-item">
              <a class="nav-link mr-2 nav-item-custom" href="#" style="margin-left: 20px;">
                HOME
              </a>
            </li>
          <li class="nav-item"> 
              <a class="nav-link nav-item-custom mr-2" href="#" style="margin-left: 5px">
                EXPLORE
              </a>
            </li>
          <li class="nav-item"> 
              <a class="nav-link nav-item-custom mr-2" href="#" style="margin-left: 5px">
                MUSIC
              </a>
            </li>
          </ul>

    <!-- Search Bar -->
           <ul class="navbar-nav wrap">
            <div class="search">
              <input type="text" class="searchTerm" placeholder="Search" style="background-color: #E3DEED" >
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                 </button>
               </div>
            </ul>
      
    </nav>


    <!-- End Header -->

    <!--Start Footer -->

     <div class="container-fluid pb-0 mb-0 justify-content-center text-light" style="position: absolute; bottom: 0;">
        <footer style="height: 240px;">
            <div class="row my-5 justify-content-center py-5">
                 <div class="col-11">
                     <div class="row">
                        <div class="col-5 mr-5">
                            <img src="images/logo.png" class="menu-logo"> 
                               <div class="mr-3 mt-3">
                                 <small> <span>&#174;</span> Mellofi All Rights Reserved.</small>
                                 </div>
                                 <div>
                                  <small> 
                                  Disclaimer: This site does not own any files on its server. 
                                    All contents are from non-affiliated third parties. 
                                  </small>
                                      </div>
                                          </div>
                                   <div class="col-xl-2 col-md-4 col-sm-4 col-10 ml-5 pl-5">
                                       <h6 class="mb-3 mb-lg-4 bold-text "><b>Links</b></h6>
                                       <ul class="list-unstyled">
                                           <li>Home</li>
                                           <li>About</li>
                                           <li>Explore</li>
                                       </ul>
                                   </div>
                                   <div class="col-xl-2 col-md-4 col-sm-4 col-12 ml-5  pl-5">
                                       <h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5"><b>Help</b></h6>
                                       <ul class="list-unstyled">
                                           <li>Contact</li>
                                           <li>FAQ</li>
                                           <li>Request</li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </footer>
               </div>
               
    <!-- End Footer -->

    <!--Swiper Library-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script> 

      //post sign-up modal to registrationPost
      //load and display form-messages to modal
      $(document).ready(function(){
        $("#signUpModal").submit(function(event){
          event.preventDefault();
          var username = $("#username").val();
          var email = $("#email").val();
          var regPass = $("#regPass").val();
          var signUpBtn = $("#signUpBtn").val();
          $(".register-form-message").load("registrationPost.php", {

            //post name, actual value from the input
            username: username,
            email: email,
            regPass: regPass,
            signUpBtn: signUpBtn

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



  </script>
  </body>
</html>