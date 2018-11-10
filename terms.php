<?php
session_start();
require('connect.php');
require('Mobile_Detect.php');
$boolean = false;
$error = false;
$blocked = false;
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

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>The Lolkhan Net</title>
		<link rel="stylesheet" href="dist/css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="dist/css/bootstrap-theme.css" type="text/css" />
		<link rel="stylesheet" href="dist/css/custom.css" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		<script src="/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
	<br>
		<div class="col-md-7" style="float: none; margin: 0 auto;">
<div class="customWell">
<legend>Terms and Conditions to use LolKhan Net</legend>
  
  <ol>
<li>Don't hijack accounts of students that are in the school. <b>THIS RULE IS A MUST TO FOLLOW. VIOLATING THIS RULE WOULD RESULT IN 5 DAY BAN PER ACCOUNT HIJACKED OR EVEN SOMETIMES LIFETIME BAN.</b></li><br><li>Always try not to change the passwords or email of the hijacked account. This rule is optional but recommended. In the end why harm someone?</li>
<br>
<li>Don't hijack accounts if you think you will get into a huge trouble because of it.</li><br><li>Maintain 100% secrecy all the time. Don't introduce LolKhan Net to someone who is not a member.</li></ol>
</div>	</div>
<br>
</div>
</div>
</body>
</html>					