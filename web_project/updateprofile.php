
   
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

  <script type="text/javascript">
  	/*var x=document.forms["bloodform"]["user"];
  	var y=document.forms["bloodform"]["age"];
  	var z=document.forms["bloodform"]["contact"];

  	varx1=document.getElementById('lbluser');
  	vary1=document.getElementById('lblage');
  	varz1=document.getElementById('lblcontact');*/
     function bigImg(x) {
  x.style.height = "275px";
  x.style.width = "250px";
}

function normalImg(x) {
  x.style.height = "225px";
  x.style.width = "200px";
}



  	


	function validation() {
		var x=document.getElementById('user');
		varz=document.getElementById('age');
 		 
  if (x.value.trim()=="") {
  	x.style.border="solid #111C93 3px";
					document.getElementById("lbluser").style.visibility="visible";
					return false;
      }
  if(y.value.trim()==""){
      	x.style.border=="solid #111C93 3px";
      	document.getElementById("age").style.visibility="visible";
					return false;

      }
  if (z.value.trim()=="") {
      	z.style.border=="solid #111C93 3px";
      	document.getElementById("contact").style.visiblity="visible";
      				return false;
      }
      


  
}
</script>
<style type="text/css">
		
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
		 				<li><a href="update.php" style="color: white">Update Profile</a></li>
		 				<li><a  href="blooddanate.php" style="color: white;">Blood Donation</a></li>
		 				<li><a  href="viewdonation.php" style="color: white;">View Donations</a></li>
		 				 
		 			</ul>
		 		</div>

		 	</div>
	</nav>
	<div class="home" style="position: relative; margin: 0 auto;">
 			<center>	<img src="images/update.gif" class="responsive" style=" width: 100%;
  height: auto;"></center>
		<center><div class="content" style="position: absolute; bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.3); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 250px;">
  <p style="color:#D1141C; font-size:45px;opacity: 0.9;"><i>Update your profile</i></p>
  <table><tr><td>
  <form class="f1" name="bloodform" onsubmit="return validation()"action="" method="post" style="padding:30px;text-align:center;padding:20px;
margin:20px;
font-weight:bold;
font-size:15px;
color:#17202A;
border-radius:10px;background-color:#F3425D
;opacity: 0.8;height:70%;width:70%;
">
  	<input id="user" type="text" name="name" placeholder="Name" style="padding:5px;
border-radius:10px;
">
<label id="lbluser" style="color:#111C93;visibility: hidden;">Invalid</label>
<br><br>
  	<input type="text" name="age" placeholder="Age" style="padding:5px;
border-radius:10px;
">
<label id="lblage" style="color:#111C93;visibility: hidden;">Invalid</label>

<br><br>
  	<input type="email" name="email" placeholder="E-mail" style="padding:5px;
border-radius:10px;
">
<label id="lblcontact" style="color:#111C93;visibility: hidden;">Invalid</label>

<br><br>
  	
  			<i class="fa fa-hand-o-right" style="font-size:48px;color:blue"></i>

  	  		<input type="submit" value="Submit" style="padding:5px;
border-radius:10px;">

  </form></td>
  <td><img src="images/drop.gif" onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" height = "225px" width = "200px"></td></tr></table>

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
 
	

