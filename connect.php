<?php
$hostname = "br-cdbr-azure-south-a.cloudapp.net";
$username = "bef537a724e3fe";
$password = "c462fd44";
$database_name = "datawebapp";

$conn = mysql_connect($hostname, $username, $password)
		or die ("Error menghubungkan ke host database");
$db = mysql_select_db($database_name)
	or die ("Error menghubungkan ke database");
?>