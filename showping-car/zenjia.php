<?php
	$username = $_GET["username"];//用户名
	$phonename = $_GET["phonename"];//手机名
	
	
	$db = mysqli_connect("localhost","root","","nubia");
	mysqli_query($db,"set names utf-8");
	mysqli_select_db($db,'usercar');
	$setsql = "select * from usercar where username= '$username' and phonename='$phonename' ";
	$resultset = mysqli_query($db,$setsql);
	$arrset = mysqli_fetch_array($resultset);
	$newnumber = $arrset[3]+1;
	$upgoods = "update usercar set number='$newnumber'  where username='$username' and phonename='$phonename' ";
	$row = mysqli_query($db,$upgoods);
	echo "$newnumber";
?>