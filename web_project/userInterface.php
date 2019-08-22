<?php 
	require'Regis1.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link type="text/css" href="style.css" rel="stylesheet"/>
 
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color:#444140;font-size:1.2em; opacity:0.8;">
		 <div class="container-fluid">
		 	<div class="navbar-header">
		 		<button type="button" class="navbar-toggle" data-toggle="collapse" data target=#navbar-collapse-main>
		 			<span class="sr-only">Toggle navigation</span>
		 			<span class="icon-bar"></span>
		 			<span class="icon-bar"></span>
		 			<span class="icon-bar"></span> 
		 		</button>
		 		<a class="navbar-brand" href="Home.php"><i class="fa fa-power-off" style="color: white;"></i></a>

		 	</div>
		 		<div class="collapse navbar-collapse" id="navbar-collapse-main">
		 			<ul class="nav navbar-nav navbar-right" >
		 				<li><a class="active" href="viewdonation.php"  style="color: white;">Change password</a></li>
		 				<li><a href="updateprofile.php" style="color: white">Update Profile</a></li>
		 				<li><a  href="blooddanate.php" style="color: white;">Blood Donation</a></li>
		 				<li><a  href="#" style="color: white;">View Donations</a></li>
		 				 
		 			</ul>
		 		</div>

		 	</div>
	</nav>
	<div class="home" style="position: relative; margin: 0 auto;">
 			<center>	<img src="images/body2.jpg" class="responsive" style=" width: 100%;
  height: auto;"></center>
		<center><div class="content" style="position: absolute; bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.3); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 250px;">
 
			<h1>WELCOME TO THE BLOOD DONATION</h1>
			<br><br>
			
		</div></center>
	</div>
	<footer class="container-fluid text-center" style="padding:15px;font-size: 15px;background-color:black;opacity: 0.7;">
		<a href="#" class="fa fa-facebook" style="padding: 10px;color:white;"></a>
		<a href="#" class="fa fa-linkedin"  style="padding: 10px;color: white;"></a>
		<a href="#" class="fa fa-twitter"  style="padding: 10px;color: white;"></a>
		<a href="#" class="	fa fa-google-plus"  style="padding: 10px;color: white;"></a>
	</footer>
	</body>
</html>