<?php
header("Location: closed.html");

$mysql_host = "sql305.mzzhost.com";
$mysql_database = "mzzho_15776618_lolkhaner";
$mysql_user = "mzzho_15776618";
$mysql_password = "lolkhan1221";

$con = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);

if (mysqli_connect_errno($con)){
	echo "Failed to connect to mysql server: " . mysqli_connect_error();
	exit();
}
?>