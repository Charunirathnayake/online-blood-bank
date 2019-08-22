<?php
	$con=mysqli_connect('localhost','root','');
	if(!$con){
		die("server can not connected".mysqli_error());
		
	}
	else{
		$select=mysqli_select_db($con,'onlineblood')or die("Database not connect");
	}
	
?>