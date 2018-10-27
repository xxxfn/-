<?php
	$username = $_GET["username"];
	
	$db = mysqli_connect("localhost","root","","nubia");
	
	mysqli_query($db,"set names utf-8");
	
	mysqli_select_db($db,'usercar');
	
	$sql = "select * from usercar where username='$username' ";
	
	$result = mysqli_query($db,$sql);
	
//	/*$arr = mysqli_fetch_array($result);
//	echo json_encode($arr);*/
	
	while($arr = mysqli_fetch_array($result)){//循环把查询的几个结果都保存输出
		$srr[] = $arr;
	}
	$json = json_encode($srr);
	print_r($json);
	
?>