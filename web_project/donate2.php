<?php
	
	$connection=mysqli_connect('localhost','root','');
	//mysqli_select($connection,'onlineblood') ;
	$camp="";
	$day="";
    $unit="";
	$detail="";
	$errors=array();

	if(!$connection){
		
		 die("sever can not connected".mysqli_error());
	}
	else{

		$select=mysqli_select_db($connection,'onlineblood') or die ("Database not conected");

		if(isset($_POST['save'])){
			$camp=mysqli_real_escape_string($connection,$_POST['camp']);
			$day=mysqli_real_escape_string($connection,$_POST['day']);
			$unit=mysqli_real_escape_string($connection,$_POST['unit']);
			$detail=mysqli_real_escape_string($connection,$_POST['detail']);
	
	

	if(empty($camp)){
		array_push($errors,"Camp is required.");
	}
	if (empty($day)) {
		array_push($errors,"Date name is required");
	}
	
	if (empty($unit)) {
		array_push($errors,"No of Units are required");
	}
	if (empty($detail)) {
	array_push($errors,"Detai is required");}
	
	if (count($errors)==0) {
		
		$sql="INSERT INTO register(Camp,Date,Units,Details)VALUES('$camp','$day','$unit','$detail')";
		mysqli_query($connection,$sql);
		$_SESSION['name']=$camp;
	
			if(mysqli_query($connection,$sql)){
				echo "New recorded successfully";
			}
			else{
				echo"error:".$sql."".mysqli_error($connection);
			}
		
	}
	
	
	} }
	mysqli_close($connection);
	?>