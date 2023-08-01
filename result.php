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
			.cc{
				position: absolute;
				top: 40%;
				left: 50%;
				transform: translate(-50%,-50%);
				background-color:#ffff00;
				font-size:20px;
			}
			.logo-img{
			float: left;
			position: relative;
			margin: 10px 15px 15px 10px;
		}
		</style>
		<script>
		if(!localStorage.getItem("token")){
			window.location.href = 'search_train.html';
		}</script>
	</head>
	
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
	<img class="logo-img" src="bplogo.png">
    <h2 style="color:white">BOOKING POINT</h2>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="http://localhost/DE%20project/homepage.php">Home</a>
        </li>
        <li class="nav-item">
        <a  class="nav-link" href="http://localhost/DE%20project/homepage.php">About</a>
        </li>
        <a class="nav-link" href="http://localhost/DE%20project/homepage.php">Services</a>
        </li>
        <a class="nav-link" href="http://localhost/DE%20project/homepage.php">Contact-Us</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="cc">
	Thank You <b><?php echo $_POST["name"];?></b>
	for choosing our website.<br/>
	</div>
</body>
</html>