<?php
//Author Ahmad Shahwaiz
//www.ahmadshahwaiz.com
 include "conn.php";
include('GIFEncoder.class.php'); 

if(isset($_POST["var1"]) && isset($_POST["var2"]) && isset($_POST["var3"]))
{

	////////////////User DP///////////////////////////////////////////////////////////
	$name					= 	$_POST['var1']; 
	$email					= 	$_POST['var2']; 
	$dp					= 	$_POST['var3'];   
	 
	$check = mysql_query("select * from tributors where email='".$email."' limit 1");
	$ch = mysql_num_rows($check);
	
	if($ch == 0){
		$insert = mysql_query("insert into tributors (name,email,dp) values ('".$name."', '".$email."','".$dp."')"); 
	       
	}
	$count = mysql_num_rows(mysql_query("select * from tributors"));  	
        echo $count;

	
} 	 
?>