<?php
	
	
	//connect to the database
	$link=mysqli_connect("localhost","root","",);
	mysqli_select_db($link,"check");

	 if (isset($_POST['register'])) {
	 	  
	 	  if (!empty($_POST['username']) && !empty($_POST['email'])  && !empty($_POST['password'])) {
	 	  	
	 	  	$username=$_POST['username'] ;
	 	  	$email=$_POST['email'] ;
	 	  	
	 	  	$password=$_POST['password'];

	 	  	$query= "insert into final(username,email,password) values('$username' , '$email', '$password')";

	 	  	$run = mysqli_query($link,$query) or die (mysqli_error($link));

	 	  	if ($run) {
	 	  		echo "from submitted successfully";
	 	  	}
	 	  	else{
	 	  		echo "form not submitted";
	 	  	}
	 	  }
	 	  else{
	 	  	echo "all fields required";
	 	  }
	 }
	


?>