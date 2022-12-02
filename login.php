<?php
$nameerror = $passerror = "";

if(isset($_SERVER["REQUEST_METHOD"]) == "POST" && isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["submit"])){
	
	include_once "function.php";
	
	$username = secure($_POST["username"]);
	$password = $_POST["password"];
	
	
	
}

?>


<form action="<?php echo htmlentities($_SERVER["PHP_SELF"]);  ?>" method="POST">

<input type="text" placeholder="Enter Name..."/> <?=$nameerror?>
<input type="text" placeholder="Enter Password..."/> <?=$passerror?>

<input type="submit">



</form>