<?php
	$username = "username";
	$password = "password";
	session_start();
	//connect to the database
	$link=mysqli_connect("localhost","root","",);
	mysqli_select_db($link,"check");
	
	if (isset($_POST['submit'])) {
 		$un=$_POST['username'];
 		$pw=$_POST['password'];
 	$query="SELECT * FROM admin WHERE username='$username' AND password='$password'"

 		.$run=mysqli_query($link,$query);
 		if (mysqli_num_rows($link,$run)==0) {
 			$_SESSION['username']=$username;
 			echo "<script>window.open('indexx.php','_self')</script>";
 		}
 		else{
 			echo "<script>window.alert('indexx.php','_self')</script>";
 		}
 	}


?>


<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="stylee.css">
	</head>
	<body>
		<div class="header">
		<h2>Register</h2>
	</div>
	<form method="POST" action="insert.php">
		<!--display validation errors here-->
		
	<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
			</div>

			<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" >
		</div>
		
		
		<div class="input-group">
			<label>password</label>
			<input type="password" name="password">
			
		</div>
			
			<div class="input-group">
				<button type="submit" name="register" class="btn">Register</button>

			</div>
			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>


		
	</form>






    </body>
	</html>