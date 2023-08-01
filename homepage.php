<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <title>booking point</title>
    <style>
		.logo-img{
			float: left;
			position: relative;
			margin: 10px 15px 15px 10px;
		}
		body{
			overflow-x:hidden;
		}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
	<img class="logo-img" src="bplogo.png">
    <h2 class="navbar-brand">BOOKING POINT</h2>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page">Home</a>
        </li>
        <li class="nav-item">
        <a  class="nav-link" href="#about">About</a>
        </li>
        <a class="nav-link" href="#service">Services</a>
        </li>
        <a class="nav-link" href="feedback.html">Feedback</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bus_3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>online ticket</h5>
        <p>easy to get online tickets.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="train.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>exiting journey</h5>
        <p>make your journey more special.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="gsrtc_bus.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>safe journey</h5>
        <p>make your jorney joy full.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section class="my-5">
  <div class="py-5" id="about">
    <h2 id="#about_page" class="text-center">About</h2>
  </div>
  <div class="row">
  <div class="col-lg-6 col-md-6 col-12">      
    <img class="img-fluid abouting" src="bp_img.jpg">
  </div>
  <div class="col-lg-6 col-md-6 col-12">
    <h2 class="display-7">Booking Point: Easy way to book ticket.</h2>
    <p class="py-5">A booking point is a website where we provide an easy way to book several kinds of ticket online. The login/sign-in is not mendatory for our website.
	
		Here we provide you service by your less efforts. You can book bus tickets, train tickets and movie tickets. You can contact us if any problem occurs by using 
		the navigation button. Also feedback option is there, where you can give your feedback.<br/>
      
		There are some special offers for the regular customers. But for become a regular customer you have to login/sign-in. After that you are eligible for aquiring 
		beautiful offers. Some gift wouchers are also provided to the lucky customer. By login/sign-in we are enable to fetch users data, and by that user do not need
		to enter their details again and again. They just have to enter their id number provided by us.<br/>
		Enjoy your jerney safely.
	</p>
    <!--<a id="#" href="about.php" class="btn btn-success">click more</a> 
	-->
    </div>
</section>

<section class="my-5">
  <div class="py-5" id="service">
    <h2 class="text-center">Services</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <img class="card-img-top" src="train.jpg" alt="img21.jpg">
          <div class="card-body">
            <h4 class="card-title">Train tickets</h4>
            <p class="card-text"></p>
            <a href="search_train.html" class="btn btn-primary">Book</a>
          </div>
        </div>
      </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="bus_1.jpg" alt="img21.jpg">
            <div class="card-body">
              <h4 class="card-title">Bus tickets</h4>
              <p class="card-text"></p>
              <a href="search_bus.html" class="btn btn-primary">Book</a>
            </div>
          </div> 
      </div>
   
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <img class="card-img-top" src="movie.jpg" alt="img21.jpg" height='270' width='400'>
          <div class="card-body">
            <h4 class="card-title">Movie tickets</h4>
            <p class="card-text"></p>
            <a href="search_movie.html" class="btn btn-primary">Book</a>
          </div>
        </div> 
      </div> 
    </div>
  </div>
<!--
<section class="my-5">
  <div class="py-5">
      <h2 class="text-center">Gallery</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img  src="../img4.jpeg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12" class="img-fluid" >
        <img  src="../img2.jpeg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12" class="img-fluid" >
        <img  src="../bus5.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12" class="img-fluid" >
        <img  src="../bus6.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12" class="img-fluid" >
        <img  src="../bus7.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12" class="img-fluid" >
        <img  src="../bus11.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12" class="img-fluid" >
        <img  src="../bus8.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12" class="img-fluid" >
        <img  src="../bus9.jpg" class="img-fluid pb-3">
      </div>
      <div class="col-lg-4 col-md-4 col-12" class="img-fluid" >
        <img  src="../bus10.jpg" class="img-fluid pb-3">
      </div>

    </div>
  </div>
</section>
-->
<section class="my-5">
  <div class="py-5">
      <h2 class="text-center">Login</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="result.php" method="post">
      <div class="form-group">
        <label>Your Name:</label>
        <input type="text" name="name" autocomplete="off" class="form-control">  
      </div>
      <div class="form-group">
        <label>Email Id:</label>
        <input type="email" name="email" autocomplete="off" class="form-control">  
      </div>
      <div class="form-group">
        <label>Password:</label>
        <input type="password" name="pass" autocomplete="off" class="form-control">  
      </div>
      <div class="form-group">
        <label>mobile No.:</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">  
      </div>
      <div class="form-group">
        <label>city:</label>
        <input type="text" name="city" autocomplete="off" class="form-control">  
      </div>
      <br>
      <button type="submit" class="btn btn-primary">submit</button>
    </form>
  </div>
</section>
<footer>
  <p class="p-3 bg-dark text-white text-center">www@bookingpoint.com</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" 
integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" 
integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>