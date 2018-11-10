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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
<script src="http://localhost/typed.js-master/js/typed.js"></script>

<script>
    $(function(){

        $("#typed").typed({
            strings: ["Welcome to the LolKhan Net Direct Hack Console.^2000" + "\n You will be able to use it by downloading it to your account from the Virus Store." + "And then deletes them.<br>" + "Try it out!"],
            typeSpeed: 20,
            backDelay: 500,
            loop: false,
            contentType: 'text', // or text
            // defaults to false for infinite loop
            loopCount: false,
        });


    });

</script>
		<style>
.text-editor-wrap {
  display: block;
  margin: auto;
  width: 100%;
  border-radius: 10px;
  box-shadow: rgba(0, 0, 0, 0.8) 0px 20px 70px;
  clear: both;
  overflow: hidden;
  -webkit-transition: all 0.5s ease-out;
  -moz-transition: all 0.5s ease-out;
  -ms-transition: all 0.5s ease-out;
  -o-transition: all 0.5s ease-out;
  transition: all 0.5s ease-out; }

.title-bar {
  padding: 5px 0;
  font-family: "Lucida Grande", sans-serif;
  font-size: 14px;
  text-align: center;
  text-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px;
  background-color: #f8f8f8;
  background-image: -webkit-linear-gradient(top, #e8e8e8, #bcbbbc);
  background-image: -moz-linear-gradient(top, #e8e8e8, #bcbbbc);
  background-image: linear-gradient(top, #e8e8e8, #bcbbbc);
  box-shadow: inset rgba(255, 255, 255, 0.7) 0px 1px 1px;
  border-bottom: #6a6a6a 1px solid; }

.text-body {
  height: auto;
  background-color: rgba(0, 0, 0, 0.85);
  padding: 10px;
  color: #f0f0f0;
  text-shadow: #000 0px 1px 0px;
  font-size: 14px;
  line-height: 1.40em;
  font-weight: 500;
  text-align: left;
  overflow: hidden;
  -webkit-transition: all 0.5s ease-out;
  -moz-transition: all 0.5s ease-out;
  -ms-transition: all 0.5s ease-out;
  -o-transition: all 0.5s ease-out;
  transition: all 0.5s ease-out; }

.typed-cursor{
    opacity: 1;
    -webkit-animation: blink 0.7s infinite;
    -moz-animation: blink 0.7s infinite;
    animation: blink 0.7s infinite;
}
@keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-webkit-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-moz-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
</style>
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
		<div class="text-editor-wrap">
			<div class="title-bar"><span class="title">typed.js &mdash; bash &mdash; 80x<span class="terminal-height">25</span></span></div>
			<div class="text-body">
				$ <span id="typed"></span>
			</div>
		</div>
	</div>
	
</div>
</body>
</html>					