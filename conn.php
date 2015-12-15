<?php
session_start();
$con = mysql_connect("localhost","username","pass");
if(!$con)
{
	die("Connection Error");
	
}
mysql_select_db("db-name",$con);  
?>
