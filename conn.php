<?php
session_start();
$con = mysql_connect("localhost","ahmadsha_shah","waqas1234");
if(!$con)
{
	die("Connection Error");
	
}
mysql_select_db("ahmadsha_petrolfinder",$con);  
?>