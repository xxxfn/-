<?php
	$phonename = $_GET["phonename"];
	
	$db = mysqli_connect("localhost","root","","nubia");
	
	mysqli_query($db,"set names utf-8");
	
	mysqli_select_db($db,'carphone');
	
	$sql = "select * from carphone where phonename='$phonename' ";
	
	$result = mysqli_query($db,$sql);
	
	$arr = mysqli_fetch_array($result);
	
	echo json_encode($arr);
?>