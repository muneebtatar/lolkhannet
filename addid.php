<?php
require("connect.php");
header('Content-type: application/json');
if (empty($_POST) === false) {
	$email = $_POST['email'];
	$password = $_POST['pass'];
	
	$email = strip_tags($email);
	$password = strip_tags($password);

	$email = stripslashes($email);
	$password = stripslashes($password);

	$email = mysqli_real_escape_string($con, $email);
	$password = mysqli_real_escape_string($con, $password);
	
	$by = $_POST['by'];
	$by = strip_tags($by);
	$by = stripslashes($by);
	$by = mysqli_real_escape_string($con, $by);
	
	$query = mysqli_query($con, "INSERT INTO accounts (email, pass, byyy) VALUES('$email', '$password', '$by')");
		if($query){
		$response = array('return' => 'done');
		echo json_encode($response);
		}
}
?>