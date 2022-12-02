<?php
$error[] = "";

if(isset($_SERVER["REQUEST_METHOD"]) == "POST" && isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["gender"]) && isset($_POST["password"]) && isset($_POST["submit"])){
	
	include_once "function.php"; 
	
	$uid = "";
	
	if(!empty($_POST["firstname"])){
		$fname = secure($_POST["firstname"]);
	}else{
		$error[] = "FirstName Is Empty";
	}
	
	if(!empty($_POST["lastname"])){
		$lname = secure($_POST["lastname"]);
		
	}else{
		$error[] = "LastName Is Empty";
	}
	
	if(!empty($_POST["username"])){
		$username = secure($_POST["username"]);
	}else{
		$error[] = "Username Is Empty";
	}
	
	if(!empty($_POST["email"])){
	$email = check_email($_POST["email"]);

	}else{
		$error[] = "Email Is Empty";
	}
	
	
	if(!empty($_POST["password"])){
		$password = encode_password($_POST["password"]);
		
	} else{
		$error[] = "Password Is Empty";
	}
	
	$gender = $_POST["gender"];
	
	
	
	if(!empty($error)){
		
	register_user($uid, $fname, $lname, $username, $email, $gender, $password, $conn);
	
	}else{
		echo"Error Occurred";
	}
	
	echo $error[0];
}else{
	echo"error occurred";
}




?>