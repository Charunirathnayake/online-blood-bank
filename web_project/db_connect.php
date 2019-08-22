<?php
	$dbhost='localhost';
	$dbuser='root';
	$dbpass="";
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
	if(!$conn)
	{
		die('Could not connect:'.mysqli_error());
	}
	else
	{
		echo"connected successfully!";
	}

	mysqli_select_db($conn,'onlineblood');
if(isset($_POST["submit"]))
{
	$camp=$_POST['camp'];
	$day=$_POST['day'];
	$unit=$_POST['units'];
	$detail=$_POST['details'];

	$sql="INSERT INTO donation(camp,day,units,details)VALUES('$camp','$day','$unit','$detail')";
	if(mysqli_query($conn,$sql))
	{
		echo"recorded";
	}
	else
	{
		echo"error:".$sql."".mysqli_error($conn);
	}


}
	mysqli_close($conn);


?>