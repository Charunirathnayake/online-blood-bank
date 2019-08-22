<?php
	$conn=mysqli_connect('localhost','root','');
	if(!$conn)
	{
		die("server is not connected!".mysql_error());
	}
	else
	{
		$select=mysqli_select_db($conn,'onlineblood') or die("Database not connect");
	}
?>