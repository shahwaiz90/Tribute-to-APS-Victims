<?php
session_start();
$USERNAME = "";
$PASSWORD = "";
$DBNAME = "";
$con = mysql_connect("localhost",$USERNAME,$PASSWORD );
if(!$con)
{
	die("Connection Error");
	
}
mysql_select_db($DBNAME,$con);  
?>
