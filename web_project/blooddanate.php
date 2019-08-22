	
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
  <style type="text/css">
  .btn {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color:#CB4335;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.btn:hover {background-color: #3e8e41}

.btn:active {
  background-color:#EC7063;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.tb1:hover{
opacity:1.0;
}


  	 </style>
  		
  
 
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
		 				<li><a class="active" href=""  style="color: white;">Change password</a></li>
		 				<li><a href="updateprofile.php" style="color: white">Update Profile</a></li>
		 				<li><a  href="blooddanate.php" style="color: white;">Blood Donation</a></li>
		 				<li><a  href="viewdonation.php" style="color: white;">View Donations</a></li>
		 				 
		 			</ul>

		 		</div>

		 	</div>
	</nav>
	<div class="home" style="position: relative; margin: 0 auto;">
 			<center>	<img src="images/db2.gif" class="responsive" style=" width: 100%;
  height: auto;"></center>
		<center><div class="content" style="position: absolute; bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.3); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 250px;">
			
	       
			<form action="<?php $_php_SELF?>" method="post" class="donate" style="margin-right:400px;margin-left: 375px; margin-top: 100px;font-weight: bold;color: #E74C3C;">

				
			<table class="tb1" style="background-color:white;opacity: 0.7">
			<tr><td><b><h3 style="color: black;">Fill Here<b></h3><td></tr>
			<tr>
			<td style="padding: 15px;">Camp:</td>	<td style="padding: 15px;"><input  type="text" name="camp" style="padding:5px;border-radius:5px "></td><br><br>
			<tr>
			<td style="padding: 15px;">Date: </td> <td style="padding: 15px;">  <input  type="date" name="day" style="padding:5px;border-radius:5px;"></td><br><br>
		    </tr>
		    <tr>
			<td style="padding: 15px;">No Of Units:</td> <td style="padding: 15px;"><input  type="text" name="units" style="padding:5px;border-radius:5px;"><br><br></tr>
			<tr>
			<td style="padding: 15px;">Other Detail:</td> <td style="padding: 15px;"><input  type="textarea" name="details" style="padding:5px;border-radius:5px;"></td><br><br>
		    </tr>
		    <tr><td style="padding: 15px;"><center><input type="submit" class="btn" name="submit" value="SAVE"" style="padding:5px;border-radius:5px;"/></center></td></tr>
				 </table>
		    			</form>
		</div></center>
	</div>
	<footer class="container-fluid text-center" style="padding:15px;font-size: 15px;background-color:black;opacity: 0.7;">
		<a href="#" class="fa fa-facebook" style="padding: 10px;color:white;"></a>
		<a href="#" class="fa fa-linkedin"  style="padding: 10px;color: white;"></a>
		<a href="#" class="fa fa-twitter"  style="padding: 10px;color: white;"></a>
		<a href="#" class="	fa fa-google-plus"  style="padding: 10px;color: white;"></a>
	</footer>
	

	<?php

require 'db_connect.php';
?>
	</body>
</html>