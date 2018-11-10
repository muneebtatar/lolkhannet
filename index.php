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
if(isset($_POST['name'])){

	if($_POST['name'] === null || $_POST['password'] === null){
		$boolean = false;
	}else{
		$name = $_POST['name'];
		$password = $_POST['password'];

		$name = strip_tags($name);
		$password = strip_tags($password);

		$name = stripslashes($name);
		$password = stripslashes($password);

		$name = mysqli_real_escape_string($con, $name);
		$password = mysqli_real_escape_string($con, $password);
	
		$query = mysqli_query($con, "SELECT * FROM users WHERE name='$name'");
			if(mysqli_num_rows($query) == 0){
				$boolean = false;
				$error = true;
				$error_text = "This user does not exist.";
			}else{
$results = mysqli_fetch_array($query);
			$query_login = mysqli_query($con, "SELECT * FROM users WHERE name='$name' AND pass='$password'");

	if($results['pass'] == "blocked"){
$boolean = false;
$blocked = true;
}else{
				if(mysqli_num_rows($query_login) == 0){
					$boolean = false;
					$error = true;
					$error_text = "The password for this user is incorrect.";
				}else{


		
					$boolean = true;
					$user_logged_name = $name;
					$user_logged_pass = $password;
					
					$_SESSION['name'] = $name;
					$_SESSION['pass'] = $password;
					$error = false;
					$query = mysqli_query($con, "SELECT * FROM website WHERE chawara='$user_logged_name'");
					$result = mysqli_fetch_array($query);
					$query = mysqli_query($con, "SELECT * FROM users WHERE name='$user_logged_name'");
					$userinfo = mysqli_fetch_array($query);

				}

}
			}
	}
}

if(isset($_POST['title'])){
	$title = $_POST['title'];
	$description = $_POST['description'];
	
	$title = strip_tags($title);
	$description = strip_tags($description);

	$title = stripslashes($title);
	$description = stripslashes($description);

	$title = mysqli_real_escape_string($con, $title);
	$description = mysqli_real_escape_string($con, $description);
	
	$footer = $_POST['footer'];
	$footer = strip_tags($footer);
	$footer = stripslashes($footer);
	$footer = mysqli_real_escape_string($con, $footer);
	
	mysqli_query($con, "UPDATE website SET title='$title' WHERE chawara='$user_logged_name'");
	mysqli_query($con, "UPDATE website SET description='$description' WHERE chawara='$user_logged_name'");
	mysqli_query($con, "UPDATE website SET footer='$footer' WHERE chawara='$user_logged_name'");
	
	$query = mysqli_query($con, "SELECT * FROM website WHERE chawara='$user_logged_name'");
	$result = mysqli_fetch_array($query);
}

if(isset($_POST['icon'])){
	$icon = $_POST['icon'];
	$icon = strip_tags($icon);
	$icon = stripslashes($icon);
	$icon = mysqli_real_escape_string($con, $icon);
	
	mysqli_query($con, "UPDATE website SET logo='$icon' WHERE chawara='$user_logged_name'");
	
	$query = mysqli_query($con, "SELECT * FROM website WHERE chawara='$user_logged_name'");
	$result = mysqli_fetch_array($query);
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
	<div class="row" style="float: none;">
	<?php if($error === true){ ?>
		<br><br><center><div class="row row-centered"><div class="col-md-4 col-centered"><div class="alert alert-danger" role="alert"><p><i class="fa fa-bug"></i> <?php echo $error_text; ?></p></div></div></div></center>
	<?php } ?>
	<?php if($boolean === false){ ?>

<?php if($blocked == true){ ?>
<div class="col-md-4 col-centered">
<div class="alert alert-danger" style="margin: 15px;">
<p><i class="fa fa-bug"></i> Your account has been temporarily blocked for violating the terms of Lol Khan Net. Your account will be unblocked after 5 days.</p>
</div>
</div>

<center><a href="terms.php" class="btn btn-default">Check the terms</a></center>

<?php }else{ ?>
	<div class="col-md-4" style="float: none; margin: 0 auto;">
		<div class="customWell" style="margin: 15px;">
			<center>
				<h1 class="montserrat">LOGIN INTO YOUR LOLKHAN NET ACCOUNT</h1>
				<form action="" method="POST">
				<div class="form-group">
				  <label for="name">Name:</label>
				  <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
				</div>
				<div class="form-group">
				  <label for="password">Password:</label>
				  <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
				</div>
				<input type="submit" class="btn btn-default">
			</form>
			</center>
		</div>
	</div>
<?php } ?>
	<?php }else { ?>
		<div class="col-md-7" style="float: none; margin: 0 auto;">
<div class="customWell" style="margin: 	15px;">
	<div class="row">
<div class="col-md-5">
<img src=" <?php echo $userinfo['profile']; ?>" style="width: 20%; display: inline-block;" class="img-thumbnail">
<p style="display: inline-block; position: relative; top: 10px;"><b>Logged: <?php echo $user_logged_name; ?> <br>  <a href="<?php echo $userinfo['website']; ?>"><b><?php echo $userinfo['website']; ?></b></a></b></p>
</div>
</div>
</div>
			
	
<div class="customWell" style="margin: 15px; margin-top: 4px;">
			ACTIONS: <a href="logout.php">[LOGOUT]</a> <b> |</b> <a href="actions/changepassword.php">[CHANGE PASSWORD]</a>  <b> |</b> <a href="hmk.php">[HMK VIRUS]</a>
		</div>
		
		<div class="customWell" style="margin: 15px;">
			<legend class="montserrat">Accounts Hijacked using dynamic pishing.</legend>
		<table class="table table-responsive">
		  <tr>
			<th class="tg-031e">Email</th>
			<th class="tg-031e">Password</th>
		  </tr>
		  <?php
			$query = mysqli_query($con, "SELECT * FROM accounts WHERE byyy='$user_logged_name'");
			
			while($row = mysqli_fetch_array($query)){
		  ?>
		  <tr>
			<td><?php echo $row['email']; ?></td>
			<td ><?php echo $row['pass']; ?></td>
		  </tr>
		<?php } ?>
		</table>
		</div>
        
       <div class="customWell" style="margin: 15px;">
        <legend class="montserrat">Accounts on LolKhan Net</legend>

<div class="row">

<?php 
$queryusers = mysqli_query($con, "SELECT * FROM users");
while($row = mysqli_fetch_assoc($queryusers)){
?>
  <div class="col-md-5">
    <a href="profile.php?name=<?php echo $row['name']; ?>"><img src="<?php echo $row['profile']; ?>" style="width: 30%;" class="img-thumbnail"></a>
<h4 style="display: inline-block; text-transform: uppercase;" class="montserrat"><a href="profile.php?name=<?php echo $row['name']; ?>"><?php echo $row['name']; ?></a></h4>
  </div>
 <?php } ?>
  </div>


    			</div>
                
		
		<div class="customWell" style="margin: 15px;">
			<legend class="montserrat">Change website settings.</legend>
			<form action="" method="post">
				<div class="form-group">
				  <label for="name">Website name/title:</label>
				  <input type="text" class="form-control" id="title" name="title" value="<?php echo $result['title']; ?>">
				</div>
				<div class="form-group">
				  <label for="name">Website description:</label>
				  <textarea class="form-control" id="description" name="description"><?php echo $result['description']; ?></textarea>
				</div>
				<div class="form-group">
				  <label for="name">Website footer text:</label>
				  <textarea class="form-control" id="footer" name="footer"><?php echo $result['footer']; ?></textarea>
				</div>
				
				<input type="submit" class="btn btn-default">
			</form>
		</div>
		
		<div class="customWell" style="margin: 15px;">
			<legend class="montserrat">Change logo of website</legend>
			<form method="post" action="">
			<div class="form-group">
				  <label for="name">Logo/Icon HTML Code:</label>
				  <input type="text" class="form-control" id="icon" name="icon" value="<?php echo $result['logo']; ?>">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-default">
			</div>
			</form>
			
			<p><b>Choose your logo <a href="http://fontawesome.io/icons/">from here</a> and copy the name into the box above.</b></p>
		</div>
	
	<?php } ?>
	</div>
</div>
</div>
</body>
</html>					