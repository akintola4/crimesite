<?php

include_once"connection.php";


function secure($val){
$val = trim($val);
$val = htmlspecialchars($val);
$val = stripslashes($val);
$val = strip_tags($val);

return $val;
}

function encode_password($passval){
	$passval = crypt($passval, PASS_SALT);
	return $passval;
}

function check_email($mailval){
	if(filter_var($mailval, FILTER_VALIDATE_EMAIL)){
		return $mailval;
	}
}

function register_user($uid, $fname, $lname, $username, $email, $gender, $password, $conn){
$membertable = USERS_TABLE;
echo $membertable;
$query = $conn->query("INSERT INTO `$membertable` (`uid`, `first_name`, `last_name`, `username`, `email`, `gender`, `password`) VALUES ('$uid', '$fname', '$lname', '$username', '$email', '$gender', '$password') ");

if($query == true){
	echo "Registration Successful";
	exit();
	die();
}else{
	echo"Error Occurred, Please Try Again";
}
	
}





?>