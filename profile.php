<?php
session_start();
require('connect.php');
require('Mobile_Detect.php');
$error = false;
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


if(isset($_GET['name'])){
	$name = $_GET['name'];	
	$name = strip_tags($name);
	$name = stripslashes($name);
	$name = mysqli_real_escape_string($con, $name);
	$accounts = 0;
	$query = mysqli_query($con, "SELECT * FROM users WHERE name='$name'");
	$result = mysqli_fetch_array($query);
	
	$query = mysqli_query($con, "SELECT * FROM accounts WHERE byyy='$name'");
		while($row = mysqli_fetch_array($query)){
			$accounts++;
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
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		
		<script>
			$(document).ready(function(){
			
				$("#addfeed").click(function(){
					if($("#feed").val() == ""){
						return false;
					}else{
					$("#loading").css("display", "block");
						$.post( "/actions/addfeed.php",{to: '<?php echo $_GET['name']; ?>', feed: $("#feed").val(), by: '<?php echo $user_logged_name; ?>'}, function(data){
								console.log(data);
                                lol = data;
								if(data.return == "done"){
									$.get('/actions/getfeed.php', {name: '<?php echo $_GET['name']; ?>'}, function(data){
										$("#feeds").html(data);
										$("#loading").css("display", "none");
									});
								}
							
						}, "json");
					}
				});
			});
		</script>
	</head>
<body>

<?php $detect = new Mobile_Detect; ?>
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
	<div class="col-md-7" style="float: none; margin: 0 auto;">
		<div class="customWell" style="margin: 15px;">
        <div id="loading" style="display: none;">
    			<center>
					<h1><i class="fa fa-circle-o-notch fa-spin"></i></h1>
					<p>Completing your request...</p>
                    <hr>
				</center>
			</div>

			<center>
			<img src="<?php echo $result['profile']; ?>" class="img-thumbnail">
			<h1 style="margin-top:0px; margin-bottom: 0px;"><?php echo $result['name']; ?></h1>
			<span class="label label-inverse" style="background: #333333;"><?php echo $accounts; ?> IDs Hijacked</span> <span class="label label-inverse" style="background: #333333;">Link: <a href="<?php echo $result['website']; ?>"><?php echo $result['website']; ?></a></span> 
			<hr>
                        </center>
<div class="form-inline">
<center>
<?php
$feedinput = "Write on $name profile";
if($name == $user_logged_name){
    $feedinput = "Write on your profile.";
}
?>
    <input type="text" class="form-control" id="feed" placeholder="<?php echo $feedinput; ?>" style="width: 80%; display: inline-block;">
  <button class="btn btn-default" id="addfeed">Post</button>
  </center>
</div >
	
	 <?php 
	 $dp_style = "display: inline-block; width: 10%; vertical-align: top;";
	 if($detect->isMobile()){ 
		$dp_style = "display: inline-block; width: 20%; vertical-align: top;";
	 }
	 ?>
	<div class="well" style="background: white; margin: 15px;" id="feeds">
		<?php

			$query = mysqli_query($con, "SELECT * FROM feed  WHERE chawara='$name' OR chata='$name' OR chawara='$name' AND chata='$name' ORDER BY id DESC");
			while($row = mysqli_fetch_assoc($query)){	
		?>
			<div class="customWell" style="margin: 8px;">
				<?php
$to = null;
					$echoo = null;
				    if($row['chawara'] == $row['chata']){
                        $echoo = $name;

                    }else if($row['chata'] == $name){
                        $echoo = $row['chawara'];
                           $lol = $row['chata'];
$to = "<b> -> $lol </b>";
                    }else if($row['chawara'] == $name){
                        $echoo = $name;
                        $lol = $row['chata'];
$to = "<b> -> $lol </b>";
                    }
					$queryy = mysqli_query($con, "SELECT * FROM users WHERE name='$echoo'");
					$postuser = mysqli_fetch_array($queryy);
				?>
				<img src="<?php echo $postuser['profile']; ?>" class="img-thumbnail" style="<?php echo $dp_style; ?>">
				<p style="display: inline-block; margin-top: 10px;"><b><a href="profile.php?name=<?php echo $echoo; ?>"><?php echo $echoo; ?></a></b> <a href="profile.php?name=<?php echo $lol; ?>"><?php echo $to; ?></a><br> <?php echo $row['feedd']; ?></p>
			</div>
		<?php } ?>
	</div>
			</div>


	</div>
</div>
</body>
</html>		