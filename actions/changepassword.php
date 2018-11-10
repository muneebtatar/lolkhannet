<?php
session_start();
require('../connect.php');
require('../Mobile_Detect.php');
$error = false;
$error_text = null;
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
if(isset($_POST['newPass'])){
		$newPass = $_POST['newPass'];
		$oldPass = $_POST['oldPaass'];
		
		$newPass = strip_tags($newPass);
		$oldPass = strip_tags($oldPass);
		
		$newPass = stripslashes($newPass);
		$oldPass = stripslashes($oldPass);
		
		$newPass = mysqli_real_escape_string($con, $newPass);	
		$oldPass = mysqli_real_escape_string($con, $oldPass);	

			if($newPass != null || $oldPass != null){
				$query = mysqli_query($con, "SELECT * FROM users WHERE name='$user_logged_name'");
				$userinfo = mysqli_fetch_array($query);
echo $_POST['oldPaass'];
					if($oldPass == $userinfo['pass']){
						$query = mysqli_query($con, "UPDATE users SET pass='$newPass' WHERE name='$user_logged_name'");
							if($query){
								header("Location: ../index.php");
							}else{
								$error = true;
								$error_text = "Type in your correct old password.";
							}
					}else{
						$error = true;
						$error_text = "Type in your correct old password.";
					}
			}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>The Lolkhan Net</title>
		<link rel="stylesheet" href="../dist/css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="../dist/css/bootstrap-theme.css" type="text/css" />
		<link rel="stylesheet" href="../dist/css/custom.css" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		<script src="../js/bootstrap.min.js"></script>
		
	</head>
<body>
<?php
$detect = new Mobile_Detect;
?>
	<center class="head"  <?php if($detect->isMobile()){ ?> style="padding: 5px;"  <?php } ?>>
             <?php if($detect->isMobile()){ ?>
                     <img src="https://mylulzz.files.wordpress.com/2013/12/aca.png" style="width: 40%;">
              <?php }else{ ?>
                   <img src="https://mylulzz.files.wordpress.com/2013/12/aca.png" style="width: 10%;">
              <?php } ?>
	</center>
  
  <div class="content"></div>
   <?php if($detect->isMobile()){  }else{ ?>
  <center><h3 class="banner">The Lolkhan Net</h3></center>

<?php } ?>
	<div class="row" style="float: none;">
<div class="col-md-8" style="float: none; margin: 0 auto;">
<?php if($error === true){ ?>
		<center><div class="row row-centered"><div class="col-md-4 col-centered"><div class="alert alert-danger" role="alert"><p><i class="fa fa-bug"></i> <?php echo $error_text; ?></p></div></div></div></center>
	<?php } ?>
</div>
	<div class="col-md-4" style="float: none; margin: 0 auto;">
		<div class="customWell" style="margin: 15px;">
			<center>
				<h1 class="montserrat">CHANGE YOUR ACCOUNT PASSWORD</h1>
				<form action="" method="POST">
				<div class="form-group">
				  <label for="oldpass">Old Password:</label>
				  <input type="password" class="form-control" id="oldPaass" name="oldPaass" placeholder="Old Password">
				</div>
				<div class="form-group">
				  <label for="newPass">New Password:</label>
				  <input type="password" class="form-control" id="newPass" name="newPass" placeholder="New Password">
				</div>
				<input type="submit" class="btn btn-default">
			</form>
			</center>
		</div>
	</div>
	
</div>
</body>
</html>					