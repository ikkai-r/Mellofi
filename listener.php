<?php
  session_start();?>

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

    <title>Listener Homepage</title>

  </head>
  <body>
    <!-- Start Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-custom-nav">
      <a class="navbar-brand mr-3 ml-3" href="#">
        <img class="menu-logo" src="images/logo.png" alt="MELLOFI Logo">
      </a>
      <div id="vertical"></div>
        <!-- Tab -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
              <a class="nav-link" id="following-tab" data-toggle="tab" href="#following" role="tab" aria-controls="following" aria-selected="false" style="margin-left: 20px;">
                FOLLOWING
              </a>
            </li>
          <li class="nav-item"> 
              <a class="nav-link" id="explore-tab" data-toggle="tab" href="#explore" role="tab" aria-controls="explore" aria-selected="false" style="margin-left: 20px;">
                EXPLORE
              </a>
            </li>
          </ul>
        <!-- Tab -->          

        <ul class="navbar-nav mr-auto ml-2">
          <li class="nav-item dropdown"> 
              <a class="nav-link dropdown-toggle nav-item-custom" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"style="margin-left: 5px">MUSIC</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Pop</a>
                <a class="dropdown-item" href="#">Rock</a>
                <a class="dropdown-item" href="#">Jazz</a>
                <a class="dropdown-item" href="#">Hip Hop</a>
              </div>
            </li>
          </ul>
  <!-- Search Bar 
           <ul class="navbar-nav wrap">
            <div class="search">
              <input type="text" class="searchTerm" placeholder="Search" style="background-color: #E3DEED" >
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                 </button>
               </div>
            </ul>
            -->


          <!-- Button trigger modal -->
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#"><i class="fas fa-user-cog"></i> Switch to Musician Mode</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Account Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Log Out</a>
            </div>
          </div>     
    </nav>
    <!-- End Header --> 

    <!-- Tab content for following and explore -->          
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="following" role="tabpanel" aria-labelledby="following-tab">

              <div class="row">
                  <div class="col-3">
                      <img src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
                  </div>
                  <div class="col-3">
                    <div class="card text-white bg-dark mb-3">
                      <img src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Musician name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">69k followers</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card text-white bg-dark mb-3">
                      <img src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Musician name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">69k followers</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card text-white bg-dark mb-3">
                      <img src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Musician name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">69k followers</h6>
                      </div>
                    </div>
                  </div>
                </div>

              <div class="row">
                  <div class="col-3">
                    <div class="card text-white bg-dark mb-3">
                      <img src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Musician name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">69k followers</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card text-white bg-dark mb-3">
                      <img src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Musician name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">69k followers</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card text-white bg-dark mb-3">
                      <img src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Musician name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">69k followers</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card text-white bg-dark mb-3">
                      <img src="https://www.careeraddict.com/uploads/article/54483/man-playing-acoustic-guitar.jpg" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Musician name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">69k followers</h6>
                      </div>
                    </div>
                  </div>
                </div>                
            </div>
            


            <div class="tab-pane fade" id="explore" role="tabpanel" aria-labelledby="explore-tab">
              <div class="row">
                  <div class="col-3">
                    <div class="card text-white bg-dark mb-3">
                      <img src="https://www.legalzoom.com/sites/lz.com/files/articles/man-strumming-guitar-blue-shirt.jpg" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Musician name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">69k viewers</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card text-white bg-dark mb-3">
                      <img src="https://www.legalzoom.com/sites/lz.com/files/articles/man-strumming-guitar-blue-shirt.jpg" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Musician name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">69k viewers</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card text-white bg-dark mb-3">
                      <img src="https://www.legalzoom.com/sites/lz.com/files/articles/man-strumming-guitar-blue-shirt.jpg" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Musician name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">69k viewers</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card text-white bg-dark mb-3">
                      <img src="https://www.legalzoom.com/sites/lz.com/files/articles/man-strumming-guitar-blue-shirt.jpg" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Musician name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">69k viewers</h6>
                      </div>
                    </div>
                  </div>
                </div>

              <div class="row">
                  <div class="col-3">
                    <div class="card text-white bg-dark mb-3">
                      <img src="https://www.legalzoom.com/sites/lz.com/files/articles/man-strumming-guitar-blue-shirt.jpg" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Musician name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">69k viewers</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card text-white bg-dark mb-3">
                      <img src="https://www.legalzoom.com/sites/lz.com/files/articles/man-strumming-guitar-blue-shirt.jpg" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Musician name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">69k viewers</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card text-white bg-dark mb-3">
                      <img src="https://www.legalzoom.com/sites/lz.com/files/articles/man-strumming-guitar-blue-shirt.jpg" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Musician name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">69k viewers</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card text-white bg-dark mb-3">
                      <img src="https://www.legalzoom.com/sites/lz.com/files/articles/man-strumming-guitar-blue-shirt.jpg" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Musician name</h5>
                        <h6 class="card-subtitle mb-2 text-muted">69k viewers</h6>
                      </div>
                    </div>
                  </div>
                </div>                
            </div>              

            </div>
          </div>    
              
    <!--Swiper Library-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>