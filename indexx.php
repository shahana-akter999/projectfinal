<?php
session_start();
if (!isset($_SESSION['username'])) {
	header("location:login.php");
}else{


	?>

	<!--
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="header">
		<h2>Register</h2>
	</div>
	<form method="POST" action="insert.php">
		<!--display validation errors here--
		
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
	</html>-->
<?php } ?>

