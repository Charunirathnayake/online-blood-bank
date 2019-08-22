<?php
	session_start();
	$connection=mysqli_connect('localhost','root','');
	//mysqli_select($connection,'onlineblood') ;
	$name="";
	$lastname="";
    $birthday="";
	$email="";
	$password="";
	$confirmPassword="";
	$errors=array();
	if(!$connection){
		
		 die("sever can not connected".mysqli_error());
	}
	else{

		$select=mysqli_select_db($connection,'onlineblood') or die ("Database not conected");

		if(isset($_POST['submit'])){
	$name=mysqli_real_escape_string($connection,$_POST['name']);
	$lastname=mysqli_real_escape_string($connection,$_POST['lastname']);
	
	$birthday=mysqli_real_escape_string($connection,$_POST['birthday']);
	$email=mysqli_real_escape_string($connection,$_POST['email']);
	$password=mysqli_real_escape_string($connection,$_POST['password']);
	$confirmPassword=mysqli_real_escape_string($connection,$_POST['confirmPassword']);
	

	if(empty($name)){
		array_push($errors,"User Name is required.");
	}
	if (empty($lastname)) {
		array_push($errors,"Last name is required");
	}
	
	if (empty($birthday)) {
		array_push($errors,"Birthday is required");
	}
	if (empty($email)) {
	array_push($errors,"E mail is required");}
	if(empty($password)){
	array_push($errors,"Password is required");}
	if (empty($confirmPassword)) {
		array_push($errors,"Confirm password is required");
	}
	if (count($errors)==0) {
		$password=md5($password);
		$sql="INSERT INTO register(name,lastname,birthday,email,password,confirmPassword)VALUES('$name','$lastname','$birthday','$email','$password','$confirmPassword')";
		mysqli_query($connection,$sql);
		$_SESSION['name']=$name;
		$_SESSION['success']="Your Registration is successfully!";
		header('location: userInterface.php');
		
	}
	
	
	} }

		if (isset($_POST['login'])) {
			$name=mysqli_real_escape_string($connection,$_POST['user']);
			$password=mysqli_real_escape_string($connection,$_POST['password']);

			if (empty($name)) {
				array_push($errors,"User Name is required");
			}
			if (empty($password)) {
				array_push($errors,"Password is required");
			}
			if (count(errors)==0) {
				$password=md5(password);
				$query="SELECT* FROM register WHERE name='$name' AND password='$password'";
				$result=mysqli_query($connection,$query);
				if(mysqli_num_row($result)==0){
					$_SESSION['name']=$name;
					$_SESSION['success']="Your Login successfully!";
					header('location: userInterface.php');
				}
				else{
					array_push($errors,"Please enter the correct details");
					header('location:registration.php');
				}
			}
		}

		/*if (isset($_GET['logout'])) {
			$name=mysqli_real_escape_string($connection,$_POST['name']);
			$_SESSION['name']=$name;
			session_destroy();
			unset($_SESSION['name']);
			header('location: Home.php');
		}*/

mysqli_close($connection);
	?>