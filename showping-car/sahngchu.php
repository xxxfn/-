<?php
	$username = $_GET["username"];
	
	$phonename =$_GET["phonename"];
	
	$db = mysqli_connect("localhost","root","","nubia");
	
	mysqli_query($db,"set names utf-8");
	
	mysqli_select_db($db,'usercar');
	
	$sql = "delete from usercar where username='$username' and phonename='$phonename'  ";
	
	$result = mysqli_query($db,$sql);
	
	echo $result;
?>