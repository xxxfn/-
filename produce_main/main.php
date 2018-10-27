<?php
	$phonename = $_POST["uname"];//手机名
	
	$db = mysqli_connect("localhost","root","","nubia");
	mysqli_query($db,"set names utf-8");
	mysqli_select_db($db,'mian');
	
	$sql = "select * from mian where phonename='$phonename' ";
	$result = mysqli_query($db,$sql);
	$arr = mysqli_fetch_array($result);
	echo json_encode($arr);
	
	
	/*
	 * 增: sql="insert into student (username,phonename,numaber) valus('$username','$phonmename','4')";
	 * 删: sql="delete from student where username = '$username'"; 
	 * 改: sql="update student username =$username where $username='刘德华'ande $phonename='z17'"
	 * 查: sql="select $username,$phonename from username "同时查询几个数据
	 * */
	
	
?>