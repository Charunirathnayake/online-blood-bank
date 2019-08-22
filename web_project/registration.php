<?php 
	require'Regis1.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="registration.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/javascript" href="registration.js">
</head>
<body>
	<form action="registration.php" method="post" name="main_form">
			<h4>Registration info</h4>
			  	<div><label for="username">Name</label></div>
			<input name="name" id="username" type="text" placeholder="Enter name" maxlength="50" pattern="[A-Za-z]{1,50}" title="Name can not contain numbers">
			 		<div><label for="userLastname">Lastname</label></div>
			<input name="lastname" id="userLastname" type="text" placeholder="Enter lastname" pattern="[A-Za-z]{1,50}" maxlength="50" title="Lastname can not contain numbers">
			  				  	<div><label for="userbday">Birthday</label></div>
			<input type="date" name="birthday" id="userbday" min='1899-01-01' title="Wrong min date">			 
					<div><label for="useremail">Email Address</label></div>				
			<input name="email" id="useremail" type="email" placeholder="Enter email" maxlength="50">
					<div><label for="userPass">Password</label></div>
			<input name="password" id="userPass" type="password" placeholder="Enter password" maxlength="20" pattern=".{6,20}"  title="6 to 20 characters">
					<div><label for="userConfirmPass">Confirm password</label></div>
			<input name="confirmPassword" id="userConfirmPass" type="password" placeholder="Confirm password" maxlength="20" pattern=".{6,20}"  title="6 to 20 characters"> 
						<span id="info"></span>
						
			<input class="button" type="submit" value="Send" name="submit">			
		  </form>	
</body>
</html>