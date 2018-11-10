<?php
header('Content-type: application/json');

session_start();
require('../connect.php');
require('../Mobile_Detect.php');
$user_logged_name = null;
$user_logged_pass = null;

	if(isset($_SESSION['name']) && isset($_SESSION['pass'])){
		$name = $_SESSION['name'];
		$password = $_SESSION['pass'];
		$query_login = mysqli_query($con, "SELECT * FROM users WHERE name='$name' AND pass='$password'");
		if(mysqli_num_rows($query_login) == 0){
			unset($_SESSION['name']);
			unset($_SESSION['pass']);
		}else{
			$boolean = true;
			$user_logged_name = $_SESSION['name'];
			$user_logged_pass = $_SESSION['pass'];
			$query = mysqli_query($con, "SELECT * FROM website WHERE chawara='$user_logged_name'");
			$result = mysqli_fetch_array($query);
			
			$query = mysqli_query($con, "SELECT * FROM users WHERE name='$user_logged_name'");
			$userinfo = mysqli_fetch_array($query);
			
		}
	}
if(isset($_POST['feed'])){
		$feed = $_POST['feed'];
		$to = $_POST['to'];
		$chawara = $_POST['by'];
        
        
		$feed = strip_tags($feed);
		$to = strip_tags($to);
		$chawara = strip_tags($chawara);
        
		$feed = stripslashes($feed);
		$to = stripslashes($to);
		$chawara = stripslashes($chawara);
        
		$feed = mysqli_real_escape_string($con, $feed);	
		$to = mysqli_real_escape_string($con, $to);	
		$chawara = mysqli_real_escape_string($con, $chawara);
        
			if($feed != null || $to != null){
				$query = mysqli_query($con, "INSERT INTO feed (chawara, chata, feedd) VALUES ('$chawara', '$to', '$feed')");
						$response = array('return' => 'done');
						echo json_encode($response);
					
			
			}
}
?>
				